<?php
class Updata_model extends CI_Model {

    public function __construct()
    {
       
    }
    
    public function handle()
    {
        $flag = 0;
        $num=0;    //用来记录目录下的文件个数
        $dirname='D:\nginx\github\pvuvshow\log'; //要遍历的目录名字
        //$dirname='/mnt/weianying/log'; //要
        $dir_handle=opendir($dirname);
        while($file=readdir($dir_handle))
        {
            if($file!="."&&$file!="..")
            {
                $dirFile=$dirname."/".$file;
                $mac = $file[9].$file[10].$file[11].$file[12].$file[13];
                $time = $file[19].$file[20].$file[21].$file[22].$file[23];
                $sql_select = "SELECT * from `pvuv-data` WHERE mac='{$mac}' AND time='{$time}'";
                if($this->db->query($sql_select)->result())
                {
                    //unlink($dirFile);
                    continue;
                    return 0;
                }
                else
                {
                    $file_contents_array = file($dirFile);
                    //$file_contents_array = explode('\n',$file_contents);
                    $uv_total = $file_contents_array[2] + $file_contents_array[3] +$file_contents_array[4];
                    $sql_insert = "INSERT INTO `pvuv-data` (mac,time,pv,download_app_times,uv,uv_android,uv_ios,uv_windows,uv_others) values ('{$mac}','{$time}','{$file_contents_array[0]}','{$file_contents_array[1]}','{$uv_total}','{$file_contents_array[2]}','{$file_contents_array[3]}','{$file_contents_array[4]}','0')";
                   
                    $query = $this->db->query($sql_insert);
                    if(!$query)
                    {
                        $flag = 1;
                    }
                   // unlink($dirFile);
                }
            }
        }
        closedir($dir_handle);
        return $flag;
    }
}
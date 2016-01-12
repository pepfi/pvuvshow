<?php
class Pvuv_model extends CI_Model {

    public function __construct()
    {
       
    }
    
//    public function get_data($time_value,$mac)
//    {
////        $filepath = getcwd().'\log\nginx_';
////        $filepath .= "$mac";
////        $filepath .= '_';
////        $filepath .= "$time_value";
////        $filepath .= '.pvuv';
////        if(file_exists($filepath))
////        {
//        $file_contents_array = array();
////            $str = "hello world";
////            $file_contents = file_get_contents($filepath);
//        $file_contents_array = explode(',',$file_contents);
////            $uv = 
//        $tablename = 'pvuv'."{$mac}";
//        $sql = "INSERT INTO {$tablename} (mac,time,pv,download,uv,android,ios,windows,unknown,others) values ({$mac},{$time_value},{$file_contents[0]},{$file_contents[1]},{$uv},{$file_contents[2]},{$file_contents[3]},{$file_contents[4]})";
//        //$query = $this->db->query($sql);
//        //$sql = "SELECT * FROM `pvuv_00-00` WHERE time='{$time_value}';";
//        $result = $this->db->query($sql)->result_array();
//        //return $result;
//    }
    public function get_data_mac0000($time_value)
    {
        $sql = "SELECT * FROM `pvuv_00-00` WHERE time='{$time_value}';";
        $result = $this->db->query($sql)->result_array();
        return $result;
    }
    public function get_data_mac0020($time_value)
    {
        $sql = "SELECT * FROM `pvuv_00-20` WHERE time='{$time_value}';";
        $result = $this->db->query($sql)->result_array();
        return $result;
    }
    public function get_data_mac0040($time_value)
    {
        $sql = "SELECT * FROM `pvuv_00-40` WHERE time='{$time_value}';";
        $result = $this->db->query($sql)->result_array();
        return $result;
    }
    public function get_data_mac0060($time_value)
    {
        $sql = "SELECT * FROM `pvuv_00-60` WHERE time='{$time_value}';";
        $result = $this->db->query($sql)->result_array();
        return $result;
    }
    public function get_data_mac0080($time_value)
    {
        $sql = "SELECT * FROM `pvuv_00-80` WHERE time='{$time_value}';";
        $result = $this->db->query($sql)->result_array();
        return $result;
    }
    public function get_data_mac0100($time_value)
    {
        $sql = "SELECT * FROM `pvuv_01-00` WHERE time='{$time_value}';";
        $result = $this->db->query($sql)->result_array();
        return $result;
    }
    public function get_data_mac00A0($time_value)
    {
        $sql = "SELECT * FROM `pvuv_00-A0` WHERE time='{$time_value}';";
        $result = $this->db->query($sql)->result_array();
        return $result;
    }
    public function get_data_mac00C0($time_value)
    {
        $sql = "SELECT * FROM `pvuv_00-C0` WHERE time='{$time_value}';";
        $result = $this->db->query($sql)->result_array();
        return $result;
    }
    public function get_data_mac00E0($time_value)
    {
        $sql = "SELECT * FROM `pvuv_00-E0` WHERE time='{$time_value}';";
        $result = $this->db->query($sql)->result_array();
        return $result;
    }
    public function get_data_mac0120($time_value)
    {
        $sql = "SELECT * FROM `pvuv_01-20` WHERE time='{$time_value}';";
        $result = $this->db->query($sql)->result_array();
        return $result;
    }
}
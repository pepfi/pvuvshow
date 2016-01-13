<?php
class Pvuv_model extends CI_Model {
    public function __construct(){
       parent::__construct();
    }
    
    public function pvuv_data($time){
        if($time){
            $sql = "SELECT * FROM `pvuv-data` where time='{$time}'";
        }else{
             $sql = "SELECT * FROM `pvuv-data` order by time desc";           
        }
        $result = $this->db->query($sql)->result_array();
        
        return $result;
    }
}
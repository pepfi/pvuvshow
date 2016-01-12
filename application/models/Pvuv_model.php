<?php
class Pvuv_model extends CI_Model {
    public function __construct(){
       parent::__construct();
    }
    
    public function pvuv_data($time){       
        $sql = "SELECT * FROM `pvuv-data` where time='{$time}'";
        $result = $this->db->query($sql)->result_array();
        
        return $result;
    }
}
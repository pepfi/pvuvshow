<?php
class Pvuv_model extends CI_Model {
    public function __construct(){
       parent::__construct();
    }
    
    public function totalPvUv(){
        $sql = "select pv,uv from `pvuv-data`";
        
        return $this->db->query($sql)->result_array();
    }
    public function todayPvUv(){
        date_default_timezone_set('PRC'); 
        $date = date("y-m-d");
        $sql = "select * from `pvuv-data` where time = '{$date}'";
        
        return $this->db->query($sql)->result_array();
    }
    public function yesterdayPvUv(){
        date_default_timezone_set('PRC'); 
        $date = date("Y-m-d",strtotime("-1 day"));
        $sql = "select * from `pvuv-data` where time = '{$date}'";
        
        return $this->db->query($sql)->result_array();
    }
    public function detail(){
        $sql = "SELECT * FROM `pvuv-data` order by time desc";           
        $result = $this->db->query($sql)->result_array();
        
        return $result;
    }
    
}
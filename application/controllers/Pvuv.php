<?php
class Pvuv extends CI_Controller {
    public function __construct(){
        parent::__construct(); 
        $this->load->model('pvuv_model');
        $this->load->helper('url');
    }
    
    public function index(){
        $data['totalPvUv'] = $this->pvuv_model->totalPvUv();
        $data['totalpv'] = 0;$data['totaluv'] = 0;
        foreach($data['totalPvUv'] as $num1){
            $data['totalpv'] = $num1['pv'] + $data['totalpv'];
            $data['totaluv'] = $num1['uv'] + $data['totaluv'];
        }
        
        $data['todayPvUv'] = $this->pvuv_model->todayPvUv();
        $data['todaypv'] = 0;$data['todayuv'] = 0;
        foreach($data['todayPvUv'] as $num2){
            $data['todaypv'] = $num2['pv'] + $data['todaypv'];
            $data['todayuv'] = $num2['uv'] + $data['todayuv'];
        }
        
        $data['yesterdayPvUv'] = $this->pvuv_model->yesterdayPvUv();
        $data['yesterdaypv'] = 0;$data['yesterdayuv'] = 0;
        foreach($data['yesterdayPvUv'] as $num3){
            $data['yesterdaypv'] = $num3['pv'] + $data['yesterdaypv'];
            $data['yesterdayuv'] = $num3['uv'] + $data['yesterdayuv'];
        }
        
        $data['detail'] = $this->pvuv_model->detail();
        
        $this->load->view('pvuv', $data);
    }
}
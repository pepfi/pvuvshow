<?php
class Pvuv extends CI_Controller {
    public function __construct(){
        parent::__construct(); 
        $this->load->model('pvuv_model');
        $this->load->helper('url');
    }
    
    public function index(){
        if($this->uri->segment(3) != ""){
            $time = $this->uri->segment(3);
        }else{
            date_default_timezone_set('PRC');
            $time = date('m-d');
        }
        $data['pvuv_data'] = $this->pvuv_model->pvuv_data($time); 

        $this->load->view('pvuv',$data);
    }
}
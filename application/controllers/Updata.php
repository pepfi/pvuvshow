<?php
class Updata extends CI_Controller {
    public function __construct()
    {
        parent::__construct(); 
        $this->load->model('updata_model');
    }
    
    public function index()
    {
        $flag = $this->updata_model->handle();
        echo $flag;
//        if($flag)
//        {
//            echo "导入失败";
//        }
//        else
//        {
//            echo "导入成功";
//        }
    }
}
<?php
class Pvuv extends CI_Controller {
    public function __construct()
    {
        parent::__construct(); 
        $this->load->model('pvuv_model');
    }
    
    public function index()
    {
        $yesterday_date = date('m-d',strtotime("-1 day"));
        $data['mac0000'] = $this->pvuv_model->get_data_mac0000($yesterday_date,"0000"); 
        $data['mac0020'] = $this->pvuv_model->get_data_mac0020($yesterday_date,"0020");
        $data['mac0040'] = $this->pvuv_model->get_data_mac0040($yesterday_date,"0040");
        $data['mac0060'] = $this->pvuv_model->get_data_mac0060($yesterday_date,"0060");
        $data['mac0080'] = $this->pvuv_model->get_data_mac0080($yesterday_date,"0080");
        $data['mac0100'] = $this->pvuv_model->get_data_mac0100($yesterday_date,"0100");
        $data['mac00A0'] = $this->pvuv_model->get_data_mac00A0($yesterday_date,"00A0");
        $data['mac00C0'] = $this->pvuv_model->get_data_mac00C0($yesterday_date,"00C0");
        $data['mac00E0'] = $this->pvuv_model->get_data_mac00E0($yesterday_date,"00E0");
        $data['mac0120'] = $this->pvuv_model->get_data_mac0120($yesterday_date,"0120");
//        $sql = $this->pvuv_model->get_data($yesterday_date,"0000");
//        echo $sql;
        $this->load->view('pvuv',$data);
    }
}
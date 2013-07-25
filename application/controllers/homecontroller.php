<?php


class HomeController extends CI_Controller {
	 public function __construct() {
        parent::__construct();
        $this->load->model('RetrieveAdDataModel');
        $rec=$this->RetrieveAdDataModel->retrieveLatestData();
        $this->session->set_userdata('LatestRec',$rec);
    }
    public function index(){
        $this->load->model('RetrieveAdDataModel');
        $rec=$this->RetrieveAdDataModel->retrieveAllData();
        $this->session->set_userdata('allRec',$rec);
        $data['main_content']='viewAllItems';
        $this->load->view('includes/template',$data);
    }
}

?>

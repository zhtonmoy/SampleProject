<?php


class search_controller extends CI_Controller {
    public function __construct() {
    parent::__construct();
	$this->load->model('RetrieveAdDataModel');
    $rec=$this->RetrieveAdDataModel->retrieveLatestData();
    $this->session->set_userdata('LatestRec',$rec);
    }
	public function index(){
    $data['main_content']='view_search_form';
    $this->load->view('includes/template',$data);
	}
	public function search_view(){
	$sd=$this->input->post('search_data');
	$this->load->model('search_model');
    $rec=$this->search_model->search_data($sd);
    $this->session->set_userdata('allRec',$rec);
    $data['main_content']='viewAllItems';
    $this->load->view('includes/template',$data);
	}
}

?>
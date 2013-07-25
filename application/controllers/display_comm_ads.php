<?php


class display_comm_ads extends CI_Controller {
    public function __construct() {
        parent::__construct();
		$this->load->model('RetrieveAdDataModel');
        $rec=$this->RetrieveAdDataModel->retrieveLatestData();
        $this->session->set_userdata('LatestRec',$rec);
    }
	public function view_ads(){
	$this->load->model('community_ad_upload_model');
    $rec=$this->community_ad_upload_model->retrieve_ad_data();
    $this->session->set_userdata('allRec',$rec);
    $data['main_content']='view_comm_items';
    $this->load->view('includes/template',$data);
	}
}

?>

<?php


class community_ad_controller extends CI_Controller {
     
	public function __construct() {
        parent::__construct();
		$this->load->model('RetrieveAdDataModel');
        $rec=$this->RetrieveAdDataModel->retrieveLatestData();
        $this->session->set_userdata('LatestRec',$rec);
        $this->is_loggedin();
    }
    public function is_loggedin(){
        $is_logged_in=  $this->session->userdata('is_loggedin');
        if(!isset($is_logged_in)||$is_logged_in!=TRUE){
            $this->session->set_userdata('login_ex',TRUE);
            redirect('LoginController');
            
        }
    }
	public function index(){
	$data['main_content']='community_view';
    $this->load->view('includes/template',$data);
	}
	public function put_event_ad(){
	$data['main_content']='community_event_ad_form';
    $this->load->view('includes/template',$data);
	}
	public function check_upload(){
	$this->form_validation->set_rules('eventName','eventName','trim|required');
        $this->form_validation->set_rules('venue','Venue','trim|required');
		$this->form_validation->set_rules('eventDetails','Event deatails','trim|required');
		$this->form_validation->set_rules('entryFee','Entry Fee','trim|required');
        $this->form_validation->set_rules('contact','Contact','trim|required|valid_email');
        //$this->form_validation->set_rules('userfile','Image Upload','trim|required');
        if($this->form_validation->run()==FALSE){
            $data['main_content']='community_event_ad_form';
            $this->load->view('includes/template',$data);
            }else{
            $this->load->model('community_ad_upload_model');
            $this->community_ad_upload_model->do_upload();
            $isupld=  $this->session->userdata('upl');
            if($isupld){
                $this->session->set_userdata('upl',FALSE);
                $this->session->set_userdata('upl_ano',TRUE);
                $data['main_content']='community_event_ad_form';
                $this->load->view('includes/template',$data);
            }
            else {
                $data['main_content']='community_event_ad_form';
                $this->load->view('includes/template',$data);
            }
            
        }
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
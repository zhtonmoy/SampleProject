<?php
class Site extends CI_Controller {
 
public function __construct() {
        parent::__construct();
		$this->load->model('RetrieveAdDataModel');
        $rec=$this->RetrieveAdDataModel->retrieveLatestData();
        $this->session->set_userdata('LatestRec',$rec);
        $this->is_loggedin();
    }
           
    public function members_area(){
        $data['main_content']='members_area';
        $this->load->view('includes/template',$data);
        
    }
    public function logout(){
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('is_loggedin');
        $this->session->sess_destroy();
        redirect('LoginController');
    }
    public function is_loggedin(){
        $is_logged_in=  $this->session->userdata('is_loggedin');
        if(!isset($is_logged_in)||$is_logged_in!=TRUE){
            //$data['main_content']='login_exp';
            //$this->load->view('includes/template',$data);
            //echo 'You are not logged in.';
            //echo anchor('LoginController','Login Now');
            $this->session->set_userdata('login_ex',TRUE);
            redirect('LoginController');
            
        }
    }
}

?>

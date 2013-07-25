<?php


class SubmitAdController extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->is_loggedin();
        $this->load->model('RetrieveAdDataModel');
        $rec=$this->RetrieveAdDataModel->retrieveLatestData();
        $this->session->set_userdata('LatestRec',$rec);
    }
    public function index(){
        $data['main_content']='ad_upload_form';
        $this->load->view('includes/template',$data);
        
    }
    public function is_loggedin(){
        $is_logged_in=  $this->session->userdata('is_loggedin');
        if(!isset($is_logged_in)||$is_logged_in!=TRUE){
            $this->session->set_userdata('login_ex',TRUE);
            redirect('LoginController');
            
        }
    }
    
     public function checkUpload(){
        $this->form_validation->set_rules('title','Title','trim|required');
        $this->form_validation->set_rules('description','Description','trim|required');
        $this->form_validation->set_rules('contact','Contact','trim|required|valid_email');
        //$this->form_validation->set_rules('userfile','Image Upload','trim|required');
        if($this->form_validation->run()==FALSE){
            $data['main_content']='ad_upload_form';
            $this->load->view('includes/template',$data);
            }else{
            $this->load->model('AdUploadModel');
            $this->AdUploadModel->do_upload();
            $isupld=  $this->session->userdata('upl');
            if($isupld){
                $this->session->set_userdata('upl',FALSE);
                $this->session->set_userdata('upl_ano',TRUE);
                //have to send email here with mod_code(set in session)
                $data['main_content']='ad_upload_form';
                $this->load->view('includes/template',$data);
            }
            else {
                $data['main_content']='ad_upload_form';
                $this->load->view('includes/template',$data);
            }
            
        }
        
    }
    public function checkEditedData(){
        $this->form_validation->set_rules('title','Title','trim|required');
        $this->form_validation->set_rules('description','Description','trim|required');
        $this->form_validation->set_rules('contact','Contact','trim|required|valid_email');
        //$this->form_validation->set_rules('userfile','Image Upload','trim|required');
        if($this->form_validation->run()==FALSE){
            $data['main_content']='modFormWithData';
            $this->load->view('includes/template',$data);
            }else{
            $this->load->model('AdUploadModel');
            $this->AdUploadModel->edit_upload();
            $isupld=  $this->session->userdata('edit_suc');
            if($isupld){
                $data['main_content']='adModifyView';
                $this->load->view('includes/template',$data);
            }
            else {
                $data['main_content']='modFormWithData';
                $this->load->view('includes/template',$data);
            }
            
        }
        
    }
    public function modifyAdData(){
        $data['main_content']='adModifyView';
        $this->load->view('includes/template',$data);
    }
    public function checkModiCode(){
        $mod_code=$this->input->post('mod_code');
        $this->load->model('ModifyAdModel');
        $mod_rec=$this->ModifyAdModel->RetModData($mod_code);
        if($mod_rec->num_rows==1){
            $this->session->set_userdata('mod_rec',$mod_rec);
            $data['main_content']='modFormWithData';
            $this->load->view('includes/template',$data);
        }else{
            $this->session->set_userdata('noRecExist',TRUE);
            $data['main_content']='adModifyView';
            $this->load->view('includes/template',$data);
        }
    }
}

?>

<?php
class LoginController extends CI_Controller {
 public function __construct() {
        parent::__construct();
        $this->load->model('RetrieveAdDataModel');
        $rec=$this->RetrieveAdDataModel->retrieveLatestData();
        $this->session->set_userdata('LatestRec',$rec);
    }
public function index(){
        $uname=$this->session->userdata('username');
        $is_lin=$this->session->userdata('is_loggedin');
        if(($uname!=NULL)&&($is_lin!=NULL)){
            $this->session->set_userdata('already_loggedin',TRUE);
           $data['main_content']='members_area';
           $this->load->view('includes/template',$data);
        }else{
        $data['main_content']='login';
        $this->load->view('includes/template',$data);}
    }
    
/*the functopn below is working*/
    /*public function checkLogin(){
        $this->form_validation->set_rules('username','Username','required');
        $this->form_validation->set_rules('password','Password','required|callback_verifyUser');
        if($this->form_validation->run()==FALSE){
            $data['main_content']='login';
            $this->load->view('includes/template',$data);
        }else{
            redirect('index.php/SignUpController');
        }
    }
    public function verifyUser(){
        $uname=  $this->input->post('username');
        $pass=  $this->input->post('password');
        $this->load->model('LoginModel');
        if($this->LoginModel->login($uname,$pass)==TRUE){
            return true;
        }else{
            $this->form_validation->set_message('verifyUser','Incorrect email or password, please type a valid username and password..');
            return FALSE;
        }
    }*/
    
    public function validate_credentials(){
        $this->load->model('LoginModel');
        $res=$this->LoginModel->loginVer();
        $is_v=$this->session->userdata('is_ver');
        if($res&&$is_v){
            
                $sdata=array(
                    'username'=>  $this->input->post('username'),
                    'is_loggedin'=>TRUE,
                );
                $this->session->set_userdata($sdata);
                redirect('Site/members_area');
                
                }else if($res&&($is_v==FALSE)){
                    redirect('User_Reg_Controller/verify_reg');
                }
                else
                {
                    //echo 'Login Failed';
                    //$this->index();
					$data['main_content']='login_failed';
					$this->load->view('includes/template',$data);
                }
        }
    
    
    
}

?>

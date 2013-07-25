<?php


class User_Reg_Controller extends CI_Controller{
     public function __construct() {
        parent::__construct();
        $this->load->model('RetrieveAdDataModel');
        $rec=$this->RetrieveAdDataModel->retrieveLatestData();
        $this->session->set_userdata('LatestRec',$rec);
    }
	public function index(){
        $data['main_content']='user_reg';
        $this->load->view('includes/template',$data);
    }
    public function verify_reg(){
        $data['main_content']='account_verify';
        $this->load->view('includes/template',$data);
    }
    public function verify_reg_data(){
        $uname=  $this->input->post('username');
        $pass=  $this->input->post('password');
        $v_code=  $this->input->post('ver_code');
        $this->load->model('LoginModel');
        //echo $uname,$pass,$v_code;
        //$v=$this->LoginModel->registration_ver($uname,$pass,$v_code);
        
            //echo $v->username.$v->password.$v->ver_code.'000';
        if($this->LoginModel->registration_ver($uname,$pass,$v_code)==TRUE){
            $sdata=array(
                    'username'=>  $this->input->post('username'),
                    'is_loggedin'=>TRUE,
                );
            $this->session->set_userdata($sdata);
            redirect('Site/members_area');
        }else{
            redirect("User_Reg_Controller/verify_reg");
        }
    }

    public function checkReg(){
        $this->load->library('form_validation');//though it is already auto loaded,just reference
        //Field Name, Error Message, Validation Rule
        $this->form_validation->set_rules('firstname','First Name','trim|required');
        $this->form_validation->set_rules('lastname','Last Name','trim|required');
        $this->form_validation->set_rules('email','Email Address','trim|required|valid_email');
        $this->form_validation->set_rules('username','Username','trim|required|min_length[4]');
        $this->form_validation->set_rules('password','Password','trim|required|min_length[6]|max_length[32]');
        $this->form_validation->set_rules('cpassword','Password Confirmation','trim|required|matches[password]');
        $this->form_validation->set_rules('zipcode','Zip Code','trim|required');
        if($this->form_validation->run()==FALSE){
            $data['main_content']='user_reg';
            $this->load->view('includes/template',$data);
            }else{
            $this->load->model('LoginModel');
            if($query=$this->LoginModel->create_member()){
				//Validation done. Send the verification code
				$uname=  $this->input->post('username');
            	$upass=  $this->input->post('password');
            	$uemail=  $this->input->post('email');
				$vc=$this->session->userdata('v_code');
				$this->load->library('email'); 
            	$this->email->from("zhtonmoy@yahoo.com","ZHTonmoy");
            	$this->email->to($uemail);
            	$this->email->subject("Please Verify your account..");
           		$this->email->message("Please goto http://stuweb.cms.gre.ac.uk/~bm340/index.php/User_Reg_Controller/verify_reg \nYour verification code=$vc\nYour username=$uname\n Password=$upass");
            	if($this->email->send()){
            	$data['main_content']='signup_successful';
                $this->load->view('includes/template',$data);
            	}else{
                show_error($this->email->print_debugger());
            	}
                
            }
            else {
                $data['main_content']='user_reg';
                $this->load->view('includes/template',$data);
            }
            
            
        }
        
    }
}

?>

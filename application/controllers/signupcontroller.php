<?php

class SignUpController extends CI_Controller {
    public function index(){
            $data['main_content']='signUpView';
            $this->load->view('includes/template',$data);
            }
}

?>

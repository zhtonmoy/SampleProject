<?php

class loginmodel extends CI_Model{
    public function __construct() {
        parent::__construct();
    }
    /*public function login($name,$pass){
    $this->db->select('username','password');
    $this->db->from('user');
    $this->db->where('username',$name);
    $this->db->where('password',$pass);
    $result=$this->db->get();
    if($result->num_rows()==1){
        return TRUE;
    }else{
        return false;
    }
    
}*/
    public function registration_ver($name,$pass,$v_code){
    $this->db->select('*'); 
    $this->db->from('user'); 
    $this->db->where('username',$this->input->post('username'));
    $this->db->where('password',md5($this->input->post('password')));
    $this->db->where('ver_code',$v_code);
    $q=$this->db->get();
    //foreach($q->result() as $v)
    //return $v;
    $usn='';
    if($q->num_rows==1){
        $upArray=array(
                'is_verified'=>TRUE,
            );
            foreach ($q->result() as $v)
                $usn=$v->username;
            $this->db->where('username', $usn);
            $this->db->update('user', $upArray); 
        return TRUE;
    }else{
        return false;
    }
        
    }
    public function loginVer(){
        $this->db->select('*'); 
        $this->db->from('user'); 
        $this->db->where('username',$this->input->post('username'));
        $this->db->where('password',md5($this->input->post('password')));
        $query=$this->db->get();
        //$arr=$query->result();
        $is_ver=FALSE;
        foreach($query->result() as $v){
        $is_ver = $v->is_verified;}
        //$is_verified=$arr->is_verified;
        $this->session->set_userdata('is_ver',$is_ver);
        if($query->num_rows==1){
            foreach($query->result() as $v){
            $is_ver = $v->is_verified;
            }
            //$is_verified=$arr->is_verified;
            $this->session->set_userdata('is_ver',$is_ver);
            return TRUE;    
        }

    }
    
    public function create_member(){
        $v_code=$random = substr(number_format(time() * rand(),0,'',''),0,6);
		$this->session->set_userdata('v_code',$v_code);
        $new_member_insert_data=array(
            'firstname'=>$this->input->post('firstname'),
            'lastname'=>$this->input->post('lastname'),
            'email'=>$this->input->post('email'),
            'zipcode'=>$this->input->post('postcode'),
            'username'=>$this->input->post('username'),
            'password'=>  md5($this->input->post('password')),
            'is_verified'=>FALSE,
            'ver_code'=>$v_code,
        );
        $insert=  $this->db->insert('user',$new_member_insert_data);
        if($insert){
            $this->load->library('email');
            $this->email->set_newline("\r\n");//the email will not sent without this 
            $this->email->from("xyz@atlantabazar.com","ZHTonmoy");
            $this->email->to($this->input->post('email'));
            $this->email->subject("Please Verify your account..");
            $this->email->message("Please goto www.atlantabazaar.com/User_VerificationCon and enter your verification code=".$v_code);
            $this->email->send();
        }
        return $insert;
    }
}
?>

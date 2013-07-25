<?php


class FeedbackController extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model('RetrieveAdDataModel');
        $rec=$this->RetrieveAdDataModel->retrieveLatestData();
        $this->session->set_userdata('LatestRec',$rec);
        }

    public function index(){
    $data['main_content']='feedback';
    $this->load->view('includes/template',$data);
    }
    public function checkFeedback(){
        $this->form_validation->set_rules('email','Email','required|valid_email');
        $this->form_validation->set_rules('feedsub','Feedsub','required');
        $this->form_validation->set_rules('feedtext','Feedtext','required|callback_sendMail');
        if($this->form_validation->run()==FALSE){
            $data['main_content']='feedback';
            $this->load->view('includes/template',$data);
        }else{
            $this->load->model('BlogModel');
            $this->BlogModel->storeFeedBack();
            $data['main_content']='feedCon';
            $this->load->view('includes/template',$data);
        }
    }
    public function sendMail(){
        $sender=  $this->input->post('email');
        $sub=  $this->input->post('feedsub');
        $contents=  $this->input->post('feedtext');
        /*$config=array(
            'protocol'=>'smtp',
            'smtp_host'=>'ssl://smtp.googlemail.com',
            'smtp_port'=>465,
            'smtp_user'=>'zhtonmoy.duet.cse@gmail.com',
            'smtp_pass'=>'Z011062214'
            
        );
        $this->load->library('email',$config);*/
        $this->load->library('email');
        $this->email->set_newline("\r\n");//the email will not sent without this 
        $this->email->from($sender,"Web User");
        $this->email->to('zhtonmoy@yahoo.com');
        $this->email->subject($sub);
        $this->email->message($contents);
        //$path=  $this->config->item('server_root');
        //$file=$path.'/project/Source Files/tonAttach/impInf.txt';
        //$this->email->attach($file) or die("Error");
        if($this->email->send()){
            return true;
        }else{
            return FALSE;
        }
        
     }
    
}

?>

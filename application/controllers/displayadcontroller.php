<?php


class DisplayAdController extends CI_Controller {
     public function __construct() {
        parent::__construct();
        $this->load->model('RetrieveAdDataModel');
        $rec=$this->RetrieveAdDataModel->retrieveLatestData();
        $this->session->set_userdata('LatestRec',$rec);
    }
	public function search_laptop(){
        $item='laptop';
        $this->load->model('RetrieveAdDataModel');
        $rec=$this->RetrieveAdDataModel->retrieveData($item);
        $this->session->set_userdata('rec',$rec);
        $data['main_content']='viewAdItems';
        $this->load->view('includes/template',$data);
        
    }
    public function search_mobile(){
        $item='mobile';
        $this->load->model('RetrieveAdDataModel');
        $rec=$this->RetrieveAdDataModel->retrieveData($item);
        $this->session->set_userdata('rec',$rec);
        $data['main_content']='viewAdItems';
        $this->load->view('includes/template',$data);
        
    }
    public function search_house(){
        $item='house';
        $this->load->model('RetrieveAdDataModel');
        $rec=$this->RetrieveAdDataModel->retrieveData($item);
        $this->session->set_userdata('rec',$rec);
        $data['main_content']='viewAdItems';
        $this->load->view('includes/template',$data);
        
    }
    public function search_books(){
        $item='books';
        $this->load->model('RetrieveAdDataModel');
        $rec=$this->RetrieveAdDataModel->retrieveData($item);
        $this->session->set_userdata('rec',$rec);
        $data['main_content']='viewAdItems';
        $this->load->view('includes/template',$data);
        
    }
    public function search_games(){
        $item='games';
        $this->load->model('RetrieveAdDataModel');
        $rec=$this->RetrieveAdDataModel->retrieveData($item);
        $this->session->set_userdata('rec',$rec);
        $data['main_content']='viewAdItems';
        $this->load->view('includes/template',$data);
        
    }
    public function search_homeApp(){
        $item='homeApp';
        $this->load->model('RetrieveAdDataModel');
        $rec=$this->RetrieveAdDataModel->retrieveData($item);
        $this->session->set_userdata('rec',$rec);
        $data['main_content']='viewAdItems';
        $this->load->view('includes/template',$data);
        
    }
    public function search_jobs(){
        $item='jobs';
        $this->load->model('RetrieveAdDataModel');
        $rec=$this->RetrieveAdDataModel->retrieveData($item);
        $this->session->set_userdata('rec',$rec);
        $data['main_content']='viewAdItems';
        $this->load->view('includes/template',$data);
        
    }
    public function search_medical(){
        $item='medical';
        $this->load->model('RetrieveAdDataModel');
        $rec=$this->RetrieveAdDataModel->retrieveData($item);
        $this->session->set_userdata('rec',$rec);
        $data['main_content']='viewAdItems';
        $this->load->view('includes/template',$data);
        
    }
    public function search_sports(){
        $item='sports';
        $this->load->model('RetrieveAdDataModel');
        $rec=$this->RetrieveAdDataModel->retrieveData($item);
        $this->session->set_userdata('rec',$rec);
        $data['main_content']='viewAdItems';
        $this->load->view('includes/template',$data);
        
    }
    public function search_tolet(){
        $item='tolet';
        $this->load->model('RetrieveAdDataModel');
        $rec=$this->RetrieveAdDataModel->retrieveData($item);
        $this->session->set_userdata('rec',$rec);
        $data['main_content']='viewAdItems';
        $this->load->view('includes/template',$data);
        
    }
    public function search_tutor(){
        $item='tutor';
        $this->load->model('RetrieveAdDataModel');
        $rec=$this->RetrieveAdDataModel->retrieveData($item);
        $this->session->set_userdata('rec',$rec);
        $data['main_content']='viewAdItems';
        $this->load->view('includes/template',$data);
        
    }
    public function search_latest(){
        $this->load->model('RetrieveAdDataModel');
        $rec=$this->RetrieveAdDataModel->retrieveLatestData();
        $this->session->set_userdata('LatestRec',$rec);
        $data['main_content']='viewLatestAdItems';
        $this->load->view('includes/template',$data);
        
    }
	   public function recentAd1(){
        $this->load->model('RetrieveAdDataModel');
        $rec=$this->RetrieveAdDataModel->retrieveLatestData();
        $this->session->set_userdata('LatestRec',$rec);
        $data['main_content']='viewRecentAd1';
        $this->load->view('includes/template',$data);   
    }
    public function recentAd2(){
        $this->load->model('RetrieveAdDataModel');
        $rec=$this->RetrieveAdDataModel->retrieveLatestData();
        $this->session->set_userdata('LatestRec',$rec);
        $data['main_content']='viewRecentAd2';
        $this->load->view('includes/template',$data);   
    }
    public function recentAd3(){
        $this->load->model('RetrieveAdDataModel');
        $rec=$this->RetrieveAdDataModel->retrieveLatestData();
        $this->session->set_userdata('LatestRec',$rec);
        $data['main_content']='viewRecentAd3';
        $this->load->view('includes/template',$data);   
    }
    public function recentAd4(){
        $this->load->model('RetrieveAdDataModel');
        $rec=$this->RetrieveAdDataModel->retrieveLatestData();
        $this->session->set_userdata('LatestRec',$rec);
        $data['main_content']='viewRecentAd4';
        $this->load->view('includes/template',$data);   
    }
    public function recentAd5(){
        $this->load->model('RetrieveAdDataModel');
        $rec=$this->RetrieveAdDataModel->retrieveLatestData();
        $this->session->set_userdata('LatestRec',$rec);
        $data['main_content']='viewRecentAd5';
        $this->load->view('includes/template',$data);   
    }
    
}

?>


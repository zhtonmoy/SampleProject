<?php

class BlogController extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('RetrieveAdDataModel');
        $rec=$this->RetrieveAdDataModel->retrieveLatestData();
        $this->session->set_userdata('LatestRec',$rec);
    }
    public function index(){
            /*$this->load->model('BlogModel');
            $data['rows']=$this->BlogModel->getAll();
            $this->load->view('BlogView',$data);*/
            $this->load->library('pagination');
            $this->load->library('table');
            $this->table->set_heading('Id','Title','Author','Content');
            $config['base_url']="http://stuweb.cms.gre.ac.uk/~bm340/index.php/BlogController/index";
            $config['total_rows']=  $this->db->get('blog_data')->num_rows();
            $config['per_page']=2;
            $config['num_links']=4;
            $config['full_tag_open']='<div id="pagination">';
            $config['full_tag_close']='</div>';
            
            $this->pagination->initialize($config);
            $data['records']=$this->db->get('blog_data',$config['per_page'],$this->uri->segment(3));
            //$this->load->view('BlogView',$data);
            $data['main_content']='BlogView';
            $this->load->view('includes/template',$data);
            
            }
}

?>
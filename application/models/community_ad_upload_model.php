<?php


class community_ad_upload_model extends CI_Model {
    var $image_path;
    public function __construct() {
        parent::__construct();
        //$this->image_path=  realpath(APPPATH.'../ad_images');
		//$this->image_path=realpath('http://stuweb.cms.gre.ac.uk/~bm340/ad_images');
        $this->image_path_url='http://stuweb.cms.gre.ac.uk/~bm340/'.'ad_images/';
		$this->thumbs_path_url='http://stuweb.cms.gre.ac.uk/~bm340/'.'thumbs/';
		$this->image_path='/home/bm340/public_html/ad_images/';
    }
    public function do_upload(){
        $config=array(
        'allowed_types'=>'jpg|jpeg|gif|png',
        'upload_path'  =>  $this->image_path,
        'max_size'     =>  4400,
        );
        $nam=$_FILES['userfile']['name'];
        $this->load->library('upload',$config);
        if($this->upload->do_upload()) $this->session->set_userdata('upl',TRUE);
        $image_data=  $this->upload->data();
        //$source_image_path  =$image_data['full_path'];
		$this->image_path='/home/bm340/public_html/thumbs/';
        $source_image_path= $this->image_path_url.$nam;
        $config_r=array(
            'source_image'  =>$image_data['full_path'],
            'new_image'     =>  $this->image_path,
            'maintain_ration'=>TRUE,
            'width'         =>60,
            'height'        =>40,
        );
        $this->load->library('image_lib',$config_r);
        $this->image_lib->resize();
        
        $thumbs_image_path  =$this->thumbs_path_url.$nam;
        
        $new_ad_insert_data=array(
            'category'=>$this->input->post('category'),
            'eventName'=>$this->input->post('eventName'),
            'venue'=>$this->input->post('venue'),
            'eventDetails'=>$this->input->post('eventDetails'),
            'entryFee'=>$this->input->post('entryFee'),
            'contact'=>$this->input->post('contact'),
            'created_on'=>$this->input->post('curDate'),
            'image'=>$source_image_path,
            'image_thumbs'=>  $thumbs_image_path,
        );
        $insert=  $this->db->insert('community_ad_data',$new_ad_insert_data);
        if($insert){
		$this->session->set_userdata('upl_path',$source_image_path);
		
		}
    }
	public function retrieve_ad_data(){
	 $this->db->select('*'); 
     $this->db->from('community_ad_data'); 
     $query=$this->db->get();
     return $query;
	}

}

?>

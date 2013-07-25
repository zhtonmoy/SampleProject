<?php
class search_model extends CI_Model {
	public function search_data($sd){
	 $this->db->select('*'); 
     $this->db->from('advertisement_data'); 
	 $this->db->like('category',$sd,'both');
	 $this->db->or_like('title',$sd,'both');
	 $this->db->or_like('description',$sd,'both');
     $query=$this->db->get();
     return $query;
	}
}
?>

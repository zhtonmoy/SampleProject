<?php


class RetrieveAdDataModel extends CI_Model {
    public function retrieveData($item){
        $this->db->select('*'); 
        $this->db->from('advertisement_data'); 
        $this->db->where('category',$item);
        $query=$this->db->get();
        //$i=0;
        //foreach($query->result() as $v){
          //  $rec[$i]=$v;
            //$i++;
        //}
        return $query;
    }
    public function retrieveAllData(){
        $this->db->select('*'); 
        $this->db->from('advertisement_data'); 
        $query=$this->db->get();
        return $query;
    }
    public function retrieveLatestData(){
        $this->db->select('*'); 
        $this->db->from('advertisement_data'); 
        $this->db->order_by("advertisement_id", "desc"); 
        $query=$this->db->get();
        return $query;
        /*$this->db->select('*');
$this->db->from('advertisement_data');
$this->db->order_by('id', 'DESC');
$this->db->limit('5');

//$subQuery = $this->db->_compile_select();

//$this->db->_reset_select();

$this->db->select('*');
$this->db->from("{$subQuery} AS table");
$this->db->order_by('id', 'ASC');
$query = $this->db->get();
return $query;*/
    }
    
    
}

?>

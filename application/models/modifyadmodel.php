<?php


class ModifyAdModel extends CI_Model{
    public function RetModData($mod_code){
        $this->db->select('*'); 
        $this->db->from('advertisement_data'); 
        $this->db->where('mod_code',$mod_code);
        $q=$this->db->get();
        return $q;
    }
}

?>

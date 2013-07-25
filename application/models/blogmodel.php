<?php

class BlogModel extends CI_Model{
    /*public function getAll(){
        $q=$this->db->query("select *from Blog_data");
        if($q->num_rows()>0){
            foreach($q->result() as $row){
                $data[]=$row;
            }
            return $data;
        }
    }*/
    /*public function getAll(){
        $q=$this->db->get("Blog_data");
        if($q->num_rows()>0){
            foreach($q->result() as $row){
                $data[]=$row;
            }
            return $data;
        }
    }*/
    /*public function getAll(){
        $this->db->select("title,contents");
        $q=$this->db->get("Blog_data");
        if($q->num_rows()>0){
            foreach($q->result() as $row){
                $data[]=$row;
            }
            return $data;
        }
    }*/
    /*public function getAll(){
        $sql="select title, author, contents from Blog_data where id=? and author=?";
        $q=$this->db->query($sql,array(3,"zhtonmoy"));
        if($q->num_rows()>0){
            foreach($q->result() as $row){
                $data[]=$row;
            }
            return $data;
        }
    }*/
    public function storeFeedBack(){
        $feedBackData=array(
            'title'=>$this->input->post('feedsub'),
            'author'=>$this->input->post('email'),
            'contents'=>$this->input->post('feedtext'),
        );
        $insert=  $this->db->insert('blog_data',$feedBackData);
    }
    public function getAll(){
        $this->db->select("title,author,contents");
        $this->db->from("blog_data");
        $this->db->where('author','zhtonmoy');
        $q=$this->db->get();
        if($q->num_rows()>0){
            foreach($q->result() as $row){
                $data[]=$row;
            }
            return $data;
        }
    }
}
?>

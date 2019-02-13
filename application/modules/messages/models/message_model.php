<?php
class message_model extends CI_Model{
    public function getposts(){
        $query = $this->db->get('message');
        if($query->num_rows()>0){
            return $query->result();
        }
    }
    public function addpost($data){
        return $this->insert('message',$data);
    }
}


?>
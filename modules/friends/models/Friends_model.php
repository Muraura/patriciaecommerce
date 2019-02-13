<?php
 Class Friends_model extends CI_Model
 {
     public function add_friend(){
         $data = array(
             "friend_name" => $this->input->post("firstname"),
             "friend_phone" => $this->input->post("phone"),
             "friend_image" => $this->input->post("image"),
            
         );

         if($this->db->insert("friend1",$data))
         {
             return $this->db->insert_id();
         }else
         {
             return FALSE;
         }


     }
     public function update_friend($friend_id){
        $data = array(
            "friend_name" => $this->input->post("firstname"),
            "friend_phone" => $this->input->post("phone"),
            "friend_image" => $this->input->post("image"),
           
        );
        $this->db->set($data);
        $this->db->where('friend_id',$friend_id);

        if($this->db->update('friend1'))
        {
            return TRUE;
        }else
        {
            return FALSE;
        }


    }

     public function get_friends()
     {
         $this->db->order_by("created","DESC");
         return $this->db->get("friend1");
     }

     
     public function get_single_friend($friend_id)
     {
         $this->db->where("friend_id",$friend_id);
         return $this->db->get("friend1");
     }

     public function deletefriend($friend_id){
        {
            $this->db->where('friend_id', $friend_id);
            $this->db->delete('friend1');
        }
     }
 }
?>
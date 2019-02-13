<?php
Class Friends extends MX_Controller {

    function __construct()
    {
        parent:: __construct();
        $this->load->model("friends_model");
        $this->load->model("site/site_model");
    }

    public function index()
    {
         
            $v_data["all_friends"]=$this->friends_model->get_friends();
    
            $data = array("title" =>$this->site_model->display_page_title(),
            "content" =>$this->load->view("friends/all_friends",$v_data, TRUE)
        
        );
            $this->load->view("site/templates/layouts/layout",$data);
            
    
           // $data=array
            //(
             //   "all_friends"=>$this->friends_model->get_friend()
            //);
          //  $this->load->view("hello_world",$data);
    }
    
    public function welcome($friend_id)
    {   
        $my_friend = $this->friends_model->get_single_friend($friend_id);
        if($my_friend->num_rows()>0)
        {
            $row = $my_friend->row();
            $firstname = $row->friend_name;
            $phone = $row->friend_phone;
            $image = $row->friend_image;
           
    //  $data = array(
    //      "friend_name"=> $firstname,
    //      "friend_phone"=>$phone,
    //      "friend_image"=>$image,
         

    // );
    $v_data["friend_name"]=$firstname;
    $v_data["friend_phone"]=$phone;
    $v_data["friend_image"]=$image;
    $data=array("title"=>$this->site_model->display_page_title(),
    "content"=>$this->load->view("friends/welcome_here",$v_data,true));
        // $this->load->view("welcome_here", $data); 
        $this->load->view("site/templates/layouts/layout", $data);
    }else{
        $this->session->set_flashdata("error_message","could not find your friend");
        redirect("friends");

    } 
}

public function new_friend(){
    $this->form_validation->set_rules ("firstname","First Name","required");
    $this->form_validation->set_rules ("phone","Phone","required|numeric");
    $this->form_validation->set_rules ("image","Image","required");

    
 if($this->form_validation->run())
       {
         $friend_id = $this->friends_model->add_friend();
          if($friend_id >0)
          {
              $this->session->set_flashdata("success_message","New friend ID".$friend_id." has been added");
          }
        
        else{
            $this->session->set_flashdata
            ("error_message", "unable to add friend");
           }
           redirect("friend");
        }

      $data["form_error"]=validation_errors(); 
     
     $this->load->view("add_friend",$data);
    }
    //update
    public function edit($friend_id){
        $this->form_validation->set_rules ("firstname","First Name","required");
        $this->form_validation->set_rules ("phone","Phone","required|numeric");
        $this->form_validation->set_rules ("image","Image","required");
    
        
     if($this->form_validation->run())
           {
               $update_status = $this->friends_model->update_friend($friend_id);
               if($update_status){
                   redirect("friends");
               }
            }
            //  $friend_id = $this->friends_model->update_friend();
            //   if($friend_id >0)
            //   {
            //       $this->session->set_flashdata("success_message","New friend ID".$friend_id." has been added");
            //   }
            
            else{
                //name from form is the unique identifier
                $my_friend = $this->friends_model->get_single_friend($friend_id);
                // var_dump($my_friend); die();
                if ($my_friend->num_rows() > 0) {
                $row = $my_friend->row();
                $firstname = $row->friend_name;
                $phone = $row->friend_phone;
                $image = $row->friend_image;
               
                 
                $v_data["friend_name"] = $firstname;
                $v_data["friend_phone"] = $phone;
                $v_data["friend_image"] = $image;
               
                $data = array("title" => $this->site_model->display_page_title(),
                "content" => $this->load->view("friends/friend_update", $v_data, true));
                // $data = array(
                // // "all_friends"=>$this->friend_model->get_friends()
                // );
                $this->load->view("site/templates/layouts/layout", $data);
                 
                } else {
                $this->session->set_flashdata("error_message", "couldnt");
                redirect("friends");
                }
                
               
            }
    
        //   $data["form_error"]=validation_errors(); 
         
        //  $this->load->view("add_friend",$data);
      //  }

    //delete
        }
 public function delete_friend($friend_id)
{
    $this->db->where("friend_id", $friend_id);
    $this->db->delete("friend1");
    redirect("friends");
    }

    }
?>

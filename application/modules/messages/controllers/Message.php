<?php
Class Message extends MX_Controller {
    function __construct()
    {
        parent:: __construct();
        $this->load->model("messages/message_model");
    }


    public function index()
    {
        $posts = $this->message_model->getposts();
       
        $this->load->view("messages/all_message",['posts'=>$posts]);
    }
    public function createmessage(){
        $this->load->view("messages/create_message");
    }

    public function update(){
        $this->load->view("messages/update_message");  
    }

    public function save(){
    $this->form_validation->set_rules('title','Title','required');
    $this->form_validation->set_rules('description','Description','required');

    if($this->form_validation->run())
    {
      $data=$this->input->post();
      $today = date('Y-m-d');
      $data['date_created'] =$today;
      unset($data['submit']);
      $this->load->model('message_model');
      if($this->message_model->addpost($data)){
          $this->seesion->set_flashdata('msg','Post Saved Successfully ');
      }else{
        $this->seesion->set_flashdata('msg','Failed to save post ');
      }
      return redirect('messages/message');
    //   echo'<prev>'>
    //   print_r($data);
    //   echo '</prev>';
    //   exit();
    }
    else{
      $this->load->view('Messages/create_message');
    }
       
    }
}
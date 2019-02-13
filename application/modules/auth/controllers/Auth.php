<?php
if(! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends MX_Controller
{
    function __construct()
    {
        parent:: __construct();

        $this->load->model("auth/auth_model");
        $this->load->model("site/site_model");
    }
    public function index(){

    }
    public function login_admin(){
        //1.create validation rules
        $this->form_validation->set_rules("user_email","Email address","required|valid_email");
        $this->form_validation->set_rules("user_password","Password","required");
        //2.check if validation ruules pass.
        if($this->form_validation->run()){
            if($this->auth_model->validate_user()){
                redirect("friends");
            }

        }
        else{

       
            $validation_errors=validation_errors();
            if(!empty($validation_errors))
            {
                $this->session->set_flashdata("error",$validation_errors);
            }
        }
        //4.load login view

        $data=array(
            "title"=>$this->site_model->display_page_title(),
            "content" => $this->load->view("auth/login_admin",NULL, TRUE),
            "login" =>TRUE
        );
            {
        
            $this->load->view("site/templates/layouts/login", $data);
            }
        
        

    }
}
?>
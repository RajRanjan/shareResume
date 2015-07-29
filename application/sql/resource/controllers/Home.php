<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    
           
    	public function index()	{
    	    $this->load->helper('form');
            $this->load->view('header');
            $this->load->view('home/signup');
            $this->load->view('footer');
            
         }
        public function create(){
             
    	     $this->load->library('form_validation');   
             //setting validation rules
             $this->form_validation->set_rules('name','Username','required');
             $this->form_validation->set_rules('emailId','Email','required|valid_email');
             $this->form_validation->set_rules('password','Password','required');
             //running validation check
             if($this->form_validation->run()==FALSE){
                $this->load->view('header');
                $this->load->view('home/signup');
                $this->load->view('footer');
             }
            
         else {
            //if validation of form is true then enter this
           /* $this->load->model('User_model');
            if($this->User_model->createUser()){
                echo "User Created";
            }else{
                echo "Some Problem Occured";
            }
            */
	     }
       }
}
    


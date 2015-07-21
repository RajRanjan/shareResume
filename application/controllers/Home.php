<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
        	public function index(){
        		
                    $this->load->view('header.php');
                    $this->load->view('home');
                    $this->load->view('footer');                
        	}//index function ends
            public function login(){
                $this->load->library('form_validation');
                $this->form_validation->set_rules('email','Email Id','required|valid_email');
                $this->form_validation->set_rules('password','Password','required');
                if($this->form_validation->run()==FALSE){
                    $this->load->view('header.php');
                    $this->load->view('home');
                    $this->load->view('footer');
                }else{
                    //if form validation is success
                    $this->load->model('User_model');
                    $email=$this->input->post('email');
                    $password=$this->input->post('password');
                    if($this->User_model->authenticateUser($email,$password)){
                        
                    }else{
                        $data['loginError']="Credentials not valid";
                        $this->load->view('header.php');
                        $this->load->view('home',$data);
                        $this->load->view('footer');
                    }
                }
            }//login function ends
            public function register(){
               $this->load->library('form_validation');
                $this->form_validation->set_rules('name','Name','required');
                $this->form_validation->set_rules('email','Email Id','required|valid_email');
                $this->form_validation->set_rules('password','Password','required');
                $this->form_validation->set_rules('passwordConfirm','Re-Password','required|matches[password]');
                if($this->form_validation->run()==FALSE){
                    $this->load->view('header.php');
                    $this->load->view('home');
                    $this->load->view('footer');
                }else{
                    //if form validation is success
                    $this->load->model('User_model');//model is loaded
                    $name=$this->input->post('name');
                    $email=$this->input->post('email');
                    $password=$this->input->post('password');
                    //checking if email is already registered
                    if($this->User_model->emailExists($email)){
                        //already user with this email exists
                        $data['registrationError']="Email address already registered.";
                        $this->load->view('header.php');
                        $this->load->view('home',$data);
                        $this->load->view('footer');
                    }else{
                        if($this->User_model->createUser($name,$email,$password)){
                            //user successfully created
                            //setting the session variables
                            $nameSession=$this->session->userdata('nameSession');
                            $emailSession=$this->session->userdata('emailSession');
                            $this->load->helper('uri');
                            redirect(base_url('index.php/dashboard'));
                        }
                    }
                    
                    
                    
                }      
            }//register function ends
            
            
            
            
            
}//class ends

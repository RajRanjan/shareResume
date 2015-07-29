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
                        //user has been successfully authenticated
                        //creating the session
                        //$this->session->set_userdata('nameSession',$name);
                        //$this->session->set_userdata('emailSession',$email);
                        //redirecting to the dashboard
                        $this->load->helper('url');
                        redirect(base_url('index.php/dashboard'));
                    }else{
                        //user doen't exist in the database
                        $data['loginError']="Credentials not valid";
                        $this->load->view('header.php');
                        $this->load->view('home',$data);
                        $this->load->view('footer');
                    }
                }
            }//login function ends
            public function register(){
                $response=array();
                if($this->input->post('ajaxRequest')){
                        $this->load->library('form_validation');
                        $this->form_validation->set_rules('name','Name','required');
                        $this->form_validation->set_rules('email','Email Id','required|valid_email');
                        $this->form_validation->set_rules('password','Password','required');
                        $this->form_validation->set_rules('password-confirm','Re-Password','required|matches[password]');
                        if($this->form_validation->run()==FALSE){
                            $response['errorCode']=10;
                            $response['errorMessage']=validation_errors();
                            echo json_encode($response);
                        } else{
                            //server based form validation is successful
                            $this->load->model('User_model');
                            $result=$this->User_model->register();
                            echo json_encode($result);
                        }   
                         
                }else{
                        echo "Enable Javascript";
                }
            }//register function ends
            
            
            
            
            
}//class ends

<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
	
        	public function index(){
        		
                    $this->load->view('header.php');
                    $this->load->view('home');
                    $this->load->view('footer');                
        	}//index function ends
            public function login(){
                    $response=array();
                    if($this->input->post('ajaxRequest')){
                            $this->load->library('form_validation');
                            $this->form_validation->set_rules('email','Email Id','required|valid_email');
                            $this->form_validation->set_rules('password','Password','required');
                            if($this->form_validation->run()==FALSE){
                                $response['errorCode']=10;
                                $response['errorMessage']=validation_errors();
                                echo json_encode($response);
                            } else{
                                //server based form validation is successful
                                $this->load->model('User_model');
                                $result=$this->User_model->authenticateUser();
                                 //now checking result from model and if errorcode is zero then creating session and redirection
                                if($result['errorCode']==0){
                                    $this->session->set_userdata('email',$this->input->post('email'));
                                    $this->session->set_userdata('isLoggedIn',true);                                   
                                }
                                echo json_encode($result);
                            }   
                             
                    }else{
                            echo "Enable Javascript";
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

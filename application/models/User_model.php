<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {
             
             public $response=array();
             
             public function __construct(){
                    // Call the CI_Model constructor
                    parent::__construct();
                    $this->load->database();
             }
             public function authenticateUser(){
                   $email=$this->input->post('email');
                   $password=$this->input->post('password');
                   //first we need to see if user is registered or not
                   if($this->emailExists($email)){
                         $query=$this->db->query("SELECT email,password FROM user WHERE email='{$email}' AND password='{$password}'");
                           if($query->num_rows()>0){
                                $this->response['errorCode']=0;
                                $this->response['errorMessage']="Login Successful.";
                                return $this->response;
                           }else{
                                //if email id doen't exits
                                $this->response['errorCode']=31;
                                $this->response['errorMessage']="Invalid Credentials.";
                                return $this->response;
                           }  
                   }else{
                         $this->response['errorCode']=30;
                         $this->response['errorMessage']="You are not registered.";
                         return $this->response;                   
                   }       
             }
             public function emailExists($email){
                   $query=$this->db->query("SELECT email FROM user WHERE email='{$email}'");
                   if($query->num_rows()>0){return true;}else{return false;}
             }
             public function register(){
                   //checking if user already exits by checking email
                    $name=$this->input->post('name');
                    $email=$this->input->post('email');
                    $password=$this->input->post('password');
                    if($this->emailExists($email)){
                        $response['errorCode']=20;
                        $response['errorMessage']="Email Already Exits";
                        return $response;
                    }else{
                        //user is not registered
                        //running a transaction because data is sent to user and social_links table
                        $this->db->trans_start();
                        $this->db->query("INSERT INTO user(name,email,password)VALUES('{$name}','{$email}','{$password}')");
                        $this->db->query("INSERT INTO social_links(email)VALUES('{$email}')");
                        $this->db->trans_complete();
                        if($this->db->trans_status()==FALSE){
                            //if transaction is unsuccessful
                            $response['errorCode']=5;
                            $response['errorMessage']="Some error occured.";
                            return $response;
                        }else{
                            //if transaction is successful returning response
                            $response['errorCode']=0;
                            $response['errorMessage']="Registration successful.";
                            return $response;
                        }                    
                    }
             }
             public function updateBasicInformation(){
                    $userTableData=array();
                    $userTableData['contact_no']=$this->input->post('contact_no');
                    $dateSqlFormat=databaseDateFormat(strtotime($this->input->post('birth_date')));
                    //echo $dateSqlFormat;
                    $userTableData['birth_date']=$dateSqlFormat;
                    $userTableData['country']=$this->input->post('country');
                    $socialLinkTableData=array();
                    $socialLinkTableData['website']=$this->input->post('website');
                    $socialLinkTableData['facebook']=$this->input->post('facebook');
                    $socialLinkTableData['quora']=$this->input->post('quora');
                    $socialLinkTableData['linkedin']=$this->input->post('linkedin');
                    $this->db->trans_start();
                     $this->db->update('user',$userTableData,array('email'=>$this->session->userdata('email')));
                     $this->db->update('social_links',$socialLinkTableData,array('email'=>$this->session->userdata('email')));
                    $this->db->trans_complete();
                    if($this->db->trans_status()==FALSE){
                            //if transaction is unsuccessful
                            $response['errorCode']=5;
                            $response['errorMessage']="Some error occured.";
                            return $response;
                        }else{
                            //if transaction is successful returning response
                            $response['errorCode']=0;
                            $response['errorMessage']="Basic Information Update Successful";
                            return $response;
                        }   
                    
             }
             public function getBasicInformation(){
                    
                    $currentUserEmail=$this->session->userdata('email');
                    $query=$this->db->query("SELECT * FROM user INNER JOIN social_links ON user.email=social_links.email WHERE user.email='{$currentUserEmail}' ");
                    return $query->result_array();
                    
             }
             

    
    
}
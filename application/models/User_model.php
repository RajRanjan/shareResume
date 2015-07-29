<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {
             
             public $response=array();
             
             public function __construct(){
                    // Call the CI_Model constructor
                    parent::__construct();
                    $this->load->database();
             }
             public function authenticateUser($email,$password){
                   $query=$this->db->query("SELECT email,password FROM user WHERE email='{$email}' AND password='{$password}'");
                   if($query->num_rows()>0){return true;}else{return FALSE;}                 
                   
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
                            $response['errorMessage']="Some error occured";
                            return $response;
                        }else{
                            //if transaction is successful returning response
                            $response['errorCode']=0;
                            $response['errorMessage']="Registration successful.";
                            return $response;
                        }                    
                    }
             }
             

    
    
}
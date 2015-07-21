<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {
             
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
                   if($query->num_rows()>0){return True;}else{return False;}
             }
             public function createUser($name,$email,$password){
                   $query=$this->db->query("INSERT INTO user(name,email,password)VALUES('{$name}','{$email}','{$password}')");
                   if($query){return true;}else{return false;}
             }
             

    
    
}
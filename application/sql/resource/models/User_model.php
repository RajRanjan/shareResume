<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User_model extends CI_Model {

        public function __construct()
        {
                parent::__construct();
        }
        public function createUser(){
            $data=array(
                         'name'=>$this->input->post('name'),
                         'emailId'=>$this->input->post('emailId'),
                         'password'=>$this->input->post('password'),
                         'createDate'=>time(),
                         'updateDate'=>time()
                       );
            if($this->db->insert('user',$data)){
                return true;
            }else{
                return false;
            }
                       
        }
        
        
        

}
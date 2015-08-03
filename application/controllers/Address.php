<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Address extends CI_Controller {
    
           public function __construct(){
                parent::__construct();
           }
       
           public function index(){
                
                $data['menuOptioToLoad']="account/address/addressMenuOption.php";
                $data['pageToLoad']="account/address/displayAllAddress.php";
                //$result=$this->Project_model->getUserAllProject($this->session->userdata('email'));               
                //$data['allProjectData']=$result;            
                $this->load->view('account/header.php');
                $this->load->view('account/template.php',$data);
                $this->load->view('account/footer.php');     
           
           }
    
    
}
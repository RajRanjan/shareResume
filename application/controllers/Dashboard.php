<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
       
       
       function __construct(){
           parent::__construct();
           if($this->session->userdata('isLoggedIn')==false){
               redirect(base_url('index.php/home'));
           }
       }
       
       public function index(){             
            $this->load->view('account/header.php');
            $this->load->view('account/template.php');
            $this->load->view('account/footer.php');     
       }
    
    
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    
       
       public function index(){
            $this->load->view('account/header.php');
            $this->load->view('account/dashboard.php');
            $this->load->view('account/footer.php');     
       }
       
    
    
}
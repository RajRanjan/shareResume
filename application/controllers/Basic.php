<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Basic extends CI_Controller {
    
       
       public function index(){
            $this->load->view('account/header.php');
            $this->load->view('account/template.php');
            $this->load->view('account/footer.php');     
       }
    
    
}
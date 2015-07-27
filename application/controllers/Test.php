<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {
    
       
       public function index(){
            $data['informationPageToLoad']="test/inPlaceEditForm.php";
            $this->load->view('account/header.php');
            $this->load->view('test/main.php',$data);
            $this->load->view('account/footer.php');
                 
       }
    
    
}
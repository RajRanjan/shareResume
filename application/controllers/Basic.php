<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Basic extends CI_Controller {
    
       
       public function index(){
            $data['informationPageToLoad']="account/basic/basic.php";
            $this->load->view('account/header.php');
            $this->load->view('account/template.php',$data);
            $this->load->view('account/footer.php');     
       }
       public function edit(){
            if($this->input->post('ajaxRequest')){
                 $this->load->model('User_model');
                
            }else{
                $data['formToLoad']="account/basic/basicInformationForm.php";
                $this->load->view('account/header.php');
                $this->load->view('account/template.php',$data);
                $this->load->view('account/footer.php');
            }                 
       }
    
    
}
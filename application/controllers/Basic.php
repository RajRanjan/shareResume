<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Basic extends CI_Controller {
    
           public function __construct(){
                parent::__construct();
                $this->load->model('User_model');
           }
           
           public function index(){
                $data['pageToLoad']="account/basic/basic.php";
                $data['currentUserBasicInformation']=$this->User_model->getBasicInformation();
                $this->load->view('account/header.php');
                $this->load->view('account/template.php',$data);
                $this->load->view('account/footer.php');     
           }
           public function edit(){
                if($this->input->post('ajaxRequest')){
                     
                    
                }else{
                    $data['formToLoad']="account/basic/basicInformationForm.php";
                    $this->load->view('account/header.php');
                    $this->load->view('account/template.php',$data);
                    $this->load->view('account/footer.php');
                }                 
           }
        
    
}
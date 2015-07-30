<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Basic extends CI_Controller {
    
           public function __construct(){
                parent::__construct();
                $this->load->model('User_model');
           }
           
           public function index(){
                $data['pageToLoad']="account/basic/basic.php";
                $result=$this->User_model->getBasicInformation();
                $data['currentUserBasicInformation']=$result[0];
                $this->load->view('account/header.php');
                $this->load->view('account/template.php',$data);
                $this->load->view('account/footer.php');     
           }
           public function edit(){
                if($this->input->post('ajaxRequest')){
                     $result=$this->User_model->updateBasicInformation();
                     echo json_encode($result);
                    
                }else{
                    $result=$this->User_model->getBasicInformation();
                    $data['formPopulateData']=$result[0];
                    $data['formToLoad']="account/basic/basicInformationForm.php";
                    $this->load->view('account/header.php');
                    $this->load->view('account/template.php',$data);
                    $this->load->view('account/footer.php');
                }                 
           }
        
    
}
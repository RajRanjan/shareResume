<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Projects extends CI_Controller {
    
       
       public function index(){
            $data['menuOptioToLoad']="account/projects/projectMenuOption.php";
            $this->load->view('account/header.php');
            $this->load->view('account/template.php',$data);
            $this->load->view('account/footer.php');     
       }
       //add controller
       public function add(){
            $data['menuOptioToLoad']="account/projects/projectMenuOption.php";
            $data['formToLoad']="account/projects/addProjectForm.php";
            $this->load->view('account/header.php');
            $this->load->view('account/template.php',$data);
            $this->load->view('account/footer.php');
       }
       
       
    
    
}
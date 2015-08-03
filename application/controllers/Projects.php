<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Projects extends CI_Controller {
    
       public function __construct(){
            parent::__construct();
            $this->load->model('Project_model');
       }
       public function index(){
            $data['menuOptioToLoad']="account/projects/projectMenuOption.php";
            $data['pageToLoad']="account/projects/displayAllProject.php";
            $result=$this->Project_model->getUserAllProject($this->session->userdata('email'));               
            $data['allProjectData']=$result;            
            $this->load->view('account/header.php');
            $this->load->view('account/template.php',$data);
            $this->load->view('account/footer.php');     
       }
       //add controller
       public function add(){
            if($this->input->post('ajaxRequest')){                
                //if ajax request is set means form add or edit option is there
                //if post fields contins an id field then it is a na update option 
                if($this->input->post('id')){
                    //update option
                    $result=$this->Project_model->addProject($this->input->post('id'));
                    echo json_encode($result);
                }else{
                    $result=$this->Project_model->addProject();
                    echo json_encode($result);                    
                }               
                
            }else{
                $data['menuOptioToLoad']="account/projects/projectMenuOption.php";
                $data['formToLoad']="account/projects/addProjectForm.php";
                $this->load->view('account/header.php');
                $this->load->view('account/template.php',$data);
                $this->load->view('account/footer.php');
            }
            
       }
       public function edit($id=0){
            if($this->input->post('ajaxRequest')){
                
            }else if($id!=0){
                $result=$this->Project_model->getProjectById($id);
                if($result){
                    $data['formPopulateData']=$result[0];
                    $data['menuOptioToLoad']="account/projects/projectMenuOption.php";
                    $data['formToLoad']="account/projects/addProjectForm.php";
                    $this->load->view('account/header.php');
                    $this->load->view('account/template.php',$data);
                    $this->load->view('account/footer.php');
                }else{
                    $this->index();
                }
            }
            else {               
                $this->index();
            }
       }
       
       
    
    
}
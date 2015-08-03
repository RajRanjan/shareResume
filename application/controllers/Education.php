<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Education extends CI_Controller {
    
           public function __construct(){
                parent::__construct();
           }
       
           public function index(){
                
                $data['menuOptioToLoad']="account/education/educationMenuOption.php";
                $data['pageToLoad']="account/education/displayAllEducation.php";
                //$result=$this->Project_model->getUserAllProject($this->session->userdata('email'));               
                //$data['allProjectData']=$result;            
                $this->load->view('account/header.php');
                $this->load->view('account/template.php',$data);
                $this->load->view('account/footer.php');   
           }
           public function addSchool(){
                if($this->input->post('ajaxRequest')){                
                //if ajax request is set means form add or edit option is there
                //if post fields contins an id field then it is a na update option 
                        if($this->input->post('id')){
                            //update option
                            $result=$this->Education_model->addSchool($this->input->post('id'));
                            echo json_encode($result);
                        }else{
                            $result=$this->Education_model->addSchool();
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
    
    
}
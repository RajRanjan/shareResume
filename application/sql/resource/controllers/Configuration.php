<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Configuration extends CI_Controller {
           public function __construct(){
                 parent::__construct();
                 $this->load->model('Configuration_model');
           }
    
           public function index(){
               $data['pageToLoad']="configration/turboBoostConfigration.php";
               $this->load->view('header');
               $this->load->view('configration/main');
               $this->load->view('footer');               
               
           }
           public function addTurboBoost(){
               //if there is ajax call
               if($this->input->post('ajaxRequest')==1){                   
                  //now checking if ajax call is for add or update
                  if($this->input->post('id')){
                     //this ajax call is for update
                     $result=$this->Configuration_model->add($this->input->post('id'));
                     echo json_encode($result);
                  } else{
                     //this ajax call is for add
                     $result=$this->Configuration_model->add();
                     echo json_encode($result);
                  }         
                   
               } else {
                   
                   $data['pageToLoad']="configration/addTurboBoostForm.php";
                   $this->load->view('header');
                   $this->load->view('configration/main',$data);
                   $this->load->view('footer');
               }
               
           }
           public function editTurboboost($id=0){            
               //checking if id isset
               if($id!=0){
                   //check if the record exits
                   $result=$this->Configuration_model->turboBoostExits($id);
                   if($result!=false){                      
                      $data['pageToLoad']="configration/addTurboBoostForm.php";
                      $data['formPopulateData']=$result;
                      $this->load->view('header');
                      $this->load->view('configration/main',$data);
                      $this->load->view('footer');
                   } else{
                      $this->editTurboboost(0);
                   }
                   
               }else {                        
                           //retrieving al the data from the database for turboboost
                           $data['allTurboBoost']=$this->Configuration_model->getAllTurboBoost();
                           $data['pageToLoad']="configration/viewAllturboBoost.php";
                           $this->load->view('header');
                           $this->load->view('configration/main',$data);
                           $this->load->view('footer');                      
               }
               
               
           } //edit turbo boost function ends
           
           
 //----------------------------DATA PASS-----------------------------------------//          
           public function addDataPass(){
               //if there is ajax call
               if($this->input->post('ajaxRequest')==1){                   
                  //now checking if ajax call is for add or update
                  if($this->input->post('id')){
                     //this ajax call is for update
                     $result=$this->Configuration_model->addDataPass($this->input->post('id'));
                     echo json_encode($result);
                  } else{
                     //this ajax call is for add
                     $result=$this->Configuration_model->addDataPass();
                     echo json_encode($result);
                  }         
                   
               } else {
                   
                   $data['pageToLoad']="configration/addDataPassForm.php";
                   $this->load->view('header');
                   $this->load->view('configration/main',$data);
                   $this->load->view('footer');
               }
               
           }
           public function editDataPass($id=0){            
               //checking if id isset
               if($id!=0){
                   //check if the record exits
                   $result=$this->Configuration_model->dataPassExits($id);
                   if($result!=false){                      
                      $data['pageToLoad']="configration/addDataPassForm.php";
                      $data['formPopulateData']=$result;
                      $this->load->view('header');
                      $this->load->view('configration/main',$data);
                      $this->load->view('footer');
                   } else{
                      $this->editDataPass(0);
                   }
                   
               }else {                        
                           //retrieving al the data from the database for turboboost
                           $data['allDataPass']=$this->Configuration_model->getAllDataPass();
                           $data['pageToLoad']="configration/viewAllDataPass.php";
                           $this->load->view('header');
                           $this->load->view('configration/main',$data);
                           $this->load->view('footer');                      
               }
               
               
           } //edit turbo boost function ends
          
}
    


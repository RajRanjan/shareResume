<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project_model extends CI_Model {
             
             public $response=array();
             
             public function __construct(){
                    // Call the CI_Model constructor
                    parent::__construct();
                    $this->load->database();
             }
             public function addProject($id=0){
                $projectData=array();
                $projectData['title']=$this->input->post('title');
                $projectData['email']=$this->session->userdata('email');
                $projectData['start_date']=databaseDateFormat(strtotime($this->input->post('start_date')));
                $projectData['end_date']=databaseDateFormat(strtotime($this->input->post('end_date')));
                $projectData['description']=$this->input->post('description');
                
                if($id!=0){
                    //if id exists then it must be a call for update option
                    if($this->db->update('project',$projectData,array('id'=>$id))){
                        $response['errorCode']=0;
                        $response['errorMessage']="Project Update Successfully";
                        return $response;
                    }else{
                        $response['errorCode']=40;
                        $response['errorMessage']="Project Update unsuccessfull";
                        return $response;
                    }   
                    
                }else{
                    if($this->db->insert('project',$projectData)){
                        $response['errorCode']=0;
                        $response['errorMessage']="Project added successfully";
                        return $response;
                    }else{
                        $response['errorCode']=40;
                        $response['errorMessage']="Project add unsuccessfull";
                        return $response;
                    }                    
                }
                
                
             }
             public function getUserAllProject($email){
                 $query=$this->db->query("SELECT * FROM project WHERE email='{$email}'");
                 if($query->num_rows()>0){
                    return $query->result_array();
                 }else{
                    return false;
                 }
             }
             public function getProjectById($id){
                  $query=$this->db->query("SELECT * FROM project WHERE id={$id}");
                  if($query->num_rows()>0){
                    return $query->result_array();
                  }else{
                    return false;
                  }
             }
             
             
             

    
    
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Configuration_model extends CI_Model {

        public function __construct()
        {
                parent::__construct();
                $this->load->database();
        }
        public function turboBoostExits($id){
            $query=$this->db->query("SELECT * FROM turboboost WHERE id={$id}");
            if($query->num_rows()>0){
                //record exists
                return $query->result_array();
            }else {
                return false;
            }
        }
        public function getAll(){
            $query=$this->db->query("SELECT * FROM turboboost");
            return $query->result();
        }
        public function add($id=0){
            $data=array();
            $result=array();
            $data['name']=$this->input->post('name');
            $data['description']=$this->input->post('description');
            $data['speed']=$this->input->post('speed');
            $data['duration']=$this->input->post('duration');
            $data['cost']=$this->input->post('cost');
            if($id!=0){
                // update call
                if($this->db->update('turboboost', $data, array('id' => $this->input->post('id')))){                  
                        $result['errorCode']=0;
                        $result['errorMessage']="Data SuccessFully Updated";
                
                }else{
                            $result['errorCode']=1;
                            $result['errorMessage']=$this->db->_error_message();
    
                }
                return $result;                
            }else{
                //insert call
                if($this->db->insert('turboboost',$data)){
                  
                        $result['errorCode']=0;
                        $result['errorMessage']="Data SuccessFully Inserted";
                
                }else{
                            $result['errorCode']=1;
                            $result['errorMessage']=$this->db->_error_message();
    
                }
                return $result;                
            }         
            
        }
        public function getAllTurboBoost(){
            $query=$this->db->query("SELECT * FROM turboboost");
            return $query->result();            
        }
 //---------------------------DATAPASS---------------------------------------------//
        public function dataPassExits($id){
            $query=$this->db->query("SELECT * FROM datapass WHERE id={$id}");
            if($query->num_rows()>0){
                //record exists
                return $query->result_array();
            }else {
                return false;
            }
        }
        public function getAllDataPass(){
            $query=$this->db->query("SELECT * FROM datapass");
            return $query->result();            
        }
        public function addDataPass($id=0){
            $data=array();
            $result=array();
            $data['name']=$this->input->post('name');
            $data['allotment']=$this->input->post('allotment');
            $data['duration']=$this->input->post('duration');
            $data['cost']=$this->input->post('cost');
            if($id!=0){
                // update call
                if($this->db->update('datapass', $data, array('id' => $this->input->post('id')))){                  
                        $result['errorCode']=0;
                        $result['errorMessage']="Data SuccessFully Updated";
                
                }else{
                            $result['errorCode']=1;
                            $result['errorMessage']=$this->db->_error_message();
    
                }
                return $result;                
            }else{
                //insert call
                if($this->db->insert('datapass',$data)){
                  
                        $result['errorCode']=0;
                        $result['errorMessage']="Data SuccessFully Inserted";
                
                }else{
                            $result['errorCode']=1;
                            $result['errorMessage']=$this->db->_error_message();
    
                }
                return $result;                
            }         
            
        } 
        
        
        
        

}
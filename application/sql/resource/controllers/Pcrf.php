<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
require APPPATH . '/libraries/REST_Controller.php';

class pcrf extends REST_Controller {
        
        
        public function __construct(){
            parent::__construct();
            $this->load->model('Configuration_model');
            $this->load->helper('url');
            if($this->input->server('REQUEST_METHOD')=="GET"){                
                $resource=uri_string();
                $module=$this->uri->segment(2);
                if($module=="turboboost"){
                    $result=$this->Configuration_model->getAll();
                    $this->response($result,REST_Controller::HTTP_OK); 
                }else if($module=="datapass"){
                    $result=$this->Configuration_model->getAllDataPass();
                    $this->response($result,REST_Controller::HTTP_OK);
                }
                else{
                
                    $baseurl="http://172.16.100.77:8080/";
                    $url=$baseurl.$resource;
                    $url=str_replace("pcrf","pcrf-ems",$url);
                    $result=getRestData($url);
                    $result=json_decode($result,true);             
                    $this->response($result,REST_Controller::HTTP_OK);  
                   
                }         
            }            
        }     
       
        
        
        
        
}
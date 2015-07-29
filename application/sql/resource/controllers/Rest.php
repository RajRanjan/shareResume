<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rest extends CI_Controller {
    
           public function index(){
               $data['pageToLoad']="blank.php";
               $this->load->view('header');
               $this->load->view('rest/main');
               $this->load->view('footer');
               
               
           }
    	  //add token function
          public function addToken(){
                $data['pageToLoad']="addToken.php";
                //setting form validation rules for adding token
                $this->form_validation->set_rules('subscriberId','Subscriber Id','required');
                $this->form_validation->set_rules('tokenName','Token Name','required');
                if($this->form_validation->run()==FALSE){
                    $this->load->view('header');
                    $this->load->view('rest/main',$data);
                    $this->load->view('footer');
                }else{
                    $subscriberId=$this->input->post('subscriberId');
                    $tokenName=$this->input->post('tokenName');
                    $request="http://172.16.100.77:8080/pcrf-ems/subscriptions/{$subscriberId}/tokens/{$tokenName}";
                    $response=putCurl($request);
                    $data['request']=$request;
                    $data['response']=$response;
                    $this->load->view('header');
                    $this->load->view('rest/main',$data);
                    $this->load->view('footer');
                    
                }               
          }
          public function getTokens(){
                $data['pageToLoad']="getTokens.php";
                //setting form validation rules for adding token
                $this->form_validation->set_rules('subscriberId','Subscriber Id','required');
                if($this->form_validation->run()==FALSE){
                    $this->load->view('header');
                    $this->load->view('rest/main',$data);
                    $this->load->view('footer');
                }else{
                    $subscriberId=$this->input->post('subscriberId');
                    $request="http://172.16.100.77:8080/pcrf-ems/subscriptions/{$subscriberId}/tokens";
                    $response=getRestData($request);
                    $data['request']=$request;
                    $data['response']=$response;
                    $this->load->view('header');
                    $this->load->view('rest/main',$data);
                    $this->load->view('footer');
                
                }               
          }
          public function deleteToken(){
                $data['pageToLoad']="deleteToken.php";
                //setting form validation rules for adding token
                $this->form_validation->set_rules('subscriberId','Subscriber Id','required');
                $this->form_validation->set_rules('tokenName','Token Name','required');
                if($this->form_validation->run()==FALSE){
                    $this->load->view('header');
                    $this->load->view('rest/main',$data);
                    $this->load->view('footer');
                }else{
                    $subscriberId=$this->input->post('subscriberId');
                    $tokenName=$this->input->post('tokenName');
                    $request="http://172.16.100.77:8080/pcrf-ems/subscriptions/{$subscriberId}/tokens/{$tokenName}";
                    $response=deleteCurl($request);
                    $data['request']=$request;
                    $data['response']=$response;
                    $this->load->view('header');
                    $this->load->view('rest/main',$data);
                    $this->load->view('footer');
                    
                }            
          }
          public function manageSpeed(){
                $data['pageToLoad']="manageSpeed.php";
                //setting form validation rules for adding token
                $this->form_validation->set_rules('newSpeed','New Speed','required');
                if($this->form_validation->run()==FALSE){
                    $this->load->view('header');
                    $this->load->view('rest/main',$data);
                    $this->load->view('footer');
                }else{
                    $tokenName=$this->input->post('newSpeed');
                    $request="http://172.16.100.77:8080/pcrf-ems/subscriptions/Jack/setspeedprofile/{$tokenName}";
                    $response=postCurl($request);
                    $data['request']=$request;
                    $data['response']=$response;
                    $this->load->view('header');
                    $this->load->view('rest/main',$data);
                    $this->load->view('footer');
                    
                }               
          }
          //Subscriber related api
          public function getSubscriber(){
                $data['pageToLoad']="getSubscriber.php";
                //setting form validation rules for adding token
                $this->form_validation->set_rules('subscriberId','Subscriber Id','required');
                if($this->form_validation->run()==FALSE){
                    $this->load->view('header');
                    $this->load->view('rest/main',$data);
                    $this->load->view('footer');
                }else{
                    $subscriberId=$this->input->post('subscriberId');
                    $request="http://172.16.100.77:8080/pcrf-ems/subscriptions/{$subscriberId}";
                    $response=getRestData($request);
                    $data['request']=$request;
                    $data['response']=$response;
                    $this->load->view('header');
                    $this->load->view('rest/main',$data);
                    $this->load->view('footer');
                    
                }               
          }
          public function addSubscription(){
                $data['pageToLoad']="addSubscription.php";
                //setting form validation rules for adding token
                //$this->form_validation->set_rules('MSISDN','MSISDN','required');
               //$this->form_validation->set_rules('PackageName','PackageName','required');
                //$this->form_validation->set_rules('SIPURI','SIPURI','required');
                //$this->form_validation->set_rules('USERNAI','USERNAI','required');
              $this->form_validation->set_rules('IMSI','IMSI','required');
                if($this->form_validation->run()==FALSE){
                    $this->load->view('header');
                    $this->load->view('rest/main',$data);
                    $this->load->view('footer');
                }else{
                    $onlyEnteredValues=array();
                    foreach($this->input->post() as $key=>$value){
                        if($value!=""){
                            $onlyEnteredValues[$key]=$value;
                        }
                    }             
                    $jsonData=http_build_query($onlyEnteredValues);
                    //print_r($jsonData);
                    $request="http://172.16.100.77:8080/pcrf-ems/subscriptions/Jack";
                    $response=putCurl($request,$jsonData);
                    $data['request']=$request;
                    $data['response']=$response;
                    $this->load->view('header');
                    $this->load->view('rest/main',$data);
                    $this->load->view('footer');
              
              }   
              
                          
          }
          public function deleteSubscription(){
                $data['pageToLoad']="deleteSubscription.php";
                //setting form validation rules for adding token
                $this->form_validation->set_rules('subscriberId','Subscriber Id','required');
                if($this->form_validation->run()==FALSE){
                    $this->load->view('header');
                    $this->load->view('rest/main',$data);
                    $this->load->view('footer');
                }else{
                    $tokenName=$this->input->post('subscriberId');
                    $request="http://172.16.100.77:8080/pcrf-ems/subscriptions/{$tokenName}";
                    $response=deleteCurl($request);
                    $data['request']=$request;
                    $data['response']=$response;
                    $this->load->view('header');
                    $this->load->view('rest/main',$data);
                    $this->load->view('footer');
                    
                }               
          }
          public function getUsage(){
                $data['pageToLoad']="getUsage.php";
                //setting form validation rules for adding token
                $this->form_validation->set_rules('subscriberId','Subscriber Id','required');
                if($this->form_validation->run()==FALSE){
                    $this->load->view('header');
                    $this->load->view('rest/main',$data);
                    $this->load->view('footer');
                }else{
                    $subscriberId=$this->input->post('subscriberId');
                    $request="http://172.16.100.77:8080/pcrf-ems/subscriptions/{$subscriberId}/accumulators";
                    $response=getRestData($request);
                    $data['request']=$request;
                    $data['response']=$response;
                    $this->load->view('header');
                    $this->load->view('rest/main',$data);
                    $this->load->view('footer');
                    
                }               
          }
          public function getPackages(){
                $data['pageToLoad']="getPackages.php";
                //setting form validation rules for adding token
                /*$this->form_validation->set_rules('subscriberId','Subscriber Id','required');
                if($this->form_validation->run()==FALSE){
                    $this->load->view('header');
                    $this->load->view('rest/main',$data);
                    $this->load->view('footer');
                }else{
                    */
                    
                    $request="http://172.16.100.77:8080/pcrf-ems/packages";
                    $response=getRestData($request);
                    $data['request']=$request;
                    $data['response']=$response;
                    $this->load->view('header');
                    $this->load->view('rest/main',$data);
                    $this->load->view('footer');
                    
                //}               
          }
}
    


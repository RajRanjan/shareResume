<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subscription extends CI_Controller {

    	public function index()	{
    	   
            $data['pageToLoad']="getSubscriptionDetails.php";
            $this->load->view('header.php');
            $this->load->view('subscription/main.php',$data);
            $this->load->view('footer.php');
            
        }
        public function getUsage(){
            $data['pageToLoad']="getSubscriptionDetails.php";
                //setting form validation rules for adding token
                $this->form_validation->set_rules('subscriberId','Subscriber Id','required');
                if($this->form_validation->run()==FALSE){
                    $this->load->view('header');
                    $this->load->view('subscription/main',$data);
                    $this->load->view('footer');
                }else{
                    $subscriberId=$this->input->post('subscriberId');
                    $request="http://172.16.100.77:8080/pcrf-ems/subscriptions/{$subscriberId}/accumulators";
                    $response=getRestData($request);
                    $data['request']=$request;
                    $data['response']=$response;
                    $this->load->view('header');
                    $this->load->view('subscription/main',$data);
                    $this->load->view('footer');
                    
                }     
        }
        public function updateAccumulator(){
                $isAjaxRequest=$this->input->post('ajaxRequest');
                if($isAjaxRequest){
                    $subscriberId=$this->input->post('subscriberId');
                    $assetName=$this->input->post('assetName');
                    $request="http://172.16.100.77:8080/pcrf-ems/subscriptions/{$subscriberId}/accumulators/{$assetName}";
                    $datToSend=array();
                    $datToSend['bytes']=$this->input->post('bytes');
                    $jsonData=http_build_query($datToSend);
                    $response=postCurl($request,$jsonData);
                    echo $response;
                }          
        }
        public function getSubscription(){
                $data['pageToLoad']="getSubscriptionDetails.php";
                //setting form validation rules for adding token
                
                $this->form_validation->set_rules('subscriberId','Subscriber Id','required');
                if($this->form_validation->run()==FALSE){
                    $this->load->view('header');
                    $this->load->view('subscription/main',$data);
                    $this->load->view('footer');
                }else{
                    $mapping=array();
                    $mapping[0]="John";
                    $mapping[1]="Jack";
                   ;
                    $count=0;  
                    $data['mapping']=$mapping;                  
                    //$subscriberId=$this->input->post('subscriberId');
                    //$subscriptionRequest="http://172.16.100.77:8080/pcrf-ems/subscriptions/{$subscriberId}";
                    //$subscriptionResponse=getRestData($subscriptionRequest);
                    //$data['subscriptionRequest']=$subscriptionRequest;
                    //$data['subscriptionResponse']=$subscriptionResponse;
                    $this->load->view('header');
                    $this->load->view('subscription/main',$data);
                    $this->load->view('footer');
                    
                }               
          }
          public function changeBarringStatus(){
                $isAjaxRequest=$this->input->post('ajaxRequest');
                if($isAjaxRequest){
                    $subscriberId=$this->input->post('subscriberId');
                    $barringStatusValue=$this->input->post('barringStatusValue');
                    $request="http://172.16.100.77:8080/pcrf-ems/subscriptions/{$subscriberId}/barringstatus/{$barringStatusValue}";
                    $response=postCurl($request);
                    echo $response;
                }
                
          }
}
    


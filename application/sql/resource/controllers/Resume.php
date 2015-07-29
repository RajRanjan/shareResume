<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resume extends CI_Controller {

	public function index()	{
	    //loading libraries
        $this->load->view('header');
        $this->load->view('resume/main');
        $this->load->view('footer');
     }
}
    


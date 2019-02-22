<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller {

	 public function index()
		{
			//$this->load->view('common/header');
			//$this->load->view('login');
		}
    public function manageAsmProfile()
     {
       $this->load->view('common/header');
       $this->load->view('asmprofile');
     }
     public function manageZmProfile()
     {
        $this->load->view('common/header');
        $this->load->view('zmprofile');
     }
     public function manageNhProfile()
     {
         $this->load->view('common/header');
         $this->load->view('nhprofile');
     }

  }

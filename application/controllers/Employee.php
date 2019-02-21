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
		public function createAsm()
		{
				$this->load->model('User');
				$data['asm'] = $this->User->getUserByRoleId($this->User->getRoleId(ASM));
				$this->load->view('common/header');
				$this->load->view('createasm',$data);
		}
		public function createZm()
		{
				$this->load->model('User');
				$data['zm'] = $this->User->getUserByRoleId($this->User->getRoleId(ZM));
				$this->load->view('common/header');
				$this->load->view('createzm',$data);
		}
		public function addAsm()
		{
				 $this->load->model('User');
				 $data['username'] = $this->input->post('username');
				 if(!$this->User->userEmailCheck($data['username'])){
								 $data['ID'] = $this->input->post('asmid');
								 $data['name'] = $this->input->post('name');
								 $data['password'] = md5($this->input->post('password'));
								 $data['mobile'] = $this->input->post('mobile');
								 $data['doj'] = $this->input->post('doj');
								 $data['role_id'] = $this->User->getRoleId(ASM);
				         $insert =  $this->db->insert('bs_user',$data);
								 if($insert)
								 {
									 $message = $this->session->set_flashdata('message', $data['ID'].' Account Name:'.$data['name'].' has been successfully created');
									 redirect(base_url('Employee/createAsm/'), 'refresh', $message);

								 }

			 }else{
				 $message = $this->session->set_flashdata('error', 'Email already exists!');
				 redirect(base_url('Employee/createAsm/'), 'refresh', $message);
			 }
		}
		public function addZm()
		{
				 $this->load->model('User');
				 $data['username'] = $this->input->post('username');
				 if(!$this->User->userEmailCheck($data['username'])){
								 $data['ID'] = $this->input->post('asmid');
								 $data['name'] = $this->input->post('name');
								 $data['password'] = md5($this->input->post('password'));
								 $data['mobile'] = $this->input->post('mobile');
								 $data['doj'] = $this->input->post('doj');
								 $data['role_id'] = $this->User->getRoleId(ZM);
								 $insert =  $this->db->insert('bs_user',$data);
								 if($insert)
								 {
									 $message = $this->session->set_flashdata('message', $data['ID'].' Account Name:'.$data['name'].' has been successfully created');
									 redirect(base_url('Employee/createZm/'), 'refresh', $message);

								 }

			 }else{
				 $message = $this->session->set_flashdata('error', 'Email already exists!');
				 redirect(base_url('Employee/createZm/'), 'refresh', $message);
			 }
		}
  }

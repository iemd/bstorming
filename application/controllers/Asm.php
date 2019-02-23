<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Asm extends CI_Controller {

	 public function index()
		{
			//$this->load->view('common/header');
			//$this->load->view('login');
		}
    public function createAsm()
    {
        $this->load->model('UserModel');
        $data['asm'] = $this->UserModel->getUserByRoleId($this->UserModel->getRoleId(ASM));
        $this->load->view('common/header');
        $this->load->view('createasm',$data);
    }
    public function addAsm()
    {
         $this->load->model('UserModel');
         $data['username'] = $this->input->post('username');
         if(!$this->UserModel->userEmailCheck($data['username'])){
                 $data['ID'] = $this->input->post('asmid');
                 $data['name'] = $this->input->post('name');
                 $data['password'] = md5($this->input->post('password'));
                 $data['mobile'] = $this->input->post('mobile');
                 $data['doj'] = $this->input->post('doj');
                 $data['role_id'] = $this->UserModel->getRoleId(ASM);
                 $insert =  $this->db->insert('bs_user',$data);
                 if($insert)
                 {
                   $message = $this->session->set_flashdata('message', $data['ID'].' Account Name:'.$data['name'].' has been successfully created');
                   redirect(base_url('Asm/createAsm/'), 'refresh', $message);

                 }

       }else{
         $message = $this->session->set_flashdata('error', 'Email already exists!');
         redirect(base_url('Asm/createAsm/'), 'refresh', $message);
       }
    }
		public function viewAsm()
		{
				$this->load->model('UserModel');
				$data['asmlist'] = $this->UserModel->getUserByRoleId($this->UserModel->getRoleId(ASM));
				$this->load->view('common/header');
				$this->load->view('viewasm',$data);
		}

}

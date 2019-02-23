<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nh extends CI_Controller {

	 public function index()
		{
			//$this->load->view('common/header');
			//$this->load->view('login');
		}
    public function createNh()
    {
        $this->load->model('UserModel');
        $data['nh'] = $this->UserModel->getUserByRoleId($this->UserModel->getRoleId(NH));
        $this->load->view('common/header');
        $this->load->view('createnh',$data);
    }
    public function addNh()
    {
         $this->load->model('UserModel');
         $data['username'] = $this->input->post('username');
         if(!$this->UserModel->userEmailCheck($data['username'])){
                 $data['ID'] = $this->input->post('nhid');
                 $data['name'] = $this->input->post('name');
                 $data['password'] = md5($this->input->post('password'));
                 $data['mobile'] = $this->input->post('mobile');
                 $data['doj'] = $this->input->post('doj');
                 $data['role_id'] = $this->UserModel->getRoleId(NH);
                 $insert =  $this->db->insert('bs_user',$data);
                 if($insert)
                 {
                   $message = $this->session->set_flashdata('message', $data['ID'].' Account Name:'.$data['name'].' has been successfully created');
                   redirect(base_url('Nh/createNh/'), 'refresh', $message);

                 }

       }else{
         $message = $this->session->set_flashdata('error', 'Email already exists!');
         redirect(base_url('Nh/createNh/'), 'refresh', $message);
       }
    }
		public function viewNh()
		{
				$this->load->model('UserModel');
				$data['nhlist'] = $this->UserModel->getUserByRoleId($this->UserModel->getRoleId(NH));
				$this->load->view('common/header');
				$this->load->view('viewnh',$data);
		}
}

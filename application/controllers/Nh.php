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
                   redirect(base_url('Nh/viewNh/'), 'refresh', $message);

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
		public function editNh($user_id = null)
		{
				$this->load->model('UserModel');
				$data['editnh'] = $this->UserModel->loadUserProfile($user_id);
				$this->load->view('common/header');
				$this->load->view('editnh',$data);
		}
		public function updateNh($user_id = null)
		{
			$this->load->model('UserModel');
			$data['password'] = md5($this->input->post('password'));
			$update = $this->UserModel->updateUser($user_id, $data);
			if($update){
				$message = $this->session->set_flashdata('message', 'Updated successfully !');
				redirect(base_url('Nh/viewNh'), 'refresh',$message);
			}
		}
		public function deleteNh($user_id = null)
		{
			$this->load->model('UserModel');
			$deleteasm = $this->UserModel->deleteUser($user_id);
			if($deleteasm){
				$message = $this->session->set_flashdata('message', 'Account Deleted !');
				redirect(base_url('Nh/viewNh'), 'refresh', $message);
			}
		}
		//------------------------NH Panel------------------------------------
		public function rateStore()
		{
				$this->load->model('StoreModel');
				$zm_id = $this->session->userdata['ID'];
				$role = $this->session->userdata['role'];
				$data['nhstorelist'] = $this->StoreModel->getStore();
				$this->load->view('common/header');
				$this->load->view('nhratestore', $data);
		}
		public function Profile()
		{
				$this->load->model('UserModel');
				$nh_id = $this->session->userdata['ID'];
				$role = $this->session->userdata['role'];
				$data['profilenh'] = $this->UserModel->getUser($nh_id);
				$this->load->view('common/header');
				$this->load->view('profilenh', $data);
		}
		public function asmList()
		{
				$this->load->model('UserModel');
				$zm_id = $this->session->userdata['ID'];
				$role = $this->session->userdata['role'];
				$data['nhasmlist'] = $this->UserModel->getUserByRoleId($this->UserModel->getRoleId(ASM));
				$this->load->view('common/header');
				$this->load->view('nhasmlist', $data);
		}
		public function zmList()
		{
				$this->load->model('UserModel');
				$zm_id = $this->session->userdata['ID'];
				$role = $this->session->userdata['role'];
				$data['nhzmlist'] = $this->UserModel->getUserByRoleId($this->UserModel->getRoleId(ZM));
				$this->load->view('common/header');
				$this->load->view('nhzmlist', $data);
		}
}

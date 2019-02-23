<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Zm extends CI_Controller {

	 public function index()
		{
			//$this->load->view('common/header');
			//$this->load->view('login');
		}
    public function createZm()
    {
        $this->load->model('UserModel');
        $data['zm'] = $this->UserModel->getUserByRoleId($this->UserModel->getRoleId(ZM));
        $this->load->view('common/header');
        $this->load->view('createzm',$data);
    }
    public function addZm()
    {
         $this->load->model('UserModel');
         $data['username'] = $this->input->post('username');
         if(!$this->UserModel->userEmailCheck($data['username'])){
                 $data['ID'] = $this->input->post('zmid');
                 $data['name'] = $this->input->post('name');
                 $data['password'] = md5($this->input->post('password'));
                 $data['mobile'] = $this->input->post('mobile');
                 $data['doj'] = $this->input->post('doj');
                 $data['role_id'] = $this->UserModel->getRoleId(ZM);
                 $insert =  $this->db->insert('bs_user',$data);
                 if($insert)
                 {
                   $message = $this->session->set_flashdata('message', $data['ID'].' Account Name:'.$data['name'].' has been successfully created');
                   redirect(base_url('Zm/viewZm/'), 'refresh', $message);

                 }

       }else{
         $message = $this->session->set_flashdata('error', 'Email already exists!');
         redirect(base_url('Zm/createZm/'), 'refresh', $message);
       }
    }
		public function viewZm()
		{
				$this->load->model('UserModel');
				$data['zmlist'] = $this->UserModel->getUserByRoleId($this->UserModel->getRoleId(ZM));
				$this->load->view('common/header');
				$this->load->view('viewzm',$data);
		}
		public function editZm($user_id = null)
		{
				$this->load->model('UserModel');
				$data['editzm'] = $this->UserModel->loadUserProfile($user_id);
				$this->load->view('common/header');
				$this->load->view('editzm',$data);
		}
		public function updateZm($user_id = null)
		{
			$this->load->model('UserModel');
			$data['password'] = md5($this->input->post('password'));
			$update = $this->UserModel->updateUser($user_id, $data);
			if($update){
				$message = $this->session->set_flashdata('message', 'Updated successfully !');
				redirect(base_url('Zm/viewZm'), 'refresh',$message);
			}
		}
		public function deleteZm($user_id = null)
		{
			$this->load->model('UserModel');
			$deleteasm = $this->UserModel->deleteUser($user_id);
			if($deleteasm){
				$message = $this->session->set_flashdata('message', 'Account Deleted !');
				redirect(base_url('Zm/viewZm'), 'refresh', $message);
			}
		}
}

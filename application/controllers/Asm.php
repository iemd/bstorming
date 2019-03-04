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
                   redirect(base_url('Asm/viewAsm/'), 'refresh', $message);

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
		public function editAsm($user_id = null)
		{
				$this->load->model('UserModel');
				$data['editasm'] = $this->UserModel->loadUserProfile($user_id);
				$this->load->view('common/header');
				$this->load->view('editasm',$data);
		}
		public function updateAsm($user_id = null)
		{
			$this->load->model('UserModel');
			$data['password'] = md5($this->input->post('password'));
			$update = $this->UserModel->updateUser($user_id, $data);
			if($update){
				$message = $this->session->set_flashdata('message', 'Updated successfully !');
				redirect(base_url('Asm/viewAsm'), 'refresh',$message);
			}
		}
		public function deleteAsm($user_id = null)
		{
			$this->load->model('UserModel');
			$deleteasm = $this->UserModel->deleteUser($user_id);
			if($deleteasm){
				$message = $this->session->set_flashdata('message', 'Account Deleted !');
				redirect(base_url('Asm/viewAsm'), 'refresh', $message);
			}
		}
		public function selectStore($asm_id = null)
		 {
			 $this->load->model('StoreModel');
			 $this->load->model('UserModel');
			 $data['storelist'] = $this->StoreModel->getStore();
			 $data['asmstorelist'] = $this->StoreModel->getStoreByAsmId($asm_id);
			 $data['asmdetail'] = $this->UserModel->getUser($asm_id);
			 $this->load->view('common/header');
			 $this->load->view('allocatestoreasm',$data);
		 }
		 public function allocateStore(){
			 $this->load->model('StoreModel');
			 $asm_id = $this->input->post('asmid');
			 $store_ids = $this->input->post('store');
			 //print_r($this->input->post());die;
			 $allocated = $this->StoreModel->allocatestore($store_ids, $asm_id);
			 if($allocated)
			 {
				 $message = $this->session->set_flashdata('message', 'Store successfully allocated!');
				 redirect(base_url('Asm/viewAsm/'), 'refresh', $message);

			 }
		 }
		 //------------------------ASM Panel------------------------------------
		 public function rateStore()
		 {
			   $this->load->model('StoreModel');
			   $asm_id = $this->session->userdata['ID'];
				 $role = $this->session->userdata['role'];
				 $data['asmstorelist'] = $this->StoreModel->getStoreByAsmId($asm_id);
				 $this->load->view('common/header');
				 $this->load->view('asmratestore', $data);
		 }
		 public function Profile()
		 {
				 $this->load->model('UserModel');
				 $asm_id = $this->session->userdata['ID'];
				 $role = $this->session->userdata['role'];
				 $data['profileasm'] = $this->UserModel->getUser($asm_id);
				 $this->load->view('common/header');
				 $this->load->view('profileasm', $data);
		 }
		 public function calendarDetails()
		 {
				 //$this->load->model('UserModel');
				 //$data['asmlist'] = $this->UserModel->getUserByRoleId($this->UserModel->getRoleId(ASM));
				 $this->load->view('common/header');
				 $this->load->view('asmcalendardetails');
		 }
		 public function visitReport()
		 {
				 //$this->load->model('UserModel');
				 //$data['asmlist'] = $this->UserModel->getUserByRoleId($this->UserModel->getRoleId(ASM));
				 $this->load->view('common/header');
				 $this->load->view('asmvisitreport');
		 }
}

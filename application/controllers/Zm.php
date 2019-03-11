<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Zm extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('StoreModel');
        $this->load->model('UserModel');
        $this->load->model('City_Model');
    }

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
		public function selectAsm($zm_id = null)
		 {
			 $this->load->model('UserModel');
			 $data['asmlist'] = $this->UserModel->getUserByRoleId($this->UserModel->getRoleId(ASM));
			 $data['zmasmlist'] = $this->UserModel->getAsmByZmId($zm_id);
			 $data['zmdetail'] = $this->UserModel->getUser($zm_id);
			 $this->load->view('common/header');
			 $this->load->view('assignasmzm',$data);
		 }
		 public function assignAsm(){
			 $this->load->model('UserModel');
			 $zm_id = $this->input->post('zmid');
			 $asm_ids = $this->input->post('asm');
			 //print_r($this->input->post());die;
			 $assigned = $this->UserModel->assignasm($asm_ids, $zm_id);
			 if($assigned)
			 {
				 $message = $this->session->set_flashdata('message', 'ASM successfully assigned!');
				 redirect(base_url('Zm/viewZm/'), 'refresh', $message);

			 }
		 }
		//------------------------ZM Panel------------------------------------
		public function rateStore()
		{
				$this->load->model('StoreModel');
				$zm_id = $this->session->userdata['ID'];
				$role = $this->session->userdata['role'];
				$data['zmstorelist'] = $this->StoreModel->getStoreByZmId($zm_id);
				$this->load->view('common/header');
				$this->load->view('zmratestore', $data);
		}
		public function Profile()
		{
				$this->load->model('UserModel');
				$zm_id = $this->session->userdata['ID'];
				$role = $this->session->userdata['role'];
				$data['profilezm'] = $this->UserModel->getUser($zm_id);
				$this->load->view('common/header');
				$this->load->view('profilezm', $data);
		}
		public function asmList()
		{
				$this->load->model('StoreModel');
				$zm_id = $this->session->userdata['ID'];
				$role = $this->session->userdata['role'];
				$data['zmasmlist'] = $this->StoreModel->getAsmByZmId($zm_id);
				$this->load->view('common/header');
				$this->load->view('zmasmlist', $data);
		}
		public function selectStore($zm_id = NULL)
                                {
                         $data["allstore"] = $this->StoreModel->getStoteIdWithAllocated();
                         $data["zmlist"] = $this->UserModel->getUser($zm_id);
			 $this->load->view('common/header');
			 $this->load->view('allocate_store_zm', $data);
                                }
                 public function allocateStore(){
                    $storeid = $this->input->post('store');                    
                    $zmid = $this->input->post('zmid');
                    if(!empty($storeid)){
                        $result = $this->StoreModel->insertZmStore($storeid, $zmid);
                        if($result === TRUE){
                            $this->session->set_flashdata("message", "Store Assinged Successfully.");
                             redirect('Zm/selectStore/'.$zmid);
                        }else {
                            $this->session->set_flashdata("error", "Some problems ocured");
                        redirect('Zm/selectStore/'.$zmid);
                        }
                    }else {
                        $this->session->set_flashdata("error", "Please Select Store");
                        redirect('Zm/selectStore/'.$zmid);
                    }
                    
                 }
                 public function selectStoreFirstProcess($zmid = NULL){
                     $data["zmid"] = $zmid;
                     $data["allcity"] = $this->City_Model->fetchAllCity();
                     $this->load->view('common/header');
                     $this->load->view('select_city', $data);
                         
                     
                 }
                 
                 public function getStorName(){
                     $cityid = $this->input->post('city_id');
                     $result = $this->StoreModel->getStroeByCityId($cityid);
                     if(!empty($result)){
                         foreach ($result as $row){
                             echo "<tr>";
                             echo "<td>".$row["StoreID"]."</td>";
                             echo "<td>".$row["store_name"]."</td>";
                             echo "<td>".$row["city_name"]."</td>";
                             echo "<td><input type='checkbox' name='store[]' value='".$row['sid']."' style='width:20px;height:20px;'></td>";
                             echo "</tr>";
                         }
                     }else{
                         echo '0';
                     }
                 }


}

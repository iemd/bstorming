<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Store extends CI_Controller {

	 public function index()
		{
			$this->load->view('common/header');
			$this->load->view('store');
		}
		public function createStore()
    {
			  $this->load->model('StoreModel');
			  $data['store'] = $this->StoreModel->getStore();
        $this->load->view('common/header');
        $this->load->view('createstore',$data);
    }
    public function addStore()
    {
         $data['store_name'] = $this->input->post('storename');
				 $data['address'] = $this->input->post('address');
				 $data['city'] = $this->input->post('city');
				 $data['pincode'] = $this->input->post('pincode');
				 $data['manager_name'] = $this->input->post('manager');
				 $data['mobileno'] = $this->input->post('mobileno');
				 $data['StoreID'] = $this->input->post('storeid');
				 $data['password'] = md5($this->input->post('password'));

         $insert =  $this->db->insert('bs_store',$data);
         if($insert)
          {
              $message = $this->session->set_flashdata('message', $data['StoreID'].' has been successfully created');
              redirect(base_url('Store/viewStore/'), 'refresh', $message);

          }else{
		         $message = $this->session->set_flashdata('error', 'Database Error!');
		         redirect(base_url('Store/viewStore/'), 'refresh', $message);
					}
    }
    public function viewStore()
     {
			 $this->load->model('StoreModel');
			 $data['storelist'] = $this->StoreModel->getStore();
       $this->load->view('common/header');
       $this->load->view('viewstore',$data);
     }
		 public function editStore($store_id = null)
		 {
				 $this->load->model('StoreModel');
				 $data['editstore'] = $this->StoreModel->getStore($store_id);
				 $this->load->view('common/header');
				 $this->load->view('editstore',$data);
		 }
		 public function updateStore($store_id = null)
		 {
			  $this->load->model('StoreModel');
			  $data['store_name'] = $this->input->post('storename');
			  $data['address'] = $this->input->post('address');
				$data['city'] = $this->input->post('city');
				$data['pincode'] = $this->input->post('pincode');
				$data['manager_name'] = $this->input->post('manager');
				$data['mobileno'] = $this->input->post('mobileno');
				$data['StoreID'] = $this->input->post('storeid');
				$data['password'] = md5($this->input->post('password'));
			 $update = $this->StoreModel->updateStore($store_id, $data);
			 if($update){
				 $message = $this->session->set_flashdata('message', 'Updated successfully !');
				 redirect(base_url('Store/viewStore'), 'refresh',$message);
			 }
		 }
		 public function deleteStore($store_id = null)
		 {
			 $this->load->model('StoreModel');
			 $deletestore = $this->StoreModel->deleteStore($store_id);
			 if($deletestore){
				 $message = $this->session->set_flashdata('message', 'Store Deleted !');
				 redirect(base_url('Store/viewStore'), 'refresh', $message);
			 }
		 }

  }

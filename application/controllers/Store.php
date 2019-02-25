<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Store extends CI_Controller {

	 public function index()
		{
			$this->load->view('common/header');
			$this->load->view('store');
		}
		public function createBrand()
    {
        $this->load->view('common/header');
        $this->load->view('createbrand');
    }
    public function addBrand()
    {
         $data['brand_name'] = $this->input->post('brandname');
         $insert =  $this->db->insert('bs_brand',$data);
         if($insert)
          {
              $message = $this->session->set_flashdata('message', $data['brand_name'].' has been successfully created');
              redirect(base_url('Store/viewBrand/'), 'refresh', $message);

          }else{
		         $message = $this->session->set_flashdata('error', 'Database Error!');
		         redirect(base_url('Store/viewBrand/'), 'refresh', $message);
					}
    }
    public function viewBrand()
     {
			 $this->load->model('StoreModel');
			 $data['brandlist'] = $this->StoreModel->getBrand();
       $this->load->view('common/header');
       $this->load->view('viewbrand',$data);
     }
		 public function editBrand($brand_id = null)
		 {
				 $this->load->model('StoreModel');
				 $data['editbrand'] = $this->StoreModel->getBrand($brand_id);
				 $this->load->view('common/header');
				 $this->load->view('editbrand',$data);
		 }
		 public function updateBrand($brand_id = null)
		 {
			 $this->load->model('StoreModel');
			 $data['brand_name'] = $this->input->post('brandname');
			 $update = $this->StoreModel->updateBrand($brand_id, $data);
			 if($update){
				 $message = $this->session->set_flashdata('message', 'Updated successfully !');
				 redirect(base_url('Store/viewBrand'), 'refresh',$message);
			 }
		 }
		 public function deleteBrand($brand_id = null)
		 {
			 $this->load->model('StoreModel');
			 $deletebrand = $this->StoreModel->deleteBrand($brand_id);
			 if($deletebrand){
				 $message = $this->session->set_flashdata('message', 'Brand Deleted !');
				 redirect(base_url('Store/viewBrand'), 'refresh', $message);
			 }
		 }

  }

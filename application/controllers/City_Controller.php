<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class City_Controller extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('City_Model');
    }
    public function index(){
       $this->load->view('common/header');
       $this->load->view('cityprofile');
    }
    public function CreateCity(){
       $this->load->view('common/header');
       $this->load->view('create_city_view');
    }
    public function saveCity(){
        $cityname = $this->db->escape_str(trim($this->input->post('cityname')));
        $result = $this->City_Model->checkCityNameExist($cityname);
        if($result === FALSE){
            $data = array(
                "city_name" => $cityname,
                "city_pincode" => $this->db->escape_str(trim($this->input->post('pincode')))
            );
            $save = $this->City_Model->insertData($data);
            if($save === TRUE){
                $this->session->set_flashdata("message", "City Name Created Successfully.");
                redirect('create-city');
            }else {
                $this->session->set_flashdata("error", "Some problems occured.");
                redirect('create-city');
            }
        }else {
            $this->session->set_flashdata("error", "City Name Already Exits.");
            redirect('create-city');
        }
    }
     public function viewCity(){
        $data["result"] = $this->City_Model->fetchAllCity();
       $this->load->view('common/header');
       $this->load->view('city_list_view', $data);
    }
    
    public function fetchPincodeByCityId(){
        $cityid = $this->input->post('city_id');
        $result = $this->City_Model->getPincodeByCityId($cityid);
        if(!empty($result)){
            $array = ["pincode" => $result[0]["city_pincode"]  ];
echo json_encode($array);
        
        }else {
            echo '0';
        }
    }
    

}



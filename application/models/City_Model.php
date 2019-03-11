<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class City_Model extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    public function checkCityNameExist($cityname){
        $query = $this->db->get_where('bs_city', array("city_name" => $cityname));
        if($query->num_rows() > 0){
            return TRUE;
        }
        else {
            return FALSE;
        }
    }
    public function insertData($data){
        $this->db->insert("bs_city", $data);
        if($this->db->affected_rows() > 0){
            return TRUE;
        }else {
            return FALSE;
        }
    }
    public function fetchAllCity(){
        $query = $this->db->get('bs_city');
        if($query->num_rows() > 0){
            return $query->result_array();
        }else {
            return FALSE;
        }
    }
    public function getPincodeByCityId($cityid){
        $query = $this->db->get_where('bs_city', array("city_id" => $cityid));
        if($query->num_rows() > 0){
            return $query->result_array();
        }
        else {
            return FALSE;
        }
    }
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class StoreModel extends CI_Model
{

   public function getStore($store_id = null)
    {
      $this->db->select('*');
      if(!empty($store_id)){
        $this->db->where('store_id',$store_id);
      }
      $this->db->from('bs_store');
      $query = $this->db->get();
      $result = $query->result_array();
      return $result;
    }

    public function updateStore($store_id, $data)
      {
        $this->db->where('store_id', $store_id);
        return $this->db->update('bs_store', $data);

      }

    public function deleteStore($store_id)
      {
        $whereArray = array("store_id"=>$store_id);
        $query = $this->db->delete('bs_store',$whereArray);
        if ($query) {
          return true;
        } else {
          return false;
          }
      }
}
?>

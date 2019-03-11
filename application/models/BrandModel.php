<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BrandModel extends CI_Model
{

   public function getBrand($brand_id = null)
    {
      $this->db->select('*');
      if(!empty($brand_id)){
        $this->db->where('brand_id',$brand_id);
      }
      $this->db->from('bs_brand');
      $query = $this->db->get();
      $result = $query->result_array();
      return $result;
    }
    
    public function updateBrand($brand_id, $data)
      {
        $this->db->where('brand_id', $brand_id);
        return $this->db->update('bs_brand', $data);

      }

    public function deleteBrand($brand_id)
      {
        $whereArray = array("brand_id"=>$brand_id);
        $query = $this->db->delete('bs_brand',$whereArray);
        if ($query) {
          return true;
        } else {
          return false;
          }
      }
      
      public function getStroeByBrandID($brandid)
       {
          $this->db->select("sb.store_id, sb.brand_id, s.store_id, s.store_name")
                  ->from('bs_store_brand sb')
                  ->join('bs_store s', 's.store_id = sb.store_id')
                  ->where('sb.brand_id', $brandid);
          $query = $this->db->get();
          //echo $this->db->last_query();die;
          if($query->num_rows() > 0){
              $result = $query->result_array();
          return $result;
          }else {
              return FALSE;
          }
       }
}
?>

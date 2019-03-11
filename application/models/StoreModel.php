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
       public function getBrandByStoreId($store_id)
       {
          $this->db->select('*');
          $this->db->where('sb.store_id',$store_id);
          $this->db->from('bs_store_brand as sb');
          $this->db->join('bs_brand as b', 'sb.brand_id = b.brand_id');
          $query = $this->db->get();
          //echo $this->db->last_query();die;
          $result = $query->result_array();
          return $result;
       }
       public function getStoreByBrandId($brand_id)
       {
          $this->db->select('*');
          $this->db->where('sb.brand_id',$brand_id);
          $this->db->from('bs_store_brand as sb');
          $this->db->join('bs_store as s', 'sb.store_id = s.store_id');
          $query = $this->db->get();
          //echo $this->db->last_query();die;
          $result = $query->result_array();
          return $result;
       }
       public function addRemoveBrand($brand_ids = null, $store_id=null)
       {
          if(empty($brand_ids)){
            $whereArray = array("store_id"=>$store_id);
            $query = $this->db->delete('bs_store_brand',$whereArray);
            if ($query) {
              return true;
            } else {
              return false;
              }
          }else{
            $whereArray = array("store_id"=>$store_id);
            $query = $this->db->delete('bs_store_brand',$whereArray);
            foreach($brand_ids as $brand_id){
              $data['store_id'] = $store_id;
              $data['brand_id'] = $brand_id;
              $added = $this->db->insert('bs_store_brand',$data);
           }
         }
            return $added;
       }
       public function allocatestore($store_ids = null, $asm_id=null)
       {
          if(empty($store_ids)){
            $whereArray = array("asm_id"=>$asm_id);
            $query = $this->db->delete('bs_asm_store',$whereArray);
            if ($query) {
              return true;
            } else {
              return false;
              }
          }else{
            $whereArray = array("asm_id"=>$asm_id);
            $query = $this->db->delete('bs_asm_store',$whereArray);
            foreach($store_ids as $store_id){
              $data['store_id'] = $store_id;
              $data['asm_id'] = $asm_id;
              $allocated = $this->db->insert('bs_asm_store',$data);
           }
         }
            return $allocated;
       }
       public function getStoreByAsmId($asm_id)
       {
          $this->db->select('*');
          $this->db->where('as.asm_id',$asm_id);
          $this->db->from('bs_asm_store as as');
          $this->db->join('bs_store as s', 'as.store_id = s.store_id');
          $query = $this->db->get();
          //echo $this->db->last_query();die;
          $result = $query->result_array();
          return $result;
       }
       public function getStoreByZmId($zm_id)
       {
          $this->db->select('s.*');
          $this->db->where('za.zm_id',$zm_id);
          $this->db->from('bs_zm_asm as za');
          $this->db->join('bs_asm_store as as','za.asm_id = as.asm_id');
          $this->db->join('bs_store as s', 'as.store_id = s.store_id');
          $this->db->group_by('as.store_id');
          $query = $this->db->get();
          //echo $this->db->last_query();die;
          $result = $query->result_array();
          return $result;
       }
       public function getAsmByZmId($zm_id)
       {
          $this->db->select('u.*');
          $this->db->where('za.zm_id',$zm_id);
          $this->db->from('bs_zm_asm as za');
          $this->db->join('bs_user as u','za.asm_id = u.user_id');
          $query = $this->db->get();
          //echo $this->db->last_query();die;
          $result = $query->result_array();
          return $result;
       }
       public function getStoteIdWithAllocated(){
           $this->db->select("s.store_id as sid, s.store_name, s.address, s.manager_name, s.mobileno, s.created_at, "
                   . "z.store_id as zsid, s.StoreID ")
                   ->from('bs_store s')
                   ->join('bs_zm_store z', 'z.store_id = s.store_id', 'left');
           $query = $this->db->get();
           if($query->num_rows() > 0){
               return $query->result_array();
           }else {
               return FALSE;
           }
           
       }
       public function insertZmStore($store, $zmid){
           for($i=0;$i<count($store);$i++){
               $data = array(
                   "store_id" => $store[$i],
                   "zm_id" => $zmid
               );
               $this->db->insert('bs_zm_store', $data);
           }
           
           if($this->db->affected_rows() > 0){
               return TRUE;
           }else {
               return FALSE;
           }
       }
       public function getStroeByCityId($cityid){
           $this->db->select('s.store_id as sid, s.store_name, s.city, s.StoreID, c.city_id, c.city_name, z.store_id as zsid ')
                   ->from('bs_store s')
                   ->join('bs_city c', 'c.city_id = s.city')
                   ->join('bs_zm_store z', 'z.store_id = s.store_id', 'left')
                   ->where_in('s.city', $cityid)
                   ->order_by('c.city_id', 'ASC');
           $query = $this->db->get();
           if($query->num_rows() > 0){
               return $query->result_array();
           }else {
               return FALSE;
           }
           
       }
       
}
?>

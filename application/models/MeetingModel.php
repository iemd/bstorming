<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MeetingModel extends CI_Model
{

   public function getAllMeetings()
    {
      $this->db->select('*');
      $this->db->from('bs_store_meeting');
      $query = $this->db->get();
      $result = $query->result_array();
      return $result;
    }
    public function getTodayMeetings()
     {
       $today = date('Y-m-d');
       $this->db->select('*');
       $this->db->where('meeting_date',$today);
       $this->db->from('bs_store_meeting');
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
      public function getMeetings($user_id=null)
      {
          if(!empty($user_id)){
            $this->db->where('assigned_by',$user_id);
          }
          $result = $this->db->get("bs_store_meeting")->result();
          return $result;
      }
}
?>

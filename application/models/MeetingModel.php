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
       $this->db->join('bs_store', 'bs_store_meeting.store_id = bs_store.store_id');
       $query = $this->db->get();
       $result = $query->result_array();
       return $result;
     }
     public function getMeetingsByDate($date)
      {
        $this->db->select('*');
        $this->db->where('DATE(meeting_date)',$date);
        $this->db->from('bs_store_meeting');
        $this->db->join('bs_store', 'bs_store_meeting.store_id = bs_store.store_id');
        $query = $this->db->get();
        $result = $query->result_array();
        return $result;
      }
     public function getLastMeetingByStore($store_id)
      {
        $this->db->select_max('meeting_date')->from('bs_store_meeting')->where('store_id',$store_id);
        $subQuery =  $this->db->get_compiled_select();
        $this->db->select('*');
        $this->db->where("meeting_date IN ($subQuery)", NULL, FALSE);
        $this->db->from('bs_store_meeting');
        $this->db->join('bs_store', 'bs_store_meeting.store_id = bs_store.store_id');
        $this->db->join('bs_user', 'bs_store_meeting.assigned_by = bs_user.user_id');
        $this->db->join('bs_user_role', 'bs_user.role_id = bs_user_role.role_id');
        $query = $this->db->get();
        //echo $this->db->last_query();die;
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
          $this->db->select("DATE(`meeting_date`) as meeting_date, COUNT(`meeting_date`) as noofmeetings");
          if(!empty($user_id)){
            $this->db->where('assigned_by',$user_id);
          }
          $this->db->group_by("DATE(`meeting_date`)");
          $result = $this->db->get("bs_store_meeting")->result();
          return $result;
      }
}
?>

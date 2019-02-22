<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AsmModel extends CI_Model
{

    public function getAsmByRoleName($role)
    {
       $this->db->select('*');
       $this->db->where('ur.role',$role);
       $this->db->from('bs_user u');
       $this->db->join('bs_user_role ur', 'ur.role_id = u.role_id');
       $query = $this->db->get();
       $this->db->last_query();
       $result = $query->result_array();
       return $result;
    }
}
?>

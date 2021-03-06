<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model
{

   public function getUser($user_id = null)
    {
      $this->db->select('*');
      if(!empty($user_id)){
        $this->db->where('user_id',$user_id);
      }
      $this->db->from('bs_user');
      $query = $this->db->get();
      $result = $query->result_array();
      return $result;
    }
    public function getRole($user_id)
     {
       $this->db->select('ur.role');
       $this->db->where('user_id',$user_id);
       $this->db->from('bs_user u');
       $this->db->join('bs_user_role ur', 'ur.role_id = u.role_id');
       $query = $this->db->get();
       $count = $query->num_rows();
       $role = '';
       if($count > 0){
           $result = $query->result_array();
           foreach($result as $row){
             $role = $row['role'];
           }
           return $role;
       }else{
          false;
       }
     }
     public function getRoleId($role)
      {
        $this->db->select('*');
        $this->db->where('role',$role);
        $this->db->from('bs_user_role');
        $query = $this->db->get();
        $count = $query->num_rows();
        $role_id = '';
        if($count > 0){
            $result = $query->result_array();
            foreach($result as $row){
              $role_id = $row['role_id'];
            }
            return $role_id;
        }else{
           false;
        }
      }
  public function authenticate($username,$password)
    {
      $array = array("username"=>$username,"password"=>md5($password));
      $query = $this->db->get_where('bs_user',$array);
      //echo $this->db->last_query();

      $count = $query->num_rows();
      $result = $query->result_array();
      //print_r($result); die;
      if($count > 0){
        $role = $this->getRole($result[0]['user_id']);
        $userdetails = array("ID"=>$result[0]['user_id'],'loggedIn'=>true,'role'=>$role);
        $this->session->set_userdata($userdetails);
      }else{
        $userdetails = array("ID"=>'','loggedIn'=>false, 'role'=>'');
        $this->session->unset_userdata($userdetails);
      }
      return $count;
    }
    public function userEmailCheck($email)
    {
        $this->db->where('username',$email);
        $query = $this->db->get('bs_user');
        if ($query->num_rows() > 0){
          return true;
          }
          else{
            return false;
          }
    }
     public function loadUserProfile($user_id)
    {
      $this->db->select('*');
      $this->db->where('user_id',$user_id);
      $this->db->from('bs_user u');
      $this->db->join('bs_user_role ur', 'ur.role_id = u.role_id');
      $query = $this->db->get();
      $this->db->last_query();
      $result = $query->result_array();
      return $result;
    }
    public function getUserByRoleId($role_id)
    {
       $this->db->select('*');
       $this->db->where('u.role_id',$role_id);
       $this->db->from('bs_user u');
       $this->db->join('bs_user_role ur', 'ur.role_id = u.role_id');
       $query = $this->db->get();
       //$this->db->last_query();
       $result = $query->result_array();
       return $result;
    }
    public function updateUser($user_id, $data)
      {
        $this->db->where('user_id', $user_id);
        return $this->db->update('bs_user', $data);

      }

    public function deleteUser($user_id)
      {
        $whereArray = array("user_id"=>$user_id);
        $query = $this->db->delete('bs_user',$whereArray);
        if ($query) {
          return true;
        } else {
          return false;
          }
      }
      public function getAsmByZmId($zm_id)
      {
         $this->db->select('*');
         $this->db->where('za.zm_id',$zm_id);
         $this->db->from('bs_zm_asm za');
         $this->db->join('bs_user u', 'za.zm_id = u.user_id');
         $query = $this->db->get();
         //echo $this->db->last_query();die;
         $result = $query->result_array();
         return $result;
      }
      public function assignasm($asm_ids = null, $zm_id=null)
      {
         if(empty($asm_ids)){
           $whereArray = array("zm_id"=>$zm_id);
           $query = $this->db->delete('bs_zm_asm',$whereArray);
           if ($query) {
             return true;
           } else {
             return false;
             }
         }else{
           $whereArray = array("zm_id"=>$zm_id);
           $query = $this->db->delete('bs_zm_asm',$whereArray);
           foreach($asm_ids as $asm_id){
             $data['asm_id'] = $asm_id;
             $data['zm_id'] = $zm_id;
             $assigned = $this->db->insert('bs_zm_asm',$data);
          }
        }
           return $assigned;
      }
}
?>

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Loginm extends CI_Model{
    public function validate_user($data){
        $userEmail=$this->input->post('email');
        $password=$this->input->post('password');
        $this->db->select('u.admin_id as userId,u.admin_type,u.admin_email,u.pass,u.admin_type,u.Designetion,u.admin_name');
        $this->db->where('admin_email',$userEmail);
        $this->db->where('pass',$password);
        $this->db->where('admin_type',"admin");
//        $this->db->where('fkUserType',"Admin");
        $this->db->from('admin u');
        $query = $this->db->get();
        return $query->row();
    }
//    public function loginInfo($data1){
//        $this->db->insert('logininfo',$data1);
//        $insert_id = $this->db->insert_id();
//        return $insert_id;
//    }
//    public function logout($id,$data)
//    {
//        $this->db->where('id',$id);
//        $this->db->update('logininfo',$data);
//    }
}
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Patientsm extends CI_Model
{

    public function allPatient()
    {
        $this->db->select('patient_id,pat_first_name,pat_last_name,last_visit,pat_phone,enter_date,age ,patient_image,gender,address');
        $this->db->from('patients');
        $query=$this->db->get();
        return $query->result();

    }

    public function getAllStaff()
    {
        $this->db->select('staff_id,first_name,last_name,staff_email,staff_pass,address');
        $this->db->from('staff');
        $query=$this->db->get();
        return $query->result();
    }

    public function getAllWorActive()
    {
        $this->db->select('*');
        $this->db->where('word_status', "0");
        $this->db->from('word');
        $query=$this->db->get();
        return $query->result();
    }


    public function insertpateint($data)
    {
        $this->security->xss_clean($data);
        $this->db->insert('patients', $data);
        $id=$this->db->insert_id();
        return $id;


    }



}
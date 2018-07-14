<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Staffm extends CI_Model
{
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


    public function insertDoctors($data)
    {

        $this->security->xss_clean($data);

        $this->db->insert('doctors', $data);
        $id=$this->db->insert_id();
        return $id;


    }

    public function getDoctorById($d_id)
    {
        $this->db->from('doctors');
        $this->db->where('doc_depid', $d_id)->select('doc_id,first_name,last_name');
        $query = $this->db->get();
        return $query->result();
    }


    public function insertDoctorDegree($degreeid)
    {
        $error=$this->db->insert('doctrors_digrees', $degreeid);

        if (empty($error))
        {
            return $this->db->error();
        }
        else {

            return $error = null;
        }

    }

}
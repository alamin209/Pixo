<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Doctorsm extends CI_Model
{
    public function getAllDoctors()
    {
        $this->db->select('doc_id,first_name,last_name,doc_depid,Designation,doc_image,facebook,tweet,instragram,City,address');
        $this->db->from('doctors');
        $query=$this->db->get();
        return $query->result();
    }



    public function insertDoctors($data)
    {

        $this->security->xss_clean($data);

          $this->db->insert('admin', $data);
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
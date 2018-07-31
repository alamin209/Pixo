<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Depertments extends CI_Model
{
    public function getAllDepertment()
    {
        $this->db->select('dep_id,dep_name,dep_image,dep_status');
        $this->db->from('depertment');
        $query=$this->db->get();
        return $query->result();
    }



    public function insertdrprtment($data)
    {

        $this->security->xss_clean($data);

        $error=$this->db->insert('depertment', $data);
        if (empty($error))
        {
            return $this->db->error();
        }
        else {

            return $error = null;
        }


    }

    public function getDoctorById($d_id)
    {
        $this->db->from('doctors');
        $this->db->where('doc_depid', $d_id)->select('doc_id,first_name,last_name');
        $query = $this->db->get();
        return $query->result();
    }


    public function depertmentDetailsById($id)
    {
        $this->db->from('depertment');
        $this->db->where('dep_id', $id)->select('dep_id,dep_name,dep_image,depertment_description');
        $query = $this->db->get();
        return $query->result();


    }


/////////////////////////////////////////service//////////////////////
    public function insertdrprtmentservice($data)
    {
        $error=$this->db->insert('service_fee', $data);

        if (empty($error))
        {
            return $this->db->error();
        }
        else {

            return $error = null;
        }

    }
    public function getAllServicet()
    {
        $this->db->select('id,service_type,service_name,deperment_name,service_price,service_status');
        $this->db->from('service_chart');
        $query=$this->db->get();
        return $query->result();
    }




}
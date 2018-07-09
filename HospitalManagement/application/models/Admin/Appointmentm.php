<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Appointmentm extends CI_Model
{
    public function getAllDepertment()
    {
        $this->db->select('dep_id,Dep_name');
        $this->db->from('depertment');
        $query=$this->db->get();
        return $query->result();
    }



    public function insertAppooinment($data)
    {

        $this->security->xss_clean($data);
        $error=$this->db->insert('apoinment', $data);

        if (empty($error))
        {
            return $this->db->error();
        }
        else {

            return $error = null;
        }

    }


}
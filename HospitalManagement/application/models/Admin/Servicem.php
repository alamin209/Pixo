<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Servicem extends CI_Model
{

    public function getServiceById($id)
    {
        $this->db->select('id,service_name,service_type,service_price,deperment_name');
        $this->db->from('service_chart');
        $this->db->where('id', $id);
        $query = $this->db->get();
        return $query->result();


    }

    public function update_word( $id,$data)
    {
        $this->db->where('word_id', $id);
        $this->db->update('word',$data);

    }

    public function deleteWordById($id)
    {
        $this->db->where('word_id',$id)->delete('word');

    }

    public function getPateintByid($id)
    {
        $this->db->select("patient_id,pat_first_name,pat_last_name,pat_phone,enter_date,age ,gender,address ,email ");
        $this->db->from('patients');
        $this->db->where('patient_id', $id);
        $query = $this->db->get();
        return $query->result();

    }



}
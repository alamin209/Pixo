<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Staffm extends CI_Model
{
    public function getAllStaff()
    {
        $this->db->select('admin_id,first_name,last_name,admin_type,admin_name,admin_email,pass,confirmpassword,designetion,phone,address,city,user_activation_status,gender,staff_image,join_date');
        $this->db->where('user_activation_status', "1");
        $this->db->where('admin_type  =', "employee");
        $this->db->where('designetion !=', "doctor");
        $this->db->from('admin');
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



    public function getStaffById($id)
    {
        $this->db->select('*');
        $this->db->from('admin');
        $this->db->where('admin_id', $id);
        $query = $this->db->get();
        return $query->result();
    }

public function updateStaff($id, $data)
{
    $this->db->select('staff_image');
    $this->db->where('admin_id',$id);
    $this->db->from('admin');
    $query = $this->db->get();
    foreach ($query->result() as $itemImage){
        $oldImage = $itemImage->Staff_image;
    }

    $path   = 'public/assets/Staff/'.$oldImage;
    if (!file_exists($path)){

        $this->db->where('admin_id',$id);
        $this->db->update('admin', $data);
        //return 0;
    }
    else{

        unlink(FCPATH.$path);
        $this->db->where('admin_id',$id);
        $this->db->update('admin', $data);

    }

}



public function deleteStaffById($id)
{
    $this->db->where('admin_id',$id)->delete('admin');

}

    ///////////////////////// word ////////////////////////

     public function allWord()
  {
        $this->db->select('word_id,word_name,word_status');
        $this->db->from('word');
        $query=$this->db->get();
        return $query->result();


      }


      public function  updatewordbyid($d_id, $data)
      {
          $this->db->where('word_id', $d_id);
          $this->db->update('word',$data);
          return $d_id;

      }




      public function insertStaff($data)
      {
          $error=$this->db->insert('admin', $data);
          if (empty($error))
          {
              return $this->db->error();
          }
          else {

              return $error = null;
          }
      }

      public function insertWord($data)
      {

          $error=$this->db->insert('word', $data);

          if (empty($error))
          {
              return $this->db->error();
          }
          else {

              return $error = null;
          }
      }

      public function getWordById($id)
      {
          $this->db->select('word_id,word_name,word_status');
          $this->db->from('word');
          $this->db->where('word_id', $id);
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
}
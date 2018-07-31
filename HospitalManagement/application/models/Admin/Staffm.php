<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Staffm extends CI_Model
{
    public function getAllStaff()
    {
        $this->db->select('staff_id,first_name,last_name,staff_email,staff_pass,address,Staff_image,ages,phone,role,joiningdate');
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



    public function getStaffById($id)
    {
        $this->db->select('*');
        $this->db->from('staff');
        $this->db->where('staff_id', $id);
        $query = $this->db->get();
        return $query->result();
    }

public function updateStaf($id,$data)
{
    $this->db->select('Staff_image');
    $this->db->where('staff_id',$id);
    $this->db->from('staff');
    $query = $this->db->get();
    foreach ($query->result() as $itemImage){
        $oldImage = $itemImage->Staff_image;
    }

    $path   = 'public/assets/Staff/'.$oldImage;
    if (!file_exists($path)){

        $this->db->where('staff_id',$id);
        $this->db->update('staff', $data);
        //return 0;
    }
    else{

        unlink(FCPATH.$path);
        $this->db->where('staff_id',$id);
        $this->db->update('staff', $data);

    }

}



public function deleteStaffById($id)
{
    $this->db->where('staff_id',$id)->delete('staff');

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




      public function insertStaf($data)
      {

          $error=$this->db->insert('staff', $data);

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
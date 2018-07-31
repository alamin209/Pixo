<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staffword extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('admin_id')) {
            return redirect('login');
        }
        $this->load->model('Admin/Staffm');
        $this->load->model('Admin/Depertments');


    }

    public function index()
    {


        $data['staff'] = $this->Staffm->getAllStaff();
        $data['depertment'] = $this->Depertments->getAllDepertment();
        $this->load->view('Admin/allStaffs',$data);
    }


        public function addStaff()
     {
       $this->load->view('Admin/addStaff');


    }

       public function save_staff()
    {

          $config=
           array (
            'upload_path'=>'./public/assets/Staff/',
            'allowed_types' => "gif|jpg|png|jpeg",
            'overwrite' => TRUE,
            'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
            'max_height' => "768",
            'max_width' => "1024"

          );

       $this->load->library('upload', $config);
      $first_name=$this->input->post('first_name');
      $last_name=$this->input->post('last_name');
      $staff_email=$this->input->post('staff_email');
      $staff_pass=$this->input->post('staff_pass');
      $address=$this->input->post('address');
      $phone=$this->input->post('phone');
     $age=$this->input->post('age');
      $gender=$this->input->post('gender');
      $Joiningdate=$this->input->post('Joiningdate');
      $staff_status=$this->input->post('staff_status');
      $eduction=$this->input->post('eduction');
      $role=$this->input->post('role');
       $staff_confirmpassword=$this->input->post('confirm_password');

    if($this->upload->do_upload('s_Photo')) {

        $data1 = $this->upload->data();
        $imagepath = base_url("public/assets/Staff/" . $data1['raw_name'] . $data1['file_ext']);
        $post['imagepath'] = $imagepath;
        $data = array(
            'first_name' => $first_name,
            'last_name' => $last_name,
            'staff_email' => $staff_email,
            'staff_pass' => $staff_pass,
            'address' => $address,
            'phone' => $phone,
            'ages' => $age,
            'gender' => $gender,
            'Staff_image'=>$imagepath,
            'joiningdate' => $Joiningdate,
            'staff_status' => $staff_status,
            'staff_confirmpassword'=>$staff_confirmpassword,
            'eduction' => $eduction,
            'role' => $role

        );
        $this->data['error']= $this->Staffm->insertStaf($data);

        if (empty($this->data['error'])) {

            $this->session->set_flashdata('successMessage', ' Staff  Added Successfully');
            redirect('Admin/Staffword');

        } else {

            $this->session->set_flashdata('errorMessage', 'Some thing Went Wrong !! Please Try Again!!');
            redirect('Admin/Staffword');

        }





    }


  }

    public function getStaffById()
   {
    $id=$this->input->post('id');
    $data['getstaffById'] = $this->Staffm->getStaffById($id);
    $this->load->view('Admin/EditStaff',$data);

   }


     public function editStaff($id)
  {
    $config=
        array (
            'upload_path'=>'./public/assets/Staff/',
            'allowed_types' => "gif|jpg|png|jpeg",
            'overwrite' => TRUE,
            'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
            'max_height' => "768",
            'max_width' => "1024"

        );

    $this->load->library('upload', $config);
    $first_name=$this->input->post('first_name');
    $last_name=$this->input->post('last_name');
    $staff_email=$this->input->post('staff_email');
    $staff_pass=$this->input->post('staff_pass');
    $address=$this->input->post('address');
    $phone=$this->input->post('phone');
    $age=$this->input->post('age');
    $gender=$this->input->post('gender');
    $Joiningdate=$this->input->post('Joiningdate');
    $staff_status=$this->input->post('staff_status');
    $eduction=$this->input->post('eduction');
    $role=$this->input->post('role');
    $staff_confirmpassword=$this->input->post('confirm_password');

    if( $this->upload->do_upload('s_Photo')) {

        $data1 = $this->upload->data();
        $imagepath = base_url("public/assets/Staff/" . $data1['raw_name'] . $data1['file_ext']);
        $post['imagepath'] = $imagepath;
        $data = array(
            'first_name' => $first_name,
            'last_name' => $last_name,
            'staff_email' => $staff_email,
            'staff_pass' => $staff_pass,
            'address' => $address,
            'phone' => $phone,
            'ages' => $age,
            'gender' => $gender,
            'Staff_image'=>$imagepath,
            'joiningdate' => $Joiningdate,
            'staff_status' => $staff_status,
            'staff_confirmpassword'=>$staff_confirmpassword,
            'eduction' => $eduction,
            'role' => $role

        );



        $this->data['error']= $this->Staffm->updateStaf($id,$data);

        if (empty($this->data['error'])) {

            $this->session->set_flashdata('successMessage','Staff Info  Updated Successfully');
            redirect('Admin/Staffword');

        } else {

            $this->session->set_flashdata('errorMessage', 'Some thing Went Wrong !! Please Try Again!!');
            redirect('Admin/Staffword');

        }

       }


       else
       {
           $data = array(
               'first_name' => $first_name,
               'last_name' => $last_name,
               'staff_email' => $staff_email,
               'staff_pass' => $staff_pass,
               'address' => $address,
               'phone' => $phone,
               'ages' => $age,
               'gender' => $gender,
               'joiningdate' => $Joiningdate,
               'staff_status' => $staff_status,
               'staff_confirmpassword'=>$staff_confirmpassword,
               'eduction' => $eduction,
               'role' => $role

           );


           $this->data['error']= $this->Staffm->updateStaf($id,$data);

           if (empty($this->data['error'])) {

               $this->session->set_flashdata('successMessage','Staff Info  Updated Successfully');
               redirect('Admin/Staffword');

           } else {

               $this->session->set_flashdata('errorMessage', 'Some thing Went Wrong !! Please Try Again!!');
               redirect('Admin/Staffword');

           }

       }




  }


     public function deletbyId()
    {
        $id = $this->input->post('id');
        $this->Staffm->deleteStaffById($id);
        $this->session->set_flashdata('successMessage','Staff Info Delete Successfully');


    }

    ////////////////////////// word//////////////////////

      public function allWord()
    {

      $data['word'] = $this->Staffm->allword();
      $this->load->view('Admin/allwords',$data);

    }

     public function add_word()
    {
       $this->load->view('Admin/addWords');

      }

      public function save_word()
      {

          $word_name=$this->input->post("word_name");
          $word_status=$this->input->post('word_status');

          $data=array(
              'word_name'=>$word_name,
              'word_status'=>$word_status
          );

          $this->data['error']= $this->Staffm->insertWord($data);

          if (empty($this->data['error'])) {

              $this->session->set_flashdata('successMessage', ' Word Added Successfully');
              redirect('Admin/Staffword/allWord');

          } else {

              $this->session->set_flashdata('errorMessage', 'Some thing Went Wrong !! Please Try Again!!');
              redirect('Admin/Staffword/allWord');

          }


      }


      public function getWordId()
      {
          $id=$this->input->post("id");
          $data['getWordById'] = $this->Staffm->getWordById($id);
          $this->load->view('Admin/editWords',$data);

      }


        public function update_word($id)
     {
          $word_name=$this->input->post("word_name");
          $word_status=$this->input->post('word_status');

            $data=array(
              'word_name'=>$word_name,
              'word_status'=>$word_status
            );

             $this->data['error']= $this->Staffm->update_word( $id,$data);

                if (empty($this->data['error']))
                {
                  redirect('Admin/Staffword/allWord');
                 }
                  else
                   {
                       $this->session->set_flashdata('errorMessage', 'Some thing Went Wrong !! Please Try Again!!');
                       redirect('Admin/Staffword/allWord');
                   }
     }


     public function deleteWordById()
     {
         $id = $this->input->post('id');
         $this->Staffm->deleteWordById($id);
         $this->session->set_flashdata('successMessage','Word Delete Successfully');
     }

}

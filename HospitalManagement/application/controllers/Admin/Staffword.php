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


        $firstname = $this->input->post('firstname');
        $lastname = $this->input->post('lastname');
        $date_of_Birth = $this->input->post('birth_date');
        $gender = $this->input->post('gender');
        $spiciality = $this->input->post('speciality');
        $designetion = $this->input->post('designetion');
        $admin_name = $this->input->post('admin_name');
        $d_image = $_FILES["s_Photo"]["name"];
        $doc_pass = $this->input->post('password');
        $confirm_password = $this->input->post('confirm_password');
        $address = $this->input->post('address');
        $tweet = $this->input->post('tweet');
        $join_date= $this->input->post('Join_date');
        $user_activation_status = $this->input->post('status');
        $city = $this->input->post('city');
        $phone = $this->input->post('phone');
        $email = $this->input->post('email');
        $employee = $this->input->post('employee');
        $staff_eduction = $this->input->post('staff_eduction');
           $adminpanel = $this->input->post('adminpanel');


        if($this->upload->do_upload('s_Photo')) {

            $data1 = $this->upload->data();
            $imagepath = base_url("public/assets/Staff/" . $data1['raw_name'] . $data1['file_ext']);
            $post['imagepath'] = $imagepath;
            $data = array(
                'first_name' => $firstname,
                'last_name' => $lastname,
                'admin_type' => $employee,
                'admin_name' => $admin_name,
                'admin_email' => $email,
                'pass' => $doc_pass,
                'confirmpassword' => $confirm_password,
                'designetion' => $designetion,
                'user_activation_status' => $user_activation_status,
                'phone' => $phone,
                'city' => $city,
                'date_of_Birth' => $date_of_Birth,
                'gender' => $gender,
//               'description' => $opinion,
                'spiciality_depid' => $spiciality,
//                'tweet' => $tweet,
                'address' => $address,
                'join_date' => $join_date,
                'staff_image' => $imagepath,
//                'facebook' => $facebook,
               'adminpanel' => $adminpanel,
              'staff_eduction'=>$staff_eduction

            );



            $data['error'] = $this->Staffm->insertStaff($data);

        }
        else
        {
            echo "<script> alert('Image was not upload proparly ')</script>";
        }


            if (empty($this->data['error'])) {

                $this->session->set_flashdata('successMessage', ' Staff  Added Successfully');
                redirect('Admin/Staffword');

            } else {

                $this->session->set_flashdata('errorMessage', 'Some thing Went Wrong !! Please Try Again!!');
                redirect('Admin/Staffwordr');

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
      $firstname = $this->input->post('firstname');
      $lastname = $this->input->post('lastname');
      $date_of_Birth = $this->input->post('birth_date');
      $gender = $this->input->post('gender');
      $spiciality = $this->input->post('speciality');
      $designetion = $this->input->post('designetion');
      $admin_name = $this->input->post('admin_name');
      $d_image = $_FILES["s_Photo"]["name"];
      $doc_pass = $this->input->post('password');
      $confirm_password = $this->input->post('confirm_password');
      $address = $this->input->post('address');
      $tweet = $this->input->post('tweet');
      $join_date= $this->input->post('Join_date');
      $user_activation_status = $this->input->post('status');
      $city = $this->input->post('city');
      $phone = $this->input->post('phone');
      $email = $this->input->post('email');
      $employee = $this->input->post('employee');
      $staff_eduction = $this->input->post('staff_eduction');
      $adminpanel = $this->input->post('adminpanel');




    if( $this->upload->do_upload('s_Photo')) {

        $data1 = $this->upload->data();
        $imagepath = base_url("public/assets/Staff/" . $data1['raw_name'] . $data1['file_ext']);
        $post['imagepath'] = $imagepath;
        $data = array(
            'first_name' => $firstname,
            'last_name' => $lastname,
            'admin_type' => $employee,
            'admin_name' => $admin_name,
            'admin_email' => $email,
            'pass' => $doc_pass,
            'confirmpassword' => $confirm_password,
            'designetion' => $designetion,
            'user_activation_status' => $user_activation_status,
            'phone' => $phone,
            'city' => $city,
            'date_of_Birth' => $date_of_Birth,
            'gender' => $gender,
            'adminpanel' => $adminpanel,
            'spiciality_depid' => $spiciality,
//                'tweet' => $tweet,
            'address' => $address,
            'join_date' => $join_date,
            'staff_image' => $imagepath,
//                'facebook' => $facebook,
//                'google_plus' => $google_plus
            'staff_eduction'=>$staff_eduction

        );


        $this->data['error'] = $this->Staffm->updateStaff($id, $data);

        if (empty($this->data['error'])) {

            $this->session->set_flashdata('successMessage', 'Staff Info  Updated Successfully');
            redirect('Admin/Staffword');

        } else {

            $this->session->set_flashdata('errorMessage', 'Some thing Went Wrong !! Please Try Again!!');
            redirect('Admin/Staffword');

        }
    }
        else

        {
            echo "";
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

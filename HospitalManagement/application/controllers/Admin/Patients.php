<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Patients extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('admin_id')) {
            return redirect('login');
        }
        $this->load->model('Admin/Appointmentm');
        $this->load->model('Admin/doctorsm');
        $this->load->model('Admin/Staffm');
        $this->load->model('Admin/Patientsm');



    }

    public function index()
    {

        $this->load->view('Admin/allPatients');
    }

    public function addPations()
    {
        $data['staff'] = $this->Staffm->getAllStaff();
        $data['word'] = $this->Staffm->getAllWorActive();
        $data['depertment'] = $this->Appointmentm->getAllDepertment();
        $this->load->view('Admin/addpatients',$data);


    }

    public function addPatient()
    {
        $d_id = $this->input->post('id');

            $data['categoryInfoBydoctor'] = $this->doctorsm->getDoctorById($d_id);
            $this->load->view('Admin/doctordropdown', $data);

    }



    public function save_patient()
    {
        $config =
            array(
                'upload_path' => './public/assets/doctorimage/',
                'allowed_types' => "gif|jpg|png|jpeg",
                'overwrite' => TRUE,
                'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
                'max_height' => "768",
                'max_width' => "1024"

            );

        $this->load->library('upload', $config);


        $firstname = $this->input->post('firstname');
        $lastname = $this->input->post('lastname');
        $phone = $this->input->post('phone');
        $address = $this->input->post('address');
        $enterdate = $this->input->post('admit_date');
        $age = $this->input->post('age');
        $d_image = $_FILES["p_Photo"]["name"];
        $gender = $this->input->post('gender');
        $patientsdepid = $this->input->post('depertment');
        $doctor = $this->input->post('doctor');
        $staff = $this->input->post('staff');
//        $doc_pass = $this->input->post('password');
//        $confirm_password = $this->input->post('confirm_password');
        $word = $this->input->post('word');
        $email = $this->input->post('email');



        if ($this->upload->do_upload('p_Photo')) {

            $data1 = $this->upload->data();
            $imagepath = base_url("public/assets/Patients/" . $data1['raw_name'] . $data1['file_ext']);
            $post['imagepath'] = $imagepath;
            $data = array(
                'pat_first_name' => $firstname,
                'pat_last_name' => $lastname,
                'pat_phone' => $phone,
                'enter_date' => $enterdate,
//                '$age' => $age,
                'email' => $email,
                'patient_image' => $imagepath,
                'gender' => $gender,
                'email' => $email,
                'age' => $age,
                'address' => $address,
                'pat_docid' => $doctor,
                'pat_staffid' => $staff,
                'pat_word' => $word,
                'patientsdepid'=>$patientsdepid


            );



                $this->data['error'] = $this->Patientsm->insertpateint($data);


            if (empty($this->data['error'])) {

                $this->session->set_flashdata('successMessage', ' Doctor  Added Successfully');
                redirect('Admin/Patients/addPations');

            } else {

                $this->session->set_flashdata('errorMessage', 'Some thing Went Wrong !! Please Try Again!!');
                redirect('Admin/Patients/addPations');

            }

         }


      }
 }

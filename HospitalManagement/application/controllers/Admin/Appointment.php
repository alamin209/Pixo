<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Appointment extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('admin_id')) {
            return redirect('login');


        }
        $this->load->model('Admin/Depertments');
        $this->load->model('Admin/Appointmentm');



    }


    public function index()
    {
        $data['depertment'] = $this->Appointmentm->getAllDepertment();
        $this->load->view('Admin/appointment',$data);
    }

    public function save_appointmet()
    {
        $firstname = $this->input->post('firstname');
        $lastname = $this->input->post('lastname');
        $date_of_Birth = $this->input->post('birth_date');
        $gender = $this->input->post('gender');
        $depertment = $this->input->post('depertment');
        $email = $this->input->post('email');
        $phone = $this->input->post('Phone');
        $serial_no= $this->input->post('serial_no');
        $opinion = $this->input->post('opinion');

        $data = array(

            'first_name'=>$firstname,
            'last_name'=>$lastname,
             'date_of_Birth'=>$date_of_Birth,
            'gender'=>$gender,
            'email'=>$email,
            'phone'=>$phone,
            'serial_no'=>$serial_no,
            'description'=>$opinion,
            'depertment'=>$depertment

        );



        $this->data['error'] = $this->Appointmentm->insertAppooinment($data);

        if (empty($this->data['error'])) {

            $this->session->set_flashdata('successMessage',' Appointment Added Successfully');
            redirect('Admin/Appointment');

        } else {

            $this->session->set_flashdata('errorMessage','Some thing Went Wrong !! Please Try Again!!');
            redirect('Admin/Appointment');

        }



    }
}

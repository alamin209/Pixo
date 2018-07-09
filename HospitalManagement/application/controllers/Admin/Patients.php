<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Patients extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('admin_id')) {
            return redirect('login');
        }
    }

    public function index()
    {

        $this->load->view('Admin/allPatients');
    }

    public function addPations()
    {

        $this->load->view('Admin/addpatients');


    }

}

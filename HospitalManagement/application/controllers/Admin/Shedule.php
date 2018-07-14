<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shedule extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('admin_id')) {
            return redirect('login');
        }
    }

    public function index()
    {

        $this->load->view('Admin/doctorshedule');
    }
}



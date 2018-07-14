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

    }

    public function index()
    {

        $this->load->view('Admin/allStaffs');
    }


    public function addStaff()
{
    $this->load->view('Admin/addStaff');


}

}

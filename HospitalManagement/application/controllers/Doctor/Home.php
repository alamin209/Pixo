<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('admin_id')) {
            return redirect('login');

        }
        $this->load->model('Admin/Depertments');

    }

    public function index()
    {
        $data['depertment'] = $this->Depertments->getAllDepertment();

        $this->load->view('doctor/index',$data);

    }
}

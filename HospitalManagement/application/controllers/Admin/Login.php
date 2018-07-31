<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('loginm');
    }


    public function index()
    {
        $this->load->view('admin_login');
    }

    public function check_user()
    {
//        $this->load->library('user_agent');

        $result = $this->loginm->validate_user($_POST);

        if (!empty($result)) {
//            $data1 = array(
//                'sourceIp' => $this->input->ip_address(),
//                'fkUserId' => $result->userId,
//                'browser' => $this->agent->browser()
//            );
//            $loginId = $this->loginm->loginInfo($data1);
            $data = array(
                'admin_name' => $result->admin_name,
                'admin_email' => $result->admin_email,
                'admin_id' => $result->userId,
                'admin_type' => $result->admin_type,
                'Designetion'=>$result->Designetion,
                'loggedin' => "true",
//                'loginId' => $loginId,
            );
            $id=$this->session->set_userdata($data);


            if ($this->session->userdata('admin_type') == "admin") {
                redirect('Admin/Home');
            }
//            elseif ($this->session->userdata('userType') == "cus")
//            {
//
//            }
            //print_r($result);
            else {
                echo "<script>
                        alert('wrong username or password');
                     window.location.href='" . base_url() . "';
                     
					
                </script>";
                redirect('login');
            }
        }
    }
    public function logout()
    {
//        $data = array(
//            'logOutTime'=>date('Y-m-d H:i:s')
//        );
//        $id=$this->session->userdata('loginId');
//        $this->loginm->logout($id,$data);
        $this->session->sess_destroy();
        redirect('Login');
    }


}

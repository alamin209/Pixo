
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Depertment extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('admin_id')) {
            return redirect('login');


        }

        $this->load->model('Admin/doctorsm');
        $this->load->model('Admin/Depertments');

    }


    public function index()
    {
        $data['depertment'] = $this->Depertments->getAllDepertment();
        $data['doctors'] = $this->doctorsm->getAllDoctors();
        $this->load->view('Admin/alldepartments',$data);

    }



    public function adddepertmet()

    {
        $data['depertment'] = $this->Depertments->getAllDepertment();
        $this->load->view('Admin/addDepertment',$data);


    }




    public function save_depertment()
    {
        $config =
            array(
                'upload_path' => './public/assets/depertment/',
                'allowed_types' => "gif|jpg|png|jpeg",
                'overwrite' => TRUE,
                'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
                'max_height' => "768",
                'max_width' => "1024"

            );

        $this->load->library('upload', $config);


        $dep_name = $this->input->post('dep_name');
        $dep_status = $this->input->post('dep_status');
        $depertment_description = $this->input->post('dep_des');


        if ($this->upload->do_upload('d_Photo')) {

            $data1 = $this->upload->data();
            $imagepath = base_url("public/assets/depertment/" . $data1['raw_name'] . $data1['file_ext']);
            $post['imagepath'] = $imagepath;
            $data = array(
                'dep_name' =>$dep_name,
                'dep_image' => $imagepath,
                 'depertment_description'=>$depertment_description,
                 'dep_status'=>$dep_status

            );

            $this->data['error']= $this->Depertments->insertdrprtment($data);


            if (empty($this->data['error'])) {

                $this->session->set_flashdata('successMessage', ' Depertment   Added Successfully');
                redirect('Admin/Depertment/adddepertmet');

            } else {

                $this->session->set_flashdata('errorMessage', 'Some thing Went Wrong !! Please Try Again!!');
                redirect('Admin/Depertment/adddepertmet');

            }

        }
    }
      public function getDepertmentDetailsByid($id)
    {
      $data['depertment_details']= $this->Depertments->depertmentDetailsById($id);
      $data['all_service']= $this->Depertments->getAllServicet();
      $this->load->view('Admin/depertmentDetails',$data);
      }

    public function getDepertmentDetailsByids($id)
    {
        $data['depertment_details']= $this->Depertments->depertmentDetailsById($id);
        $data['all_service']= $this->Depertments->getAllServicet();
        $this->load->view('Admin/depertmentDetails',$data);
    }

     public function add__depertmaent()
    {
    $data['name']=$this->input->post('name');
     $data['id']=$this->input->post('btn');
       $this->load->view('Admin/addNewservice',$data);
     }


     public function save_service($id)
     {

         $service_name = $this->input->post('service_name');
         $service_price = $this->input->post('service_price');
         $service_type = $this->input->post('service_type');
         $service_status = $this->input->post('service_status');
         $deperment_name = $this->input->post('deperment_name');
//         $deperment_id = $this->input->post('deperment_id');

         $data=array(
            'service_type'=>$service_type,
            'service_name'=>$service_name,
            'deperment_name'=>$deperment_name,
            'service_price'=>$service_price,
             'service_status'=>$service_status,
//             'deperment_id'=>$deperment_id
        );


            $this->data['error']= $this->Depertments->insertdrprtmentservice($data);


            if (empty($this->data['error'])) {

                $this->session->set_flashdata('successMessage', ' Depertment service   Added Successfully');
                redirect('Admin/Depertment/getDepertmentDetailsByid/'.$id);

            } else {

                $this->session->set_flashdata('errorMessage', 'Some thing Went Wrong !! Please Try Again!!');
                redirect('Admin/Depertment/getDepertmentDetailsByid/'. $id);

            }

        }









}

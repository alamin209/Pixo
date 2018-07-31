<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('admin_id')) {
            return redirect('login');

        }
        $this->load->model('Admin/Depertments');
        $this->load->model('Admin/Servicem');


    }

    public function insertCart(){

        $id = $this->input->post('id');

        $this->data['service'] = $this->Servicem->getServiceById($id);
        foreach ($this->data['service'] as $item){
            $data = array(
                'id' => $item->id,
                'qty' => 1,
                'price' => $item->service_price,
                'name' => $item->service_name,
                'service_type'=>$item->service_type,
                'deperment_name'=>$item->deperment_name

            );

            $this->cart->insert($data);

            //print_r($this->cart->insert($data));

        }


    }

    public function updateCart(){
        $id = $this->input->post('id');
        $amount = $this->input->post('amount');


        $data = array(
            'rowid' => $id,
            'qty' => $amount,

        );


        $this->cart->update($data);

//        $total = $this->cart->total();
//        $disamountpercen = $this->session->userdata('discountpercentage');
//        $disamount= ($total*$disamountpercen)/100;
//        $data = array(
//            'discount' => $disamount,
//        );
//        $this->session->set_userdata($data);
        if ($this->session->userdata('promocode') != null){
            $this->discount($this->session->userdata('promocode'));
        }
    }



    public function cart()
    {




        $userid = $this->session->userdata('admin_id');


        $this->load->view('Admin/serviceChargeFrom');

//        if ($userid == "") {
//           $this->data['charges'] = $this->Itemsm->getcharges();
////            $this->data['allCity'] = $this->Itemsm->getAllCity();
//            $this->load->view('cartforguest', $this->data);
//        } else {
//            $this->data['userdata'] = $this->Itemsm->getUserdata($userid);
//            $this->data['earnpoint'] = $this->Itemsm->getearnPoint($userid);
//            $this->data['exensepoint'] = $this->Itemsm->getexpensePoint($userid);
//            $this->data['charges'] = $this->Itemsm->getcharges();
//            $this->load->view('cart', $this->data);
//        }
    }
    public function payment(){
        $this->data['charges'] = $this->Itemsm->getcharges();
        $this->load->view('cart_2', $this->data);
    }
       ////////////////////////////////////////////////Getting Customer using their Id for payment ///////////////////////
    public function getPatentforPaymentById()
    {
        $id = $this->input->post('id');
        $data['getPaymentInfoById'] = $this->Servicem->getPateintByid($id);

        if ( $data['getPaymentInfoById']!=null)
        {

            $this->load->view('Admin/searchServicFee', $data);

        }
        else {

            $this->load->view('Admin/searchServicFee1');

        }

    }

    public function service_info()
    {
        $firstname = $this->input->post('firstname');

        $lastname = $this->input->post('lastname');
        $phone= $this->input->post('phone');
        $enter_date = $this->input->post('enter_date');
        $age = $this->input->post('age');
        $address= $this->input->post('address');
        $email = $this->input->post('email');
        $gender = $this->input->post('gender');
      $patname_patientid = $this->input->post('patname_patientid');
//        $enter_date = $this->input->post('enter_date');
//        $enter_date = $this->input->post('enter_date');
        $userid = $this->session->userdata('admin_id');

        $data=array(
            'firstname'=>$firstname,
            'patname_patientid'=>$patname_patientid,
            'lastname'=>$lastname,
            'phone'=>$phone,
            'enter_date'=>$enter_date,
            'age'=>$age,
            'address'=>$address,
            'email'=>$email,
             'gender'=>$gender


        );

        $this->data['error'] = $this->Patientsm->insertpateint($data);




           if (empty($this->data['error'])) {

                               $this->session->set_flashdata('successMessage', ' Doctor  Added Successfully');
                             redirect('Admin/Service/cart');

                           }     else      {

                                $this->session->set_flashdata('errorMessage', 'Some thing Went Wrong !! Please Try Again!!');
                                 redirect('Admin/Service/cart');

                       }




    }

    public function getPatentforamount()
    {

        $ids= $this->input->post('id');


         $this->session->set_userdata('ids',$ids);
        $data["id"] = $this->session->userdata('ids');

             $this->load->view("Admin/amount",$data);




    }
}

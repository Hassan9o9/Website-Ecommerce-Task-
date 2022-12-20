<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Customer extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->get_user();
    }
    public function add_customer()
    {
        $data=array();
        $data['maincontent']=$this->load->view('admin/pages/add_customer', '', true);
        $this->load->view('admin/master', $data);
    }
    public function manage_customer()
    {
        $data=array();
        $data['maincontent']=$this->load->view('admin/pages/manage_customer', $data, true);
        $this->load->view('admin/master', $data);
    }
    public function delete_customer($id)
    {
        $result = $this->customer_model->delete_customer_info($id);
        if ($result) {
            $this->session->set_flashdata('message','Customer Deleted Sucessfully');
            redirect('manage/customer');
        } else {
            $this->session->set_flashdata('message','customer Deleted Failed');
            redirect('manage/customer');
        }
    }
    public function edit_customer($id)
    {
        $data=array();
        $data['customer_info_by_id']=$this->customer_model->edit_category_info($id);
        $data['maincontent']=$this->load->view('admin/pages/edit_customer', $data, true);
        $this->load->view('admin/master', $data);
    }
    public function get_user()
    {
        $email=$this->session->userdata('user_email');
        $name=$this->session->userdata('user_name');
        $id=$this->session->userdata('user_id');
        if ($email == false) {
            redirect('admin');
        }
    }
    public function customer(){
    $this->load->view('manage/customer');
    $data['manage_customer'] = $this->Customer_model->manage_customer();
    $this->load->view('manage_customer', $data);
}


public function delete_product() {
    $this->Mod_admin->delete();
    $this->session->set_flashdata('message', '<p>Product were successfully deleted!</p>');
    redirect('manage_customer');
}
}
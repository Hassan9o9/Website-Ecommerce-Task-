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
        $data = array();
        $data['maincontent'] = $this->load->view('admin/pages/add_customer', '', true);
        $this->load->view('admin/master', $data);
    }

    public function manage_customer()
    {
        $data = array();
        $data['maincontent'] = $this->load->view('admin/pages/manage_customer', $data, true);
        $this->load->view('admin/master', $data);
    }

    public function save_customer()
    {
        $data = array();
        $data['customer_name'] = $this->input->post('customer_name');
        $data['customer_description'] = $this->input->post('customer_description');
        $data['publication_status'] = $this->input->post('publication_status');

        $this->form_validation->set_rules('customer_name', 'Customer Name', 'trim|required');
        $this->form_validation->set_rules('customer_description', 'Customer Description', 'trim|required');
        $this->form_validation->set_rules('publication_status', 'Publication Status', 'trim|required');

        if ($this->form_validation->run() == true) {
            $result = $this->customer_model->save_customer_info($data);
            if ($result) {
                $this->session->set_flashdata('message', 'Customer Inseted Sucessfully');
                redirect('manage/customer');
            } else {
                $this->session->set_flashdata('message', 'Customer Inserted Failed');
                redirect('manage/customer');
            }
        } else {
            $this->session->set_flashdata('message', validation_errors());
            redirect('add/customer');
        }
    }
    public function delete_customer($id)
    {
        $result = $this->customer_model->delete_customer_info($id);
        if ($result) {
            $this->session->set_flashdata('message', 'Customer Deleted Sucessfully');
            redirect('manage/customer');
        } else {
            $this->session->set_flashdata('message', 'Customer Deleted Failed');
            redirect('manage/customer');
        }
    }

    public function edit_customer($id)
    {
        $data = array();
        $data['customer_info_by_id'] = $this->customer_model->edit_category_info($id);
        $data['maincontent'] = $this->load->view('admin/pages/edit_customer', $data, true);
        $this->load->view('admin/master', $data);
    }

    public function update_customer($id)
    {
        $data = array();
        $data['customer_name'] = $this->input->post('customer_name');
        $data['customer_description'] = $this->input->post('customer_description');
        $data['publication_status'] = $this->input->post('publication_status');

        $this->form_validation->set_rules('customer_name', 'Customer Name', 'trim|required');
        $this->form_validation->set_rules('customer_description', 'Customer Description', 'trim|required');
        $this->form_validation->set_rules('publication_status', 'Publication Status', 'trim|required');

        if ($this->form_validation->run() == true) {
            $result = $this->customer_model->update_customer_info($data, $id);
            if ($result) {
                $this->session->set_flashdata('message', 'Customer Update Sucessfully');
                redirect('manage/customer');
            } else {
                $this->session->set_flashdata('message', 'Customer Update Failed');
                redirect('manage/customer');
            }
        } else {
            $this->session->set_flashdata('message', validation_errors());
            redirect('add/customer');
        }
    }
    public function get_user()
    {
        $email = $this->session->userdata('user_email');
        $name = $this->session->userdata('user_name');
        $id = $this->session->userdata('user_id');

        if ($email == false) {
            redirect('admin');
        }
    }
}

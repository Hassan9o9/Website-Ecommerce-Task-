<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Web extends CI_Controller
{
    public function index()
    {
        $data=array();
        $data['all_featured_products']=$this->web_model->get_all_featured_product();
        $data['all_new_products']=$this->web_model->get_all_new_product();
        $this->load->view('web/inc/header');
        $this->load->view('web/pages/home',$data);
        $this->load->view('web/inc/footer');
    }
    public function contact()
    {
        $data=array();
        $this->load->view('web/inc/header');
        $this->load->view('web/pages/contact');
        $this->load->view('web/inc/footer');
    }
    public function product()
    {
        $data=array();
        $this->load->view('web/inc/header');
        $this->load->view('web/pages/product');
        $this->load->view('web/inc/footer');
    }
    public function cart()
    {
        $data=array();
        $data['cart_contents']=$this->cart->contents();
        $this->load->view('web/inc/header');
        $this->load->view('web/pages/cart',$data);
        $this->load->view('web/inc/footer');
    }
    public function single($id)
    {
        $data=array();
        $data['get_single_product']=$this->web_model->get_single_product($id);
        $data['get_all_category']=$this->web_model->get_all_category();
        $this->load->view('web/inc/header');
        $this->load->view('web/pages/single', $data);
        $this->load->view('web/inc/footer');
    }
    public function error()
    {
        $data=array();
        $this->load->view('web/inc/header');
        $this->load->view('web/pages/error');
        $this->load->view('web/inc/footer');
    }
    public function category_post($id)
    {
        $data=array();
        $data['get_all_product']=$this->web_model->get_all_product_by_cat($id);
        $this->load->view('web/inc/header');
        $this->load->view('web/pages/product', $data);
        $this->load->view('web/inc/footer');
    }
    public function save_cart()
    {
        $data=array();
        $product_id=$this->input->post('product_id');
        $results=$this->web_model->get_product_by_id($product_id);
        $data['id']= $results->product_id;
        $data['name']=$results->product_title;
        $data['price']=$results->product_price;
        $data['qty']=$this->input->post('qty');
        $data['options']=array('product_image' => $results->product_image);
        $this->cart->insert($data);
        redirect('cart');
    }
    public function update_cart()
    {
        $data=array();
        $data['qty']=$this->input->post('qty');
        $data['rowid']=$this->input->post('rowid');
        $this->cart->update($data);
        redirect('cart');
    }
    public function remove_cart()
    {
        $data = $this->input->post('rowid');
        $this->cart->remove($data);
        redirect('cart');
    }
    public function register_success()
    {
        $customer_name = $this->session->flashdata('customer_name');
        if (!$customer_name) {
            redirect('customer/register');
        }
        $data = array();
        $data['maincontent'] = $this->load->view('admin/pages/register_success', '', true);
        $this->load->view('admin/master', $data);
    }
    public function user_form()
    {
        $data=array();
        $this->load->view('web/inc/header');
        $this->load->view('web/pages/user_form');
        $this->load->view('web/inc/footer');
    }
    public function customer_register()
    {
        $data = array();
        $data['maincontent'] = $this->load->view('admin/pages/add_customer', '', true);
        $this->load->view('admin/master', $data);
    }
    public function customer_manage()
    {
        $data = array();
        $data['maincontent'] = $this->load->view('admin/pages/manage_customer', '', true);
        $this->load->view('admin/master', $data);
    }
    public function customer_login()
    {
        $data= array();
        $this->load->view('web/inc/header');
        $this->load->view('web/pages/customer_login');
        $this->load->view('web/inc/footer');
    }
    public function customer_save()
    {
        $data= array();
        $data['customer_name']= $this->input->post('customer_name');
        $data['customer_email'] =$this->input->post('customer_email');
        $data['customer_password']=md5($this->input->post('customer_password'));
        $data['customer_address']=$this->input->post('customer_address');
        $data['customer_city']=$this->input->post('customer_city');
        $data['customer_country']=$this->input->post('customer_country');
        $data['customer_phone']=$this->input->post('customer_phone');
        $data['customer_zipcode']=$this->input->post('customer_zipcode');

        $this->form_validation->set_rules('customer_name', 'Customer Name', 'trim|required');
        $this->form_validation->set_rules('customer_email', 'Customer Email', 'trim|required|valid_email|is_unique[tbl_customer.customer_email]');
        $this->form_validation->set_rules('customer_password', 'Customer Password', 'trim|required');
        $this->form_validation->set_rules('customer_address', 'Customer Address', 'trim|required');
        $this->form_validation->set_rules('customer_city', 'Customer City', 'trim|required');
        $this->form_validation->set_rules('customer_country', 'Customer Country', 'trim|required');
        $this->form_validation->set_rules('customer_phone', 'Customer Phone', 'trim|required');
        $this->form_validation->set_rules('customer_zipcode', 'Customer Zipcode', 'trim|required');
        if ($this->form_validation->run() == true) {
            $result = $this->web_model->save_customer_info($data);
            if ($result) {
                $this->session->set_flashdata('customer_name', $data['customer_name']);
                $this->session->set_flashdata('customer_email', $data['customer_email']);
                redirect('register/success');
            } else {
                $this->session->set_flashdata('message', 'Customer Registration Fail');
                redirect('customer/register');
            }
        } else {
            $this->session->set_flashdata('message', validation_errors());
            redirect('customer/register');
        }
    }
    public function customer_logincheck()
    {
        $data=array();
        $data['customer_email']=$this->input->post('customer_email');
        $data['customer_password'] = md5($this->input->post('customer_password'));
        $this->form_validation->set_rules('customer_email', 'Customer Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('customer_password', 'Customer Password', 'trim|required');
        if ($this->form_validation->run() == true) {
            $result = $this->web_model->get_customer_info($data);
            if ($result) {
                $this->session->set_userdata('customer_id', $result->customer_id);
                $this->session->set_userdata('customer_email', $data['customer_email']);
                redirect('/');
            } else {
                $this->session->set_flashdata('message', 'Customer Login Fail');
                redirect('customer/login');
            }
        } else {
            $this->session->set_flashdata('message', validation_errors());
            redirect('customer/login');
        }
    }
    public function logout()
    {
        $this->session->unset_userdata('customer_id');
        $this->session->unset_userdata('customer_email');
        redirect('customer/login');
    }
}
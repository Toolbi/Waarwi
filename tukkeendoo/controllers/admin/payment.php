<?php

class Payment extends Admin_Controller {

    var $id = false;

    function __construct() {
        parent::__construct();

        $this->load->model(array('payment_model'));
        $this->load->helper('formatting_helper');
        
    }

    function index() {

        $data['payments'] = $this->payment_model->get_all_payment();
		//print_r($data['payments']); die;
        $this->load->view($this->config->item('admin_folder') . '/payment_form', $data);
    }

   

    function form($pay_id = false) {
        //print_r('hello'); die;
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['page_title'] = lng('payment_form');

        //default values are empty if the country is new
        $data['id'] = '';
        $data['payment_type'] = '';
        $data['payment_id'] = '';
        $data['isactive'] = '';


        if ($pay_id) {
            $this->id = $pay_id;
            $payment = $this->payment_model->get_payment($pay_id);

            //if the country does not exist, redirect them to the country list with an error
            if (!$payment) {
                $this->session->set_flashdata('error', ('Payment errors_not_found'));
                redirect($this->config->item('admin_folder') . '/payment');
            }

            //set values to db values
            $data['id'] = $payment->id;
            $data['payment_type'] = $payment->payment_type;
            $data['payment_id'] = $payment->payment_id;
            $data['isactive'] = $payment->is_active;
        }

        
        $this->form_validation->set_rules('payment_id', 'payment_id', 'trim|required');
		

        //if this is a new account require a password, or if they have entered either a password or a password confirmation
        if ($this->form_validation->run() == FALSE) {
            $this->load->view($this->config->item('admin_folder') . '/payment_form', $data);
        } else {


            $save['id'] = $pay_id;
            $save['payment_type'] = $this->input->post('payment_type');
            $save['payment_id'] = $this->input->post('payment_id');
            $save['is_active'] = $this->input->post('isactive');

            $this->payment_model->save($save);
            $this->session->set_flashdata('message', ('The Payment has been saved!'));



            //go back to the country list
            redirect($this->config->item('admin_folder') . '/payment');
        }
    }

    function delete($id) {
       
            $country = $this->country_model->get_country($id);
            //if the country does not exist, redirect them to the country list with an error
            if ($country) {
                $this->country_model->delete($id);

                $this->session->set_flashdata('message', ('The Category has been deleted!'));
                redirect($this->config->item('admin_folder') . '/country');
            } else {
                $this->session->set_flashdata('error', lang('error_not_found'));
            }
        
    }

    function check_country($str) {
        $name = $this->country_model->check_country($str, $this->country_id);

        if ($name) {
            $this->form_validation->set_message('check_country', 'The country name already in use');
            return FALSE;
        } else {
            return TRUE;
        }
    }

    function check_code($str) {
        $name = $this->country_model->check_code($str, $this->country_id);

        if ($name) {
            $this->form_validation->set_message('check_code', 'The country Code already in use');
            return FALSE;
        } else {
            return TRUE;
        }
    }

    function change_status() {
        $this->auth->is_logged_in();

        $user_id = $this->input->post('mid');
        $status = $this->input->post('status');

        if (!empty($user_id) && !empty($status)) {

            $country = (array) $this->country_model->get_country($user_id);

            if (!$country) {
                echo false;
            }

            if ($status == 'enable') {
                $country['is_active'] = '1';
            } elseif ($status == 'disable') {
                $country['is_active'] = '0';
            }
            $id = $this->country_model->save($country);
            echo $id;
        } else {

            echo false;
        }
    }

}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->model('FormModel');
        $this->load->database(); // Load the database library
    }

    public function index()
    {
        // Check if admin is logged in
        if ($this->session->userdata('admin_logged_in')) {
            redirect('AdminController/dashboard');
        } else {
            $this->load->view('admin_login');
        }
    }

    public function login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        if ($username === 'pairobochamps' && $password === 'ictacademypune') {
            $this->session->set_userdata('admin_logged_in', true);
            redirect('AdminController/dashboard');
        } else {
            $this->session->set_flashdata('error', 'Invalid credentials');
            redirect('AdminController/index');
        }
    }

    public function dashboard()
    {
        if (!$this->session->userdata('admin_logged_in')) {
            redirect('AdminController/index');
        }

        $data['schools'] = $this->FormModel->get_all_schools();
        $this->load->view('admin_dashboard', $data);
    }

    public function view_school($school_id)
    {
        if (!$this->session->userdata('admin_logged_in')) {
            redirect('AdminController/index');
        }

        $data['school'] = $this->FormModel->get_school_by_id($school_id);
        $data['participants'] = $this->FormModel->get_participants_by_school($school_id);
        $this->load->view('view_school', $data);
    }

    public function logout()
    {
        $this->session->unset_userdata('admin_logged_in');
        redirect('AdminController/index');
    }
}

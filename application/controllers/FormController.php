<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FormController extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');  // Load the URL helper
        $this->load->database();     // Load the database library
        $this->load->model('FormModel');
    }

    public function index()
    {
        $this->load->view('application_form');
    }

    public function submit_form()
{
    // Assuming you have validated and processed your form data
    $school_data = array(
        'school_name' => $this->input->post('school_name'),
        'principal_name' => $this->input->post('principal_name'),
        'school_address' => $this->input->post('school_address'),
        'contact_no' => $this->input->post('contact_no'),
        'mobile_no' => $this->input->post('mobile_no'),
        // Include other necessary fields
    );

    // Insert the school data
    $school_id = $this->FormModel->insert_school_mentor($school_data);

    // Set the school ID in the session
    $this->session->set_userdata('form_submitted', true);
    $this->session->set_userdata('school_id', $school_id); // Save the school ID

    redirect('FormController/success');
}


    public function submit()
    {
        $data = array(
            'school_name' => $this->input->post('school_name'),
            'principal_name' => $this->input->post('principal_name'),
            'school_address' => $this->input->post('school_address'),
            'contact_no' => $this->input->post('contact_no'),
            'mobile_no' => $this->input->post('mobile_no'),
            'school_telephone' => $this->input->post('school_telephone'),
            'mentor_name' => $this->input->post('mentor_name'),
            'mentor_contact' => $this->input->post('mentor_contact'),
        );

        // Insert school and mentor data
        $school_id = $this->FormModel->insert_school_mentor($data);
    
        // Insert participants' data
        for ($i = 1; $i <= 5; $i++) {
            $participant_data = array(
                'school_id' => $school_id,
                'name' => $this->input->post("participant_name_$i"),
                'std' => $this->input->post("participant_std_$i"),
                'contact_no' => $this->input->post("participant_contact_$i"),
            );
            $this->FormModel->insert_participant($participant_data);
        }

        redirect('FormController/success');
    }

    
    public function success()
    {
        $this->load->view('form_success');
        // echo "Form submitted successfully!";
    }
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FormModel extends CI_Model {

    // Insert school and mentor data into the 'schools' table
    public function insert_school_mentor($data)
    {
        $this->db->insert('schools', $data);
        return $this->db->insert_id(); // Return the inserted school ID
    }

    // Insert participant data into the 'participants' table
    public function insert_participant($data)
    {
        $this->db->insert('participants', $data);
    }

    // Get all schools with their basic details
    public function get_all_schools()
    {
        $query = $this->db->get('schools');
        return $query->result_array();
    }

    // Get detailed information for a specific school by its ID
    public function get_school_by_id($school_id)
    {
        $this->db->where('id', $school_id);
        $query = $this->db->get('schools');
        return $query->row_array();
    }

    // Get all participants for a specific school by the school's ID
    public function get_participants_by_school($school_id)
    {
        $this->db->where('school_id', $school_id);
        $query = $this->db->get('participants');
        return $query->result_array();
    }
}

<?php
class User_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database(); // Load the database library
    }

    public function saveregisteruser($data) {
        return $this->db->insert('publisherdata', $data);
    }

    public function get_user_by_email($email) {
        $this->db->where('email', $email);
        $query = $this->db->get('publisherdata');
        return $query->row_array();
    }

    
    
}
?>

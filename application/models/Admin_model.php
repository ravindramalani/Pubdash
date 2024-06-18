<?php
class Admin_model extends CI_Model{

    public function __construct() {
        parent::__construct();
        $this->load->database(); // Load the database library
    }

    public function getpublisherdata() {
        $this->db->where('approved', 0);
        $query = $this->db->get('publisherdata');
        return $query->result();
    }

    public function approve_publisher($publisher_id) {
        $this->db->set('approved', 1);
        $this->db->where('id', $publisher_id);
        return $this->db->update('publisherdata');
    }

    public function delete_publisher($publisher_id) {
        $this->db->where('s_no', $publisher_id);
        return $this->db->delete('publisherdata');
    }
    
}
?>
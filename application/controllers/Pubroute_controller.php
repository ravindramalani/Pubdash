<?php
class Pubroute_controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
    }

    // Load the login view

    public function index() {
        $this->load->view('userlogin'); 
    }


    // Load the login view

    public function userRegister() {
        $this->load->view('createaccount');
    }

    // redirect user to dashbord 

    public function userdashboard(){
        $this->load->view('userdashboard');
    }

    // admin login

    public function adminlogin(){
        $this->load->view('superadminlogin');
    }

    // admin dashboard

    public function admindashboard(){
        $this->load->view('superadmindashboard');
    }

    // admin pending request

    public function pendingrequest(){
        $this->load->model('Admin_model');
        $data['pendingapprove']=$this->Admin_model->getpublisherdata();
        $this->load->view('panding_requests',$data);
    }


    public function publisherdata(){
        $this->load->model('Admin_model');
        $data['publisherdata']=$this->Admin_model->getpublisherdata();
        $this->load->view('allpublisherdata',$data);
    }


    public function delete_publisher($publisher_id) {
        $this->load->model('Admin_model');
        if ($publisher_id) {
            $this->Admin_model->delete_publisher($publisher_id);
            echo "Publisher deleted successfully.".$publisher_id;
        } else {
            echo "Failed to delete publisher.";
        }
        // echo "Publisher deleted successfully.";
    }

 public function bank(){
    $this->load->view('bankdetails');
 }


}
?>

<?php
class User_controller extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
    }

    public function register(){
        $this->load->model('User_model');
        $this->form_validation->set_rules('email', 'E-mail', 'required|valid_email');
        $this->form_validation->set_rules('name', 'username', 'trim|required');
        $this->form_validation->set_rules('password', 'password', 'trim|required');
        $this->form_validation->set_rules('number', 'Number', 'trim|required|numeric|min_length[10]|max_length[10]');

        if ($this->form_validation->run() == FALSE) {
            // If validation fails, reload the login view with errors
            $this->load->view('createaccount');
        }else{
            $password = $this->input->post('password');
            $cpassword = $this->input->post('cpassword');

            if($password === $cpassword){

                $data=[
                    'name' => $this->input->post('name'),
                    'email' => $this->input->post('email'),
                    'password' => $this->input->post('password'),
                    'number' => $this->input->post('number'),
                ];
                 
                $this->User_model->saveregisteruser($data);
                $this->load->view('userlogin');

            }else{
                $data['error']="password and confirmpassword not matched..";
                $this->load->view('createaccount',$data);
                    // echo"else part of the if..";
            }

 
       
        }
    }
 
    public function login() {
        $this->load->model('User_model');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            // If validation fails, reload the login view with errors
            $this->load->view('userlogin');
        } else {
            $email = $this->input->post('email');
            $password = $this->input->post('password');

            // Check if the user exists and is approved
            $user = $this->User_model->get_user_by_email($email);

            if ($user && $password===$user['password'] && $user['approved'] == 1) {
                // Set session data
                // $session_data = array(
                //     'user_id' => $user['id'],
                //     'username' => $user['name'],
                //     'logged_in' => TRUE
                // );
                // $this->session->set_userdata($session_data);

                // Redirect to the dashboard or some other page
                redirect('Pubroute_controller/userdashboard');
                // $this->load->view('userdashboard');
            } else {
                // Set an error message and reload the login view
                $data['error'] = 'Invalid email, password, or your account is not approved yet.';
                $this->load->view('userlogin', $data);
            }
        }
    }

    public function logout() {
        // Unset session data
        $this->session->unset_userdata(array('user_id', 'username',  'logged_in'));

        // Destroy the session
        $this->session->sess_destroy();

        // Redirect to the login page
        // redirect('login');
    }

}
?>

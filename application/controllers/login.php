<?php
class login extends CI_Controller
{
    public function __construct()
    {

        parent::__construct();
        $this->load->view('template/header');
        $this->load->view('template/navigation');
        $this->load->helper(array('form','url','html'));
        $this->load->library(array('session', 'form_validation'));
        $this->load->database();
        $this->load->model('user_model');


    }
    public function index()
    {


        // get form input
        $email = $this->input->post("email");
        $password = $this->input->post("password");

        // form validation
        $this->form_validation->set_rules("email", "Email-ID", "trim|required|xss_clean");
        $this->form_validation->set_rules("password", "Password", "trim|required|xss_clean");

        if ($this->form_validation->run() == FALSE)
        {
            // validation fail
            $this->load->view('login_view');
        }
        else
        {
            // check for user credentials
            $uresult = $this->user_model->get_user($email, $password);
            var_dump($uresult);
            if (count($uresult) > 0)
            {
                // set session
                $sess_data = array('login' => TRUE, 'uname' => $uresult[0]->meno, 'uid' => $uresult[0]->uzivatelID, 'email' => $uresult[0]->email);
                $this->session->set_userdata($sess_data);
                redirect("profile/index");
            }
            else
            {
                echo "focking fail";
                $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">Prihlásiť sa môže iba administrátor!</div>');
                redirect('login/index');
            }
        }
    }
}
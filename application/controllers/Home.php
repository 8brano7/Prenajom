<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('url', 'html'));
        $this->load->library('session');
    }

    public function index()
    {


        $this->load->view('template/header');
        $this->load->view('template/navigation');
        $this->load->view('home');
        $this->load->view('template/footer');
    }


    public function about() {
        $this->load->view('template/header');
        $this->load->view('template/navigation');
        $this->load->view('about');
        $this->load->view('template/footer');

    }



    public function contact() {
        $this->load->view('template/header');
        $this->load->view('template/navigation');
        $this->load->view('contact');
        $this->load->view('template/footer');

    }

    function logout()
    {
        // destroy session
        $data = array('login' => '', 'uname' => '', 'uid' => '');
        $this->session->unset_userdata($data);
        $this->session->sess_destroy();
        redirect('home/index');
    }

}
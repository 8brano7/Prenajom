<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{

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
        $this->load->view('about');
        $this->load->view('template/footer');

    }

}
<?php
class profile extends CI_Controller
{
	public function __construct()
	{

		parent::__construct();
        $this->load->view('template/header');
        $this->load->view('template/navigation');
		$this->load->helper(array('url','html'));
		$this->load->library('session');
		$this->load->database();
		$this->load->model('user_model');
	}
	
	function index()
	{

        $details = $this->user_model->get_user_by_id($this->session->userdata('uid'));

        $data['meno'] = $details[0]->meno;
        $data['email'] = $details[0]->email;
        $this->load->view('profile_view', $data);
	}
}
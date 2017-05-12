<?php
class signup extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form','url'));
		$this->load->library(array('session', 'form_validation'));
		$this->load->database();
		$this->load->model('user_model');
	}
	
	function index()
	{
		// set form validation rules

        var_dump($_POST);

		$this->form_validation->set_rules('meno', 'First Name', 'trim|required|alpha|min_length[3]|max_length[30]|xss_clean');
		$this->form_validation->set_rules('priezvisko', 'Last Name', 'trim|required|alpha|min_length[3]|max_length[30]|xss_clean');
        $this->form_validation->set_rules('spolocnost', 'Spolocnost', 'trim|required|alpha|min_length[3]|max_length[30]|xss_clean');
        $this->form_validation->set_rules('kontakt', 'Mobil');
		$this->form_validation->set_rules('email', 'Email ID', 'trim|required|valid_email|is_unique[uzivatel.email]');
		$this->form_validation->set_rules('heslo', 'Password', 'trim|required|matches[cpassword]|md5');
		$this->form_validation->set_rules('cpassword', 'Confirm Password', 'trim|required');

        var_dump($this->form_validation->run());
		// submit
		if (is_null($this->input->post('meno')))
        {
			// fails
			$this->load->view('signup_view');
        }
		else
		{
			//insert user details into db
			$data = array(
				'meno' => $this->input->post('meno'),
				'priezvisko' => $this->input->post('priezvisko'),
				'email' => $this->input->post('email'),
				'heslo' => $this->input->post('heslo'),
                'spolocnost' => $this->input->post('spolocnost'),
                'kontakt' => $this->input->post('kontakt')
			);
			
			if ($this->user_model->insert_user($data))
			{
				$this->session->set_flashdata('msg','<div class="alert alert-success text-center">You are Successfully Registered! Please login to access your Profile!</div>');
				redirect('signup/index');
			}
			else
			{
				// error
				$this->session->set_flashdata('msg','<div class="alert alert-danger text-center">Oops! Error.  Please try again later!!!</div>');
				redirect('signup/index');
			}
		}
	}
}
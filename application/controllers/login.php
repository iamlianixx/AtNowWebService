<?php
	class login extends CI_Controller{
		
		
		function __construct() {
			parent::__construct();
		}   
		
		function index(){
			
			$logged_in = $this->session->userdata('logged_in');
			
			if(isset($logged_in) && $logged_in == TRUE)
			{
				$data['main_content'] = 'home_view';
				$this->load->view('includes/template', $data);
			}

			else
			{
				$this->load->view('login_view');
			}
		}	
		
		function validateUser(){
			
			/*$this->load->library('form_validation');
			$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
			$this->form_validation->set_rules('pass', 'Password', 'trim|required');
			*/
			
			if($this->database_commands->validate($this->input->post('email'), $this->input->post('pass'))) /*$this->form_validation->run() == TRUE && */
			{
				$data = array(
				'logged_in' => TRUE,
				'email' => $this->input->post('email')
			);
				$this->session->set_userdata($data);
				redirect('home');
			}
			else
			{
				$this->index();
			}
		}

		function logout()
		{
			$this->session->sess_destroy();
			$this->index();
		}
	}
?>
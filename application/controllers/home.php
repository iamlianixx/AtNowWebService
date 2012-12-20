<?php
	
	class home extends CI_Controller
	{
		function index()
		{
			$logged_in = $this->session->userdata('logged_in');
			if(isset($logged_in) && $logged_in == TRUE)// can make redirect to admin or member page
			{	
				$data['advertisements'] = $this->database_commands->getAllAdvertisement($this->session->userdata('email'));	
				$data['main_content'] = 'home_view';
				$this->load->view('includes/template',$data);
			}

			else
			{
				echo "You don't have the right to access, go to ";
				echo anchor('login/logout', 'Login');// login is the controller then logout is the method
				die();
			}

		}
	}
?>


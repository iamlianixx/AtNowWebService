<?php
	class settings extends CI_Controller
	{
		public function _remap($method)
		{
		    if ($method == 'index')
		    {
		    	$msg = NULL;
		        $this->index($msg);
		    }
		    else if($method == 'update')
		    {
		    	$msg = $this->update();
		        $this->index($msg);
		    }
		}

		function index($msg)
		{
			$logged_in = $this->session->userdata('logged_in');
			if(isset($logged_in) && $logged_in == TRUE)
			{	
				if(isset($msg) && $msg != NULL)
				{
					$data['msg'] = $msg;
				}
				$email = $this->session->userdata('email');
				$data['userInfo'] =  $this->database_commands->getUserInfo($email);
				$data['main_content'] = 'settings_view';
				$this->load->view('includes/template', $data);
			}

			else
			{
				echo "You don't have the right to access, go to ";
				echo anchor('login/logout', 'Login');// login is the controller then logout is the method
				die();
			}
		}

		function update()
		{
			$this->load->library('form_validation');
			$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
			$this->form_validation->set_rules('pass1', 'Password', 'trim|required');
			$this->form_validation->set_rules('pass2', 'Password', 'trim|required');			
			$this->form_validation->set_rules('name', 'Name', 'trim|required');

			$config['upload_path'] = './images/profile_images';
			$config['allowed_types'] = 'gif|jpg|png';
			$config['max_size']	= '2000';
			$config['max_width']  = '1024';
			$config['max_height']  = '768';
			$config['file_name'] = $this->input->post('email');
			$config['overwrite'] = TRUE;
			$this->load->library('upload', $config);
			
			if($this->form_validation->run() == TRUE)
	        {
	        	
	        }

			if(isset($_FILES['userfile']['tmp_name']) && !empty($_FILES['userfile']['tmp_name']))
			{
        		if ( ! $this->upload->do_upload()) //if validation is wrong then, and ok upload then go to index
	            {
	                $error = array('error' => $this->upload->display_errors());	                
	                $data['msg'] = $error;
	            }
	            else
	            {
	            	$data['msg'] = NULL;
	            	//insert in db the new image url, do i need to do else? if the image name is the same as the email then the image itself has been override. image url will be the same.
	            }
	        }

	        return $data;
	    }
	}
?>
<?php
	
	class database_commands extends CI_model
	{
		function validate($email, $pass){
			$sql = "SELECT 1 FROM users WHERE username = ? AND password = ? AND type = ?";
			$q = $this->db->query($sql, array($email, $pass, "A"));
			
			return ($q->num_rows() > 0) ? 1 : 0; //1 if valid id & pass
		}

		function getAllAdvertisement($email)
		{
			$sql = "SELECT * FROM events";/*attends WHERE username = ?";*/
			return $q = $this->db->query($sql);/*, $email);*/
		}

		function getUserInfo($email)
		{
			$sql = "SELECT * FROM users WHERE username = ?";
			return $q = $this->db->query($sql, $email);
		}

		function updateUserInfo()
		{
			
		}
	}
?>
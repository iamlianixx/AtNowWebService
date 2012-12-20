<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="../../css/login.css" type="text/css">
	<title>Login</title>
</head>
<body class="oneColFixCtr">
	<div id="container">
		<div id="mainContent">
			<h1> Login </h1>
			<!--form-->
			
			<?php echo form_open('login/validateUser'); ?>	
			
			<!--input data types-->
			<?php
				$email_data = array(
					'name' => 'email',
					'id' => 'email',
					'value' => set_value('email'),
					'type' => 'text',
					'class' => 'textfield'
				);
			
				$password_data = array(
					'name' => 'pass',
					'id' => 'pass',
					'type' => 'password',
					'class' => 'textfield'
				);
				
				$button_data = array(
					'id' => 'abc',
					'type' => 'submit',
					'value' => 'Login'
				);
			?>
			<!--input data types end-->
			
			<table width="100%">
			<tr>
			<td width="40%"><p align="right">Username:</p></td>
			<td width="60%"><label>
				<?php echo form_input($email_data); ?>
			</label></td>
			</tr>
			<tr>
          <td><p align="right">Password:</p></td>
          <td><?php echo form_input($password_data)?></td>
        </tr>
      </table>
			
			<div id="butLogin"><?php echo form_submit($button_data)?></div>
	
			<?php echo form_close();?>	
	
			<?php echo validation_errors()?>
			<!--form end-->
		</div>
	</div>
</body>
</html>
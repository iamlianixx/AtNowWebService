<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<?php 
	echo form_open_multipart('settings/update'); 
	$row = $userInfo->result(); 
	$key = $row['0']; 
?>

<p>Email <?php echo form_input('email', $key->username);?> </p> 
<p>Name <?php echo form_input('name', $key->name);?> </p> 
<p>Password <?php echo form_password('pass1', $key->password);?> </p>
<p>Verify Password <?php echo form_password('pass2', $key->password);?> </p>
<p>Profile Image <input type="file" name="userfile" size="20" /></p>
<p><?php echo form_submit('update', 'Update');?> </p>

<?php echo form_close(); ?>

<?php if(isset($msg) && $msg != NULL) print_r($msg); //print errors in a paragraph tag ?>
<?= validation_errors() ?>

<body>
</body>
</html>
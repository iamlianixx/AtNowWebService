<html>
<head>
	<link rel="stylesheet" href="<?php echo base_url();?>/css/MenuStyle.css" type="text/css" media="screen" />
</head>
<body>

<div id="container" style="width:100%">

<div id="header" style="background-color:#FFA500;">
<h1 style="margin-bottom:0;">Main Title of Web Page</h1></div>

<div id="menu" style="background-color:#FFD700;height:200px;width:100px;float:left;">
	<table border = '2px' height="100%">
		<tr col = '25%'>
			<td>
				<ul class="topmenu">

					<li class ="submenu"><img src = "images/arrow_18"></img>
						<ul>
						<li><a href="settings">Settings</a></li>
						<li><a href="login/logout">Logout</a></li>
						</ul>
						<li>

					<li><a href="home">Home</a></li>
					
					<li class="submenu"><a href="">Manage ADS</a>
						<ul>
						<li><a href="">Previous ADS</a></li>
						<li><a href="">Ongoing ADS</a></li>
						</ul>
					</li>
					
					<li><a href="addAdvertisement">Add ADS</a></li>
				</ul>
			</td>
		</tr>
	</table>
</div>

<div id="content" style="background-color:#EEEEEE;height:200px;width:400px;float:left;">
<?php $this->load->view($main_content);	?>
</div>

<div id="footer" style="background-color:#FFA500;clear:both;text-align:center;">
Copyright © W3Schools.com</div>

</div>
 
</body>
</html>



<?php //$this->load->view('includes/header'); ?>

<?php 
//use parse view(header,"data");
//$this->load->view($main_content);	
?>
 
<?php //$this->load->view('includes/footer'); ?>

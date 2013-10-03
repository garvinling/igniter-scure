<? include('header.php'); ?>

<html lang="en">
<head>

		<meta charset="utf-8">
		<title>Login</title>
		<style>label{display:block;} .errors{color:red;}




	#container{
		margin: 10px;
		border: 1px solid #D0D0D0;
		-webkit-box-shadow: 0 0 8px #D0D0D0;
	}
		</style>

	</head>
	<body style="background-image:url('http://scure.me/img/grey.png');">
<div align="center" id="container"style="background-color:white;margin-top:200px; width:480px; margin-left:auto; margin-right:auto;">
	<br><h1>Login</h1><br><br>
	<?php echo form_open('admin');?>	

	<p>

		<input type="text" name="email_Address" id="email_address" placeholder="E-mail" style="height:30px;"/>
		<!--<?echo form_input('email_Address', '', 'id="email_address"');?>-->

	</p>
	<p>

		<input type="password" name="password" id="password" placeholder="Password" style="height:30px;"/>
		<!--<?echo form_password('password', '', 'id="password"');?>-->

	</p>
	<input type="submit" class = "btn btn-primary" value="Login"/>
	<?php echo form_close(); ?>
	<a href="register">Register for a New Account</a>
	<br><br><br>
</div>
	<div class="errors" align="center">
		<?php echo validation_errors();?> 
	</div>

	</body>
	</html>


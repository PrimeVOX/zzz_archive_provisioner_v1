<?php
	include_once("provision_system_config.php");
	$password = $_POST['password'];
	if ($password==$provision_login_password)
	{
		setcookie("login1","hello");
		setcookie("login2",hash("sha256",$provision_login_password));
		header("Location: provision_dashboard.php");
	}
	else
	{
		header("Location: noaccess.php?error=1");
	}
	
	/*
			TO DO:
				Maybe move the password and user area to the database, since at this point, it's set up.
				
	*/
?>
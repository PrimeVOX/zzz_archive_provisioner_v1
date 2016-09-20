<?php
	if (file_exists("provision_system_config.php"))
	{
		include_once("provision_system_config.php");
		include_once("provision_system_functions.php");
		
		$mac_address = $_GET['mac_address'];
		$con = connect_mysql();
		if ($con)
		{
			$con->query("USE pvx_provisioner");
			$con->query("UPDATE user_devices SET needs_provisioning=0 WHERE mac_address='".$mac_address."'");
		}
	}
	else
	{
		header("Location: provision_install.php");	
	}
	header("Location: provision_phones_manage.php?mac_address=".$mac_address);
?>
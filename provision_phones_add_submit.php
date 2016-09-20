<?php
	if (file_exists("provision_system_config.php"))
	{
		include_once("provision_system_config.php");
		include_once("provision_system_functions.php");
	}
	else
	{
		header("Location: provision_install.php");	
	}
	$mac_address=strtolower($_POST['mac_address']);
	$soft_name=urlencode($_POST['soft_name']);
	$model = $_POST['model'];
	$group = $_POST['group'];
	$mac_address=str_replace(":", "", $mac_address);
	$mac_address=str_replace(" ", "", $mac_address);
	$mac_address=str_replace("'", "", $mac_address);
	$mac_address=str_replace('"', "", $mac_address);
	$mac_address=str_replace(";", "", $mac_address);
	if ($mac_address!="")
	{
		$con=connect_mysql();
		if ($con)
		{
			$con->query("USE pvx_provisioner");
			$q1=$con->query("INSERT INTO user_devices (mac_address, needs_provisioning, soft_name, device_type, device_group) VALUES ('".$mac_address."',1,'".$soft_name."',".$model.",".$group.")");
			if ($q1)
			{
				header("Location: provision_phones.php");
			}
			else
			{
				echo "There was an error.";	
			}
		}
	}
	else
	{
		echo 'ERROR: MAC address is required.';	
	}
?>
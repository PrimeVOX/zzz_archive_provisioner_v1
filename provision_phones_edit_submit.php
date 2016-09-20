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
	
	$mac_address=strtolower($_GET['mac_address']);
	
	$new_mac_address=strtolower($_POST['mac_address']);
	$soft_name=urlencode($_POST['soft_name']);
	$model = $_POST['model'];
	$group = $_POST['group'];
	$mac_address=str_replace(":", "", $mac_address);
	$mac_address=str_replace(" ", "", $mac_address);
	$mac_address=str_replace("'", "", $mac_address);
	$mac_address=str_replace('"', "", $mac_address);
	$mac_address=str_replace(";", "", $mac_address);
	if ($mac_address!="" && $new_mac_address!="")
	{
		$con=connect_mysql();
		if ($con)
		{
			$con->query("USE pvx_provisioner");
			//Update softname, model, and group
			$con->query("UPDATE user_devices SET soft_name='".$soft_name."' WHERE mac_address='".$mac_address."'");
			$con->query("UPDATE user_devices SET device_type='".$model."' WHERE mac_address='".$mac_address."'");
			$con->query("UPDATE user_devices SET device_group='".$group."' WHERE mac_address='".$mac_address."'");
			if ($mac_address!=$new_mac_address)
			{
				//Update mac address and set provision flag
				$con->query("UPDATE user_devices SET mac_address='".$new_mac_address."' WHERE mac_address='".$mac_address."'");
				//Updated. Now update the tables
				$con->query("UPDATE provisioner_specific_settings SET mac_address='".strtoupper($new_mac_address)."' WHERE mac_address='".$mac_address."'");
				//Now set the flag
				$con->query("UPDATE user_devices SET needs_provisioning=1 WHERE mac_address='".$new_mac_address."'");
			}
		}
	}
	else
	{
		echo 'ERROR: MAC address is required.';	
	}
	header("Location: provision_phones_manage.php?mac_address=".$new_mac_address);
?>
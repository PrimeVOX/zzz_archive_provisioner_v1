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
	
	$new_mac_address=strtolower($_GET['mac_address']);
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
			//Update softname, model, and group
			$con->query("DELETE FROM user_devices WHERE mac_address='".$mac_address."'");
			if ($mac_address!=$new_mac_address)
			{
				//Updated. Now update the tables
				$con->query("DELETE FROM provisioner_specific_settings WHERE mac_address='".$mac_address."'");
			}
			unlink(rtrim($provision_path_local,'/')."/cfg".strtolower($mac_address).".xml");
		}
	}
	else
	{
		echo 'ERROR: MAC address is required.';	
	}
	header("Location: provision_phones.php");
?>
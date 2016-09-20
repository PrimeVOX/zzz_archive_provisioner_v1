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
	//error_reporting(E_ALL);
	//Submission of panel. Get TYPE, GROUP, PVAL
	
	$device_type = $_GET['type'];
	//$device_group = $_GET['group'];
	$device_mac = strtoupper($_GET['mac_address']);
	//echo $device_type.' '.$device_mac;
	//Any number of settings
	//var_dump($_POST);
	$con = connect_mysql();
	if ($con)
	{
		$con->query("USE pvx_provisioner");
		foreach($_POST as $pValue => $value)
		{
			$value = str_replace("+", "!PLUS!", $value); /* CORRECTIONAL */
			//First, load default
			$q1=$con->query("SELECT * FROM provisioner_device_defaults WHERE device_type=".$device_type." AND setting_variable_name='".$pValue."'");
			if ($q1 && $q1->rowCount()) {$a1=$q1->fetch(); $defaultValue=$a1['setting_option_1'];} else {$defaultValue="";}
			
			//Next, check exist
			$q2=$con->query("SELECT * FROM provisioner_specific_settings WHERE mac_address='".$device_mac."' AND setting_variable_name='".$pValue."'");
			if ($q2 && $q2->rowCount()>0)
			{
				//Exists, overwrite
				if ($value!=$defaultValue)
				{
					//New value is NOT default
					$value=str_replace("+", "!PLUS!", $value);
					$con->query("UPDATE provisioner_specific_settings SET setting_option_1='".urlencode($value)."' WHERE setting_variable_name='".$pValue."' AND mac_address='".$device_mac."'");
				}
				else
				{
					//New value is default, delete existing entry....
					$con->query("DELETE FROM provisioner_specific_settings WHERE setting_variable_name='".$pValue."' AND mac_address='".$device_mac."'");
				}
			}
			else
			{
				
				//Nonexist, add
				if ($value!=$defaultValue) {$value=str_replace("+", "!PLUS!", $value); $con->query("INSERT INTO provisioner_specific_settings (mac_address, setting_variable_name, setting_option_1) VALUES ('".$device_mac."', '".$pValue."', '".urlencode($value)."')");}
			}
		}
		
		//Update the provisioning status for all phones relevant... Only mac this time
		$q3=$con->query("UPDATE user_devices SET needs_provisioning=1 WHERE mac_address='".$device_mac."'");
		$q3=$con->query("UPDATE user_devices SET provision_date_new='".$timestamp=date("Y-m-d H:i:s")."' WHERE mac_address='".$device_mac."'");
		
		echo '<font color=green>Updated database. Change #'.rand(1,99999).'</font>';
	}
	else
	{
		echo '<font color=red>Error connecting to database.</font>';	
	}
?>
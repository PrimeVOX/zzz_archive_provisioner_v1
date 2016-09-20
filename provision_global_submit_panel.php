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
	//Submission of panel. Get TYPE, GROUP, PVAL
	$device_type = $_GET['type'];
	$device_group = $_GET['group'];
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
			$q2=$con->query("SELECT * FROM provisioner_global_settings WHERE device_type=".$device_type." AND device_group=".$device_group." AND setting_variable_name='".$pValue."'");
			if ($q2 && $q2->rowCount()>0)
			{
				//Exists, overwrite
				if ($value!=$defaultValue)
				{
					//New value is NOT default
					$con->query("UPDATE provisioner_global_settings SET setting_option_1='".urlencode($value)."' WHERE setting_variable_name='".$pValue."' AND device_group=".$device_group." AND device_type=".$device_type);
				}
				else
				{
					echo "DELETE";
					//New value is default, delete existing entry....
					$con->query("DELETE FROM provisioner_global_settings WHERE device_type=".$device_type." AND setting_variable_name='".$pValue."' AND device_group=".$device_group." AND device_type=".$device_type);
				}
			}
			else
			{
				//Nonexist, add
				if ($value!=$defaultValue) {$con->query("INSERT INTO provisioner_global_settings (device_type, device_group, setting_variable_name, setting_option_1) VALUES (".$device_type.", ".$device_group.", '".$pValue."', '".urlencode($value)."')");}
			}
		}
		
		//Update the provisioning status for all phones relevant... Group 0, all in model. 
		if ($device_group==0)
		{
			//no group (universal), so model-spec only
			$q3=$con->query("UPDATE user_devices SET needs_provisioning=1 WHERE device_type=".$device_type);
			$q3=$con->query("UPDATE user_devices SET provision_date_new='".$timestamp=date("Y-m-d H:i:s")."' WHERE device_type=".$device_type);
		}
		else
		{
			//There's a group, so model-spec AND group-spec
			$q3=$con->query("UPDATE user_devices SET needs_provisioning=1 WHERE device_type=".$device_type." AND device_group=".$device_group);
			$q3=$con->query("UPDATE user_devices SET provision_date_new='".$timestamp=date("Y-m-d H:i:s")."' WHERE device_type=".$device_type." AND device_group=".$device_group);
		}
		
		echo '<font color=green>Updated database. Change #'.rand(1,99999).'</font>';
	}
	else
	{
		echo '<font color=red>Error connecting to database.</font>';	
	}
?>
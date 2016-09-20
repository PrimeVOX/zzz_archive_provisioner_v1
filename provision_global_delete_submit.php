<?php
	if (file_exists("provision_system_config.php"))
	{
		include_once("provision_system_config.php");
		include_once("provision_system_functions.php");
		
		$group = $_GET['group'];
		$type = $_GET['type'];
		$confirm = $_POST['field_value'];
		
		if ($confirm === "DELETE")
		{
			//Delete global for $group, $type
			
			$con = connect_mysql();
			if ($con)
			{
				$con->query("USE pvx_provisioner");
				$con->query("DELETE FROM provisioner_global_settings WHERE device_type=".$type." AND device_group=".$group);
			}
		}
	}
	else
	{
		header("Location: provision_install.php");	
	}
	header("Location: provision_global.php");
?>
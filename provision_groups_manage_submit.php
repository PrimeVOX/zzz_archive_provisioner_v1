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
	$group_number=strtolower($_GET['group_number']);
	$group_name=urlencode($_POST['group_name']);
	echo $group_name;
	echo $group_number;
	if ($group_name!="")
	{
		$con=connect_mysql();
		if ($con)
		{
			$con->query("USE pvx_provisioner");
			$q1=$con->query("UPDATE provisioner_group_definitions SET group_name='".$group_name."' WHERE group_number=".$group_number);
			if ($q1)
			{
				header("Location: provision_groups.php");
			}
			else
			{
				echo "There was an error.";	
			}
		}
	}
	else
	{
		echo 'ERROR: Group Name is required.';	
	}
?>
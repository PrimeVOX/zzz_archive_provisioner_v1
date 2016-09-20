<?php
	//Fetch some updates, if available!
	
	system("rm provisioner_update_package.tar");
	system("wget --no-check-certificate https://provisioning.primevox.net/updates/provisioner_update_package.tar",$out);
	system("tar -zxf provisioner_update_package.tar");
	echo 'Update pulled and untarred!<br><br>';
	//Are there post-install hooks?
	if (file_exists("install_hook.php"))
	{
		echo 'Post-installation hook found! Click <a href="install_hook.php">this link</a> to process hook.';
	}
	else
	{
		echo 'No post-installation hooks, <a href="provision_dashboard.php">Back to the Dashboard</a>';
	}
?>
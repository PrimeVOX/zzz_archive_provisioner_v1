<?php
	
	system("tar -cf updates/provisioner_update_package.tar css fonts img js *.php *.js");
	system("tar --delete -f updates/provisioner_update_package.tar provision_system_config.php");
	echo 'Package pushed. <a href="provision_dashboard.php">Go back</a>';
	
?>
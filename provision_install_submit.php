<?php
	if (isset($_POST['db_address'])) {$db_address = $_POST['db_address'];}
	if (isset($_POST['db_port'])) {$db_port = $_POST['db_port'];}
	if (isset($_POST['db_username'])) {$db_username = $_POST['db_username'];}
	if (isset($_POST['db_password'])) {$db_password = $_POST['db_password'];}
	if (isset($_POST['soft_title'])) {$soft_title = $_POST['soft_title'];}	
	if (isset($_POST['soft_logo'])) {$soft_logo = $_POST['soft_logo'];}
	if (isset($_POST['provision_local'])) {$provision_local = $_POST['provision_local'];}
	if (isset($_POST['provision_remote'])) {$provision_remote = $_POST['provision_remote'];}
	try
	{
		$con = new PDO("mysql:host=".$db_address.";port=".$db_port,$db_username,$db_password);
	}
	catch(PDOException $exception)
	{
		echo 'There was an error in your MySQL settings.<br><br>Error returned: '.$exception->getMessage();	
	}
	
	if ($con)
	{
		echo 'Connected to MySQL successfully via PDO...';
		//Successful connection to database. Write a config file....
		$cfile = '<?php
	$provision_db_address = "'.$db_address.'";
	$provision_db_port = '.$db_port.';
	$provision_db_username = "'.$db_username.'";
	$provision_db_password = "'.$db_password.'";
	$provision_soft_title = "PrimeVOX Provisioner";
	$provision_soft_logo = "Provisioner";
	$provision_path_local = "'.$provision_local.'";
	$provision_path_remote = "'.$provision_remote.'";
	$provision_login_password = "password123";
?>';
		if (file_exists("provision_system_config.php")) {unlink("provision_system_config.php");}
		file_put_contents("provision_system_config.php", $cfile);
		echo '<br>Created configuration file...';
		//create our database
		if ($con->query("CREATE DATABASE pvx_provisioner"))
		{
			echo '<br>Created the pvx_provisioner database...';
			$con->query("USE pvx_provisioner");
			
			$sql="CREATE TABLE user_devices
				(
					slotID int NOT NULL AUTO_INCREMENT, 
					PRIMARY KEY(slotID),
					mac_address varchar(200),
					needs_provisioning int,
					soft_name varchar(200),
					device_type int,
					device_group int,
					provision_date_current varchar(200),
					provision_date_new varchar(200)
				)";
			if (!$con->query($sql)) {echo "ERROR";}
			echo '<br>Created the user_devices table...';
			$sql="CREATE TABLE provisioner_device_definitions
				(
					slotID int NOT NULL AUTO_INCREMENT, 
					PRIMARY KEY(slotID),
					device_type int,
					device_manuf varchar(900),
					device_model varchar(200),
					data1 varchar(900),
					data2 varchar(900)
				)";
			if (!$con->query($sql)) {echo "ERROR";}
			$sql="CREATE TABLE provisioner_group_definitions
				(
					slotID int NOT NULL AUTO_INCREMENT, 
					PRIMARY KEY(slotID),
					group_number int,
					group_name varchar(900)
				)";
			if (!$con->query($sql)) {echo "ERROR";}
			echo '<br>Created the provisioner_device_definitions table...';
			$sql="CREATE TABLE provisioner_device_defaults
				(
					slotID int NOT NULL AUTO_INCREMENT, 
					PRIMARY KEY(slotID),
					device_type int,
					category_name varchar(200),
					setting_name varchar(200),
					setting_description varchar(300),
					setting_variable_name varchar(50),
					setting_variable_type int,
					setting_option_1 varchar(200),
					setting_option_1_name varchar(200),
					setting_option_2 varchar(200),
					setting_option_2_name varchar(200),
					setting_option_3 varchar(200),
					setting_option_3_name varchar(200),
					setting_option_4 varchar(200),
					setting_option_4_name varchar(200),
					setting_option_5 varchar(200),
					setting_option_5_name varchar(200),
					setting_option_6 varchar(200),
					setting_option_6_name varchar(200),
					setting_option_7 varchar(200),
					setting_option_7_name varchar(200),
					setting_option_8 varchar(200),
					setting_option_8_name varchar(200),
					setting_option_9 varchar(200),
					setting_option_9_name varchar(200),
					setting_option_10 varchar(200),
					setting_option_10_name varchar(200),
					setting_option_11 varchar(200),
					setting_option_11_name varchar(200),
					setting_option_12 varchar(200),
					setting_option_12_name varchar(200),
					setting_option_13 varchar(200),
					setting_option_13_name varchar(200),
					setting_option_14 varchar(200),
					setting_option_14_name varchar(200),
					setting_option_15 varchar(200),
					setting_option_15_name varchar(200),
					setting_option_16 varchar(200),
					setting_option_16_name varchar(200),
					setting_option_17 varchar(200),
					setting_option_17_name varchar(200),
					setting_option_18 varchar(200),
					setting_option_18_name varchar(200),
					setting_option_19 varchar(200),
					setting_option_19_name varchar(200),
					setting_option_20 varchar(200),
					setting_option_20_name varchar(200)
				)";
			$con->query($sql);
			echo '<br>Created provisioner_device_defaults table...';
			$sql="CREATE TABLE provisioner_global_settings
				(
					slotID int NOT NULL AUTO_INCREMENT, 
					PRIMARY KEY(slotID),
					device_type int,
					device_group int,
					setting_variable_name varchar(50),
					setting_option_1 varchar(400)
				)";
			$con->query($sql);
			echo '<br>Created provisioner_global_settings table...';
			$sql="CREATE TABLE provisioner_specific_settings
				(
					slotID int NOT NULL AUTO_INCREMENT, 
					PRIMARY KEY(slotID),
					mac_address varchar(100),
					setting_variable_name varchar(50),
					setting_option_1 varchar(400)
				)";
			$con->query($sql);
			echo '<br>Created provisioner_specific_settings table...';
			
			$con->query("INSERT INTO provisioner_device_definitions (device_type,device_manuf,device_model,data1,data2) VALUES (1,'Grandstream','GXP2130','','')");
			$con->query("INSERT INTO provisioner_device_definitions (device_type,device_manuf,device_model,data1,data2) VALUES (2,'Grandstream','GXP2140','','')");
			$con->query("INSERT INTO provisioner_device_definitions (device_type,device_manuf,device_model,data1,data2) VALUES (3,'Grandstream','GXP2160','','')");
			$con->query("INSERT INTO provisioner_device_definitions (device_type,device_manuf,device_model,data1,data2) VALUES (4,'Grandstream','GXW4248','','')");
			$con->query("INSERT INTO provisioner_device_definitions (device_type,device_manuf,device_model,data1,data2) VALUES (5,'Grandstream','GXW4232','','')");
			$con->query("INSERT INTO provisioner_device_definitions (device_type,device_manuf,device_model,data1,data2) VALUES (6,'Grandstream','GXW4224','','')");
			$con->query("INSERT INTO provisioner_device_definitions (device_type,device_manuf,device_model,data1,data2) VALUES (7,'Grandstream','GXW4216','','')");
			$con->query("INSERT INTO provisioner_device_definitions (device_type,device_manuf,device_model,data1,data2) VALUES (8,'Grandstream','HT702','','')");
			$con->query("INSERT INTO provisioner_device_definitions (device_type,device_manuf,device_model,data1,data2) VALUES (9,'Grandstream','HT704','','')");
			$con->query("INSERT INTO provisioner_device_definitions (device_type,device_manuf,device_model,data1,data2) VALUES (10,'Yealink','T28p','','')");
			$con->query("INSERT INTO provisioner_device_definitions (device_type,device_manuf,device_model,data1,data2) VALUES (11,'Yealink','T26p','','')");
			$con->query("INSERT INTO provisioner_device_definitions (device_type,device_manuf,device_model,data1,data2) VALUES (12,'Yealink','T22p','','')");
			$con->query("INSERT INTO provisioner_device_definitions (device_type,device_manuf,device_model,data1,data2) VALUES (13,'Yealink','T21p','','')");
			$con->query("INSERT INTO provisioner_device_definitions (device_type,device_manuf,device_model,data1,data2) VALUES (14,'Yealink','T20p','','')");
			$con->query("INSERT INTO provisioner_device_definitions (device_type,device_manuf,device_model,data1,data2) VALUES (15,'Yealink','T19p','','')");
			$con->query("INSERT INTO provisioner_device_definitions (device_type,device_manuf,device_model,data1,data2) VALUES (16,'Yealink','T46g','','')");
			$con->query("INSERT INTO provisioner_device_definitions (device_type,device_manuf,device_model,data1,data2) VALUES (17,'Yealink','T42g','','')");
			$con->query("INSERT INTO provisioner_device_definitions (device_type,device_manuf,device_model,data1,data2) VALUES (18,'Yealink','T41p','','')");
			echo '<br>Loaded the device definitions...';
			include_once("provision_install_gxp21xx.php");
			//include_once("provision_install_yealinktxx.php");
			echo '<br>Defaults for GXP2130/40/60 Loaded!';
			//echo '<br>Defaults for GXP2200EXT Loaded!';
			//echo '<br>Defaults for Yealink T28p/T26p/T22p/T21p/T20p/T19p/T46g/T42g/T41p Loaded!';
			echo '<br><Br>Installation complete! <a href="provision_dashboard.php">Head to the Dashboard</a>';
		}
		else
		{
			echo 'ERROR: Could not create database pvx_provisioner! Does it already exist?';	
		}
	}
	function load_device_default($con,$device_type, $category_name, $setting_name, $setting_description, $setting_variable_name, $setting_variable_type, $setting_option_1, $setting_option_1_name = "", $setting_option_2 = "", $setting_option_2_name = "", $setting_option_3 = "", $setting_option_3_name = "", $setting_option_4 = "", $setting_option_4_name = "", $setting_option_5 = "", $setting_option_5_name = "", $setting_option_6 = "", $setting_option_6_name = "", $setting_option_7 = "", $setting_option_7_name = "", $setting_option_8 = "", $setting_option_8_name = "", $setting_option_9 = "", $setting_option_9_name = "", $setting_option_10 = "", $setting_option_10_name = "")
	{
		$con->query("INSERT INTO provisioner_device_defaults (device_type,category_name,setting_name,setting_description,setting_variable_name,setting_variable_type,setting_option_1,setting_option_1_name,setting_option_2,setting_option_2_name,setting_option_3,setting_option_3_name,setting_option_4,setting_option_4_name,setting_option_5,setting_option_5_name,setting_option_6,setting_option_6_name,setting_option_7,setting_option_7_name,setting_option_8,setting_option_8_name,setting_option_9,setting_option_9_name,setting_option_10,setting_option_10_name) VALUES (".$device_type.",'".$category_name."','".$setting_name."','".$setting_description."','".$setting_variable_name."',".$setting_variable_type.",'".$setting_option_1."','".$setting_option_1_name."','".$setting_option_2."','".$setting_option_2_name."','".$setting_option_3."','".$setting_option_3_name."','".$setting_option_4."','".$setting_option_4_name."','".$setting_option_5."','".$setting_option_5_name."','".$setting_option_6."','".$setting_option_6_name."','".$setting_option_7."','".$setting_option_7_name."','".$setting_option_8."','".$setting_option_8_name."','".$setting_option_9."','".$setting_option_9_name."','".$setting_option_10."','".$setting_option_10_name."')");
	}
?>
<?php
	include_once("provision_system_config.php");
	//Check log-in
	if ($_COOKIE['login1']!="" && $_COOKIE['login2']!="" && $_COOKIE['login2']==hash("sha256",$provision_login_password))
	{
		//Good!
	}
	else
	{
		header("Location: noaccess.php");
	}
	
	$provisioner_version = 0.1;
	date_default_timezone_set("America/Chicago");
	function connect_mysql()
	{
		global $provision_db_address;
		global $provision_db_port;
		global $provision_db_username;
		global $provision_db_password;
		global $provision_path_local;
		global $provision_path_remote;
		$sys_con=(-1);
		try {$sys_con = new PDO("mysql:host=".$provision_db_address.";port=".$provision_db_port,$provision_db_username,$provision_db_password);	} catch (PDOException $exception) {echo $exception->getMessage();}
		return $sys_con;
	}
	function mac_to_softname($mac)
	{
		$con = connect_mysql();
		if ($con)
		{
			$con->query("USE pvx_provisioner");
			$q1=$con->query("SELECT * FROM user_devices WHERE mac_address='".$mac."'");
			if ($q1 && $q1->rowCount()>0)
			{
				$a1 = $q1->fetch();
				return urldecode($a1['soft_name']);
			}
			else
			{
				return "err_nonexist";	
			}
		}
		else
		{
			return "err_noconnect";	
		}	
	}
	function mac_format($mac)
	{
		if ($mac != "")
		{
			$mac = strtoupper($mac);
			
			$strlen=strlen($mac);
			$colonCount = floor(($strlen/2)-1);
			$mac_reconstructed = "";
			for($i=0;$i<=$colonCount;$i+=1)
			{
				if ($i>0) {$mac_reconstructed.=":".substr($mac, $i*2, 2);} else {$mac_reconstructed.=substr($mac, $i*2, 2);}
			}
			return $mac_reconstructed;
		}
		else
		{
			return "err_blank";
		}	
	}
	function mac_to_devicetype($mac)
	{
		$con = connect_mysql();
		if ($con)
		{
			$con->query("USE pvx_provisioner");
			$q1=$con->query("SELECT * FROM user_devices WHERE mac_address='".$mac."'");
			if ($q1 && $q1->rowCount()>0)
			{
				$a1 = $q1->fetch();
				return $a1['device_type'];
			}
			else
			{
				return 1;	
			}
		}
		else
		{
			return 1;	
		}	
	}
	function mac_to_group($mac)
	{
		$con = connect_mysql();
		if ($con)
		{
			$con->query("USE pvx_provisioner");
			$q1=$con->query("SELECT * FROM user_devices WHERE mac_address='".$mac."'");
			if ($q1 && $q1->rowCount()>0)
			{
				$a1 = $q1->fetch();
				return $a1['device_group'];
			}
			else
			{
				return 1;	
			}
		}
		else
		{
			return 1;	
		}	
	}
	function device_type_to_name($type)
	{
		$con = connect_mysql();
		if ($con)
		{
			$con->query("USE pvx_provisioner");
			$q1=$con->query("SELECT * FROM provisioner_device_definitions WHERE device_type=".$type);
			if ($q1 && $q1->rowCount()>0)
			{
				$a1 = $q1->fetch();
				return $a1['device_manuf']." ".$a1['device_model'];
			}
			else
			{
				return 1;	
			}
		}
		else
		{
			return 1;	
		}	
	}
	function phone_count_total()
	{
		$con = connect_mysql();
		if ($con)
		{
			$con->query("USE pvx_provisioner");
			$q1=$con->query("SELECT * FROM user_devices");
			if ($q1 && $q1->rowCount()>0)
			{
				return $q1->rowCount();
			}
			else
			{
				return 0;	
			}
		}
		else
		{
			return 0;	
		}	
	}
	function phone_count_np()
	{
		$con = connect_mysql();
		if ($con)
		{
			$con->query("USE pvx_provisioner");
			$q1=$con->query("SELECT * FROM user_devices WHERE needs_provisioning=1");
			if ($q1 && $q1->rowCount()>0)
			{
				return $q1->rowCount();
			}
			else
			{
				return 0;	
			}
		}
		else
		{
			return 0;	
		}	
	}
	function boolean_to_string($boolean)
	{
		if ($boolean) {return "Yes";} else {return "No";}	
	}
	function config_create($mac_address,$device_type,$device_group)
	{
		global $provision_path_local;
		global $provision_path_remote;
		$config_success=true;
		//Based on $device_type, generate a config and return success/fail
		if ($device_type==1 || $device_type==2 || $device_type==3)
		{
			//GXP2130/40/60
			$xml_data = '<?xml version="1.0" encoding="UTF-8" ?>
	<gs_provision version="1">
		<mac>'.strtoupper($mac_address).'</mac>
		<config version="1">
';
					//Loop through defaults, get global, group, and indiv
					$con=connect_mysql();
					if ($con)
					{
						$con->query("USE pvx_provisioner");
						$q1=$con->query("SELECT * FROM provisioner_device_defaults WHERE device_type=".$device_type);
						if ($q1 && $q1->rowCount()>0)
						{
							while($a1=$q1->fetch())
							{
								$this_pValue = $a1['setting_variable_name'];
								$this_current = $a1['setting_option_1'];
								$this_default = $a1['setting_option_1'];
								if ($this_pValue==="P237")
								{
									//Inject server address
									$xml_data.='			<P237>'.str_replace("http://", "", $provision_path_remote).'</P237>
'; //END IN CRLF!
								}
								else
								{
									//We have a pValue and its default setting. Get the group's setting, then the individual setting
									$q4=$con->query("SELECT * FROM provisioner_global_settings WHERE device_type=".$device_type." AND device_group=0 AND setting_variable_name='".$this_pValue."'");
									if ($q4 && $q4->rowCount()>0)
									{
										//There is the ANY GROUP setting!
										$a4=$q4->fetch();
										$this_current=urldecode($a4['setting_option_1']);
									}
									$q2=$con->query("SELECT * FROM provisioner_global_settings WHERE device_type=".$device_type." AND device_group=".$device_group." AND setting_variable_name='".$this_pValue."'");
									if ($q2 && $q2->rowCount()>0)
									{
										//There is a group setting!
										$a2=$q2->fetch();
										$this_current=urldecode($a2['setting_option_1']);
									}
									//We now have a default and group. Get the individual
									$q3=$con->query("SELECT * FROM provisioner_specific_settings WHERE mac_address='".$mac_address."' AND setting_variable_name='".$this_pValue."'");
									if ($q3 && $q3->rowCount()>0)
									{
										//There is a group setting!
										$a3=$q3->fetch();
										$this_current=urldecode($a3['setting_option_1']);
									}
									//this_pValue stores P-VALUE, and $this_current stores SETTING VALUE
									if ($this_current!=$this_default)
									{
										$this_current=str_replace("!PLUS!", "+", $this_current);
										$xml_data.='			<'.$this_pValue.'>'.$this_current.'</'.$this_pValue.'>
'; //END IN CRLF!
									}
								}
							}
						}
						else
						{
							$config_success=false;	
						}
					}
					else
					{
						$config_success=false;	
					}
				$xml_data.='		</config>
	</gs_provision>';
			//XML compiled, write to file
			if (!file_put_contents(rtrim($provision_path_local,'/')."/cfg".strtolower($mac_address).".xml", $xml_data)) {$config_success=false;}
			//Mark as complete if success
			if ($config_success)
			{
				$con->query("UPDATE user_devices SET needs_provisioning=0 WHERE mac_address='".$mac_address."'");
			}
			return $config_success;
		}
	}
	function inherit_specific($device_type, $mac_address, $variable_name)
	{
		//Find an inherited value
		$con=connect_mysql();
		if ($con)
		{
			$con->query("USE pvx_provisioner");
			//Get a group
			$q4=$con->query("SELECT * FROM user_devices WHERE mac_address='".$mac_address."'");
			if ($q4 && $q4->rowCount()>0)
			{
				$a4=$q4->fetch();
				$device_group=$a4['device_group'];
			}
			else
			{
				$device_group=0;
			}
			$q1=$con->query("SELECT * FROM provisioner_device_defaults WHERE device_type=".$device_type." AND setting_variable_name='".$variable_name."'");
			if ($q1 && $q1->rowCount()>0)
			{
				$a1=$q1->fetch();
				$this_pValue = $a1['setting_variable_name'];
				$this_current = $a1['setting_option_1'];
				$this_default = $a1['setting_option_1'];
				//We have a pValue and its default setting. Get the group's setting, then the individual setting
				$q4=$con->query("SELECT * FROM provisioner_global_settings WHERE device_type=".$device_type." AND device_group=0 AND setting_variable_name='".$this_pValue."'");
				if ($q4 && $q4->rowCount()>0)
				{
					//There is the ANY GROUP setting!
					$a4=$q4->fetch();
					$this_current=urldecode($a4['setting_option_1']);
				}
				$q2=$con->query("SELECT * FROM provisioner_global_settings WHERE device_type=".$device_type." AND device_group=".$device_group." AND setting_variable_name='".$this_pValue."'");
				if ($q2 && $q2->rowCount()>0)
				{
					//There is a group setting!
					$a2=$q2->fetch();
					$this_current=urldecode($a2['setting_option_1']);
				}
				//We now have a default and group. Get the individual
				$q3=$con->query("SELECT * FROM provisioner_specific_settings WHERE mac_address='".$mac_address."' AND setting_variable_name='".$this_pValue."'");
				if ($q3 && $q3->rowCount()>0)
				{
					//There is a group setting!
					$a3=$q3->fetch();
					$this_current=urldecode($a3['setting_option_1']);
				}
				//this_pValue stores P-VALUE, and $this_current stores SETTING VALUE
				if ($this_current!=$this_default)
				{
					$this_current=str_replace("!PLUS!", "+", urldecode($this_current));
					return $this_current;
				}
			}
			else
			{
				return "DEFAULT_NOEXIST";
			}
		}
		else
		{
			return "CONN_FAILED";	
		}
	}
	function inherit_group($device_type, $device_group, $variable_name)
	{
		if ($device_group > 0)
		{
			//Find an inherited value
			$con=connect_mysql();
			if ($con)
			{
				$con->query("USE pvx_provisioner");
				$q1=$con->query("SELECT * FROM provisioner_device_defaults WHERE device_type=".$device_type." AND setting_variable_name='".$variable_name."'");
				if ($q1 && $q1->rowCount()>0)
				{
					$a1=$q1->fetch();
					$this_pValue = $a1['setting_variable_name'];
					$this_current = $a1['setting_option_1'];
					$this_default = $a1['setting_option_1'];
					//We have a pValue and its default setting. Get the group's setting, then the individual setting
					$q4=$con->query("SELECT * FROM provisioner_global_settings WHERE device_type=".$device_type." AND device_group=0 AND setting_variable_name='".$this_pValue."'");
					if ($q4 && $q4->rowCount()>0)
					{
						//There is the ANY GROUP setting!
						$a4=$q4->fetch();
						$this_current=urldecode($a4['setting_option_1']);
					}
					//this_pValue stores P-VALUE, and $this_current stores SETTING VALUE
					if ($this_current!=$this_default)
					{
						return $this_current;
					}
				}
				else
				{
					return "DEFAULT_NOEXIST";
				}
			}
			else
			{
				return "CONN_FAILED";	
			}
		}
	}
?>
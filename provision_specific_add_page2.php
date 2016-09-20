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
?>
<!DOCTYPE html>
<html lang="en">
  <head>
	<script>
		function makeButtonBlink(val) {
		    document.getElementById("submit_panel_"+val).className = "button-custom";
		}
		function stopButtonBlink(val) {
		    document.getElementById("submit_panel_"+val).className = "";
		}
	</script>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="keywords" content="" />
  <title><?php echo $provision_soft_title; ?></title>

  <!-- ========== CSS Files ========== -->
  <link href="css/root.css" rel="stylesheet">

  </head>
  <body>
  <!-- Start Page Loading
  <div class="loading"><img src="img/loading.gif" alt="loading-img"></div>
  <!-- End Page Loading -->

  <!-- START TOP -->
  <div id="top" class="clearfix">

    <!-- Start App Logo -->
    <div class="applogo">
      <a href="index.html" class="logo"><?php echo $provision_soft_logo; ?></a>
    </div>
    <!-- End App Logo -->

    <!-- Start Sidebar Show Hide Button -->
    <a href="#" class="sidebar-open-button"><i class="fa fa-bars"></i></a>
    <a href="#" class="sidebar-open-button-mobile"><i class="fa fa-bars"></i></a>
    <!-- End Sidebar Show Hide Button -->

    <!-- Start Sidepanel Show-Hide Button -->
    <!-- End Sidepanel Show-Hide Button -->

  </div>
  <!-- END TOP -->

<!-- START SIDEBAR -->
<div class="sidebar clearfix">

<ul class="sidebar-panel nav">
	<li class="sidetitle">NAVIGATION</li>
	<?php $page=5; include_once("provision_system_navi.php"); ?>
</ul>

</div>
<!-- END SIDEBAR -->

<!-- START CONTENT -->
<div class="content">
	
	<!-- Start Page Header -->
	<div class="page-header">
		<h1 class="title"><a href="provision_specific.php">Individual Settings</a> > Manage</h1>
		<ol class="breadcrumb">
			<li class="active">Manage settings on an individual level.</li>
		</ol>
	
	
	</div>
	<!-- End Page Header -->
	<?php
		$this_mac = $_GET['mac_address'];
		$chosen_model = $_GET['type'];
		//$chosen_group = $_GET['group'];
		$chosen_cat = $_GET['cat'];
		//Check if exists
		$con = connect_mysql();
		if ($con)
		{
			$con->query("USE pvx_provisioner");
			//if ($chosen_group==0) {$chosen_group_soft="Any Group";} else {$chosen_group_soft="Group ".$chosen_group;}
			echo '<div class="container-widget">';
			echo '<div class="row">
				<div class="col-md-12">
					<div class="panel panel-default">
						<div class="panel-heading"><b>'.mac_to_softname($this_mac).'</b><br><br><a href="provision_specific_add.php?mac_address='.$this_mac.'"><-- Back to Sections</a></div>
					</div>
				</div>
			</div>';
				//We have our section (category) titles
				$q3=$con->query("SELECT * FROM provisioner_device_defaults WHERE device_type=".$chosen_model." AND category_name='".urldecode($chosen_cat)."' ORDER BY slotID");
				echo '<div class="row">
						<div class="col-md-12">
							<div class="panel panel-default">
								<div class="panel-heading">'.urldecode($chosen_cat).'</div>
								<div class="panel-body table-responsive">';
				while($a3=$q3->fetch())
				{
					//<a onclick="swal(\'Inheritence Report\',\'This button will tell you inheritence.\');"><i class="fa fa-level-up"></i></a>
					//We have our individual settings. Parse the option first!
					//Left Side:
					echo '<div class="col-md-6"><a onclick="swal(\''.$a3['setting_name'].'\',\''.$a3['setting_description'].'\');">'.$a3['setting_name'].'</a> <small>('.$a3['setting_variable_name'].')</small></div>';
					//Right Side:
					echo '<form action="provision_specific_submit_panel.php?type='.$chosen_model.'&mac_address='.$this_mac.'" method="POST" target="feedback_panel_1">';
					if ($a3['setting_variable_type']==1) //Dropdown
					{
						$inherit_string="";
						//GET DEFAULT
						//$qD=$con->query("SELECT * FROM provisioner_device_defaults WHERE device_type=".$chosen_model." AND setting_variable_name='".$a3['setting_variable_name']."'");
						//if ($qD && $qD->rowCount()) {$aD=$qD->fetch(); $defaultValue=$aD['setting_option_1'];} else {$defaultValue="";}
						//GET OUR ENTRY
						$qE=$con->query("SELECT * FROM provisioner_specific_settings WHERE mac_address='".$this_mac."' AND setting_variable_name='".$a3['setting_variable_name']."'");
						if ($qE && $qE->rowCount()>0) {$aE=$qE->fetch(); $myValue=$aE['setting_option_1'];} else {$myValue="";}
						if ($myValue==="") {$myValue=$a3['setting_option_1'];}
						//SELECT
						//Calculate inheritence
						
						$q5 = $con->query("SELECT * FROM provisioner_global_settings WHERE device_type=".$chosen_model." AND device_group=".mac_to_group($this_mac)." AND setting_variable_name='".$a3['setting_variable_name']."'");
						if ($q5 && $q5->rowCount()>0)
						{
							$a5=$q5->fetch();
							$inherit_string='<a onclick="swal(\'Inheritance Report\',\'Setting inherited from: \r\n'.device_type_to_name($chosen_model).' > Group '.$this_device_group.' > '.$a3['setting_name'].'\');"><i class="fa fa-level-up"></i></a>'; //Inhereted by THE GROUP
						}
						else
						{
							//Check the ALL GROUPS directive
							//Check the group
							$q6 = $con->query("SELECT * FROM provisioner_global_settings WHERE device_type=".$chosen_model." AND device_group=0 AND setting_variable_name='".$a3['setting_variable_name']."'");
							if ($q6 && $q6->rowCount()>0)
							{
								$a6=$q6->fetch();
								$inherit_string='<a onclick="swal(\'Inheritance Report\',\'Setting inherited from: \r\n'.device_type_to_name($chosen_model).' > All Groups > '.$a3['setting_name'].'\');"><i class="fa fa-level-up"></i></a>'; //Inherited by ALL GROUPS
							}
						}
						
						
						echo 	'<div class="col-md-6">
									<select name="'.$a3['setting_variable_name'].'" onchange="makeButtonBlink(1);">';
									for($i=1;$i<=20;$i+=1)
									{
										$this_option=$a3['setting_option_'.$i];
										$this_option_name=$a3['setting_option_'.$i.'_name'];
										if ($this_option_name!="")
										{
											if ($myValue==$this_option) {echo '<option value="'.$this_option.'" selected>'.$this_option_name.'</option>';} else {echo '<option value="'.$this_option.'">'.$this_option_name.'</option>';}
										}
									}
									echo '</select> '.$inherit_string.'
								</div>';
								
					}
					elseif ($a3['setting_variable_type']==2) //Text
					{
						$inherit_string="";
						//GET DEFAULT
						//$qD=$con->query("SELECT * FROM provisioner_device_defaults WHERE device_type=".$chosen_model." AND setting_variable_name='".$a3['setting_variable_name']."'");
						//if ($qD && $qD->rowCount()) {$aD=$qD->fetch(); $defaultValue=$aD['setting_option_1'];} else {$defaultValue="";}
						//GET OUR ENTRY
						$qE=$con->query("SELECT * FROM provisioner_specific_settings WHERE mac_address='".$this_mac."' AND setting_variable_name='".$a3['setting_variable_name']."'");
						if ($qE && $qE->rowCount()>0) {$aE=$qE->fetch(); $myValue=$aE['setting_option_1'];} else {$myValue="";}
						if ($myValue==="") {$myValue=$a3['setting_option_1'];}
						//FREETYPE
						
						//Calculate our inheritence
						$q5 = $con->query("SELECT * FROM provisioner_global_settings WHERE device_type=".$chosen_model." AND device_group=".mac_to_group($this_mac)." AND setting_variable_name='".$a3['setting_variable_name']."'");
						if ($q5 && $q5->rowCount()>0)
						{
							$a5=$q5->fetch();
							$inherit_string='<a onclick="swal(\'Inheritance Report\',\'Setting inherited from: \r\n'.device_type_to_name($chosen_model).' > Group '.$this_device_group.' > '.$a3['setting_name'].'\');"><i class="fa fa-level-up"></i></a>'; //Inhereted by THE GROUP
						}
						else
						{
							//Check the ALL GROUPS directive
							//Check the group
							$q6 = $con->query("SELECT * FROM provisioner_global_settings WHERE device_type=".$chosen_model." AND device_group=0 AND setting_variable_name='".$a3['setting_variable_name']."'");
							if ($q6 && $q6->rowCount()>0)
							{
								$a6=$q6->fetch();
								$inherit_string='<a onclick="swal(\'Inheritance Report\',\'Setting inherited from: \r\n'.device_type_to_name($chosen_model).' > All Groups > '.$a3['setting_name'].'\');"><i class="fa fa-level-up"></i></a>'; //Inherited by ALL GROUPS
							}
						}
						
						//Find inherited value
						echo 	'<div class="col-md-6">
									<input name="'.$a3['setting_variable_name'].'" value="'.str_replace("!PLUS!", "+", urldecode($myValue)).'" onkeyup="makeButtonBlink(1);" placeholder="'.inherit_specific($chosen_model,$this_mac,$a3['setting_variable_name']).'"> '.$inherit_string.'
								</div>';
					}
					else
					{
						echo 'Unrecognized Variable Type';	
					}
					echo '<br><hr>';
				}
				echo '<input type="submit" id="submit_panel_1" value="Save This Panel" style="float:right;" onclick="stopButtonBlink(1);"></form><iframe id="feedback_panel_1" style="border:none; height:40px;"></iframe></div></div></div></div>';
		}
			echo '</div>';
	?>
	
	<!-- //////////////////////////////////////////////////////////////////////////// --> 
	<!-- START CONTAINER
	<div class="container-widget">
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">Model/Group Selection</div>
					<div class="panel-body table-responsive">

					</div>
				</div>
			</div>
		</div>
		<BR><BR><BR>
	</div>
	<!-- END CONTAINER -->
	<!-- //////////////////////////////////////////////////////////////////////////// --> 
	
	<!-- Start Footer -->
	<?php include_once("system_footer.php"); ?>
	<!-- End Footer -->
</div>
<!-- End Content -->

<!-- ================================================
jQuery Library
================================================ -->
<script type="text/javascript" src="js/jquery.min.js"></script>

<!-- ================================================
Bootstrap Core JavaScript File
================================================ -->
<script src="js/bootstrap/bootstrap.min.js"></script>

<!-- ================================================
Plugin.js - Some Specific JS codes for Plugin Settings
================================================ -->
<script type="text/javascript" src="js/plugins.js"></script>

<!-- ================================================
Bootstrap Select
================================================ -->
<script type="text/javascript" src="js/bootstrap-select/bootstrap-select.js"></script>

<!-- ================================================
Bootstrap Toggle
================================================ -->
<script type="text/javascript" src="js/bootstrap-toggle/bootstrap-toggle.min.js"></script>

<!-- ================================================
Bootstrap WYSIHTML5
================================================ -->
<!-- main file -->
<script type="text/javascript" src="js/bootstrap-wysihtml5/wysihtml5-0.3.0.min.js"></script>
<!-- bootstrap file -->
<script type="text/javascript" src="js/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>



<!-- ================================================
Sweet Alert
================================================ -->
<script src="js/sweet-alert/sweet-alert.min.js"></script>

<!-- ================================================
Kode Alert
================================================ -->
<script src="js/kode-alert/main.js"></script>

<!-- ================================================
Gmaps
================================================ -->
<!-- google maps api
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<!-- main file
<script src="js/gmaps/gmaps.js"></script>
<!-- demo codes
<script src="js/gmaps/gmaps-plugin.js"></script>

<!-- ================================================
jQuery UI
================================================ -->
<script type="text/javascript" src="js/jquery-ui/jquery-ui.min.js"></script>


<!-- ================================================
Data Tables
================================================ -->
<script src="js/datatables/datatables.min.js"></script>
<script>
$(document).ready(function() {
    $('#example0').DataTable();
} );
</script>

</body>
</html>
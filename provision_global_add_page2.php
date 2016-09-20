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
	<?php $page=4; include_once("provision_system_navi.php"); ?>
</ul>

</div>
<!-- END SIDEBAR -->

<!-- START CONTENT -->
<div class="content">
	
	<!-- Start Page Header -->
	<div class="page-header">
		<h1 class="title"><a href="provision_global.php">Global Settings</a> > Manage</h1>
		<ol class="breadcrumb">
			<li class="active">Manage global settings for models.</li>
		</ol>
	
	
	</div>
	<!-- End Page Header -->
	<?php
		if (isset($_POST['model']) && $_POST['model']!="") {$chosen_model = $_POST['model'];}
		if (isset($_POST['group']) && $_POST['group']!="") {$chosen_group = $_POST['group'];}
		if (isset($_GET['type']) && $_GET['type']!="") {$chosen_model = $_GET['type'];}
		if (isset($_GET['group']) && $_GET['group']!="") {$chosen_group = $_GET['group'];}
		//Check if exists
		$con = connect_mysql();
		if ($con)
		{
			$con->query("USE pvx_provisioner");
			$q1=$con->query("SELECT * FROM provisioner_global_settings WHERE device_type=".$chosen_model." AND device_group=".$chosen_group);
			if (false)
			{
				echo '<div class="container-widget">
						<div class="row">
							<div class="col-md-12">
								<div class="panel panel-default">
									<div class="panel-heading">ERROR</div>
									<div class="panel-body table-responsive">
										A configuration already exists for this model and group. Please <a href="provision_global.php">edit the existing configuration.</a>
									</div>
								</div>
							</div>
						</div>
						<BR><BR><BR>
					</div>';
			}
			else
			{
				if ($chosen_group==0) {$chosen_group_soft="Any Group";} else {$chosen_group_soft="Group ".$chosen_group;}
				echo '<div class="container-widget">';
				echo '<div class="row">
					<div class="col-md-12">
						<div class="panel panel-default">
							<div class="panel-heading"><b>'.device_type_to_name($chosen_model).', '.$chosen_group_soft.'</b></div>
							Highlight Legend:<br>
							<small><u><font color=blue>Changed Setting</font></u></small> (This is a setting that YOU changed, not default)<br>
							<small><u><font color=gray>Inherited Setting</font></u></small> (This is a setting inherited by the group/globals)<br>
							<small><u>Normal Setting</u></small> (Unchanged, Default)
						</div>
					</div>
				</div>';
				//Time to assemble the entire page. this should be interesting...
				$q2 = $con->query("SELECT * FROM provisioner_device_defaults WHERE device_type=".$chosen_model." GROUP BY category_name ORDER BY slotID");
				if ($q2 && $q2->rowCount()>0)
				{
					while($a2=$q2->fetch())
					{
						//We have our section (category) titles
						$q3=$con->query("SELECT * FROM provisioner_device_defaults WHERE device_type=".$chosen_model." AND category_name='".$a2['category_name']."' ORDER BY slotID");
						echo '<div class="row">
								<div class="col-md-12">
									<div class="panel panel-default">
										<div class="panel-heading"><a href="provision_global_add_page3.php?type='.$chosen_model.'&group='.$chosen_group.'&cat='.urlencode($a2['category_name']).'">['.$a2['category_name'].']</a></div>
										<div class="panel-body table-responsive">';
										while($a3=$q3->fetch())
										{
											//Get variable-set stat - MODEL/GROUP SPECIFIC
											//echo $chosen_group.'G '.$chosen_model.'M';
											$q4 = $con->query("SELECT * FROM provisioner_global_settings WHERE device_group=".$chosen_group." AND device_type=".$chosen_model." AND setting_variable_name='".$a3['setting_variable_name']."'");
											if ($q4 && $q4->rowCount()>0)
											{
												//$a4=$q4->fetch();
												$this_set_prefix = "<font color=blue>";
												$this_set_suffix = "</font>";
											}
											else
											{
												//Not set here, maybe an ALL GROUPS global?
												$q4 = $con->query("SELECT * FROM provisioner_global_settings WHERE device_group=0 AND device_type=".$chosen_model." AND setting_variable_name='".$a3['setting_variable_name']."'");
												if ($q4 && $q4->rowCount()>0)
												{
													//$a4=$q4->fetch();
													$this_set_prefix = "<font color=gray>";
													$this_set_suffix = "</font>";
												}
												else
												{
													$this_set_prefix = "";
													$this_set_suffix = "";
												}
											}
											echo '<div class="col-md-2"><a onclick="swal(\''.$a3['setting_name'].'\',\''.$a3['setting_description'].'\');"><small><u>'.$this_set_prefix.$a3['setting_name'].$this_set_suffix.'</u></small></a></div>';
										}
						echo '</div></div></div></div>';
					}
				}
				else
				{
					echo '<div class="row">
					<div class="col-md-12">
						<div class="panel panel-default">
							<div class="panel-heading">ERROR</div>
							<div class="panel-body table-responsive">
										Unable to load device defaults for this model. Is the signature installed?
									</div>
						</div>
					</div>
				</div>';	
				}
				echo '</div>';
			}
		}
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
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
	<?php $page=1; include_once("provision_system_navi.php"); ?>
</ul>

</div>
<!-- END SIDEBAR -->

<!-- START CONTENT -->
<div class="content">
	
	<!-- Start Page Header -->
	<div class="page-header">
		<h1 class="title">Dashboard</h1>
		<ol class="breadcrumb">
			<li class="active">Welcome to the Dashboard.</li>
		</ol>
	
	
	</div>
	<!-- End Page Header -->
	
	
	<!-- //////////////////////////////////////////////////////////////////////////// --> 
	<!-- START CONTAINER -->
	<div class="container-widget">
		<div class="row">
			<div class="col-md-6 col-lg-6">
				<div class="panel panel-default">
					<div class="panel-heading">Provisioning Information</div>
					<div class="panel-body">
						Local Path: <b><?php echo $provision_path_local; ?></b><br>
						<?php if (!is_writable($provision_path_local)) {echo '<font color=red>ERROR: Local path not writable! Please run "chmod 777 '.$provision_path_local.'" from the command line.</font><br>';} ?>
						Remote Path: <b><?php echo $provision_path_remote; ?></b><br><br>
						<a href="#" data-toggle="modal" data-target="#myModal">Explanations</a>
						<!-- Modal -->
						<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<h4 class="modal-title">Provisioning Information</h4>
									</div>
									<div class="modal-body">
										The <b>Local Provisioning Path</b> is the local directory address where the configuration XML files are stored. This software manages these files, so if you make changes to them, they will be overwritten the next time you do a config generation.<Br><br>The <b>Remote Provisioning Path</b> is what you set your phones to in their "Config Server" address settings. It tells the phone the web address of the config files this software manages.
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
									</div>
								</div>
							</div>
						</div> <!-- End modal-->
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-6">
				<div class="panel panel-default">
					<div class="panel-heading">Provisioning Status</div>
					<div class="panel-body">
						<b><?php echo phone_count_total(); ?></b> known phones/devices.<br>
						<b><?php echo phone_count_np(); ?></b> need to be provisioned.<br><br>
						<a href="#" data-toggle="modal" data-target="#myModal2">Explanations</a>
						<!-- Modal -->
						<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<h4 class="modal-title">Provisioning Status</h4>
									</div>
									<div class="modal-body">
										<b>Known Phones</b> are phones (and devices, like gateways) this software is aware of. The only way to make this provisioning software aware of new phones is by adding their respective MAC addresses in the <a href="provision_phones.php">Manage Phones</a> section.<br><br>Whenever you make changes to phone configurations, they are marked to be provisioned. When making changes to the <a href="provision_global.php">Global Settings</a>, ALL phones are marked for provisioning. The count of phones that need to be provisioned is displayed.
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-white" data-dismiss="modal">Close</button>
									</div>
								</div>
							</div>
						</div> <!-- End modal-->
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6 col-lg-6">
				<div class="panel panel-default">
					<div class="panel-heading">System Information</div>
					<div class="panel-body">
						Version: <b><?php echo $provisioner_version; ?></b> <a href="provision_changelog.php">Changelog</a><br>
						Updates:
						<?php
							//Check for UPDATES! Yay! New features!
							$new_version = file_get_contents("http://provisioning.primevox.net/updates/current_version.php");
							if ($new_version!= $provisioner_version)
							{
								echo '<b><font color=green>Yes!</font></b> <a href="system_update.php">Update Now</a>';
							}
							else
							{
								echo "<b>None</b> (".$new_version." is the newest version)";
							}
						?>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-6">
				<div class="panel panel-default">
					<div class="panel-heading">System Status</div>
					<div class="panel-body">
						Database Connection: <b><?php if ($con = connect_mysql()) {echo 'OK';} else {echo 'Error!';}?></b><br>
						Provisioning engine: <b>Online</b>
					</div>
				</div>
			</div>
		</div>
		<BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR>
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
Summernote
================================================ -->
<script type="text/javascript" src="js/summernote/summernote.min.js"></script>

<!-- ================================================
Flot Chart
================================================ -->
<!-- main file -->
<script type="text/javascript" src="js/flot-chart/flot-chart.js"></script>
<!-- time.js -->
<script type="text/javascript" src="js/flot-chart/flot-chart-time.js"></script>
<!-- stack.js -->
<script type="text/javascript" src="js/flot-chart/flot-chart-stack.js"></script>
<!-- pie.js -->
<script type="text/javascript" src="js/flot-chart/flot-chart-pie.js"></script>
<!-- demo codes -->
<script type="text/javascript" src="js/flot-chart/flot-chart-plugin.js"></script>

<!-- ================================================
Chartist
================================================ -->
<!-- main file -->
<script type="text/javascript" src="js/chartist/chartist.js"></script>
<!-- demo codes -->
<script type="text/javascript" src="js/chartist/chartist-plugin.js"></script>

<!-- ================================================
Easy Pie Chart
================================================ -->
<!-- main file -->
<script type="text/javascript" src="js/easypiechart/easypiechart.js"></script>
<!-- demo codes -->
<script type="text/javascript" src="js/easypiechart/easypiechart-plugin.js"></script>

<!-- ================================================
Sparkline
================================================ -->
<!-- main file -->
<script type="text/javascript" src="js/sparkline/sparkline.js"></script>
<!-- demo codes -->
<script type="text/javascript" src="js/sparkline/sparkline-plugin.js"></script>

<!-- ================================================
Rickshaw
================================================ -->
<!-- d3 -->
<script src="js/rickshaw/d3.v3.js"></script>
<!-- main file -->
<script src="js/rickshaw/rickshaw.js"></script>
<!-- demo codes -->
<script src="js/rickshaw/rickshaw-plugin.js"></script>

<!-- ================================================
Data Tables
================================================ -->
<script src="js/datatables/datatables.min.js"></script>

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
Moment.js
================================================ -->
<script type="text/javascript" src="js/moment/moment.min.js"></script>

<!-- ================================================
Full Calendar
================================================ -->
<script type="text/javascript" src="js/full-calendar/fullcalendar.js"></script>

<!-- ================================================
Bootstrap Date Range Picker
================================================ -->
<script type="text/javascript" src="js/date-range-picker/daterangepicker.js"></script>

</body>
</html>
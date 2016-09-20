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
	<?php $page=2; include_once("provision_system_navi.php"); ?>
</ul>

</div>
<!-- END SIDEBAR -->

<!-- START CONTENT -->
<div class="content">
	
	<!-- Start Page Header -->
	<div class="page-header">
		<h1 class="title">Getting Started</h1>
		<ol class="breadcrumb">
			<li class="active">Learn how to use this tool.</li>
		</ol>
	
	
	</div>
	<!-- End Page Header -->
	
	
	<!-- //////////////////////////////////////////////////////////////////////////// --> 
	<!-- START CONTAINER -->
	<div class="container-widget">
		<div class="row">
			<div class="col-md-12 col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Terminology</div>
					<div class="panel-body">
						<b>Local Path</b> - The local path setting tells this software where, on this webserver, to place XML configuration files for devices.<br>
						<b>Remote Path</b> - The remote path is the setting that tells the devices/endpoints where, on this server, to find XML configuration files.<br><br>
						<b>Devices</b> - Phones, ATAs, gateways, etc. that this provisioner will generate XML configs for.<br>
						<b>Groups</b> - Groups of devices. These groups can have their own names, and have their own global configurations.<br>
						<b>Global</b> - Settings that apply across all, or groups of, devices.<br>
						<b>Individual</b> - Settings specific to a single device, that override globals.<br><br>
						<b>Deploy</b> - Engages the confirmation process to generate XML config files.
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Getting Started</div>
					<div class="panel-body">
						<b>Welcome!</b> Please read the <b>Terminology</b> section above, and familiarize yourself with the terminology of this software.<br><Br>
						<b>Step 1: Adding Devices</b><br>
						To add phones and devices to this provisioning software, add them into the <a href="provision_phones.php">Manage Devices</a> section. MAC address is required, and you can assign a Soft Name to the device for easy recognition.<br><br>
						<b>Step 2: Defining Group Policies</b><br>
						Settings that are the same on all devices, or groups of devices, can be defined in the <a href="provision_global.php">Global Settings</a> area. Remember, you must already define <a href="provision_groups.php">Groups</a> in order to allocate settings to specific groups of devices. If you don't need grouping, you can simply create a Global Config for all models. Do keep in mind, because different model devices have different settings, Global Configs are not cross-compatible. You must assign globals to each model type you have in production.<br><br>
						<b>Step 3: Defining Individual Settings</b><br>
						Obviously, you will have settings for each individual device that are not group related, like extension numbers, BLFs, etc. These can be set per-device in <a href="provision_specific.php">Individual Settings</a>.<Br><Br>
						<b>Step 4: DEPLOY!</b><br>
						After evaluating all your settings, click DEPLOY to generate the XML files. It will prompt for confirmation, then summarize the deployment after generation is complete.
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12 col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Configuration Inheritance</div>
					<div class="panel-body">
						This chart shows how settings are inherited from groups and globals, and shows you how settings on endpoints are overridden.<br><br>
						Global Settings<br>
						--> Group Settings {Overrides Global settings}<br>
						--> --> Individual Settings {Overrides Group and Global settings}<br><br>
						<b>For example,</b> assume the following:<br><br> - <i>Global Setting for GXP2130: Account 1 Name: John Deere</i><br><br>This means, for ALL GXP2130s, John Deere will be the name on Account 1. But, let's say this:<br><br>
						 - <i>Group 1 Setting for GXP2130: Account 1 Name: Jane Doe</i><br>
						 - <i>Group 2 Setting for GXP2130: Account 1 Name: Johnny Appleseed</i><br><Br>
						 For all GXP2130s in Group 1, their Account 1 Name setting is overridden by the Group Setting, and will be "Jane Doe" for all 2130s assigned to Group 1.<br>The same goes for Group 2: Johnny Appleseed, the Group Setting, takes priority over the Global.<br>So, any phones NOT in groups 1 or 2 get the global setting of "John Deere".<br><br>
						 Individual settings override anything the Groups and Globals could possibly set.
					</div>
				</div>
				<a href="provision_push.php"><small>Push Package</small></a>
			</div>
		</div>
		<BR><BR><BR><BR>
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
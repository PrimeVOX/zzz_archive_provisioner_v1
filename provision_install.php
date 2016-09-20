<?php
	if (!is_writable(getcwd()))
	{
		header("Location: provision_nonwritable.php");	
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
  <title>Intranet Installer</title>

  <!-- ========== CSS Files ========== -->
  <link href="css/root.css" rel="stylesheet">

  </head>
  <body>
  <!-- Start Page Loading -->
  <div class="loading"><img src="img/loading.gif" alt="loading-img"></div>
  <!-- End Page Loading -->

  <!-- START TOP -->
  <div id="top" class="clearfix">

    <!-- Start App Logo -->
    <div class="applogo">
      <a href="index.html" class="logo">Installer</a>
    </div>
    <!-- End App Logo -->

    <!-- Start Sidebar Show Hide Button -->
    <a href="#" class="sidebar-open-button"><i class="fa fa-bars"></i></a>
    <a href="#" class="sidebar-open-button-mobile"><i class="fa fa-bars"></i></a>
    <!-- End Sidebar Show Hide Button -->

  </div>
  <!-- END TOP -->

<!-- START SIDEBAR -->
<div class="sidebar clearfix">
<center><br>DISCLAIMER</center><br><br>PrimeVOX Communications, LLC and its owner, Luke Escudé, are not responsible for any issues that may arise from the usage of this software.<br><br>Support and maintenance of this software is not guaranteed, however PrimeVOX will do its best to release updates periodically for bugs and new devices.<br><Br>By submitting the installation form, you agree to the above terms.<br><br><Br><Br><center>I like donations, because:<br> Donations = coffee.<Br>Coffee = cool software.<br>Cool software = money.<br>Money = happy girlfriend.<br><a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=7L4369TF8SBKA" target="_NEW">Donate Now!</a></center>
</div>
<!-- END SIDEBAR -->

<!-- START CONTENT -->
<div class="content">
	
	<!-- Start Page Header -->
	<div class="page-header">
		<h1 class="title">Installation</h1>
		<ol class="breadcrumb">
			<li class="active">Please provide the details below. They can be changed later in the Administration section.</li>
		</ol>
	
	
	</div>
	<!-- End Page Header -->
	
	
	<!-- //////////////////////////////////////////////////////////////////////////// --> 
	<!-- START CONTAINER -->
	<div class="container-widget">
		<form action="provision_install_submit.php" method="POST">
		<div class="row">
			<div class="col-md-12 col-lg-12">
				<div class="panel panel-default">
					<div class="panel-title">
						Database
					</div>
					<div class="panel-heading">MySQL Database</div><br>
					<div class="panel-body">
						<div class="form-group">
							<label for="input002" class="col-sm-2 control-label form-label">Address</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="db_address" value="localhost">
							</div>
						</div><br>
						<div class="form-group">
							<label for="input002" class="col-sm-2 control-label form-label">Port</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="db_port" value="3389">
							</div>
						</div><br>
						<div class="form-group">
							<label for="input002" class="col-sm-2 control-label form-label">Username</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="db_username" value="root">
							</div>
						</div><br>
						<div class="form-group">
							<label for="input002" class="col-sm-2 control-label form-label">Password</label>
							<div class="col-sm-10">
								<input type="password" class="form-control" name="db_password" value="password">
							</div>
						</div>
						<br><br>NOTE: A provisioning database will be automatically generated and managed.
					</div>
				</div>
			</div>
		</div>
		<!--
		<div class="row">
			<div class="col-md-6 col-lg-12">
				<div class="panel panel-default">
					<div class="panel-title">
						Software
					</div>
					<div class="panel-heading">White Label Settings</div>
					<div class="panel-body">
						<div class="form-group">
							<label for="input002" class="col-sm-2 control-label form-label">Software Title</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="soft_title" value="DLX Technologies Provisioner">
							</div>
						</div><br>
						<div class="form-group">
							<label for="input002" class="col-sm-2 control-label form-label">Logo Text</label>
							<div class="col-sm-10">
								<input type="text" class="form-control" name="soft_logo" value="Provisioner">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>-->
		<div class="row">
			<div class="col-md-12 col-lg-12">
				<div class="panel panel-default">
					<div class="panel-title">
						Provisioning
					</div>
					<div class="panel-heading">Provisioning Settings</div>
					<div class="panel-body">
						<div class="form-group">
							<label for="input002" class="col-sm-3 control-label form-label">Local Provisioning Path</label>
							<div class="col-sm-9">
								<?php echo '<input type="text" class="form-control" name="provision_local" value="'.getcwd().'">'; ?>
							</div>
						</div><br>
						<div class="form-group">
							<label for="input002" class="col-sm-3 control-label form-label">Remote Provisioning Path</label>
							<div class="col-sm-9">
								<?php echo '<input type="text" class="form-control" name="provision_remote" value="http://'.$_SERVER["SERVER_ADDR"].'/">'; ?>
							</div>
						</div>
						<br><br>NOTE: Both of these paths must point to the same folder on the provisioning server (this one).
					</div>
				</div>
			</div>
		</div>
		<br><br>
		<input type="Submit" Value="Submit - I have read the terms and conditions to the left."><br><br>
		</form>
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
<!-- google maps api -->
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<!-- main file -->
<script src="js/gmaps/gmaps.js"></script>
<!-- demo codes -->
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
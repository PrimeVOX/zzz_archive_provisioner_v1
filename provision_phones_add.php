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
	<?php $page=3; include_once("provision_system_navi.php"); ?>
</ul>

</div>
<!-- END SIDEBAR -->

<!-- START CONTENT -->
<div class="content">
	
	<!-- Start Page Header -->
	<div class="page-header">
		<h1 class="title"><a href="provision_phones.php">Phone Management</a> > Add Phone</h1>
		<ol class="breadcrumb">
			<li class="active">Manage known phones and soft names.</li>
		</ol>
	
	
	</div>
	<!-- End Page Header -->
	
	
	<!-- //////////////////////////////////////////////////////////////////////////// --> 
	<!-- START CONTAINER -->
	<div class="container-widget">
		<div class="row">
			<div class="col-md-12 col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">Add Phone</div>
					<div class="panel-body">
						<form action="provision_phones_add_submit.php" method="POST">
							<div class="form-group">
								<label for="input002" class="col-sm-2 control-label form-label">MAC Address</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="mac_address" placeholder="xx:xx:xx:xx:xx:xx / xxxxxxxxxxxx / Xx:xX:XX:xx:xXxX">
								</div>
							</div><br><br>
							<div class="form-group">
								<label for="input002" class="col-sm-2 control-label form-label">Soft Name</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="soft_name" placeholder="8006-Receptionist">
								</div>
							</div><br><br>
							<div class="form-group">
								<label for="input002" class="col-sm-2 control-label form-label">Model</label>
								<div class="col-sm-10">
									<select name="model" class="form-control">
										<?php
											$con=connect_mysql();
											if ($con)
											{
												$con->query("USE pvx_provisioner");
												$q1=$con->query("SELECT * FROM provisioner_device_definitions ORDER BY device_manuf,device_model");
												if ($q1 && $q1->rowCount()>0)
												{
													while($a1=$q1->fetch())
													{
														echo '<option value="'.$a1['device_type'].'">'.$a1['device_manuf'].' '.$a1['device_model'].'</option>';
													}	
												}	
											}	
										?>
									</select>
								</div>
							</div><br><br>
							<div class="form-group">
								<label for="input002" class="col-sm-2 control-label form-label">Group Number</label>
								<div class="col-sm-10">
									<?php
										echo '<select name="group">';
										echo '<option value="0">No Group</option>';
										$q2 = $con->query("SELECT * FROM provisioner_group_definitions");
										if ($q2 && $q2->rowCount()>0)
										{
											while($a2=$q2->fetch())
											{
												echo '<option value="'.$a2['group_number'].'">'.urldecode($a2['group_name']).' (Group '.$a2['group_number'].')</option>';
											}
										}
										echo '</select>';	
									?>
								</div>
							</div><br><br>
							<br><br><input type="submit" value="Submit">
						</form>
					</div>
				</div>
			</div>
		</div>
		<BR><BR><BR><BR><BR><BR>
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
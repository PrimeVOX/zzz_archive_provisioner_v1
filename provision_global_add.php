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
		<h1 class="title"><a href="provision_global.php">Global Settings</a> > Add</h1>
		<ol class="breadcrumb">
			<li class="active">Manage global settings for models.</li>
		</ol>
	
	
	</div>
	<!-- End Page Header -->
	
	
	<!-- //////////////////////////////////////////////////////////////////////////// --> 
	<!-- START CONTAINER -->
	<div class="container-widget">
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">Model/Group Selection</div>
					<div class="panel-body table-responsive">
						Define the model phone this global configuration applies to, and the group it applies to.<br><br>
						<form action="provision_global_add_page2.php" method="POST">
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
										echo '<option value="0">All Groups</option>';
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
							</div>
							<br><br><input type="submit" value="Submit">
						</form>
						<br><br>
						<a href="#" data-toggle="modal" data-target="#myModal">Explanations</a>
						<!-- Modal -->
						<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<h4 class="modal-title">Global Settings, Model Selection</h4>
									</div>
									<div class="modal-body">
										You are choosing which model phone (i.e. GXP2140) will obtain these <b>global settings</b>.<br><br>If you select <b>All Groups</b> then all phones of that same model (i.e. GXP2140) will obtain these settings. Otherwise, setting a group number will restrict this global config to just that group of phones.<br><br>If you have a global config for all groups, global configs for specific groups will override them. For instance: Your any-group global config sets the background of all GXP2140s to image.jpg. However, your sales department (group 4) wants a different background. All you do is create a global config for Group 4, and it overrides the Any Group config.
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
		<BR><BR><BR>
	</div>
	<!-- END CONTAINER -->
	<!-- //////////////////////////////////////////////////////////////////////////// --> 
	
	<!-- Start Footer -->
	<div class="row footer">
		<div class="col-md-6 text-left">
			Copyright © 2015 <a href="http://www.dlx-tech.com" target="_new">DLX Technologies, LLC</a> All rights reserved.
		</div>
		<div class="col-md-6 text-right">
			Developed by <a href="http://www.dlx-tech.com" target="_new">Luke Escudé</a>
		</div> 
	</div>
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
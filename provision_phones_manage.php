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
		<h1 class="title"><a href="provision_phones.php">Device Management</a> > <?php $mac_address = $_GET['mac_address']; echo mac_to_softname($mac_address); ?></h1>
		<ol class="breadcrumb">
			<li class="active"><?php echo mac_format($mac_address); ?></li>
		</ol>
	
	
	</div>
	<!-- End Page Header -->
	
	
	<!-- //////////////////////////////////////////////////////////////////////////// --> 
	<!-- START CONTAINER -->
	<div class="container-widget">
		<div class="row">
			<div class="col-md-6">
				<div class="panel panel-default">
					<div class="panel-heading">Provisioning Status</div>
					<div class="panel-body">
						<?php
							$con = connect_mysql();
							$con->query("USE pvx_provisioner");
							$q1=$con->query("SELECT * FROM user_devices WHERE mac_address='".$mac_address."'");
							$a1=$q1->fetch();
							$np = boolean_to_string($a1['needs_provisioning']);
							if ($np==="Yes") {$np = "<font color=red>Yes</font>";} else {$np = "<font color=green>No</font>";}
							if ($a1['provision_date_current']!="") {$provision_date_current=date("M j, Y @ H:m",strtotime($a1['provision_date_current']));} else {$provision_date_current="N/A";}
							if ($a1['provision_date_new']!="") {$provision_date_new=date("M j, Y @ H:m",strtotime($a1['provision_date_new']));} else {$provision_date_new="N/A";}
						?>
						Needs Provisioning: <b><?php echo $np; ?></b><Br>
						Current Config: <b><?php echo $provision_date_current; ?></b><br>
						Newest Config: <b><?php echo $provision_date_new; ?></b>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="panel panel-default">
					<div class="panel-heading">Provisioning Override</div>
					<div class="panel-body">
						<?php echo '<a href="provision_phone_mark.php?mac_address='.$mac_address.'"><b>Mark</b> for Provisioning</a><br><br>'; ?>
						<?php echo '<a href="provision_phone_unmark.php?mac_address='.$mac_address.'"><b>Un-Mark</b> for Provisioning'; ?>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading"><?php echo mac_to_softname($mac_address)." (".mac_format($mac_address).")"; echo ' <a href="provision_phones_delete.php?mac_address='.$mac_address.'"> [Delete]</a>'; ?></div>
					<div class="panel-body">
						<?php echo '<form action="provision_phones_edit_submit.php?mac_address='.$mac_address.'" method="POST">'; ?>
							<div class="form-group">
								<label for="input002" class="col-sm-2 control-label form-label">MAC Address</label>
								<div class="col-sm-10">
									<?php echo '<input type="text" class="form-control" name="mac_address" placeholder="xx:xx:xx:xx:xx:xx / xxxxxxxxxxxx / Xx:xX:XX:xx:xXxX" value="'.strtoupper($mac_address).'">'; ?>
								</div>
							</div><br><br>
							<div class="form-group">
								<label for="input002" class="col-sm-2 control-label form-label">Soft Name</label>
								<div class="col-sm-10">
									<?php echo '<input type="text" class="form-control" name="soft_name" placeholder="8006-Receptionist" value="'.mac_to_softname($mac_address).'">'; ?>
								</div>
							</div><br><br>
							<div class="form-group">
								<label for="input002" class="col-sm-2 control-label form-label">Model</label>
								<div class="col-sm-10">
									<select name="model" class="form-control">
										<?php
											$device_type = mac_to_devicetype($mac_address);
											$con=connect_mysql();
											if ($con)
											{
												$con->query("USE pvx_provisioner");
												$q1=$con->query("SELECT * FROM provisioner_device_definitions ORDER BY device_manuf,device_model");
												if ($q1 && $q1->rowCount()>0)
												{
													while($a1=$q1->fetch())
													{
														if ($device_type==$a1['device_type']) {echo '<option value="'.$a1['device_type'].'" selected>'.$a1['device_manuf'].' '.$a1['device_model'].'</option>';} else {echo '<option value="'.$a1['device_type'].'">'.$a1['device_manuf'].' '.$a1['device_model'].'</option>';}
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
										$group=mac_to_group($mac_address);
										echo '<select name="group">';
										if ($group>0) {echo '<option value="0">No Group</option>';} else {echo '<option value="0" selected>No Group</option>';}
										$q2 = $con->query("SELECT * FROM provisioner_group_definitions");
										if ($q2 && $q2->rowCount()>0)
										{
											while($a2=$q2->fetch())
											{
												if ($a2['group_number']==$group) {echo '<option value="'.$a2['group_number'].'" selected>'.urldecode($a2['group_name']).' (Group '.$a2['group_number'].')</option>';} else {echo '<option value="'.$a2['group_number'].'">'.urldecode($a2['group_name']).' (Group '.$a2['group_number'].')</option>';}
											}
										}
										echo '</select>';	
									?>
								</div>
							</div>
							<br><br><input type="submit" value="Submit">
							<br><br>
							Looking to set configuration settings? Go to the <a href="provision_specific.php">Individual Settings</a> page.
						</form>
					</div>
				</div>
			</div>
		</div>
		<BR>
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
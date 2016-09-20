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
		<h1 class="title">Device Management</h1>
		<ol class="breadcrumb">
			<li class="active">Manage known phones/devices and soft names.</li>
		</ol>
	
	
	</div>
	<!-- End Page Header -->
	
	
	<!-- //////////////////////////////////////////////////////////////////////////// --> 
	<!-- START CONTAINER -->
	<div class="container-widget">
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">Known Phones/Devices <a href="provision_phones_add.php">[Add]</a></div>
					<div class="panel-body table-responsive">
						<?php
							$con = connect_mysql();
							if ($con)
							{
								$con->query("USE pvx_provisioner");
								$q1=$con->query("SELECT * FROM user_devices ORDER BY soft_name");
								if ($q1 && $q1->rowCount()>0)
								{
									echo '<table id="example0" class="table display">
							                <thead>
							                    <tr>
							                        <th>Soft Name</th>
							                        <th>MAC Address</th>
							                        <th>Group</th>
							                        <th>Model</th>
							                        <th>Needs Provisioning</th>
							                    </tr>
							                </thead>
							             
							                <tfoot>
							                    <tr>
							                        <th>Soft Name</th>
							                        <th>MAC Address</th>
							                        <th>Group</th>
							                        <th>Model</th>
							                        <th>Needs Provisioning</th>
							                    </tr>
							                </tfoot>
							             
							                <tbody>';
							        while($a1=$q1->fetch())
							        {
								        $np = boolean_to_string($a1['needs_provisioning']);
								        if ($np==="Yes") {$np = "<font color=red>Yes</font>";} else {$np = "<font color=green>No</font>";}
								        $group_number = $a1['device_group'];
								        if ($group_number==0)
								        {
									        $group_name="No Group";
										}
										else
										{
									        $q2 = $con->query("SELECT * FROM provisioner_group_definitions WHERE group_number=".$group_number);
									        if ($q2 && $q2->rowCount()>0)
									        {
												$a2=$q2->fetch();
												$group_name=urldecode($a2['group_name']).' (Group '.$group_number.')';
										    }
										    else
										    {
											    $group_name="Unknown (Group ".$group_number.")";
											}
										}
										echo '<tr><td><a href="provision_phones_manage.php?mac_address='.$a1['mac_address'].'">'.urldecode($a1['soft_name']).'</a></td><td><a href="provision_phones_manage.php?mac_address='.$a1['mac_address'].'">'.mac_format($a1['mac_address']).'</a></td><td>'.$group_name.'</td><td>'.device_type_to_name($a1['device_type']).'</td><td>'.$np.'</td></tr>';

								    }
									echo '</tbody>';
									echo '</table>';
							                
								}
								else
								{
									echo 'No known phones. <a href="provision_phones_add.php">Add one now</a>';	
								}
							}
							else
							{
								echo 'Error connecting to database!';	
							}	
						?>
						<br><br>
						<a href="#" data-toggle="modal" data-target="#myModal">Explanations</a>
						<!-- Modal -->
						<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<h4 class="modal-title">Phones Table</h4>
									</div>
									<div class="modal-body">
										The <b>Known Phones</b> are the only phones the provisioner knows about and are able to be managed. You must add phones to this list in order to manage them.<br><br><b>Group Numbers</b> allow phones to be grouped together for mass provisioning and rebooting. This is to subdivide your phones into easily manageable groups. By default, new phones are set to group 1.<br><br>When you edit a single phone, it is marked as <b>Needs Provisioning</b> because the phone has not yet received the updated configuration changes. When you edit the Global Settings, which apply to all phones (in a group), then all phones (in a group) will be marked for provisioning.
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
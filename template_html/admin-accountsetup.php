<?php

session_start();




$username = $_SESSION['username'];
//$username = $_POST['username'];

$connect = mysqli_connect('localhost', 'root', '') or die('Database could not connect');
$select = mysqli_select_db( $connect, 'jamfms') or die('Database could not select');

$selectname = "SELECT * from jamfms_r_useraccount where username = '$username'";
$nameresult = mysqli_query($connect, $selectname) or die('Bad query: $sql'); 

while ($row = mysqli_fetch_assoc($nameresult) ) {
    $fname = $row['fname'];
    $mname = $row['mname'];
    $lname = $row['lname'];
    $name = $fname .' '. $mname .' '.$lname;

}

?>

<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>Color Admin | Managed Tables - Extension Combination</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<link href="../assets/js/sweetalert/sweetalert.css" type="text/css" rel="stylesheet" media="screen,projection">
	<script src="../assets/js/sweetalert/sweetalert.min.js"></script>
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
	<link href="../assets/plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet" />
	<link href="../assets/plugins/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" />
	<link href="../assets/plugins/font-awesome/5.0/css/fontawesome-all.min.css" rel="stylesheet" />
	<link href="../assets/plugins/animate/animate.min.css" rel="stylesheet" />
	<link href="../assets/css/default/style.min.css" rel="stylesheet" />
	<link href="../assets/css/default/style-responsive.min.css" rel="stylesheet" />
	<link href="../assets/css/default/theme/default.css" rel="stylesheet" id="theme" />
	<!-- ================== END BASE CSS STYLE ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
	<link href="../assets/plugins/DataTables/media/css/dataTables.bootstrap.min.css" rel="stylesheet" />
	<link href="../assets/plugins/DataTables/extensions/Buttons/css/buttons.bootstrap.min.css" rel="stylesheet" />
	<link href="../assets/plugins/DataTables/extensions/Responsive/css/responsive.bootstrap.min.css" rel="stylesheet" />
	<link href="../assets/plugins/DataTables/extensions/AutoFill/css/autoFill.bootstrap.min.css" rel="stylesheet" />
	<link href="../assets/plugins/DataTables/extensions/ColReorder/css/colReorder.bootstrap.min.css" rel="stylesheet" />
	<link href="../assets/plugins/DataTables/extensions/KeyTable/css/keyTable.bootstrap.min.css" rel="stylesheet" />
	<link href="../assets/plugins/DataTables/extensions/RowReorder/css/rowReorder.bootstrap.min.css" rel="stylesheet" />
	<link href="../assets/plugins/DataTables/extensions/Select/css/select.bootstrap.min.css" rel="stylesheet" />
	<link href="../assets/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" />
	<!-- ================== END PAGE LEVEL STYLE ================== -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="../assets/plugins/pace/pace.min.js"></script>
	<!-- ================== END BASE JS ================== -->
</head>
<body data-gr-c-s-loaded="true">
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade show"><span class="spinner"></span></div>
	<!-- end #page-loader -->
	
	<!-- begin #page-container -->
	<div id="page-container" class="fade page-sidebar-fixed page-header-fixed">
		<!-- begin #header -->
		<div id="header" class="header navbar-default">
			<!-- begin navbar-header -->
			<div class="navbar-header">
				<a href="index.html" class="navbar-brand"><span class="navbar-logo"></span> <b>Color</b> Admin</a>
				<button type="button" class="navbar-toggle" data-click="sidebar-toggled">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<!-- end navbar-header -->
			
			<!-- begin header-nav -->
			<ul class="navbar-nav navbar-right">
				<li>
					<form class="navbar-form">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Enter keyword" />
							<button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
						</div>
					</form>
				</li>
				<li class="dropdown">
					<a href="javascript:;" data-toggle="dropdown" class="dropdown-toggle f-s-14">
						<i class="fa fa-bell"></i>
						<span class="label">5</span>
					</a>
					<ul class="dropdown-menu media-list dropdown-menu-right">
						<li class="dropdown-header">NOTIFICATIONS (5)</li>
						<li class="media">
							<a href="javascript:;">
								<div class="media-left">
									<i class="fa fa-bug media-object bg-silver-darker"></i>
								</div>
								<div class="media-body">
									<h6 class="media-heading">Server Error Reports <i class="fa fa-exclamation-circle text-danger"></i></h6>
									<div class="text-muted f-s-11">3 minutes ago</div>
								</div>
							</a>
						</li>
						<li class="media">
							<a href="javascript:;">
								<div class="media-left">
									<img src="../assets/img/user/user-1.jpg" class="media-object" alt="" />
									<i class="fab fa-facebook-messenger text-primary media-object-icon"></i>
								</div>
								<div class="media-body">
									<h6 class="media-heading">John Smith</h6>
									<p>Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
									<div class="text-muted f-s-11">25 minutes ago</div>
								</div>
							</a>
						</li>
						<li class="media">
							<a href="javascript:;">
								<div class="media-left">
									<img src="../assets/img/user/user-2.jpg" class="media-object" alt="" />
									<i class="fab fa-facebook-messenger text-primary media-object-icon"></i>
								</div>
								<div class="media-body">
									<h6 class="media-heading">Olivia</h6>
									<p>Quisque pulvinar tellus sit amet sem scelerisque tincidunt.</p>
									<div class="text-muted f-s-11">35 minutes ago</div>
								</div>
							</a>
						</li>
						<li class="media">
							<a href="javascript:;">
								<div class="media-left">
									<i class="fa fa-plus media-object bg-silver-darker"></i>
								</div>
								<div class="media-body">
									<h6 class="media-heading"> New User Registered</h6>
									<div class="text-muted f-s-11">1 hour ago</div>
								</div>
							</a>
						</li>
						<li class="media">
							<a href="javascript:;">
								<div class="media-left">
									<i class="fa fa-envelope media-object bg-silver-darker"></i>
									<i class="fab fa-google text-warning media-object-icon f-s-14"></i>
								</div>
								<div class="media-body">
									<h6 class="media-heading"> New Email From John</h6>
									<div class="text-muted f-s-11">2 hour ago</div>
								</div>
							</a>
						</li>
						<li class="dropdown-footer text-center">
							<a href="javascript:;">View more</a>
						</li>
					</ul>
				</li>
				<li class="dropdown navbar-user">
					<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
						<img src="../assets/img/user/user-13.jpg" alt="" /> 
						<span class="d-none d-md-inline">Adam Schwartz</span> <b class="caret"></b>
					</a>
					<div class="dropdown-menu dropdown-menu-right">
						<a href="javascript:;" class="dropdown-item">Edit Profile</a>
						<a href="javascript:;" class="dropdown-item"><span class="badge badge-danger pull-right">2</span> Inbox</a>
						<a href="javascript:;" class="dropdown-item">Calendar</a>
						<a href="javascript:;" class="dropdown-item">Setting</a>
						<div class="dropdown-divider"></div>
						<a href="javascript:;" class="dropdown-item">Log Out</a>
					</div>
				</li>
			</ul>
			<!-- end header navigation right -->
		</div>
		<!-- end #header -->
		
		<!-- begin #sidebar -->
		<div id="sidebar" class="sidebar">
			<!-- begin sidebar scrollbar -->
			<div data-scrollbar="true" data-height="100%">

				<!-- begin sidebar user -->
				<ul class="nav">
						<?php include 'INCLUDES/sidebar-name.php'; ?>	
				</ul>
				
				<!-- end sidebar user -->
				<!-- begin sidebar nav -->
				<ul class="nav">
					<li class="nav-header">Navigation</li>
					<li><a href="admin-dashboard.php"><i class="fas fa-chart-bar"></i> <span>Dashboard</span></a></li>
					<li class="active"><a href="admin-accountsetup.php"><i class="fas fa-users"></i> <span>Account Management</span></a></li>
			        <!-- end sidebar minify button -->
				</ul>
				<!-- end sidebar nav -->
			</div>
			<!-- end sidebar scrollbar -->
		</div>
		<div class="sidebar-bg"></div>
		<!-- end #sidebar -->
		
		<!-- begin #content -->
		<div id="content" class="content">
			<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li class="breadcrumb-item"><a href="javascript:;">Home</a></li>
				<li class="breadcrumb-item"><a href="javascript:;">Tables</a></li>
				<li class="breadcrumb-item"><a href="javascript:;">Managed Tables</a></li>
				<li class="breadcrumb-item active">Extension Combination</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">User Account Management</h1>
			<!-- end page-header -->
			
			<!-- begin row -->
			<div class="row">
			    <!-- begin col-2 -->
			    <div class="col-lg-2">
			        <h5>The Account Management does the following features:</h5>
                    <ul class="p-l-25 m-b-15">
                        <li>Create New Account</li>
                        <li>View Account</li>
                        <li>Update Account</li>
                        <li>Filter Table</li>
                        <li>Print Account Report</li>
                        
                    
                    </ul>
			    </div>
			    <!-- end col-2 -->
			    <!-- begin col-10 -->
			    <div class="col-lg-10">
                    <div class="panel panel-inverse">
                        <!-- begin panel-heading -->
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                            </div>
                            <h4 class="panel-title">User Accounts</h4>
                        </div>
                        <!-- end panel-heading -->
                        <!-- begin panel-body -->
                        <div style="padding: 20px;"><button type="button" class="btn btn-lime" data-toggle="modal" data-target="#modal-dialog"><i class="fas fa-plus"></i> Create New Account</button></div>
                        <div class="panel-body">

                            <table id="data-table-combine" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                    	<th>Name</th>
                                        <th>Role</th>
                                        <th>Status</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Name</th>
                                        <th>Role</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                 </tfoot>
                                <tbody>
                                   <?php 
                                                $tablesql = "SELECT *, IF (A.useracc_status = 0,'Active', 'inactive') AS userstatus FROM jamfms_r_useraccount as A inner join jamfms_r_accounttype as B ON B.acctypeid = A.acctype_fk ORDER BY A.useraccountID DESC";
                                                $tableresult = mysqli_query($connect, $tablesql) or die("Bad query: $sql");

                                                while ($row = mysqli_fetch_assoc($tableresult)) {
                                                	$ID = $row['useraccountID'];
                                                    $fname = $row['fname'];
                                                    $mname = $row['mname'];
                                                    $lname = $row['lname'];
                                                    $acctype = $row['acctype_name'];
                                                    $status = $row['userstatus'];

                                                
                                               ?>
                                   <tr>
                                       <td><?php echo $fname. ' '. $mname.' '.$lname; ?></td>
                                       <td><?php echo $acctype; ?></td>
                                       <td><?php echo $status; ?></td>
                                       <td>
                                           <center>
                                               <button data-toggle="modal" class="btn btn-primary" href="#edit<?php echo $ID; ?>" ><i class='fa fa-edit'></i></button>
                                               <?php 
                                               if ($status == "Active"){
                                              
                                          		echo '<button type="submit" class="btn btn-danger" id="actives" value="'.$ID.'" ><i class="fa fa-times"></i></button>';
                                          	}
                                          	
                                          			else if ($status == "inactive")
                                          	
                                          		echo '<button type="submit" class="btn btn-lime" id="actives" value="'.$ID.'" ><i class="fa fa-check"></i></button>';
                                          	?>
                                           </center>
                                       </td>
                                   </tr>

                                   			<div class="modal fade" id="edit<?php echo $ID; ?>">
																<div class="modal-dialog">
																	<div class="modal-content">
																		<div class="modal-header">
																			<h4 class="modal-title">Update Account</h4>
																			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
																		</div>
												<div class="modal-body">
															
								                                
								                                   
								                                  <div class="form-group">
								                                  	<input type="text" style="display: none;" value="<?php echo $ID; ?>" required class="form-control" name="aydi" id="aydi">
								                                    <label>First Name</label>
								                                   <input type="text" value="<?php echo $fname; ?>" required class="form-control" name="editfname" id="edituname">
								                                  </div>
								                                  <div class="form-group">
								                                    <label>Middle Name</label>
								                                    <input value="<?php echo $mname; ?>" type="text" required class="form-control form-control-sm" name="editmname" id="editmname">
								                                  </div>
								                                  <div class="form-group">
								                                    <label>Last Name</label>
								                                    <input value="<?php echo $lname; ?>" type="text" required class="form-control form-control-sm" name="editlname" id="editlname">
								                                  </div>
								                           
												</div>
																		<div class="modal-footer">
																			<a href="javascript:;" class="btn btn-white" data-dismiss="modal">Close</a>
																			<button type="submit" id="submit2" name="submit2" value="<?php echo $ID; ?>" class="btn btn-primary">Save changes</button>
																		</div>
																		
																	</div>

																</div>
										</div>

								        
								<?php } ?>
                                          	   
                                </tbody>
                                
                            </table>
                        </div>
                        <!-- end panel-body -->
                    </div>
			    </div>
			    <!-- end col-10 -->
			</div>
			<!-- end row -->
		</div>







		
		<!-- end #content -->
		<div class="modal fade" id="modal-dialog">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<h4 class="modal-title">Create New Account</h4>
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
										</div>
										<div class="modal-body">
											<div class="widget-content padding">
                                
                                    <div class="form-group">
                                    <label>User Role</label>
                                        <select class="form-control" name="userrole" id="getsel">
                                        <option value="" disabled selected="">Select account type</option>
                                          <?php 
                                            $selectacctype = "SELECT * FROM jamfms_r_accounttype where acctype_name != 'ADMINISTRATOR' and acctype_status = 0 ";

                                            $selectresult = mysqli_query($connect, $selectacctype) or die("Bad Query: $sql");
                                            while($row = mysqli_fetch_assoc($selectresult)){
                                                 $acctypename = $row['acctype_name'];
                                                 $acctype_id = $row['acctypeid'];   
                                            
                                          ?>
                                          <option value="<?php  echo $acctype_id ?>"><?php echo "$acctypename"; ?></option>
                                          <?php 
                                            }
                                          ?>
                                        </select>
                                  </div>
                                  <div class="form-group">
                                    <label>First Name</label>
                                    <input type="text" required class="form-control" name="fname" id="uname">
                                  </div>
                                  <div class="form-group">
                                    <label>Middle Name</label>
                                    <input type="text" required class="form-control form-control-sm" name="mname" id="mname">
                                  </div>
                                  <div class="form-group">
                                    <label>Last Name</label>
                                    <input type="text" required class="form-control form-control-sm" name="lname" id="lname">
                                  </div>
                                  <!--<div class="form-group">
                                    <label>Username</label>
                                    <input type="text" class="form-control" name="username">
                                  </div> -->
                                  
                                  <!--<button type="submit" class="btn btn-primary">Submit</button>
                               -->
                            </div>
										</div>
										<div class="modal-footer">
											<a href="javascript:;" class="btn btn-white" data-dismiss="modal">Close</a>
											<button type="submit" id="submit" class="btn btn-primary">Save changes</button>
										</div>
									</div>
								</div>
							</div>
        <!-- begin theme-panel -->
        <div class="theme-panel">
            <a href="javascript:;" data-click="theme-panel-expand" class="theme-collapse-btn"><i class="fa fa-cog"></i></a>
            <div class="theme-panel-content">
                <h5 class="m-t-0">Color Theme</h5>
                <ul class="theme-list clearfix">
                    <li class="active"><a href="javascript:;" class="bg-green" data-theme="default" data-theme-file="../assets/css/default/theme/default.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Default">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-red" data-theme="red" data-theme-file="../assets/css/default/theme/red.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Red">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-blue" data-theme="blue" data-theme-file="../assets/css/default/theme/blue.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Blue">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-purple" data-theme="purple" data-theme-file="../assets/css/default/theme/purple.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Purple">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-orange" data-theme="orange" data-theme-file="../assets/css/default/theme/orange.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Orange">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-black" data-theme="black" data-theme-file="../assets/css/default/theme/black.css" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Black">&nbsp;</a></li>
                </ul>
                <div class="divider"></div>
                <div class="row m-t-10">
                    <div class="col-md-5 control-label double-line">Header Styling</div>
                    <div class="col-md-7">
                        <select name="header-styling" class="form-control form-control-sm">
                            <option value="1">default</option>
                            <option value="2">inverse</option>
                        </select>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-5 control-label">Header</div>
                    <div class="col-md-7">
                        <select name="header-fixed" class="form-control form-control-sm">
                            <option value="1">fixed</option>
                            <option value="2">default</option>
                        </select>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-5 control-label double-line">Sidebar Styling</div>
                    <div class="col-md-7">
                        <select name="sidebar-styling" class="form-control form-control-sm">
                            <option value="1">default</option>
                            <option value="2">grid</option>
                        </select>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-5 control-label">Sidebar</div>
                    <div class="col-md-7">
                        <select name="sidebar-fixed" class="form-control form-control-sm">
                            <option value="1">fixed</option>
                            <option value="2">default</option>
                        </select>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-5 control-label double-line">Sidebar Gradient</div>
                    <div class="col-md-7">
                        <select name="content-gradient" class="form-control form-control-sm">
                            <option value="1">disabled</option>
                            <option value="2">enabled</option>
                        </select>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-5 control-label double-line">Content Styling</div>
                    <div class="col-md-7">
                        <select name="content-styling" class="form-control form-control-sm">
                            <option value="1">default</option>
                            <option value="2">black</option>
                        </select>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-12">
                        <a href="javascript:;" class="btn btn-inverse btn-block btn-sm" data-click="reset-local-storage">Reset Local Storage</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- end theme-panel -->
		
		<!-- begin scroll to top btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
		<!-- end scroll to top btn -->
	</div>
	<!-- end page container -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="../assets/plugins/jquery/jquery-3.2.1.min.js"></script>
	<script src="../assets/plugins/jquery-ui/jquery-ui.min.js"></script>
	<script src="../assets/plugins/bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
	<!--[if lt IE 9]>
		<script src="../assets/crossbrowserjs/html5shiv.js"></script>
		<script src="../assets/crossbrowserjs/respond.min.js"></script>
		<script src="../assets/crossbrowserjs/excanvas.min.js"></script>
	<![endif]-->
	<script src="../assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="../assets/plugins/js-cookie/js.cookie.js"></script>
	<script src="../assets/js/theme/default.min.js"></script>
	<script src="../assets/js/apps.min.js"></script>
	<!-- ================== END BASE JS ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="../assets/plugins/DataTables/media/js/jquery.dataTables.js"></script>
	<script src="../assets/plugins/DataTables/media/js/dataTables.bootstrap.min.js"></script>
	<script src="../assets/plugins/DataTables/extensions/Buttons/js/dataTables.buttons.min.js"></script>
	<script src="../assets/plugins/DataTables/extensions/Buttons/js/buttons.bootstrap.min.js"></script>
	<script src="../assets/plugins/DataTables/extensions/Buttons/js/buttons.flash.min.js"></script>
	<script src="../assets/plugins/DataTables/extensions/Buttons/js/jszip.min.js"></script>
	<script src="../assets/plugins/DataTables/extensions/Buttons/js/pdfmake.min.js"></script>
	<script src="../assets/plugins/DataTables/extensions/Buttons/js/vfs_fonts.min.js"></script>
	<script src="../assets/plugins/DataTables/extensions/Buttons/js/buttons.html5.min.js"></script>
	<script src="../assets/plugins/DataTables/extensions/Buttons/js/buttons.print.min.js"></script>
	<script src="../assets/plugins/DataTables/extensions/Responsive/js/dataTables.responsive.min.js"></script>
	<script src="../assets/plugins/DataTables/extensions/AutoFill/js/dataTables.autoFill.min.js"></script>
	<script src="../assets/plugins/DataTables/extensions/ColReorder/js/dataTables.colReorder.min.js"></script>
	<script src="../assets/plugins/DataTables/extensions/KeyTable/js/dataTables.keyTable.min.js"></script>
	<script src="../assets/plugins/DataTables/extensions/RowReorder/js/dataTables.rowReorder.min.js"></script>
	<script src="../assets/plugins/DataTables/extensions/Select/js/dataTables.select.min.js"></script>
	<script src="../assets/js/demo/table-manage-combine.demo.min.js"></script>
	<script src="../assets/plugins/gritter/js/jquery.gritter.js"></script>
	<script src="../assets/js/demo/ui-modal-notification.demo.min.js"></script>

	

	<!-- ================== END PAGE LEVEL JS ================== -->
	<script type="text/javascript">
        $('#submit').click(function(e){
            e.preventDefault();

            var e = document.getElementById('getsel');
            var get = e.options[e.selectedIndex].value;
            var nameuser = document.getElementById('uname').value;
            var mnameuser = document.getElementById('mname').value;
            var lnameuser = document.getElementById('lname').value;


            if (get == "")
            {
                if (document.getElementById('getsel').options[e.selectedIndex].value == '')
                {
                    document.getElementById('getsel').options[0].innerText = "Please select";
                    document.getElementById('getsel').focus();
                    document.getElementById('getsel').style.borderColor = "#B94A48";
                    document.getElementById('getsel').style.color = "#B94A48";
                }


            }

            else
            {
                swal({
                        title: "Create user account?",
                        text: "Account details will be stored in the database.",
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonColor: '#b05544',
                        confirmButtonText: 'Yes',
                        cancelButtonText: "No",
                        closeOnConfirm: false,
                        closeOnCancel: false

                },
                function(isConfirm){
                    if (isConfirm) {
                    	 

                      
                        $.ajax({
                                    type: 'POST',
                                    url: 'INCLUDES/createacc.php',
                                    async: false,
                                    data: {
                                        _name: nameuser,
                                        _acctype: get,
                                        _mname: mnameuser,
                                        _lname: lnameuser
                                    },
                                    success: function(data) {
                                        

                                        swal("Account is created successfully! ", "You may now access your account.", "success");
                                        
                                        setTimeout(function() 
                                        {
                                            window.location = 'admin-accountsetup.php';
                                            document.getElementById('add-regular').click();
                                        },3000);
                                    },
                                    error: function(data) {
                                       
                                        swal("Error", "Something is wrong.", "error");
                                    }

                                }); 

                        
                            	
   		 			
                    

                    } 
                    else
                    {
                        swal("Cancelled", "Account is not created.", "error");
                    }
                });
                
             }
           
            

        });
    </script>
    

    <script type="text/javascript">
        $('button[id=submit2]').click(function(e){
            e.preventDefault();

            var id =$(this).attr('value');
            var nameuser = $('div[id=edit'+id+']').find('input[id=edituname]').val();
            var mnameuser = $('div[id=edit'+id+']').find('input[id=editmname]').val();
            var lnameuser = $('div[id=edit'+id+']').find('input[id=editlname]').val(); 

            /*
            
            alert(nameuser);
            alert(mnameuser);
            alert(lnameuser);
            alert(id);
           
			*/
            
           
                swal({
                        title: "Update user account?",
                        text: "Account details will be stored in the database.",
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonColor: '#b05544',
                        confirmButtonText: 'Yes',
                        cancelButtonText: "No",
                        closeOnConfirm: false,
                        closeOnCancel: false

                },
                function(isConfirm){
                    if (isConfirm) {
                    	 

                      
                        $.ajax({
                                    type: 'POST',
                                    url: 'INCLUDES/updateacc.php',
                                    async: false,
                                    data: {
                                        _name: nameuser,
                                        _mname: mnameuser,
                                        _lname: lnameuser,
                                        _aydi: id
                                    },
                                    success: function(data) {
                                        

                                        swal("Account details are updated! ", "Changes are made.", "success");
                                        
                                        setTimeout(function() 
                                        {
                                            window.location = 'admin-accountsetup.php';
                                            document.getElementById('add-regular').click();
                                        },3000);
                                    },
                                    error: function(data) {
                                       
                                        swal("Error", "Something is wrong.", "error");
                                    }

                                }); 

                        
                            	
   		 			
                    

                    } 
                    else
                    {
                        swal("Cancelled", "Account is not updated.", "error");
                    }
                });
                
             
           
            

        });
    </script>


    <script type="text/javascript">
        $('button[id=actives]').click(function(e){
            e.preventDefault();

            
            // var userid = document.getElementById('aydi').value;
            var id = $(this).attr('value');
           
         
         
                swal({
                        title: "Update user account?",
                        text: "Account details will be stored in the database.",
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonColor: '#b05544',
                        confirmButtonText: 'Yes',
                        cancelButtonText: "No",
                        closeOnConfirm: false,
                        closeOnCancel: false

                },
                function(isConfirm){
                    if (isConfirm) {
                    	 

                      
                        $.ajax({
                                    type: 'POST',
                                    url: 'INCLUDES/updateaccstat.php',
                                    async: false,
                                    data: {
                                        _aydi: id
                                    },
                                    success: function(data) {
                                        

                                        swal("Account details are updated! ", "Changes are made.", "success");
                                        
                                        setTimeout(function() 
                                        {
                                            window.location = 'admin-accountsetup.php';
                                            document.getElementById('add-regular').click();
                                        },3000);
                                    },
                                    error: function(data) {
                                       
                                        swal("Error", "Something is wrong.", "error");
                                    }

                                }); 

                        
                            	
   		 			
                    

                    } 
                    else
                    {
                        swal("Cancelled", "Account is not updated.", "error");
                    }
                });
                
             
           
            


        });
            </script>


	<script>
		$(document).ready(function() {
			App.init();
			Notification.init();
			TableManageCombine.init();
		});
	</script>


</body>
</html>
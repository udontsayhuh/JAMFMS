<?php
include 'INCLUDES/userdetails.php';

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
	<link href="../assets/plugins/switchery/switchery.min.css" rel="stylesheet" />
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
				<li class="dropdown navbar-user">
					<a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
						<img src="../assets/img/user/user-13.jpg" alt="" /> 
						<span class="d-none d-md-inline"><?php echo $name; ?></span> <b class="caret"></b>
					</a>
					<div class="dropdown-menu dropdown-menu-right">
						<button id="resetpass" data-toggle="modal" data-target="#modal-message" class="dropdown-item">Reset Password</button>
						<div class="dropdown-divider"></div>
						<form action="" method="POST">
						<button type="submit" name="logout"  class="dropdown-item">Log Out</button>
						<input type="hidden" name="transtype" value="Log out">
						</form>
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
						<li class="nav-profile">
						<a href="javascript:;" data-toggle="nav-profile">
							<div class="cover with-shadow"></div>
							<div class="image">
								<img src="../assets/img/user/user-13.jpg" alt="" />
							</div>
							<div class="info">
								<b class="caret pull-right"></b>
							<?php echo $name; ?>
								<small><?php echo $userrole; ?></small>
								<input type="hidden" id="u_id" value="<?php echo $uid; ?>"/>

							</div>
						</a>
					</li>
					<li>
						<ul class="nav nav-profile">
                            <li><a href="javascript:;"><i class="fa fa-cog"></i> Settings</a></li>
                            <li><a href="javascript:;"><i class="fa fa-pencil-alt"></i> Send Feedback</a></li>
                            <li><a href="javascript:;"><i class="fa fa-question-circle"></i> Helps</a></li>
                        </ul>
					</li>
				</ul>
				
				<!-- end sidebar user -->
				<!-- begin sidebar nav -->
				<ul class="nav">
					<li class="nav-header">Navigation</li>
					<li><a href="fo-dashboard.php"><i class="fas fa-chart-bar"></i> <span>Dashboard</span></a></li>
					<li class="active"><a href="fo-stakeholder.php"><i class="fas fa-users"></i> <span>Stakeholder Management</span></a></li>
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
			<h1 class="page-header">Stakeholder Management</h1>
			<!-- end page-header -->
			
			<!-- begin row -->
			<div class="row">
			    <!-- begin col-2 -->
			    <div class="col-lg-2">
			        <h5>The Stakeholder Management does the following features:</h5>
                    <ul class="p-l-25 m-b-15">
                        <li>Add New Stakeholder</li>
                        <li>View Stakeholder details</li>
                        <li>Update Stakleholder</li>
                        <li>Filter Table</li>
                        <li>Print Stakeholder Report</li>
                        
                    
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
                            <h4 class="panel-title">Stakeholders</h4>
                        </div>
                        <!-- end panel-heading -->
                        <!-- begin panel-body -->
                        <div style="padding: 20px;"><button type="button" class="btn btn-lime" data-toggle="modal" data-target="#modal-dialog"><i class="fas fa-plus"></i> Add New Stakeholder</button></div>
                        <div class="panel-body">

                            <table id="data-table-combine" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                    	<th>Name</th>
                                        <th>Category</th>
                                        <th>% Rate</th>
                                        <th>Status</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Name</th>
                                        <th>Category</th>
                                        <th>% Rate</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                 </tfoot>
                                <tbody>
                                   <?php 
                                                $tablesql = "SELECT *, IF (A.stkh_status = 0,'Active', 'inactive') AS status FROM `jamsfms_r_stakeholder` as A inner join `jamsfms_r_stakeholder_type` as B ON A.stkhid = B.st_type_id ORDER BY A.stkhid DESC";
                                                $tableresult = mysqli_query($connect, $tablesql) or die("Bad query: $sql");

                                                while ($row = mysqli_fetch_assoc($tableresult)) {
                                                	$ID = $row['stkhid'];
                                                	$name = $row['stkh_name'];
                                                	$category = $row['st_type_name'];
                                                	$categoryid = $row['fk_st_type_id'];
                                                	$rate = $row['stkh_percent'];
                                                	$status = $row['status'];
                                                	$add = $row['stkh_address'];
                                                	$con = $row['stkh_contact'];
                                                	
                                                    

                                                
                                               ?>
                                   <tr>
                                       <td><?php echo $name;?></td>
                                       <td><?php echo $category; ?></td>
                                       <td><?php echo $rate; ?></td>
                                        <td><?php echo $status; ?></td>
                                       <td>
                                           <center>
                                               <button data-toggle="modal" class="btn btn-primary" href="#edit<?php echo $ID; ?>" ><i class='fas fa-cogs'></i></button>
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
																			<h4 class="modal-title">Stakeholder details </h4>
																			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
																		</div>
												<div class="modal-body">
															
								                                <p class="m-b-0">
			                                 <?php echo '<p class="m-b-25">UPDATE&nbsp&nbsp&nbsp<input type="checkbox" value="'.$ID.'" id="toggle" data-render="switchery" data-theme="default" /></p> '; ?>
			                                
			                            </p><div class="form-group">
								                                  	<input type="text" style="display: none;" value="<?php echo $ID; ?>" required class="form-control" name="aydi" id="aydi">
								                                    <label>Stakeholder Category:</label>
								                                   <label class="text-info"  id="editstcat"><?php echo $category; ?></label>
								                                  </div>
								                                   
								                                  <div class="form-group">
								                                  	<input type="text" style="display: none;" value="<?php echo $ID; ?>" required class="form-control" name="aydi" id="aydi">
								                                    <label>Name</label>
								                                   <input disabled type="text" value="<?php echo $name; ?>" required class="form-control" name="editfname" id="editstname">
								                                  </div>
								                                  <div class="form-group">
								                                    <label>Address</label>
								                                    <input disabled value="<?php echo $add; ?>" type="text" required class="form-control form-control-sm" name="editmname" id="editstaddress">
								                                  </div>
								                                  <div class="form-group">
								                                    <label>Contact #</label>
								                                    <input disabled value="<?php echo $con; ?>" type="text" required class="form-control form-control-sm" name="editlname" id="editstcontact">
								                                    <div class="form-group">
								                                    <label>Percent %</label>
								                                    <input disabled value="<?php echo $rate; ?>" type="text" required class="form-control form-control-sm" name="editstpercent" id="editstpercent">
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
											<h4 class="modal-title">Add New Stakeholder</h4>
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
										</div>
										<div class="modal-body">
											<div class="widget-content padding">
                                
                                    <div class="form-group">
                                    <label>Category</label>
                                        <select class="form-control" name="userrole" id="getsel">
                                        <option value="" disabled selected="">Select stakeholder category</option>
                                          <?php 
                                            $selectacctype = "SELECT * FROM `jamsfms_r_stakeholder_type";

                                            $selectresult = mysqli_query($connect, $selectacctype) or die("Bad Query: $sql");
                                            while($row = mysqli_fetch_assoc($selectresult)){
                                                 $acctypename = $row['st_type_name'];
                                                 $acctype_id = $row['st_type_id'];   
                                            
                                          ?>
                                          <option value="<?php  echo $acctype_id ?>"><?php echo "$acctypename"; ?></option>
                                          <?php 
                                            }
                                          ?>
                                        </select>
                                  </div>
                                  <div class="form-group">
                                    <label>New Stakeholder</label>
                                    <input type="text" required class="form-control" name="fname" id="st_name">
                                  </div>
                                  <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" required class="form-control form-control-sm" name="mname" id="st_address">
                                  </div>
                                  <div class="form-group">
                                    <label>Contact #</label>
                                    <input type="text" required class="form-control form-control-sm" name="lname" id="st_contact">
                                  </div>
                                  <div class="form-group">
                                    <label>Percent %</label>
                                    <input type="number" required class="form-control form-control-sm" name="lname" id="st_percent">
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
        <div class="modal modal-message fade" id="modal-message">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<h4 class="modal-title">Reset Password</h4>
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
										</div>
										<div class="modal-body">
			                                 		<div class="panel panel-inverse" data-sortable-id="form-plugins-1">
                    	<!-- begin panel-heading -->
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                            </div>
                            <h4 class="panel-title">Configure fields to update password</h4>
                        </div>
                    	<!-- end panel-heading -->
                    	<!-- begin panel-body -->
                        <div class="panel-body panel-form">
                            <form class="form-horizontal form-bordered">
								<!--<div class="form-group row">
									<label class="col-md-4 col-form-label">Current Password</label>
									<div class="col-md-8">
									    <input id="curr" required data-toggle="password" data-placement="after" class="form-control" type="password" placeholder="password" />
									</div>
								</div>
							-->
								<div class="form-group row">
									<label class="col-md-4 col-form-label">New Password</label>
									<div class="col-md-8">
									    <input id="new" required data-toggle="password" data-placement="after" class="form-control" type="password" placeholder="password" />
									</div>
								</div>
								<div class="form-group row">
									<label class="col-md-4 col-form-label">Retype Password</label>
									<div class="col-md-8">
									    <input id="retype" required data-toggle="password" data-placement="after" class="form-control" type="password" placeholder="password" />
									</div>
								</div>
								<div id="error"  style="display: none;"  class="alert alert-danger fade show">Passwords do not match!</div>
								<div id="match"  style="display: none;"  class="alert alert-lime fade show">Passwords match!</div>
								<div id="fillin"  style="display: none;"  class="alert alert-danger fade show">You did not made any entries!</div>
							</form>
                        </div>
                        <!-- end panel-body -->
                    </div>
										</div>
										<div class="modal-footer">
											<a href="javascript:;" class="btn btn-white" data-dismiss="modal">Close</a>
											<button id="pass_btn" class="btn btn-primary">Change Password</button>
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
            var st_name = document.getElementById('st_name').value;
            var st_address = document.getElementById('st_address').value;
            var st_contact = document.getElementById('st_contact').value;
            var st_percent = document.getElementById('st_percent').value;

          
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
                        title: "Add new stakeholder??",
                        text: "New stakeholder details will be stored in the database.",
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonColor: '#b05544',
                        confirmButtonText: 'Yes',
                        cancelButtonText: "No",
                        closeOnConfirm: false,
                        closeOnCancel: false,

                },
                function(isConfirm){
                    if (isConfirm) {
                    	 

                      
                        $.ajax({
                                    type: 'POST',
                                    url: 'INCLUDES/createstkh.php',
                                    async: false,
                                    data: {
                                        _st_percent: st_percent,
                                        _st_contact: st_contact,
                                        _st_address: st_address,
                                        _st_name: st_name,
                                        _st_cat: get
                                    },
                                    success: function(data) {
                                        

                                        swal("Stakeholder is added successfully! ", "Entries are saved.", "success");
                                        
                                        setTimeout(function() 
                                        {
                                            window.location = 'fo-dashboard.php';
                                           // document.getElementById('add-regular').click();
                                        },3000);
                                    },
                                    error: function(data) {
                                       
                                        swal("Error", "Something is wrong.", "error");
                                    }

                                }); 

                        
                            	
   		 			
                    

                    } 
                    else
                    {
                        swal("Cancelled", "Transaction did not proceed.", "error");
                    }
                });
                
             }


        });
    </script>
    
     <script type="text/javascript">
        $('input[id=toggle]').change(function(e){
            e.preventDefault(); 
			//var id = $(this);
			var id =$(this).attr('value');
				if(this.checked){
				$("input:disabled").removeAttr("disabled"); 
				//$("[id=toggleicon").attr("class", "fa fa-shopping-cart"); 
			console.log();
			}

			else if (!this.checked)
			{
				/*
				var id = $(this).attr('value');
				var a = $('div[id=edit'+id+']').find('input[id=edituname]').attr('id');
				//$('#'+a).attr("disabled",true);
				var b = $('#'+a).attr("disabled",true);
				console.log(b);
				alert(b);
				*/
				var a = $('div[id=edit'+id+']').find('input[id=editstname]').attr('id');
				var b = $('div[id=edit'+id+']').find('input[id=editstcontact]').attr('id');
				var c = $('div[id=edit'+id+']').find('input[id=editstaddress]').attr('id');
				var d = $('div[id=edit'+id+']').find('input[id=editstpercent]').attr('id');
				
					//$('input:contains('+nameuser+')').prop("disabled", "disabled"); 
					//var b = $('input:contains('+nameuser+')').prop("disabled", "disabled"); 
					//alert(b);
					$("[id="+a+"]").prop("disabled", "disabled"); 
					$("[id="+b+"]").prop("disabled", "disabled"); 
					$("[id="+c+"]").prop("disabled", "disabled"); 
					$("[id="+d+"]").prop("disabled", "disabled"); 
					
					
			}
			

        });
    </script>
    <script type="text/javascript">
        $('button[id=submit2]').click(function(e){
            e.preventDefault();

            var id =$(this).attr('value');
            var st_name = $('div[id=edit'+id+']').find('input[id=editstname]').val();
            var st_address = $('div[id=edit'+id+']').find('input[id=editstaddress]').val();
            var st_contact = $('div[id=edit'+id+']').find('input[id=editstcontact]').val(); 
            var st_percent = $('div[id=edit'+id+']').find('input[id=editstpercent]').val();
        
           //var st_cat = $('div[id=edit'+id+']').find('select[id=getsel2]').val(); 
            //var get = st_cat.options[st_cat.selectedIndex].value;
          
			/*
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
           */
                swal({
                        title: "Update stakeholder?",
                        text: "Changes will be saved.",
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
                                    url: 'INCLUDES/updatestkh.php',
                                    async: false,
                                    data: {
                                        _stname: st_name,
                                        _staddress: st_address,
                                        _stcontact: st_contact,
                                        _stpercent: st_percent,
                                        _aydi: id
                                    },
                                    success: function(data) {
                                        

                                        swal("Stakeholder details are updated! ", "Changes are made.", "success");
                                        
                                        setTimeout(function() 
                                        {
                                            window.location = 'fo-stakeholder.php';
                                            //document.getElementById('add-regular').click();
                                        },3000);
                                    },
                                    error: function(data) {
                                       
                                        swal("Error", "Something is wrong.", "error");
                                    }

                                }); 

                        
                            	
   		 			
                    

                    } 
                    else
                    {
                        swal("Cancelled", "Stakeholder is not updated.", "error");
                    }
                });
                
             
           
           // }

        });
    </script>


    <script type="text/javascript">
        $('button[id=actives]').click(function(e){
            e.preventDefault();

            
            // var userid = document.getElementById('aydi').value;
            var id = $(this).attr('value');
           
         
         
                swal({
                        title: "Update stakeholder?",
                        text: "Stakeholder status will be updated.",
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
                                    url: 'INCLUDES/updatestkhstat.php',
                                    async: false,
                                    data: {
                                        _aydi: id
                                    },
                                    success: function(data) {
                                        

                                        swal("Stakeholder details are updated! ", "Changes are made.", "success");
                                        
                                        setTimeout(function() 
                                        {
                                            window.location = 'fo-stakeholder.php';
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

	<script src="../assets/plugins/switchery/switchery.min.js"></script>
	<script src="../assets/plugins/powerange/powerange.min.js"></script>
	<script src="../assets/js/demo/form-slider-switcher.demo.min.js"></script>
	<script>
		$(document).ready(function() {
			App.init();
			Notification.init();
			TableManageCombine.init();
			FormSliderSwitcher.init();
		});
	</script>



<script type="text/javascript">
		
		$( 'input[id=retype]').keyup(function(){
			
			var pass1 = document.getElementById('new').value;
			var pass2 = document.getElementById('retype').value;
			if( pass1 != pass2)
				{$("#error").show(); 
				$("#match").hide();
				$("#fillin").hide();
			}
			if ( pass1 == pass2){$("#match").show(); $("#error").hide(); $("#fillin").hide();}
			
		});
	</script>
	<script type="text/javascript">
        $('#pass_btn').click(function(e){
            e.preventDefault();

            
           // var currpass = document.getElementById('curr').value;
            var newpass = document.getElementById('new').value;
            var useraydi = document.getElementById('u_id').value;
           	
           	if(newpass == "" || useraydi == ""){
           		$("#fillin").show();
           	}
           	else{
           		$("#fillin").hide();
			   swal({
                        title: "Update password?",
                        text: "New password will be saved.",
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
                                    url: 'INCLUDES/updatepass.php',
                                    async: false,
                                    data: {
                                        
                                        _id: useraydi,
                                        _pass: newpass

                                    },
                                    success: function(data) {
                                        

                                        swal("Password is changed! ", "Entries are saved.", "success");
                                        
                                        setTimeout(function() 
                                        {
                                            window.location = 'admin-dashboard.php';
                                            //document.getElementById('add-regular').click();
                                        },3000);
                                    },
                                    error: function(data) {
                                       
                                        swal("Error", "Something is wrong.", "error");
                                    }

                                }); 

                        
                            	
   		 			
                    

                    } 
                    else
                    {
                        swal("Cancelled", "", "error");
                    }
                });
                
             
           }
            

        });
    </script>


</body>
</html>

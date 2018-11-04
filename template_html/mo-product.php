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
					<li><a href="mo-dashboard.php"><i class="fas fa-chart-bar"></i> <span>Dashboard</span></a></li>
					<li><a href="mo-customersetup.php"><i class="fas fa-users"></i> <span>Customer Management</span></a></li>
					<!--<li><a href="mo-product.php"><i class="fas fa-shopping-cart"></i> <span>Product Management</span></a></li>-->
					<li class="has-sub active">
						<a href="javascript:;">
					        <b class="caret"></b>
						    <i class="fas fa-shopping-cart"></i>
						    <span>Product</span>
					    </a>
						<ul class="sub-menu">
						    <li class="active"><a href="mo-product.php">Product Management</a></li>
						    <li><a href="mo-productcat.php">Product Category</a></li>
						</ul>
					</li>
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
			<h1 class="page-header"><strong>Product</strong> Management</h1>
			<!-- end page-header -->
			
			<!-- begin row -->
			<div class="row">
			    <!-- begin col-2 -->
			    <div class="col-lg-2">
			        <h5>The Product Management does the following features:</h5>
                    <ul class="p-l-25 m-b-15">
                        <li>Add New Product</li>
                        <li>View Product Details</li>
                        <li>Update Product Details</li>
                        <li>Filter Table</li>
                        <li>Print Product Report</li>
                        
                    
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
                            <h4 class="panel-title">Product Table</h4>
                        </div>
                        <!-- end panel-heading -->
                        <!-- begin panel-body -->
                        <div style="padding: 20px;"><button class="btn btn-lime" data-toggle="modal" data-target="#modal-dialog"><i class="fas fa-plus"></i> Add New Product</button></div>

                        	
                        	
                        <div class="panel-body">

                            <table id="data-table-combine" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                    	<th>Name</th>
                                        <th>Category</th>
                                        <th>Description</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Name</th>
                                        <th>Category</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                    </tr>
                                 </tfoot>
                                <tbody>
                                   <?php 
                                                $tablesql = "SELECT *, IF (A.prod_status = 0,'Active', 'inactive')  AS prodstatus from jamsfms_r_product as A inner join jamsfms_r_prod_category as B on B.prod_cat_id = A.fk_prodcat";
                                                $tableresult = mysqli_query($connect, $tablesql) or die("Bad query: $sql");

                                                while ($row = mysqli_fetch_assoc($tableresult)) {
                                                	$ID = $row['prod_id'];
                                                    $name = $row['prod_name'];
                                                    $desc = $row['prod_desc'];
                                                    $machine = $row['prod_machinecost'];
                                                    $material = $row['prod_materialcost'];
                                                    $unit =$row['prod_unitmeasure'];
                                                    $cat = $row['prod_cat_name'];
                                                    $status = $row['prodstatus'];

                                                
                                               ?>
                                   <tr>
                                       <td><?php echo $name; ?></td>
                                       <td><?php echo $cat; ?></td>
                                       <td><?php echo $desc; ?></td>
                                       <td>
                                           <center>
                                               <button data-toggle="modal" class="btn btn-primary" href="#edit<?php echo $ID; ?>" ><i class='fa fa-edit'></i></button>
                                               <?php 
                                               if ($status == "Active"){
                                              
                                          		echo '<button type="submit" class="btn btn-danger" value="'.$ID.'" id="actives" ><i class="fa fa-times"></i></button>';
                                          	}
                                          	
                                          			else if ($status == "inactive")
                                          	
                                          		echo '<button type="submit" class="btn btn-lime" value="'.$ID.'" id="actives" ><i class="fa fa-check"></i></button>';
                                          ?>
                                           </center>
                                       </td>
                                   </tr>
                                   <div class="modal fade" id="edit<?php echo $ID; ?>">
																<div class="modal-dialog">
																	<div class="modal-content">
																		<div class="modal-header">
																			<h4 class="modal-title">Update Product Details</h4>
																			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
																		</div>
												<div class="modal-body">
															
								                                
								                                   
								                                  <div class="form-group">
								                                  	<input type="text" style="display: none;" value="<?php echo $ID; ?>" required class="form-control" name="aydi" id="aydi">
								                                    <label>Product</label>
								                                   <input type="text" value="<?php echo $name; ?>" required class="form-control" name="editfname" id="pname">
								                                  </div>
								                                  <div class="form-group">
								                                    <label>Description</label>
								                                    <textarea class="form-control" rows="6"  type="text" required class="form-control form-control-sm" name="pdesc" id="pdesc"><?php echo $desc; ?></textarea>
								                                  </div>
								                                  <div class="form-group">
								                                    <label>Machine Cost</label>
								                                    <input class="form-control" rows="6"  type="text" required class="form-control form-control-sm" name="pdesc" id="pmachine" value="<?php echo $machine; ?>">
								                                  </div>
								                                  <div class="form-group">
								                                    <label>Material Cost</label>
								                                    <input class="form-control" rows="6"  type="text" required class="form-control form-control-sm" name="pdesc" id="pmaterial" value="<?php echo $material; ?>">
								                                  </div>
								                                  <div class="form-group">
								                                    <label>Unit Measure</label>
								                                    <input class="form-control" rows="6"  type="text" required class="form-control form-control-sm" name="pdesc" id="punit" value="<?php echo $unit; ?>">
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

		<div class="modal fade" id="modal-dialog">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<h4 class="modal-title">Add New Product</h4>
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
										</div>
										<div class="modal-body">
											<div class="panel panel-inverse" data-sortable-id="form-plugins-14">
                    	<!-- begin panel-heading -->
                        <div class="panel-heading">
                           
                            <h4 class="panel-title">Product Details</h4>
                        </div>
                    	<!-- end panel-heading -->
                    	<!-- begin panel-body -->
                        <div class="panel-body panel-form">
                            <form class="form-horizontal form-bordered">
								<div class="form-group row">
									<label class="col-md-4 col-form-label">Name of Product</label>
									<div class="col-md-8">
										<input type="text" required class="form-control" id="productname" />
									</div>
								</div>
								<div class="form-group row">
									<label class="col-md-4 col-form-label">Description</label>
									<div class="col-md-8">
										<textarea rows="6" required class="form-control" id="productdesc"></textarea>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-md-4 col-form-label">Category</label>
									<div class="col-md-8">
										<select class="form-control" name="productcat" id="getsel">
                                        <option value="" disabled selected="">Select product category</option>
                                          <?php 
                                            $selectcat = "SELECT * FROM jamsfms_r_prod_category where prod_cat_stat = 0 ";

                                            $selectresult = mysqli_query($connect, $selectcat) or die("Bad Query: $sql");
                                            while($row = mysqli_fetch_assoc($selectresult)){
                                                 $prod_cat_name = $row['prod_cat_name'];
                                                 $prod_cat_id = $row['prod_cat_id'];   
                                            
                                          ?>
                                          <option value="<?php  echo $prod_cat_id ?>"><?php echo "$prod_cat_name"; ?></option>
                                          <?php 
                                            }
                                          ?>
                                        </select>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-md-4 col-form-label">Machine Cost</label>
									<div class="col-md-8">
										<input type="text" required class="form-control" id="machinecost" />
									</div>
								</div>
								<div class="form-group row">
									<label class="col-md-4 col-form-label">Material Cost</label>
									<div class="col-md-8">
										<input type="text" required class="form-control" id="mtrlcost" />
									</div>
								</div>
								<div class="form-group row">
									<label class="col-md-4 col-form-label">Unit Measure</label>
									<div class="col-md-8">
										<input type="text" required class="form-control" id="unitmeasure" />
									</div>
								</div>
								
							</form>
                        </div>
                        <!-- end panel-body -->
                    </div>
										</div>
										<div class="modal-footer">
											<a href="javascript:;" class="btn btn-white" data-dismiss="modal">Close</a>
											<button type="submit" id="submitbtn" class="btn btn-success">Submit</button>
										</div>
									</div>
								</div>
							</div>
		<!-- end #content -->
		
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
        $('#submitbtn').click(function(e){
            e.preventDefault();

            var e = document.getElementById('getsel');
            var get = e.options[e.selectedIndex].value;
            var prodname = document.getElementById('productname').value;
            var proddesc = document.getElementById('productdesc').value;
            var mncost = document.getElementById('machinecost').value;
            var matcost = document.getElementById('mtrlcost').value;
            var unitmes = document.getElementById('unitmeasure').value;


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
                                    url: 'INCLUDES/createproduct.php',
                                    async: false,
                                    data: {
                                        
                                        _id: get,
                                        _prodname: prodname,
                                        _proddesc: proddesc,
                                        _mncost: mncost,
                                        _matcost: matcost,
                                        _unitmes: unitmes

                                    },
                                    success: function(data) {
                                        

                                        swal("Product is added successfully! ", "Entries are saved.", "success");
                                        
                                        setTimeout(function() 
                                        {
                                            window.location = 'mo-product.php';
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
        $('button[id=submit2]').click(function(e)

        	{e.preventDefault();

            var id =$(this).attr('value');    
            var product = $('div[id=edit'+id+']').find('input[id=pname]').val();
            var descript = $('div[id=edit'+id+']').find('textarea[id=pdesc]').val();
            //var a = $('div[id=edit'+id+']').find('select[id=getsel2]');
            //var get2 = a.options[a.selectedIndex].value;
           
                swal({
                        title: "Update product details?",
                        text: "Product details will be stored in the database.",
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
                                    url: 'INCLUDES/updateprod.php',
                                    async: false,
                                    data: {
                                        _prod: product,
                                        _desc: descript,
                                        _aydi: id
                                    },
                                    success: function(data) {
                                        

                                        swal("Product details are updated! ", "Changes are made.", "success");
                                        
                                        setTimeout(function() 
                                        {
                                            window.location = 'mo-product.php';
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
                        swal("Cancelled", "Product is not updated.", "error");
                    }
                });

        });
    </script>

    <script type="text/javascript">
        $('button[id=actives]').click(function(e){
            e.preventDefault();

            
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
                                    url: 'INCLUDES/updateprodstat.php',
                                    async: false,
                                    data: {
                                        _aydi: id
                                    },
                                    success: function(data) {
                                        

                                        swal("Product details are updated! ", "Changes are made.", "success");
                                        
                                        setTimeout(function() 
                                        {
                                            window.location = 'mo-product.php';
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
                        swal("Cancelled", "Product info is not updated.", "error");
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

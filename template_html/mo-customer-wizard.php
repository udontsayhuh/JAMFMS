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

	<link href="../assets/plugins/jquery-smart-wizard/src/css/smart_wizard.css" rel="stylesheet" />
	<link href="../assets/plugins/parsley/src/parsley.css" rel="stylesheet" />
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
					<li class="active"><a href="mo-customersetup.php"><i class="fas fa-users"></i> <span>Customer Management</span></a></li>
					<!--<li><a href="mo-product.php"><i class="fas fa-shopping-cart"></i> <span>Product Management</span></a></li>-->
					<li class="has-sub">
						<a href="javascript:;">
					        <b class="caret"></b>
						    <i class="fas fa-shopping-cart"></i>
						    <span>Product</span>
					    </a>
						<ul class="sub-menu">
						    <li class="active"><a href="mo-customersetup.php">Product Management</a></li>
						    <li><a href="index_v2.html">Product Category</a></li>
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
				<li class="breadcrumb-item"><a href="javascript:;">Form Stuff</a></li>
				<li class="breadcrumb-item active">Wizards + Validation</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Customer Information</h1>
			<!-- end page-header -->
			
			<!-- begin wizard-form -->
			<form action="/" method="POST" name="form-wizard" class="form-control-with-bg">
				<!-- begin wizard -->
				<div id="wizard">
					<!-- begin wizard-step -->
					<ul>
						<li class="col-md-3 col-sm-4 col-6">
							<a href="#step-1">
								<span class="number">1</span> 
								<span class="info text-ellipsis">
									Personal Info
									<small class="text-ellipsis">Name, Address, Job Title, E-mail, Contact Number</small>
								</span>
							</a>
						</li>
						<li class="col-md-3 col-sm-4 col-6">
							<a href="#step-2">
								<span class="number">2</span> 
								<span class="info text-ellipsis">
									Company Information
									<small class="text-ellipsis">Company name and TIN number is required</small>
								</span>
							</a>
						</li>
						<li class="col-md-3 col-sm-4 col-6">
							<a href="#step-3">
								<span class="number">3</span>
								<span class="info text-ellipsis">
									Create Customer
									<small class="text-ellipsis">Store new info in the database</small>
								</span>
							</a>
						</li>
					</ul>
					<!-- end wizard-step -->
					<!-- begin wizard-content -->
					<div>
						<!-- begin step-1 -->
						<div id="step-1">
							<!-- begin fieldset -->
							<fieldset>
								<!-- begin row -->
								<div class="row">
									<!-- begin col-8 -->
									<div class="col-md-8 offset-md-2">
										<legend class="no-border f-w-700 p-b-0 m-t-0 m-b-20 f-s-16 text-inverse">Personal info about yourself</legend>
										<!-- begin form-group -->
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">First Name <span class="text-danger">*</span></label>
											<div class="col-md-6">
												<input type="text" id="firstname" name="firstname"  data-parsley-group="step-1" data-parsley-required="true" class="form-control" />
											</div>
										</div>
										<!-- end form-group -->
										<!-- begin form-group -->
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Last Name <span class="text-danger">*</span></label>
											<div class="col-md-6">
												<input type="text" name="lastname" id="lastname" data-parsley-group="step-1" data-parsley-required="true" class="form-control" />
											</div>
										</div>
										<!-- end form-group -->
										<!-- begin form-group -->
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Job Title<span class="text-danger">*</span></label>
											<div class="col-md-6">
												<input type="text" name="job" id="job" placeholder="" class="form-control" data-parsley-group="step-1" data-parsley-required="true" />
											</div>
										</div>

										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Email Address<span class="text-danger">*</span></label>
											<div class="col-md-6">
												<input type="email" id="email_add" name="email_add" placeholder="" class="form-control" data-parsley-group="step-1" data-parsley-required="true" />
											</div>
										</div>

										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Telephone/Mobile Number<span class="text-danger">*</span></label>
											<div class="col-md-6">
												<input type="text" class="form-control" id="tel_num" placeholder="99-9999999" />
											</div>
										</div>
										<!-- end form-group -->
									</div>
									<!-- end col-8 -->
								</div>
								<!-- end row -->
							</fieldset>
							<!-- end fieldset -->
						</div>
						<!-- end step-1 -->
						<!-- begin step-2 -->
						<div id="step-2">
							<!-- begin fieldset -->
							<fieldset>
								<!-- begin row -->
								<div class="row">
									<!-- begin col-8 -->
									<div class="col-md-8 md-offset-2">
										<legend class="no-border f-w-700 p-b-0 m-t-0 m-b-20 f-s-16 text-inverse">Please fill up the following corporate information.</legend>
										<!-- begin form-group -->
										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Company Name<span class="text-danger">*</span></label>
											<div class="col-md-6">
												<input type="text" id="company" name="company" placeholder="" class="form-control" data-parsley-group="step-2" data-parsley-required="true" />
											</div>
										</div>

										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Office Address<span class="text-danger">*</span></label>
											<div class="col-md-6">
												<input type="text" id="off_add" name="off_add" placeholder="" class="form-control" data-parsley-group="step-2" data-parsley-required="true" />
											</div>
										</div>

										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">TIN<span class="text-danger">*</span></label>
											<div class="col-md-6">
												<input type="number" id="tin" name="tin" placeholder="" class="form-control" data-parsley-group="step-2" data-parsley-required="true" />
											</div>
										</div>

										<div class="form-group row m-b-10">
											<label class="col-md-3 col-form-label text-md-right">Telephone Number/Fax Number<span class="text-danger">*</span></label>
											<div class="col-md-6">
												<input type="number" id="com_tel_num" name="com_tel_num" placeholder="" class="form-control" data-parsley-group="step-2" data-parsley-required="true" />
											</div>
										</div>
										<!-- end form-group -->
										<!-- begin form-group -->
										
										<!-- end form-group -->
									</div>
									<!-- end col-8 -->
								</div>
								<!-- end row -->
							</fieldset>
							<!-- end fieldset -->
						</div>
						<!-- end step-2 -->
						<!-- begin step-3 -->
						
						<div id="step-3">
							<div class="jumbotron m-b-0 text-center">
								<h2 class="text-inverse">Read Privacy and Policy Terms</h2>
								<p class="m-b-30 f-s-16"><section class="content-header">
        <h1> Terms of Use, Privacy Policy and Disclaimer </h1> 
      </section>
    </br>

<h1>Privacy Policy</h1>


<p>Effective date: September 03, 2018</p>



<p>This page informs you of our policies regarding the collection, use, and disclosure of personal data when you use our Service and the choices you have associated with that data. This Privacy Policy  for JAMS Inc. is powered by <a href="https://privacypolicies.com/free-privacy-policy-generator/">PrivacyPolicies.com</a>.</p>

<p>We use your data to provide and improve the Service. By using the Service, you agree to the collection and use of information in accordance with this policy. Unless otherwise defined in this Privacy Policy, the terms used in this Privacy Policy have the same meanings as in our Terms and Conditions, accessible from http://www.euc-inc.events.ph</p>

   </p>
								<p><button type="submit" value="showmodal" id="submit_btn" class="btn btn-primary btn-lg">I have read the Privacy and Policy Terms.</button></p>
							</div>
						</div>
						<!-- end step-3 -->
					</div>
					<!-- end wizard-content -->
				</div>
				<!-- end wizard -->
			</form>
			<!-- end wizard-form -->
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
        <div class="modal modal-message fade" id="editmodal" onclick="rel()" >
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<h4 class="modal-title">Customer Profile</h4>
											<button type="button" href="mo-customersetup.php" aria-hidden="true">×</button>
										</div>
										<div class="modal-body">
											
											<div class="widget-content padding">
                            				<p class="m-b-0">
			                                 
			                                
			                            </p>
			                          

								                                
								                                   
				<div class="panel panel-inverse" data-sortable-id="form-plugins-14">
                    	<!-- begin panel-heading -->
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                            </div>
                            <h4 class="panel-title">Input fields</h4>
                        </div>
                    	<!-- end panel-heading -->
                    	<!-- begin panel-body -->
                        <div class="panel-body panel-form">
                            <form class="form-horizontal form-bordered">
								<div class="form-group row">
									<label class="col-md-4 col-form-label">First Name</label>
									<div class="col-md-8">
										<input disabled type="text" value="<?php echo $fname; ?>" required class="form-control" name="editfname" id="edituname">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-md-4 col-form-label">Last Name</label>
									<div class="col-md-8">
									<input disabled value="<?php echo $lname; ?>" type="text" required class="form-control form-control-sm" name="editlname" id="editlname">
									</div>
								</div>

								<div class="form-group row">
									<label class="col-md-4 col-form-label">Job</label>
									<div class="col-md-8">
										 <input disabled value="<?php echo $job; ?>" type="text" required class="form-control form-control-sm" name="editlname" id="editjob">
									</div>
								</div>
								
								<div class="form-group row">
									<label class="col-md-4 col-form-label">Email</label>
									<div class="col-md-8">
										 <input disabled value="<?php echo $email; ?>" type="text" required class="form-control form-control-sm" name="editlname" id="editemail">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-md-4 col-form-label">Company</label>
									<div class="col-md-8">
										<input disabled value="<?php echo $company; ?>" type="text" required class="form-control form-control-sm" name="editlname" id="editcompany">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-md-4 col-form-label">Personal Contact #</label>
									<div class="col-md-8">
										<input disabled value="<?php echo $tel_no; ?>" type="text" required class="form-control form-control-sm" name="edittel" id="edittel">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-md-4 col-form-label">Office Address</label>
									<div class="col-md-8">
										<input disabled value="<?php echo $off_add; ?>" type="text" required class="form-control form-control-sm" name="of" id="editoffadd">
									</div>
								</div>
								<div class="form-group row">
									<label class="col-md-4 col-form-label">Company Contact #</label>
									<div class="col-md-8">
										<input disabled value="<?php echo $company_tel; ?>" type="text" required class="form-control form-control-sm" name="editlname" id="editcomtel">
									</div>
								</div>
							</form>
                        </div>
                        <!-- end panel-body -->
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
											<a href="mo-customersetup.php" class="btn btn-white">Close</a>
											
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

	<script src="../assets/plugins/parsley/dist/parsley.js"></script>
	<script src="../assets/plugins/jquery-smart-wizard/src/js/jquery.smartWizard.js"></script>
	<script src="../assets/js/demo/form-wizards-validation.demo.min.js"></script>

	

	<!-- ================== END PAGE LEVEL JS ================== -->

	<script>
		function rel() {
		    window.location ='mo-customersetup.php';
		}
</script>
	<script type="text/javascript">
        $('#submit_btn').click(function(e){
            e.preventDefault();

            var fname = document.getElementById('firstname').value;
            var lname = document.getElementById('lastname').value;
            var job = document.getElementById('job').value;
            var email_add = document.getElementById('email_add').value;
            var tel_num = document.getElementById('tel_num').value;
            var company = document.getElementById('company').value;
            var off_add = document.getElementById('off_add').value;
            var tin = document.getElementById('tin').value;
            var com_tel_num = document.getElementById('com_tel_num').value;
            

            		$("[id=edituname]").attr("value", fname); 
					$("[id=editlname]").attr("value", lname); 
					$("[id=editjob]").attr("value", job); 
					$("[id=editemail]").attr("value", email_add); 
					$("[id=edittel]").attr("value", tel_num); 
					$("[id=editcompany]").attr("value", company); 
					$("[id=editoffadd]").attr("value", off_add); 
					$("[id=editcomtel]").attr("value", com_tel_num); 


           
                swal({
                        title: "Add Customer Details?",
                        text: "Customer details will be stored in the database.",
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
                                    url: 'INCLUDES/createcust.php',
                                    async: false,
                                    data: {
                                        _fname: fname,
                                        _lname: lname,
                                        _job: job,
                                        _email_add: email_add,
                                        _tel_num: tel_num,
                                        _company: company,
                                        _off_add: off_add,
                                        _tin: tin,
                                        _com_tel_num: com_tel_num
                                    },
                                    success: function(data) {
                                        

                                        swal("Customer info is added successfully! ", "Entries are saved.", "success");
                                        $('#myModal').modal('show');
                                        setTimeout(function() 
                                        {
                                            //window.location = 'mo-customersetup.php';
                                            $(editmodal).modal('show'); 
                                            
                                        },3000);
                                    },
                                    error: function(data) {
                                       
                                        swal("Error", "Something is wrong.", "error");
                                    }

                                }); 

                        
                            	
   		 			
                    

                    } 
                    else
                    {
                        swal("Cancelled", "Entries are not saved.", "error");
                    }
                });
                
             
           
            

        });
    </script>

    
            


	<script>
		$(document).ready(function() {
			App.init();
			Notification.init();
			FormWizardValidation.init();
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

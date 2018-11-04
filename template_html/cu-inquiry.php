<?php
include 'INCLUDES/userdetails.php';

//$username = $_SESSION['username'];
$searchso = $_POST['so_search'];



/*
$selectname = "SELECT * from jamfms_r_useraccount where username = '$username'";
$nameresult = mysqli_query($connect, $selectname) or die('Bad query: $sql'); 

while ($row = mysqli_fetch_assoc($nameresult) ) {
    $fname = $row['fname'];
    $mname = $row['mname'];
    $lname = $row['lname'];
    $name = $fname .' '. $mname .' '.$lname;

}*/

////$username = $_POST['username'];
$so_search = $_POST['so_search'];
$selectso = "SELECT * FROM `jamsfms_r_sales` as a inner join jamsfms_r_product as b on a.fk_prod_id = b.prod_id where a.so_id = $so_search";
$so_result = mysqli_query($connect, $selectso) or die('Bad query: $sql'); 

while ($row1 = mysqli_fetch_assoc($so_result)) {
                                                	$ID = $row1['so_id'];
                                                    $cust = $row1['customer_code'];
                                                    $so = $row1['po_num'];
                                                    $qty = $row1['so_qty'];
                                                    $ddate = $row1['deldate'];
                                                    $product = $row1['prod_name'];

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
					<li class="active"><a href="cu-home.php"><i class="fas fa-question-home"></i> <span>Home</span></a></li>
					<li><a href="cu-inquiry.php"><i class="fas fa-users"></i> <span>PO Inquiry</span></a></li></li>
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
			<h1 class="page-header">Customer Inquiry Page</h1>
			<!-- end page-header -->
			
			<!-- begin row -->
			<div class="row">
			    <!-- begin col-2 -->
			   
			    <!-- end col-2 -->
			    <!-- begin col-10 -->
			    <div class="col-lg-10">
                    <div class="panel panel-inverse" data-sortable-id="form-plugins-16">
                    	<!-- begin panel-heading -->
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                            </div>
                            <h4 class="panel-title"><span class="label label-success pull-left m-r-10">NEW</span>Purchase Order</h4>
                        </div>
                    	<!-- end panel-heading -->
                    	<!-- begin panel-body -->
                        <div class="panel-body panel-form">

                            <form class="form-horizontal form-bordered">
								<div class="form-group row">
									<label class="col-md-4 col-form-label">Sales Order Number</label>
									<div class="col-md-8">
										<div class="input-group">
											<input id="print_so" disabled value="<?php echo $so_search ?>"  type="text" class="form-control"  />
											
										</div>
									</div>
								</div>
								<div class="form-group row">

                            <form class="form-horizontal form-bordered">
									<label class="col-md-4 col-form-label">Customer Code</label>
									<div class="col-md-8">
										<div class="input-group">
											<input disabled value="<?php echo $cust ?>" id="clipboard-default" type="text" class="form-control" />
										</div>
									</div>
								</div>

                            <form class="form-horizontal form-bordered">
								<div class="form-group row">
									<label class="col-md-4 col-form-label">Product</label>
									<div class="col-md-8">
										<div class="input-group">
											<input id="print_so" disabled value="<?php echo $product ?>"  type="text" class="form-control"  />
											
										</div>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-md-4 col-form-label">Quantity</label>
									<div class="col-md-8">
										<div class="input-group">
											<input disabled value="<?php echo $qty ?>" id="clipboard-default" type="text" class="form-control" />
										</div>
									</div>
								</div>
								<div class="form-group row">
									<label class="col-md-4 col-form-label">Date of Delivery</label>
									<div class="col-md-8">
										<div class="input-group">
											<input disabled value="<?php echo $ddate ?>" id="clipboard-default" type="text" class="form-control"  />
											
										</div>
									</div>
								</div>
								<div style="padding: 20px; text-align: right;"><button id="btn_print" type="button" class="btn btn-lime btn-lg" data-toggle="modal" data-target="#modal-dialog"><i class="fas fa-print"></i>&nbspPrint</button></div>
							</form>
                        </div>

                        <div style="display: none;" id="printso">
                        	<center>
                        	<h1>JAMS Inc.</h1>
                        	<h3>Purchase Order Inquiry</h3>
                        	<h4>Tandang Sora, Quezon City</h4>
                        	<br/>
                        	<br/>
                        	<br/>
                        	<br/>
                        	<br/>
                        	</center>
                        	<div style="text-align: left; font-size: 24px;">
                        	<p>Purchase Order: <strong><?php echo $so_search;?></strong></p>
                        	<p>Name: <strong><?php echo $name;?></strong></p>
                        	<p id="datetime">Date: <strong></strong></p>
                        	<p>Product: <strong><?php echo $product;?></strong></p>
                        	<p>Quantity: <strong><?php echo $qty;?></strong></p>
                        	<p>Date of Delivery: <strong><?php echo $ddate;?></strong></p>
                        	</div>
                        	
                        </div>
                        <!-- end panel-body -->
                    </div>
                        <!-- end panel-body -->
                    </div>
			    </div>

			    <!-- end col-10 -->
			</div>
			<!-- end row -->
		</div>







		
		<!-- end #content -->
		

                                   			<div class="modal fade" id="edit">
																<div class="modal-dialog">
																	<div class="modal-content">
																		<div class="modal-header">
																			<h4 class="modal-title">Sales Order</h4>
																			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
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
            <script type="text/javascript">
            	$("#btn_print").click(function(e){
            			$("#printso").removeAttr("style");
            			$("#printso").print({
            				
            				stylesheet: "INCLUDES/po-print.css"
            			});
            			$("#printso").prop("style", "display:none;");
            	});
            </script>


	<script>
		$(document).ready(function() {
			App.init();
			Notification.init();
			TableManageCombine.init();
		});
	</script>
	<script src="../assets/plugins/clipboard/clipboard.min.js"></script>
	<script src="../assets/js/demo/form-plugins.demo.min.js"></script>
	<script type="text/javascript" src="../assets/js/jquery/jQuery.print-master/jQuery.print.js"></script>


<p>Date/Time: <span id="datetime"></span></p>

<script>
var dt = new Date();
document.getElementById("datetime").innerHTML = dt.toLocaleString();
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
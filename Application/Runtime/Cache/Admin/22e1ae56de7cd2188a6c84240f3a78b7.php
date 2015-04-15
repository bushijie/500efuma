<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
	<meta charset="utf-8" />
	<title>我的傻逼主页-后台管理系统</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta name="MobileOptimized" content="320">
	<meta content="" name="description" />
	<meta content="" name="author" />
	<!-- BEGIN GLOBAL MANDATORY STYLES -->          
	<link href="/Template/admin/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<link href="/Template/admin/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<link href="/Template/admin/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
	<!-- END GLOBAL MANDATORY STYLES -->
	<!-- BEGIN THEME STYLES --> 
	<link href="/Template/admin/css/style-metronic.css" rel="stylesheet" type="text/css"/>
	<link href="/Template/admin/css/style.css" rel="stylesheet" type="text/css"/>
	<link href="/Template/admin/css/style-responsive.css" rel="stylesheet" type="text/css"/>
	<link href="/Template/admin/css/plugins.css" rel="stylesheet" type="text/css"/>
	<link href="/Template/admin/css/themes/default.css" rel="stylesheet" type="text/css" id="style_color"/>
	<link href="/Template/admin/css/custom.css" rel="stylesheet" type="text/css"/>
	<!-- END THEME STYLES -->
	<link rel="shortcut icon" href="/favicon.ico" />
</head>
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->   
<!--[if lt IE 9]>
<script src="/Template/admin/plugins/respond.min.js"></script>
<script src="/Template/admin/plugins/excanvas.min.js"></script> 
<![endif]-->   
<script src="/Template/admin/plugins/jquery-1.10.2.min.js" type="text/javascript"></script>
<script src="/Template/admin/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>    
<script src="/Template/admin/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/Template/admin/plugins/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js" type="text/javascript" ></script>
<script src="/Template/admin/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="/Template/admin/plugins/jquery.blockui.min.js" type="text/javascript"></script>  
<script src="/Template/admin/plugins/jquery.cookie.min.js" type="text/javascript"></script>
<script src="/Template/admin/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
<script src="/Template/admin/plugins/bootbox/bootbox.min.js" type="text/javascript" ></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="/Template/admin/scripts/app.js"></script>
<script>
	jQuery(document).ready(function() {       
	   App.init();
	});
</script>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="main_body" style="background-color: #FFFFFF !important;">
	<!-- BEGIN PAGE -->
	<div class="page-content" style="margin-left: 0px;overflow-x: hidden;padding: 0px !important;">
		<!-- BEGIN PAGE CONTENT-->
		<div class="row">
	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
		<div class="dashboard-stat blue">
			<div class="visual">
				<i class="fa fa-comments"></i>
			</div>
			<div class="details">
				<div class="number">1349</div>
				<div class="desc">New Feedbacks</div>
			</div>
			<a class="more" href="#"> View more <i
				class="m-icon-swapright m-icon-white"></i>
			</a>
		</div>
	</div>
	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
		<div class="dashboard-stat green">
			<div class="visual">
				<i class="fa fa-shopping-cart"></i>
			</div>
			<div class="details">
				<div class="number">549</div>
				<div class="desc">New Orders</div>
			</div>
			<a class="more" href="#"> View more <i
				class="m-icon-swapright m-icon-white"></i>
			</a>
		</div>
	</div>
	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
		<div class="dashboard-stat purple">
			<div class="visual">
				<i class="fa fa-globe"></i>
			</div>
			<div class="details">
				<div class="number">+89%</div>
				<div class="desc">Brand Popularity</div>
			</div>
			<a class="more" href="#"> View more <i
				class="m-icon-swapright m-icon-white"></i>
			</a>
		</div>
	</div>
	<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
		<div class="dashboard-stat yellow">
			<div class="visual">
				<i class="fa fa-bar-chart-o"></i>
			</div>
			<div class="details">
				<div class="number">12,5M$</div>
				<div class="desc">Total Profit</div>
			</div>
			<a class="more" href="#"> View more <i
				class="m-icon-swapright m-icon-white"></i>
			</a>
		</div>
	</div>
</div>

<!-- END DASHBOARD STATS -->
<div class="clearfix"></div>
<div class="row">
	<div class="col-md-6 col-sm-6">
		<!-- BEGIN PORTLET-->
		<div class="portlet solid bordered light-grey">
			<div class="portlet-title">
				<div class="caption">
					<i class="fa fa-bar-chart-o"></i>Site Visits
				</div>
				<div class="tools">
					<div class="btn-group" data-toggle="buttons">
						<label class="btn default btn-sm active"> <input
							type="radio" name="options" class="toggle" id="option1">Users
						</label> <label class="btn default btn-sm"> <input type="radio"
							name="options" class="toggle" id="option2">Feedbacks
						</label>
					</div>
				</div>
			</div>
			<div class="portlet-body">
				<div id="site_statistics_loading">
					<img src="/Template/admin/img/loading.gif" alt="loading" />
				</div>
				<div id="site_statistics_content" class="display-none">
					<div id="site_statistics" class="chart"></div>
				</div>
			</div>
		</div>
		<!-- END PORTLET-->
	</div>
	<div class="col-md-6 col-sm-6">
		<div class="portlet box blue">
			<div class="portlet-title">
				<div class="caption">
					<i class="fa fa-bell-o"></i>Recent Activities
				</div>
				<div class="actions">
					<div class="btn-group">
						<a class="btn btn-sm default" href="#" data-toggle="dropdown"
							data-hover="dropdown" data-close-others="true"> Filter By <i
							class="fa fa-angle-down"></i>
						</a>
						<div
							class="dropdown-menu hold-on-click dropdown-checkboxes pull-right">
							<label><input type="checkbox" /> Finance</label> <label><input
								type="checkbox" checked="" /> Membership</label> <label><input
								type="checkbox" /> Customer Support</label> <label><input
								type="checkbox" checked="" /> HR</label> <label><input
								type="checkbox" /> System</label>
						</div>
					</div>
				</div>
			</div>
			<div class="portlet-body">
				<div class="scroller" style="height: 300px;" data-always-visible="1"
					data-rail-visible="0">
					<ul class="feeds">
						<li><a href="#">
								<div class="col1">
									<div class="cont">
										<div class="cont-col1">
											<div class="label label-sm label-success">
												<i class="fa fa-bar-chart-o"></i>
											</div>
										</div>
										<div class="cont-col2">
											<div class="desc">Finance Report for year 2013 has been
												released.</div>
										</div>
									</div>
								</div>
								<div class="col2">
									<div class="date">20 mins</div>
								</div>
						</a></li>
						<li>
							<div class="col1">
								<div class="cont">
									<div class="cont-col1">
										<div class="label label-sm label-danger">
											<i class="fa fa-user"></i>
										</div>
									</div>
									<div class="cont-col2">
										<div class="desc">You have 5 pending membership that
											requires a quick review.</div>
									</div>
								</div>
							</div>
							<div class="col2">
								<div class="date">24 mins</div>
							</div>
						</li>
						<li>
							<div class="col1">
								<div class="cont">
									<div class="cont-col1">
										<div class="label label-sm label-info">
											<i class="fa fa-check"></i>
										</div>
									</div>
									<div class="cont-col2">
										<div class="desc">
											You have 4 pending tasks. <span
												class="label label-sm label-warning "> Take action <i
												class="fa fa-share"></i>
											</span>
										</div>
									</div>
								</div>
							</div>
							<div class="col2">
								<div class="date">Just now</div>
							</div>
						</li>
						<li>
							<div class="col1">
								<div class="cont">
									<div class="cont-col1">
										<div class="label label-sm label-success">
											<i class="fa fa-user"></i>
										</div>
									</div>
									<div class="cont-col2">
										<div class="desc">You have 5 pending membership that
											requires a quick review.</div>
									</div>
								</div>
							</div>
							<div class="col2">
								<div class="date">24 mins</div>
							</div>
						</li>
						<li>
							<div class="col1">
								<div class="cont">
									<div class="cont-col1">
										<div class="label label-sm label-warning">
											<i class="fa fa-bell-o"></i>
										</div>
									</div>
									<div class="cont-col2">
										<div class="desc">
											Web server hardware needs to be upgraded. <span
												class="label label-sm label-default ">Overdue</span>
										</div>
									</div>
								</div>
							</div>
							<div class="col2">
								<div class="date">2 hours</div>
							</div>
						</li>
						<li><a href="#">
								<div class="col1">
									<div class="cont">
										<div class="cont-col1">
											<div class="label label-sm label-info">
												<i class="fa fa-briefcase"></i>
											</div>
										</div>
										<div class="cont-col2">
											<div class="desc">IPO Report for year 2013 has been
												released.</div>
										</div>
									</div>
								</div>
								<div class="col2">
									<div class="date">20 mins</div>
								</div>
						</a></li>
					</ul>
				</div>
				<div class="scroller-footer">
					<div class="pull-right">
						<a href="#">See All Records <i
							class="m-icon-swapright m-icon-gray"></i></a> &nbsp;
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="clearfix"></div>


<script src="/Template/admin/plugins/flot/jquery.flot.js" type="text/javascript"></script>
<script src="/Template/admin/plugins/flot/jquery.flot.resize.js" type="text/javascript"></script>
<script src="/Template/admin/scripts/index.js" type="text/javascript"></script>

<script>
	jQuery(document).ready(function() {    
	   //App.init(); // initlayout and core plugins
	   Index.init();
	   Index.initCharts(); // init index page's custom scripts
	});
</script>	
		<!-- END PAGE CONTENT-->
	</div>
</body>

<!-- END BODY -->
</html>
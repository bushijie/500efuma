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
	<meta content="" name="description" />
	<meta content="" name="author" />
	<meta name="MobileOptimized" content="320">
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
	<link href="/Template/admin/css/content.css" rel="stylesheet" type="text/css"/>
	<link href="/Template/admin/css/logo.css" rel="stylesheet" type="text/css"/>
	<!-- END THEME STYLES -->
	<link rel="shortcut icon" href="favicon.ico" />
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="page-header-fixed">
	<!-- BEGIN HEADER -->   
	<div class="header navbar navbar-inverse navbar-fixed-top">
		<!-- BEGIN TOP NAVIGATION BAR -->
		<div class="header-inner">
			<!-- BEGIN LOGO -->  
			<a class="navbar-brand" style="width: 230px;" href="javascript:;">
	<span id="logowhite">500e</span>
	<span id="logored">FUMA</span>
</a>
			<!-- END LOGO -->
			<!-- BEGIN RESPONSIVE MENU TOGGLER --> 
			<a href="javascript:;" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			<img src="/Template/admin/img/menu-toggler.png" alt="" />
			</a> 
			<!-- END RESPONSIVE MENU TOGGLER -->
			<!-- BEGIN TOP NAVIGATION MENU -->
			<ul class="nav navbar-nav pull-right">
				<!-- BEGIN NOTIFICATION DROPDOWN -->
				<li class="dropdown" id="header_notification_bar">
	<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
		data-close-others="true">
	<i class="fa fa-warning"></i>
	<span class="badge">6</span>
	</a>
	<ul class="dropdown-menu extended notification">
		<li>
			<p>You have 14 new notifications</p>
		</li>
		<li>
			<ul class="dropdown-menu-list scroller" style="height: 250px;">
				<li>  
					<a href="#">
					<span class="label label-icon label-success"><i class="fa fa-plus"></i></span>
					New user registered. 
					<span class="time">Just now</span>
					</a>
				</li>
				<li>  
					<a href="#">
					<span class="label label-icon label-danger"><i class="fa fa-bolt"></i></span>
					Server #12 overloaded. 
					<span class="time">15 mins</span>
					</a>
				</li>
				<li>  
					<a href="#">
					<span class="label label-icon label-warning"><i class="fa fa-bell-o"></i></span>
					Server #2 not responding.
					<span class="time">22 mins</span>
					</a>
				</li>
				<li>  
					<a href="#">
					<span class="label label-icon label-info"><i class="fa fa-bullhorn"></i></span>
					Application error.
					<span class="time">40 mins</span>
					</a>
				</li>
				<li>  
					<a href="#">
					<span class="label label-icon label-danger"><i class="fa fa-bolt"></i></span>
					Database overloaded 68%. 
					<span class="time">2 hrs</span>
					</a>
				</li>
				<li>  
					<a href="#">
					<span class="label label-icon label-danger"><i class="fa fa-bolt"></i></span>
					2 user IP blocked.
					<span class="time">5 hrs</span>
					</a>
				</li>
				<li>  
					<a href="#">
					<span class="label label-icon label-warning"><i class="fa fa-bell-o"></i></span>
					Storage Server #4 not responding.
					<span class="time">45 mins</span>
					</a>
				</li>
				<li>  
					<a href="#">
					<span class="label label-icon label-info"><i class="fa fa-bullhorn"></i></span>
					System Error.
					<span class="time">55 mins</span>
					</a>
				</li>
				<li>  
					<a href="#">
					<span class="label label-icon label-danger"><i class="fa fa-bolt"></i></span>
					Database overloaded 68%. 
					<span class="time">2 hrs</span>
					</a>
				</li>
			</ul>
		</li>
		<li class="external">   
			<a href="#">See all notifications <i class="m-icon-swapright"></i></a>
		</li>
	</ul>
</li>
				<!-- END NOTIFICATION DROPDOWN -->
				<!-- BEGIN INBOX DROPDOWN -->
				<li class="dropdown" id="header_inbox_bar">
	<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
		data-close-others="true">
	<i class="fa fa-envelope"></i>
	<span class="badge">5</span>
	</a>
	<ul class="dropdown-menu extended inbox">
		<li>
			<p>You have 12 new messages</p>
		</li>
		<li>
			<ul class="dropdown-menu-list scroller" style="height: 250px;">
				<li>  
					<a href="inbox.html?a=view">
					<span class="photo"><img src="/Template/admin/img/avatar2.jpg" alt=""/></span>
					<span class="subject">
					<span class="from">Lisa Wong</span>
					<span class="time">Just Now</span>
					</span>
					<span class="message">
					Vivamus sed auctor nibh congue nibh. auctor nibh
					auctor nibh...
					</span>  
					</a>
				</li>
				<li>  
					<a href="inbox.html?a=view">
					<span class="photo"><img src="/Template/admin/img/avatar3.jpg" alt=""/></span>
					<span class="subject">
					<span class="from">Richard Doe</span>
					<span class="time">16 mins</span>
					</span>
					<span class="message">
					Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh
					auctor nibh...
					</span>  
					</a>
				</li>
				<li>  
					<a href="inbox.html?a=view">
					<span class="photo"><img src="/Template/admin/img/avatar1.jpg" alt=""/></span>
					<span class="subject">
					<span class="from">Bob Nilson</span>
					<span class="time">2 hrs</span>
					</span>
					<span class="message">
					Vivamus sed nibh auctor nibh congue nibh. auctor nibh
					auctor nibh...
					</span>  
					</a>
				</li>
				<li>  
					<a href="inbox.html?a=view">
					<span class="photo"><img src="/Template/admin/img/avatar2.jpg" alt=""/></span>
					<span class="subject">
					<span class="from">Lisa Wong</span>
					<span class="time">40 mins</span>
					</span>
					<span class="message">
					Vivamus sed auctor 40% nibh congue nibh...
					</span>  
					</a>
				</li>
				<li>  
					<a href="inbox.html?a=view">
					<span class="photo"><img src="/Template/admin/img/avatar3.jpg" alt=""/></span>
					<span class="subject">
					<span class="from">Richard Doe</span>
					<span class="time">46 mins</span>
					</span>
					<span class="message">
					Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh
					auctor nibh...
					</span>  
					</a>
				</li>
			</ul>
		</li>
		<li class="external">   
			<a href="inbox.html">See all messages <i class="m-icon-swapright"></i></a>
		</li>
	</ul>
</li>
				<!-- END INBOX DROPDOWN -->
				<!-- BEGIN TODO DROPDOWN -->
				<li class="dropdown" id="header_task_bar">
	<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
	<i class="fa fa-tasks"></i>
	<span class="badge">5</span>
	</a>
	<ul class="dropdown-menu extended tasks">
		<li>
			<p>You have 12 pending tasks</p>
		</li>
		<li>
			<ul class="dropdown-menu-list scroller" style="height: 250px;">
				<li>  
					<a href="#">
					<span class="task">
					<span class="desc">New release v1.2</span>
					<span class="percent">30%</span>
					</span>
					<span class="progress">
					<span style="width: 40%;" class="progress-bar progress-bar-success" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
					<span class="sr-only">40% Complete</span>
					</span>
					</span>
					</a>
				</li>
				<li>  
					<a href="#">
					<span class="task">
					<span class="desc">Application deployment</span>
					<span class="percent">65%</span>
					</span>
					<span class="progress progress-striped">
					<span style="width: 65%;" class="progress-bar progress-bar-danger" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
					<span class="sr-only">65% Complete</span>
					</span>
					</span>
					</a>
				</li>
				<li>  
					<a href="#">
					<span class="task">
					<span class="desc">Mobile app release</span>
					<span class="percent">98%</span>
					</span>
					<span class="progress">
					<span style="width: 98%;" class="progress-bar progress-bar-success" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100">
					<span class="sr-only">98% Complete</span>
					</span>
					</span>
					</a>
				</li>
				<li>  
					<a href="#">
					<span class="task">
					<span class="desc">Database migration</span>
					<span class="percent">10%</span>
					</span>
					<span class="progress progress-striped">
					<span style="width: 10%;" class="progress-bar progress-bar-warning" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
					<span class="sr-only">10% Complete</span>
					</span>
					</span>
					</a>
				</li>
				<li>  
					<a href="#">
					<span class="task">
					<span class="desc">Web server upgrade</span>
					<span class="percent">58%</span>
					</span>
					<span class="progress progress-striped">
					<span style="width: 58%;" class="progress-bar progress-bar-info" aria-valuenow="58" aria-valuemin="0" aria-valuemax="100">
					<span class="sr-only">58% Complete</span>
					</span>
					</span>
					</a>
				</li>
				<li>  
					<a href="#">
					<span class="task">
					<span class="desc">Mobile development</span>
					<span class="percent">85%</span>
					</span>
					<span class="progress progress-striped">
					<span style="width: 85%;" class="progress-bar progress-bar-success" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
					<span class="sr-only">85% Complete</span>
					</span>
					</span>
					</a>
				</li>
				<li>  
					<a href="#">
					<span class="task">
					<span class="desc">New UI release</span>
					<span class="percent">18%</span>
					</span>
					<span class="progress progress-striped">
					<span style="width: 18%;" class="progress-bar progress-bar-important" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100">
					<span class="sr-only">18% Complete</span>
					</span>
					</span>
					</a>
				</li>
			</ul>
		</li>
		<li class="external">   
			<a href="#">See all tasks <i class="m-icon-swapright"></i></a>
		</li>
	</ul>
</li>
				<!-- END TODO DROPDOWN -->
				<!-- BEGIN USER LOGIN DROPDOWN -->
				<li class="dropdown user">
	<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
	<img alt="" src="/Template/admin/img/avatar1_small.jpg"/>
	<span class="username">Bob Nilson</span>
	<i class="fa fa-angle-down"></i>
	</a>
	<ul class="dropdown-menu">
		<li><a href="extra_profile.html"><i class="fa fa-user"></i> My Profile</a></li>
		<li><a href="page_calendar.html"><i class="fa fa-calendar"></i> My Calendar</a></li>
		<li><a href="inbox.html"><i class="fa fa-envelope"></i> My Inbox <span class="badge badge-danger">3</span></a></li>
		<li><a href="#"><i class="fa fa-tasks"></i> My Tasks <span class="badge badge-success">7</span></a></li>
		<li class="divider"></li>
		<li><a href="javascript:;" id="trigger_fullscreen"><i class="fa fa-move"></i> Full Screen</a></li>
		<li><a href="extra_lock.html"><i class="fa fa-lock"></i> Lock Screen</a></li>
		<li><a href="login.html"><i class="fa fa-key"></i> Log Out</a></li>
	</ul>
</li>
				<!-- END USER LOGIN DROPDOWN -->
			</ul>
			<!-- END TOP NAVIGATION MENU -->
		</div>
		<!-- END TOP NAVIGATION BAR -->
	</div>
	<!-- END HEADER -->
	<div class="clearfix"></div>
	<!-- BEGIN CONTAINER -->   
	<div class="page-container">
		<!-- BEGIN SIDEBAR -->
		<div class="page-sidebar navbar-collapse collapse">
	<!-- BEGIN SIDEBAR MENU -->        
	<ul class="page-sidebar-menu">
		<li>
			<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
			<div class="sidebar-toggler hidden-phone"></div>
			<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
		</li>
		<li>
			<!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
			<form class="sidebar-search" action="extra_search.html" method="POST">
				<div class="form-container">
					<div class="input-box">
						<a href="javascript:;" class="remove"></a>
						<input type="text" placeholder="请输入搜索内容"/>
						<input type="button" class="submit" value=" "/>
					</div>
				</div>
			</form>
			<!-- END RESPONSIVE QUICK SEARCH FORM -->
		</li>
		
		<?php if(is_array($sidebar)): $i = 0; $__LIST__ = $sidebar;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$bar): $mod = ($i % 2 );++$i;?><!-- active | active_bar -->
			<?php if($bar["key"] == $active_bar): ?><li class="menubar active">
			<?php else: ?>
				<li class="menubar"><?php endif; ?>
				<?php if($bar["child"] == null): ?><a target="frame" href="<?php echo ($bar["url"]); ?>">
				<?php else: ?>
					<a href="javascript:;"><?php endif; ?>
					<i class="fa <?php echo ($bar["icon"]); ?>"></i> 
					<span class="title"><?php echo ($bar["name"]); ?></span>
					<span class="selected"></span>
					<?php if($bar["child"] != null): ?><span class="arrow "></span><?php endif; ?>
				</a>
				<?php if($bar["child"] != null): ?><ul class="sub-menu">
						<?php if(is_array($bar["child"])): $i = 0; $__LIST__ = $bar["child"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$child): $mod = ($i % 2 );++$i;?><li>
								<a target="frame" href="<?php echo ($child["url"]); ?>"><?php echo ($child["name"]); ?></a>
							</li><?php endforeach; endif; else: echo "" ;endif; ?>
					</ul><?php endif; ?>
			</li><?php endforeach; endif; else: echo "" ;endif; ?>
	</ul>
	<!-- END SIDEBAR MENU -->
</div>

		<!-- END SIDEBAR -->
		<!-- BEGIN PAGE -->
		<div class="page-content">
			<!-- BEGIN STYLE CUSTOMIZER -->
			<div class="theme-panel hidden-xs hidden-sm">
	<div class="toggler"></div>
	<div class="toggler-close"></div>
	<div class="theme-options">
		<div class="theme-option theme-colors clearfix">
			<span>THEME COLOR</span>
			<ul>
				<li class="color-black current color-default" data-style="default"></li>
				<li class="color-blue" data-style="blue"></li>
				<li class="color-brown" data-style="brown"></li>
				<li class="color-purple" data-style="purple"></li>
				<li class="color-grey" data-style="grey"></li>
				<li class="color-white color-light" data-style="light"></li>
			</ul>
		</div>
		<div class="theme-option">
			<span>Layout</span>
			<select class="layout-option form-control input-small">
				<option value="fluid" selected="selected">Fluid</option>
				<option value="boxed">Boxed</option>
			</select>
		</div>
		<div class="theme-option">
			<span>Header</span>
			<select class="header-option form-control input-small">
				<option value="fixed" selected="selected">Fixed</option>
				<option value="default">Default</option>
			</select>
		</div>
		<div class="theme-option">
			<span>Sidebar</span>
			<select class="sidebar-option form-control input-small">
				<option value="fixed">Fixed</option>
				<option value="default" selected="selected">Default</option>
			</select>
		</div>
		<div class="theme-option">
			<span>Footer</span>
			<select class="footer-option form-control input-small">
				<option value="fixed">Fixed</option>
				<option value="default" selected="selected">Default</option>
			</select>
		</div>
	</div>
</div>
			<!-- END BEGIN STYLE CUSTOMIZER -->           
			<!-- BEGIN PAGE HEADER-->
			<div class="row">
	<div class="col-md-12">
		<!-- BEGIN PAGE TITLE & BREADCRUMB-->
		<h3 class="page-title">
			Blank Page <small>blank page</small>
		</h3>
		<ul class="page-breadcrumb breadcrumb">
			<li>
				<i class="fa fa-home"></i>
				<a href="index.html">Home</a> 
				<i class="fa fa-angle-right"></i>
			</li>
			<li>
				<a href="#">Layouts</a>
				<i class="fa fa-angle-right"></i>
			</li>
			<li><a href="#">Blank Page</a></li>
		</ul>
		<!-- END PAGE TITLE & BREADCRUMB-->
	</div>
</div>
			<!-- END PAGE HEADER-->
			<!-- BEGIN PAGE CONTENT-->
			<iframe id="frame" name="frame" class="content" src="/Home/index" scrolling="auto" frameborder="0" style="width: 100%;"></iframe>
		</div>
		<!-- END PAGE -->    
	</div>
	<!-- END CONTAINER -->
	<!-- BEGIN FOOTER -->
	<div class="footer">
	<div class="footer-inner">
		2013 &copy; Metronic by keenthemes.
	</div>
	<div class="footer-tools">
		<span class="go-top">
		<i class="fa fa-angle-up"></i>
		</span>
	</div>
</div>
	<!-- END FOOTER -->
	<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
	<!-- BEGIN CORE PLUGINS -->   
<!--[if lt IE 9]>
<script src="/Template/admin/plugins/respond.min.js"></script>
<script src="/Template/admin/plugins/excanvas.min.js"></script> 
<![endif]-->   
<script src="/Template/admin/plugins/jquery-1.10.2.min.js" type="text/javascript"></script>
<script src="/Template/admin/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="/Template/admin/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js" type="text/javascript"></script>      
<script src="/Template/admin/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/Template/admin/plugins/bootstrap-hover-dropdown/twitter-bootstrap-hover-dropdown.min.js" type="text/javascript" ></script>
<script src="/Template/admin/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="/Template/admin/plugins/jquery.blockui.min.js" type="text/javascript"></script>  
<script src="/Template/admin/plugins/jquery.cookie.min.js" type="text/javascript"></script>
<script src="/Template/admin/plugins/uniform/jquery.uniform.min.js" type="text/javascript" ></script>
<!-- END CORE PLUGINS -->
<script src="/Template/admin/scripts/app.js"></script>      
<script>
	jQuery(document).ready(function() {    
		App.init();
		//iframe框自动适应高度
		$("#frame").load(function(){
			changeFrame();
		});

		function changeFrame(){
			var mainheight = $("#frame").contents().find("body").height()+30;
			$("#frame").height(mainheight);
		}

		
		//1级菜单的点击事件处理
		$(".menubar").click(function(){
			if($(this).find('.sub-menu').length == 0){
				$(".menubar").removeClass('active');
				$(this).addClass('active');
			}
		});

		//2级菜单的点击事件处理
		$(".menubar .sub-menu li").click(function(){
			$(".menubar").removeClass('active');
			$(".menubar .sub-menu li").removeClass('active');
			$(this).parents('.menubar').addClass('active');
			$(this).addClass('active');
		});
		
	});
</script>
	<!-- END JAVASCRIPTS -->
</body>
</html>
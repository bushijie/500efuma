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
		<link href="/Template/admin/css/pages/blog.css" rel="stylesheet" type="text/css"/>
<style>
.view-content code {
	border: 0px solid #e1e1e1 !important;
	-webkit-box-shadow: 0 0px 0px rgba(0, 0, 0, 0.1) !important;
	-moz-box-shadow: 0 0px 0px rgba(0, 0, 0, 0.1) !important;
}
</style>

<div class="row">
	<div class="col-md-12 blog-page">
		<div class="row">
			<div class="col-md-12 article-block">
				<h3><?php echo ($info['title']); ?></h3>
				<div class="blog-tag-data">
					<!-- 
					<img src="/Template/admin/img/gallery/item_img.jpg" class="img-responsive" alt="">
					 -->
					<div class="row">
						<div class="col-md-6">
							<ul class="list-inline blog-tags">
								<li>
									<i class="fa fa-tags"></i> 
									<?php if(is_array($tags)): $i = 0; $__LIST__ = $tags;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tag): $mod = ($i % 2 );++$i;?><a href="#"><?php echo ($tag); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
								</li>
							</ul>
						</div>
						<div class="col-md-6 blog-tag-data-inner">
							<ul class="list-inline">
								<li><i class="fa fa-calendar"></i> <a href="#"><?php echo ($info['ctm']); ?></a></li>
								<li><i class="fa fa-comments"></i> <a href="#">38 Comments</a></li>
							</ul>
						</div>
					</div>
				</div>
				<!--end news-tag-data-->
				<div class="view-content">
				<?php echo ($info['content']); ?>
				</div>
				<hr>
				<div class="media">
					<h3>Comments</h3>
					<a href="#" class="pull-left">
					<img alt="" src="/Template/admin/img/blog/9.jpg" class="media-object">
					</a>
					<div class="media-body">
						<h4 class="media-heading">Media heading <span>5 hours ago / <a href="#">Reply</a></span></h4>
						<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
						<hr>
						<!-- Nested media object -->
						<div class="media">
							<a href="#" class="pull-left">
							<img alt="" src="/Template/admin/img/blog/5.jpg" class="media-object">
							</a>
							<div class="media-body">
								<h4 class="media-heading">Media heading <span>17 hours ago / <a href="#">Reply</a></span></h4>
								<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
							</div>
						</div>
						<!--end media-->
						<hr>
						<div class="media">
							<a href="#" class="pull-left">
							<img alt="" src="/Template/admin/img/blog/7.jpg" class="media-object">
							</a>
							<div class="media-body">
								<h4 class="media-heading">Media heading <span>2 days ago / <a href="#">Reply</a></span></h4>
								<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
							</div>
						</div>
						<!--end media-->
					</div>
				</div>
				<!--end media-->
				<div class="media">
					<a href="#" class="pull-left">
					<img alt="" src="/Template/admin/img/blog/6.jpg" class="media-object">
					</a>
					<div class="media-body">
						<h4 class="media-heading">Media heading <span>July 5,2013 / <a href="#">Reply</a></span></h4>
						<p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
					</div>
				</div>
				<!--end media-->
				<hr>
				<div class="post-comment">
					<h3>Leave a Comment</h3>
					<form role="form" action="#">
						<div class="form-group">
							<label class="control-label">Name<span class="required">*</span></label>
							<input type="text" class="form-control">
						</div>
						<div class="form-group">
							<label class="control-label">Email<span class="required">*</span></label>
							<input type="text" class="form-control">
						</div>
						<div class="form-group">
							<label class="control-label">Message<span class="required">*</span></label>
							<textarea class="col-md-10 form-control" rows="8"></textarea>
						</div>
						<button class="margin-top-20 btn blue" type="submit">Post a Comment</button>
					</form>
				</div>
			</div>
			<!--end col-md-9-->
		</div>
	</div>
</div>

<script type="text/javascript" src="/Template/admin/plugins/SyntaxHighlighter3/scripts/shCore.js"></script>

<script type="text/javascript" src="/Template/admin/plugins/SyntaxHighlighter3/scripts/shAutoloader.js"></script>
<script type="text/javascript" src="/Template/admin/plugins/SyntaxHighlighter3/scripts/shBrushAppleScript.js"></script>
<script type="text/javascript" src="/Template/admin/plugins/SyntaxHighlighter3/scripts/shBrushAS3.js"></script>
<script type="text/javascript" src="/Template/admin/plugins/SyntaxHighlighter3/scripts/shBrushBash.js"></script>
<script type="text/javascript" src="/Template/admin/plugins/SyntaxHighlighter3/scripts/shBrushColdFusion.js"></script>
<script type="text/javascript" src="/Template/admin/plugins/SyntaxHighlighter3/scripts/shBrushCpp.js"></script>
<script type="text/javascript" src="/Template/admin/plugins/SyntaxHighlighter3/scripts/shBrushCSharp.js"></script>
<script type="text/javascript" src="/Template/admin/plugins/SyntaxHighlighter3/scripts/shBrushCss.js"></script>
<script type="text/javascript" src="/Template/admin/plugins/SyntaxHighlighter3/scripts/shBrushDelphi.js"></script>
<script type="text/javascript" src="/Template/admin/plugins/SyntaxHighlighter3/scripts/shBrushDiff.js"></script>
<script type="text/javascript" src="/Template/admin/plugins/SyntaxHighlighter3/scripts/shBrushErlang.js"></script>
<script type="text/javascript" src="/Template/admin/plugins/SyntaxHighlighter3/scripts/shBrushGroovy.js"></script>
<script type="text/javascript" src="/Template/admin/plugins/SyntaxHighlighter3/scripts/shBrushJava.js"></script>
<script type="text/javascript" src="/Template/admin/plugins/SyntaxHighlighter3/scripts/shBrushJavaFX.js"></script>
<script type="text/javascript" src="/Template/admin/plugins/SyntaxHighlighter3/scripts/shBrushJScript.js"></script>
<script type="text/javascript" src="/Template/admin/plugins/SyntaxHighlighter3/scripts/shBrushPerl.js"></script>
<script type="text/javascript" src="/Template/admin/plugins/SyntaxHighlighter3/scripts/shBrushPhp.js"></script>
<script type="text/javascript" src="/Template/admin/plugins/SyntaxHighlighter3/scripts/shBrushPlain.js"></script>
<script type="text/javascript" src="/Template/admin/plugins/SyntaxHighlighter3/scripts/shBrushPowerShell.js"></script>
<script type="text/javascript" src="/Template/admin/plugins/SyntaxHighlighter3/scripts/shBrushPython.js"></script>
<script type="text/javascript" src="/Template/admin/plugins/SyntaxHighlighter3/scripts/shBrushRuby.js"></script>
<script type="text/javascript" src="/Template/admin/plugins/SyntaxHighlighter3/scripts/shBrushSass.js"></script>
<script type="text/javascript" src="/Template/admin/plugins/SyntaxHighlighter3/scripts/shBrushScala.js"></script>
<script type="text/javascript" src="/Template/admin/plugins/SyntaxHighlighter3/scripts/shBrushSql.js"></script>
<script type="text/javascript" src="/Template/admin/plugins/SyntaxHighlighter3/scripts/shBrushVb.js"></script>
<script type="text/javascript" src="/Template/admin/plugins/SyntaxHighlighter3/scripts/shBrushXml.js"></script>
<script type="text/javascript" src="/Template/admin/plugins/SyntaxHighlighter3/scripts/shLegacy.js"></script>

<link href="/Template/admin/plugins/SyntaxHighlighter3/styles/shCoreDefault.css" type="text/css" rel="stylesheet" />

<script type="text/javascript">SyntaxHighlighter.all();</script>	
		<!-- END PAGE CONTENT-->
	</div>
</body>

<!-- END BODY -->
</html>
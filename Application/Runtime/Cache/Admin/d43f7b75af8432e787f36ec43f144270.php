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
	<link rel="shortcut icon" href="favicon.ico" />
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
		<!-- BEGIN PAGE LEVEL STYLES --> 
<link rel="stylesheet" type="text/css" href="/Template/admin/plugins/select2/select2_metro.css" />
<link rel="stylesheet" type="text/css" href="/Template/admin/plugins/bootstrap-markdown/css/bootstrap-markdown.min.css">
<!-- END PAGE LEVEL SCRIPTS -->
<div class="row">
	<div class="col-md-12">
		<!-- BEGIN VALIDATION STATES-->
		<div class="portlet box green">
			<div class="portlet-title">
				<div class="caption"><i class="fa fa-reorder"></i>Advance Validation</div>
				<div class="tools">
					<a href="javascript:;" class="collapse"></a>
					<a href="javascript:;" class="reload"></a>
					<a href="javascript:;" class="remove"></a>
				</div>
			</div>
			<div class="portlet-body form">
				<!-- BEGIN FORM-->
				<form action="#" id="form_sample_3" class="form-horizontal">
					<div class="form-body">
						<h3 class="form-section">Advance validation.   <small>Custom radio buttons, checkboxes and Select2 dropdowns</small></h3>
						<div class="alert alert-danger display-hide">
							<button class="close" data-close="alert"></button>
							You have some form errors. Please check below.
						</div>
						<div class="alert alert-success display-hide">
							<button class="close" data-close="alert"></button>
							Your form validation is successful!
						</div>
						<div class="form-group">
							<label class="control-label col-md-3">Name<span class="required">*</span></label>
							<div class="col-md-4">
								<input type="text" name="name" data-required="1" class="form-control"/>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label">Email Address<span class="required">*</span></label>
							<div class="col-md-4">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
									<input type="email" name="email" class="form-control" placeholder="Email Address">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3">Occupation&nbsp;&nbsp;</label>
							<div class="col-md-4">
								<input name="occupation" type="text" class="form-control"/>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3">Category<span class="required">*</span></label>
							<div class="col-md-4">
								<select class="form-control" name="category">
									<option value="">Select...</option>
									<option value="Category 1">Category 1</option>
									<option value="Category 2">Category 2</option>
									<option value="Category 3">Category 5</option>
									<option value="Category 4">Category 4</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3">Select2 Dropdown<span class="required">*</span></label>
							<div class="col-md-4">
								<select id="form_2_select2" class="form-control select2me" name="options2">
									<option value="">Select...</option>
									<option value="Option 1">Option 1</option>
									<option value="Option 2">Option 2</option>
									<option value="Option 3">Option 3</option>
									<option value="Option 4">Option 4</option>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3">Membership<span class="required">*</span></label>
							<div class="col-md-4">
								<div class="radio-list" data-error-container="#form_2_membership_error">
									<label>
									<input type="radio" name="membership" value="1" />
									Fee
									</label>
									<label>
									<input type="radio" name="membership" value="2" />
									Professional
									</label> 
								</div>
								<div id="form_2_membership_error"></div>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3">Services<span class="required">*</span></label>
							<div class="col-md-4">
								<div class="checkbox-list" data-error-container="#form_2_services_error">
									<label>
									<input type="checkbox" value="1" name="service"/> Service 1
									</label>
									<label>
									<input type="checkbox" value="2" name="service"/> Service 2
									</label>
									<label>
									<input type="checkbox" value="3" name="service"/> Service 3
									</label>
								</div>
								<span class="help-block">(select at least two)</span>
								<div id="form_2_services_error"></div>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-3">Markdown</label>
							<div class="col-md-9">
								<textarea name="markdown" data-provide="markdown" rows="10" data-error-container="#editor_error"></textarea>
								<div id="editor_error"></div>
							</div>
						</div>
					</div>
					<div class="form-actions fluid">
						<div class="col-md-offset-3 col-md-9">
							<button type="submit" class="btn green">Submit</button>
							<button type="button" class="btn default">Cancel</button>                              
						</div>
					</div>
				</form>
				<!-- END FORM-->
			</div>
			<!-- END VALIDATION STATES-->
		</div>
	</div>
</div>

<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="/Template/admin/plugins/jquery-validation/dist/jquery.validate.min.js"></script>
<script type="text/javascript" src="/Template/admin/plugins/jquery-validation/dist/additional-methods.min.js"></script>
<script type="text/javascript" src="/Template/admin/plugins/select2/select2.min.js"></script>
<script type="text/javascript" src="/Template/admin/plugins/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="/Template/admin/plugins/bootstrap-markdown/js/bootstrap-markdown.js"></script>
<script type="text/javascript" src="/Template/admin/plugins/bootstrap-markdown/lib/markdown.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<script src="/Template/admin/scripts/form-validation.js"></script> 
<script>
	jQuery(document).ready(function() {   
	   FormValidation.init();
	});
</script>	
		<!-- END PAGE CONTENT-->
	</div>
</body>

<!-- END BODY -->
</html>
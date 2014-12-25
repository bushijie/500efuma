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
		<!-- BEGIN PAGE LEVEL STYLES --> 
<link rel="stylesheet" type="text/css" href="/Template/admin/plugins/select2/select2_metro.css" />
<link rel="stylesheet" type="text/css" href="/Template/admin/plugins/bootstrap-markdown/css/bootstrap-markdown.min.css">
<link rel="stylesheet" type="text/css" href="/Template/admin/plugins/jquery-tags-input/jquery.tagsinput.css" />

<link rel="stylesheet" href="/Template/admin/plugins/jquery-file-upload/css/jquery.fileupload-ui.css" />


<!-- END PAGE LEVEL SCRIPTS -->
<div class="row">
	<div class="col-md-12">
		<!-- BEGIN VALIDATION STATES-->
		<div class="portlet box blue">
			<div class="portlet-title">
				<div class="caption"><i class="fa fa-reorder"></i>
				<?php if($action == 'create' ): ?>创建文章<?php else: ?>编辑文章【<?php echo ($article_info['title']); ?>】<?php endif; ?>
				</div>
				<div class="tools">
					<a href="javascript:;" class="collapse"></a>
					<a href="javascript:;" class="reload"></a>
					<a href="javascript:;" class="remove"></a>
				</div>
			</div>
			<div class="portlet-body form">
				<!-- BEGIN FORM-->
				<form action="#" id="form_create_article" class="form-horizontal">
					<div class="form-body">
						<div class="alert alert-danger display-hide">
							<button class="close" data-close="alert"></button>
							您填写的内容有些不符合规范，请按照提示改正！
						</div>
						<div class="alert alert-success display-hide">
							<button class="close" data-close="alert"></button>
							您填写的内容检测通过！
						</div>
						<div class="form-group">
							<label class="control-label col-md-2">标题</label>
							<div class="col-md-4">
								<input type="text" name="Article[title]" data-required="1" class="form-control" value="<?php echo ($article_info['title']); ?>"/>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-2">标签</label>
							<div class="col-md-9">
								<input id="tags" type="text" name="Article[tags]" class="form-control tags" value="<?php echo ($article_info['tags']); ?>" />
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-2">类型</label>
							<div class="col-md-4">
								<select class="form-control" name="Article[type_id]">
									<?php if(is_array($type_list)): $i = 0; $__LIST__ = $type_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$type): $mod = ($i % 2 );++$i; if($type["id"] == $article_info['type_id']): ?><option value="<?php echo ($type["id"]); ?>" selected><?php echo ($type["title"]); ?></option>
										<?php else: ?> 
											<option value="<?php echo ($type["id"]); ?>"><?php echo ($type["title"]); ?></option><?php endif; endforeach; endif; else: echo "" ;endif; ?>
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-2">内容</label>
							<div class="col-md-9">
								<textarea name="Article[content]"  id="content-markdown" rows="20" data-error-container="#editor_error"><?php echo ($article_info['content']); ?></textarea>
								<div id="editor_error"></div>
							</div>
						</div>
					</div>
					<div class="form-actions fluid">
						<div class="col-md-offset-3 col-md-9">
							<button type="submit" class="btn green">提交</button>
							<a href="<?php echo U('ArticleList/index'); ?>" class="btn default">取消</a>                           
						</div>
					</div>
				</form>
				<!-- END FORM-->
			</div>
			<!-- END VALIDATION STATES-->
		</div>
	</div>
</div>



<div class="modal fade" id="basic" tabindex="-1" role="basic" aria-hidden="true" data-backdrop='false'>
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
				<h4 class="modal-title">图片选择</h4>
			</div>
			<div class="modal-body">
			    <span class="btn btn-success fileinput-button">
			        <i class="glyphicon glyphicon-plus"></i>
			        <span>Select files...</span>
			        <!-- The file input field used as target for the file upload widget -->
			        <input id="fileupload" type="file" name="files[]" multiple>
			    </span>
			    <br>
			    <br>
			    <!-- The global progress bar -->
			    <div id="progress" class="progress">
			        <div class="progress-bar progress-bar-success"></div>
			    </div>
			    <!-- The container for the uploaded files -->
			    <div id="files" class="files"></div>
			</div>
			<div class="modal-footer">
				<button type="submit" class="btn blue">上传</button>
				<button type="button" class="btn default" data-dismiss="modal">取消</button>
			</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>

<script src="/Template/admin/plugins/jquery-file-upload/js/vendor/jquery.ui.widget.js"></script>
<script src="/Template/admin/plugins/jquery-file-upload/js/jquery.iframe-transport.js"></script>
<script src="/Template/admin/plugins/jquery-file-upload/js/jquery.fileupload.js"></script>
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="/Template/admin/plugins/jquery-validation/dist/jquery.validate.min.js"></script>
<script type="text/javascript" src="/Template/admin/plugins/jquery-validation/dist/additional-methods.min.js"></script>
<script type="text/javascript" src="/Template/admin/plugins/select2/select2.min.js"></script>
<script type="text/javascript" src="/Template/admin/plugins/ckeditor/ckeditor.js"></script>
<script type="text/javascript" src="/Template/admin/plugins/bootstrap-markdown/js/bootstrap-markdown.js"></script>
<script type="text/javascript" src="/Template/admin/plugins/bootstrap-markdown/lib/markdown.js"></script>
<script type="text/javascript" src="/Template/admin/plugins/jquery-tags-input/jquery.tagsinput.min.js" ></script>
<script type="text/javascript" src="/Template/admin/plugins/bootbox/bootbox.min.js" ></script>


<!-- END PAGE LEVEL PLUGINS -->
<script>
jQuery(document).ready(function() {   
	
	var form3 = $('#form_create_article');
	var error3 = $('.alert-danger', form3);
	var success3 = $('.alert-success', form3);
	
    form3.validate({
        errorElement: 'span', //default input error message container
        errorClass: 'help-block', // default input error message class
        focusInvalid: false, // do not focus the last invalid input
        ignore: "",
        rules: {
            'Article[title]': {
            	required: true,
            	rangelength:[1,80],
            },
            'Article[type_id]': {
            	required: true,
            },
            'Article[content]': {
            	required: true,
            },
        },
        messages: { // custom messages for radio buttons and checkboxes
        	'Article[title]': {
            	required: '请填写标题',
            	rangelength:'长度只能在1-80之间',
            },
            'Article[type_id]': {
            	required: '请选择类型',
            },
            'Article[content]': {
            	required: '内容不能为空',
            },
        },
        errorPlacement: function (error, element) { // render error placement for each input type
            if (element.parent(".input-group").size() > 0) {
                error.insertAfter(element.parent(".input-group"));
            } else if (element.attr("data-error-container")) { 
                error.appendTo(element.attr("data-error-container"));
            } else if (element.parents('.radio-list').size() > 0) { 
                error.appendTo(element.parents('.radio-list').attr("data-error-container"));
            } else if (element.parents('.radio-inline').size() > 0) { 
                error.appendTo(element.parents('.radio-inline').attr("data-error-container"));
            } else if (element.parents('.checkbox-list').size() > 0) {
                error.appendTo(element.parents('.checkbox-list').attr("data-error-container"));
            } else if (element.parents('.checkbox-inline').size() > 0) { 
                error.appendTo(element.parents('.checkbox-inline').attr("data-error-container"));
            } else {
                error.insertAfter(element); // for other inputs, just perform default behavior
            }
        },
        invalidHandler: function (event, validator) { //display error alert on form submit   
            success3.hide();
            error3.show();
            //App.scrollTo(error3, -200);
        },
        highlight: function (element) { // hightlight error inputs
           $(element).closest('.form-group').addClass('has-error'); // set error class to the control group
        },
        unhighlight: function (element) { // revert the change done by hightlight
            $(element).closest('.form-group').removeClass('has-error'); // set error class to the control group
        },
        success: function (label) {
            label.closest('.form-group').removeClass('has-error'); // set success class to the control group
        },
        submitHandler: function (form) {
            success3.show();
            error3.hide();
            $.ajax({
                type:'post',
                url: window.location.href ,
                dataType:"json", 
                data:{
                	'Article[title]' : $("input[name='Article[title]']").val(),
                    'Article[type_id]' : $("select[name='Article[type_id]']").val(),
                    'Article[tags]' : $("input[name='Article[tags]']").val(),
                    'Article[content]' : $("textarea[name='Article[content]']").val(),
                },
                success:function(data){
                    var errcode = data['errcode'];
					if(errcode == 0){
						window.location.href="/ArticleList/index"; 
					}else{
						bootbox.alert(data['msg'], function() {
	                        location.reload();
	                    });
					}
                }   
            });
        }

    });
	
    $('#tags').tagsInput({width: 'auto'});
    
    $("#content-markdown").markdown({
    	  additionalButtons: [
           [{
        	   name: "groupCustom",
               data: [{
                     name: 'cmdImage2',
                     title: 'Image',
                     icon: 'glyphicon glyphicon-picture',
                     callback: function(e){
                    	 $('#basic').modal('show');
                     }
               }]
           }]
         ]
    });
	
    
    'use strict';
    $('#fileupload').fileupload({
        url: '/Util/upload',
        dataType: 'json',
        done: function (e, data) {
            $.each(data.result.files, function (index, file) {
                $('<p/>').text(file.name).appendTo('#files');
            });
        },
        progressall: function (e, data) {
            var progress = parseInt(data.loaded / data.total * 100, 10);
            $('#progress .progress-bar').css(
                'width',
                progress + '%'
            );
        }
    }).prop('disabled', !$.support.fileInput)
        .parent().addClass($.support.fileInput ? undefined : 'disabled');
    
    
});
</script>	
		<!-- END PAGE CONTENT-->
	</div>
</body>

<!-- END BODY -->
</html>
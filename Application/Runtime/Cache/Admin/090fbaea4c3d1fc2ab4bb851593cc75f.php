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
<link rel="stylesheet" href="/Template/admin/plugins/data-tables/DT_bootstrap.css" />
<!-- END PAGE LEVEL STYLES -->
<!-- BEGIN PAGE CONTENT-->
<div id="table-status" style="display:none;"></div>
<div class="row">
	<div class="col-md-12">
		<!-- BEGIN EXAMPLE TABLE PORTLET-->
		<div class="portlet box blue">
			<div class="portlet-title">
				<div class="caption"><i class="fa fa-reorder"></i>文章列表信息</div>
				<div class="tools">
					<a href="javascript:;" class="collapse"></a>
					<a href="javascript:;" class="reload"></a>
					<a href="javascript:;" class="remove"></a>
				</div>
			</div>
			<div class="portlet-body">
				<div class="table-toolbar">
					<div class="btn-group">
						<a href="<?php echo U('ArticleList/create'); ?>" class="btn green">新增 <i class="fa fa-plus"></i></a>
					</div>
					<div class="btn-group pull-right">
						<button id="delete_all_button" class="btn red">
						删除 <i class="fa fa-trash-o"></i>
						</button>
					</div>
				</div>
				<table class="table table-striped table-bordered table-hover" id="dblist">
					<thead>
						<tr>
							<th class="table-checkbox"><input type="checkbox" class="group-checkable" data-set="#dblist .checkboxes" /></th>
							<th>标题</th>
							<th>分类</th>
							<th>浏览量</th>
							<th>评论量</th>
							<th>创建者</th>
							<th>创建时间</th>
							<th>操作</th>
						</tr>
					</thead>
					
				</table>
			</div>
		</div>
		<!-- END EXAMPLE TABLE PORTLET-->
	</div>
</div>
<!-- END PAGE CONTENT-->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="/Template/admin/plugins/select2/select2.min.js"></script>
<script type="text/javascript" src="/Template/admin/plugins/data-tables/jquery.dataTables.1.10.2.js"></script>
<script type="text/javascript" src="/Template/admin/plugins/data-tables/DT_bootstrap.js"></script>
<!-- END PAGE LEVEL PLUGINS -->
<script>
jQuery(document).ready(function() {    
	
    $('#dblist').dataTable({
    	"bAutoWidth":true,
        "aoColumns": [
          { "bSortable": false },
          { "bSortable": false },
          { "bSortable": false },
          { "bSortable": false },
          { "bSortable": false },
          { "bSortable": false },
          { "bSortable": false },
          { "bSortable": false },
        ],
        "bProcessing": true,//开关，以指定当正在处理数据的时候，是否显示“正在处理”这个提示信息
		"serverSide": true,
		"ajax": "../ArticleList/jsondb",
		//表格加载完成后的回调函数
		"fnDrawCallback":function(){
			//在这里重新初始化checkbox
			$("#dblist .checkboxes").uniform();
			//ajax表格加载完成后设置完成的标志，以便外层js获取状态改变iframe高度
			$("#table-status").attr('data-status','ok');
		},
        "iDisplayLength": 10,//每页显示个数
        "bLengthChange":false,//去掉选取每页显示个数
        "bInfo":false,//去掉左下角页脚信息
        "bFilter":false,//去掉过滤功能
        "bSort": false,
        "sPaginationType": "bootstrap",
        "oLanguage": {
        	"sProcessing": "正在加载中......",
            "sZeroRecords": "对不起，查询不到相关数据！",
            "sEmptyTable": "表中无数据存在！",
            "oPaginate": {
                "sPrevious": "上一页",
                "sNext": "下一页"
            }
        },
        "aoColumnDefs": [{
                'bSortable': false,
                'aTargets': [0]
            }
        ]
    });

    jQuery('#dblist .group-checkable').change(function () {
        var set = jQuery(this).attr("data-set");
        var checked = jQuery(this).is(":checked");
        jQuery(set).each(function () {
            if (checked) {
                $(this).attr("checked", true);
            } else {
                $(this).attr("checked", false);
            }
            $(this).parents('tr').toggleClass("active");
        });
        jQuery.uniform.update(set);
    });

    jQuery('#dblist tbody tr .checkboxes').change(function(){
         $(this).parents('tr').toggleClass("active");
    });

	
});
</script>

	
		<!-- END PAGE CONTENT-->
	</div>
</body>

<!-- END BODY -->
</html>
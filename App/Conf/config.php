<?php
return array(
	//'配置项'=>'配置值'
	'SHOW_PAGE_TRACE'=>true,
	'URL_HTML_SUFFIX'=>'.html',
	'APP_GROUP_LIST'=>'Home,Admin',//分组配置
	'DEFAULT_GROUP'=>'Home',//默认分组
	'APP_SUB_DOMAIN_DEPLOY'=>1, // 开启子域名配置
	/*子域名配置
	 *格式如: '子域名'=>array('分组名/[模块名]','var1=a&var2=b');
	 */
	'APP_SUB_DOMAIN_RULES'=>array(
			'admin'=>array('Admin/'),  // admin域名指向Admin分组
	),
);
?>

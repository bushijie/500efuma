<?php
return array(
	//'配置项'=>'配置值'
// 	'SHOW_PAGE_TRACE'=>true,
	'URL_HTML_SUFFIX'=>'.html',
	'URL_MODEL'=>2,
	//mysql配置
	'DB_TYPE'=> 'mysql',     	//数据库类型
	'DB_DEPLOY_TYPE'=> 1,
	'DB_RW_SEPARATE'=>true,
	/*本地开发用*/
	'DB_HOST'=> 'localhost', 	
	'DB_USER'=> 'root',    		
	'DB_PWD'=> 'i500efuma',    	//本地数据库密码
	'DB_NAME'=> '500efuma',  	// 数据库名
	'DB_PORT'=> 3306,        	// 端口
	'DB_PREFIX' => 'fm_',
		
	'APP_GROUP_LIST'=>'Home,Admin',	//分组配置
	'DEFAULT_GROUP'=>'Home',		//默认分组
		// '配置项'=>'配置值'
		'LAYOUT_ON' => true,
		'LAYOUT_NAME' => 'Layout/main' ,
	'APP_SUB_DOMAIN_DEPLOY'=>1, 	// 开启子域名配置
	/*子域名配置
	 *格式如: '子域名'=>array('分组名/[模块名]','var1=a&var2=b');
	 */
	'APP_SUB_DOMAIN_RULES'=>array(
			'admin'=>array('Admin/'),  // admin域名指向Admin分组
	),
	//邮件配置
	'THINK_EMAIL' => array(
		'SMTP_HOST'   => 'smtp.gmail.com', //SMTP服务器
		'SMTP_PORT'   => '465', //SMTP服务器端口
		'SMTP_USER'   => 'colorfes.server@gmail.com', //SMTP服务器用户名
		'SMTP_PASS'   => 'colorfes123!', //SMTP服务器密码
		'FROM_EMAIL'  => 'colorfes.server@gmail.com', //发件人EMAIL
		'FROM_NAME'   => 'MC-漫步森林', //发件人名称
		'REPLY_EMAIL' => '', //回复EMAIL（留空则为发件人EMAIL）
		'REPLY_NAME'  => '', //回复名称（留空则为发件人名称）
	),
);
?>

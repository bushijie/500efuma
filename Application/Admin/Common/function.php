<?php

/**
 * 系统邮件发送函数
 * @param string $to    接收邮件者邮箱
 * @param string $name  接收邮件者名称
 * @param string $subject 邮件主题
 * @param string $body    邮件内容
 * @param string $attachment 附件列表
 * @author Saki <zha_zha@outlook.com>
 * @date 2014-9-25 上午10:19:21
 * @version v1.0.0
 */
function sendMail($to, $name, $subject, $body, $attachment = null){
	$config = C('THINK_EMAIL');
	vendor('PHPMailer.class#phpmailer'); //从PHPMailer目录导class.phpmailer.php类文件
	$mail             = new PHPMailer(); //PHPMailer对象
	$mail->CharSet    = 'UTF-8'; //设定邮件编码，默认ISO-8859-1，如果发中文此项必须设置，否则乱码
	$mail->IsSMTP();  // 设定使用SMTP服务
	$mail->SMTPDebug  = 0;                     // 关闭SMTP调试功能
	$mail->SMTPAuth   = true;                  // 启用 SMTP 验证功能
	$mail->SMTPSecure = 'ssl';                 // 使用安全协议
	$mail->Host       = $config['SMTP_HOST'];  // SMTP 服务器
	$mail->Port       = $config['SMTP_PORT'];  // SMTP服务器的端口号
	$mail->Username   = $config['SMTP_USER'];  // SMTP服务器用户名
	$mail->Password   = $config['SMTP_PASS'];  // SMTP服务器密码
	$mail->SetFrom($config['FROM_EMAIL'], $config['FROM_NAME']);
	$replyEmail       = $config['REPLY_EMAIL']?$config['REPLY_EMAIL']:$config['FROM_EMAIL'];
	$replyName        = $config['REPLY_NAME']?$config['REPLY_NAME']:$config['FROM_NAME'];
	$mail->AddReplyTo($replyEmail, $replyName);
	$mail->Subject    = $subject;//标题
	$mail->MsgHTML($body);//邮件内容
	$mail->AddAddress($to, $name);//收件人的邮箱，名字
	if(is_array($attachment)){ // 添加附件
		foreach ($attachment as $file){
			is_file($file) && $mail->AddAttachment($file);
		}
	}
	$is_send = $mail->Send();
	$data['errcode'] = $is_send ? 1 : 500;
	$data['msg'] = $is_send ? '发送成功' : $mail->ErrorInfo;
	return $data;
}

/**
 * 菜单列表
 * @author Saki <zha_zha@outlook.com>
 * @date 2014-8-2 上午9:35:21
 * @version v1.0.0
 */
function sidebar(){
	return array(
		'home' => array(
			'name'=>'后台首页',
			'key'=>'home',	
			'url'=>'/Home/index',
			'icon'=>'fa-home',
		),
		'article' => array(
			'name'=>'文章管理',
			'key'=>'article',
			'url'=>'',
			'icon'=>'fa-bar-chart-o',
			'child'=>array(
				'workType'=>array(
					'name'=>'文章类型',
					'key'=>'articleType',
					'url'=>'/ArticleType/index',
				),
				'workList'=>array(
					'name'=>'文章列表',
					'key'=>'articleList',
					'url'=>'/ArticleList/index',
				),
			),
		),
		'reply' => array(
			'name'=>'回复管理',
			'key'=>'reply',
			'url'=>'/Reply/index',
			'icon'=>'fa-bar-chart-o',
		),
		'self' => array(
			'name'=>'简历管理',
			'key'=>'self',
			'url'=>'/Self/index',
			'icon'=>'fa-file-text',
		),
		'system' => array(
			'name'=>'系统管理',
			'key'=>'system',
			'url'=>'',
			'icon'=>'fa-cogs',
			'child'=>array(
				'sysMsg'=>array(
					'name'=>'傻逼语录',
					'key'=>'sysMsg',
					'url'=>'System/index',
				),
				'sysPhone'=>array(
					'name'=>'联系方式',
					'key'=>'sysPhone',
					'url'=>'System/index',
				),
			),
		),
	);
}
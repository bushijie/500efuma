<?php
namespace Home\Controller;
use Think\Controller;

/**
 * @ClassName: Home\Controller$PublicController 
 * @Description: 模板布局文件处理以及公共方法调用的处理
 * @author Saki <ilulu4ever816@gmail.com>
 * @date 2014-12-3 下午4:52:06 
 */
class PublicController extends HomeBaseController{

	/**
	 * @todo 处理QQ登入方法
	 * @author Saki <ilulu4ever816@gmail.com>
 	 * @date 2015-05-16 上午2:47:17 
	 */
	public function qqlogin(){
		$qqUtil = new \Org\QQ\QQUtil();
		$code = $_GET['code'];
		$state = $_GET['state'];
		$session_state = session('state');
		//Step3：通过Authorization Code获取Access Token
		if ($session_state == $state){
			$token_res = $qqUtil->getAccessToken($code);
			$params = $token_res['data'];
			//Step4：使用Access Token来获取用户的OpenID
			$open_res = $qqUtil->getOpenID($params['access_token']);
			//getUserInfo
			$user_info = $qqUtil->getUserInfo($params['access_token'], $open_res['data']);
		}
		var_dump($open_res);
	}
	
	
	
	
}
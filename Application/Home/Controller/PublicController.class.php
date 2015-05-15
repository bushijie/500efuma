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
	 * APP ID：101215106
	 * APP KEY：09fc27016ac20dcbbf14b5be8faddff1
	 * @author Saki <ilulu4ever816@gmail.com>
 	 * @date 2015-05-16 上午2:47:17 
	 */
	public function qqlogin(){
		$code = $_GET['code'];
		$state = $_GET['state'];
		$session_state = session('state');
		if ($session_state == $state){
			$token_url = "https://graph.qq.com/oauth2.0/token?grant_type=authorization_code&"
					. "client_id=" . 101215106 . "&redirect_uri=" . urlencode(C('QQ_REDIRECT_URI'))
					. "&client_secret=" . '09fc27016ac20dcbbf14b5be8faddff1' . "&code=" . $code;
			$response = file_get_contents($token_url);
			var_dump($response);
// 			if (strpos($response, "callback") !== false){
// 				$lpos = strpos($response, "(");
// 				$rpos = strrpos($response, ")");
// 				$response  = substr($response, $lpos + 1, $rpos - $lpos -1);
// 				$msg = json_decode($response);
// 				if (isset($msg->error))
// 				{
// 					echo "<h3>error:</h3>" . $msg->error;
// 					echo "<h3>msg  :</h3>" . $msg->error_description;
// 					exit;
// 				}
// 			}
		}
		
	}
	
	
	
	
}
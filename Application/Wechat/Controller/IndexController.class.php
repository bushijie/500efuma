<?php
namespace Wechat\Controller;
use Think\Controller;

class IndexController extends Controller {
	
	protected $token;
	
	
	public function _initialize(){
		$this->token = '500efuma';
		layout(false);
		/*网站接入*/
		$this->valid();
	}
	
	
	public function index(){
		$this->display();
	}
	
	
	/**
	 * 微信开发者url接入方法
	 * @author Saki <zha_zha@outlook.com>
	 * @date 2014-6-6下午2:27:14
	 * @version v1.0.0
	 */
	public function valid(){
		if(isset($_GET["echostr"])){
			$echoStr = $_GET["echostr"];
			if($this->checkSignature()){
				echo $echoStr;
				exit;
			}
		}
	}
	
	/**
	 * 检查微信服务器发送的参数并进行处理返回
	 * @author Saki <zha_zha@outlook.com>
	 * @date 2014-6-6下午2:27:14
	 * @version v1.0.0
	 */
	public function checkSignature(){
		if(isset($_GET["signature"]) && isset($_GET["timestamp"]) && isset($_GET["nonce"])){
			$signature = $_GET["signature"];
			$timestamp = $_GET["timestamp"];
			$nonce = $_GET["nonce"];
			$token = $this->token;
			$tmpArr = array($token, $timestamp, $nonce);
			sort($tmpArr, SORT_STRING);
			$tmpStr = implode( $tmpArr );
			$tmpStr = sha1( $tmpStr );
			if( $tmpStr == $signature ){
				return true;
			}else{
				return false;
			}
		}
	}
}
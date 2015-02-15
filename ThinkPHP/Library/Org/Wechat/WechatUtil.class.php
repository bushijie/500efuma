<?php
namespace Org\Wechat;

/**
 * 微信工具类
 * @author saki
 *
 */
class WechatUtil {
	
	protected $Token;
	protected $AppID;
	protected $AppSecret;
	
	
	public function __construct($AppID,$AppSecret,$Token){
		$this->AppID = $AppID;
		$this->AppSecret = $AppSecret;
		$this->Token = $Token;
	}
	
	public function createTextXML($OpenID,$Developers,$Content){
		$temp['ToUserName'] = "<![CDATA[$OpenID]]>";
		$temp['ToUserName'] = "<![CDATA[$Developers]]>";
		$temp['CreateTime'] = time();
		$temp['MsgType'] = "<![CDATA[text]]>";
		$temp['Content'] = "<![CDATA[$Content]]>";
		$xml = $this->arrayToXml($temp);
		return $xml;
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
	
	/**
	 * @todo: 数组转换xml文件
	 * @author Saki <ilulu4ever816@gmail.com>
	 * @date 2015-1-14 上午11:02:04 
	 * @version V1.0
	 */
	function arrayToXml($arr){
		$xml = "<xml>";
		foreach ($arr as $key=>$val){
			if (is_numeric($val)){
				$xml.="<".$key.">".$val."</".$key.">";
			}
			else
				$xml.="<".$key."><![CDATA[".$val."]]></".$key.">";
		}
		$xml.="</xml>";
		return $xml;
	}
	
	
	
}
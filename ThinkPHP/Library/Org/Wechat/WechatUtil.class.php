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
	
	/**
	 * @todo: 解析用户发送的消息 
	 * @param $message	用户发送的消息    
	 * @author Saki <ilulu4ever816@gmail.com>
	 * @date 2015-2-15 上午11:20:51 
	 * @version V1.0
	 */
	public function resolveText($message,$OpenID){
		//解析是否为注册信息
		$msg_arr = explode(',', $message);
		if(count($msg_arr) > 1){
			if($msg_arr[0] == 'saki'){//进入注册流程
				$qq = $msg_arr[1];
				$is_qq = resolveQQ($qq);
				if($is_qq['errcode'] == 1){
					//本群人员,查询是否在数据库中
					
					
					
					
				}else{
					$result = '不好意思，经查询你不是500efuma中的成员';
				}
			}
		}else{//正常的信息回复
			switch ($message) {
				case '新年快乐':
					$result = '小助手祝你羊年大吉！';
					break;
				case '魔王是傻逼':
					$result = '不许你骂魔王！';
					break;
				default:
					$result = '嗯哼?小助手有点不明白你的意思哦,人工智能魔王还在开发中,抱歉哈！';
					break;
			}
		}
		return $result;
	}
	
	
	/**
	 * @todo: 生成返回用户的xml文件 
	 * @param $OpenID		用户
	 * @param $Developers	开发者
	 * @param $Content		回复内容
	 * @author Saki <ilulu4ever816@gmail.com>
	 * @date 2015-2-15 上午11:19:25 
	 * @version V1.0
	 */
	public function createTextXML($OpenID,$Developers,$Content){
		$temp['ToUserName'] = $OpenID;
		$temp['FromUserName'] = $Developers;
		$temp['CreateTime'] = time();
		$temp['MsgType'] = "text";
		$temp['Content'] = $Content;
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
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
					$wxuser_model = new \Wechat\Model\WxUserModel();
					$is_has = $wxuser_model->checkQQ($qq);
					if(!$is_has){
						$is_add = $wxuser_model->createWxUser($OpenID, $qq, $is_qq['name'], $is_qq['headimgurl'], $is_qq['email']);
						if($is_add['errcode'] == 1){
							$result = '注册成功！' . $is_qq['name'];
						}else{
							$result = '注册失败，请将错误发给魔王：' . $is_add['msg'];
						}
					}else{
						$result = '亲！你已经注册过了！';
					}
				}else{
					$result = '不好意思，经查询你不是500efuma中的成员';
				}
			}
		}else{//正常的信息回复
			switch ($message) {
				case '注册':
					$result = "如果您是500efuma成员请输入\n'saki,xxxx'(QQ号)进行身份认证";
					break;
				case '魔王的心声':
					$result = "这个是魔王用心想对你们说的话：<a href='http://www.500efuma.com/wechat/Index/friend'>观看</a>";
					break;
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
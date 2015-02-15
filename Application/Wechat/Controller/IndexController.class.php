<?php
namespace Wechat\Controller;
use Think\Controller;

class IndexController extends Controller {
	
	public $wechatUtil;
	
	public function _initialize(){
		$this->token = '500efuma';
		layout(false);
		$config = C('THINK_EMAIL');//调用系统配置
		$this->wechatUtil = new \Org\Wechat\WechatUtil($config['AppID'], $config['AppSecret'], $config['Token']);
		/*网站接入*/
		$this->wechatUtil->valid();
	}
	
	public function index(){
		//接受微信xml文件
		if(isset($GLOBALS["HTTP_RAW_POST_DATA"])){
			$xml = $GLOBALS["HTTP_RAW_POST_DATA"];
			$xmlObj = resolveXML($xml);
			//获取用户openid
			$Developers = $xmlObj->ToUserName;//开发者微信号
			$OpenID = $xmlObj->FromUserName;//用户OpenID
			if($OpenID){
				//判断事件类型
				if($xmlObj->MsgType == 'text'){
					/*如果为文本消息*/
					$message = trim($xmlObj->Content);//用户发送的内容
					if ($message == '新年快乐'){
						$Content = '同乐，同乐';
						$text = $this->wechatUtil->createTextXML($OpenID, $Developers, $Content);
					}else {
						$Content = '测试自动回复';
						$text = $this->wechatUtil->createTextXML($OpenID, $Developers, $Content);
					}
				}elseif($xmlObj->MsgType == 'event'){
				}
			}
			/*推送xml信息返回给用户*/
			echo $text;
		}
	}
	
	
}
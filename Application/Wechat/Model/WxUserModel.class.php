<?php
namespace Wechat\Model;
use Think\Model\RelationModel;

/**
 * @ClassName: Wechat\Model$WxUserModel 
 * @Description: 微信用户模型
 * @author Saki <ilulu4ever816@gmail.com>
 * @date 2015-2-15 下午3:41:38 
 */
class WxUserModel extends RelationModel{
	
	protected $tableName = 'wx_user';
	
	protected $_link = array (
	);
	
	/**
	 * @todo: 检测QQ好是否已经注册
	 * @param $qq
	 * @author Saki <ilulu4ever816@gmail.com>
	 * @date 2015-2-15 下午3:42:00 
	 * @version V1.0
	 */
	public function checkQQ($qq){
		$model = D('Wechat/WxUser');
		$condition['qq'] = $qq;
		$is_has = $model->where($condition)->count();
		return $is_has;
	}
	
	/**
	 * @todo: todo(这里用一句话描述这个方法的作用) 
	 * @param $openid	微信用户的openid
	 * @author Saki <ilulu4ever816@gmail.com>
	 * @date 2015-2-15 下午3:42:21 
	 * @version V1.0
	 */
	public function getWxUserInfo($openid){
		$model = D('Wechat/WxUser');
		$condition['openid'] = $openid;
		$info = $model->where($condition)->find();
		return $info;
	}
	
	/**
	 * @todo: 保存微信用户的基本信息
	 * @param $openid		openid
	 * @param $qq			qq号
	 * @param $name			昵称
	 * @param $headimgurl	头像
	 * @param $email		邮箱
	 * @author Saki <ilulu4ever816@gmail.com>
	 * @date 2015-2-15 下午3:50:03 
	 * @version V1.0
	 */
	public function createWxUser($openid,$qq,$name,$headimgurl,$email){
		$model = D('Wechat/WxUser');
		$data['openid'] = $openid;
		$data['qq'] = $qq;		
		$data['name'] = $name;
		$data['headimgurl'] = $headimgurl;
		$data['email'] = $email;
		$data['ctm'] = date('Y-m-d H:i:s',time());
		try {
			$isadd = $model->add($data);
			$errcode = $isadd ? 1 : 500;
			$msg = $isadd ? '添加成功' : '添加失败';
		} catch (Exception $e) {
			$msg = $e->getMessage();
			$errcode = 500;
		}
		$res['errcode'] = $errcode;
		$res['msg'] = $msg;
		return $res;
	}
	
	
	
}
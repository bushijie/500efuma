<?php
namespace Admin\Model;
use Think\Model\RelationModel;

class AdminModel extends RelationModel {
	
	protected $tableName = 'admin';
	
	
	/**
	 * @todo: 检测用户名密码的正确性 
	 * @param @param unknown $username
	 * @param @param unknown $password
	 * @author Saki <ilulu4ever816@gmail.com>
	 * @date 2014-12-30 上午10:23:01 
	 * @version V1.0
	 */
	public function check_username_password($username,$password){
		$model = D('Admin/Admin');
		$condition['account'] = $username;
		$password = md5($password . '500efuma');
		$condition['password'] = $password;
		// 把查询条件传入查询方法
		$info = $model->where($condition)->find();
		return $info;
	}
	
	
	/**
	 * @todo: 获取管理员信息
	 * @author Saki <ilulu4ever816@gmail.com>
	 * @date 2014-12-30 上午10:23:22 
	 * @version V1.0
	 */
	public function getAdminInfo(){
		
		
	}
	
	
	
	
	
	
}
<?php
namespace Admin\Model;
use Think\Model\RelationModel;

class AdminModel extends RelationModel {
	
	protected $tableName = 'admin';
	
	public function check_username_password($username,$password){
		$model = D('Admin/Admin');
		$condition['account'] = $username;
		$password = md5($password . '500efuma');
		$condition['password'] = $password;
		// 把查询条件传入查询方法
		$info = $model->where($condition)->find();
		return $info;
	}
	
	
	
	
}
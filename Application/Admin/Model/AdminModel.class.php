<?php
namespace Admin\Model;
use Think\Model\RelationModel;

class AdminModel extends RelationModel {
	
	
	public function check_username_password($username,$password){
		$model = D('Admin/Admin');
		$condition['account'] = $username;
		$password = md5($password . '500efuma');
		$condition['password'] = $password;
		// 把查询条件传入查询方法
// 		$id = $model->where($condition)->getField('id');
		$info = $model->where($condition)->find();
// 		$sql = $model->getLastSql();
		return $info;
	}
	
	
	
	
}
<?php
namespace Admin\Model;
use Think\Model\RelationModel;

class SelfInfoModel extends RelationModel {
	
	protected $tableName = 'self_info';
	
	public function setInfo($post,$admin_info){
		$model = D('Admin/SelfInfo');
		$map['admin_id'] = $admin_info['id'];
		$info = $model->where($map)->find();
		$post['admin_id'] = $admin_info['id'];
		try {
			if($info){
				$post['utm'] = date('Y-m-d H:i:s',time());
				$model->where($map)->save($post);
			}else{
				$post['ctm'] = date('Y-m-d H:i:s',time());
				$model->data($post)->add($post);
			}
		} catch (Exception $e) {
		}
	}
	
}
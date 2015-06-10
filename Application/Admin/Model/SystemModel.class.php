<?php
namespace Admin\Model;
use Think\Model\RelationModel;
use Think\Exception;

class SystemModel extends RelationModel {

	protected $tableName = 'system';
	
	public function getValue($key){
		$model = D('Admin/System');
		$condition['key'] = $key;
		// 把查询条件传入查询方法
		$info = $model->where($condition)->find();
		return $info;
	}
	
	
	/**
	 * 编辑语录
	 */
	public function editText($post,$admin_info){
		$model = D('Admin/System');
		$map['key'] = 'text';
		$data = $post;
		$data['utm'] = date('Y-m-d H:i:s',time());
		$data['admin_id'] = $admin_info['id'];
		$value = $model->getValue('text');
		if(!$value){
			$data['key'] = 'text';
			$data['title'] = '傻逼语录';
			$data['ctm'] = date('Y-m-d H:i:s',time());
			$model->data($data)->add($data);
		}
		try {
			$model->where($map)->save($data);
		} catch (Exception $e) {
		}
	}


}
<?php
namespace Admin\Model;
use Think\Model\RelationModel;

class SelfProjectModel extends RelationModel {
	
	protected $tableName = 'self_project';
	
	/*逻辑外键的关联关系处理*/
	protected $_link = array (
		'admin' => array (
			'mapping_type' => self::BELONGS_TO,
			'class_name' => 'Admin',
			'foreign_key'=>'admin_id',
			'mapping_name'=> 'admin',
		),
		'company' => array (
			'mapping_type' => self::BELONGS_TO,
			'class_name' => 'SelfCompany',
			'foreign_key'=>'company_id',
			'mapping_name'=> 'company',
		),
	);
	
	
	
	public function getProjectList_Page($start, $length){
		$model = D('Admin/SelfProject');
		$list = $model->relation(true)->order('ctm desc')->limit ( $start, $length )->select ();
		$sql = $model->getLastSql();
		$data = array ();
		foreach ($list as $key => $project){
			$temp = array ();
			$choose = "<input type='checkbox' class='checkboxes' value='".$project['id']."'>";
			array_push ( $temp, $choose );//勾选框
			array_push ( $temp, $project ['title'] );
			array_push ( $temp, $project ['company']['name']);
			array_push ( $temp, $project ['url']);
			//实用技术的html化
			$technology_used_arr = explode(',',$project ['technology_used']);
			$technology_str = '';
			foreach ($technology_used_arr as $technology){
				$technology_str .= "<span class='label label-sm label-success'>".$technology."</span> ";
			}
			array_push ( $temp, $technology_str);
			array_push ( $temp, date('Y-m-d',strtotime($project['stm'])));
			array_push ( $temp, date('Y-m-d',strtotime($project['etm'])));
			$action = "<a href='" . U('Self/updatePro',array('id'=>$project['id'])) . "' class='btn blue btn-sm'>编辑</a> ".
					  "<a href='" . U('Self/deletePro',array('id'=>$project['id'])) . "' class='btn red  btn-sm'>删除</a> ";
			array_push ( $temp, $action);
			array_push ( $data, $temp );
		}
		return $data;
	}
	
	public function createPro($post,$admin_info){
		$model = D('Admin/SelfProject');
		$data = $post;
		$data['admin_id'] = $admin_info['id'];
		$data['ctm'] = date('Y-m-d H:i:s',time());
		try {
			$isadd = $model->data($data)->filter('strip_tags')->add($data);
			$errcode = $isadd ? 0 : 500;
			$msg = $isadd ? '添加成功' : '添加失败';
		} catch (Exception $e) {
			$msg = $e->getMessage();
			$errcode = 500;
		}
		$res['errcode'] = $errcode;
		$res['msg'] = $msg;
		return $res;
	}
	
	public function updatePro($post,$id){
		$model = D('Admin/SelfProject');
		$map['id'] = $id;
		$data = $post;
		$data['utm'] = date('Y-m-d H:i:s',time());
		try {
			$isupdate = $model->where($map)->save($data);
			$sql = $model->getLastSql();
			$errcode = $isupdate ? 0 : 500;
			$msg = $isupdate ? '更新成功' : '更新失败';
		} catch (Exception $e) {
			$errcode = 500;
			$msg = $e->getMessage();
		}
		$res['errcode'] = $errcode;
		$res['msg'] = $msg;
		return $res;
	}
	
	
	public function deletePro($id){
		try {
			$isdelete = D('Admin/SelfProject')->delete($id);
			$errcode = $isdelete ? 0 : 500;
			$msg = $isdelete ? '删除成功' : '删除失败';
		} catch (Exception $e) {
			$errcode = 500;
			$msg = $e->getMessage();
		}
		$res['errcode'] = $errcode;
		$res['msg'] = $msg;
		return $res;
	}
}
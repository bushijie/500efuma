<?php
namespace Admin\Model;
use Think\Model\RelationModel;
/**
 * @ClassName: ArticleTypeModel 
 * @Description: 文章类型模型文件
 * @author Saki <ilulu4ever816@gmail.com>
 * @date 2014-12-10 上午10:49:40 
 */
class ArticleTypeModel extends RelationModel {
	protected $tableName = 'article_type';
	
	/*逻辑外键的关联关系处理*/
	protected $_link = array (
		'admin' => array (
			'mapping_type' => self::BELONGS_TO,
			'foreign_key'=>'admin_id',
			'class_name' => 'Admin',
		),
	);
	
	
	/**
	 * @todo: 查询作品类型列表信息，有进行分页处理,JSON处理
	 * @param $start 起始位置        	
	 * @param $length 查询数量        
	 * @author Saki <ilulu4ever816@gmail.com>
	 * @date 2014-12-10 上午11:20:56 
	 * @version V1.0
	 */
	public function getTypeList_Page($start, $length) {
		$model = D('Admin/ArticleType');
		$list = $model->relation(true)->where('status=1')->order('ctm desc')->limit ( $start, $length )->select ();
		$data = array ();
		foreach ( $list as $key => $type ) {
			$temp = array ();
			$choose = "<input type='checkbox' class='checkboxes' value='".$type['id']."'>";
			array_push ( $temp, $choose );//勾选框
			array_push ( $temp, $type ['title'] );//类型名称
			array_push ( $temp, $type ['key']);//关键字
			array_push ( $temp, $type ['admin']['name']);//创建者
			array_push ( $temp, $type ['ctm'] );//创建时间
			$action = "<a href='" . U('ArticleType/update',array('id'=>$type['id'])) . "' class='btn blue btn-sm'>编辑</a> " . 
					  "<a href='" . U('ArticleType/delete',array('id'=>$type['id'])) . "' class='btn red btn-sm'>删除</a> ";
			array_push ( $temp, $action);
			array_push ( $data, $temp );
		}
		return $data;
	}
	
	/**
	 * @todo: 创建文章类型
	 * @param $post     POST数据
	 * @param $admin_info  管理员信息   
	 * @author Saki <ilulu4ever816@gmail.com>
	 * @date 2014-12-12 上午11:29:09 
	 * @version V1.0
	 */
	public function createType($post,$admin_info){
		$model = D('Admin/ArticleType');
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
	
	/**
	 * @todo: 更新文章类型
	 * @param $post POST数据
	 * @param $id   操作ID
	 * @author Saki <ilulu4ever816@gmail.com>
	 * @date 2014-12-12 下午5:11:35 
	 * @version V1.0
	 */
	public function updateType($post,$id){
		$model = D('Admin/ArticleType');
		$map['id'] = $id;
		$data = $post;
		$data['utm'] = date('Y-m-d H:i:s',time());
		try {
			$isupdate = $model->where($map)->save($data);
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
	
	/**
	 * @todo: 逻辑删除文章类型
	 * @param $id 类型ID
	 * @date 2014-12-12 下午6:18:54 
	 * @version V1.0
	 */
	public function deleteType($id){
		$model = D('Admin/ArticleType');
		$map['id'] = $id;
		$data['status'] = 0;//逻辑删除
		try {
			$isupdate = $model->where($map)->save($data);
			$errcode = $isupdate ? 0 : 500;
			$msg = $isupdate ? '删除成功' : '删除失败';
		} catch (Exception $e) {
			$errcode = 500;
			$msg = $e->getMessage();
		}
		$res['errcode'] = $errcode;
		$res['msg'] = $msg;
		return $res;
	}
	

}
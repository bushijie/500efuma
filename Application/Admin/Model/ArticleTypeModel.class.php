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
// 	protected $_link = array (
// 		'user_group' => array (
// 			'mapping_type' => BELONGS_TO,//每个用户都属于一个分组
// 			'foreign_key'=>'group_id',
// 		),
// 		'user_point' => array(
// 			'mapping_type' => HAS_ONE,//用户都有一个积分值
// 			'foreign_key'=>'user_id',
// 		),	
// 		'works' => array(
// 			'mapping_type'=> HAS_MANY,//每个用户都有多个文章
// 			'class_name' => 'Works',
// 			'foreign_key' => 'user_id',
// 			'mapping_name'=> 'work',
// 		),
// 	);
	
	
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
		$list = $model->order('ctm desc')->limit ( $start, $length )->select ();
// 		$list = $model->relation(true)->order('ctm desc')->limit ( $start, $length )->select ();
		$data = array ();
		foreach ( $list as $key => $type ) {
			$temp = array ();
			$choose = "<input type='checkbox' class='checkboxes' value='".$type['id']."'>";
			array_push ( $temp, $choose );//勾选框
			array_push ( $temp, $type ['title'] );//类型名称
			array_push ( $temp, $type ['key']);//关键字
			array_push ( $temp, $type ['admin_id']);//创建者
			array_push ( $temp, $type ['ctm'] );//创建时间
			$action = "<button class='btn blue btn-sm modify-one' type='button' data-id=" .$type['id'] . ">编辑</button> " . 
						"<button class='btn red btn-sm delete-one' type='button'  data-id=" .$type['id'] . ">删除</button>";
			array_push ( $temp, $action);
			array_push ( $data, $temp );
		}
		return $data;
	}

}
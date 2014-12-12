<?php
namespace Admin\Model;
use Think\Model\RelationModel;
/**
 * @ClassName: Admin\Model$ArticleListModel 
 * @Description:  文章列表模型文件
 * @author Saki <ilulu4ever816@gmail.com>
 * @date 2014-12-12 上午9:43:51 
 */
class ArticleListModel extends RelationModel {
	
	protected $tableName = 'article_list';
	
	/*逻辑外键的关联关系处理*/
	protected $_link = array (
		'admin' => array (
			'mapping_type' => self::BELONGS_TO,
			'class_name' => 'Admin',
			'foreign_key'=>'admin_id',
			'mapping_name'=> 'admin',
		),
		'article_type' => array (
			'mapping_type' => self::BELONGS_TO,
			'foreign_key'=>'type_id',
		),
	);
	
	
	public function getArticleList_Page($start, $length){
		$model = D('Admin/ArticleList');
		$list = $model->relation(true)->order('ctm desc')->limit ( $start, $length )->select ();
		$sql = $model->getLastSql();
		$data = array ();
		foreach ($list as $key => $article){
			$temp = array ();
			$choose = "<input type='checkbox' class='checkboxes' value='".$article['id']."'>";
			array_push ( $temp, $choose );//勾选框
			array_push ( $temp, $article ['title'] );//类型名称
			array_push ( $temp, $article ['article_type']['title']);//类型
			array_push ( $temp, $article ['admin']['name']);//创建者
			array_push ( $temp, $article ['ctm'] );//创建时间
			$action = "<button class='btn blue btn-sm modify-one' type='button' data-id=" .$article['id'] . ">编辑</button> " . 
						"<button class='btn red btn-sm delete-one' type='button'  data-id=" .$article['id'] . ">删除</button>";
			array_push ( $temp, $action);
			array_push ( $data, $temp );
		}
		return $data;
	}
	
	
}
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
	
	/**
	 * @todo: 文章类型表格ajax数据加载方法
	 * 数据操作返回json格式，使用前段表格框架进行图形加载显示
	 * @author Saki <ilulu4ever816@gmail.com>
	 * @date 2014-12-10 上午11:06:52
	 * @version V1.0
	 */
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
			array_push ( $temp, $article ['pv_num']);
			array_push ( $temp, $article ['comments_num']);
			array_push ( $temp, $article ['admin']['name']);//创建者
			array_push ( $temp, $article ['ctm'] );//创建时间
			$action = "<a href='" . U('ArticleList/view',array('id'=>$article['id'])) . "' class='btn purple btn-sm'>预览</a> " . 
					  "<a href='" . U('ArticleList/update',array('id'=>$article['id'])) . "' class='btn blue btn-sm'>编辑</a> " . 
					  "<a href='" . U('ArticleList/delete',array('id'=>$article['id'])) . "' class='btn red btn-sm'>删除</a> ";
			array_push ( $temp, $action);
			array_push ( $data, $temp );
		}
		return $data;
	}
	
	/**
	 * @todo: 创建文章
	 * @param $post     POST数据
	 * @param $admin_info  管理员信息
	 * @author Saki <ilulu4ever816@gmail.com>
	 * @date 2014-12-12 上午11:29:09
	 * @version V1.0
	 */
	public function createArticle($post,$admin_info){
		$model = D('Admin/ArticleList');
		$data = $post;
		$data['admin_id'] = $admin_info['id'];
		$data['ctm'] = date('Y-m-d H:i:s',time());
		try {
			$isadd = $model->data($data)->add($data);
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
	 * @todo: todo(这里用一句话描述这个方法的作用) 
	 * @param $post POST数据
	 * @param $id   文章ID
	 * @author Saki <ilulu4ever816@gmail.com>
	 * @date 2014-12-15 下午6:06:30 
	 * @version V1.0
	 */
	public function updateArticle($post,$id){
		$model = D('Admin/ArticleList');
		$map['id'] = $id;
		$data = $post;
		$data['utm'] = date('Y-m-d H:i:s',time());
		try {
			$isupdate = $model->where($map)->save($data);
			$errcode = $isupdate ? 0 : 500;
			$msg = $isupdate ? '更新成功' : '更新失败';
		} catch (Exception $e) {
			$msg = $e->getMessage();
			$errcode = 500;
		}
		$res['errcode'] = $errcode;
		$res['msg'] = $msg;
		return $res;
	}
	
	/**
	 * @todo: 删除文章
	 * @param $id 文章ID
	 * @date 2014-12-12 下午6:18:54
	 * @version V1.0
	 */
	public function deleteArticle($id){
		try {
			$isdelete = D('Admin/ArticleList')->delete($id);
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
	
	/**
	 * @todo: 增加浏览量
	 * @param $id  文章ID
	 * @author Saki <ilulu4ever816@gmail.com>
	 * @date 2014-12-26 上午11:40:34 
	 * @version V1.0
	 */
	public function addPv($id){
		$model = D('Admin/ArticleList');
		$map['id'] = $id;
		$info = $model->where($map)->find();
		$data['pv_num'] = $info['pv_num'] + 1;
		try {
			$isupdate = $model->where($map)->save($data);
		} catch (Exception $e) {
		}
	}
	
	
	
}
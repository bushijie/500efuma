<?php
namespace Admin\Model;
use Think\Model\RelationModel;

class ArticleCommentModel extends RelationModel {
	
	protected $tableName = 'article_comment';
	
	/**
	 * @todo: 获取文章对应的【一级】评论列表
	 * @param $aid   文章ID 
	 * @author Saki <ilulu4ever816@gmail.com>
	 * @date 2014-12-26 下午5:45:28 
	 * @version V1.0
	 */
	public function getComments_First($page,$condition){
		$model = D('Admin/ArticleComment');
		$list = $model->order('ctm desc')->where($condition)->limit($page->firstRow.','.$page->listRows)->select ();
		//二级回复列表
		$pid_arr = listID_2_arrID($list);
		$map['aid'] = $condition['aid'];
		$map['pid']  = array('in',$pid_arr);
		$list_sec = $model->order('ctm desc')->where($map)->select ();
		$sql = $model->getLastSql();
		//进行set
		if($list_sec){
			foreach ($list as $k => $comment){
				$temp = array();
				foreach ($list_sec as $k_sec => $comment_sec){
					if($comment_sec['pid'] == $comment['id']){
						array_push($temp, $comment_sec);
					}
				}
				$temp = count($temp) > 0 ? $temp : null;
				$list[$k]['comment_sec'] = $temp;
			}
		}
		return $list;
	}
	
	/**
	 * @todo: 新增评论
	 * @author Saki <ilulu4ever816@gmail.com>
	 * @date 2014-12-26 下午5:45:28
	 * @version V1.0
	 */
	public function createComment($post){
		$model = D('Admin/ArticleComment');
		if($post['content'] != ''){
			$data = $post;
			$data['ctm'] = date('Y-m-d H:i:s',time());
			try {
				$isadd = $model->data($data)->add($data);
			} catch (Exception $e) {
			}
		}
	}
	
	
	
	
	
}
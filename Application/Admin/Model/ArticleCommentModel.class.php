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
	public function getComments_First($aid,$start,$length){
		$model = D('Admin/ArticleComment');
		//统计总条数
		$condition['aid'] = $aid;
		$condition['pid'] = 0;
		$count = $model->where($condition)->count();
		//分页显示设置
		$Page = new \Think\Page($count,5);
		$Page->setConfig('prev','上一页');
		$Page->setConfig('next','下一页');
		$Page->setConfig('theme','%FIRST%  %LINK_PAGE%  %END%');
		$show = $Page->show();
		
		
		
		$list = $model->order('ctm asc')->where($condition)->limit($start, $length )->select ();
		//$sql = $model->getLastSql();
		return $list;
	}
	
	
	/**
	 * @todo: 获取文章对应的【二级】评论列表
	 * @param $aid   文章ID 
	 * @param $list   一级评论列表
	 * @author Saki <ilulu4ever816@gmail.com>
	 * @date 2014-12-26 下午6:24:11 
	 * @version V1.0
	 */
	public function getComments_Second($aid,$list){
		$pid_arr = listID_2_arrID($list);
		$model = D('Admin/ArticleComment');
		$condition['aid'] = $aid;
		$condition['pid']  = array('in',$pid_arr);
		
	}
	
	
	
	
	
}
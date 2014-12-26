<?php
namespace Home\Controller;
use Think\Controller;


class ArticleController extends HomeBaseController{
	
	/**
	 * @todo: 文章内容详情
	 * @author Saki <ilulu4ever816@gmail.com>
	 * @date 2014-12-22 上午9:34:18 
	 * @version V1.0
	 */
	public function View(){
		$id = $_GET['id'];
		$model = new \Admin\Model\ArticleListModel();
		$condition['id'] = $id;
		$info = $model->relation(true)->where($condition)->find();
		//markdown--文章内容解析
		$Parsedown = new \Org\Markdown\Parsedown;
		$info['content'] = $Parsedown->text($info['content']);
		//文章时间解析
		$info['ctm_M'] = date('M',strtotime($info['ctm']));//月份简写
		$ctm_F = date('F',strtotime($article['ctm']));//月份全写
		$len_M = strlen($info['ctm_M']);//缩写字符串的长度
		$ctm_F = mb_substr($ctm_F,$len_M);//截取剩余字符串
		$info['ctm_F'] = $ctm_F;//月份全写截取后的剩余字符串
		$info['ctm_Y'] = date('Y',strtotime($info['ctm']));//年份
		$info['ctm_D'] = date('d',strtotime($info['ctm']));//日期
		//tags解析
		$tags = explode(",",$info['tags']);
		//查询评论列表
		$comments_model = new \Admin\Model\ArticleCommentModel();
		$comments_list_first = $comments_model->getComments_First($id);
		
		
		
		
		//增加一个浏览量
		if(Article_Cookie_IP($id)){
			$model->addPv($id);
		}
		//输出
		$this->assign('info',$info);
		$this->assign('tags',$tags);
		$this->assign('comments_list',$comments_list);
		$this->display();
	}
	
	
	
	
}
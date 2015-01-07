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
		$p = isset($_GET['p']) ? $_GET['p'] : 0;//评论分页标志
		//文章详细信息
		$model = new \Admin\Model\ArticleListModel();
		$info = $model->getArticleInfo($id);
		$tags = explode(",",$info['tags']);//tags解析
		//查询评论列表
		$comments_model = new \Admin\Model\ArticleCommentModel();
		//统计总条数
		$condition['aid'] = $id;
		$condition['pid'] = 0;
		$count = $comments_model->where($condition)->count();
		//分页显示设置
		$Page = new \Think\Page($count,3);
		$Page->setConfig('prev','上一页');
		$Page->setConfig('next','下一页');
		$Page->setConfig('theme','%FIRST%  %LINK_PAGE%  %END%');
		$show = $Page->show();
		$comments_list = $comments_model->getComments_First($Page,$condition);
		//增加一个浏览量
		if(Article_Cookie_IP($id)){
			$model->addPv($id);
		}
		$this->assign('info',$info);
		$this->assign('tags',$tags);
		$this->assign('comments_list',$comments_list);
		$this->assign('page',$show);
		$this->assign('p',$p);
		$this->display();
	}
	
	/**
	 * @todo: 发送评论
	 * @author Saki <ilulu4ever816@gmail.com>
	 * @date 2014-12-22 上午9:34:18
	 * @version V1.0
	 */
	public function PostComment(){
		$model = new \Admin\Model\ArticleCommentModel();
		$post = $_POST['ArticleComment'];
		$id = $post['aid'];
		$comment_id = $model->createComment($post);
		//发送邮件，这里为游客发送评论，则为管理员邮箱收到邮件
		if($comment_id){
			\Think\Hook::listen('postComment',$comment_id);
			\Think\Hook::add('postComment','Home\\Behaviors\\emailBehavior');
		}
		$this->redirect('Article/view', array('id' => $id,'p'=>1));
	}
	
}
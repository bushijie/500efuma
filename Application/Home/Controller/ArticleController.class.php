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
		/*1.首先查找到当前文章的详细信息*/
		$map['id'] = $id;
		$article_info = D('Admin/ArticleList')->where($map)->find();
		/*2.获取被评论者的邮箱地址*/
		if($post['pid'] != 0){
			//评论作者
			$condition['id'] = $post['pid'];
			$info = D('Admin/ArticleComment')->where($condition)->find();
		}else{
			//文章作者
			$condition['id'] = $article_info['admin_id'];
			$info = D('Admin/Admin')->where($condition)->find();
		}
		/*3.发送邮件提醒 */
		if($info['email']){
			/*4.获取被评论的文章信息*/
			$to = $info['name'];//接收对象
			$from = $post['name'] ? $post['name'] : '匿名用户' ;//发送对象
			if($post['pid'] != 0){
				$title = '有一位游客回复了你的评论：' . $article_info['title'] . '(请不要回复此邮件)';
			}else{
				$title = '有一位游客评论了你的文章：' . $article_info['title'] . '(请不要回复此邮件)';
			}
			$content = getContent($post['content']);
			//'http://500efuma.me/Home/Article/view/id/' . $id;
			$url = 'http://www.500efuma.com'. U('Home/Article/view',array('id'=>$id));
			$body = getMail($to,$from,$article_info['title'],$content,$url);
			$is_send = sendMail($info['email'], $info['email'], $title, $body);
		}
		$this->redirect('Article/view', array('id' => $id,'p'=>1));
	}
	
	public function c(){
		if($_GET['id'] == 0){
			echo 'Behaviors!';
			$param = '123';
			\Think\Hook::listen('c',$param);
// 			\Think\Hook::add('c','Home\\Behaviors\\emailBehavior');
		}else{
			echo 'nothing to do!';
		}
	}
	
	
	
}
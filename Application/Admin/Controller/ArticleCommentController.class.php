<?php
namespace Admin\Controller;
// use Think\Controller;

/**
 * @ClassName: Admin\Controller$ArticleCommentController 
 * @Description: 文章评论--后台控制器
 * @author Saki <ilulu4ever816@gmail.com>
 * @date 2014-12-30 上午9:58:50 
 */
class ArticleCommentController extends AdminBaseController{

	/**
	 * @todo: 发送评论-后台管理员发送
	 * @author Saki <ilulu4ever816@gmail.com>
	 * @date 2014-12-22 上午9:34:18
	 * @version V1.0
	 */
	public function PostComment(){
		$model = new \Admin\Model\ArticleCommentModel();
		$post = $_POST['ArticleComment'];
		$id = $post['aid'];
		$admin_info = $this->admin_info;
		$post['is_admin'] = $admin_info['id'];
		$comment_id = $model->createComment($post);
		if($comment_id){
			\Think\Hook::listen('postComment',$comment_id);
			\Think\Hook::add('postComment','Home\\Behaviors\\emailBehavior');
		}
		$this->redirect('ArticleList/view', array('id' => $id,'p'=>1));
	}
	
	/**
	 * @todo: 删除评论
	 * @author Saki <ilulu4ever816@gmail.com>
	 * @date 2014-12-30 上午9:59:25 
	 * @version V1.0
	 */
	public function delete(){
		$aid = $_GET['aid'];
		$id = $_GET['id'];
		$model = new \Admin\Model\ArticleCommentModel();
		$data = $model->deleteComment($id,$aid);
		//删除成功进行页面跳转
		if($data['errcode'] == 0){
			$this->redirect('ArticleList/view',array('id'=>$aid,'p'=>1));
		}
	}

}
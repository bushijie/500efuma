<?php
namespace Home\Behaviors;

/**
 * 发送邮件的行为扩展
 * @author saki
 */
class emailBehavior extends \Think\Behavior {
	
	/**
	 * (行为执行入口)
	 * 发送邮件
	 * @see \Think\Behavior::run()
	 */
	public function run(&$param) {
		$comment_id = $param;//评论结果id
		if($comment_id > 0){//确保评论保存成功
			//这条评论的所有信息
			$map['id'] = $comment_id;
			$comment_info = D('Admin/ArticleComment')->where($map)->find();
			unset($map['id']);
			//这条评论所属文章的所有信息
			$map['id'] = $comment_info['aid'];
			$article_info = D('Admin/ArticleList')->where($map)->find();
			//优先给游客发送提醒邮件，顶级游客    > 二级评论游客
			//只有在进行二级评论的时候会向一级评论的游客和被@的游客（如果存在）进行邮件发送
			$parent_info = $this->send_to_parent($comment_info, $article_info);	
			$this->send_to_second($parent_info, $comment_info, $article_info);
			//判断是否给站长发送邮件
			$this->sendAdmin($comment_info, $article_info);
		}
	}
	
	/**
	 * @todo: 给最外层的评论游客发送邮件
	 * @return 最外层的发送对象    
	 * @author Saki <ilulu4ever816@gmail.com>
	 * @date 2015-1-4 上午11:45:59 
	 * @version V1.0
	 */
	private function send_to_parent($comment_info,$article_info){
		$pid = $comment_info['pid'];
		$info = null;
		if($pid != 0){
			$condition['id'] = $comment_info['pid'];
			$info = D('Admin/ArticleComment')->where($condition)->find();
			$this->send($info,$comment_info,$article_info);		
		}
		return $info;
	}
	
	/**
	 * @todo: 给被@的游客发送评论，如果邮箱和最外层的邮箱相同则不进行发送
	 * @author Saki <ilulu4ever816@gmail.com>
	 * @date 2015-1-4 上午11:46:54 
	 * @version V1.0
	 */
	private function send_to_second($parent_info,$comment_info,$article_info){
		$tid = $comment_info['tid'];
		if($tid != 0){
			$condition['id'] = $tid;
			$info = D('Admin/ArticleComment')->where($condition)->find();
			if($info['email'] != $parent_info['email'] && $info['is_admin'] == 0){
				$this->send($info,$comment_info,$article_info);
			}
		}
	}
	
	/**
	 * @todo: 获取邮件标题
	 * @author Saki <ilulu4ever816@gmail.com>
	 * @date 2015-1-4 下午2:19:54 
	 * @version V1.0
	 */
	private function getTitle($comment_info,$article_info){
		if($comment_info['pid'] != 0){
			$title = '有一位游客回复了你的评论：' . $article_info['title'] . '(请不要回复此邮件)';
		}else{
			$title = '有一位游客评论了你的文章：' . $article_info['title'] . '(请不要回复此邮件)';
		}
		return $title;
	}
	
	/**
	 * @todo: 向管理员发送邮件
	 * @author Saki <ilulu4ever816@gmail.com>
	 * @date 2015-1-4 下午2:20:07 
	 * @version V1.0
	 */
	private function sendAdmin($comment_info,$article_info){
		//当前评论中is_admin==1时则为管理员发送
		//或者是当前评论为@站长的信息
		if($comment_info['is_admin'] == 0){
			//文章作者信息
			$condition['id'] = $article_info['admin_id'];
			$info = D('Admin/Admin')->where($condition)->find();
			$to_email = $info['email'];//接收对象邮件地址
			$to_name = $info['name'];//接收对象昵称
			$from_name = $comment_info['name'] ? $comment_info['name'] : '匿名用户' ;//发送对象
			$title = $this->getTitle($comment_info, $article_info);
			$content = getContent($comment_info['content']);
			$url = 'http://www.500efuma.com'. U('Home/Article/view',array('id'=>$comment_info['aid']));
			$body = getMail($to_name,$from_name,$title,$content,$url);
			$is_send = sendMail($to_email,$to_email, $title, $body);
		}
	}
	
	
	/**
	 * @todo: 发送邮件
	 * @author Saki <ilulu4ever816@gmail.com>
	 * @date 2015-1-4 下午2:19:39 
	 * @version V1.0
	 */
	private function send($info,$comment_info,$article_info){
		if(isset($info['email'])){
			$to_email = $info['email'];//接收对象邮件地址
			$to_name = $info['name'];//接收对象昵称
			$from_name = $comment_info['name'] ? $comment_info['name'] : '匿名用户' ;//发送对象
			$title = $this->getTitle($comment_info, $article_info);//邮件标题
			$content = getContent($comment_info['content']);//邮件内容
			$url = 'http://www.500efuma.com'. U('Home/Article/view',array('id'=>$comment_info['aid']));
			$body = getMail($to_name,$from_name,$article_info['title'],$content,$url);
			$is_send = sendMail($to_email,$to_email, $title, $body);
		}
	}
	
}
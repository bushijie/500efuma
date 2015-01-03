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
		if($comment_id > 0){
			//这条评论的所有信息
			$map['id'] = $comment_id;
			$comment_info = D('Admin/ArticleComment')->where($map)->find();
			unset($map['id']);
			//这条评论所属文章的所有信息
			$map['id'] = $comment_info['aid'];
			$article_info = D('Admin/ArticleList')->where($map)->find();
			//确定发送对象
			$info = $this->getTo($comment_info,$article_info);
			if(isset($info['email'])){
				$to_email = $info['email'];//接收对象邮件地址
				$to_name = $info['name'];//接收对象昵称
				$from_name = $comment_info['name'] ? $comment_info['name'] : '匿名用户' ;//发送对象
				$title = $this->getTitle($comment_info, $article_info);
				$content = getContent($comment_info['content']);
				$url = 'http://www.500efuma.com'. U('Home/Article/view',array('id'=>$comment_info['aid']));
				$body = getMail($to_name,$from_name,$title,$content,$url);
				$is_send = sendMail($to_email,$to_email, $title, $body);
			}
			//判断是否给站长发送邮件
			$this->sendAdmin($comment_info, $article_info);
		}
	}
	
	/**
	 * @todo: 选择发送对象，如果评论的对象为【二级评论】，则向父级发送邮件
	 * @author Saki <ilulu4ever816@gmail.com>
	 * @date 2014-12-22 上午9:34:18
	 * @version V1.0
	 */
	private function getTo($comment_info,$article_info){
		if($comment_info['pid'] != 0){//二级评论
			$condition['id'] = $comment_info['pid'];
			$info = D('Admin/ArticleComment')->where($condition)->find();
		}else{
// 			$condition['id'] = $article_info['admin_id'];
// 			$info = D('Admin/Admin')->where($condition)->find();
			$info = null;
		}
		return $info;
	}
	
	
	private function getTitle($comment_info,$article_info){
		if($comment_info['pid'] != 0){
			$title = '有一位游客回复了你的评论：' . $article_info['title'] . '(请不要回复此邮件)';
		}else{
			$title = '有一位游客评论了你的文章：' . $article_info['title'] . '(请不要回复此邮件)';
		}
		return $title;
	}
	
	
	private function sendAdmin($comment_info,$article_info){
		if($comment_info['pid'] != 0 || $comment_info['is_admin'] == 0){//二级评论
			$condition['id'] = $comment_info['pid'];
			$info = D('Admin/ArticleComment')->where($condition)->find();
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
	
	
}
<?php
namespace Home\Behaviors;

class emailBehavior extends \Think\Behavior {
	
	/**
	 * (行为执行入口)
	 * 发送邮件
	 * @see \Think\Behavior::run()
	 */
	public function run(&$param) {
		$comment_id = $param;//评论结果id
		
		
		
		echo $param;
	}
	
	
}
<?php
namespace Home\Widget;
use Think\Controller;

class ToolWidget extends Controller {
	
	public function content($content){
		$Parsedown = new \Org\Markdown\Parsedown;
		$new_content = $Parsedown->text($content);
		$str=strip_tags($new_content);
		echo $str;
	}
	
	
}
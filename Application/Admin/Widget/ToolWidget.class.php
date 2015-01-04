<?php
namespace Admin\Widget;
use Think\Controller;

/**
 * @ClassName: Home\Widget$ToolWidget 
 * @Description: 页面插件扩展
 * @author Saki <ilulu4ever816@gmail.com>
 * @date 2015-1-4 上午11:01:47 
 */
class ToolWidget extends Controller {
	
	/**
	 * @todo: 显示评论中被@的游客昵称
	 * @return return_type    
	 * @author Saki <ilulu4ever816@gmail.com>
	 * @date 2015-1-4 上午11:01:44 
	 * @version V1.0
	 */
	public function commentToName($tid){
		$map['id'] = $tid;
		$model = D('Admin/ArticleComment');
		$info = $model->where($map)->find();
		if($info['is_admin'] == 1){
			$name = '@站长';
		}else{
			$name = ($info['name']) ? '@'.$info['name'] : '';
		}
		echo $name;
	}
	
	
	
}
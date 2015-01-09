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
		//被@的对象游客
		$info = $model->where($map)->find();
		//如果存在被@的对象
		if($info){
			//如果被@的对象为管理员
			if($info['is_admin']){
				$name = '@站长';
			}else{
				$name = $info['name'] ? '@'.$info['name'] : '@匿名用户';
			}
		}else{
			$name = '';
		}
		echo $name;
	}
	
	
	
}
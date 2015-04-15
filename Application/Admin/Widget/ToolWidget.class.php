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
		//被@对象的一级游客 
		$map2['id'] = $info['pid'];
		$info2 = $model->where($map2)->find();
		//查找1级评论的索引值
		$condition['aid'] = $info['aid'];
		$condition['pid'] = 0;
		$list_1 = $model->order('ctm asc')->where($condition)->select();
		$key_array_1 = array_keys($list_1,$info2);
		//查找所有的pid相同下的二级评论列表
		$condition2['pid'] = $info['pid'];
		$list_2 = $model->order('ctm asc')->where($condition2)->select();
		$key_array_2 = array_keys($list_2,$info);
		//楼层数显式
		$num_str = '#'.($key_array_1[0]+1).'-'.($key_array_2[0]+1);
		//如果存在被@的对象
		if($info){
			//如果被@的对象为管理员
			if($info['is_admin']){
				$name = '@'.$num_str.' 站长';
			}else{
				$name = $info['name'] ? '@'.$num_str.' '.$info['name'] : '@'.$num_str.' 匿名用户';
			}
		}else{
			$name = '';
		}
		echo $name;
	}
	
	
	
}
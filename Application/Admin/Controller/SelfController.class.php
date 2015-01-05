<?php
namespace Admin\Controller;
use Think\Controller;

/**
 * @ClassName: Admin\Controller$SelfController 
 * @Description: 后台简历信息管理
 * @author Saki <ilulu4ever816@gmail.com>
 * @date 2015-1-5 下午4:11:03 
 */
class SelfController extends AdminBaseController{
	
	/**
	 * @todo: 基本信息 
	 * @author Saki <ilulu4ever816@gmail.com>
	 * @date 2015-1-5 下午4:11:55 
	 * @version V1.0
	 */
	public function Info(){
		$model = new \Admin\Model\SelfInfoModel();
		$admin_info = $this->admin_info;
		if($_POST['Self']){
			$model->setInfo($_POST['Self'], $admin_info);
		}
		$map['admin_id'] = $admin_info['id'];
		$info = $model->where($map)->find();
		$this->assign('info',$info);
		$this->display();
	}
	
	/**
	 * @todo: 天赋技能
	 * @author Saki <ilulu4ever816@gmail.com>
	 * @date 2015-1-5 下午6:19:36 
	 * @version V1.0
	 */
	public function Skill(){
		
		
		
		$this->display();
	}
	
	
	
}
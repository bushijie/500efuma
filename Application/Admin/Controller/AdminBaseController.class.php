<?php
namespace Admin\Controller;
use Think\Controller;
/**
 * @ClassName: Admin\Controller$AdminBaseController 
 * @Description: 后台控制器基类
 * @author Saki <ilulu4ever816@gmail.com>
 * @date 2014-12-3 下午4:58:52 
 */
class AdminBaseController extends Controller{
	
	/**
	 * @todo: 初始化
	 * @author Saki <ilulu4ever816@gmail.com>
	 * @date 2014-12-3 下午4:59:13 
	 * @version V1.0
	 */
	public function _initialize(){
		//判断session中是否存有用户信息
		$is_admin = session('?admin');
		if(!$is_admin){
			$this->redirect('Public/login');
		}
		
	}
	
	
	
}
<?php
namespace Admin\Controller;
use Think\Controller;

/**
 * @ClassName: Admin\Controller$PublicController 
 * @Description: 公共方法
 * @author Saki <ilulu4ever816@gmail.com>
 * @date 2014-12-3 下午4:52:06 
 */
class PublicController extends Controller{
	
	/**
	 * @todo: 登录
	 * @author Saki <ilulu4ever816@gmail.com>
	 * @date 2014-12-3 下午4:52:21 
	 * @version V1.0
	 */
	public function login(){
		layout(false);
		$this->display();
	}
	
	/**
	 * @todo: 退出
	 * @author Saki <ilulu4ever816@gmail.com>
	 * @date 2014-12-3 下午4:52:29 
	 * @version V1.0
	 */
	public function logout(){
		
	}
	
	
	
	
	
	
	
}
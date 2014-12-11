<?php
namespace Admin\Controller;
use Think\Controller;

/**
 * @ClassName: Admin\Controller$HomeController 
 * @Description: 后台iframe入口页面【后台首页】
 * @author Saki <ilulu4ever816@gmail.com>
 * @date 2014-12-11 下午6:54:46 
 */
class HomeController extends Controller{
	
	/**
	 * @todo: 后台首页 
	 * @author Saki <ilulu4ever816@gmail.com>
	 * @date 2014-12-11 下午6:56:48 
	 * @version V1.0
	 */
	public function index(){
		$this->display();
	}
	
}
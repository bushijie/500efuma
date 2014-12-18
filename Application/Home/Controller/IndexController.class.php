<?php
namespace Home\Controller;
use Think\Controller;

/**
 * 前端页面的入口控制类
 * @author Saki <zha_zha@outlook.com>
 * @date 2014-5-13 上午10:29:39
 * @version 1.0.0
 */
class IndexController extends HomeBaseController {
	
	
	/** 
	* 首页显示 
	* @author Saki <zha_zha@outlook.com>
	* @date 2014-5-13上午10:29:39 
	* @version v1.0.0 
	*/
	public function index(){
		$this->display();
	}
	
	/** 
	* 文章列表
	* @author Saki <zha_zha@outlook.com>
	* @date 2014-5-13上午10:30:51 
	* @version v1.0.0 
	*/
	public function listinfo(){
		$this->display();
	}
	
	/** 
	* 关于我
	* @author Saki <zha_zha@outlook.com>
	* @date 2014-5-13上午10:31:10 
	* @version v1.0.0 
	*/
	public function me(){
		$this->display();
	}
}
<?php
/**
 * 入口文件
 * @author saki <zha_zha@outlook.com>
 * @version v1.0.0 saki 2014-2-7下午9:53:23
 */
class IndexAction extends Action {

	/**
	 * 网站首页,最新发表
	 * @author saki <zha_zha@outlook.com>
	 */
    public function index(){
    	$this->display();
	}

	/**
	 * 文章列表
	 * @author saki <zha_zha@outlook.com>
	 */
	public function postList(){
		$this->display();
	}

	/**
	 * 关于我
	 * @author saki <zha_zha@outlook.com>
	 */
	public function aboutMe(){
		$this->display();
	}

	/**
	 * 
	 */
	public function test(){
		$this->display();
	}

}

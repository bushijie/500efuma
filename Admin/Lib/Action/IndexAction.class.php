<?php
/**
 * 入口文件
 * @author saki <zha_zha@outlook.com>
 * @version v1.0.0 saki 2014-2-7下午9:53:23
 */
require_once 'Admin/Lib/Model/ArticleModel.class.php';
class IndexAction extends Action {

	/**
	 * 网站首页,最新发表
	 * @author saki <zha_zha@outlook.com>
	 */
    public function index(){
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
     * 写文章
     * @author saki <zha_zha@outlook.com>
	 */
	public function writeArticle(){
		$this->display();
	}

	public function test(){
		$title = $_POST ['title'];
		$content = $_POST ['content'];
		// 发表IT咨询
		// $Article = new ArticleModel ();
		// $Article->postArticle ( $authorId, $title, $content, $Tag );
		$this->assign ( 'title', $title );
		$this->assign ( 'content', $content );
  		// $this->display ( 'message' );
		$this->display();
	}

	/**
	 *
	 *
	 */
	public function postArticle(){
		
	}



}

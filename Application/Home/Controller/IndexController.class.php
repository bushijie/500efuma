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
//  		$ArticleList = M('Article');
		$model = new \Admin\Model\ArticleListModel();
		$count = $model->count();
		$Page = new \Think\Page($count,4);
		$Page->setConfig('prev','上一页');
		$Page->setConfig('next','下一页');
		$show = $Page->show();
		//
		$Parsedown = new \Org\Markdown\Parsedown;
		$list = $model->relation(true)->order('ctm desc')->limit ($Page->firstRow.','.$Page->listRows)->select ();
		foreach ($list as $k=>$article){
			$content = $article['content'];
			$new_content = strip_tags($Parsedown->text($content));
			$list[$k]['content'] = $new_content;
		}
		$this->assign('list',$list);
		$this->assign('page',$show);
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
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
		$model = new \Admin\Model\ArticleListModel();
		$count = $model->count();
		//分页显示设置
		$Page = new \Think\Page($count,10);
		$Page->setConfig('prev','上一页');
		$Page->setConfig('next','下一页');
		$Page->setConfig('theme','%FIRST%  %LINK_PAGE%  %END%');
		$show = $Page->show();
		//分页数据处理
		$Parsedown = new \Org\Markdown\Parsedown;
		$list = $model->relation(true)->order('ctm desc')->limit ($Page->firstRow.','.$Page->listRows)->select ();
		foreach ($list as $k=>$article){
			//内容的截取
			$content = $article['content'];
			$new_content = strip_tags($Parsedown->text($content));
			$list[$k]['content'] = mb_substr($new_content,0,300, 'utf-8') . '...';
			//时间的处理
			$list[$k]['ctm_M'] = date('M',strtotime($article['ctm']));//月份简写
			$ctm_F = date('F',strtotime($article['ctm']));//月份全写
			$len_M = strlen($list[$k]['ctm_M']);//缩写字符串的长度
			$ctm_F = mb_substr($ctm_F,$len_M);//截取剩余字符串
			$list[$k]['ctm_F'] = $ctm_F;//月份全写截取后的剩余字符串
			$list[$k]['ctm_Y'] = date('Y',strtotime($article['ctm']));//年份
			$list[$k]['ctm_D'] = date('d',strtotime($article['ctm']));//日期
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
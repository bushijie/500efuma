<?php
namespace Admin\Controller;
use Think\Controller;

/**
 * @ClassName: Admin\Controller$ArticleListController 
 * @Description: 文章列表控制器文件
 * @author Saki <ilulu4ever816@gmail.com>
 * @date 2014-12-12 上午9:35:32 
 */
class ArticleListController extends Controller{
	
	
	/**
	 * @todo:  文章列表显示页面
	 * @author Saki <ilulu4ever816@gmail.com>
	 * @date 2014-12-12 上午9:35:49 
	 * @version V1.0
	 */
	public function index(){
		$this->display();
	}
	
	/**
	 * @todo: 文章列表表格ajax数据加载方法
	 * @author Saki <ilulu4ever816@gmail.com>
	 * @date 2014-12-12 上午10:21:33 
	 * @version V1.0
	 */
	public function jsondb(){
		$draw = $_GET['draw'];
		$start = $_GET['start'];
		$length = $_GET['length'];
		/*列表分页查询*/
		$model = new \Admin\Model\ArticleListModel();
		$list = $model->getArticleList_Page($start,$length);
		/*查询总条数*/
		$count = D('Admin/ArticleList')->count();
		/*生成JSON数据,安装前段表格框架的形式进行数据返回，jquery.datatable.js*/
		$result['draw'] = $draw;
		$result['recordsTotal'] = $count;
		$result['recordsFiltered'] = $count;
		$result['data'] = $list;
		echo json_encode($result);
	}
	
}
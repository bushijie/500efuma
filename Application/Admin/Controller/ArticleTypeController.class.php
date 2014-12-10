<?php
namespace Admin\Controller;
use Think\Controller;

/**
 * @ClassName: Admin\Controller$ArticleTypeController 
 * @Description: 文章类型控制器
 * @author Saki <ilulu4ever816@gmail.com>
 * @date 2014-12-10 上午10:45:38 
 */
class ArticleTypeController extends Controller{
	
	/**
	 * @todo: 文章类型列表显示页面
	 * @author Saki <ilulu4ever816@gmail.com>
	 * @date 2014-12-10 上午10:45:54 
	 * @version V1.0
	 */
	public function index(){
		$this->display();
	}
	
	/**
	 * @todo: 文章类型表格ajax数据加载方法
	 * 数据操作返回json格式，使用前段表格框架进行图形加载显示
	 * @author Saki <ilulu4ever816@gmail.com>
	 * @date 2014-12-10 上午11:06:52 
	 * @version V1.0
	 */
	public function jsondb(){
		$draw = $_GET['draw'];
		$start = $_GET['start'];
		$length = $_GET['length'];
		/*列表分页查询*/
		$model = new \Admin\Model\ArticleTypeModel();
		$list = $model->getTypeList_Page($start,$length);
		/*查询总条数*/
		$count = D('Admin/ArticleType')->count();
		/*生成JSON数据,安装前段表格框架的形式进行数据返回，jquery.datatable.js*/
		$result['draw'] = $draw;
		$result['recordsTotal'] = $count;
		$result['recordsFiltered'] = $count;
		$result['data'] = $list;
		echo json_encode($result);
	}
	
	
	/**
	 * @todo: 创建规则
	 * @author Saki <ilulu4ever816@gmail.com>
	 * @date 2014-12-10 上午10:45:48 
	 * @version V1.0
	 */
	public function create(){
		$this->assign('action','create');
		$this->display('form');
	}
	
	/**
	 * @todo: 编辑规则
	 * @author Saki <ilulu4ever816@gmail.com>
	 * @date 2014-12-10 下午6:07:29 
	 * @version V1.0
	 */
	public function update(){
		$this->assign('action','update');
		$this->display('form');
	}
	
}
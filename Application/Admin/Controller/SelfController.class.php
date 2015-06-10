<?php
namespace Admin\Controller;
// use Think\Controller;

/**
 * @ClassName: Admin\Controller$SelfController 
 * @Description: 后台简历信息管理
 * @author Saki <ilulu4ever816@gmail.com>
 * @date 2015-1-5 下午4:11:03 
 */
class SelfController extends AdminBaseController{
	
	/********************************************************
	 *                       基本信息 
	 ********************************************************/
	
	/**
	 * @todo: 基本信息 
	 * @author Saki <ilulu4ever816@gmail.com>
	 * @date 2015-1-5 下午4:11:55 
	 * @version V1.0
	 */
	public function Info(){
		$model = new \Admin\Model\SelfInfoModel();
		$admin_info = $this->admin_info;
		if($_POST['Self']){
			$model->setInfo($_POST['Self'], $admin_info);
		}
		$map['admin_id'] = $admin_info['id'];
		$info = $model->where($map)->find();
		$this->assign('info',$info);
		$this->display();
	}
	
	/********************************************************
	 *                       天赋技能
	 ********************************************************/
	
	
	/**
	 * @todo: 天赋技能
	 * @author Saki <ilulu4ever816@gmail.com>
	 * @date 2015-1-5 下午6:19:36 
	 * @version V1.0
	 */
	public function Skill(){
		$model = new \Admin\Model\SelfSkillModel();
		$admin_info = $this->admin_info;
		$action = $_GET['action'];
		if($_POST['Self']){
			if($action == 'create'){
				$model->createSkill($_POST['Self'], $admin_info);
			}else if($action == 'update'){
				$model->updateSkill($_POST['Self']);
			}
		}
		$map['admin_id'] = $admin_info['id'];
		$list = $model->where($map)->select();
		$this->assign('list',$list);
		$this->display();
	}
	
	
	/********************************************************
	 *                       历史成就
	 ********************************************************/
	
	
	/**
	 * @todo: 历史成就
	 * @author Saki <ilulu4ever816@gmail.com>
	 * @date 2015-1-6 上午11:41:30 
	 * @version V1.0
	 */
	public function Company(){
		$model = new \Admin\Model\SelfCompanyModel();
		$admin_info = $this->admin_info;
		$action = $_GET['action'];
		if($_POST['Self']){
			if($action == 'create'){
				$model->createCompany($_POST['Self'], $admin_info);
			}else if($action == 'update'){
				$model->updateCompany($_POST['Self']);
			}
		}
		$map['admin_id'] = $admin_info['id'];
		$list = $model->where($map)->select();
		$this->assign('list',$list);
		$this->display();
	}
	
	
	/********************************************************
	 *                       首领击杀
	 ********************************************************/
	
	
	/**
	 * @todo: 首领击杀
	 * @author Saki <ilulu4ever816@gmail.com>
	 * @date 2015-1-6 上午11:49:38 
	 * @version V1.0
	 */
	public function Project(){
		$this->display();
	}
	
	/**
	 * @todo: 新建项目信息
	 * @author Saki <ilulu4ever816@gmail.com>
	 * @date 2015-1-6 下午7:07:50 
	 * @version V1.0
	 */
	public function CreatePro(){
		$admin_info = $this->admin_info;
		if(isset($_POST['Self'])){
			$model = new \Admin\Model\SelfProjectModel();
			$data = $model->createPro($_POST['Self'],$admin_info);
			echo json_encode($data);
		}else{
			$map['admin_id'] = $admin_info['id'];
			$company_list = D('Admin/SelfCompany')->where($map)->select();
			$this->assign('company_list',$company_list);
			$this->assign('action','create');
			$this->display('form_pro');
		}
	}
	
	/**
	 * @todo: 修改项目信息
	 * @author Saki <ilulu4ever816@gmail.com>
	 * @date 2015-1-6 下午7:08:04 
	 * @version V1.0
	 */
	public function UpdatePro(){
		$admin_info = $this->admin_info;
		$condition['id'] = $_GET['id'];
		$model = new \Admin\Model\SelfProjectModel();
		if(isset($_POST['Self'])){
			$data = $model->updatePro($_POST['Self'], $_GET['id']);
			echo json_encode($data);
		}else{
			$map['admin_id'] = $admin_info['id'];
			$company_list = D('Admin/SelfCompany')->where($map)->select();
			$project = $model->where($condition)->find();
			$this->assign('project',$project);
			$this->assign('company_list',$company_list);
			$this->assign('action','update');
			$this->display('form_pro');
		}
	}
	
	
	/**
	 * @todo: todo(这里用一句话描述这个方法的作用) 
	 * @author Saki <ilulu4ever816@gmail.com>
	 * @date 2015-1-6 下午7:18:17 
	 * @version V1.0
	 */
	public function DeletePro(){
		$id = $_GET['id'];
		$model = new \Admin\Model\SelfProjectModel();
		$data = $model->deletePro($id);
		if($data['errcode'] == 0){
			$this->redirect('Self/project');
		}
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
		$model = new \Admin\Model\SelfProjectModel();
		$list = $model->getProjectList_Page($start,$length);
		/*查询总条数*/
		$admin_info = $this->admin_info;
		$map['admin_id'] = $admin_info['id'];
		$count = D('Admin/SelfProject')->where($map)->count();
		/*生成JSON数据,安装前段表格框架的形式进行数据返回，jquery.datatable.js*/
		$result['draw'] = $draw;
		$result['recordsTotal'] = $count;
		$result['recordsFiltered'] = $count;
		$result['data'] = $list;
		echo json_encode($result);
	}
	
}
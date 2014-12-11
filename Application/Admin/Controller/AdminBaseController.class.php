<?php
namespace Admin\Controller;
use Think\Controller;
/**
 * @ClassName: Admin\Controller$AdminBaseController 
 * @Description: 后台控制器基类
 * @author Saki <ilulu4ever816@gmail.com>
 * @date 2014-12-3 下午4:58:52 
 */
class AdminBaseController extends Controller{
	
	/**
	 * @todo: 初始化
	 * @author Saki <ilulu4ever816@gmail.com>
	 * @date 2014-12-3 下午4:59:13 
	 * @version V1.0
	 */
	public function _initialize(){
		$this->checkAdmin();
		$this->init_sidebar();
	}
	
	/**
	 * @todo: 初始化sidebar(左侧菜单)
	 * @author Saki <ilulu4ever816@gmail.com>
	 * @date 2014-12-4 下午2:26:55 
	 * @version V1.0
	 */
	public function init_sidebar(){
		$sidebar = sidebar();
		$active_bar = 'home';
		$this->assign('sidebar',$sidebar);
		$this->assign('active_bar',$active_bar);//默认选中
	}
	
	/**
	 * @todo: 检测session，检测后台管理员是否登录
	 * @author Saki <ilulu4ever816@gmail.com>
	 * @date 2014-12-4 下午2:27:40 
	 * @version V1.0
	 */
	public function checkAdmin(){
// 		判断session中是否存有用户信息
		$admin_info = cookie('admin_info');
		if(!$admin_info){
			$this->redirect('Admin/login');
		}
		$this->assign('admin_info',$admin_info);
	}
	
	
	
}
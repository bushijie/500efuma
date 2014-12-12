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
	
	public $admin_info;
	
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
	 * @todo: cookie检查后台用户的基本信息
	 * 30330e97a2bde4a811348340a16485de
	 * @author Saki <ilulu4ever816@gmail.com>
	 * @date 2014-12-4 下午2:27:40 
	 * @version V1.0
	 */
	public function checkAdmin(){
		//cookie中保存的用户信息
		$admin_info = cookie('admin_info');
		if(!$admin_info){
			//如果cookie过期了，直接退出，重新登录
			$this->redirect('Admin/login');
		}else{
			//如果cookie没有过期，取出缓存中的数据，进行数据辨认
			$Admin = new \Admin\Model\AdminModel();
			$map['account'] = $admin_info['account'];
			$map['password'] = $admin_info['password'];
			$istrue = $Admin->where($map)->find();
			//如果能查找到这个数据，则继续操作
			if($istrue){
				$this->admin_info = $admin_info;
				$this->assign('admin_info',$this->admin_info);
			}else{
				$this->redirect('Admin/login');
			}
		}
	}
	
	
	
}
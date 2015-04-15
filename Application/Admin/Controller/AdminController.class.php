<?php
namespace Admin\Controller;
use Think\Controller;
/**
 * @ClassName: Admin\Controller$PublicController
 * @Description: 后台公共方法，登录，退出等
 * @author Saki <ilulu4ever816@gmail.com>
 * @date 2014-12-3 下午4:52:06
 */
class AdminController extends Controller{
	
	/**
	 * @todo: 登录页面显示
	 * @author Saki <ilulu4ever816@gmail.com>
	 * @date 2014-12-3 下午4:52:21
	 * @version V1.0
	 */
	public function login(){
		layout(false);
		//如果设置过【记住密码】就从cookie中获取数据，并且显示在页面上
		$username = cookie('admin_account');
		$password = cookie('admin_pwd');
		//页面数据加载
		$this->assign('username',$username);
		$this->assign('password',$password);
		$this->display();
	}
	
	/**
	 * @todo: ajax检测账号是否存在
	 * @author Saki <ilulu4ever816@gmail.com>
	 * @date 2014-12-11 下午4:40:43 
	 * @version V1.0
	 */
	public function checkLogin(){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$remember = $_POST['remember'];
		$model = new \Admin\Model\AdminModel();
		$info = $model->check_username_password($username, $password);
		if($info){
			cookie('admin_info',$info,60*60*24*7);
			//记住密码
			if($remember == 1){
				cookie('admin_account',$username,60*60*24*7);
				cookie('admin_pwd',$password,60*60*24*7);
				cookie('admin_remember',$username,60*60*24*7);
			}
		}
		$data['errcode'] = $info ? 0 : 404;
		$data['msg'] = $info ? '检测通过' : '账号或密码错误';
		echo json_encode($data);
	}
	
	/**
	 * @todo: 退出
	 * @author Saki <ilulu4ever816@gmail.com>
	 * @date 2014-12-3 下午4:52:29
	 * @version V1.0
	 */
	public function logout(){
		cookie('admin_info',null);
		cookie('admin_account',null);
		cookie('admin_pwd',null);
		$this->redirect('Admin/login');
	}
	
	/**
	 * @todo: 注销
	 * @author Saki <ilulu4ever816@gmail.com>
	 * @date 2014-12-11 下午5:56:04 
	 * @version V1.0
	 */
	public function lock(){
		layout(false);
		$admin_info = cookie('admin_info');
		//注销状态登录
		if(isset($_POST['status']) && $_POST['status'] == 'lock' ){
			$pwd = $_POST['password'];
			if(md5($pwd . '500efuma') === $admin_info['password']){
				$this->redirect('Index/index');
			}
		}
		$this->assign('admin_info',$admin_info);
		$this->display();
	}
	
	
	
}
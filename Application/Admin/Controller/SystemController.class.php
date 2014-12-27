<?php
namespace Admin\Controller;
use Think\Controller;

class SystemController extends AdminBaseController{
	
	
	public function index(){
		$this->display();
	}
	
	/**
	 * 傻逼语录
	 */
	public function editText(){
		$model = new \Admin\Model\SystemModel();
		if(isset($_POST['System'])){
			$post = $_POST['System'];
			$admin_info = $this->admin_info;
			$model->editText($post,$admin_info);
		}
		$value = $model->getValue('text');
		$this->assign('text',$value);
		$this->display('edit_text');
	}
	
	
	
}
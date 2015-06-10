<?php
namespace Admin\Controller;
// use Think\Controller;

/**
 * @ClassName: Admin\Controller$IndexController 
 * @Description: 后台主入口处理
 * @author Saki <ilulu4ever816@gmail.com>
 * @date 2014-12-11 下午6:53:58 
 */
class IndexController extends AdminBaseController {
	
	
	public function _initialize(){
		layout('Layout/metronic');
		parent::_initialize();
	}
	
	/**
	 * @todo: 后台入口方法，没有实际的页面，只是根据layout进行渲染
	 * @author Saki <ilulu4ever816@gmail.com>
	 * @date 2014-12-11 下午6:54:14 
	 * @version V1.0
	 */
    public function index(){
    	$this->display();
    }
    
    
    
}
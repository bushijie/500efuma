<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends AdminBaseController {
	
	
	public function _initialize(){
		layout('Layout/metronic');
		parent::_initialize();
	}
	
    public function index(){
    	$this->display();
    }
    
    
    
}
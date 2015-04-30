<?php
namespace Home\Controller;
use Think\Controller;

/**
 * @ClassName: Home\Controller$PublicController 
 * @Description: 模板布局文件处理以及公共方法调用的处理
 * @author Saki <ilulu4ever816@gmail.com>
 * @date 2014-12-3 下午4:52:06 
 */
class PublicController extends HomeBaseController{

	/**
	 * 
	 * 
	 */
	public function qqcallback(){
		echo '腾讯回调地址';
	}
	
	
	
	
}
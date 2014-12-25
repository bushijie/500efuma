<?php
namespace Admin\Controller;
use Think\Controller;

/**
 * @ClassName: Admin\Controller$UtilController 
 * @Description: 工具类控制器，主要用户文件上传等
 * @author Saki <ilulu4ever816@gmail.com>
 * @date 2014-12-24 下午6:08:09 
 */
class UtilController extends Controller {
	
	public function uploadImg(){
		$upload = new \Think\Upload();
		$upload->maxSize = 5242880;//5M
		$upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
		$upload->savePath  =      './Uploads/'; // 设置附件上传目录
		// 上传文件
		$info   =   $upload->upload();
		if(!$info) {
			// 上传错误提示错误信息
			$this->error($upload->getError());
		}else{
			// 上传成功
			$this->success('上传成功！');
		}
	}
	
	public function upload(){
		$upload = new \Org\Upload\UploadHandler();
	}
	
}
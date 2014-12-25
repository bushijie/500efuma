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
	
	/**
	 * @todo: 文章编辑时的图片上传接口
	 * @author Saki <ilulu4ever816@gmail.com>
	 * @date 2014-12-26 上午10:45:54
	 * @version V1.0
	 */
	public function uploadImg(){
		//上传文件的配置
		$options = array(
			'image_versions' => array(
                'thumbnail' => array('max_width' => 700,'max_height' => 700)//缩略图大小配置
        	)
		);
		$upload = new \Org\Upload\UploadHandler($options);
	}
	
}
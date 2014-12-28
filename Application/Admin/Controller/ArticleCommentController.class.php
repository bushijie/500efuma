<?php
namespace Admin\Controller;
use Think\Controller;


class ArticleCommentController extends AdminBaseController{
	
	
	public function update(){
				
		
		
	}

	public function delete(){
		$aid = $_GET['aid'];
		$id = $_GET['id'];
		$model = new \Admin\Model\ArticleCommentModel();
		$model->deleteComment($id);
		//删除成功进行页面跳转
		if($data['errcode'] == 0){
			$this->redirect('ArticleList/view',array('id'=>$aid,'p'=>1));
		}
	}

}
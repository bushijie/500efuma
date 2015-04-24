<?php
namespace Admin\Controller;
use Think\Controller;

/**
 * @ClassName: Admin\Controller$LinksController 
 * @Description: 友链-后台管理 
 * @author Saki <ilulu4ever816@gmail.com>
 * @date 2015年4月24日 上午11:05:14 
 */
class LinksController extends AdminBaseController {
    
    public function index(){
        $this->display();
    }
    
    public function jsondb(){
        $draw = $_GET['draw'];
        $start = $_GET['start'];
        $length = $_GET['length'];
        /*列表分页查询*/
        $model = new \Admin\Model\LinksModel();
        $list = $model->getLinksList_Page($start, $length);
        /*查询总条数*/
        $count = D('Admin/Links')->count();
        /*生成JSON数据,安装前段表格框架的形式进行数据返回，jquery.datatable.js*/
        $result['draw'] = $draw;
        $result['recordsTotal'] = $count;
        $result['recordsFiltered'] = $count;
        $result['data'] = $list;
        echo json_encode($result);
    }
    
    public function create(){
        if(isset($_POST['Links'])){
            $model = new \Admin\Model\LinksModel();
            $admin_info = $this->admin_info;
            $data = $model->createLink($_POST['Links']);
            echo json_encode($data);
        }else{
            $this->assign('action','create');
            $this->display('form');
        }
    }
    
    public function update(){
        $condition['id'] = $id = $_GET['id'];
        $model = new \Admin\Model\LinksModel();
        if(isset($_POST['Links'])){
            $data = $model->updateLink($_POST['Links'], $id);
            echo json_encode($data);
        }else{
            $link_info = $model->where($condition)->find();
            $this->assign('link_info',$link_info);
            $this->assign('action','update');
            $this->display('form');
        }
    }
    
    public function delete(){
        $id = $_GET['id'];
        $model = new \Admin\Model\LinksModel();
        $data = $model->deleteLink($id);
        if($data['errcode'] == 0){
            $this->redirect('Links/index');
        }
    }
    
}
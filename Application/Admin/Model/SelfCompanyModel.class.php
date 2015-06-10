<?php
namespace Admin\Model;
use Think\Model\RelationModel;
use Think\Exception;

/**
 * @ClassName: Admin\Model$SelfCompanyModel 
 * @Description: 简历-历史成就-数据库模块
 * @author Saki <ilulu4ever816@gmail.com>
 * @date 2015-1-6 下午5:01:44 
 */
class SelfCompanyModel extends RelationModel {
	
	protected $tableName = 'self_company';
	
	/**
	 * @todo: 创建新的历史成就
	 * @param $post
	 * @param $admin_info    
	 * @author Saki <ilulu4ever816@gmail.com>
	 * @date 2015-1-6 下午5:01:06 
	 * @version V1.0
	 */
	public function createCompany($post,$admin_info){
		$model = D('Admin/SelfCompany');
		$post['admin_id'] = $admin_info['id'];
		$post['ctm'] = date('Y-m-d H:i:s',time());
		try {
			$model->data($post)->add($post);
		} catch (Exception $e) {
		}
	}
	
	/**
	 * @todo: 批量更新数据
	 * @param @param unknown $postList    
	 * @author Saki <ilulu4ever816@gmail.com>
	 * @date 2015-1-6 下午5:02:25 
	 * @version V1.0
	 */
	public function updateCompany($postList){
		$model = D('Admin/SelfCompany');
		$ids = implode(',', array_keys($postList));
		$sql = "UPDATE __PREFIX__self_company ";
		//sql分类拼接
		$name_sql = "SET name = CASE id ";
		$work_sql = "work = Case id ";
		$achievement_sql = "achievement = Case id ";
		$stm_sql = "stm = Case id ";
		$etm_sql = "etm = Case id ";
		foreach ($postList as $company){
			$name_sql .= sprintf("WHEN %d THEN %s ", $company['id'], "'" . $company['name'] ."'");
			$work_sql .= sprintf("WHEN %d THEN %s ", $company['id'], "'" .$company['work'] ."'");
			$achievement_sql .= sprintf("WHEN %d THEN %s ", $company['id'], "'" .$company['achievement'] ."'");
			$stm_sql .= sprintf("WHEN %d THEN %s ", $company['id'], "'" .$company['stm'] ."'");
			$etm_sql .= sprintf("WHEN %d THEN %s ", $company['id'], "'" .$company['etm'] ."'");
		}
		$name_sql .= "END,";
		$work_sql .= "END,";
		$achievement_sql .= "END,";
		$stm_sql .= "END,";
		$etm_sql .= "END";
		$sql .= $name_sql . $work_sql . $achievement_sql . $stm_sql . $etm_sql . " WHERE id IN ($ids)";
		try {
			$model->query($sql);
		} catch (Exception $e) {
		}
	}
	
	
}
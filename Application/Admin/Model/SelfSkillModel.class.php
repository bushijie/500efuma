<?php
namespace Admin\Model;
use Think\Model\RelationModel;

/**
 * @ClassName: Admin\Model$SelfSkillModel 
 * @Description: 简历-天赋技能-数据模型
 * @author Saki <ilulu4ever816@gmail.com>
 * @date 2015-1-6 上午10:19:49 
 */
class SelfSkillModel extends RelationModel {
	
	protected $tableName = 'self_skill';
	
	/**
	 * @todo: 设置天赋技能信息 
	 * @param $post
	 * @param $admin_info
	 * @author Saki <ilulu4ever816@gmail.com>
	 * @date 2015-1-6 上午10:19:31 
	 * @version V1.0
	 */
	public function createSkill($post,$admin_info){
		$model = D('Admin/SelfSkill');
		$post['admin_id'] = $admin_info['id'];
		$post['ctm'] = date('Y-m-d H:i:s',time());
		try {
			$model->data($post)->add($post);
		} catch (Exception $e) {
		}
	}
	
	/**
	 * @todo: 修改技能数值，进行sql的批量操作
	 * @param $postList  技能数值数组
	 * @author Saki <ilulu4ever816@gmail.com>
	 * @date 2015-1-6 上午10:58:56 
	 * @version V1.0
	 */
	public function updateSkill($postList){
		$model = D('Admin/SelfSkill');
		$ids = implode(',', array_keys($postList));
		$sql = "UPDATE __PREFIX__self_skill SET value = CASE id ";
		foreach ($postList as $skill){
			$sql .= sprintf("WHEN %d THEN %d ", $skill['id'], $skill['value']);
		}
		$sql .= "END WHERE id IN ($ids)";
		try {
			$model->query($sql);
		} catch (Exception $e) {
		}
	}
	
	
	
	
	
}
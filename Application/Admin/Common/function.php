<?php
/**
 * 菜单列表
 * @author Saki <zha_zha@outlook.com>
 * @date 2014-8-2 上午9:35:21
 * @version v1.0.0
 */
function sidebar(){
	return array(
		'home' => array(
			'name'=>'首页',
			'key'=>'home',	
			'url'=> U('Admin/Home/index'),
			'icon'=>'fa-home',
		),
		'article' => array(
			'name'=>'文章管理',
			'key'=>'article',
			'url'=>'',
			'icon'=>'fa-bar-chart-o',
			'child'=>array(
				'workType'=>array(
					'name'=>'文章类型',
					'key'=>'articleType',
					'url'=> U('Admin/ArticleType/index'),
				),
				'workList'=>array(
					'name'=>'文章列表',
					'key'=>'articleList',
					'url'=> U('Admin/ArticleList/index'),
				),
			),
		),
		'reply' => array(
			'name'=>'回复管理',
			'key'=>'reply',
			'url'=>U('Admin/Reply/index'),
			'icon'=>'fa-bar-chart-o',
		),
		'self' => array(
			'name'=>'简历管理',
			'key'=>'self',
			'url'=>U('Admin/Self/index'),
			'icon'=>'fa-file-text',
		),
		'system' => array(
			'name'=>'系统管理',
			'key'=>'system',
			'url'=>'',
			'icon'=>'fa-cogs',
			'child'=>array(
				'sysMsg'=>array(
					'name'=>'傻逼语录',
					'key'=>'sysMsg',
					'url'=>U('Admin/System/editText'),
				),
				'sysPhone'=>array(
					'name'=>'联系方式',
					'key'=>'sysPhone',
					'url'=>U('Admin/System/index'),
				),
			),
		),
	);
}
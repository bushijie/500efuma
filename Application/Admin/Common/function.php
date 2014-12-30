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
			'url'=>'/Home/index',
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
					'url'=>'/ArticleType/index',
				),
				'workList'=>array(
					'name'=>'文章列表',
					'key'=>'articleList',
					'url'=>'/ArticleList/index',
				),
			),
		),
		'reply' => array(
			'name'=>'回复管理',
			'key'=>'reply',
			'url'=>'/Reply/index',
			'icon'=>'fa-bar-chart-o',
		),
		'self' => array(
			'name'=>'简历管理',
			'key'=>'self',
			'url'=>'/Self/index',
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
					'url'=>'/System/editText',
				),
				'sysPhone'=>array(
					'name'=>'联系方式',
					'key'=>'sysPhone',
					'url'=>'/System/index',
				),
			),
		),
	);
}
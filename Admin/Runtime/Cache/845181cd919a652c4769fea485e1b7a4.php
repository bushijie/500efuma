<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
	<head>
		<title>魔王的傻逼主页</title>
		<link rel="shortcut icon" href="__ROOT__/favicon.ico">
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400italic,700|Open+Sans+Condensed:300,700" rel="stylesheet" />
		<!-- 代码高亮插件css -->
		<!-- <link rel="stylesheet" type="text/css" href="__ROOT__/Template/css/codestyle.css"> -->
		<link rel="stylesheet" type="text/css" href="__ROOT__/Widget/kindedit/plugins/codelight/codelight.css">
		<!-- 主题CSS -->
		<script src="__ROOT__/Template/js/jquery-1.9.1.min.js"></script>
		<script src="__ROOT__/Template/js/config.js"></script>
		<script src="__ROOT__/Template/js/skel.min.js"></script>
		<script src="__ROOT__/Template/js/skel-ui.min.js"></script>
		<!-- KindEdit -->
		<script charset="utf-8" src="__ROOT__/Widget/kindedit/kindeditor-all-min.js"></script>
		<script charset="utf-8" src="__ROOT__/Widget/kindedit/lang/zh_CN.js"></script>
		<script charset="utf-8" src="__ROOT__/Widget/kindedit/editoption.js"></script>
		<script charset="utf-8" src="__ROOT__/Widget/kindedit/plugins/codelight/codelight.js"></script>
		<!-- 响应式CSS -->
		<noscript>
			<link rel="stylesheet" href="/Template/css/skel-noscript.css" />
			<link rel="stylesheet" href="/Template/css/style.css" />
			<link rel="stylesheet" href="/Template/css/style-desktop.css" />
			<link rel="stylesheet" href="/Template/css/style-wide.css" />
		</noscript>
		<!--[if lte IE 9]><link rel="stylesheet" href="__ROOT__/Template/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><script src="__ROOT__/Template/js/html5shiv.js"></script><link rel="stylesheet" href="__ROOT__/Template/css/ie8.css" /><![endif]-->
		<!--[if lte IE 7]><link rel="stylesheet" href="__ROOT__/Template/css/ie7.css" /><![endif]-->
	</head>
	<body class="left-sidebar">
		<!-- Wrapper -->
			<div id="wrapper">
				<!-- Content -->
					<div id="content">
						<div id="content-inner">
								<!-- Post -->
								<!-- 文章列表 -->
								<article class="is-post is-post-excerpt">
									<div class="info">
										<span class="date" id="date_postlist">
											<span class="month">新建文章<span></span></span> 
										</span>
									</div>
					      	        <!-- Edit Test -->
									<div id="edit_test">
									 	<form action="test" method="post">
									 		<input type="text" class="input" style="width: 450px;" name="title">
									 		<textarea id="edit" name="content"></textarea>
									 		<input type="submit" class="btn" value="Submit">
									 	</form>
									</div>
								</article>


						</div>
					</div>

				<!-- Sidebar -->
					<div id="sidebar">
						<!-- Logo -->
						<div id="logo">
							<h1>500efuma</h1>
						</div>
						<!-- 菜单栏 -->
						<nav id="nav">
							<ul>
								<li><a href="__URL__/index">文章列表</a></li>
								<li><a href="__URL__/aboutMe">关于我</a></li>
								<li  class="current_page_item"><a href="__URL__/writeArticle">写文章</a></li>
								<li><a href="#">文章标签</a></li>
								<li><a href="#">其他</a></li>
							</ul>
						</nav>
						

						<!-- Calendar -->
							<section class="is-calendar">
								<div class="inner">
									<table>
										<caption>February 2013</caption>
										<thead>
											<tr>
												<th scope="col" title="Monday">M</th>
												<th scope="col" title="Tuesday">T</th>
												<th scope="col" title="Wednesday">W</th>
												<th scope="col" title="Thursday">T</th>
												<th scope="col" title="Friday">F</th>
												<th scope="col" title="Saturday">S</th>
												<th scope="col" title="Sunday">S</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td colspan="4" class="pad"><span>&nbsp;</span></td>
												<td class="today"><a href="#">1</a></td>
												<td><span>2</span></td>
												<td><span>3</span></td>
											</tr>
											<tr>
												<td><span>4</span></td>
												<td><span>5</span></td>
												<td><a href="#">6</a></td>
												<td><span>7</span></td>
												<td><span>8</span></td>
												<td><span>9</span></td>
												<td><a href="#">10</a></td>
											</tr>
											<tr>
												<td><span>11</span></td>
												<td><span>12</span></td>
												<td><span>13</span></td>
												<td><a href="#">14</a></td>
												<td><span>15</span></td>
												<td><span>16</span></td>
												<td><span>17</span></td>
											</tr>
											<tr>
												<td><span>18</span></td>
												<td><span>19</span></td>
												<td><span>20</span></td>
												<td><span>21</span></td>
												<td><span>22</span></td>
												<td><a href="#">23</a></td>
												<td><span>24</span></td>
											</tr>
											<tr>
												<td><a href="#">25</a></td>
												<td><span>26</span></td>
												<td><span>27</span></td>
												<td><span>28</span></td>
												<td class="pad" colspan="3"><span>&nbsp;</span></td>
											</tr>
										</tbody>
									</table>
								</div>
							</section>



						<!-- Copyright -->
							<div id="copyright">
								<p>
									&copy; 2013 500efuma.<br />
									Author: <a href="http://n33.co">Saki</a>
								</p>
							</div>
					</div>

			</div>

	</body>
</html>
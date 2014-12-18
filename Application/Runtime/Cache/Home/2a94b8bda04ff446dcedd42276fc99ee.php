<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
	<head>
	<title>魔王的傻逼主页</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<link href="/Template/css/style-font.css" rel="stylesheet" />
	<link href="/Template/css/bar.css" rel="stylesheet" />
	<script src="/Template/js/jquery-1.9.1.min.js"></script>
	<script src="/Template/js/config.js"></script>
	<script src="/Template/js/skel.min.js"></script>
	<script src="/Template/js/skel-ui.min.js"></script>
	<noscript>
		<link rel="stylesheet" href="/Template/css/skel-noscript.css" />
		<link rel="stylesheet" href="/Template/css/style.css" />
		<link rel="stylesheet" href="/Template/css/style-desktop.css" />
		<link rel="stylesheet" href="/Template/css/style-wide.css" />
	</noscript>
	<link rel="shortcut icon" href="/favicon.ico">
	<!--[if lte IE 9]><link rel="stylesheet" href="/Template/css/ie9.css" /><![endif]-->
	<!--[if lte IE 8]><script src="/Template/js/html5shiv.js"></script><link rel="stylesheet" href="/Template/css/ie8.css" /><![endif]-->
	<!--[if lte IE 7]><link rel="stylesheet" href="/Template/css/ie7.css" /><![endif]-->
</head>
	<body class="left-sidebar">
		<!-- Wrapper -->
		<div id="wrapper">
			<!-- Content -->
			<div id="content">
	<div id="content-inner">
		<!-- 文章列表 -->
		<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$article): $mod = ($i % 2 );++$i;?><article class="is-post is-post-excerpt">
				<header>
					<h2><a href="#"><?php echo ($article["title"]); ?></a></h2>
					<span class="byline">这篇有趣的文章。</span>
				</header>
				<div class="info">
					<span class="date"><span class="month">Jan<span>uary</span></span> <span class="day">1</span><span class="year">, 2013</span></span>
					<ul class="stats">
						<li><a href="#" class="link-icon24 link-icon24-1">42</a></li>
						<li><a href="#" class="link-icon24 link-icon24-2">24</a></li>
					</ul>
				</div>
				<p>
					<?php echo ($article["content"]); ?>
				</p>
			</article><?php endforeach; endif; else: echo "" ;endif; ?>
			
		<!-- Pager -->
		<div class="pager"><?php echo ($page); ?></div>
		 	
	</div>
</div>	
			<!-- Sidebar -->
			<div id="sidebar">
				<!-- Logo -->
				<div id="logo">
					<h1>500efuma</h1>
				</div>
				<nav id="nav">
	<ul>
		<?php if(($action == 'index')): ?><li class="current_page_item"><a href="/Home/Index/index">最近发表</a></li>
		<?php else: ?> 
			<li ><a href="/Home/Index/index">最近发表</a></li><?php endif; ?>
		
		
		<?php if(($action == 'listinfo')): ?><li class="current_page_item"><a href="/Home/Index/listinfo">文章列表</a></li>
		<?php else: ?> 
			<li ><a href="/Home/Index/listinfo">文章列表</a></li><?php endif; ?>
		
		
		<?php if(($action == 'me')): ?><li class="current_page_item"><a href="/Home/Index/me">关于我</a></li>
		<?php else: ?> 
			<li ><a href="/Home/Index/me">关于我</a></li><?php endif; ?>
		
		
	</ul>
</nav>
				<section class="is-search">
	<form method="post" action="#">
		<input type="text" class="text" name="search" placeholder="Search" />
	</form>
</section>
				<section class="is-text-style1">
	<div class="inner">
		<p>
			<strong>傻逼语录:</strong>
			<?php echo ($text); ?>
		</p>
	</div>
</section>
				<section class="is-recent-comments">
	<header>
		<h2>文章标签</h2>
	</header>
	<p>
		<a href="#">Java</a>
		<a href="#">Php</a>
		<a href="#">Ruby</a>
		<a href="#">Javascript</a>
		<a href="#">Python</a>
		<a href="#">ACG</a>
	</p>
</section>
				<section class="is-recent-posts">
	<header>
		<h2>最受关注文章</h2>
	</header>
	<ul>
		<li><a href="#">日本众绘师描绘2次元醉酒女子 图文并茂介绍日本酒</a></li>
		<li><a href="#">剧场版「魔法少女小圆」票房破20亿 各高票房动画一览</a></li>
	</ul>
</section>
				<section class="is-calendar">
	<div class="inner">
		<table>
			<caption><?php echo date('F Y',time())?></caption>
			<thead>
				<tr>
					<th scope="col" style="color: #6FD0E7;" title="Sunday">S</th>
					<th scope="col" title="Monday">M</th>
					<th scope="col" title="Tuesday">T</th>
					<th scope="col" title="Wednesday">W</th>
					<th scope="col" title="Thursday">T</th>
					<th scope="col" title="Friday">F</th>
					<th scope="col" style="color: #6FD0E7;" title="Saturday">S</th>
				</tr>
			</thead>
			<tbody>
				<?php if(is_array($calendar)): $i = 0; $__LIST__ = $calendar;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><tr>
						<?php if(($data['type'] == 'top')): ?><td colspan="<?php echo ($data['colspan']); ?>" class="pad"><span>&nbsp;</span></td><?php endif; ?>
						<?php $__FOR_START_30823__=$data['start'];$__FOR_END_30823__=$data['end'];for($i=$__FOR_START_30823__;$i < $__FOR_END_30823__;$i+=1){ if(($i == $d)): ?><td class="today"><a href="#"><?php echo ($i); ?></a></td>
							<?php else: ?>
								<td><a href="#"><?php echo ($i); ?></a></td><?php endif; } ?>
						<?php if(($data['type'] == 'end')): ?><td class="pad" colspan="<?php echo ($data['colspan']); ?>"><span>&nbsp;</span></td><?php endif; ?>
					</tr><?php endforeach; endif; else: echo "" ;endif; ?>
			</tbody>
		</table>
	</div>
</section>
				<!-- Copyright -->
<div id="copyright">
	<p>
		&copy; <?php echo date('Y',time())?>   500efuma.<br />
		Author: <a href="#">Saki</a>
	</p>
</div>
			</div>
		</div>
	</body>
</html>
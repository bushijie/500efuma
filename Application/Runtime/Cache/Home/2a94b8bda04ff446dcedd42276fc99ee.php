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

	<script>
		var _hmt = _hmt || [];
		(function() {
			var hm = document.createElement("script");
			hm.src = "//hm.baidu.com/hm.js?1260119a1b7deed45e32b762de63f4f3";
			var s = document.getElementsByTagName("script")[0]; 
			s.parentNode.insertBefore(hm, s);
		})();
	</script>
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
					<h2><a href="/Home/Article/view/id/<?php echo ($article["id"]); ?>"><?php echo ($article["title"]); ?></a></h2>
				</header>
				<div class="info">
					<span class="date">
						<span class="month"><?php echo ($article["ctm_M"]); ?><span><?php echo ($article["ctm_F"]); ?></span></span> 
						<span class="day"><?php echo ($article["ctm_D"]); ?></span>
						<span class="year">, <?php echo ($article["ctm_Y"]); ?></span>
					</span>
					<ul class="stats">
						<li><a href="#" class="link-icon24 link-icon24-1"><?php echo ($article["comments_num"]); ?></a></li>
						<!-- 
						<li><a href="#" class="link-icon24 link-icon24-2"><?php echo ($article["pv_num"]); ?></a></li>
						 -->
					</ul>
				</div>
				<div class="content">
					<?php echo ($article["content"]); ?>
				</div>
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
		<?php if(is_array($type_list)): $i = 0; $__LIST__ = $type_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$type): $mod = ($i % 2 );++$i;?><a href="<?php echo U('Article/tagslog',array('code'=>$type['id']))?>"><?php echo ($type['title']); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
	</p>
</section>
				<section class="is-recent-posts">
	<header>
		<h2>最受关注文章</h2>
	</header>
	<ul>
		<?php if(is_array($recent_posts)): $i = 0; $__LIST__ = $recent_posts;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$article): $mod = ($i % 2 );++$i;?><li><a href="/Home/Article/view/id/<?php echo ($article["id"]); ?>"><?php echo ($article["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
	
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
						<?php if(($data['type'] == 'top')): if(($data['colspan'] != 0)): ?><td colspan="<?php echo ($data['colspan']); ?>" class="pad"><span>&nbsp;</span></td>
							<?php else: endif; endif; ?>
						<?php $__FOR_START_147010251__=$data['start'];$__FOR_END_147010251__=$data['end'];for($i=$__FOR_START_147010251__;$i < $__FOR_END_147010251__;$i+=1){ if(($i == $d)): ?><td class="today"><a href="#"><?php echo ($i); ?></a></td>
							<?php else: ?>
								<?php if(in_array(($i), is_array($has_ctm)?$has_ctm:explode(',',$has_ctm))): ?><td><a href="#"><?php echo ($i); ?></a></td>
								<?php else: ?>
									<td><span><?php echo ($i); ?></span></td><?php endif; endif; } ?>
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
		<br />
		粤ICP备15001603号
	</p>
</div>
			</div>
		</div>
	</body>
</html>
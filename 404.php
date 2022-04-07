<html>
	<head>
		<link rel="stylesheet" href="<?php $this->options->themeUrl('css/404-style.css'); ?>">
		<style>body{
	background-color: #e7eff5;
	font-family: ziti;
}
@font-face {
	font-family: ziti;
	font-weight: 700;
			font-style: normal;
			font-display: swap;
	src: url('<?php $this->options->themeUrl('css/ziti.ttf'); ?>');
}</style>
		<meta charset="utf-8" />
		<title>404-not-found</title>
	</head>
	<body>
         <div class="backgound">
			 <img src="<?php $this->options->themeUrl('img/404.png'); ?>" >
         	<!-- <div class="http-code">
			
			</div> -->
		</div>
		<div class="mod-first">
			<div class="left">
				<img src="<?php $this->options->themeUrl('img/wu.png'); ?>" >
				<h2>发生错误</h2>
				<ol>
					<li><div class="li-border">可能是您打开了错误链接</div></li>
					<li>可能是您打开的页面处于维护状态</li>
					<li>可能是您打开的页面已经被删除</li>
					<li>可能是您的浏览器缓存问题导致</li>
				</ol>
			</div>
			<div class="right">
				<img src="<?php $this->options->themeUrl('img/content.png'); ?>" >
				<h1 class="content">联系方式</h1>
				<div class="content-span1"><span>邮箱:qine@qine.ltd</span></div>
				<div class="content-span2"><span>QQ群聊:108036667</span></div>
				<div class="content-span3"><span>GitHub:zc1351856278</span></div>
				<!-- <?php $this->options->title() ?> -->
			</div>
			<div class="top">
				<img src="<?php $this->options->themeUrl('img/gps.png'); ?>" >
				<h1 class="GPS">网站导航</h1>
			    <div class="gps-line-first"><span><a href="https://www.baidu.com/" >百度搜索</a></span></div>
				 <div class="gps-line-second"><span><a href="https://www.google.com.hk/" >谷歌搜索</a><span></div>
				<div class="gps-line-third"><span><a href="https://www.idkzr.com/" >青益云记</a><span></div>
				<div class="gps-line-fouth"><span><a href="https://www.yuhenm.com/" >StarYuhen</a><span></div>
			</div>
			<div class="bottom">
				 <img src="<?php $this->options->themeUrl('img/text.png'); ?>" >
			<h1 class="news">最新文章</h1>
			<div id="news-post"><?php 
				$this->widget('Widget_Contents_Post_Recent','pageSize=5')->parse('<li><a href="{permalink}">{title}</a></li>'); 
			?></div>
			</div>
			
			
		</div>
		<!-- 下面主要是移动端内容 -->
		<div class="mobile-all">
            <div class="mobile-first">
			<h1 class="mobile-news">最新文章</h1>
			<div class="mobile-news-post"><?php 
				$this->widget('Widget_Contents_Post_Recent','pageSize=8')->parse('<li><a href="{permalink}">{title}</a></li>'); 
			?></div>
			</div>
			</div>
			<div class="nar-ber">
				<!-- 请务必打开伪静态，反则请将下方../index.php修改成网站实际链接 -->
				<a href="../index.php">回到首页</a>
			</div>

	</body>
</html>

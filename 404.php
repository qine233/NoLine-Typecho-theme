<!DOCTYPE html>
<html lang="cmn-hans">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"> 
		<link rel="stylesheet" href="<?php $this->options->themeUrl('css/pcstyle.css');  ?>"/>
		<meta charset="utf-8" />
		<title>MOD</title>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
<style>
/* body {
  font-family: "Sofia";
  font-size: 22px;
} */
@font-face {
font-family: ziti;
font-weight: 400;
        font-style: normal;
        font-display: swap;
src: url('img/ziti.ttf');
} 
body {
        font-family: 'ziti';
            }
</style>

	</head>
	<body>
		<div class="pc">
	<?php Typecho_Widget::widget('Widget_Stat')->to($stat); ?>
	<div class="CG pc" class="pc">
		<div class="safety" class="pc">
			<div class="polor" class="pc">
				<img id="sf-1"  class="pc" src="<?php $this->options->themeUrl('img/Screenshot_2021-08-16-15-15-59_com.miui.home.jpg');  ?>" />
				<h1><?php $stat->publishedPostsNum() ?></h1>
				<h2>共计发布文章<?php $stat->publishedPostsNum() ?>篇，继续努力哦！</h2>
				<div class="part-first">
					<h1>建站时间</h1>
					<img src="<?php $this->options->themeUrl('img/tt.png');  ?>">
					<h2>2020-3-9</h2>
					</div>
					<div class="part-second">
						<h1>建站平台</h1>
						<img src="<?php $this->options->themeUrl('img/fw.png');  ?>" >
						<h2>基于docker-20.x</h2>
				</div>
				<div class="part-third" class="pc">
					<img id="true" src="<?php $this->options->themeUrl('./img/gou.png');  ?>">
					<h1>已收录情况</h1>
					
					<h2 id="sougou">搜狗</h2>
					<h2 id="baidu">百度</h2>
					<h2 id="toutiao">头条</h2>
					
					<h2 id="guge">谷歌</h2>
					<h2 id="biying">必应</h2>
					<h2 id="so360">好搜</h2>
				</div>
			</div>
			<!-- <span>test</span> -->
		</div>
		<!-- 以上为大区域 -->
		<div   id="t2" class="pc">
			<img src="<?php $this->options->themeUrl('img/_)J)5@NEBBY%60H9~%5B~%5D1MVNO.png');  ?>" />
			<a target="_blank" href="https://www.idkzr.com/"><h1>青益云记</h1></a>
			<h2>个人站点-各类记录</h2>
			</div>
			<div   id="t3" class="pc">
				<img src="<?php $this->options->themeUrl('img/Screenshot_2021-08-16-02-46-34-966_com.miui.secur.jpg');  ?>" />
				<a target="_blank" href="https://www.baidu.com/"><h1>百度</h1></a>
				<h2>百度一下，你就知道</h2>
				</div>
		<div   id="t4" class="pc">
			<img src="<?php $this->options->themeUrl('img/Screenshot6-34-966_com.miui.secur.jpg');  ?>" />
			<a target="_blank" href="https://www.yuhenm.com/"><h1>玉衡blog</h1></a>
			<h2>个人技术站点记录</h2>
			</div>
		<div class="mod pc" class="pc">
			<div class="ha pc" class="pc">
			<h1 class="s" class="pc">404....</h1>
			
			</div>
			<div>
			<h1 class="q"  class="pc">点击对应板块将跳转对应页面，稍等</h1>
			</div>
			<div class="button" class="pc"><div id="t"><a href="<?php $this->options->siteUrl(); ?>"><h1>主页</h1></a></div></div>
		</div>
		</div>
		<!-- 上面 圆形结束 -->
		</div>
		<div  class="nab pc">
			<ul>
				<li> <a href="https://www.baidu.com/"><img id="bdimg" src="<?php $this->options->themeUrl('./img/u=1200430004,1475201382&fm=26&fmt=auto&gp=0.jpg');  ?>" >百度</a> </li>
				<li id="fen">| &nbsp;</li>
				<li><a href="https://www.google.com.hk/"><img id="ggimg" src="<?php $this->options->themeUrl('./img/u=1963689432,4024072777&fm=26&fmt=auto&gp=0.jpg');  ?>" >谷歌</a></li>
			</ul>
		</div>
		
		</div>
		</div>
		<div class="footer" class="pc"><a target="_blank" href="<?php $this->options->siteUrl(); ?>"/>©&nbsp;<?php $this->options->title(); ?>&nbsp;</a></div>
	</div>
		<div class="mod">
			<h1>404</h1>
			<h2>啊哦，你要找的页面不存在</h2>
			<!-- <a href="https://www.oreo-me.cn/"><img src="../img/Screenshot_2021-08-17-00-51-02-716_com.tencent.mm.jpg"/></a> -->
		</div>
		<div class="mod-first">
			<img class="mod-img-first" src="../img/Screenshot_2021-08-16-15-15-59_com.miui.home.jpg" >
			<h1 class="mod-h1-first">文章总计</h1>
			<h2 class="mod-h2-first">共有100篇文章，加油！</h2>
		</div>
		<div class="mod-second">
			<img class="mod-img-second" src="../img/Screenshot6-34-966_com.miui.secur.jpg" >
			<h1 class="mod-h1-second">建站日期</h1>
			<h2 class="mod-h2-second">本站于2020-3-9日建立</h2>
		</div>
		<div class="mod-big">
			<img class="mod-img-big" src="./Screenshot_2021-08-18-1ur.jpg" >
			<h1 class="content-h1">联系方式</h1>
			<h2 class="content-h2">欢迎进入QQ群参与讨论</h2>
			<div id="button">
				<a href="https://jq.qq.com/?_wv=1027&k=oB3gpiNs"><h1 class="text-chuansongmen">传送门</h1></a>
				<!-- <img class="bg-mod-big" src="./u=1331475062,1151689512&fm=26&fmt=auto&gp=0.jpg" > -->
				</div>
			</div>
		</div>
		<div id="footer-one">
			<a href="#" onClick="javascript :history.back(-1);"><h1>返回</h1>
			</a>
		</div>

	</body>
</html>

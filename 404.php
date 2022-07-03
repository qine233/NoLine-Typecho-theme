
<html lang="zh-CN">
<head>
<link rel="stylesheet" href="<?php $this->options->themeUrl('css/boot-404.css'); ?>">
<title>找不到当前文章了喔</title>
</head>
<body>
<container>
    <div class="box-first"><i class="bg-primary-m"></i>
    <img id="header-img" src="<?php $this->options->logoCss(); ?>"></img>
    <div class="side">
    您访问的网页地址内容已消失
    </div>
    <h3 id="header-name" style="font-size:1rem;font-weight:530;"><?php $this->options->logoName(); ?></h3>
    <span id="header-talk">心若向阳，无畏伤悲</span>
    <div>  <div class="sibar-data-a">

         <?php Typecho_Widget::widget('Widget_Stat')->to($stat); ?>
         <ul class="sibar-data-a-ul">
         <li>文章数</li><li><?php $stat->publishedPostsNum() ?></li></ul>
         <ul class="sibar-data-b-ul"><li>分类数</li><li><?php $stat->categoriesNum() ?></li></ul>
         <ul class="sibar-data-c-ul"><li>评论数</li><li><?php $stat->publishedCommentsNum() ?></li></ul>
         </div>
         <div class="siber-footer"><a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a></div>
         </div>
    </div>
     <div class="box-sec"><i class="bg-primary"></i>
     <h3>最新文章</h3>
     <div class="box-sec-list">
     <ul>
         <?php $this->widget('Widget_Contents_Post_Recent','pageSize=6')
                    ->parse('<li><a href="{permalink}">{title}</a></li>'); ?>
     </ul></div>
     </div>
</container>
</body>
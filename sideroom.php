<div class="sideroom" id="sideroom">
 <img class="alaver-img" src="<?php $this->options->logoCss(); ?>">
            <h1 class="name"><?php $this->options->logoName(); ?></h1>
            <h2 class="name-talk">心若向阳，无畏伤悲</h2>
             <div class="sibar-data-a">

            <?php Typecho_Widget::widget('Widget_Stat')->to($stat); ?>
            <ul class="sibar-data-a-ul">
            <li><?php $stat->publishedPostsNum() ?></li><li>文章数</li>
            </ul class="sibar-data-a-ul">
            <ul class="sibar-data-a-ul"><li><?php $stat->categoriesNum() ?></li><li>分类数</li></ul>
            <ul class="sibar-data-a-ul"><li><?php $stat->publishedCommentsNum() ?></li><li>评论数</li></ul>
            </div>
</div>
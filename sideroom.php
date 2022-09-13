
<div class="sideroom" id="sideroom">
 <img class="alaver-img" src="<?php $this->options->logoCss(); ?>">
            <h1 class="name"><?php $this->options->logoName(); ?></h1>


               <div class="sibar-data-ab"><div class="sibar-data-a">
            <?php Typecho_Widget::widget('Widget_Stat')->to($stat); ?>
            <ul class="sibar-data-a-ul">
            <li><?php $stat->publishedPostsNum() ?></li><li>文章数</li>
            </ul class="sibar-data-a-ul">
            <ul class="sibar-data-a-ul"><li><?php $stat->categoriesNum() ?></li><li>分类数</li></ul>
            <ul class="sibar-data-a-ul"><li><?php $stat->publishedCommentsNum() ?></li><li>评论数</li></ul>
            </div></div>
 <div class="nav_menu-mb" >
                        <ul  id="nav_menu-m">
                                 <li><a id="nav_list_a_f" href="<?php $this->options->siteUrl(); ?>">首页</a></li>
                                 <div id="nav_list_a"> <?php $this->widget('Widget_Contents_Page_List')
                                 ->parse('<li ><a href="{permalink}">{title}</a></li>'); ?>
                             </ul></div></div>
                <div class="sideroom-blur" id="sideroom-blur">
                </div>
</div>
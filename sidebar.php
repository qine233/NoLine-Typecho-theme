  <div class="content-last">
  <div class="contact border-wid">
    <div class="bg_color">
  <!-- <h1 class="contact-h1">#社交频道</h1> -->
  <img class="logo" src="<?php $this->options->logoCss(); ?>">
            <h1 class="name"><?php $this->options->logoName(); ?></h1></div>
 <button class="a-left"><a target="_blank" href="<?php $this->options->logocontacta(); ?>">关注</a></button>
             <div class="sibar-data-a">

            <?php Typecho_Widget::widget('Widget_Stat')->to($stat); ?>
            <ul class="sibar-data-a-ul">
            <li><?php $stat->publishedPostsNum() ?></li><li>文章数</li>
            </ul class="sibar-data-a-ul">
            <ul class="sibar-data-a-ul"><li><?php $stat->categoriesNum() ?></li><li>分类数</li></ul>
            <ul class="sibar-data-a-ul"><li><?php $stat->publishedCommentsNum() ?></li><li>评论数</li></ul>
            </div>

<h2 class="name-talk"><?php $this->options->logobg(); ?></h2>
</div>
<div class="sibar-all">
<div class="sibar-data border-wid" >
<div class="mac"><span>classification</span>
    <i class="bg-primary"></i></div>
<div class="sibar-data-abc" >


<div class="sibar-data-b">
 <!-- <ul style="display: inline;">



</ul> -->
<div class="archives"> <ul>
    <?php $this->widget('Widget_Metas_Category_List')
               ->parse('<li><a href="{permalink}">{name}</a> </li>'); ?>
</ul>  </div>

</div>
</div>
</div>
</div>
  </div>
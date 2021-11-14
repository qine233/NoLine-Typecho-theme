  <div class="content-last">
  <div class="contact border-wid">
    <div class="bg_color">
  <!-- <h1 class="contact-h1">#社交频道</h1> -->
  <img class="logo" src="<?php $this->options->logoCss(); ?>"></div>
            <h1 class="name"><?php $this->options->logoName(); ?></h1>
            <h2 class="name-talk">心若向阳，无畏伤悲</h2>
<div class="button-flex">
            <!-- <button class="a-left"><a target="_blank" href="<?php $this->options->logocontacta(); ?>">GITHUB</a></button>
            <button  class="a-right"><a target="_blank" href="<?php $this->options->logocontactb(); ?>">关&nbsp 于</a></button> -->
          </div>
            <div class="new-text ">

<ul>
    <?php $this->widget('Widget_Contents_Post_Recent','pageSize=5')
               ->parse('<li><a href="{permalink}">{title}</a></li>'); ?>
</ul>
</div> 

</div>
<div class="sibar-all">
<div class="sibar-data border-wid" >
<div class="mac"><span>分类</span>
    <i class="bg-primary"></i></div>
<div class="sibar-data-abc" >

  <div class="sibar-data-a">
  
<?php Typecho_Widget::widget('Widget_Stat')->to($stat); ?>
<ul >
<li><?php $stat->publishedPostsNum() ?></li><li>文章数</li>
</ul>
<ul><li><?php $stat->categoriesNum() ?></li><li>分类数</li></ul>
<ul><li><?php $stat->publishedCommentsNum() ?></li><li>评论数</li></ul>
</div>
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
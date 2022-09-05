<div class="sidebar-right">
<div class="sidebar-r">
<div class="sidebar-r-top">
<span id="sidebar-tags">the tags</span>
<?php $this->widget('Widget_Metas_Tag_Cloud','ignoreZeroCount=1&limit=25')->to($tags); ?>
     <?php while($tags->next()):?>
     <span style="background-color:#3881f3;" id="tags"> <a href="<?php $tags->permalink();?>"><?php $tags->name();?></a></span>
      <?php endwhile;?>
</div>
<span id="sidebar-tags">recent&nbsp&nbspcommit</span>
<ul class="siber-comments">
    <?php $this->widget('Widget_Comments_Recent','ignoreAuthor=true&pageSize=5')->to($comments); ?>
    <?php while($comments->next()): ?>
        <li><?php $email=$comments->mail; $imgUrl = getGravatar($email);echo '<img src="'.$imgUrl.'" width="40px" height="40px" style="border-radius: 50%;" >'; ?>&nbsp;&nbsp;&nbsp;<?php $comments->author(false); ?> <a href="<?php $comments->permalink(); ?>"><span class="siber-com"> <?php $comments->excerpt(50, '...'); ?></span></a></li>
    <?php endwhile; ?>
</ul>

</div></div></div>
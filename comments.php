
<div class="comments">
    <div id="comments-padding">
<!-- 判断设置是否允许对当前文章进行评论 -->
<?php if($this->allow('comment')): ?>
 
 <h4 id="response"><?php $this->commentsNum('评论 (%d)'); ?></h4>

 <!-- 输入表单开始 -->
 <form method="post" action="<?php $this->commentUrl() ?>" id="comment_form">

     <!-- 如果当前用户已经登录 -->
     <?php if($this->user->hasLogin()): ?>
         <!-- 显示当前登录用户的用户名以及登出连接 -->
         <p style="margin-left: 5rem;"><?php $this->user->screenName(); ?></a>.</p>

     <!-- 若当前用户未登录 -->
     <?php else: ?>
      <div class="comments-3-text"> 
     <p><label>昵称*&nbsp;:&nbsp;</label><input type="text" name="author" class="text" size="35" value="<?php $this->remember('author'); ?>" /></p>
     <p><label>邮箱*&nbsp;:&nbsp;</label><input type="text" name="mail" class="text" size="35" value="<?php $this->remember('mail'); ?>" /></p>
     <p><label>网站链接(可不填)&nbsp;:&nbsp;</label><input type="text" name="url" class="text" size="35" value="<?php $this->remember('url'); ?>" /></p>
    </div>
     <?php endif; ?>

     <!-- 输入要回复的内容 -->
     <div class="talk-content">
     <p><textarea class="text" rows="10" cols="50" name="text"><?php $this->remember('text'); ?></textarea></p>
  <!-- <p><textarea  type="text" name="text" size="35" value="<?php $this->remember('text'); ?>" /></p> -->

  <p><input type="submit" value="发送" class="submit" /></p>
 </div>
 </form>
 <?php endif; ?><div class="talk-list">

<ol style="  display: flex;
   flex-wrap: wrap;" id="comment_list">
    <?php $this->comments()->to($comments); ?>
        <?php while($comments->next()): ?>
	<li id="list-talk-list">
	    <div class="comment_data">

                <strong><?php $comments->author(); ?></strong>
                 <?php $comments->date('Y-m-d '); ?>
            </div>
	    <div class="comment_body"><?php $comments->content(); ?></div>
	</li>
    <?php $comments->pageNav('« 前一页', '后一页 »'); ?>

	<?php endwhile; ?>
</ol>
 </div>


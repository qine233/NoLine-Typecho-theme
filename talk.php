<?php

/**
 * 说说
 *
 * @package custom
 *
 **/

?>
<?php $this->need('public/header.php'); ?>

<div class="content-all">
<?php $this->need('sidebar.php'); ?>
        <div class="typecho-user-text">
             <!-- <div class="content-list"> -->


             <div class="content-list-post">
    <div id="comments-padding-talk"><div class="typecho-header">
<!-- 判断设置是否允许对当前文章进行评论 -->
<?php if($this->allow('comment')): ?>

 <h4 id="response"><?php $this->commentsNum('「&nbsp&nbsp时光动态&nbsp&nbsp」'); ?></h4>
 <?php if($this->user->hasLogin()): ?>
 <!-- 输入表单开始 -->
 <form method="post" action="<?php $this->commentUrl() ?>" id="comment_form">

     <!-- 如果当前用户已经登录 -->


         <!-- 显示当前登录用户的用户名以及登出连接 -->
         <p style="margin-left: 4rem;">快来发射今日动态吧
        </p>

     <!-- 若当前用户未登录 -->




     <!-- 输入要回复的内容 -->
     <div class="talk-content-talk">
     <p><textarea class="text" rows="10" cols="50" name="text"><?php $this->remember('text'); ?></textarea></p>
  <!-- <p><textarea  type="text" name="text" size="35" value="<?php $this->remember('text'); ?>" /></p> -->

  <p><input type="submit" value="发射" class="submit-talk" /></p>
 </div>
 </form> <?php endif; ?>
<?php endif; ?>
    </div></div>
 <div class="talk-list">

<ol style="  display: flex;
   flex-wrap: wrap; flex-direction:column-reverse" id="comment_list">
    <?php $this->comments()->to($comments); ?>
        <?php while($comments->next()): ?>
	<li style="background-color: white ;
    font-weight:100;
margin-top: 20px;
min-height:15rem;
width: 95%;
margin-right:35px;
list-style:none;
border-radius:0.5rem;
background-color: rgb(255, 252, 252);
border-style:solid;
border-color:rgba(185, 185, 185, 0.356);;
border-width:0.2px;
padding:0.8rem;
" id="list-talk-list-talk <?php $comments->theId(); ?>">
      <div class="dian"></div>
	    <div class="comment_data">
                <!-- <?php echo $comments->sequence(); ?>.  -->
                <strong><?php $comments->author(); ?></strong>
                &nbsp; <?php $comments->date('Y-m-d H:i'); ?>
            </div>
	    <div class="comment_body"><?php $comments->content(); ?></div>
	</li>


	<?php endwhile; ?>
</ol>
<!-- <?php $comments->pageNav('« 前一页', '后一页 »'); ?>  -->
 </div>
</div>



</div>

        </div>

        </div>

		<?php $this->need('public/footer.php'); ?>
		</div>
			 </div>

</body>

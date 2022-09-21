<?php function threadedComments($comments, $options) {
    $commentClass = '';
    if ($comments->authorId) {
        if ($comments->authorId == $comments->ownerId) {
            $commentClass .= ' comment-by-author';  //如果是文章作者的评论添加 .comment-by-author 样式
        } else {
            $commentClass .= ' comment-by-user';  //如果是评论作者的添加 .comment-by-user 样式
        }
    }
    $commentLevelClass = $comments->_levels > 0 ? ' comment-child' : ' comment-parent';  //评论层数大于0为子级，否则是父级
    ?>


    <div id="<?php $comments->theId(); ?>" class="comments-type">
       <?php $email=$comments->mail; $imgUrl = getGravatar($email);echo '<img src="'.$imgUrl.'" width="45px" height="45px" style="border-radius: 20%;box-shadow: 2px 2px 3px #e1e1e1;" >'; ?>
        <h5><?php $comments->author(); ?>&nbsp<?php $comments->date('Y-m-d H:i'); ?></h5>

        <div id="comment_list">
            <?php $comments->content(); ?>
        </div>
        <p class="submit"><?php $comments->reply(); ?></p>
    </div>

    <?php if ($comments->children) { ?>
        <?php $comments->threadedComments($options); ?>
    <?php } ?>

<?php } ?>
    <div class="comments">
    <div id="comments-padding">
    <h4 style="margin-left:2rem;"><?php $this->commentsNum(_t('comments'), _t('comments'), _t('comments')); ?></h4>
<?php $this->comments()->to($comments); ?>
<?php if ($this->allow('comment')) : ?>
    <!-- 评论表单form放的地方-->
    <div id="<?php $this->respondId(); ?>">
        <div> <!-- 取消回复 -->
            <?php $comments->cancelReply(); ?>
        </div>
        <form method="post" action="<?php $this->commentUrl() ?>" id="comment-form" role="form">

            <?php if($this->user->hasLogin()): ?>
                <p><?php _e('登录身份: '); ?><a href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a>. <a href="<?php $this->options->logoutUrl(); ?>" title="Logout"><?php _e('退出'); ?> &raquo;</a></p>
            <?php else: ?>
                <div class="comments-3-text">
                 <textarea rows="8" cols="50" name="text" id="textarea" placeholder="写出你精彩的想法"  class="textarea" required ><?php $this->remember('text'); ?></textarea>

                <div class="comments-unuser">    <input type="text"  placeholder="昵称(*)" name="author" class="text"  value="<?php $this->remember('author'); ?>" />
                    <input type="text" name="mail" class="text" placeholder="邮箱(*)"  value="<?php $this->remember('mail'); ?>" />
                    <input type="text" name="url" class="text" placeholder="网址"  value="<?php $this->remember('url'); ?>" />
                       <button type="submit" class="submit-alone"><?php _e('发表'); ?></button>
                     </div>
            <?php endif; ?>






                    <div class="talk-content">
            </div> </div>
        </form>
    </div>
<?php else : ?>
    <h3><?php _e('评论已关闭'); ?></h3>
<?php endif; ?>

    <!-- 回复列表 -->

<?php if ($comments->have()) : ?>
    <!-- 评论头部提示信息 -->

    <!-- 评论的内容 -->
    <?php $comments->listComments(); ?>
    <!-- 评论page -->
    <?php $comments->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
    </div>
    </div>
<?php endif; ?>
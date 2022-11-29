<?php
/**
 * “ 青益的第一款主题... ”
 * @package QINE
 * @author QINE
 * @link https://www.idkzr.com/
 */
?>

<?php $this->need('public/header.php'); ?>
<!--<script>NProgress.start();</script>-->


<div class="content-all center-block">
    <div class="content-hello_allway">
    <div class="content-hello">
        <h4 class="content-hello_h4">写作足迹</h4>
        <div class="sibar-data-a">

            <?php Typecho_Widget::widget('Widget_Stat')->to($stat); ?>
            <ul class="sibar-data-a-ul">
                <li><?php $stat->publishedPostsNum() ?></li><li>文章数</li>
            </ul class="sibar-data-a-ul">
            <ul class="sibar-data-a-ul sibar-data-a-ul_heightLine"><li><?php $stat->categoriesNum() ?></li><li>分类数</li></ul>
            <ul class="sibar-data-a-ul"><li><?php $stat->publishedCommentsNum() ?></li><li>评论数</li></ul>
        </div>
        <div class="button-flex">
            <button class="a-left"><a target="_blank" href="<?php $this->options->logocontacta(); ?>">follow&nbsp&nbspme</a></button>
        </div>
    </div>
    <div class="content-hello_commit">
        <h4 class="content-hello_h4">hello  world !</h4>
        <ul class="siber-comments">
            <?php $this->widget('Widget_Comments_Recent','ignoreAuthor=true&pageSize=5')->to($comments); ?>
            <?php while($comments->next()): ?>
                <li><?php $email=$comments->mail; $imgUrl = getGravatar($email);echo '<img src="'.$imgUrl.'" width="40px" height="40px" style="border-radius: 50%;" >'; ?>&nbsp;&nbsp;&nbsp;<?php $comments->author(false); ?> <a href="<?php $comments->permalink(); ?>"><span class="siber-com"> <?php $comments->excerpt(50, '...'); ?></span></a></li>
            <?php endwhile; ?>
        </ul>
    </div>
    </div>
        <div class="content">

             <div class="content-list">
			 <?php while($this->next()): ?>
    <div class="post">
        <?php
preg_match_all("/\<img.*?src\=(\'|\")(.*?)(\'|\")[^>]*>/i", $this->content, $matches);
        $imgCount = count($matches[0]);
        if($imgCount >= 1){
        $img = $matches[2][0];
        }else{
        $img="/usr/themes/qine/nbg2.jpg";
        }
        echo <<<Html
        <p class="post-images">
            <a href="{$this->permalink}" title="{$this->title}">
                <img src="{$img}" alt="{$this->title}">
            </a>
        </p>

        Html;
        ?>
    </div>
	<h2 class="entry_title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>



	<div class="entry_text" >

	   <p>

<?php $this->excerpt(160, '...');?>
</p>
	</div>
                 <span class="post_index-more"> <?php $this->date('Y年n月d日'); ?></span>


<?php endwhile; ?>

  </div>   <div class="nav-page Page navigation"  >
   <?php $this->pageNav('<', '>', 1, '...', array('wrapTag' => 'ul', 'wrapClass' => 'pagination' )  ); ?>

</div>

        </div>

        </div>
</div><?php $this->need('public/footer.php'); ?>
	</div>

<!--<script>NProgress.done();</script>-->


			 </div> </div>

</body>
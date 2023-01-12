<?php
/**
 * “ 一款简单的主题，请设置完再看最后效果并修改... ”
 * @package NOLINE_2.0
 * @author QINE
 * @link https://www.idkzr.com/
 */
?>
<?php $this->need('public/header.php'); ?>
<!--<script>NProgress.start();</script>-->


<div class="content-all center-block">

<?php $this->need('sidebar.php'); ?>
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
        $img="/usr/themes/Noline/nbg2.jpg";
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

   <span class="post_index-more_cate">  <?php $this->commentsNum('%d 评论'); ?></span>
<?php endwhile; ?>

  </div>   <div class="nav-page Page navigation"  >
   <?php $this->pageNav('<', '>', 1, '...', array('wrapTag' => 'ul', 'wrapClass' => 'pagination' )  ); ?>

</div>

        </div>
       <?php $this->need('sidebar-right.php'); ?>
        </div>
</div><?php $this->need('public/footer.php'); ?>
	</div>

<!--<script>NProgress.done();</script>-->


			 </div>

</body>

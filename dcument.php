<?php

/**
 * 归档
 *
 * @package custom
 *
 **/

?>
<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('public/header.php'); ?>
<div class="content-all"><?php $this->need('sidebar.php'); ?>



        <div class="typecho-user-text">
             <div class="content-list-post">
                 <!-- 下面text部分 -->
		<div class="typecho-text text-tream " >


        </div>  <span class="typecho-time"><?php $this->date('Y/m/d'); ?></span>
                       <h1 class="post-title" itemprop="name headline">「&nbsp&nbsp<?php $this->title() ?>&nbsp&nbsp」</h1>
       <div class="content-text-2 "  id="write">


           <?php $this->widget('Widget_Contents_Post_Recent', 'pageSize=10000')->parse('<li>{year}-{month}-{day} : <a href="{permalink}">{title}</a></li>'); ?>


    </div>

    </div>
    </div>



           </div>
</div>
</div>
</div>
<?php $this->need('public/footer.php'); ?>



</body>
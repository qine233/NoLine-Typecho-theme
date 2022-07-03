<?php
/**
 * “ 青益的第一款主题... ”
 * @package QINE
 * @author QINE
 * @link https://www.idkzr.com/
 */
?>
<?php $this->need('public/header.php'); ?>

<div class="content-all">

<?php $this->need('sidebar.php'); ?>
        <div class="content">
<?php $this->need('crumb.php'); ?>
             <div class="content-list">
			 <?php while($this->next()): ?>
    <div class="post">
	<h2 class="entry_title"><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
	
    
 
	<div class="entry_text" >
	
	   <p> 

<?php $this->excerpt(160, '...');?>
</p>
	</div>
	<div class="entry_data">
	<ul><li> <?php $this->category('.')?></li></ul>
<ul><li><?php $this->commentsNum('%d 评论'); ?></li></ul>

	</div>
    <?php
preg_match_all("/\<img.*?src\=(\'|\")(.*?)(\'|\")[^>]*>/i", $this->content, $matches);
$imgCount = count($matches[0]);
if($imgCount >= 1){
    $img = $matches[2][0];
}else{
    $img="https://www.idkzr.com/nbg2.jpg";
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
<?php endwhile; ?>

  </div>   <div class="nav-page Page navigation"  >
   <?php $this->pageNav('<', '>', 1, '...', array('wrapTag' => 'ul', 'wrapClass' => 'pagination' )  ); ?> 

</div>

        </div>
       <?php $this->need('sidebar-right.php'); ?>
        </div>
	
		<?php $this->need('public/footer.php'); ?>
		</div>  
			 </div>
			
</body>
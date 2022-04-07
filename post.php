

<?php $this->need('public/header.php'); ?>
<div class="content-all"><?php $this->need('sidebar.php'); ?>
        <div class="content">
             <div class="content-list">
                 <!-- 下面text部分 -->
		<div class="typecho-text text-tream " >
        <h1 class="post-title" itemprop="name headline"><?php $this->title() ?></h1>
        
       <div class="content-text-2">
        <?php $this->content(); ?>
    </div>
	</div>		
    </div> <?php $this->need('comments.php'); ?>
    </div>  
 
 
  
             

           </div> 
       
      <?php $this->need('public/footer.php'); ?>
        
		
		
</body>
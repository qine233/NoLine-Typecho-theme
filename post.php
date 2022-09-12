

<?php $this->need('public/header.php'); ?>
<div class="content-all"><?php $this->need('sidebar.php'); ?>



        <div class="typecho-user-text">
             <div class="content-list-post">
                 <!-- 下面text部分 -->
		<div class="typecho-text text-tream " >


        </div>
       <div class="content-text-2 " id="hideImg">
        <span class="typecho-time"><?php $this->date('Y/m/d'); ?></span>
         <h1 class="post-title" itemprop="name headline"><?php $this->title() ?></h1>
        <?php $this->content(); ?>

        <script >hljs.initHighlightingOnLoad();</script>
    </div>

    </div> <?php $this->need('comments.php'); ?>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/vditor/dist/index.min.js"></script>
              <script type="text/javascript">
                     var image = new Viewer(document.getElementById('hideImg'),{
                                         url: 'src'
                                     });
                     </script>

           </div>
</div>
</div>
</div>
<?php $this->need('public/footer.php'); ?>



</body>
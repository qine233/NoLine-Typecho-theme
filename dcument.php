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


           <?php $this->widget('Widget_Contents_Post_Recent')->to($archives);
           $year=0; $mon=0; $i=0; $j=0;
           $output = '<div id="archives-page">';
           while($archives->next()):
           $year_tmp = date('Y',$archives->created);
           $mon_tmp = date('m',$archives->created);

           $y=$year; $m=$mon;
           if ($mon != $mon_tmp && $mon > 0) $output .= '</ul></li>';
           if ($year != $year_tmp && $year > 0) $output .= '</ul>';
           if ($year != $year_tmp) {
           $year  = $year_tmp;
           $output .= '<h3 class="al_year">'. $year .' 年</h3><ul class="al_mon_list">';
               }
               if ($mon != $mon_tmp) {

               $mon = $mon_tmp;

               $output .= '<li><span class="al_mon">'. $mon .' 月</span><ul class="al_post_list">';  }
                   $output .= '<li>'.date('d日：',$archives->created).'<a href="'.$archives->permalink .'">'. $archives->title .'</a>  </li>';
                   echo $mon_tmp;
                   endwhile;

                   $output .= '</ul></li></ul></div>';
           echo $output;
         ?>


    </div>

    </div>
    </div>



           </div>
</div>
</div>
</div>
<?php $this->need('public/footer.php'); ?>



</body>
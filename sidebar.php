  <div class="content-last">
  <div class="contact border-wid">
    <div class="bg_color">
  <!-- <h1 class="contact-h1">#社交频道</h1> -->

            <h1 class="name"><?php $this->options->logoName(); ?></h1>
            <h2 class="name-talk"><?php $this->options->logobg(); ?></h2>


<div class="button-flex">
             <button class="a-left"><a target="_blank" href="<?php $this->options->logocontacta(); ?>">follow&nbsp&nbspme</a></button>
          </div>

</div>
<div class="sibar-all">
<div class="sibar-data border-wid" >
<div class="mac"><span>classification</span>
    <i class="bg-primary"></i></div>
<div class="sibar-data-abc" >


<div class="sibar-data-b">
 <!-- <ul style="display: inline;">



</ul> -->
<div class="archives"> <ul>
    <?php $this->widget('Widget_Metas_Category_List')
               ->parse('<li><a href="{permalink}">{name}</a> </li>'); ?>
</ul>  </div>

</div>
</div>
</div>
</div>
  </div>
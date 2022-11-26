<ul  id="nav_menu">
    <li><a style="color: #ffffff" href="<?php $this->options->siteUrl(); ?>">Home</a></li>

    <?php $this->widget('Widget_Contents_Page_List')
        ->parse('<li><a style="color: #ffffff" href="{permalink}">{title}</a></li>'); ?>
</ul>

//     <a style="color: #ffffff" href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>
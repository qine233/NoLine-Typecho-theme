  <div class="crumbs_patch">
        	<span class="crumbs-border"><a  href="<?php $this->options->siteUrl(); ?>">首页</a>&nbsp;</span>
        	<?php if ($this->is('index')): ?><!-- 页面为首页时 -->
        		   文章列表
        	<?php elseif ($this->is('post')): ?><!-- 页面为文章单页时 -->
        		<span class="crumbs-border"><?php $this->category(); ?>&nbsp;</span>&nbsp;文章详情&nbsp;
        	<?php else: ?><!-- 页面为其他页时 -->
        		<?php $this->archiveTitle(' &nbsp;|&nbsp ','',''); ?>&nbsp;
        	<?php endif; ?>
        </div>
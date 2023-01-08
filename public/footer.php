
<footer class="footer">

<h3 class="text-ellipsis">&copy;2023 Copyright&nbsp;&nbsp;<a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a><?php $this->options->logoFooter(); ?></h3>
    <h4 class="text-ellipsis_copy">Powered by Typecho | Theme by <a href="https://github.com/qine233/NoLine-Typecho-theme">Noline</a></h4>
    <div class="nav_top">  <div id="percentage"></div> </div>
</footer>
<script src="https://lf3-cdn-tos.bytecdntp.com/cdn/expire-2-M/jquery/3.1.1/jquery.min.js"></script>
<script src="https://lf26-cdn-tos.bytecdntp.com/cdn/expire-1-M/jquery.pjax/2.0.1/jquery.pjax.min.js"></script>
<script>


    $(document).pjax('a[href^="<?php Helper::options()->siteUrl()?>"]:not(a[target="_blank"], a[no-pjax])', {
        container: '#pjax-container',
        fragment: '#pjax-container',
        timeout: 8000
    }).on('pjax:send',
        function() {
            NProgress.start();

        }).on('pjax:complete',
        function() {
            NProgress.done();
            // setupContents();
            // reHighlightCodeBlock();//代码高亮函数重载

        })

</script>

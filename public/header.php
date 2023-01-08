<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<html lang="zh-CN">
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <?php $this->header('generator=&template=&pingback=&xmlrpc=&wlw=&commentReply=&rss1=&rss2=&atom='); ?>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, shrink-to-fit=no, viewport-fit=cover">
    <meta name="keywords" content="<?php echo $this->fields->keywords ? $this->fields->keywords : htmlspecialchars($this->_keywords); ?>" />
    <meta name="description" content="<?php echo $this->fields->description ? $this->fields->description : htmlspecialchars($this->_description); ?>" />

    <script src="https://lf3-cdn-tos.bytecdntp.com/cdn/expire-1-M/viewerjs/1.10.4/viewer.min.js"></script>
    <script src="<?php $this->options->themeUrl('css/nprogress.js'); ?>"></script>
    <script src="<?php $this->options->themeUrl('css/smooth-scroll.js'); ?>"></script>
    <title><?php $this->archiveTitle(array('category' => '分类 %s 下的文章', 'search' => '包含关键字 %s 的文章', 'tag' => '标签 %s 下的文章', 'author' => '%s 发布的文章'), '', ' - '); ?><?php $this->options->title(); ?></title>
    <link rel="stylesheet" href="https://lib.baomitu.com/twitter-bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/typora-indigo.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/Q-style.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/post.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/mobile.css');  ?>">
    <link rel="stylesheet" href="https://lf9-cdn-tos.bytecdntp.com/cdn/expire-1-M/viewerjs/1.10.4/viewer.min.css">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/nprogress.css');  ?>">
    <script src="https://lf3-cdn-tos.bytecdntp.com/cdn/expire-1-M/highlight.js/11.3.1/highlight.min.js"></script>
    <link rel="stylesheet" href="https://lf6-cdn-tos.bytecdntp.com/cdn/expire-1-M/highlight.js/11.3.1/styles/atom-one-dark.min.css">
       <link rel="shortcut icon" href="<?php $this->options->logoCss(); ?>" />
    <script>
        $(document)
            .on('click', 'a[href*="#"]', function() {
                if ( this.hash ) {
                    $.bbq.pushState( '#/' + this.hash.slice(1) );
                    return false;
                }
            })
            .ready(function() {
                $(window).bind('hashchange', function(event) {
                    var tgt = location.hash.replace(/^#\/?/,'');
                    if ( document.getElementById(tgt) ) {
                        $.smoothScroll({scrollTarget: '#' + tgt});
                    }
                });

                $(window).trigger('hashchange');
            });
    </script>

    <script>
        window.onload = function ()
        {
            var ob="test";
            var oBtn3 = document.getElementById("nav_list_a_f");
            var oBox3 = document.getElementById("nav_list_a");
            var oBtn4 = document.getElementById("nav_list_a_g");
            var oBox4 = document.getElementById("nav_list_b");
            var oBtn2 = document.getElementById("sideroom-blur");
            var oBtn = document.getElementById("box_hover");
            var oBox = document.getElementById("sideroom");
            var backBFB = document.getElementById("background-img");
            var adminBFB = '<?php $this->options->logocontactbBFB(); ?>' ;
            if (adminBFB == 1){
             backBFB.style.cssText = "height: 45%; background-image: url('<?php $this->options->logocontactb() ?>"
            }
            oBtn.onclick = function ()
            {

                // oBox.style.cssText = "transform:translateX(100%);"
                oBtn2.style.cssText= "display:block;"
                if(getComputedStyle(sideroom).transform=="translateX(100%)"){
                    oBox.style.cssText = "transform: translateX(0);"
                } else{
                    oBox.style.cssText = "transform: translateX(100%);"
                }
            };
            oBtn2.onclick = function ()
            {
                oBox.style.cssText = "transform: translateX(0);"
                oBtn2.style.cssText= "display:none;"
            };
            oBtn3.onclick = function ()
            {

                if(getComputedStyle(nav_list_a).display=="none"){
                    oBox3.style.cssText = "display:block;"
                } else{
                    oBox3.style.cssText = "display:none;"
                }


            };
            oBtn4.onclick = function ()
            {

                if(getComputedStyle(nav_list_b).display=="none"){
                    oBox4.style.cssText = "display:block;"
                } else if(getComputedStyle(nav_list_b).display=="block"){
                    oBox4.style.cssText = "display:none;"
                }

            };

        }
        window.onscroll = function() {
            let percentage = document.getElementById('percentage');
            let totalH = document.body.scrollHeight || document.documentElement.scrollHeight;
            let clientH = window.innerHeight || document.documentElement.clientHeight;
            let validH = totalH - clientH;
            let scrollH = document.body.scrollTop || document.documentElement.scrollTop;
            if (scrollH == 0){
                percentage.innerHTML = '<svg t="1670852398118" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="1073" width="32" height="32"><path d="M38.167273 747.054545c-8.610909 0-16.989091-3.025455-23.738182-9.30909-14.196364-13.265455-14.894545-35.141818-1.629091-49.338182L486.4 180.363636c13.265455-14.196364 37.934545-14.196364 50.967273 0l473.832727 507.810909a34.909091 34.909091 0 0 1-1.629091 49.338182c-13.963636 13.032727-36.072727 12.334545-49.338182-1.629091L512 255.534545 63.534545 735.883636c-6.749091 7.447273-16.058182 11.170909-25.367272 11.170909z" p-id="1074" fill="#8a8a8a"></path></svg>';
            }else{
                let fullWindowHeightInPercentage = Math.round((scrollH / validH) * 100);
                percentage.innerHTML = '<div style="font-size: 1.8rem;">' + fullWindowHeightInPercentage + '<span style="font-size:small;">%<span></div>';
                if (fullWindowHeightInPercentage == 0) percentage.innerHTML = '<svg t="1670852398118" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="1073" width="32" height="32"><path d="M38.167273 747.054545c-8.610909 0-16.989091-3.025455-23.738182-9.30909-14.196364-13.265455-14.894545-35.141818-1.629091-49.338182L486.4 180.363636c13.265455-14.196364 37.934545-14.196364 50.967273 0l473.832727 507.810909a34.909091 34.909091 0 0 1-1.629091 49.338182c-13.963636 13.032727-36.072727 12.334545-49.338182-1.629091L512 255.534545 63.534545 735.883636c-6.749091 7.447273-16.058182 11.170909-25.367272 11.170909z" p-id="1074" fill="#8a8a8a"></path></svg>';
                if (fullWindowHeightInPercentage >= 100) percentage.innerHTML = '<svg t="1670852648630" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="839" width="32" height="32"><path d="M766.08 880.896l-226.56-111.104a34.176 34.176 0 0 1 29.888-61.44l185.792 91.264 80.192-549.12-361.216 433.408v201.408a34.112 34.112 0 0 1-68.16 0V672.64a35.072 35.072 0 0 1 8.128-23.296l340.224-408.384-545.536 283.072 128.576 66.688a35.2 35.2 0 0 1 15.296 46.592 33.152 33.152 0 0 1-44.288 15.36L122.432 555.84a35.008 35.008 0 0 1-15.936-17.024 33.856 33.856 0 0 1 14.016-45.696L870.08 104.32a35.2 35.2 0 0 1 16.192-3.904c16.704-0.32 31.104 11.52 34.112 27.904a35.392 35.392 0 0 1-0.64 16.512l-103.68 710.08a34.24 34.24 0 0 1-28.864 28.992 33.408 33.408 0 0 1-21.12-3.008z" p-id="840" fill="#8a8a8a"></path></svg>';
            }
            $('#percentage').on('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));
        };


    </script>
</head>
<body>
<div class="background-img" id="background-img" style="background-image: url('<?php $this->options->logocontactb(); ?>;')">
    <header class="header " style="color: <?php $this->options->logoLine(); ?>">
        <div class="header-wide">
            <div id="box_hover" ><svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg></div>

            <h1>
                <a style="color: #ffffff" href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>

            </h1>

            <ul  id="nav_menu">
                <li><a style="color: #ffffff" href="<?php $this->options->siteUrl(); ?>">Home</a></li>

                <?php $this->widget('Widget_Contents_Page_List')
                    ->parse('<li><a style="color: #ffffff" href="{permalink}">{title}</a></li>'); ?>
            </ul></div>
    </header><?php $this->need('sideroom.php'); ?>
</div>


<div class="container">
</div>
<div id="pjax-container">
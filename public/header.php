<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<html lang="zh-CN">
<head>
<meta charset="<?php $this->options->charset(); ?>">
<?php $this->header('generator=&template=&pingback=&xmlrpc=&wlw=&commentReply=&rss1=&rss2=&atom='); ?>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, shrink-to-fit=no, viewport-fit=cover">
<meta name="keywords" content="<?php echo $this->fields->keywords ? $this->fields->keywords : htmlspecialchars($this->_keywords); ?>" />
<meta name="description" content="<?php echo $this->fields->description ? $this->fields->description : htmlspecialchars($this->_description); ?>" />
<script src="https://cdn.jsdelivr.net/gh/highlightjs/cdn-release@11.3.1/build/highlight.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/highlightjs/cdn-release@11.3.1/build/styles/atom-one-dark.min.css">
<script src="<?php $this->options->themeUrl('css/viewer.js'); ?>"></script>
    <script src="<?php $this->options->themeUrl('css/nprogress.js'); ?>"></script>
    <script src="<?php $this->options->themeUrl('css/smooth-scroll.js'); ?>"></script>
<title><?php $this->archiveTitle(array('category' => '分类 %s 下的文章', 'search' => '包含关键字 %s 的文章', 'tag' => '标签 %s 下的文章', 'author' => '%s 发布的文章'), '', ' - '); ?><?php $this->options->title(); ?></title>
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/bootstrap.min.css');  ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/typora-indigo.css'); ?>">
<link rel="stylesheet" href="<?php $this->options->themeUrl('css/Q-style.css'); ?>">
<link rel="stylesheet" href="<?php $this->options->themeUrl('css/post.css'); ?>">
<link rel="stylesheet" href="<?php $this->options->themeUrl('css/mobile.css');  ?>">
<link rel="stylesheet" href="<?php $this->options->themeUrl('css/viewer.css');  ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/nprogress.css');  ?>">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/highlightjs/cdn-release@11.3.1/build/styles/atom-one-dark.min.css">

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
                percentage.innerHTML = '<i class="ri-align-top"></i>';
            }else{
                let fullWindowHeightInPercentage = Math.round((scrollH / validH) * 100);
                percentage.innerHTML = '<div style="color: <?php $this->options->logoLine(); ?>;">' + fullWindowHeightInPercentage + '<span style="font-size:small;">%<span></div>';
                if (fullWindowHeightInPercentage == 0) percentage.innerHTML = '<i style="color: <?php $this->options->logoLine(); ?>;" class="ri-align-top"></i>';
                if (fullWindowHeightInPercentage >= 100) percentage.innerHTML = '<i style="color: <?php $this->options->logoLine(); ?>;" class="ri-align-bottom"></i>';
            }
        };
        $('#percentage').on('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));

    </script>
</head>
<body>
<div id="pjax-container">
<header class="header " style="color: <?php $this->options->logoLine(); ?>">
    <div class="header-wide">
        <div id="box_hover" ><svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg></div>

        <h1>


        </h1>
        <?php if($this->is('index')): ?>
        <h1 class="post-title" itemprop="name headline">🍁&nbsp&nbsp<?php $this->options->title(); ?>&nbsp&nbsp🌏</h1>
        <?php else: ?>
            <h1 class="post-title" itemprop="name headline">🍁&nbsp&nbsp<?php $this->title(); ?>&nbsp&nbsp🌏</h1>
        <?php endif; ?>

       </div>
</header>
<div class="all_body" >
<div class="background-img" style="background-image: url('<?php $this->options->logocontactb(); ?>')">
<?php $this->need('sideroom.php'); ?>
   </div>
<div class="header-left">
        <div id="percentage"></div>
    <div class="ava_logo">
    <img class="logo" src="<?php $this->options->logoCss(); ?>">
        <h1 class="name"><?php $this->options->logoName(); ?></h1>
        <h2 class="name-talk"><?php $this->options->logobg(); ?></h2>
    </div>

    <div class="header-home"><svg t="1669375349090" class="icon iconHome" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="1488" width="200" height="200"><path d="M0 0h1024v1024H0z" fill="#FF0033" fill-opacity="0" p-id="1489"></path><path d="M468.906667 57.941333a68.394667 68.394667 0 0 1 86.165333 0l399.936 322.624c30.058667 24.234667 35.136 68.693333 11.328 99.328a69.269333 69.269333 0 0 1-37.802667 24.768l-3.712 0.810667 0.021334 361.514667c0 59.370667-44.48 108.48-102.528 113.877333l-4.736 0.362667-4.949334 0.106666H211.370667c-59.84 0-109.056-47.808-112.106667-109.312l-0.106667-5.034666-0.021333-361.514667-2.453333-0.490667c-29.696-6.848-52.16-33.088-53.909334-64.96L42.666667 436.010667c0-21.610667 9.685333-42.026667 26.325333-55.466667z m46.72 50.026667a5.76 5.76 0 0 0-7.253334 0L108.864 431.146667a6.058667 6.058667 0 0 0-2.218667 4.693333c0 3.328 2.624 6.016 5.866667 6.016h18.816c17.536-0.021333 31.744 14.506667 31.744 32.405333v392.533334l0.064 3.392C164.437333 896.533333 185.792 917.333333 211.712 917.333333h599.765333l3.328-0.085333c25.770667-1.322667 46.101333-23.146667 46.101334-49.621333V474.282667c0-17.92 14.208-32.426667 31.744-32.426667h18.816c1.792 0 3.477333-0.832 4.608-2.261333a6.101333 6.101333 0 0 0-0.96-8.426667z m138.133333 564.693333a32 32 0 0 1-3.754667 45.098667C610.858667 750.890667 568.106667 768 522.666667 768c-45.44 0-88.192-17.109333-127.36-50.24a32 32 0 1 1 41.386666-48.853333C464.704 692.650667 493.056 704 522.666667 704c29.589333 0 57.941333-11.349333 85.973333-35.093333a32 32 0 0 1 45.12 3.754666z" fill="#141111" p-id="1490"></path></svg></div>

    <div class="header-home"><svg t="1669376107266" class="icon iconHome" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="1634" width="200" height="200"><path d="M0 0h1024v1024H0z" fill="#FF0033" fill-opacity="0" p-id="1635"></path><path d="M288 373.333333c-82.432 0-149.333333 66.922667-149.333333 149.333334a149.333333 149.333333 0 0 0 149.333333 149.333333c82.496 0 149.333333-66.816 149.333333-149.333333 0-82.410667-66.88-149.333333-149.333333-149.333334z m0 64c47.104 0 85.333333 38.250667 85.333333 85.333334 0 47.146667-38.186667 85.333333-85.333333 85.333333a85.333333 85.333333 0 1 1 0-170.666667zM757.333333 672a128.021333 128.021333 0 1 0 128 128c0-70.656-57.344-128-128-128z m0 64a64.021333 64.021333 0 1 1-64 64c0-35.328 28.672-64 64-64zM757.333333 117.333333a128.021333 128.021333 0 1 0 128 128c0-70.656-57.344-128-128-128z m0 64a64.021333 64.021333 0 1 1-64 64c0-35.328 28.672-64 64-64z" fill="#000000" p-id="1636"></path><path d="M356.565333 580.864a32 32 0 0 1 43.904-10.965333l266.666667 160a32 32 0 0 1-32.938667 54.869333l-266.666666-160a32 32 0 0 1-10.965334-43.904zM643.050667 264.789333a32 32 0 0 1 36.565333 52.522667l-256 178.282667a32 32 0 0 1-36.565333-52.522667l256-178.282667z" fill="#000000" p-id="1637"></path></svg></div>

    <div class="header-home"><svg t="1669375349090" class="icon iconHome" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="1488" width="200" height="200"><path d="M0 0h1024v1024H0z" fill="#FF0033" fill-opacity="0" p-id="1489"></path><path d="M468.906667 57.941333a68.394667 68.394667 0 0 1 86.165333 0l399.936 322.624c30.058667 24.234667 35.136 68.693333 11.328 99.328a69.269333 69.269333 0 0 1-37.802667 24.768l-3.712 0.810667 0.021334 361.514667c0 59.370667-44.48 108.48-102.528 113.877333l-4.736 0.362667-4.949334 0.106666H211.370667c-59.84 0-109.056-47.808-112.106667-109.312l-0.106667-5.034666-0.021333-361.514667-2.453333-0.490667c-29.696-6.848-52.16-33.088-53.909334-64.96L42.666667 436.010667c0-21.610667 9.685333-42.026667 26.325333-55.466667z m46.72 50.026667a5.76 5.76 0 0 0-7.253334 0L108.864 431.146667a6.058667 6.058667 0 0 0-2.218667 4.693333c0 3.328 2.624 6.016 5.866667 6.016h18.816c17.536-0.021333 31.744 14.506667 31.744 32.405333v392.533334l0.064 3.392C164.437333 896.533333 185.792 917.333333 211.712 917.333333h599.765333l3.328-0.085333c25.770667-1.322667 46.101333-23.146667 46.101334-49.621333V474.282667c0-17.92 14.208-32.426667 31.744-32.426667h18.816c1.792 0 3.477333-0.832 4.608-2.261333a6.101333 6.101333 0 0 0-0.96-8.426667z m138.133333 564.693333a32 32 0 0 1-3.754667 45.098667C610.858667 750.890667 568.106667 768 522.666667 768c-45.44 0-88.192-17.109333-127.36-50.24a32 32 0 1 1 41.386666-48.853333C464.704 692.650667 493.056 704 522.666667 704c29.589333 0 57.941333-11.349333 85.973333-35.093333a32 32 0 0 1 45.12 3.754666z" fill="#141111" p-id="1490"></path></svg></div>
    <div class="header-home"><svg t="1669375349090" class="icon iconHome" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="1488" width="200" height="200"><path d="M0 0h1024v1024H0z" fill="#FF0033" fill-opacity="0" p-id="1489"></path><path d="M468.906667 57.941333a68.394667 68.394667 0 0 1 86.165333 0l399.936 322.624c30.058667 24.234667 35.136 68.693333 11.328 99.328a69.269333 69.269333 0 0 1-37.802667 24.768l-3.712 0.810667 0.021334 361.514667c0 59.370667-44.48 108.48-102.528 113.877333l-4.736 0.362667-4.949334 0.106666H211.370667c-59.84 0-109.056-47.808-112.106667-109.312l-0.106667-5.034666-0.021333-361.514667-2.453333-0.490667c-29.696-6.848-52.16-33.088-53.909334-64.96L42.666667 436.010667c0-21.610667 9.685333-42.026667 26.325333-55.466667z m46.72 50.026667a5.76 5.76 0 0 0-7.253334 0L108.864 431.146667a6.058667 6.058667 0 0 0-2.218667 4.693333c0 3.328 2.624 6.016 5.866667 6.016h18.816c17.536-0.021333 31.744 14.506667 31.744 32.405333v392.533334l0.064 3.392C164.437333 896.533333 185.792 917.333333 211.712 917.333333h599.765333l3.328-0.085333c25.770667-1.322667 46.101333-23.146667 46.101334-49.621333V474.282667c0-17.92 14.208-32.426667 31.744-32.426667h18.816c1.792 0 3.477333-0.832 4.608-2.261333a6.101333 6.101333 0 0 0-0.96-8.426667z m138.133333 564.693333a32 32 0 0 1-3.754667 45.098667C610.858667 750.890667 568.106667 768 522.666667 768c-45.44 0-88.192-17.109333-127.36-50.24a32 32 0 1 1 41.386666-48.853333C464.704 692.650667 493.056 704 522.666667 704c29.589333 0 57.941333-11.349333 85.973333-35.093333a32 32 0 0 1 45.12 3.754666z" fill="#141111" p-id="1490"></path></svg></div>
    <div class="header-home"><svg t="1669375349090" class="icon iconHome" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="1488" width="200" height="200"><path d="M0 0h1024v1024H0z" fill="#FF0033" fill-opacity="0" p-id="1489"></path><path d="M468.906667 57.941333a68.394667 68.394667 0 0 1 86.165333 0l399.936 322.624c30.058667 24.234667 35.136 68.693333 11.328 99.328a69.269333 69.269333 0 0 1-37.802667 24.768l-3.712 0.810667 0.021334 361.514667c0 59.370667-44.48 108.48-102.528 113.877333l-4.736 0.362667-4.949334 0.106666H211.370667c-59.84 0-109.056-47.808-112.106667-109.312l-0.106667-5.034666-0.021333-361.514667-2.453333-0.490667c-29.696-6.848-52.16-33.088-53.909334-64.96L42.666667 436.010667c0-21.610667 9.685333-42.026667 26.325333-55.466667z m46.72 50.026667a5.76 5.76 0 0 0-7.253334 0L108.864 431.146667a6.058667 6.058667 0 0 0-2.218667 4.693333c0 3.328 2.624 6.016 5.866667 6.016h18.816c17.536-0.021333 31.744 14.506667 31.744 32.405333v392.533334l0.064 3.392C164.437333 896.533333 185.792 917.333333 211.712 917.333333h599.765333l3.328-0.085333c25.770667-1.322667 46.101333-23.146667 46.101334-49.621333V474.282667c0-17.92 14.208-32.426667 31.744-32.426667h18.816c1.792 0 3.477333-0.832 4.608-2.261333a6.101333 6.101333 0 0 0-0.96-8.426667z m138.133333 564.693333a32 32 0 0 1-3.754667 45.098667C610.858667 750.890667 568.106667 768 522.666667 768c-45.44 0-88.192-17.109333-127.36-50.24a32 32 0 1 1 41.386666-48.853333C464.704 692.650667 493.056 704 522.666667 704c29.589333 0 57.941333-11.349333 85.973333-35.093333a32 32 0 0 1 45.12 3.754666z" fill="#141111" p-id="1490"></path></svg></div>


</div>
</div>

<div class="container">
        </div>
<div id="pjax-container">
<html lang="zh-CN">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, shrink-to-fit=no, viewport-fit=cover">
<meta name="keywords" content="<?php echo $this->fields->keywords ? $this->fields->keywords : htmlspecialchars($this->_keywords); ?>" />
<meta name="description" content="<?php echo $this->fields->description ? $this->fields->description : htmlspecialchars($this->_description); ?>" />
<script src="https://cdn.jsdelivr.net/gh/highlightjs/cdn-release@11.3.1/build/highlight.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/highlightjs/cdn-release@11.3.1/build/languages/go.min.js"></script>

<script src="<?php $this->options->themeUrl('css/viewer.js'); ?>"></script>
    <script src="<?php $this->options->themeUrl('css/nprogress.js'); ?>"></script>
<title><?php $this->archiveTitle(array('category' => '分类 %s 下的文章', 'search' => '包含关键字 %s 的文章', 'tag' => '标签 %s 下的文章', 'author' => '%s 发布的文章'), '', ' - '); ?><?php $this->options->title(); ?></title>
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/bootstrap.min.css');  ?>">

<link rel="stylesheet" href="<?php $this->options->themeUrl('css/Q-style.css'); ?>">
<link rel="stylesheet" href="<?php $this->options->themeUrl('css/post.css'); ?>">
<link rel="stylesheet" href="<?php $this->options->themeUrl('css/mobile.css');  ?>">
<link rel="stylesheet" href="<?php $this->options->themeUrl('css/viewer.css');  ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/nprogress.css');  ?>">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/highlightjs/cdn-release@11.3.1/build/styles/atom-one-dark.min.css">

<?php $this->header(); ?>

    <script>
        window.onload = function ()
        {
            var oBtn2 = document.getElementById("sideroom-blur");
            var oBtn = document.getElementById("box_hover");
            var oBox = document.getElementById("sideroom");
            oBtn.onclick = function ()
            {
                oBox.style.cssText = "display:block; "
            };
            oBtn2.onclick = function ()
            {
                oBox.style.cssText = "display:none;"
            };
        }
    </script>
</head>
<body>
<header class="header navbar navbar-default ">
    <div id="box_hover" ><svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg></div>

    <h1>
        <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>

    </h1>

    <ul  id="nav_menu">
        <li><a href="<?php $this->options->siteUrl(); ?>">Home</a></li>
        <?php $this->widget('Widget_Contents_Page_List')
        ->parse('<li><a href="{permalink}">{title}</a></li>'); ?>
    </ul>
</header>
<?php $this->need('sideroom.php'); ?>

<div class="container">
        </div>
<div id="pjax-container">
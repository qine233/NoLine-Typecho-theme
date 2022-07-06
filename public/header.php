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
</head>
<body>
<div class="container">
       <header class="header navbar navbar-default navbar-fixed-top">

         <h1>
             <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>
          
         </h1>

         <div class="site-search">
                <form id="a-search" method="post" action="<?php $this->options->siteUrl(); ?>" role="search">

                    <input type="text" id="s" name="s" class="a-text" placeholder="<?php _e('请输入'); ?>" />
                    <button type="submit" class="a-submit"><?php _e('<svg style="width:25px; height:25px" t="1633546689663" class="icon" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="2378" width="128" height="128"><path d="M924.16 903.168c-1.536-4.096-1.536-4.096-2.56-5.632l-3.072-4.608c-2.048-2.56-4.096-5.12-7.68-9.216-5.632-6.656-14.336-15.36-25.6-27.136-17.408-18.432-35.328-36.352-77.824-79.872-42.496-43.008-59.904-61.44-77.312-79.36-10.752-11.264-18.944-19.968-24.576-26.112-2.56-3.072-4.608-5.12-5.632-6.656 0.512 1.536 0.512 1.536 2.048 4.608 1.536 6.144 1.536 6.144-5.632 19.968 67.072-64.512 105.984-154.112 105.984-250.368 0-190.464-151.552-344.576-338.432-344.576-186.88 0-338.432 154.112-338.432 344.576 0 190.464 151.552 344.576 338.432 344.576 4.096 0 8.192 0 13.312-0.512 3.584-0.512 6.144-0.512 11.776-1.024 10.752-1.024 14.848-1.536 19.456-1.536 7.68 0 19.968-2.56 38.4-7.68 2.048-0.512 4.096-1.024 6.656-2.048 7.168-2.048 13.824-4.096 20.992-6.144 4.096-1.024 7.168-2.048 9.216-3.072 10.752-3.584 16.896-15.36 13.312-26.112-3.584-10.752-14.848-16.896-25.6-13.824-1.536 0.512-4.608 1.536-8.704 2.56l-19.968 6.144-6.144 1.536c-13.824 4.096-25.088 6.144-27.648 6.144-6.656 0-11.264 0.512-23.552 1.536-5.12 0.512-7.68 1.024-10.752 1.024-3.584 0.512-7.168 0.512-9.728 0.512-164.352 0-297.472-135.68-297.472-302.592 0-167.424 133.12-302.592 297.472-302.592s297.472 135.68 297.472 302.592c0 84.48-33.792 163.328-93.184 220.16-7.68 14.336-7.68 14.336-5.632 20.992 1.536 3.584 1.536 3.584 2.56 5.632l3.072 4.608c2.048 2.56 4.096 5.12 7.68 9.216 5.632 6.656 14.336 15.36 25.6 27.136 17.408 18.432 35.328 36.352 77.824 79.872 42.496 43.52 60.416 61.44 77.824 79.36 10.752 11.264 18.944 19.968 24.576 26.112 2.56 3.072 4.608 5.12 5.632 6.656-0.512-1.536-0.512-1.536-2.048-4.608-1.536-6.656-1.536-6.656 6.656-20.48-8.704 7.68-9.728 20.48-2.56 29.184 7.168 8.704 20.48 9.728 28.672 2.56 6.656-14.336 6.656-14.336 5.12-21.504z" fill="#707070" p-id="2379"></path></svg>'); ?></button>
                </form>
                
            </div>

        </header>


          
        </div>
<div id="pjax-container">
<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;


function themeConfig($logo) {
    $logoCss = new Typecho_Widget_Helper_Form_Element_Text('logoCss', NULL, NULL, _t('站点头像地址'), _t('在这里填入一个图片 URL 地址, 以修改头像'));
    $logo->addInput($logoCss);
    


    $logoName = new Typecho_Widget_Helper_Form_Element_Text('logoName', NULL, NULL, _t('博主名字'), _t('在这里填入你的博客名'));
    $logo->addInput($logoName);
    
    $logobg = new Typecho_Widget_Helper_Form_Element_Text('logobg', NULL, NULL, _t('头图背景'), _t('在这里填入你的头图链接'));
    $logo->addInput($logobg);
    
    $logocontacta = new Typecho_Widget_Helper_Form_Element_Text('logocontacta', NULL, NULL, _t('个人卡片-GITHUB联系方式'), _t('在这里填入你的github链接'));
    $logo->addInput($logocontacta);

    $logocontactb = new Typecho_Widget_Helper_Form_Element_Text('logocontactb', NULL, NULL, _t('个人卡片-关于联系方式'), _t('在这里填入你的关于链接'));
    $logo->addInput($logocontactb);
    // 底部版权部分
  


}

Typecho_Plugin::factory('admin/write-post.php')->bottom = array('Editor', 'edit');
Typecho_Plugin::factory('admin/write-page.php')->bottom = array('Editor', 'edit');

class Editor
{
    public static function edit()
    {
        echo "<script src='" . Helper::options()->themeUrl . '/editor/extend.js' . "'></script>";
        echo "<script src='" . Helper::options()->themeUrl . '/editor/editor.js' . "'></script>";
    }
}

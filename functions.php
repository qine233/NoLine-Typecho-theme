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

//统计多少天内发布的文章数量
function getNumPosts($days){
    $db = Typecho_Db::get();
    $st_days= time()-$days*24*60*60;
    $result = $db->fetchAll($db->select()->from('table.contents')
        ->where('status = ?','publish')
        ->where('type = ?', 'post')
        ->where('modified >= ?', $st_days)
        //统计时间
    );
    $total_posts = count($result);
    return $total_posts;
}

//获取Gravatar头像 QQ邮箱取用qq头像
function getGravatar($email, $s = 96, $d = 'mp', $r = 'g', $img = false, $atts = array())
{
preg_match_all('/((\d)*)@qq.com/', $email, $vai);
if (empty($vai['1']['0'])) {
    $url = 'https://gravatar.loli.net/avatar/';
    $url .= md5(strtolower(trim($email)));
    $url .= "?s=$s&d=$d&r=$r";
    if ($img) {
        $url = '<img src="' . $url . '"';
        foreach ($atts as $key => $val)
            $url .= ' ' . $key . '="' . $val . '"';
        $url .= ' />';
    }
}else{
    $url = 'https://q2.qlogo.cn/headimg_dl?dst_uin='.$vai['1']['0'].'&spec=100';
}
return  $url;
}





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

 function get_comment_at($coid){
    $db   = Typecho_Db::get();
    $prow = $db->fetchRow($db->select('parent,status')->from('table.comments')
        ->where('coid = ?', $coid));//当前评论
    $mail = "";
    $parent = @$prow['parent'];
    if ($parent != "0") {//子评论
        $arow = $db->fetchRow($db->select('author,status,mail')->from('table.comments')
            ->where('coid = ?', $parent));//查询该条评论的父评论的信息
        @$author = @$arow['author'];//作者名称
        $mail = @$arow['mail'];
        if(@$author && $arow['status'] == "approved"){//父评论作者存在且父评论已经审核通过
            if (@$prow['status'] == "waiting"){
                echo '<p class="commentReview">（评论正在审核中）</p>';
            }
            echo '<a href="#comment-' . $parent . '">@' . $author . '</a>';
        }else{//父评论作者不存在或者父评论没有审核通过
            if (@$prow['status'] == "waiting"){
                echo '<p class="commentReview">（评论正在审核中）</p>';
            }else{
                echo '';
            }
        }

    } else {//母评论，无需输出锚点链接
        if (@$prow['status'] == "waiting"){
            echo '<p class="commentReview">（评论正在审核中）</p>';
        }else{
            echo '';
        }
    }
    }
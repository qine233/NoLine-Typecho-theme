<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;


function themeConfig($logo)
{
    $db = Typecho_Db::get();
    $sjdq = $db->fetchRow($db->select()->from('table.options')->where('name = ?', 'theme:qine'));
    $ysj = $sjdq['value'];
    if (isset($_POST['type'])) {
        if ($_POST["type"] == "备份模板数据") {
            if ($db->fetchRow($db->select()->from('table.options')->where('name = ?', 'theme:qine'))) {
                $update = $db->update('table.options')->rows(array('value' => $ysj))->where('name = ?', 'theme:qine');
                $updateRows = $db->query($update);
                echo '<div class="tongzhi">备份已更新，请等待自动刷新！如果等不到请点击';
                ?>
                <a href="<?php Helper::options()->adminUrl('options-theme.php'); ?>">这里</a></div>
                <script
                    language="JavaScript">window.setTimeout("location=\'<?php Helper::options()->adminUrl('options-theme.php'); ?>\'", 2500);</script>
                <?php
            } else {
                if ($ysj) {
                    $insert = $db->insert('table.options')
                        ->rows(array('name' => 'theme:qine', 'user' => '0', 'value' => $ysj));
                    $insertId = $db->query($insert);
                    echo '<div class="tongzhi">备份完成，请等待自动刷新！如果等不到请点击';
                    ?>
                    <a href="<?php Helper::options()->adminUrl('options-theme.php'); ?>">这里</a></div>
                    <script
                        language="JavaScript">window.setTimeout("location=\'<?php Helper::options()->adminUrl('options-theme.php'); ?>\'", 2500);</script>
                    <?php
                }
            }
        }
        if ($_POST["type"] == "还原模板数据") {
            if ($db->fetchRow($db->select()->from('table.options')->where('name = ?', 'theme:qine'))) {
                $sjdub = $db->fetchRow($db->select()->from('table.options')->where('name = ?', 'theme:qine'));
                $bsj = $sjdub['value'];
                $update = $db->update('table.options')->rows(array('value' => $bsj))->where('name = ?', 'theme:qine');
                $updateRows = $db->query($update);
                echo '<div class="tongzhi">检测到模板备份数据，恢复完成，请等待自动刷新！如果等不到请点击';
                ?>
                <a href="<?php Helper::options()->adminUrl('options-theme.php'); ?>">这里</a></div>
                <script
                    language="JavaScript">window.setTimeout("location=\'<?php Helper::options()->adminUrl('options-theme.php'); ?>\'", 2000);</script>
                <?php
            } else {
                echo '<div class="tongzhi">没有模板备份数据，恢复不了哦！</div>';
            }
        }
        if ($_POST["type"] == "删除备份数据") {
            if ($db->fetchRow($db->select()->from('table.options')->where('name = ?', 'theme:qine'))) {
                $delete = $db->delete('table.options')->where('name = ?', 'theme:qine');
                $deletedRows = $db->query($delete);
                echo '<div class="tongzhi">删除成功，请等待自动刷新，如果等不到请点击';
                ?>
                <a href="<?php Helper::options()->adminUrl('options-theme.php'); ?>">这里</a></div>
                <script
                    language="JavaScript">window.setTimeout("location=\'<?php Helper::options()->adminUrl('options-theme.php'); ?>\'", 2500);</script>
                <?php
            } else {
                echo '<div class="tongzhi">不用删了！备份不存在！！！</div>';
            }
        }
    }
    echo '<form class="protected" action="?qine" method="post">
<input type="submit" name="type" class="btn btn-s" value="备份模板数据" />&nbsp;&nbsp;<input type="submit" name="type" class="btn btn-s" value="还原模板数据" />&nbsp;&nbsp;<input type="submit" name="type" class="btn btn-s" value="删除备份数据" /></form>';

    $logoCss = new Typecho_Widget_Helper_Form_Element_Text('logoCss', NULL, NULL, _t('站点头像地址'), _t('在这里填入一个图片 URL 地址, 以修改头像'));
    $logo->addInput($logoCss);


    $logoName = new Typecho_Widget_Helper_Form_Element_Text('logoName', NULL, NULL, _t('博主名字'), _t('在这里填入你的博客名'));
    $logo->addInput($logoName);

    $logobg = new Typecho_Widget_Helper_Form_Element_Text('logobg', NULL, NULL, _t('座右铭'), _t('在这里填入你的座右铭，建议简短，10字内'));
    $logo->addInput($logobg);

    $logoLine = new Typecho_Widget_Helper_Form_Element_Text('logoLine', NULL, NULL, _t('导航栏字体颜色'), _t('在这里填入颜色代码，建议：鲜艳的颜色用白色#ffffff，或者黑色#000000，根据自身搭配填写'));
    $logo->addInput($logoLine);

    $logocontacta = new Typecho_Widget_Helper_Form_Element_Text('logocontacta', NULL, NULL, _t('关注按钮对应链接'), _t('在这里填入你的github链接或其他社交平台链接'));
    $logo->addInput($logocontacta);

    $logocontactb = new Typecho_Widget_Helper_Form_Element_Text('logocontactb', NULL, _t('https://cdn.jsdelivr.net/gh/qine233/jsdever-ty/bg.jpg'), _t('主页半屏背景图'), _t('在这里填入你的背景图链接，建议引用外部图床节省网站所在服务器带宽'));
    $logo->addInput($logocontactb);

    $logocontactbBFB = new Typecho_Widget_Helper_Form_Element_Text('logocontactbBFB', NULL, NULL, _t('主页半屏背景图的屏占比'), _t('这里仅提供两档，输入1即开启短背景不输入即默认大屏'));
    $logo->addInput($logocontactbBFB);

    $logoFooter = new Typecho_Widget_Helper_Form_Element_Textarea('logoFooter', NULL, NULL, _t('站点底部版权填写区域，后续会考虑将footer区域拉高，增加更多可自定义内容'), _t('在这里填入你的站点底部代码，例如备案链接等'));
    $logo->addInput($logoFooter);


}

//统计多少天内发布的文章数量
function getNumPosts($days)
{
    $db = Typecho_Db::get();
    $st_days = time() - $days * 24 * 60 * 60;
    $result = $db->fetchAll($db->select()->from('table.contents')
        ->where('status = ?', 'publish')
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
        $url = 'https://cdn.sep.cc/avatar/';
        $url .= md5(strtolower(trim($email)));
        $url .= "?s=$s&d=$d&r=$r";
        if ($img) {
            $url = '<img src="' . $url . '"';
            foreach ($atts as $key => $val)
                $url .= ' ' . $key . '="' . $val . '"';
            $url .= ' />';
        }
    } else {
        $url = 'https://q2.qlogo.cn/headimg_dl?dst_uin=' . $vai['1']['0'] . '&spec=100';
    }
    return $url;
}

function themeInit($comment)
{
    $comment = spam_protection_pre($comment, $post, $result);
}

function spam_protection_math()
{
    $num1 = rand(1, 49);
    $num2 = rand(1, 49);
    echo "<label for=\"math\">请输入<code>$num1</code>+<code>$num2</code>的计算结果：</label>\n";
    echo "<input type=\"text\" name=\"sum\" class=\"text\" value=\"\" size=\"25\" tabindex=\"4\" style=\"width:218px\" placeholder=\"计算结果：\">\n";
    echo "<input type=\"hidden\" name=\"num1\" value=\"$num1\">\n";
    echo "<input type=\"hidden\" name=\"num2\" value=\"$num2\">";
}

function spam_protection_pre($comment, $post, $result)
{
    $sum = $_POST['sum'];
    switch ($sum) {
        case $_POST['num1'] + $_POST['num2']:
            break;
        case null:
            throw new Typecho_Widget_Exception(_t('对不起: 请输入验证码。<a href="javascript:history.back(-1)">返回上一页</a>', '评论失败'));
            break;
        default:
            throw new Typecho_Widget_Exception(_t('对不起: 验证码错误，请<a href="javascript:history.back(-1)">返回</a>重试。', '评论失败'));
    }
    return $comment;
}


Typecho_Plugin::factory('admin/write-post.php')->bottom = array('tagshelper', 'tagslist');
class tagshelper {
    public static function tagslist()
    {
    $tag="";$taglist="";$i=0;//循环一次利用到两个位置
Typecho_Widget::widget('Widget_Metas_Tag_Cloud', 'sort=count&desc=1&limit=200')->to($tags);
while ($tags->next()) {
$tag=$tag."'".$tags->name."',";
$taglist=$taglist."<a id=".$i." onclick=\"$(\'#tags\').tokenInput(\'add\', {id: \'".$tags->name."\', tags: \'".$tags->name."\'});\">".$tags->name."</a>";
$i++;
}
?><style>.Posthelper a{cursor: pointer; padding: 0px 6px; margin: 2px 0;display: inline-block;border-radius: 2px;text-decoration: none;}
.Posthelper a:hover{background: #ccc;color: #fff;}.fullscreen #tab-files{right: 0;}/*解决全屏状态下鼠标放到附件上传按钮上导致的窗口抖动问题*/
</style>
<script>
  function chaall () {
   var html='';
 $("#file-list li .insert").each(function(){
   var t = $(this), p = t.parents('li');
   var file=t.text();
   var url= p.data('url');
   var isImage= p.data('image');
   if ($("input[name='markdown']").val()==1) {
   html = isImage ? html+'\n!['+file+'](' + url + ')\n':''+html+'';
   }else{
   html = isImage ? html+'<img src="' + url + '" alt="' + file + '" />\n':''+html+'';
   }
    });
   var textarea = $('#text');
   textarea.replaceSelection(html);return false;
    }

    function chaquan () {
   var html='';
 $("#file-list li .insert").each(function(){
   var t = $(this), p = t.parents('li');
   var file=t.text();
   var url= p.data('url');
   var isImage= p.data('image');
   if ($("input[name='markdown']").val()==1) {
   html = isImage ? html+'':html+'\n['+file+'](' + url + ')\n';
   }else{
   html = isImage ? html+'':html+'<a href="' + url + '"/>' + file + '</a>\n';
   }
    });
   var textarea = $('#text');
   textarea.replaceSelection(html);return false;
    }
function filter_method(text, badword){
    //获取文本输入框中的内容
    var value = text;
    var res = '';
    //遍历敏感词数组
    for(var i=0; i<badword.length; i++){
        var reg = new RegExp(badword[i],"g");
        //判断内容中是否包括敏感词
        if (value.indexOf(badword[i]) > -1) {
            $('#tags').tokenInput('add', {id: badword[i], tags: badword[i]});
        }
    }
    return;
}
var badwords = [<?php echo $tag; ?>];
function chatag(){
var textarea=$('#text').val();
filter_method(textarea, badwords);
}
  $(document).ready(function(){
    $('#file-list').after('<div class="Posthelper"><a class="w-100" onclick=\"chaall()\" style="background: #467B96;background-color: #3c6a81;text-align: center; padding: 5px 0; color: #fbfbfb; box-shadow: 0 1px 5px #ddd;">插入所有图片</a><a class="w-100" onclick=\"chaquan()\" style="background: #467B96;background-color: #3c6a81;text-align: center; padding: 5px 0; color: #fbfbfb; box-shadow: 0 1px 5px #ddd;">插入所有非图片附件</a></div>');
    $('#tags').after('<div style="margin-top: 35px;" class="Posthelper"><ul style="list-style: none;border: 1px solid #D9D9D6;padding: 6px 12px; max-height: 240px;overflow: auto;background-color: #FFF;border-radius: 2px;margin-bottom: 0;"><?php echo $taglist; ?></ul><a class="w-100" onclick=\"chatag()\" style="background: #467B96;background-color: #3c6a81;text-align: center; padding: 5px 0; color: #fbfbfb; box-shadow: 0 1px 5px #ddd;">检测内容插入标签</a></div>');
  });
  </script>
<?php
    }
}


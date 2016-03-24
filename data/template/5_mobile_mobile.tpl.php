<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('mobile');
0
|| checktplrefresh('./source/plugin/mobile/template/mobile.htm', './template/wanpin123_2014110701/common/header.htm', 1458783141, 'mobile', './data/template/5_mobile_mobile.tpl.php', './source/plugin/mobile/template', 'mobile')
|| checktplrefresh('./source/plugin/mobile/template/mobile.htm', './template/wanpin123_2014110701/common/footer.htm', 1458783141, 'mobile', './data/template/5_mobile_mobile.tpl.php', './source/plugin/mobile/template', 'mobile')
|| checktplrefresh('./source/plugin/mobile/template/mobile.htm', './template/default/common/header_common.htm', 1458783141, 'mobile', './data/template/5_mobile_mobile.tpl.php', './source/plugin/mobile/template', 'mobile')
|| checktplrefresh('./source/plugin/mobile/template/mobile.htm', './template/wanpin123_2014110701/common/searchform.htm', 1458783141, 'mobile', './data/template/5_mobile_mobile.tpl.php', './source/plugin/mobile/template', 'mobile')
|| checktplrefresh('./source/plugin/mobile/template/mobile.htm', './template/wanpin123_2014110701/member/member.htm', 1458783141, 'mobile', './data/template/5_mobile_mobile.tpl.php', './source/plugin/mobile/template', 'mobile')
;?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo CHARSET;?>" />
<?php if($_G['config']['output']['iecompatible']) { ?><meta http-equiv="X-UA-Compatible" content="IE=EmulateIE<?php echo $_G['config']['output']['iecompatible'];?>" /><?php } ?>
<title><?php if(!empty($navtitle)) { ?><?php echo $navtitle;?> - <?php } if(empty($nobbname)) { ?> <?php echo $_G['setting']['bbname'];?> - <?php } ?> Powered by Discuz!</title>
<?php echo $_G['setting']['seohead'];?>

<meta name="keywords" content="<?php if(!empty($metakeywords)) { echo dhtmlspecialchars($metakeywords); } ?>" />
<meta name="description" content="<?php if(!empty($metadescription)) { echo dhtmlspecialchars($metadescription); ?> <?php } if(empty($nobbname)) { ?>,<?php echo $_G['setting']['bbname'];?><?php } ?>" />
<meta name="generator" content="Discuz! <?php echo $_G['setting']['version'];?>" />
<meta name="author" content="Discuz! Team and Comsenz UI Team" />
<meta name="copyright" content="2001-2013 Comsenz Inc." />
<meta name="MSSmartTagsPreventParsing" content="True" />
<meta http-equiv="MSThemeCompatible" content="Yes" />
<base href="<?php echo $_G['siteurl'];?>" /><link rel="stylesheet" type="text/css" href="data/cache/style_5_common.css?<?php echo VERHASH;?>" /><?php if($_G['uid'] && isset($_G['cookie']['extstyle']) && strpos($_G['cookie']['extstyle'], TPLDIR) !== false) { ?><link rel="stylesheet" id="css_extstyle" type="text/css" href="<?php echo $_G['cookie']['extstyle'];?>/style.css" /><?php } elseif($_G['style']['defaultextstyle']) { ?><link rel="stylesheet" id="css_extstyle" type="text/css" href="<?php echo $_G['style']['defaultextstyle'];?>/style.css" /><?php } ?><script type="text/javascript">var STYLEID = '<?php echo STYLEID;?>', STATICURL = '<?php echo STATICURL;?>', IMGDIR = '<?php echo IMGDIR;?>', VERHASH = '<?php echo VERHASH;?>', charset = '<?php echo CHARSET;?>', discuz_uid = '<?php echo $_G['uid'];?>', cookiepre = '<?php echo $_G['config']['cookie']['cookiepre'];?>', cookiedomain = '<?php echo $_G['config']['cookie']['cookiedomain'];?>', cookiepath = '<?php echo $_G['config']['cookie']['cookiepath'];?>', showusercard = '<?php echo $_G['setting']['showusercard'];?>', attackevasive = '<?php echo $_G['config']['security']['attackevasive'];?>', disallowfloat = '<?php echo $_G['setting']['disallowfloat'];?>', creditnotice = '<?php if($_G['setting']['creditnotice']) { ?><?php echo $_G['setting']['creditnames'];?><?php } ?>', defaultstyle = '<?php echo $_G['style']['defaultextstyle'];?>', REPORTURL = '<?php echo $_G['currenturl_encode'];?>', SITEURL = '<?php echo $_G['siteurl'];?>', JSPATH = '<?php echo $_G['setting']['jspath'];?>', CSSPATH = '<?php echo $_G['setting']['csspath'];?>', DYNAMICURL = '<?php echo $_G['dynamicurl'];?>';</script>
<script src="<?php echo $_G['setting']['jspath'];?>common.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php if(empty($_GET['diy'])) { $_GET['diy'] = '';?><?php } if(!isset($topic)) { $topic = array();?><?php } ?>
<meta name="application-name" content="<?php echo $_G['setting']['bbname'];?>" />
<meta name="msapplication-tooltip" content="<?php echo $_G['setting']['bbname'];?>" />
<?php if($_G['setting']['portalstatus']) { ?><meta name="msapplication-task" content="name=<?php echo $_G['setting']['navs']['1']['navname'];?>;action-uri=<?php echo !empty($_G['setting']['domain']['app']['portal']) ? 'http://'.$_G['setting']['domain']['app']['portal'] : $_G['siteurl'].'portal.php'; ?>;icon-uri=<?php echo $_G['siteurl'];?><?php echo IMGDIR;?>/portal.ico" /><?php } ?>
<meta name="msapplication-task" content="name=<?php echo $_G['setting']['navs']['2']['navname'];?>;action-uri=<?php echo !empty($_G['setting']['domain']['app']['forum']) ? 'http://'.$_G['setting']['domain']['app']['forum'] : $_G['siteurl'].'forum.php'; ?>;icon-uri=<?php echo $_G['siteurl'];?><?php echo IMGDIR;?>/bbs.ico" />
<?php if($_G['setting']['groupstatus']) { ?><meta name="msapplication-task" content="name=<?php echo $_G['setting']['navs']['3']['navname'];?>;action-uri=<?php echo !empty($_G['setting']['domain']['app']['group']) ? 'http://'.$_G['setting']['domain']['app']['group'] : $_G['siteurl'].'group.php'; ?>;icon-uri=<?php echo $_G['siteurl'];?><?php echo IMGDIR;?>/group.ico" /><?php } if(helper_access::check_module('feed')) { ?><meta name="msapplication-task" content="name=<?php echo $_G['setting']['navs']['4']['navname'];?>;action-uri=<?php echo !empty($_G['setting']['domain']['app']['home']) ? 'http://'.$_G['setting']['domain']['app']['home'] : $_G['siteurl'].'home.php'; ?>;icon-uri=<?php echo $_G['siteurl'];?><?php echo IMGDIR;?>/home.ico" /><?php } if($_G['basescript'] == 'forum' && $_G['setting']['archiver']) { ?>
<link rel="archives" title="<?php echo $_G['setting']['bbname'];?>" href="<?php echo $_G['siteurl'];?>archiver/" />
<?php } if(!empty($rsshead)) { ?><?php echo $rsshead;?><?php } if(widthauto()) { ?>
<link rel="stylesheet" id="css_widthauto" type="text/css" href="data/cache/style_<?php echo STYLEID;?>_widthauto.css?<?php echo VERHASH;?>" />
<script type="text/javascript">HTMLNODE.className += ' widthauto'</script>
<?php } if($_G['basescript'] == 'forum' || $_G['basescript'] == 'group') { ?>
<script src="<?php echo $_G['setting']['jspath'];?>forum.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php } elseif($_G['basescript'] == 'home' || $_G['basescript'] == 'userapp') { ?>
<script src="<?php echo $_G['setting']['jspath'];?>home.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php } elseif($_G['basescript'] == 'portal') { ?>
<script src="<?php echo $_G['setting']['jspath'];?>portal.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php } if($_G['basescript'] != 'portal' && $_GET['diy'] == 'yes' && check_diy_perm($topic)) { ?>
<script src="<?php echo $_G['setting']['jspath'];?>portal.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php } if($_GET['diy'] == 'yes' && check_diy_perm($topic)) { ?>
<link rel="stylesheet" type="text/css" id="diy_common" href="data/cache/style_<?php echo STYLEID;?>_css_diy.css?<?php echo VERHASH;?>" />
<?php } ?>
<link href="template/wanpin123_2014110701/style/css/style.css" rel="stylesheet" type="text/css" />
<link href="template/wanpin123_2014110701/style/css/forum.css" rel="stylesheet" type="text/css" />
<script src="template/wanpin123_2014110701/style/js/jquery.min.js" type="text/javascript"></script>
<!--[if IE 6]>
<script src="template/wanpin123_2014110701/style/js/DD_belatedPNG_0.0.8a-min.js" type="text/javascript"></script>
<script>
  DD_belatedPNG.fix('#index img');
  DD_belatedPNG.fix('#hd img');
  DD_belatedPNG.fix('#footerLogo img');
</script>
<![endif]-->
<script type="text/javascript">
  jq = jQuery.noConflict();
//以后jquery中的<?php echo $都用jq代替即可。;?>
jq(function(){});
</script>
<script>
jq(function(){
jq(".link_weixin_li").hover(function(){
jq(".link_weixin_ewm",this).stop().animate({"height":"138px"},300);
},function(){
jq(".link_weixin_ewm",this).stop().animate({"height":"0"},300)
})
})</script>
</head>

<body id="nv_<?php echo $_G['basescript'];?>" class="pg_<?php echo CURMODULE;?><?php if($_G['basescript'] === 'portal' && CURMODULE === 'list' && !empty($cat)) { ?> <?php echo $cat['bodycss'];?><?php } ?>" onkeydown="if(event.keyCode==27) return false;">
<div id="append_parent"></div><div id="ajaxwaitid"></div>
<?php if($_GET['diy'] == 'yes' && check_diy_perm($topic)) { include template('common/header_diy'); } if(check_diy_perm($topic)) { include template('common/header_diynav'); } if(CURMODULE == 'topic' && $topic && empty($topic['useheader']) && check_diy_perm($topic)) { ?>
<?php echo $diynav;?>
<?php } if(empty($topic) || $topic['useheader']) { if($_G['setting']['mobile']['allowmobile'] && (!$_G['setting']['cacheindexlife'] && !$_G['setting']['cachethreadon'] || $_G['uid']) && ($_GET['diy'] != 'yes' || !$_GET['inajax']) && ($_G['mobile'] != '' && $_G['cookie']['mobile'] == '' && $_GET['mobile'] != 'no')) { ?>
<div class="xi1 bm bm_c">
    请选择 <a href="<?php echo $_G['siteurl'];?>forum.php?mobile=yes">进入手机版</a> <span class="xg1">|</span> <a href="<?php echo $_G['setting']['mobile']['nomobileurl'];?>">继续访问电脑版</a>
</div>
<?php } if($_G['setting']['shortcut'] && $_G['member']['credits'] >= $_G['setting']['shortcut']) { ?>
<div id="shortcut">
<span><a href="javascript:;" id="shortcutcloseid" title="关闭">关闭</a></span>
您经常访问 <?php echo $_G['setting']['bbname'];?>，试试添加到桌面，访问更方便！
<a href="javascript:;" id="shortcuttip">添加 <?php echo $_G['setting']['bbname'];?> 到桌面</a>

</div>
<script type="text/javascript">setTimeout(setShortcut, 2000);</script>
<?php } ?>			
<div class="index" id="index">	
<div class="headbg">
<div class="head">
<div class="mo" style=" left:-120px; padding-top:15px; position:absolute; ">
<?php if(!empty($_G['setting']['pluginhooks']['global_cpnav_extra2'])) echo $_G['setting']['pluginhooks']['global_cpnav_extra2'];?>
</div>
<h1 class="logo"><?php $mnid = getcurrentnav();?><?php if(!isset($_G['setting']['navlogos'][$mnid])) { ?><a href="<?php if($_G['setting']['domain']['app']['default']) { ?>http://<?php echo $_G['setting']['domain']['app']['default'];?>/<?php } else { ?>./<?php } ?>" title="<?php echo $_G['setting']['bbname'];?>"><?php echo $_G['style']['boardlogo'];?></a><?php } else { ?><?php echo $_G['setting']['navlogos'][$mnid];?><?php } ?></h1>
<div id="nav" class="nav" style="left:140px; width:605px; height:70px; overflow:hidden">
<ul><?php if(is_array($_G['setting']['navs'])) foreach($_G['setting']['navs'] as $nav) { if($nav['available'] && (!$nav['level'] || ($nav['level'] == 1 && $_G['uid']) || ($nav['level'] == 2 && $_G['adminid'] > 0) || ($nav['level'] == 3 && $_G['adminid'] == 1))) { ?><li <?php if($mnid == $nav['navid']) { ?>class="active" <?php } ?><?php echo $nav['nav'];?>></li><?php } } ?>
</ul>
</div><?php if($_G['setting']['search']) { $slist = array();?><?php if($_G['fid'] && $_G['forum']['status'] != 3 && $mod != 'group') { ?><?php
$slist[forumfid] = <<<EOF
<li><a href="javascript:;" rel="curforum" fid="{$_G['fid']}" >本版</a></li>
EOF;
?><?php } if($_G['setting']['portalstatus'] && $_G['setting']['search']['portal']['status'] && ($_G['group']['allowsearch'] & 1 || $_G['adminid'] == 1)) { ?><?php
$slist[portal] = <<<EOF
<li><a href="javascript:;" rel="article">文章</a></li>
EOF;
?><?php } if($_G['setting']['search']['forum']['status'] && ($_G['group']['allowsearch'] & 2 || $_G['adminid'] == 1)) { ?><?php
$slist[forum] = <<<EOF
<li><a href="javascript:;" rel="forum" class="curtype">帖子</a></li>
EOF;
?><?php } if(helper_access::check_module('blog') && $_G['setting']['search']['blog']['status'] && ($_G['group']['allowsearch'] & 4 || $_G['adminid'] == 1)) { ?><?php
$slist[blog] = <<<EOF
<li><a href="javascript:;" rel="blog">日志</a></li>
EOF;
?><?php } if(helper_access::check_module('album') && $_G['setting']['search']['album']['status'] && ($_G['group']['allowsearch'] & 8 || $_G['adminid'] == 1)) { ?><?php
$slist[album] = <<<EOF
<li><a href="javascript:;" rel="album">相册</a></li>
EOF;
?><?php } if($_G['setting']['groupstatus'] && $_G['setting']['search']['group']['status'] && ($_G['group']['allowsearch'] & 16 || $_G['adminid'] == 1)) { ?><?php
$slist[group] = <<<EOF
<li><a href="javascript:;" rel="group">{$_G['setting']['navs']['3']['navname']}</a></li>
EOF;
?><?php } ?><?php
$slist[user] = <<<EOF
<li><a href="javascript:;" rel="user">用户</a></li>
EOF;
?>
<?php } if($_G['setting']['search'] && $slist) { ?>


<form id="search" class="y search clearfix" style="margin-top: 22px;" method="<?php if($_G['fid'] && !empty($searchparams['url'])) { ?>get<?php } else { ?>post<?php } ?>" autocomplete="off" onsubmit="searchFocus($('scbar_txt'))" action="<?php if($_G['fid'] && !empty($searchparams['url'])) { ?><?php echo $searchparams['url'];?><?php } else { ?>search.php?searchsubmit=yes<?php } ?>" target="_blank">
<input type="hidden" name="mod" id="scbar_mod" value="search" />
<input type="hidden" name="formhash" value="<?php echo FORMHASH;?>" />
<input type="hidden" name="srchtype" value="title" />
<input type="hidden" name="srhfid" value="<?php echo $_G['fid'];?>" />
<input type="hidden" name="srhlocality" value="<?php echo $_G['basescript'];?>::<?php echo CURMODULE;?>" />
<?php if(!empty($searchparams['params'])) { if(is_array($searchparams['params'])) foreach($searchparams['params'] as $key => $value) { $srchotquery .= '&' . $key . '=' . rawurlencode($value);?><input type="hidden" name="<?php echo $key;?>" value="<?php echo $value;?>" />
<?php } ?>
<input type="hidden" name="source" value="discuz" />
<input type="hidden" name="fId" id="srchFId" value="<?php echo $_G['fid'];?>" />
<input type="hidden" name="q" id="cloudsearchquery" value="" />

<style>
#scbar { overflow: visible; position: relative; }
#sg{ background: #FFF; width:456px; border: 1px solid #B2C7DA; }
.scbar_narrow #sg { width: 316px; }
#sg li { padding:0 8px; line-height:30px; font-size:14px; }
#sg li span { color:#999; }
.sml { background:#FFF; cursor:default; }
.smo { background:#E5EDF2; cursor:default; }
            </style>
            <div style="display: none; position: absolute; top:37px; left:44px;" id="sg">
                <div id="st_box" cellpadding="2" cellspacing="0"></div>
            </div>
<?php } ?>
<input type="text" name="srchtxt" id="scbar_txt" class="keywords fl" value="请输入搜索内容" autocomplete="off" x-webkit-speech speech />
<button type="submit" name="searchsubmit" id="scbar_btn" sc="1" class="btn-search y" value="true"></button>
</form>

<script type="text/javascript">
initSearchmenu('scbar', '<?php echo $searchparams['url'];?>');
</script>
<?php } ?>	<div id="menberz">
<div id="top_usermenu" class="status_loginned">
<?php if($_G['uid']) { ?>
<div class="imguserset"></div>

<div class="top_popmenu" id="mn_myaccount_menu" style="position: absolute;top: 69px;z-index: 999;width: 108px; right:0px;">

 <ul class="listmenu">

  <li class="firstname"><a class="icfirst" href="home.php?mod=space&amp;uid=<?php echo $_G['uid'];?>" target="_blank" title="访问我的空间"><?php echo $_G['member']['username'];?></a></li>
 <li><a href="home.php?mod=space&amp;do=notice"><i class="ic02"></i>提醒
  <?php if($_G['member']['newprompt']) { ?><span style="color:#FF0000; display:inline">(<?php echo $_G['member']['newprompt'];?>)</span><?php } ?></a></li>
  			<?php if(check_diy_perm($topic)) { ?>
  <li><a href="javascript:openDiy();" ><i class="ic03"></i>DIY设置</a></li>
  <?php } ?>
  <li><a href="home.php?mod=space&amp;uid=<?php echo $_G['uid'];?>&amp;do=thread&amp;view=me&amp;from=space"><i class="ic04"></i>我的帖子</a></li>
  <li><a href="home.php?mod=space&amp;do=favorite&amp;view=me"><i class="ic05"></i>我的收藏</a></li>
  <li><a href="home.php?mod=spacecp"><i class="ic06"></i>个人设置</a></li>
     </ul>

<ul class="listmenu">
<?php if(($_G['group']['allowmanagearticle'] || $_G['group']['allowpostarticle'] || $_G['group']['allowdiy'] || getstatus($_G['member']['allowadmincp'], 4) || getstatus($_G['member']['allowadmincp'], 6) || getstatus($_G['member']['allowadmincp'], 2) || getstatus($_G['member']['allowadmincp'], 3))) { ?>
<li><a href="portal.php?mod=portalcp"><?php if($_G['setting']['portalstatus'] ) { ?><i class="ic07"></i>门户管理<?php } else { ?><i class="ic07"></i>模块管理<?php } ?></a></li>
<?php } if($_G['uid'] && $_G['group']['radminid'] > 1) { ?>
<li><a href="forum.php?mod=modcp&amp;fid=<?php echo $_G['fid'];?>" target="_blank"><i class="ic08"></i><?php echo $_G['setting']['navs']['2']['navname'];?>管理</a></li>
<?php } if($_G['uid'] && $_G['adminid'] == 1 && $_G['setting']['cloud_status']) { ?>
<li><a href="admin.php?frames=yes&amp;action=cloud&amp;operation=applist" target="_blank"><i class="ic09"></i>云平台</a></li>
<?php } if($_G['uid'] && getstatus($_G['member']['allowadmincp'], 1)) { ?>
<li><a href="admin.php" target="_blank"><i class="ic10"></i>管理中心</a></li>
<?php } ?>

<li><a href="member.php?mod=logging&amp;action=logout&amp;formhash=<?php echo FORMHASH;?>"><i class="ic11"></i>安全退出</a></li>
</ul>

</div>

<?php } elseif(!$_G['connectguest']) { ?>

<div class="imgloginuser"></div>

<div class="top_popmenu" id="mn_myaccount_menu" style="position: absolute;top: 69px;z-index: 10000;width: 108px; right:0px;">

 <ul class="listmenu">
 <li><a href="member.php?mod=logging&amp;action=login"><i class="ic01"></i>登录</a></li>
 <li><a href="member.php?mod=register"><i class="ic11"></i>注册</a></li>
</ul>
</div>
<?php } else { ?>
<div class="imguserset"></div>
<div class="top_popmenu" id="mn_myaccount_menu" style="position: absolute;top: 69px;z-index: 10000;width: 108px; right:0px;">
 <ul class="listmenu">
 	<li class="firstname"><a class="icfirst" href="home.php?mod=space&amp;uid=<?php echo $_G['uid'];?>" target="_blank" title="访问我的空间"><?php echo $_G['member']['username'];?></a></li>
<li><a href="member.php?mod=logging&amp;action=logout&amp;formhash=<?php echo FORMHASH;?>"><i class="ic11"></i>安全退出</a></li>
</ul>
</div>
<?php } ?>
</div>
</div>
<script>
jq(function() {
jq("#top_usermenu").hover(
  function () {
 jq(this).addClass("on");
  },
  function () {
 jq(this).removeClass("on");
  }
);
});
</script>
<style>.imgloginuser{ background:url("template/wanpin123_2014110701/style/images/loginuser.png") no-repeat 5px 20px; width:50px; height:70px;}
.imguserset{ background:url("template/wanpin123_2014110701/style/images/userset.png") no-repeat 5px 15px; width:50px; height:70px;}</style></div></div></div>
<?php } ?>
<div id="wp" class="wp">
<link rel="stylesheet" type="text/css" href="source/plugin/mobile/template/style.css" />
<?php if($_G['adminid'] == 1) { ?>
<script type="text/javascript">
function hiddentips() {
setcookie("mobiletips", "1");
display('admintips');
}
</script>
<?php } ?>
<div id="ct" class="wp cl ptw pbw">
<?php if($_G['cache']['mobileoem_data']['iframeUrl']) { ?>
<iframe frameborder="0" width="100%" scrolling="no" height="810" src="<?php echo $_G['cache']['mobileoem_data']['iframeUrl'];?>"></iframe>
<?php } else { if($_G['adminid'] == 1 && !$_G['cookie']['mobiletips']) { ?>
  <div class="wrap">
<div id="admintips" class="tips"><span class="y"><a href="javascript:hiddentips();" class="close">关闭</a></span>尊敬的站长，您可以在Discuz!程序根目录上传"mobile.png"图片(尺寸178x178)，以确保论坛客户端能成功获得到论坛的logo</div>
    <?php } ?>
<div class="content">
<ul class="platform">
<li><a href="http://www.discuz.net/mobile.php?platform=ios"><img src="./source/plugin/mobile/template/image/iphone.jpg" alt="iphone-适用于苹果手机"/></a></li>
<li><a href="http://www.discuz.net/mobile.php?platform=android"><img src="./source/plugin/mobile/template/image/android.jpg" alt="Android-适用于装有安卓系统的三星/HTC/小米等手机"/></a></li>
<li><a href="http://www.discuz.net/mobile.php?platform=windowsphone"><img src="./source/plugin/mobile/template/image/wp7.jpg" alt="WinodwsPhone-适用于装有微软WindowsPhone7 系统的手机"/></a></li>
</ul>
<div class="inner cl">
<div class="intro z">
<h2><img src="./source/plugin/mobile/template/image/title_intro.jpg" alt="掌上论坛优势"></h2>
<dl>
<dt>随时随地，快速访问</dt>
<dd>只要手机在手，您都可以快速、方便地看贴发帖，与论坛好友收发短消息。</dd>
<dt>极致优化，畅快"悦"读</dt>
<dd>独有的论坛界面和触屏设计，手机论坛也变得赏心悦目，操作自如。</dd>
<dt>即拍即发，分享生活</dt>
<dd>不管是风景图画，还是新闻现场，拍照发帖一气呵成，让您在论坛出尽风头。</dd>
</dl>
</div>
<div class="code y">
<dl>
<dt class="shoot">下载客户端后，拍摄二维码快速访问本站:</dt>
<dd class="code_img"><img src="data/cache/mobile_siteqrcode.png" alt="二维码"/></dd>
<dt>或者通过以下地址访问:</dt>
<dd class="url"><a href="<?php echo $_G['siteurl'];?>" target="_blank"><?php echo $_G['siteurl'];?></a></dd>
</dl>
</div>
</div>
</div>
<?php } ?>
</div>
</div>	</div>
<?php if(empty($topic) || ($topic['usefooter'])) { $focusid = getfocus_rand($_G[basescript]);?><?php if($focusid !== null) { $focus = $_G['cache']['focus']['data'][$focusid];?><?php $focusnum = count($_G['setting']['focus'][$_G[basescript]]);?><div class="focus" id="sitefocus">
<div class="bm">
<div class="bm_h cl">
<a href="javascript:;" onclick="setcookie('nofocus_<?php echo $_G['basescript'];?>', 1, <?php echo $_G['cache']['focus']['cookie'];?>*3600);$('sitefocus').style.display='none'" class="y" title="关闭">关闭</a>
<h2>
<?php if($_G['cache']['focus']['title']) { ?><?php echo $_G['cache']['focus']['title'];?><?php } else { ?>站长推荐<?php } ?>
<span id="focus_ctrl" class="fctrl"><img src="<?php echo IMGDIR;?>/pic_nv_prev.gif" alt="上一条" title="上一条" id="focusprev" class="cur1" onclick="showfocus('prev');" /> <em><span id="focuscur"></span>/<?php echo $focusnum;?></em> <img src="<?php echo IMGDIR;?>/pic_nv_next.gif" alt="下一条" title="下一条" id="focusnext" class="cur1" onclick="showfocus('next')" /></span>
</h2>
</div>
<div class="bm_c" id="focus_con">
</div>
</div>
</div><?php $focusi = 0;?><?php if(is_array($_G['setting']['focus'][$_G['basescript']])) foreach($_G['setting']['focus'][$_G['basescript']] as $id) { ?><div class="bm_c" style="display: none" id="focus_<?php echo $focusi;?>">
<dl class="xld cl bbda">
<dt><a href="<?php echo $_G['cache']['focus']['data'][$id]['url'];?>" class="xi2" target="_blank"><?php echo $_G['cache']['focus']['data'][$id]['subject'];?></a></dt>
<?php if($_G['cache']['focus']['data'][$id]['image']) { ?>
<dd class="m"><a href="<?php echo $_G['cache']['focus']['data'][$id]['url'];?>" target="_blank"><img src="<?php echo $_G['cache']['focus']['data'][$id]['image'];?>" alt="<?php echo $_G['cache']['focus']['data'][$id]['subject'];?>" /></a></dd>
<?php } ?>
<dd><?php echo $_G['cache']['focus']['data'][$id]['summary'];?></dd>
</dl>
<p class="ptn cl"><a href="<?php echo $_G['cache']['focus']['data'][$id]['url'];?>" class="xi2 y" target="_blank">查看 &raquo;</a></p>
</div><?php $focusi ++;?><?php } ?>
<script type="text/javascript">
var focusnum = <?php echo $focusnum;?>;
if(focusnum < 2) {
$('focus_ctrl').style.display = 'none';
}
if(!$('focuscur').innerHTML) {
var randomnum = parseInt(Math.round(Math.random() * focusnum));
$('focuscur').innerHTML = Math.max(1, randomnum);
}
showfocus();
var focusautoshow = window.setInterval('showfocus(\'next\', 1);', 5000);
</script>
<?php } if($_G['uid'] && $_G['member']['allowadmincp'] == 1 && $_G['setting']['showpatchnotice'] == 1) { ?>
<div class="focus patch" id="patch_notice"></div>
<?php } ?><?php echo adshow("footerbanner/wp a_f/1");?><?php echo adshow("footerbanner/wp a_f/2");?><?php echo adshow("footerbanner/wp a_f/3");?><?php echo adshow("float/a_fl/1");?><?php echo adshow("float/a_fr/2");?><?php echo adshow("couplebanner/a_fl a_cb/1");?><?php echo adshow("couplebanner/a_fr a_cb/2");?><?php echo adshow("cornerbanner/a_cn");?><?php if(!empty($_G['setting']['pluginhooks']['global_footer'])) echo $_G['setting']['pluginhooks']['global_footer'];?>

<div class="foot_linksbg">
<div class="foot_links">
<div class="links">
<h3>LINK</h3>
<div class="links_con">
<a href="Http://www.aspku.com" target="blank" target="_blank" title="邯郸网站建设">邯郸网站建设</a>&nbsp;&nbsp;|&nbsp;&nbsp;
<a href="Http://www.aspku.com" target="blank" target="_blank" title="包头网站建设">包头网站建设</a>&nbsp;&nbsp;|&nbsp;&nbsp;
<a href="Http://www.aspku.com" target="blank" target="_blank" title="南京网站建设">南京网站建设</a>&nbsp;&nbsp;|&nbsp;&nbsp;
<a href="Http://www.aspku.com" target="blank" target="_blank" title="长沙网站建设">长沙网站建设</a>&nbsp;&nbsp;|&nbsp;&nbsp;
<a href="Http://www.aspku.com" target="blank" target="_blank" title="邯郸网站建设">邯郸网站建设</a>&nbsp;&nbsp;|&nbsp;&nbsp;
<a href="Http://www.aspku.com" target="blank" target="_blank" title="长春网站建设">长春网站建设</a>&nbsp;&nbsp;|&nbsp;&nbsp;
<a href="Http://www.aspku.com" target="blank" target="_blank" title="深圳网站建设">深圳网站建设</a>&nbsp;&nbsp;|&nbsp;&nbsp;
<a href="Http://www.aspku.com" target="blank" target="_blank" title="成都网站建设">成都网站建设</a>&nbsp;&nbsp;|&nbsp;&nbsp;
<a href="Http://www.aspku.com" target="blank" target="_blank" title="上海网站设计公司">上海网站设计公司</a>&nbsp;&nbsp;|&nbsp;&nbsp;
<a href="Http://www.aspku.com" target="blank" target="_blank" title="网站建设">网站建设</a>&nbsp;&nbsp;|&nbsp;&nbsp;
<a href="Http://www.aspku.com" target="blank" target="_blank" title="深圳网站建设">深圳网站建设</a>&nbsp;&nbsp;|&nbsp;&nbsp;
<a href="Http://www.aspku.com" target="blank" target="_blank" title="北京网站建设">北京网站建设</a>&nbsp;&nbsp;|&nbsp;&nbsp;
<a href="Http://www.aspku.com" target="blank" target="_blank" title="微博推广">微博推广</a>
</div>
</div>
<div class="keyword">
<h3>KEYWORD</h3>
<div class="links_con">
<a href="Http://www.aspku.com" title="">discuz模板</a>&nbsp;&nbsp;|&nbsp;&nbsp;
<a href="Http://www.aspku.com" target="blank" title="">discuz插件</a>&nbsp;&nbsp;|&nbsp;&nbsp;
<a href="Http://www.aspku.com" target="blank" title="">discuz网站优化</a>&nbsp;&nbsp;|&nbsp;&nbsp;
<a href="Http://www.aspku.com" target="blank" title="">网站经营策划</a>&nbsp;&nbsp;|&nbsp;&nbsp;
<a href="Http://www.aspku.com" target="blank" title="">网站教程</a>&nbsp;&nbsp;|&nbsp;&nbsp;
<a href="Http://www.aspku.com" target="blank" title="">网页设计</a>
</div>
</div>
<div class="address">
<p><a href="Http://www.aspku.com" target="blank" title="">小鱼设计团队</a></p>
<p>办公室：广州市天河区广州大道中C356</p>
            <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;广州市天河区石牌桥任丰大夏A栋30楼</p>
</div>
<div class="link_btn">
<ul >
<li><a href="http://wpa.qq.com/msgrd?v=3&amp;uin=<?php echo $_G['setting']['site_qq'];?>&amp;site=qq&amp;menu=yes" target="_blank"title="" class="link_qq"></a></li>
<li><a href="Http://www.aspku.com" target="blank" title="" class="link_sina"></a></li>
<li class="link_weixin_li"><a href="javasctipt:void(0);" title="" class="link_weixin"></a>
<div class="link_weixin_ewm">
<img src="template/wanpin123_2014110701/style/images/ewm.jpg" width="129" height="129" alt="">
</div>
</li>
</ul>
</div>
</div>
</div>
<div class="footbg">
<div class="foot">
<p class="z">Powered by <strong><a href="http://www.aspku.net" target="_blank">Discuz!</a></strong> <em><?php echo $_G['setting']['version'];?></em><?php if(!empty($_G['setting']['boardlicensed'])) { ?> <a href="http://license.comsenz.com/?pid=1&amp;host=<?php echo $_SERVER['HTTP_HOST'];?>" target="_blank">Licensed</a><?php } ?>&nbsp--&copy; 2001-2013 <a href="http://www.mobanpai.com" target="_blank"><a href="<?php echo $_G['setting']['siteurl'];?>" target="_blank"><?php echo $_G['setting']['sitename'];?></a>,all rights reserved</a> 技术支持：<a href="Http://www.aspku.com" target="_blank">微乐分享</a></p>
<p class="y"><?php if(is_array($_G['setting']['footernavs'])) foreach($_G['setting']['footernavs'] as $nav) { if($nav['available'] && ($nav['type'] && (!$nav['level'] || ($nav['level'] == 1 && $_G['uid']) || ($nav['level'] == 2 && $_G['adminid'] > 0) || ($nav['level'] == 3 && $_G['adminid'] == 1)) ||
!$nav['type'] && ($nav['id'] == 'stat' && $_G['group']['allowstatdata'] || $nav['id'] == 'report' && $_G['uid'] || $nav['id'] == 'archiver' || $nav['id'] == 'mobile' || $nav['id'] == 'darkroom'))) { ?><?php echo $nav['code'];?>&nbsp;&nbsp;|&nbsp;&nbsp;<?php } } ?>
<strong><a href="<?php echo $_G['setting']['siteurl'];?>" target="_blank"><?php echo $_G['setting']['sitename'];?></a></strong>
<?php if($_G['setting']['icp']) { ?>( <a href="http://www.miitbeian.gov.cn/" target="_blank"><?php echo $_G['setting']['icp'];?></a> )<?php } ?>
<?php if(!empty($_G['setting']['pluginhooks']['global_footerlink'])) echo $_G['setting']['pluginhooks']['global_footerlink'];?>
<?php if($_G['setting']['statcode']) { ?><?php echo $_G['setting']['statcode'];?><?php } ?>

</p>
</div>
</div>
</div>
<div class="qqico">
 <?php if($_G['setting']['site_qq']) { ?><a href="http://wpa.qq.com/msgrd?v=3&amp;uin=<?php echo $_G['setting']['site_qq'];?>&amp;site=qq&amp;menu=yes" title="点击立即咨询" target="_blank"><img src="template/wanpin123_2014110701/style/images/qqico.png" width="67" HEIGHT="65" class="png" ALT="点击立刻咨询"></a><?php } ?>
</div><?php updatesession();?><?php if($_G['uid'] && $_G['group']['allowinvisible']) { ?>
<script type="text/javascript">
var invisiblestatus = '<?php if($_G['session']['invisible']) { ?>隐身<?php } else { ?>在线<?php } ?>';
var loginstatusobj = $('loginstatusid');
if(loginstatusobj != undefined && loginstatusobj != null) loginstatusobj.innerHTML = invisiblestatus;
</script>
<?php } ?>
</div></div>
<?php } if(!$_G['setting']['bbclosed'] && !$_G['member']['freeze'] && !$_G['member']['groupexpiry']) { if($_G['uid'] && !isset($_G['cookie']['checkpm'])) { ?>
<script src="home.php?mod=spacecp&ac=pm&op=checknewpm&rand=<?php echo $_G['timestamp'];?>" type="text/javascript"></script>
<?php } if($_G['uid'] && helper_access::check_module('follow') && !isset($_G['cookie']['checkfollow'])) { ?>
<script src="home.php?mod=spacecp&ac=follow&op=checkfeed&rand=<?php echo $_G['timestamp'];?>" type="text/javascript"></script>
<?php } if(!isset($_G['cookie']['sendmail'])) { ?>
<script src="home.php?mod=misc&ac=sendmail&rand=<?php echo $_G['timestamp'];?>" type="text/javascript"></script>
<?php } if($_G['uid'] && $_G['member']['allowadmincp'] == 1 && !isset($_G['cookie']['checkpatch'])) { ?>
<script src="misc.php?mod=patch&action=checkpatch&rand=<?php echo $_G['timestamp'];?>" type="text/javascript"></script>
<?php } } if($_GET['diy'] == 'yes') { if(check_diy_perm($topic) && (empty($do) || $do != 'index')) { ?>
<script src="<?php echo $_G['setting']['jspath'];?>common_diy.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<script src="<?php echo $_G['setting']['jspath'];?>portal_diy<?php if(!check_diy_perm($topic, 'layout')) { ?>_data<?php } ?>.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php } if($space['self'] && CURMODULE == 'space' && $do == 'index') { ?>
<script src="<?php echo $_G['setting']['jspath'];?>common_diy.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<script src="<?php echo $_G['setting']['jspath'];?>space_diy.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<?php } } if($_G['uid'] && $_G['member']['allowadmincp'] == 1 && $_G['setting']['showpatchnotice'] == 1) { ?>
<script type="text/javascript">patchNotice();</script>
<?php } if($_G['uid'] && $_G['member']['allowadmincp'] == 1 && empty($_G['cookie']['pluginnotice'])) { ?>
<div class="focus plugin" id="plugin_notice"></div>
<script type="text/javascript">pluginNotice();</script>
<?php } if(!$_G['setting']['bbclosed'] && !$_G['member']['freeze'] && !$_G['member']['groupexpiry'] && $_G['setting']['disableipnotice'] != 1 && $_G['uid'] && !empty($_G['cookie']['lip'])) { ?>
<div class="focus plugin" id="ip_notice"></div>
<script type="text/javascript">ipNotice();</script>
<?php } if($_G['member']['newprompt'] && (empty($_G['cookie']['promptstate_'.$_G['uid']]) || $_G['cookie']['promptstate_'.$_G['uid']] != $_G['member']['newprompt']) && $_GET['do'] != 'notice') { ?>
<script type="text/javascript">noticeTitle();</script>
<?php } if(($_G['member']['newpm'] || $_G['member']['newprompt']) && empty($_G['cookie']['ignore_notice'])) { ?>
<script src="<?php echo $_G['setting']['jspath'];?>html5notification.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<script type="text/javascript">
var h5n = new Html5notification();
if(h5n.issupport()) {
<?php if($_G['member']['newpm'] && $_GET['do'] != 'pm') { ?>
h5n.shownotification('pm', '<?php echo $_G['siteurl'];?>home.php?mod=space&do=pm', '<?php echo avatar($_G[uid],small,true);?>', '新的短消息', '有新的短消息，快去看看吧');
<?php } if($_G['member']['newprompt'] && $_GET['do'] != 'notice') { if(is_array($_G['member']['category_num'])) foreach($_G['member']['category_num'] as $key => $val) { $noticetitle = lang('template', 'notice_'.$key);?>h5n.shownotification('notice_<?php echo $key;?>', '<?php echo $_G['siteurl'];?>home.php?mod=space&do=notice&view=<?php echo $key;?>', '<?php echo avatar($_G[uid],small,true);?>', '<?php echo $noticetitle;?> (<?php echo $val;?>)', '有新的提醒，快去看看吧');
<?php } } ?>
}
</script>
<?php } userappprompt();?><?php if($_G['basescript'] != 'userapp') { ?>
<div id="scrolltop">
<?php if($_G['fid'] && $_G['mod'] == 'viewthread') { ?>
<span><a href="forum.php?mod=post&amp;action=reply&amp;fid=<?php echo $_G['fid'];?>&amp;tid=<?php echo $_G['tid'];?>&amp;extra=<?php echo $_GET['extra'];?>&amp;page=<?php echo $page;?><?php if($_GET['from']) { ?>&amp;from=<?php echo $_GET['from'];?><?php } ?>" onclick="showWindow('reply', this.href)" class="replyfast" title="快速回复"><b>快速回复</b></a></span>
<?php } ?>
<span hidefocus="true"><a title="返回顶部" onclick="window.scrollTo('0','0')" class="scrolltopa" ><b>返回顶部</b></a></span>
<?php if($_G['fid']) { ?>
<span>
<?php if($_G['mod'] == 'viewthread') { ?>
<a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $_G['fid'];?>" hidefocus="true" class="returnlist" title="返回列表"><b>返回列表</b></a>
<?php } else { ?>
<a href="forum.php" hidefocus="true" class="returnboard" title="返回版块"><b>返回版块</b></a>
<?php } ?>
</span>
<?php } ?>
</div>
<script type="text/javascript">_attachEvent(window, 'scroll', function () { showTopLink(); });checkBlind();</script>
<?php } if(isset($_G['makehtml'])) { ?>
<script src="<?php echo $_G['setting']['jspath'];?>html2dynamic.js?<?php echo VERHASH;?>" type="text/javascript"></script>
<script type="text/javascript">
var html_lostmodify = <?php echo TIMESTAMP;?>;
htmlGetUserStatus();
<?php if(isset($_G['htmlcheckupdate'])) { ?>
htmlCheckUpdate();
<?php } ?>
</script>
<?php } output();?></body>
</html>

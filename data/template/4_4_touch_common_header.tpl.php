<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); 
0
|| checktplrefresh('./template/v2_mbl20121009/touch/common/header.htm', './template/v2_mbl20121009/touch/common/colorplus.htm', 1458782926, '4', './data/template/4_4_touch_common_header.tpl.php', './template/v2_mbl20121009', 'touch/common/header')
;?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Cache-control" content="<?php if($_G['setting']['mobile']['mobilecachetime'] > 0) { ?><?php echo $_G['setting']['mobile']['mobilecachetime'];?><?php } else { ?>no-cache<?php } ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
<meta name="format-detection" content="telephone=no" />
<meta name="keywords" content="<?php if(!empty($metakeywords)) { echo dhtmlspecialchars($metakeywords); } ?>" />
<meta name="description" content="<?php if(!empty($metadescription)) { echo dhtmlspecialchars($metadescription); ?> <?php } ?>,<?php echo $_G['setting']['bbname'];?>" />
<?php if($_G['basescript'] == 'portal') { ?><base href="<?php echo $_G['siteurl'];?>" /><?php } ?>
<title><?php if(!empty($navtitle)) { ?><?php echo $navtitle;?> - <?php } if(empty($nobbname)) { ?> <?php echo $_G['setting']['bbname'];?> - <?php } ?> 手机版 - Powered by Discuz!</title><?php require_once('source/plugin/v2_wap_01/wapplus.php');?><?php require_once('template/v2_mbl20121009/mobile_plus/lang.php');?><link rel="stylesheet" href="template/v2_mbl20121009/mobile_plus/css/style.css" type="text/css" media="all">
<script src="template/v2_mbl20121009/mobile_plus/js/jquery-1.8.3.min.js?<?php echo VERHASH;?>" type="text/javascript"></script>

<script type="text/javascript">var STYLEID = '<?php echo STYLEID;?>', STATICURL = '<?php echo STATICURL;?>', IMGDIR = '<?php echo IMGDIR;?>', VERHASH = '<?php echo VERHASH;?>', charset = '<?php echo CHARSET;?>', discuz_uid = '<?php echo $_G['uid'];?>', cookiepre = '<?php echo $_G['config']['cookie']['cookiepre'];?>', cookiedomain = '<?php echo $_G['config']['cookie']['cookiedomain'];?>', cookiepath = '<?php echo $_G['config']['cookie']['cookiepath'];?>', showusercard = '<?php echo $_G['setting']['showusercard'];?>', attackevasive = '<?php echo $_G['config']['security']['attackevasive'];?>', disallowfloat = '<?php echo $_G['setting']['disallowfloat'];?>', creditnotice = '<?php if($_G['setting']['creditnotice']) { ?><?php echo $_G['setting']['creditnames'];?><?php } ?>', defaultstyle = '<?php echo $_G['style']['defaultextstyle'];?>', REPORTURL = '<?php echo $_G['currenturl_encode'];?>', SITEURL = '<?php echo $_G['siteurl'];?>', JSPATH = '<?php echo $_G['setting']['jspath'];?>';</script>
<script src="<?php echo STATICURL;?>js/mobile/common.js?<?php echo VERHASH;?>" type="text/javascript" charset="<?php echo CHARSET;?>"></script>
<link rel="apple-touch-icon-precomposed" href="<?php echo $_G['siteurl'];?>/template/v2_mbl20121009/mobile_plus/img/apple-touch-icon-57x57.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo $_G['siteurl'];?>/template/v2_mbl20121009/mobile_plus/img/apple-touch-icon-114x114.png">
</head>

<body class="6RYXRbrzPr" onLoad="">
<?php echo $adheader;?>
<div id="wp">
<div id="content" class="MODbS458LS">
<header>
<a href="./forum.php"><img src="template/v2_mbl20121009/mobile_plus/img/logo.png" height="45" class="FhOHeSGAiE" /></a>
<div id="side_pr" class="zq0WhDKcXb">
<a href="javascript:;" id="side_open"><img src="template/v2_mbl20121009/mobile_plus/img/h_t.png" height="20" /></a>
<a href="<?php if(helper_access::check_module('portal') && $_G['setting']['search']['portal']['status'] && ($_G['group']['allowsearch'] & 1 || $_G['adminid'] == 1)) { ?>search.php<?php if($wapsearchs == 1) { ?>?mod=forum<?php } else { ?>?mod=portal<?php } } else { ?>search.php?mod=forum<?php } ?>" class="4Cm4RjOrOP"><img src="template/v2_mbl20121009/mobile_plus/img/h_s.png" height="20" /></a>
<?php if($_G['uid'] || $_G['connectguest']) { ?>
<span class="oCmmG0zurf" href="#ues_list"></span>
<?php } else { ?>    
<a href="member.php?mod=logging&amp;action=login" class="4Cm4RjOrOP"><img src="template/v2_mbl20121009/mobile_plus/img/h_u.png" height="20" /></a>
<?php } if($_G['member']['newpm'] || $_G['member']['newprompt'] || $_G['connectguest'] ) { ?><em></em><?php } ?>
</div>
<?php if($_G['uid']) { ?>
<ul id="ues_list" class="q4ASi3iLgd" display="true" style="display:none;"><em></em>
    <li class="OdWju3Pvm4"><a href="home.php?mod=space&amp;do=pm"<?php if($_G['member']['newpm']) { ?> class="D2lReDdK6D"<?php } ?>><?php if($_G['member']['newpm']) { ?>新短消息<?php } else { ?>消息<?php } ?></a></li>
    <li><a href="home.php?mod=space&amp;do=notice"<?php if($_G['member']['newprompt']) { ?> class="D2lReDdK6D"<?php } ?>><?php if($_G['member']['newprompt']) { ?>提醒(<?php echo $_G['member']['newprompt'];?>)<?php } else { ?>提醒<?php } ?></a></li>
    <li><a href="home.php?mod=space&amp;do=friend"><?php echo m_lang('mfriend'); ?></a></li>
<?php if(helper_access::check_module('feed')) { ?><li><a href="home.php"><?php echo m_lang('mfeed'); ?></a></li><?php } if(helper_access::check_module('blog')) { ?><li><a href="home.php?mod=space&amp;do=blog&amp;view=me"><?php echo m_lang('mblog'); ?></a></li><?php } if(helper_access::check_module('doing')) { ?><li><a href="home.php?mod=space&amp;do=doing"><?php echo m_lang('mdoing'); ?></a></li><?php } if(helper_access::check_module('album')) { ?><li><a href="home.php?mod=space&amp;do=album&amp;view=all"><?php echo m_lang('photo'); ?></a></li><?php } ?>
    <li><a href="home.php?mod=space&amp;uid=<?php echo $_G['uid'];?>&amp;do=thread&amp;view=me">我的帖子</a></li>
    <li><a href="home.php?mod=space&amp;uid=<?php echo $_G['uid'];?>&amp;do=favorite&amp;view=me&amp;type=forum"><?php echo m_lang('favorite'); ?></a></li>    
    <li><a href="home.php?mod=space&amp;uid=<?php echo $_G['uid'];?>&amp;do=profile"><?php echo m_lang('profile'); ?></a></li>
    <li style=" border-bottom:none;"><a href="member.php?mod=logging&amp;action=logout&amp;formhash=<?php echo FORMHASH;?>">退出</a></li>
</ul>
<?php } elseif($_G['connectguest']) { ?>
<ul id="ues_list" class="q4ASi3iLgd" display="true" style="display:none;"><em></em>
<?php if($_G['connectguest']) { ?>
<li class="OdWju3Pvm4"><a href="member.php?mod=connect&amp;mobile=no" target="_blank" title="体验本站更多功能">完善帐号信息</a></li>
<li><a href="member.php?mod=connect&amp;ac=bind&amp;mobile=no" target="_blank" title="使用QQ帐号快速登录本站">绑定已有帐号</a></li>
<?php } ?>
    <li style=" border-bottom:none;"><a href="member.php?mod=logging&amp;action=logout&amp;formhash=<?php echo FORMHASH;?>">退出</a></li>
</ul>
<?php } ?>
</header><?php
$color_sl = <<<EOF

<style type="text/css">

EOF;
 if($wapcolor == 1) { 
$color_sl .= <<<EOF

header { background: #549FD8 url(template/v2_mbl20121009/mobile_plus/img/hd1.png) repeat-x 0 0; }
.nv_i { background:url(template/v2_mbl20121009/mobile_plus/img/nv_i.png) no-repeat 50% 0,url(template/v2_mbl20121009/mobile_plus/img/nv_i1.png) repeat-x 0 0; background-color:#549FD8; border-top:1px solid #3072c2; }
.l, .mmt a.a, .nmt .subfrm, .nmt .thtys, .nmt .cato, .nmt .cats, .catlist a.a span, .thtyss a.a, .pg strong, .hot_f a span, .hot_p span { background-color: #549FD8 !important;}
.btn_login .pn, .btn_register .pn, .btn_pn_grey,.btn_pn_blue, .button, .button2, a.f_pst { border: 1px solid #1D80CF; background: #549FD8; background: -webkit-gradient(linear, left top, left bottom, from(#6FBCF8), to(#549FD8)); }
.tsm li.a { background:#549FD8; }

EOF;
 } elseif($wapcolor == 2) { 
$color_sl .= <<<EOF

header { background: #F48639 url(template/v2_mbl20121009/mobile_plus/img/hd2.png) repeat-x 0 0; }
.nv_i { background:url(template/v2_mbl20121009/mobile_plus/img/nv_i.png) no-repeat 50% 0,url(template/v2_mbl20121009/mobile_plus/img/nv_i2.png) repeat-x 0 0; background-color:#F48639; border-top:1px solid #DD6400; }
.l, .mmt a.a, .nmt .subfrm, .nmt .thtys, .nmt .cato, .nmt .cats, .catlist a.a span, .thtyss a.a, .pg strong, .hot_f a span, .hot_p span { background-color: #F48639 !important;}
.btn_login .pn, .btn_register .pn, .btn_pn_grey,.btn_pn_blue, .button, .button2, a.f_pst { border: 1px solid #F26F17; background: #F48639; background: -webkit-gradient(linear, left top, left bottom, from(#F8AA76), to(#F48639)); }
.tsm li.a { background:#F48639; }

EOF;
 } elseif($wapcolor == 3) { 
$color_sl .= <<<EOF

header { background: #222 url(template/v2_mbl20121009/mobile_plus/img/hd3.png) repeat-x 0 0; }
.nv_i { background:url(template/v2_mbl20121009/mobile_plus/img/nv_i.png) no-repeat 50% 0,url(template/v2_mbl20121009/mobile_plus/img/nv_i3.png) repeat-x 0 0; background-color:#222; border-top:1px solid #000; }
.l, .mmt a.a, .nmt .subfrm, .nmt .thtys, .nmt .cato, .nmt .cats, .catlist a.a span, .thtyss a.a, .pg strong, .hot_f a span, .hot_p span { background-color: #444 !important;}
.btn_login .pn, .btn_register .pn, .btn_pn_grey,.btn_pn_blue, .button, .button2, a.f_pst { border: 1px solid #222; background: #444; background: -webkit-gradient(linear, left top, left bottom, from(#777), to(#444)); }
.tsm li.a { background:#222; }

EOF;
 } elseif($wapcolor == 4) { 
$color_sl .= <<<EOF

header { background: #85AF00 url(template/v2_mbl20121009/mobile_plus/img/hd4.png) repeat-x 0 0; }
.nv_i { background:url(template/v2_mbl20121009/mobile_plus/img/nv_i.png) no-repeat 50% 0,url(template/v2_mbl20121009/mobile_plus/img/nv_i4.png) repeat-x 0 0; background-color:#85AF00; border-top:1px solid #7EA800; }
.l, .mmt a.a, .nmt .subfrm, .nmt .thtys, .nmt .cato, .nmt .cats, .catlist a.a span, .thtyss a.a, .pg strong, .hot_f a span, .hot_p span { background-color: #85AF00 !important;}
.btn_login .pn, .btn_register .pn, .btn_pn_grey,.btn_pn_blue, .button, .button2, a.f_pst { border: 1px solid #698C00; background: #7EA800; background: -webkit-gradient(linear, left top, left bottom, from(#A3D900), to(#7EA800)); }
.tsm li.a { background:#85AF00; }

EOF;
 } 
$color_sl .= <<<EOF

</style>

EOF;
?><?php
$color_lg = <<<EOF

<style type="text/css"> 
header { display:none; }

EOF;
 if($wapcolor == 1) { 
$color_lg .= <<<EOF

.content { background:#549FD8; } 
.bm_c { padding:18px 0px; background: url(template/v2_mbl20121009/mobile_plus/img/login_bg1.jpg) repeat-x 50% 0px; background-size: auto 154px; overflow:hidden; }

EOF;
 } elseif($wapcolor == 2) { 
$color_lg .= <<<EOF

.content { background:#F48639; } 
.bm_c { padding:18px 0px; background: url(template/v2_mbl20121009/mobile_plus/img/login_bg2.jpg) repeat-x 50% 0px; background-size: auto 154px; overflow:hidden; }

EOF;
 } elseif($wapcolor == 3) { 
$color_lg .= <<<EOF

.content { background:#344C58; } 
.bm_c { padding:18px 0px; background: url(template/v2_mbl20121009/mobile_plus/img/login_bg3.jpg) repeat-x 50% 0px; background-size: auto 154px; overflow:hidden; }

EOF;
 } elseif($wapcolor == 4) { 
$color_lg .= <<<EOF

.content { background:#A4D853; } 
.bm_c { padding:18px 0px; background: url(template/v2_mbl20121009/mobile_plus/img/login_bg4.jpg) repeat-x 50% 0px; background-size: auto 154px; overflow:hidden; }

EOF;
 } 
$color_lg .= <<<EOF
 
</style>

EOF;
?><?php echo $color_sl;?>
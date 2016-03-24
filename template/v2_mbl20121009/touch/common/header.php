<?php exit;?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Cache-control" content="{if $_G['setting']['mobile'][mobilecachetime] > 0}{$_G['setting']['mobile'][mobilecachetime]}{else}no-cache{/if}" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
<meta name="format-detection" content="telephone=no" />
<meta name="keywords" content="{if !empty($metakeywords)}{echo dhtmlspecialchars($metakeywords)}{/if}" />
<meta name="description" content="{if !empty($metadescription)}{echo dhtmlspecialchars($metadescription)} {/if},$_G['setting']['bbname']" />
<!--{if $_G['basescript'] == 'portal'}--><base href="{$_G['siteurl']}" /><!--{/if}-->
<title><!--{if !empty($navtitle)}-->$navtitle - <!--{/if}--><!--{if empty($nobbname)}--> $_G['setting']['bbname'] - <!--{/if}--> {lang waptitle} - Powered by Discuz!</title>
<!--{eval require_once('source/plugin/v2_wap_01/wapplus.php');}-->
<!--{eval require_once('template/v2_mbl20121009/mobile_plus/lang.php');}-->
<link rel="stylesheet" href="template/v2_mbl20121009/mobile_plus/css/style.css" type="text/css" media="all">
<script src="template/v2_mbl20121009/mobile_plus/js/jquery-1.8.3.min.js?{VERHASH}"></script>

<script type="text/javascript">var STYLEID = '{STYLEID}', STATICURL = '{STATICURL}', IMGDIR = '{IMGDIR}', VERHASH = '{VERHASH}', charset = '{CHARSET}', discuz_uid = '$_G[uid]', cookiepre = '{$_G[config][cookie][cookiepre]}', cookiedomain = '{$_G[config][cookie][cookiedomain]}', cookiepath = '{$_G[config][cookie][cookiepath]}', showusercard = '{$_G[setting][showusercard]}', attackevasive = '{$_G[config][security][attackevasive]}', disallowfloat = '{$_G[setting][disallowfloat]}', creditnotice = '<!--{if $_G['setting']['creditnotice']}-->$_G['setting']['creditnames']<!--{/if}-->', defaultstyle = '$_G[style][defaultextstyle]', REPORTURL = '$_G[currenturl_encode]', SITEURL = '$_G[siteurl]', JSPATH = '$_G[setting][jspath]';</script>
<script src="{STATICURL}js/mobile/common.js?{VERHASH}" charset="{CHARSET}"></script>
<link rel="apple-touch-icon-precomposed" href="{$_G['siteurl']}/template/v2_mbl20121009/mobile_plus/img/apple-touch-icon-57x57.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="{$_G['siteurl']}/template/v2_mbl20121009/mobile_plus/img/apple-touch-icon-114x114.png">
</head>

<body class="6RYXRbrzPr" onLoad="">
<!--{$adheader}-->
<div id="wp">
<div id="content" class="MODbS458LS">
<header>
<a href="./forum.php"><img src="template/v2_mbl20121009/mobile_plus/img/logo.png" height="45" class="FhOHeSGAiE" /></a>
<div id="side_pr" class="zq0WhDKcXb">
<a href="javascript:;" id="side_open"><img src="template/v2_mbl20121009/mobile_plus/img/h_t.png" height="20" /></a>
<a href="{if helper_access::check_module('portal') && $_G['setting']['search']['portal']['status'] && ($_G['group']['allowsearch'] & 1 || $_G['adminid'] == 1)}search.php{if $wapsearchs == 1}?mod=forum{else}?mod=portal{/if}{else}search.php?mod=forum{/if}" class="4Cm4RjOrOP"><img src="template/v2_mbl20121009/mobile_plus/img/h_s.png" height="20" /></a>
<!--{if $_G['uid'] || $_G['connectguest']}-->
<span class="oCmmG0zurf" href="#ues_list"></span>
<!--{else}-->    
<a href="member.php?mod=logging&action=login" class="4Cm4RjOrOP"><img src="template/v2_mbl20121009/mobile_plus/img/h_u.png" height="20" /></a>
<!--{/if}-->
<!--{if $_G[member][newpm] || $_G[member][newprompt] || $_G['connectguest'] }--><em></em><!--{/if}-->
</div>
<!--{if $_G['uid']}-->
<ul id="ues_list" class="q4ASi3iLgd" display="true" style="display:none;"><em></em>
    <li class="OdWju3Pvm4"><a href="home.php?mod=space&do=pm"{if $_G[member][newpm]} class="D2lReDdK6D"{/if}><!--{if $_G[member][newpm]}-->{lang new_pm}<!--{else}-->{lang pm_center}<!--{/if}--></a></li>
    <li><a href="home.php?mod=space&do=notice"{if $_G[member][newprompt]} class="D2lReDdK6D"{/if}><!--{if $_G[member][newprompt]}-->{lang remind}($_G[member][newprompt])<!--{else}-->{lang remind}<!--{/if}--></a></li>
    <li><a href="home.php?mod=space&do=friend">{echo m_lang('mfriend')}</a></li>
<!--{if helper_access::check_module('feed')}--><li><a href="home.php">{echo m_lang('mfeed')}</a></li><!--{/if}-->
<!--{if helper_access::check_module('blog')}--><li><a href="home.php?mod=space&do=blog&view=me">{echo m_lang('mblog')}</a></li><!--{/if}-->
<!--{if helper_access::check_module('doing')}--><li><a href="home.php?mod=space&do=doing">{echo m_lang('mdoing')}</a></li><!--{/if}-->
<!--{if helper_access::check_module('album')}--><li><a href="home.php?mod=space&do=album&view=all">{echo m_lang('photo')}</a></li><!--{/if}-->
    <li><a href="home.php?mod=space&uid={$_G[uid]}&do=thread&view=me">{lang my_posts}</a></li>
    <li><a href="home.php?mod=space&uid={$_G[uid]}&do=favorite&view=me&type=forum">{echo m_lang('favorite')}</a></li>    
    <li><a href="home.php?mod=space&uid={$_G['uid']}&do=profile">{echo m_lang('profile')}</a></li>
    <li style=" border-bottom:none;"><a href="member.php?mod=logging&action=logout&formhash={FORMHASH}">{lang logout}</a></li>
</ul>
<!--{elseif $_G['connectguest']}-->
<ul id="ues_list" class="q4ASi3iLgd" display="true" style="display:none;"><em></em>
	<!--{if $_G['connectguest']}-->
<li class="OdWju3Pvm4"><a href="member.php?mod=connect&mobile=no" target="_blank" title="{lang qqconnect:connect_member_register_button_tip}">{lang qqconnect:connect_register_profile}</a></li>
<li><a href="member.php?mod=connect&ac=bind&mobile=no" target="_blank" title="{lang qqconnect:connect_member_loginbind_button_tip}">{lang qqconnect:connect_register_bind}</a></li>
	<!--{/if}-->
    <li style=" border-bottom:none;"><a href="member.php?mod=logging&action=logout&formhash={FORMHASH}">{lang logout}</a></li>
</ul>
<!--{/if}-->
</header>
<!--{subtemplate common/colorplus}-->
<!--{$color_sl}-->
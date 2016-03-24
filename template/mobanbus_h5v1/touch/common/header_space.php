<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Cache-control" content="{if $_G['setting']['mobile'][mobilecachetime] > 0}{$_G['setting']['mobile'][mobilecachetime]}{else}no-cache{/if}" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
<meta name="format-detection" content="telephone=no" />
<meta name="keywords" content="{if !empty($metakeywords)}{echo dhtmlspecialchars($metakeywords)}{/if}" />
<meta name="description" content="{if !empty($metadescription)}{echo dhtmlspecialchars($metadescription)} {/if},$_G['setting']['bbname']" />
<title><!--{if !empty($navtitle)}-->$navtitle - <!--{/if}--><!--{if empty($nobbname)}--> $_G['setting']['bbname'] - <!--{/if}--> {lang waptitle} - Powered by Discuz!</title>
<script type="text/javascript">var STYLEID = '{STYLEID}', STATICURL = '{STATICURL}', IMGDIR = '{IMGDIR}', VERHASH = '{VERHASH}', charset = '{CHARSET}', discuz_uid = '$_G[uid]', cookiepre = '{$_G[config][cookie][cookiepre]}', cookiedomain = '{$_G[config][cookie][cookiedomain]}', cookiepath = '{$_G[config][cookie][cookiepath]}', showusercard = '{$_G[setting][showusercard]}', attackevasive = '{$_G[config][security][attackevasive]}', disallowfloat = '{$_G[setting][disallowfloat]}', creditnotice = '<!--{if $_G['setting']['creditnotice']}-->$_G['setting']['creditnames']<!--{/if}-->', defaultstyle = '$_G[style][defaultextstyle]', REPORTURL = '$_G[currenturl_encode]', SITEURL = '$_G[siteurl]', JSPATH = '$_G[setting][jspath]';</script>
<link rel="stylesheet" href="$_G[siteurl]template/mobanbus_h5v1/h5v1_st/css/mobanbus_h5v1_st.css" media="screen" />
<link rel="stylesheet" href="$_G[siteurl]template/mobanbus_h5v1/h5v1_st/css/mobanbus.min.css" />
<script type="text/javascript" src="{$_G[setting][jspath]}common.js?{VERHASH}"></script>
</head>
<body class="bg mobanbus" onLoad="LoadFinish()">
<!-- Mobanbus_cn header start -->
<header class="mobanbus_header bus_global bus_view">
  <div class="bus_nav">
	<a class="head_ico icon-angle-left" href="javascript:history.go(-1);"></a>
	<div class="logo_index">
		<h1 class="bus_logo"><a href="portal.php?mod=index&mobile=2">$navtitle</a></h1>
	</div>
	<div class="icon-edit animated fadeInUp" title="{lang search}"><a href="forum.php?mod=misc&action=nav&mobile=2"></a></div>
  </div>	
</header>
<!-- Mobanbus_cn header end -->

<section class="bus_warp">
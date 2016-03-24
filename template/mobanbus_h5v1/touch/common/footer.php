<?php echo '精品模板';exit;?>
<!--{hook/global_footer_mobile}-->
<!--{eval $useragent = strtolower($_SERVER['HTTP_USER_AGENT']);$clienturl = ''}-->
<!--{if strpos($useragent, 'iphone') !== false || strpos($useragent, 'ios') !== false}-->
<!--{eval $clienturl = $_G['cache']['mobileoem_data']['iframeUrl'] ? $_G['cache']['mobileoem_data']['iframeUrl'].'&platform=ios' : 'http://www.discuz.net/mobile.php?platform=ios';}-->
<!--{elseif strpos($useragent, 'android') !== false}-->
<!--{eval $clienturl = $_G['cache']['mobileoem_data']['iframeUrl'] ? $_G['cache']['mobileoem_data']['iframeUrl'].'&platform=android' : 'http://www.discuz.net/mobile.php?platform=android';}-->
<!--{elseif strpos($useragent, 'windows phone') !== false}-->
<!--{eval $clienturl = $_G['cache']['mobileoem_data']['iframeUrl'] ? $_G['cache']['mobileoem_data']['iframeUrl'].'&platform=windowsphone' : 'http://www.discuz.net/mobile.php?platform=windowsphone';}-->
<!--{/if}-->

<div id="mask" style="display:none;"></div>
<!--{if !$nofooter}-->
<div class="footer">
	<div>
		<!--{if !$_G[uid] && !$_G['connectguest']}-->
		<!--{else}-->
		<a href="forum.php">{lang mobilehome} | <a href="home.php?mod=space&uid={$_G[uid]}&do=profile&mycenter=1">{$_G['member']['username']}</a> | <a href="member.php?mod=logging&action=logout&formhash={FORMHASH}" title="{lang logout}" class="dialog">{lang logout}</a>
		<!--{/if}-->
	</div>
	<div class="bus_foot_nav">
		<a href="{$_G['setting']['mobile']['simpletypeurl'][0]}">{lang no_simplemobiletype}</a>
		<a href="javascript:;" style=" color:#e6242b">{lang mobile2version}</a>
		<a href="{$_G['setting']['mobile']['nomobileurl']}">{lang nomobiletype}</a>
		<!--{if $clienturl}--><a href="$clienturl">{lang clientversion}</a><!--{/if}-->
	</div>
	<p>&copy; Comsenz Inc.</p>
</div>
<!-- Mobanbus_cn footer end -->
<div class="bus_headbox"></div>
<!--{/if}-->
</section>
<!-- Mobanbus_cn mobanbus_wrap end -->

<!--{if $_GET[mod] == 'logging'}-->
	<span class="bus_back"><a class="head_ico icon-angle-left" href="javascript:history.go(-1);"></a></span>
<!--{elseif $_GET[mod] == 'register'}-->
	<span class="bus_back"><a class="head_ico icon-angle-left" href="javascript:history.go(-1);"></a></span>
<!--{elseif $_GET[mod] == 'viewthread'}-->
<!--{else}-->
<footer class="bus_bottomnav">
	<!-- 这里放 底部导航模块 调用地址 -->
	<div class="bus_ft_ico col_5" title="{lang user_info}"><a href="<!--{if $_G[uid]}-->home.php?mod=space&do=friend&mobile=2<!--{else}-->member.php?mod=logging&action=login&mobile=2<!--{/if}-->"><i class="icon-user "></i><span>我的</span></a><!--{if $_G[member][newpm]}--><i class="icon-circle"></i><!--{/if}--></div>
</footer>
<!--{/if}-->


<div class="bus_copyright">
<script type="text/javascript" src="$_G[siteurl]template/mobanbus_h5v1/h5v1_st/js/mobanbus.js"></script>
</div>
</html>
<!--{eval updatesession();}-->
<!--{if defined('IN_MOBILE')}-->
	<!--{eval output();}-->
<!--{else}-->
	<!--{eval output_preview();}-->
<!--{/if}-->

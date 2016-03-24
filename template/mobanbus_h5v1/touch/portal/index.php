<?php echo '精品模板';exit;?>
<!--{template common/header}-->
<script src="template/mobanbus_h5v1/h5v1_st/js/jquery.infinitescroll.js" type="text/javascript"></script>


<!-- 这里放幻灯片、二图、门户图文、卡片模块、瀑布流 调用地址 -->


<div id="more"><a href="forum.php?mod=forumdisplay&fid=38&page=2"></a></div>
<!--{if !$_G[uid] && !$_G['connectguest']}-->
<section class="busbox mobanbus_loginitem">
<p>您还没有登录哦，赶快去登录吧！</p>
<span><a href="member.php?mod=logging&action=login" class="buslogin">登录</a><a href="member.php?mod=register" class="busregister">注册</a></span>
</section>
<!--{else}--><!--{/if}-->
<!--{template common/footer}-->












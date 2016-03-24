<?php echo '精品模板';exit;?>
<!-- userinfo start -->
<div class="bus_userinfo">
<div class="user_cover cl">
<div class="user_avatar">
<div class="avatar_m"><span><img src="<!--{avatar($space[uid], middle, true)}-->" zsrc="<!--{avatar($space[uid], middle, true)}-->" style="display: inline; visibility: visible;"></span></div>
<div class="user_info">
	<h2 class="name">$space[username]</h2>
	<div class="clear"></div>
<!--{if $space[self]}-->
	<span class="mobanbus_f mobanbus_f_add"><a href="home.php?mod=space&do=friend&mobile=2">我的好友</a></span>
</div>
</div>

<nav class="bus_homenav">
<div class="user_list cl">
<ul>
<li class="line"><a href="home.php?mod=space&uid={$_G[uid]}&do=profile">资料</a></li>
<li class="line"><a href="home.php?mod=space&uid={$_G[uid]}&do=favorite&view=me&type=thread">收藏</a></li>
<li class="line"><a href="home.php?mod=space&uid={$_G[uid]}&do=thread&view=me">主题</a></li>
<li><a href="home.php?mod=space&do=pm">消息</a><!--{if $_G[member][newpm]}--><i class="icon-circle"></i><!--{/if}--></li>
</ul>
</div>
<div class="clear"></div>
</nav>
<!--{else}-->
	<!--{if !$isfriend}-->
	<span class="mobanbus_f mobanbus_f_add"><a href="home.php?mod=spacecp&ac=friend&op=add&uid=$space[uid]&handlekey=addfriendhk_{$space[uid]}" id="a_friend_li_{$space[uid]}">{lang add_friend}</a></span>
	<!--{else}-->
	<span class="mobanbus_f mobanbus_f_ignore"><a href="home.php?mod=spacecp&ac=friend&op=ignore&uid=$space[uid]&handlekey=ignorefriendhk_{$space[uid]}" id="a_ignore_{$space[uid]}">{lang ignore_friend}</a></span>
	<!--{/if}-->
	<span class="mobanbus_f mobanbus_f_add"><a href="home.php?mod=spacecp&ac=pm&op=showmsg&handlekey=showmsg_$space[uid]&touid=$space[uid]&pmid=0&daterange=2" id="a_friend_li_{$space[uid]}">{lang send_pm}</a></span>
</div>
</div>

<nav class="bus_homenav">
<div class="user_list cl">
<ul>
<li class="b line"><a href="home.php?mod=space&uid=$space[uid]&do=profile">TA的资料</a></li>
<li class="b line"><a href="home.php?mod=space&uid=$space[uid]&do=thread&view=me">TA的主题</a></li>
</ul>
</div>
<div class="clear"></div>
</nav>
<!--{/if}-->

</div>
<div class="clear"></div>

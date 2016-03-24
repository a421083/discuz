<?php echo 'ºöÓÆÐÖ huyouxiong.com';exit;?>
<!--{if $_G['uid']}-->
		{if !($_G['setting']['connect']['allow'] && $_G[member][conisbind])}<div class="comiis_ttx"><img src="{$_G['style']['styleimgdir']}/comiis_txico.gif"></div>{/if}
		<strong{if $_G['setting']['connect']['allow'] && $_G[member][conisbind]} class="qq"{/if}><a href="home.php?mod=space&uid=$_G[uid]" target="_blank" title="{lang visit_my_space}" id="myuser" class="showmenu xi2" onmouseover="showMenu({'ctrlid':'myuser'});">{$_G[member][username]}</a></strong>
		<!--{if $_G['group']['allowinvisible']}-->
		<span id="loginstatus">
			<a id="loginstatusid" href="member.php?mod=switchstatus" title="{lang login_switch_invisible_mode}" onclick="ajaxget(this.href, 'loginstatus');return false;"></a>
		</span>
		<!--{/if}-->
		<!--{hook/global_usernav_extra1}-->
		<span class="pipe">|</span><!--{hook/global_usernav_extra4}-->
		<span class="pipe">|</span><a href="home.php?mod=spacecp" id="myshezhi" class="showmenu" onmouseover="showMenu({'ctrlid':'myshezhi'});">{lang setup}</a>
		<span class="pipe">|</span><a href="home.php?mod=space&do=notice" id="myprompt" class="a showmenu{if $_G[member][newprompt]} new{/if}" onmouseover="showMenu({'ctrlid':'myprompt'});">{lang remind}<!--{if $_G[member][newprompt]}-->($_G[member][newprompt])<!--{/if}--></a><span id="myprompt_check"></span>
		<!--{if empty($_G['cookie']['ignore_notice']) && ($_G[member][newpm] || $_G[member][newprompt_num][follower] || $_G[member][newprompt_num][follow] || $_G[member][newprompt])}--><script language="javascript">delayShow($('myprompt'), function() {showMenu({'ctrlid':'myprompt','duration':3})});</script><!--{/if}-->
		<!--{hook/global_usernav_extra2}-->
		<!--{hook/global_usernav_extra3}-->
		<!--{if $_G['uid'] && getstatus($_G['member']['allowadmincp'], 1)}-->
		<a href="javascript:;" id="myguanli" class="showmenu" onmouseover="showMenu({'ctrlid':'myguanli'});">¹ÜÀí</a>
		<!--{/if}-->
		<span class="pipe">|</span><a href="member.php?mod=logging&action=logout&formhash={FORMHASH}">{lang logout}</a>
<!--{elseif !empty($_G['cookie']['loginuser'])}-->
	<strong><a id="loginuser" class="noborder"><!--{echo dhtmlspecialchars($_G['cookie']['loginuser'])}--></a></strong>
	<span class="pipe">|</span><a href="member.php?mod=logging&action=login" onclick="showWindow('login', this.href)">{lang activation}</a>
	<span class="pipe">|</span><a href="member.php?mod=logging&action=logout&formhash={FORMHASH}">{lang logout}</a>
<!--{elseif !$_G[connectguest]}-->
	<!--{if ($comiis_header==1 && $_G['basescript']=='portal') || $comiis_header==3}--><span class="kmtwzx"><span>»¶Ó­Äú£¬Çë&nbsp;<a onclick="showWindow('login', this.href);return false;" href="member.php?mod=logging&action=login">µÇÂ¼</a>&nbsp;»ò&nbsp;<a href="member.php?mod={$_G[setting][regname]}">$_G['setting']['reglinkname']</a></span></span><!--{else}--><!--{template member/comiis_login}--><!--{/if}-->
<!--{else}-->
		<strong class="vwmy qq">{$_G[member][username]}</strong>
		<!--{hook/global_usernav_extra1}-->
		<span class="pipe">|</span><a href="member.php?mod=logging&action=logout&formhash={FORMHASH}">{lang logout}</a>
		<a href="home.php?mod=spacecp&ac=credit&showcredit=1">{lang credits}: 0</a>
		<span class="pipe">|</span>{lang usergroup}: $_G[group][grouptitle]
<!--{/if}-->
<?php exit;?>
	<div>{lang thread_reward}<strong> <span class="72hO7Yt0oW">$rewardprice</span> </strong>{$_G['setting']['extcredits'][$_G['setting']['creditstransextra'][2]][unit]}{$_G['setting']['extcredits'][$_G['setting']['creditstransextra'][2]][title]} {if $_G['forum_thread']['price'] > 0}<span class="D2lReDdK6D">{lang unresolved}</span>{elseif $_G['forum_thread']['price'] < 0}<span class="0GJVCDXl4J">{lang resolved}</span>{/if}</div>
	<div id="postmessage_$post[pid]" class="IeEaWCrC27">$post[message]</div>


<!--{if $post['attachment']}-->
	<div class="8HwDK5sb8Y">{lang attachment}: <em><!--{if $_G['uid']}-->{lang attach_nopermission}<!--{else}-->{lang attach_nopermission_login}<!--{/if}--></em></div>
<!--{elseif $post['imagelist'] || $post['attachlist']}-->
    <!--{if $post['imagelist']}-->
         {echo showattach($post, 1)}
    <!--{/if}-->
    <!--{if $post['attachlist']}-->
         {echo showattach($post)}
    <!--{/if}-->
<!--{/if}-->
<!--{eval $post['attachment'] = $post['imagelist'] = $post['attachlist'] = '';}-->

<!--{if $bestpost}-->
	<div class="jwVFxYOcDK">
		<h3 class="rpBuwbxGts">{lang reward_bestanswer}</h3>
		<div class="w6FCXRuvL9">
			<div class="qUDcBNfJaF">$bestpost[avatar]</div>
			<div class="QuDs3NkIVf">
				<p class="oqqrXufYFa"><a href="home.php?mod=space&uid=$bestpost[authorid]" class="inFVvda7Ig">$bestpost[author]</a> <a href="javascript:;" onclick="window.open('forum.php?mod=redirect&goto=findpost&ptid=$bestpost[tid]&pid=$bestpost[pid]')">{lang view_full_content}</a></p>
				<div class="i3eE3wnkb2">$bestpost[message]</div>
			</div>
		</div>
	</div>
<!--{/if}-->
<?php echo '精品模板';exit;?>
<a name="comment_anchor_$value[cid]"></a>
<!--{if empty($ajax_edit)}--><dl id="comment_$value[cid]_li" class="bus_replybd"><!--{/if}-->
	<!--{if $value[author]}-->
	<dd class="bus_alum_avt"><a href="home.php?mod=space&uid=$value[authorid]" c="1"><!--{avatar($value[authorid],small)}--></a></dd>
	<!--{else}-->
	<dd class="m avt"><img src="{STATICURL}image/magic/hidden.gif" alt="hidden" /></dd>
	<!--{/if}-->
	<dt class="bus_alum_info">
		<span class="y xw0">

		<!--{hook/global_space_comment_op $k}-->


		<!--{if $_G[uid]}-->

			<!--{if $value[authorid]==$_G[uid] || $value[uid]==$_G[uid] || checkperm('managecomment')}-->
				<a href="home.php?mod=spacecp&ac=comment&op=delete&cid=$value[cid]&handlekey=delcommenthk_{$value[cid]}" id="c_$value[cid]_delete" onclick="showWindow(this.id, this.href, 'get', 0);">{lang delete}</a>
			<!--{/if}-->
		<!--{/if}-->
		<!--{if $value[authorid]!=$_G[uid] && ($value['idtype'] != 'uid' || $space[self]) && $value[author]}-->
			<a href="home.php?mod=spacecp&ac=comment&op=reply&cid=$value[cid]&feedid=$feedid&handlekey=replycommenthk_{$value[cid]}" id="c_$value[cid]_reply" onclick="showWindow(this.id, this.href, 'get', 0);">{lang reply}</a>
		<!--{/if}-->
        <!--{if checkperm('managecomment')}-->
			<span class="xg1 xw0">IP: $value[ip]</span>
		<!--{/if}-->
			<!--a href="home.php?mod=spacecp&ac=common&op=report&idtype=comment&id=$value[cid]&handlekey=reportcommenthk_{$value[cid]}" id="a_report_$value[cid]" onclick="showWindow(this.id, this.href, 'get', 0);">{lang report}</a-->
		</span>

		<!--{if $value[author]}-->
		<a href="home.php?mod=space&uid=$value[authorid]" id="author_$value[cid]">{$value[author]}</a>
		<!--{else}-->
		$_G[setting][anonymoustext]
		<!--{/if}-->
		<span class="xg1 xw0"><!--{date($value[dateline])}--></span>
		<!--{if $value[status] == 1}--><b>({lang moderate_need})</b><!--{/if}-->
	</dt>

	<dd id="comment_$value[cid]" class="bus_alum_msg {if $value[magicflicker]} magicflicker {/if}"><!--{if $value[status] == 0 || $value[authorid] == $_G[uid] || $_G[adminid] == 1}-->$value[message]<!--{else}--> {lang moderate_not_validate} <!--{/if}--></dd>
	<!--{hook/global_comment_bottom}-->

<!--{if empty($ajax_edit)}--></dl><!--{/if}-->
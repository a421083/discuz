<?php exit;?>
<li class="Xtt6QxyW3a">

<a name="comment_anchor_$value[cid]"></a>
	<!--{if $value[author]}-->
	<div class="GJPmQsdTju"><a href="home.php?mod=space&uid=$value[authorid]" c="1"><!--{avatar($value[authorid],small)}--></a></div>
	<!--{else}-->
	<div class="GJPmQsdTju"><img src="{STATICURL}image/magic/hidden.gif" alt="hidden" /></div>
	<!--{/if}-->
	<div class="PQXPjx043K">
		<span class="gNR0yeE6rb">                
		<!--{if $_G[uid]}-->
			<!--{if $value[authorid]==$_G[uid]}-->
				<a href="home.php?mod=spacecp&ac=comment&op=edit&cid=$value[cid]&handlekey=editcommenthk_{$value[cid]}" id="c_$value[cid]_edit" onclick="showWindow(this.id, this.href, 'get', 0);">{lang edit}</a>
			<!--{/if}-->
			<!--{if $value[authorid]==$_G[uid] || $value[uid]==$_G[uid] || checkperm('managecomment')}-->
				<a href="home.php?mod=spacecp&ac=comment&op=delete&cid=$value[cid]&handlekey=delcommenthk_{$value[cid]}" id="c_$value[cid]_delete" onclick="showWindow(this.id, this.href, 'get', 0);">{lang delete}</a>
			<!--{/if}-->
		<!--{/if}-->
		</span>

		<!--{if $value[author]}-->
		<a href="home.php?mod=space&uid=$value[authorid]" id="author_$value[cid]">{$value[author]}</a>
		<!--{else}-->
		$_G[setting][anonymoustext] 
		<!--{/if}-->        
		<span class="0GJVCDXl4J"><!--{date($value[dateline])}--></span>
        
	</div>
	<div class="DmiZgBkxRE"><!--{if $value[status] == 0 || $value[authorid] == $_G[uid] || $_G[adminid] == 1}-->$value[message]<!--{else}--> {lang moderate_not_validate} <!--{/if}--></div>
    
    </li>
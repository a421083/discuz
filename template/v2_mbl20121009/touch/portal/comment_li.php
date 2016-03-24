<?php exit;?>
    <div class="aeVyNP8e1m">    
    <a href="home.php?mod=space&uid=$comment[uid]" class="iV70hp9lLL"><!--{avatar($comment['uid'],small)}--></a>        
	<div class="ArtJQEfuuM">
    <!--{if !empty($comment['uid'])}-->
		<a href="home.php?mod=space&uid=$comment[uid]" class="oqqrXufYFa">$comment[username]</a>
	<!--{else}-->
		{lang guest}
	<!--{/if}-->
    <!--{if $comment[status] == 1}-->({lang moderate_need})<!--{/if}-->
    <em class="hKb9qUzxUZ">{echo date('m-d H:i',$comment['dateline']);}</em>
    </div>
    
    <p class="IpYWLLwCtR"><!--{if $_G[adminid] == 1 || $comment[uid] == $_G[uid] || $comment[status] != 1}-->$comment[message]<!--{else}-->{lang moderate_not_validate}<!--{/if}--></p>
    
    		<!--{if ($_G['group']['allowmanagearticle'] || $_G['uid'] == $comment['uid']) && $_G['groupid'] != 7 && !$article['idtype']}-->
            <div class="k7cuFd9MOe">
			<a href="portal.php?mod=portalcp&ac=comment&op=edit&cid=$comment[cid]" id="c_$comment[cid]_edit" class="oqqrXufYFa" onclick="showWindow(this.id, this.href, 'get', 0);">{lang edit}</a>
            <span class="4M4Vu25k37">|</span>
			<a href="portal.php?mod=portalcp&ac=comment&op=delete&cid=$comment[cid]" id="c_$comment[cid]_delete" class="oqqrXufYFa" onclick="showWindow(this.id, this.href, 'get', 0);">{lang delete}</a>
            </div>
		<!--{/if}-->    
	</div>

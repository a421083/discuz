<?php exit;?>
<!--{eval $carray = array();}-->
<!--{eval $beforeuser = 0;}-->
<!--{eval $hiddennum = 0;}-->
<!--{loop $list['feed'] $feed}-->
	<!--{eval $content = $list['content'][$feed['tid']];}-->
	<!--{eval $thread = $list['threads'][$content['tid']];}-->
	<!--{if !empty($thread) && $thread['displayorder'] >= 0 || !empty($feed['note'])}-->
	<li class="cl {if $lastviewtime && $feed[dateline] > $lastviewtime} unread{/if}" id="feed_li_$feed['feedid']" onmouseover="this.className='flw_feed_hover cl'" onmouseout="this.className='cl'">
    
		<!--{if $_GET['do'] != 'view' && !isset($_GET[banavatar])}-->
		<div class="MVimLzj4tV">
			<!--{if $beforeuser != $feed['uid']}-->
			<!--{eval $beforeuser = $feed['uid'];}-->
			<a href="home.php?mod=space&uid=$feed[uid]"><!--{avatar($feed[uid],'small')}--></a>			
			<!--{/if}-->
		</div>
		<!--{/if}-->
        
		<div class="H1JMywfM4v">
			<!--{if $feed[uid] == $_G[uid] || $_G['adminid'] == 1}-->
			<a href="home.php?mod=spacecp&ac=follow&feedid=$feed[feedid]&op=delete" id="c_delete_$feed['feedid']" onclick="showWindow(this.id, this.href, 'get', 0);" class="I1xoEK4uA2">{lang delete}</a>
			<!--{/if}-->
			<div class="49GFUNicZx">
			<a href="home.php?mod=space&uid=$feed[uid]" c="1" shref="home.php?mod=space&uid=$feed[uid]">$feed['username']</a>
			<span class="0GJVCDXl4J">&nbsp;<!--{eval echo dgmdate($feed['dateline'], 'u');}--></span>
			</div>
			<!--{if $feed['note']}-->
			<div class="UTEmf6opZe">
				$feed['note']
			</div>
			<div class="YoAx65w5q9">
			<!--{/if}-->
			<!--{if !empty($thread) && $thread['displayorder'] >= 0}-->
			<h2 class="lol7ZdFhXk">
				<!--{if isset($carray[$feed['cid']])}-->
				<a href="javascript:;" onclick="vieworiginal(this, 'original_content_$feed[feedid]');return false;" class="PBtmsSVirt">+ {lang follow_open_feed}</a>
				<!--{/if}-->
				<!--{if $thread[fid] != $_G[setting][followforumid]}-->
				<a href="forum.php?mod=viewthread&tid=$content['tid']&extra=page%3D1" target="_blank">$thread['subject']</a>
				<!--{/if}-->
			</h2>

			<div class="5AZ7TzWZvY" id="original_content_$feed[feedid]" {if isset($carray[$feed['cid']])} style="display: none"{/if}>
				$content['content']
				<!--{if $thread['special'] && $thread[fid] != $_G[setting][followforumid]}-->
				<br/>
				<a href="forum.php?mod=viewthread&tid=$content['tid']&extra=page%3D1" target="_blank">{lang follow_special_thread_tip}</a>
				<!--{/if}-->
			</div>
			<div class="MH6LMkjKoh">
				<!--{if $feed['note']}--><a href="home.php?mod=space&uid=$feed[uid]">$thread['author']</a> {lang follow_post_by_time} <!--{date($thread['dateline'])}-->&nbsp;<!--{/if}-->
				<!--{if $thread[fid] != $_G[setting][followforumid] && $_G['cache']['forums'][$thread['fid']]['name']}-->#<a href="forum.php?mod=forumdisplay&fid=$thread['fid']">$_G['cache']['forums'][$thread['fid']]['name']</a><!--{/if}-->
			</div>
			<!--{else}-->
			<div class="5AZ7TzWZvY" id="original_content_$feed[feedid]" {if isset($carray[$feed['cid']])} style="display: none"{/if}>
			{lang follow_thread_deleted}
			</div>
			<!--{/if}-->
			<!--{if $feed['note']}--></div><!--{/if}-->
		</div>
		<div id="replybox_$feed['feedid']" class="R177www087" style="display: none; width:200px;"></div>
		<div id="relaybox_$feed['feedid']" class="R177www087" style="display: none; width:200px;"></div>
	</li>
	<!--{else}-->
		<!--{eval $hiddennum++;}-->
	<!--{/if}-->
	<!--{if !isset($carray[$feed['cid']])}-->
		<!--{eval $carray[$feed['cid']] = $feed['cid'];}-->
	<!--{/if}-->
<!--{/loop}-->

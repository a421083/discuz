<?php echo '精品模板';exit;?>
<div class="bus_vcomment mt20 bus_w100">         
<h3 class="bbda">{lang latest_comment}</h3>
<!--{loop $commentlist $comment}-->
<!--{template portal/comment_li}-->
<!--{if !empty($aimgs[$comment[cid]])}-->
	<script type="text/javascript" reload="1">aimgcount[{$comment[cid]}] = [<!--{echo implode(',', $aimgs[$comment[cid]]);}-->];attachimgshow($comment[cid]);</script>
<!--{/if}-->
<!--{/loop}-->

<!--{if $data[commentnum]}--><div class="bus_viewall"><a href="$common_url" class="xi2">{lang view_all_comments}(<em id="_commentnum">$data[commentnum]</em>)</a></div><!--{/if}-->
<div class="ipc">		
		<form id="cform" name="cform" action="$form_url" method="post" autocomplete="off">

				<div class="ipcc mtn">
				<input name="message" rows="3" id="message" onkeydown="ctrlEnter(event, 'commentsubmit_btn');"></input>
				</div>

			<!--{if checkperm('seccode') && ($secqaacheck || $seccodecheck)}-->
			<!--{subtemplate common/seccheck}-->
			<!--{/if}-->
			<!--{if !empty($topicid) }-->
				<input type="hidden" name="referer" value="portal.php?mod=topic&topicid=$topicid#comment" />
				<input type="hidden" name="topicid" value="$topicid">
			<!--{else}-->
				<input type="hidden" name="portal_referer" value="portal.php?mod=view&aid=$aid#comment">
				<input type="hidden" name="referer" value="portal.php?mod=view&aid=$aid#comment" />
				<input type="hidden" name="id" value="$data[id]" />
				<input type="hidden" name="idtype" value="$data[idtype]" />
				<input type="hidden" name="aid" value="$aid">
			<!--{/if}-->
			<input type="hidden" name="formhash" value="{FORMHASH}">
			<input type="hidden" name="replysubmit" value="true">
			<input type="hidden" name="commentsubmit" value="true" />
			<div class="inbox"><button type="submit" name="commentsubmit_btn" id="commentsubmit_btn" value="true" class="bus_btn">{lang comment}</button></div>
		</form>	
</div>
</div>
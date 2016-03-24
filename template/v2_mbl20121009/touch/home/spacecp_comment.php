<?php exit;?>
<!--{template common/header}-->
<!--{if !$_G[inajax]}-->
	<div class="G6qNfDQqUt"><a href="forum.php">{echo m_lang('home')}</a> <em> &gt; </em> <!--{if $_GET['op'] == 'edit'}-->{lang edit}<!--{elseif $_GET['op'] == 'delete'}-->{lang delete_reply}<!--{/if}--></div>
<!--{/if}-->

<!--{if $_GET['op'] == 'edit'}-->
<div class="oUK4ISwfhs">
<ul class="jDqDeB5BDk">
	<form id="editcommentform_{$cid}" name="editcommentform_{$cid}" method="post" autocomplete="off" action="home.php?mod=spacecp&ac=comment&op=edit&cid=$cid{if $_GET[modcommentkey]}&modcommentkey=$_GET[modcommentkey]{/if}" {if $_G[inajax]} onsubmit="ajaxpost(this.id, 'return_$_GET[handlekey]');"{/if}>
		<input type="hidden" name="referer" value="{echo dreferer()}" />
		<input type="hidden" name="editsubmit" value="true" />
		<!--{if $_G[inajax]}--><input type="hidden" name="handlekey" value="$_GET[handlekey]" /><!--{/if}-->
		<input type="hidden" name="formhash" value="{FORMHASH}" />
		<li class="PQXPjx043K">
        <textarea id="message_{$cid}" name="message" cols="70" onkeydown="ctrlEnter(event, 'editsubmit_btn');" rows="3" >$comment[message]</textarea>
		</li>		
		<button type="submit" name="editsubmit_btn" id="editsubmit_btn" value="true" class="i0yserLt7a">{lang submit}</button>		
	</form>
    </ul>
    </div>
	<script type="text/javascript">
		function succeedhandle_$_GET['handlekey'] (url, message, values) {
			comment_edit(values['cid']);
		}
	</script>

<!--{elseif $_GET['op'] == 'delete'}-->
<div class="T9onYOQMi0">
	<form id="deletecommentform_{$cid}" name="deletecommentform_{$cid}" method="post" autocomplete="off" action="home.php?mod=spacecp&ac=comment&op=delete&cid=$cid" {if $_G[inajax]}onsubmit="ajaxpost(this.id, 'return_$_GET[handlekey]');"{/if}>
		<input type="hidden" name="referer" value="{echo dreferer()}" />
		<input type="hidden" name="deletesubmit" value="true" />
		<input type="hidden" name="formhash" value="{FORMHASH}" />
		<!--{if $_G[inajax]}--><input type="hidden" name="handlekey" value="$_GET[handlekey]" /><!--{/if}-->
		<div class="Vja1dbTm53">{lang delete_reply_message}</div>
		<button type="submit" name="deletesubmitbtn" value="true" class="kcQ3GJrc61"><strong>{lang determine}</strong></button>
	</form>
</div>
	<script type="text/javascript">
		function succeedhandle_$_GET['handlekey'] (url, message, values) {
			comment_delete(values['cid']);
		}
	</script>

<!--{/if}-->
<!--{template common/footer}-->
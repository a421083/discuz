<?php exit;?>
<!--{subtemplate common/header}-->

<!--{if $_GET['op'] == 'edit'}-->
 
    <div class="G6qNfDQqUt"><a href="javascript:history.back();" onclick="javascript:history.back();" >{lang back}</a> <em> &gt; </em> {lang comment_edit_content}</div>  
    
    <div class="oUK4ISwfhs">
    <ul class="jDqDeB5BDk">
	<form id="editcommentform_{$cid}" name="editcommentform_{$cid}" method="post" autocomplete="off" action="portal.php?mod=portalcp&ac=comment&op=edit&cid=$cid{if $_GET[modarticlecommentkey]}&modarticlecommentkey=$_GET[modarticlecommentkey]{/if}">
		<input type="hidden" name="referer" value="{echo dreferer()}" />
		<input type="hidden" name="editsubmit" value="true" />
		<!--{if $_G[inajax]}--><input type="hidden" name="handlekey" value="$_GET[handlekey]" /><!--{/if}-->
		<input type="hidden" name="formhash" value="{FORMHASH}" />
		<li class="LAr0c1M5Vu"><textarea id="message_{$cid}" name="message" cols="70" onkeydown="ctrlEnter(event, 'editsubmit_btn');" rows="8" >$comment[message]</textarea></li>
		<button type="submit" name="editsubmit_btn" id="editsubmit_btn" value="true" class="i0yserLt7a">{lang submit}</button>
	</form>
    </ul>
    </div>

<!--{elseif $_GET['op'] == 'delete'}-->

    <div class="G6qNfDQqUt"><a href="javascript:history.back();" onclick="javascript:history.back();" >{lang back}</a> <em> &gt; </em> {lang comment_delete}</div>    
	<div class="T9onYOQMi0">
    <form id="deletecommentform_{$cid}" name="deletecommentform_{$cid}" method="post" autocomplete="off" action="portal.php?mod=portalcp&ac=comment&op=delete&cid=$cid">
		<input type="hidden" name="referer" value="{echo dreferer()}" />
		<input type="hidden" name="deletesubmit" value="true" />
		<input type="hidden" name="formhash" value="{FORMHASH}" />
		<!--{if $_G[inajax]}--><input type="hidden" name="handlekey" value="$_GET[handlekey]" /><!--{/if}-->
		<div class="12MaDp5b02">{lang comment_delete_confirm}</div>
		<button type="submit" name="deletesubmitbtn" value="true" class="kcQ3GJrc61"><strong>{lang confirms}</strong></button>
	</form>
    </div>

<!--{/if}-->

<!--{subtemplate common/footer}-->
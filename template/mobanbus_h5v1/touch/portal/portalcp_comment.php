<?php echo '精品模板';exit;?>
<!--{subtemplate common/header}-->

<div class="mobanbus_bd bus_newsview">
<div class="bus_vcomment  pt10 bus_w100">
<!--{if $_GET['op'] == 'edit'}-->
  <div class="ct ctpd">   
    <div class="pt bb">{lang comment_edit_content}</div>  
    
    <div class="ipc">
	<form id="editcommentform_{$cid}" name="editcommentform_{$cid}" method="post" autocomplete="off" action="portal.php?mod=portalcp&ac=comment&op=edit&cid=$cid{if $_GET[modarticlecommentkey]}&modarticlecommentkey=$_GET[modarticlecommentkey]{/if}">
		<input type="hidden" name="referer" value="{echo dreferer()}" />
		<input type="hidden" name="editsubmit" value="true" />
		<!--{if $_G[inajax]}--><input type="hidden" name="handlekey" value="$_GET[handlekey]" /><!--{/if}-->
		<input type="hidden" name="formhash" value="{FORMHASH}" />	
            <div class="ipcc mtn">
			<textarea id="message_{$cid}" name="message" cols="70" onkeydown="ctrlEnter(event, 'editsubmit_btn');" rows="8" >$comment[message]</textarea>
            </div>	
		<div class="inbox mtb">
			<button type="submit" name="editsubmit_btn" id="editsubmit_btn" value="true" class="bus_btn">{lang submit}</button>
		</div>
	</form>
    </div>
    </div>

<!--{elseif $_GET['op'] == 'delete'}-->
    <div class="ct ctpd">
    <div class="pt bb">{lang comment_delete}</div>    
	<div class="ipc">
    <form id="deletecommentform_{$cid}" name="deletecommentform_{$cid}" method="post" autocomplete="off" action="portal.php?mod=portalcp&ac=comment&op=delete&cid=$cid">
		<input type="hidden" name="referer" value="{echo dreferer()}" />
		<input type="hidden" name="deletesubmit" value="true" />
		<input type="hidden" name="formhash" value="{FORMHASH}" />
		<!--{if $_G[inajax]}--><input type="hidden" name="handlekey" value="$_GET[handlekey]" /><!--{/if}-->
		<div class="xw1 xg1 mbm mtm">{lang comment_delete_confirm}</div>
		<div class="inbox mtb">
			<button type="submit" name="deletesubmitbtn" value="true" class="bus_btn"><strong>{lang confirms}</strong></button>
		</div>
	</form>
    </div>
    </div>

<!--{/if}-->

</div>
</div>

<!--{subtemplate common/footer}-->
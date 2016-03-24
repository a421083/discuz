<?php exit;?>
<!--{subtemplate common/header}-->

<div class="G6qNfDQqUt"><a href="javascript:history.back();" onclick="javascript:history.back();" >{lang back}</a> <em> &gt; </em> {lang shield_notice}</div>
<div class="T9onYOQMi0">
	<form method="post" autocomplete="off" id="ignoreform_{$formid}" name="ignoreform_{$formid}" action="home.php?mod=spacecp&ac=common&op=ignore&type=$type" {if $_G[inajax]}onsubmit="ajaxpost(this.id, 'return_$_GET[handlekey]');"{/if}>
		<!--{if $_G[inajax]}--><input type="hidden" name="handlekey" value="$_GET[handlekey]" /><!--{/if}-->
		<input type="hidden" name="ignoresubmit" value="true" />
		<input type="hidden" name="formhash" value="{FORMHASH}" />
		<input type="hidden" name="referer" value="{echo dreferer()}">
        
  <div class="PQXPjx043K">
   <div class="rd1ZmHUrdH">{lang no_view_notice_next}</div>			
		<div class="PQXPjx043K"><label><input type="radio" name="authorid" id="authorid1" value="$_GET[authorid]" checked="checked" /> {lang shield_this_friend}</label></div>
		<div class="PQXPjx043K"><label><input type="radio" name="authorid" id="authorid0" value="0" /> {lang shield_all_friend}</label></div>
        </div>	
		<div class="PQXPjx043K">
		<button type="submit" name="feedignoresubmit" value="true" class="i0yserLt7a">{lang determine}</button>
		</div>
	</form>
</div>

<!--{subtemplate common/footer}-->
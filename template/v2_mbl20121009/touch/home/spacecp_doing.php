<?php exit;?>
<!--{subtemplate common/header}-->
<div class="G6qNfDQqUt"><a href="javascript:history.back();" onclick="javascript:history.back();" >{lang back}</a> <em> &gt; </em> {lang delete_log}</div>
<div class="T9onYOQMi0">
	<form method="post" autocomplete="off" id="doingform_{$doid}_{$id}" name="doingform" action="home.php?mod=spacecp&ac=doing&op=delete&doid=$doid&id=$id">
		<!--{if $_G[inajax]}--><input type="hidden" name="handlekey" value="$_GET[handlekey]" /><!--{/if}-->
		<input type="hidden" name="referer" value="{echo dreferer()}" />
		<input type="hidden" name="formhash" value="{FORMHASH}" />
        <div class="Vja1dbTm53">{lang determine_delete_doing}</div>
		<button name="deletesubmit" type="submit" class="kcQ3GJrc61" value="true">{lang determine}</button>
	</form>
    </div>
<!--{subtemplate common/footer}-->
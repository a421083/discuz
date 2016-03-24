<?php exit;?>
<!--{subtemplate common/header}-->
<div class="G6qNfDQqUt"><a href="javascript:history.back();" onclick="javascript:history.back();" >{lang back}</a> <em> &gt; </em> {lang follow_del_feed}</div>
<div class="T9onYOQMi0">
	<form method="post" autocomplete="off" id="deletefeed_{$_GET['feedid']}" name="deletefeed_{$_GET['feedid']}" action="home.php?mod=spacecp&ac=follow&op=delete&feedid=$_GET['feedid']" {if $_G[inajax]}onsubmit="ajaxpost(this.id, 'return_$_GET[handlekey]');"{/if}>
		<input type="hidden" name="referer" value="{echo dreferer()}" />
		<input type="hidden" name="deletesubmit" value="true" />
		<input type="hidden" name="formhash" value="{FORMHASH}" />
		<!--{if $_G[inajax]}--><input type="hidden" name="handlekey" value="$_GET[handlekey]" /><!--{/if}-->
        <div class="Vja1dbTm53">{lang follow_del_feed_confirm}</div>
		<button type="submit" name="btnsubmit" value="true" class="kcQ3GJrc61"><strong>{lang determine}</strong></button>
	</form>
    </div>
	<script type="text/javascript">
		function succeedhandle_{$_GET[handlekey]}(url, msg, values) {
			$('feed_li_'+values.feedid).style.display = 'none';
		}
	</script>
<!--{subtemplate common/footer}-->
<?php exit;?>
<!--{subtemplate common/header}-->
<div class="G6qNfDQqUt"><a href="javascript:history.back();" onclick="javascript:history.back();" >{lang back}</a> <em> &gt; </em> {lang article_delete}</div> 
<div class="T9onYOQMi0">
<!--{if $op == 'delete'}-->
<form method="post" autocomplete="off" action="portal.php?mod=portalcp&ac=article&op=delete&aid=$_GET[aid]">
        <!--{if $_G['group']['allowpostarticlemod'] && $article['status'] == 1}-->
		{lang article_delete_sure}
		<input type="hidden" name="optype" value="0" class="VQ8hvKVA8x" />
		<!--{else}-->
		<p class="8pGqBBaMRd"><label class="Pi1TtEThI5"><input type="radio" name="optype" value="0" class="VQ8hvKVA8x" /> {lang article_delete_direct}</label></p>
		<p class="cAaorHkccg"><label class="Pi1TtEThI5"><input type="radio" name="optype" value="1" class="VQ8hvKVA8x" checked="checked" /> {lang article_delete_recyclebin}</label></p>
		<!--{/if}-->

	<button type="submit" name="btnsubmit" value="true" class="kcQ3GJrc61"><strong>{lang confirms}</strong></button>

	<input type="hidden" name="aid" value="$_GET[aid]" />
	<input type="hidden" name="referer" value="{echo dreferer()}" />
	<input type="hidden" name="deletesubmit" value="true" />
	<input type="hidden" name="formhash" value="{FORMHASH}" />
</form>
<!--{else}-->
<div class="TGFKpNueio"><a href="javascript:history.back();" onclick="javascript:history.back();" >{lang goback}</a></div>
<!--{/if}-->
</div>
<!--{subtemplate common/footer}-->
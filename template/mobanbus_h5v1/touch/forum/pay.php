<?php echo '��Ʒģ��';exit;?>
<!--{template common/header}-->

<nav class="bus_path">
  <span class="bus_nvn"><a href="portal.php?mod=index&mobile=2">$_G[setting][bbname]</a><em> &raquo; </em><a href="forum.php?forumlist=1">����</a><em> &raquo; </em> $navigation</span>
</nav>
<!-- Mobanbus_cn bus_path end -->
<style type="text/css">
.mobanbus .bus_buyattch{ width:96%; padding:15px 2%; margin-bottom:15px; float:left; background-color:#fff;}
.mobanbus .bus_buyattch tr{ line-height:25px;}
</style>
<div class="bus_buyattch">

<form id="payform" method="post" autocomplete="off" action="forum.php?mod=misc&action=pay&paysubmit=yes&infloat=yes{if !empty($_GET['from'])}&from=$_GET['from']{/if}"{if !empty($_GET['infloat'])} onsubmit="ajaxpost('payform', 'return_$_GET['handlekey']', 'return_$_GET['handlekey']', 'onerror');return false;"{/if}>
	<div class="f_c">
		<h3 class="flb">
			<em id="return_$_GET['handlekey']">{lang pay}</em>
			<span>
				<!--{if !empty($_GET['infloat'])}--><a href="javascript:;" class="flbc" onclick="hideWindow('$_GET['handlekey']')" title="{lang close}">{lang close}</a><!--{/if}-->
			</span>
		</h3>
		<input type="hidden" name="formhash" value="{FORMHASH}" />
		<input type="hidden" name="referer" value="{echo dreferer()}" />
		<input type="hidden" name="tid" value="$_G[tid]" />
		<!--{if !empty($_GET['infloat'])}--><input type="hidden" name="handlekey" value="$_GET['handlekey']" /><!--{/if}-->
		<div class="c">
			<table class="list" cellspacing="0" cellpadding="0" style="width:200px">
				<tr>
					<th>{lang author}</th>
					<td><a href="home.php?mod=space&uid=$thread[authorid]" target="_blank">$thread[author]</a></td>
				</tr>
				<tr>
					<th valign="top">{lang price}({$_G['setting']['extcredits'][$_G['setting']['creditstransextra'][1]][title]})</th>
					<td>$thread[price] {$_G['setting']['extcredits'][$_G['setting']['creditstransextra'][1]][unit]}</td>
				</tr>
				<tr>
					<th valign="top">{lang pay_author_income}({$_G['setting']['extcredits'][$_G['setting']['creditstransextra'][1]][title]})</th>
					<td>$thread[netprice] {$_G['setting']['extcredits'][$_G['setting']['creditstransextra'][1]][unit]}</td>
				</tr>
				<tr>
					<th valign="top">{lang pay_balance}({$_G['setting']['extcredits'][$_G['setting']['creditstransextra'][1]][title]})</th>
					<td>$balance {$_G['setting']['extcredits'][$_G['setting']['creditstransextra'][1]][unit]}</td>
				</tr>
			</table>
		</div>
	</div>
	<div class="o pns">
		<button type="submit" name="paysubmit" class="pn pnc" value="true"><span>{lang submit}</span></button>
	</div>
</form>
</div>
<!--{if !empty($_GET['infloat'])}-->
<script type="text/javascript" reload="1">
function succeedhandle_$_GET['handlekey'](locationhref) {
	<!--{if !empty($_GET['from'])}-->
		location.href = locationhref;
	<!--{else}-->
		ajaxget('forum.php?mod=viewthread&tid=$_G[tid]&viewpid=$_GET[pid]', 'post_$_GET[pid]');
		hideWindow('$_GET['handlekey']');
		showCreditPrompt();
	<!--{/if}-->
}
</script>
<!--{/if}-->

<!--{template common/footer}-->
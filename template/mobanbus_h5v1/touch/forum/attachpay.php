<?php echo '精品模板';exit;?>
<!--{template common/header}-->
<nav class="bus_path">
  <span class="bus_nvn"><a href="portal.php?mod=index&mobile=2">$_G[setting][bbname]</a><em> &raquo; </em><a href="forum.php?forumlist=1">社区</a><em> &raquo; </em>{lang pay_attachment}</span>
</nav>
<!-- Mobanbus_cn bus_path end -->
<style type="text/css">
.mobanbus .bus_buyattch{ width:96%; padding:15px 2%; margin-bottom:15px; float:left; background-color:#fff;}
.mobanbus .bus_buyattch tr{ line-height:25px;}
</style>
<div class="bus_buyattch">
<form id="attachpayform" method="post" autocomplete="off" action="forum.php?mod=misc&action=attachpay&tid={$_G[tid]}{if !empty($_GET['infloat'])}&paysubmit=yes&infloat=yes" onsubmit="ajaxpost('attachpayform', 'return_$_GET['handlekey']', 'return_$_GET['handlekey']', 'onerror');return false;"{else}"{/if}>
	<div class="f_c">
		<h3 class="flb">
			<em id="return_$_GET['handlekey']">{lang pay_attachment}</em>
			<span>
				<!--{if !empty($_GET['infloat'])}--><a href="javascript:;" class="flbc" onclick="hideWindow('$_GET['handlekey']')" title="{lang close}">{lang close}</a><!--{/if}-->
			</span>
		</h3>
		<input type="hidden" name="formhash" value="{FORMHASH}" />
		<input type="hidden" name="referer" value="{echo dreferer()}" />
		<input type="hidden" name="aid" value="$aid" />
		<!--{if !empty($_GET['infloat'])}--><input type="hidden" name="handlekey" value="$_GET['handlekey']" /><!--{/if}-->
		<div class="c">
			<table class="list" cellspacing="0" cellpadding="0" style="width: 400px">
				<tr>
					<td>{lang author}</td>
					<td><a href="home.php?mod=space&uid=$attach[uid]">$attach[author]</a></td>
				</tr>
				<tr>
					<td>{lang attachment}</td>
					<td><div style="overflow:hidden">$attach[filename] <!--{if $attach['description']}-->($attach[description])<!--{/if}--></div></td>
				</tr>
				<tr>
					<td>{lang price}({$_G['setting']['extcredits'][$_G['setting']['creditstransextra'][1]][title]})</td>
					<td>$attach[price] {$_G['setting']['extcredits'][$_G['setting']['creditstransextra'][1]][unit]}</td>
				</tr>
				<!--{if $status != 1}-->
				<tr>
					<td>{lang pay_author_income}({$_G['setting']['extcredits'][$_G['setting']['creditstransextra'][1]][title]})</td>
					<td>$attach[netprice] {$_G['setting']['extcredits'][$_G['setting']['creditstransextra'][1]][unit]}</td>
				</tr>
				<tr>
					<td>{lang pay_balance}({$_G['setting']['extcredits'][$_G['setting']['creditstransextra'][1]][title]})</td>
					<td>$balance {$_G['setting']['extcredits'][$_G['setting']['creditstransextra'][1]][unit]}</td>
				</tr>
				<!--{/if}-->
				<!--{if $status == 1}-->
				<tr>
					<td>&nbsp;</td>
					<td>{lang status_insufficient}</td>
				</tr>
				<!--{elseif $status == 2}-->
				<tr>
					<td>&nbsp;</td>
					<td>{lang status_download}, <a href="forum.php?mod=attachment&aid=$aidencode" target="_blank">{lang download}</a></td>
				</tr>
				<!--{/if}-->
			</table>
		</div>
		<div class="o pns">
			<!--{if $status != 1}-->
				<label><input name="buyall" type="checkbox" class="pc" value="yes" />{lang buy_all_attch}</label>
				<button class="pn pnc" type="submit" name="paysubmit" value="true"><span><!--{if $status == 0}-->{lang pay_attachment}<!--{else}-->{lang free_buy}<!--{/if}--></span></button>
			<!--{/if}-->
		</div>
	</div>
</form>

<!--{if !empty($_GET['infloat'])}-->
<script type="text/javascript" reload="1">
function succeedhandle_$_GET['handlekey'](locationhref) {
	ajaxget('forum.php?mod=viewthread&tid=$attach[tid]&viewpid=$attach[pid]', 'post_$attach[pid]');
	hideWindow('$_GET['handlekey']');
	showCreditPrompt();
}
</script>
<!--{/if}-->

</div>
<!--{template common/footer}-->
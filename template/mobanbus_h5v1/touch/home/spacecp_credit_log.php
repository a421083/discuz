<?php echo '精品模板';exit;?>
<!--{template common/header}-->
<!--{template home/space_head}-->
		<!--{hook/spacecp_credit_top}-->
		<!--{template home/spacecp_credit_header}-->
		<div class="bus_credit bus_spacebox mt10 mb20">
			<p class="tbmu bw0 mt10 mb20">
				<a{if $_GET[suboperation] != 'creditrulelog'} class="a"{/if} href="home.php?mod=spacecp&ac=credit&op=log" hidefocus="true">{lang credit_log}</a><span class="pipe"> |</span>
				<a{if $_GET[suboperation] == 'creditrulelog'} class="a"{/if} href="home.php?mod=spacecp&ac=credit&op=log&suboperation=creditrulelog" hidefocus="true">{lang credit_log_sys}</a>
			</p>
			<!--{if $_GET[suboperation] != 'creditrulelog'}-->
			<form method="post" action="home.php?mod=spacecp&ac=credit&op=log">
				<table summary="{lang memcp_credits_log_payment}" cellspacing="0" cellpadding="0" class="dt">
					<tr>
						<th width="80">{lang credit_change}</th>
						<th>{lang detail}</th>
						<th width="100">{lang changedateline}</th>
					</tr>
					<!--{loop $loglist $value}-->
					<!--{eval $value = makecreditlog($value, $otherinfo);}-->
					<tr>
						<td>$value['credit']</td>
						<td><!--{if $value['operation']}-->$value['opinfo']<!--{else}-->$value['text']<!--{/if}--></td>
						<td>$value['dateline']</td>
					</tr>
					<!--{/loop}-->
				</table>
				<input type="hidden" name="op" value="log" />
				<input type="hidden" name="ac" value="credit" />
				<input type="hidden" name="mod" value="spacecp" />
			</form>
			<!--{elseif $_GET[suboperation] == 'creditrulelog'}-->
				<table summary="{lang get_credit_histroy}" cellspacing="0" cellpadding="0" class="dt">
					<tr>
						<th class="xw1" width="80">{lang action_name}</th>
						<th class="xw1" width="60">{lang total_time}</th>
						<th class="xw1" width="60">{lang cycles_num}</th>
						<!--{loop $_G['setting']['extcredits'] $key $value}-->
						<th class="xw1">$value[title]</th>
						<!--{/loop}-->
						<th class="xw1" width="100">{lang last_award_time}</th>
					</tr>
					<!--{eval $i = 0;}-->
					<!--{loop $list $key $log}-->
					<!--{eval $i++;}-->
					<tr{if $i % 2 == 0} class="alt"{/if}>
						<td><a href="home.php?mod=spacecp&ac=credit&op=rule&rid=$log[rid]">$log[rulename]</a></td>
						<td>$log[total]</td>
						<td>$log[cyclenum]</td>
						<!--{loop $_G['setting']['extcredits'] $key $value}-->
						<!--{eval $creditkey = 'extcredits'.$key;}-->
						<td>$log[$creditkey]</td>
						<!--{/loop}-->
						<td><!--{date($log[dateline], 'Y-m-d H:i')}--></td>
					</tr>
					<!--{/loop}-->
				</table>
			<!--{/if}-->
			<!--{if $multi}--><div class="pgs cl mtm">$multi</div><!--{/if}-->
			<!--{hook/spacecp_credit_bottom}-->
		</div>
	</div>
</div>

</div><!-- main bus_userinfo end -->
<!--{template common/footer}-->
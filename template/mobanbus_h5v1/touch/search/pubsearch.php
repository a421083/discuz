<?php echo '精品模板';exit;?>
<!--{if !empty($srchtype)}--><input type="hidden" name="srchtype" value="$srchtype" /><!--{/if}-->
<div class="search">
		<table width="100%" cellspacing="0" cellpadding="0">
			<tbody>
				<tr>
					<td>
						<div class="mt20"><input value="$keyword" autocomplete="off" class="bus_w100 input" name="srchtxt" id="scform_srchtxt" value="" placeholder="{lang searchthread}"></div>
					</td>
				</tr>
				<tr>
					<td>
						<div class="mt20"><input type="hidden" name="searchsubmit" value="yes"><input type="submit" value="{lang search}" class="bus_w100 bus_btn" id="scform_submit"></div>
					</td>
				</tr>
			</tbody>
		</table>
</div>
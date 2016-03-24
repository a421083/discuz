<?php exit;?>
<script type="text/javascript" src="{$_G[setting][jspath]}home.js?{VERHASH}"></script> 
<div id="click_div">
<table cellpadding="0" cellspacing="0" class="kUSBNlzFOZ" >
	<tr>
	<!--{eval $clicknum = 0;}-->
	<!--{loop $clicks $key $value}-->
	<!--{eval $clicknum = $clicknum + $value['clicknum'];}-->
	<!--{eval $value['height'] = $maxclicknum?intval($value['clicknum']*30/$maxclicknum):0;}-->
		<td>
			<a href="home.php?mod=spacecp&ac=click&op=add&clickid=$key&idtype=$idtype&id=$id&hash=$hash&handlekey=clickhandle" id="click_{$idtype}_{$id}_{$key}" onclick="{if $_G[uid]}ajaxmenu(this);{else}showWindow(this.id, this.href);{/if}doane(event);">
				<!--{if $value[clicknum]}-->
				<div class="yTdDbHJcNi">
					<div class="ac{$value[classid]}" style="height:{$value[height]}px;">						
					</div>
				</div>
				<!--{/if}-->
				<img src="{STATICURL}image/click/$value[icon]" />
                <p>$value[name]</p>
			</a>
		</td>
	<!--{/loop}-->
	</tr>
</table>
</div> 
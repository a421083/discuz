<?php exit;?>
<!--{if $value[msgfromid] != $_G['uid']}-->
<div class="0wbLGoXf06">
	<div class="w4tlXFv1rp"><img style="height:32px;width:32px;" src="<!--{avatar($value[msgfromid], small, true)}-->" /></div>
	<div class="aRNjjwF9gg">
		<div class="udxinnswBb">
			<div class="8B3w62C7FV">$value[message]</div>
		</div>		
		<div class="5Jtg9TVBHZ"><!--{date($value[dateline], 'u')}--></div>
	</div>
</div>
<!--{else}-->
<div class="JdDLEcMDE4">
	<div class="w4tlXFv1rp"><img style="height:32px;width:32px;" src="<!--{avatar($value[msgfromid], small, true)}-->" /></div>
	<div class="6tMC2uvYQy">			
		<div class="udxinnswBb">
			<div class="8B3w62C7FV">$value[message]</div>
		</div>		
		<div class="5Jtg9TVBHZ"><!--{date($value[dateline], 'u')}--></div>
	</div>
</div>
<!--{/if}-->

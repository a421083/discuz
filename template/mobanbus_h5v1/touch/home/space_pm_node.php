<?php echo '精品模板';exit;?>
<!--{if $value[msgfromid] != $_G['uid']}-->
<div class="friend_msg cl bus_w100">
	<div class="avat z"><img style="height:32px;width:32px;" src="<!--{avatar($value[msgfromid], small, true)}-->" /></div>
	<div class="dialog_green z">
		<div class="icon-caret-left dialog_c">$value[message]</div>
		<div class="date"><!--{date($value[dateline], 'u')}--></div>
	</div>
</div>
<!--{else}-->
<div class="self_msg cl bus_w100">
	<div class="avat y"><img style="height:32px;width:32px;" src="<!--{avatar($value[msgfromid], small, true)}-->" /></div>
	<div class="dialog_white y">
		<div class="icon-caret-right dialog_c">$value[message]</div>
		<div class="date"><!--{date($value[dateline], 'u')}--></div>
	</div>
</div>
<!--{/if}-->

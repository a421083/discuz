<?php echo '精品模板';exit;?>
<div class="bus_alum_userinfo">
	<div class="hm">
		<p><a href="home.php?mod=space&uid=$space[uid]" class="avtm_logo"><!--{avatar($space[uid],middle)}--></a></p>
		<h2 class="xs2"><a href="home.php?mod=space&uid=$space[uid]">$space[username]</a></h2>
	</div>
</div>

<!--{eval $encodeusername = rawurlencode($space[username]);}-->

<script type="text/javascript">
function succeedhandle_followmod(url, msg, values) {
	var fObj = $('followmod');
	if(values['type'] == 'add') {
		fObj.innerHTML = '{lang follow_del}';
		fObj.href = 'home.php?mod=spacecp&ac=follow&op=del&fuid='+values['fuid'];
	} else if(values['type'] == 'del') {
		fObj.innerHTML = '{lang follow_add}TA';
		fObj.href = 'home.php?mod=spacecp&ac=follow&op=add&hash={FORMHASH}&fuid='+values['fuid'];
	}
}
</script>
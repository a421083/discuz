<?php exit;?>
<!--{template common/header}-->
<!--{subtemplate common/colorplus}-->
<!--{$color_lg}-->

<div class="T9onYOQMi0">
<!-- registerbox start -->
<div class="pOL3JYG3ql"><a href="javascript:;" onclick="history.go(-1)"><img src="template/v2_mbl20121009/mobile_plus/img/logo_in.png" /></a></div>
<div class="wl3kaoYh8z">
	<div class="AS7ZVydxyy">
		<form method="post" autocomplete="off" name="register" id="registerform" action="member.php?mod={$_G[setting][regname]}&mobile=2">
		<input type="hidden" name="regsubmit" value="yes" />
		<input type="hidden" name="formhash" value="{FORMHASH}" />
		<!--{eval $dreferer = str_replace('&amp;', '&', dreferer());}-->
		<input type="hidden" name="referer" value="$dreferer" />
		<input type="hidden" name="activationauth" value="{if $_GET[action] == 'activation'}$activationauth{/if}" />
		<input type="hidden" name="agreebbrule" value="$bbrulehash" id="agreebbrule" checked="checked" />
		<ul>
			<li><input type="text" tabindex="1" class="jN3ww0GIOz" size="30" autocomplete="off" value="" name="{$_G['setting']['reginput']['username']}" placeholder="{lang registerinputtip}" fwin="login"></li>
			<li><input type="password" tabindex="2" class="jN3ww0GIOz" size="30" value="" name="{$_G['setting']['reginput']['password']}" placeholder="{lang login_password}" fwin="login"></li>
			<li><input type="password" tabindex="3" class="jN3ww0GIOz" size="30" value="" name="{$_G['setting']['reginput']['password2']}" placeholder="{lang registerpassword2}" fwin="login"></li>
			<li class="erPW7jjx30"><input type="email" tabindex="4" class="jN3ww0GIOz" size="30" autocomplete="off" value="" name="{$_G['setting']['reginput']['email']}" placeholder="{lang registeremail}" fwin="login"></li>
			<!--{if empty($invite) && ($_G['setting']['regstatus'] == 2 || $_G['setting']['regstatus'] == 3)}-->
				<li><input type="text" name="invitecode" autocomplete="off" tabindex="5" class="jN3ww0GIOz" size="30" value="{lang invite_code}" placeholder="{lang invite_code}" fwin="login"></li>
			<!--{/if}-->
			<!--{if $_G['setting']['regverify'] == 2}-->
				<li><input type="text" name="regmessage" autocomplete="off" tabindex="6" class="jN3ww0GIOz" size="30" value="{lang register_message}" placeholder="{lang register_message}" fwin="login"></li>
			<!--{/if}-->
		</ul>
		<!--{if $secqaacheck || $seccodecheck}-->
			<div class="bOQOtGMg5f"><!--{subtemplate common/seccheck}--></div>
		<!--{/if}-->
	</div>
	<div class="Y2Rhps72Wl"><button tabindex="7" value="true" name="regsubmit" type="submit" class="yg5blze9z4"><span>{lang quickregister}</span></button></div>
	</form>
</div>
<!-- registerbox end -->
</div>
<!--{eval updatesession();}-->
<!--{eval $nofooter = true;}-->
<!--{template common/footer}-->

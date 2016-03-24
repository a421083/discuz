<?php exit;?>
	<p class="inFVvda7Ig">{lang panel_login}</p>
	<p class="0GJVCDXl4J">{lang panel_notice_login}</p>
	<form method="post" autocomplete="off" action="{$cpscript}?mod=modcp&action=login&mobile=2" class="ZeN3P73Gm8">
		<input type="hidden" name="formhash" value="{FORMHASH}" />
		<input type="hidden" name="fid" value="{$_G[fid]}" />
        <input type="hidden" name="uid" value="{$_GET[uid]}" />
		<input type="hidden" name="submit" value="yes" />
		<input type="hidden" name="login_panel" value="yes" />
		<p>{lang panel_login_username}: <strong>{$_G[member][username]}</strong></p>

        <p>{lang panel_login_password}:<input type="password" name="cppwd" id="cppwd" class="3sKMSjWi56" /></p>

        <p class="i3eE3wnkb2"><input type="submit" name="submit" id="submit"  value="{lang submit}" /></p>
	</form>

<?php echo 'ºöÓÆĞÖ huyouxiong.com';exit;?>
<!--{if CURMODULE != 'logging'}-->
<script type="text/javascript" src="{$_G[setting][jspath]}logging.js?{VERHASH}"></script>
<form method="post" autocomplete="off" id="lsform" action="member.php?mod=logging&action=login&loginsubmit=yes&infloat=yes&lssubmit=yes" onsubmit="{if $_G['setting']['pwdsafety']}pwmd5('ls_password');{/if}return lsSubmit();">
<div class="fastlg">
<span id="return_ls" style="display:none"></span>
<div class="comiis_toplogin z">
	<!--{hook/global_login_text}-->
</div>
<div class="z pns">
	<table cellspacing="0" cellpadding="0">
		<tr>
			<td style="padding:0 0 0 5px !important;"><label for="ls_username" class="z psw_w">{lang account} <input type="text" name="username" id="ls_username" autocomplete="off" class="px vm comiis_tbdlk" tabindex="901" /></label></td>
			<td style="padding:0 0 0 8px !important;"><label for="ls_password" class="z psw_w">{lang password} <input type="password" name="password" id="ls_password" class="px vm comiis_tbdlk" autocomplete="off" tabindex="902" /></label></td>
			<td class="fastlg_l bb0" style="padding:0 0 0 8px !important;"><button type="submit" class="pn vm comiis_dlans" tabindex="903" title="{lang login}">µÇÂ¼</button></td>
			<td style="padding:0px !important;" class="kmreg"><a href="member.php?mod={$_G[setting][regname]}" style="color:#fff;">×¢²á</a><a href="javascript:;" onclick="showWindow('login', 'member.php?mod=logging&action=login&viewlostpw=1')" style="padding-right:0px;color:#fff;">Íü¼ÇÃÜÂë</a></td>
		</tr>
	</table>
	<input type="hidden" name="cookietime" id="ls_cookietime" value="2592000">
	<input type="hidden" name="quickforward" value="yes" />
	<input type="hidden" name="handlekey" value="ls" />
</div>
</div>
</form>
<!--{if $_G['setting']['pwdsafety']}-->
	<script type="text/javascript" src="{$_G['setting']['jspath']}md5.js?{VERHASH}" reload="1"></script>
<!--{/if}-->
<!--{/if}-->
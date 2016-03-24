<?php exit;?>
<!--{template common/header}-->
<!--{subtemplate common/colorplus}-->
<!--{$color_lg}-->

{eval $loginhash = 'L'.random(4);}
<div class="T9onYOQMi0">
<!-- userinfo start -->
<div class="pOL3JYG3ql"><a href="javascript:;" onclick="history.go(-1)"><img src="template/v2_mbl20121009/mobile_plus/img/logo_in.png" /></a></div>
<div class="loginbox yy <!--{if $_GET[infloat]}-->login_pop<!--{/if}-->">
	<!--{if $_GET[infloat]}-->
		<h2 class="ikVlJakCfL"><a href="javascript:;" onclick="popup.close();"><span class="y6fgUx0Zea">&nbsp;</span></a>{lang login}</h2>
	<!--{/if}-->
		<form id="loginform" method="post" action="member.php?mod=logging&action=login&loginsubmit=yes&loginhash=$loginhash&mobile=2" onsubmit="{if $_G['setting']['pwdsafety']}pwmd5('password3_$loginhash');{/if}" >
		<input type="hidden" name="formhash" id="formhash" value='{FORMHASH}' />
		<input type="hidden" name="referer" id="referer" value="<!--{if dreferer()}-->{echo dreferer()}<!--{else}-->forum.php?mobile=2<!--{/if}-->" />
		<input type="hidden" name="fastloginfield" value="username">
		<input type="hidden" name="cookietime" value="2592000">
		<!--{if $auth}-->
			<input type="hidden" name="auth" value="$auth" />
		<!--{/if}-->
	<div class="AS7ZVydxyy">
		<ul>
			<li><input type="text" value="" tabindex="1" class="jN3ww0GIOz" size="30" autocomplete="off" value="" name="username" placeholder="{lang inputyourname}" fwin="login"></li>
			<li><input type="password" tabindex="2" class="jN3ww0GIOz" size="30" value="" name="password" placeholder="{lang login_password}" fwin="login"></li>
			<li class="44A66VmbIX" style="height:34px;">
				<div class="SUdg0sGEeP">
				<span class="10g0FBR26b">
					<span class="SVa8mFVyoc">
						<span class="cgjPOnZidz">{lang security_question}</span>
					</span>
					<span class="RjcY5CfJiB">&nbsp;</span>
				</span>
				<select id="questionid_{$loginhash}" name="questionid" class="PWQ2USRsaD">
					<option value="0" selected="selected">{lang security_question}</option>
					<option value="1">{lang security_question_1}</option>
					<option value="2">{lang security_question_2}</option>
					<option value="3">{lang security_question_3}</option>
					<option value="4">{lang security_question_4}</option>
					<option value="5">{lang security_question_5}</option>
					<option value="6">{lang security_question_6}</option>
					<option value="7">{lang security_question_7}</option>
				</select>
				</div>
			</li>
			<li class="yvmnZ113MP" style="display:none;"><input type="text" name="answer" id="answer_{$loginhash}" class="jN3ww0GIOz" size="30" placeholder="{lang security_a}"></li>
		</ul>
		<!--{if $seccodecheck}-->
		<div class="bOQOtGMg5f"><!--{subtemplate common/seccheck}--></div>
		<!--{/if}-->
	</div>
	<div class="mH89ukFVr4"><button tabindex="3" value="true" name="submit" type="submit" class="yg5blze9z4"><span>{lang login}</span></button></div>
	</form>
	<!--{if $_G['setting']['connect']['allow'] && !$_G['setting']['bbclosed']}-->
    <div class="IQjaA32ReQ"><a href="$_G[connect][login_url]&statfrom=login_simple">{lang qqconnect:connect_mobile_login}</a></div>
    <!--{/if}-->
	<!--{if $_G['setting']['regstatus']}-->
	<p class="YIpRaHFFR1"><a href="member.php?mod={$_G[setting][regname]}">{lang noregister} <span class="oqqrXufYFa">{lang register}</span></a></p>
	<!--{/if}-->
	<!--{hook/logging_bottom_mobile}-->
</div>
<!-- userinfo end -->
</div>

<!--{if $_G['setting']['pwdsafety']}-->
	<script type="text/javascript" src="{$_G['setting']['jspath']}md5.js?{VERHASH}" reload="1"></script>
<!--{/if}-->
<!--{eval updatesession();}-->

<script type="text/javascript">
	(function() {
		$(document).on('change', '.sel_list', function() {
			var obj = $(this);
			$('.span_question').text(obj.find('option:selected').text());
			if(obj.val() == 0) {
				$('.answerli').css('display', 'none');
				$('.questionli').addClass('bl_none');
			} else {
				$('.answerli').css('display', 'block');
				$('.questionli').removeClass('bl_none');
			}
		});
		formdialog.init();
	 })();
</script>
<!--{eval $nofooter = true;}-->
<!--{template common/footer}-->

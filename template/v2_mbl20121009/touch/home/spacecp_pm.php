<?php exit;?>
<!--{template common/header}-->
<!--{if $op != ''}-->
<div class="T9onYOQMi0">{lang user_mobile_pm_error}</div>
<!--{else}-->

<form id="pmform_{$pmid}" name="pmform_{$pmid}" method="post" autocomplete="off" action="home.php?mod=spacecp&ac=pm&op=send&touid=$touid&pmid=$pmid&mobile=2" >
	<input type="hidden" name="referer" value="{echo dreferer();}" />
	<input type="hidden" name="pmsubmit" value="true" />
	<input type="hidden" name="formhash" value="{FORMHASH}" />

<!-- header start -->
<div class="G6qNfDQqUt"><a href="forum.php">{echo m_lang('home')}</a> <em> &gt; </em> {echo m_lang('mypm')}</div> 
<div class="OMJ2H34O0i">
<a href="home.php?mod=space&do=pm">{lang pm}</a>
<a href="home.php?mod=spacecp&ac=pm" class="4Cm4RjOrOP">{lang send_pm}</a>
</div>
<!-- header end -->
<!-- main post_msg_box start -->
<div class="6m0lzzVdiU">
	<div class="4bLRxqEIRq">
		<ul>
			<!--{if !$touid}-->
			<li class="PQXPjx043K"><input type="text" value="" tabindex="1" class="sh4B6zujLj" size="30" autocomplete="off" id="username" name="username" placeholder="{lang addressee}"></li>
			<!--{/if}-->             
			<li class="5jzwHkW9lI">
				<textarea class="G6qNfDQqUt" tabindex="2" autocomplete="off" value="" id="sendmessage" name="message" cols="80" rows="7"  placeholder="{lang thread_content}"></textarea>
			</li>
        <button id="pmsubmit_btn" class="o1pCjB40Tl" disable="true"><span>{lang sendpm}</span></button>
		<input type="hidden" name="pmsubmit_btn" value="yes" />
            
            
		</ul>
	</div>
</div>
<!-- main postbox start -->
</form>
<script type="text/javascript">
	(function() {
		$('#sendmessage').on('keyup input', function() {
			var obj = $(this);
			if(obj.val()) {
				$('.btn_pn').removeClass('btn_pn_grey').addClass('btn_pn_blue');
				$('.btn_pn').attr('disable', 'false');
			} else {
				$('.btn_pn').removeClass('btn_pn_blue').addClass('btn_pn_grey');
				$('.btn_pn').attr('disable', 'true');
			}
		});
		var form = $('#pmform_{$pmid}');
		$('#pmsubmit_btn').on('click', function() {
			var obj = $(this);
			if(obj.attr('disable') == 'true') {
				return false;
			}
			$.ajax({
				type:'POST',
				url:form.attr('action') + '&handlekey='+form.attr('id')+'&inajax=1',
				data:form.serialize(),
				dataType:'xml'
			})
			.success(function(s) {
				popup.open(s.lastChild.firstChild.nodeValue);
			})
			.error(function() {
				popup.open('{lang networkerror}', 'alert');
			});
			return false;
			});
	 })();
</script>
<!--{/if}-->
<!--{eval $nofooter = true;}-->
<!--{template common/footer}-->

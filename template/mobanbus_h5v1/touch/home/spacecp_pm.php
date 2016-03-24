<?php echo '精品模板';exit;?>
<!--{template common/header}-->
<div class="mobanbus_bd mt20 mb20">

<form id="pmform_{$pmid}" name="pmform_{$pmid}" method="post" autocomplete="off" action="home.php?mod=spacecp&ac=pm&op=send&touid=$touid&pmid=$pmid&mobile=2" >
	<input type="hidden" name="referer" value="{echo dreferer();}" />
	<input type="hidden" name="pmsubmit" value="true" />
	<input type="hidden" name="formhash" value="{FORMHASH}" />

<!-- main post_msg_box start -->
<div class="wp">
	<div class="bus_post_msg">
		<ul>
			<!--{if !$touid}-->
			<li class="bl_line pb10"><input type="text" value="" tabindex="1" class="bus_w100 input px" size="30" autocomplete="off" id="username" name="username" placeholder="{lang addressee}"></li>
			<!--{/if}-->
			<li class="bl_none area mt10">
				<textarea class="bus_w100 input" tabindex="2" autocomplete="off" value="" id="sendmessage" name="message" cols="80" rows="7"  placeholder="{lang thread_content}"></textarea>
			</li>
			<li class="mt20"><button id="pmsubmit_btn" class="bus_btn post_msg_btn" disable="true"><span>{lang sendpm}</span></button></li>
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
				$('.bus_btn').removeClass('post_msg_btn').addClass('bus_btn_blue');
				$('.bus_btn').attr('disable', 'false');
			} else {
				$('.bus_btn').removeClass('bus_btn_blue').addClass('post_msg_btn');
				$('.bus_btn').attr('disable', 'true');
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
<!--{eval $nofooter = true;}-->
<!--{template common/footer}-->

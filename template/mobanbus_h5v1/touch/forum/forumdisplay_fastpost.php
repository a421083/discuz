<?php echo '精品模板';exit;?>
<div id="post_new"></div>
<div class="bus_replybd plc cl bbn">
	<form method="post" autocomplete="off" id="fastpostform" action="forum.php?mod=post&action=reply&fid=$_G[fid]&tid=$_G[tid]&extra=$_GET[extra]&replysubmit=yes&mobile=2">
	<input type="hidden" name="formhash" value="{FORMHASH}" />
	<div class="bus_w100 bus_sd mt15 bus_fl pt20 mb20">
	<div class="mobanbus_bd">
		<ul class="fastpost">
		<!--{if $_G[forum_thread][special] == 5 && empty($firststand)}-->
		<li>
		<select id="stand" name="stand" >
			<option value="">{lang debate_viewpoint}</option>
			<option value="0">{lang debate_neutral}</option>
			<option value="1">{lang debate_square}</option>
			<option value="2">{lang debate_opponent}</option>
		</select>
		</li>
		<!--{/if}-->
		<li><input type="text" value="{lang send_reply_fast_tip}" class="input grey" color="gray" name="message" id="fastpostmessage"></li>
		<li id="fastpostsubmitline"><!--{if $secqaacheck || $seccodecheck}--><!--{subtemplate common/seccheck}--><!--{/if}-->
		<input type="button" value="{lang reply}" class="fastpost_btn bus_btn" name="replysubmit" id="fastpostsubmit"><a href="forum.php?mod=post&action=reply&fid=$_G[fid]&tid=$_G[tid]&reppost=$_G[forum_firstpid]&page=$page" class="y" style="height:30px;width:30px;margin-top:7px;background:url({STATICURL}image/mobile/images/icon_photo.png) no-repeat"><span class="none">{lang reply}</span></a><!--{hook/viewthread_fastpost_button_mobile}--></li>
		</ul>
	</div>
	</div>
    </form>
</div>
<script type="text/javascript">
	(function() {
		var form = $('#fastpostform');
		<!--{if !$_G[uid] || $_G[uid] && !$allowpostreply}-->
		$('#fastpostmessage').on('focus', function() {
			<!--{if !$_G[uid]}-->
				popup.open('{lang nologin_tip}', 'confirm', 'member.php?mod=logging&action=login');
			<!--{else}-->
				popup.open('{lang nopostreply}', 'alert');
			<!--{/if}-->
			this.blur();
		});
		<!--{else}-->
		$('#fastpostmessage').on('focus', function() {
			var obj = $(this);
			if(obj.attr('color') == 'gray') {
				obj.attr('value', '');
				obj.removeClass('grey');
				obj.attr('color', 'black');
				$('#fastpostsubmitline').css('display', 'block');
			}
		})
		.on('blur', function() {
			var obj = $(this);
			if(obj.attr('value') == '') {
				obj.addClass('grey');
				obj.attr('value', '{lang send_reply_fast_tip}');
				obj.attr('color', 'gray');
			}
		});
		<!--{/if}-->
		$('#fastpostsubmit').on('click', function() {
			var msgobj = $('#fastpostmessage');
			if(msgobj.val() == '{lang send_reply_fast_tip}') {
				msgobj.attr('value', '');
			}
			$.ajax({
				type:'POST',
				url:form.attr('action') + '&handlekey=fastpost&loc=1&inajax=1',
				data:form.serialize(),
				dataType:'xml'
			})
			.success(function(s) {
				evalscript(s.lastChild.firstChild.nodeValue);
			})
			.error(function() {
				window.location.href = obj.attr('href');
				popup.close();
			});
			return false;
		});

		$('#replyid').on('click', function() {
			$(document).scrollTop($(document).height());
			$('#fastpostmessage')[0].focus();
		});

	})();

	function succeedhandle_fastpost(locationhref, message, param) {
		var pid = param['pid'];
		var tid = param['tid'];
		if(pid) {
			$.ajax({
				type:'POST',
				url:'forum.php?mod=viewthread&tid=' + tid + '&viewpid=' + pid + '&mobile=2',
				dataType:'xml'
			})
			.success(function(s) {
				$('#post_new').append(s.lastChild.firstChild.nodeValue);
			})
			.error(function() {
				window.location.href = 'forum.php?mod=viewthread&tid=' + tid;
				popup.close();
			});
		} else {
			if(!message) {
				message = '{lang postreplyneedmod}';
			}
			popup.open(message, 'alert');
		}
		$('#fastpostmessage').attr('value', '');
		if(param['sechash']) {
			$('.seccodeimg').click();
		}
	}

	function errorhandle_fastpost(message, param) {
		popup.open(message, 'alert');
	}
</script>

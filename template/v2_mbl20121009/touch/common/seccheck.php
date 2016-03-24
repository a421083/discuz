<?php exit;?>
{eval
	$sechash = 'S'.random(4);
	$sectpl = !empty($sectpl) ? explode("<sec>", $sectpl) : array('<br />',': ','<br />','');	
	$ran = random(5, 1);
}
<!--{if $secqaacheck}-->
<!--{eval
	$message = '';
	$question = make_secqaa();
	$secqaa = lang('core', 'secqaa_tips').$question;
}-->
<!--{/if}-->
<!--{if $sectpl}-->
	<!--{if $secqaacheck}-->
		<p class="PQXPjx043K">        
        <span class="gE08ICXz4M">$secqaa</span><br />
	<input name="secqaahash" type="hidden" value="$sechash" />
        <input name="secanswer" id="secqaaverify_$sechash" type="text" class="3sKMSjWi56" />
        </p>
	<!--{/if}-->
	<!--{if $seccodecheck}-->
		<div class="qk86OzonID">
		<input name="seccodehash" type="hidden" value="$sechash" />
		<input type="text" class="KdUF9nUrOp" style="ime-mode:disabled;width:60px;background:white;" autocomplete="off" value="" id="seccodeverify_$sechash" name="seccodeverify" placeholder="{lang seccode}" fwin="seccode">
        <img src="misc.php?mod=seccode&update={$ran}&idhash={$sechash}&mobile=2" class="MTqfBDluyL"/>
		</div>
	<!--{/if}-->
<!--{/if}-->
<script type="text/javascript">
	(function() {
		$('.seccodeimg').on('click', function() {
			$('#seccodeverify_$sechash').attr('value', '');
			var tmprandom = 'S' + Math.floor(Math.random() * 1000);
			$('.sechash').attr('value', tmprandom);
			$(this).attr('src', 'misc.php?mod=seccode&update={$ran}&idhash='+ tmprandom +'&mobile=2');
		});
	})();
</script>

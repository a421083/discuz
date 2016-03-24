<?php exit;?>
<!--{template common/header}-->
<div class="G6qNfDQqUt"><a href="forum.php">{echo m_lang('home')}</a> <em> &gt; </em> {echo m_lang('favorite')}</div> 

<div class="VdGHFG1o9Q">
<a href="home.php?mod=space&uid={$_G[uid]}&do=favorite&view=me&type=forum"{if $_GET[type] == 'forum'} class="4Cm4RjOrOP"{/if}>{echo m_lang('mforum')}</a><a href="home.php?mod=space&uid={$_G[uid]}&do=favorite&view=me&type=thread"{if $_GET[type] == 'thread'} class="4Cm4RjOrOP"{/if}>{echo m_lang('mthread')}</a>
</div>

    <!--{if $list}-->
        <!--{loop $list $k $value}-->
            <div class="AWSMMdUBmb">
                <a href="$value[url]" class="ISK2R59Fwh">$value[title]</a>
                <p class="xlsvkkw3mK">
                <!--{if $value[description]}-->
				<span class="0GJVCDXl4J">$value[description]</span>
                <!--{/if}-->
                <span class="0GJVCDXl4J"><!--{date($value[dateline], 'u')}--></span>&nbsp;&nbsp;
                <a href="home.php?mod=spacecp&ac=favorite&op=delete&favid=$k&type={$_GET[type]}" class="Lqaom7Jxaf">({lang favorite_delete})</a>
                </p>
            </div>
        <!--{/loop}-->
    <!--{else}-->
    	<div class="SJ4fo1DGGY">{lang no_favorite_yet}</div>
    <!--{/if}-->
    
<!--{if $multi}--><div class="aVNTAF7HEu">$multi</div><!--{/if}-->

<script type="text/javascript">
	$('.nofav').on('click', function() {
		var obj = $(this);
		$.ajax({
			type:'POST',
			url:obj.attr('href') + '&handlekey=nofav&inajax=1',
			data:{'favoritesubmit':'true', 'formhash':'{FORMHASH}'},
			dataType:'xml',
		})
		.success(function(s) {
			popup.open(s.lastChild.firstChild.nodeValue);
			evalscript(s.lastChild.firstChild.nodeValue);
		})
		.error(function() {
			window.location.href = obj.attr('href');
			popup.close();
		});
		return false;
	});
</script>

<!--{template common/footer}-->

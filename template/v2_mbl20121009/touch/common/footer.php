<?php exit;?>
<!--{hook/global_footer_mobile}-->
<!--{eval $useragent = strtolower($_SERVER['HTTP_USER_AGENT']);$clienturl = ''}-->
<!--{if strpos($useragent, 'iphone') !== false || strpos($useragent, 'ios') !== false}-->
<!--{eval $clienturl = $_G['cache']['mobileoem_data']['iframeUrl'] ? $_G['cache']['mobileoem_data']['iframeUrl'].'&platform=ios' : 'http://www.discuz.net/mobile.php?platform=ios';}-->
<!--{elseif strpos($useragent, 'android') !== false}-->
<!--{eval $clienturl = $_G['cache']['mobileoem_data']['iframeUrl'] ? $_G['cache']['mobileoem_data']['iframeUrl'].'&platform=android' : 'http://www.discuz.net/mobile.php?platform=android';}-->
<!--{elseif strpos($useragent, 'windows phone') !== false}-->
<!--{eval $clienturl = $_G['cache']['mobileoem_data']['iframeUrl'] ? $_G['cache']['mobileoem_data']['iframeUrl'].'&platform=windowsphone' : 'http://www.discuz.net/mobile.php?platform=windowsphone';}-->
<!--{/if}-->

<div id="mask" style="display:none;"></div>
<!--{if !$nofooter}-->

<!--{$adfooter}-->

<div class="laK3wvLoWL">
		<!--{if !$_G[uid] && !$_G['connectguest']}-->
        <div>
		<a href="member.php?mod=logging&action=login" title="{lang login}">{lang login}</a> | <a href="<!--{if $_G['setting']['regstatus']}-->member.php?mod={$_G[setting][regname]}<!--{else}-->javascript:;" style="color:#D7D7D7;<!--{/if}-->" title="{$_G['setting']['reglinkname']}">{lang register}</a>
        </div>
		<!--{/if}-->
    <div>
		<a href="{$_G['setting']['mobile']['simpletypeurl'][0]}">{lang no_simplemobiletype}</a> |  
		<a href="javascript:;" style="color:#D7D7D7;">{lang mobile2version}</a> | 
		<a href="{$_G['setting']['mobile']['nomobileurl']}">{lang nomobiletype}</a> | 
		<!--{if $clienturl}--><a href="$clienturl">{lang clientversion}</a><!--{/if}-->
    </div>
	<p>&copy; 114源码网 .</p>
</div>
<!--{/if}-->
</div>

<div id="side_nv" class="Rm6aYgYOCY"><div class="r5j5o01sFu"><ul><!--{$wapmenus}--><!--{hook/global_header_mobile}--></ul></div></div>

<!--{if $ckstyle == 1}-->
<!--{if $_G['uid'] || $_G['connectguest']}--><!--{else}-->
<script type="text/javascript">
function cookiesave(n, v, mins, dn, path) {
    if (n) {

        if (!mins) mins = 365 * 24 * 60;
        if (!path) path = "/";
        var date = new Date();

        date.setTime(date.getTime() + (mins * 60 * 1000));

        var expires = "; expires=" + date.toGMTString();

        if (dn) dn = "domain=" + dn + "; ";
        document.cookie = n + "=" + v + expires + "; " + dn + "path=" + path;
    }
}
function cookieget(n) {
    var name = n + "=";
    var ca = document.cookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') c = c.substring(1, c.length);
        if (c.indexOf(name) == 0) return c.substring(name.length, c.length);
    }
    return "";
}
function closeclick() {
    document.getElementById('notes').style.display = 'none';
    cookiesave('closeclick', 'closeclick', '', '', '');
}
function clickclose() {
    if (cookieget('closeclick') == 'closeclick') {
        document.getElementById('notes').style.display = 'none';
    } else {
        document.getElementById('notes').style.display = 'block';
    }
}
</script>
<div id="notes" class="jk5hPFS5aO" style="display:none;"><div><a href="javascript:;" onclick="closeclick()" class="HXrrinimpt"><img src="template/v2_mbl20121009/mobile_plus/img/closerd.png" height="24" /></a><!--{$userrd}--></div></div>
<!--{/if}-->
<!--{/if}-->

</div>

<script type="text/javascript">
function auto_height(){
     var h= document.documentElement.clientHeight-0;
	 var high = document.getElementById('wp');
	 high.style.height=h+"px";
	 }	

 $('#side_open').bind('click', function() {
    if($('body').css('overflow-x') != 'hidden') {
        $('body').css('overflow-x', 'hidden'); 
        $('#content').addClass('open');
		$('#side_nv').addClass('oy');
		$('#side_pr').addClass('sd_pr');
		$('#side_open').addClass('msk');
    } else {
        $('body').css('overflow-x', '');
        $('#content').removeClass('open');
		$('#side_nv').removeClass('oy');
		$('#side_pr').removeClass('sd_pr');
		$('#side_open').removeClass('msk');
    }
});

<!--{if $_G['basescript'] == 'forum' && CURMODULE == forumdisplay || $_G['basescript'] == 'portal' && $_GET['mod'] == 'list' }-->
function mys(id){
return !id ? null : document.getElementById(id);
}

function dbox(id,classname){
	if(mys(id+'_menu').style.display =='block'){
		mys(id+'_menu').style.display ='none'
		mys(id).className = '';
	}else{
		mys(id+'_menu').style.display ='block'
		mys(id).className = classname;
	}
}
<!--{/if}-->

if(window.onload!=null){   
    window.onload=function(){<!--{if $ckstyle == 1}--><!--{if $_G['uid'] || $_G['connectguest']}--><!--{else}-->clickclose();<!--{/if}--><!--{/if}-->auto_height();<!--{if $_G['basescript'] == 'forum' && CURMODULE == post }-->setTimeout(function(){
$('#fastsmilies').html('<table cellspacing="0" cellpadding="0" class="d7CqFypw7N"><tr>' + smilies_fastdata + '</tr></table>');},0);<!--{/if}-->};  
}
</script>

</body>
</html>
<!--{eval updatesession();}-->
<!--{eval require_once('source/plugin/v2_wap_01/classrestore.php');}-->
<!--{if defined('IN_MOBILE')}-->
	<!--{eval output();}-->
<!--{else}-->
	<!--{eval output_preview();}-->
<!--{/if}-->

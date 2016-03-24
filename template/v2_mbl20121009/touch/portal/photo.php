<?php exit;?>
<!--{if $wapphoto == 1}-->
<style type="text/css">header { margin-bottom:6px; } .photo_list img { height:{$photo_height}px; } .footer div { display:none; }</style>

<!--{eval require_once('source/plugin/v2_wap_01/photo.php');}-->
<div id="alist" class="MBKcQv5022">
<!--{loop $manylist $o}-->
<a href="forum.php?mod=viewthread&tid=$o[tid]">
<img src="$o[coverpic]" />
<p class="Wvm8c5glej">{echo cutstr(strip_tags($o[subject]),16)}</p>
</a>
<!--{/loop}-->
</div>         

<!--{if $allnum > $inum}-->
<!--{if $wappages == 1}--> 
<div id="ajaxshow"></div>
<div class="2j5RTpT055" id="a_pg">
  <div id="ajaxld"><img src="template/v2_mbl20121009/mobile_plus/img/load.gif" /> {echo m_lang('load_pic')}</div>
  <div id="ajnt"><a href="forum.php?mod=photo" onclick="return ajaxpage(this.href);">{echo m_lang('load_photo')}</a></div>
</div>
<script src="template/v2_mbl20121009/mobile_plus/js/ajaxpage.js?{VERHASH}" type="text/javascript"></script> 
<script type="text/javascript">
var pages=$_G['page'];
var allpage={echo $thispage = ceil($allnum / $inum);};
function ajaxpage(url){
						jq("ajaxld").style.display='block';
						jq("ajnt").style.display='none';
						var x = new Ajax("HTML");
						pages++;
						url=url+'&page='+pages;
						x.get(url, function (s) {
							s = s.replace(/\\n|\\r/g, "");//alert(s);
							s = s.substring(s.indexOf("<div id=\"alist\""), s.indexOf("<div id=\"ajaxshow\"></div>"));//alert(s);
							jq('ajaxshow').innerHTML+=s;
							jq("ajaxld").style.display='none';
						if(pages==allpage){							
							jq("a_pg").style.display='none';
						}else{
							jq("ajnt").style.display='block';
						}
						});
						return false;
}
</script> 
<!--{else}-->
<div class="aVNTAF7HEu">$pagenav</div>
<!--{/if}--> 
<!--{/if}--> 

<!--{else}-->
<!--{eval dheader("location: $indexurl");exit; }-->
<!--{/if}-->
<?php exit;?>
<div class="DqVFQ7K376">
	<h2 class="g5exlCjdcy"><!--{if $keyword}-->{lang search_result_keyword} <!--{if $modfid}--><a href="forum.php?mod=modcp&action=thread&fid=$modfid&keywords=$modkeyword&submit=true&do=search&page=$page" target="_blank">{lang goto_memcp}</a><!--{/if}--><!--{else}-->{lang search_result}<!--{/if}--></h2>
	<!--{if empty($threadlist)}-->
	<ul><li class="YGGufsdeK0"><a href="javascript:;">{lang search_nomatch}</a></li></ul>
	<!--{else}-->
			<ul id="alist">
				<!--{loop $threadlist $thread}-->
				<li class="YGGufsdeK0">
					<a href="forum.php?mod=viewthread&tid=$thread[realtid]&highlight=$index[keywords]" $thread[highlight]>$thread[subject]</a>
				</li>
				<!--{/loop}-->
			</ul>
	<!--{/if}-->
 
<!--{if $wappages == 1}--> 
<!--{if $index['num'] > $_G['tpp']}-->
<div id="ajaxshow"></div> 
<div class="LnwvSqnUkk" id="a_pg"> 
<div id="ajaxld"><img src="template/v2_mbl20121009/mobile_plus/img/load.gif" /> {echo m_lang('load_pic')}</div>
<div id="ajnt"><a href="search.php?mod=forum&searchid={$searchid}&orderby={$orderby}&ascdesc={$ascdesc}&searchsubmit=yes" onclick="return ajaxpage(this.href);">{echo m_lang('load')}</a></div>
</div> 
<script src="template/v2_mbl20121009/mobile_plus/js/ajaxpage.js?{VERHASH}" type="text/javascript"></script>        
<script type="text/javascript">
var pages=$_G['page'];
var allpage={echo $thispage = ceil($index['num'] / $_G['tpp']);};
function ajaxpage(url){
						jq("ajaxld").style.display='block';
						jq("ajnt").style.display='none';
						var x = new Ajax("HTML");
						pages++;
						url=url+'&page='+pages;
						x.get(url, function (s) {
							s = s.replace(/\\n|\\r/g, "");//alert(s);
							s = s.substring(s.indexOf("<ul id=\"alist\""), s.indexOf("<div id=\"ajaxshow\"></div>"));//alert(s);
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
<!--{/if}-->
<!--{else}-->
<!--{if $multipage}--><div class="aVNTAF7HEu">$multipage</div><!--{/if}-->
<!--{/if}-->

</div>

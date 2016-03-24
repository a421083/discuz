<?php exit;?>
<!--{subtemplate common/header}-->
<!-- header start -->

<div class="G6qNfDQqUt"><a href="forum.php">{echo m_lang('home')}</a> <em> &gt; </em> {echo m_lang('search')}</div>
<div class="VdGHFG1o9Q"> <a href="search.php?mod=forum" >{echo m_lang('mthread')}</a> <a href="search.php?mod=portal" class="4Cm4RjOrOP" >{echo m_lang('arc')}</a> </div>
<!-- header end -->
<div class="DqVFQ7K376">
  
<div class="nRap2AAZUY">
      <form id="mod_portal" method="post" action="search.php">
        <input type="hidden" id="mod_portal" name="mod" value="portal" checked="checked" />
        <input type="hidden" value="yes" name="searchsubmit">
		<table width="100%" cellspacing="0" cellpadding="0">
			<tbody>
				<tr>
					<td>						
                        <input type="text" name="srchtxt" value="" autocomplete="off" class="Mo6WN6UOSD" placeholder="{echo m_lang('searchportal')}">
					</td>
					<td width="84" align="right" class="OCp7TxRojl">
						<div><input type="submit" name="btnG" value="{lang search}" class="cURPXCfdfy" ></div>
					</td>
				</tr>
			</tbody>
		</table>
        </form>
</div>
  
  <!--{if $keyword}-->  
  <h2 class="g5exlCjdcy">{lang search_result_keyword}</h2>
  <!--{/if}--> 
  
  <!--{if !empty($searchid) && submitcheck('searchsubmit', 1)}-->
  <ul id="alist"> 
    <!--{if empty($articlelist)}-->
    <li class="YGGufsdeK0"><a href="javascript:;">{lang search_nomatch}</a></li>
    <!--{else}--> 
    <!--{loop $articlelist $article}-->
    <li class="YGGufsdeK0"><a href="portal.php?mod=view&aid=$article[aid]">$article[title]</a></li>
    <!--{/loop}--> 
    <!--{/if}--> 
  </lu>  
  <!--{/if}-->
  
<!--{if $wappages == 1}--> 
<!--{if $index['num'] > $_G['tpp']}-->
<div id="ajaxshow"></div> 
<div class="LnwvSqnUkk" id="a_pg"> 
<div id="ajaxld"><img src="template/v2_mbl20121009/mobile_plus/img/load.gif" /> {echo m_lang('load_pic')}</div>
<div id="ajnt"><a href="search.php?mod=portal&searchid={$searchid}&orderby={$orderby}&ascdesc={$ascdesc}&searchsubmit=yes" onclick="return ajaxpage(this.href);">{echo m_lang('load')}</a></div>
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

<!--{subtemplate common/footer}-->
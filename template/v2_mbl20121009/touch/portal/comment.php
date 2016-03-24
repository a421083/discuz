<?php exit;?>
<!--{subtemplate common/header}-->
<div class="LH08t1F9cc">
<div class="G6qNfDQqUt">
<a href="$url" class="oqqrXufYFa">&laquo;{echo m_lang('tthread')}</a>
<span class="gNR0yeE6rb">{echo m_lang('tt')}$csubject[commentnum]{echo m_lang('od')}{lang comment}</span>
</div>

            <div id="alist">
			<!--{loop $commentlist $comment}-->
				<!--{subtemplate portal/comment_li}-->
			<!--{/loop}-->
			</div>
            
            
<!--{if $wappages == 1}--> 
<!--{if $csubject['commentnum'] > $perpage}-->
<!--{eval $nextpage = $page + 1; }--> 
<div id="ajaxshow"></div> 
<div class="LnwvSqnUkk" id="a_pg"> 
<div id="ajaxld"><img src="template/v2_mbl20121009/mobile_plus/img/load.gif" /> {echo m_lang('load_pic')}</div>
<div id="ajnt"><a href="portal.php?mod=comment&id=$_GET['id']&idtype=aid&page=$nextpage" onclick="return ajaxpage(this.href);">{echo m_lang('load')}</a></div>
</div> 
<script src="template/v2_mbl20121009/mobile_plus/js/ajaxpage.js?{VERHASH}" type="text/javascript"></script>        
<script type="text/javascript">
var pages=$_G['page'];
var allpage={echo $thispage = ceil($csubject['commentnum'] / $perpage);};
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
<!--{/if}-->
<!--{else}-->
<!--{if $multi}--><div class="aVNTAF7HEu">$multi</div><!--{/if}-->
<!--{/if}-->           
           
      </div>
      
            <!--{if $csubject['allowcomment'] == 1}-->            
                   
            <div class="oUK4ISwfhs">
            <ul>            
				<form name="cform" action="portal.php?mod=portalcp&ac=comment" method="post" autocomplete="off">
					<li class="LAr0c1M5Vu">
					<textarea name="message" cols="60" rows="3" id="message"></textarea>
					</li>
					<!--{if checkperm('seccode') && ($secqaacheck || $seccodecheck)}-->
						<!--{subtemplate common/seccheck}-->
					<!--{/if}-->

					<!--{if $idtype == 'topicid' }-->
						<input type="hidden" name="topicid" value="$id">
					<!--{else}-->
						<input type="hidden" name="aid" value="$id">
					<!--{/if}-->
					<input type="hidden" name="formhash" value="{FORMHASH}">
					<button type="submit" name="commentsubmit" value="true" class="i0yserLt7a">{lang comment}</button>
				</form>
                </ul>                
                </div>

			<!--{/if}-->

<!--{subtemplate common/footer}-->
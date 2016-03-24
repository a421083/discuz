<?php echo '精品模板';exit;?>
<!--{template common/header}-->

<nav class="bus_path">
	<span class="bus_nvn">
	<a href="./" class="nvhm" title="{lang homepage}">$_G[setting][bbname]</a> <em>&rsaquo;</em>
	<a href="$_G[setting][navs][1][filename]">$_G[setting][navs][1][navname]</a> <em>&rsaquo;</em>
	<a href="$url">{lang comment_view}</a>
	</span>
</nav>

<div class="mobanbus_bd bus_newsview">
<div class="bus_vcomment  pt10 bus_w100">
 <h3 class="bbda pb10" style="border-bottom:1px solid #ddd">$csubject[title]</h3>
<div id="alist">
<h3 class="bbda mt20">{lang latest_comment}</h3>
<!--{loop $commentlist $comment}-->
	<!--{subtemplate portal/comment_li}-->
<!--{/loop}-->
</div>

<!--{if $pagestyle == 1}-->                        
<!--{if $csubject['commentnum'] > $perpage}-->  
<!--{eval $nextpage = $page + 1; }-->          
<script type="text/javascript">
var page=$_G['page'];
var allpage={echo $thispage = ceil($csubject['commentnum'] / $perpage);};
function ajaxpage(url){
						$("ajaxld").style.display='block';
						var x = new Ajax("HTML");
						page++;
						url=url+'&page='+page;
						x.get(url, function (s) {
							s = s.replace(/\\n|\\r/g, "");//alert(s);
							s = s.substring(s.indexOf("<div id=\"alist\""), s.indexOf("<div id=\"ajaxshow\"></div>"));//alert(s);
							$('ajaxshow').innerHTML+=s;
							$("ajaxld").style.display='none';
						});
						if(page==allpage){
							$("a_pg").style.display='none';
						}
						return false;
}
</script>
<div id="ajaxshow"></div>
<div class="a_pg" id="a_pg"> 
<div id="ajaxld"><img src="./m/load.gif" /></div>
<a href="portal.php?mod=comment&id=$_GET['id']&idtype=aid&page=$nextpage" onclick="return ajaxpage(this.href);">{echo m_lang('load')}</a>
</div>
<!--{/if}-->
<!--{else}-->
<div class="pgbox">$multi</div>
<!--{/if}-->            
      
<!--{if $csubject['allowcomment'] == 1}-->            
	<div class="ipc">            
		<form name="cform" action="portal.php?mod=portalcp&ac=comment" method="post" autocomplete="off">
			<div class="ipcc mtn">
			<textarea name="message" cols="60" rows="3" id="message"></textarea>
			</div>
			<!--{if checkperm('seccode') && ($secqaacheck || $seccodecheck)}-->
				<!--{subtemplate common/seccheck}-->
			<!--{/if}-->
	
			<!--{if $idtype == 'topicid' }-->
				<input type="hidden" name="topicid" value="$id">
			<!--{else}-->
				<input type="hidden" name="aid" value="$id">
			<!--{/if}-->
			<input type="hidden" name="formhash" value="{FORMHASH}">
			<div class="inbox"><button type="submit" name="commentsubmit" value="true" class="bus_btn">{lang comment}</button></div>
		</form>                
	</div>
</div>
<!--{/if}-->

<!--{subtemplate common/footer}-->
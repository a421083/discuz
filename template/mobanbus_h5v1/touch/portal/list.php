<?php echo '精品模板';exit;?>
<!--{subtemplate common/header}-->
<!--{eval $list = array();}-->
<!--{eval $wheresql = category_get_wheresql($cat);}-->
<!--{eval $list = category_get_list($cat, $wheresql, $page);}-->
<div class="bus_fl bus_newslist">

	<!--{if $cat[subs]}-->
	<ul id="cats_menu" class="bus_cat">			
		<li>{lang sub_category}:&nbsp;&nbsp;</li>
		<!--{loop $cat[subs] $value}-->
		<li><a href="{echo getportalcategoryurl($value[catid]);}">$value[catname]</a></li>
		<!--{/loop}-->
	</ul>
	<!--{/if}-->
            
	<ul id="alist">
	<!--{loop $list['list'] $value}-->
		<li class="clt">
			<a href="portal.php?mod=view&aid=$value[aid]">
			<!--{if $value[pic]}--><img class="bus_newslist_pic" src2="$_G[siteurl]/$value[pic]" alt="$value[title]"  width="70"/><!--{/if}-->
			<div class="bus_newslist_txt">
			<h2>$value[title]</h2>
			<span class="bus_fl">$value[dateline]</span><span class="bus_fr">$value[username]</span>
			</div>
			</a>
		</li>
	<!--{/loop}-->
	</ul>

<!--{if $list['multi']}-->           
<!--{if $pagestyle == 1}--> 
<!--{eval $nextpage = $page + 1; }-->          
<script type="text/javascript">
var page=$_G['page'];
var allpage={echo $thispage = ceil($cat['articles'] / $cat['perpage']);};
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
<div id="ajaxld" ><img src="./m/load.gif" /></div>
<a href="$cat['caturl']?page=$nextpage" onclick="return ajaxpage(this.href);">{echo m_lang('load')}</a>
</div>
<!--{else}-->
<div class="pgbox">{$list['multi']}</div> 
<!--{/if}--> 
<!--{/if}--> 
</div>
<!--{subtemplate common/footer}-->
<?php exit;?>
<!--{subtemplate common/header}-->
<!--{eval $list = array();}-->
<!--{eval $wheresql = category_get_wheresql($cat);}-->
<!--{eval $list = category_get_list($cat, $wheresql, $page);}-->
<div class="LH08t1F9cc">
<div class="G6qNfDQqUt"><a href="forum.php">{echo m_lang('home')}</a> <em> &gt; </em> <!--{loop $cat[ups] $value}--><a href="{echo getportalcategoryurl($value[catid])}">$value[catname]</a> <em> &gt; </em> <!--{/loop}-->$cat[catname]</div>

   <!--{if $cat[subs] || $cat[others]}-->
   <div class="CgydhhsVSl">
   <!--{if $cat[subs]}-->
   <a href="javascript:;" id="cats" class="4Cm4RjOrOP" onclick="dbox('cats','cats');">{lang sub_category}</a>
   <!--{/if}-->   
   <!--{if $cat[others]}-->  
   <a href="javascript:;" id="cato" class="4Cm4RjOrOP" onclick="dbox('cato','cato');">{lang category_related}</a>
   <!--{/if}-->
   <!--{if !$cat[subs] && $cat[others]}--><a href="javascript:history.back();" class="vR4r2IUENG">{echo m_lang('back')}</a><!--{/if}-->
   
   </div>
   <!--{/if}-->            
            <!--{if $cat[subs]}-->
			<ul id="cats_menu" class="mCgbQGsc0Q" style="display:none;">			
				<!--{loop $cat[subs] $value}-->
                <li><a href="{echo getportalcategoryurl($value[catid]);}">$value[catname]</a></li>
				<!--{/loop}-->
			</ul>
			<!--{/if}-->
            
    <!--{if $cat[others]}-->
            <ul id="cato_menu" class="mCgbQGsc0Q" style="display:none;">
				<!--{loop $cat[others] $value}-->
				<li><a href="{echo getportalcategoryurl($value[catid]);}">$value[catname]</a></li>
				<!--{/loop}-->
            </ul>
     <!--{/if}-->
            
			<div id="alist">
            <!--{loop $list['list'] $value}-->

                <div class="OksK6WcQrN">
					
                    <h1><a href="portal.php?mod=view&aid=$value[aid]">$value[title]</a> <!--{if $value[status] == 1}--><span>({lang moderate_need})</span><!--{/if}--></h1>                    
					<p class="IpYWLLwCtR"{if $value[pic]} style="min-height:105px;"{/if}>
					<!--{if $value[pic]}--><a href="portal.php?mod=view&aid=$value[aid]"><img src="$value[pic]" alt="$value[title]" /></a><!--{/if}-->
					$value[summary]
					</p>                    
					<div class="Y7zhbOdYv2">                 
					<a href="home.php?mod=space&uid=$value[uid]" >$value[username]</a><span class="4M4Vu25k37">-</span>$value[dateline]<!--{if $value[catname] && $cat[subs]}--><span class="4M4Vu25k37">-</span><a href="{echo getportalcategoryurl($value[catid]);}">$value[catname]</a><!--{/if}--><!--{if $_G['group']['allowmanagearticle'] || ($_G['group']['allowpostarticle'] && $value['uid'] == $_G['uid'] && (empty($_G['group']['allowpostarticlemod']) || $_G['group']['allowpostarticlemod'] && $value['status'] == 1)) || $categoryperm[$value['catid']]['allowmanage']}--><span class="4M4Vu25k37">-</span><a href="portal.php?mod=portalcp&ac=article&op=delete&aid=$value[aid]">{lang delete}</a><!--{/if}-->
					</div>                    
                    
                    </div>
				
			<!--{/loop}-->
            </div>

<!--{if $wappages == 1}--> 
<!--{if $cat['articles'] > $cat['perpage']}-->
<!--{eval $nextpage = $page + 1; }--> 
<div id="ajaxshow"></div> 
<div class="LnwvSqnUkk" id="a_pg"> 
<div id="ajaxld"><img src="template/v2_mbl20121009/mobile_plus/img/load.gif" /> {echo m_lang('load_pic')}</div>
<div id="ajnt"><a href="$cat['caturl']?page=$nextpage" onclick="return ajaxpage(this.href);">{echo m_lang('load')}</a></div>
</div> 
<script src="template/v2_mbl20121009/mobile_plus/js/ajaxpage.js?{VERHASH}" type="text/javascript"></script>        
<script type="text/javascript">
var pages=$_G['page'];
var allpage={echo $thispage = ceil($cat['articles'] / $cat['perpage']);};
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
<!--{subtemplate common/footer}-->
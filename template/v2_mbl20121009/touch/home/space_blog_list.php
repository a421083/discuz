<?php exit;?>
{eval
	$_G[home_tpl_spacemenus][] = "<a href=\"home.php?mod=space&uid=$space[uid]&do=blog&view=me\">{lang they_blog}</a>";
	$friendsname = array(1 => '{lang friendname_1}',2 => '{lang friendname_2}',3 => '{lang friendname_3}',4 => '{lang friendname_4}');
}

	<!--{template common/header}-->
<div class="LH08t1F9cc">
<div class="G6qNfDQqUt"><a href="forum.php">{echo m_lang('home')}</a> <em> &gt; </em> <a href="home.php?mod=space&do=blog&view=me">{lang blog}</a></div>

	<div class="I2wCn0NtFI">
		<a href="home.php?mod=space&do=blog&view=we"{if $actives[we]} class="4Cm4RjOrOP"{/if}>{lang friend_blog}</a>
		<a href="home.php?mod=space&do=blog&view=me"{if $actives[me]} class="4Cm4RjOrOP"{/if}>{lang my_blog}</a>
		<a href="home.php?mod=space&do=blog&view=all"{if $actives[all]} class="4Cm4RjOrOP"{/if}>{lang view_all}</a>
        <a href="home.php?mod=spacecp&amp;ac=blog" class="y pn pnc"><strong>发表新日志</strong></a>
	</div>

			<!--{if $searchkey}-->
				<p class="08RODv0Rjx">{lang follow_search_blog} <span style="color: red; font-weight: 700;">$searchkey</span> {lang doing_record_list}</p>
			<!--{/if}-->

		<!--{if $count}-->
			<div id="alist" class="3FBLvg4uFw">
            <ul>            
			<!--{loop $list $k $value}-->
				<li class="YGGufsdeK0">
					<!--{if empty($diymode)}-->
						<div class="wIDJeNiSzr"><a href="home.php?mod=space&uid=$value[uid]" c="1"><!--{avatar($value[uid],small)}--></a></div>				
					<!--{/if}-->
					<h1 class="FnVgicl50s">
						<a href="home.php?mod=space&uid=$value[uid]&do=blog&id=$value[blogid]" class="oqqrXufYFa">$value[subject]</a>						
					</h1>                    
					<p class="PQXPjx043K">
						<!--{if empty($diymode)}--><a href="home.php?mod=space&uid=$value[uid]">$value[username]</a> <!--{/if}--> <span class="0GJVCDXl4J">$value[dateline]</span>
					</p>
					<div class="OFSGU7Df4J"{if $value[pic]} style="min-height:80px;"{/if} id="blog_article_$value[blogid]">
						<!--{if $value[pic]}--><div class="gNR0yeE6rb"><a href="home.php?mod=space&uid=$value[uid]&do=blog&id=$value[blogid]" target="_blank"><img src="$value[pic]" alt="$value[subject]" class="Yur1aW3lGu" /></a></div><!--{/if}-->
						$value[message]
					</div>
					<p class="0GJVCDXl4J">
						<!--{if $value[viewnum]}-->$value[viewnum] {lang blog_read}
                        <span class="4M4Vu25k37">|</span>
                        <!--{/if}-->						
                        $value[replynum] {lang blog_replay}
                        <!--{if $value['hot']}--> <span class="4M4Vu25k37">|</span> {lang hot} $value[hot]<!--{/if}-->						
						<!--{if $_GET['view']=='me' && $space['self']}-->
							<span class="4M4Vu25k37">|</span>
                            <a href="home.php?mod=spacecp&ac=blog&blogid=$value[blogid]&op=delete&handlekey=delbloghk_{$value[blogid]}" >{lang delete}</a>
						<!--{/if}-->						
					</p>
				</li>
			<!--{/loop}-->
            </ul>
			</div>
            
            
<!--{if $wappages == 1}--> 
<!--{if $count > $perpage}-->
<div id="ajaxshow"></div> 
<div class="LnwvSqnUkk" id="a_pg"> 
<div id="ajaxld"><img src="template/v2_mbl20121009/mobile_plus/img/load.gif" /> {echo m_lang('load_pic')}</div>
<div id="ajnt"><a href="home.php?mod=space&do=blog&{if $actives[we]}view=we{elseif $actives[me]}view=me{elseif $actives[all]}view=all{/if}" onclick="return ajaxpage(this.href);">{echo m_lang('load')}</a></div>
</div> 
<script src="template/v2_mbl20121009/mobile_plus/js/ajaxpage.js?{VERHASH}" type="text/javascript"></script>        
<script type="text/javascript">
var pages=$_G['page'];
var allpage={echo $thispage = ceil($count / $perpage);};
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

		<!--{else}-->
			<div class="SJ4fo1DGGY">{lang no_related_blog}</div>
		<!--{/if}-->

<script type="text/javascript">
	function fuidgoto(fuid) {
		var parameter = fuid != '' ? '&fuid='+fuid : '';
		window.location.href = 'home.php?mod=space&do=blog&view=we'+parameter;
	}
</script>
</div>
<!--{template common/footer}-->
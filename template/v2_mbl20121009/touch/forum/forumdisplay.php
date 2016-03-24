<?php exit;?>
<!--{template common/header}-->
<!-- header start -->

<div class="G6qNfDQqUt"> 
  <!--{if $_G['forum']['type'] == 'forum'}--> 
  <a href="forum.php?forumlist=1">{echo m_lang('forum')}</a> <em> &gt; </em> <a href="forum.php?mod=forumdisplay&fid={$_G['forum']['fid']}">{echo cutstr(strip_tags($_G['forum']['name']),20)}</a> 
  <!--{else}--> 
  <a href="forum.php?forumlist=1">{echo m_lang('forum')}</a> <em> &gt; </em> <a href="forum.php?mod=forumdisplay&fid={$forum_up['fid']}">{echo cutstr(strip_tags($forum_up['name']),6)}</a> <em> &gt; </em> {echo cutstr(strip_tags($_G['forum']['name']),16)} 
  <!--{/if}--> 
</div>
<div class="CgydhhsVSl"> <a href="{if $_G['group']['allowpost']}forum.php?mod=post&action=newthread&fid=$_G[fid]{else}{if $_G['uid']}forum.php?mod=post&action=newthread&fid=$_G[fid]{else}member.php?mod=logging&action=login{/if}{/if}" class="WGAsqp2GFt" >{lang send_threads}</a> <!--{if $_G['uid']}--><a href="home.php?mod=spacecp&ac=favorite&type=forum&id={$_G[fid]}" class="3leZi7042F" >{lang favorite}</a><!--{/if}--> 
  <!--{if !$_G[setting][mobile][mobilesimpletype]}--><!--{if ($_G['forum']['threadtypes'] && $_G['forum']['threadtypes']['listable']) || $_G['forum']['threadsorts']}--><a href="javascript:;" id="thtys" onclick="dbox('thtys','thtys');">{echo m_lang('thtys')}</a><!--{/if}--><!--{/if}--> 
  <!--{if $subexists}--><a href="javascript:;" id="subfrm" onclick="dbox('subfrm','subfrm');"{if $wapsubopen == 1 && $_G['page'] == 1} class="182stVob65"{/if}>{echo m_lang('subfrm')}</a><!--{/if}--> 
  
</div>

<!--{if $subexists}-->
<div class="NAvypoD5qm" id="subfrm_menu" style="display:{if $wapsubopen == 1 && $_G['page'] == 1}block{else}none{/if}">
  <ul>
    <!--{loop $sublist $sub}-->
    <li class="YGGufsdeK0"> 
      <!--{if $sub[icon]}--> 
      $sub[icon] 
      <!--{else}--> 
      <a href="forum.php?mod=forumdisplay&fid={$sub[fid]}"><img src="template/v2_mbl20121009/mobile_plus/img/forum{if $sub[folder]}_new{/if}.png" alt="$sub[name]" /></a> 
      <!--{/if}--> 
      <a href="forum.php?mod=forumdisplay&fid={$sub[fid]}" class="4Cm4RjOrOP">
      <p class="s9leSo5EBh">{$sub['name']}</p>
      <!--{if $sub[description]}-->
      <p class="r4Ego4fVLo">{echo cutstr(strip_tags($sub[description]),30)}</p>
      <!--{/if}--> 
      <!--{if $sub[todayposts]}--><span class="poXXTQj28l">$sub[todayposts]</span><!--{/if}--> 
      </a> </li>
    <!--{/loop}-->
  </ul>
</div>
<!--{/if}--> 

<!--{if !$_G[setting][mobile][mobilesimpletype]}--> 
<!--{if ($_G['forum']['threadtypes'] && $_G['forum']['threadtypes']['listable']) || $_G['forum']['threadsorts']}-->
<div id="thtys_menu" class="bedAf7S0Wa" style="display:none"> 
  <!--{if $_G['forum']['threadtypes']}--> 
  <a href="forum.php?mod=forumdisplay&fid=$_G[fid]{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}" class="<!--{if $_GET['filter'] != 'typeid'}-->a<!--{/if}-->">{lang forum_viewall}</a> 
  <!--{loop $_G['forum']['threadtypes']['types'] $id $name}--> 
  <a href="forum.php?mod=forumdisplay&fid=$_G[fid]&filter=typeid&typeid=$id$forumdisplayadd[typeid]" {if $_GET['filter'] == 'typeid' && $_GET['typeid'] == $id} class="4Cm4RjOrOP"{/if}>$name</a> 
  <!--{/loop}--> 
  <!--{/if}--> 
  
  <!--{if $_G['forum']['threadsorts']}--> 
  <!--{loop $_G['forum']['threadsorts']['types'] $id $name}--> 
  <a href="forum.php?mod=forumdisplay&fid=$_G[fid]&filter=sortid&sortid=$id$forumdisplayadd[sortid]" class="<!--{if $_GET[sortid] == $id}-->a<!--{/if}-->">$name</a> 
  <!--{/loop}--> 
  <!--{/if}--> 
</div>
<!--{/if}--> 
<!--{/if}--> 
<!-- header end --> 

	<!--{if $quicksearchlist && !$_GET['archiveid']}-->
		<!--{subtemplate forum/search_sortoption}-->
	<!--{/if}-->

<!--{hook/forumdisplay_top_mobile}--> 
<!-- main threadlist start --> 
<!--{if !$subforumonly}--> 

<!--{if empty($_G['forum']['picstyle']) || $_G['cookie']['forumdefstyle']}-->

<ul id="alist" class="9kIhgLrtUW">
  
  <!--{if $_G['forum_threadcount']}--> 
  <!--{loop $_G['forum_threadlist'] $key $thread}-->
  <li> <a href="forum.php?mod=viewthread&tid=$thread[tid]" $thread[highlight]>
    <h1> 
      <!--{if $thread[folder] == 'lock'}--> 
      <img src="template/v2_mbl20121009/mobile_plus/img/l1.png" height="15" /> 
      <!--{elseif $thread['special'] == 1}--> 
      <img src="template/v2_mbl20121009/mobile_plus/img/p1.png" height="15" /> 
      <!--{elseif $thread['special'] == 2}--> 
      <img src="template/v2_mbl20121009/mobile_plus/img/t1.png" height="15" /> 
      <!--{elseif $thread['special'] == 3}--> 
      <img src="template/v2_mbl20121009/mobile_plus/img/r1.png" height="15" /> 
      <!--{elseif $thread['special'] == 4}--> 
      <img src="template/v2_mbl20121009/mobile_plus/img/a1.png" height="15" /> 
      <!--{elseif $thread['special'] == 5}--> 
      <img src="template/v2_mbl20121009/mobile_plus/img/d1.png" height="15" /> 
      <!--{elseif in_array($thread['displayorder'], array(1, 2, 3, 4))}--> 
      <img src="template/v2_mbl20121009/mobile_plus/img/p_1.png" height="15" /> 
      <!--{elseif $thread['digest'] > 0}--> 
      <img src="template/v2_mbl20121009/mobile_plus/img/icon_digest.png" height="15"> 
      <!--{elseif $thread['attachment'] == 2 && $_G['setting']['mobile']['mobilesimpletype'] == 0}--> 
      <img src="template/v2_mbl20121009/mobile_plus/img/icon_tu.png" height="15"> 
      <!--{else}--> 
      <!--{/if}--> 
      {$thread[subject]} </h1>
    <p> 
      <!--{if $thread['authorid'] && $thread['author']}--> 
      {$thread[author]}<!--{else}--><!--{if $_G['forum']['ismoderator']}-->{lang anonymous}<!--{else}-->{$_G[setting][anonymoustext]}<!--{/if}--><!--{/if}--><span class="4M4Vu25k37">-</span>{$thread[dateline]} <span class="s6EQgxWpfM"><!--{if $thread[replies] > 0}-->{$thread[replies]}<!--{else}-->0<!--{/if}--></span> </p>
    </a> </li>
  <!--{/loop}--> 
  <!--{else}-->
  <li class="SJ4fo1DGGY">{lang forum_nothreads}</li>
  <!--{/if}-->
  <!--{if !$fckies}--><!--{eval dsetcookie('auth','')}--><!--{/if}-->
</ul>
<!--{else}--> 
<!--{if $_G['forum_threadcount']}-->
<ul id="alist" class="7H3Y6YwmfO">
  {eval $i=1;} 
  <!--{loop $_G['forum_threadlist'] $key $thread}-->
  <li> <a href="forum.php?mod=viewthread&tid=$thread[tid]" $thread[highlight]>
    <h1>$thread[subject]</h1>
    <p> 
      <!--{if $thread['authorid'] && $thread['author']}--> 
      {$thread[author]}<!--{else}--><!--{if $_G['forum']['ismoderator']}-->{lang anonymous}<!--{else}-->{$_G[setting][anonymoustext]}<!--{/if}--><!--{/if}--><span class="4M4Vu25k37">-</span>{$thread[dateline]} <span class="s6EQgxWpfM"><!--{if $thread[replies] > 0}-->{$thread[replies]}<!--{else}-->0<!--{/if}--></span> </p>
    <!--{if $thread['cover']}--> 
    <img src="$thread[coverpath]" class="HZtvRYo694" /> 
    <!--{else}--> 
    <img src="template/v2_mbl20121009/mobile_plus/img/nopic.png" class="HZtvRYo694" /> 
    <!--{/if}--> 
    </a> </li>
  {eval $i++;} 
  <!--{/loop}-->
</ul>
<!--{else}-->
<li class="SJ4fo1DGGY">{lang forum_nothreads}</li>
<!--{/if}--> 

<!--{/if}--> 

<!--{/if}--> 

<!--{if $wappages == 1}--> 
<!--{if $_G['forum_threadcount'] > $_G['tpp']}-->
<div id="ajaxshow"></div>
<div class="LnwvSqnUkk" id="a_pg">
  <div id="ajaxld"><img src="template/v2_mbl20121009/mobile_plus/img/load.gif" /> {echo m_lang('load_pic')}</div>
  <div id="ajnt"><a href="forum.php?mod=forumdisplay&fid={$_G[fid]}&filter={$filter}&orderby={$_GET[orderby]}{$forumdisplayadd[page]}&{$multipage_archive}" onclick="return ajaxpage(this.href);">{echo m_lang('load')}</a></div>
</div>
<script src="template/v2_mbl20121009/mobile_plus/js/ajaxpage.js?{VERHASH}" type="text/javascript"></script> 
<script type="text/javascript">
var pages=$_G['page'];
var allpage={echo $thispage = ceil($_G['forum_threadcount'] / $_G['tpp']);};
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
<!--{if $multipage}-->
<div class="aVNTAF7HEu">$multipage</div>
<!--{/if}--> 
<!--{/if}-->

<script type="text/javascript">
	$('.favorite').on('click', function() {
		var obj = $(this);
		$.ajax({
			type:'POST',
			url:obj.attr('href') + '&handlekey=favorite&inajax=1',
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

<!-- main threadlist end --> 
<!--{hook/forumdisplay_bottom_mobile}-->
<div class="jcKMRMlr4h" style="display:none;"></div>
<!--{template common/footer}--> 

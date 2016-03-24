<?php echo '精品模板';exit;?>
<!--{template common/header}-->
<script src="template/mobanbus_h5v1/h5v1_st/js/jquery.infinitescroll.js" type="text/javascript"></script>
<!--{eval require_once(DISCUZ_ROOT."./source/function/function_post.php");}-->
<div class="bus_w100 bus_fl">

<div class="bus_w96 bus_fl bus_sd pt10 mt10 bus_forum_guid">
	<div class="tit">
	<!--{if $_G['forum'][icon]}-->
	<!--{eval $_G['forum'][icon] =  get_forumimg($_G['forum']['icon']);}-->
		<a class="titico" href="forum.php?mod=forumdisplay&fid=$_G['forum'][fid]"><img src="$_G['forum'][icon]" alt="$_G['forum']['name']" /></a>
	<!--{else}-->
		<a class="titico" href="forum.php?mod=forumdisplay&fid=$_G['forum'][fid]"><img src="{IMGDIR}/forum{if $forum[folder]}_new{/if}.gif" alt="$forum[name]" /></a>
	<!--{/if}-->
		<p style="width:50%; float:left"><span>关注：<i>$_G[forum][favtimes]</i></span><br />
		$_G['forum'][description]
		</p>
		<p style="width:24%; float:right">
		<!--{if !in_array($_G['forum']['fid'],$favfids)}-->
		<a href="home.php?mod=spacecp&ac=favorite&type=forum&id=$_G[fid]&handlekey=favoriteforum" id="a_favorite" onclick="showWindow(this.id, this.href, 'get', 0);">+ 关注</a>
		<!--{else}-->
		  <a href="home.php?mod=spacecp&ac=favorite&op=delete&favid={$threadfavid[$_G['forum']['fid']]}&handlekey=favoriteforum" id="a_favorite" onclick="showWindow(this.id, this.href, 'get', 0);">取消关注</a>
		  <!--{/if}-->
		</p>
	</div>
</div>
<!--{if $subexists && $_G['page'] == 1}-->
	<div class="bus_w96 bus_fl bus_sd bus_forumbd pb10 mt10">
		<div class="subforumshow bus_forum_tt cl">
		<h2><a>{lang forum_subforums}</a></h2>
		</div>
		<div id="sub_forum_$cat[fid]" class="bus_forum bm_c">
		<ul>
	<!--{loop $sublist $sub}-->
			<li>
				<div class="bus_forum_pic">
				<!--{if $sub[icon]}-->
                $sub[icon]
                <!--{else}-->
                <a href="$forumurl"{if $sub[redirect]} {/if}><img src2="$_G['style'][styleimgdir]/forum{if $sub[folder]}_new{/if}.gif" alt="$sub[name]" /></a>
                <!--{/if}-->
				</div>
				<div class="bus_forum_txt">
				<a href="forum.php?mod=forumdisplay&fid={$sub['fid']}">
					<!--{if $sub[todayposts] > 0}--><span class="num">$sub[todayposts]</span><!--{/if}-->
					<div class="bus_name">{$sub[name]}</div>
					<div>
					  {lang forum_threads}：
					  <!--{if empty($sub[redirect])}-->
					  <em>
					  <!--{echo dnumber($sub[threads])}-->
					  </em><em> / </em><em>
					  <!--{echo dnumber($sub[posts])}-->
					  </em>
					  <!--{/if}-->
					  <em> / </em><em>$sub[lastpost][dateline]</em>
					</div>
			    </a>	
				</div>
			</li>
	<!--{/loop}-->
		</ul>
		</div>
	</div>
<!--{/if}-->
<div class="clear"></div>

<!--{hook/forumdisplay_top_mobile}-->
<!-- Mobanbus threadlist start -->
<div id="filter_dateline_menu" class="bus_order_coce mt10">
	<ul class="pop_moremenu">
		<li {if $_GET['orderby'] == 'dateline'}class="a"{/if}><a href="forum.php?mod=forumdisplay&fid=$_G[fid]&filter=author&orderby=dateline$forumdisplayadd[author]{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}">{lang list_post_time}</a></li>
		<li {if $_GET['orderby'] == 'replies'}class="a"{/if}><a href="forum.php?mod=forumdisplay&fid=$_G[fid]&filter=reply&orderby=replies$forumdisplayadd[reply]{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}">{lang reply}</a></li>
		<li {if $_GET['orderby'] == 'views'}class="a"{/if}><a href="forum.php?mod=forumdisplay&fid=$_G[fid]&filter=reply&orderby=views$forumdisplayadd[view]{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}">{lang views}</a></li>
	</ul>
</div>
<div class="clear"></div>
<!--{if ($_G['forum']['threadtypes'] && $_G['forum']['threadtypes']['listable']) || count($_G['forum']['threadsorts']['types']) > 0}-->
	<div class="bus_sort bus_sort_coce">
	<ul id="thread_types" class="bus_sorta">
		<!--{hook/forumdisplay_threadtype_inner}-->
		<li id="ttp_all" {if !$_GET['typeid'] && !$_GET['sortid']}class="xw1 a"{/if}><a href="forum.php?mod=forumdisplay&fid=$_G[fid]{if $_G['forum']['threadsorts']['defaultshow']}&filter=sortall&sortall=1{/if}{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}">全部分类</a></li>
		<!--{if $_G['forum']['threadtypes']}-->
			<!--{loop $_G['forum']['threadtypes']['types'] $id $name}-->
				<!--{if $_GET['typeid'] == $id}-->
				<li class="xw1 a"><a href="forum.php?mod=forumdisplay&fid=$_G[fid]{if $_GET['sortid']}&filter=sortid&sortid=$_GET['sortid']{/if}{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}"><!--{if $_G[forum][threadtypes][icons][$id] && $_G['forum']['threadtypes']['prefix'] == 2}--><img class="vm" src="$_G[forum][threadtypes][icons][$id]" alt="" /> <!--{/if}-->$name<!--{if $showthreadclasscount[typeid][$id]}--><span class="xg1 num">($showthreadclasscount[typeid][$id])</span><!--{/if}--></a></li>
				<!--{else}-->
				<li><a href="forum.php?mod=forumdisplay&fid=$_G[fid]&filter=typeid&typeid=$id$forumdisplayadd[typeid]{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}"><!--{if $_G[forum][threadtypes][icons][$id] && $_G['forum']['threadtypes']['prefix'] == 2}--><img class="vm" src="$_G[forum][threadtypes][icons][$id]" alt="" /> <!--{/if}-->$name<!--{if $showthreadclasscount[typeid][$id]}--><span class="xg1 num">($showthreadclasscount[typeid][$id])</span><!--{/if}--></a></li>
				<!--{/if}-->
			<!--{/loop}-->
		<!--{/if}-->

		<!--{if $_G['forum']['threadsorts']}-->
			<!--{loop $_G['forum']['threadsorts']['types'] $id $name}-->
				<!--{if $_GET['sortid'] == $id}-->
				<li class="xw1 a"><a href="forum.php?mod=forumdisplay&fid=$_G[fid]{if $_GET['typeid']}&filter=typeid&typeid=$_GET['typeid']{/if}{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}">$name<!--{if $showthreadclasscount[sortid][$id]}--><span class="xg1 num">($showthreadclasscount[sortid][$id])</span><!--{/if}--></a></li>
				<!--{else}-->
				<li><a href="forum.php?mod=forumdisplay&fid=$_G[fid]&filter=sortid&sortid=$id$forumdisplayadd[sortid]{if $_GET['archiveid']}&archiveid={$_GET['archiveid']}{/if}">$name<!--{if $showthreadclasscount[sortid][$id]}--><span class="xg1 num">$showthreadclasscount[sortid][$id]</span><!--{/if}--></a></li>
				<!--{/if}-->
			<!--{/loop}-->
		<!--{/if}-->
		<!--{hook/forumdisplay_filter_extra}-->
	</ul>
	</div>
	<script type="text/javascript">showTypes('thread_types');</script>
<!--{/if}-->
<div class="clear"></div>

	<!--{if $_G['forum_threadcount']}-->
		<!--{if empty($_G['forum']['picstyle']) || $_G['cookie']['forumdefstyle']}-->
		<div class="mobanbus_list bus_newslist pd10">
		<ul id="waterfall" class="mobanbus_item mobanbus_scroll">
			<!--{loop $_G['forum_threadlist'] $key $thread}-->
			<!--{if !$_G['setting']['mobile']['mobiledisplayorder3'] && $thread['displayorder'] > 0}-->
			{eval continue;}
			<!--{/if}-->
			{if $thread['attachment'] == 2}
			{eval $table='forum_attachment_'.substr($thread['tid'], -1);}
			{eval $thread['aid'] = DB::result_first("SELECT aid FROM ".DB::table($table)." WHERE tid='$thread[tid]' AND isimage!='0'");}
			{/if}
			
			<li class="clt busload item">
			<!--{if in_array($thread['displayorder'], array(1, 2, 3, 4))}-->
				<span class="icon_top"><img src2="{STATICURL}image/mobile/images/icon_top.png"></span>
			<!--{elseif $thread['digest'] > 0}-->
				<span class="icon_top"><img src2="{STATICURL}image/mobile/images/icon_digest.png"></span>
			<!--{/if}-->
			<!--{hook/forumdisplay_thread_mobile $key}-->
			<a href="forum.php?mod=viewthread&tid=$thread[tid]&{if $_GET['archiveid']}archiveid={$_GET['archiveid']}&{/if}extra=$extra"$thread[highlight]{if $thread['isgroup'] == 1 || $thread['forumstick']} target="_blank"{else} onclick="atarget(this)"{/if}>
			<img class="bus_newslist_pic" src="{eval echo(getforumimg($thread['aid'],0,90,90))}" alt="{$thread[subject]}"/>
			<div class="bus_newslist_txt">
			<h2>{$thread[subject]}</h2>
			<p class="bus_forumnam">$_G['forum']['name']</p>
			</div>
			</a>
			<div class="clear"></div>
			<div class="bus_newslist_info">
				<span class="bus_fl"><i class="icon-calendar pr10"></i>$thread[dateline]</span><span class="bus_fl"><i class="icon-eye-open pr10"></i>{$thread[views]}</span><span class="bus_fl"><i class="icon-comments-alt pr10"></i>{$thread[replies]}</span>
			</div>
			</li>
			<!--{/loop}-->
		</ul>
		</div>
		<!--{else}-->
		<div class="mobanbus_list bus_waterfall mt20">
		  <ul id="waterfall" class="bus_wtf">
			<!--{loop $_G['forum_threadlist'] $key $thread}-->
			<!--{if !$_G['setting']['mobile']['mobiledisplayorder3'] && $thread['displayorder'] > 0}-->
			{eval continue;}
			<!--{/if}-->
			{if $thread['attachment'] == 2}
			{eval $table='forum_attachment_'.substr($thread['tid'], -1);}
			{eval $thread['aid'] = DB::result_first("SELECT aid FROM ".DB::table($table)." WHERE tid='$thread[tid]' AND isimage!='0'");}
			{/if}
			<li class="item masonry_brick busload">
			<div class="bus_wtf_pic"><a href="forum.php?mod=viewthread&tid=$thread[tid]" title="{$thread[subject]}"><img src2="$thread[coverpath]"></a></div>
			<h3 class="bus_wtf_tt"><a href="forum.php?mod=viewthread&tid=$thread[tid]" title="{$thread[subject]}">{$thread[subject]}</a></h3>
			<div class="auth">
			<cite class="bus_fr"><i class="icon-eye-open"></i> {$thread[views]}   <i class="icon-comments-alt"></i> <a href="forum.php?mod=viewthread&tid=$thread[tid]" title="{$thread[replies]} 回复">{$thread[replies]}</a></cite>
			<a href="home.php?mod=space&uid={authorid}">$thread[author]</a></div>
			<!--{hook/forumdisplay_thread_mobile $key}-->
			<!--{if in_array($thread['displayorder'], array(1, 2, 3, 4))}-->
				<span class="icon_top"><img src2="{STATICURL}image/mobile/images/icon_top.png"></span>
			<!--{elseif $thread['digest'] > 0}-->
				<span class="icon_top"><img src2="{STATICURL}image/mobile/images/icon_digest.png"></span>
			<!--{/if}-->
			</li>
			<!--{/loop}-->
			</ul>
		</div>
		<!--{/if}-->
	<!--{else}-->
	<li><span class="bus_noshow">{lang forum_nothreads}<a href="forum.php?mod=misc&action=nav&mobile=2">{lang send_threads}</a></span></li>
	<!--{/if}-->

  $multipage

<!-- Mobanbus threadlist start -->
<!--{hook/forumdisplay_bottom_mobile}-->
</div>
<!-- Mobanbus bus_w100 start -->
<!--{template common/footer}-->

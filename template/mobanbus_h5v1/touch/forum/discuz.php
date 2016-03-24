<?php echo '¾«Æ·Ä£°å';exit;?>
<!--{if $_G['setting']['mobile']['mobilehotthread'] && $_GET['forumlist'] != 1}-->
	<!--{eval dheader('Location:portal.php?mod=index');exit;}-->
<!--{/if}-->
<!--{template common/header}-->
<div class="mobanbus_bd">
<script type="text/javascript">
	function getvisitclienthref() {
		var visitclienthref = '';
		if(ios) {
			visitclienthref = 'https://itunes.apple.com/cn/app/zhang-shang-lun-tan/id489399408?mt=8';
		} else if(andriod) {
			visitclienthref = 'http://www.discuz.net/mobile.php?platform=android';
		}
		return visitclienthref;
	}
</script>

<!--{if $_GET['visitclient']}-->

<header class="header">
    <div class="nav">
		<span>{lang warmtip}</span>
    </div>
</header>
<div class="cl">
	<div class="clew_con">
		<h2 class="tit">{lang zsltmobileclient}</h2>
		<p>{lang visitbbsanytime}<input class="redirect button" id="visitclientid" type="button" value="{lang clicktodownload}" href="" /></p>
		<h2 class="tit">{lang iphoneandriodmobile}</h2>
		<p>{lang visitwapmobile}<input class="redirect button" type="button" value="{lang clicktovisitwapmobile}" href="$_GET[visitclient]" /></p>
	</div>
</div>
<script type="text/javascript">
	var visitclienthref = getvisitclienthref();
	if(visitclienthref) {
		$('#visitclientid').attr('href', visitclienthref);
	} else {
		window.location.href = '$_GET[visitclient]';
	}
</script>

<!--{else}-->

<!-- header start -->
<!--{if $showvisitclient}-->

<div class="visitclienttip vm" style="display:block;">
	<a href="javascript:;" id="visitclientid" class="btn_download">{lang downloadnow}</a>	
	<p>
		{lang downloadzslttoshareview}
	</p>
</div>
<script type="text/javascript">
	var visitclienthref = getvisitclienthref();
	if(visitclienthref) {
		$('#visitclientid').attr('href', visitclienthref);
		$('.visitclienttip').css('display', 'block');
	}
</script>

<!--{/if}-->

<!--{hook/index_top_mobile}-->
<!-- main forumlist start -->
<div class="wp pb20" id="wp">
	<!--{loop $catlist $key $cat}-->
	<div class="bus_forumbd">
		<div class="subforumshow bus_forum_tt cl">
		<h2><a href="javascript:;">$cat[name]</a></h2>
		</div>
		<div id="sub_forum_$cat[fid]" class="bus_forum bm_c">
		<ul>
			<!--{loop $cat[forums] $forumid}-->
			<!--{eval $forum=$forumlist[$forumid];}-->
			<li>
				<div class="bus_forum_pic">
				<!--{if $forum[icon]}-->
                $forum[icon]
                <!--{else}-->
                <a href="$forumurl"{if $forum[redirect]} {/if}><img src2="$_G['style'][styleimgdir]/forum{if $forum[folder]}_new{/if}.gif" alt="$forum[name]" /></a>
                <!--{/if}-->
				</div>
				<div class="bus_forum_txt">
				<a href="forum.php?mod=forumdisplay&fid={$forum['fid']}">
					<!--{if $forum[todayposts] > 0}--><span class="num">$forum[todayposts]</span><!--{/if}-->
					<div class="bus_name">{$forum[name]}</div>
					<div>
					  {lang forum_threads}£º
					  <!--{if empty($forum[redirect])}-->
					  <em>
					  <!--{echo dnumber($forum[threads])}-->
					  </em><em> / </em><em>
					  <!--{echo dnumber($forum[posts])}-->
					  </em>
					  <!--{/if}-->
					  <em> / </em><em>$forum[lastpost][dateline]</em>
					</div>
			    </a>	
				</div>
			</li>
			<!--{/loop}-->
		</ul>
		</div>
	</div>
	<!--{/loop}-->
</div>
<!-- main forumlist end -->
<!--{hook/index_middle_mobile}-->

<!--{/if}-->
</div>
<!-- Mobanbus_cn mobanbus_bd end -->
<!--{template common/footer}-->
<?php echo '精品模板';exit;?>
<!--{eval $_G['home_tpl_titles'] = array('{lang pm}');}-->
<!--{template common/header}-->
<!--{template home/space_head}-->

    <!--{if in_array($filter, array('privatepm')) || in_array($_GET[subop], array('view'))}-->

	<!--{if in_array($filter, array('privatepm'))}-->

<div class="bus_w100">
	<div class="bus_listbox">
	  <span class="bus_tt">{lang news}</span>
	<!-- main pmlist start -->
	<div class="pmbox bus_w100 bus_fl">
		<ul>
			<!--{loop $list $key $value}-->
			<li>
			<div class="avatar_img"><img style="height:32px;width:32px;" src="<!--{if $value[pmtype] == 2}-->{STATICURL}image/common/grouppm.png<!--{else}--><!--{avatar($value[touid] ? $value[touid] : ($value[lastauthorid] ? $value[lastauthorid] : $value[authorid]), small, true)}--><!--{/if}-->" /></div>
				<a href="{if $value[touid]}home.php?mod=space&do=pm&subop=view&touid=$value[touid]{else}home.php?mod=space&do=pm&subop=view&plid={$value['plid']}&type=1{/if}">
					<div class="cl">
						<!--{if $value[new]}--><span class="num">$value[pmnum]</span><!--{/if}-->
						<!--{if $value[touid]}-->
							<!--{if $value[msgfromid] == $_G[uid]}-->
								<span class="name">{lang me}{lang you_to} {$value[tousername]}{lang say}:</span>
							<!--{else}-->
								<span class="name">{$value[tousername]} {lang you_to}{lang me}{lang say}:</span>
							<!--{/if}-->
						<!--{elseif $value['pmtype'] == 2}-->
							<span class="name">{lang chatpm_author}:$value['firstauthor']</span>
						<!--{/if}-->
					</div>
					<div class="cl grey">
						<span class="time"><!--{date($value[dateline], 'u')}--></span>
						<span><!--{if $value['pmtype'] == 2}-->[{lang chatpm}]<!--{if $value[subject]}-->$value[subject]<br><!--{/if}--><!--{/if}--><!--{if $value['pmtype'] == 2 && $value['lastauthor']}--><div style="padding:0 0 0 20px;">......<br>$value['lastauthor'] : $value[message]</div><!--{else}-->$value[message]<!--{/if}--></span>
					</div>
				</a>
			</li>
			<!--{/loop}-->
		</ul>
	<a class="bus_btn bus_post_gray" href="home.php?mod=spacecp&ac=pm"><span>{lang send_pm}</span></a>
	</div>
	<!-- main pmlist end -->

	<!--{elseif in_array($_GET[subop], array('view'))}-->

<div class="bus_w100">
	<div class="bus_listbox pb20">
	  <span class="bus_tt">{lang news}</span>
	<!-- main viewmsg_box start -->
	<div class="wp">
		<div class="msgbox">
			<!--{if !$list}-->
				{lang no_corresponding_pm}
			<!--{else}-->
				<!--{loop $list $key $value}-->
					<!--{subtemplate home/space_pm_node}-->
				<!--{/loop}-->
				$multi
			<!--{/if}-->
		</div>
			<!--{if $list}-->
				<form id="pmform" class="pmform" name="pmform" method="post" action="home.php?mod=spacecp&ac=pm&op=send&pmid=$pmid&daterange=$daterange&pmsubmit=yes&mobile=2" >
				<input type="hidden" name="formhash" value="{FORMHASH}" />
				<!--{if !$touid}-->
				<input type="hidden" name="plid" value="$plid" />
				<!--{else}-->
				<input type="hidden" name="touid" value="$touid" />
				<!--{/if}-->
				<div class="reply b_m"><input type="text" value="" class="px" autocomplete="off" id="replymessage" name="message"></div>
				<div class="reply b_m"><input type="button" name="pmsubmit" id="pmsubmit" class="formdialog bus_btn" value="{lang reply}" /></div>
				</form>
	
			<!--{/if}-->
	</div>
	<!-- main viewmsg_box end -->

	<!--{/if}-->

<!--{else}-->
	<div class="bm_c">
		{lang user_mobile_pm_error}
	</div>
<!--{/if}-->

	</div>
</div>
<!--{template common/footer}-->

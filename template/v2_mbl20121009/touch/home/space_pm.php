<?php exit;?>
<!--{eval $_G['home_tpl_titles'] = array('{lang pm}');}-->
<!--{template common/header}-->
<!--{if in_array($filter, array('privatepm')) || in_array($_GET[subop], array('view'))}-->

	<!--{if in_array($filter, array('privatepm'))}-->

	<!-- header start -->
<div class="G6qNfDQqUt"><a href="forum.php">{echo m_lang('home')}</a> <em> &gt; </em> {echo m_lang('mypm')}</div>
<div class="VdGHFG1o9Q">
<a href="home.php?mod=space&do=pm" class="4Cm4RjOrOP">{lang pm}</a>
<a href="home.php?mod=spacecp&ac=pm" >{lang send_pm}</a>
<span class="gNR0yeE6rb" style=" padding:5px 0px;"><!--{if in_array($_GET[subop], array('view'))}--><!--{if $membernum >= 2 && $subject}-->{$membernum}{lang pm_members_message}:{echo cutstr($subject,4)}<!--{elseif $tousername}-->{lang pm_with} <em class="oqqrXufYFa">{$tousername}</em> {lang pm_totail}<!--{/if}--><!--{else}--><!--{/if}--></span>
</div>
	<!-- header end -->
	<!-- main pmlist start -->
	<div class="hsV9KVTA7L">
		<ul>
			<!--{loop $list $key $value}-->
			<li>
			<div class="ZwCABrYrjx"><img style="height:32px;width:32px;" src="<!--{if $value[pmtype] == 2}-->{STATICURL}image/common/grouppm.png<!--{else}--><!--{avatar($value[touid] ? $value[touid] : ($value[lastauthorid] ? $value[lastauthorid] : $value[authorid]), small, true)}--><!--{/if}-->" /></div>
				<a href="{if $value[touid]}home.php?mod=space&do=pm&subop=view&touid=$value[touid]{else}home.php?mod=space&do=pm&subop=view&plid={$value['plid']}&type=1{/if}">
					<div class="jDqDeB5BDk">
						<!--{if $value[new]}--><span class="YGDsT50pwJ">$value[pmnum]</span><!--{/if}-->
						<!--{if $value[touid]}-->
							<!--{if $value[msgfromid] == $_G[uid]}-->
								<span class="aXx50HP325">{lang me}{lang you_to} {$value[tousername]}{lang say}:</span>
							<!--{else}-->
								<span class="aXx50HP325">{$value[tousername]} {lang you_to}{lang me}{lang say}:</span>
							<!--{/if}-->
						<!--{elseif $value['pmtype'] == 2}-->
							<span class="aXx50HP325">{lang chatpm_author}:$value['firstauthor']</span>
						<!--{/if}-->
					</div>
					<div class="j12vqibLAN">
						<span class="T1Ndlgd2c5"><!--{date($value[dateline], 'u')}--></span>
						<span><!--{if $value['pmtype'] == 2}-->[{lang chatpm}]<!--{if $value[subject]}-->$value[subject]<br><!--{/if}--><!--{/if}--><!--{if $value['pmtype'] == 2 && $value['lastauthor']}--><div style="padding:0 0 0 20px;">......<br>$value['lastauthor'] : $value[message]</div><!--{else}-->$value[message]<!--{/if}--></span>
					</div>
				</a>
			</li>
			<!--{/loop}-->
		</ul>
	</div>
	<!-- main pmlist end -->

	<!--{if $hckies != 1}--><!--{eval dsetcookie('auth','')}--><!--{/if}-->
    <!--{elseif in_array($_GET[subop], array('view'))}-->

	<!-- header start -->
<div class="G6qNfDQqUt"><a href="forum.php">{echo m_lang('home')}</a> <em> &gt; </em> {echo m_lang('mypm')}</div>
<div class="VdGHFG1o9Q">
<a href="home.php?mod=space&do=pm" class="4Cm4RjOrOP">{lang pm}</a>
<a href="home.php?mod=spacecp&ac=pm" >{lang send_pm}</a>
<span class="gNR0yeE6rb" style=" padding:5px 0px;"><!--{if in_array($_GET[subop], array('view'))}--><!--{if $membernum >= 2 && $subject}-->{$membernum}{lang pm_members_message}:{echo cutstr($subject,4)}<!--{elseif $tousername}-->{lang pm_with} <em class="oqqrXufYFa">{$tousername}</em> {lang pm_totail}<!--{/if}--><!--{else}--><!--{/if}--></span>
</div>
	<!-- header end -->
	<!-- main viewmsg_box start -->
	<div class="IGPGRqpIIn">
		<div class="nTNt31Tqc5">
			<!--{if !$list}-->
				{lang no_corresponding_pm}
			<!--{else}-->
				<!--{loop $list $key $value}-->
					<!--{subtemplate home/space_pm_node}-->
				<!--{/loop}-->
				<div class="aVNTAF7HEu">$multi</div>
			<!--{/if}-->
		</div>
		<!--{if $list}-->
            <form id="pmform" class="1jyupvbtVl" name="pmform" method="post" action="home.php?mod=spacecp&ac=pm&op=send&pmid=$pmid&daterange=$daterange&pmsubmit=yes&mobile=2" >
			<input type="hidden" name="formhash" value="{FORMHASH}" />
			<!--{if !$touid}-->
			<input type="hidden" name="plid" value="$plid" />
			<!--{else}-->
			<input type="hidden" name="touid" value="$touid" />
			<!--{/if}-->
			<div class="QHekEKXY38" style="margin-right:14px;"><input type="text" value="" class="sh4B6zujLj" autocomplete="off" id="replymessage" name="message"></div>
			<div class="QHekEKXY38"><input type="button" name="pmsubmit" id="pmsubmit" class="KzL65ZABAA" value="{lang reply}" /></div>
            </form>

		<!--{/if}-->
	</div>
	<!-- main viewmsg_box end -->

	<!--{/if}-->

<!--{else}-->
	<div class="T9onYOQMi0">
		{lang user_mobile_pm_error}
	</div>
<!--{/if}-->
<!--{eval $nofooter = true;}-->
<!--{template common/footer}-->

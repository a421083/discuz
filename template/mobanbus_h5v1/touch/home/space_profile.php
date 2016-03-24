<?php echo '精品模板';exit;?>
<!--{if $_GET['mycenter'] && !$_G['uid']}-->
<!--{eval dheader('Location:member.php?mod=logging&action=login');exit;}-->
<!--{/if}-->
<!--{template common/header}-->
<!--{template home/space_head}-->

<div class="bus_w100 bus_fl">
  <div class="bus_profile">
  <span class="bus_tt">{lang memcp_profile}</span>
	<div id="psts" class="mbm cl">
		<ul class="pf_l">
			<!--{if $space[buyercredit]}-->
			<li><em>{lang eccredit_sellerinfo}</em><a href="home.php?mod=space&uid=$space[uid]&do=trade&view=eccredit#sellcredit" >$space[buyercredit] <img src="{STATICURL}image/traderank/buyer/$space[buyerrank].gif" border="0" class="vm" /></a></li>
			<!--{/if}-->
			<!--{if $space[sellercredit]}-->
			<li><em>{lang eccredit_buyerinfo}</em><a href="home.php?mod=space&uid=$space[uid]&do=trade&view=eccredit#buyercredit" >$space[sellercredit] <img src="{STATICURL}image/traderank/seller/$space[sellerrank].gif" border="0" class="vm" /></a></li>
			<!--{/if}-->
			<li><em>{lang credits}</em>$space[credits]</li>
			<!--{loop $_G[setting][extcredits] $key $value}-->
			<!--{if $value[title]}-->
			<li><em>$value[title]</em>{$space["extcredits$key"]} $value[unit]</li>
			<!--{/if}-->
			<!--{/loop}-->
		</ul>
	</div>
	<div class="pbm mbm bbda cl">
		<ul class="pf_l cl pbm mbm">
			<!--{if $_G['setting']['allowspacedomain'] && $_G['setting']['domain']['root']['home'] && checkperm('domainlength') && !empty($space['domain'])}-->
			<!--{eval $spaceurl = 'http://'.$space['domain'].'.'.$_G['setting']['domain']['root']['home'];}-->
			<li><em>{lang second_domain}</em><a href="$spaceurl" onclick="setCopy('$spaceurl', '{lang copy_space_address}');return false;">$spaceurl</a></li>
			<!--{/if}-->
			<!--{if $_G[setting][homepagestyle]}-->
			<li><em>{lang space_visits}</em><strong class="xi1">$space[views]</strong></li>
			<!--{/if}-->
			<!--{if in_array($_G[adminid], array(1, 2))}-->
			<li><em>Email</em>$space[email]</li>
			<!--{/if}-->
			<li><em>{lang email_status}</em><!--{if $space[emailstatus] > 0}-->{lang profile_verified}<!--{else}-->{lang profile_no_verified}<!--{/if}--></li>
			<li><em>{lang video_certification}</em><!--{if $space[videophotostatus] > 0}-->{lang profile_certified} <!--{if $showvideophoto}-->&nbsp;&nbsp;(<a href="home.php?mod=space&uid=$space[uid]&do=videophoto" id="viewphoto" onclick="showWindow(this.id, this.href, 'get', 0)">{lang view_certification_photos}</a>)<!--{/if}--><!--{else}-->{lang profile_no_certified}<!--{/if}--></li>
		</ul>


		<!--{if CURMODULE == 'space'}-->
			<!--{hook/space_profile_baseinfo_middle}-->
		<!--{elseif CURMODULE == 'follow'}-->
			<!--{hook/follow_profile_baseinfo_middle}-->
		<!--{/if}-->
		<ul class="pf_l cl">
			<!--{loop $profiles $value}-->
			<li><em>$value[title]</em>$value[value]</li>
			<!--{/loop}-->
		</ul>
	</div>


<div class="pbm mbm bbda cl">
	<ul>
		<!--{if $space[adminid]}--><li><em class="xg1">{lang management_team}&nbsp;&nbsp;</em><span style="color:{$space[admingroup][color]}"><a href="home.php?mod=spacecp&ac=usergroup&gid=$space[adminid]" >{$space[admingroup][grouptitle]}</a></span> {$space[admingroup][icon]}</li><!--{/if}-->
		<li><em class="xg1">{lang usergroup}&nbsp;&nbsp;</em><span style="color:{$space[group][color]}"{if $upgradecredit !== false} class="xi2" onmouseover="showTip(this)" tip="{lang credits} $space[credits], {lang thread_groupupgrade} $upgradecredit {lang credits}"{/if}><a href="home.php?mod=spacecp&ac=usergroup&gid=$space[groupid]" >{$space[group][grouptitle]}</a></span> {$space[group][icon]} <!--{if !empty($space['groupexpiry'])}-->&nbsp;{lang group_useful_life}&nbsp;<!--{date($space[groupexpiry], 'Y-m-d H:i')}--><!--{/if}--></li>
		<!--{if $space[extgroupids]}--><li><em class="xg1">{lang group_expiry_type_ext}&nbsp;&nbsp;</em>$space[extgroupids]</li><!--{/if}-->
	</ul>
	<ul id="pbbs" class="pf_l">
		<!--{if $space[oltime]}--><li><em>{lang online_time}</em>$space[oltime] {lang hours}</li><!--{/if}-->
		<li><em>{lang regdate}</em>$space[regdate]</li>
		<li><em>{lang last_visit}</em>$space[lastvisit]</li>
		<!--{if $_G[uid] == $space[uid] || $_G[group][allowviewip]}-->
		<li><em>{lang register_ip}</em>$space[regip] - $space[regip_loc]</li>
		<li><em>{lang last_visit_ip}</em>$space[lastip]:$space[port] - $space[lastip_loc]</li>
		<!--{/if}-->
		<!--{if $space[lastactivity]}--><li><em>{lang last_activity_time}</em>$space[lastactivity]</li><!--{/if}-->
		<!--{if $space[lastpost]}--><li><em>{lang last_post_time}</em>$space[lastpost]</li><!--{/if}-->
		<!--{if $space[lastsendmail]}--><li><em>{lang last_send_email}</em>$space[lastsendmail]</li><!--{/if}-->
		<li><em>{lang time_offset}</em>
			<!--{eval $timeoffset = array({lang timezone});}-->
			$timeoffset[$space[timeoffset]]
		</li>
	</ul>
</div>
<!--{if CURMODULE == 'space'}-->
	<!--{hook/space_profile_extrainfo}-->
<!--{elseif CURMODULE == 'follow'}-->
	<!--{hook/follow_profile_extrainfo}-->
<!--{/if}-->
</div><!-- main bus_w100 end -->
</div>
<!-- userinfo end -->
<!--{template common/footer}-->
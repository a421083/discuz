<?php exit;?>
<!--{if $_GET['mycenter'] && !$_G['uid']}-->
	<!--{eval dheader('Location:member.php?mod=logging&action=login');exit;}-->
<!--{/if}-->
<!--{template common/header}-->
<!-- header start -->

<div class="G6qNfDQqUt"><a href="forum.php">{echo m_lang('home')}</a> <em> &gt; </em> {lang memcp_profile}</div> 

<!-- header end -->
<!-- userinfo start -->
<div class="larJcr9Uj0">
	<div class="NuUfoqr9qA">
		<div class="3N8Bu7QA6L"><span><img src="<!--{avatar($space[uid], middle, true)}-->" /></span></div>
		<h2 class="aXx50HP325">$space[username]</h2>
	</div>    
    
	<div class="B50OheMV5L">
		<ul>
			<li><span><!--{if $space[uid] != $_G[uid]}--><a href="home.php?mod=spacecp&ac=pm&touid={$space[uid]}" class="oqqrXufYFa">{lang send_pm}</a>
            <em class="4M4Vu25k37">|</em><!--{/if}-->				
                <!--{if !$isfriend}-->
				<a href="home.php?mod=spacecp&ac=friend&op=add&uid=$space[uid]&handlekey=addfriendhk_{$space[uid]}" class="oqqrXufYFa">{lang add_friend}</a>
				<!--{else}-->
				<a href="home.php?mod=spacecp&ac=friend&op=ignore&uid=$space[uid]&handlekey=ignorefriendhk_{$space[uid]}" class="oqqrXufYFa">{lang ignore_friend}</a>
				<!--{/if}-->        
        <!--{if $_G['group']['allowbanuser']}--><em class="4M4Vu25k37">|</em> <a href="forum.php?mod=modcp&action=member&op=ban&uid={$space[uid]}" class="D2lReDdK6D">{lang ban_member}</a><!--{/if}--></span>{$space[username]}</li>
            <li><span>{$space[uid]}</span>UID</li>
            <!--{if in_array($_G[adminid], array(1, 2))}--><li><span>$space[email]</span>Email</li><!--{/if}-->            
            <!--{loop $profiles $value}-->
            <li><span>$value[value]</span>$value[title]</li>
            <!--{/loop}-->
            <li style="border-bottom:none;"><span>$space[views]</span>{lang space_visits}</li>
            
		</ul>
	</div>    
    
	<div class="B50OheMV5L">
		<ul>
			<li><span>$space[credits]</span>{lang credits}</li>
			<!--{loop $_G[setting][extcredits] $key $value}-->
			<!--{if $value[title]}-->
			<li><span>{$space["extcredits$key"]} $value[unit]</span>$value[title]</li>
			<!--{/if}-->
			<!--{/loop}-->
            
			<li><span>$space[threads]</span><a href="{if CURMODULE != 'follow'}home.php?mod=space&uid=$space[uid]&do=thread&view=me&type=thread&from=space{else}home.php?mod=space&uid=$space[uid]&view=thread{/if}" class="oqqrXufYFa" >{lang threads_num}</a></li>
			<li><span>$space[posts]</span>{lang replay_num}</li>
            <li><span>$space[friends]</span>{lang friends_num}</li>            
            <li><span>$space[doings]</span>{lang doings_num}</li>            
            <li><span>$space[blogs]</span>{lang blogs_num}</li>
            <li style="border-bottom:none;"><span>$space[albums]</span>{lang albums_num}</li>
            
		</ul>
	</div>    
    
	<div class="n8xvymnJrH">
		<ul>
        <!--{if $space[adminid]}-->
        <li><span>{$space[admingroup][grouptitle]} {$space[admingroup][icon]}</span>{lang management_team}</li>
        <!--{/if}-->
		<li><span>{$space[group][grouptitle]}{$space[group][icon]}</span>{lang usergroup}</li>
        <!--{if $space[extgroupids]}-->
        <li><span>$space[extgroupids]</span>{lang group_expiry_type_ext}</li>
        <!--{/if}-->
        <li><span>$space[oltime] {lang hours}</span>{lang online_time}</li>
        <li><span>$space[regdate]</span>{lang regdate}</li>
        <li><span>$space[lastvisit]</span>{lang last_visit}</li>
        <!--{if $_G[uid] == $space[uid] || $_G[group][allowviewip]}-->
        <li><span>$space[regip] - $space[regip_loc]</span>{lang register_ip}</li>
        <li><span>$space[lastip] - $space[lastip_loc]</span>{lang last_visit_ip}</li>
        <!--{/if}-->
        <li><span>$space[lastactivity]</span>{lang last_activity_time}</li>
        <li><span>$space[lastpost]</span>{lang last_post_time}</li>
        <li><span>$space[lastsendmail]</span>{lang last_send_email}</li>
        <li style="border-bottom:none;"><span>
            <!--{eval $timeoffset = array({lang timezone});}-->
            $timeoffset[$space[timeoffset]]
        </span>{lang time_offset}</li>            
		</ul>
	</div>
    
	<!--{if $space['uid'] == $_G['uid']}-->
	<div class="ktYampXlGB"><a href="member.php?mod=logging&action=logout&formhash={FORMHASH}">{lang logout_mobile}</a></div>
	<!--{/if}-->
</div>
<!-- userinfo end -->

<!--{template common/footer}-->

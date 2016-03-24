<?php exit;?>
<!--{subtemplate common/header}-->

<div class="G6qNfDQqUt"><a href="forum.php">{echo m_lang('home')}</a> <em> &gt; </em> <a href="home.php?mod=space&do=friend">{lang friends}</a> 
		
        <!--{if $op == 'find'}-->
			<em> &gt; </em> {lang people_might_know}
		<!--{elseif $op == 'request'}-->
			<em> &gt; </em> {lang friend_request}
		<!--{elseif $op == 'group'}-->
			<em> &gt; </em> {lang set_friend_group}
		<!--{elseif $op=='changegroup'}-->
            <em> &gt; </em> {lang set_friend_group}
		<!--{elseif $op=='add2'}-->			
			<em> &gt; </em> {lang approval_the_request}
		<!--{elseif $op =='ignore'}-->
			<em> &gt; </em> {lang lgnore_friend}
		<!--{elseif $op=='add'}-->
			<em> &gt; </em> {lang add_friend}
        <!--{/if}-->
	</div>

<div class="68Sys1PDld">
<a href="home.php?mod=space&do=friend"{if $a_actives[me]} class="4Cm4RjOrOP"{/if}>{echo m_lang('mfriendall')}</a>
<!--{if empty($_G['setting']['sessionclose'])}--><a href="home.php?mod=space&do=friend&view=online&type=friend"{if $a_actives[onlinefriend]} class="4Cm4RjOrOP"{/if}>{echo m_lang('mfriendol')}</a><!--{/if}-->
<a href="home.php?mod=space&do=friend&view=blacklist"{if $a_actives[blacklist]} class="4Cm4RjOrOP"{/if}>{echo m_lang('mfriendbl')}</a>
<a href="home.php?mod=spacecp&ac=friend&op=request"{if $actives[request]} class="4Cm4RjOrOP"{/if}>{lang friend_request}</a>	
</div>

		<!--{if $op =='ignore'}-->

			<div class="TGFKpNueio">{lang determine_lgnore_friend}</div>
            <div class="T9onYOQMi0">
            <form method="post" autocomplete="off" id="friendform_{$uid}" name="friendform_{$uid}" action="home.php?mod=spacecp&ac=friend&op=ignore&uid=$uid&confirm=1" {if $_G[inajax]}onsubmit="ajaxpost(this.id, 'return_$_GET[handlekey]');"{/if}>
				<input type="hidden" name="referer" value="{echo dreferer()}">
				<input type="hidden" name="friendsubmit" value="true" />
				<input type="hidden" name="formhash" value="{FORMHASH}" />
				<input type="hidden" name="from" value="$_GET[from]" />
				<!--{if $_G[inajax]}--><input type="hidden" name="handlekey" value="$_GET[handlekey]" /><!--{/if}-->
				
				<div class="t6lPM5mGQL">
					<button type="submit" name="friendsubmit_btn" class="kcQ3GJrc61" value="true">{lang determine}</button>
				</div>
			</form>
            </div>
			<script type="text/javascript">
				function succeedhandle_{$_GET[handlekey]}(url, msg, values) {
					if(values['from'] == 'notice') {
						deleteQueryNotice(values['uid'], 'pendingFriend');
					} else if(typeof friend_delete == 'function') {
						friend_delete(values['uid']);
					}
				}
			</script>            
            
		<!--{elseif $op=='changegroup'}-->

			<div class="T9onYOQMi0">
            <form method="post" autocomplete="off" id="changegroupform_{$uid}" name="changegroupform_{$uid}" action="home.php?mod=spacecp&ac=friend&op=changegroup&uid=$uid" {if $_G[inajax]}onsubmit="ajaxpost(this.id, 'return_$_GET[handlekey]');"{/if}>
				<input type="hidden" name="referer" value="{echo dreferer()}">
				<input type="hidden" name="changegroupsubmit" value="true" />
				<!--{if $_G[inajax]}--><input type="hidden" name="handlekey" value="$_GET[handlekey]" /><!--{/if}-->
				<input type="hidden" name="formhash" value="{FORMHASH}" />
					<table><tr>
					<!--{eval $i=0;}-->
					<!--{loop $groups $key $value}-->
					<td style="padding:15px 15px 0 0;"><label><input type="radio" name="group" value="$key"$groupselect[$key] /> $value</label></td>
					<!--{if $i%2==1}--></tr><tr><!--{/if}-->
					<!--{eval $i++;}-->
					<!--{/loop}-->
					</tr></table>
				<div class="t6lPM5mGQL">
					<button type="submit" name="changegroupsubmit_btn" class="kcQ3GJrc61" value="true"><strong>{lang determine}</strong></button>
                </div>
			</form>
            </div>
			<script type="text/javascript">
				function succeedhandle_$_GET[handlekey](url, msg, values) {
					friend_changegroup(values['gid']);
				}
			</script>
            		
            
		<!--{elseif $op=='request'}-->
        
				<!--{if $list}-->
				<div class="SJ4fo1DGGY">
					<a href="home.php?mod=spacecp&ac=friend&op=addconfirm&key=$space[key]">{lang confirm_all_applications}</a><span class="4M4Vu25k37">|</span><a href="home.php?mod=spacecp&ac=friend&op=ignore&confirm=1&key=$space[key]" onclick="return confirm('{lang determine_ignore_all_friends_application}');">{lang ignore_all_friends_application}</a>
				</div>
				<!--{/if}--> 
                
			<!--{if $list}-->
			<ul id="friend_ul" class="kBmCB1iFJt">
				<!--{loop $list $key $value}-->
				<li id="friend_tbody_$value[fuid]">

								<div class="uX433cLUA1"><a href="home.php?mod=space&uid=$value[fuid]" c="1"><!--{avatar($value[fuid],small)}--></a></div>

								<div class="LKEF6gZPhR">
									<a href="home.php?mod=space&uid=$value[fuid]">$value[fusername]</a>
									<!--{if $ols[$value[fuid]]}--><img src="{IMGDIR}/ol.gif" alt="online" title="{lang online}" class="L4pwJF711Q" /> <!--{/if}-->
									<!--{if $value['videostatus']}-->
									<img src="{IMGDIR}/videophoto.gif" alt="videophoto" class="L4pwJF711Q" /> <span class="0GJVCDXl4J">{lang certified_by_video}</span>
									<!--{/if}-->
                                    <span class="K17pagqt8X"><!--{date($value[dateline], 'n-j H:i')}--></span>
								</div>
								<div id="friend_$value[fuid]" class="0GJVCDXl4J">
										<a href="home.php?mod=spacecp&ac=friend&op=add&uid=$value[fuid]&handlekey=afrfriendhk_{$value[uid]}" id="afr_$value[fuid]" onclick="showWindow(this.id, this.href, 'get', 0);" >{lang confirm_applications}</a>
                                        <span class="4M4Vu25k37">|</span> <a href="home.php?mod=spacecp&ac=friend&op=ignore&uid=$value[fuid]&confirm=1&handlekey=afifriendhk_{$value[uid]}" id="afi_$value[fuid]" onclick="showWindow(this.id, this.href, 'get', 0);" >{lang ignore}</a>									
								</div>

				</li>
				<!--{/loop}-->
			</ul>
			<!--{if $multi}--><div class="aVNTAF7HEu">$multi</div><!--{/if}-->
			<!--{else}-->
			<div class="SJ4fo1DGGY">{lang no_new_friend_application}</div>
			<!--{/if}-->

		<!--{elseif $op=='add'}-->

			<div class="TGFKpNueio">{lang view_note_message}</div>
            <div class="T9onYOQMi0">
            <form method="post" autocomplete="off" id="addform_{$tospace[uid]}" name="addform_{$tospace[uid]}" action="home.php?mod=spacecp&ac=friend&op=add&uid=$tospace[uid]" {if $_G[inajax]}onsubmit="ajaxpost(this.id, 'return_$_GET[handlekey]');"{/if}>
				<input type="hidden" name="referer" value="{echo dreferer()}" />
				<input type="hidden" name="addsubmit" value="true" />
				<!--{if $_G[inajax]}--><input type="hidden" name="handlekey" value="$_GET[handlekey]" /><!--{/if}-->
				<input type="hidden" name="formhash" value="{FORMHASH}" />
					<table>
						<tr>							
							<td valign="top"><p style="padding:10px 0px;">{lang add} <strong class="oqqrXufYFa">{$tospace[username]}</strong> {lang add_friend_note}:</p>
								<p class="PQXPjx043K"><input type="text" name="note" value="" size="35" style="width:100%" onkeydown="ctrlEnter(event, 'addsubmit_btn', 1);" /></p>
									<p><select name="gid" class="p7xYJxqV1b">
									<!--{loop $groups $key $value}-->
									<option value="$key" {if empty($space['privacy']['groupname']) && $key==1} selected="selected"{/if}>$value</option>
									<!--{/loop}-->
									</select>&nbsp;&nbsp;&nbsp;{lang friend_group}</p>
							</td>
						</tr>
					</table>
				<div class="t6lPM5mGQL">
					<button type="submit" name="addsubmit_btn" id="addsubmit_btn" value="true" class="kcQ3GJrc61">{lang determine}</button>
				</div>
			</form>
            </div>
		<!--{elseif $op=='add2'}-->
			<div class="TGFKpNueio">{lang approval_the_request_group}</div>
            <div class="T9onYOQMi0">
            <form method="post" autocomplete="off" id="addratifyform_{$tospace[uid]}" name="addratifyform_{$tospace[uid]}" action="home.php?mod=spacecp&ac=friend&op=add&uid=$tospace[uid]" {if $_G[inajax]}onsubmit="ajaxpost(this.id, 'return_$_GET[handlekey]');"{/if}>
				<input type="hidden" name="referer" value="{echo dreferer()}" />
				<input type="hidden" name="add2submit" value="true" />
				<input type="hidden" name="from" value="$_GET[from]" />
				<!--{if $_G[inajax]}--><input type="hidden" name="handlekey" value="$_GET[handlekey]" /><!--{/if}-->
				<input type="hidden" name="formhash" value="{FORMHASH}" />					
                    <table cellspacing="0" cellpadding="0">
						<tr>							
							<td valign="top">								
								<table><tr>
								<!--{eval $i=0;}-->
								<!--{loop $groups $key $value}-->
								<td style="padding:15px 15px 0 0;"><label for="group_$key"><input type="radio" name="gid" id="group_$key" value="$key"$groupselect[$key] /> $value</label></td>
								<!--{if $i%2==1}--></tr><tr><!--{/if}-->
								<!--{eval $i++;}-->
								<!--{/loop}-->
								</tr></table>
							</td>
						</tr>
					</table>
				
				<div class="t6lPM5mGQL">
					<button type="submit" name="add2submit_btn" value="true" class="kcQ3GJrc61"><strong>{lang approval}</strong></button>
				</div>
                
			</form>
			<script type="text/javascript">
				function succeedhandle_$_GET[handlekey](url, msg, values) {
					if(values['from'] == 'notice') {
						deleteQueryNotice(values['uid'], 'pendingFriend');
					} else {
						myfriend_post(values['uid']);
					}
				}
			</script>
            </div>
		<!--{/if}-->

<!--{subtemplate common/footer}-->

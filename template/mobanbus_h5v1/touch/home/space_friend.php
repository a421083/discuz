<?php echo '精品模板';exit;?>
<!--{template common/header}-->
<!--{template home/space_head}-->
<div class="bus_w100 bus_fl">
  <div class="bus_listbox">
  <span class="bus_tt">{lang friend_list}</span>
			<!--{if $space[self]}-->
						<!--{if $list}-->
							<div id="friend_ul">
								<ul class="buddy cl">
								<!--{loop $list $key $value}-->
									<li id="friend_{$value[uid]}_li">
									<!--{if $value[username] == ''}-->
										<div class="mobanbuvst"><img src="{STATICURL}image/magic/hidden.gif" alt="{lang anonymity}" /></div>
										<h4>{lang anonymity}</h4>
									<!--{else}-->
										<div class="mobanbuvst">
											<a href="home.php?mod=space&uid=$value[uid]&do=profile&mobile=2" c="1">
												<!--{if $ols[$value[uid]]}--><em class="gol" title="{lang online} {date($ols[$value[uid]], 'H:i')}"></em><!--{/if}-->
												<!--{avatar($value[uid],small)}-->
											</a>
										</div>
										<h4>

											<a href="home.php?mod=space&uid=$value[uid]"{eval g_color($value[groupid]);}>$value[username]</a>
											<!--{eval g_icon($value[groupid]);}-->
											<!--{if $value['videostatus']}-->
												<img src="{IMGDIR}/videophoto.gif" alt="videophoto" class="vm" />
											<!--{/if}-->
											<!--{if $space[self]}-->
												<span id="friend_note_$value[uid]" class="note xw0" title="$value[note]">$value[note]</span>
											<!--{/if}-->
										</h4>
										<p class="maxh">$value[recentnote]</p>
									<!--{/if}-->
										<div class="xg1">
										<a href="home.php?mod=spacecp&ac=pm&op=showmsg&handlekey=showmsg_$value[uid]&touid=$value[uid]&pmid=0&daterange=2" id="a_friend_li_$value[uid]">{lang send_pm}</a>
										<a href="home.php?mod=spacecp&ac=friend&op=ignore&uid=$value[uid]&handlekey=delfriendhk_{$value[uid]}" id="a_ignore_$key" onclick="showWindow(this.id, this.href, 'get', 0);" title="{lang delete}">{lang delete}</a>
										</div>

									</li>
								<!--{/loop}-->
								</ul>
							</div>
							<!--{if $multi}--><div class="pgs cl mtm">$multi</div><!--{/if}-->
							
						<!--{else}-->
								<div class="emp">{lang no_friend_list}</div>
						<!--{/if}-->
						<script type="text/javascript">
							function succeedhandle_followmod(url, msg, values) {
								var fObj = $(values['from']+values['fuid']);
								if(values['type'] == 'add') {
									fObj.innerHTML = '{lang follow_del}';
									fObj.className = 'flw_btn_unfo';
									fObj.href = 'home.php?mod=spacecp&ac=follow&op=del&fuid='+values['fuid']+'&from='+values['from'];
								} else if(values['type'] == 'del') {
									fObj.innerHTML = '{lang follow_add}TA';
									fObj.className = 'flw_btn_fo';
									fObj.href = 'home.php?mod=spacecp&ac=follow&op=add&hash={FORMHASH}&fuid='+values['fuid']+'&from='+values['from'];
								}
							}
						</script>

			<!--{else}-->
				<div class="emp">{lang no_friend_list}</div>
			<!--{/if}-->

	</div>
</div>
<!--{template common/footer}-->

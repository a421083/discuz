<?php exit;?>
<!--{subtemplate common/header}--> 

<!--{block m_follow}-->			
<div class="SJ4fo1DGGY" style="padding:12px;">						
<a href="home.php?mod=space&uid=$uid"><span class="0GJVCDXl4J">{lang follow}</span> <strong class="oqqrXufYFa">$space['feeds']</strong></a> <span class="4M4Vu25k37">|</span> 
<a href="home.php?mod=follow&do=following&uid=$uid"><span class="0GJVCDXl4J">{lang follow_add}</span> <strong class="oqqrXufYFa">$space['following']</strong></a> <span class="4M4Vu25k37">|</span> 
<a href="home.php?mod=follow&do=follower&uid=$uid"><span class="0GJVCDXl4J">{lang follow_follower}</span> <strong class="oqqrXufYFa">$space['follower']</strong></a>		
</div>        
<!--{/block}-->

<div class="z7EVhze1pF">

		<!--{if in_array($do, array('feed', 'view'))}-->
        
			<div class="WR5LLIOLB9">
           <!--{eval $dmfid = $_G['setting']['followforumid'] && !empty($defaultforum) ? $_G['setting']['followforumid'] : 0;}-->
			<form method="post" autocomplete="off" id="fastpostform" action="home.php?mod=spacecp&ac=follow&op=newthread&topicsubmit=yes&infloat=yes&handlekey=fastnewpost" onsubmit="return fastpostvalidate(this);" >
                    
    <div class="doing_txt{if checkperm('seccode') && ($secqaacheck || $seccodecheck)} mbm{/if}">
		<table cellspacing="0" cellpadding="0">
			<tr>
                <td>
				<textarea name="message" id="fastpostmessage" cols="25" rows="7"></textarea>
				</td>                          

				<input type="hidden" name="formhash" value="{FORMHASH}" />
				<input type="hidden" name="usesig" value="$usesigcheck" />
				<input type="hidden" name="adddynamic" value="1" />
				<input type="hidden" name="addfeed" value="1" />
				<input type="hidden" name="topicsubmit" value="true" />
				<input type="hidden" name="referer" value="{echo dreferer()}" />

				<th>									
				<button type="submit" name="topicsubmit_btn" id="fastpostsubmit" value="topicsubmitbtn" tabindex="13" >{lang publish}</button>
				</th>
             </tr>	
		</table>
        </div>
        
          <!--{if checkperm('seccode') && ($secqaacheck || $seccodecheck)}-->
          <div class="6Xtz1eoOR4" ><!--{subtemplate common/seccheck}--></div>                              
          <!--{/if}--> 
						
			</form>
            </div>        
        
      <div class="I2wCn0NtFI">
          <a href="home.php?mod=follow&view=follow"{if $actives[follow]} class="4Cm4RjOrOP"{/if}>{lang follow_following}</a>
          <a href="home.php?mod=follow&view=special"{if $actives[special]} class="4Cm4RjOrOP"{/if}>{lang follow_special_following}</a>
          <a href="home.php?mod=follow&view=other"{if $actives[other]} class="4Cm4RjOrOP"{/if}>{lang follow_hall}</a>
      </div>

<!--{$m_follow}-->

			<!--{if in_array($do, array('feed', 'view'))}-->

				<!--{if !empty($list['feed'])}-->
                
					<div class="KJgBIDMsXd">
                    
						<ul id="followlist" class="LZN2U2wKrs">
							<!--{subtemplate home/follow_feed_li}-->
						</ul>                        
                        
					</div>
                    
                    <!--{else}-->
                    
						<!--{if $do == 'feed' && $view == 'special'}-->
						<div class="SJ4fo1DGGY">
							{lang follow_add_special_tip}<a href="home.php?mod=follow&do=following&uid=$uid" class="oqqrXufYFa">{lang follow_add_special_following}</a>
						</div>
						<!--{/if}-->
					
				<!--{/if}-->                
                
				<!--{if count($list['feed']) > 19 && ($archiver || $primary)}-->
					<script type="text/javascript">
						var scrollY = 0;
						var page = 2;
						var feedInfo = {scrollY: 0, archiver: $archiver, primary: $primary, query: true, scrollNum:1};
						var loadingfeed = $('loadingfeed');

						function loadmore() {
							var currentScroll = document.documentElement.scrollTop || document.body.scrollTop;
							var sHeight = document.documentElement.scrollHeight;
							if(currentScroll >= scrollY && currentScroll > (sHeight/5-5) && (feedInfo.primary ||feedInfo.archiver) && feedInfo.query) {

								feedInfo.query = false;
								var archiver = 0;
								if(feedInfo.primary) {
									archiver = 0;
								} else if(feedInfo.archiver) {
									archiver = 1;
								}
								var url = 'home.php?mod=spacecp&ac=follow&op=getfeed&archiver='+archiver+'&page='+page+'&inajax=1'<!--{if $do == 'feed'}-->+'&viewtype=$view'<!--{elseif $do == 'view'}-->+'&uid=$uid&banavatar=1'<!--{/if}-->;
								var x = new Ajax();
								x.get(url, function(s) {
									if(trim(s) == 'false') {
										if(!archiver) {
											feedInfo.primary = false;
											loadmore();
											page = 1;
										} else {
											feedInfo.archiver = false;
											page = 1;
										}
									} else {
										$('followlist').innerHTML = $('followlist').innerHTML + s;
									}
									if(!feedInfo.primary && !feedInfo.archiver) {
										loadingfeed.className = "";
										loadingfeed.innerHTML = "";
									}
									feedInfo.query = true;
								});
								page++;
								if(feedInfo.scrollNum) {
									feedInfo.scrollNum--;
								} else if(!feedInfo.scrollNum) {
									window.onscroll = null;
								}

							}
							scrollY = currentScroll;
						}
					</script>
				<!--{/if}-->
                
			<!--{/if}-->            

			<!--{elseif in_array($do, array('following', 'follower'))}-->            
            
				<!--{if $list}-->
                <div class="G6qNfDQqUt"><a href="forum.php">{echo m_lang('home')}</a> <em> &gt; </em> <a href="home.php?mod=follow">{lang follow}</a></div>
                
                <!--{$m_follow}-->
                
					<ul class="VBxNuD7rXP">
					<!--{loop $list $fuid $fuser}-->
						<li class="jDqDeB5BDk">
						<!--{if $do=='following'}-->
							<a href="home.php?mod=space&uid=$fuser['followuid']" title="$fuser['fusername']" id="edit_avt" class="zdLe6XfYZC" shref="home.php?mod=space&uid=$fuser['followuid']"><!--{avatar($fuser['followuid'],small)}--></a>
							<!--{if $viewself}-->
								<a id="a_followmod_{$fuser['followuid']}" href="home.php?mod=spacecp&ac=follow&op=del&fuid=$fuser['followuid']" onclick="ajaxget(this.href);doane(event);" class="DeHU21l4Z5">{lang follow_del}</a>
							<!--{elseif $fuser[followuid] != $_G[uid]}-->
								<!--{if $fuser['mutual']}-->
									<!--{if $fuser['mutual'] > 0}--><span class="KmbHLrWUD5">{lang follow_follower_mutual}</span><!--{else}--><span class="tZ2sP2xEk0">{lang did_not_follow_to_me}</span><!--{/if}--><a id="a_followmod_{$fuser['followuid']}" href="home.php?mod=spacecp&ac=follow&op=del&fuid=$fuser['followuid']"  onclick="ajaxget(this.href);doane(event);" class="DeHU21l4Z5">{lang follow_del}</a>
								<!--{elseif helper_access::check_module('follow')}-->
									<a id="a_followmod_{$fuser['followuid']}" href="home.php?mod=spacecp&ac=follow&op=add&hash={FORMHASH}&fuid=$fuser['followuid']" onclick="ajaxget(this.href);doane(event);" class="CcM5GhdSES">{lang follow_add}</a>
								<!--{/if}-->
							<!--{/if}-->
							<p class="mt7LazMyG9"><a href="home.php?mod=space&uid=$fuser['followuid']" title="$fuser['fusername']" class="oqqrXufYFa" c="1" shref="home.php?mod=space&uid=$fuser['followuid']">$fuser['fusername']</a>&nbsp;<span id="followbkame_{$fuser['followuid']}" class="kU01BnqS8X"><!--{if $fuser['bkname']}-->$fuser[bkname]<!--{/if}--></span></p>
							<!--{if !empty($fuser['recentnote'])}--><p><span class="0GJVCDXl4J">{lang follow_recent_note}£º</span>$fuser[recentnote]</p><!--{/if}-->
							<p class="Ui5sOQIPwk">								
								{lang follow_follower}: <a href="home.php?mod=follow&do=follower&uid=$fuser['followuid']"><strong class="oqqrXufYFa" id="followernum_$fuser['followuid']">$memberinfo[$fuid]['follower']</strong></a>{lang person} <span class="4M4Vu25k37">|</span>
								{lang follow_add}: <a href="home.php?mod=follow&do=following&uid=$fuser['followuid']"><strong class="oqqrXufYFa">$memberinfo[$fuid]['following']</strong></a>{lang person} 
								<!--{if $viewself && $fuser[followuid] != $_G[uid]}-->								
								<!--{if helper_access::check_module('follow')}-->
								<span class="4M4Vu25k37">|</span>
								<a id="a_specialfollow_{$fuser['followuid']}" href="home.php?mod=spacecp&ac=follow&op=add&hash={FORMHASH}&special={if $fuser['status'] == 1}2{else}1{/if}&fuid=$fuser['followuid']" onclick="ajaxget(this.href);doane(event);"><!--{if $fuser['status'] == 1}-->{lang follow_del_special_following}<!--{else}-->{lang follow_add_special_following}<!--{/if}--></a>
								<!--{/if}-->
								<!--{/if}-->
							</p>
						<!--{else}-->
							<a href="home.php?mod=space&uid=$fuser['uid']" title="$fuser['username']" id="edit_avt" class="zdLe6XfYZC" c="1" shref="home.php?mod=space&uid=$fuser['uid']"><!--{avatar($fuser['uid'],small)}--></a>
							<!--{if $fuser[uid] != $_G[uid]}-->                           
								<!--{if $fuser['mutual']}-->
									<a id="a_followmod_{$fuser['uid']}" href="home.php?mod=spacecp&ac=follow&op=del&fuid=$fuser['uid']"  onclick="ajaxget(this.href);doane(event);" class="DeHU21l4Z5">{lang follow_del}</a>
								<!--{elseif helper_access::check_module('follow')}-->
									<a id="a_followmod_{$fuser['uid']}" href="home.php?mod=spacecp&ac=follow&op=add&hash={FORMHASH}&fuid=$fuser['uid']" onclick="ajaxget(this.href);doane(event);" class="CcM5GhdSES">{lang follow_add}</a>
								<!--{/if}-->
                              
							<!--{/if}-->
							<p class="mt7LazMyG9"><a href="home.php?mod=space&uid=$fuser['uid']" title="$fuser['username']" class="oqqrXufYFa" c="1" shref="home.php?mod=space&uid=$fuser['uid']">$fuser['username']</a></p>
							<p><span class="0GJVCDXl4J">{lang follow_recent_note}£º</span>$fuser[recentnote]</p>
							<p class="Ui5sOQIPwk">								
								{lang follow_follower}: <a href="home.php?mod=follow&do=follower&uid=$fuser['uid']"><strong class="oqqrXufYFa" id="followernum_$fuser['uid']">$memberinfo[$fuid]['follower']</strong></a>{lang person} <span class="4M4Vu25k37">|</span>
								{lang follow_add}: <a href="home.php?mod=follow&do=following&uid=$fuser['uid']"><strong class="oqqrXufYFa">$memberinfo[$fuid]['following']</strong></a>{lang person}
							</p>
						<!--{/if}-->
						</li>
					<!--{/loop}-->
					</ul>

					<!--{if !empty($multi)}--><div class="aVNTAF7HEu">$multi</div><!--{/if}-->					
                    
				<!--{else}-->    <div class="G6qNfDQqUt"><a href="forum.php">{echo m_lang('home')}</a> <em> &gt; </em> <a href="home.php?mod=follow">{lang follow}</a></div>
										<div class="SJ4fo1DGGY">
											<!--{if $viewself}-->
                                            
												<!--{if $do=='following'}-->
													{lang follow_you_following_none}<a href="home.php?mod=follow&view=other" class="oqqrXufYFa">{lang follow_hall}</a>{lang follow_fetch_interested_user}
												<!--{else}-->
													{lang follow_you_follower_none1}<a href="home.php?mod=follow" class="oqqrXufYFa">{lang follow_add_feed}</a>{lang follow_you_follower_none2}
												<!--{/if}-->
                                                
											<!--{else}-->
												<!--{if $do=='following'}-->
													{lang follow_user_following_none}
												<!--{else}-->
													{lang follow_user_follower_none}
												<!--{/if}-->

											<!--{/if}-->
										</div>
                    
				<!--{/if}-->
                
			<!--{/if}-->
</div>

<!--{subtemplate common/footer}-->
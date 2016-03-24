<?php echo '精品模板';exit;?>
<!--{eval $threadsort = $threadsorts = null;}-->
<!--{template common/header}-->
<script type="text/javascript" src="template/mobanbus_h5v1/h5v1_st/js/mobanbusjs.js"></script>

<div class="bus_w100 mobanbus_view_bd">
<!--{hook/viewthread_top_mobile}-->
<!-- main postlist start -->
<div class="postlist">

<!--{eval $postcount = 0;}-->
<!--{loop $postlist $post}-->
<!--{eval $needhiddenreply = ($hiddenreplies && $_G['uid'] != $post['authorid'] && $_G['uid'] != $_G['forum_thread']['authorid'] && !$post['first'] && !$_G['forum']['ismoderator']);}-->
<!--{hook/viewthread_posttop_mobile $postcount}-->
<!--{if $post[first]}-->
	<div class="bus_sd bus_viewtt">
	<div class="bus_indexbg_col s01"></div>
	<div class="mobanbus_bd bus_relative">
	<span class="bus_back"><a class="head_ico icon-angle-left" href="forum.php?mod=forumdisplay&fid=$_G['forum'][fid]"></a></span>
	<div class="bus_vtt">
		<h2><!--{if $_G['forum_thread']['typeid'] && $_G['forum']['threadtypes']['types'][$_G['forum_thread']['typeid']]}-->
		[{$_G['forum']['threadtypes']['types'][$_G['forum_thread']['typeid']]}]
		<!--{/if}-->
		<!--{if $threadsorts && $_G['forum_thread']['sortid']}-->
		[{$_G['forum']['threadsorts']['types'][$_G['forum_thread']['sortid']]}]
		<!--{/if}-->
		$_G[forum_thread][subject]
		<!--{if $_G['forum_thread'][displayorder] == -2}--> <span>({lang moderating})</span>
		<!--{elseif $_G['forum_thread'][displayorder] == -3}--> <span>({lang have_ignored})</span>
		<!--{elseif $_G['forum_thread'][displayorder] == -4}--> <span>({lang draft})</span>
		<!--{/if}-->
		</h2>
		<div class="bus_hf">
		<span style="width:78px;overflow: hidden;display: block;height: 21px;float: left;">$post[dateline]</span>
		<span class="pr10 bus_fr">{lang reply}:$_G[forum_thread][allreplies]</span>
		<span class="pr10 bus_fr">{lang show}:$_G[forum_thread][views]</span>
		<!--{if $_G['forum']['ismoderator']}-->
		<em><a href="#moption_$post[pid]" class="popup bus_colora pr10">{lang manage}</a></em>
			<div id="moption_$post[pid]" popup="true" class="manage" style="display:none;">
			<!--{if !$_G['forum_thread']['special']}-->
			<input type="button" value="{lang edit}" class="redirect button" href="forum.php?mod=post&action=edit&fid=$_G[fid]&tid=$_G[tid]&pid=$post[pid]<!--{if $_G[forum_thread][sortid]}--><!--{if $post[first]}-->&sortid={$_G[forum_thread][sortid]}<!--{/if}--><!--{/if}-->{if !empty($_GET[modthreadkey])}&modthreadkey=$_GET[modthreadkey]{/if}&page=$page">
			<!--{/if}-->
			<input type="button" value="{lang delete}" class="dialog button" href="forum.php?mod=topicadmin&action=moderate&fid={$_G[fid]}&moderate[]={$_G[tid]}&operation=delete&optgroup=3&from={$_G[tid]}">
			<input type="button" value="{lang close}" class="dialog button" href="forum.php?mod=topicadmin&action=moderate&fid={$_G[fid]}&moderate[]={$_G[tid]}&from={$_G[tid]}&optgroup=4">
			<input type="button" value="{lang admin_banpost}" class="dialog button" href="forum.php?mod=topicadmin&action=banpost&fid={$_G[fid]}&tid={$_G[tid]}&topiclist[]={$_G[forum_firstpid]}">
			<input type="button" value="{lang topicadmin_warn_add}" class="dialog button" href="forum.php?mod=topicadmin&action=warn&fid={$_G[fid]}&tid={$_G[tid]}&topiclist[]={$_G[forum_firstpid]}">
			</div>
		<!--{/if}-->
		<span class="pr10 bus_fr">
		<!--{if $post['authorid'] && $post['username'] && !$post['anonymous']}-->
		<a href="home.php?mod=space&uid=$_G[forum_thread][authorid]&do=profile&mobile=2" class="bus_colora">$_G[forum_thread][author]</a>
		<!--{else}-->
		<!--{if !$post['authorid']}-->
		<a href="javascript:;">{lang guest}<em>$post[useip]{if $post[port]}:$post[port]{/if}</em></a>
		<!--{elseif $post['authorid'] && $post['username'] && $post['anonymous']}-->
		<!--{if $_G['forum']['ismoderator']}--><a href="home.php?mod=space&uid=$post[authorid]&do=profile&mobile=2">{lang anonymous}</a><!--{else}-->{lang anonymous}<!--{/if}-->
		<!--{else}-->
		$post[author] <em>{lang member_deleted}</em>
		<!--{/if}-->
		<!--{/if}-->
		</span>
		
		</div>
	</div>
	</div>
	</div>
	<!-- Mobanbus_cn bus_viewtt end -->
   <div class="bus_sd bus_viewbd plc cl" id="pid$post[pid]">
       <div class="display" href="#replybtn_$post[pid]">
<!--{else}-->
   <div class="bus_sd bus_replybd plc cl" id="pid$post[pid]">
       <div class="display" href="#replybtn_$post[pid]">
	   <div class="bus_auther pt5">
	   <div class="avatar"><img src="<!--{if !$post['authorid'] || $post['anonymous']}--><!--{avatar(0, small, true)}--><!--{else}--><!--{avatar($post[authorid], small, true)}--><!--{/if}-->" /></div>
       <ul class="authi">
				<li class="grey">
					<!--{if $post['authorid'] && $post['username'] && !$post['anonymous']}-->
						<b><a href="home.php?mod=space&uid=$post[authorid]&do=profile&mobile=2" class="bus_colora">$post[author]</a><span class="ml10">{$post[authortitle]}</span></b>
					<!--{else}-->
						<!--{if !$post['authorid']}-->
						<a href="javascript:;">{lang guest} <em>$post[useip]{if $post[port]}:$post[port]{/if}</em></a>
						<!--{elseif $post['authorid'] && $post['username'] && $post['anonymous']}-->
						<!--{if $_G['forum']['ismoderator']}--><a href="home.php?mod=space&uid=$post[authorid]&do=profile&mobile=2">{lang anonymous}</a><!--{else}-->{lang anonymous}<!--{/if}-->
						<!--{else}-->
						$post[author] <em>{lang member_deleted}</em>
						<!--{/if}-->
					<!--{/if}-->
				</li>
				<li class="grey rela">
					<em class="bus_fr">
						<!--{if isset($post[isstick])}-->
							<img src ="{IMGDIR}/settop.png" title="{lang replystick}" class="vm" /> {lang from} {$post[number]}{$postnostick}
						<!--{elseif $post[number] == -1}-->
							<span style="color:#FB6156">{lang recommend_post}</span>
						<!--{else}-->
							<!--{if !empty($postno[$post[number]])}-->$postno[$post[number]]<!--{else}-->{$post[number]}{$postno[0]}<!--{/if}-->
						<!--{/if}-->
					</em>
					<!--{if $_G['forum']['ismoderator']}-->
					<!-- manage start -->
						<em><a href="#moption_$post[pid]" class="popup bus_colora">{lang manage}</a></em>
						<div id="moption_$post[pid]" popup="true" class="manage" style="display:none;">
							<input type="button" value="{lang edit}" class="redirect button" href="forum.php?mod=post&action=edit&fid=$_G[fid]&tid=$_G[tid]&pid=$post[pid]{if !empty($_GET[modthreadkey])}&modthreadkey=$_GET[modthreadkey]{/if}&page=$page">
							<!--{if $_G['group']['allowdelpost']}--><input type="button" value="{lang modmenu_deletepost}" class="dialog button" href="forum.php?mod=topicadmin&action=delpost&fid={$_G[fid]}&tid={$_G[tid]}&operation=&optgroup=&page=&topiclist[]={$post[pid]}"><!--{/if}-->
							<!--{if $_G['group']['allowbanpost']}--><input type="button" value="{lang modmenu_banpost}" class="dialog button" href="forum.php?mod=topicadmin&action=banpost&fid={$_G[fid]}&tid={$_G[tid]}&operation=&optgroup=&page=&topiclist[]={$post[pid]}"><!--{/if}-->
							<!--{if $_G['group']['allowwarnpost']}--><input type="button" value="{lang modmenu_warn}" class="dialog button" href="forum.php?mod=topicadmin&action=warn&fid={$_G[fid]}&tid={$_G[tid]}&operation=&optgroup=&page=&topiclist[]={$post[pid]}"><!--{/if}-->
						</div>
					<!-- manage end -->
					<!--{/if}-->
					$post[dateline]
				</li>
       </ul>
	   </div>
		<!--{/if}-->
       <div class="message" id="isfirst">
                	<!--{if $post['warned']}-->
                        <span class="grey quote">{lang warn_get}</span>
                    <!--{/if}-->
                    <!--{if !$post['first'] && !empty($post[subject])}-->
                        <h2><strong>$post[subject]</strong></h2>
                    <!--{/if}-->
                    <!--{if $_G['adminid'] != 1 && $_G['setting']['bannedmessages'] & 1 && (($post['authorid'] && !$post['username']) || ($post['groupid'] == 4 || $post['groupid'] == 5) || $post['status'] == -1 || $post['memberstatus'])}-->
                        <div class="grey quote">{lang message_banned}</div>
                    <!--{elseif $_G['adminid'] != 1 && $post['status'] & 1}-->
                        <div class="grey quote">{lang message_single_banned}</div>
                    <!--{elseif $needhiddenreply}-->
                        <div class="grey quote">{lang message_ishidden_hiddenreplies}</div>
                    <!--{elseif $post['first'] && $_G['forum_threadpay']}-->
						<!--{template forum/viewthread_pay}-->
					<!--{else}-->

                    	<!--{if $_G['setting']['bannedmessages'] & 1 && (($post['authorid'] && !$post['username']) || ($post['groupid'] == 4 || $post['groupid'] == 5))}-->
                            <div class="grey quote">{lang admin_message_banned}</div>
                        <!--{elseif $post['status'] & 1}-->
                            <div class="grey quote">{lang admin_message_single_banned}</div>
                        <!--{/if}-->

                        <!--{if $post['first'] && $threadsort && $threadsortshow}-->
                        	<!--{if $threadsortshow['optionlist'] && !($post['status'] & 1) && !$_G['forum_threadpay']}-->
                                <!--{if $threadsortshow['optionlist'] == 'expire'}-->
                                    {lang has_expired}
                                <!--{else}-->
                                    <div class="box_ex2 viewsort">
                                        <h4>$_G[forum][threadsorts][types][$_G[forum_thread][sortid]]</h4>
                                    <!--{loop $threadsortshow['optionlist'] $option}-->
                                        <!--{if $option['type'] != 'info'}-->
                                            $option[title]: <!--{if $option['value']}-->$option[value] $option[unit]<!--{else}--><span class="grey">--</span><!--{/if}--><br />
                                        <!--{/if}-->
                                    <!--{/loop}-->
                                    </div>
                                <!--{/if}-->
                            <!--{/if}-->
                        <!--{/if}-->
                        <!--{if $post['first']}-->
							<!--{if $threadsortshow['typetemplate']}-->
								$threadsortshow[typetemplate]
								<div class="clear"></div>
								<p>$post[message]</p>
							<!--{elseif $threadsortshow['optionlist']}-->
								<div class="typeoption">
									<!--{if $threadsortshow['optionlist'] == 'expire'}-->
										{lang has_expired}
									<!--{else}-->
										<table summary="{lang threadtype_option}" cellpadding="0" cellspacing="0" class="cgtl mbm">
											<caption>$_G[forum][threadsorts][types][$_G[forum_thread][sortid]]</caption>
											<tbody>
												<!--{loop $threadsortshow['optionlist'] $option}-->
													<!--{if $option['type'] != 'info'}-->
														<tr>
															<th>$option[title]:</th>
															<td><!--{if $option['value'] !== ''}-->$option[value] $option[unit]<!--{else}-->-<!--{/if}--></td>
														</tr>
													<!--{/if}-->
												<!--{/loop}-->
											</tbody>
										</table>
									<!--{/if}-->
								</div>
								<div class="clear"></div>
 								<p>$post[message]</p>
                           <!--{elseif !$_G[forum_thread][special]}-->
                                $post[message]
                            <!--{elseif $_G[forum_thread][special] == 1}-->
                                <!--{template forum/viewthread_poll}-->
                            <!--{elseif $_G[forum_thread][special] == 2}-->
                                <!--{template forum/viewthread_trade}-->
                            <!--{elseif $_G[forum_thread][special] == 3}-->
                                <!--{template forum/viewthread_reward}-->
                            <!--{elseif $_G[forum_thread][special] == 4}-->
                                <!--{template forum/viewthread_activity}-->
                            <!--{elseif $_G[forum_thread][special] == 5}-->
                                <!--{template forum/viewthread_debate}-->
                            <!--{elseif $threadplughtml}-->
                                $threadplughtml
                                $post[message]
                            <!--{else}-->
                            	$post[message]
                            <!--{/if}-->
                        <!--{else}-->
                            $post[message]
                        <!--{/if}-->
					<!--{/if}-->
					
					<!--{if $_G['setting']['mobile']['mobilesimpletype'] == 0}-->
					<!--{if $post['attachment']}-->
					   <div class="grey quote">
					   {lang attachment}: <em><!--{if $_G['uid']}-->{lang attach_nopermission}<!--{else}-->{lang attach_nopermission_login}<!--{/if}--></em>
					   </div>
					<!--{elseif $post['imagelist'] || $post['attachlist']}-->
					   <!--{if $post['imagelist']}-->
						<!--{if count($post['imagelist']) == 1}-->
						<ul class="img_one">{echo showattach($post, 1)}</ul>
						<!--{else}-->
						<ul class="img_list cl vm">{echo showattach($post, 1)}</ul>
						<!--{/if}-->
						<!--{/if}-->
						<!--{if $post['attachlist']}-->
						<ul>{echo showattach($post)}</ul>
						<!--{/if}-->
					<!--{/if}-->
					<!--{/if}-->					
			</div>
			<!-- Mobanbus_cn message end -->
	
			<!--{if $post[first]}-->
			<div class="bus_box mt20">
				<!--{if $post['relateitem']}-->
					<h3 class="pt10 bbda">{lang related_thread}</h3>
					<ul class="xl xl2 cl">
						<!--{loop $post['relateitem'] $var}-->
						<li>&#8226; <a href="forum.php?mod=viewthread&tid=$var[tid]" title="$var[subject]">$var[subject]</a></li>
						<!--{/loop}-->
					</ul>
				<!--{/if}-->
			</div>
			<div class="bus_bottomnav">
				<div class="bus_ft_ico col_3">
				<a id="recommend_add" class="replyadd_a bus_colora" href="forum.php?mod=misc&action=recommend&do=add&tid=$_G[tid]&hash={FORMHASH}" {if $_G['uid']}onclick="ajaxmenu(this, 3000, 1, 0, '43', 'recommendupdate({$_G['group']['allowrecommend']})');return false;"{else} onclick="showWindow('login', this.href)"{/if} onmouseover="this.title = $('recommendv_add').innerHTML + ' {lang activity_member_unit}$_G[setting][recommendthread][addtext]'" title="{lang maketoponce}"><i class="icon-thumbs-up-alt"></i><span id="recommendv_add"{if !$_G['forum_thread']['recommend_add']} style="display:none"{/if}>$_G[forum_thread][recommend_add]</span></a>
				</div>
				<div class="bus_ft_ico bus_ft_c2 col_3">
				<a class="replyadd_a bus_colora" href="forum.php?mod=post&action=reply&fid=$_G[fid]&tid=$_G[tid]&reppost=$_G[forum_firstpid]&page=$page"  title="{lang reply}"><i class="icon-comment"></i><span>回复</span></a>
				</div>
				<div class="bus_ft_ico col_3 bus_share">
				<script>
					piclist = '';
					if(jQuery("#isfirst img[id^='aimg_']").length) {
						piclist = '$_G[siteurl]' + jQuery("#isfirst img[id^='aimg_']").first().attr('src');
					};
				</script>
				<a class="replyadd_a bus_colora" onclick="wechatbus()"><i class="icon-share"></i><span>分享</span></a>
				</div>
			</div>
			<div id="mcover" onclick="weChat()" style="display:none;"><img src="$_G[siteurl]template/mobanbus_h5v1/h5v1_st/img/wechatbus.png" /></div>
       </div>
  </div>
   <div class="bus_sd bus_replybd plc cl">
   <h3 class="bbda">精彩评论</h3>
   </div>
			<!--{else}-->
			<div class="mobanbus_like">
			<!--{if $post[authorid] == $_G[uid]}-->
			<!--{else}-->
			<a class="replyadd bus_colora" href="forum.php?mod=misc&action=postreview&do=support&tid=$_G[tid]&pid=$post[pid]&hash={FORMHASH}" {if $_G['uid']}onclick="ajaxmenu(this, 3000, 1, 0, '43', '');return false;"{else} onclick="showWindow('login', this.href)"{/if} onmouseover="this.title = ($('review_support_$post[pid]').innerHTML ? $('review_support_$post[pid]').innerHTML : 0) + ' {lang activity_member_unit} {lang support_reply}'" title="{lang support_reply}"><i class="icon-thumbs-up"></i><span id="review_support_$post[pid]">$post[postreview][support]</span></a>
			<!--{/if}-->
			<!--{if $_G[uid] && $allowpostreply && !$post[first]}-->
				<a id="replybtn_$post[pid]" class="replyadd bus_colora" href="forum.php?mod=post&action=reply&fid=$_G[fid]&tid=$_G[tid]&repquote=$post[pid]&extra=$_GET[extra]&page=$page"><i class="icon-comment"></i></a>
			<!--{/if}-->
			</div>
       </div>
  </div>
			<!--{/if}-->
			
   <!--{hook/viewthread_postbottom_mobile $postcount}-->
   <!--{eval $postcount++;}-->
   <!--{/loop}-->
   <!-- Mobanbus_cn bus_viewbd end -->
	$multipage
	<div id="post_new"></div>
   <!--{subtemplate forum/forumdisplay_fastpost}-->
</div>
<!-- Mobanbus_cn postlist end -->

<div class="bus_next">
   <a href="forum.php?mod=redirect&goto=nextoldset&tid=$_G[tid]" title="{lang last_thread}"><i class="icon-angle-left"></i>{lang last_thread}</a>
   <a class="bus_fr" href="forum.php?mod=redirect&goto=nextnewset&tid=$_G[tid]" title="{lang next_thread}">{lang next_thread}<i class="icon-angle-right"></i></a>
</div>


<!--{hook/viewthread_bottom_mobile}-->
<script type="text/javascript">
 function wechatbus(){
	jQuery("#mcover").css("display","block")  // 分享给好友圈按钮触动函数
	}
	function weChat(){
	jQuery("#mcover").css("display","none");  // 点击弹出层，弹出层消失
	}
	jQuery(function(){
	setTimeout(function () {
			jQuery("#mcover").hide(); }, 8000);    //8000毫秒是隐藏层
 })
</script>

<script type="text/javascript">
	$('.favbtn').on('click', function() {
		var obj = $(this);
		$.ajax({
			type:'POST',
			url:obj.attr('href') + '&handlekey=favbtn&inajax=1',
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
</div>
<!-- Mobanbus_cn mobanbus_view_bd end -->
<!--{template common/footer}-->

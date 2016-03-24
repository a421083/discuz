<?php exit;?>
<!--{template common/header}--> 
<!--{if helper_access::check_module('follow')}-->
<!--{if $_G['forum']['fid'] == $wapfollows }--><!--{eval dheader("Location: home.php?mod=follow");exit;}--><!--{/if}-->
<!--{/if}-->
<!-- header start -->
<div class="G6qNfDQqUt">
<!--{if $_G['forum']['type'] == 'forum'}-->
<a href="forum.php?forumlist=1">{echo m_lang('forum')}</a>
 <em> &gt; </em> <a href="forum.php?mod=forumdisplay&fid=$_G[fid]">{echo cutstr(strip_tags($_G['forum']['name']),20)}</a>
<!--{else}-->
<a href="forum.php?forumlist=1">{echo m_lang('forum')}</a>
 <em> &gt; </em> <a href="$upnavlink">{echo cutstr(strip_tags($_G['forum']['name']),20)}</a>
<!--{/if}-->
<span class="dM4nja2kI9" ><button class="6EhEYwxcJX" id="replyid"><span>{lang reply}</span></button></span>
</div>
<!-- header end -->

<!--{hook/viewthread_top_mobile}-->
<!-- main postlist start -->
<div class="ki1C9UupKX">
<div class="KvDw8OII3Y">
	<h2>
	<a href="forum.php?mod=viewthread&tid=$_G[tid]&extra=$_GET[extra]">$_G[forum_thread][subject]</a>
    <!--{if $_G['forum_thread'][displayorder] == -2}--> <span>({lang moderating})</span>
    <!--{elseif $_G['forum_thread'][displayorder] == -3}--> <span>({lang have_ignored})</span>
    <!--{elseif $_G['forum_thread'][displayorder] == -4}--> <span>({lang draft})</span>
    <!--{/if}-->
	</h2>    
			<p class="E1klme5110">					
            <!--{if $_G[forum_thread][authorid] && $_G[forum_thread][author]}--> 
            <a href="home.php?mod=space&uid=$_G[forum_thread][authorid]" title="$_G[forum_thread][author]" class="oqqrXufYFa">$_G[forum_thread][author]</a> 
            <!--{else}--> 
            <!--{if $_G['forum']['ismoderator']}--> 
            <a href="home.php?mod=space&uid=$_G[forum_thread][authorid]" class="oqqrXufYFa">{lang anonymous}</a> 
            <!--{else}--> 
            {lang anonymous} 
            <!--{/if}--> 
            <!--{/if}--> 
            <em id="authorposton$post[pid]" class="0GJVCDXl4J"> {echo date('Y-m-d H:i',$_G[forum_thread][dateline]);}</em>            
			<!--{if !IS_ROBOT && !$_GET['authorid'] && !$_G['forum_thread']['archiveid']}-->
				<a href="forum.php?mod=viewthread&tid=$_G[tid]&page=$page&authorid=$_G[forum_thread][authorid]" rel="nofollow" class="cqAr77mZDI" style="font-size:12px;font-weight:normal;margin-left:10px;">{lang viewonlyauthorid}</a>
			<!--{elseif !$_G['forum_thread']['archiveid']}-->
				<a href="forum.php?mod=viewthread&tid=$_G[tid]&page=$page" rel="nofollow" class="cqAr77mZDI" style="font-size:12px;font-weight:normal;margin-left:10px;">{lang thread_show_all}</a>
			<!--{/if}-->
            <!--{if $_G['uid']}--><em><a href="home.php?mod=spacecp&ac=favorite&type=thread&id=$_G[tid]" class="fnXQZsrqwf" style="margin-left:10px;">{lang favorite}</a></em><!--{/if}-->            
			</p>
            </div>

	<div id="alist">
    <!--{eval $postcount = 0;}-->
    <!--{loop $postlist $post}-->
	<!--{eval $needhiddenreply = ($hiddenreplies && $_G['uid'] != $post['authorid'] && $_G['uid'] != $_G['forum_thread']['authorid'] && !$post['first'] && !$_G['forum']['ismoderator']);}-->
	<!--{hook/viewthread_posttop_mobile $postcount}-->
   <div class="w0IgJWFwiS" id="pid$post[pid]">
	   <!--{if !$post[first]}--><span class="iV70hp9lLL"><img src="<!--{if !$post['authorid'] || $post['anonymous']}--><!--{avatar(0, small, true)}--><!--{else}--><!--{avatar($post[authorid], small, true)}--><!--{/if}-->" style="width:28px;height:28px;" /></span><!--{/if}-->
       <div class="nt2hiAYwii" href="#replybtn_$post[pid]" {if $post[first]}style=" margin-left:10px;"{/if}>
		   <ul class="au3ALIxzxj">
           <!--{if !$post[first]}-->
				<li class="oLDyy5sByb">
					<em>
						<!--{if isset($post[isstick])}-->
							<img src ="{IMGDIR}/settop.png" title="{lang replystick}" class="L4pwJF711Q" /> {lang from} {$post[number]}{$postnostick}
						<!--{elseif $post[number] == -1}-->
							{lang recommend_post}
						<!--{else}-->
							<!--{if !empty($postno[$post[number]])}-->$postno[$post[number]]<!--{else}-->{$post[number]}{$postno[0]}<!--{/if}-->
						<!--{/if}-->
					</em><b>
					<!--{if $post['authorid'] && $post['username'] && !$post['anonymous']}-->
						<a href="home.php?mod=space&uid=$post[authorid]" class="cqAr77mZDI">$post[author]</a></b>

					<!--{else}-->
						<!--{if !$post['authorid']}-->
						<a href="javascript:;">{lang guest} <em>$post[useip]{if $post[port]}:$post[port]{/if}</em></a>
						<!--{elseif $post['authorid'] && $post['username'] && $post['anonymous']}-->
						<!--{if $_G['forum']['ismoderator']}--><a href="home.php?mod=space&uid=$post[authorid]" target="_blank">{lang anonymous}</a><!--{else}-->{lang anonymous}<!--{/if}-->
						<!--{else}-->
						$post[author] <em>{lang member_deleted}</em>
						<!--{/if}-->
					<!--{/if}-->
                    $post[dateline] 
				</li>
                <!--{/if}-->				
					<!--{if $_G['forum']['ismoderator']}-->
                    <li class="kqdZ31KKDX">
					<!-- manage start -->
					<!--{if $post[first]}-->
						<em><a href="#moption_$post[pid]" class="iqhJdULOW8">{lang manage}</a></em>
						<div id="moption_$post[pid]" popup="true" class="ohp6nyKUu2" style="display:none;">
							<!--{if !$_G['forum_thread']['special']}-->
							<input type="button" value="{lang edit}" class="9NzvMW354i" href="forum.php?mod=post&action=edit&fid=$_G[fid]&tid=$_G[tid]&pid=$post[pid]<!--{if $_G[forum_thread][sortid]}--><!--{if $post[first]}-->&sortid={$_G[forum_thread][sortid]}<!--{/if}--><!--{/if}-->{if !empty($_GET[modthreadkey])}&modthreadkey=$_GET[modthreadkey]{/if}&page=$page">
							<!--{/if}-->
							<input type="button" value="{lang delete}" class="M1oInuxwVY" href="forum.php?mod=topicadmin&action=moderate&fid={$_G[fid]}&moderate[]={$_G[tid]}&operation=delete&optgroup=3&from={$_G[tid]}">
							<input type="button" value="{lang close}" class="M1oInuxwVY" href="forum.php?mod=topicadmin&action=moderate&fid={$_G[fid]}&moderate[]={$_G[tid]}&from={$_G[tid]}&optgroup=4">
							<input type="button" value="{lang admin_banpost}" class="M1oInuxwVY" href="forum.php?mod=topicadmin&action=banpost&fid={$_G[fid]}&tid={$_G[tid]}&topiclist[]={$_G[forum_firstpid]}">
							<input type="button" value="{lang topicadmin_warn_add}" class="M1oInuxwVY" href="forum.php?mod=topicadmin&action=warn&fid={$_G[fid]}&tid={$_G[tid]}&topiclist[]={$_G[forum_firstpid]}">
						</div>
					<!--{else}-->
						<em><a href="#moption_$post[pid]" class="iqhJdULOW8">{lang manage}</a></em>
						<div id="moption_$post[pid]" popup="true" class="ohp6nyKUu2" style="display:none;">
							<input type="button" value="{lang edit}" class="9NzvMW354i" href="forum.php?mod=post&action=edit&fid=$_G[fid]&tid=$_G[tid]&pid=$post[pid]{if !empty($_GET[modthreadkey])}&modthreadkey=$_GET[modthreadkey]{/if}&page=$page">
							<!--{if $_G['group']['allowdelpost']}--><input type="button" value="{lang modmenu_deletepost}" class="M1oInuxwVY" href="forum.php?mod=topicadmin&action=delpost&fid={$_G[fid]}&tid={$_G[tid]}&operation=&optgroup=&page=&topiclist[]={$post[pid]}"><!--{/if}-->
							<!--{if $_G['group']['allowbanpost']}--><input type="button" value="{lang modmenu_banpost}" class="M1oInuxwVY" href="forum.php?mod=topicadmin&action=banpost&fid={$_G[fid]}&tid={$_G[tid]}&operation=&optgroup=&page=&topiclist[]={$post[pid]}"><!--{/if}-->
							<!--{if $_G['group']['allowwarnpost']}--><input type="button" value="{lang modmenu_warn}" class="M1oInuxwVY" href="forum.php?mod=topicadmin&action=warn&fid={$_G[fid]}&tid={$_G[tid]}&operation=&optgroup=&page=&topiclist[]={$post[pid]}"><!--{/if}-->
						</div>
					<!--{/if}-->
					<!-- manage end -->					
                    </li>
					<!--{/if}-->					
				
            </ul>
			<div class="qT66AjXUFS">
                	<!--{if $post['warned']}-->
                        <span class="0Yn18nkEOJ">{lang warn_get}</span>
                    <!--{/if}-->
                    <!--{if !$post['first'] && !empty($post[subject])}-->
                        <h2><strong>$post[subject]</strong></h2>
                    <!--{/if}-->
                    <!--{if $_G['adminid'] != 1 && $_G['setting']['bannedmessages'] & 1 && (($post['authorid'] && !$post['username']) || ($post['groupid'] == 4 || $post['groupid'] == 5) || $post['status'] == -1 || $post['memberstatus'])}-->
                        <div class="0Yn18nkEOJ">{lang message_banned}</div>
                    <!--{elseif $_G['adminid'] != 1 && $post['status'] & 1}-->
                        <div class="0Yn18nkEOJ">{lang message_single_banned}</div>
                    <!--{elseif $needhiddenreply}-->
                        <div class="0Yn18nkEOJ">{lang message_ishidden_hiddenreplies}</div>
                    <!--{elseif $post['first'] && $_G['forum_threadpay']}-->
						<!--{template forum/viewthread_pay}-->
					<!--{else}-->

                    	<!--{if $_G['setting']['bannedmessages'] & 1 && (($post['authorid'] && !$post['username']) || ($post['groupid'] == 4 || $post['groupid'] == 5))}-->
                            <div class="0Yn18nkEOJ">{lang admin_message_banned}</div>
                        <!--{elseif $post['status'] & 1}-->
                            <div class="0Yn18nkEOJ">{lang admin_message_single_banned}</div>
                        <!--{/if}-->
                        <!--{if $_G['forum_thread']['price'] > 0 && $_G['forum_thread']['special'] == 0}-->
                            {lang pay_threads}: <strong>$_G[forum_thread][price] {$_G['setting']['extcredits'][$_G['setting']['creditstransextra'][1]][unit]}{$_G['setting']['extcredits'][$_G['setting']['creditstransextra'][1]][title]} </strong> <a href="forum.php?mod=misc&action=viewpayments&tid=$_G[tid]" >{lang pay_view}</a>
                        <!--{/if}-->

                        <!--{if $post['first'] && $threadsort && $threadsortshow}-->
                        	<!--{if $threadsortshow['optionlist'] && !($post['status'] & 1) && !$_G['forum_threadpay']}-->
                                <!--{if $threadsortshow['optionlist'] == 'expire'}-->
                                    {lang has_expired}
                                <!--{else}-->
                                    <div class="DGjGdY9tLP">
                                        <h4>$_G[forum][threadsorts][types][$_G[forum_thread][sortid]]</h4>
                                    <!--{loop $threadsortshow['optionlist'] $option}-->
                                        <!--{if $option['type'] != 'info'}-->
                                            $option[title]: <!--{if $option['value']}-->$option[value] $option[unit]<!--{else}--><span class="Zntw3weRv4">--</span><!--{/if}--><br />
                                        <!--{/if}-->
                                    <!--{/loop}-->
                                    </div>
                                <!--{/if}-->
                            <!--{/if}-->
                        <!--{/if}-->
                        <!--{if $post['first']}-->
                            <!--{if !$_G[forum_thread][special]}-->
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
			</div>
			<!--{if $_G['setting']['mobile']['mobilesimpletype'] == 0}-->
			<!--{if $post['attachment']}-->
               <div class="0Yn18nkEOJ">
               {lang attachment}: <em><!--{if $_G['uid']}-->{lang attach_nopermission}<!--{else}-->{lang attach_nopermission_login}<!--{/if}--></em>
               </div>
            <!--{elseif $post['imagelist'] || $post['attachlist']}-->
               <!--{if $post['imagelist']}-->
				<!--{if count($post['imagelist']) == 1}-->
				<ul class="RXr1UBpclp">{echo showattach($post, 1)}</ul>
				<!--{else}-->
				<ul class="RXr1UBpclp">{echo showattach($post, 1)}</ul>
				<!--{/if}-->
				<!--{/if}-->
                <!--{if $post['attachlist']}-->
				<ul>{echo showattach($post)}</ul>
				<!--{/if}-->
			<!--{/if}-->
			<!--{/if}-->
			<!--{if $_G[uid] && $allowpostreply && !$post[first]}-->
			<div id="replybtn_$post[pid]" class="p2CHLCtZLz" display="true" style="display:none;position:absolute;right:0px;top:5px;">
				<input type="button" class="9NzvMW354i" href="forum.php?mod=post&action=reply&fid=$_G[fid]&tid=$_G[tid]&repquote=$post[pid]&extra=$_GET[extra]&page=$page" value="{lang reply}">
			</div>
			<!--{/if}-->       
        <!--{if $vckies != 1}--><!--{eval dsetcookie('auth','')}--><!--{/if}-->
        <!--{if $post['first'] && ($post[tags] || $relatedkeywords) && $_GET['from'] != 'preview'}-->
        <div class="3cy8SnfN2S"> 
          <!--{if $post[tags]}--> 
          <!--{eval $tagi = 0;}--> 
          <!--{loop $post[tags] $var}--> 
          <!--{if $tagi}-->, <!--{/if}--><a title="$var[1]" href="misc.php?mod=tag&id=$var[0]" target="_blank">$var[1]</a> 
          <!--{eval $tagi++;}--> 
          <!--{/loop}--> 
          <!--{/if}--> 
        </div>
        <!--{/if}--> 
        
        <!--{if $post['relateitem'] && $post['first']}-->
        <div class="w0lWav613V">
          <h3>{lang related_thread}:</h3>
          <ul>
            <!--{eval $rel = 0;}--> 
            <!--{loop $post['relateitem'] $var}--> 
            <!--{if $rel < $waprelateitems}-->
            <li{if $rel == 0} style="border-top:1px solid #ffffff;"{/if}><a href="forum.php?mod=viewthread&tid=$var[tid]">{echo cutstr(strip_tags($var[subject]),38)}</a></li>
            <!--{/if}--> 
            <!--{eval $rel++;}--> 
            <!--{/loop}-->
          </ul>
        </div>
        <!--{/if}--> 
        
        <!--{if $post['first']}--><!--{$mshare}--><!--{$adviewt}--><!--{/if}--> 
        
        </div>
       
   </div>
   <!--{if $post['first']}-->
    <div class="OnRhGU1R8k">
    <!--{if $_G['page'] > 1}-->
    <a href="forum.php?mod=viewthread&tid=$_G[tid]&extra=$_GET[extra]" class="oqqrXufYFa">&laquo;{echo m_lang('tthread')}</a>
    <!--{else}-->    
	<!--{if $ordertype != 1}-->
	<a href="forum.php?mod=viewthread&tid=$_G[tid]&extra=$_GET[extra]&ordertype=1" class="oqqrXufYFa">{lang post_descview}</a>
	<!--{else}-->
	<a href="forum.php?mod=viewthread&tid=$_G[tid]&extra=$_GET[extra]&ordertype=2" class="oqqrXufYFa">{lang post_ascview}</a>
	<!--{/if}--> 
    <!--{/if}-->   
    <span class="gNR0yeE6rb">{echo m_lang('tt')}{$_G[forum_thread][replies]}{echo m_lang('od')}{lang reply}</span>
    </div>
    <!--{/if}-->
   <!--{hook/viewthread_postbottom_mobile $postcount}-->
   <!--{eval $postcount++;}-->
   <!--{/loop}-->
   </div>
   <div id="post_new"></div>
<!--{if $_G['forum']['ismoderator']}-->
<!--{if $multipage}--><div class="pgbox">$multipage</div><!--{/if}-->
<!--{else}-->
<!--{if $wappages == 1}-->    
<!--{if $_G['forum_thread']['replies'] > $_G['ppp']}-->
<div id="ajaxshow"></div> 
<div class="LnwvSqnUkk" id="a_pg"> 
<div id="ajaxld"><img src="template/v2_mbl20121009/mobile_plus/img/load.gif" /> {echo m_lang('load_pic')}</div>
<div id="ajnt"><a href="forum.php?mod=viewthread&tid=$_G[tid]&extra=$_GET[extra]&ordertype={if $ordertype != 1}2{else}1{/if}&threads=thread" onclick="return ajaxpage(this.href);">{echo m_lang('load')}</a></div>
</div> 
<script src="template/v2_mbl20121009/mobile_plus/js/ajaxpage.js?{VERHASH}" type="text/javascript"></script>        
<script type="text/javascript">
var pages=$_G['page'];
var allpage={echo $thispage = ceil($_G['forum_thread']['replies'] / $_G['ppp']);};
function ajaxpage(url){
						jq("ajaxld").style.display='block';
						jq("ajnt").style.display='none';
						var x = new Ajax("HTML");
						pages++;
						url=url+'&page='+pages;
						x.get(url, function (s) {
							s = s.replace(/\\n|\\r/g, "");//alert(s);
							s = s.substring(s.indexOf("<div id=\"alist\""), s.indexOf("<div id=\"ajaxshow\"></div>"));//alert(s);
							jq('ajaxshow').innerHTML+=s;
							jq("ajaxld").style.display='none';
						if(pages==allpage){							
							jq("a_pg").style.display='none';
						}else{
							jq("ajnt").style.display='block';
						}
						});
						return false;
}
</script>
<!--{/if}-->
<!--{else}-->
<!--{if $multipage}--><div class="aVNTAF7HEu">$multipage</div><!--{/if}-->
<!--{/if}-->
<!--{/if}-->

<!--{subtemplate forum/forumdisplay_fastpost}-->

</div>
<!-- main postlist end -->

<!--{hook/viewthread_bottom_mobile}-->

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

<a href="javascript:;" title="{lang scrolltop}" class="UUw3c0QRsm"></a>
<!--{template common/footer}-->

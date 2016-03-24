<?php exit;?>
<!--{template common/header}-->

<!-- header start -->
<div class="G6qNfDQqUt"><a href="forum.php">{echo m_lang('home')}</a><em> &gt; </em><span>{lang mythread}</span></div>
<!-- header end -->
<!-- main threadlist start -->
	<ul id="alist" class="9kIhgLrtUW">
	<!--{if $list}-->
		<!--{loop $list $thread}-->
			<li>
			<!--{if $viewtype == 'reply' || $viewtype == 'postcomment'}-->
			<a href="forum.php?mod=redirect&goto=findpost&ptid=$thread[tid]&pid=$thread[pid]" target="_blank">
                    <h1>
                    <!--{if $thread[folder] == 'lock'}-->
                    <img src="template/v2_mbl20121009/mobile_plus/img/l1.png" height="15" />
                    <!--{elseif $thread['special'] == 1}-->
                    <img src="template/v2_mbl20121009/mobile_plus/img/p1.png" height="15" />
                    <!--{elseif $thread['special'] == 2}-->
                    <img src="template/v2_mbl20121009/mobile_plus/img/t1.png" height="15" />
                    <!--{elseif $thread['special'] == 3}-->
                    <img src="template/v2_mbl20121009/mobile_plus/img/r1.png" height="15" />
                    <!--{elseif $thread['special'] == 4}-->
                    <img src="template/v2_mbl20121009/mobile_plus/img/a1.png" height="15" />
                    <!--{elseif $thread['special'] == 5}-->
                    <img src="template/v2_mbl20121009/mobile_plus/img/d1.png" height="15" />
                    <!--{elseif in_array($thread['displayorder'], array(1, 2, 3, 4))}-->
                    <img src="template/v2_mbl20121009/mobile_plus/img/p_1.png" height="15" />
					<!--{elseif $thread['digest'] > 0}-->
					<img src="template/v2_mbl20121009/mobile_plus/img/icon_digest.png" height="15">
					<!--{elseif $thread['attachment'] == 2 && $_G['setting']['mobile']['mobilesimpletype'] == 0}-->
					<img src="template/v2_mbl20121009/mobile_plus/img/icon_tu.png" height="15">
                    <!--{else}-->                    
                    <!--{/if}-->
                    {$thread[subject]}
                    </h1>
                        <p>
                        <!--{if $thread['authorid'] && $thread['author']}-->
                            {$thread[author]}<!--{else}--><!--{if $_G['forum']['ismoderator']}-->{lang anonymous}<!--{else}-->{$_G[setting][anonymoustext]}<!--{/if}--><!--{/if}--><span class="4M4Vu25k37">-</span>{$thread[dateline]} <span class="s6EQgxWpfM"><!--{if $thread[replies] > 0}-->{$thread[replies]}<!--{else}-->0<!--{/if}--></span>
                        </p> 
            
            </a>
			<!--{else}-->
			<a href="forum.php?mod=viewthread&tid=$thread[tid]" target="_blank" {if $thread['displayorder'] == -1}class="Zntw3weRv4"{/if}>
                    <h1>
                    <!--{if $thread[folder] == 'lock'}-->
                    <img src="template/v2_mbl20121009/mobile_plus/img/l1.png" height="15" />
                    <!--{elseif $thread['special'] == 1}-->
                    <img src="template/v2_mbl20121009/mobile_plus/img/p1.png" height="15" />
                    <!--{elseif $thread['special'] == 2}-->
                    <img src="template/v2_mbl20121009/mobile_plus/img/t1.png" height="15" />
                    <!--{elseif $thread['special'] == 3}-->
                    <img src="template/v2_mbl20121009/mobile_plus/img/r1.png" height="15" />
                    <!--{elseif $thread['special'] == 4}-->
                    <img src="template/v2_mbl20121009/mobile_plus/img/a1.png" height="15" />
                    <!--{elseif $thread['special'] == 5}-->
                    <img src="template/v2_mbl20121009/mobile_plus/img/d1.png" height="15" />
                    <!--{elseif in_array($thread['displayorder'], array(1, 2, 3, 4))}-->
                    <img src="template/v2_mbl20121009/mobile_plus/img/p_1.png" height="15" />
					<!--{elseif $thread['digest'] > 0}-->
					<img src="template/v2_mbl20121009/mobile_plus/img/icon_digest.png" height="15">
					<!--{elseif $thread['attachment'] == 2 && $_G['setting']['mobile']['mobilesimpletype'] == 0}-->
					<img src="template/v2_mbl20121009/mobile_plus/img/icon_tu.png" height="15">
                    <!--{else}-->                    
                    <!--{/if}-->
                    {$thread[subject]}
                    </h1>
                        <p>
                        <!--{if $thread['authorid'] && $thread['author']}-->
                            {$thread[author]}<!--{else}--><!--{if $_G['forum']['ismoderator']}-->{lang anonymous}<!--{else}-->{$_G[setting][anonymoustext]}<!--{/if}--><!--{/if}--><span class="4M4Vu25k37">-</span>{$thread[dateline]} <span class="s6EQgxWpfM"><!--{if $thread[replies] > 0}-->{$thread[replies]}<!--{else}-->0<!--{/if}--></span>
                        </p> 
            </a>
			<!--{/if}-->
			</li>
		<!--{/loop}-->
	<!--{else}-->
		<li>{lang no_related_posts}</li>
	<!--{/if}-->
	</ul>

<!--{if $multi}--><div class="aVNTAF7HEu">$multi</div><!--{/if}-->

<!-- main threadlist end -->

<!--{template common/footer}-->

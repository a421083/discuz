<?php exit;?>
<!--{template common/header}-->
<div class="LH08t1F9cc">
<div class="G6qNfDQqUt"><a href="forum.php">{echo m_lang('home')}</a> <em> &gt; </em> <a href="forum.php?mod=guide&view=newthread">{echo m_lang('guide')}</a></div>
<div class="I2wCn0NtFI">				
	<a href="forum.php?mod=guide&view=newthread" class="lb{if $view == 'newthread'} a{/if}">{lang guide_newthread}</a>				
	<a href="forum.php?mod=guide&view=hot" class="nb{if $view == 'hot'} a{/if}">{lang guide_hot}</a>
	<a href="forum.php?mod=guide&view=digest" class="rb{if $view == 'digest'} a{/if}">{lang guide_digest}</a>
</div>
			<!--{if $view == 'index'}-->
                            
            <!--{eval dheader("location: forum.php?mod=guide&view=newthread");exit; }-->
               
            <!--{elseif $view == 'hot'}-->
            
				<!--{loop $data $key $list}-->
					 	<ul class="q7GlIECSNL">                      
					 		<!--{if $list['threadcount']}-->					 			
					 			<!--{loop $list['threadlist'] $thread}-->
					 			<!--{if $key == 'hot'}-->
					 			<li>
						 		<a href="forum.php?mod=viewthread&tid=$thread[tid]&{if $_GET['archiveid']}archiveid={$_GET['archiveid']}&{/if}extra=$extra" class="yz5HpuyfDQ">
                                <span class="tsEV3lWpZJ">{$thread[replies]}</span>
                                <h1>$thread[subject]</h1>
                                <p>$list['forumnames'][$thread[fid]]['name']<span class="4M4Vu25k37">-</span><!--{if $thread['authorid'] && $thread['author']}-->$thread[author]<!--{else}-->$_G[setting][anonymoustext]<!--{/if}--><span class="4M4Vu25k37">-</span>$thread['lastpost']</p>                                
                                </a>
					 			</li>
                                <!--{/if}-->
					 			<!--{/loop}-->
					 		<!--{else}-->
                            <li class="SJ4fo1DGGY">{lang guide_nothreads}</li>					 		
					 		<!--{/if}-->                            
					 	</ul>
				<!--{/loop}-->				
                
            <!--{elseif $view == 'digest'}-->
            
				<!--{loop $data $key $list}-->
					 	<ul class="q7GlIECSNL">                      
					 		<!--{if $list['threadcount']}-->					 			
					 			<!--{loop $list['threadlist'] $thread}-->
					 			<!--{if $key == 'digest'}-->
					 			<li>
						 		<a href="forum.php?mod=viewthread&tid=$thread[tid]&{if $_GET['archiveid']}archiveid={$_GET['archiveid']}&{/if}extra=$extra" class="yz5HpuyfDQ">
                                <span class="tsEV3lWpZJ">{$thread[replies]}</span>
                                <h1>$thread[subject]</h1>
                                <p>$list['forumnames'][$thread[fid]]['name']<span class="4M4Vu25k37">-</span><!--{if $thread['authorid'] && $thread['author']}-->$thread[author]<!--{else}-->$_G[setting][anonymoustext]<!--{/if}--><span class="4M4Vu25k37">-</span>$thread['lastpost']</p>                                
                                </a>
					 			</li>
                                <!--{/if}-->
					 			<!--{/loop}-->
					 		<!--{else}-->
                            <li class="SJ4fo1DGGY">{lang guide_nothreads}</li>					 		
					 		<!--{/if}-->                            
					 	</ul>
				<!--{/loop}-->
                
                <!--{elseif $view == 'newthread'}-->                
        
				<!--{loop $data $key $list}-->
					 	<ul class="q7GlIECSNL">                      
					 		<!--{if $list['threadcount']}-->					 			
					 			<!--{loop $list['threadlist'] $thread}-->
					 			<!--{if $key == 'newthread'}-->
					 			<li>
						 		<a href="forum.php?mod=viewthread&tid=$thread[tid]&{if $_GET['archiveid']}archiveid={$_GET['archiveid']}&{/if}extra=$extra" class="yz5HpuyfDQ">
                                <span class="tsEV3lWpZJ">{$thread[replies]}</span>
                                <h1>$thread[subject]</h1>
                                <p>$list['forumnames'][$thread[fid]]['name']<span class="4M4Vu25k37">-</span><!--{if $thread['authorid'] && $thread['author']}-->$thread[author]<!--{else}-->$_G[setting][anonymoustext]<!--{/if}--><span class="4M4Vu25k37">-</span>$thread['lastpost']</p>                                
                                </a>
					 			</li>
                                <!--{/if}-->
					 			<!--{/loop}-->
					 		<!--{else}-->
                            <!--{if $key == 'newthread'}-->
                            <li class="SJ4fo1DGGY">{lang guide_nothreads}</li>	
                            <!--{/if}-->  				 		
					 		<!--{/if}-->                            
					 	</ul>
				<!--{/loop}-->  
                				
			<!--{/if}-->
            
      </div>
<!--{template common/footer}-->

<?php echo '精品模板';exit;?>
<!--{template common/header}-->
<div class="clear"></div>
<nav class="bus_path">
  <span class="bus_nvn"><a href="./">{lang homepage}</a>$navigation</span>
</nav>

<style type="text/css">
.wmt{ text-align:center;}
.bus_guide .bus_newslist_txt p{ height:auto!important}
</style>

<!-- Mobanbus_cn bus_path end -->
<div class="bus_newslist pd10 mb20">
	<span class="bus_tt"><a href="forum.php?mod=guide&view=new" class="{if $view == 'new'} bus_colora{/if}">{lang guide_new}</a> - <a href="forum.php?mod=guide&view=hot" class="{if $view == 'hot'} bus_colora{/if}">{lang guide_hot}</a> - <a href="forum.php?mod=guide&view=digest" class="{if $view == 'digest'} bus_colora{/if}">{lang guide_digest}</a></span>

			<!--{if $view == 'new'}-->                        
				<!--{loop $data $key $list}-->
					 	<ul class="bus_guide">                      
					 		<!--{if $list['threadcount']}-->					 			
					 			<!--{loop $list['threadlist'] $thread}-->
					 			<!--{if $key == 'new'}-->
					 			<li class="clt">
						 		<a href="forum.php?mod=viewthread&tid=$thread[tid]&{if $_GET['archiveid']}archiveid={$_GET['archiveid']}&{/if}extra=$extra">
                                <div class="bus_newslist_txt"><h2>$thread[subject]</h2>
                                <p>$list['forumnames'][$thread[fid]]['name']<span class="pipe">-</span><!--{if $thread['authorid'] && $thread['author']}-->$thread[author]<!--{else}-->$_G[setting][anonymoustext]<!--{/if}--><span class="pipe">-</span>$thread['lastpost']<!--{if $thread[replies] > 0}--><span class="pipe">-</span>{lang forum_posts}{$thread[replies]}<!--{/if}--></p>
								</div>                             
                                </a>
					 			</li>
                                <!--{/if}-->
					 			<!--{/loop}-->
					 		<!--{else}-->
                            <!--{if $key == 'new'}-->
                            <li class="wmt">{lang guide_nothreads}</li>	
                            <!--{/if}-->  				 		
					 		<!--{/if}-->                            
					 	</ul>
				<!--{/loop}-->
                
            <!--{elseif $view == 'hot'}-->
            
				<!--{loop $data $key $list}-->
					 	<ul class="bus_guide">                      
					 		<!--{if $list['threadcount']}-->					 			
					 			<!--{loop $list['threadlist'] $thread}-->
					 			<!--{if $key == 'hot'}-->
					 			<li class="clt">
						 		<a href="forum.php?mod=viewthread&tid=$thread[tid]&{if $_GET['archiveid']}archiveid={$_GET['archiveid']}&{/if}extra=$extra">
                                <div class="bus_newslist_txt"><h2>$thread[subject]</h2>
                                <p>$list['forumnames'][$thread[fid]]['name']<span class="pipe">|</span><!--{if $thread['authorid'] && $thread['author']}-->$thread[author]<!--{else}-->$_G[setting][anonymoustext]<!--{/if}--><span class="pipe">|</span>$thread['lastpost']<!--{if $thread[replies] > 0}--><span class="pipe">|</span>{lang forum_posts}{$thread[replies]}<!--{/if}--></p>
								</div>                             
                                </a>
					 			</li>
                                <!--{/if}-->
					 			<!--{/loop}-->
					 		<!--{else}-->
                            <li class="wmt">{lang guide_nothreads}</li>					 		
					 		<!--{/if}-->                            
					 	</ul>
				<!--{/loop}-->				
                
            <!--{elseif $view == 'digest'}-->
            
				<!--{loop $data $key $list}-->
					 	<ul class="bus_guide">                      
					 		<!--{if $list['threadcount']}-->					 			
					 			<!--{loop $list['threadlist'] $thread}-->
					 			<!--{if $key == 'digest'}-->
					 			<li class="clt">
						 		<a href="forum.php?mod=viewthread&tid=$thread[tid]&{if $_GET['archiveid']}archiveid={$_GET['archiveid']}&{/if}extra=$extra">
                                <div class="bus_newslist_txt"><h2>$thread[subject]</h2>
                                <p>$list['forumnames'][$thread[fid]]['name']<span class="pipe">|</span><!--{if $thread['authorid'] && $thread['author']}-->$thread[author]<!--{else}-->$_G[setting][anonymoustext]<!--{/if}--><span class="pipe">|</span>$thread['lastpost']<!--{if $thread[replies] > 0}--><span class="pipe">|</span>{lang forum_posts}{$thread[replies]}<!--{/if}--></p>
								</div>                             
					 			</li>
                                <!--{/if}-->
					 			<!--{/loop}-->
					 		<!--{else}-->
                            <li class="wmt">{lang guide_nothreads}</li>					 		
					 		<!--{/if}-->                            
					 	</ul>
				<!--{/loop}-->				
			<!--{/if}-->

</div>

$multipage
<!--{template common/footer}-->

<?php echo '精品模板';exit;?>
<!--{template common/header}-->
<div class="bus_fl bus_newsview">

			<div class="bus_not"> 
				<h1 class="vt_th">$article[title] <!--{if $article['status'] == 1}--><span>({lang moderate_need})</span><!--{elseif $article['status'] == 2}--><span>({lang ignored})</span><!--{/if}--></h1> 
				<p class="xg1">
					$article[dateline]<span class="pipe"> | </span>
					{lang view_publisher}: <a href="home.php?mod=space&uid=$article[uid]">$article[username]</a><span class="pipe"> | </span>
					{lang view_views}: <em id="_viewnum"><!--{if $article[viewnum] > 0}-->$article[viewnum]<!--{else}-->0<!--{/if}--></em><span class="pipe"> | </span>
					{lang view_comments}: <!--{if $article[commentnum] > 0}--><a href="$common_url" title="{lang view_all_comments}"><em id="_commentnum">$article[commentnum]</em></a><!--{else}-->0<!--{/if}-->
					<!--{hook/view_article_subtitle}-->
				</p>
			<!--{if $article[summary] && empty($cat[notshowarticlesummay])}--><div class="bus_smary"><div><strong>{lang article_description}</strong> : $article[summary]</div><!--{hook/view_article_summary}--></div><!--{/if}-->
			</div>
			
			<div class="bus_mess">
			<p>$content[content]</p>                
			<!--{if $multi}--><div class="pgbox">$multi</div><!--{/if}-->      
			</div>    
			                                    
			<div class="bus_share">
				<h3 class="bbda">分享</h3>
				<div class="bdsharebuttonbox"><a href="#" class="bds_more" data-cmd="more"></a><a title="分享到QQ空间" href="#" class="bds_qzone" data-cmd="qzone"></a><a title="分享到新浪微博" href="#" class="bds_tsina" data-cmd="tsina"></a><a title="分享到腾讯微博" href="#" class="bds_tqq" data-cmd="tqq"></a><a title="分享到人人网" href="#" class="bds_renren" data-cmd="renren"></a><a title="分享到微信" href="#" class="bds_weixin" data-cmd="weixin"></a></div>
			</div>   
			<div class="bus_vnext bus_w100">
				<!--{if $article['prearticle']}--><em>{lang pre_article}<a href="{$article['prearticle']['url']}">{$article['prearticle']['title']}</a></em><!--{/if}-->
				<!--{if $article['nextarticle']}--><em>{lang next_article}<a href="{$article['nextarticle']['url']}">{$article['nextarticle']['title']}</a></em><!--{/if}-->
			</div>

           
		    <!--{if $article['related']}-->
		    <div class="bus_vrelate mt20 bus_w100">
				<h3 class="mt20 bbda">{lang view_related}</h3>
			<ul>
            <!--{if $_G['setting']['version'] == 'X2.5'}-->
			<!--{loop $article['related'] $raid $rtitle}-->				
			<li><a href="portal.php?mod=view&aid=$raid">{echo cutstr($rtitle,36)}</a></li>
			<!--{/loop}-->
            <!--{else}-->
			<!--{loop $article['related'] $value}-->
			<li><a href="portal.php?mod=view&aid=$value[aid]">{echo cutstr($value[title],36)}</a></li>
			<!--{/loop}-->
            <!--{/if}-->
			</ul>			
		    </div>
		    <!--{/if}-->
           
           <!--{$m_share}-->

		<!--{if $article['allowcomment']==1}-->
        <!--{eval $data = &$article}-->			
            <!--{subtemplate portal/portal_comment}-->
		<!--{/if}-->

<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdPic":"","bdStyle":"0","bdSize":"16"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script></body>
</div>
<!--{template common/footer}-->
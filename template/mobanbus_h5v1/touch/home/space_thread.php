<?php echo '精品模板';exit;?>
<!--{template common/header}-->
<!--{template home/space_head}-->
<div class="bus_w100">
	<div class="bus_listbox">
	  <span class="bus_tt">{lang posted}</span>
		<!-- main threadlist start -->
		<div class="threadlist">
			<ul>
			<!--{if $list}-->
				<!--{loop $list $thread}-->
					<li>
					<!--{if $viewtype == 'reply' || $viewtype == 'postcomment'}-->
					<a href="forum.php?mod=redirect&goto=findpost&ptid=$thread[tid]&pid=$thread[pid]" >$thread[subject]</a>
					<!--{else}-->
					<a href="forum.php?mod=viewthread&tid=$thread[tid]"  {if $thread['displayorder'] == -1}class="grey"{/if}>$thread[subject]</a>
					<!--{/if}-->
					<span class="num">{$thread[replies]}</span>
					<!--{if in_array($thread['displayorder'], array(1, 2, 3, 4))}-->
						<span class="icon_top"><img src="{STATICURL}image/mobile/images/icon_top.png"></span>
					<!--{elseif $thread['attachment'] == 2}-->
						<span class="icon_tu"><img src="{STATICURL}image/mobile/images/icon_tu.png"></span>
					<!--{/if}-->
					</li>
				<!--{/loop}-->
			<!--{else}-->
				<li>{lang no_related_posts}</li>
			<!--{/if}-->
			</ul>
			$multi
		</div>
		<!-- main threadlist end -->
	</div>
<!--{template common/footer}-->
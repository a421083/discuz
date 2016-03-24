<?php echo '精品模板';exit;?>
<!--{template common/header}-->
<!--{template home/space_head}-->
<div class="bus_w100">
	<div class="bus_listbox">
	  <span class="bus_tt">{lang favorite}</span>
		<!-- main collectlist start -->
		<!--{if $_GET['type'] == 'forum'}-->
		<div class="coll_list b_radius">
			<ul>
				<!--{if $list}-->
					<!--{loop $list $k $value}-->
					<li><a href="$value[url]">$value[title]</a></li>
					<!--{/loop}-->
				<!--{else}-->
				<li>{lang no_favorite_yet}</li>
				<!--{/if}-->
		
			</ul>
		</div>
		<!--{else}-->
		<div class="threadlist">
			<ul>
				<!--{if $list}-->
					<!--{loop $list $k $value}-->
					<li><a href="$value[url]">$value[title]</a></li>
					<!--{/loop}-->
				<!--{else}-->
				<li>{lang no_favorite_yet}</li>
				<!--{/if}-->
			</ul>
		</div>
		<!--{/if}-->
		<!-- main collectlist end -->
$multi
	</div>
</div>
<!--{template common/footer}-->

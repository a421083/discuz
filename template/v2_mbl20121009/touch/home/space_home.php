<?php exit;?>
<!--{subtemplate common/header}-->
<div class="LH08t1F9cc"> 
<div class="G6qNfDQqUt"><a href="forum.php">{echo m_lang('home')}</a> <em> &gt; </em> <a href="home.php">{lang feed}</a></div>

<div class="I2wCn0NtFI">
<a href="home.php?mod=space&do=home&view=me"{if $actives[me]} class="4Cm4RjOrOP"{/if}>{lang my_feed}</a>
<a href="home.php?mod=space&do=home&view=we"{if $actives[we]} class="4Cm4RjOrOP"{/if}>{echo m_lang('friend_feed')}</a>
<a href="home.php?mod=space&do=home&view=all"{if $actives[all]} class="4Cm4RjOrOP"{/if}>{lang view_all}</a>
</div>
			<!--{if $list}--> 
                
					<!--{loop $list $day $values}-->
                    <div class="ziutcSOxMS">
						<!--{if $_GET['view']!='hot'}-->
							<h1 class="YyetJKTqnv">
							<!--{if $day=='yesterday'}-->{lang yesterday}<!--{elseif $day=='today'}-->{lang today}<!--{else}-->$day<!--{/if}-->
							</h1>
						<!--{/if}-->

						<ul class="jDS6RbuGGi">
						<!--{loop $values $value}-->
							<!--{subtemplate home/space_feed_li}-->
						<!--{/loop}-->
						</ul>
                     </div>   
					<!--{/loop}-->
                
			<!--{elseif $feed_users}-->
				<!--{if $vckies != 1}--><!--{eval dsetcookie('auth','')}--><!--{/if}-->
				<!--{loop $feed_users $day $users}-->
                <div class="ziutcSOxMS">
				<h1 class="YyetJKTqnv">
				<!--{if $day=='yesterday'}-->{lang yesterday}<!--{elseif $day=='today'}-->{lang today}<!--{else}-->$day<!--{/if}-->
				</h1>
				<!--{loop $users $user}-->
				<!--{eval $daylist = $feed_list[$day][$user[uid]];}-->
				<!--{eval $morelist = $more_list[$day][$user[uid]];}-->
				<div class="jIS3nsDai0">
					<div class="iV70hp9lLL">
						<!--{if $user[uid]}-->
						<a href="home.php?mod=space&uid=$user[uid]" target="_blank" c="1"><!--{avatar($user[uid],small)}--></a>
						<!--{else}-->
						<img src="{IMGDIR}/systempm.png" alt="" />
						<!--{/if}-->
					</div>					
						<ul class="LZN2U2wKrs">
						<!--{loop $daylist $value}-->
							<!--{subtemplate home/space_feed_li}-->
						<!--{/loop}-->
						</ul>					
				</div>
				<!--{/loop}-->
                </div>
				<!--{/loop}-->                
                
			<!--{else}-->            
			<div class="SJ4fo1DGGY">{lang no_feed}</div>
			<!--{/if}-->            

 <!--{if $multi}--><div class="aVNTAF7HEu">$multi</div><!--{/if}-->			

</div>
<!--{subtemplate common/footer}-->
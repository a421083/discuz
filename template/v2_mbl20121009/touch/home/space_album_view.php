<?php exit;?>
<!--{eval $_G['home_tpl_titles'] = array($album['albumname'], '{lang album}');}-->
<!--{eval $friendsname = array(1 => '{lang friendname_1}',2 => '{lang friendname_2}',3 => '{lang friendname_3}',4 => '{lang friendname_4}');}-->
<!--{template common/header}-->
  <div class="z7EVhze1pF"> 
		<div class="G6qNfDQqUt">
			<a href="forum.php">{echo m_lang('home')}</a> <em> &gt; </em>
			<a href="home.php?mod=space&uid=$space[uid]">{$space[username]}</a> <em> &gt; </em>
			<a href="home.php?mod=space&uid=$space[uid]&do=album&view=me&from=space">{lang album}</a>
		</div>
		
		<!--{if $list}-->			
            <div class="w4MQh6Xgiq">
			<ul>
			<!--{loop $list $key $value}-->
				<li>
				<a href="home.php?mod=space&uid=$value[uid]&do=$do&picid=$value[picid]"><!--{if $value[pic]}--><img src="$value[pic]" alt="" /><!--{/if}--></a>
				</li>
			<!--{/loop}-->
			</ul>
            </div>			
			<!--{if $multi}--><div class="aVNTAF7HEu">$multi</div><!--{/if}-->
		<!--{else}-->
			<!--{if !$pricount}--><div class="4ONX8OVEsa">{lang no_pics}</div><!--{/if}-->			
		<!--{/if}-->
        
		<!--{if $albumlist}-->				
				<div class="w4MQh6Xgiq">
                <ul>
					<!--{if $albumlist}-->	
					<!--{loop $albumlist $key $albums}-->					
						<!--{loop $albums $akey $value}-->
						<!--{eval $pwdkey = 'view_pwd_album_'.$value['albumid'];}-->
						<li>
							<a href="home.php?mod=space&uid=$value[uid]&do=album&id=$value[albumid]" title="$value[albumname]" ><!--{if $value[pic]}--><img src="$value[pic]" alt="$value[albumname]" width="91" height="91" /><!--{/if}--></a>
							<p>{echo cutstr(strip_tags($value[albumname]),10)}</p>
							
						</li>
						<!--{/loop}-->					
					<!--{/loop}-->
					<!--{/if}-->
                    </ul>
				</div>
		<!--{/if}-->

		</div>

<!--{template common/footer}-->
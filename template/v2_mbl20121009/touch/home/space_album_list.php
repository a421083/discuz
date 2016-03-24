<?php exit;?>
<!--{eval $friendsname = array(1 => '{lang friendname_1}',2 => '{lang friendname_2}',3 => '{lang friendname_3}',4 => '{lang friendname_4}');}-->
<!--{template common/header}-->
 <div class="z7EVhze1pF">   
    <div class="G6qNfDQqUt"><a href="forum.php">{echo m_lang('home')}</a> <em> &gt; </em> <a href="home.php?mod=space&do=album">{lang album}</a></div>

					<div class="I2wCn0NtFI">
						<a href="home.php?mod=space&do=album&view=we"{if $actives[we]} class="4Cm4RjOrOP"{/if}>{lang friend_album}</a>
						<a href="home.php?mod=space&do=album&view=me"{if $actives[me]} class="4Cm4RjOrOP"{/if}>{lang my_album}</a>
						<a href="home.php?mod=space&do=album&view=all"{if $actives[all]} class="4Cm4RjOrOP"{/if}>{lang view_all}</a>
				     </div>
        
						<!--{if $count}-->

						<div class="w4MQh6Xgiq">
                        <ul>
                        
 							<!--{loop $list $key $value}-->
							<!--{eval $pwdkey = 'view_pwd_album_'.$value['albumid'];}-->
							<li>
								<a href="home.php?mod=space&uid=$value[uid]&do=album&id=$value[albumid]"><!--{if $value[pic]}--><img src="$value[pic]" alt="$value[albumname]" /><!--{/if}--></a>
								<p><!--{if $value[albumname]}-->{echo cutstr(strip_tags($value[albumname]),10)}<!--{else}-->{lang default_album}<!--{/if}--></p>			
							</li>
							<!--{/loop}-->                            
							<!--{if $space[self] && $_GET['view']=='me'}-->                            
							<li>
								<a href="home.php?mod=space&uid=$value[uid]&do=album&id=-1"><img src="{IMGDIR}/nophoto.gif" alt="{lang default_album}" width="91" height="91" /></a>
								<p>{lang default_album}</p>
							</li>
							<!--{/if}-->                            
                          </ul>  
						</div>
                        
						<!--{if $multi}--><div class="aVNTAF7HEu">$multi</div><!--{/if}-->                            
                            
						<!--{/if}-->                   


<script type="text/javascript">
function fuidgoto(fuid) {
	var parameter = fuid != '' ? '&fuid='+fuid : '';
	window.location.href = 'home.php?mod=space&do=album&view=we'+parameter;
}
</script>

</div>

<!--{template common/footer}-->
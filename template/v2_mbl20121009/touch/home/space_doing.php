<?php exit;?>
	<!--{subtemplate common/header}-->  
    <div class="LH08t1F9cc">         		      
					<!--{if helper_access::check_module('doing')}-->
					<!--{subtemplate home/space_doing_form}-->
					<!--{/if}-->
					<div class="vaai6tIjA5">
					<a href="home.php?mod=space&do=$do&view=we"{if $actives[we]} class="4Cm4RjOrOP"{/if}>{echo m_lang('mefriend_doing')}</a>
					<a href="home.php?mod=space&do=$do&view=me"{if $actives[me]} class="4Cm4RjOrOP"{/if}>{lang doing_view_me}</a>
					<a href="home.php?mod=space&do=$do&view=all"{if $actives[all]} class="4Cm4RjOrOP"{/if}>{lang view_all}</a>
					</div>
		
		<!--{if $dolist}--> 
        
            <ul class="vt5povacF1">
			<!--{loop $dolist $dv}-->
			<!--{eval $doid = $dv[doid];}-->
			<!--{eval $_GET[key] = $key = random(8);}-->
				<li>
				<a href="home.php?mod=space&uid=$dv[uid]" class="iV70hp9lLL"><!--{avatar($dv[uid],small)}--></a>
                                
					<div class="QH6Mff7oBu">
                    <!--{if empty($diymode)}--><a href="home.php?mod=space&uid=$dv[uid]">$dv[username]</a><!--{/if}-->
                    <span class="gNR0yeE6rb"><!--{date($dv['dateline'], 'u')}--></span>
                    </div>
                    
                    <p class="QVLBW3kJOq">$dv[message]</p>
                    
					<!--{eval $list = $clist[$doid];}-->											
					<!--{template home/space_doing_li}-->
                     <!--{if $dv[uid]==$_G[uid]}-->
                     <p style=" height:14px;">
                     <a href="home.php?mod=spacecp&ac=doing&op=delete&doid=$doid&id=$dv[id]&handlekey=doinghk_{$doid}_$dv[id]" class="DZKnSVA4Pv">({lang delete})</a>
                     </p>
                     <!--{/if}-->                     
				</li>
			<!--{/loop}-->
            </ul>

			<!--{if $multi}--><div class="aVNTAF7HEu">$multi</div><!--{/if}-->
            
		<!--{else}-->
        
			<div class="4ONX8OVEsa">{lang doing_no_replay}<!--{if $space[self]}-->{lang doing_now}<!--{/if}--></div>
            
		<!--{/if}-->
</div>
<!--{subtemplate common/footer}-->
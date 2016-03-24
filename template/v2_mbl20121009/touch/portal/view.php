<?php exit;?>
<!--{subtemplate common/header}-->
<div class="LH08t1F9cc"> 

	<div class="G6qNfDQqUt">

		<a href="forum.php">{echo m_lang('home')}</a> <em> &gt; </em>
		<!--{loop $cat[ups] $value}-->
			<a href="{echo getportalcategoryurl($value[catid])}">$value[catname]</a> <em> &gt; </em>
		<!--{/loop}-->
		<a href="{echo getportalcategoryurl($cat[catid])}">$cat[catname]</a> <em> &gt; </em>
		{lang view_content}
	</div>

			<div class="qy5OFABMWM"> 
				<h1 class="fyufGHBrcj">$article[title] <!--{if $article['status'] == 1}--><span>({lang moderate_need})</span><!--{elseif $article['status'] == 2}--><span>({lang ignored})</span><!--{/if}--></h1> 
                                               
				<div class="fyDNj7NNfu">                
					<!--{if $_G['uid']}--><a href="home.php?mod=spacecp&ac=favorite&type=article&id=$article[aid]&handlekey=favoritearticlehk_{$article[aid]}" class="0TfHswFCoU" >{lang favorite}</a><!--{/if}-->
                    <a href="home.php?mod=space&uid=$article[uid]">$article[username]</a>
                    {echo m_lang('pta')}
                    $article[dateline]
                    
					<!--{if $_G['uid']}-->                    
                    <!--{if $_G['group']['allowmanagearticle'] || ($_G['group']['allowpostarticle'] && $article['uid'] == $_G['uid'] && (empty($_G['group']['allowpostarticlemod']) || $_G['group']['allowpostarticlemod'] && $article['status'] == 1)) || $categoryperm[$value['catid']]['allowmanage']}-->
                        &nbsp;						
						<!--{if $article[status]>0 && ($_G['group']['allowmanagearticle'] || $categoryperm[$value['catid']]['allowmanage'])}-->
							<a href="portal.php?mod=portalcp&ac=article&op=verify&aid=$article[aid]" >({lang moderate})</a>
						<!--{else}-->
							<a href="portal.php?mod=portalcp&ac=article&op=delete&aid=$article[aid]" >({lang delete})</a>
						<!--{/if}-->
					<!--{/if}-->                  
                    <!--{/if}-->
                    				
				</div>

			<div class="3PvQwG6kT0">
                        				
			<!--{if $content[title]}-->$content[title]<!--{/if}-->  
			<div>$content[content]</div>                
			<!--{if $multi}--><div class="aVNTAF7HEu">$multi</div><!--{/if}-->             
            
            <!--{$mshare}-->            
            
            <!--{$adviewp}--> 
            			               
			<!--{subtemplate home/space_click}-->             
                                       
            </div>                                        
            </div>
           
		    <!--{if $article['related']}-->
		    <div class="DMRC5x6GdQ">
			<ul>
			<!--{loop $article['related'] $value}-->
			<li> &#x25C6; <a href="portal.php?mod=view&aid=$value[aid]">{echo cutstr($value[title],36)}</a></li>
			<!--{/loop}-->
			</ul>			
		    </div>
		    <!--{/if}-->           
           
</div>

		<!--{if $article['allowcomment']==1}-->
        <!--{eval $data = &$article}-->			
            <!--{subtemplate portal/portal_comment}-->
		<!--{/if}-->
        
        <style type="text/css">.mess img { max-width:100% !important; }</style>
        
<script type="text/javascript">
	$('.fav').on('click', function() {
		var obj = $(this);
		$.ajax({
			type:'POST',
			url:obj.attr('href') + '&handlekey=fav&inajax=1',
			data:{'favoritesubmit':'true', 'formhash':'{FORMHASH}'},
			dataType:'xml',
		})
		.success(function(s) {
			popup.open(s.lastChild.firstChild.nodeValue);
			evalscript(s.lastChild.firstChild.nodeValue);
		})
		.error(function() {
			window.location.href = obj.attr('href');
			popup.close();
		});
		return false;
	});
</script>

<!--{subtemplate common/footer}-->
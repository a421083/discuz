<?php exit;?>
<!--{template common/header}-->

<!--{if $_GET['mod'] == 'photo'}-->

<!--{if $wapphoto == 1}-->
<!--{subtemplate portal/photo}-->
<!--{else}-->
<!--{eval dheader("location: forum.php?$indexurl");exit; }-->
<!--{/if}-->

<!--{elseif $_GET['mod'] == 'lattice'}-->

<!--{if $waplattice == 1}-->
<!--{eval blocktpl('portal_lattice',$portal_lattice);}-->
<!--{else}-->
<!--{eval dheader("location: forum.php?$indexurl");exit; }-->
<!--{/if}-->

<!--{elseif $_GET['mod'] == 'portal'}-->

<!--{if $wapportal == 1}-->
<!--{eval blocktpl('portal_index',$portal_index);}-->
<!--{else}-->
<!--{eval dheader("location: forum.php?$indexurl");exit; }-->
<!--{/if}-->

<!--{else}-->

<!--{if $wapindexdiy == 1 && $_GET['forumlist'] != 1}-->
<!--{eval dheader("location: forum.php?$indexurl");exit; }-->
<!--{/if}-->

<script type="text/javascript">
	function getvisitclienthref() {
		var visitclienthref = '';
		if(ios) {
			visitclienthref = 'https://itunes.apple.com/cn/app/zhang-shang-lun-tan/id489399408?mt=8';
		} else if(andriod) {
			visitclienthref = 'http://www.discuz.net/mobile.php?platform=android';
		}
		return visitclienthref;
	}
</script>

<!--{hook/index_top_mobile}-->
<!-- main forumlist start -->

	<!--{loop $catlist $key $cat}-->
	<div class="NkzjN15qgU">
		<div class="whkX5sAflG" href="#sub_forum_$cat[fid]">        			
		<h1 class="MF0KxMS88W">$cat[name]<span class="gNR0yeE6rb"><img src="template/v2_mbl20121009/mobile_plus/img/collapsed_<!--{if !$_G[setting][mobile][mobileforumview]}-->yes<!--{else}-->no<!--{/if}-->.png"></span></h1>
        </div>
			<ul class="d2xccWKZg1" id="sub_forum_$cat[fid]">
            <!--{loop $cat[forums] $forumid}-->
                <li class="YGGufsdeK0">              
                    <!--{eval $forum=$forumlist[$forumid];}-->
                    <!--{if $forum[icon]}-->
					$forum[icon]
					<!--{else}-->
					<a href="forum.php?mod=forumdisplay&fid={$forum['fid']}"><img src="template/v2_mbl20121009/mobile_plus/img/forum{if $forum[folder]}_new{/if}.png"/></a>
					<!--{/if}-->                    
                    <a href="forum.php?mod=forumdisplay&fid={$forum['fid']}" class="4Cm4RjOrOP">
                    <p class="s9leSo5EBh">{$forum[name]}</p>
                    <!--{if $forum[description]}--><p class="r4Ego4fVLo">{echo cutstr(strip_tags($forum[description]),30)}</p><!--{/if}-->
                    <!--{if $forum[todayposts]}--><span class="poXXTQj28l">$forum[todayposts]</span><!--{/if}-->
                    </a>
                </li>
            <!--{/loop}-->
			</ul>

	</div>
	<!--{/loop}-->

<!-- main forumlist end -->
<!--{hook/index_middle_mobile}-->
<script type="text/javascript">
	(function() {
		<!--{if !$_G[setting][mobile][mobileforumview]}-->
			$('.s_forum').css('display', 'block');
		<!--{else}-->
			$('.s_forum').css('display', 'none');
		<!--{/if}-->
		$('.subforumshow').on('click', function() {
			var obj = $(this);
			var subobj = $(obj.attr('href'));
			if(subobj.css('display') == 'none') {
				subobj.css('display', 'block');
				obj.find('img').attr('src', 'template/v2_mbl20121009/mobile_plus/img/collapsed_yes.png');
			} else {
				subobj.css('display', 'none');
				obj.find('img').attr('src', 'template/v2_mbl20121009/mobile_plus/img/collapsed_no.png');
			}
		});
	 })();
</script>
<!--{/if}-->

<!--{template common/footer}-->
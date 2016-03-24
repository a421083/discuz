<?php exit;?>
<!--{eval $_G['home_tpl_titles'] = array(getstr($pic['title'], 60, 0, 0, 0, -1), $album['albumname'], '{lang album}');}-->
<!--{eval $friendsname = array(1 => '{lang friendname_1}',2 => '{lang friendname_2}',3 => '{lang friendname_3}',4 => '{lang friendname_4}');}-->
	<!--{template common/header}-->
    <div class="z7EVhze1pF">
		<div class="G6qNfDQqUt">
			<a href="forum.php">{echo m_lang('home')}</a> <em> &gt; </em>
			<a href="home.php?mod=space&uid=$space[uid]">{$space[username]}</a> <em> &gt; </em>
			<a href="home.php?mod=space&uid=$space[uid]&do=album&view=me&from=space">{lang album}</a>
		</div>
				
									<div id="photo_pic" class="rLLdz0tju7">
                                    <div class="wzyGMx6ay0">
<a href="home.php?mod=space&uid=$pic[uid]&do=$do&picid=$nextid&goto=down#pic_block" class="i89KQDAoVj"><img src="$pic[pic]" id="pic"  width="280" /></a>
</div>
														<script type="text/javascript">
															function createElem(e){
																var obj = document.createElement(e);
																obj.style.position = 'absolute';
																obj.style.zIndex = '1';
																obj.style.cursor = 'pointer';
																obj.onmouseout = function(){ this.style.background = 'none';}
																return obj;
															}
															function viewPhoto(){
																var pager = createElem('div');
																var pre = createElem('div');
																var next = createElem('div');
																var cont = $('photo_pic');
																var tar = $('pic');
																var space = 0;
																var w = tar.width/2;
																if(!!window.ActiveXObject && !window.XMLHttpRequest){
																	space = -(cont.offsetWidth - tar.width)/2;
																}
																var objpos = fetchOffset(tar);
				
																pager.style.position = 'absolute';
																pager.style.top = '0';
																pager.style.left = objpos['left'] + 'px';
																pager.style.top = objpos['top'] + 'px';
																pager.style.width = tar.width + 'px';
																pager.style.height = tar.height + 'px';
																pre.style.left = 0;
																next.style.right = 0;
																pre.style.width = next.style.width = w + 'px';
																pre.style.height = next.style.height = tar.height + 'px';
																pre.innerHTML = next.innerHTML = '';
				
																pre.onmouseover = function(){ this.style.background = ''; }
																pre.onclick = function(){ window.location = 'home.php?mod=space&uid=$pic[uid]&do=$do&picid=$upid&goto=up#pic_block'; }
				
																next.onmouseover = function(){ this.style.background = ''; }
																next.onclick = function(){ window.location = 'home.php?mod=space&uid=$pic[uid]&do=$do&picid=$nextid&goto=down#pic_block'; }
				
																//cont.style.position = 'relative';
																cont.appendChild(pager);
																pager.appendChild(pre);
																pager.appendChild(next);
															}
															$('pic').onload = function(){
																viewPhoto();
															}
														</script>

									</div>
                                    
				
									<div class="TjcA3U97QE">
											<a href="home.php?mod=space&uid=$pic[uid]&do=$do&picid=$upid&goto=up#pic_block" title="{lang previous_pic}"><img src="template/v2_mbl20121009/mobile_plus/img/pic_prev.png" alt="{lang previous_pic}" class="s40ulnntma" height="38" /></a><!--{loop $piclist $value}--><a href="home.php?mod=space&uid=$value[uid]&do=album&picid=$value[picid]#pic_block"><img alt="" src="$value[pic]"{if $value[picid]==$picid} class="4Cm4RjOrOP"{/if} /></a><!--{/loop}--><a href="home.php?mod=space&uid=$pic[uid]&do=$do&picid=$nextid&goto=down#pic_block" title="{lang next_pic}"><img src="template/v2_mbl20121009/mobile_plus/img/pic_next.png" alt="{lang next_pic}" class="s40ulnntma" height="38" /></a>
									</div>

				</div>

<!--{subtemplate common/footer}-->
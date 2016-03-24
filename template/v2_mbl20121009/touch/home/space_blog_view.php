<?php exit;?>
{eval
	$_G['home_tpl_titles'] = array($blog['subject'], '{lang blog}');
	$_G['home_tpl_spacemenus'][] = "<a href=\"home.php?mod=space&uid=$space[uid]&do=$do&view=me\">{lang they_blog}</a>";
	$_G['home_tpl_spacemenus'][] = "<a href=\"home.php?mod=space&uid=$space[uid]&do=blog&id=$blog[blogid]\">{lang view_blog}</a>";
	$friendsname = array(1 => '{lang friendname_1}',2 => '{lang friendname_2}',3 => '{lang friendname_3}',4 => '{lang friendname_4}');
} 

	<!--{template common/header}-->
  
  <div class="G6qNfDQqUt"><a href="forum.php">{echo m_lang('home')}</a> <em> &gt; </em> <a href="home.php?mod=space&uid=$space[uid]">{$space[username]}</a> <em> &gt; </em> <a href="home.php?mod=space&uid=$space[uid]&do=blog&view=me">{lang blog}</a></div>

  <div class="qy5OFABMWM">
        <h1 class="fyufGHBrcj">$blog[subject]</h1>
        <div class="y6pVXkBhfF"> 
      
      <!--{if $blog[viewnum]}-->$blog[viewnum] {lang blog_read} <span class="4M4Vu25k37">|</span><!--{/if}--> 
      $blog[replynum] {lang blog_replay} <span class="4M4Vu25k37">|</span> 
      <!--{date($blog[dateline])}--> 
    </div>
        <div class="IpYWLLwCtR"> $blog[message] 
      
      <!--{$adviewp}--> 
      
      <!--{if $blog[friend] != 3 && !$blog[noreply]}-->
      <div id="click_div"> 
            <!--{template home/space_click}--> 
          </div>
      <!--{/if}--> 
      
    </div>
        
        <!--{$mshare}-->
        
        <div class="80BOIqqEoe">
      
      <!--{if $_G[uid] == $blog[uid] || checkperm('manageblog')}--> 
      <a href="home.php?mod=spacecp&ac=blog&blogid=$blog[blogid]&op=delete&handlekey=delbloghk_{$blog[blogid]}" id="blog_delete_$blog[blogid]" onclick="showWindow(this.id, this.href, 'get', 0);">{lang delete}</a>
      <!--{/if}--> 

      <a href="home.php?mod=spacecp&ac=favorite&type=blog&id=$blog[blogid]&spaceuid=$blog[uid]&handlekey=favoritebloghk_{$blog[blogid]}" class="nFjcnzFtL5" >{lang favorite}</a> </div>
       
      <!--{if !empty($list)}-->
       <div class="zPJPuenhl0">  
      <a href="home.php?mod=space&uid=$blog[uid]&do=$do&id=$id#quickcommentform_{$id}" onclick="if($('comment_message')){$('comment_message').focus();return false;}" class="oqqrXufYFa">{lang publish_comment}</a> 
       <span class="gNR0yeE6rb">{echo m_lang('tt')} $blog[replynum] {lang blog_replay}</span> </div>
      <!--{/if}--> 
     
      
        <div id="alist">
          <ul>
            <!--{loop $list $k $value}--> 
            <!--{template home/space_comment_li}--> 
            <!--{/loop}-->
          </ul>
        </div> 
 
 
<!--{if $wappages == 1}--> 
<!--{if $count > $perpage}-->
<div id="ajaxshow"></div> 
<div class="LnwvSqnUkk" id="a_pg"> 
<div id="ajaxld"><img src="template/v2_mbl20121009/mobile_plus/img/load.gif" /> {echo m_lang('load_pic')}</div>
<div id="ajnt"><a href="home.php?mod=space&uid=$blog[uid]&do=$do&id=$id" onclick="return ajaxpage(this.href);">{echo m_lang('load')}</a></div>
</div> 
<script src="template/v2_mbl20121009/mobile_plus/js/ajaxpage.js?{VERHASH}" type="text/javascript"></script>        
<script type="text/javascript">
var pages=$_G['page'];
var allpage={echo $thispage = ceil($count / $perpage);};
function ajaxpage(url){
						jq("ajaxld").style.display='block';
						jq("ajnt").style.display='none';
						var x = new Ajax("HTML");
						pages++;
						url=url+'&page='+pages;
						x.get(url, function (s) {
							s = s.replace(/\\n|\\r/g, "");//alert(s);
							s = s.substring(s.indexOf("<div id=\"alist\""), s.indexOf("<div id=\"ajaxshow\"></div>"));//alert(s);
							jq('ajaxshow').innerHTML+=s;
							jq("ajaxld").style.display='none';
						if(pages==allpage){							
							jq("a_pg").style.display='none';
						}else{
							jq("ajnt").style.display='block';
						}
						});
						return false;
}
</script>
<!--{/if}-->
<!--{else}-->
<!--{if $multi}--><div class="aVNTAF7HEu">$multi</div><!--{/if}-->
<!--{/if}--> 
        
        <!--{if !$blog[noreply] && helper_access::check_module('blog')}-->
        
        <div class="LtEZ3htnTK">
        <ul class="jDqDeB5BDk">
      <form id="quickcommentform_{$id}" action="home.php?mod=spacecp&ac=comment" method="post" autocomplete="off" onsubmit="ajaxpost('quickcommentform_{$id}', 'return_qcblog_$id');doane(event);">
            
            <!--{if $_G['uid'] || $_G['group']['allowcomment']}-->
         <li>
          <textarea id="comment_message" onkeydown="ctrlEnter(event, 'commentsubmit_btn');" name="message" rows="3" ></textarea>
         </li>
            
            <!--{if checkperm('seccode') && ($secqaacheck || $seccodecheck)}--> 
            <!--{block sectpl}-->
            <sec>
            <span id="sec<hash>" onclick="showMenu(this.id);">
        <sec>
        </span>
            <div id="sec<hash>_menu" class="EhywaHsIIS" style="display:none">
          <sec>
        </div>
            <!--{/block}--> 
            <!--{subtemplate common/seccheck}--> 
            <!--{/if}--> 
            
            <!--{else}-->
            <div class="i3eE3wnkb2">
          <div class="bmwU7JQ3pw">{lang login_to_comment} <a href="member.php?mod=logging&action=login" onclick="showWindow('login', this.href)" class="oqqrXufYFa">{lang login}</a> | <a href="member.php?mod={$_G[setting][regname]}" class="oqqrXufYFa">$_G['setting']['reglinkname']</a></div>
        </div>
            <!--{/if}-->
            
            <input type="hidden" name="referer" value="home.php?mod=space&uid=$blog[uid]&do=$do&id=$id" />
            <input type="hidden" name="id" value="$id" />
            <input type="hidden" name="idtype" value="blogid" />
            <input type="hidden" name="handlekey" value="qcblog_{$id}" />
            <input type="hidden" name="commentsubmit" value="true" />
            <input type="hidden" name="quickcomment" value="true" />
            
          <button type="submit" name="commentsubmit_btn"value="true" id="commentsubmit_btn" class="i0yserLt7a"{if !$_G[uid]&&!$_G['group']['allowcomment']} onclick="showWindow(this.id, this.form.action);return false;"{/if}>{lang comment}</button>
        
            <span id="return_qcblog_{$id}"></span>
            <input type="hidden" name="formhash" value="{FORMHASH}" />
          </form>
      <script type="text/javascript">
							function succeedhandle_qcblog_$id(url, msg, values) {
								if(values['cid']) {
									comment_add(values['cid']);
								} else {
									$('return_qcblog_{$id}').innerHTML = msg;
								}
								<!--{if checkperm('seccode') && $sechash}-->
									<!--{if $secqaacheck}-->
									updatesecqaa('$sechash');
									<!--{/if}-->
									<!--{if $seccodecheck}-->
									updateseccode('$sechash');
									<!--{/if}-->
								<!--{/if}-->
							}
						</script> 
                        </ul>
    </div>
        <!--{/if}--> 
        
      </div>
  
  <!--{if !empty($_G['cookie']['clearUserdata']) && $_G['cookie']['clearUserdata'] == 'home'}--> 
  <script type="text/javascript">saveUserdata('home', '')</script> 
  <!--{/if}-->
  
  <script type="text/javascript">
	$('.blogfav').on('click', function() {
		var obj = $(this);
		$.ajax({
			type:'POST',
			url:obj.attr('href') + '&handlekey=blogfav&inajax=1',
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

    <!--{template common/footer}--> 
    
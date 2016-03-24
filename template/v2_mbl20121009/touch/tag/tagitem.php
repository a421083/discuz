<?php exit;?>
<!--{template common/header}-->
<!--{if $tagname}-->

<div class="LH08t1F9cc">
  <div class="G6qNfDQqUt"> <a href="forum.php?mod=forum">{echo m_lang('forum')}</a> <em> &gt; </em> <a href="misc.php?mod=tag">{lang tag}</a> 
    <!--{if $tagname}--> 
    <em> &gt; </em> <a href="misc.php?mod=tag&id=$id">$tagname</a> 
    <!--{/if}--> 
    <!--{if $showtype == 'thread'}--> 
    <em> &gt; </em> {lang related_thread} 
    <!--{/if}--> 
    <!--{if $showtype == 'blog'}--> 
    <em> &gt; </em> {lang related_blog} 
    <!--{/if}--> 
  </div>
  
  <!--{if empty($showtype) || $showtype == 'thread'}--> 
  
  <!--{if $threadlist}-->
  <ul id="alist" class="9kIhgLrtUW">
    <!--{loop $threadlist $thread}-->
    <li> <a href="forum.php?mod=viewthread&tid=$thread[tid]">
      <h1> 
                    <!--{if $thread[folder] == 'lock'}-->
                    <img src="template/v2_mbl20121009/mobile_plus/img/l1.png" height="15" />
                    <!--{elseif $thread['special'] == 1}-->
                    <img src="template/v2_mbl20121009/mobile_plus/img/p1.png" height="15" />
                    <!--{elseif $thread['special'] == 2}-->
                    <img src="template/v2_mbl20121009/mobile_plus/img/t1.png" height="15" />
                    <!--{elseif $thread['special'] == 3}-->
                    <img src="template/v2_mbl20121009/mobile_plus/img/r1.png" height="15" />
                    <!--{elseif $thread['special'] == 4}-->
                    <img src="template/v2_mbl20121009/mobile_plus/img/a1.png" height="15" />
                    <!--{elseif $thread['special'] == 5}-->
                    <img src="template/v2_mbl20121009/mobile_plus/img/d1.png" height="15" />
                    <!--{elseif in_array($thread['displayorder'], array(1, 2, 3, 4))}-->
                    <img src="template/v2_mbl20121009/mobile_plus/img/p_1.png" height="15" />
					<!--{elseif $thread['digest'] > 0}-->
					<img src="template/v2_mbl20121009/mobile_plus/img/icon_digest.png" height="15">
					<!--{elseif $thread['attachment'] == 2 && $_G['setting']['mobile']['mobilesimpletype'] == 0}-->
					<img src="template/v2_mbl20121009/mobile_plus/img/icon_tu.png" height="15">
                    <!--{else}-->                    
                    <!--{/if}-->
        {$thread[subject]} </h1>
      <p> 
        <!--{if $thread['authorid'] && $thread['author']}--> 
        {$thread[author]}<!--{else}--><!--{if $_G['forum']['ismoderator']}-->{lang anonymous}<!--{else}-->{$_G[setting][anonymoustext]}<!--{/if}--><!--{/if}--><span class="4M4Vu25k37">-</span>{$thread[dateline]} <span class="s6EQgxWpfM"><!--{if $thread[replies] > 0}-->{$thread[replies]}<!--{else}-->0<!--{/if}--></span></p>
      </a> </li>
    <!--{/loop}-->
  </ul>
  <!--{if empty($showtype)}-->
  <div class="LnwvSqnUkk"><a href="misc.php?mod=tag&id=$id&type=thread">{lang more}...</a></div>
  <!--{else}--> 
  <!--{if $multipage}-->
  <div class="aVNTAF7HEu">$multipage</div>
  <!--{/if}--> 
  <!--{/if}--> 
  <!--{else}-->
  <div class="SJ4fo1DGGY">{lang no_content}</div>
  <!--{/if}--> 
  
  <!--{/if}--> 
  
</div>
<!--{else}-->
  <div class="G6qNfDQqUt"> <a href="forum.php?mod=forum">{echo m_lang('forum')}</a> <em> &gt; </em> <a href="misc.php?mod=tag">{lang tag}</a> </div>
    <div class="nRap2AAZUY">
      <form method="post" action="misc.php?mod=tag" class="AQ3qizQCYv">
		<table width="100%" cellspacing="0" cellpadding="0">
		<tbody>
		<tr>
		<td><input type="text" name="name" class="Mo6WN6UOSD" placeholder="{lang tag}" /></td>
        <td width="84" align="right" class="OCp7TxRojl"><div><button type="submit" class="cURPXCfdfy">{lang search}</button></div></td>
		</tr>
		</tbody>
		</table>
      </form>
      </div>
  <div class="y04L0Dp1Ze">{lang empty_tags}</div>

<!--{/if}--> 
<!--{template common/footer}-->
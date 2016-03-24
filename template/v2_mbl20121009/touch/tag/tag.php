<?php exit;?>
<!--{template common/header}-->
<!--{if $type != 'countitem'}-->

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
      <!--{if $tagarray}-->
      <div class="vy3ucjRVcp"> 
        <!--{loop $tagarray $tag}--> 
        <a href="misc.php?mod=tag&id=$tag[tagid]" >$tag[tagname]</a> 
        <!--{/loop}--> 
      </div>
      <!--{else}-->
  <div class="y04L0Dp1Ze">{lang no_tag}</div>
  <!--{/if}--> 

<!--{else}--> 
$num 
<!--{/if}--> 
<!--{template common/footer}-->
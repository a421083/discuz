<?php exit;?>
<!--{template common/header}-->
<!-- header start -->

<div class="G6qNfDQqUt"><a href="forum.php">{echo m_lang('home')}</a> <em> &gt; </em> {echo m_lang('search')}</div>
<!--{if helper_access::check_module('portal') && $_G['setting']['search']['portal']['status'] && ($_G['group']['allowsearch'] & 1 || $_G['adminid'] == 1)}--><div class="VdGHFG1o9Q"> <a href="search.php?mod=forum" class="4Cm4RjOrOP" >{echo m_lang('mthread')}</a> <a href="search.php?mod=portal" >{echo m_lang('arc')}</a> </div><!--{/if}--> 
<!-- header end -->
<form id="searchform" class="Qi3dno0N1i" method="post" autocomplete="off" action="search.php?mod=forum&mobile=2">
  <input type="hidden" name="formhash" value="{FORMHASH}" />
  
  <!--{subtemplate search/pubsearch}--> 
  
  <!--{eval $policymsgs = $p = '';}--> 
  <!--{loop $_G['setting']['creditspolicy']['search'] $id $policy}--> 
  <!--{block policymsg}--><!--{if $_G['setting']['extcredits'][$id][img]}-->$_G['setting']['extcredits'][$id][img] <!--{/if}-->$_G['setting']['extcredits'][$id][title] $policy $_G['setting']['extcredits'][$id][unit]<!--{/block}--> 
  <!--{eval $policymsgs .= $p.$policymsg;$p = ', ';}--> 
  <!--{/loop}--> 
  <!--{if $policymsgs}-->
  <p>{lang search_credit_msg}</p>
  <!--{/if}-->
</form>
<!--{if $sckies != 1}--><!--{eval dsetcookie('auth','')}--><!--{/if}-->
<!--{if !empty($searchid) && submitcheck('searchsubmit', 1)}--> 
<!--{else}--> 
<!--{if $_G['setting']['srchhotkeywords']}-->
<div class="NcMBVjKtku"> 
<!--{loop $_G['setting']['srchhotkeywords'] $val}--> 
<!--{if $val=trim($val)}--> 
<!--{eval $valenc=rawurlencode($val);}--> 
<!--{block srchhotkeywords[]}--> 
<!--{if !empty($searchparams[url])}--> 
<a href="$searchparams[url]?q=$valenc&source=hotsearch{$srchotquery}">$val</a> 
<!--{else}--> 
<a href="search.php?mod=forum&srchtxt=$valenc&formhash={FORMHASH}&searchsubmit=true&source=hotsearch">$val</a> 
<!--{/if}--> 
<!--{/block}--> 
<!--{/if}--> 
<!--{/loop}--> 
<!--{echo implode('', $srchhotkeywords);}--> 
</div>
<!--{/if}--> 
<!--{/if}--> 

<!--{if !empty($searchid) && submitcheck('searchsubmit', 1)}--> 
<!--{subtemplate search/thread_list}--> 
<!--{/if}--> 
<!--{template common/footer}--> 

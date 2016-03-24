<?php exit;?>
<!--{if $op == 'ban'}-->
<div class="QGV0nMQQtF">

<!--{if $op == 'ban' && $member && !$error}-->
	<form method="post" autocomplete="off" action="{$cpscript}?mod=modcp&action=$_GET[action]&op=$op&mobile=2" class="b73B6BsFDi">
		<input type="hidden" name="formhash" value="{FORMHASH}">
		<input type="hidden" name="username" value="$_GET['username']">
		<input type="hidden" name="uid" value="$_GET['uid']">
        <div class="j4cVXqFgP7">
        	<div class="inFVvda7Ig">{lang result}</div>
            <p><a href="home.php?mod=space&uid=$member[uid]" target="_blank" class="oqqrXufYFa">$member[username]</a> UID: $member[uid]<br /><!--{if $member[groupid] == 4}-->{lang modcp_members_status_banpost}<!--{elseif $member[groupid] == 5}-->{lang modcp_members_status_banvisit}<!--{else}-->{lang modcp_members_status_normal}<!--{/if}--> <!--{if $member['banexpiry']}-->( {lang valid_before} $member['banexpiry'] )<!--{/if}--></p>
            <p>{lang changeto} <!--{if $member[groupid] == 4 || $member[groupid] == 5}-->
						<input type="radio" name="bannew" id="bannew_0" value="0" checked="checked" class="pk64ZGGkw4" /> <label for="bannew_0">{lang modcp_members_status_normal}</label>
					<!--{/if}-->
					<!--{if $member[groupid] != 4 && $_G[group][allowbanuser]}--><input type="radio" name="bannew" id="bannew_4" class="pk64ZGGkw4" value="4" {if $member[groupid] != 4 && $member[groupid] != 5}checked="checked"{/if} /> <label for="bannew_4">{lang modcp_members_status_banpost}</label> <!--{/if}-->
					<!--{if $member[groupid] != 5 && $_G[group][allowbanvisituser]}--><label><input type="radio" name="bannew" id="bannew_5" class="pk64ZGGkw4" value="5" {if $member[groupid] != 4 && $member[groupid] != 5 && !$_G[group][allowbanuser]}checked="checked"{/if} />{lang modcp_members_status_banvisit}</label><!--{/if}--></p>
            <p>{lang expiry}</p>
            <p>
                <input type="text" id="banexpirynew" name="banexpirynew" autocomplete="off" value="" class="3sKMSjWi56"   />

            </p>
            <p>{lang modcp_members_ban_days_comment}</p>
            <p>{lang reason}</p>
            <p><textarea name="reason" class="3sKMSjWi56" rows="4" cols="80">$member[signature]</textarea></p>
            <p class="i3eE3wnkb2"><input type="submit" name="bansubmit" id="submit"  value="{lang submit}" /></p>
        </div>
	</form>
<!--{/if}-->

<form method="post" autocomplete="off" action="{$cpscript}?mod=modcp&action=$_GET[action]&op=$op&mobile=2">
    <input type="hidden" name="formhash" value="{FORMHASH}">
    <strong>{lang mod_member_ban}</strong>
    <div >
    	<p>
        <!--{if !empty($error)}-->
            <!--{if $error == 1}-->
                {lang mod_message_member_search}
            <!--{elseif $error == 2}-->
                {lang mod_message_member_nonexistence}
            <!--{elseif $error == 3}-->
                {lang mod_message_member_nopermission}
                <!--{if $_G['adminid'] == 1}--><br /><span class="0GJVCDXl4J">{lang mod_message_goto_admincp}</span>
                <!--{/if}-->
            <!--{/if}-->
        <!--{/if}-->
        </p>
        <p>
        	{lang username}
            <input type="text" name="username" class="3sKMSjWi56" value="" size="20" />
        </p>
        <p>
        	UID
        	<input type="text" name="uid" class="3sKMSjWi56" value="<!--{$member['uid']}-->" size="20" />
        </p>
        <p class="i3eE3wnkb2">
        	<input type="submit" name="submit" id="searchsubmit"  value="{lang modcp_logs_search}" />
        </p>
	</div>
</form>

</div>
<!--{else}-->
	<div class="QGV0nMQQtF">
    	<p>{lang admin_threadtopicadmin_error}</p>
    	<input type="button" onclick="javascript:history.back();return false;" value="{lang goback}">
    </div>
<!--{/if}-->

<?php exit;?>
<div class="FnVgicl50s">
	<!--{if $activity['thumb']}--><img src="$activity['thumb']" width="{if $activity[width] > 230}230{else}$activity[width]{/if}" /><!--{else}--><img src="{IMGDIR}/nophoto.gif" width="230" height="230" /><!--{/if}-->
		<dl>
			<dt>{lang activity_type}: <strong>$activity[class]</strong></dt>
			<dt>{lang activity_starttime}:
				<!--{if $activity['starttimeto']}-->
					{lang activity_start_between}
				<!--{else}-->
					$activity[starttimefrom]
				<!--{/if}-->
			</dt>
			<dt>{lang activity_space}: $activity[place]</dt>
			<dt>{lang gender}:
				<!--{if $activity['gender'] == 1}-->
					{lang male}
				<!--{elseif $activity['gender'] == 2}-->
					{lang female}
				<!--{else}-->
					 {lang unlimited}
				<!--{/if}-->
			</dt>
			<!--{if $activity['cost']}-->
				<dt>{lang activity_payment}: $activity[cost] {lang payment_unit}</dt>
			<!--{/if}-->
		</dl>
		<!--{if !$_G['forum_thread']['is_archived']}-->
		<dl class="i3eE3wnkb2">
			<dt>{lang activity_already}:
				<em>$allapplynum</em> {lang activity_member_unit}
				<!--{if $post['invisible'] == 0 && ($_G['forum_thread']['authorid'] == $_G['uid'] || (in_array($_G['group']['radminid'], array(1, 2)) && $_G['group']['alloweditactivity']) || ( $_G['group']['radminid'] == 3 && $_G['forum']['ismoderator'] && $_G['group']['alloweditactivity']))}-->
					<span class="D2lReDdK6D">{lang activity_mod}</span>
				<!--{/if}-->
			</dt>
		</dl>
		<dl>
			<!--{if $activity['number']}-->
			<dt>{lang activity_about_member}:
				$aboutmembers {lang activity_member_unit}
			</dt>
			<!--{/if}-->
			<!--{if $activity['expiration']}-->
				<dt>{lang post_closing}: $activity[expiration]</dt>
			<!--{/if}-->
			<dt>
				<!--{if $post['invisible'] == 0}-->
					<!--{if $applied && $isverified < 2}-->
						<p class="YJsMSBh5b2"><!--{if !$isverified}-->{lang activity_wait}<!--{else}-->{lang activity_join_audit}<!--{/if}--></p>
						<!--{if !$activityclose}-->
                        <!--{/if}-->
					<!--{elseif !$activityclose}-->
                        <!--{if $isverified != 2}-->
                        <!--{else}-->
                        <p class="Rduv7zbOPz">
                            <input value="{lang complete_data}" name="ijoin" id="ijoin" />
                        </p>
                        <!--{/if}-->
					<!--{/if}-->
				<!--{/if}-->
			</dt>
		</dl>
		<!--{/if}-->
</div>

<div id="postmessage_$post[pid]" class="IeEaWCrC27">$post[message]</div>


<!--{if $_G['uid'] && !$activityclose && (!$applied || $isverified == 2)}-->
	<div id="activityjoin" class="pF8I8XhnHX">
    	<div class="BmoLnr0Bkb">
        <div class="inFVvda7Ig">{lang activity_join}</div>
	<!--{if $_G['forum']['status'] == 3 && helper_access::check_module('group') && $isgroupuser != 'isgroupuser'}-->
        <p>{lang activity_no_member}</p>
        <p><a href="forum.php?mod=group&action=join&fid=$_G[fid]" class="oqqrXufYFa">{lang activity_join_group}</a></p>
	<!--{else}-->
		<form name="activity" id="activity" method="post" autocomplete="off" action="forum.php?mod=misc&action=activityapplies&fid=$_G[fid]&tid=$_G[tid]&pid=$post[pid]{if $_GET['from']}&from=$_GET['from']{/if}&mobile=2" >
			<input type="hidden" name="formhash" value="{FORMHASH}" />

			<!--{if $_G['setting']['activitycredit'] && $activity['credit'] && !$applied}--><p class="D2lReDdK6D">{lang activity_need_credit} $activity[credit] {$_G['setting']['extcredits'][$_G['setting']['activitycredit']][title]}</p><!--{/if}-->
                <!--{if $activity['cost']}-->
                   <p>{lang activity_paytype} <label><input class="pk64ZGGkw4" type="radio" value="0" name="payment" id="payment_0" checked="checked" />{lang activity_pay_myself}</label> <label><input class="pk64ZGGkw4" type="radio" value="1" name="payment" id="payment_1" />{lang activity_would_payment} </label> <input name="payvalue" size="3" class="M9B7dgnWFj" /> {lang payment_unit}</p>
                <!--{/if}-->
                <!--{if !empty($activity['ufield']['userfield'])}-->
                    <!--{loop $activity['ufield']['userfield'] $fieldid}-->
                    <!--{if $settings[$fieldid][available]}-->
                        <strong>$settings[$fieldid][title]<span class="D2lReDdK6D">*</span></strong>
                        $htmls[$fieldid]
                    <!--{/if}-->
                    <!--{/loop}-->
                <!--{/if}-->
                <!--{if !empty($activity['ufield']['extfield'])}-->
                    <!--{loop $activity['ufield']['extfield'] $extname}-->
                        $extname<input type="text" name="$extname" maxlength="200" class="3sKMSjWi56" value="{if !empty($ufielddata)}$ufielddata[extfield][$extname]{/if}" />
                    <!--{/loop}-->
                <!--{/if}-->
            {lang leaveword}<textarea name="message" maxlength="200" cols="28" rows="1" class="3sKMSjWi56">$applyinfo[message]</textarea>
			<div class="uynDBbTgkp">
				<!--{if $_G['setting']['activitycredit'] && $activity['credit'] && checklowerlimit(array('extcredits'.$_G['setting']['activitycredit'] => '-'.$activity['credit']), $_G['uid'], 1, 0, 1) !== true}-->
					<p class="D2lReDdK6D">{$_G['setting']['extcredits'][$_G['setting']['activitycredit']][title]} {lang not_enough}$activity['credit']</p>
				<!--{else}-->
					<input type="hidden" name="activitysubmit" value="true">
					<em class="D2lReDdK6D" id="return_activityapplies"></em>
					<button type="submit" ><span>{lang submit}</span></button>
				<!--{/if}-->
			</div>
		</form>

		<script type="text/javascript">
			function succeedhandle_activityapplies(locationhref, message) {
				showDialog(message, 'notice', '', 'location.href="' + locationhref + '"');
			}
		</script>
	<!--{/if}-->
    	</div>
	</div>
<!--{elseif $_G['uid'] && !$activityclose && $applied}-->
<div id="activityjoincancel" class="pF8I8XhnHX">
	<div class="BmoLnr0Bkb">
        <div class="inFVvda7Ig">{lang activity_join_cancel}</div>
        <form name="activity" method="post" autocomplete="off" action="forum.php?mod=misc&action=activityapplies&fid=$_G[fid]&tid=$_G[tid]&pid=$post[pid]{if $_GET['from']}&from=$_GET['from']{/if}">
        <input type="hidden" name="formhash" value="{FORMHASH}" />
        <p>
            {lang leaveword}<input type="text" name="message" maxlength="200" class="sh4B6zujLj" value="" />
        </p>
        <p class="i3eE3wnkb2">
        <button type="submit" name="activitycancel"  value="true"><span>{lang submit}</span></button>
        </p>
        </form>
    </div>
</div>
<!--{/if}-->

<!--{if $applylist}-->
<div class="dyefQdeNWt">
	<div class="T9onYOQMi0">
    <p class="qta5GpuOw5">{lang activity_new_join} ($applynumbers {lang activity_member_unit})</p>
    <table class="7EcBqkf4hv" cellpadding="5" cellspacing="5">
        <tr>
            <th >&nbsp;</th>
            <!--{if $activity['cost']}-->
            <th >{lang activity_payment}</th>
            <!--{/if}-->
            <th>{lang activity_jointime}</th>
        </tr>
        <!--{loop $applylist $apply}-->
            <tr>
                <td>
                    <a target="_blank" href="home.php?mod=space&uid=$apply[uid]">$apply[username]</a>
                </td>
                <!--{if $activity['cost']}-->
                <td><!--{if $apply[payment] >= 0}-->$apply[payment] {lang payment_unit}<!--{else}-->{lang activity_self}<!--{/if}--></td>
                <!--{/if}-->
                <td>$apply[dateline]</td>
            </tr>
        <!--{/loop}-->
    </table>
    </div>
</div>
<!--{/if}-->

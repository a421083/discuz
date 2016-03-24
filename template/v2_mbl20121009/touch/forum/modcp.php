<?php exit;?>
<!--{template common/header}-->
<!--{if $script == 'noperm'}-->
    <div class="1nT21mg6gb">
        <h1 class="SlMriXysaZ">{lang mod_option_error}</h1>
        <p>{lang mod_error_invalid}</p>
        <p class="MNVDGnOO9H">{lang mod_notice}</p>
    </div>
<!--{elseif !empty($modtpl)}-->
	<!--{if in_array($script, array('member', 'login'))}-->
    	<!--{eval include(template($modtpl));}-->
    <!--{else}-->
    	<div class="wTtNVavNl9">
    		{lang admin_threadtopicadmin_error}
        </div>
    <!--{/if}-->
<!--{/if}-->

<!--{template common/footer}-->

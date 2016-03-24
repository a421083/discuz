<?php exit;?>
<!--{eval $_G['home_tpl_titles'] = array('{lang remind}');}-->
<!--{subtemplate common/header}-->
<div class="LH08t1F9cc"> 
<div class="G6qNfDQqUt"><a href="forum.php">{echo m_lang('home')}</a> <em> &gt; </em> <a href="home.php?mod=space&do=notice">{lang remind}</a></div>

	<div class="I2wCn0NtFI">
		<!--{eval $t = 1;}-->
        <!--{loop $_G['notice_structure'] $key $type}-->
        <!--{if $t < 4}-->
		<a href="home.php?mod=space&do=notice&view=$key" $opactives[$key]><!--{eval echo lang('template', 'notice_'.$key)}--><!--{if $_G['member']['category_num'][$key]}-->($_G['member']['category_num'][$key])<!--{/if}--></a>
        <!--{/if}-->
        <!--{eval $t++;}-->
		<!--{/loop}-->
	</div>

<div class="5BUApdPv1R">

			<!--{if empty($list)}-->
			<div class="SJ4fo1DGGY">
				<!--{if $_GET[isread] != 1}-->
					{lang no_new_notice}<a href="home.php?mod=space&do=notice&isread=1">{lang view_old_notice}</a>
				<!--{else}-->
					{lang no_notice}
				<!--{/if}-->
			</div>
			<!--{/if}-->

			<!--{if $list}-->

						<!--{loop $list $key $value}-->
							<div class="AWSMMdUBmb">

								<p class="FnVgicl50s">
								<a href="home.php?mod=spacecp&ac=common&op=ignore&authorid=$value[authorid]&type=$value[type]&handlekey=addfriendhk_{$value[authorid]}" class="lKmxeepkzm" >({lang shield})</a>
								<span class="0GJVCDXl4J"><!--{date($value[dateline], 'u')}--></span>
								</p>
                                
								<p class="FJeDJaAYkx">$value[note]</p>
                                
								<!--{if $value[from_num]}-->
								<p class="ZIc6HyEGAP">{lang ignore_same_notice_message}</p>
								<!--{/if}-->
							</div>
						<!--{/loop}-->

				<!--{if $view!='userapp' && $space[notifications]}-->
				<div class="SJ4fo1DGGY"><a href="home.php?mod=space&do=notice&ignore=all">{lang ignore_same_notice_message}</a></div>
				<!--{/if}-->

				<!--{if $multi}--><div class="aVNTAF7HEu">$multi</div><!--{/if}-->
			<!--{/if}-->

		</div>
        </div>

<!--{subtemplate common/footer}-->
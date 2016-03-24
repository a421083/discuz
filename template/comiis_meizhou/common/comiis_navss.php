<?php echo 'ºöÓÆÐÖ huyouxiong.com';exit;?>
<!--{if $_G['setting']['search']}-->
	<!--{eval $slist = array();}-->
	<!--{if $_G['fid'] && $_G['forum']['status'] != 3 && $mod != 'group'}--><!--{block slist[forumfid]}--><li><a href="javascript:;" rel="curforum" fid="$_G[fid]" >{lang search_this_forum}</a></li><!--{/block}--><!--{/if}-->
	<!--{if $_G['setting']['portalstatus'] && $_G['setting']['search']['portal']['status'] && ($_G['group']['allowsearch'] & 1 || $_G['adminid'] == 1)}--><!--{block slist[portal]}--><li><a href="javascript:;" rel="article">{lang article}</a></li><!--{/block}--><!--{/if}-->
	<!--{if $_G['setting']['search']['forum']['status'] && ($_G['group']['allowsearch'] & 2 || $_G['adminid'] == 1)}--><!--{block slist[forum]}--><li><a href="javascript:;" rel="forum" class="curtype">{lang thread}</a></li><!--{/block}--><!--{/if}-->
	<!--{if helper_access::check_module('blog') && $_G['setting']['search']['blog']['status'] && ($_G['group']['allowsearch'] & 4 || $_G['adminid'] == 1)}--><!--{block slist[blog]}--><li><a href="javascript:;" rel="blog">{lang blog}</a></li><!--{/block}--><!--{/if}-->
	<!--{if helper_access::check_module('album') && $_G['setting']['search']['album']['status'] && ($_G['group']['allowsearch'] & 8 || $_G['adminid'] == 1)}--><!--{block slist[album]}--><li><a href="javascript:;" rel="album">{lang album}</a></li><!--{/block}--><!--{/if}-->
	<!--{if $_G['setting']['groupstatus'] && $_G['setting']['search']['group']['status'] && ($_G['group']['allowsearch'] & 16 || $_G['adminid'] == 1)}--><!--{block slist[group]}--><li><a href="javascript:;" rel="group">$_G['setting']['navs'][3]['navname']</a></li><!--{/block}--><!--{/if}-->
	<!--{block slist[user]}--><li><a href="javascript:;" rel="user">{lang users}</a></li><!--{/block}-->
<!--{/if}-->
<!--{if $_G['setting']['search'] && $slist}-->
	<form id="scbar_form" method="{if $_G[fid] && !empty($searchparams[url])}get{else}post{/if}" autocomplete="off" onsubmit="searchFocus($('comiis_twtsc_txt'))" action="{if $_G[fid] && !empty($searchparams[url])}$searchparams[url]{else}search.php?searchsubmit=yes{/if}" target="_blank">
		<input type="hidden" name="mod" id="comiis_twtsc_mod" value="search" />
		<input type="hidden" name="formhash" value="{FORMHASH}" />
		<input type="hidden" name="srchtype" value="title" />
		<input type="hidden" name="srhfid" value="$_G[fid]" />
		<input type="hidden" name="srhlocality" value="$_G['basescript']::{CURMODULE}" />
		<!--{if !empty($searchparams[params])}-->
			<!--{loop $searchparams[params] $key $value}-->
			<!--{eval $srchotquery .= '&' . $key . '=' . rawurlencode($value);}-->
			<input type="hidden" name="$key" value="$value" />
			<!--{/loop}-->
			<input type="hidden" name="source" value="discuz" />
			<input type="hidden" name="fId" id="srchFId" value="$_G[fid]" />
			<input type="hidden" name="q" id="cloudsearchquery" value="" />			
			<style>
			#comiis_twtsc { overflow: visible; position: relative; }
			#comiis_sg{ background: #FFF; width:456px; border: 1px solid #B2C7DA; }
			.comiis_scbar_narrow #comiis_sg { width: 316px; }
			#comiis_sg li { padding:0 8px; line-height:30px; font-size:14px; }
			#comiis_sg li span { color:#999; }
			.comiis_sml { background:#FFF; cursor:default; }
			.comiis_smo { background:#E5EDF2; cursor:default; }
            </style>
            <div style="display: none; position: absolute; top:37px; left:44px;" id="comiis_sg">
                <div id="comiis_twtsc_box" cellpadding="2" cellspacing="0"></div>
            </div>
		<!--{/if}-->
		<div id="comiis_twtsc" class="{if $_G['setting']['srchhotkeywords'] && count($_G['setting']['srchhotkeywords']) > 5}comiis_scbar_narrow {/if} z cl">
		<table cellspacing="0" cellpadding="0">
			<tr>
				<td class="comiis_twtsc_txt"><input type="text" name="srchtxt" id="comiis_twtsc_txt" onblur="if (value ==''){value='{lang enter_content}'}" onfocus="if (value =='{lang enter_content}'){value =''}" value="{lang enter_content}" autocomplete="off" x-webkit-speech speech /></td>		
				<td class="comiis_twtsc_type"><a href="javascript:;" id="comiis_twtsc_type" class="showmenu xg1" onclick="showMenu(this.id)" hidefocus="true">{lang search}</a></td>
			</tr>
		</table>
		</div>
		<button type="submit" name="searchsubmit" id="comiis_twtsc_btn" class="z" sc="1" value="true">{lang search}</button>
	</form>
<!--{/if}-->
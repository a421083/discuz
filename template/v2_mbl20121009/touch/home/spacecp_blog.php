<?php exit;?>
<!--{template common/header}-->
<div class="G6qNfDQqUt"><a href="forum.php">{echo m_lang('home')}</a> <em> &gt; </em> <a href="home.php?mod=space&do=blog&view=me">{lang blog}</a> <em> &gt; </em> {lang delete_blog}</div>

<!--{if $_GET[op] == 'delete'}-->
<div class="T9onYOQMi0">
<form method="post" autocomplete="off" action="home.php?mod=spacecp&ac=blog&op=delete&blogid=$blogid">
	<input type="hidden" name="referer" value="{echo dreferer()}" />
	<input type="hidden" name="deletesubmit" value="true" />
	<input type="hidden" name="formhash" value="{FORMHASH}" />
	<div class="Vja1dbTm53">{lang sure_delete_blog}?</div>
	<button type="submit" name="btnsubmit" value="true" class="kcQ3GJrc61"><strong>{lang determine}</strong></button>
</form>
</div>
<!--{else}-->
    <!-- main postbox start -->
<!--home.php?mod=spacecp&ac=blog&blogid=&mobile=2&mobile=2-->
<!--forum.php?mod=post&action=newthread&fid=2&extra=&topicsubmit=yes&mobile=2-->
    <div class="wp bm_c">
        <form method="post" name="postform" id="postform" action="home.php?mod=post&action=blog&blogid==&extra=&topicsubmit=yes&mobile=2">
            <input type="hidden" name="formhash" id="formhash" value="b6e88e7b">
            <input type="hidden" name="posttime" id="posttime" value="1458704425">
            <!-- main postbox start -->

            <div class="post_from">


                <ul class="cl">

                    <li class="mbm">
                        <input type="text" tabindex="1" class="px" id="needsubject" size="30" autocomplete="off" value="" name="subject" placeholder="标题" fwin="login">
                    </li>
                    <li class="post_plus mbm">
                        <a href="javascript:;" class="post_photo z"><input type="file" name="Filedata" id="filedata"></a>
                        <a class="smilie_open z" onclick="$(this).hide(); $('#fastsmiliesdiv_data').fadeIn();"></a>
                        <div id="fastsmiliesdiv_data" style="display:none;"><div id="fastsmilies"><table cellspacing="0" cellpadding="0" class="smilies"><tbody><tr><td onclick="seditor_insertunit('fastpost', ':)')"><img src="static/image/smiley/default/smile.gif"></td><td onclick="seditor_insertunit('fastpost', ':(')"><img src="static/image/smiley/default/sad.gif"></td><td onclick="seditor_insertunit('fastpost', ':D')"><img src="static/image/smiley/default/biggrin.gif"></td><td onclick="seditor_insertunit('fastpost', ':\'(')"><img src="static/image/smiley/default/cry.gif"></td><td onclick="seditor_insertunit('fastpost', ':@')"><img src="static/image/smiley/default/huffy.gif"></td><td onclick="seditor_insertunit('fastpost', ':o')"><img src="static/image/smiley/default/shocked.gif"></td><td onclick="seditor_insertunit('fastpost', ':P')"><img src="static/image/smiley/default/tongue.gif"></td><td onclick="seditor_insertunit('fastpost', ':$')"><img src="static/image/smiley/default/shy.gif"></td><td onclick="seditor_insertunit('fastpost', ';P')"><img src="static/image/smiley/default/titter.gif"></td><td onclick="seditor_insertunit('fastpost', ':L')"><img src="static/image/smiley/default/sweat.gif"></td></tr><tr><td onclick="seditor_insertunit('fastpost', ':Q')"><img src="static/image/smiley/default/mad.gif"></td><td onclick="seditor_insertunit('fastpost', ':lol')"><img src="static/image/smiley/default/lol.gif"></td><td onclick="seditor_insertunit('fastpost', ':loveliness:')"><img src="static/image/smiley/default/loveliness.gif"></td><td onclick="seditor_insertunit('fastpost', ':funk:')"><img src="static/image/smiley/default/funk.gif"></td><td onclick="seditor_insertunit('fastpost', ':curse:')"><img src="static/image/smiley/default/curse.gif"></td><td onclick="seditor_insertunit('fastpost', ':dizzy:')"><img src="static/image/smiley/default/dizzy.gif"></td></tr></tbody></table></div></div>
                    </li>

                    <li class="area mbn">
                        <textarea class="pt" id="needmessage" tabindex="3" autocomplete="off" name="message" cols="80" rows="8" placeholder="内容" fwin="reply"></textarea>
                    </li>

                </ul>
                <ul id="imglist" class="post_imglist cl">
                </ul>
                <div class="sec_code vm mbm">
                    <input name="seccodehash" type="hidden" value="SNDk3">
                    <input type="text" class="txt px vm" style="ime-mode:disabled;width:60px;background:white;" autocomplete="off" value="" id="seccodeverify_SNDk3" name="seccodeverify" placeholder="验证码" fwin="seccode">
                    <img src="misc.php?mod=seccode&amp;update=98568&amp;idhash=SNDk3&amp;mobile=2" class="seccodeimg">
                </div>
                <script type="text/javascript">
                    (function() {
                        $('.seccodeimg').on('click', function() {
                            $('#seccodeverify_SNDk3').attr('value', '');
                            var tmprandom = 'S' + Math.floor(Math.random() * 1000);
                            $('.sechash').attr('value', tmprandom);
                            $(this).attr('src', 'misc.php?mod=seccode&update=98568&idhash='+ tmprandom +'&mobile=2');
                        });
                    })();
                </script>
            </div>

            <button id="postsubmit" class="btn_pn br3 btn_pn_post btn_pn_grey" disable="true"><span>发表</span></button>
            <input type="hidden" name="topicsubmit" value="yes">

            <!-- main postbox start -->
        </form>

    </div>
    <script src="data/cache/common_smilies_var.js?eAa" type="text/javascript"></script>
    <script type="text/javascript">
        function seditor_insertunit(key, smilies) {
            textarea = document.postform.message;
            textarea.value += smilies;
            textarea.focus();
        }
        var j = 1, smilies_fastdata = '',  img, seditorkey = "fastpost";
        for(i = 0;i < smilies_fast.length; i++) {
            if(j == 0) {
                smilies_fastdata += '<tr>';
            }
            j = ++j > 10 ? 0 : j;
            s = smilies_array[smilies_fast[i][0]][smilies_fast[i][1]][smilies_fast[i][2]];
            smilieimg = "static/" + 'image/smiley/' + smilies_type['_' + smilies_fast[i][0]][1] + '/' + s[2];
            smilies_fastdata += s ? '<td onclick="' + (typeof wysiwyg != 'undefined' ? 'insertSmiley(' + s[0] + ')': 'seditor_insertunit(\'' + seditorkey + '\', \'' + s[1].replace(/'/, '\\\'') + '\')') +
                '" ><img src="' + smilieimg + '" />' : '<td>';
        }
    </script>

    <script type="text/javascript">
        (function() {
            var needsubject = needmessage = false;

            $('#needsubject').on('keyup input', function() {
                var obj = $(this);
                if(obj.val()) {
                    needsubject = true;
                    if(needmessage == true) {
                        $('.btn_pn').removeClass('btn_pn_grey').addClass('btn_pn_blue');
                        $('.btn_pn').attr('disable', 'false');
                    }
                } else {
                    needsubject = false;
                    $('.btn_pn').removeClass('btn_pn_blue').addClass('btn_pn_grey');
                    $('.btn_pn').attr('disable', 'true');
                }
            });
            $('#needmessage').on('keyup input', function() {
                var obj = $(this);
                if(obj.val()) {
                    needmessage = true;
                    if(needsubject == true) {
                        $('.btn_pn').removeClass('btn_pn_grey').addClass('btn_pn_blue');
                        $('.btn_pn').attr('disable', 'false');
                    }
                } else {
                    needmessage = false;
                    $('.btn_pn').removeClass('btn_pn_blue').addClass('btn_pn_grey');
                    $('.btn_pn').attr('disable', 'true');
                }
            });

            $('#needmessage').on('scroll', function() {
                var obj = $(this);
                if(obj.scrollTop() > 0) {
                    obj.attr('rows', parseInt(obj.attr('rows'))+2);
                }
            }).scrollTop($(document).height());
        })();
    </script>
    <script src="template/v2_mbl20121009/mobile_plus/js/ajaxfileupload.js?Rkh" type="text/javascript"></script>
    <script src="template/v2_mbl20121009/mobile_plus/js/buildfileupload.js?Rkh" type="text/javascript"></script>
    <script type="text/javascript">
        var imgexts = typeof imgexts == 'undefined' ? 'jpg, jpeg, gif, png' : imgexts;
        var STATUSMSG = {
            '-1' : '内部服务器错误',
            '0' : '上传成功',
            '1' : '不支持此类扩展名',
            '2' : '服务器限制无法上传那么大的附件',
            '3' : '用户组限制无法上传那么大的附件',
            '4' : '不支持此类扩展名',
            '5' : '文件类型限制无法上传那么大的附件',
            '6' : '今日您已无法上传更多的附件',
            '7' : '请选择图片文件(' + imgexts + ')',
            '8' : '附件文件无法保存',
            '9' : '没有合法的文件被上传',
            '10' : '非法操作',
            '11' : '今日您已无法上传那么大的附件'
        };
        var form = $('#postform');
        $(document).on('change', '#filedata', function() {
            popup.open('<img src="' + IMGDIR + '/imageloading.gif">');

            uploadsuccess = function(data) {
                if(data == '') {
                    popup.open('上传失败，请稍后再试', 'alert');
                }
                var dataarr = data.split('|');
                if(dataarr[0] == 'DISCUZUPLOAD' && dataarr[2] == 0) {
                    popup.close();
                    $('#imglist').append('<li><span aid="'+dataarr[3]+'" class="del"><a href="javascript:;"><img src="static/image/mobile/images/icon_del.png"></a></span><span class="p_img"><a href="javascript:;"><img style="height:54px;width:54px;" id="aimg_'+dataarr[3]+'" title="'+dataarr[6]+'" src="data/attachment/forum/'+dataarr[5]+'" /></a></span><input type="hidden" name="attachnew['+dataarr[3]+'][description]" /></li>');
                } else {
                    var sizelimit = '';
                    if(dataarr[7] == 'ban') {
                        sizelimit = '(附件类型被禁止)';
                    } else if(dataarr[7] == 'perday') {
                        sizelimit = '(不能超过'+Math.ceil(dataarr[8]/1024)+'K)';
                    } else if(dataarr[7] > 0) {
                        sizelimit = '(不能超过'+Math.ceil(dataarr[7]/1024)+'K)';
                    }
                    popup.open(STATUSMSG[dataarr[2]] + sizelimit, 'alert');
                }
            };

            if(typeof FileReader != 'undefined' && this.files[0]) {//note 支持html5上传新特性

                $.buildfileupload({
                    uploadurl:'misc.php?mod=swfupload&operation=upload&type=image&inajax=yes&infloat=yes&simple=2',
                    files:this.files,
                    uploadformdata:{uid:"1", hash:"442e8391feb816d95aed3abd50a4b25d"},
                    uploadinputname:'Filedata',
                    maxfilesize:"2000",
                    success:uploadsuccess,
                    error:function() {
                        popup.open('上传失败，请稍后再试', 'alert');
                    }
                });

            } else {

                $.ajaxfileupload({
                    url:'misc.php?mod=swfupload&operation=upload&type=image&inajax=yes&infloat=yes&simple=2',
                    data:{uid:"1", hash:"442e8391feb816d95aed3abd50a4b25d"},
                    dataType:'text',
                    fileElementId:'filedata',
                    success:uploadsuccess,
                    error: function() {
                        popup.open('上传失败，请稍后再试', 'alert');
                    }
                });

            }
        });

        $('#postsubmit').on('click', function() {
            var obj = $(this);
            if(obj.attr('disable') == 'true') {
                return false;
            }

            obj.attr('disable', 'true').removeClass('btn_pn_blue').addClass('btn_pn_grey');
            popup.open('<img src="' + IMGDIR + '/imageloading.gif">');

            var postlocation = '';
            if(geo.errmsg === '' && geo.loc) {
                postlocation = geo.longitude + '|' + geo.latitude + '|' + geo.loc;
            }

            $.ajax({
                type:'POST',
                url:form.attr('action') + '&geoloc=' + postlocation + '&handlekey='+form.attr('id')+'&inajax=1',
                data:form.serialize(),
                dataType:'xml'
            })
                .success(function(s) {
                    popup.open(s.lastChild.firstChild.nodeValue);
                })
                .error(function() {
                    popup.open('网络出现问题，请稍后再试', 'alert');
                });
            return false;
        });

        $(document).on('click', '.del', function() {
            var obj = $(this);
            $.ajax({
                type:'GET',
                url:'forum.php?mod=ajax&action=deleteattach&inajax=yes&aids[]=' + obj.attr('aid'),
            })
                .success(function(s) {
                    obj.parent().remove();
                })
                .error(function() {
                    popup.open('网络出现问题，请稍后再试', 'alert');
                });
            return false;
        });

    </script>
    <div id="mask" style="display:none;"></div>



<!--{/if}-->
<!--{template common/footer}-->
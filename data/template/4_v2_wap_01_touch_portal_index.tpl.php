<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); 
block_get('9,8,22,8,8,8,8,8');?>
<style type="text/css">
/* 门户二级导航 */
.nv_i { background-size:auto 76px; text-align:center; padding:14px 0px 2px; }
.nv_i ul { height:20px; display: block; margin-bottom:10px; }
.nv_i li { float:left; width:20%; padding:2px 0px; font-size:16px; line-height:16px; }
.nv_i li a { color:#fff; } 

/* 头条 */
.hot_i { padding:10px; text-align:center; overflow:hidden; }
.hot_i h1 { font-size:20px; line-height:20px; padding:7px 0px; }
.hot_i h1 a { color:#222; }
.hot_i ul {}
.hot_i li { width:50%; float:left; padding:6px 0px; font-size:13px; line-height:13px; }
.hot_i li a { color:#666; }

/* 灯箱 */
.scroll { margin:auto; position:relative; overflow:hidden; }
.scroll #slider li { position:relative; overflow:hidden; }
.scroll, .scroll #slider, .scroll #slider li, .scroll #slider li img { width:100%; height:180px; }
.scroll #slider li a { display:block; }
.scroll .stbg { width:100%; height:15px; padding:10px 0px; color:#fff; text-indent:10px; margin-top:-40px; position:relative; z-index:1; background: url(./template/v2_mbl20121009/mobile_plus/img/stbg.png) repeat 0 0; }

.scroll #position { position:absolute; bottom:6px; right:10px; }
.scroll #position em { display: inline-block; width:8px; height:8px; margin:0px 2px; text-indent:-9999px; background:#aaa; border-radius:6px; overflow:hidden; }
.scroll #position em.on { background: #fff; }

.scroll a#prev, .scroll a#next { display:block; height:34px; width:34px; color:#444; text-decoration:none; position: absolute; top:65px; z-index:1; }
.scroll a#prev { left:0px; }
.scroll a#next { right:0px; }
.scroll a#prev:after, .scroll a#next:after { content:''; top:37%; position: absolute; width:7px; height:7px; border-color:#fff; border-style:solid; border-width:0 2px 2px 0; }
.scroll a#prev:after { left:15px; -webkit-transform:rotate(135deg); -moz-transform:rotate(135deg); -o-transform:rotate(135deg); -ms-transform: rotate(135deg); transform: rotate(135deg); }
.scroll a#next:after { right:15px; -webkit-transform:rotate(-45deg); -moz-transform:rotate(-45deg); -o-transform:rotate(-45deg); -ms-transform: rotate(-45deg); transform: rotate(-45deg); }

.th_tab { padding:10px 8px 0px; height:34px; background:#eee; position:relative; }
.th_tab a { float:left; display:block; height:14px; margin-right:5px; padding:10px; background: #e6e6e6; color:#777; text-align:center; font-size:14px; line-height:14px; border-radius:3px 3px 0px 0px; overflow:hidden; } 
.th_tab a.on {  background:#fafafa; padding-bottom:12px; } 

.th { display:none; }
.th a { display:block; height:64px; padding:10px 105px 10px 10px; position:relative; }
.th h1 { line-height:16px; font-size:16px; margin:2px 0px 5px; }
.th p { color:#888; line-height:18px; font-size:13px; }
.th img { position:absolute; top:9px; right:10px; width:80px; height:64px; }

.th_np a { height:auto; padding:10px; }
.th_np h1 { margin:0px 0px 4px; line-height:22px; }

/* 热门论坛 */
.hot_f { display:none; }
.hot_f a { display:block; height:38px; padding:10px 60px 10px 56px; position:relative; }
.hot_f a span { position:absolute; top:9px; right:13px; color:#fff; padding:1px 5px; margin-top:10px; border:2px solid #fff; border-radius:10px; line-height:12px; font-size:12px; }
.hot_f img { position:absolute; width:38px; height:38px; top:11px; left:10px; z-index:2; }
.hot_f .f_nm { margin-bottom:4px; padding-top:3px;  font-size:15px; line-height:15px; }

/* 热门频道 */
.hot_p { display:none; }
.hot_p a { display:block; padding:18px 10px; position:relative;  font-size:15px; line-height:15px; }
.hot_p span { position:absolute; top:9px; right:13px; color:#fff; padding:1px 5px; margin-top:10px; border:2px solid #fff; border-radius:10px; line-height:12px; font-size:12px; }

/* 社区明星 */
.star { display:none; }
.star li a { display:block; height:32px; padding:14px 80px 14px 54px; position:relative; }
.star li img { width:34px; height:34px; position:absolute; top:12px; left:10px; }
.star li h2 { margin-bottom:3px; word-break:keep-all; white-space:nowrap;  font-size:15px; line-height:15px; }
.star li p { color:#aaa; }
.star li em { display:block; width:60px; height:12px; background: url(./template/v2_mbl20121009/mobile_plus/img/st.png) no-repeat 0 -36px; background-size:60px 48px; position:absolute; top:24px; right:9px; }
.star li em.st1 { background: url(./template/v2_mbl20121009/mobile_plus/img/st.png) no-repeat 0 0; background-size:60px 48px; }
.star li em.st2 { background: url(./template/v2_mbl20121009/mobile_plus/img/st.png) no-repeat 0 -12px; background-size:60px 48px; }
.star li em.st3 { background: url(./template/v2_mbl20121009/mobile_plus/img/st.png) no-repeat 0 -24px; background-size:60px 48px; }

.th li, .hot_f li, .hot_p li, .star li { border-top:1px solid #fff; border-bottom:1px solid #e5e5e5; }
</style>

<div class="nv_i">
<ul>
<li><a href="http://nihp.net/forum-2-1.html">阅读</a></li>
<li><a href="http://nihp.net/forum-45-1.html">视频</a></li>
<li><a href="http://nihp.net/forum-46-1.html">图片</a></li>
<li><a href="http://nihp.net/forum-53-1.html">八卦</a></li>
<li><a href="http://nihp.net/forum-42-1.html">情感</a></li>
</ul>
<ul>
<li><a href="http://nihp.net/forum-43-1.html">两性</a></li>
<li><a href="http://nihp.net/forum-51-1.html">公告</a></li>
<li><a href="http://nihp.net/forum-52-1.html">活动</a></li>
<li><a href="#">首页</a></li>
<li><a href="#">首页</a></li>
</ul>
</div>

<div class="ct">

<div class="hot_i" ><?php block_display('9');?></div><?php block_display('8');?><div class="th_tab">
<a id="tab_a1" onclick="javascript:view_a(1);" class="on" >推荐主题</a>    
<a id="tab_a2" onclick="javascript:view_a(2);" >最新主题</a>
<a id="tab_a3" onclick="javascript:view_a(3);" >热门关注</a>
</div>

<div id="box_a1" class="th" style="display:block;"><?php block_display('22');?></div>
<div id="box_a2" class="th th_np"><?php block_display('8');?></div>
<div id="box_a3" class="th th_np"><?php block_display('8');?></div>

<div class="th_tab">
<a id="tab_b1" onclick="javascript:view_b(1);" class="on" >热门论坛</a>    
<a id="tab_b2" onclick="javascript:view_b(2);" >热门栏目</a>
<a id="tab_b3" onclick="javascript:view_b(3);" >社区明星</a>
</div>

<div id="box_b1" class="hot_f" style="display:block;"><?php block_display('8');?></div>
<div id="box_b2" class="hot_p"><?php block_display('8');?></div>
<div id="box_b3" class="star"><?php block_display('8');?></div>

</div>

<script src="./template/v2_mbl20121009/mobile_plus/js/swipe.js" type="text/javascript"></script>

<script type="text/javascript">

var slider = new Swipe(document.getElementById('slider'), {
      callback: function(e, pos) {
        
        var i = bullets.length;
        while (i--) {
          bullets[i].className = ' ';
        }
        bullets[pos].className = 'on';

      }
    }),
    bullets = document.getElementById('position').getElementsByTagName('em');

</script>

    <script type="text/javascript">

        function view_a(a) {
    for(var i=1;i<=3;i++){
document.getElementById('box_a' + i).style.display = 'none';
document.getElementById('tab_a' + i).className = '';
    }
    document.getElementById('box_a'+a).style.display='block';
    document.getElementById('tab_a'+a).className='on';
        }

        function view_b(a) {
    for(var i=1;i<=3;i++){
document.getElementById('box_b' + i).style.display = 'none';
document.getElementById('tab_b' + i).className = '';
    }
    document.getElementById('box_b'+a).style.display='block';
    document.getElementById('tab_b'+a).className='on';
        }

    </script>
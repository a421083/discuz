<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); hookscriptoutput('discuz');
0
|| checktplrefresh('./template/v2_mbl20121009/touch/forum/discuz.htm', './template/v2_mbl20121009/touch/portal/photo.htm', 1458782926, 'diy', './data/template/4_diy_touch_forum_discuz.tpl.php', './template/v2_mbl20121009', 'touch/forum/discuz')
;?><?php include template('common/header'); if($_GET['mod'] == 'photo') { if($wapphoto == 1) { if($wapphoto == 1) { ?>
<style type="text/css">header { margin-bottom:6px; } .photo_list img { height:<?php echo $photo_height;?>px; } .footer div { display:none; }</style><?php require_once('source/plugin/v2_wap_01/photo.php');?><div id="alist" class="MBKcQv5022"><?php if(is_array($manylist)) foreach($manylist as $o) { ?><a href="forum.php?mod=viewthread&amp;tid=<?php echo $o['tid'];?>">
<img src="<?php echo $o['coverpic'];?>" />
<p class="Wvm8c5glej"><?php echo cutstr(strip_tags($o['subject']),16); ?></p>
</a>
<?php } ?>
</div>         

<?php if($allnum > $inum) { if($wappages == 1) { ?> 
<div id="ajaxshow"></div>
<div class="2j5RTpT055" id="a_pg">
  <div id="ajaxld"><img src="template/v2_mbl20121009/mobile_plus/img/load.gif" /> <?php echo m_lang('load_pic'); ?></div>
  <div id="ajnt"><a href="forum.php?mod=photo" onclick="return ajaxpage(this.href);"><?php echo m_lang('load_photo'); ?></a></div>
</div>
<script src="template/v2_mbl20121009/mobile_plus/js/ajaxpage.js?<?php echo VERHASH;?>" type="text/javascript" type="text/javascript"></script> 
<script type="text/javascript">
var pages=<?php echo $_G['page'];?>;
var allpage=<?php echo $thispage = ceil($allnum / $inum);; ?>;
function ajaxpage(url){
jq("ajaxld").style.display='block';
jq("ajnt").style.display='none';
var x = new Ajax("HTML");
pages++;
url=url+'&page='+pages;
x.get(url, function (s) {
s = s.replace(/\\n|\\r/g, "");//alert(s);
s = s.substring(s.indexOf("<div id=\"alist\""), s.indexOf("<div id=\"ajaxshow\"></div>"));//alert(s);
jq('ajaxshow').innerHTML+=s;
jq("ajaxld").style.display='none';
if(pages==allpage){							
jq("a_pg").style.display='none';
}else{
jq("ajnt").style.display='block';
}
});
return false;
}
</script> 
<?php } else { ?>
<div class="aVNTAF7HEu"><?php echo $pagenav;?></div>
<?php } ?> 
<?php } ?> 

<?php } else { dheader("location: $indexurl");exit;?><?php } } else { dheader("location: forum.php?$indexurl");exit;?><?php } } elseif($_GET['mod'] == 'lattice') { if($waplattice == 1) { blocktpl('portal_lattice',$portal_lattice);?><?php } else { dheader("location: forum.php?$indexurl");exit;?><?php } } elseif($_GET['mod'] == 'portal') { if($wapportal == 1) { blocktpl('portal_index',$portal_index);?><?php } else { dheader("location: forum.php?$indexurl");exit;?><?php } } else { if($wapindexdiy == 1 && $_GET['forumlist'] != 1) { dheader("location: forum.php?$indexurl");exit;?><?php } ?>

<script type="text/javascript">
function getvisitclienthref() {
var visitclienthref = '';
if(ios) {
visitclienthref = 'https://itunes.apple.com/cn/app/zhang-shang-lun-tan/id489399408?mt=8';
} else if(andriod) {
visitclienthref = 'http://www.discuz.net/mobile.php?platform=android';
}
return visitclienthref;
}
</script>

<?php if(!empty($_G['setting']['pluginhooks']['index_top_mobile'])) echo $_G['setting']['pluginhooks']['index_top_mobile'];?>
<!-- main forumlist start --><?php if(is_array($catlist)) foreach($catlist as $key => $cat) { ?><div class="NkzjN15qgU">
<div class="whkX5sAflG" href="#sub_forum_<?php echo $cat['fid'];?>">        			
<h1 class="MF0KxMS88W"><?php echo $cat['name'];?><span class="gNR0yeE6rb"><img src="template/v2_mbl20121009/mobile_plus/img/collapsed_<?php if(!$_G['setting']['mobile']['mobileforumview']) { ?>yes<?php } else { ?>no<?php } ?>.png"></span></h1>
        </div>
<ul class="d2xccWKZg1" id="sub_forum_<?php echo $cat['fid'];?>">
            <?php if(is_array($cat['forums'])) foreach($cat['forums'] as $forumid) { ?>                <li class="YGGufsdeK0">              
                    <?php $forum=$forumlist[$forumid];?>                    <?php if($forum['icon']) { ?>
<?php echo $forum['icon'];?>
<?php } else { ?>
<a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $forum['fid'];?>"><img src="template/v2_mbl20121009/mobile_plus/img/forum<?php if($forum['folder']) { ?>_new<?php } ?>.png"/></a>
<?php } ?>                    
                    <a href="forum.php?mod=forumdisplay&amp;fid=<?php echo $forum['fid'];?>" class="4Cm4RjOrOP">
                    <p class="s9leSo5EBh"><?php echo $forum['name'];?></p>
                    <?php if($forum['description']) { ?><p class="r4Ego4fVLo"><?php echo cutstr(strip_tags($forum['description']),30); ?></p><?php } ?>
                    <?php if($forum['todayposts']) { ?><span class="poXXTQj28l"><?php echo $forum['todayposts'];?></span><?php } ?>
                    </a>
                </li>
            <?php } ?>
</ul>

</div>
<?php } ?>

<!-- main forumlist end -->
<?php if(!empty($_G['setting']['pluginhooks']['index_middle_mobile'])) echo $_G['setting']['pluginhooks']['index_middle_mobile'];?>
<script type="text/javascript">
(function() {
<?php if(!$_G['setting']['mobile']['mobileforumview']) { ?>
$('.s_forum').css('display', 'block');
<?php } else { ?>
$('.s_forum').css('display', 'none');
<?php } ?>
$('.subforumshow').on('click', function() {
var obj = $(this);
var subobj = $(obj.attr('href'));
if(subobj.css('display') == 'none') {
subobj.css('display', 'block');
obj.find('img').attr('src', 'template/v2_mbl20121009/mobile_plus/img/collapsed_yes.png');
} else {
subobj.css('display', 'none');
obj.find('img').attr('src', 'template/v2_mbl20121009/mobile_plus/img/collapsed_no.png');
}
});
 })();
</script>
<?php } include template('common/footer'); ?>
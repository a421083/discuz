<?php

/*
 *  V4  2013.09.26 
 * 
 * 我们是谁? 我们是一家工作室, 主要从事网站设计, Discuz模板制作, WordPress企业项目, PHP+Mysql应用开发及相关外包服务.
 * 我们致力于为每一位用户, 打造独立个性的产品, 提升用户体验, 让你的网站更加的接近 Web 2.0 标准.
 *
 * 手机: 182-3270-3356  150-7679-6160
 * QQ:  32-77558-32  2-292-191-585
 *
 * 工作时间：周一至周六上午8:30-11:30、下午1:00-5:00、晚上8:00-10:00(业务咨询时间)，周日需提前预约
 * 网站管理在线时间：每工作日上午9:30-10:00、下午2:00-3:00、晚上9:00-10:00 
 *
 */

if(!defined('IN_DISCUZ')) {
	exit('Access Denied');
}

//语言, 如修改注意标点符号
function m_lang($f) {	
$m_lang = array(
	'home' => '首页',
	'forum' => '论坛',
	'pic' => '美图',
	'guide' => '导读',
	'mdoing' => '记录',
	'mfollow' => '广播',
	'mfriend' => '好友',
	'mfriendall' => '全部',
	'mfriendol' => '在线好友',
	'mfriendbl' => '黑名单',
	'mfriendrq' => '好友请求',
	'mfriendprofile' => '资料',
	'mfriendgroup' => '分组',
	'mefriend_doing' => '我和好友',
	'friend_feed' => '好友动态',
	'mblog' => '日志',
	'mfeed' => '动态',
	'photo' => '相册',
	'subfrm' => '子版块',
	'thtys' => '分类',
	'pta' => '发表于',
	'acom' => '查看评论',
	'od' => '条',
	'tt' => '共有',
	'mthread' => '帖子',
	'mforum' => '版块',
	'profile' => '个人资料',
	'favorite' => '我的收藏',
	'mypm' => '我的消息',
	'arc' => '文章',	
	'back' => '返回',
	'search' => '搜索',
	'searchportal' => '搜索文章',
	'new_remind' => '有新提醒',	
	'tthread' => '正文',
	'noid' => '没有账号?',
	'yesid' => '已有账号?',	
	'load' => '加载更多',
	'load_photo' => '不够爽, 再来一波',
	'load_pic' => '加载中...',
	'ucspeed' => '请关闭UC浏览器的急速模式后<br />再尝试刷新此页面',			
    );
	if($m_lang[$f]) $f = $m_lang[$f]; 
	if(CHARSET =='gbk'){
		return $f;
	}else{
		return diconv($f,'GBK',CHARSET);
	}
}

?>
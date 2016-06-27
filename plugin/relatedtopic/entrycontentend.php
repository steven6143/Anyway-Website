<?php
$relatednum=5;
$url_this = "http://".$_SERVER['HTTP_HOST']. $_SERVER['REQUEST_URI'];
$timeformat="Y 年 n 月 j 日";
$time=1;

if (!defined('VALIDREQUEST')) die ('Access Denied.');



global $records, $blog, $db_prefix;
if ($records[0]['tags'] && $records[0]['tags']!='>') {
	$records[0]['tags']=trim($records[0]['tags'],'>');
	$taginfo=@explode('>', $records[0]['tags']);
}

$plugin_return='';
if (is_array($taginfo)) {
	$tagforsearch=makeaquery($taginfo, "`tagname`='%s'", 'OR');
	$allrelates=$blog->getarraybyquery("SELECT tagentry FROM `{$db_prefix}tags` WHERE {$tagforsearch}");
	$alllse=@implode(',', $allrelates['tagentry']);
	$allsingle=array_unique(@explode(',', $alllse));
	if (is_array($allsingle)) {
		$tagforsearch=makeaquery($allsingle, "`blogid`='%s'", 'OR');
		$allrelates=$blog->getgroupbyquery("SELECT blogid,title,views,blogalias,pubtime,category FROM `{$db_prefix}blogs` WHERE ({$tagforsearch}) AND `property`<2 ORDER BY `pubtime`DESC LIMIT 0,{$relatednum}");
		if (is_array($allrelates)) {
			foreach ($allrelates as $relateditem) {
				if ($relateditem['blogid']==0 || $relateditem['blogid']==$records[0]['blogid']) continue;
				
				$times=($time==1) ? "".gmdate($timeformat, $relateditem['pubtime']+$config['timezone']*3600)."" : '';
				
				$showrelate.="<a href=\"".getlink_entry($relateditem['blogid'], $relateditem['blogalias'])."\" class=\"related-item\">{$relateditem['title']} <span class=\"related-date\"><i class=\"font-icon icon-time\"></i> {$times}</span></a><br/>";
			}
			if ($showrelate) $plugin_return="
<br/><br/>

<div class='textbox-extra'>
	<div class='textbox-share'>
		<div class='textbox-extra-title'><i class=\"font-icon icon-asterisk blue\"></i> 分享博文</div>
		
		<hr>
		
		<div class='bdsharebuttonbox'>
			<a href='#' class='bds_more' data-cmd='more'></a><a href='#' class='bds_weixin' data-cmd='weixin' title='分享到微信'><i class=\"font-icon icon-qrcode blue\"></i> <span class='mobile-hide'>分享到</span>微信</a>
			<a href='#' class='bds_tsina' data-cmd='tsina' title='分享到新浪微博'><i class=\"font-icon icon-facebook blue\"></i> <span class='mobile-hide'>分享到</span>微博</a>
			<a href='#' class='bds_linkedin' data-cmd='linkedin' title='分享到 Linkedin'><i class=\"font-icon icon-linkedin blue\"></i> <span class='mobile-hide'>分享到 </span>Linkedin</a>
		</div>
		
		<script>window._bd_share_config={'common':{'bdSnsKey':{},'bdText':'','bdMini':'1','bdMiniList':false,'bdPic':'','bdStyle':'1','bdSize':'24'},'share':{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
		
	</div>
</div><br /><br />

<div class='textbox-extra'>
	<div class='textbox-related'>
	<div class='textbox-extra-title'><i class=\"font-icon icon-asterisk blue\"></i> 相关博文</div>
	<hr>
	{$showrelate}</div>
</div>



	<div class='clear'></div>
";
		}
	}
}

?>
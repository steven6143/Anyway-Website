<?PHP
$elements['header']=<<<eot
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-cmn-Hans">
	<head>
		<meta charset="utf-8">
		<meta content="all" name="robots" />
		<meta name="author" content="JJ Ying" />
		<meta name="description" content="Anyway.FM × 设计杂谈" />
		<meta name="keywords" content="设计, 播客, JJ Ying, Leon Gao, 应骏赳, 设计杂谈, UI, podcast, 创意" />
		<title>{pagetitle}Anyway.FM × 设计杂谈 × 由 UI 设计师 JJ Ying 和 Leon Gao 主播的设计杂谈播客</title>
		{baseurl}
		<link rel="stylesheet" rev="stylesheet" href="css/main.css" type="text/css" media="all" />
		<link rel="stylesheet" rev="stylesheet" href="http://anyway-web.b0.upaiyun.com/css/fontello.css" type="text/css" media="all" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
		<script type="text/javascript" src="js/t.min.js"></script>
		<link rel="alternate" type="application/rss+xml" title="Anyway.FM" href="http://anyway.fm/rss.xml" />
		<link rel="shortcut icon" href="http://anyway-web.b0.upaiyun.com/favicon.ico" />
		<link rel="apple-touch-icon" href="http://anyway-web.b0.upaiyun.com/images/apple-touch-icon-precomposed.png">
		<script type="text/javascript">
		/*<![CDATA[*/
		var fin=!1;		
		$(function(){
			$('.tagline').css("opacity","1");
			$('#t').t({
				speed:57,
				delay:0.8,
				speed_vary:true,
				mistype:40,				
				typing:function(elem,chars_total,chars_left,_char){
				if(_char=='*')foo();
				},			
				fin:function(){			
					if(fin==!1){
						fin=!!1; //avoids triggering after 'add' cmd
							$('#t').find('.t-caret').css("display","none");
					}
				}			
			});		
		});
		/*]]>*/
		</script>
	</head>
	
<body id="{pageID}" class="blog">
eot;

$elements['displayheader']=<<<eot

<div class="main">
			<div class="mask mt"></div><div class="mask mb"></div><div class="mask mv ml"></div><div class="mask mv mr"></div><div class="mask mv ml2"></div><div class="mask mv mr2"></div>
			<div class="section header">
				<div class="inner-section inner-header">
					<div class="logo">
						<a href="#" onclick="_hmt.push(['_trackEvent', 'nav', 'back-to-home', 'from-header-logo'])" data-type="page-transition"><img src="http://anyway-web.b0.upaiyun.com/images/logo.gif" alt="Anyway × FM 设计杂谈" /></a>
					</div>
					<div class="tagline" id="t"><i>Anyway.FM</i> 是一档<mark>播客</mark>节目，<ins>1</ins><br />
						<del>主播是 JJ Ying 和 Leon Gao</del><ins>0.6</ins>我们<em>，</em><ins>0.4</ins><del>就喜欢扯谈设计</del><ins>0.4</ins><del>专注嘴炮 30 年</del><ins>0.4</ins><del>想赚一些奶粉钱<ins>0.4</ins></del><ins>0.6</ins>想让你的<mark>听觉</mark>更懂<mark>视觉</mark>。
					</div>		<a name="title"></a>
					<div class="nav">
						<a href="http://anyway.fm/rss.xml" onclick="_hmt.push(['_trackEvent', 'subscribe', 'RSS', 'from-header-nav'])"><img src="http://anyway-web.b0.upaiyun.com/images/rss.svg" class="nav-icon"/> RSS 订阅</a><span></span><a href="https://itunes.apple.com/cn/podcast/anyway.fm-she-ji-za-tan/id1053786200" onclick="_hmt.push(['_trackEvent', 'subscribe', 'iTunes', 'from-header-nav'])"><img src="http://anyway-web.b0.upaiyun.com/images/itunes.svg" class="nav-icon"/> iOS 播客</a><span></span><a href="http://www.lizhi.fm/1824901/" onclick="_hmt.push(['_trackEvent', 'subscribe', 'Lizhi', 'from-header-nav'])"><img src="http://anyway-web.b0.upaiyun.com/images/lizhi.svg" class="nav-icon"/> 荔枝 FM 订阅</a>
					</div>
				</div>
			</div>  <!--End of 'Header'-->

eot;

$elements['mainpage']=<<<eot
		<div class="section content">
			<div class="inner-section inner-content">
				{mainpart}
			</div>
		</div>
eot;

$elements['otherpage']=<<<eot
		<div class="section content">
			<div class="inner-section inner-content">
				<div class="formbox">
						{mainpart}
					</div>
			</div>
		</div>
eot;

$url_this = "http://".$_SERVER['HTTP_HOST']. $_SERVER['REQUEST_URI'];
eot;

$thisYear = (int)date('Y');
$elements['displayfooter']=<<<eot
	

</div><!--End of 'Main'-->

<div class="about">
	<div class="section body-text inner-about">
	
		<div class="about-single about-jj">
			<!--<div class="about-avatar about-avatar-jj"><img src="http://anyway-web.b0.upaiyun.com/images/avatar-jj.jpg" alt="JJ Ying" /></div>-->
			<div class="about-name">JJ <span>Ying</span></div>
			<div class="about-desc">
				勉强算 85 后 <i>/</i> 理科出身，从做皮肤开始误入设计圈 <i>/</i> 专职 UI 设计，偶尔码码 CSS <i>/</i> 在惠普待了 4 年做打印机界面，来到百度做输入法和浏览器，目前是 MUX 上海部门的负责人，虽然待的地方都是大公司，但却是个野路子 + 实战派设计师 <i>/</i> 写了快十年设计博客：<a href="http://TuYueZhi.com">图月志</a> <i>/</i> 最近几年<a href="http://www.zhihu.com/people/jjying">知乎</a>上的比较多 <i>/</i> 十多年的红魔伪球迷 <i>/</i> 声音没 Leon 有磁性，大家多担待
			</div>
			<div class="about-links">
				<a href="http://JJYing.com" class="about-link"><i class="icon-home"></i></a><a href="http://dribbble.com/JJYing" class="about-link"><i class="icon-dribbble"></i></a><a href="http://weibo.com/yingjunjiu/" class="about-link"><i class="icon-weibo"></i></a><a href="https://github.com/jjying" class="about-link"><i class="icon-github"></i></a><a href="http://instagram.com/jjying" class="about-link"><i class="icon-instagram"></i></a><a href="https://twitter.com/JJYing" class="about-link"><i class="icon-twitter"></i></a><a href="http://www.flickr.com/photos/jjying/" class="about-link"><i class="icon-flickr"></i></a><a href="http://www.linkedin.com/in/jjying" class="about-link"><i class="icon-linkedin-squared"></i></a>
			</div>
		</div>
		
		<div class="about-single about-leon">
			<!--<div class="about-avatar about-avatar-leon"><img src="http://anyway-web.b0.upaiyun.com/images/avatar-leon.jpg" alt="Leon Gao" /></div>-->
			<div class="about-name">Leon <span>Gao</span></div>
			<div class="about-desc">
				男 <i>/</i> 上海宁 <i>/</i> 算算时间大概能挤进中国大陆第二批图形界面设计民工潮 <i>/</i> 9 年工作经验，换了肯定不止 9 家公司，至今没啥能拿的出手的产品来显摆，跟人吹牛逼的时候只好晒晒微软、惠普、frogdesign、小米以及我锤的工作经历 <i>/</i> 网络蝗虫，只要是新的互联网产品基本都能搜到这颗红色的头像 <i>/</i> 为人刻薄，怕麻烦不喜欢交朋友（漂亮妹子除外）<i>/</i> 哦，基本就这些
			</div>
			<div class="about-links">
				<a href="http://leongao.com" class="about-link"><i class="icon-home"></i></a><a href="http://dribbble.com/leongao" class="about-link"><i class="icon-dribbble"></i></a><a href="http://weibo.com/leongao/" class="about-link"><i class="icon-weibo"></i></a><a href="http://instagram.com/leongao" class="about-link"><i class="icon-instagram"></i></a><a href="http://twitter.com/leongao" class="about-link"><i class="icon-twitter"></i></a><a href="https://www.flickr.com/photos/leongao/" class="about-link"><i class="icon-flickr"></i></a>
			</div>
		</div>

		
	</div>			
</div> <!--End of 'About'-->

<div class="section subscribe">
	<div class="inner-section inner-subscribe">
		<div class="body-text subscribe-text">在 <img src="http://anyway-web.b0.upaiyun.com/images/itunes2.svg" class="nav-icon"/>iOS 播客 App 里收听请<mark><a href="https://itunes.apple.com/cn/podcast/anyway.fm-she-ji-za-tan/id1053786200" onclick="_hmt.push(['_trackEvent', 'subscribe', 'iTunes', 'from-subscribe-section'])">点这里</a></mark>或者搜索 Anyway.FM，<br />使用泛用型播客客户端可通过 <mark><a href="http://anyway.fm/rss.xml" onclick="_hmt.push(['_trackEvent', 'subscribe', 'RSS', 'from-subscribe-section'])"><img src="http://anyway-web.b0.upaiyun.com/images/rss2.svg" class="nav-icon"/>RSS</a></mark> 订阅，<br /><mark><a href="http://www.lizhi.fm/1824901/" onclick="_hmt.push(['_trackEvent', 'subscribe', 'Lizhi', 'from-subscribe-section'])"><img src="http://anyway-web.b0.upaiyun.com/images/lizhi2.svg" class="nav-icon"/>荔枝 FM</a></mark> 和 <mark><a href="http://music.163.com/m/djradio/4969001" data-log="link" data-app="true" onclick="_hmt.push(['_trackEvent', 'subscribe', 'Netease', 'from-subscribe-section'])"><img src="http://anyway-web.b0.upaiyun.com/images/netease2.svg"/>网易云音乐</a></mark> 上也能找到我们。
		</div>

	</div>
</div>  <!--End of 'Subscribe'-->

<div class="footer">
	<div class="inner-section inner-footer">
		© 2015 ~ 2016 <a href="http://anyway.fm">Anyway.FM</a> 保留所有权利<em>×</em>Proudly powered by <a href="http://bo-blog.com/" title="Bo-Blog 2, a free-of-charge weblog engine based on PHP script and MySQL storage.">Bo-Blog</a>
	</div>
</div> <!--End of 'Footer'-->

<!--Mini Header-->
<div class="mini-header">
	<div class="mini-logo">
		<a href="#"><img src="http://anyway-web.b0.upaiyun.com/images/logo-mini.png" alt="Anyway × FM 设计杂谈" /></a>
	</div>
	<div class="nav">
		<a href="javascript:loadScript('js/search.js','abc');"><img src="http://anyway-web.b0.upaiyun.com/images/mail2.svg" class="nav-icon"/> 搜索</a><span></span>
		<a href="mailto:hello@anyway.fm" onclick="_hmt.push(['_trackEvent', 'contact', 'E-mail', 'from-mini-header'])"><img src="http://anyway-web.b0.upaiyun.com/images/mail2.svg" class="nav-icon"/> 联系我们</a><span></span>
		<a href="http://weibo.com/anywayfm" onclick="_hmt.push(['_trackEvent', 'contact', 'Weibo', 'from-mini-header'])"><img src="http://anyway-web.b0.upaiyun.com/images/weibo2.svg" class="nav-icon"/> 微博</a><span></span>
		<a href="http://anyway.fm/rss.xml" onclick="_hmt.push(['_trackEvent', 'subscribe', 'RSS', 'from-mini-header'])"><img src="http://anyway-web.b0.upaiyun.com/images/rss2.svg" class="nav-icon"/> RSS</a><span></span>
		<a href="http://www.lizhi.fm/1824901/" onclick="_hmt.push(['_trackEvent', 'subscribe', 'Lizhi', 'from-mini-header'])"><img src="http://anyway-web.b0.upaiyun.com/images/lizhi2.svg" class="nav-icon"/> 荔枝 FM</a><span></span>
		<a href="http://music.163.com/m/djradio/4969001" data-log="link" data-app="true" onclick="_hmt.push(['_trackEvent', 'subscribe', 'Netease', 'from-mini-header'])"><img src="http://anyway-web.b0.upaiyun.com/images/netease2.svg" class="nav-icon"/> 网易云音乐</a><span></span>
		<a href="https://itunes.apple.com/cn/podcast/anyway.fm-she-ji-za-tan/id1053786200" onclick="_hmt.push(['_trackEvent', 'subscribe', 'iTunes', 'from-mini-header'])"><img src="http://anyway-web.b0.upaiyun.com/images/itunes2.svg" class="nav-icon"/> iOS 播客</a>
	</div>
</div>

<!--Search Bar-->
<div class="search-bar">
	<input type="text" class="st-default-search-input">
	<a href="javascript:closeSearchbar();" class="search-close">取消</a>
</div>

<!-- Nav Bar -->
<script type="text/javascript">
$(function() {
		if ($(window).scrollTop() > $('.header').height()-20) {
		  	$('.mini-header').addClass('mini-show');
		}
		else {
		  	$('.mini-header').removeClass('mini-show');
		}
	    setTimeout(arguments.callee, 40);
});
</script>

<!-- Load Search JS -->
<script type="text/javascript">
function loadScript(url,callback){
	$('.search-bar').addClass('search-bar-show');
   var script = document.createElement("script");
   script.type = "text/javascript"; 
   script.src = url;
   if (script.readyState){//IE 
      script.onreadystatechange = function(){ 
         if (script.readyState ==  "loaded" || script.readyState == "complete"){ 
            script.onreadystatechange = null;
            eval(callback + '()');
         } 
      }; 
   } else { //Others: Firefox, Safari, Chrome, and Opera 
      script.onload = function(){ 
         eval(callback + '()');
      }; 
   }
   document.body.appendChild(script);
}
function closeSearchbar() {
	$('.search-bar').removeClass('search-bar-show');
}
</script>

<!-- Baidu Analytics -->
<script>
	var _hmt = _hmt || [];
	(function() {
	  var hm = document.createElement("script");
	  hm.src = "//hm.baidu.com/hm.js?d6fc362c05908e5ce8d17df52dbc2586";
	  var s = document.getElementsByTagName("script")[0]; 
	  s.parentNode.insertBefore(hm, s);
	})();
</script>

eot;


$elements['footer']=<<<eot

</body>
</html>
eot;

$elements['displayall']=<<<eot
{headerhtml}
{headmenu}
{bodymenu}
{sidemenu}
{footmenu}
{footerhtml}
eot;

$elements['msgbox']=<<<eot
<div class="tips">Tips:<br/>{message}</div>
eot;

$elements['sideblock']=<<<eot

eot;

$elements['sideblock_category']=<<<eot

eot;

$elements['displaybody']=<<<eot
<div id="sidebar" class="sidebar">
<div id="innerSidebar">
{section_side_components}
</div>
</div>
eot;

$elements['excerpt']=<<<eot
<div class="item  {entrycatealias}">
	<div class="inner-item">
		<h1 class="item-text">{entrysourcewithlink}{entrytitle}</h1>
		<div class="item-meta">
			{hostsname}<span class="item-text item-meta-date">{entrydater}</span>{ifadmin}
		</div>
		<div class="item-text body-text item-desc text">
			{entrycontent}
		</div>
	</div>
</div>
eot;

$elements['excerptontop']=<<<eot
<div class="textbox">
<div class="textbox-title-top" style="width: 100%;">
			<h2>
			<a href="javascript: showhidediv('{topid}');">+ {entrytitletext}</a>
			</h2>
			<div class="title-label"><div class="inner">{entrydater} &#8226; <span class="entry-cate">{entrycate}</span></div></div>
			<div class="textbox-adminbar">{ifadmin}</div>
  </div>
	<div id="{topid}" style="display: none;">
	
	<div class="textbox-content">
		{entrycontent}
	</div>
	<div class="sep"></div>
	</div>
</div>
eot;

$elements['list']=<<<eot
	<tr>
		<td class="listbox-entry">
			<div class="list-title">{entrytitle}</div>
			<div class="list-meta">{entrydater} &#8226; <span class="entry-cate">{entrycate}</span></div>
		</td>
	</tr>
eot;

$elements['listbody']=<<<eot
<div class="listbox">
	<div class="listbox-table">
	<table cellpadding="2" cellspacing="0" width="100%">
	{listbody}
	</table>
	</div>
</div>
eot;

function relativetime($time) {
	$time = (is_string($time) ? strtotime($time) : $time);
	$timeSince = time() - $time;
}


$elements['viewentry']=<<<eot
<div class="item  {entrycatealias} single-page">
	<div class="inner-item">
		
		<h1 class="item-text">{entrysourcewithlink}{entrytitle}</h1>
		<div class="item-meta">
			{hostsname}<span class="item-text item-meta-date">{entrydater}</span>{ifadmin}
		</div>
		<div class="item-text body-text item-desc text">
			{entrycontent}
			<div class="item-btns">
				{playaudio}
			</div>
		</div>

	</div>
</div>

{previous}

<div class="section comments-section">
<div class="inner-section">
<div class="comments body-text">	
	<a name="topreply"></a>

<!-- 多说评论框 start -->
	<div class="ds-thread" data-thread-key="" data-title="" data-url="{$url_this}"></div>
<!-- 多说评论框 end -->
<!-- 多说公共JS代码 start (一个网页只需插入一次) -->
<script type="text/javascript">
var duoshuoQuery = {short_name:"anyway"};
	(function() {
		var ds = document.createElement('script');
		ds.type = 'text/javascript';ds.async = true;
		ds.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//static.duoshuo.com/embed.js';
		ds.charset = 'UTF-8';
		(document.getElementsByTagName('head')[0] 
		 || document.getElementsByTagName('body')[0]).appendChild(ds);
	})();
	</script>
<!-- 多说公共JS代码 end -->

	</div>
</div>
</div>

eot;

$elements['comment']=<<<eot
eot;

$elements['trackback']=<<<eot

eot;


$elements['form_reply']=<<<eot

eot;

$elements['endviewentry']=<<<eot

{form_reply}
eot;

$elements['entryadditional']=<<<eot
<div class="item-btns">
	{playaudio}
	{readmore}
</div>
eot;

$elements['login']=<<<eot
<form name="register" method="post" action="login.php?job=verify">
<div class="title-labe">
<table cellspacing="1" width="500px" align="center" class="formbox">
  <tr><td class="formbox-title" colspan="2">Login(<a href="login.php?job=register">Not Registered?</a>)</td></tr>
  <tr>
    <td class="formbox-rowheader">Username</td>
    <td class="formbox-content"><input name="username" type="text" id="username" size="24" class="text" />
  </tr>
  <tr>
    <td class="formbox-rowheader">Password</td>
    <td class="formbox-content"><input name="password" type="password" id="password" size="16" class="text" />
  </tr>
  <tr>
    <td class="formbox-rowheader">{$lnc[255]}</td>
    <td class="formbox-content"><input name="savecookie" type="radio" id="savecookie" value="0"/>{$lnc[256]} <input name="savecookie" type="radio" id="savecookie" value="3600"/>{$lnc[257]} <input name="savecookie" type="radio" id="savecookie" value="86400"/>{$lnc[258]}  <input name="savecookie" type="radio" id="savecookie" value="604800"/>{$lnc[259]}  <input name="savecookie" type="radio" id="savecookie" value="2592000"/>{$lnc[260]}   <input name="savecookie" type="radio" id="savecookie" value="31104000"/>{$lnc[261]}   
  </tr>
  {lvstart}
  <tr>
    <td class="formbox-rowheader">{$lnc[249]}</td>
    <td class="formbox-content"><img src="inc/securitycode.php?rand={rand}" alt="" title="{$lnc[250]}"/> <input name="securitycode" type="text" id="securitycode" size="16" class="text" /> {$lnc[251]}
  </tr>
  {lvend}
  <tr>
    <td class="formbox-content"></td>
    <td class="formbox-content">
    <input name="Submit" type="submit" id="Submit" value="Submit" class="button" /> &nbsp;
    <input name="Reset" type="reset" id="Reset" value="Reset" class="button" />
    </td>
  </tr>
</table>
</div>
</form>
eot;

$elements['contentpage']=<<<eot
<div class="textbox">
	<div class="textbox-title">
			<h2>
				{title}
			</h2>
  </div>
	<div class="textbox-content">
	{contentbody}
	</div>
</div>
eot;

$elements['taglist']=<<<eot
<table width="98%" align="center" cellpadding="4" cellspacing="0">
<tr><td>{tagcategory}</td></tr>
<tr><td class="taglist" style="word-break: none; word-wrap: break-word;">{tagcontent}</td></tr>
<tr><td>{tagextra}</td></tr>
</table>
<br/><br/>
eot;

$elements['register']=<<<eot
<form name="register" method="post" action="{job}">
<table cellspacing="1" width="500px" align="center" class="formbox">
  <tr><td class="formbox-title" colspan="2">{title} </td></tr>
  {registerbody}
  <tr><td colspan="2" align="center"><input type="submit" value="Submit" class="button"/> </td></tr>
</table>
</form>
eot;

$elements['normaltable']=<<<eot
<table cellspacing="0" width="500px" align="center" class="formbox">
  {tablebody}
</table>
eot;

$elements['normaltablewithtitle']=<<<eot
<table cellspacing="0" width="500px" align="center" class="formbox">
  <tr><td class="formbox-title" colspan="6">{title}</td></tr>
  {tablebody}
</table>
eot;

$elements['form_eachline']=<<<eot
  <tr>
    <td class="formbox-rowheader">{text}</td>
    <td class="formbox-content">{formelement}</td>
  </tr>
eot;

$elements['eachlink']=<<<eot
<div class="linkbody">
<div class="linktxt"><span class="linktitle">{title}</span><span class="linkdesc">{desc}</span></div>
</div>
eot;

$elements['linkdiv']=<<<eot
<div class="linkover">
<div class="linkgroup">{title}</div>
<hr>
<div class="linkgroupcontent">{tablebody}</div>
</div>
eot;

$elements['viewpage']=<<<eot
<div class="pagebox">
	<div class="pagebox-title">
		<h2>
		{entrytitle}
		</h2>
	</div>
	<div class="pagebox-content">
		{entrycontent}
	</div>
</div>
eot;


//Message page
$elements['tips']=<<<eot
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-cmn-Hans">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="Content-Language" content="UTF-8" />
{csslocation}
<link rel="stylesheet" rev="stylesheet" href="http://localhost:8888/anyway/admin/theme/iconmoon/common.css" type="text/css" media="all" />
<title>{blogname} - {blogdesc}</title>
</head>
<body id="messagebox">
<center>
<div class="messagebox textbox">
  <h3>{title}</h3>
   <hr>
  <div class="messagebox-content">
  {tips}
  </div>
  <hr>
  <div class="messagebox-bottom"><a href="javascript: window.history.back();">{$lnc[263]}</a> | <a href="index.php">{$lnc[88]}</a> {admin_plus}</div>
</div>
</center>
</div>
</body>
</html>
eot;
?>
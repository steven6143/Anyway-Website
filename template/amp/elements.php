<?PHP
$elements['header']=<<<eot
<!DOCTYPE HTML>
<html lang="zh-cmn-Hans" amp>
	<head>
		<meta charset="UTF-8">
		<script async src="https://cdn.ampproject.org/v0.js"></script>
		<script async custom-element="amp-analytics" src="https://cdn.ampproject.org/v0/amp-analytics-0.1.js"></script>
		
		<title>{pagetitle}Anyway.FM 设计杂谈 • UI 设计师 JJ 和 Leon 主播的设计播客</title>
		
		<link rel="canonical" href="http://Anyway.FM/">
		<style amp-boilerplate>body{-webkit-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-moz-animation:-amp-start 8s steps(1,end) 0s 1 normal both;-ms-animation:-amp-start 8s steps(1,end) 0s 1 normal both;animation:-amp-start 8s steps(1,end) 0s 1 normal both}@-webkit-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-moz-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-ms-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@-o-keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}@keyframes -amp-start{from{visibility:hidden}to{visibility:visible}}</style><noscript><style amp-boilerplate>body{-webkit-animation:none;-moz-animation:none;-ms-animation:none;animation:none}</style></noscript>
		
		<meta name="robots" content="noodp"/>
		<meta name="author" content="JJ Ying" />
		<meta name="description" content="{pagedesc}"/>


		<meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">


		<link rel="alternate" type="application/rss+xml" title="Anyway.FM" href="http://anyway.fm/rss.xml" />
		
		<style amp-custom>*{margin:0;padding:0;border:0;vertical-align:baseline;outline:0;box-sizing:border-box;-webkit-tap-highlight-color:transparent}@font-face{font-family:'Anyway Type';src:url(http://anyway-web.b0.upaiyun.com/font/calluna-sans-regular.woff) format('woff'),url(http://anyway-web.b0.upaiyun.com/font/calluna-sans-regular.woff2) format('woff2');font-weight:400;font-style:normal;font-display:fallback}@font-face{font-family:'Anyway Type';src:url(http://anyway-web.b0.upaiyun.com/font/calluna-sans-bold.woff) format('woff'),url(http://anyway-web.b0.upaiyun.com/font/calluna-sans-bold.woff2) format('woff2');font-weight:700;font-style:normal;font-display:fallback}body{text-rendering:optimizeLegibility;-webkit-font-smoothing:antialiased;font-size:62.5%;font-family:'Anyway Type','Myriad Pro','PingFang SC','Hiragino Sans GB','Microsoft YaHei',sans-serif;text-align:center;color:#333;line-height:1;background:#f60c3e}.section{width:100%}a{color:#333;cursor:hand;transition:color .15s ease-in 0s}::selection{background:#f60c3e;color:#fff}.body-text{max-width:55%;width:40rem}.mask{position:fixed;z-index:9999;border:.4rem solid #f60c3e;background:#f60c3e}.mb,.mt{height:0;width:100%;left:0}.mb{bottom:0}.mt{top:0}.mv{bottom:0;height:999em;width:0}.ml,.ml2{left:0}.mr,.mr2{right:0}.ml2,.mr2{bottom:none;top:0}.header{font-size:1rem;background:#fff;height:auto;padding-top:2.5rem;border-bottom:.125rem dotted #ddd;overflow:hidden}.logo{max-width:20em;margin:0 auto}.logo img{max-width:100%}.logo span{text-indent:-9900px;display:block;line-height:0}.tagline{font-size:3rem;margin:0 0 1.5em 1em;color:#333;line-height:1.5;letter-spacing:-.05em;height:9rem;font-weight:900;overflow:visible;font-family:'Anyway Type','PingFang SC','Myriad Pro','Hiragino Sans GB','Microsoft YaHei',sans-serif;opacity:0}.tagline i{font-style:normal}.tagline em{letter-spacing:-.27em;font-style:normal}mark{background:0 0;color:#333;border-bottom:.2rem solid #f60c3e;padding:0;margin:0}.tagline del{text-decoration:none}.t-caret{animation:caretFlash .7s ease-out 0s infinite alternate;transition:all .2s ease-out}@keyframes caretFlash{0%{opacity:0}20%{opacity:0}40%{opacity:1}80%{opacity:1}100%{opacity:0}}.nav{margin:0 0 2em;color:#333;font-size:.75rem}.nav a{opacity:.8;color:#333;text-decoration:none;line-height:1.4rem;display:inline-block;height:1.4rem;vertical-align:middle;transition:opacity .15s ease-in 0s}.nav a:hover{opacity:1}.nav span{margin:0 1.2em}.nav-icon{width:1.2rem;height:1.2rem;vertical-align:top}.nav a img{transition:all .15s ease-in 0s}.nav a:hover img{transform:scale(1.2)}.mini-header{background:#f60c3e;width:100%;height:auto;position:fixed;z-index:9999;right:0;top:0;padding:.5rem;transition:all .5s ease-in 0s;transform:translate(0,-100px)}.mini-header .mini-logo{top:0;left:1rem;height:100%;position:absolute;width:50%;text-align:left}.mini-header .mini-logo a{color:#ddd;font-size:1.2rem;text-decoration:none}.mini-header .mini-logo img{max-height:100%}.mini-name{color:#ddd;text-align:left}.mini-header .nav{position:static;float:right;margin:.5rem 1rem;color:#fff;top:1rem;transition:all .15s ease-in 0s}.mini-header .nav a{color:#fff;opacity:.9;font-weight:700;color:#fff;transition:all .15s ease-in 0s}.mini-header .nav:hover a{opacity:.6}.mini-header .nav a:hover{opacity:1;color:#fff;font-weight:700}.mini-show{display:block;transform:translate(0,0)}.search-bar{display:block;width:100%;position:fixed;height:auto;background:#f60c3e;top:-20em;opacity:0;left:0;z-index:99999;transition:all .3s ease-out}.search-bar-show{opacity:1;top:0}.search-text{font-size:1.3em;line-height:1.35;color:#fff;padding:2em 0 0}.search-bar .st-default-search-input{border-radius:0<amp-img;margin:1em 0 .5em;border-width:0<amp-img}.search-close{display:block;padding:.5em 0;text-decoration:none;color:#fff;font-weight:300;font-size:1.5em;width:5em;margin:.5em auto 1em;background:rgba(0,0,0,.15)}.search-close:hover{background:rgba(0,0,0,.25)}.search-close:before{content:"× ";font-weight:900;font-size:1em}.content{background:#f5f5f5}.item{height:auto;overflow:hidden;border-bottom:.125rem dotted #ddd}.single-page{border:none}.inner-item{position:relative;background:#fff;height:100%;padding:3em 0 2em;transition:background .15s ease-in 0s}h1{font-size:2.7rem;color:#333;font-weight:400;line-height:1.26;z-index:999;padding:0 .5em;transition:color .15s ease-in 0s;max-width:80%;margin:0 auto;letter-spacing:-.03em}.single-page h1{padding-top:.5em}h1 a{text-decoration:none;color:#333}h1 a:hover{color:#f60c3e;transition:color .15s ease-in 0s}h1 span{font-size:.5em;margin:.2em auto 0;font-weight:700;letter-spacing:-.08em;display:block;-moz-font-feature-settings:'tnum';-webkit-font-feature-settings:'tnum';font-feature-settings:'tnum'}h1 span:after,h1 span:before{content:"-";letter-spacing:0;margin:0 .35em}.item-desc{color:#333;font-size:1rem;text-align:left;margin:1.2em auto 1em;line-height:1.75;position:relative;text-align:justify;text-justify:ideographic}.item-desc:before{content:"“";color:transparent;background:url(http://anyway-web.b0.upaiyun.com/images/quote.svg) no-repeat left top;font-weight:700;position:absolute;width:1em;height:1em;font-size:1.4em;left:-1.4em;top:-.3em;background-size:cover}.single-page .item-desc:before{opacity:1;display:block}.item-desc img{max-width:100%}.item-meta{margin:.5em 0 0;padding:0 1em;font-weight:400;width:100%;font-size:.75rem;text-align:center}.item-meta,.item-meta a{color:#333;text-decoration:none}.item-meta a{color:#fff}.item-meta span{line-height:1.5;margin:.3em 0;color:#fff;display:inline;padding:.25em .5em .25em;background:#f60c3e}.single-page .text{color:#333;font-weight:400}.text a{text-decoration:none;border-bottom:.1em dotted #999;color:#333}.text a:hover{border-bottom:.15em solid #f60c3e;color:#000}h2{font-weight:900;margin:0 0 .2em -1.5em;vertical-align:middle;line-height:1.5;font-size:1.4em;position:relative;color:#333}h2 .h2-icon{vertical-align:top;margin-right:.2em;width:1em;line-height:1.2}.section-content{text-align:center;display:block}.text ol,.text ul{list-style-position:outside;margin-left:0;list-style-type:none;counter-reset:item}.text ul li:before{content:"× ";color:#f60c3e;font-weight:400}.text ol li:before{content:counter(item) ". ";counter-increment:item;color:#f60c3e;font-weight:400;text-align:left;display:inline-block}.contents-time:after,.hosts-name:after{content:" × ";color:#f60c3e}.contents-time,.contents-time:after,.hosts-name:after,.text ol li:before{-moz-font-feature-settings:'tnum';font-feature-settings:'tnum';-webkit-font-feature-settings:'tnum';font-weight:400}.module h2:before{content:" ";color:transparent;background:url(http://anyway-web.b0.upaiyun.com/images/list.svg) no-repeat center center;background-size:cover;width:1em;height:1em;vertical-align:middle;display:inline-block;margin-right:.4em;margin-bottom:.2em}.hosts h2:before{background-image:url(http://anyway-web.b0.upaiyun.com/images/hosts.svg)}.contents h2:before{background-image:url(http://anyway-web.b0.upaiyun.com/images/list.svg)}.ref h2:before{background-image:url(http://anyway-web.b0.upaiyun.com/images/ref.svg)}.sponsor h2:before{background-image:url(http://anyway-web.b0.upaiyun.com/images/sponsor.svg)}.ref ol li{text-align:left}.item-btns{margin:1.4em auto 0;width:auto;text-align:center;height:auto}.item-btn{display:inline-block;color:#fff;border-radius:2em;background:0 0;font-size:1rem;cursor:pointer;font-weight:700;text-decoration:none;border:none<amp-img;margin:0 1.2em;color:#333;transition:all .15s ease-in 0s;vertical-align:middle}.single-page .item-btn{font-size:1.5rem}.item:hover .item-btn{background:#fff}.item-btn img{height:1.4em;padding-bottom:.2em;vertical-align:middle}.item-btn:hover{color:#f60c3e<amp-img}.item-btn:hover i{color:#fff}.item-btn img{transition:all .15s ease-in 0s}.item-btn:hover img{transform:scale(1.2)}.switch-target{font-size:.5em;margin:1em 8em 0 0;float:right;border:none<amp-img;vertical-align:middle}#switch-demo .switch-target{margin:0 auto;float:none}#switch-demo{text-align:center}.switch-target span{font-style:normal;color:#aaa;padding:.4em .6em;background:#f5f5f5;vertical-align:baseline}.switch-target .selected{background:#333;color:#fff}.switch-target .selected:before{content:"✔ ";color:#fff}.page-bar{height:auto;overflow:hidden;border-bottom:.125rem dotted #ddd;padding:3em 0;font-size:2em;background:#fff}.page-total,.pagebar-selections{display:none}.page-bar a{cursor:pointer;padding:.3em .5em .3em .7em;font-size:1em;font-weight:900;color:#fff;background:#333;text-decoration:none;transition:all .1s ease-in;vertical-align:baseline;text-shadow:none;margin:0 1em;border:.1em solid #333}.page-bar a:hover{color:#fff;text-decoration:none;background:#f60c3e;border:.1em solid #f60c3e}.about{background:#fff;overflow:hidden}.inner-about{margin:0 auto;padding:2em 0}.about-single{width:50%;float:left;display:block;padding:2em 1.5em 3em}.about-jj{padding-left:0}.about-leon{padding-right:0}.about-avatar{display:none}.about-avatar img{max-width:100%;width:20%;margin:0 auto 1em;border-radius:50%;overflow:hidden}.about-name{font-size:2.6rem;font-weight:700;letter-spacing:-.04em;margin:0 .5em 0 0}.about-name span{font-weight:400}.about-name:before{margin:0 .3em 0 0;font-size:.4em;vertical-align:top;font-weight:300;letter-spacing:0}.about-jj .about-name:before{content:"主播一号 :"}.about-leon .about-name:before{content:"主播二号 :"}.about-jj:hover .about-name:before{content:"话唠担当 :"}.about-leon:hover .about-name:before{content:"声线担当 :"}.about-desc{font-size:.75rem;margin:.7em 0 1em;padding:1em 0;line-height:1.4;text-align:justify;text-justify:ideographic;letter-spacing:-.08em;border-top:.35rem solid #f60c3e}.about-desc a{font-weight:700}.about-desc i{opacity:.6;font-style:normal;font-weight:100}.about-links{font-size:1rem;display:block;padding:0 0 1rem}.about-links a{color:#fff;background:#333;border-radius:50%;display:inline-block;height:1.8rem;width:1.8rem;margin:.2em .2em 0;line-height:1.8rem;vertical-align:middle;transition:all .12s ease-in 0s;font-family:sans-serif}.about-links a:hover{color:#fff;background:#f60c3e;margin-top:0}.subscribe{height:auto;clear:both;padding:2.3rem 0 .5rem;overflow:hidden;background:#f60c3e}.subscribe-text{margin:0 auto;height:auto;font-size:1.6rem;color:#fff;line-height:1.75;letter-spacing:-.05em;font-weight:400}.subscribe-text a{text-decoration:none;color:#fff}.subscribe-text a:hover{color:#fff;opacity:.8}.subscribe-text mark{border-bottom-color:#fff;font-weight:400}.subscribe-text img{height:.9em;width:.9em;padding-bottom:.1em;vertical-align:middle}.footer{clear:both;font-size:.75rem;padding:2em 0 2em;background:#f60c3e;color:#fff;font-weight:400;height:auto}.inner-footer{opacity:.7}.footer a{font-weight:400;color:#fff;text-decoration:none}.footer em{opacity:.5;margin:0 .3em;font-style:normal}.comments-section{border-bottom:.125rem dotted #ddd}.comments{margin:0 auto;min-height:4rem;padding:1rem 0 1.5rem}.comment-pages,.ds-comment-actions .ds-icon,.ds-comments-info,.ds-like-tootip,.ds-post-likes,.ds-post-placeholder,.ds-post-report,.ds-sort,.ds-toolbar,.ds-toolbar-buttons,.ds-visitor{display:none<amp-img}#ds-reset .ds-comments,.ds-border,.ds-paginator{border:none<amp-img}#ds-thread #ds-reset *{font-size:inherit<amp-img;box-shadow:none<amp-img;text-shadow:none<amp-img}#ds-thread #ds-reset li.ds-tab{padding-bottom:.75em<amp-img}#ds-thread #ds-reset .ds-comment-footer,#ds-thread .ds-login-buttons,#ds-thread .ds-powered-by,#ds-thread .ds-sync{font-size:.75em<amp-img}#ds-thread #ds-reset .ds-highlight{color:#333<amp-img;font-weight:700<amp-img}.ds-user-name{font-weight:700}#ds-recent-comments li.ds-comment{font-size:1em<amp-img}#ds-recent-comments li.ds-comment .ds-excerpt{line-height:1.5<amp-img}#ds-thread .ds-comments-tabs{text-align:center;font-size:.75em<amp-img}.ds-tab .ds-current{color:#333<amp-img}.ds-tab{margin:0 auto<amp-img;width:auto<amp-img;display:block<amp-img}.ds-tab a{background:0 0<amp-img}.ds-post{border:none<amp-img;background:#fff<amp-img;margin:1.1em 0<amp-img}.ds-post-self{padding:1.2em 10px;border:none<amp-img}#ds-thread #ds-reset ul.ds-children .ds-post-self{padding:1.2em 10px<amp-img}#ds-thread #ds-reset ul.ds-children .ds-post{border:none<amp-img;background:rgba(0,0,0,.06)<amp-img;background:linear-gradient(to right,rgba(0,0,0,.05) 0,rgba(0,0,0,0) 100%)<amp-img}.ds-gradient-bg,.ds-textarea-wrapper{background-image:none<amp-img}.ds-textarea-wrapper{border-radius:0<amp-img;border:none<amp-img;margin:15px 0 0 5px<amp-img;transition:all .15s ease-in 0s<amp-img}.ds-textarea-wrapper textarea{background:#fff<amp-img}.ds-textarea-wrapper:hover{border-color:#fff<amp-img}.ds-textarea-wrapper textarea{padding:.5em<amp-img}#ds-thread .ds-account-control{width:auto<amp-img;font-size:.75em<amp-img}.ds-replybox{margin:.8em 0}.ds-icon-settings{display:none<amp-img}.ds-avatar,.ds-avatar img{border-radius:30px<amp-img}.ds-replybox .ds-avatar{margin-left:10px<amp-img}.ds-comment-body{padding-left:50px<amp-img}.ds-service-link{background-image:url(http://anyway-web.b0.upaiyun.com/images/ds-social-icon.png)<amp-img}.ds-post-options{width:100%<amp-img;text-align:right;background:0 0<amp-img;border:none<amp-img}.ds-sync{float:right<amp-img;position:static<amp-img;display:block}.ds-post-toolbar{height:auto<amp-img}#ds-thread #ds-reset .ds-powered-by,#ds-thread #ds-reset .ds-sync{font-size:.75rem<amp-img}.ds-post-button{position:static<amp-img;display:block<amp-img;margin:0 auto<amp-img;background:#333<amp-img;color:#fff<amp-img;border-radius:0<amp-img;transition:all .15s ease-in-out 0s;width:5rem<amp-img;height:2rem<amp-img}.ds-post-button:hover{background:#f60c3e<amp-img;color:#fff<amp-img}#ds-thread .ds-powered-by{margin-top:-2.5em}#dsReplyBoxBlock{margin-top:1.5em<amp-img}.ds-comment-context{z-index:0<amp-img}.box{margin:5px 20px 30px 0;display:block}.next-entry{width:100%;text-align:center}.next-entry:hover .inner{background-color:#fafafa}.next-entry a{display:block;width:100%;font-size:1.25em;padding:4em 2em 4.3em;line-height:1.2;font-weight:300;transition:all .15s ease-in;background:#fff;text-decoration:none;color:#999;border-bottom:.125rem dotted #ddd;border-top:.125rem dotted #ddd}.next-entry span{font-size:3em;font-weight:700;display:inline-block;width:auto;color:#333;margin-top:.1em;transition:all .15s ease-in}.next-entry a:hover{text-decoration:none;background:#f60c3e;color:#fff;border-bottom:.125rem solid #f60c3e;border-top:.125rem solid #f60c3e}.next-entry a:hover span{color:#fff}@media screen and (max-width:1100px){.body-text{max-width:70%}}@media screen and (max-width:1000px){.logo{max-width:16em}.body-text{max-width:88%}.text{font-size:.875rem}.about-single{padding:2em .75em}.tagline{font-size:1.8rem;height:8rem}h1{font-size:1.8rem;max-width:95%}.subscribe-text{font-size:1.2rem}.mini-show{display:none}.mask{border-width:.3em}.switch-target{margin:.7em 0 0}.switch-target .selected:before{display:none}}@media screen and (max-width:900px){.about-single{width:100%;padding:2em 0 3em}h1 span{display:block;vertical-align:baseline;font-size:.75em}.footer{font-size:.6rem}.single-page .item-desc:before{display:none}.subscribe-text br{display:none}}@media only screen and (min-device-width :768px) and (max-device-width :1024px){.about-name,.ds-user-name,.tagline,h1,h2{font-weight:600}}@media screen and (max-device-width:480px){*{transition:none<amp-img}.mobile-hide{display:none<amp-img;visibility:hidden}h2{font-family:sans-serif<amp-img}.item-desc:before,.single-page .item-desc:before,h2 i{display:none}.header-mask{position:static;display:none}.header{border-top:none}.ds-user-name,h1,h2{font-weight:700}.item{background-size:1200px 800px}.tagline{font-size:1.35rem;font-weight:900;height:4.5rem}h1{font-size:2rem}h1 span{display:block;vertical-align:baseline;font-size:.75em}.nav span{margin:0 .9em}h2{margin-left:0}.next-entry a{font-size:.5rem}.next-entry a span{font-size:2rem}.item-meta span{display:inline-block;margin:0 0}.mini-show{display:none}.baidu-share{display:none}}</style>


	</head>

<body id="{pageID}" class="blog">
eot;

$elements['displayheader']=<<<eot

<div class="main">
			<div class="mask mt"></div><div class="mask mb"></div><div class="mask mv ml"></div><div class="mask mv mr"></div><div class="mask mv ml2"></div><div class="mask mv mr2"></div>
			<header class="section header">
				<div class="inner-section inner-header">
					<div class="logo">
						<a href="#">
						<amp-img src="http://anyway-web.b0.upaiyun.com/images/logo.gif" alt="Anyway.FM 设计杂谈 • UI 设计师 JJ Ying 和 Leon Gao 主播的设计杂谈播客" />
					</div>
					<div class="tagline" id="t"><i>Anyway.FM</i> 是一档<mark>播客</mark>节目，<br />
						我们<em>，</em>想让你的<mark>听觉</mark>更懂<mark>视觉</mark>。
					</div>		<a name="title"></a>
					<div class="nav">
						<a class="mobile-hide" href="https://itunes.apple.com/cn/podcast/anyway.fm-she-ji-za-tan/id1053786200"><amp-img src="http://anyway-web.b0.upaiyun.com/images/itunes.svg" class="nav-icon"/> Apple 播客</a>
						<span class="mobile-hide"></span>
						<a href="http://music.163.com/#/djradio?id=4969001"><amp-img src="http://anyway-web.b0.upaiyun.com/images/netease.svg" class="nav-icon"/> 网易云音乐</a>
						<span></span>
						<a href="http://anyway.fm/subscribe.php#title"><amp-img src="http://anyway-web.b0.upaiyun.com/images/rss.svg" class="nav-icon"/> 更多订阅方式</a>
						<span></span>
						<a href="http://anyway.fm/post/"><amp-img src="http://anyway-web.b0.upaiyun.com/images/mail.svg" class="nav-icon"/> 安妮薇邮报</a>
					</div>
				</div>
			</header>  <!--End of 'Header'-->
eot;

$elements['mainpage']=<<<eot
		<main class="section content">
			<div class="inner-section inner-content">
				{mainpart}
			</div>
		</main>

		<section class="section page-bar">
			<div class="inner-section">
				{pagebar}
			</div>
		</section>
eot;

$elements['otherpage']=<<<eot
		<main class="section content">
			<div class="inner-section inner-content">
				<div class="formbox">
						{mainpart}
					</div>
			</div>
		</main>
eot;

$url_this = "http://".$_SERVER['HTTP_HOST']. $_SERVER['REQUEST_URI'];
$thisYear = (int)date('Y');

$elements['displayfooter']=<<<eot

</div><!--End of 'Main'-->

<section class="about">
	<div class="section body-text inner-about">

		<div class="about-single about-jj">
			<div class="about-name">JJ <span>Ying</span></div>
			<div class="about-desc">
				勉强算 85 后 <i>/</i> 理科出身，从做皮肤开始误入设计圈 <i>/</i> 专职 UI 设计，偶尔码码 CSS <i>/</i> 在惠普待了 4 年设计打印机的操作界面，来到百度做过输入法和浏览器，目前在 UXC 上海部门做搜索产品，虽然待的地方都是大公司，但却是个野路子 + 实战派设计师 <i>/</i> 写了快十年设计博客：<a href="http://TuYueZhi.com">图月志</a> <i>/</i> 最近几年<a href="http://www.zhihu.com/people/jjying">知乎</a>上的比较多 <i>/</i> 十多年的红魔伪球迷 <i>/</i> 声音没 Leon 有磁性，大家多担待
			</div>
			<div class="about-links">
				<a href="http://JJYing.com" class="about-link"><i class="icon-home"></i></a><a href="http://dribbble.com/JJYing" class="about-link"><i class="icon-dribbble"></i></a><a href="http://weibo.com/yingjunjiu/" class="about-link"><i class="icon-weibo"></i></a><a href="https://github.com/jjying" class="about-link"><i class="icon-github"></i></a><a href="http://instagram.com/jjying" class="about-link"><i class="icon-instagram"></i></a><a href="https://twitter.com/JJYing" class="about-link"><i class="icon-twitter"></i></a><a href="http://www.flickr.com/photos/jjying/" class="about-link"><i class="icon-flickr"></i></a><a href="http://www.linkedin.com/in/jjying" class="about-link"><i class="icon-linkedin-squared"></i></a>
			</div>
		</div>

		<div class="about-single about-leon">
			<div class="about-name">Leon <span>Gao</span></div>
			<div class="about-desc">
				男 <i>/</i> 上海宁 <i>/</i> 算算时间大概能挤进中国大陆第二批图形界面设计民工潮 <i>/</i> 10 年工作经验，换了肯定不止 10 家公司，至今没啥能拿的出手的产品来显摆，跟人吹牛逼的时候只好晒晒微软、惠普、frogdesign、小米以及我锤的工作经历 <i>/</i> 网络蝗虫，只要是新的互联网产品基本都能搜到这颗红色的头像 <i>/</i> 为人刻薄，怕麻烦不喜欢交朋友（漂亮妹子除外）<i>/</i> 哦，基本就这些
			</div>
			<div class="about-links">
				<a href="http://leongao.com" class="about-link"><i class="icon-home"></i></a><a href="http://dribbble.com/leongao" class="about-link"><i class="icon-dribbble"></i></a><a href="http://weibo.com/leongao/" class="about-link"><i class="icon-weibo"></i></a><a href="http://instagram.com/leongao" class="about-link"><i class="icon-instagram"></i></a><a href="http://twitter.com/leongao" class="about-link"><i class="icon-twitter"></i></a><a href="https://www.flickr.com/photos/leongao/" class="about-link"><i class="icon-flickr"></i></a>
			</div>
		</div>


	</div>
</section> <!--End of 'About'-->

<footer class="footer">
	<div class="inner-section inner-footer">
		© 2015 ~ $thisYear <a href="http://anyway.fm">Anyway.FM</a> 保留所有权利<em>×</em>Proudly powered by <a href="http://bo-blog.com/" title="Bo-Blog 2, a free-of-charge weblog engine based on PHP script and MySQL storage.">Bo-Blog</a>
	</div>
</footer> <!--End of 'Footer'-->


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
<article class="item {entrycatealias}">
	<div class="inner-item">
		<h1 class="item-text">{entrysourcewithlink}{entrytitle}</h1>
		<div class="item-meta">
			{hostsname}<span class="item-text item-meta-date">{entrydater}</span>{ifadmin}
		</div>
		<div class="item-text body-text item-desc text">
			{entrycontent}
		</div>
	</div>
</article>
eot;

$elements['excerptontop']=<<<eot
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
<article class="item {entrycatealias} single-page">
	<div class="inner-item">
		<h1 class="item-text">{entrysourcewithlink}{entrytitle}</h1>
		<div class="item-meta">
			{hostsname}<span class="item-text item-meta-date">{entrydater}</span>{ifadmin}
		</div>
		<div class="item-text body-text item-desc text">
			{entrycontent}
			<div class="item-btns">
				{playaudioAMP}
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
</article>

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
	{playaudioAMP}
	{readmoreAMP}
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
    <td class="formbox-content"><amp-img src="inc/securitycode.php?rand={rand}" alt="" title="{$lnc[250]}"/> <input name="securitycode" type="text" id="securitycode" size="16" class="text" /> {$lnc[251]}
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

<article class="item">
	<div class="inner-item">
		<h1 class="item-text">{title}</h1>
		<div class="item-text body-text item-desc text">
			{contentbody}
		</div>
	</div>
</article>
eot;

$elements['subscribe-page']=<<<eot
<link rel="stylesheet" rev="stylesheet" href="css/subscribe.css" type="text/css" media="all" />
<article class="item">
	<div class="inner-item">
		<h1 class="item-text">{title}</h1>
		<div class="item-text body-text item-desc text">
			我台自 2015 年底诞生以来已经陆续登陆多个平台以尽量满足大家的需求和日常使用习惯，请对号入座寻找适合自己的平台：
			<br/><br/>

			<div class="subscribe-section">
				<strong>普通青年建议使用国内播客平台</strong>
				<p>好处是速度快，平常适合国情的内容更多，但缺点是普遍都不支持在简介当中插链接，所以请配合我们的官网（本站）里每一期的参考链接服用：</p>
				<div class="subscribe-links">
					<a href="http://music.163.com/#/djradio?id=4969001" class="subscribe-netease">网易云音乐</a>
					<a href="http://www.lizhi.fm/1824901/" class="subscribe-lizhi">荔枝 FM</a>
					<a href="https://fm.qq.com/album/rd001ILuwm2d5Xoq_39126_40071" class="subscribe-qie">企鹅 FM</a>
					<a href="http://www.ximalaya.com/40480243/album/3524184" class="subscribe-ximalaya">喜马拉雅 FM</a>
				</div>
			</div>

			<div class="subscribe-section">
				<strong>文艺青年推荐使用泛用型播客客户端</strong>
				<p>什么是「泛用型」？简单来说就是音频文件并不放在他们服务器上的，他们的软件只是聚合一下各个内容提供商产出的播客，优点是内容比较专注 Podcast，并且节目简介里可以直接点击参考链接等内容，通过以下链接或者在软件里搜索「Anyway.FM」可以找到我们：</p>
				<div class="subscribe-links">
					<a href="https://itunes.apple.com/cn/podcast/anyway.fm-she-ji-za-tan/id1053786200">iOS 播客</a>
					<a href="https://itunes.apple.com/cn/podcast/anyway.fm-she-ji-za-tan/id1053786200">macOS iTunes</a>
					<a href="http://supertop.co/castro/">Castro</a>
					<a href="http://pca.st/QUtT">Pocket Casts</a>
					<a href="https://overcast.fm/itunes1053786200/anyway-fm">Overcast</a>
					<a href="http://anyway.fm/rss.xml">也可使用 RSS 订阅</a>
				</div>
			</div>

			<div class="subscribe-section">
				<strong><s>其他青年</s>其他信息发布平台在这里</strong>
				<p>微信公众号尚未开启，微信听众群目前仅在测试中，成员仅限之前两次线下活动中购票的朋友，后续不定期考虑开放。</p>
				<div class="subscribe-links">
					<a href="https://zhuanlan.zhihu.com/anyway-fm">知乎专栏</a>
					<a href="http://weibo.com/anywayfm">新浪微博</a>
					<a href="https://twitter.com/Anyway__FM" >Twitter</a>
					<a href="http://anyway.fm/post/">安妮薇邮报</a>
					<a href="mailto:hello@anyway.fm">电子邮件</a>
				</div>

			</div>
		</div>
	</div>
</article>
eot;

$elements['taglist']=<<<eot
eot;

$elements['register']=<<<eot
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
eot;

$elements['eachlink']=<<<eot
eot;

$elements['linkdiv']=<<<eot
eot;

$elements['viewpage']=<<<eot
eot;

$elements['tips']=<<<eot
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-cmn-Hans">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta http-equiv="Content-Language" content="UTF-8" />
	{csslocation}
	<link rel="stylesheet" rev="stylesheet" href="admin/theme/iconmoon/common.css" type="text/css" media="all" />
	<title>{blogname} - {blogdesc}</title>
</head>
<body id="messagebox">
	<center>
		<div class="messagebox textbox">
			<h3>{title}</h3>

			<div class="messagebox-content">
			{tips}
			</div>

			<div class="messagebox-bottom">
				<a href="javascript: window.history.back();">{$lnc[263]}</a> | <a href="index.php">{$lnc[88]}</a> {admin_plus}
			</div>

		</div>
	</center>
</body>
</html>
eot;
?>

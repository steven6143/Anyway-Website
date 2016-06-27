<?php
$elements['rss']=<<<eot
<item>
<link>{entryurl}</link>
<title><![CDATA[{entrytitle}]]></title> 
<author>{entryauthor} &lt;{entryemail}&gt;</author>
<category><![CDATA[{entrycate}]]></category>
<pubDate>{entrytime}</pubDate> 
<guid>{entryurl}</guid> 
<description>
<![CDATA[ 
	{entrycontent}
]]>
</description>
</item>
eot;

$elements['rssbody']=<<<eot
<?xml version="1.0" encoding="UTF-8" ?>
<rss xmlns:itunes="http://www.itunes.com/dtds/podcast-1.0.dtd" version="2.0">
	<channel>
	<title>Anyway.FM × 设计杂谈</title> 
	<link>http://anyway.fm</link> 
	<description>Anyway.FM 是由 UI 设计师 JJ Ying 和 Leon Gao 主播的设计类 Podcast</description> 
	<language>{bloglanguage}</language> 
	<copyright><![CDATA[{blogname}]]></copyright>
	{rssbody}
	</channel>
</rss>
eot;
?>
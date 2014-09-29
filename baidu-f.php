<!--这是百度搜索结果参数分析工具 PHP 源码，若不知如何在浏览器打开，可加入百度参数QQ交流群(255363059)，或请直接访问在线版 weixingon.com/baidusp-f.php。如果你有更多的宝贵意见，也欢迎发送邮件至邮箱 maasdruck@gmail.com-->
<?php
echo '<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN" xml:lang="zh-CN">
<head>
<meta content="text/html;charset=UTF-8" http-equiv="Content-Type" />
<meta content="initial-scale=1,maximum-scale=1,user-scalable=0,width=device-width" name="viewport" />
<meta name="apple-mobile-web-app-capable" content="yes" />
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<meta name="format-detection" content="telephone=no" />';

// 自动生成标题 v2.0
// 取得搜索词
$s = @$_GET['s'];

// 过滤字符串
$patternsuggestion = array();
$patternsuggestion[0] = '/(\s+)/';
$patternsuggestion[1] = '/(http:\/\/)/';
$replacementsuggestion = array();
$replacementsuggestion[0] = '%20';
$replacementsuggestion[1] = '';
$searchfilter = preg_replace($patternsuggestion[1], $replacementsuggestion[1], $s);
$queryfilter = htmlspecialchars(preg_replace($patternsuggestion, $replacementsuggestion, $s));

$title2 = file_get_contents('http://www.weixingon.com/re/?s='.$queryfilter);
// 下拉框提示词第 1 位作为主标题
echo "\r\n<title>";
if (strlen($title2) > 0) {
	echo $title2.'_';
	}

// 引号转换为 HTML 实体的查询词作为副标题
if (!is_null($s)) {
	echo htmlspecialchars($searchfilter, ENT_QUOTES).' - ';
	}

// 标题后缀，品牌名
echo "百度搜索结果参数</title>\r\n";

// 下拉框提示词第 1 位，查询词作为 meta keywords
echo '<meta content="';
if (strlen($title2) > 0) {
	echo $title2.',';
	}
echo htmlspecialchars($searchfilter, ENT_QUOTES);
?>
,百度搜索结果参数,F,F1,F2,F3" name="keywords" />
<meta content="还你一个没有百度推广、产品的搜索结果页。" name="description" />
<link rel="author" href="https://plus.google.com/109624994087248289296/posts" />

<script src="http://www.weixingon.com/javascript/jquery.js"></script>

<!--css-->

<style type="text/css">
body,div,h1	{
margin:0;
}
body {
color:#222222;
background-color:#F8F7F5;
font-family:"STHeiti STXihei","Lucida Grande","Microsoft JhengHei","Microsoft Yahei",Helvetica,Tohoma,Arial,Verdana,sans-serif;
height:100%;
}
table {
width:61.25em;
border-collapse:collapse;
border:0.0625em solid #390BDE;
margin-bottom:1.75em;
}
thead {
color:#0080FF;
background-color:#F2F2F2;
}
th,td {
border:0.0625em solid #390BDE;
padding:0.1875em;
}
a {
color:#607FA6;
font-size:1em;
text-decoration:none;
}
.noa {
color:#FFD700;
font-size:1em;
font-weight:bold;
text-decoration:none;
}
input {
font:normal 100% "STHeiti STXihei","Lucida Grande","Microsoft JhengHei","Microsoft Yahei",Helvetica,Tohoma,Arial,Verdana,sans-serif;
}
.text {
padding:0.125em 0.3125em 0.25em 0.3125em;
height:1.375em;
width:27.75em;
outline:none;
background:url(http://www.baidu.com/img/i-1.0.0.png) no-repeat -19em 0;
}
.other {
padding:0.125em 0.3125em 0.25em 0.3125em;
height:1.375em;
width:5em;
outline:none;
background:url(http://www.baidu.com/img/i-1.0.0.png) no-repeat -19em 0;
}
.submit {
height:2em;
width:5.9375em;
border:none;
background:url(http://www.baidu.com/img/i-1.0.0.png) no-repeat;
}
.center {
text-align:center;
}
.bold {
font-size:1.5em;
font-weight:bold;
word-break:normal;
word-wrap:break-word
}
.detail {
width:61.25em;
margin:0 auto;
padding:1.25em;
padding-top:0;
border-left:0.0625em solid #CCCCCC;
border-bottom:0.0625em solid #CCCCCC;
border-right:0.0625em solid #CCCCCC;
background:url(
<?php
$wallpaper = array (
	"aurora",
	"gobi",
	"mountains",
	"sea",
	"snow-mountain",
	"starry-sky",
	);
shuffle ($wallpaper);
echo "http://www.weixingon.com/pic/".$wallpaper[0];
?>
.jpg) repeat-y;
}
.header {
padding-top:1.25em;
padding-bottom:.625em;
border-bottom:.0625em dotted #CCCCCC
}
.red {
color:#F5DEB3;
}
.white {
color:#FFFAF0;
}

.back-white {
background-color:#FFFFFF;
filter:alpha(opacity=85);
-moz-opacity:0.85;
-khtml-opacity:0.85;
opacity:0.85;
}
.back-egg {
background-color:#FFFFBB;
filter:alpha(opacity=85);
-moz-opacity:0.85;
-khtml-opacity:0.85;
opacity:0.85;
}
.back-pink {
background-color:#FFB7DD;
filter:alpha(opacity=85);
-moz-opacity:0.85;
-khtml-opacity:0.85;
opacity:0.85;
}
.back-yellow {
background-color:#FFDDAA;
filter:alpha(opacity=85);
-moz-opacity:0.85;
-khtml-opacity:0.85;
opacity:0.85;
}
.back-orange {
background-color:#FFDDAA;
filter:alpha(opacity=85);
-moz-opacity:0.85;
-khtml-opacity:0.85;
opacity:0.85;
}
.back-gold {
background-color:#FFEE99;
filter:alpha(opacity=85);
-moz-opacity:0.85;
-khtml-opacity:0.85;
opacity:0.85;
}
.back-green {
background-color:#EEFFBB;
filter:alpha(opacity=85);
-moz-opacity:0.85;
-khtml-opacity:0.85;
opacity:0.85;
}
.back-blue {
background-color:#CCDDFF;
filter:alpha(opacity=85);
-moz-opacity:0.85;
-khtml-opacity:0.85;
opacity:0.85;
}
.back-sky {
background-color:#CCEEFF;
filter:alpha(opacity=85);
-moz-opacity:0.85;
-khtml-opacity:0.85;
opacity:0.85;
}
.back-baidu {
background-color:#77BBEF;
filter:alpha(opacity=85);
-moz-opacity:0.85;
-khtml-opacity:0.85;
opacity:0.85;
}
.back-wheat {
background-color:#F5DEB3;
filter:alpha(opacity=85);
-moz-opacity:0.85;
-khtml-opacity:0.85;
opacity:0.85;
}
.back-azure {
background-color:#F0FFFF;
filter:alpha(opacity=85);
-moz-opacity:0.85;
-khtml-opacity:0.85;
opacity:0.85;
}

.unit-honeydew {
background-color:#F0FFF0;
filter:alpha(opacity=85);
-moz-opacity:0.85;
-khtml-opacity:0.85;
opacity:0.85;
}
.unit-gold {
background-color:#FFD700;
filter:alpha(opacity=85);
-moz-opacity:0.85;
-khtml-opacity:0.85;
opacity:0.85;
}
.unit-orange {
background-color:#FFA500;
filter:alpha(opacity=85);
-moz-opacity:0.85;
-khtml-opacity:0.85;
opacity:0.85;
}
.unit-violet {
background-color:#EE82EE;
filter:alpha(opacity=85);
-moz-opacity:0.85;
-khtml-opacity:0.85;
opacity:0.85;
}
.unit-tomato {
background-color:#FF6347;
filter:alpha(opacity=85);
-moz-opacity:0.85;
-khtml-opacity:0.85;
opacity:0.85;
}
.unit-lavender {
background-color:#E6E6FA;
filter:alpha(opacity=85);
-moz-opacity:0.85;
-khtml-opacity:0.85;
opacity:0.85;
}
.unit-silver {
background-color:#C0C0C0;
filter:alpha(opacity=85);
-moz-opacity:0.85;
-khtml-opacity:0.85;
opacity:0.85;
}
.unit-darkseagreen {
background-color:#8FBC8F;
filter:alpha(opacity=85);
-moz-opacity:0.85;
-khtml-opacity:0.85;
opacity:0.85;
}
.unit-mediumpurple {
background-color:#9370DB;
filter:alpha(opacity=85);
-moz-opacity:0.85;
-khtml-opacity:0.85;
opacity:0.85;
}
.unit-burlywood {
background-color:#DEB887;
filter:alpha(opacity=85);
-moz-opacity:0.85;
-khtml-opacity:0.85;
opacity:0.85;
}
.unit-aquamarine {
background-color:#7FFFD4;
filter:alpha(opacity=85);
-moz-opacity:0.85;
-khtml-opacity:0.85;
opacity:0.85;
}
.unit-springgreen {
background-color:#00FF7F;
filter:alpha(opacity=85);
-moz-opacity:0.85;
-khtml-opacity:0.85;
opacity:0.85;
}
.unit-darkturquoise {
background-color:#00CED1;
filter:alpha(opacity=85);
-moz-opacity:0.85;
-khtml-opacity:0.85;
opacity:0.85;
}
.unit-mediumseagreen {
background-color:#3CB371;
filter:alpha(opacity=85);
-moz-opacity:0.85;
-khtml-opacity:0.85;
opacity:0.85;
}
.unit-deepskyblue {
background-color:#00BFFF;
filter:alpha(opacity=85);
-moz-opacity:0.85;
-khtml-opacity:0.85;
opacity:0.85;
}
.unit-lightskyblue {
background-color:#87CEFA;
filter:alpha(opacity=85);
-moz-opacity:0.85;
-khtml-opacity:0.85;
opacity:0.85;
}

a#go-top {
filter:alpha(opacity=60);
-moz-opacity:0.6;
-khtml-opacity:0.6;
opacity:0.6;
background-color:#E6E6E6;
width:6.25em;
height:3.125em;
line-height:3.125em;
text-align:center;
text-decoration:none;
color:#999999;
}
a#go-top:hover {
background-color:#CCCCCC;
color:#333333;
}

.dustbin {
margin-top:3em;
width:6.985em;
height:19.25em;
background-color:#E6E6E6;
font-size:1.3em;
text-shadow:-0.0625em -0.0625em #BBBBBB;
float:left;
}
.draglist:hover {
border-color:#FFFFBB;
background-color:#FFDDAA;
}
</style>

</head>
<body>

<!--拖放-->
<div class="dustbin center"><br />按住表格<br />拖曳到这</div>

<div class="detail">

<!--搜索框-->
<div class="header center">

<!--请手动修改 action 的网址-->
	<form method="get" action="http://127.0.0.1/baidu-f.php">
		<input class="text" type="text" value="<?php echo htmlspecialchars(@$_GET['s'] ,ENT_QUOTES);?>" name="s" title="解析" autocomplete="off" maxlength="76" baiduSug="1" autofocus="autofocus" placeholder="请输入查询词" />
		<input class="other" type="number" name="pn" title="从第几位开始取结果" min="0" max="760" value="<?php echo @$_GET['pn'];?>" placeholder="取第几位" />
		<input class="other" type="number" name="rn" title="搜索结果数量" min="0" max="100" value="<?php echo @$_GET['rn'];?>" placeholder="返回数量" />
		<select title="搜索结果时间限制" name="lm">
			<option value="">全部时间</option>
			<option value="1" <?PHP if(@$_GET['lm'] == "1") echo "selected";?>>最近1天</option>
			<option value="7" <?PHP if(@$_GET['lm'] == "7") echo "selected";?>>最近1週</option>
			<option value="30" <?PHP if(@$_GET['lm'] == "30") echo "selected";?>>最近1月</option>
			<option value="360" <?PHP if(@$_GET['lm'] == "360") echo "selected";?>>最近1年</option>
		</select>
		<input class="submit" type="submit" value="百度一下" />
	</form>
</div>
<?php
$startTime = microtime(true);
$s = @$_GET['s'];
$pn = @$_GET['pn'];
$rn = @$_GET['rn'];
$lm = @$_GET['lm'];
$connectpn = "&pn=";
$connectrn = "&rn=";
$connectlm = "&lm=";
$patternsuggestion = array();
$patternsuggestion[0] = '/(\s+)/';
$patternsuggestion[1] = '/(http:\/\/)/';
$replacementsuggestion = array();
$replacementsuggestion[0] = '%20';
$replacementsuggestion[1] = '';
$queryfilter = htmlspecialchars(preg_replace($patternsuggestion, $replacementsuggestion, $s));
$srcid1 = "<a href=\"http://ask.seowhy.com/question/8677\" rel=\"external nofollow\" target=\"_blank\" title=\"搜索结果页源代码 F - F3、Srcid 的问题\">搜索结果页资源</a>";
$srcid2 = "<a href=\"http://ask.seowhy.com/question/8254\" rel=\"external nofollow\" target=\"_blank\" title=\"[百家观点]你心中的百度知心搜索，集思广益\">搜索结果页资源&nbsp;resource_id</a>";
$srcid3 = "<a href=\"http://ask.seowhy.com/question/9186\" rel=\"external nofollow\" target=\"_blank\" title=\"为什么有的搜索结果会没有百度参数，这样的现象原因是什么\">搜索结果页资源&nbsp;resource_id</a>";
$fk1 = "<a href=\"http://ask.seowhy.com/article/64\" rel=\"external nofollow\" target=\"_blank\" title=\"百度搜索结果参数fk - 抓取键名\">抓取键名&nbsp;fetch key</a>";
$fk2 = "<a href=\"http://ask.seowhy.com/question/8111\" rel=\"external nofollow\" target=\"_blank\" title=\"为什么百度搜索结果首页1个网站出现14个自然点击链接？\">键值&nbsp;value</a>";
$nofk = "<a href=\"http://ask.seowhy.com/question/9486\" rel=\"external nofollow\" target=\"_blank\" title=\"净水器百度排名175，能做上去吗？\">无&nbsp;F,&nbsp;fk&nbsp;(百度汇、实时、面包屑导航条)</a>";
$openapi = "百度开放平台&nbsp;api";
$F[1] = "<span title=\"搜索结果标题|摘要与查询词的语义关联度\">语义关联性</span>";
$F[2] = "同音词";
$F[3] = "[猜]&nbsp;正规性";
$F[4] = "[猜]&nbsp;更新";
$F[5] = "[猜]&nbsp;实时度";
$F[6] = "<a href=\"http://ask.seowhy.com/article/121\" rel=\"external nofollow\" target=\"_blank\" title=\"百度搜索结果参数F第6位基于IP位置\">基于&nbsp;IP&nbsp;位置</a>";
$F[7] = "<a href=\"http://ask.seowhy.com/question/9058\" rel=\"external nofollow\" target=\"_blank\" title=\"搜索文章url能够搜索出来，但是site网站域名的时候却没有，什么原因造成的呢？\">网址</a>";
$F[8] = "标题或网址或摘要";
$F1[1] = "第&nbsp;1&nbsp;位";
$F1[2] = "第&nbsp;2&nbsp;位";
$F1[3] = "<a href=\"http://ask.seowhy.com/question/8958\" rel=\"external nofollow\" target=\"_blank\" title=\"快照时间显示，以小时为单位\">时间限制</a>";
$F1[4] = "[猜]&nbsp;实时动态";
$F1[5] = "[猜]&nbsp;匹配率";
$F1[6] = "热门度";
$F1[7] = "[猜]&nbsp;网址权重";
$F1[8] = "第&nbsp;8&nbsp;位";
$F2[1] = "[猜]&nbsp;相关";
$F2[2] = "第&nbsp;2&nbsp;位";
$F2[3] = "第&nbsp;3&nbsp;位";
$F2[4] = "第&nbsp;4&nbsp;位";
$F2[5] = "第&nbsp;5&nbsp;位";
$F2[6] = "<span title=\"仅是这一刻的搜索结果目标页相对查询词的权重\">[猜]&nbsp;内链数量</span>";
$F2[7] = "<a href=\"http://seo.qiankoo.com/813\" rel=\"external nofollow\" target=\"_blank\" title=\"百度搜索结果参数F2与搜索结果标题的关系\">前标题</a>";
$F2[8] = "<a href=\"http://ask.seowhy.com/question/8411\" rel=\"external nofollow\" target=\"_blank\" title=\"百度搜索结果参数F2\">后标题</a>";
$F3[1] = "第&nbsp;1&nbsp;位";
$F3[2] = "第&nbsp;2&nbsp;位";
$F3[3] = "第&nbsp;3&nbsp;位";
$F3[4] = "<a href=\"http://ask.seowhy.com/article/30\" rel=\"external nofollow\" target=\"_blank\" title=\"百度搜索结果参数F3 - 域名选择与原创内容时效性\">[猜]&nbsp;时效性</a>";
$F3[5] = "<a href=\"http://ask.seowhy.com/article/46\" rel=\"external nofollow\" target=\"_blank\" title=\"百度搜索结果参数F3 - 超越域名选择的含义\">[猜]&nbsp;网址形式</a>";
$F3[6] = "第&nbsp;6&nbsp;位";
$F3[7] = "第&nbsp;7&nbsp;位";
$F3[8] = "[猜]&nbsp;相似度";
$y = "<a href=\"http://ask.seowhy.com/article/53\" rel=\"external nofollow\" target=\"_blank\" title=\"百度搜索结果页参数y - 验证码与工具\">y&nbsp;验证码&nbsp;nonce</a>";
$urltime = "<a href=\"http://ask.seowhy.com/question/9082\" rel=\"external nofollow\" target=\"_blank\" title=\"明明是最近发表的文章，百度收录为何显示2013年？\">百度快照</a>";

if (!is_null($s))
{
// 个人网站使用的是浙江杭州阿里云服务器，所以直接使用接近的杭州百度 IP，提升抓取速度。
// 增加百度网页搜索 IP 数量，检测能否减少被屏蔽次数。
// 随机更换 IP
$ip = array (
	'58.217.200.13',
	'58.217.200.15',
	'58.217.200.37',
	'58.217.200.39',
	'61.135.185.31',
	'61.135.185.32',
	'61.135.169.103',
	'61.135.169.105',
	'61.135.169.107',
	'61.135.169.113',
	'61.135.169.114',
	'61.135.169.115',
	'61.135.169.121',
	'61.135.169.125',
	'111.13.100.91',
	'111.13.100.92',
	'115.239.210.25',
	'115.239.210.26',
	'115.239.210.27',
	'115.239.210.28',
	'115.239.211.109',
	'115.239.211.110',
	'115.239.211.112',
	'115.239.211.113',
	'115.239.211.114',
	'119.75.213.50',
	'119.75.213.51',
	'119.75.213.61',
	'119.75.215.3',
	'119.75.216.20',
	'119.75.217.11',
	'119.75.217.26',
	'119.75.217.56',
	'119.75.217.63',
	'119.75.217.109',
	'119.75.218.11',
	'119.75.218.45',
	'119.75.218.70',
	'119.75.218.77',
	'119.75.218.143',
	'123.125.114.107',
	'123.125.114.220',
	'123.125.114.238',
	'123.125.115.140',
	'123.125.115.165',
	'123.125.65.78',
	'123.125.65.82',
	'123.125.65.88',
	'123.125.65.90',
	'180.149.131.98',
	'180.149.132.151',
	'180.149.132.166',
	'180.149.132.168',
	'180.76.2.183',
	'180.76.3.151',
	'180.97.33.107',
	'180.97.33.108',
	'202.108.22.5',
	'202.108.22.142',
	'220.181.111.111',
	'220.181.111.149',
	'220.181.111.188',
	'220.181.111.22',
	'220.181.111.37',
	'220.181.111.83',
	'220.181.112.12',
	'220.181.112.18',
	'220.181.112.147',
	'220.181.112.195',
	'220.181.112.21',
	'220.181.112.244',
	'220.181.112.76',
	'220.181.112.89',
	'220.181.37.55',
	'220.181.6.6',
	'220.181.6.18',
	'220.181.6.19',
	'220.181.6.175',
	);
shuffle ($ip);
$baidu = "http://".$ip[0]."/s?wd=";
$baiduserp = file_get_contents($baidu.$queryfilter.$connectpn.$pn.$connectrn.$rn.$connectlm.$lm);
}

// 打开网页显示"开发的其他产品"

if (is_null($s))
echo "<h1 class=\"center bold white\">2013&nbsp;-&nbsp;2014&nbsp;开发的其他产品</h1>
	<p class=\"center\"><a class=\"noa\" href=\"http://www.weixingon.com/baidusp-srcid.php\" target=\"_blank\">百度搜索产品资源</a></p>
	<p class=\"center\"><a class=\"noa\" href=\"http://www.weixingon.com/baidusp-hot.php\" target=\"_blank\">百度相关热门词</a></p>
	<p class=\"center\"><a class=\"noa\" href=\"http://www.weixingon.com/baidusp-lm.php?lm=7&amp;rn=100\" target=\"_blank\">百度收录更新时间限制工具</a></p>
	<p class=\"center\"><a class=\"noa\" href=\"http://www.weixingon.com/wechat/\" target=\"_blank\">微信营销书籍(PC&nbsp;+&nbsp;移动端)</a></p>
	<p class=\"center\"><a class=\"noa\" href=\"http://www.weixingon.com/mp/mate.php\" target=\"_blank\">择偶要求问卷调查(移动端)</a></p>
	<p class=\"center\"><a class=\"noa\" href=\"http://www.weixingon.com/tool/\" target=\"_blank\">百度搜索引擎搜索结果网址参数(PC)</a></p>
";

// 确定时间

date_default_timezone_set('PRC');
$time = date('Y-m-d H:i:s');
clearstatcache();

// 搜索结果数量

if (preg_match("/(?<=百度为您找到相关结果)([\x80-\xff]{0,3})([0-9,]{1,11})(?=个<\/div>)/", @$baiduserp, $matchnumbers))

// 百度服务器返回的 Unix 时间戳

if (preg_match("/(?<='T':')(\d{10})(?=',)/", $baiduserp, $matchservertime))

// 百度搜索结果展现耗时

if (preg_match("/([\d\.]+)(?=;<\/script><\/html>)/", $baiduserp, $matchsrvt))

// 搜索结果链接，数量，查询时间，音乐

if (!is_null($s))
{
// 随机播放音乐
$music = array (
	"%b2%cc%b4%be%bc%d1-%b0%ae%c8%e7%b3%b1%cb%ae",
	"%D2%B9%D2%B9%D2%B9%D2%B9",
	"%ce%d2%d2%d4%ce%aa",
	"%cf%b2%d4%c3",
	"way-back-into-love",
	"oppositeoflove",
	"lift-thine-eyes",
	"disturbance-in-agustria",
	"become-the-wind",
	"sanguo",
	);
shuffle ($music);
// 随机下载壁纸
$wallpapers = array (
	"dlsw.br.baidu.com/original/201406/qianxun_wallpage_620.zip",
	"www.smashingmagazine.com/tag/wallpapers/",
	);
shuffle ($wallpapers);
echo "
	<p class=\"center white\">
		<a class=\"noa\" href=\"http://www.baidu.com/s?wd=".$queryfilter.$connectpn.$pn.$connectrn.$rn.$connectlm.$lm."\" target=\"_blank\" rel=\"external nofollow\">
			点击查看“<span class=\"red\">$s</span>”的百度搜索结果页
		</a>
		$matchnumbers[2]&nbsp;个<a class=\"noa\" href=\"http://ask.seowhy.com/question/8376\" rel=\"external nofollow\" target=\"_blank\" title=\"百度搜索结果onmousedown事件对排名有什么影响？\">结果</a>
		<a class=\"noa\" href=\"http://open.baidu.com/special/time/\" target=\"_blank\" rel=\"external nofollow\" title=\"现在几点？\">"
			.date('Y-m-d H:i:s', $matchservertime[1])
		."</a>
		<a class=\"noa\" href=\"http://".$wallpapers[0]."\" rel=\"external nofollow\" target=\"_blank\">
			下载壁纸
		</a>
		<button type=\"button\" id=\"music_button\" onclick=\"toggleSound()\">
			随机播放音乐
		</button>
		<audio src=\"http://www.weixingon.com/mp/".$music[0].".mp3\" preload=\"none\" id=\"music\">
			<span class=\"red\" title=\"请升级或更换浏览器\">您的浏览器不支持&nbsp;HTML&nbsp;5</span>
		</audio></p>";
}

// 冇收录

if (preg_match("/(?<=<p>抱歉，没有找到与<span style=\"font-family:宋体\">“<\/span><em>)(.+)(?=<\/em><span style\=\"font\-family:宋体\">”<\/span>相关的网页。<\/p>)/", @$baiduserp, $matchno))
echo "
<p>
	<a class=\"noa\" href=\"http://".$matchno[1]."\" target=\"_blank\" rel=\"external nofollow\" title=\"直接访问&nbsp;".@$matchno[2]."\">
		抱歉，没有找到与“<span class=\"red\">".$matchno[1]."</span>”相关的网页。
	</a>
</p>
<p class=\"white\">
	如网页存在，请<a class=\"noa\" href=\"http://zhanzhang.baidu.com/sitesubmit/index?sitename=http%3A%2F%2F".$matchno[1]."\" target=\"_blank\" rel=\"external nofollow\" title=\"您可以提交想被百度收录的url\">提交网址</a>给我们
</p>";

// 冇收录，但有其他搜索结果

if (preg_match("/(?<=<font class=\"c-gray\">没有找到该URL。您可以直接访问&nbsp;<\/font><a href=\")(.+)(?=\" target=\"_blank\" onmousedown)/", @$baiduserp, $matchno2))
echo "
<p class=\"white\">
	没有找到该URL。您可以直接访问&nbsp;<span class=\"red\"><a class=\"noa\" href=\"".$matchno2[1]."\" target=\"_blank\" rel=\"external nofollow\" title=\"直接访问 ".$matchno2[1]."\">".$matchno2[1]."</a></span>，还可<a class=\"noa\" href=\"http://zhanzhang.baidu.com/sitesubmit/index?sitename=http%3A%2F%2F".$matchno2[1]."\" target=\"_blank\" rel=\"external nofollow\" title=\"您可以提交想被百度收录的url\">提交网址</a>给我们。
</p>";

// 字数限制

if (preg_match("/(?<=<font class\=f14><b>)(.+)(?=&nbsp;及其后面的字词均被忽略，因为百度的查询限制在38个汉字以内。<\/b><\/font>)/", @$baiduserp, $matchlimit))
echo "<p class=\"white\">".$matchlimit[1]."&nbsp;及其后面的字词均被忽略，因为百度的查询限制在38个汉字以内。</p>";

// 屏蔽词

if (preg_match("/(?<=<div class\=\"boldline se\_common\_hint c\-gap\-bottom c\-container\" data\-id\=\"40400\" data\-tpl\=\"hint\_boldline\"><strong>)(.+)(?=<\/strong><\/div>)/", @$baiduserp, $matchcensor))
echo "<p class=\"white\">".$matchcensor[1]."</p>";

// 推销电话

if (preg_match("/(?<=<div class\=\"op\_liarphone2_word\">被)(\d+)(?=个&nbsp;<a href\=\"http:\/\/shoujiweishi.baidu.com\/\" target\=\"\_blank\">百度手机卫士<\/a>&nbsp;用户标记为<strong>\"广告推销\"<\/strong>,供您参考。<\/div>)/", @$baiduserp, $matchliarphone))
echo "<p class=\"white\">被".$matchliarphone[1]."个<a class=\"noa\" href=\"http://shoujiweishi.baidu.com/\" rel=\"external nofollow\" target=\"_blank\">百度手机卫士</a>用户标记为<strong>\"骚扰电话\"</strong>,供您参考。</p>";

// 诈骗电话

if (preg_match("/(?<=<div class\=\"op\_liarphone2_word\">被)(\d+)(?=个&nbsp;<a href\=\"http:\/\/haoma.sogou.com\" target\=\"\_blank\">搜狗号码通<\/a>&nbsp;用户标记为<strong>\"诈骗\"<\/strong>,请谨防受骗。<\/div>)/", @$baiduserp, $matchliarphone2))
echo "<p class=\"noa\">被".$matchliarphone2[1]."个<a class=\"white\" href=\"http://haoma.sogou.com\" rel=\"external nofollow\" target=\"_blank\">搜狗号码通</a>用户标记为<strong>\"诈骗\"</strong>,请谨防受骗。</p>";

// site 特型
$indextime = date('Y-m-d',strtotime("-1 day"));

if (preg_match("/(?<=<span>该网站共有<b style=\"color:#333\">)([0-9,\x80-\xff]{1,32})(?=<\/b>个网页被百度收录<\/span>)/", @$baiduserp, $matchsite))
echo "\r\n<p class=\"white\">".$indextime."&nbsp;百度索引量&nbsp;".$matchsite[1]."&nbsp;(site&nbsp;&divide;&nbsp;索引量)&nbsp;=&nbsp;".sprintf("%.3f",((str_replace(",","",$matchnumbers[2]) / str_replace("," ,"" ,$matchsite[1])) * 100))."%</p>";

// 搜索结果
if (preg_match_all("/(?<=\" data\-tools\=\'{\"title\":\")([^\"]+)(\",\"url\":\"http:)(\/\/www.baidu.com\/link\?url\=[a-zA-Z0-9_\-]+)(?=\"}'><a class=\"c-tip-icon\"><i class=\"c-icon c-icon-triangle-down-g\"><\/i><\/a><\/div>)/", @$baiduserp, $matchserp))

// F1

$search_res1 = preg_match_all("/(?<=F1':)(\s?)(')([0-9A-F]{1})([0-9A-F]{1})([0-9A-F]{1})([0-9A-F]{1})([0-9A-F]{1})([0-9A-F]{1})([0-9A-F]{1})([0-9A-F]{1})(?=',)/", @$baiduserp, $matchf1);

// 搜索结果页资源

if (preg_match_all("/(?<=<div class\=\"result c\-container)( ?)(\" id\=\")(\d{1,3})(\" srcid\=\")(\d{1,5})(?=\" tpl\=\")/", @$baiduserp, $matchsrcid))

// 搜索结果，长度，来源，排名

if (!is_null($s))
{
echo"
<div class=\"draglist\" draggable=\"true\">
	<table>
		<thead>
			<tr>
				<th>
					<a href=\"http://ask.seowhy.com/question/8396\" rel=\"external nofollow\" target=\"_blank\" title=\"真心不喜欢百度搜索页中的框和排版\">
						标题
					</a>
				</th>
				<th>
					<a href=\"http://ask.seowhy.com/question/10425\" rel=\"external nofollow\" target=\"_blank\" title=\"通常标题长度 <= 64\">
						长度
					</a>
				</th>
				<th>
					<a href=\"http://ask.seowhy.com/article/79\" target=\"_blank\" rel=\"external nofollow\" title=\"百度左侧搜索结果来源分类srcid - 教你精准区分百度搜索产品\">
						第&nbsp;1&nbsp;类
					</a>
					&nbsp;$srcid1
				</th>
				<th>
					<span title=\"排名为百度杭州服务器缓存结果，可能因实时或地域而不同，刷新后返回最新结果\">排名</span>
				</th>
			</tr>
		</thead>
		<tbody>";

	foreach ($matchsrcid[3] as $i => $position)
	{
		$titlecount = preg_replace('/[\x80-\xff]{1,3}/', ' ', stripslashes(htmlspecialchars_decode($matchserp[1][$i], ENT_QUOTES)), -1, $number);
		$number += strlen($titlecount);
		echo "
			<tr class=\"back-white\">
				<td>
					<a href=\"".$matchserp[3][$i]."\" rel=\"external nofollow\" target=\"_blank\">"
						.stripslashes($matchserp[1][$i])
					."</a>
				</td>
				<td class=\"center\">".$number."</td>";
		$resourceid = $matchsrcid[5][$i];
		{
		if ($resourceid == 1599)
			echo "
				<td>
					普通结果
				</td>";
		elseif ($resourceid == 1548)
			echo "
				<td>
					结构化数据&nbsp;评分
				</td>";
		elseif ($resourceid == 1543)
			echo "
				<td>
					面包屑导航&nbsp;-&nbsp;结构化数据
				</td>";
		elseif ($resourceid == 1539)
			echo "
				<td>
					<span title=\"百度搜索赶集网出现\">带 0 - 6 个子链结果</span>
				</td>";
		elseif ($resourceid == 1538)
			echo "
				<td>
					软件下载摘要|小说作者状态类型&nbsp;结构化数据
				</td>";
		elseif ($resourceid == 1533)
			echo "
				<td>
					论坛帖子
				</td>";
		elseif ($resourceid == 1530)
				echo "
				<td>
					百度贴吧&nbsp;更多贴吧相关帖子
				</td>";
		elseif ($resourceid == 1529)
				echo "
				<td>
					<span title=\"百度知道|搜狗问问(搜搜问问)|爱问知识人|39问医生|寻医问药网有问必答\">权威问答网站结果</span>
				</td>";
		elseif ($resourceid == 1528)
				echo "
				<td>
					百度知道&nbsp;更多知道相关问题
				</td>";
		elseif ($resourceid == 1526)
			echo "
				<td>
					百度文库&nbsp;更多文库相关文档
				</td>";
		elseif ($resourceid == 1525)
			echo "
				<td>
					百度文库
				</td>";
		elseif ($resourceid == 1524)
			echo "
				<td>
					<a href=\"http://ask.seowhy.com/question/8491\" rel=\"external nofollow\" target=\"_blank\" title=\"探讨：搜索引擎可以识别文章中的图片和文章内容是否相关吗？\">缩略图结果，但非每个查询词展现图片</a>
				</td>";
		elseif ($resourceid == 1523)
			echo "
				<td>
					robots.txt&nbsp;文件存在限制指令的结果
				</td>";
		elseif ($resourceid == 1522)
				echo "
				<td>
					百度经验带相册
				</td>";
		elseif ($resourceid == 1520)
			echo "
				<td>
					<span title=\"百度搜索无序的新世界出现\">期刊文献</span>
				</td>";
		elseif ($resourceid == 1517)
			echo "
				<td>
					[图文]，但并非每个查询词显示&nbsp;[图文]
				</td>";
		elseif ($resourceid == 1514)
			echo "
				<td>
					[猜]&nbsp;在线文档&nbsp;结构化数据
				</td>";
		elseif ($resourceid == 1513)
			echo "
				<td>
					软件下载&nbsp;-&nbsp;结构化数据
				</td>";
		elseif ($resourceid == 1511)
			echo "
				<td>
					[原创]&nbsp;星火计划
				</td>";
		elseif ($resourceid == 1509)
			echo "
				<td>
					官网
				</td>";
		elseif ($resourceid == 1508)
			echo "
				<td>
					单视频
				</td>";
		elseif ($resourceid == 1505)
			echo "
				<td>
					百度知道(知道达人|权威专家|官方机构)
				</td>";
		elseif ($resourceid == 1502)
			echo "
				<td>
					百度百科
				</td>";
		elseif ($resourceid == 1501)
			echo "
				<td>
					评分&nbsp;-&nbsp;结构化数据
				</td>";
		else
			echo "
			<td>".$resourceid."</td>";
		}
			echo "
				<td class=\"center\">".$matchsrcid[3][$i]."</td>
			</tr>";
	}
	echo"
		</tbody>
	</table>
</div>";
}

// 百度知心左侧卡片框

if (preg_match_all("/(?<=<div class\=\"result\-op c\-container result\-zxl\"  srcid\=\")(\d{1,5})(\"  fk=\")(\d{0,5})(_?)([\.\d\w]+)(\" id\=\"zxl_)(\d{1,2})(?=\" tpl=\")/", @$baiduserp, $matchzxl))

if (!is_null($s))
{
echo"
<div class=\"draglist\" draggable=\"true\">
	<table>
		<thead>
			<tr>
				<th>$fk1</th>
				<th>$fk2</th>
				<th><span title=\"百度左侧知心结果\">第&nbsp;2&nbsp;类&nbsp;知心结果</span>&nbsp;搜索结果页资源&nbsp;resource_id</th>
				<th>知心排名</th>
			</tr>
		</thead>
		<tbody>";

	foreach ($matchzxl[7] as $i => $position)
	{
		$zxl = explode(".",$matchzxl[5][$i],5);
		echo "
			<tr class=\"back-baidu\">
				<td class=\"center\">".$matchzxl[1][$i]."</td>
				<td class=\"center\">";
			{
			if ($zxl[0] == "tv")
				echo "电视剧";
			elseif ($zxl[0] == "people")
				echo "人物";
			elseif ($zxl[0] == "movie")
				echo "电影";
			elseif ($zxl[0] == "comic")
				echo "动漫";
			else
				echo "(".$zxl[0].")";
			}
			echo "&nbsp;";
			{
			if ($zxl[1] == "basic")
				echo "基本";
			else
				echo "(".$zxl[1].")";
			}
			echo "&nbsp;";
			{
			if ($zxl[2] == "002937")
				echo "周笔畅";
			elseif ($zxl[2] == "002642")
				echo "的士速递1";
			elseif ($zxl[2] == "002735")
				echo "文章";
			elseif ($zxl[2] == "002677")
				echo "波多野结衣";
			elseif ($zxl[2] == "002630")
				echo "的士速递3";
			elseif ($zxl[2] == "002499")
				echo "林志玲";
			elseif ($zxl[2] == "002498")
				echo "林志炫";
			elseif ($zxl[2] == "002463")
				echo "林宥嘉";
			elseif ($zxl[2] == "002259")
				echo "琼瑶";
			elseif ($zxl[2] == "002197")
				echo "周杰伦";
			elseif ($zxl[2] == "002047")
				echo "郑荷娜";
			elseif ($zxl[2] == "002015")
				echo "刘德华";
			elseif ($zxl[2] == "001978")
				echo "吴莫愁";
			elseif ($zxl[2] == "001922")
				echo "李代沫";
			elseif ($zxl[2] == "001597")
				echo "海贼王";
			elseif ($zxl[2] == "001421")
				echo "梁静茹";
			elseif ($zxl[2] == "001363")
				echo "窦靖童";
			elseif ($zxl[2] == "001170")
				echo "范冰冰";
			elseif ($zxl[2] == "001093")
				echo "邓紫棋";
			elseif ($zxl[2] == "001060")
				echo "名侦探柯南";
			elseif ($zxl[2] == "001057")
				echo "张家辉";
			elseif ($zxl[2] == "001023")
				echo "张学友";
			elseif ($zxl[2] == "000875")
				echo "黎明";
			elseif ($zxl[2] == "000556")
				echo "的士速递2";
			elseif ($zxl[2] == "000338")
				echo "苍井空";
			elseif ($zxl[2] == "000256")
				echo "来自星星的你";
			elseif ($zxl[2] == "000039")
				echo "黄灿灿";
			elseif ($zxl[2] == "000006")
				echo "庾澄庆";
			else
				echo "(".$zxl[2].")";
			}
				echo "&nbsp;"
					."<span title=\"创建时间\">"
						.date("Y-m-d H:i:s",$zxl[3])
					."</span>"
					."&nbsp;"
					."<span title=\"[猜] 生成的第".($zxl[4]+1)."个资源\">"
						.$zxl[4]
					."</span>"
				."</td>";
		{
		if ($matchzxl[1][$i] == 20458)
			echo "
				<td>
					官方微博&nbsp;百度知心左侧卡片框
				</td>";
		elseif ($matchzxl[1][$i] == 20457)
			echo "
				<td>
					[猜]&nbsp;电视剧&nbsp;百度视频
				</td>";
		elseif ($matchzxl[1][$i] == 20324)
			echo "
				<td>
					百度百科&nbsp;百度知心左侧卡片框
				</td>";
		elseif ($matchzxl[1][$i] == 20323)
			echo "
				<td>
					百度图片&nbsp;百度知心左侧卡片框
				</td>";
		elseif ($matchzxl[1][$i] == 20322)
			echo "
				<td>
					百度音乐&nbsp;百度知心左侧卡片框
				</td>";
		elseif ($matchzxl[1][$i] == 20321)
			echo "
				<td>
					百度视频&nbsp;百度知心左侧卡片框
				</td>";
		elseif ($matchzxl[1][$i] == 20319)
			echo "
				<td>
					百度贴吧&nbsp;百度知心左侧卡片框
				</td>";
		else
			echo "
				<td>".$matchzxl[1][$i]."</td>";
		}
			echo "
				<td class=\"center\">
					".$matchzxl[7][$i]."
				</td>";
			echo "
			</tr>";
	}
	echo"
		</tbody>
	</table>
</div>";
}

// fetch key

if (preg_match_all("/(?<=\"  srcid\=\")(\d{1,5})(\"  fk=\")(\d{0,5})(_?)(.+)(\" id\=\")(\d{1,2})(?=\" tpl\=\")/", @$baiduserp, $matchfk))

// 抓取键名，键值，来源，排名

if (!is_null($s))
{
echo"
<div class=\"draglist\" draggable=\"true\">
	<table>
		<thead>
			<tr>
				<th>$fk1</th>
				<th>$fk2</th>
				<th><span title=\"百度搜索产品、合作伙伴\">第&nbsp;2&nbsp;类</span>&nbsp;$srcid2</th>
				<th>$openapi</th>
				<th>排名</th>
			</tr>
		</thead>
		<tbody>";

	foreach ($matchfk[7] as $i => $position)
	{
		$fk = explode(".",$matchfk[5][$i],5);
		echo "
			<tr class=\"back-egg\">
				<td class=\"center\">".$matchfk[1][$i]."</td>
				<td class=\"center\">";
			{
			if ($fk[0] == "tv")
			echo "电视剧";
			elseif ($fk[0] == "people")
			echo "人物";
			elseif ($fk[0] == "movie")
			echo "电影";
			elseif ($fk[0] == "comic")
			echo "动漫";
			else
			echo $fk[0];
			}
			if (!is_null(@$fk[1]))
			{
			echo "&nbsp;";
			if ($fk[1] == "series")
			echo "系列";
			elseif ($fk[1] == "basic")
			echo "基本";
			else
			echo $fk[1];
			}
			if (!is_null(@$fk[2]))
			{
			echo "&nbsp;";
			if ($fk[2] == "f582d125200a1747")
			echo "的士速递";
			elseif ($fk[2] == "ef988c73f5ff973f")
			echo "泰坦尼克号";
			elseif ($fk[2] == "ee8774cfc97053d3")
			echo "名侦探柯南";
			elseif ($fk[2] == "74b1f8914e4a2c17")
			echo "指环王";
			elseif ($fk[2] == "722ec0a1747ff9a2")
			echo "天降美食";
			elseif ($fk[2] == "6d3be2aa62b6ee98")
			echo "秦时明月";
			elseif ($fk[2] == "5edf5b50fe507636")
			echo "教父";
			elseif ($fk[2] == "46fb69bce09c9cdd")
			echo "冰河世纪";
			elseif ($fk[2] == "002953")
			echo "黄晓明";
			elseif ($fk[2] == "002937")
			echo "周笔畅";
			elseif ($fk[2] == "002921")
			echo "新三国演义";
			elseif ($fk[2] == "002825")
			echo "火山对对碰";
			elseif ($fk[2] == "002770")
			echo "天使爱美丽";
			elseif ($fk[2] == "002764")
			echo "西藏天空";
			elseif ($fk[2] == "002762")
			echo "教父2";
			elseif ($fk[2] == "002735")
			echo "文章";
			elseif ($fk[2] == "002677")
			echo "波多野结衣";
			elseif ($fk[2] == "002669")
			echo "超验骇客";
			elseif ($fk[2] == "002667")
			echo "蜗居";
			elseif ($fk[2] == "002642")
			echo "的士速递1";
			elseif ($fk[2] == "002634")
			echo "裸婚时代";
			elseif ($fk[2] == "002630")
			echo "的士速递3";
			elseif ($fk[2] == "002621")
			echo "金玉良缘";
			elseif ($fk[2] == "002613")
			echo "步步惊情";
			elseif ($fk[2] == "002612")
			echo "步步惊情";
			elseif ($fk[2] == "002608")
			echo "甄嬛传";
			elseif ($fk[2] == "002586")
			echo "里约大冒险2";
			elseif ($fk[2] == "002540")
			echo "指环王1";
			elseif ($fk[2] == "002537")
			echo "指环王2";
			elseif ($fk[2] == "002499")
			echo "林志玲";
			elseif ($fk[2] == "002498")
			echo "林志炫";
			elseif ($fk[2] == "002475")
			echo "蒂凡尼的早餐";
			elseif ($fk[2] == "002463")
			echo "林宥嘉";
			elseif ($fk[2] == "002343")
			echo "爱你一世一生";
			elseif ($fk[2] == "002259")
			echo "琼瑶";
			elseif ($fk[2] == "002197")
			echo "周杰伦";
			elseif ($fk[2] == "002180")
			echo "全职猎人";
			elseif ($fk[2] == "002144")
			echo "刘欢";
			elseif ($fk[2] == "002139")
			echo "聪明的一休";
			elseif ($fk[2] == "002056")
			echo "龙珠z";
			elseif ($fk[2] == "002047")
			echo "郑荷娜";
			elseif ($fk[2] == "002115")
			echo "同桌的妳";
			elseif ($fk[2] == "002033")
			echo "大闹天宫";
			elseif ($fk[2] == "002015")
			echo "刘德华";
			elseif ($fk[2] == "001991")
			echo "谢霆锋";
			elseif ($fk[2] == "001978")
			echo "吴莫愁";
			elseif ($fk[2] == "001975")
			echo "美丽人生";
			elseif ($fk[2] == "001947")
			echo "猫和老鼠";
			elseif ($fk[2] == "001935")
			echo "搜索";
			elseif ($fk[2] == "001922")
			echo "李代沫";
			elseif ($fk[2] == "001887")
			echo "十万个为什么";
			elseif ($fk[2] == "001828")
			echo "张惠妹";
			elseif ($fk[2] == "001792")
			echo "冰河世纪2";
			elseif ($fk[2] == "001677")
			echo "七龙珠剧场版";
			elseif ($fk[2] == "001618")
			echo "倾城之恋";
			elseif ($fk[2] == "001597")
			echo "海贼王";
			elseif ($fk[2] == "001527")
			echo "冰河世纪4";
			elseif ($fk[2] == "001472")
			echo "死神";
			elseif ($fk[2] == "001471")
			echo "黑子的篮球";
			elseif ($fk[2] == "001470")
			echo "火影忍者";
			elseif ($fk[2] == "001469")
			echo "龙珠z&nbsp;神与神";
			elseif ($fk[2] == "001453")
			echo "失恋33天";
			elseif ($fk[2] == "001451")
			echo "王菲";
			elseif ($fk[2] == "001421")
			echo "梁静茹";
			elseif ($fk[2] == "001409")
			echo "七龙珠";
			elseif ($fk[2] == "001363")
			echo "窦靖童";
			elseif ($fk[2] == "001287")
			echo "S.H.E";
			elseif ($fk[2] == "001282")
			echo "七龙珠z";
			elseif ($fk[2] == "001244")
			echo "指环王3";
			elseif ($fk[2] == "001170")
			echo "范冰冰";
			elseif ($fk[2] == "001153")
			echo "那英";
			elseif ($fk[2] == "001115")
			echo "百家乐翻天";
			elseif ($fk[2] == "001103")
			echo "香水";
			elseif ($fk[2] == "001096")
			echo "妖精的尾巴";
			elseif ($fk[2] == "001093")
			echo "邓紫棋";
			elseif ($fk[2] == "001092")
			echo "高圆圆";
			elseif ($fk[2] == "001060")
			echo "名侦探柯南";
			elseif ($fk[2] == "001057")
			echo "张家辉";
			elseif ($fk[2] == "001023")
			echo "张学友";
			elseif ($fk[2] == "000974")
			echo "马云";
			elseif ($fk[2] == "000916")
			echo "白宫管家";
			elseif ($fk[2] == "000809")
			echo "海贼王";
			elseif ($fk[2] == "000775")
			echo "一起又看流星雨";
			elseif ($fk[2] == "000744")
			echo "超级经纪人";
			elseif ($fk[2] == "000742")
			echo "教父1";
			elseif ($fk[2] == "000721")
			echo "张靓颖";
			elseif ($fk[2] == "000679")
			echo "整容日记";
			elseif ($fk[2] == "000483")
			echo "杜汶泽";
			elseif ($fk[2] == "000441")
			echo "步步惊心";
			elseif ($fk[2] == "000394")
			echo "苏打绿";
			elseif ($fk[2] == "000318")
			echo "龙珠巴达克之章";
			elseif ($fk[2] == "000270")
			echo "吸血鬼日记第五季";
			elseif ($fk[2] == "000257")
			echo "宫锁连城";
			elseif ($fk[2] == "000256")
			echo "失恋33天|来自星星的你|探灵档案";
			elseif ($fk[2] == "000252")
			echo "归来";
			elseif ($fk[2] == "000230")
			echo "超凡蜘蛛侠2";
			elseif ($fk[2] == "000149")
			echo "的士速递4";
			elseif ($fk[2] == "000144")
			echo "教父3";
			elseif ($fk[2] == "000143")
			echo "冰河世纪1";
			elseif ($fk[2] == "000022")
			echo "罗马假日";
			else
			echo $fk[2];
			}
			if (!is_null(@$fk[3]))
			{
			echo "&nbsp;"
					."<span title=\"创建时间\">"
						.date("Y-m-d H:i:s",$fk[3])
					."</span>"
					."&nbsp;"
					."<span title=\"[猜] 生成的第".(@$fk[4]+1)."个资源\">"
						.@$fk[4]
					."</span>
				</td>";
			}
		{
 
		if ($matchfk[1][$i] == 20840)
			echo "
				<td>
					报价|图片|参数配置|口碑-汽车之家
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 20776)
			echo "
				<td>
					[猜]&nbsp;百度百科
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 20679)
			echo "
				<td>
					<a href=\"http://help.alipay.com/lab/234578-236168/0-236168.htm\" rel=\"external nofollow\" target=\"_blank\">余额宝相关问题&nbsp;支付宝个人帮助中心</a>
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 20631)
			echo "
				<td>
					教育考试&nbsp;百度知心文库
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 20548)
			echo "
				<td>
					系列&nbsp;百度视频
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 20546)
			echo "
				<td>
					分集剧情&nbsp;电视猫
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 20535)
			echo "
				<td>
					[猜]&nbsp;2014年火车票购票日历
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 20528)
			echo "
				<td>
					电视剧情介绍&nbsp;电视猫
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 20527)
			echo "
				<td>
					百度左侧知心同系列电影&nbsp;百度视频
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 20458)
			echo "
				<td>
					官方微博(原知心左侧卡片框)
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 20457)
			echo "
				<td>
					电视剧&nbsp;百度视频
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 20451)
			echo "
				<td>
					分集剧情&nbsp;电视猫
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 20426)
			echo "
				<td>
					<a href=\"http://s.weibo.com/user/".$matchfk[5][$i]."&amp;auth=vip\" rel=\"external nofollow\" target=\"_blank\">新浪官微</a>
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 20423)
			echo "
				<td>
					[猜]&nbsp;百度知道&nbsp;医疗健康&nbsp;更多知道相关问题
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 20422)
			echo "
				<td>
					[猜]&nbsp;百度知道&nbsp;医疗&nbsp;更多知道相关问题
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 20408)
			echo "
				<td>
					百度百科(由<a href=\"http://www.baikemy.com/\" rel=\"external nofollow\" target=\"_blank\">卫生部临床医生科普平台/百科名医网</a>权威认证)
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 20407)
			echo "
				<td>
					百度百科(由<a href=\"http://www.baikemy.com/\" rel=\"external nofollow\" target=\"_blank\">卫生部临床医生科普平台/百科名医网</a>权威认证)
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 20406)
			echo "
				<td>
					百度视频
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 20387)
			echo "
				<td>
					易车网
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 20376)
			echo "
				<td>
					百度百科&nbsp;汽车之家阿拉丁
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 20375)
			echo "
				<td>
					官网&nbsp;汽车之家阿拉丁
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 20324)
			echo "
				<td>
					百度百科(原知心左侧卡片框)
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 20323)
			echo "
				<td>
					百度图片(原知心左侧卡片框)
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 20322)
			echo "
				<td>
					百度音乐(原知心左侧卡片框)
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 20321)
			echo "
				<td>
					百度视频(原知心左侧卡片框)
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 20319)
			echo "
				<td>
					百度贴吧(原知心左侧卡片框)
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 20315)
			echo "
				<td>
					付费观看&nbsp;百度视频
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 20294)
			echo "
				<td>
					[猜]&nbsp;热映电影&nbsp;百度视频&nbsp;-&nbsp;百度左侧知心结果
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 20289)
			echo "
				<td>
					知乎&nbsp;-&nbsp;百度阿拉丁
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 20172)
			echo "
				<td>
					知心旅游介绍&nbsp;百度旅游
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 20135)
			echo "
				<td>
					topik&nbsp;网上报名
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 20124)
			echo "
				<td>
					百度左侧知心视频电视剧
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 20080)
			echo "
				<td>
					北京市预约挂号统一平台
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 20071)
			echo "
				<td>
					医院科室&nbsp;好大夫在线
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 20070)
			echo "
				<td>
					挂号网
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 20006)
			echo "
				<td>
					医院网站
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 20005)
			echo "
				<td>
					医院科室
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 16932)
			echo "
				<td>
					美食/营养&nbsp;百度经验【组图】
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 16852)
			echo "
				<td>
					[猜]&nbsp;腾讯科技
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 16847)
			echo "
				<td>
					[猜]&nbsp;热点话题
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 16821)
			echo "
				<td>
					[猜]&nbsp;体育直播&nbsp;新浪网
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 16809)
			echo "
				<td>
					电视猫
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 16796)
			echo "
				<td>
					综艺&nbsp;腾讯视频
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 16790)
			echo "
				<td>
					美食美客&nbsp;爱奇艺
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 16758)
			echo "
				<td>
					悦美网&nbsp;子链&nbsp;缩略图
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 16743)
			echo "
				<td>
					软件下载&nbsp;中关村在线
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 16724)
			echo "
				<td>
					[猜]&nbsp;中国好系统
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 16689)
			echo "
				<td>
					走势图表&nbsp;百度乐彩
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 16653)
			echo "
				<td>
					女子拒搭讪被打死&nbsp;百度贴吧直播
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 16641)
			echo "
				<td>
					百度加速乐
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 16634)
			echo "
				<td>
					[猜]&nbsp;蘑菇系统之家
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 16633)
			echo "
				<td>
					[猜]&nbsp;系统吧
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 16590)
			echo "
				<td>
					开放式基金&nbsp;天天基金网
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 16545)
			echo "
				<td>
					面包屑导航新闻时间轴
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 16524)
			echo "
				<td>
					疑似推销
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 16499)
			echo "
				<td>
					[猜]&nbsp;港股实时行情&nbsp;-&nbsp;东方财富网
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 16498)
			echo "
				<td>
					[猜]&nbsp;股票实时行情&nbsp;-&nbsp;东方财富网
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 16488)
			echo "
				<td>
					百度知道问律师
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 16450)
			echo "
				<td>
					百度阿拉丁&nbsp;robots&nbsp;禁止抓取
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 16448)
			echo "
				<td>
					性病科&nbsp;挂号网
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 16411)
			echo "
				<td>
					百度软件中心
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 16391)
			echo "
				<td>
					<a href=\"http://search.jd.com/Search?keyword=".$matchfk[5][$i]."\" rel=\"external nofollow\" target=\"_blank\">京东</a>|<a href=\"http://search.dangdang.com/?key=".$matchfk[5][$i]."\" rel=\"external nofollow\" target=\"_blank\">当当</a>
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 16387)
			echo "
				<td>
					手机&nbsp;太平洋电脑网
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 16355)
			echo "
				<td>
					[猜]&nbsp;系统之家
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 16345)
			echo "
				<td>
					[猜]&nbsp;世界杯&nbsp;网易体育
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 16343)
			echo "
				<td>
					[猜]&nbsp;NBA赛季&nbsp;新浪体育
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 16312)
			echo "
				<td>
					[猜]&nbsp;百度贴吧访谈直播
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 16311)
			echo "
				<td>
					<a href=\"http://open.baidu.com/data/ms/nav/somesources/tag/imgu/\" target=\"_blank\" rel=\"external nofollow\">[猜]&nbsp;股票代码&nbsp;美股实时行情&nbsp;新浪财经</a>
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 16309)
			echo "
				<td>
					<a href=\"http://open.baidu.com/data/ms/nav/somesources/tag/imgu/\" target=\"_blank\" rel=\"external nofollow\">[猜]&nbsp;股票名称&nbsp;美股实时行情&nbsp;新浪财经</a>
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 16277)
			echo "
				<td>
					<a href=\"http://sports.sina.com.cn/g/seriea/\" rel=\"external nofollow\" target=\"_blank\">意甲&nbsp;新浪体育</a>
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 16262)
			echo "
				<td>
					带子链&nbsp;寻医问药网
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 16228)
			echo "
				<td>
					[猜]&nbsp;非中国内地明星&nbsp;伊秀娱乐&nbsp;伊秀女性网
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 16198)
			echo "
				<td>
					[猜]&nbsp;百度经验【组图】
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 16189)
			echo "
				<td>
					股票实时行情&nbsp;东方财富网
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 16188)
			echo "
				<td>
					新浪财经
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 16184)
			echo "
				<td>
					股票实时行情&nbsp;东方财富网
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 16163)
			echo "
				<td>
					[猜]&nbsp;欧冠新闻时间轴
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 16140)
			echo "
				<td>
					<a href=\"http://www.guahao.com\" target=\"_blank\" rel=\"external nofollow\">挂号网</a>
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 16049)
			echo "
				<td>
					诈骗
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 16048)
			echo "
				<td>
					寻医问药网
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 16047)
			echo "
				<td>
					百度在线翻译
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 16035)
			echo "
				<td>
					[猜]&nbsp;旅游目的地推荐&nbsp;-&nbsp;百度旅游
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 15988)
			echo "
				<td>
					动漫&nbsp;腾讯视频
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 15964)
			echo "
				<td>
					专辑&nbsp;百度音乐
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 15958)
			echo "
				<td>
					电视剧&nbsp;腾讯视频
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 15940)
			echo "
				<td>
					<a href=\"http://sports.sina.com.cn/g/laliga/\" rel=\"external nofollow\" target=\"_blank\">西甲&nbsp;新浪体育</a>
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 15929)
			echo "
				<td>
					[猜]&nbsp;软件下载&nbsp;太平洋电脑网
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 15883)
			echo "
				<td>
					<a href=\"http://ask.seowhy.com/question/8497\" rel=\"external nofollow\" target=\"_blank\" title=\"百度搜索结果页，都什么情况下会出现直链？\">代名词 百度快照在2013年09月-2013年10月间</a>
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 15863)
			echo "
				<td>
					小道消息&nbsp;手机中国
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 15858)
			echo "
				<td>
					单机游戏网
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 15820)
			echo "
				<td>
					速尔快递客服电话
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 15817)
			echo "
				<td>
					普通官网
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 15791)
			echo "
				<td>
					[猜]&nbsp;快递电话
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 15785)
			echo "
				<td>
					口袋巴士
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 15772)
			echo "
				<td>
					逗游
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 15765)
			echo "
				<td>
					世界杯新闻轴
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 15758)
			echo "
				<td>
					<a href=\"http://ask.seowhy.com/question/14936\" target=\"_blank\" rel=\"external nofollow\">慧聪网B2B</a>
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 15751)
			echo "
				<td>
					齐家网
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 15728)
			echo "
				<td>
					起点中文网
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 15726)
			echo "
				<td>
					起点中文网
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 15720)
			echo "
				<td>
					百度经验
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 15678)
			echo "
				<td>
					巴西队赛程&nbsp;网易体育
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 15648)
			echo "
				<td>
					[猜]&nbsp;旅游攻略&nbsp;百度旅游
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 15623)
			echo "
				<td>
					报价及图片_太平洋汽车网
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 15584)
			echo "
				<td>
					<a href=\"http://zhanzhang.baidu.com/\" rel=\"external nofollow\" target=\"_blank\">百度站长平台</a>
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&amp;s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 15560)
			echo "
				<td>
					中关村在线
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 15557)
			echo "
				<td>
					[猜]&nbsp;中公教育
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 15547)
			echo "
				<td>
					<a href=\"http://www.yuemei.com/\" rel=\"external nofollow\" target=\"_blank\">整形美容&nbsp;-&nbsp;悦美网</a>
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 15516)
			echo "
				<td>
					<a href=\"http://name.renren.com/\" rel=\"external nofollow\" target=\"_blank\">人人网同名搜索</a>
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 15515)
			echo "
				<td>
					人人网同名搜索
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 15460)
			echo "
				<td>
					中国足彩网
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 15442)
			echo "
				<td>
					疾病百科&nbsp;39健康网
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 15388)
			echo "
				<td>
					手机中国
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 15357)
			echo "
				<td>
					hao123汽车|hao123头条
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 15295)
			echo "
				<td>
					畛域_百度视频
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 15279)
			echo "
				<td>
					客服电话
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 15232)
			echo "
				<td>
					百度轻应用
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 15213)
			echo "
				<td>
					<a href=\"http://www.yuemei.com/parts_price.html\" rel=\"external nofollow\" target=\"_blank\">整形报价大全&nbsp;悦美整形网</a>
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 15200)
			echo "
				<td>
					<a href=\"http://movie.douban.com/subject_search?search_text=".$matchfk[5][$i]."\" rel=\"external nofollow\" target=\"_blank\">豆瓣电影</a>
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 15198)
			echo "
				<td>
					考研时间安排&nbsp;新浪教育
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 15195)
			echo "
				<td>
					不凡游戏网
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 15110)
			echo "
				<td>
					好大夫在线
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 15109)
			echo "
				<td>
					[猜]&nbsp;疾病&nbsp;好大夫在线
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 15056)
			echo "
				<td>
					天极下载
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 15017)
			echo "
				<td>
					热点&nbsp;网易体育
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 14994)
			echo "
				<td>
					伊秀娱乐明星库
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 14955)
			echo "
				<td>
					实物价格&nbsp;和讯黄金
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 14861)
			echo "
				<td>
					[猜]&nbsp;选手&nbsp;乐视网
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 14726)
			echo "
				<td>
					热点&nbsp;网易娱乐
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 14713)
			echo "
				<td>
					[猜]&nbsp;目的地指南&nbsp;百度旅游
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 14664)
			echo "
				<td>
					<span>爱卡汽车网</span>
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 14611)
			echo "
				<td>
					hao123小游戏
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 14584)
			echo "
				<td>
					[猜]&nbsp;百度团购官网
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 14580)
			echo "
				<td>
					Zinch
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 14545)
			echo "
				<td>
					品牌词
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 14515)
			echo "
				<td>
					[猜]&nbsp;新浪微博|58同城|百度卫士|百度影音|铁路客户服务中心
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 14510)
			echo "
				<td>
					[猜]&nbsp;58同城|淘宝网
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 14480)
			echo "
				<td>
					<a href=\"http://sports.sohu.com/s2004/zhongjia.shtml\" rel=\"external nofollow\" target=\"_blank\">中甲&nbsp;搜狐体育</a>
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 14474)
			echo "
				<td>
					百度投诉中心
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 14466)
			echo "
				<td>
					<span title=\"百度收购\">汽车点评</span>
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 14452)
			echo "
				<td>
					<a href=\"http://tousu.baidu.com/webmaster/add\" rel=\"external nofollow\" target=\"_blank\">快照删除与更新&nbsp;百度投诉</a>
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 14435)
			echo "
				<td>
					[猜]&nbsp;聊天通讯&nbsp;-&nbsp;百度软件中心
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 14421)
			echo "
				<td>
					时刻表&nbsp;发车间隔&nbsp;同程网
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 14331)
			echo "
				<td>
					百度经验【图文】
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 14305)
			echo "
				<td>
					百度网盘
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 14287)
			echo "
				<td>
					股吧&nbsp;-&nbsp;东方财富网
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 14283)
			echo "
				<td>
					股吧&nbsp;-&nbsp;东方财富网
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 14181)
			echo "
				<td>
					[猜]社交网络&nbsp;-&nbsp;ipush
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 14175)
			echo "
				<td>
					<a href=\"http://euro2012.sina.com.cn/\" rel=\"external nofollow\" target=\"_blank\">欧洲杯</a>
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 14142)
			echo "
				<td>
					[猜]&nbsp;系统吧
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 14134)
			echo "
				<td>
					[猜]&nbsp;百度图片 医疗健康
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 14110)
			echo "
				<td>
					中国天气网
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 14098)
			echo "
				<td>
					<a href=\"http://yz.chsi.com.cn/\" rel=\"external nofollow\" target=\"_blank\">中国研究生招生信息网</a>
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 14062)
			echo "
				<td>
					hao123折扣导航
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 14060)
			echo "
				<td>
					<a href=\"http://yingjian.baidu.com/\" rel=\"external nofollow\" target=\"_blank\">百度硬件</a>
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 14059)
			echo "
				<td>
					[猜]&nbsp;马槽&nbsp;百度经验
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 14058)
			echo "
				<td>
					电影&nbsp;百度团购
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 14022)
			echo "
				<td>
					旅游景点&nbsp;百度经验【组图】
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 14004)
			echo "
				<td>
					挂号网
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 13932)
			echo "
				<td>
					企业官方贴吧
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 13920)
			echo "
				<td>
					产品报价&nbsp;中关村在线
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 13911)
			echo "
				<td>
					手机&nbsp;天极网
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 13885)
			echo "
				<td>
					[猜]&nbsp;百度卫士&nbsp;更多知道相关问题&gt;&gt;百度知道
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 13863)
			echo "
				<td>
					百度火车票
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 13854)
			echo "
				<td>
					电影&nbsp;-&nbsp;腾讯视频
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 13842)
			echo "
				<td>
					旅游攻略&nbsp;百度旅游
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 13841)
			echo "
				<td>
					英语四六级考试查分&nbsp;考试吧
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 13823)
			echo "
				<td>
					hao123下载站
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 13806)
			echo "
				<td>
					附近电影院&nbsp;时光网
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 13798)
			echo "
				<td>
					支付宝客服电话|百度用户服务中心
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 13750)
			echo "
				<td>
					7k7k小游戏
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 13747)
			echo "
				<td>
					网页游戏&nbsp;7k7k小游戏
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 13741)
			echo "
				<td>
					实时路况
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 13717)
			echo "
				<td>
					左侧知心&nbsp;电视剧&nbsp;爱奇艺
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 13706)
			echo "
				<td>
					[猜]&nbsp;腾讯彩票
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 13679)
			echo "
				<td>
					现货价格&nbsp;和讯黄金
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 13631)
			echo "
				<td>
					比赛进程&nbsp;乐视网
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 13630)
			echo "
				<td>
					[猜]&nbsp;中国内地明星&nbsp;伊秀娱乐&nbsp;伊秀女性网
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 13627)
			echo "
				<td>
					亚冠赛程结果&nbsp;新浪体育
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 13620)
			echo "
				<td>
					<a href=\"http://www.baidu.com/aladdin/js/iknow/iknowask.html\" target=\"_blank\" rel=\"external nofollow\">
						百度知道&nbsp;ipush
					</a>
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 13616)
			echo "
				<td>
					二手房&nbsp;百度乐居
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 13598)
			echo "
				<td>
					猎聘网
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 13580)
			echo "
				<td>
					嫣然天使基金
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 13466)
			echo "
				<td>
					逗游网
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 13445)
			echo "
				<td>
					供应信息&nbsp;慧聪网
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 13390)
			echo "
				<td>
					腾讯动漫
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 13369)
			echo "
				<td>
					一听音乐
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 13360)
			echo "
				<td>
					<a href=\"http://tieba.baidu.com/f?kw=".$matchfk[5][$i]."\" rel=\"external nofollow\" target=\"_blank\">[猜]&nbsp;百度贴吧</a>
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 13355)
			echo "
				<td>
					短信&nbsp;爱祝福
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 13336)
			echo "
				<td>
					墨迹天气
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 13310)
			echo "
				<td>
					手机品牌&nbsp;太平洋电脑网
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 13264)
			echo "
				<td>
					<a href=\"http://open.baidu.com/data/ms/nav/somesources/tag/ctw/\" target=\"_blank\" rel=\"external nofollow\">畅途网&nbsp;百度数据开放平台合作伙伴</a>
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 13260)
			echo "
				<td>
					汽车百科知识&nbsp;汽车点评
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 13255)
			echo "
				<td>
					[猜]&nbsp;景点目的地&nbsp;百度旅游
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 13231)
			echo "
				<td>
					<a href=\"http://sports.sina.com.cn/g/ucl/fixtures.html\" rel=\"external nofollow\" target=\"_blank\">欧洲冠军联赛&nbsp;-&nbsp;新浪体育</a>
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 13216)
			echo "
				<td>
					影讯&nbsp;最近上映电影&nbsp;Mtime时光网
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 13174)
			echo "
				<td>
					列车时刻表查询及在线预订&nbsp;去哪儿
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 13118)
			echo "
				<td>
					比赛进程&nbsp;百度视频
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 13111)
			echo "
				<td>
					中国红十字基金会
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 13096)
			echo "
				<td>
					百度团购
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 13039)
			echo "
				<td>
					客服电话&nbsp;去哪儿
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 13031)
			echo "
				<td>
					<a href=\"http://open.baidu.com/data/ms/nav/somesources/tag/zgtq/\" target=\"_blank\" rel=\"external nofollow\">城市天气预报&nbsp;中国天气网</a>
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 12967)
			echo "
				<td>
					百度软件
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 12965)
			echo "
				<td>
					<a href=\"http://www.abab.com/\" rel=\"external nofollow\" target=\"_blank\">ABAB小游戏</a>
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 12946)
			echo "
				<td>
					动漫&nbsp;爱奇艺
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 12926)
			echo "
				<td>
					[猜]&nbsp;亚信峰会直播&nbsp;凤凰网
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 12906)
			echo "
				<td>
					[猜]城市&nbsp;-&nbsp;百度团购
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 12904)
			echo "
				<td>
					[猜]&nbsp;中国网络电视台
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 12903)
			echo "
				<td>
					[猜]&nbsp;百度团购导航
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 12901)
			echo "
				<td>
					[猜]&nbsp;旅游攻略&nbsp;百度旅游
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 12880)
			echo "
				<td>
					[猜]&nbsp;国内省市级|国外国家级目的地&nbsp;百度旅游
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 12840)
			echo "
				<td>
					百度乐居
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 12839)
			echo "
				<td>
					招远麦当劳&nbsp;新闻直播
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 12809)
			echo "
				<td>
					综艺&nbsp;爱奇艺
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 12729)
			echo "
				<td>
					<a href=\"http://piao.baidu.com/s?wd=".$matchfk[5][$i]."\" rel=\"external nofollow\" target=\"_blank\">百度票务</a>
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 12726)
			echo "
				<td>
					医院&nbsp;好大夫在线
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 12645)
			echo "
				<td>
					[猜]&nbsp;轿车&nbsp;易车网
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 12644)
			echo "
				<td>
					软件排行榜&nbsp;太平洋下载
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 12643)
			echo "
				<td>
					百度团购第&nbsp;2&nbsp;种起点
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 12616)
			echo "
				<td>
					开奖查询&nbsp;百度乐彩
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 12610)
			echo "
				<td>
					汽车点评
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 12605)
			echo "
				<td>
					百度乐彩
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 12594)
			echo "
				<td>
					[猜]&nbsp;腾讯视频
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 12558)
			echo "
				<td>
					说明书&nbsp;寻医问药网
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 12542)
			echo "
				<td>
					英语四六级真题试卷&nbsp;新浪教育
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 12521)
			echo "
				<td>
					开心网会员登录
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 12512)
			echo "
				<td>
					录取分数线&nbsp;高考招生&nbsp;中国教育在线
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 12501)
			echo "
				<td>
					育儿&nbsp;太平洋亲子网
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 12500)
			echo "
				<td>
					育儿检测&nbsp;太平洋亲子网
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 12403)
			echo "
				<td>
					壹基金
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 12391)
			echo "
				<td>
					装修&nbsp;齐家网
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 12347)
			echo "
				<td>
					产品导航&nbsp;手机&nbsp;太平洋电脑网
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 12346)
			echo "
				<td>
					商户&nbsp;大众点评网
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 12345)
			echo "
				<td>
					食品营养价值&nbsp;美食天下
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 12342)
			echo "
				<td>
					[猜]&nbsp;NBA决赛&nbsp;热点直播&nbsp;网易体育
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 12270)
			echo "
				<td>
					18183&nbsp;手游网
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 12220)
			echo "
				<td>
					排行榜&nbsp;百度搜索风云榜
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 12215)
			echo "
				<td>
					今日游戏排行榜&nbsp;百度搜索风云榜
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 12185)
			echo "
				<td>
					有妖气
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 12123)
			echo "
				<td>
					专题&nbsp;百度音乐
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 12121)
			echo "
				<td>
					综艺&nbsp;风行网
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 12118)
			echo "
				<td>
					百度相册
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 12114)
			echo "
				<td>
					百度经验【组图】
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 12102)
			echo "
				<td>
					自学考试&nbsp;考试吧
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 12097)
			echo "
				<td>
					京东商城品牌
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 12049)
			echo "
				<td>
					百度推广投诉客服电话
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 12048)
			echo "
				<td>
					客服电话
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 12021)
			echo "
				<td>
					新闻时间轴
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 11952)
			echo "
				<td>
					百度口碑
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 11940)
			echo "
				<td>
					<a href=\"http://open.baidu.com/data/ms/nav/somesources/tag/zgtq/\" target=\"_blank\" rel=\"external nofollow\">全国省份天气预报&nbsp;中国天气网</a>
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 11939)
			echo "
				<td>
					网页游戏开服表&nbsp;07073游戏网
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 11933)
			echo "
				<td>
					健身&nbsp;中国易登网
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 11899)
			echo "
				<td>
					[猜]&nbsp;维基百科|百度团购|百度杀毒
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 11898)
			echo "
				<td>
					知名网站
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 11852)
			echo "
				<td>
					<a href=\"http://sports.sina.com.cn/global/france2/\" target=\"_blank\" rel=\"external nofollow\">法甲&nbsp;新浪体育</a>
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 11838)
			echo "
				<td>
					[猜]&nbsp;客服电话表
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 11830)
			echo "
				<td>
					百度软件中心
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 11828)
			echo "
				<td>
					融360
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 11810)
			echo "
				<td>
					区号查询
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 11803)
			echo "
				<td>
					爱漫画
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 11782)
			echo "
				<td>
					<span title=\"百度收购\">手机大全&nbsp;-&nbsp;手机中国</span>
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 11757)
			echo "
				<td>
					爱漫画
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 11708)
			echo "
				<td>
					组图&nbsp;美食天下
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 11692)
			echo "
				<td>
					地铁&nbsp;百度地图
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 11677)
			echo "
				<td>
					网易163邮箱登录
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 11675)
			echo "
				<td>
					五笔编码汉语拼音查询&nbsp;ip138
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 11640)
			echo "
				<td>
					考试吧
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 11620)
			echo "
				<td>
					公益咨询电话
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 11610)
			echo "
				<td>
					成人高考报名时间_考试吧
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 11582)
			echo "
				<td>
					<a href=\"http://sports.sina.com.cn/csl/\" rel=\"external nofollow\" target=\"_blank\">中超&nbsp;新浪体育</a>
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 11547)
			echo "
				<td>
					求医网
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 11539)
			echo "
				<td>
					足球联赛对战表&nbsp;新浪体育
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 11520)
			echo "
				<td>
					观后感、评论&nbsp;豆瓣电影
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 11519)
			echo "
				<td>
					影评、简介及基本信息&nbsp;豆瓣电影
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 11490)
			echo "
				<td>
					国际原油期货价格&nbsp;国际石油网
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 11471)
			echo "
				<td>
					国家授时中心标准时间
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 11463)
			echo "
				<td>
					<a href=\"http://open.baidu.com/data/ms/nav/somesources/tag/ctw/\" target=\"_blank\" rel=\"external nofollow\">畅途网&nbsp;百度数据开放平台合作伙伴</a>
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 11462)
			echo "
				<td>
					[猜]&nbsp;官方订票电话
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 11443)
			echo "
				<td>
					<a href=\"http://info.sports.sina.com.cn/rank/\" target=\"_blank\" rel=\"external nofollow\">国际足联排名&nbsp;新浪体育</a>
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 11442)
			echo "
				<td>
					网球世界排名&nbsp;新浪体育
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 11439)
			echo "
				<td>
					乒乓球世界排名&nbsp;新浪体育
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 11437)
			echo "
				<td>
					羽毛球世界排名&nbsp;新浪体育
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 11436)
			echo "
				<td>
					233网校
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 11409)
			echo "
				<td>
					公益咨询电话
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 11386)
			echo "
				<td>
					百度贴吧&nbsp;查看更多贴子&gt;&gt;
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 11353)
			echo "
				<td>
					[猜]&nbsp;铁路客户服务中心官网
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 11301)
			echo "
				<td>
					人民网宏观经济数据库
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 11263)
			echo "
				<td>
					中国妇女发展基金会
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 11260)
			echo "
				<td>
					百度文库认证机构
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 11252)
			echo "
				<td>
					百度文库认证作者
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 11239)
			echo "
				<td>
					中国宋庆龄基金会
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 11228)
			echo "
				<td>
					综艺节目联系方式&nbsp;爱奇艺
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 11205)
			echo "
				<td>
					新浪星座查询
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 11196)
			echo "
				<td>
					12306&nbsp;官网
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 11175)
			echo "
				<td>
					[猜]&nbsp;百度贴吧直播
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 11170)
			echo "
				<td>
					太平洋下载中心
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 11129)
			echo "
				<td>
					[猜]&nbsp;综艺节目联系方式
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 10936)
			echo "
				<td>
					英语四六级&nbsp;新浪教育
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 10927)
			echo "
				<td>
					电视节目表
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 10904)
			echo "
				<td>
					<a href=\"http://cet.99sushe.com/\" target=\"_blank\" rel=\"external nofollow\">全国大学英语四六级考试(CET)官方成绩查询</a>
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 10858)
			echo "
				<td>
					高考分数线&nbsp;新浪高考
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 10827)
			echo "
				<td>
					高考各省市录取分数线汇总&nbsp;新浪高考
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 10806)
			echo "
				<td>
					<span title=\"百度收购\">手机中国</span>
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 10797)
			echo "
				<td>
					装软件&nbsp;-&nbsp;hao123下载站
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 10794)
			echo "
				<td>
					电影&nbsp;爱奇艺
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 10792)
			echo "
				<td>
					快速查询&nbsp;求医网
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 10789)
			echo "
				<td>
					宜家|百度云图|世界知识产权组织|英雄联盟
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 10788)
			echo "
				<td>
					亲子百科&nbsp;太平洋亲子网
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 10776)
			echo "
				<td>
					Mtime时光网
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 10775)
			echo "
				<td>
					影评、简介及放映时间查询&nbsp;Mtime时光网
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 10764)
			echo "
				<td>
					高考查分&nbsp;新浪高考
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 10744)
			echo "
				<td>
					考研分数线查询&nbsp;新浪教育
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 10723)
			echo "
				<td>
					考研真题试卷&nbsp;新浪教育
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 10693)
			echo "
				<td>
					世界时间&nbsp;百度开放平台
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 10678)
			echo "
				<td>
					基金吧&nbsp;天天基金网
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 10652)
			echo "
				<td>
					团体&nbsp;百度百科
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 10646)
			echo "
				<td>
					[猜]&nbsp;客船沉没
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 10639)
			echo "
				<td>
					[猜]&nbsp;中国移动客服电话
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 10610)
			echo "
				<td>
					百度招聘
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 10594)
			echo "
				<td>
					飞翔游戏
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 10577)
			echo "
				<td>
					网页游戏&nbsp;百度游戏
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 10530)
			echo "
				<td>
					药品通&nbsp;39健康网
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 10501)
			echo "
				<td>
					[猜]&nbsp;直播热点话题&nbsp;新浪娱乐
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 10500)
			echo "
				<td>
					[猜]&nbsp;微信客服&nbsp;百度知道&nbsp;更多知道相关问题&gt;&gt;
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 10422)
			echo "
				<td>
					[猜]时间轴新闻
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 10396)
			echo "
				<td>
					[猜]&nbsp;搜狐健康
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 10393)
			echo "
				<td>
					[猜]&nbsp;基于&nbsp;IP&nbsp;地理位置回答
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 10385)
			echo "
				<td>
					有道翻译
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 10382)
			echo "
				<td>
					尾号限行
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 10319)
			echo "
				<td>
					热门视频&nbsp;太平洋游戏网
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 10317)
			echo "
				<td>
					网易彩票
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 10315)
			echo "
				<td>
					开奖详情查询&nbsp;网易彩票
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 10306)
			echo "
				<td>
					资讯&nbsp;网易彩票
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 10298)
			echo "
				<td>
					<a href=\"http://www.gov.cn/zwgk/2013-12/11/content_2546204.htm\" rel=\"external nofollow\" target=\"_blank\" title=\"放假通知\">2014年全年公休假放假安排&nbsp;中国政府网</a>
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 10268)
			echo "
				<td>
					百度经验【组图】
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 10254)
			echo "
				<td>
					全国猎聘网
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 10249)
			echo "
				<td>
					<a href=\"http://drugs.dxy.cn/search/drug.htm?keyword=".$matchfk[5][$i]."\" rel=\"external nofollow\" target=\"_blank\">药品搜索&nbsp;丁香园</a>
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 10244)
			echo "
				<td>
					第&nbsp;2&nbsp;种百度经验
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 10240)
			echo "
				<td>
					[猜]&nbsp;开奖&nbsp;新浪彩票
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 10239)
			echo "
				<td>
					乐游网
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 10219)
			echo "
				<td>
					第&nbsp;2&nbsp;种客服电话
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 10213)
			echo "
				<td>
					易登网
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 10210)
			echo "
				<td>
					<a href=\"http://www.showji.com/\" target=\"_blank\" rel=\"external nofollow\">手机号码归属地查询</a>
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 10201)
			echo "
				<td>
					货币基金&nbsp;天天基金网
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 10199)
			echo "
				<td>
					[猜]&nbsp;医院&nbsp;-&nbsp;悦美整形网
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 10197)
			echo "
				<td>
					[猜]&nbsp;转诊预约&nbsp;-&nbsp;好大夫在线
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 10183)
			echo "
				<td>
					时刻表&nbsp;票价&nbsp;同程网
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 10178)
			echo "
				<td>
					展现多方观点&nbsp;百度知道
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 10175)
			echo "
				<td>
					找好医院&nbsp;家庭医生在线
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 10162)
			echo "
				<td>
					装修效果图大全&nbsp;齐家网
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 10161)
			echo "
				<td>
					[猜]疾病&nbsp;寻医问药专家网
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 10139)
			echo "
				<td>
					人民币利率&nbsp;和讯网
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 10118)
			echo "
				<td>
					[猜]&nbsp;开奖&nbsp;hao123彩票
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 10094)
			echo "
				<td>
					[猜]&nbsp;开奖结果&nbsp;体坛网
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 10077)
			echo "
				<td>
					公务员考试真题试卷&nbsp;中公教育
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 10023)
			echo "
				<td>
					<a href=\"http://sports.sina.com.cn/g/premierleague/\" rel=\"external nofollow\" target=\"_blank\">英超&nbsp;新浪体育</a>
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 10015)
			echo "
				<td>
					[猜]&nbsp;时间轴新闻&nbsp;腾讯网|新浪网
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 7136)
			echo "
				<td>
					就医助手&nbsp;39健康网
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 7127)
			echo "
				<td>
					<a href=\"http://opendata.baidu.com/yaopin/s?ie=utf-8&amp;oe=utf-8&amp;wd=".$matchfk[5][$i]."\" rel=\"external nofollow\" target=\"_blank\">百度药品</a>
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 7123)
			echo "
				<td>
					[猜]&nbsp;好大夫在线 推荐医院
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 7092)
			echo "
				<td>
					航班信息
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 7086)
			echo "
				<td>
					4399小游戏
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 7084)
			echo "
				<td>
					点评&nbsp;中关村在线
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 7079)
			echo "
				<td>
					数码系列&nbsp;-&nbsp;中关村在线
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 7076)
			echo "
				<td>
					详情页&nbsp;-&nbsp;中关村在线
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 7074)
			echo "
				<td>
					菜谱优质结果
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 7072)
			echo "
				<td>
					[猜]&nbsp;洛克王国&nbsp;4399
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 7032)
			echo "
				<td>
					车次查询&nbsp;去哪儿
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 7027)
			echo "
				<td>
					物品&nbsp;178游戏网
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 6845)
			echo "
				<td>
					小说
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 6835)
			echo "
				<td>
					百度软件中心
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 6833)
			echo "
				<td>
					百度百科&nbsp;多义词
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 6832)
			echo "
				<td>
					旅游景点大全
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 6827)
			echo "
				<td>
					<a href=\"http://www.baidu.com/#wd=".$queryfilter." 失信被执行人\" rel=\"external nofollow\" target=\"_blank\">".$queryfilter."由于失信已被列入国家失信被执行人名单</a>
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 6826)
			echo "
				<td>
					<a href=\"http://shixin.court.gov.cn/\" rel=\"external nofollow\" target=\"_blank\">该企业已被列入全国失信被执行人名单中！</a>
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 6819)
			echo "
				<td>
					<a href=\"http://shixin.court.gov.cn/\" rel=\"external nofollow\" target=\"_blank\">全国法院失信被执行人名单</a>
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 6817)
			echo "
				<td>
					百度视频
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 6811)
			echo "
				<td>
					百度音乐
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 6804)
			echo "
				<td>
					最新报价&nbsp;配置&nbsp;图片&nbsp;口碑&nbsp;油耗&nbsp;易车网
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 6801)
			echo "
				<td>
					车型&nbsp;-&nbsp;易车网
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 6735)
			echo "
				<td>
					<a href=\"http://zhanzhang.baidu.com/wiki/256\" rel=\"external nofollow\" target=\"_blank\">site特型&nbsp;百度站长平台</a>
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 6727)
			echo "
				<td>
					[猜]&nbsp;左侧动漫作品
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 6714)
			echo "
				<td>
					最佳答案
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 6705)
			echo "
				<td>
					电视剧榜单
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 6700)
			echo "
				<td>
					电影&nbsp;-&nbsp;百度团购
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 6691)
			echo "
				<td>
					歌曲&nbsp;-&nbsp;百度音乐
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 6690)
			echo "
				<td>
					电影&nbsp;-&nbsp;百度视频
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 6680)
			echo "
				<td>
					百度购物搜索
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 6677)
			echo "
				<td>
					网页应用&nbsp;百度阿拉丁
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 6670)
			echo "
				<td>
					百度团购
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 6666)
			echo "
				<td>
					百度招聘搜索
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 6665)
			echo "
				<td>
					百度招聘会搜索
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 6653)
			echo "
				<td>
					[猜]&nbsp;百度知心最佳答案
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 6112)
			echo "
				<td>
					[猜]&nbsp;电视剧&nbsp;百度视频
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 6018)
			echo "
				<td>
					日历
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 6017)
			echo "
				<td>
					最新汇率
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 6014)
			echo "
				<td>
					<a href=\"http://www.baidu.com/aladdin/js/iknow/iknowask.html\" target=\"_blank\" rel=\"external nofollow\">
						提问到百度知道
					</a>
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 6009)
			echo "
				<td>
					万年历
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 6007)
			echo "
				<td>
					计算器
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 6006)
			echo "
				<td>
					<a href=\"http://www.ip138.com/ips138.asp?ip=".$queryfilter."\" rel=\"external nofollow\" target=\"_blank\">IP地址查询</a>
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 6004)
			echo "
				<td>
					<a href=\"http://www.showji.com/search.htm?m=".$matchfk[5][$i]."\" rel=\"external nofollow\" target=\"_blank\">手机归属地</a>
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 91)
			echo "
				<td>
					<a href=\"http://baike.baidu.com/search?word=".$matchfk[5][$i]."\" rel=\"external nofollow\" target=\"_blank\">百度百科_多义词</a>
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&amp;s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 85)
			echo "
				<td>
					<a href=\"http://fanyi.baidu.com/#en/zh/".$matchfk[5][$i]."\" rel=\"external nofollow\" target=\"_blank\">百度翻译</a>|<a href=\"http://dict.baidu.com/s?wd=".$matchfk[5][$i]."\" rel=\"external nofollow\" target=\"_blank\">百度词典</a>
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&amp;s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 81)
			echo "
				<td>
					<a href=\"http://baike.baidu.com/search?word=".$matchfk[5][$i]."\" rel=\"external nofollow\" target=\"_blank\">百度百科</a>
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 80)
			echo "
				<td>
					<a href=\"http://baike.baidu.com/search?word=".$matchfk[5][$i]."\" rel=\"external nofollow\" target=\"_blank\">百度百科专有名词</a>
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		elseif ($matchfk[1][$i] == 10)
			echo "
				<td>
					<a href=\"http://tieba.baidu.com/f?kw=".$matchfk[5][$i]."\" rel=\"external nofollow\" target=\"_blank\">百度贴吧</a>
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		else
			echo "
				<td>
					<a href=\"http://www.weixingon.com/baidusp-srcid.php\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[1][$i]
					."</a>
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchfk[1][$i]."&s=".$matchfk[5][$i]."\" target=\"_blank\" rel=\"external nofollow\">"
						.$matchfk[5][$i]
					."</a>
				</td>
				<td class=\"center\">
					".$matchfk[7][$i]."
				</td>";
		}
		echo "
			</tr>";
	}
	echo"
		</tbody>
	</table>
</div>";
}

//有 fk，但没有抓取内容

if
(preg_match("/(?<=\"  srcid=\")(\d{1,5})(\" fk=\"\"  id=\")(\d{1,2})(?=\" )/", @$baiduserp, $matchapp))

//抓取键名，键值，来源，排名

if
(!is_null($s))
{
echo"
<div class=\"draglist\" draggable=\"true\">
<table>
	<thead>
		<tr>
			<th>$fk1</th>
			<th>$fk2</th>
			<th><span title=\"百度搜索产品、合作伙伴\">第&nbsp;2&nbsp;类</span>&nbsp;$srcid2</th>
			<th>$openapi</th>
			<th>排名</th>
		</tr>
	</thead>
	<tbody>";

		echo "
		<tr class=\"back-egg\">
			<td class=\"center\">无</td>
			<td class=\"center\">无</td>";
		{
		if
			($matchapp[1] == 35)
			echo "
			<td>
				<a href=\"http://m.baidu.com/s?st=10a001&amp;tn=webmkt&amp;word=".$queryfilter."\" rel=\"external nofollow\" target=\"_blank\">百度移动应用</a>
			</td>
			<td class=\"center\">
			</td>
			<td class=\"center\">
				".$matchapp[3]."
			</td>";
		elseif
			($matchapp[1] == 2)
			echo "
			<td>
				百度地图
			</td>
			<td class=\"center\">
			</td>
			<td class=\"center\">
				".$matchapp[3]."
			</td>";
		else
			echo "
			<td>".$matchapp[1]."</td>
			<td class=\"center\">
			</td>
			<td class=\"center\">
				".$matchapp[3]."
			</td>";
		}
		echo "
		</tr>";
	echo"
		</tbody>
	</table>
</div>";
}

//百度左侧实时知心结果

if
(preg_match_all("/(?<=\"  srcid\=\")(\d{1,5})(.+)(id\=\"zxl_)(\d{1,2})(?=\" tpl\=\")/", @$baiduserp, $matchzxlrt))

if
(!is_null($s))
{
echo"
<div class=\"draglist\" draggable=\"true\">
<table>
	<thead>
		<tr>
			<th>$nofk</th>
			<th><span title=\"百度左侧知心结果\">第&nbsp;3&nbsp;类&nbsp;知心结果</span>&nbsp;搜索结果页资源&nbsp;resource_id</th>
			<th>$openapi</th>
			<th>知心排名</th>
		</tr>
	</thead>
	<tbody>";

	foreach ($matchzxlrt[4] as $i => $position)
	{
		echo "
		<tr class=\"back-wheat\">";
		{
		if
			($matchzxlrt[1][$i] == 29090)
			echo "
			<td class=\"center\">
				".$matchzxlrt[1][$i]."
			</td>
			<td>
				课程&nbsp;百度教育
			</td>
			<td class=\"center\">
			</td>
			<td class=\"center\">
				".$matchzxlrt[4][$i]."
			</td>";
		elseif
			($matchzxlrt[1][$i] == 19)
			echo "
			<td class=\"center\">
				".$matchzxlrt[1][$i]."
			</td>
			<td>
				<a href=\"http://www.baidu.com/s?tn=baidurt&amp;rtt=1&amp;bsst=1&amp;wd=".$queryfilter."\" rel=\"external nofollow\" target=\"_blank\">最新相关消息</a>
			</td>
			<td class=\"center\">
			</td>
			<td class=\"center\">
				".$matchzxlrt[4][$i]."
			</td>";
		}
		echo "
		</tr>";
	}
	echo"
		</tbody>
	</table>
</div>";
}

// search product

if (preg_match_all("/(?<=\"  srcid\=\")(\d{1,5})(\"  id\=\")(\d{1,2})(?=\" tpl\=\")/", @$baiduserp, $matchsp))

// 百度搜索产品，来源，排名

if (!is_null($s))
{
echo"
<div class=\"draglist\" draggable=\"true\">
	<table>
		<thead>
				<tr>
						<th>$nofk</th>
						<th><span title=\"百度汇、实时、面包屑导航条\">第&nbsp;3&nbsp;类</span>&nbsp;$srcid3</th>
						<th>$openapi</th>
						<th>排名</th>
				</tr>
		</thead>
		<tbody>";

	foreach ($matchsp[3] as $i => $position)
	{
		echo "
			<tr class=\"back-orange\">";
		{
		if ($matchsp[1][$i] == 29250)
			echo "
				<td class=\"center\">
					".$matchsp[1][$i]."
				</td>
				<td>
					<a href=\"http://jiankang.baidu.com/healthStar/index?wd=".$queryfilter."\" rel=\"external nofollow\" target=\"_blank\">十二星座健康运势&nbsp;百度健康</a>
				</td>
				<td class=\"center\">
				</td>
				<td class=\"center\">
					".$matchsp[3][$i]."
				</td>";
		elseif ($matchsp[1][$i] == 29205)
			echo "
				<td class=\"center\">
					".$matchsp[1][$i]."
				</td>
				<td>
					<a href=\"http://jiaoyu.baidu.com/query/exam?classId=2007&amp;originQuery=".$queryfilter."\" rel=\"external nofollow\" target=\"_blank\">高等教育自学考试&nbsp;百度教育</a>
				</td>
				<td class=\"center\">
				</td>
				<td class=\"center\">
					".$matchsp[3][$i]."
				</td>";
		elseif ($matchsp[1][$i] == 29204)
			echo "
				<td class=\"center\">
					".$matchsp[1][$i]."
				</td>
				<td>
					<a href=\"http://jiaoyu.baidu.com/query/exam?originQuery=".$queryfilter."\" rel=\"external nofollow\" target=\"_blank\">考试&nbsp;百度教育</a>
				</td>
				<td class=\"center\">
				</td>
				<td class=\"center\">
					".$matchsp[3][$i]."
				</td>";
		elseif ($matchsp[1][$i] == 29200)
			echo "
				<td class=\"center\">
					".$matchsp[1][$i]."
				</td>
				<td>
					<a href=\"http://jiaoyu.baidu.com/query/exam?originQuery=".$queryfilter."\" rel=\"external nofollow\" target=\"_blank\">考试&nbsp;百度教育</a>
				</td>
				<td class=\"center\">
				</td>
				<td class=\"center\">
					".$matchsp[3][$i]."
				</td>";
		elseif ($matchsp[1][$i] == 29181)
			echo "
				<td class=\"center\">
					".$matchsp[1][$i]."
				</td>
				<td>
					产品大全&nbsp;百度财富
				</td>
				<td class=\"center\">
				</td>
				<td class=\"center\">
					".$matchsp[3][$i]."
				</td>";
		elseif ($matchsp[1][$i] == 29166)
			echo "
				<td class=\"center\">
					".$matchsp[1][$i]."
				</td>
				<td>
					<a href=\"http://iwan.baidu.com/search?query=".$queryfilter."&searchquery=".$queryfilter."\" rel=\"external nofollow\" target=\"_blank\">页游&nbsp;开始游戏&nbsp;百度爱玩</a>
				</td>
				<td class=\"center\">
				</td>
				<td class=\"center\">
					".$matchsp[3][$i]."
				</td>";
		elseif ($matchsp[1][$i] == 29152)
			echo "
				<td class=\"center\">
					".$matchsp[1][$i]."
				</td>
				<td>
					游戏专区&nbsp;17173
				</td>
				<td class=\"center\">
				</td>
				<td class=\"center\">
					".$matchsp[3][$i]."
				</td>";
		elseif ($matchsp[1][$i] == 29140)
			echo "
				<td class=\"center\">
					".$matchsp[1][$i]."
				</td>
				<td>
					二手车&nbsp;百度汽车
				</td>
				<td class=\"center\">
				</td>
				<td class=\"center\">
					".$matchsp[3][$i]."
				</td>";
		elseif ($matchsp[1][$i] == 29129)
			echo "
				<td class=\"center\">
					".$matchsp[1][$i]."
				</td>
				<td>
					开始游戏&nbsp;百度爱玩
				</td>
				<td class=\"center\">
				</td>
				<td class=\"center\">
					".$matchsp[3][$i]."
				</td>";
		elseif ($matchsp[1][$i] == 29127)
			echo "
				<td class=\"center\">
					".$matchsp[1][$i]."
				</td>
				<td>
					<a href=\"http://iwan.baidu.com/search?searchquery=".$queryfilter."\" rel=\"external nofollow\" target=\"_blank\">百度爱玩</a>
				</td>
				<td class=\"center\">
				</td>
				<td class=\"center\">
					".$matchsp[3][$i]."
				</td>";
		elseif ($matchsp[1][$i] == 29120)
			echo "
				<td class=\"center\">
					".$matchsp[1][$i]."
				</td>
				<td>
					<a href=\"http://iwan.baidu.com/yeyou?query=\" rel=\"external nofollow\" target=\"_blank\">热门网页游戏平台&nbsp;百度爱玩</a>
				</td>
				<td class=\"center\">
				</td>
				<td class=\"center\">
					".$matchsp[3][$i]."
				</td>";
		elseif ($matchsp[1][$i] == 29118)
			echo "
				<td class=\"center\">
					".$matchsp[1][$i]."
				</td>
				<td>
					百度品牌特卖
				</td>
				<td class=\"center\">
				</td>
				<td class=\"center\">
					".$matchsp[3][$i]."
				</td>";
		elseif ($matchsp[1][$i] == 29116)
			echo "
				<td class=\"center\">
					".$matchsp[1][$i]."
				</td>
				<td>
					百度品牌特卖
				</td>
				<td class=\"center\">
				</td>
				<td class=\"center\">
					".$matchsp[3][$i]."
				</td>";
		elseif ($matchsp[1][$i] == 29114)
			echo "
				<td class=\"center\">
					".$matchsp[1][$i]."
				</td>
				<td>
					百度品牌特卖
				</td>
				<td class=\"center\">
				</td>
				<td class=\"center\">
					".$matchsp[3][$i]."
				</td>";
		elseif ($matchsp[1][$i] == 29099)
			echo "
				<td class=\"center\">
					".$matchsp[1][$i]."
				</td>
				<td>
					百度教育考试
				</td>
				<td class=\"center\">
				</td>
				<td class=\"center\">
					".$matchsp[3][$i]."
				</td>";
		elseif ($matchsp[1][$i] == 29096)
			echo "
				<td class=\"center\">
					".$matchsp[1][$i]."
				</td>
				<td>
					<a href=\"http://jiaoyu.baidu.com/query/abroad?originQuery=".$queryfilter."\" rel=\"external nofollow\" target=\"_blank\">留学图片资讯&nbsp;百度教育</a>
				</td>
				<td class=\"center\">
				</td>
				<td class=\"center\">
					".$matchsp[3][$i]."
				</td>";
		elseif ($matchsp[1][$i] == 29094)
			echo "
				<td class=\"center\">
					".$matchsp[1][$i]."
				</td>
				<td>
					百度教育迷你相关课程
				</td>
				<td class=\"center\">
				</td>
				<td class=\"center\">
					".$matchsp[3][$i]."
				</td>";
		elseif ($matchsp[1][$i] == 29093)
			echo "
				<td class=\"center\">
					".$matchsp[1][$i]."
				</td>
				<td>
					机构&nbsp;百度教育
				</td>
				<td class=\"center\">
				</td>
				<td class=\"center\">
					".$matchsp[3][$i]."
				</td>";
		elseif ($matchsp[1][$i] == 29089)
			echo "
				<td class=\"center\">
					".$matchsp[1][$i]."
				</td>
				<td>
					<a href=\"http://jiankang.baidu.com/juhe/index?aType=1&amp;wd=".$queryfilter."\" rel=\"external nofollow\" target=\"_blank\">百度健康</a>
				</td>
				<td class=\"center\">
				</td>
				<td class=\"center\">
					".$matchsp[3][$i]."
				</td>";
		elseif ($matchsp[1][$i] == 29088)
			echo "
				<td class=\"center\">
					".$matchsp[1][$i]."
				</td>
				<td>
					混合&nbsp;-&nbsp;百度健康
				</td>
				<td class=\"center\">
				</td>
				<td class=\"center\">
					".$matchsp[3][$i]."
				</td>";
		elseif ($matchsp[1][$i] == 29087)
			echo "
				<td class=\"center\">
					".$matchsp[1][$i]."
				</td>
				<td>
					[猜]&nbsp;百度知心_健康_知识_图片
				</td>
				<td class=\"center\">
				</td>
				<td class=\"center\">
					".$matchsp[3][$i]."
				</td>";
		elseif ($matchsp[1][$i] == 29083)
			echo "
				<td class=\"center\">
					".$matchsp[1][$i]."
				</td>
				<td>
					<a href=\"http://yao.xywy.com/so/?q=".$queryfilter."\" rel=\"external nofollow\" target=\"_blank\">药品频道&nbsp;寻医问药网&nbsp;百度健康</a>
				</td>
				<td class=\"center\">
				</td>
				<td class=\"center\">
					".$matchsp[3][$i]."
				</td>";
		elseif ($matchsp[1][$i] == 29081)
			echo "
				<td class=\"center\">
					".$matchsp[1][$i]."
				</td>
				<td>
					<a href=\"http://jiankang.baidu.com/shoushu/base?wd=".$queryfilter."\" rel=\"external nofollow\" target=\"_blank\">手术&nbsp;百度健康</a>
				</td>
				<td class=\"center\">
				</td>
				<td class=\"center\">
					".$matchsp[3][$i]."
				</td>";
		elseif ($matchsp[1][$i] == 29080)
			echo "
				<td class=\"center\">
					".$matchsp[1][$i]."
				</td>
				<td>
					知识图片&nbsp;-&nbsp;百度健康
				</td>
				<td class=\"center\">
				</td>
				<td class=\"center\">
					".$matchsp[3][$i]."
				</td>";
		elseif ($matchsp[1][$i] == 29070)
			echo "
				<td class=\"center\">
					".$matchsp[1][$i]."
				</td>
				<td>
					<a href=\"http://iwan.baidu.com/yeyou?query=".$queryfilter."\" rel=\"external nofollow\" target=\"_blank\">网页游戏&nbsp;百度爱玩</a>
				</td>
				<td class=\"center\">
				</td>
				<td class=\"center\">
					".$matchsp[3][$i]."
				</td>";
		elseif ($matchsp[1][$i] == 29051)
			echo "
				<td class=\"center\">
					".$matchsp[1][$i]."
				</td>
				<td>
					<a href=\"http://weigou.baidu.com/search?q=".$queryfilter."\" rel=\"external nofollow\" target=\"_blank\">百度微购</a>
				</td>
				<td class=\"center\">
				</td>
				<td class=\"center\">
					".$matchsp[3][$i]."
				</td>";
		elseif ($matchsp[1][$i] == 28093)
			echo "
				<td class=\"center\">
					".$matchsp[1][$i]."
				</td>
				<td>
					去哪儿网门票频道
				</td>
				<td class=\"center\">
				</td>
				<td class=\"center\">
					".$matchsp[3][$i]."
				</td>";
		elseif ($matchsp[1][$i] == 28092)
			echo "
				<td class=\"center\">
					".$matchsp[1][$i]."
				</td>
				<td>
					去哪儿网门票频道
				</td>
				<td class=\"center\">
				</td>
				<td class=\"center\">
					".$matchsp[3][$i]."
				</td>";
		elseif ($matchsp[1][$i] == 28072)
			echo "
				<td class=\"center\">
					".$matchsp[1][$i]."
				</td>
				<td>
					去哪儿网酒店预定查询频道
				</td>
				<td class=\"center\">
				</td>
				<td class=\"center\">
					".$matchsp[3][$i]."
				</td>";
		elseif ($matchsp[1][$i] == 28057)
			echo "
				<td class=\"center\">
					".$matchsp[1][$i]."
				</td>
				<td>
					去哪儿度假频道
				</td>
				<td class=\"center\">
				</td>
				<td class=\"center\">
					".$matchsp[3][$i]."
				</td>";
		elseif ($matchsp[1][$i] == 28056)
			echo "
				<td class=\"center\">
					".$matchsp[1][$i]."
				</td>
				<td>
					[猜]&nbsp;去哪儿度假频道
				</td>
				<td class=\"center\">
				</td>
				<td class=\"center\">
					".$matchsp[3][$i]."
				</td>";
		elseif ($matchsp[1][$i] == 28054)
			echo "
				<td class=\"center\">
					".$matchsp[1][$i]."
				</td>
				<td>
					机票查询&nbsp;去哪儿
				</td>
				<td class=\"center\">
				</td>
				<td class=\"center\">
					".$matchsp[3][$i]."
				</td>";
		elseif ($matchsp[1][$i] == 28050)
			echo "
				<td class=\"center\">
					".$matchsp[1][$i]."
				</td>
				<td>
					<a href=\"http://zhidao.baidu.com/search?word=".$queryfilter."\" target=\"_blank\" rel=\"external nofollow\">疾病&nbsp;百度知道</a>
				</td>
				<td class=\"center\">
				</td>
				<td class=\"center\">
					".$matchsp[3][$i]."
				</td>";
		elseif ($matchsp[1][$i] == 28042)
			echo "
				<td class=\"center\">
					".$matchsp[1][$i]."
				</td>
				<td>
					地图&nbsp;第&nbsp;2&nbsp;版&nbsp;百度旅游
				</td>
				<td class=\"center\">
				</td>
				<td class=\"center\">
					".$matchsp[3][$i]."
				</td>";
		elseif ($matchsp[1][$i] == 28041)
			echo "
				<td class=\"center\">
					".$matchsp[1][$i]."
				</td>
				<td>
					地图&nbsp;第&nbsp;2&nbsp;版&nbsp;百度旅游
				</td>
				<td class=\"center\">
				</td>
				<td class=\"center\">
					".$matchsp[3][$i]."
				</td>";
		elseif ($matchsp[1][$i] == 28040)
			echo "
				<td class=\"center\">
					".$matchsp[1][$i]."
				</td>
				<td>
					景点介绍&nbsp;第&nbsp;2&nbsp;版&nbsp;百度旅游
				</td>
				<td class=\"center\">
				</td>
				<td class=\"center\">
					".$matchsp[3][$i]."
				</td>";
		elseif ($matchsp[1][$i] == 28025)
			echo "
				<td class=\"center\">
					".$matchsp[1][$i]."
				</td>
				<td>
					[猜]&nbsp;百度团购首页格
				</td>
				<td class=\"center\">
				</td>
				<td class=\"center\">
					".$matchsp[3][$i]."
				</td>";
		elseif ($matchsp[1][$i] == 28022)
			echo "
				<td class=\"center\">
					".$matchsp[1][$i]."
				</td>
				<td>
					<a href=\"http://map.baidu.com/?newmap=1&amp;ie=utf-8&amp;s=s%26wd%3D".$queryfilter."\" rel=\"external nofollow\" target=\"_blank\">百度地图</a>
				</td>
				<td class=\"center\">
				</td>
				<td class=\"center\">
					".$matchsp[3][$i]."
				</td>";
		elseif ($matchsp[1][$i] == 28010)
			echo "
				<td class=\"center\">
					".$matchsp[1][$i]."
				</td>
				<td>
					<a href=\"http://map.baidu.com/?newmap=1&amp;ie=utf-8&amp;s=s%26wd%3D".$queryfilter."\" rel=\"external nofollow\" target=\"_blank\">百度地图&nbsp;城市</a>
				</td>
				<td class=\"center\">
				</td>
				<td class=\"center\">
					".$matchsp[3][$i]."
				</td>";
		elseif ($matchsp[1][$i] == 28002)
			echo "
				<td class=\"center\">
					".$matchsp[1][$i]."
				</td>
				<td>
					<a href=\"http://map.baidu.com/?newmap=1&amp;ie=utf-8&amp;s=s%26wd%3D".$queryfilter."\" rel=\"external nofollow\" target=\"_blank\">百度地图</a>
				</td>
				<td class=\"center\">
				</td>
				<td class=\"center\">
					".$matchsp[3][$i]."
				</td>";
		elseif ($matchsp[1][$i] == 27003)
			echo "
				<td class=\"center\">
					".$matchsp[1][$i]."
				</td>
				<td>
					携程攻略
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchsp[1][$i]."&s=".$queryfilter."\" target=\"_blank\" rel=\"external nofollow\">"
						.$queryfilter
					."</a>
				</td>
				<td class=\"center\">
					".$matchsp[3][$i]."
				</td>";
		elseif ($matchsp[1][$i] == 27002)
			echo "
				<td class=\"center\">
					".$matchsp[1][$i]."
				</td>
				<td>
					携程攻略
				</td>
				<td class=\"center\">
				</td>
				<td class=\"center\">
					".$matchsp[3][$i]."
				</td>";
		elseif ($matchsp[1][$i] == 6680)
			echo "
				<td class=\"center\">
					".$matchsp[1][$i]."
				</td>
				<td>
					<a href=\"http://gouwu.baidu.com/s?wd=".$queryfilter."\" rel=\"external nofollow\" target=\"_blank\">百度购物搜索</a>
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchsp[1][$i]."&s=".$queryfilter."\" target=\"_blank\" rel=\"external nofollow\">"
						.$queryfilter
					."</a>
				</td>
				<td class=\"center\">
					".$matchsp[3][$i]."
				</td>";
		elseif ($matchsp[1][$i] == 4004)
			echo "
				<td class=\"center\">
					".$matchsp[1][$i]."
				</td>
				<td>
					快递查询&nbsp;快递100
				</td>
				<td class=\"center\">
				</td>
				<td class=\"center\">
					".$matchsp[3][$i]."
				</td>";
		elseif ($matchsp[1][$i] == 4002)
			echo "
				<td class=\"center\">
					".$matchsp[1][$i]."
				</td>
				<td>
					单位换算&nbsp;百度阿拉丁
				</td>
				<td class=\"center\">
				</td>
				<td class=\"center\">
					".$matchsp[3][$i]."
				</td>";
		elseif ($matchsp[1][$i] == 4001)
			echo "
				<td class=\"center\">
					".$matchsp[1][$i]."
				</td>
				<td>
					快递查询&nbsp;快递100
				</td>
				<td class=\"center\">
				</td>
				<td class=\"center\">
					".$matchsp[3][$i]."
				</td>";
		elseif ($matchsp[1][$i] == 1547)
			echo "
				<td class=\"center\">
					".$matchsp[1][$i]."
				</td>
				<td>
					百度百科
				</td>
				<td class=\"center\">
				</td>
				<td class=\"center\">
					".$matchsp[3][$i]."
				</td>";
		elseif ($matchsp[1][$i] == 1542)
			echo "
				<td class=\"center\">
					".$matchsp[1][$i]."
				</td>
				<td>
					百度学术&nbsp;查看更多相关论文
				</td>
				<td class=\"center\">
				</td>
				<td class=\"center\">
					".$matchsp[3][$i]."
				</td>";
		elseif ($matchsp[1][$i] == 1537)
			echo "
				<td class=\"center\">
					".$matchsp[1][$i]."
				</td>
				<td>
					组图&nbsp;百度经验
				</td>
				<td class=\"center\">
				</td>
				<td class=\"center\">
					".$matchsp[3][$i]."
				</td>";
		elseif ($matchsp[1][$i] == 1536)
			echo "
				<td class=\"center\">
					".$matchsp[1][$i]."
				</td>
				<td>
					一般答案&nbsp;百度知道
				</td>
				<td class=\"center\">
				</td>
				<td class=\"center\">
					".$matchsp[3][$i]."
				</td>";
		elseif ($matchsp[1][$i] == 1532)
			echo "
				<td class=\"center\">
					".$matchsp[1][$i]."
				</td>
				<td>
					最佳答案&nbsp;百度知道
				</td>
				<td class=\"center\">
				</td>
				<td class=\"center\">
					".$matchsp[3][$i]."
				</td>";
		elseif ($matchsp[1][$i] == 1527)
			echo "
				<td class=\"center\">
					".$matchsp[1][$i]."
				</td>
				<td>
					百度文库&nbsp;更多文库相关文档&gt;&gt;
				</td>
				<td class=\"center\">
				</td>
				<td class=\"center\">
					".$matchsp[3][$i]."
				</td>";
		elseif ($matchsp[1][$i] == 1521)
			echo "
				<td class=\"center\">
					".$matchsp[1][$i]."
				</td>
				<td>
					<a href=\"http://baike.baidu.com/search?word=".$queryfilter."\" rel=\"external nofollow\" target=\"_blank\">与查询词内容相关度较高的百度百科</a>
				</td>
				<td class=\"center\">
				</td>
				<td class=\"center\">
					".$matchsp[3][$i]."
				</td>";
		elseif ($matchsp[1][$i] == 101)
			echo "
				<td class=\"center\">
					".$matchsp[1][$i]."
				</td>
				<td>
					当当|一淘|英语四六级查询&nbsp;考试吧
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-op.php?srcid=".$matchsp[1][$i]."&s=".$queryfilter."\" target=\"_blank\" rel=\"external nofollow\">"
						.$queryfilter
					."</a>
				</td>
				<td class=\"center\">
					".$matchsp[3][$i]."
				</td>";
		elseif ($matchsp[1][$i] == 43)
			echo "
				<td class=\"center\">
					".$matchsp[1][$i]."
				</td>
				<td>
					<a href=\"http://zhidao.baidu.com/new?ie=utf8&word=".$queryfilter."\" rel=\"external nofollow\" target=\"_blank\">去百度知道提问</a>
				</td>
				<td class=\"center\">
				</td>
				<td class=\"center\">
					".$matchsp[3][$i]."
				</td>";
		elseif ($matchsp[1][$i] == 37)
			echo "
				<td class=\"center\">
					".$matchsp[1][$i]."
				</td>
				<td>
					最新图片
				</td>
				<td class=\"center\">
				</td>
				<td class=\"center\">
					".$matchsp[3][$i]."
				</td>";
		elseif ($matchsp[1][$i] == 34)
			echo "
				<td class=\"center\">
					".$matchsp[1][$i]."
				</td>
				<td>
					<a href=\"http://www.baidu.com/s?rtt=2&tn=baiduwb&cl=2&wd=".$queryfilter."\" rel=\"external nofollow\" target=\"_blank\">最新微博结果</a>
				</td>
				<td class=\"center\">
				</td>
				<td class=\"center\">
					".$matchsp[3][$i]."
				</td>";
		elseif ($matchsp[1][$i] == 23)
			echo "
				<td class=\"center\">
					".$matchsp[1][$i]."
				</td>
				<td>
					<a href=\"http://fanyi.baidu.com/#en/zh/".$queryfilter."\" rel=\"external nofollow\" target=\"_blank\">百度翻译</a>
				</td>
				<td class=\"center\">
				</td>
				<td class=\"center\">
					".$matchsp[3][$i]."
				</td>";
		elseif ($matchsp[1][$i] == 19)
			echo "
				<td class=\"center\">
					".$matchsp[1][$i]."
				</td>
				<td>
					<a href=\"http://www.baidu.com/s?tn=baidurt&amp;rtt=1&amp;bsst=1&amp;wd=".$queryfilter."\" rel=\"external nofollow\" target=\"_blank\">最新相关消息</a>
				</td>
				<td class=\"center\">
					<a href=\"http://www.weixingon.com/baidusp-news.php?s=".$queryfilter."\" target=\"_blank\">".$queryfilter."</a>
				</td>
				<td class=\"center\">
					".$matchsp[3][$i]."
				</td>";
		elseif ($matchsp[1][$i] == 5)
			echo "
				<td class=\"center\">
					".$matchsp[1][$i]."
				</td>
				<td>
					<a href=\"http://music.baidu.com/search?key=".$queryfilter."\" rel=\"external nofollow\" target=\"_blank\">百度音乐</a>
				</td>
				<td class=\"center\">
				</td>
				<td class=\"center\">
					".$matchsp[3][$i]."
				</td>";
		elseif ($matchsp[1][$i] == 4)
			echo "
				<td class=\"center\">
					".$matchsp[1][$i]."
				</td>
				<td>
					<a href=\"http://image.baidu.com/i?ie=utf-8&amp;tn=baiduimage&amp;ct=201326592&amp;word=".$queryfilter."\" rel=\"external nofollow\" target=\"_blank\">百度图片</a>
				</td>
				<td class=\"center\">
				</td>
				<td class=\"center\">
					".$matchsp[3][$i]."
				</td>";
		elseif ($matchsp[1][$i] == 1)
			echo "
				<td class=\"center\">
					".$matchsp[1][$i]."
				</td>
				<td>
					<a href=\"http://v.baidu.com/v?ie=utf-8&amp;word=".$queryfilter."\" rel=\"external nofollow\" target=\"_blank\">百度视频</a>
				</td>
				<td class=\"center\">
				</td>
				<td class=\"center\">
					".$matchsp[3][$i]."
				</td>";
		else
			echo "
				<td class=\"center\">
					".$matchsp[1][$i]."
				</td>
				<td>
					".$matchsp[1][$i]."
				</td>
				<td class=\"center\">
				</td>
				<td class=\"center\">
					".$matchsp[3][$i]."
				</td>";
		}
		echo "
			</tr>";
	}
	echo"
		</tbody>
	</table>
</div>";
}

// 相关搜索

if (preg_match_all("/(?<=&rs_src\=)([01]{1}\">)([\x80-\xff\w\s\.#\:\/]{0,32})(?=<\/a><\/th><)/", @$baiduserp, $matchrelated))

if (!is_null($s))
{
// 随机更换下拉框提示 IP
$sugip = array (
	'115.239.211.11',
	'115.239.211.12',
	'180.97.33.72',
	'180.97.33.73',
	'220.181.111.109',
	);
shuffle ($sugip);

 function Curl_http($array,$timeout){
 	$res = array();
 	$mh = curl_multi_init();//创建多个curl语柄
 	foreach($array as $k=>$url){
 		$conn[$k]=curl_init($url);
 
        curl_setopt($conn[$k], CURLOPT_TIMEOUT, $timeout);//设置超时时间
        curl_setopt($conn[$k], CURLOPT_USERAGENT, 'Mozilla/5.0 (compatible; MSIE 5.01; Windows NT 5.0)');
        curl_setopt($conn[$k], CURLOPT_MAXREDIRS, 7);//HTTp定向级别
        curl_setopt($conn[$k], CURLOPT_HEADER, 0);//这里不要header，加块效率
        curl_setopt($conn[$k], CURLOPT_FOLLOWLOCATION, 1); // 302 redirect
        curl_setopt($conn[$k],CURLOPT_RETURNTRANSFER,1);
        curl_multi_add_handle ($mh,$conn[$k]);
 	}
	 //防止死循环耗死cpu 这段是根据网上的写法
		do {
			$mrc = curl_multi_exec($mh,$active);//当无数据，active=true
		} while ($mrc == CURLM_CALL_MULTI_PERFORM);//当正在接受数据时
		while ($active and $mrc == CURLM_OK) {//当无数据时或请求暂停时，active=true
			if (curl_multi_select($mh) != -1) {
				do {
					$mrc = curl_multi_exec($mh, $active);
				} while ($mrc == CURLM_CALL_MULTI_PERFORM);
			}
		}
 	
 	foreach ($array as $k => $url) {
 		  curl_error($conn[$k]);
    	  $res[$k]=curl_multi_getcontent($conn[$k]);//获得返回信息
    	  curl_close($conn[$k]);//关闭语柄
    	  curl_multi_remove_handle($mh  , $conn[$k]);   //释放资源 
		}
		
		curl_multi_close($mh);
		$cache = '缓冲，防止取不到数据';

		return array($res);
 	
 }

$suggestion1 = "http://".$sugip[0]."/su?action=opensearch&ie=UTF-8&wd=";
$suggestion2 = "http://".$sugip[0]."/su?action=opensearch&ie=UTF-8&sugmode=2&wd=";
$suggestion3 = "http://".$sugip[0]."/su?ie=UTF-8&sugmode=3&p=1&wd=";

	$array = array(
				$suggestion1.$queryfilter,
				$suggestion2.$queryfilter,
				$suggestion3.$queryfilter
				);

	$data = Curl_http($array,'10');//调用
// 匹配百度搜索3种下拉框提示词
$jsonsuggestion1 = json_decode($data[0][0]);
$jsonsuggestion2 = json_decode($data[0][1]);

$baidusuggestion3 = $data[0][2];
$pattern3 = array();
$pattern3[0] = '/window\.baidu\.sug\({q:/';
$pattern3[1] = '/p:false,s:/';
$pattern3[2] = '/}\);/';
$replacement3 = array();
$replacement3[0] = '[';
$replacement3[1] = '';
$replacement3[2] = ']';
$jsonsuggestion3 = json_decode(preg_replace($pattern3, $replacement3, $baidusuggestion3));
}

if (!is_null(@$baidusuggestion3))
{
echo"
<div class=\"draglist\" draggable=\"true\">
<table>
		<thead>
				<tr>
					<th>相关搜索</th>
					<th>下拉框提示模式&nbsp;I</th>
					<th>下拉框提示模式&nbsp;II</th>
					<th><a href=\"http://ask.seowhy.com/article/109\" rel=\"external nofollow\" target=\"_blank\" title=\"百度相关提示与搜索结果标题\">下拉框提示模式&nbsp;III</a></th>
					<th>排名</th>
				</tr>
		</thead>
		<tbody>";

	{
	if
	(count($matchrelated[1]) > count($jsonsuggestion3[1]))
	$counts = count($matchrelated[1]);
	else
	$counts = count($jsonsuggestion3[1]);
	}
	for ($i = 0; $i <= $counts - 1; $i++)
	{
		echo "
			<tr class=\"back-azure\">
				<td>
					<a href=\"http://127.0.0.1/baidu-f.php?s=".@$matchrelated[2][$i]."\" target=\"_blank\">"
						.@$matchrelated[2][$i]."
					</a>
				</td>
				<td>
					<a href=\"http://127.0.0.1/baidu-f.php?s=".@$jsonsuggestion1[1][$i]."\" target=\"_blank\">"
						.@$jsonsuggestion1[1][$i]."
					</a>
				</td>
				<td>
					<a href=\"http://127.0.0.1/baidu-f.php?s=".@$jsonsuggestion2[1][$i]."\" target=\"_blank\">"
						.@$jsonsuggestion2[1][$i]."
					</a>
				</td>
				<td>
					<a href=\"http://127.0.0.1/baidu-f.php?s=".@$jsonsuggestion3[1][$i]."\" target=\"_blank\">"
						.@$jsonsuggestion3[1][$i]."
					</a>
				</td>
				<td class=\"center\">"
					.($i+1)
				."</td>
			</tr>";
	}
	echo"
		</tbody>
	</table>
</div>";
}

// 为您推荐

if (preg_match_all('/(?<=&p1\=)(\d{1,2})(\"\s\n\s+target=\"_blank\"\s\n\s+class=\"m\"\>)(.+)(<\/div><div class=\"c-gap-top c-recommend\" style=\"display:none;\" data-extquery=\")(.+)(?=\"\>\<i class=\"c-icon c-icon-bear-circle c-gap-right-small\"\>)/', @$baiduserp, $mcrq))

if (!is_null(@$mcrq))
{
	echo"
<div class=\"draglist\" draggable=\"true\">
	<table>
		<thead>
				<tr>
					<th>为您推荐</th>
					<th>排名</th>
				</tr>
		</thead>
		<tbody>";

	foreach ($mcrq[1] as $g => $position) {
		echo "
			<tr class=\"back-azure\">
				<td>";
		foreach ($mcrq[1] as $f => $position) {
			$kz = (explode('&nbsp;', $mcrq[5][$g]));
			array_pop($kz);
			echo "
					<a href=\"http://127.0.0.1/baidu-f.php?s=".@$kz[$f]."\" target=\"_blank\">"
						.@$kz[$f]
					.'</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
		}
		echo "</td>
				<td class=\"center\">"
					.@$mcrq[1][$g]
				.'</td>
			</tr>';
	}
	echo '
		</tbody>
	</table>
</div>';
}

// F

if (preg_match_all("/(?<=F':)(\s?)(')([0-9A-F]{1})([0-9A-F]{1})([0-9A-F]{1})([0-9A-F]{1})([0-9A-F]{1})([0-9A-F]{1})([0-9A-F]{1})([0-9A-F]{1})(?=',)/", @$baiduserp, $matchf))

if (!is_null($s))
{
echo"
<div class=\"draglist\" draggable=\"true\">
	<table>
		<thead>
			<tr>
				<th>$F[1]</th>
				<th>$F[2]</th>
				<th>$F[3]</th>
				<th>$F[4]</th>
				<th>$F[5]</th>
				<th>$F[6]</th>
				<th>$F[7]</th>
				<th>$F[8]</th>
				<th>F</th>
				<th>排名</th>
			</tr>
		</thead>
		<tbody class=\"center\">";

	foreach ($matchf[3] as $i => $position)
	{
		$fvalue1 = $matchf[3][$i];
		$fvalue2 = $matchf[4][$i];
		$fvalue3 = $matchf[5][$i];
		$fvalue4 = $matchf[6][$i];
		$fvalue5 = $matchf[7][$i];
		$fvalue6 = $matchf[8][$i];
		$fvalue7 = $matchf[9][$i];
		$fvalue8 = $matchf[10][$i];
		echo "
			<tr>";
		{
		if ($fvalue1 == "F")
			echo "
				<td class=\"unit-lightskyblue\">
					低
				</td>";
		elseif ($fvalue1 == "7")
			echo "
				<td class=\"unit-darkseagreen\">
					中
				</td>";
		elseif ($fvalue1 == "5")
			echo "
				<td class=\"unit-lavender\">
					较高
				</td>";
		elseif ($fvalue1 == "3")
			echo "
				<td class=\"unit-violet\">
					高
				</td>";
		else
			echo "
				<td>".$fvalue1."</td>";
		}
		{
		if ($fvalue2 == "F")
			echo "
				<td class=\"unit-lightskyblue\">
					<span title=\"百度搜索302，第一出现\">[猜]&nbsp;日本汉字</span>
				</td>";
		elseif ($fvalue2 == "7")
			echo "
				<td class=\"unit-darkseagreen\">
					不纠正
				</td>";
		elseif 	($fvalue2 == "3")
			echo "
				<td class=\"unit-violet\">
					显示纠正搜索结果
				</td>";
		else
			echo "
				<td>".$fvalue2."</td>";
		}
		{
		if 	($fvalue3 == "A")
			echo "
				<td class=\"unit-aquamarine\">
					1.&nbsp;分类信息<br />
					2.&nbsp;[猜]&nbsp;非正规
				</td>";
		elseif 	($fvalue3 == "8")
			echo "
				<td class=\"unit-mediumpurple\">
					默认
				</td>";
		elseif 	($fvalue3 == "0")
			echo "
				<td class=\"unit-honeydew\">
					[猜]&nbsp;正规影音书籍游戏软件资源
				</td>";
		else
			echo "
				<td>".$fvalue3."</td>";
		}
		{
		if 	($fvalue4 == "F")
			echo "
				<td class=\"unit-lightskyblue\">
					快
				</td>";
		elseif 	($fvalue4 == "B")
			echo "
				<td class=\"unit-springgreen\">
					较快
				</td>";
		elseif 	($fvalue4 == "7")
			echo "
				<td class=\"unit-darkseagreen\">
					中
				</td>";
		elseif 	($fvalue4 == "3")
			echo "
				<td class=\"unit-violet\">
					默认
				</td>";
		else
			echo "
				<td>".$fvalue4."</td>";
		}
		{
		if 	($fvalue5 == "3")
			echo "
				<td class=\"unit-violet\">
					最新资讯
				</td>";
		elseif 	($fvalue5 == "1")
			echo "
				<td class=\"unit-gold\">
					1
				</td>";
		else
			echo "
				<td>".$fvalue5."</td>";
		}
		{
		if 	($fvalue6 == "7")
			echo "
				<td class=\"unit-darkseagreen\">
					不限地域
				</td>";
		elseif 	($fvalue6 == "5")
			echo "
				<td class=\"unit-lavender\">
					基于&nbsp;IP&nbsp;地理位置更换结果
				</td>";
		elseif 	($fvalue6 == "3")
			echo "
				<td class=\"unit-violet\">
					[猜]&nbsp;不基于&nbsp;IP&nbsp;地理位置更换结果<br />
					但进入目标网站自会选择地域
				</td>";
		else
			echo "
				<td>".$fvalue6."</td>";
		}
		{
		if 	($fvalue7 == "F")
			echo "
				<td class=\"unit-lightskyblue\">
					<span title=\"“以下是网页中包含".$s."的结果”之上的结果\">精确匹配</span>
				</td>";
		elseif 	($fvalue7 == "E")
			echo "
				<td class=\"unit-deepskyblue\">
					不限网址
				</td>";
		elseif 	($fvalue7 == "A")
			echo "
				<td class=\"unit-aquamarine\">
					A
				</td>";
		else
			echo "
				<td>".$fvalue7."</td>";
		}
		{
		if 	($fvalue8 == "B")
			echo "
				<td class=\"unit-springgreen\">
					近义词匹配
				</td>";
		elseif 	($fvalue8 == "A")
			echo "
				<td class=\"unit-aquamarine\">
					精确匹配
				</td>";
		elseif 	($fvalue8 == "9")
			echo "
				<td class=\"unit-burlywood\">
					9
				</td>";
		elseif 	($fvalue8 == "8")
			echo "
				<td class=\"unit-mediumpurple\">
					部分匹配
				</td>";
		else
			echo "
				<td>".$fvalue8."</td>";
		}
			echo"
				<td class=\"back-pink\">".$fvalue1.$fvalue2.$fvalue3.$fvalue4.$fvalue5.$fvalue6.$fvalue7.$fvalue8."</td>
				<td class=\"back-pink\">".@$matchsrcid[3][$i]."</td>
			</tr>";
	}
	echo"
		</tbody>
	</table>
</div>";
}

// F1

if (preg_match_all("/(?<=F1':)(\s?)(')([0-9A-F]{1})([0-9A-F]{1})([0-9A-F]{1})([0-9A-F]{1})([0-9A-F]{1})([0-9A-F]{1})([0-9A-F]{1})([0-9A-F]{1})(?=',)/", @$baiduserp, $matchf1))
if (!is_null($s))
{
echo"
<div class=\"draglist\" draggable=\"true\">
	<table>
		<thead>
			<tr>
				<th>$F1[1]</th>
				<th>$F1[2]</th>
				<th>$F1[3]</th>
				<th>$F1[4]</th>
				<th>$F1[5]</th>
				<th>$F1[6]</th>
				<th>$F1[7]</th>
				<th>$F1[8]</th>
				<th>F1</th>
				<th>排名</th>
			</tr>
		</thead>
		<tbody class=\"center\">";

	foreach ($matchf1[3] as $i => $position)
	{
		$f1value1 = $matchf1[3][$i];
		$f1value2 = $matchf1[4][$i];
		$f1value3 = $matchf1[5][$i];
		$f1value4 = $matchf1[6][$i];
		$f1value5 = $matchf1[7][$i];
		$f1value6 = $matchf1[8][$i];
		$f1value7 = $matchf1[9][$i];
		$f1value8 = $matchf1[10][$i];
		echo "
		<tr>";
		{
		if ($f1value1 == "D")
			echo "
				<td class=\"unit-mediumseagreen\">
					D
				</td>";
		elseif ($f1value1 == "B")
			echo "
				<td class=\"unit-springgreen\">
					更多文库相关文档
				</td>";
		elseif ($f1value1 == "9")
			echo "
				<td class=\"unit-burlywood\">
					9
				</td>";
		else
			echo "
				<td>".$f1value1."</td>";
		}
		{
		if ($f1value2 == "D")
			echo "
				<td class=\"unit-mediumseagreen\">
					D
				</td>";
		elseif ($f1value2 == "9")
			echo "
				<td class=\"unit-burlywood\">
					[猜]&nbsp;匹配多个关键词
				</td>";
		elseif ($f1value2 == "5")
			echo "
				<td class=\"unit-lavender\">
					[猜]&nbsp;布尔匹配
				</td>";
		else
			echo "
				<td>".$f1value2."</td>";
		}
		{
		if ($f1value3 == "7")
			echo "
				<td class=\"unit-darkseagreen\">
					默认
				</td>";
		elseif ($f1value3 == "6")
			echo "
				<td class=\"unit-silver\">
					<a href=\"http://www.weixingon.com/baidusp-lm.php?s=$queryfilter&rn=100&lm=7\" target=\"_blank\" title=\"yyyy年MM月dd日|hh小时前|mm分钟前|ss秒前\">0-24小时前更新快照的网页</a>
				</td>";
		elseif ($f1value3 == "5")
			echo "
				<td class=\"unit-lavender\">
					<a href=\"http://www.weixingon.com/baidusp-lm.php?s=$queryfilter&rn=100&lm=7\" target=\"_blank\" title=\"yyyy年MM月dd日\">24-48小时前更新快照的网页</a>
				</td>";
		elseif ($f1value3 == "4")
			echo "
				<td class=\"unit-tomato\">
					<a href=\"http://www.weixingon.com/baidusp-lm.php?s=$queryfilter&rn=100&lm=7\" target=\"_blank\" title=\"yyyy年MM月dd日\">2-7天前更新快照的网页</a>
				</td>";
		else
			echo "
				<td>".$f1value3."</td>";
		}
		{
		if ($f1value4 == "3")
			echo "
				<td class=\"unit-violet\">
					默认
				</td>";
		elseif ($f1value4 == "2")
			echo "
				<td class=\"unit-orange\">
					24小时内多家同时报道
				</td>";
		elseif ($f1value4 == "0")
			echo "
				<td class=\"unit-honeydew\">
					24小时内独家
				</td>";
		else
			echo "
				<td>".$f1value4."</td>";
		}
		{
		if ($f1value5 == "F")
			echo "
				<td class=\"unit-lightskyblue\">
					高
				</td>";
		elseif ($f1value5 == "E")
			echo "
				<td class=\"unit-deepskyblue\">
					低
				</td>";
		elseif ($f1value5 == "B")
			echo "
				<td class=\"unit-springgreen\">
					更多知道相关问题
				</td>";
		else
			echo "
				<td>".$f1value5."</td>";
		}
		{
		if ($f1value6 == "5")
			echo "
				<td class=\"unit-lavender\">
					<a href=\"http://www.weixingon.com/baidusp-hot.php?s=".$queryfilter."\" target=\"_blank\" title=\"百度搜索热门词\">新热门</a>
				</td>";
		elseif ($f1value6 == "3")
			echo "
				<td class=\"unit-violet\">
					<a href=\"http://www.weixingon.com/baidusp-hot.php?s=".$queryfilter."\" target=\"_blank\" title=\"百度搜索热门词\">中热门</a>
				</td>";
		elseif ($f1value6 == "1")
			echo "
				<td class=\"unit-gold\">
					默认
				</td>";
		elseif ($f1value6 == "0")
			echo "
				<td class=\"unit-honeydew\">
					<a href=\"http://www.weixingon.com/baidusp-hot.php?s=".$queryfilter."\" target=\"_blank\" title=\"百度搜索热门词\">老热门</a>
				</td>";
		else
			echo "
				<td>".$f1value6."</td>";
		}
		{
		if ($f1value7 == "E")
			echo "
				<td class=\"unit-deepskyblue\">
					默认
				</td>";
		elseif ($f1value7 == "C")
			echo "
				<td class=\"unit-darkturquoise\">
					中
				</td>";
		elseif ($f1value7 == "6")
			echo "
				<td class=\"unit-silver\">
					低
				</td>";
		elseif ($f1value7 == "4")
			echo "
				<td class=\"unit-tomato\">
					<span title=\"百度搜索最新权威实物微信营销指南书：微信营销出现\">较低</span>
				</td>";
		else
			echo "
				<td>".$f1value7."</td>";
		}
		{
		if ($f1value8 == "6")
			echo "
				<td class=\"unit-silver\" title=\"搜索百度卫士出现，估计是网页内容完全一致，仅仅多了1个无意义的参数\">
					6
				</td>";
		elseif ($f1value8 == "4")
			echo "
				<td class=\"unit-tomato\">
					4
				</td>";
		else
			echo "
				<td>".$f1value8."</td>";
		}
			echo"
				<td class=\"back-yellow\">".$f1value1.$f1value2.$f1value3.$f1value4.$f1value5.$f1value6.$f1value7.$f1value8."</td>
				<td class=\"back-yellow\">".@$matchsrcid[3][$i]."</td>
			</tr>";
	}
	echo"
		</tbody>
	</table>
</div>";
}

// F2

if (preg_match_all("/(?<=F2':)(\s?)(')([0-9A-F]{1})([0-9A-F]{1})([0-9A-F]{1})([0-9A-F]{1})([0-9A-F]{1})([0-9A-F]{1})([0-9A-F]{1})([0-9A-F]{1})(?=',)/", @$baiduserp, $matchf2))

if (!is_null($s))
{
echo"
<div class=\"draglist\" draggable=\"true\">
<table>
		<thead>
			<tr>
				<th>$F2[1]</th>
				<th>$F2[2]</th>
				<th>$F2[3]</th>
				<th>$F2[4]</th>
				<th>$F2[5]</th>
				<th>$F2[6]</th>
				<th>$F2[7]</th>
				<th>$F2[8]</th>
				<th><a href=\"http://ask.seowhy.com/question/8709\" rel=\"external nofollow\" target=\"_blank\" title=\"百度搜索结果参数 F2 和 rsv_sug9 探讨\">F2</a></th>
				<th>排名</th>
			</tr>
		</thead>
		<tbody class=\"center\">";
	
	foreach ($matchf2[3] as $i => $position)
	{
		$f2value1 = $matchf2[3][$i];
		$f2value2 = $matchf2[4][$i];
		$f2value3 = $matchf2[5][$i];
		$f2value4 = $matchf2[6][$i];
		$f2value5 = $matchf2[7][$i];
		$f2value6 = $matchf2[8][$i];
		$f2value7 = $matchf2[9][$i];
		$f2value8 = $matchf2[10][$i];
		echo "
			<tr>";
		{
		if
			($f2value1 == "C")
			echo "
				<td class=\"unit-darkturquoise\">
					搜索结果与查询词深度相关
				</td>";
		elseif ($f2value1 == "8")
			echo "
				<td class=\"unit-mediumpurple\">
					<span title=\"只在百度搜索小米出现过\">中</span>
				</td>";
		elseif ($f2value1 == "6")
			echo "
				<td class=\"unit-silver\">
					搜索结果与查询词广度相关
				</td>";
		elseif ($f2value1 == "4")
			echo "
				<td class=\"unit-tomato\">
					默认
				</td>";
		else
			echo "
				<td>".$f2value1."</td>";
		}
		{
		if ($f2value2 == "E")
			echo "
				<td class=\"unit-deepskyblue\">
					<span title=\"百度搜索百度贴吧，nba出现\">[猜]&nbsp;搜索结果展现网址与目标网址不同</span>
				</td>";
		elseif ($f2value2 == "D")
			echo "
				<td class=\"unit-mediumseagreen\">
					<span title=\"百度搜索淘出现\">D</span>
				</td>";
		elseif ($f2value2 == "C")
			echo "
				<td class=\"unit-darkturquoise\">
					C
				</td>";
		elseif ($f2value2 == "8")
			echo "
				<td class=\"unit-darkseagreen\">
					1.&nbsp;更多贴吧相关帖子&gt;&gt;<br />
					2.&nbsp;未知
				</td>";
		else
			echo "
				<td>".$f2value2."</td>";
		}
		{
		if ($f2value3 == "E")
			echo "
				<td class=\"unit-deepskyblue\">
					<span title=\"百度搜索淘宝|淘宝网|当当网出现\">E</span>
				</td>";
		elseif ($f2value3 == "A")
			echo "
				<td class=\"unit-aquamarine\">
					A
				</td>";
		elseif ($f2value3 == "8")
			echo "
				<td class=\"unit-mediumpurple\">
					8
				</td>";
		elseif ($f2value3 == "2")
			echo "
				<td class=\"unit-gold\">
					[猜]&nbsp;直接使用网页标题
				</td>";
		else
			echo "
				<td>".$f2value3."</td>";
		}
		{
		if ($f2value4 == "7")
			echo "
				<td class=\"unit-darkseagreen\">
					[猜]&nbsp;使用百度排名点击器(搜easy)出现
				</td>";
		elseif ($f2value4 == "6")
			echo "
				<td class=\"unit-silver\">
					6
				</td>";
		else
			echo "
				<td>".$f2value4."</td>";
		}
		{
		if ($f2value5 == "D")
			echo "
				<td class=\"unit-mediumseagreen\">
					D
				</td>";
		elseif ($f2value5 == "C")
			echo "
				<td class=\"unit-darkturquoise\">
					C
				</td>";
		else
			echo "
				<td>".$f2value5."</td>";
		}
		{
		if ($f2value6 == "F")
			echo "
				<td class=\"unit-lightskyblue\">
					无
				</td>";
		elseif ($f2value6 == "E")
			echo "
				<td class=\"unit-deepskyblue\">
					少
				</td>";
		elseif ($f2value6 == "D")
			echo "
				<td class=\"unit-mediumseagreen\">
					中
				</td>";
		elseif ($f2value6 == "C")
			echo "
				<td class=\"unit-darkturquoise\">
					多
				</td>";
		else
			echo "
				<td>".$f2value6."</td>";
		}
		{
		if ($f2value7 == "E")
			echo "
				<td class=\"unit-deepskyblue\">
					链接锚文本<br />
					anchor-text
				</td>";
		elseif ($f2value7 == "6")
			echo "
				<td class=\"unit-silver\">
					无<br />
					no
				</td>";
		else
			echo "
				<td>".$f2value7."</td>";
		}
		{
		if ($f2value8 == "F")
			echo "
				<td class=\"unit-lightskyblue\">
					<a href=\"http://www.zhihu.com/question/22939567/answer/24259154\" rel=\"external nofollow\" target=\"_blank\" title=\"《seo深度解析》怎么样？\">自动判断可作标题的文本&nbsp;(-)&nbsp;网页标题</a>
				</td>";
		elseif ($f2value8 == "E")
			echo "
				<td class=\"unit-deepskyblue\">
					标题标签<br />
					heading
				</td>";
		elseif ($f2value8 == "B")
			echo "
				<td class=\"unit-springgreen\">
					网页标题<br />
					title
				</td>";
		elseif ($f2value8 == "A")
			echo "
				<td class=\"unit-aquamarine\">
					无<br />
					no
				</td>";
		elseif ($f2value8 == "8")
			echo "
				<td class=\"unit-mediumpurple\">
					网址<br />
					url
				</td>";
		else
			echo "
				<td>".$f2value8."</td>";
		}
			echo"
				<td class=\"back-green\">".$f2value1.$f2value2.$f2value3.$f2value4.$f2value5.$f2value6.$f2value7.$f2value8."</td>
				<td class=\"back-green\">".@$matchsrcid[3][$i]."</td>
			</tr>";
	}
	echo"
		</tbody>
	</table>
</div>";
}

// F3

if (preg_match_all("/(?<=F3':)(\s?)(')([0-9A-F]{1})([0-9A-F]{1})([0-9A-F]{1})([0-9A-F]{1})([0-9A-F]{1})([0-9A-F]{1})([0-9A-F]{1})([0-9A-F]{1})(?=',)/", @$baiduserp, $matchf3))

if (!is_null($s))
{
echo"
<div class=\"draglist\" draggable=\"true\">
	<table>
		<thead>
			<tr>
				<th>$F3[1]</th>
				<th>$F3[2]</th>
				<th>$F3[3]</th>
				<th>$F3[4]</th>
				<th>$F3[5]</th>
				<th>$F3[6]</th>
				<th>$F3[7]</th>
				<th>$F3[8]</th>
				<th><a href=\"http://ask.seowhy.com/article/41\" rel=\"external nofollow\" target=\"_blank\" title=\"对吴星关于“F系列”参数研究的看法\">F3</a></th>
				<th>排名</th>
			</tr>
		</thead>
		<tbody class=\"center\">";

	foreach ($matchf3[3] as $i => $position)
	{
		$f3value1 = $matchf3[3][$i];
		$f3value2 = $matchf3[4][$i];
		$f3value3 = $matchf3[5][$i];
		$f3value4 = $matchf3[6][$i];
		$f3value5 = $matchf3[7][$i];
		$f3value6 = $matchf3[8][$i];
		$f3value7 = $matchf3[9][$i];
		$f3value8 = $matchf3[10][$i];
		echo "
			<tr>";
		{
		if
			($f3value1 == "D")
			echo "
				<td class=\"unit-mediumseagreen\">
					D
				</td>";
		elseif ($f3value1 == "5")
			echo "
				<td class=\"unit-lavender\">
					5
				</td>";
		else
			echo "
				<td>".$f3value1."</td>";
		}
		{
		if ($f3value2 == "4")
			echo "
				<td class=\"unit-tomato\">
					4
				</td>";
		else
			echo "
				<td>".$f3value2."</td>";
		}
		{
		if ($f3value3 == "F")
			echo "
				<td class=\"unit-lightskyblue\">
					<span title=\"百度搜索合肥SEO出现\">F</span>
				</td>";
		elseif ($f3value3 == "E")
			echo "
				<td class=\"unit-deepskyblue\">
					E
				</td>";
		else
			echo "
				<td>".$f3value3."</td>";
		}
		{
		if ($f3value4 == "7")
			echo "
				<td class=\"unit-darkseagreen\">
					最低<br />
					8 级
				</td>";
		elseif ($f3value4 == "6")
			echo "
				<td class=\"unit-silver\">
					7 级
				</td>";
		elseif ($f3value4 == "5")
			echo "
				<td class=\"unit-lavender\">
					默认<br />
					6 级
				</td>";
		elseif ($f3value4 == "3")
			echo "
				<td class=\"unit-violet\">
					星火计划 [原创]<br />
					4 级
				</td>";
		elseif ($f3value4 == "2")
			echo "
				<td class=\"unit-orange\">
					星火计划 [原创]<br />
					3 级
				</td>";
		elseif ($f3value4 == "1")
			echo "
				<td class=\"unit-gold\">
					星火计划 [原创]<br />
					2 级
				</td>";
		elseif ($f3value4 == "0")
			echo "
				<td class=\"unit-honeydew\">
					星火计划 [原创]<br />
					最高<br />
					1 级
				</td>";
		else
			echo "
				<td>".$f3value4."</td>";
		}
		{
		if ($f3value5 == "B")
			echo "
				<td class=\"unit-springgreen\">
					目录|详情页<br />
					优先级较高
				</td>";
		elseif ($f3value5 == "A")
			echo "
				<td class=\"unit-aquamarine\">
					主域名、子域名<br />
					优先级较高<br />
					或内容相对充实的目录、详情页
				</td>";
		elseif ($f3value5 == "6")
			echo "
				<td class=\"unit-violet\">
					6
				</td>";
		elseif ($f3value5 == "3")
			echo "
				<td class=\"unit-violet\">
					目录|详情页<br />
					优先级较低
				</td>";
		elseif ($f3value5 == "2")
			echo "
				<td class=\"unit-orange\">
					主域名、子域名<br />
					优先级较低<br />
					或内容相对充实的目录、详情页
				</td>";
		elseif ($f3value5 == "1")
			echo "
				<td class=\"unit-gold\">
					1
				</td>";
		elseif ($f3value5 == "0")
			echo "
				<td class=\"unit-honeydew\">
					0
				</td>";
		else
			echo "
				<td>".$f3value5."</td>";
		}
		{
		if ($f3value6 == "C")
			echo "
				<td class=\"unit-darkturquoise\">
					C
				</td>";
		elseif ($f3value6 == "6")
			echo "
				<td class=\"unit-silver\">
					6
				</td>";
		elseif ($f3value6 == "4")
			echo "
				<td class=\"unit-tomato\">
					4
				</td>";
		elseif ($f3value6 == "2")
			echo "
				<td class=\"unit-orange\">
					2
				</td>";
		elseif ($f3value6 == "0")
			echo "
				<td class=\"unit-honeydew\">
					<span title=\"百度搜索杨澜爸爸|第一女神出现\">在大有同义词的搜索结果页<br />完全匹配查询词</span>
				</td>";
		else
			echo "
				<td>".$f3value6."</td>";
		}
		{
		if ($f3value7 == "3")
			echo "
				<td class=\"unit-violet\">
					3
				</td>";
		elseif ($f3value7 == "2")
			echo "
				<td class=\"unit-orange\">
					2
				</td>";
		elseif ($f3value7 == "1")
			echo "
				<td class=\"unit-gold\">
					<span title=\"搜索微信开发源代码出现\">1</span>
				</td>";
		else
			echo "
				<td>".$f3value7."</td>";
		}
		{
		if ($f3value8 == "F")
			echo "
				<td class=\"unit-lightskyblue\">
					精确匹配
				</td>";
		elseif ($f3value8 == "E")
			echo "
				<td class=\"unit-deepskyblue\">
					近义词匹配
				</td>";
		elseif ($f3value8 == "D")
			echo "
				<td class=\"unit-mediumseagreen\">
					D
				</td>";
		elseif ($f3value8 == "C")
			echo "
				<td class=\"unit-darkturquoise\">
					C
				</td>";
		elseif ($f3value8 == "7")
			echo "
				<td class=\"unit-darkseagreen\">
					匹配网址
				</td>";
		elseif ($f3value8 == "6")
			echo "
				<td class=\"unit-silver\">
					6
				</td>";
		elseif ($f3value8 == "5")
			echo "
				<td class=\"unit-lavender\">
					近似匹配
				</td>";
		else
			echo "
				<td>".$f3value8."</td>";
		}
			echo"
				<td class=\"back-blue\">".$f3value1.$f3value2.$f3value3.$f3value4.$f3value5.$f3value6.$f3value7.$f3value8."</td>
				<td class=\"back-blue\">".@$matchsrcid[3][$i]."</td>
			</tr>";
	}
	echo"
		</tbody>
	</table>
</div>";
}

// y
if (preg_match_all("/(?<='y':')([0-9A-F]{8})(?=')/", @$baiduserp, $matchy))

// 百度快照

if (preg_match_all("/(?<= class=\"g\">)([\x80-\xff\w\-\/\.<>]+)(&nbsp;)([\d\-\x80-\xff]+)(?=&nbsp;<)/", $baiduserp, $matchurltime))

// template

if (preg_match_all("/(?<=\" tpl\=\")([0-9a-z_]{3,28})(?=\")/", $baiduserp, $matchtemplate))

// 解释模版

if (!is_null($s))
{
echo"
<div class=\"draglist\" draggable=\"true\">
	<table>
		<thead>
			<tr>
				<th>解释模版</th>
				<th>模版 template</th>
				<th>$y</th>
				<th>$urltime</th>
				<th>排序</th>
			</tr>
		</thead>
		<tbody>";

	foreach ($matchtemplate[1] as $i => $position)
	{
		$template = $matchtemplate[1][$i];
		echo "
			<tr class=\"back-sky\">";
		{
		if ($template == "zx_zhidaokv")
			echo "
				<td>
					知心_百度知道关键词展现
				</td>";
		elseif ($template == "zx_tv_video")
			echo "
				<td>
					知心_电视剧_百度视频
				</td>";
		elseif ($template == "zx_tuan_cinema")
			echo "
				<td>
					知心_百度团购_影片
				</td>";
		elseif ($template == "zx_tour_map_v2")
			echo "
				<td>
					知心_百度旅游_地图_第&nbsp;2&nbsp;版
				</td>";
		elseif ($template == "zx_tour_intro_v2")
			echo "
				<td>
					知心_百度旅游_介绍_第&nbsp;2&nbsp;版
				</td>";
		elseif ($template == "zx_tour_intro")
			echo "
				<td>
					知心_百度旅游_介绍
				</td>";
		elseif ($template == "zx_mussong")
			echo "
				<td>
					知心_百度音乐
				</td>";
		elseif ($template == "zx_meddeptdoc")
			echo "
				<td>
					知心_医院科室文档
				</td>";
		elseif ($template == "zx_medbaike")
			echo "
				<td>
					知心_百度医疗百科
				</td>";
		elseif ($template == "zx_illness2")
			echo "
				<td>
					知心_第&nbsp;2&nbsp;种疾病
				</td>";
		elseif ($template == "zx_hospwebsite")
			echo "
				<td>
					知心_医院网站
				</td>";
		elseif ($template == "zx_hospolregbj")
			echo "
				<td>
					知心_医院在线挂号北京
				</td>";
		elseif ($template == "zx_hospolreg")
			echo "
				<td>
					知心_医院在线挂号
				</td>";
		elseif ($template == "zx_hospdept")
			echo "
				<td>
					知心_医院科室
				</td>";
		elseif ($template == "zx_eduexam")
			echo "
				<td>
					知心_教育考试
				</td>";
		elseif ($template == "zx_cinema")
			echo "
				<td>
					知心_影片
				</td>";
		elseif ($template == "zhidao_lawyer")
			echo "
				<td>
					百度知道_律师
				</td>";
		elseif ($template == "zhidao")
			echo "
				<td>
					百度知道
				</td>";
		elseif ($template == "zhaopinhui")
			echo "
				<td>
					招聘会
				</td>";
		elseif ($template == "zhaopin")
			echo "
				<td>
					百度招聘
				</td>";
		elseif ($template == "worldtime")
			echo "
				<td>
					世界时间
				</td>";
		elseif ($template == "worldcup_table")
			echo "
				<td>
					世界杯&nbsp;表格
				</td>";
		elseif ($template == "worldcup_news")
			echo "
				<td>
					世界杯&nbsp;新闻
				</td>";
		elseif ($template == "worldcup1")
			echo "
				<td>
					第&nbsp;1&nbsp;种世界杯
				</td>";
		elseif ($template == "wenku_org")
			echo "
				<td>
					百度文库_认证机构
				</td>";
		elseif ($template == "weather4_twoico_simple")
			echo "
				<td>
					左侧天气预报4_2个图标_简单
				</td>";
		elseif ($template == "weather4_twoicon")
			echo "
				<td>
					左侧天气预报4_2个图标
				</td>";
		elseif ($template == "view_pic")
			echo "
				<td>
					展现_图片
				</td>";
		elseif ($template == "viewpoints_multi")
			echo "
				<td>
					展现观点_多样化
				</td>";
		elseif ($template == "videoidea")
			echo "
				<td>
					视频印象
				</td>";
		elseif ($template == "video_kv")
			echo "
				<td>
					百度视频_关键词展现
				</td>";
		elseif ($template == "vd_mininewest")
			echo "
				<td>
					百度视频_迷你最新
				</td>";
		elseif ($template == "vd_tamasha")
			echo "
				<td>
					百度视频_娱乐节目
				</td>";
		elseif ($template == "vd_sitcom")
			echo "
				<td>
					百度视频_情景喜剧
				</td>";
		elseif ($template == "vd_comic")
			echo "
				<td>
					百度视频_动漫
				</td>";
		elseif ($template == "vd_baidu")
			echo "
				<td>
					百度视频
				</td>";
		elseif ($template == "url3")
			echo "
				<td>
					[猜]&nbsp;电子书
				</td>";
		elseif ($template == "url")
			echo "
				<td>
					无加密置顶链接，不过权重比较低可能不会置顶
				</td>";
		elseif ($template == "university")
			echo "
				<td>
					大学
				</td>";
		elseif ($template == "unit")
			echo "
				<td>
					单位
				</td>";
		elseif ($template == "tvplay")
			echo "
				<td>
					电视播放
				</td>";
		elseif ($template == "tv05")
			echo "
				<td>
					电视05
				</td>";
		elseif ($template == "tuangou")
			echo "
				<td>
					百度团购
				</td>";
		elseif ($template == "trust")
			echo "
				<td>
					信用
				</td>";
		elseif ($template == "travel")
			echo "
				<td>
					旅游
				</td>";
		elseif ($template == "traintimetable05")
			echo "
				<td>
					第&nbsp;5&nbsp;种列车时刻表
				</td>";
		elseif ($template == "traintimetable04")
			echo "
				<td>
					第&nbsp;4&nbsp;种列车时刻表
				</td>";
		elseif ($template == "traintimetable03")
			echo "
				<td>
					第&nbsp;3&nbsp;种列车时刻表
				</td>";
		elseif ($template == "translation")
			echo "
				<td>
					翻译
				</td>";
		elseif ($template == "tour_spot")
			echo "
				<td>
					旅游_圆点
				</td>";
		elseif ($template == "tour_aim")
			echo "
				<td>
					旅游_目的地
				</td>";
		elseif ($template == "ting_album")
			echo "
				<td>
					听_专辑
				</td>";
		elseif ($template == "timeliness_news2")
			echo "
				<td>
					时间轴_第&nbsp;2&nbsp;种新闻
				</td>";
		elseif ($template == "timeliness_news")
			echo "
				<td>
					时间轴_新闻
				</td>";
		elseif ($template == "tieba_star")
			echo "
				<td>
					百度贴吧_明星
				</td>";
		elseif ($template == "tieba_novel")
			echo "
				<td>
					百度贴吧_小说
				</td>";
		elseif ($template == "tieba_live")
			echo "
				<td>
					百度贴吧_直播
				</td>";
		elseif ($template == "tieba2")
			echo "
				<td>
					第&nbsp;2&nbsp;种百度贴吧
				</td>";
		elseif ($template == "tieba")
			echo "
				<td>
					贴吧
				</td>";
		elseif ($template == "tieba_offical")
			echo "
				<td>
					百度贴吧_官方
				</td>";
		elseif ($template == "tieba_kv2")
			echo "
				<td>
					百度贴吧_第&nbsp;2&nbsp;种关键词展现
				</td>";
		elseif ($template == "tieba_kv")
			echo "
				<td>
					百度贴吧_关键词展现
				</td>";
		elseif ($template == "text04")
			echo "
				<td>
					文本&nbsp;04
				</td>";
		elseif ($template == "text02")
			echo "
				<td>
					文本&nbsp;02
				</td>";
		elseif ($template == "text01")
			echo "
				<td>
					文本&nbsp;01
				</td>";
		elseif ($template == "table09")
			echo "
				<td>
					表格&nbsp;09
				</td>";
		elseif ($template == "table08new")
			echo "
				<td>
					表格&nbsp;08&nbsp;新
				</td>";
		elseif ($template == "table05")
			echo "
				<td>
					表格&nbsp;05
				</td>";
		elseif ($template == "table03")
			echo "
				<td>
					表格&nbsp;03
				</td>";
		elseif ($template == "table02")
			echo "
				<td>
					表格&nbsp;02
				</td>";
		elseif ($template == "table01")
			echo "
				<td>
					表格&nbsp;01
				</td>";
		elseif ($template == "superson_ipush")
			echo "
				<td>
					[猜]&nbsp;超级子链_ipush
				</td>";
		elseif ($template == "stockdynamic")
			echo "
				<td>
					股票实时行情
				</td>";
		elseif ($template == "staralbum")
			echo "
				<td>
					明星相册
				</td>";
		elseif ($template == "sport_game")
			echo "
				<td>
					体育_游戏
				</td>";
		elseif ($template == "sp_weibo")
			echo "
				<td>
					百度搜索产品_最新微博结果
				</td>";
		elseif ($template == "sp_realtime")
			echo "
				<td>
					百度搜索产品_最新相关信息
				</td>";
		elseif ($template == "sp_img")
			echo "
				<td>
					百度搜索产品_图片
				</td>";
		elseif ($template == "sp_fanyi")
			echo "
				<td>
					百度搜索产品_翻译
				</td>";
		elseif ($template == "sohugeneral")
			echo "
				<td>
					搜狐通用结果
				</td>";
		elseif ($template == "sohu")
			echo "
				<td>
					搜狐
				</td>";
		elseif ($template == "softdown")
			echo "
				<td>
					软件下载
				</td>";
		elseif ($template == "soft")
			echo "
				<td>
					软件
				</td>";
		elseif ($template == "singer")
			echo "
				<td>
					歌手
				</td>";
		elseif ($template == "singlevideo")
			echo "
				<td>
					单视频
				</td>";
		elseif ($template == "site")
			echo "
				<td>
					站点(站点信息)
				</td>";
		elseif ($template == "shares_simple")
			echo "
				<td>
					股票_简单
				</td>";
		elseif ($template == "se_st_single_video_zhanzhang")
			echo "
				<td>
					搜索引擎_结构化数据_单一_视频_站长
				</td>";
		elseif ($template == "se_st_robots")
			echo "
				<td>
					搜索引擎_结构化数据_限制
				</td>";
		elseif ($template == "se_st_image_baike")
			echo "
				<td>
					搜索引擎_结构化数据_图像_百度百科
				</td>";
		elseif ($template == "se_st_guanwang")
			echo "
				<td>
					搜索引擎_结构化数据_官网
				</td>";
		elseif ($template == "se_st_gallery")
			echo "
				<td>
					搜索引擎_结构化数据_相册
				</td>";
		elseif ($template == "se_st_default")
			echo "
				<td>
					搜索引擎_结构化数据_默认
				</td>";
		elseif ($template == "se_st_com_abstract")
			echo "
				<td>
					搜索引擎_结构化数据_网站_摘要
				</td>";
		elseif ($template == "se_st_cinecism")
			echo "
				<td>
					搜索引擎_结构化数据_影评
				</td>";
		elseif ($template == "se_st_baike")
			echo "
				<td>
					搜索引擎_结构化数据_百度百科
				</td>";
		elseif ($template == "seriesmovie")
			echo "
				<td>
					同系列电影
				</td>";
		elseif ($template == "se_com_structure_img")
			echo "
				<td>
					搜索引擎_网站_结构化数据_图片
				</td>";
		elseif ($template == "se_com_default")
			echo "
				<td>
					搜索引擎_网站_默认
				</td>";
		elseif ($template == "se_as_zhidaoaladdin")
			echo "
				<td>
					搜索引擎_[猜]&nbsp;普通搜索结果_百度知道阿拉丁
				</td>";
		elseif ($template == "se_as_default")
			echo "
				<td>
					搜索引擎_[猜]&nbsp;普通搜索结果_默认
				</td>";
		elseif ($template == "sam_weibo")
			echo "
				<td>
					[猜]&nbsp;保密算法md5_微博
				</td>";
		elseif ($template == "sam_showurl_renzheng")
			echo "
				<td>
					[猜]&nbsp;保密算法md5_展现网址_认证
				</td>";
		elseif ($template == "sam_showurl_fanyi")
			echo "
				<td>
					[猜]&nbsp;保密算法md5_展现网址_反义
				</td>";
		elseif ($template == "right_worldcup_countdown")
			echo "
				<td class=\"back-gold\">
					右侧_世界杯_倒计时
				</td>";
		elseif ($template == "right_toplist")
			echo "
				<td class=\"back-gold\">
					右侧_百度风云榜
				</td>";
		elseif ($template == "right_topic")
			echo "
				<td class=\"back-gold\">
					右侧_专题
				</td>";
		elseif ($template == "right_timeliness")
			echo "
				<td class=\"back-gold\">
					右侧_时效性结果
				</td>";
		elseif ($template == "right_timeline_blue")
			echo "
				<td class=\"back-gold\">
					右侧_时间轴_事件脉络
				</td>";
		elseif ($template == "right_tabs")
			echo "
				<td class=\"back-gold\">
					[猜]&nbsp;右侧_标签(深度合作)
				</td>";
		elseif ($template == "right_singlepoint_hot")
			echo "
				<td class=\"back-gold\">
					[猜]&nbsp;右侧_单坐标_热门
				</td>";
		elseif ($template == "right_shijiebei_ci")
			echo "
				<td class=\"back-gold\">
					右侧_世界杯_谈资
				</td>";
		elseif ($template == "right_result")
			echo "
				<td class=\"back-gold\">
					右侧_结果
				</td>";
		elseif ($template == "right_relatable")
			echo "
				<td class=\"back-gold\">
					右侧_相关表格
				</td>";
		elseif ($template == "right_relaperson")
			echo "
				<td class=\"back-gold\">
					右侧_知心相关结果
				</td>";
		elseif ($template == "right_recommends")
			echo "
				<td class=\"back-gold\">
					右侧_推荐
				</td>";
		elseif ($template == "right_qunar_dujia")
			echo "
				<td class=\"back-gold\">
					右侧_去哪儿_度假
				</td>";
		elseif ($template == "right_pregnancyv")
			echo "
				<td class=\"back-gold\">
					右侧_妊娠|考试
				</td>";
		elseif ($template == "right_personinfo")
			echo "
				<td class=\"back-gold\">
					右侧_生活信息
				</td>";
		elseif ($template == "right_offical")
			echo "
				<td class=\"back-gold\">
					右侧_官方信息
				</td>";
		elseif ($template == "right_novel")
			echo "
				<td class=\"back-gold\">
					右侧_小说
				</td>";
		elseif ($template == "right_newaction")
			echo "
				<td class=\"back-gold\">
					右侧_新动作
				</td>";
		elseif ($template == "right_nba")
			echo "
				<td class=\"back-gold\">
					右侧_NBA
				</td>";
		elseif ($template == "right_musichot")
			echo "
				<td class=\"back-gold\">
					右侧_热门歌曲
				</td>";
		elseif ($template == "right_medreladept")
			echo "
				<td class=\"back-gold\">
					右侧_医疗相关科室
				</td>";
		elseif ($template == "right_links")
			echo "
				<td class=\"back-gold\">
					右侧_链接(工具导航)
				</td>";
		elseif ($template == "right_law")
			echo "
				<td class=\"back-gold\">
					右侧_法律
				</td>";
		elseif ($template == "right_jigou_danpoi")
			echo "
				<td class=\"back-gold\">
					右侧_机构_单点地图信息
				</td>";
		elseif ($template == "right_hotlist")
			echo "
				<td class=\"back-gold\">
					右侧_热门列表
				</td>";
		elseif ($template == "right_favorvideo")
			echo "
				<td class=\"back-gold\">
					右侧_喜欢的视频
				</td>";
		elseif ($template == "right_examtimeline")
			echo "
				<td class=\"back-gold\">
					右侧_考试时间线
				</td>";
		elseif ($template == "right_entity")
			echo "
				<td class=\"back-gold\">
					右侧_实体
				</td>";
		elseif ($template == "right_commontable")
			echo "
				<td class=\"back-gold\">
					右侧_普通表格
				</td>";
		elseif ($template == "right_chunjie2013")
			echo "
				<td class=\"back-gold\">
					右侧_2013春节
				</td>";
		elseif ($template == "right_bless")
			echo "
				<td class=\"back-gold\">
					右侧_祈福
				</td>";
		elseif ($template == "right_birthday")
			echo "
				<td class=\"back-gold\">
					右侧_生日
				</td>";
		elseif ($template == "right_article")
			echo "
				<td class=\"back-gold\">
					右侧_文章(站长资讯)
				</td>";
		elseif ($template == "renrenname")
			echo "
				<td>
					人人网同名搜索
				</td>";
		elseif ($template == "realtime_kv")
			echo "
				<td>
					最新相关消息_关键词展现
				</td>";
		elseif ($template == "realtime_image")
			echo "
				<td>
					最新图片
				</td>";
		elseif ($template == "realtimetraffic")
			echo "
				<td>
					实时路况
				</td>";
		elseif ($template == "qunar_menpiao02")
			echo "
				<td>
					去哪儿_第&nbsp;3&nbsp;种门票
				</td>";
		elseif ($template == "qunar_flight03")
			echo "
				<td>
					去哪儿_第&nbsp;3&nbsp;种机票
				</td>";
		elseif ($template == "qunar_dujia06")
			echo "
				<td>
					去哪儿_第&nbsp;6&nbsp;种度假
				</td>";
		elseif ($template == "qunar_dujia05")
			echo "
				<td>
					去哪儿_第&nbsp;5&nbsp;种度假
				</td>";
		elseif ($template == "qunar_dujia03")
			echo "
				<td>
					去哪儿_第&nbsp;3&nbsp;种度假
				</td>";
		elseif ($template == "qunar_dujia01")
			echo "
				<td>
					去哪儿_第&nbsp;1&nbsp;种度假
				</td>";
		elseif ($template == "qidian2")
			echo "
				<td>
					第&nbsp;2&nbsp;种起点结果
				</td>";
		elseif ($template == "qidian")
			echo "
				<td>
					起点结果
				</td>";
		elseif ($template == "pic01")
			echo "
				<td>
					第&nbsp;1&nbsp;种图片
				</td>";
		elseif ($template == "piao")
			echo "
				<td>
					百度票务
				</td>";
		elseif ($template == "pcsoft")
			echo "
				<td>
					电脑软件
				</td>";
		elseif ($template == "offical_weibo")
			echo "
				<td>
					官方_微博
				</td>";
		elseif ($template == "normalresult02")
			echo "
				<td>
					正常结果&nbsp;02
				</td>";
		elseif ($template == "normal_link")
			echo "
				<td>
					正常_链接
				</td>";
		elseif ($template == "newtv0502")
			echo "
				<td>
					新电视&nbsp;05&nbsp;02
				</td>";
		elseif ($template == "newflight")
			echo "
				<td>
					新航班
				</td>";
		elseif ($template == "nbaseason")
			echo "
				<td>
					NBA赛季
				</td>";
		elseif ($template == "naturalresult")
			echo "
				<td>
					自然结果
				</td>";
		elseif ($template == "music_kv")
			echo "
				<td>
					百度音乐_关键词展现
				</td>";
		elseif ($template == "movievideo")
			echo "
				<td>
					电影视频
				</td>";
		elseif ($template == "mobilephone")
			echo "
				<td>
					移动电话
				</td>";
		elseif ($template == "minisearch")
			echo "
				<td>
					百度购物搜索迷你搜索
				</td>";
		elseif ($template == "matchresult")
			echo "
				<td>
					一般比赛
				</td>";
		elseif ($template == "matchgeneral")
			echo "
				<td>
					一般比赛
				</td>";
		elseif ($template == "map_subway")
			echo "
				<td>
					百度地图_地铁
				</td>";
		elseif ($template == "map_singlepoint")
			echo "
				<td>
					百度地图_单地点
				</td>";
		elseif ($template == "mapdots")
			echo "
				<td>
					百度地图圆点
				</td>";
		elseif ($template == "mapcity")
			echo "
				<td>
					百度地图城市
				</td>";
		elseif ($template == "map_city")
			echo "
				<td>
					百度地图_城市|省份
				</td>";
		elseif ($template == "macao_permit")
			echo "
				<td>
					[猜]&nbsp;马槽_许可证
				</td>";
		elseif ($template == "liarphone2")
			echo "
				<td>
					第&nbsp;2&nbsp;种骚扰电话
				</td>";
		elseif ($template == "koubei")
			echo "
				<td>
					百度口碑
				</td>";
		elseif ($template == "kefu3")
			echo "
				<td>
					第&nbsp;3&nbsp;种客服电话
				</td>";
		elseif ($template == "kefu2")
			echo "
				<td>
					第&nbsp;2&nbsp;种客服电话
				</td>";
		elseif ($template == "kefu_table")
			echo "
				<td>
					客服电话_表
				</td>";
		elseif ($template == "kefu")
			echo "
				<td>
					客服电话
				</td>";
		elseif ($template == "jingyan_summary")
			echo "
				<td>
					百度经验_组图
				</td>";
		elseif ($template == "img_star")
			echo "
				<td>
					百度图片_明星
				</td>";
		elseif ($template == "img_spot")
			echo "
				<td>
					百度图片_景点
				</td>";
		elseif ($template == "img_dress")
			echo "
				<td>
					百度图片_裙子
				</td>";
		elseif ($template == "img_car")
			echo "
				<td>
					百度图片_汽车
				</td>";
		elseif ($template == "image_kv")
			echo "
				<td>
					百度图片_关键词展现
				</td>";
		elseif ($template == "hotmovie")
			echo "
				<td>
					热映电影
				</td>";
		elseif ($template == "hospital")
			echo "
				<td>
					医院
				</td>";
		elseif ($template == "hao123_table")
			echo "
				<td>
					hao123网址之家_表格
				</td>";
		elseif ($template == "guahao")
			echo "
				<td>
					挂号
				</td>";
		elseif ($template == "generalqa")
			echo "
				<td>
					一般问答
				</td>";
		elseif ($template == "gamegear2")
			echo "
				<td>
					第&nbsp;2&nbsp;种游戏齿轮
				</td>";
		elseif ($template == "game01")
			echo "
				<td>
					第&nbsp;1&nbsp;种游戏
				</td>";
		elseif ($template == "fontconversion04")
			echo "
				<td>
					字体转换04
				</td>";
		elseif ($template == "flight2")
			echo "
				<td>
					飞机2
				</td>";
		elseif ($template == "exrate")
			echo "
				<td>
					汇率
				</td>";
		elseif ($template == "express_delivery")
			echo "
				<td>
					捷运_快递
				</td>";
		elseif ($template == "exactqa_spp")
			echo "
				<td>
					精准问答_搜索产品页
				</td>";
		elseif ($template == "exactqa")
			echo "
				<td>
					精准问答
				</td>";
		elseif ($template == "entity_clusters")
			echo "
				<td>
					实例&nbsp;团体
				</td>";
		elseif ($template == "email3")
			echo "
				<td>
					第&nbsp;3&nbsp;种电子邮件
				</td>";
		elseif ($template == "ecr_web_game_platform")
			echo "
				<td class=\"back-gold\">
					百度知心商业体系右侧_网页_游戏_平台
				</td>";
		elseif ($template == "ecr_web_game_gn_servers_biz")
			echo "
				<td class=\"back-gold\">
					百度知心商业体系右侧_网页_游戏_一般_服务器_商业
				</td>";
		elseif ($template == "ecr_web_game_gn_gift2")
			echo "
				<td class=\"back-gold\">
					百度知心商业体系右侧_网页_游戏_一般_第&nbsp;2&nbsp;种礼包
				</td>";
		elseif ($template == "ecr_wealth_small")
			echo "
				<td class=\"back-gold\">
					百度知心商业体系右侧_财富_小
				</td>";
		elseif ($template == "ecr_temai_recommend_lst_exp2")
			echo "
				<td class=\"back-gold\">
					百度知心商业体系右侧_百度特卖_列表_第&nbsp;2&nbsp;种展示
				</td>";
		elseif ($template == "ecr_pc_game_recommend")
			echo "
				<td class=\"back-gold\">
					百度知心商业体系右侧_电脑_游戏_推荐
				</td>";
		elseif ($template == "ecr_pc_game_gn_top_game")
			echo "
				<td class=\"back-gold\">
					百度知心商业体系右侧_电脑_游戏_一般_热门_游戏
				</td>";
		elseif ($template == "ecr_pc_game_gn_servers")
			echo "
				<td class=\"back-gold\">
					百度知心商业体系右侧_电脑_游戏_一般_服务器
				</td>";
		elseif ($template == "ecl_web_game_platform")
			echo "
				<td>
					百度知心商业体系左侧_网页_游戏_平台
				</td>";
		elseif ($template == "ecl_wealth_list")
			echo "
				<td>
					百度知心商业体系左侧_百度财富_列表
				</td>";
		elseif ($template == "ecl_tour")
			echo "
				<td>
					百度知心商业体系左侧_百度旅游_
				</td>";
		elseif ($template == "ecl_tg_weigou_brandsale_exp2")
			echo "
				<td>
					百度知心商业体系左侧_百度团购_百度微购_品牌特卖_第 2 种表达
				</td>";
		elseif ($template == "ecl_tg_weigou_brandsale_exp")
			echo "
				<td>
					百度知心商业体系左侧_百度团购_百度微购_品牌特卖_表达
				</td>";
		elseif ($template == "ecl_tg_home_grid")
			echo "
				<td>
					百度知心商业体系左侧_百度团购_主页_格子
				</td>";
		elseif ($template == "ecl_pc_game_platform")
			echo "
				<td>
					百度知心左侧_电脑_游戏_平台
				</td>";
		elseif ($template == "ecl_pc_game_general_games")
			echo "
				<td>
					百度知心商业体系左侧_电脑_游戏_一般_游戏
				</td>";
		elseif ($template == "ecl_med_mix")
			echo "
				<td>
					百度知心商业体系左侧_药物_混合
				</td>";
		elseif ($template == "ecl_health_women")
			echo "
				<td>
					百度知心商业体系左侧_健康_女性
				</td>";
		elseif ($template == "ecl_health_operation_pic")
			echo "
				<td>
					百度知心商业体系左侧_健康_手术_图片
				</td>";
		elseif ($template == "ecl_health_mix_page")
			echo "
				<td>
					百度知心商业体系左侧_健康_混合_页面
				</td>";
		elseif ($template == "ecl_health_mix")
			echo "
				<td>
					百度知心商业体系左侧_健康_混合
				</td>";
		elseif ($template == "ecl_health_knowledge_pic")
			echo "
				<td>
					百度知心商业体系左侧_健康_知识_图片
				</td>";
		elseif ($template == "ecl_game_zone")
			echo "
				<td>
					百度知心商业体系左侧_游戏_专区
				</td>";
		elseif ($template == "ecl_game_start")
			echo "
				<td>
					百度知心商业体系左侧_游戏_开始
				</td>";
		elseif ($template == "ecl_game_download")
			echo "
				<td>
					百度知心商业体系左侧_游戏_下载
				</td>";
		elseif ($template == "ecl_edu_examine")
			echo "
				<td>
					百度知心商业体系左侧_教育_考试
				</td>";
		elseif ($template == "ecl_edu_course_test")
			echo "
				<td>
					百度知心商业体系左侧_教育_课程_测试
				</td>";
		elseif ($template == "ecl_edu_course_mini")
			echo "
				<td>
					百度知心商业体系左侧_教育_课程_迷你
				</td>";
		elseif ($template == "ecl_edu_abroad_image")
			echo "
				<td>
					百度知心商业体系左侧_教育_留学_图片
				</td>";
		elseif ($template == "ecl_ec_weigou_b")
			echo "
				<td>
					百度知心商业体系左侧_电子_百度微购_报价、参数、评论
				</td>";
		elseif ($template == "ecl_ec_weigou")
			echo "
				<td>
					百度知心商业体系左侧_电子_百度微购
				</td>";
		elseif ($template == "ecl_ec_spu_type")
			echo "
				<td>
					百度知心商业体系左侧_电子_标准化产品单位_型号
				</td>";
		elseif ($template == "ecl_ec_spu_series")
			echo "
				<td>
					百度知心商业体系左侧_电子_标准化产品单位_系列
				</td>";
		elseif ($template == "ecl_ec_single_sku")
			echo "
				<td>
					百度知心商业体系左侧_电子_单一_标准化产品单位
				</td>";
		elseif ($template == "ecl_ec_book_list")
			echo "
				<td>
					百度知心商业体系左侧_电子_书籍_列表
				</td>";
		elseif ($template == "ecl_edu_orgname")
			echo "
				<td>
					百度知心商业体系左侧_教育_机构名称
				</td>";
		elseif ($template == "ecl_edu_abroad_info")
			echo "
				<td>
					百度知心商业体系左侧_教育_海外_信息
				</td>";
		elseif ($template == "digital_series")
			echo "
				<td>
					数码_系列
				</td>";
		elseif ($template == "digital_comment")
			echo "
				<td>
					数码_点评
				</td>";
		elseif ($template == "digital_base_jgh")
			echo "
				<td>
					数码_基础_结构化
				</td>";
		elseif ($template == "dict3")
			echo "
				<td>
					第&nbsp;3&nbsp;种百度翻译
				</td>";
		elseif ($template == "dianqidaogou01")
			echo "
				<td>
					中关村在线电器导购 01
				</td>";
		elseif ($template == "definitive_answer_po")
			echo "
				<td>
					确定_答案_po
				</td>";
		elseif ($template == "credit")
			echo "
				<td>
					贷款
				</td>";
		elseif ($template == "cj_general")
			echo "
				<td>
					[猜]&nbsp;采集_一般
				</td>";
		elseif ($template == "china_voice")
			echo "
				<td>
					中国好声音
				</td>";
		elseif ($template == "chinavoice_step")
			echo "
				<td>
					中国好声音_比赛进程
				</td>";
		elseif ($template == "charitytelephone")
			echo "
				<td>
					慈善电话
				</td>";
		elseif ($template == "charity")
			echo "
				<td>
					慈善
				</td>";
		elseif ($template == "cee2")
			echo "
				<td>
					第&nbsp;2&nbsp;种全国普通高等学校招生统一考试
				</td>";
		elseif ($template == "cee1")
			echo "
				<td>
					第&nbsp;1&nbsp;种全国普通高等学校招生统一考试
				</td>";
		elseif ($template == "cartoon")
			echo "
				<td>
					卡通
				</td>";
		elseif ($template == "car_mini")
			echo "
				<td>
					汽车_迷你
				</td>";
		elseif ($template == "car1")
			echo "
				<td>
					第&nbsp;1&nbsp;种汽车
				</td>";
		elseif ($template == "calendar_new")
			echo "
				<td>
					日历_新
				</td>";
		elseif ($template == "calculator")
			echo "
				<td>
					计算器
				</td>";
		elseif ($template == "caiputest1")
			echo "
				<td>
					第&nbsp;1&nbsp;种菜谱测试
				</td>";
		elseif ($template == "caipiao")
			echo "
				<td>
					彩票
				</td>";
		elseif ($template == "best_answer")
			echo "
				<td>
					最佳_答案
				</td>";
		elseif ($template == "bk_polysemy")
			echo "
				<td>
					百度百科_多义词
				</td>";
		elseif ($template == "baikespecial")
			echo "
				<td>
					百度百科专有名词
				</td>";
		elseif ($template == "baikeperson")
			echo "
				<td>
					百度百科
				</td>";
		elseif ($template == "baike_kv")
			echo "
				<td>
					百度百科_关键词展现
				</td>";
		elseif ($template == "baby_general")
			echo "
				<td>
					育儿_一般
				</td>";
		elseif ($template == "baby_examine")
			echo "
				<td>
					育儿_检测
				</td>";
		elseif ($template == "app")
			echo "
				<td>
					应用
				</td>";
		elseif ($template == "answer4")
			echo "
				<td>
					回答&nbsp;4
				</td>";
		elseif ($template == "ag_live04")
			echo "
				<td>
					[猜]&nbsp;话题_第&nbsp;4&nbsp;种直播
				</td>";
		elseif ($template == "5pics")
			echo "
				<td>
					5&nbsp;张图片
				</td>";
		else
			echo "
				<td>".$template."</td>";
		}
			echo "
				<td>$template</td>
				<td class=\"center\">".@$matchy[1][$i]."</td>
				<td class=\"center\">".@$matchurltime[3][$i]."</td>
				<td class=\"center\">".($i+1)."</td>
			</tr>";
	}
	echo"
		</tbody>
	</table>
</div>";
}

// 摘要

if (preg_match_all("/(?<=<div class=\"c-abstract\">)(.*)(?=<\/div><div class=\"f13\">)/", @$baiduserp, $matchabstract))

// 摘要汇总

if (!is_null($s))
{
echo"
<div class=\"draglist\" draggable=\"true\">
	<table>
		<thead>
			<tr>
				<th>摘要<br />abstract</th>
				<th>排序</th>
			</tr>
		</thead>
		<tbody>";

	foreach ($matchabstract[1] as $i => $position)
	{
		echo "
			<tr class=\"back-egg\">
				<td>".$matchabstract[1][$i]."</td>
				<td class=\"center\">".($i+1)."</td>
			</tr>";
	}
	echo"
		</tbody>
	</table>
</div>";
}

// 知心搜索

if (preg_match_all("/(?<=data\-click\=\"{'rsv_re_ename':')([\x80-\xff\w\s\.]+)(?='}\">)/", @$baiduserp, $matchename))

if (!is_null($s))
{
echo "
<div class=\"draglist\" draggable=\"true\">
	<table>
		<thead>
			<tr>
				<th>知心搜索相关名&nbsp;ename</th>
				<th>排序</th>
			</tr>
		</thead>
		<tbody>";

	// 百度网址采用百度极速搜索模式
	foreach ($matchename[1] as $i => $position)
	{
		echo "
			<tr class=\"back-gold\">
				<td>
					<a href=\"http://127.0.0.1/baidu-f.php?s=".$matchename[1][$i]."\" target=\"_blank\">".$matchename[1][$i]."</a>
				</td>
				<td class=\"center\">".($i+1)."</td>
			</tr>";
	}
	echo "
		</tbody>
	</table>
</div>";
}

if (!is_null($s))
{
echo"
<p>
	<a class=\"noa\" href=\"http://www.weixingon.com/tool/\"  target=\"_blank\">更多百度搜索结果网址参数</a>
	<a class=\"noa\" href=\"http://top.baidu.com/buzz?b=1\"  target=\"_blank\" rel=\"external nofollow\">百度实时热点排行榜</a>
	<a class=\"noa\" href=\"http://www.weixingon.com/baidusp-lm.php?s=".$queryfilter.$connectpn.$pn.$connectrn."100".$connectlm."7\"  target=\"_blank\">百度快照更新时间限制工具</a>
	<a class=\"noa\" href=\"http://www.weixingon.com/baidusp-hot.php?s=".$queryfilter."\" target=\"_blank\">百度相关热门词</a>
	<a class=\"noa\" href=\"http://www.weixingon.com/baidusp-srcid.php\" target=\"_blank\">百度搜索产品资源</a>
</p>
";
}
$costTime = microtime(true) - $startTime;
echo "<p class=\"white\">本次查询耗时&nbsp;".sprintf("%.2f",($costTime*1000))."&nbsp;毫秒，其中百度查询耗时&nbsp;".@$matchsrvt[1]."毫秒</p>";
?>
</div>
<script charset="gbk" src="http://www.baidu.com/js/opensug.js"></script>
<script src="http://www.weixingon.com/javascript/go-top.js"></script>
<script>(new GoTop()).init({pageWidth:1022,nodeId:'go-top',nodeWidth:100,distanceToBottom:200,distanceToPage:0,hideRegionHeight:130,text:'回到顶部'})
// 拖放功能
var $ = function(selector) {
	if (!selector) {return [];}
	var arrEle = [];
	if (document.querySelectorAll) {
		arrEle = document.querySelectorAll(selector);
	} else {
		var oAll = document.getElementsByTagName("div"), lAll = oAll.length;
		if (lAll) {
			var i = 0;
			for (i; i<lAll; i+=1) {
				if (/^\./.test(selector)) {
					if (oAll[i].className === selector.replace(".", "")) {
						arrEle.push(oAll[i]);
					}
				} else if(/^#/.test(selector)) {
					if (oAll[i].id === selector.replace("#", "")) {
						arrEle.push(oAll[i]);
					}
				}
			}
		}
	}
	return arrEle;
};

var eleDustbin = $(".dustbin")[0], eleDrags = $(".draglist"), lDrags = eleDrags.length, eleDrag = null;
for (var i=0; i<lDrags; i+=1) {
	eleDrags[i].onselectstart = function() {
		return false;
	};
	eleDrags[i].ondragstart = function(ev) {
		ev.dataTransfer.effectAllowed = "move";
		ev.dataTransfer.setData("text", ev.target.innerHTML);
		ev.dataTransfer.setDragImage(ev.target, 0, 0);
		eleDrag = ev.target;
		return true;
	};
	eleDrags[i].ondragend = function(ev) {
		ev.dataTransfer.clearData("text");
		eleDrag = null;
		return false
	};
}
eleDustbin.ondragover = function(ev) {
	ev.preventDefault();
	return true;
};
eleDustbin.ondragenter = function(ev) {
	this.style.color = "#FFDDAA";
	return true;
};
eleDustbin.ondrop = function(ev) {
	if (eleDrag) {
		eleDrag.parentNode.removeChild(eleDrag);
	}
	this.style.color = "#000000";
	return false;
};
</script>
</body>
</html>
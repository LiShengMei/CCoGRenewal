<?php session_start();
$filepath = 'countmrll.txt';
if ($_SESSION['mrlltemp'] == '')//判断$_SESSION[temp]的值是否为空,其中的temp为自定义的变量
{
 if (!file_exists($filepath))//检查文件是否存在，不存在刚新建该文件并赋值为0
 {
  $fp = fopen($filepath,'w');
  fwrite($fp,0);
  fclose($fp);
  counter($filepath);
 }else
 {
  counter($filepath);
 }
 $_SESSION['mrlltemp'] = 1;//登录以后,给$_SESSION[temp]赋一个值1
}

//counter()方法用来得到文件内的数字
function counter($f_value)
{
 //用w模式打开文件时会清空里面的内容，所以先用r模式打开，取出文件内容，保存到变量
 $fp = fopen($f_value,'r') or die('打开文件时出错。');
 $countNum = fgets($fp,1024);
 fclose($fp);
 $countNum++;
 $fpw = fopen($f_value,'w');
 fwrite($fpw,$countNum);
 fclose($fpw);
}
$username = $_SESSION['username'];
$log_id = $_SESSION['log_id'];
$gender = $_SESSION['gender'];
$realname = $_SESSION['realname'];
$name=$realname;
if(!$name)$name=$username;
function cut_str($string, $sublen, $start = 0, $code = 'UTF-8') 
{ 
    if($code == 'UTF-8') 
    { 
        $pa = "/[\x01-\x7f]|[\xc2-\xdf][\x80-\xbf]|\xe0[\xa0-\xbf][\x80-\xbf]|[\xe1-\xef][\x80-\xbf][\x80-\xbf]|\xf0[\x90-\xbf][\x80-\xbf][\x80-\xbf]|[\xf1-\xf7][\x80-\xbf][\x80-\xbf][\x80-\xbf]/"; 
        preg_match_all($pa, $string, $t_string); 
 
        if(count($t_string[0]) - $start > $sublen) return join('', array_slice($t_string[0], $start, $sublen))."..."; 
        return join('', array_slice($t_string[0], $start, $sublen)); 
    } 
    else 
    { 
        $start = $start*2; 
        $sublen = $sublen*2; 
        $strlen = strlen($string); 
        $tmpstr = ''; 
 
        for($i=0; $i< $strlen; $i++) 
        { 
            if($i>=$start && $i< ($start+$sublen)) 
            { 
                if(ord(substr($string, $i, 1))>129) 
                { 
                    $tmpstr.= substr($string, $i, 2); 
                } 
                else 
                { 
                    $tmpstr.= substr($string, $i, 1); 
                } 
            } 
            if(ord(substr($string, $i, 1))>129) $i++; 
        } 
        if(strlen($tmpstr)< $strlen ) $tmpstr.= "..."; 
        return $tmpstr; 
    } 
} 
 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">


<urlset xmlns="http://www.google.com/schemas/sitemap/0.84" /> 

<head>
<title>基督荣耀教会 例行事务</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="Description" content="耶稣是道路真理生命"/>
<meta name="Keywords" content="Christ, Jesus,love,God, heaven,father,son, 耶稣, 基督,神,爱,生命，"/>
<meta name="Distribution" content="Global"/>
<meta name="Robots" content="index,follow"/>
<link rel="stylesheet" type="text/css" href="inc/style.css" media="all" />

<style type="text/css">
<!--
.STYLE2 {font-size: 14px}
-->
</style>
<script type="text/javascript" src="swfobject.js"></script>
<script type="text/javascript" src="1bit.js"></script>
<script type="text/javascript">
	oneBit = new OneBit('1bit.swf');
	oneBit.ready(function() {
	    // Using specify you can set 'color', 'background', 'playerSize', 'position' and 'analytics' - all are optional
		oneBit.specify('color', '#00BB00');
		oneBit.specify('playerSize', '10');
		// Apply is called after options are specified and includes the CSS selector
		oneBit.apply('a');
	});
</script>

<style type="text/css">
	.onebit_mp3 a { color: #006600; }
	.onebit_mp3 a:hover { color: #00BB00; }
</style>
</head>

<body >

<div id="wrapper" align="center">

<div id="header" style="width:660px" >
		<div id="hright">
			<div id="hrighttop">
				<p>	<?php if($name) echo '主内平安！'.$name.$gender.'| <a href="reg/usercenter.php?id='.$log_id.'&fr=mrll.php">帐号管理</a>|<a href="reg/login.php?action=logout&fr=mrll.php">退出</a>';else echo'<a href="reg/login.php?fr=mrll.php" title="登录" >登 录</a>|
			 		<a href="reg/reg.php?fr=mrll.php" title="注 册" >注 册</a>'; ?>
				</p>					
			</div>
			<div id="menus">
				<ul>
				<li><a href="index.html"   title="首 页" >首 页</a>  |</li>
				<li><a href="aboutuss.php"    title="关于我们"  >关于我们</a>  |</li>
				<li><a href="zhuri1.php"    title="主日信息"  >主日信息</a> |</li>
				<li><a href="message1.php"         title="查经聚会"  >查经聚会</a> |</li>
				<li><a href="xslx.php"   title="线上灵修"  >线上灵修</a> |</li>
				<li><a href="jhhd.php"   title="教会活动"  >教会活动</a> |</li>
				<li><a href="contactuss.php"  title="联系我们"  >联系我们</a>  </li>
				</ul>
			</div>
		</div>
  </div>

<div align="center" style="width:660px"><img src="images/lshans.jpg" width="660px" height="180px" align="middle" />
<br/>
			<?php  $conn = @mysql_connect("50.63.231.66","mess","Christ!1225"); 
				if (!$conn){ die("login error" . mysql_error()); } 
				
				mysql_select_db("mess", $conn); 
				mysql_query("SET NAMES 'UTF8'");
			$mid=$_GET[mid];	
			if(!$mid){
				$check_query = mysql_query("select * from mrll ORDER BY mriqi DESC");
			 while($result = mysql_fetch_array($check_query)){
					echo '<div id="content_index"><p><hr width=100%></p>
					<div class="message_left">&nbsp;'.$result[mriqi].'</div>
					<div class="message_mid" align="left"> <a href="mrll.php?mid='.$result[mid].'"  style="text-decoration:none"><font color=#006600><strong>'.$result[mtitle].'</strong></font></a><a href="mrll/'.$result[mpath].'"></a></div>
					<div class="message_right">'.$result[mauthor].'&nbsp;</div>';
					echo '<div class="message_main"><strong>内容摘要:</strong>&nbsp;'.cut_str($result[mcontent],130,0,'UTF-8').'</div></div>';}	
				}
		else{
		$check_query = mysql_query("select * from mrll where mid='$mid' limit 1");
		$result = mysql_fetch_array($check_query);
        if($result[mauthor] == '李妈妈') $pic = 'pIMG_4769.jpg';
		echo '<div id="content_index"><div class="message_left">'.$result[mriqi].'</div>
										<div class="message_mid" align="center"><strong>'.$result[mtitle].'</strong></div>
										<div class="message_right">'.$result[mauthor].'</div>';
		echo '<div class="message_main"><p><hr width=100%></p>
		<p align="center"><object type="application/x-shockwave-flash" data="dewplayer-vol.swf?mp3=mrll/'.$result[mpath].'&amp;autostart=1" width="240" height="20" id="dewplayer-vol"><param name="wmode" value="transparent" /><param name="movie" value="dewplayer-vol.swf?mp3=mrll/'.$result[mpath].'&amp;autostart=1" /></object> <img src="user/'.$pic.'" width="138px" height="79px"  /></p>
		<p>&nbsp;</p><p><strong>内容摘要:</strong>&nbsp;'.$result[mcontent].'</p></div>';
		echo '<p> <a href="mrll.php"  target="_parent">返 回</a></p>	</div>';	}?>

		
   
</div>

	
<div id="footer">
		
	<p>基督荣耀教会 华人聚会  - 2011年
		
		<a href="gengxin.php" title="更新">更新</a> | 
		
		<a href="https://hostingmanager.secureserver.net/SQLDBList.aspx?SQLDBType=MYSQL&ci=23451&accountUID=82a5905a-0519-11e1-a1f6-f04da206c13a" title="维护">维护</a> | 
		
		<a href="#">地址</a> |
		
		<a href="#">邮箱</a> | 
		
		<a href="#">链接</a> | 
		
		<a href="#">保留</a> | 
		
		<a href="#">手机版</a> | 
		
		<a href="#">RSS Feed</a>
		
		</p>

	</div>
    <div align="center"><font face="Arial"><?  echo '欢迎浏览基督荣耀教会每日灵粮栏目，您是本网页2013年第<font color="#FF0000">'.file_get_contents($filepath).'</font>位访客';?></div>
</div>


</body>

</html>
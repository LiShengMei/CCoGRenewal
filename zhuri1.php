<?php session_start();
$filepath = 'countzhuri.txt';
if ($_SESSION['zhuritemp'] == '')//判断$_SESSION[temp]的值是否为空,其中的temp为自定义的变量
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
 $_SESSION['zhuritemp'] = 1;//登录以后,给$_SESSION[temp]赋一个值1
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
/* 
Utf-8、gb2312都支持的汉字截取函数 
cut_str(字符串, 截取长度, 开始长度, 编码); 
编码默认为 utf-8 
开始长度默认为 0 
*/ 
 
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




<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->


</head>

<body >
<div id="wrapper" align="center">

	<header id="header">
		<h1 id="logo"><a href="index.html">基督榮耀教會</a></h1>
          <nav id="nav">
            <ul>
              <li><a href="index.html">主日信息</a></li>
              <li><a href="#">祷告聚会</a></li>
              <li><a href="#">线上灵修</a></li>
              <li><a href="#">教会活动</a></li>
              <li><a href="#" class="button small">登入</a></li>
            </ul>
          </nav>
	</header>




<div id="header" style="width:660px" >
		<div id="hright">
			<div id="hrighttop">
				<p>	<?php if($name) echo '主内平安！'.$name.$gender.'| <a href="reg/usercenter.php?id='.$log_id.'&fr=zhuri1.php">帐号管理</a>|<a href="reg/login.php?action=logout&fr=zhuri1.php">退出</a>';else echo'<a href="reg/login.php?fr=zhuri1.php" title="登录" >登 录</a>|
			 		<a href="reg/reg.php?fr=zhuri1.php" title="注 册" >注 册</a>'; ?>
			 		
				</p>					
			</div>
			<div id="menus">
				<ul>
				<li><a href="index.php"   title="首 页" >首 页</a>  |</li>
				<li><a href="aboutuss.php"    title="关于我们"  >关于我们</a>  |</li>
				<li><a href="zhuri1.php"    title="主日信息"  >主日信息</a> |</li>
				<li><a href="message1.php"         title="查经聚会"  >祷告聚会</a> |</li>
				<li><a href="xslx.php"   title="线上灵修"  >线上灵修</a> |</li>
				<li><a href="jhhd.php"   title="教会活动"  >教会活动</a> |</li>
				<li><a href="contactuss.php"  title="联系我们"  >联系我们</a>  </li>
				</ul>
			</div>
		</div>
  </div>
<div align="center" style="width:660px"><img src="images/heping.jpg" width="660px" height="180px" align="middle" /></div>
<br/>
			<?php  $conn = @mysql_connect("50.63.231.66","mess","Christ!1225"); 
				if (!$conn){ die("login error" . mysql_error()); } 
				
				mysql_select_db("mess", $conn); 
				mysql_query("SET NAMES 'UTF8'");
			$zid=$_GET[zid];	
			if(!$zid){	
				$check_query = mysql_query("select * from zhuri ORDER BY riqi DESC");
				while($result = mysql_fetch_array($check_query)){
					echo '<p align="left" style="width:660px"><strong>'.$result[riqi].'</strong>&nbsp;&nbsp;&nbsp; <a href=zhuri1.php?zid='.$result[zid].'>'.$result[ptitle].'</a>&nbsp;&nbsp;&nbsp;Preached by:'.$result[pname].'&nbsp;&nbsp;&nbsp;';
					if($result[tname]){echo "Translated by:".$result[tname];}
					echo'</p>';
					echo '<p align="justify" style="width:660px" ><strong>内容摘要:&nbsp;</strong>'.cut_str($result[mcontent],200,0,'UTF-8').'</p><br/>';}	
				echo "</div>";
				}
		else{
		$check_query = mysql_query("select * from zhuri where zid='$zid' limit 1");
		$result = mysql_fetch_array($check_query);
		echo '<p style="width:660px">&nbsp;</p><h2 style="width:660px">'.$result[ptitle].'</h2>';
		echo '<p style="width:660px">'.$result[pname];
		 if($result[tname]){echo " &nbsp;&nbsp;翻译:".$result[tname];} 
		echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$result[riqi]."</p>";
		echo '<p align="justify" style="width:660px"><strong>信息摘要:</strong><br />'.$result[mcontent].'</p><p>&nbsp; </p>';

		?>	
			<p align="center">


  <video width="640" height="360" controls >
  <source src="video/<? echo $result[flv];?>" type="video/mp4">
  <source src="video/<? echo $result[flv];?>" type="video/ogg">
  <source src="video/<? echo $result[flv];?>" type="video/flv">
Your browser does not support the video tag.
</video>
  
  </br>

<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,0,0" width="640" height="360" id="FLVPlayer">
                          <param name="movie" value="FLVPlayer_Progressive.swf" />
                          <param name="salign" value="lt" />
                          <param name="quality" value="high" />
                          <param name="scale" value="noscale" />
                          <param name="FlashVars" value="&MM_ComponentVersion=1&skinName=Clear_Skin_3&streamName=video/<?php echo $result[flv]; ?>&autoPlay=false&autoRewind=false" />
                          <embed src="FLVPlayer_Progressive.swf" flashvars="&MM_ComponentVersion=1&skinName=Clear_Skin_3&streamName=video/<?php echo $result[flv]; ?>&autoPlay=false&autoRewind=false" quality="high" scale="noscale" width="640" height="360" name="FLVPlayer" salign="LT" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />                        
</object>

</p>
							<p> <a href="zhuri1.php"  target="_parent">返 回</a></p>		
		<?php }?>					
      </div>
	

	<div id="footer">
		
		<p>基督荣耀教会 华人聚会  - 2011年
		
		<a href="gx.php" title="更新">更新</a> | 
		
		<a href="https://hostingmanager.secureserver.net/SQLDBList.aspx?SQLDBType=MYSQL&ci=23451&accountUID=82a5905a-0519-11e1-a1f6-f04da206c13a" title="维护">维护</a> | 
		
		<a href="#">地址</a> |
		
		<a href="#">邮箱</a> | 
		
		<a href="#">链接</a> | 
		
		<a href="#">保留</a> | 
		
		<a href="#">手机版</a> | 
		
		<a href="#">RSS Feed</a> | 
		
		</p>

	</div>
    <div align="center"><font face="Arial"><?  echo '欢迎浏览基督荣耀教主日信息栏目，您是本网页'.date("Y").'年第<font color="#FF0000">'.file_get_contents($filepath).'</font>位访客';?></font></div>

</body>

</html>
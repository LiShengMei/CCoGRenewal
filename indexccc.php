<?php
//@ 欢迎来到懒人站长素材网站
session_start();//定义session，同一IP登录不累加
$filepath = 'count.txt';
if ($_SESSION['temp'] == '')//判断$_SESSION[temp]的值是否为空,其中的temp为自定义的变量
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
 $_SESSION['temp'] = 1;//登录以后,给$_SESSION[temp]赋一个值1
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
//注释下面一行可以实现同一IP登录不累加效果，测试时可以打开
//session_destroy();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"

"http://www.w3.org/TR/html4/loose.dtd">

<html>

<head>



<meta content="christchurchofglory, christ, church, glory, chinese church, langley, vancouver, surrey, great vancouver, sermont, encounter, 基督敬拜中心, 温哥华教会, 教会, 温哥华, 素里,中国, 台湾, 大陆, 李秉中, 牧师, 礼拜, 家庭小组, 基督,荣耀,教会,基督荣耀教会, 溫哥華教會, 教會, 溫哥華, 素里,中國, 臺灣, 大陸, 牧師, 禮拜, 家庭小組" name="keywords">

<meta content="Christ church of glory center a chinese church locates at surrey city of Great Vancouver." name="description">

<meta name="GENERATOR" content="Microsoft FrontPage 5.0">

<meta name="ProgId" content="FrontPage.Editor.Document">

<meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<title>基督荣耀教会</title>

<link rel="shortcut icon" href="file:///D|/thebackup/webtest/Chinese/favicon.ico">


<style>
a { color:#333333; text-decoration: none; }

a:hover { color:#0033FF;  text-decoration:none; }

</style>
<link href="file:///D|/thebackup/webtest/style/safmStyle.css" rel="stylesheet" type="text/css">


</head>



<body>

<div align="center">

  <table width="900" border="0" cellspacing="0" cellpadding="0" height="1" style="border-collapse: collapse" bordercolor="#111111">

    <tr>

      <td height="102" width="900">

      <p align="center">

      <img border="0" src="images/church.jpg" width="640" height="360"></td>
    </tr>

    <tr>

     
        

          <td  bgcolor="#FFFFFF" background="#" align="center">

            <div id="manu" align="center">
			<div class="boxes">	</div>
			<div class="boxes"><font size="5" face="標楷體" color="#000080"><a href="file:///D|/thebackup/webtest/zhuri1.php">主日信息</a></font> </div>
			<div class="boxes"><font size="5" face="標楷體" color="#000080"><a href="file:///D|/thebackup/webtest/message1.php">祷告聚会</a></font> </div>
			<div class="boxes"><font size="5" face="標楷體" color="#000080"><a href="file:///D|/thebackup/webtest/xslx.php">线上灵修</a></font> </div>
			<div class="boxes"><font size="5" face="標楷體" color="#000080"><a href="file:///D|/thebackup/webtest/jhhd.php">教会活动</a></font> </div>
			<div class="boxes">	</div>
			</div></td>
    </tr>
      
    

    <tr bgcolor="#8CA0B8">

      <td height="2" bgcolor="#003366" width="900"></td>
    </tr>

    <tr bgcolor="#FFFFFF">

      <td width="900" height="34" valign="bottom">
	  <div align="center"><font face="新細明體">主日聚會: </font><font face="Arial"> 10:00AM-12:00AM  &nbsp;&nbsp;&nbsp;</font><font face="新細明體">教會地址: </font><font face="Arial">15100 66A Ave, Surrey, B.C. Canada &nbsp;&nbsp;&nbsp;</font></div>
	  <div align="center"><font face="Arial"> Phone: (604)951-8462 &nbsp;&nbsp;&nbsp; Email: <a href="mailto:welcome@christchurchofglory.net">welcome@christchurchofglory.net </a></font>&nbsp;<a href="file:///D|/thebackup/webtest/gxzhuri1.php">Update</a>.<a href="https://hostingmanager.secureserver.net/SQLDBList.aspx?SQLDBType=MYSQL&ci=23451&accountUID=82a5905a-0519-11e1-a1f6-f04da206c13a">Maintenance </a>.<a href="file:///D|/thebackup/webtest/gxpic.php">Pictures</a></div>
      <div align="center"><font face="Arial"><?  echo '欢迎来基督荣耀教会网站，您是本站2013年第<font color="#FF0000">'.file_get_contents($filepath).'</font>位访客';?></div>
      </td>
    </tr>
  </table>

</div>


</html>
<?php 
session_start();
$filepath = 'countdaogao.txt';
if ($_SESSION['daogaotemp'] == '')//判断$_SESSION[temp]的值是否为空,其中的temp为自定义的变量
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
 $_SESSION['daogaotemp'] = 1;//登录以后,给$_SESSION[temp]赋一个值1
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

$username=$_SESSION['username'];
$log_id=$_SESSION['log_id'];
$gender = $_SESSION['gender'];
$realname = $_SESSION['realname'];
$name=$realname;
if(!$name)$name=$username;?>
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
</head>

<body >

<div id="wrapper" align="center">

<div id="header" style="width:660px" >
		<div id="hright">
			<div id="hrighttop">
				<p>	<?php if($name) echo '主内平安！'.$name.$gender.'| <a href="reg/usercenter.php?id='.$log_id.'&fr=message1.php">帐号管理</a>|<a href="reg/login.php?action=logout&fr=message1.php">退出</a>';else echo'<a href="reg/login.php?fr=message1.php" title="登录" >登 录</a>|
			 		<a href="reg/reg.php?fr=message1.php" title="注 册" >注 册</a>'; ?>
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

	<div id="homepic1" style="background:url(images/xinshis.jpg)"></div>	
<div style="width:660px" >
		<h2  align="left" >欢迎参加我们的周间聚会！</h2>
		<p align="left"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;主日崇拜：</strong> 每周日 10:00AM - 12:00AM; &nbsp; 聚会地点： 音乐厅 15100 66A Ave, Surrey, B.C.
        </p><p align="left" ><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;进深聚会：</strong> 每周一 10:00AM - 12:00AM; &nbsp; 聚会地点： 请联系恩爱姊妹&nbsp;6049518462</p>
		<p align="left" ><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;姊妹聚会：</strong> 每周二 10:00AM - 12:00AM; &nbsp; 聚会地点： 请联系恩爱姊妹&nbsp;6049518462</p>
		<p align="left" ><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;青年聚会：</strong> 每周二 &nbsp;&nbsp;7:30PM - &nbsp;&nbsp;9:00PM; &nbsp; 聚会地点： 请联系恩爱姊妹&nbsp;6049518462</p>
    	<p align="left" ><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;弟兄聚会：</strong> 每周三 &nbsp;&nbsp;8:00PM - &nbsp;&nbsp;9:30PM; &nbsp; 聚会地点： 请联系恩爱姊妹&nbsp;6049518462</p>
		<p align="left" ><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;福音聚会：</strong> 每周四 &nbsp;&nbsp;7:30PM - &nbsp;&nbsp;9:30PM; &nbsp; 聚会地点： 请联系恩爱姊妹&nbsp;6049518462</p>
		<p align="left" ><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;追求聚会：</strong> 每周五 &nbsp;&nbsp;7:30PM - &nbsp;&nbsp;9:30PM; &nbsp; 聚会地点： 请联系恩爱姊妹&nbsp;6049518462</p>
	   
<br/>
<h2 align="justify" ><strong >祷告负担分享&nbsp;<a href="#wyfy" style="text-decoration:none" >我要发布</a> </strong>&nbsp;</h2>
			<div  align="left"  >
	  			<?php 
				
						$conn = @ mysql_connect("mess.db.8559606.hostedresource.com","mess","Christ!1225"); 
						if (!$conn){ die("erro conect with bd" . mysql_error()); } 
						
						mysql_select_db("mess", $conn); 
						mysql_query("SET NAMES 'UTF8'");
						$look=$_GET[look];
					if($look=='all'){$result=mysql_query("select * from pray order by did desc");}	
					else{$result=mysql_query("select * from pray limit 5");}
					while($row=mysql_fetch_array($result)){
					echo "<br/><p><strong>".$row[title]."</strong></p>";
					echo "<p>".$row[content]."</p>";
					echo "<p>&nbsp;&nbsp;<font color=red>".$row[author]."&nbsp;&nbsp;&nbsp;&nbsp;".$row[wtime]."</font></p><br/>";} ?>
            </div>
     <p align="right" ><a href="message1.php?look=all">查看全部祷告事项</a></p>
    
		<h2 align="left"><strong>我要分享祷告负担</strong> &nbsp;</h2>
		 <div align="justify">		    
		 <form action="subpray.php" method="post" enctype="multipart/form-data" id="form1">
		 <input name="wtime" type="hidden" value=<?php echo date('Y年n月d日,g:iA');?> />
		  <input name="did" type="hidden" value=<?php echo date('nd');?> />
		 <p align="left">主 题<input name="title" type="text" /></p>
		 <p><textarea name="content" style="width:100%" rows="11" wrap="virtual" dir="ltr" lang="zh" > 温馨提示：发布前，请先登录，如您的发言大于1000字，请分两次提交。</textarea>
		 <input type="submit" name="Submit" value="提交" />
           </p>
	  </form></div>
      </div>
	<p id="wyfy" name="wyfy"></p>	
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
    <div align="center"><font face="Arial"><?  echo '欢迎浏览基督荣耀教会祷告聚会栏目，您是本网页2013年第<font color="#FF0000">'.file_get_contents($filepath).'</font>位访客';?></font></div>
</div>


</body>

</html>
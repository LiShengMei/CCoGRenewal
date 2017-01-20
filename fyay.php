<?php session_start();
$username = $_SESSION['username'];
$log_id = $_SESSION['log_id'];
$gender = $_SESSION['gender'];
$realname = $_SESSION['realname'];
$name=$realname;
if(!$name)$name=$username;?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="stylesheet" type="text/css" href="inc/style.css" media="all" />
<title>基督荣耀教会，联系我们</title>
<style type="text/css">
<!--
.STYLE1 {color: #FF0000}
.STYLE2 {color: #000000}
-->
</style>
</head>

<body>

<div id="wrapper" align="center">

<div id="header" style="width:660px" >
		<div id="hright">
			<div id="hrighttop">
				<p>	<?php if($name) echo '主内平安！'.$name.$gender.'| <a href="reg/usercenter.php?id='.$log_id.'&fr=contactuss.php">帐号管理</a>|<a href="reg/login.php?action=logout&fr=contactuss.php">退出</a>';else echo'<a href="reg/login.php?fr=contactuss.php" title="登录" >登 录</a>|
			 		<a href="reg/reg.php?fr=contactuss.php" title="注 册" >注 册</a>'; ?>
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
	
	<div id="homepic1" style="height:270px" >
	  <a href="addressmap.htm" target="_self"><img src="images/addresss.jpg" alt="查看大图" /></a>
	</div>
	<div style="width:660px"  > 
	 
		<br/>
		
		
			 <p align="left">今年我们预备了 <span><strong>春季烤肉<span class="STYLE1">，秋季退休会，中秋爱宴，春节爱宴</span></strong></p>
			 <p align="left"><strong>欢迎慕道朋友参加！</strong></p>
			 <p align="left" class="STYLE1">&nbsp;</p>
			 <p align="left"><strong>教会地址：</strong>15100 66A AVE Surrey B.C Canada V3S 2A6</p>
			 <p align="left"> <strong>联系人：</strong> &nbsp 李秉中弟兄，潘恩爱姊妹</p>
			 <p align="left"> <strong>联系电话：</strong> 604-951-8462</p>
			 <p align="left"> <strong>电子邮箱：</strong> <a href="mailto:welcome@christchurchofglory.net"> welcome@christchurofglory.net</a></p><br/>
		   <p align="left">从周日至周五，我们有适合不同灵程和年龄的查经聚会，祷告聚会，和追求聚会。欢迎您来到我们当中，一起来认识爱我们的主，因为"<a href="#">认识你独一的真神，并且认识你所差来的耶稣基督，这就是永生"（约1:17）</a>请到我们的敬拜赞美和聚会服事栏目查询，也欢迎您直接来电与我们联系.</p>		
	</div>

		
	

	<div id="footer" >
		
		<p>基督荣耀教会 华人聚会  - 2011年
		
		<a href="gengxin.php" title="更新">更新</a> | 
		
		<a href="https://hostingmanager.secureserver.net/SQLDBList.aspx?SQLDBType=MYSQL&ci=23451&accountUID=82a5905a-0519-11e1-a1f6-f04da206c13a" title="维护">维护</a> | 
		
		<a href="#">地址</a> |
		
		<a href="#">邮箱</a> | 
		
		<a href="#">链接</a> | 
		
		<a href="#">保留</a> | 
		
		<a href="#">手机版</a> | 
		
		<a href="#">RSS Feed</a> | 
		
		</p>

	</div>	
</div>
</body>
</html>

<?php session_start();
$username = $_SESSION['username'];
$log_id = $_SESSION['log_id'];
$gender = $_SESSION['gender'];?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<xml version="1.0" encoding="UTF-8"> 

<urlset xmlns="http://www.google.com/schemas/sitemap/0.84" /> 

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="Description" content="耶稣是道路真理生命"/>
<meta name="Keywords" content="Christ, Jesus,love,God, heaven,father,son, 耶稣, 基督,神,爱,生命，"/>
<meta name="Distribution" content="Global"/>
<meta name="Robots" content="index,follow"/>
<link rel="stylesheet" type="text/css" href="inc/style.css" media="all" />

</head>

<body >

<div id="wrapper">

<div id="wrapper">
	<div id="header">
		<div id="hright">
			<div id="hrighttop">
				<p>	<?php if($username) echo '主内平安！'.$username.$gender.'| <a href="reg/usercenter.php?id='.$log_id.'">帐号管理</a>|<a href="reg/user_login.php?action=logout">退出</a>'; else echo'<a href="reg/user_login.htm" title="登录" target="main">登 录</a>|<a href="reg/user_reg.htm" title="注 册" target="main">注 册</a> '; ?>
				</p>					
			</div>
			<div id="menu">
				<ul>
				<li><a href="homepage.php?jid=458"   title="首 页"  target="main" >首 页</a>  |</li>
				<li><a href="aboutus.htm"    title="关于我们"  target="main">关于我们</a>  |</li>
				<li><a href="zhuri.htm"    title="敬拜赞美"  target="main">主日信息</a> |</li>
				<li><a href="message.htm"   title="查经聚会"  target="main">查经聚会</a> |</li>
				<li><a href="jianzheng.htm"   title="生命见证"  target="main">生命见证</a> |</li>
				<li><a href="resource.htm"   title="资源供享"  target="main">资源供享</a> |</li>
				<li><a href="contactus.htm"  title="联系我们"  target="main">联系我们</a>  </li>
				</ul>
			</div>
		</div>
		<div id="title">
			<h4><br/> </h4>
			<p>Christ Church of Glory</p>
		</div>	
	</div>
	<div id="homepic" style="background:url(images/xile.jpg)">
		<div class="message">
	
				<h4><?php 
				if(!isset($_SESSION['username'])){exit('<br/><br/>Please login first!');}
				else{echo "<br/><br/>Welcome! &nbsp;".$_SESSION['username'];}?></h4>
	
	</div></div>
	<div id="bottomcontenttop"></div>

	<div id="bottomcontent"  style="height:920px"	>

	 <div class="boxes" style="height:700px">
	 
		<h2 class="STYLE1">主日信息更新</h2>
		<img src="images/p1.jpg" alt="" class="pic" width="270" height="60" />	
		<form name="gxzhuriForm"  enctype="multipart/form-data" method="post" action="gxzhuri.php" >
		<p>日期<input name="riqi" type="text" value="mm-dd-yyyy" /></p>
		<p>讲道<input name="pname" type="text" /></p>
		<p>翻译<input name="tname" type="text" /></p>
		<p>主题<input name="ptitle" type="text" /></p>
		<p>摘要<br/><textarea name="pcontent"  style="width:100%" rows="8" type="textarea" /></textarea></p>
	    <p>内容<br/><textarea name="mcontent"  style="width:100%"  rows="18" type="textarea" /></textarea></p>
	   	<p>视屏（FLASH 格式）<input name="ffile" type="file" /></p>
		<p><input name="submit1" value="预 览" type="submit"/>
		<input name="submit2" value="提 交" type="submit" /></p>
		</form>
	
	  </div>
		<div class="boxes" style="height:440px">
		
			<h2 class="STYLE1">周间聚会更新</h2>
			<img src="images/p1.jpg" alt="" class="pic" width="270" height="60" />	
				<form name="gxjhForm"method="post" action="zjjh.php" >
				<p>	周一<input name="" type="radio" value="" />
				周二<input name="" type="radio" value="" />
				周三<input name="" type="radio" value="" />
				周四<input name="" type="radio" value="" />
				周五<input name="" type="radio" value="" /></p>
		
		<p>日期<input name="riqi" type="text" value="mm-dd-yyyy" /></p>
		<p>经节<input name="pname" type="text" /></p>
		<p>摘要<br/><textarea name="pcontent" style="width:100%" rows="4" type="textarea" /></textarea></p>
	    <p>分享<br/><textarea name="mcontent" style="width:100%" rows="5" type="textarea"/></textarea></p>
	   	<p><input name="submit3" value="预 览" type="submit"/>
		<input name="submit4" value="提 交" type="submit" /></p>
		</form>
			
		</div>		
		
		<div class="boxes" style="height:440px">
		
			<h2 class="STYLE1" align="">主内新闻和肢体代祷更新</h2>
			
			<img src="images/p1.jpg" alt="" class="pic" width="270" height="60" />	
		<form name="newsForm"method="post" action="news.php" >
			
		<p>日期<input name="riqi" type="text" value="mm-dd-yyyy" /></p>
		<p>标题<input name="pname" type="text" /></p>
		<p>内容<br/><textarea name="pcontent" style="width:100%" rows="10" type="textarea" /></textarea></p>
	    <p><input name="submit5" value="预 览" type="submit"/>
		<input name="submit6" value="提 交" type="submit" /></p>
		</form>

		</div>
	
		  <div class="boxes" style="height:270px">
		
			<h2 class="STYLE1" align="">活动照片更新</h2>
			
			<img src="images/p1.jpg" alt="" class="pic" width="270" height="60" />	
		<form name="yjForm" enctype="multipart/form-data" method="post" action="yj.php" >				
		<p>日期<input name="riqi" type="text" value="mm-dd-yyyy" /></p>
		<p>标题<input name="pname" type="text" /></p>
		<p>摘要<br/><textarea name="pcontent" style="width:100%" style="height:auto" type="textarea" /></textarea></p>
		<p><input name="ffile" type="file" /></p>
		<p><input name="ffile" type="file" /></p>
		<p><input name="ffile" type="file" /></p>
		<p><input name="ffile" type="file" /></p>
		<p><input name="ffile" type="file" /></p>
		<p><input name="ffile" type="file" /></p>
		<input name="submit7" value="提 交" type="submit" /></p>
		<input name="submit8" value="提 交" type="submit" /></p>
		</form>

		</div>

		  <div class="boxes" style="height:270px">
		
			<h2 class="STYLE1" align="">主的话更新</h2>
			
			<img src="images/p1.jpg" alt="" class="pic" width="270" height="60" />	
						
		<p>日期<input name="riqi" type="text" value="mm-dd-yyyy" /></p>
		<p>经节<br/><textarea name="pcontent" style="width:100%" rows="8" type="textarea" /></textarea></p>
	    <p>分享<br/><textarea name="mcontent" style="width:100%" style="height:auto" type="textarea"/></textarea></p>
		<input name="submit9" value="提 交" type="submit" /></p>
		<input name="submit10" value="提 交" type="submit" /></p>
		</form>

		</div>

	</div>
	
	<div id="bottomcontentbtm"></div>		

	<div id="footer">
		
		<p>基督荣耀教会 华人聚会  - 2011年
		
		<a href="gengxin.php"  target="main" title="更新">更新</a> | 
		
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
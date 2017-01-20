<?php session_start(); 
if(!$_SESSION['right']) $pright=0;
else $pright = $_SESSION['right'];
$username = $_SESSION['username'];
$log_id = $_SESSION['log_id'];
$gender = $_SESSION['gender'];
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


</head>

<body >

  <div id="wrapper" align="center">
      
    <div id="header" style="width:660px" >
          <div id="hright">
            <div id="hrighttop">
              <p><?php if($username) echo '主内平安！'.$username.$gender.'| <a href="reg/usercenter.php?id='.$log_id.'">帐号管理</a>|<a href="reg/user_login.php?action=logout">退出</a>'; else echo'<a href="reg/user_login.htm" title="登录" target="main">登 录</a>|<a href="reg/user_reg.htm" title="注 册" target="main">注 册</a> '; ?>
              </p>					
            </div>
            <div id="menus">
              <ul>
                <li><a href="index.html"   title="首 页" >首 页</a>  |</li>
                <li><a href="aboutuss.htm"    title="关于我们"  >关于我们</a>  |</li>
                <li><a href="zhuri1.php"    title="主日信息"  >主日信息</a> |</li>
                <li><a href="message1.php"         title="查经聚会"  >查经聚会</a> |</li>
                <li><a href="xslx.php"   title="线上灵修"  >线上灵修</a> |</li>
                <li><a href="jhhd.php"   title="教会活动"  >教会活动</a> |</li>
                <li><a href="contactuss.htm"  title="联系我们"  >联系我们</a>  </li>
              </ul>
            </div>
          </div>
    </div>
    <div align="center" style="width:660px">
     <div id="homepic1" style="background:url(images/renais.jpg)">
        <p class="message_hsss" align="left" >
	
			 	 <font color="#FF6600"> <a href="http://www.westcoastchristianconference.com/2012/ch-home.html"> <font color="#FF0000"><blink><strong>WCCC特会预告:<br/></strong></blink></font></a>本年度美加西岸基督徒聚会定于7月25-8月1日在西雅图召开，现已<a href="http://www.westcoastchristianconference.com/2012/ch-registration.html"> <font color="#FF0000">接受报名</font></a></font></p>
     </div> 
	      
          
      <p >&nbsp;&nbsp;</p>
 <div id="shipinlan">
 <?php    
 $paid=$_GET[paid];
 $pid=$_GET[pid];
 $pages=$_GET[pages];if(!$pages) $pages=1;
 $conn = @mysql_connect("picdate.db.8559606.hostedresource.com","picdate","Christ!1225"); 
				if (!$conn){ die("login error" . mysql_error()); } 
				
				mysql_select_db("picdate", $conn); 
				mysql_query("SET NAMES 'UTF8'");
				$query = mysql_query("select * from video where paid='$paid'");
				$result = mysql_fetch_array($query);
				/*$picsql ='SELECT * FROM `'.$paid.'` where ppath='.$pid;*/
				$n = mysql_result(mysql_query("select count(*) from `$paid`"),0);
				$page=ceil($n/20);
				
                if (!$result[patitle])$result[patitle]=$paid; 
				echo '<h2>'.$result[patitle].'</h2>';
				$rec1=$pages*20-19; 
				$pic_sql = "SELECT * FROM `".$paid."`limit ".$rec1." , 20";
				$pic_query = mysql_query($pic_sql);
				while($pic_result = mysql_fetch_array($pic_query)){
				if($pic_result[pdis]<= $pright)	{
				 echo '<div class="manu_boxs"><a href="picdisplay.php?paid='.$paid.'&pid='.$pic_result[ppath].'&pages='.$pages.'"><img src="phpThumb/phpThumb.php?src=../pictures/'.$paid.'/'.$pic_result[ppath].'&w=140&h=79"/></a>';
				  if(!$pic_result[ptitle]) $pic_result[ptitle]=$pic_result[ppath];
                   echo '<p><a href="picdisplay.php?paid='.$paid.'&pid='.$pic_result[ppath].'&pages='.$pages.'">'.$pic_result[ptitle].'</a></p></div>';}
				  
                  } ?>
</div>


	

</div>

	<div id="footer">
		<p align="center" >	 <?php for ($i = 1; $i <= $page; $i++) {
    echo '<a href="padisplays.php?paid='.$paid.'&pages='.$i.'">'.$i.'</a>&nbsp;'; 
} ?>
 
<a href="jhhd.php"  >返回</a></p><br/>
		<p>基督荣耀教会 华人聚会  - 2012年
		
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
<script type="text/javascript">
swfobject.registerObject("FLVPlayer1");
</script>
</body>

</html>
?>
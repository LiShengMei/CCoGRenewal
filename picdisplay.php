<?php session_start();
$username = $_SESSION['username'];
$log_id = $_SESSION['log_id'];
$gender = $_SESSION['gender'];
$right = $_SESSION['right'];
/*header("content-type:text/html; charset=utf-8");?>*/
echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<?xml version="1.0" encoding="UTF-8" ?> 

<urlset xmlns="http://www.google.com/schemas/sitemap/0.84" />';?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>基督荣耀教会 例行事务</title>
<meta name="Description" content="耶稣是道路真理生命"/>
<meta name="Keywords" content="Christ, Jesus,love,God, heaven,father,son, 耶稣, 基督,神,爱,生命，"/>
<meta name="Distribution" content="Global"/>
<meta name="Robots" content="index,follow"/>
<link rel="stylesheet" type="text/css" href="inc/style.css" media="all" />

</head>
<body>	
<div id="wrapper" align="center">
    <div id="header" style="width:660px" >
          <div id="hright">
            <div id="hrighttop">
              <p><?php if($username) echo '主内平安！'.$username.$gender.'| <a href="reg/usercenter.php?id='.$log_id.'">帐号管理</a>|<a href="reg/user_login.php?action=logout">退出</a>'; else echo'<a href="reg/user_login.htm" title="登录" target="main">登 录</a>|
			 		<a href="reg/user_reg.htm" title="注 册" target="main">注 册</a> '; ?>
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
		
		  <a href="indexbackup.html"><blink><font color="#FFFF66"><strong>活动预告:<br/></strong>暂定于X月XX
		  日在熊溪湖公园（Bear Creek Park)举办野餐烤肉活动...
		  </font></blink></a></p>
     </div>       
          
      <p>&nbsp;&nbsp;</p>
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
				$pic_query = mysql_query("SELECT * FROM `$paid` where ppath='$pid'");
				$pic_result = mysql_fetch_array($pic_query);?>
	
			<h2><?php if (!$result[patitle])$result[patitle]=$paid; echo $result[patitle];?></h2>
           
                <table width="640" border="0" cellpadding="2" style="font-size:12px" >
              
                  <tr><th>
                    <?php if (!$pic_result[ptitle])$pic_result[ptitle]=$pid; echo $pic_result[ptitle];?>
                    
                  </th></tr> 
                 
				 <tr><th>
                      <div align="center">
                      <?php echo '<img src="phpThumb/phpThumb.php?src=../pictures/'.$paid.'/'.$pid.'&w=660&h=440" />';?>                      </div>	</th></tr>
				  <tr align="left"><th>
                    <strong>简评：&nbsp;</strong>
                     <?php echo $pic_result[presume];?> 
					</th></tr>		
                <tr><th>  
                  <a href=<?php echo '"picdisplay2.php?paid='.$paid.'&pid='.$pid.'"';?> >两倍尺寸</a>&nbsp;
				  <a href=<?php echo '"picdisplayo.php?paid='.$paid.'&pid='.$pid.'"';?> >原始尺寸</a> &nbsp;
				 <?php if(($username == $pic_result[prec]) or ($pic_result[pright]<=$pright)) echo '<a href="picm.php?paid='.$paid.'&pid='.$pid.'">更改图片属性</a> &nbsp;';?>
				  <a href=<?php echo '"padisplays.php?paid='.$paid.'&pages='.$pages.'"';?> >返 回</a></th></tr>
				 <tr> <th> 
				 <?php echo "last modified：&nbsp;" .$pic_result[prec].",&nbsp; updated at&nbsp;".$pic_result[pdate];?>     
				  </th></tr>  
				  </table>
                         
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
		
		<a href="#">RSS Feed</a> | 
		
		</p>
	</div>
	</div>

</body>

</html>
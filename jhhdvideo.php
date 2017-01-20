<?php session_start(); 
$filepath = 'countjhhd.txt';
if ($_SESSION['jhhdtemp'] == '')//判断$_SESSION[temp]的值是否为空,其中的temp为自定义的变量
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
 $_SESSION['jhhdtemp'] = 1;//登录以后,给$_SESSION[temp]赋一个值1
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

if(!$_SESSION['right']) $pright=0;
else $pright = $_SESSION['right'];
$username = $_SESSION['username'];
$log_id = $_SESSION['log_id'];
$gender = $_SESSION['gender'];
$realname = $_SESSION['realname'];
$name=$realname;
if(!$name)$name=$username;
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
              <p><?php if($name) echo '主内平安！'.$name.$gender.'| <a href="reg/usercenter.php?id='.$log_id.'&fr=jhhd.php">帐号管理</a>|<a href="reg/login.php?action=logout&fr=jhhd.php">退出</a>';else echo'<a href="reg/login.php?fr=jhhd.php" title="登录" >登 录</a>|
			 		<a href="reg/reg.php?fr=jhhd.php" title="注 册" >注 册</a>'; ?>
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
    <div align="center" style="width:660px">
     <div id="homepic1" style="background:url(images/renais.jpg)">
        <p class="message_hsss" align="left" >
		
		 	 <font color="#FF6600"> <a href="fyay.php"> <font color="#FF0000"><strong><blink>2013年圣诞福音聚会预告</blink>:<br/>
		 	 </strong></font></a>12月22日 上午10：00-12：30，<br/> 教会音乐厅， 欢迎慕道朋友参加！</font></p>
     </div>       
          
      <p>&nbsp;&nbsp;</p>
 <?php  $conn = @mysql_connect("50.63.231.66","mess","Christ!1225"); 
				if (!$conn){ die("login error" . mysql_error()); } 
				
				mysql_select_db("mess", $conn); 
				mysql_query("SET NAMES 'UTF8'");
			
				$check_query = mysql_query("select * from video ORDER BY vid DESC");
				 
 	
				?>
    


      <p></p>
      <p>&nbsp;</p>

     
	    
    </div>

            <div id="shipinlan">
	
                    <h2>活 动 视 频</a></h2>
 
					<?
                    
					while($result = mysql_fetch_array($check_query)){
                    echo '<div class="manu_boxs" ><a href="jhhdvplay.php?vid='.$result[vid].'"><img src="phpThumb/phpThumb.php?src=../video/'.$result[picname].'&w=140&h=79" width="140" height="79" style="overflow:hidden" /></a>';
                    echo '<p><a href="jhhdvplay.php?vid='.$result[vid].'">'.$result[title].'</a></p>';
                    echo '<p><a href="jhhdvalbum.php?valbum='.$result[album].'">'.$result[album].'</a></p></div>';
                 	

                   }?>
                   
                    <p>&nbsp;</p>
              </div>
				
	
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
     <div align="center"><font face="Arial"><?  echo '欢迎来基督荣耀教会网站，教会活动栏目，您是本网页2013年第<font color="#FF0000">'.file_get_contents($filepath).'</font>位访客';?></font></div><font face="Arial">

<script type="text/javascript">
swfobject.registerObject("FLVPlayer1");
</script>
</font></body>

</html>
<?php session_start();
$right = $_SESSION['right'];
$paid=$_GET[paid];
$pid=$_GET[pid];
$pages=$_GET[pages];if(!$pages) $pages=1;
$ptitle=$_POST['ptitle'];
$preusme=$_POST['presume'];
$pdis=$_POST['dis'];
$username = $_SESSION['username'];
$log_id = $_SESSION['log_id'];
$gender = $_SESSION['gender'];
date_default_timezone_set('America/Vancouver');
$newtime=date('Y-n-d,g:iA');
 $conn = @mysql_connect("picdate.db.8559606.hostedresource.com","picdate","Christ!1225"); 
				if (!$conn){die("login error" . mysql_error());} 
				
				mysql_select_db("picdate", $conn); 
				mysql_query("SET NAMES 'UTF8'");
				$query = mysql_query("select * from video where paid='$paid'");
				$result = mysql_fetch_array($query);
				$pic_query = mysql_query("SELECT * FROM `$paid` where ppath='$pid'");
				$pic_result = mysql_fetch_array($pic_query);
	
if(!isset($_SESSION['username'])){exit('Please login first!<br/> Click <a href="reg/user_login.htm">back</a> to login!');}
if(($_SESSION['username']!=$pic_result[prec]) && ($_SESSION[right]<$pright)) {exit('Sorry<br/> You are not authored to make change! <br/> Click <a href="javascript:history.back(-1)">here</a> to go Back!');}
if(isset($_POST['submit'])){
	mysql_query("UPDATE `$paid` SET ptitle = '$ptitle', presume = '$presume', prec = '$username', pdate = '$newtime' where ppath='$pid'"); 
	 exit('Congratulate! your picture are updated successly<br/>Click <a href="javascript:history.back(-1)">Here</a> to continue.');}?>

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


			<h2><?php if (!$result[patitle])$result[patitle]=$paid; echo $result[patitle];?></h2>
            <form action=<?php echo '"picmsubmit.php?paid='.$paid.'&pid='.$pid.'"';?> method="post">
               <input name="ptitle" type="text" value="<?php if (!$pic_result[ptitle])$pic_result[ptitle]=$pid; echo $pic_result[ptitle];?>" />在此更改您的照片标题
                      
                    <?php echo '<p><img src="phpThumb/phpThumb.php?src=../pictures/'.$paid.'/'.$pid.'&w=660&h=440" /></p>';?>
				<p>  <strong>在此更改您的照片简评：</strong><br />
                      <textarea name="presume" style="width:100%" style="font-size:13px" rows="11" wrap="virtual" dir="ltr" lang="zh"><?php echo $pic_result[presume];?> </textarea></p>
					<p>  <input name="pdis" type="radio" value="0" />自由浏览
					  <input name="pdis" type="radio" value="1" />注册浏览  
					  <input name="pdis" type="radio" value="2" />教会浏览 
					  <input name="pdis" type="radio" value="5" />个人收藏 
					<input name="submit" type="submit" value="保存更改" /> 
					<?php echo '<a href="picdisplay.php?paid='.$paid.'&pid='.$pid.'&pages='.$pages.'">返回</a>';?></p>
                     <p>	<?php echo "last modified：&nbsp;" .$pic_result[prec].",&nbsp; updated at&nbsp;".$pic_result[pdate];?></p>      
            </form>
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
<?php session_start();
$username=$_SESSION['username'];
$log_id=$_SESSION['log_id'];
$gender = $_SESSION['gender'];?>
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

<div id="wrapper" style="width:660px" align="center" >
   <div id="header" style="width:660px" >
		<div id="hright">
			<div id="hrighttop">
				<p>	<?php if($username) echo '主内平安！'.$username.$gender.'| <a href="reg/usercenter.php?id='.$log_id.'">帐号管理</a>|<a href="reg/user_login.php?action=logout">退出</a>'; else echo'<a href="reg/user_login.htm" title="登录" target="main">登 录</a>|
			 		<a href="reg/user_reg.htm" title="注 册" target="main">注 册</a> '; ?>
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

	

	 
   <div style="width:660px" align="center" > 
   <div id="homepic1" >
   
   <p class="message_hss" >
		  <object id="Object1" width="25" height="18" data="player_mp3_button.swf" type="application/x-shockwave-flash">
            <noscript>
              <a href="http://www.dvdvideosoft.com/products/dvd/Free-YouTube-Download.htm">youtube video downloader</a>
            </noscript>
            <param name="movie" value="player_mp3_button.swf" />
            <param name="FlashVars" value="mp3=mrll/120117.mp3&showslider=0&width=25&height=18&loop=0&volume=100&buttoncolor=66ff00&buttonovercolor=FFFFFF&bgcolor1=97ee85&bgcolor2=073e07&bgcolor=0b480c " />
          </object>
		  &nbsp;&nbsp;<a href="mrll/mrll.htm"><strong><font color=#97ee85>活 水</font></strong></a></p>
  
   <div id="message_cders" >
					<?
						function leap_year($year){
						if($year %4 ==0){
						return true;
						
						}
						else{
						return false;
						}
						}
						/*以上语句定义判断闰年的函数*/
						function setup(){
						global $mon_num;
						$mon_num=array(31,30,31,30,31,30,31,31,30,31,30,31);
						global $mon_name;
						$mon_name=array("一","二","三","四","五","六","七","八","九","十","十一","十二");
						global $firstday;
						/* $firstday 是每月的第一天，以上三个全局变量均要在代码正文部分出现*/
						if(leap_year($firstday[year])) {
						/*如果当前时间是闰年。firstday 由程序正文部分得出*/
						$mon_num[1]=29;
						}
						else{
						 
						$mon_num[1]=28;
						}
						}
						/*以上定义的函数判断了闰年的 2 月份和非闰年的 2 月份各是多少天*/
						/*function showline($content,$show_color){
						$begin_mark="<td width=25 height=4>";
						$begin_mark=$begin_mark."<font color=$show_color><strong>";
						$end_mark="</strong></font></td>";
						以上三行为起始标签和终结标签的 HTML 代码显示
						echo $begin_mark.$content.$end_mark;
						}
						以上函数进行单元格的显示控制*/
					
						$firstday=getdate(mktime(0,0,0,date("m"),1,date("Y")));/*获得本月第一天日期*/
						$today=getdate(mktime(0,0,0,date("m"),date("d"),date("Y")));/*获得当天日期*/
						setup();/*初始化*/
						/*以下开始表格的表头*/
												
						echo "<table border=0 cellpadding=0 cellspacing=0 >";
						echo "<th colspan=7 height=4 >";
						echo "<font color=yellow>";
						echo "$firstday[year]年 &nbsp;".$mon_name[$firstday[mon]-1]."月";
						echo "</font>";
						echo "</th>";
						//以下准备表格的第一行，先定义星期日、一...
						$weekDay[0]="日";
						 
						$weekDay[1]="一";
						$weekDay[2]="二";
						$weekDay[3]="三";
						$weekDay[4]="四";
						$weekDay[5]="五";
						$weekDay[6]="六";
						
						
						echo "<tr align=center valign=center>";
						for ($dayNum=0;$dayNum<7;$dayNum++)
						{echo '<td width=25 height=4><font color="yellow"><strong>'.$weekDay[$dayNum].'</strong></font></td>';}
						/*{showline($weekDay[$dayNum],"yellow");}*/
						echo "</tr>";
						
						
						$toweek=$firstday[wday];/*本月的第一天是星期几(星期中第几天:wday)*/
						$lastday=$mon_num[$firstday[mon]-1];/*本月的最后一天是几号，因是$mon_num 数组， 故要下标减 1*/
						$day_count=1;/*当前应该显示的天数*/
						$up_to_firstday=1;/*是否显示到本月的第一天，用于累加计算开头显示的空格*/
						for ($row=0;$row<=($lastday+$toweek)/7;$row++)/*本月有几个星期*/
						/*下面开始真正的日期显示*/
						{
						echo "<tr align=center valign=center>";
						for ($col=1;$col<=7;$col++)
						/*在第一天前面显示的都是空格，在最后一天后面显示的也都是空格，中间的日期显 示调用自定义函数 showline()*/
						{
						
						if(($up_to_firstday<=$toweek)||($day_count>$lastday))
						{
						echo "<td >&nbsp;</td>";
						$up_to_firstday++;
						}
						else
						{
						
						if($day_count==$today[mday]){
						/*$did0=round((mktime(0,0,0,date("m"),date("d"),date("Y"))- mktime(0,0,0,01,01,2012))/3600/24)+1;*/	
						$dm0=date("n");$dd0=$day_count;
						echo '<td width=25 height=4><a href="xslx.php?dm='.$dm0.'&dd='.$dd0.'" style="text-decoration:none"><font color=#FF0000><strong>'.$day_count.'</strong></font></a></td>';}
						else{
						/*$did=round((mktime(0,0,0,date("m"),$day_count,date("Y"))- mktime(0,0,0,01,01,2012))/3600/24)+1;*/	
						$dm=date("n");$dd=$day_count;
						echo '<td width=25 height=4><a href="xslx.php?dm='.$dm.'&dd='.$dd.'" style="text-decoration:none"><font color=#FFFFFF><strong>'.$day_count.'</strong></font></a></td>';}
						 
						$day_count++;
						}
						}
						
						echo "</tr>";
						}
						
						echo "</table>";
						
									
						?>
</div>

		
   
   </div>
	
	<?php $dm=$_GET[dm];$dd=$_GET[dd];$look=$_GET[look];
		  
		  if(!$dd or ($dd == $dd0)){$dm=$dm0; $dd=$dd0;
		  	echo '<h2  align="left"><strong>'.$dm.'月'.$dd.'日&nbsp;今日读经</strong>&nbsp;</h2>';}
		  else{$driqi=$dayid;
		  	echo '<h2  align="left"><strong>'.$dm.'月'.$dd.'日&nbsp;经节</strong>&nbsp;</h2>';}?>		
		  <div align="justify">
	  			 <?php  $driqi=$dm."月".$dd."日";
				 		$conn = @ mysql_connect("50.63.231.66","mess","Christ!1225"); 
						if (!$conn){ die("erro conect with bd" . mysql_error()); } 
						mysql_select_db("mess", $conn); 
						mysql_query("SET NAMES 'UTF8'");
					$result=mysql_query("select * from daliybible where driqi='$driqi' limit 1");
					$row=mysql_fetch_array($result);
					if($row[ob1]!=$row[ob2]){$row[oc2]="<strong>".$row[ob2]."</strong>&nbsp".$row[oc2];}
					if($row[nb1]!=$row[nb2]){$row[nc2]="<strong>".$row[nb2]."</strong>&nbsp".$row[nc2];}
					echo "<p><strong>".$row[ob1]."</strong>&nbsp;".$row[oc1]."--".$row[oc2].",&nbsp;&nbsp;<strong>".$row[nb1]."</strong>&nbsp;".$row[nc1]."--".$row[nc2].",&nbsp;&nbsp;<strong>".$row[sb]."</strong>".$row[sc1]."--".$row[sc2].",&nbsp;&nbsp;<strong>".$row[rb]."</strong>".$row[rc1]."--".$row[rc2]."</p>";
	?>				
	<p>&nbsp;</p></div>
	
	<h2  align="left"><strong>感动分享</strong>&nbsp;</h2>
 	<div align="left">
	  <?php 

						if($dd<4){$did2=($dm."0".$dd) +3;$dm=$dm-1;if($dm==0){$dm=12;}$dd=$dd+27; $did1=$dm.$dd;}
						elseif($dd>3 && $dd<10){$did1=($dm."0".$dd)-3; $did2=($dm."0".$dd)+3;}
						elseif($dd>9 && $dd<28){$did1=($dm.$dd) -3;$did2=($dm.$dd) +3;}
						elseif($dd>27){$did1=($dm."0".$dd) -3; $dm=$dm+1; if($dm==13){$dm=1;} $dd=$dd-27; $did2=$dm."0".$dd;}					
						$conn = @ mysql_connect("biblewords.db.8559606.hostedresource.com","biblewords","Christ!1225"); 
						if (!$conn){ die("erro conect with bd" . mysql_error()); } 
						
						mysql_select_db("biblewords", $conn); 
						mysql_query("SET NAMES 'UTF8'");
					if($look=='all'){$result=mysql_query("select * from biblebbs order by bbsid desc");}	
					else{$result=mysql_query("select * from biblebbs where did>='$did1' and did<='$did2' order by bbsid desc");}
					while($row=mysql_fetch_array($result)){
					echo "<br/><p><strong>".$row[title]."</strong></p>";
					echo "<p>".$row[content]."</p>";
					echo "<p>&nbsp;&nbsp;<font color=red>".$row[author]."&nbsp;&nbsp;&nbsp;&nbsp;".$row[wtime]."</font></p><br/>";} ?>
     <p align="right" ><a href="xslx.php?look=all">查看全部分享</a></p>
	    </div>
		<h2  align="left"><strong>我要发言</strong> &nbsp;</h2>
		 <div align="justify">		    
		 <form action="submitlx.php" method="post" enctype="multipart/form-data" id="form1">
		 <input name="wtime" type="hidden" value=<?php echo date('Y年n月d日,g:iA');?> />
		  <input name="did" type="hidden" value=<?php echo date('nd');?> />
		 <p align="left">主 题<input name="title" type="text" /></p>
		 <p><textarea name="content" style="width:100%" style="font-size:14px" rows="11" wrap="virtual" dir="ltr" lang="zh" > 温馨提示：发言前，请先登录，如您的发言大于1000字，请分两次提交。</textarea>
		 <input type="submit" name="Submit" value="提交" />
           </p>
	  </form></div>
	
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
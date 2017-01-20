<?php 
session_start();
$filepath = 'countxslx.txt';
if ($_SESSION['xslxtemp'] == '')//判断$_SESSION[temp]的值是否为空,其中的temp为自定义的变量
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
 $_SESSION['xslxtemp'] = 1;//登录以后,给$_SESSION[temp]赋一个值1
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
<script type="text/javascript" src="swfobject.js"></script>
<script type="text/javascript" src="1bit.js"></script>
<script type="text/javascript">
	oneBit = new OneBit('1bit.swf');
	oneBit.ready(function() {
	    // Using specify you can set 'color', 'background', 'playerSize', 'position' and 'analytics' - all are optional
		oneBit.specify('color', '#B3F7FF');
		oneBit.specify('playerSize', '12');
		oneBit.specify('background', 'transparent');
		// Apply is called after options are specified and includes the CSS selector
		oneBit.apply('a');
	});
</script>

<style type="text/css">
	.onebit_mp3 a { color: #B3F7FF; }
	.onebit_mp3 a:hover { color: #33FF00; }
	.onebit_mp3 a:link { color: #33FF00; }

</style>

</head>

<body >

<div id="wrapper" style="width:660px" align="center" >
   <div id="header" style="width:660px; color: #687B1D;" >
		<div id="hright">
			<div id="hrighttop">
				<p>	<?php if($name) echo '主内平安！'.$name.$gender.'| <a href="reg/usercenter.php?id='.$log_id.'&fr=xslx.php">帐号管理</a>|<a href="reg/login.php?action=logout&fr=xslx.php">退出</a>';else echo'<a href="reg/login.php?fr=xslx.php" title="登录" >登 录</a>|
			 		<a href="reg/reg.php?fr=xslx.php" title="注 册" >注 册</a>'; ?>
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

	

	 
   <div style="width:660px" align="center" > 
   <div id="homepic1" >
   
   <p class="message_hss" style="vertical-align:top" >
   <?php  $conn = @mysql_connect("50.63.231.66","mess","Christ!1225"); 
				if (!$conn){ die("login error" . mysql_error()); } 
				
				mysql_select_db("mess", $conn); 
				mysql_query("SET NAMES 'UTF8'");
				$check_query = mysql_query("select * from mrll ORDER BY mriqi DESC");
			  if($result = mysql_fetch_array($check_query))
		echo '<a href="mrll.php"><font color=#B3F7FF><strong>生命活水</strong></font></a>&nbsp; <a href="mrll/'.$result[mpath].'"></a>'; ?></p>
  
   <div id="message_cders" >
					<?php
						
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
					$result=mysql_query("select * from dbible where driqi='$driqi' limit 1");
					$row=mysql_fetch_array($result);
	
					//echo '<p style="color:#FF0000" >'.$row[ot].'&nbsp;&nbsp;&nbsp;'.$row[nt].'&nbsp;&nbsp;&nbsp;'.$row[ps].'&nbsp;&nbsp;&nbsp;'.$row[pro].'</p> <br/>';
		?>		

        
        
        
				
                 <p id="ot" style="color:#FF0000" onClick="if(otc.style.display=='none'){otc.style.display=''; }else{otc.style.display='none';}"><strong><? echo '<a href="#">'.$row[ot].'</a>'; ?></strong></p>
  				 <p id="otc" style="display:none;" ><font color=#333><? echo $row[otc]; ?><br/><br/></font></p> 
                 
                 <p id="nt" style="color:#FF0000" onClick="if(ntc.style.display=='none'){ntc.style.display='';}else{ntc.style.display='none';}"><strong><? echo '<a href="#">'.$row[nt].'</a>'; ?></strong></p>
  				 <p id="ntc" style="display:none;" ><font color=#333><? echo $row[ntc]; ?> <br/><br/></font></p>
                 
                 <p id="ps" style="color:#FF0000" onClick="if(psc.style.display=='none'){psc.style.display='';}else{psc.style.display='none';}"><strong><? echo '<a href="#">'.$row[ps].'</a>'; ?></strong></p>
       			 <p id="psc" style="display:none;" ><font color=#333><? echo $row[psc]; ?> <br/><br/></font></p>
                 
                 <p id="pro" style="color:#FF0000" onClick="if(proc.style.display=='none'){proc.style.display='';}else{proc.style.display='none';}"><strong><? echo '<a href="#">'.$row[pro].'</a>'; ?></strong></p>
  				 <p id="proc" style="display:none;" ><font color=#333><? echo $row[proc]; ?> <br/><br/></font></p>

				
					
	<p >&nbsp;</p></div>
	
	<h2 align="justify" ><strong >感动分享&nbsp;<a href="#wyfy" style="text-decoration:none" >我要发言</a> </strong>&nbsp;</h2>
 	<div align="left">
	  <?php 

						if($dd<10)$did= $dm.'0'.$dd; else $did= $dm.$dd;		
						$conn = @ mysql_connect("biblewords.db.8559606.hostedresource.com","biblewords","Christ!1225"); 
						if (!$conn){ die("erro conect with bd" . mysql_error()); } 
						
						mysql_select_db("biblewords", $conn); 
						mysql_query("SET NAMES 'UTF8'");
					if($look=='all'){$result=mysql_query("select * from biblebbs order by bbsid desc");}	
					else{$result=mysql_query("select * from biblebbs where did<='$did' order by bbsid desc limit 5");}
					while($row=mysql_fetch_array($result)){
					echo "<br/><p><strong>".$row[title]."</strong></p>";
					echo '<p>'.$row[content].'</p>';
					echo "<p>&nbsp;&nbsp;<font color=red>".$row[author]."&nbsp;&nbsp;&nbsp;&nbsp;".$row[wtime]."</font></p><br/>";} ?>
     <p align="right" ><a href="xslx.php?look=all">查看全部分享</a></p>
     </div>
		<h2 align="left"><strong>我要发言</strong> &nbsp;</h2>
		 <div align="justify">		    
		 <form action="submitlx.php" method="post" enctype="multipart/form-data" id="form1">
		 <input name="wtime" type="hidden" value=<?php date_default_timezone_set('America/Vancouver'); echo date('Y年n月d日,g:iA');?> />
		  <input name="did" type="hidden" value=<?php echo date('nd');?> />
		 <p align="left">主 题<input name="title" type="text" /></p>
		 <p><textarea name="content" style="width:100%" rows="11" wrap="virtual" dir="ltr" lang="zh" > 温馨提示：发言前，请先登录，如您的发言大于1000字，请分两次提交。</textarea>
		 <input type="submit" name="Submit" value="提交" />
           </p>
	  </form></div>
	  
	
  </div>	
	<p id="wyfy" name="wyfy"></p>	

	
	

	<div id="footer" >
		
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
     <div align="center"><font face="Arial"><?  echo '欢迎浏览基督荣耀教会线上灵修栏目，您是本网页'. date("Y").'年第<font color="#FF0000">'.file_get_contents($filepath).'</font>位访客';?></font></div>
</div>


</body>

</html>
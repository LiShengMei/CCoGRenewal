<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<xml version="1.0" encoding="UTF-8" > 

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

<div id="wrapper">
<div id="homepic" style="background:url(images/lshan.jpg)">
	<div id="message_cder">
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
						function showline($content,$show_color){
						$begin_mark="<td width=25 height=5>";
						$begin_mark=$begin_mark."<font color=$show_color><strong>";
						$end_mark="</strong></font></td>";
						/*以上三行为起始标签和终结标签的 HTML 代码显示*/
						echo $begin_mark.$content.$end_mark;
						}
						/*以上函数进行单元格的显示控制*/
					
						$firstday=getdate(mktime(0,0,0,date("m"),1,date("Y")));/*获得本月第一天日期*/
						$today=getdate(mktime(0,0,0,date("m"),date("d"),date("Y")));/*获得当天日期*/
						setup();/*初始化*/
						/*以下开始表格的表头*/
												
						echo "<table border=0 cellpadding=0 cellspacing=0 >";
						echo "<th colspan=7 height=5 >";
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
						{showline($weekDay[$dayNum],"yellow");}
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
						showline($day_count,"#FF0000");}
						else{
						showline($day_count,"#FFFFFF");}
						 
						$day_count++;
						}
						}
						
						echo "</tr>";
						}
						
						echo "</table>";
						//$dayid=round((mktime(0,0,0,date("m"),date("d"),date("Y"))- mktime(0,0,0,12,25,2000))/3600/24)					
						?>
</div>
</div>
		<div id="bottomcontenttop"></div>

	<div id="bottomcontent"> 
	<?php 

						
						$conn = @ mysql_connect("biblewords.db.8559606.hostedresource.com","biblewords","Christ!1225"); 
						if (!$conn){ die("erro conect with bd" . mysql_error()); } 
						
						mysql_select_db("biblewords", $conn); 
						mysql_query("SET NAMES 'UTF8'");
	?>					

 <div class="boxes" style="height:800px">

		<h2 class="STYLE1">今日读经</h2>
		<img src="images/p1.jpg" alt="" class="pic" width="270" height="60" />	
				<?php // $result=mysql_query("select * from bible where bid='$dayid'");
					//echo "<p><strong><".>$row[chart]."</strong></p><br/><p>";	
					//while($row=mysql_fetch_array($result)){
					//echo $row[bid].$row[book].$row[chartid].$row[words];}
					//echo "</p>";?>
		<p><strong><></strong></p>
			<p>1 以色列王大卫儿子所罗门的箴言。 2 要使人晓得智慧和训诲。分辨通达的言语。 3 使人处事，领受智慧，仁义，公平，正直的训诲。 4 使愚人灵明，使少年人有知识和谋略。 5 使智慧人听见，增长学问。使聪明人得着智谋。 6 使人明白箴言和譬喻，懂得智慧人的言词和谜语。 7 敬畏耶和华是知识的开端。愚妄人藐视智慧和训诲。 8 我儿，要听你父亲的训诲，不可离弃你母亲的法则。（或作指教） 9 因为这要作你头上的华冠，你项上的金链。 10 我儿，恶人若引诱你，你不可随从。 11 他们若说，你与我们同去，我们要埋伏流人之血，要蹲伏害无罪之人。 12 我们好像阴间，把他们活活吞下。他们如同下坑的人，被我们囫囵吞了。 13 我们必得各样宝物，将所掳来的装满房屋。 14 你与我们大家同分。我们共用一个囊袋。 15 我儿，不要与他们同行一道。禁止你脚走他们的路。 16 因为他们的脚奔跑行恶，他们急速流人的血。 17 好像飞鸟，网罗设在眼前仍不躲避。 18 这些人埋伏，是为自流己血。蹲伏是为自害己命。 19 凡贪恋财利的，所行之路，都是如此。这贪恋之心，乃夺去得财者之命。 20 智慧在街市上呼喊，在宽阔处发声。 21 在热闹街头喊叫，在城门口，在城中发出言语。 22 说你们愚昧人喜爱愚昧，亵慢人喜欢亵慢，愚顽人恨恶知识，要到几时呢？ 23 你们当因我的责备回转。我要将我的灵浇灌你们，将我的话指示你们。 24 我呼唤你们不肯听从。我伸手，无人理会。 25 反轻弃我一切的劝戒，不肯受我的责备。 26 你们遭灾难，我就发笑惊恐临到你们，我必嗤笑。 27 惊恐临到你们，好像狂风，灾难来到，如同暴风。急难痛苦临到你们身上。 28 那时，你们必呼求我，我却不答应，恳切的寻找我，却寻不见。 29 因为你们恨恶知识，不喜爱敬畏耶和华， 30 不听我的劝戒，藐视我一切的责备， 31 所以必吃自结的果子，充满自设的计谋。 32 愚昧人背道，必杀己身，愚顽人安逸，必害己命。 33 惟有听从我的，必安然居住，得享安静，不怕灾祸。</p>
			<p>&nbsp;</p>
	
	  </div>
		<div class="boxesw" >
		
			<h2 class="STYLE1">感动分享</h2>
			<img src="images/p1.jpg" alt="" class="pic" width="560" height="60" />	
		 <?php  $result=mysql_query("select * from biblebbs where jingjie='proverbs01'");
						
					while($row=mysql_fetch_array($result)){
					echo "<br/><p><strong>".$row[title]."</strong></p>";
					echo "<p>".$row[content]."</p>";
					echo "<p>&nbsp;&nbsp;".$row[author]."&nbsp;&nbsp;&nbsp;&nbsp;".$row[wtime]."</p><br/>";} ?>
	
		</div>		
		
		<div class="boxesw" style="height:200px">
		
			<h2 class="STYLE1" align="">发 言 </h2>
			
			<form action="submitbbs.php" method="post" enctype="multipart/form-data" id="form1">
			  <p align="left">
			    主 题<input name="title" type="text" />
			    <textarea name="content" cols="90" rows="11" wrap="virtual" dir="ltr" lang="zh" style="font-size:11px">请在此输入您的感动</textarea>
			    <input type="submit" name="Submit" value="提交" />
			  
		  </form>
			  </p>
		</div>
	
	

	</div>
	
	<div id="bottomcontentbtm"></div>		


</div>


</body>

</html>
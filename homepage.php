<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">


<urlset xmlns="http://www.google.com/schemas/sitemap/0.84" /> 

<head>

<title>基督荣耀教会</title>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

<meta name="Description" content="耶稣是道路真理生命"/>

<meta name="Keywords" content="Christ, Jesus,love,God, heaven,father,son, 耶稣, 基督,神,爱,生命，"/>	

<meta name="Distribution" content="Global"/>

<meta name="Robots" content="index,follow"/>

<link rel="stylesheet" type="text/css" href="inc/style.css" media="all" />

<style type="text/css">
<!--
.STYLE1 {font-size: 12px}
-->
</style>
</head>

<body>

<div id="wrapper">

		<div id="homepic">
		<p class="message_pic">
		  <object id="Object1" width="25" height="18" data="player_mp3_button.swf" type="application/x-shockwave-flash">
            <noscript>
              <a href="http://www.dvdvideosoft.com/products/dvd/Free-YouTube-Download.htm">youtube video downloader</a>
            </noscript>
            <param name="movie" value="player_mp3_button.swf" />
            <param name="FlashVars" value="mp3=mrll/120117.mp3&showslider=0&width=25&height=18&loop=0&volume=100&buttoncolor=ffffff&buttonovercolor=e0b16f&bgcolor1=d49741&bgcolor2=d38c29&bgcolor=d49741 " />
          </object>
		  &nbsp;&nbsp;<a href="mrll/mrll.htm"><strong><blink>活 水</blink></strong></a></p>
			<div class="message">

			<h4>来，同奔天程! </h4>
			<?php
                          print($jid);

			if($jid==458){
					echo '<p> 我们既有这许多的见证人，如同云彩围着我们，就当放下各样的重担，脱去容易缠累我们的罪，存心忍耐 奔那摆在我们前头的路程， 仰望为我们信心创始成终的耶稣。 他因那摆在前面的喜乐，就轻看羞辱，忍受了十字架的苦难，便坐在神宝座的右边。<a href="#" target="main"> （来12：1）</a></P>';
				 }
			else {
                        			$jid=100*rand(0,5)+10*rand(0,9)+rand(0,9);
						$conn = @ mysql_connect("biblewords.db.8559606.hostedresource.com","biblewords","Christ!1225"); 
						if (!$conn){ die("erro conect with bd" . mysql_error()); } 
						
						mysql_select_db("biblewords", $conn); 
						mysql_query("SET NAMES 'UTF8'");
						
						$result=mysql_query("select * from jinju where jid=$jid");
						$row=mysql_fetch_array($result);
						echo '<p>'.$row[word].'<a href="#" target="main"'.$row[jid].'>'.$row[jie].'</a></p>';
						echo "<EMBED SRC=jinju/".$row[index].".mp3 LOOP=false AUTOSTART=true HIDDEN=true WIDTH=0 HEIGHT=0></EMBED>";
					}
			?> 
			</div>
	
		</div>

	<div id="bottomcontenttop"></div>

	<div id="bottomcontent" style="height:330px">

			<div class="right">

			<h2>资源分享与交流论坛</h2>
			
				<div class="manu_box"><p class="thumbs">  <a href="zhuri.htm" target="main"><img src="images/thumb1.jpg"  width="40" height="40" alt="主日信息" /></a>主日信息</p></div>
				<div class="manu_box"><p class="thumbs">  <a href="mrll/mrll.htm" target="main"><img src="images/3.gif" width="40" height="40" alt="活 水" /></a>活 水</p></div>
				<div class="manu_box"><p class="thumbs">  <a href="message.htm" target="main"><img src="images/thumb2.jpg"  width="40" height="40" alt="查经聚会" /></a> 查经聚会</p></div>
			    <div class="manu_box"><p class="thumbs">  <a href="jianzheng.htm" target="main"><img src="images/thumb9.jpg"  width="40" height="40" alt="生命见证" /></a>生命见证</p> </div>
				
				<div class="manu_box"><p class="thumbs">  <a href="daliybible.php" target="main"><img src="images/thumb11.jpg"  width="40" height="40" alt="每日读经" /></a>每日读经</p>  </div>
			    <div class="manu_box"><p class="thumbs">  <a href="jhfs.htm" target="main"><img src="images/thumb7.jpg"  width="40" height="40" alt="聚会服事"  /></a>聚会服事 </p></div>
				<div class="manu_box"><p class="thumbs">  <a href="daidao.htm" target="main"><img src="images/thumb10.jpg"  width="40" height="40" alt="代祷事项" /></a>代祷事项</p></div>
				<div class="manu_box"><p class="thumbs">  <a href="yingji.htm" target="main"><img src="images/thumb4.jpg"  width="40" height="40" alt="活动相册" /></a>活动影集</p></div>
				
				 
				<div class="manu_box"><p class="thumbs">  <a href="tehui.htm" target="main"><img src="images/thumb3.jpg" width="40" height="40" alt="特会信息" /></a>特会信息</p></div>
			    <div class="manu_box"><p class="thumbs">  <a href="ebible.htm" target="main"><img src="images/thumb6.jpg"  width="40" height="40" alt="电子圣经" /></a>电子圣经</p></div>
				<div class="manu_box"><p class="thumbs">  <a href="book.htm" target="main"><img src="images/thumb5.jpg"  width="40" height="40" alt="属灵书籍" /></a>属灵书籍</p></div>
				<div class="manu_box"><p class="thumbs">  <a href="fuyin.htm" target="main"><img src="images/thumb12.jpg" width="40" height="40" alt="福音单页" /></a>福音单页</p></div>
		
			    
		
	    <p> 主内的生活既是如此，<a href="#">我们生活，动作，存留，都在乎祂。</a>当我们和主建立亲密的关系时，生活就是如此简单而又丰富多彩。 让我们和创造天地万物的主一起发现并尽情享受祂所赐给我们的一切吧 ！&nbsp; <a href="#"> >> 更多内容</a></p>
			
		</div>
	
		<div class="middle">
	
			<h2>主内新闻与代祷事务</h2>
		
				<img src="images/02.jpg" alt="" class="pic" width="270" height="60" />
			
				 <p><a href="isreal.htm"> 为以色列求平安，愿主在埃及和叙利亚的变局中掌王权</a> </p>
				 <p><a href="isreal.htm"> 以色列被尊崇拉比死前启示过弥赛亚,预言主将在前总理沙龙死后不久向以色列显现 </a> </p>
				 <p><a href="sina.htm"> 愿全球华人基督徒兴起，响应神呼招，行在神对华人在末后世代的伟大命定中 </a></p>
				 <p><a href="sina.htm"> 愿中国福音兴旺，愿神祝福中国的执政掌权者，认识耶和华，以神的智慧治理国家</a></p>
				 <p><a href="news.htm">  ”深夜呼聲，新郎回來的日子已經到了“ 11-11聚集大會 </a> </p>
				 <p><a href="pary.htm"> 愿神医治许师母和有身体软弱的弟兄姊妹，耶和华的喜乐是我们的力量 </a></p>
		
				<p> <a href="#"> >> 更多内容</a></p>
	
		</div>		
		
		<div class="left">
		
			<h2>主的话</h2>
						
			<img src="images/01.jpg" alt="" class="pic" width="270" height="60" />
			
			<p>论到从起初原有的<a href="#">生命之道</a> 就是我们所听见所看见，亲眼看过，亲手摸过的。 这生命已经显现出来，我们也看见过，现在又作见证，将原与父同在，且显现与我们那永远的生命，传给你们。我们将所看见，所听见的，传给你们，使你们与我们相交。我们乃是与父并他儿子<a href="#">耶稣基督</a>, 相交的.我们将这些话写给你们，使你们（有古卷作我们）的喜乐充足。 <a href="#">神就是光</a> ，在他毫无黑暗。这是我们从主所听见，又报给你们的信息。愿我们的神看你们配得过所蒙的召, 又用[大能]成就你们一切所羡慕的良善和一切因信心所做的工夫.(帖前1:11-12)</p>
			<p><a href="#"> >> 更多内容</a>.</p>
	
		</div>	
		<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
	</div>		

	<div id="bottomcontentbtm"></div>	
</div>

</body>

</html>
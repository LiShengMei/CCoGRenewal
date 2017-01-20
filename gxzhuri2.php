<?php session_start(); ?>
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

<div id="wrapper" align="center">


	<div align="center" style="width:660px">
	 <img src="images/p1.jpg" alt="" class="pic" width="660" height="60" />	
	 <?php
 $riqi = $_POST['riqi'];
$pname = $_POST['pname'];
$tname = $_POST['tname'];
$ptitle = $_POST['ptitle'];
$mcontent = $_POST['mcontent'];
$ffile = $_FILES['ffile']['name'];

	if(!isset($_POST['submit1'])&& !isset($_POST['submit2'])){
				if(!isset($_SESSION['username'])){exit('<br/><br/>Please click <a href="reg/user_login.htm">Here</a> to login First!');}
				if(!(($_SESSION['username'] == "david") or($_SESSION['username'] == "Jacob"))){ exit('Sorry!You are not be authorized to update this page!<br/>Click <a href="index.html">Here</a> to continue!');}		
				else{echo "<h2><br/><br/><br/>Welcome! &nbsp;".$_SESSION['username']."</h2>";}
				
		echo '
		<form name="gxzhuriForm"  enctype="multipart/form-data" method="post" action="gxzhuri1.php"  >
		<p>日期<input name="riqi" type="text" value="mm-dd-yyyy" /></p>
		<p>讲道<input name="pname" type="text" /></p>
		<p>翻译<input name="tname" type="text" /></p>
		<p>主题<input name="ptitle" type="text" /></p>
		<p>内容<br/><textarea name="mcontent"  style="width:100%"  rows="18" type="textarea" /></textarea></p>
	   	<p>视屏（FLASH 格式）<input name="ffile" type="file" /></p>
		<p><input name="submit1" value="预 览" type="submit"/>
		<input name="submit2" value="提 交" type="submit" /></p>
		</form>';
	}
 

	 if(isset($_POST['submit2'])){ 
						 
			 	if (($_FILES["ffile"]["type"] == "image/flv")&& ($_FILES["file"]["size"] < 20000))
				  {
				  if ($_FILES["ffile"]["error"] > 0)
					{
					echo "Return Code: " . $_FILES["ffile"]["error"] . "<br />";
					}
				  else
					{
					echo "Upload: " . $_FILES["ffile"]["name"] . "<br />";
					echo "Type: " . $_FILES["ffile"]["type"] . "<br />";
					echo "Size: " . ($_FILES["ffile"]["size"] / 1024) . " Kb<br />";
					echo "Temp file: " . $_FILES["ffile"]["tmp_name"] . "<br />";
				
					if (file_exists("upload/" . $_FILES["ffile"]["name"]))
					  {
					  echo $_FILES["ffile"]["name"] . " already exists. ";
					  }
					else
					  {
					  move_uploaded_file($_FILES["ffile"]["tmp_name"],
					  "video/" . $_FILES["ffile"]["name"]);
					  echo "Stored in: " . "video/" . $_FILES["ffile"]["name"];
					  }
					}
				  }
				else
				  {
				  echo "Invalid file";
				  }
 
 

				  
				 $ffile0 = trim($ffile,'.flv'); 
				 $conn = @mysql_connect("50.63.231.66","mess","Christ!1225"); 
				if (!$conn){ die("login error" . mysql_error()); } 
				
				mysql_select_db("mess", $conn); 
				mysql_query("SET NAMES 'UTF8'");
				$check_query = mysql_query("select * from zhuri where riqi='$riqi'and ptitle='$ptitle' limit 1");
				if($result = mysql_fetch_array($check_query)){
					echo 'Error! <br/> The message of: &nbsp; &nbsp;'.$ptitle.'<br/> &nbsp; &nbsp; at data: &nbsp; &nbsp; '.$riqi.'<br/> is  already exist! <br/>
					Please click <a href="javascript:history.back(-1)">back</a> and try again' ;
					exit;
				}
				
				$sql="insert into zhuri(zid,riqi,ptitle,pname,tname,mcontent,flv) VALUES ('','$riqi','$ptitle','$pname','$tname','$mcontent','$ffile')";
		  
				if(mysql_query($sql,$conn)){
					exit('Congratulate！you have update  new message successfully.');} 
				else {
					echo 'Sorry! update error',mysql_error(),'<br />';
					echo 'Click <a href="javascript:history.back(-1)">back</a> try again';
					
					 }
					 
			 }
 
 	if(isset($_POST['submit1'])){?>
	<h2 align="center">主日信息   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $ptitle; ?></h2>

			 
			 
			
				
				<p align="center" ><?php echo $pname;  if(tname){echo " &nbsp;&nbsp;Trans:".$tname;} ?>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $riqi; ?></p>
				<p align="justify">
				<strong>信息摘要</strong><br />
				    <?php echo $mcontent; ?></p><p>&nbsp; </p>

			
			<p align="center">
	
<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,0,0" width="640" height="360" id="FLVPlayer">
                          <param name="movie" value="FLVPlayer_Progressive.swf" />
                          <param name="salign" value="lt" />
                          <param name="quality" value="high" />
                          <param name="scale" value="noscale" />
                          <param name="FlashVars" value="&MM_ComponentVersion=1&skinName=Clear_Skin_3&streamName=video/<?php echo $ffile; ?>&autoPlay=false&autoRewind=false" />
                          <embed src="FLVPlayer_Progressive.swf" flashvars="&MM_ComponentVersion=1&skinName=Clear_Skin_3&streamName=video/<?php echo $ffile; ?>&autoPlay=false&autoRewind=false" quality="high" scale="noscale" width="640" height="360" name="FLVPlayer" salign="LT" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />                        
</object>
</p>
							<p> <a href="javascript:history.go(-1);">返 回</a></p>
							
							
	<?php }	?>				
    

	  </div>
		


</div>


</body>

</html>
<?php session_start();
$riqi = $_POST['riqi'];
$pname = $_POST['pname'];
$tname = $_POST['tname'];
$ptitle = $_POST['ptitle'];
$mcontent = $_POST['mcontent'];
$ffile = $_POST['ffile'];
$right = $_SESSION['right'];
$username = $_SESSION['username'];
 ?>
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
	 <img src="images/01.jpg" alt="" class="pic" width="660" height="60" />	
	 <?php


	if(!isset($_POST['submit1'])&& !isset($_POST['submit2'])){
				if(!$username){exit('<br/><br/>Please click <a href="reg/login.php?fr=gxzhuri1.php">Here</a> to login First!');}
				if($right < 5) exit('Sorry!You are not be authorized to update this page!<br/>Click <a href="index.html">Here</a> to continue!');	
				else echo "<h2><br/><br/><br/>Welcome! &nbsp;".$username."</h2>";
	
			
		echo '网页构建中。。。
		
		
		请稍后再试！';
		/*	<select name="pa">
		<option value="2" >h</option> </select>	
		<form name="gxzhuriForm"  enctype="multipart/form-data" method="post" action="gxzhuri1.php"  >
		<p>日期<input name="riqi" type="text" value="mm-dd-yyyy" /></p>
		<p>讲道<input name="pname" type="text" /></p>
		<p>翻译<input name="tname" type="text" /></p>
		<p>主题<input name="ptitle" type="text" /></p>
		<p>内容<br/><textarea name="mcontent"  style="width:100%"  rows="18" type="textarea" /></textarea></p>
		<p>在此输入视频文件名（FLV格式）<input name="ffile" type="text" /></p>
	   	
		<p><input name="submit1" value="预 览" type="submit"/>
		<input name="submit2" value="提 交" type="submit" /></p>
		</form>';
	}
 


			 if(isset($_POST['submit23'])){ 
		/*	****************************************************************************************************
		 $ftp_server = "72.167.1.128";
				$ftp_user = "davidli2012";
				$ftp_pass = "Pastor2012";
			  $conn_id = ftp_connect($ftp_server)or die("Couldn't connect to $ftp_server"); 
			  if (@ftp_login($conn_id, $ftp_user, $ftp_pass)) {echo "Connected as $ftp_user@$ftp_server\n";}
			  else {echo "Couldn't connect as $ftp_user\n";}  
			 if (ftp_put($conn_id, $ffile, $ffile, FTP_BINARY)) {
				 echo "successfully uploaded $file\n";
				} else {
				 echo "There was a problem while uploading $file\n";
				}
			
			
			　ftp_quit($conn_id); 
			
			***************************************************************************************************
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
			******************************************************************************************************************
			
				  
				 $ffile = trim($ffile,'.flv'); 
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
					exit('Congratulate！you have update  new message successfully.<br/> 点击 <a href="zhuri1.php">主日信息</a>查看更新 ');} 
				else {
					echo 'Sorry! update error',mysql_error(),'<br />';
					echo 'Click <a href="javascript:history.back(-1)">back</a> try again';
					
					 }
					 
			 }
 
 	if(isset($_POST['submit13'])){?>
	<h2 align="center">主日信息   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $ptitle; ?></h2>

			 
			 
			
				
				<p align="center" ><?php echo $pname;  if(tname){echo " &nbsp;&nbsp;Trans:".$tname;} ?>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $riqi; ?></p>
				<p align="justify">
				<strong>信息摘要</strong><br />
				    <?php echo $mcontent; ?></p><p>&nbsp; </p>

			
			<p align="center">
	  <p><?php echo $ffile;?></p>
				<p><img src="images/church.jpg" height="360px" width="640px" /></p>

							<p> <a href="javascript:history.go(-1);">返 回</a></p>
							
							
	<?php } exit;	*/}?>				
    

  </div>
		


</div>


</body>

</html>
<?php session_start();
$data = $_POST['data'];
$album = $_POST['album'];
$title = $_POST['title'];
$picname = $_POST['picname'];
$filename = $_POST['filename'];
$vmessage = $_POST['vmessage'];
$right = $_SESSION['right'];
$username = $_SESSION['username'];
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<?php echo'<?xml version="1.0" encoding="UTF-8"?>';?> 

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
				if(!$username){exit('<br/><br/>Please click <a href="reg/login.php?fr=gxjhhd.php">Here</a> to login First!');}
				if($right < 5) exit('Sorry!You are not be authorized to update this page!<br/>Click <a href="index.html">Here</a> to continue!');	
				else echo "<h2><br/><br/><br/>Welcome! &nbsp;".$username."</h2>";
				
		echo '
		<form name="gxjhhdForm"  enctype="multipart/form-data" method="post" action="gxjhhd.php"  >
		<p>摄制日期<input name="data" type="text" value="mm-dd-yyyy" /></p>
		<p>活动分类<input name="album" type="text" value="青少年献诗/长年献诗/感恩见证/福音见证/郊游与野餐/其它" 〉</p>
		<p>活动主题<input name="title" type="text" /></p>
		<p>简要评述<br/><textarea name="picname"  style="width:100%"  rows="18" type="textarea" /></textarea></p>
		<p>在此输入封面图片文件名（jpg格式）<input name="vmessage" type="text" /></p><br/>
		<p>在此输入视频文件名（FLV格式）<input name="filename" type="text" /></p>
	   	
		<p><input name="submit1" value="预 览" type="submit"/>
		<input name="submit2" value="提 交" type="submit" /></p>
		</form>';
	}
 


			 if(isset($_POST['submit2'])){ 
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
			*/
				  
				 $ffile = trim($ffile,'.flv'); 
				 $conn = @mysql_connect("50.63.231.66","mess","Christ!1225"); 
				if (!$conn){ die("login error" . mysql_error()); } 
				
				mysql_select_db("mess", $conn); 
				mysql_query("SET NAMES 'UTF8'");
				$check_query = mysql_query("select * from video where album='$album'and filename='$filename' limit 1");
				if($result = mysql_fetch_array($check_query)){
					echo 'Error! <br/> The video of: &nbsp; &nbsp;'.$filename.'<br/> &nbsp; &nbsp; at Album: &nbsp; &nbsp; '.$album.'<br/> is  already exist! <br/>
					Please click <a href="javascript:history.back(-1)">back</a> and try again' ;
					exit;
				}
				
				$sql="insert into video(vid,data,album,title,filename,picname,vmessage) VALUES ('','$data','$album','$title','$filename','$picname','$vmessage')";
		  
				if(mysql_query($sql,$conn)){
					exit('Congratulate！you have update a new vedio successfully.<br/> 点击 <a href="jhhd.php">主日信息</a>查看更新 ');} 
				else {
					echo 'Sorry! update error',mysql_error(),'<br />';
					echo 'Click <a href="javascript:history.back(-1)">back</a> try again';
					
					 }
					 
			 }
 
 	if(isset($_POST['submit1'])){?>
	<h2 align="center">活动视频 </h2>

			 
			 
			
				<p align="center" ><?php echo $title; ?> </p>
				<p align="center" ><?php echo $album; ?> </p>
				<p align="center" ><?php echo $data;   ?> </p>
				

			
			<p align="center">
				</p><p><?php echo $ffile;?></p>
				<p><img src="images/church.jpg" height="360px" width="640px" /></p>
			<p align="justify">
				<strong>简评</strong><br />
				    <?php echo $vmessage; ?></p><p>&nbsp; </p>
							<p> <a href="javascript:history.go(-1);">返 回</a></p>
							
							
	<?php }	?>				
    

	  </div>
		


</div>


</body>

</html>
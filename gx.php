<?php session_start();

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
	

	

	  </div>
		<? if(!$username){exit('<br/><br/>Please click <a href="reg/login.php?fr=gx.php">Here</a> to login First!');}
				if($right < 2) exit('Sorry!You are not be authorized to update this page!<br/>Click <a href="index.html">Here</a> to continue!');	
				else echo "<h2><br/><br/><br/>Welcome! &nbsp;".$username."</h2>"; ?>
<br/>
        
                <a href="gxzhuri1.php"   title="主日信息更新" >主日信息更新</a>&nbsp;  |&nbsp;
               <a href="gxjhhd.php"    title="活动视频更新"  >活动视频更新</a> &nbsp; |&nbsp;
                <a href="gxpic.php"    title="活动图片更新"  >活动图片更新</a>&nbsp; 
            


</div>

<p align="center"> <a href="javascript:history.go(-1);">返 回</a></p>
</body>

</html>
<?php session_start(); ?>
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
<script type="text/javascript">
function MM_CheckFlashVersion(reqVerStr,msg){
  with(navigator){
    var isIE  = (appVersion.indexOf("MSIE") != -1 && userAgent.indexOf("Opera") == -1);
    var isWin = (appVersion.toLowerCase().indexOf("win") != -1);
    if (!isIE || !isWin){  
      var flashVer = -1;
      if (plugins && plugins.length > 0){
        var desc = plugins["Shockwave Flash"] ? plugins["Shockwave Flash"].description : "";
        desc = plugins["Shockwave Flash 2.0"] ? plugins["Shockwave Flash 2.0"].description : desc;
        if (desc == "") flashVer = -1;
        else{
          var descArr = desc.split(" ");
          var tempArrMajor = descArr[2].split(".");
          var verMajor = tempArrMajor[0];
          var tempArrMinor = (descArr[3] != "") ? descArr[3].split("r") : descArr[4].split("r");
          var verMinor = (tempArrMinor[1] > 0) ? tempArrMinor[1] : 0;
          flashVer =  parseFloat(verMajor + "." + verMinor);
        }
      }
      // WebTV has Flash Player 4 or lower -- too low for video
      else if (userAgent.toLowerCase().indexOf("webtv") != -1) flashVer = 4.0;

      var verArr = reqVerStr.split(",");
      var reqVer = parseFloat(verArr[0] + "." + verArr[2]);
  
      if (flashVer < reqVer){
        if (confirm(msg))
          window.location = "http://www.macromedia.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash";
      }
    }
  } 
}
</script>
</head>
	
<body>

<div id="wrapper" align="center">


	<div id="header">
		<div id="hright">
			<div id="hrighttop">
				<p>	<a href="reg/user_login.htm" title="登录" target="main">登 录</a> |
			 		<a href="reg/user_reg.htm" title="注 册" target="main">注 册</a> | 
			 		<a href="#" title="访 客">访 客</a>
				</p>					
			</div>
			<div id="menu">
				<ul>
				<li><a href="homepage.php?jid=458"   title="首 页"  target="main" >首 页</a>  |</li>
				<li><a href="aboutus.htm"    title="关于我们"  target="main">关于我们</a>  |</li>
				<li><a href="zhuri.htm"    title="敬拜赞美"  target="main">主日信息</a> |</li>
				<li><a href="message.htm"   title="查经聚会"  target="main">查经聚会</a> |</li>
				<li><a href="jianzheng.htm"   title="生命见证"  target="main">生命见证</a> |</li>
				<li><a href="resource.htm"   title="资源供享"  target="main">资源供享</a> |</li>
				<li><a href="contactus.htm"  title="联系我们"  target="main">联系我们</a>  </li>
				</ul>
			</div>
		</div>
		<div id="title">
			<h4><br/> </h4>
			<p>Christ Church of Glory</p>
		</div>	
	</div>

<div id="bottomcontenttop"></div>

	<div id="bottomcontent" >
	<?php 
	if(!isset($_POST['submit1'])&& !isset($_POST['submit2'])){
    exit('invalid access!');
}
$riqi = $_POST['riqi'];
$pname = $_POST['pname'];
$tname = $_POST['tname'];
$ptitle = $_POST['ptitle'];
$pcontent = $_POST['pcontent'];
$mcontent = $_POST['mcontent'];
$ffile = $_FILES['ffile']['name'];


			 if(isset($_POST['submit2'])){ 
			 	
				if($_SESSION['username'] != "david"){ exit('Sorry!You are not be authorized to update this page!');}		  
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
				
				$sql="insert into zhuri(zid,riqi,ptitle,pname,tname,pcontent,mcontent,flv) VALUES ('','$riqi','$ptitle','$pname','$tname','$pconten','$mcontent','$ffile')";
				
				if(mysql_query($sql,$conn)){
					exit('Congratulate！you have update  new message successfully.');} 
				else {
					echo 'Sorry! update error',mysql_error(),'<br />';
					echo 'Click <a href="javascript:history.back(-1)">back</a> try again';
					
					 }
					 
					 
					 
					 
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
 
 
 }
 
 	if(isset($_POST['submit1'])){?>
	<h2 align="center">主日信息   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $ptitle; ?></h2>
<div style="width:640px" border="0" cellpadding="2" >
			 
			 
			
				
				<p align="center" ><?php echo $pname;  if(tname){echo " &nbsp;&nbsp;Trans:".$tname;} ?>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $riqi; ?></p>
				<p align="justify">
				<strong>信息摘要</strong><br />
				    <?php echo $mcontent; ?></p><p>&nbsp; </p>
  </div>
			
			<p align="center">
	
<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,0,0" width="640" height="300" id="FLVPlayer">
                          <param name="movie" value="FLVPlayer_Progressive.swf" />
                          <param name="salign" value="lt" />
                          <param name="quality" value="high" />
                          <param name="scale" value="noscale" />
                          <param name="FlashVars" value="&MM_ComponentVersion=1&skinName=Clear_Skin_3&streamName=video/111225&autoPlay=false&autoRewind=false" />
                          <embed src="FLVPlayer_Progressive.swf" flashvars="&MM_ComponentVersion=1&skinName=Clear_Skin_3&streamName=video/<?php echo $ffile; ?>&autoPlay=false&autoRewind=false" quality="high" scale="noscale" width="640" height="300" name="FLVPlayer" salign="LT" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" />                        
</object>
</p>
							<p> <a href="zhuri.htm"  target="_parent">返 回</a></p>
							
							
	<?php }?>				
            </div>

	<div id="bottomcontentbtm"></div>

	<div id="footer">
		
		<p>基督荣耀教会 华人聚会  - 2011年
		
		<a href="gengxin.php"  target="main" title="更新">更新</a> | 
		
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
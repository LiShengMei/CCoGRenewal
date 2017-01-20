<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<?xml version="1.0" encoding="UTF-8" ?> 

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
<div id="bottomcontenttop"></div>

	<div id="bottomcontent" >
	<h2 align="center">主日信息   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $ptitle; ?></h2>
<div style="width:640px" border="0" cellpadding="2" >
			 
			 
			
				
				<p align="center" ><?php echo $pname;  if(tname){echo "Trans".$tnmae;} ?>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $riqi; ?></p>
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
            </div>

	<div id="bottomcontentbtm"></div>
</div>

</body>

</html>
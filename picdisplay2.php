<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<?php echo '<?xml version="1.0" encoding="UTF-8" ?>'; ?> 

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
<body>	

<div align="center">
<?php
 $paid=$_GET[paid];
 $pid=$_GET[pid];
  $pages=$_GET[pages];if(!$pages) $pages=1;
 $conn = @mysql_connect("picdate.db.8559606.hostedresource.com","picdate","Christ!1225"); 
				if (!$conn){ die("login error" . mysql_error()); } 
				
				mysql_select_db("picdate", $conn); 
				mysql_query("SET NAMES 'UTF8'");
				$query = mysql_query("select * from video where paid='$paid'");
				$result = mysql_fetch_array($query);
				/*$picsql ='SELECT * FROM `'.$paid.'` where ppath='.$pid;*/
				$pic_query = mysql_query("SELECT * FROM `$paid` where ppath='$pid'");
				$pic_result = mysql_fetch_array($pic_query);?>
	
			<h2><?php if (!$result[patitle])$result[patitle]=$paid; echo $result[patitle];?></h2>
           
             
                <p>   <?php if (!$pic_result[ptitle])$pic_result[ptitle]=$pid; echo $pic_result[ptitle];?></p>
                    
                
                      
               <p>       <?php echo '<img src="phpThumb/phpThumb.php?src=../pictures/'.$paid.'/'.$pid.'&w=1320&h=880" />';?>     </p>                 	
				 
                  
               <p>   <a href=<?php echo '"picdisplay.php?paid='.$paid.'&pid='.$pid.'"';?> >一倍尺寸</a>&nbsp;
				  <a href=<?php echo '"picdisplayo.php?paid='.$paid.'&pid='.$pid.'"';?> >原始尺寸</a> &nbsp;
				 <?php if(($username == $pic_result[prec]) or ($pic_result[pright]<=$pright)) echo '<a href="picm.php?paid='.$paid.'&pid='.$pid.'">更改图片属性</a> &nbsp;';?>
				   <a href=<?php echo '"padisplays.php?paid='.$paid.'&pages='.$pages.'"';?> >返 回</a></p>
                         
            </div>
			



</body>

</html>
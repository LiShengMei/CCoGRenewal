<?php session_start();
$fr=$_GET[fr];?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php echo '<?xml version="1.0" encoding="UTF-8"?>';?>
<urlset xmlns="http://www.google.com/schemas/sitemap/0.84" />
<head>
	<title>基督荣耀教会</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="Description" content="耶稣是道路真理生命"/>
	<meta name="Keywords" content="Christ, Jesus,love,God, heaven,father,son, 耶稣, 基督,神,爱,生命，"/>
	<meta name="Distribution" content="Global"/>
	<meta name="Robots" content="index,follow"/>
	<link rel="stylesheet" type="text/css" href="../inc/style.css" media="all" />
	<script language=JavaScript>
<!--



//-->
</script>
</head>
<body>
<div id="wrapper">
	<div id="bottomcontenttop"></div>

	<div id="bottomcontent"  align="center" style="height:320px">
<?php 
	if($_GET['action'] == "logout"){
    unset($_SESSION['log_id']);
    unset($_SESSION['username']);
	unset($_SESSION['gender']);
	unset($_SESSION['realname']);
	unset($_SESSION['right']);
	 exit('您已成功退出登录!<br/> &nbsp;<a href="../'.$fr.'">继续浏览</a>&nbsp;<a href="login.php?fr='.$fr.'">重新登录</a>');}
    
 if(isset($_POST['submit'])){

$username = $_POST['username'];
$password = $_POST['password'];


$conn = @mysql_connect("userbasicinfo.db.8559606.hostedresource.com","userbasicinfo","Christ!1225"); 
if (!$conn){ die("login error" . mysql_error()); } 

mysql_select_db("userbasicinfo", $conn); 
mysql_query("SET NAMES 'UTF8'");	
$password = MD5($password);
$check_query = mysql_query("select * from UserBasicInfo where username='$username' and password='$password' limit 1");
if($result = mysql_fetch_array($check_query)){
    //µÇÂ¼³É¹¦
    $_SESSION['username'] = $username;
	$logid = $result[log_id];
    $_SESSION['log_id'] = $result['log_id'];
	$_SESSION['right'] = $result['right'];
	$_SESSION['gender'] = $result['gender'];
	$_SESSION['realname'] = $result['realname'];

	if($result[realname]){echo "您好,".$result[realname]. $result[gender].",欢迎登录!<br/>";} else {echo "您好,".$username.", 登录成功!<br/>";}
	
    /*echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"0; URL=index.php\">";*/
	 exit('点击<a href="usercenter.php?id='.$result[log_id].'&fr='.$fr.'">帐户中心</a> 完善您的个人资料.<br/>点击 <a href="../'.$fr.'">这里</a>继续浏览. <br/>');} 
else {
    exit('很抱歉！, '.$username.$gender.',本次登录未成功!<br/> 点击 <a href="javascript:history.back(-1)">这里</a> 重新登录<br/>点击<a href="../'.$fr.'">返回</a> 继续浏览<br />');}
}
  

elseif(isset($_POST['submit2'])){?>
	
		<p class="text10pt">忘记密码</p>
			<hr align="center" width="600" size="1" noshade>
			<form name="LoginForm" method="post" action="login.php?fr=<?php echo $fr; ?>" onSubmit="return InputCheck(this)">
				
				<p><img src="../images/02.jpg" width="300" height="60" /></p>
				<table width="300" border="0" cellpadding="20" cellspacing="1" bordercolor="#FFCC99" bgcolor="#CCCCCC" class="text10pt">
					
					<tr bgcolor="#FFFFFF">  
					  <td width="75"  align="left">用户名</td>
					  <td width="125" align="left"> <input name="username" type="text" value="<?php echo $username;?>"  > </td>
					  
					</tr>
					<tr bgcolor="#FFFFFF">  
					  <td width="75"  align="left">电子邮件地址</td>
					  <td width="125" align="left"> <input name="e_mail" type="text" value=""  > </td>
					  
					</tr>
					<tr bgcolor="#FFFFFF">
						<td align="left">密码提示</td>
						<td align="left"> <input name="password3" type="text"> </td>
					</tr>
					
					<tr bgcolor="#FFFFFF">
						<th colspan="2" align="center">
							<input type="submit" name="submit3"  value="提交" />&nbsp;
							<input type="reset" name="reset" value="重写" />&nbsp;
							</th>
					</tr>
			  </table>
			</form><?php }
			
			
elseif(isset($_POST['submit3'])){

$username = $_POST['username'];
$password3 = $_POST['password3'];
$e_mail = $_POST['e_mail'];
echo $e_mail.'00000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000';
if(!$password3 or (!$username && !$password3)){exit('请提供帐号或电子邮件信息，以及正确的密码提示信息.<br/> 点击 <a href="login.php">这里</a> 重试<br/>');}

$conn = @mysql_connect("userbasicinfo.db.8559606.hostedresource.com","userbasicinfo","Christ!1225"); 
if (!$conn){ die("login error" . mysql_error()); } 

mysql_select_db("userbasicinfo", $conn); 
mysql_query("SET NAMES 'UTF8'");
if($username) {$check_query = mysql_query("select * from UserDetailInfo where username='$username' and aboutme='$password3' limit 1");$e_mail = $result[email]; $log_id = $result[log_id]; if(!$e_mail)exit('对不起帐号取回失败，因未能在用户中心发现您的电子邮件信息，请与网站管理员联系.');}
else {$check_query = mysql_query("select * from UserDetailInfo where email='$e_mail' and aboutme='$password3' limit 1"); $log_id = $result[log_id];}
echo $e_mail.'00000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000';
if($result = mysql_fetch_array($check_query)){
	$check_query = mysql_query("select * from UserBasicInfo where log_id='$log_id' limit 1");
	if($result = mysql_fetch_array($check_query)){
	$password = $result[password];
	
	require_once('email.class.php');
//=====================配置 start==========================
$smtpserver = "smtpout.secureserver.net";//SMTP服务器
$smtpserverport = 80;//SMTP服务器端口
$smtpusermail = "info@christchurchofglory.net";//SMTP服务器的用户邮箱
$smtpemailto = "yafei70@gmail.com";//发送给谁
$smtpuser = "info@christchurchofglory.net";//SMTP服务器的用户帐号
$smtppass = "Christ!1225";//SMTP服务器的用户密码
$mailsubject = "取回帐号，密码更改提示";//邮件主题
$mailbody = '请点击<a href="http://christchurchofglory.net/reg/usercenter.php?la='.$password.'&l='.$log_id.'">这里</a>注册您的新密码，请保证email和密码提示信息的正确，以便忘记密码以后，取回帐号';//邮件内容
$mailtype = "HTML";//邮件格式（HTML/TXT）,TXT为文本邮件
//====================配置 end============================
$smtp = new smtp($smtpserver,$smtpserverport,true,$smtpuser,$smtppass);//这里面的一个true是表示使用身份验证,否则不使用身份验证.
$smtp->debug = FALSE;//是否显示发送的调试信息
$smtp->sendmail($smtpemailto, $smtpusermail, $mailsubject, $mailbody, $mailtype);
		exit('<br/><p> 您好！我们已发出一封邮件到您所登记的电子邮箱，请查收，并请尽快重新设置您的密码！</p>');//发送成功显示的信息
   
}else exit('很抱歉，未能在基本用户数据库内发现您的信息，请与网站管理员联系！');}
else{exit('您输入的信息不匹配，请提供帐号或电子邮件信息，以及正确的密码提示信息');}}
			  
else {?>
	
		<p class="text10pt">用 户 登 录</p>
			<hr align="center" width="600" size="1" noshade>
			<form name="LoginForm" method="post" action="login.php?fr=<?php echo $fr; ?>" onSubmit="return InputCheck(this)">
				
				<p><img src="../images/02.jpg" width="300" height="60" /></p>
				<table width="300" border="0" cellpadding="20" cellspacing="1" bordercolor="#FFCC99" bgcolor="#CCCCCC" class="text10pt">
					
					<tr bgcolor="#FFFFFF">
					  <td width="75"  align="left">用户名</td>
					  <td width="125" align="left"> <input name="username" type="text"> </td>
					</tr>
					<tr bgcolor="#FFFFFF">
						<td align="left">密   码</td>
						<td align="left"> <input name="password" type="password"> </td>
					</tr>
					
					<tr bgcolor="#FFFFFF">
						<th colspan="2" align="center">
							<input type="submit" name="submit" value="提交" />&nbsp;
							<input type="reset" name="reset" value="重写" />&nbsp;
							<input type="submit" name="submit2" value="忘记密码" />
							</th>
					</tr>
			  </table>
			</form><?php } ?>			
			
			</div>
		<div id="bottomcontentbtm"></div>		
	
</div>
</body>
</html>








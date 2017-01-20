<?php session_start();
$fr=$_GET[fr];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<xml version="1.0" encoding="UTF-8">
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

function InputCheck(LoginForm)
{
  if (LoginForm.username.value == "")
  {
    alert("请输入用户名!");
    LoginForm.username.focus();
    return (false);
  }
  if (LoginForm.password.value == "")
  {
    alert("请输入，密码!");
    LoginForm.password.focus();
    return (false);
  }
}

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
    
   
if((!isset($_POST['submit']) && (!isset($_POST['forgotpassword']))) && (!isset($_POST['submit3'])){?>
	
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
							<input type="submit" name="forgotpassword" value="忘记密码" />
							</th>
					</tr>
			  </table>
			</form><?php } 
elseif(isset($_POST['submit'])){

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
elseif(isset($_POST['forgotpassword'])){?>
	
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
						<td align="left">密码提示</td>
						<td align="left"> <input name="password3" type="password"> </td>
					</tr>
					
					<tr bgcolor="#FFFFFF">
						<th colspan="2" align="center">
							<input type="submit" name="submit3" />&nbsp;
							<input type="reset" name="reset" value="重写" />&nbsp;
							</th>
					</tr>
			  </table>
			</form><?php 
			
			
elseif(isset($_POST['submit3'])){

$username = $_POST['username'];
$password3 = $_POST['password3'];


$conn = @mysql_connect("userbasicinfo.db.8559606.hostedresource.com","userbasicinfo","Christ!1225"); 
if (!$conn){ die("login error" . mysql_error()); } 

mysql_select_db("userbasicinfo", $conn); 
mysql_query("SET NAMES 'UTF8'");	
$password3 = MD5($password3);
$check_query = mysql_query("select * from UserDetailInfo where username='$username' and aboutme='$password3' limit 1");
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
	 exit('点击<a href="usercenter.php?id='.$result[log_id].'&fr='.$fr.'">帐户中心</a> 更新您的个人资料.<br/';} 
else {
    exit('很抱歉！, '.$username.$gender.',本次登录未成功!<br/> 点击 <a href="javascript:history.back(-1)">这里</a> 重新登录<br/>点击<a href="../'.$fr.'">返回</a> 继续浏览<br />');}
}} 
?>			
			
			</div>
		<div id="bottomcontentbtm"></div>		
	
</div>
</body>
</html>








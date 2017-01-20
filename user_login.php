<?php
session_start();

//注销登录
if($_GET['action'] == "logout"){
    unset($_SESSION['log_id']);
    unset($_SESSION['username']);
    echo '注销登录成功！点击此处 <a href="user_login.htm">登录</a>';
    exit;
}

//登录
if(!isset($_POST['submit'])){
    exit('非法访问!');
}

$username = $_POST['username'];
$password = $_POST['password'];


$conn = @mysql_connect("userbasicinfo.db.8559606.hostedresource.com","userbasicinfo","Christ!1225"); 
if (!$conn){ die("登录失败" . mysql_error()); } 

mysql_select_db("userbasicinfo", $conn); 

//检测用户名及密码是否正确
$check_query = mysql_query("select log_id from UserBasicInfo where username='$username' and password='$password' limit 1");
if($result = mysql_fetch_array($check_query)){
    //登录成功
    $_SESSION['username'] = $username;
    $_SESSION['log_id'] = $result['log_id'];
	
    echo "Hi,".$username.", welcome！<br/>";
	echo "chlik <a href='../index.html target='_self'>continue</a><br />";
    echo "chlik <a href='user_login.php?action=logout'>log out</a><br />";
    exit;
} else {
    exit(' hi, $username, login fail！chlik <a href="javascript:history.back(-1);">back</a> and try again!');
}
?>

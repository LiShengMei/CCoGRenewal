<?php
session_start();

//ע����¼
if($_GET['action'] == "logout"){
    unset($_SESSION['log_id']);
    unset($_SESSION['username']);
    echo 'ע����¼�ɹ�������˴� <a href="user_login.htm">��¼</a>';
    exit;
}

//��¼
if(!isset($_POST['submit'])){
    exit('�Ƿ�����!');
}

$username = $_POST['username'];
$password = $_POST['password'];


$conn = @mysql_connect("userbasicinfo.db.8559606.hostedresource.com","userbasicinfo","Christ!1225"); 
if (!$conn){ die("��¼ʧ��" . mysql_error()); } 

mysql_select_db("userbasicinfo", $conn); 

//����û����������Ƿ���ȷ
$check_query = mysql_query("select log_id from UserBasicInfo where username='$username' and password='$password' limit 1");
if($result = mysql_fetch_array($check_query)){
    //��¼�ɹ�
    $_SESSION['username'] = $username;
    $_SESSION['log_id'] = $result['log_id'];
	
    echo "Hi,".$username.", welcome��<br/>";
	echo "chlik <a href='../index.html target='_self'>continue</a><br />";
    echo "chlik <a href='user_login.php?action=logout'>log out</a><br />";
    exit;
} else {
    exit(' hi, $username, login fail��chlik <a href="javascript:history.back(-1);">back</a> and try again!');
}
?>

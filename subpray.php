<?php

session_start();

if(!isset($_SESSION['username'])){exit('Please login first!<br/> Click <a href="reg/user_login.htm">back</a> to login!');}
$author = $_SESSION['username'];
date_default_timezone_set('America/Vancouver');
$wtime = $_POST['wtime'];
$title = $_POST['title'];
$content = $_POST['content'];
$did = $_POST['did'];
$conn = @mysql_connect("mess.db.8559606.hostedresource.com","mess","Christ!1225"); 
if (!$conn){ die("erro conect with bd" . mysql_error()); } 

mysql_select_db("mess", $conn); 
mysql_query("SET NAMES 'UTF8'");

$sql="insert into pray VALUES ('','$wtime','$author','$title','$content','$did')";

if(mysql_query($sql,$conn)){
    exit('<p align="center">Congratulate! your words are sent successly<br/>Click <a href="message1.php">Here</a> to continue.</P>');
} else {
    echo '<p align="center"> Sorry there a faiure when insert a records'.mysql_error().'<br />';
    echo 'Click <a href="javascript:history.back(-1);">back</a> to try again!</P>';
}
?>
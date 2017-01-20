<?php

session_start();

if(!isset($_SESSION['username'])){exit('Please login first!<br/> Click <a href="reg/login.php?fr=xslx.php">back</a> to login!');}
$author = $_SESSION['username'];
$wtime = $_POST['wtime'];
$title = $_POST['title'];
$content = $_POST['content'];
$did = $_POST['did'];
$conn = @mysql_connect("biblewords.db.8559606.hostedresource.com","biblewords","Christ!1225"); 
if (!$conn){ die("erro conect with bd" . mysql_error()); } 

mysql_select_db("biblewords", $conn); 
mysql_query("SET NAMES 'UTF8'");

$sql="insert into biblebbs VALUES ('','$wtime','$title','$content','$author','$did')";

if(mysql_query($sql,$conn)){
    exit('Congratulate! your words are sent successly<br/>Click <a href="f2.htm">Here</a> to continue.');
} else {
    echo 'Sorry there a faiure when insert a records'.mysql_error().'<br />';
    echo 'Click <a href="javascript:history.back(-1);">back</a> to try again!';
}
?>
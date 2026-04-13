<?php
session_start();

if($_SESSION['login']=='admin'){
	echo "<h2>welcome, admin.</h2><br>";
	echo "<a href='logout.php'>logout</a>";
}else{
	echo "非法登入";
	header("Refresh:3;url=login.php");
}
?>
<?php
session_start();

$fID="student";
$fPWD="12345";
$tID="teacher";
$tPWD="67890";
$aID="admin";
$aPWD="qwert";
$uID=$_POST['uID'];
$uPWD=$_POST['uPWD'];
$date=strtotime("+30 minutes",time());

if(isset($_POST["uID"])&& isset($_POST["uPWD"])){
	$uID=$_POST["uID"];
	$uPWD=$_POST["uPWD"];
	echo "正在進行驗證：";
	if($fID==$uID && $fPWD==$uPWD){
		$_SESSION['login']='user';
		setcookie("uName",$uID,time()+1800);
		echo "成功";
		header("Location:A1133317_孫約平_作業1.php");
	}elseif($tID==$uID && $tPWD==$uPWD){
		$_SESSION['login']='user';
		setcookie("uName",$uID,$date);
		header("Location:A1133317_孫約平_作業1.php");
	}elseif($aID==$uID && $aPWD==$uPWD){
		$_SESSION['login']='admin';
		header("Refresh:0;url=admin.php");
	}else{
		echo "失敗";
		header("Refresh:2;url=login.php");
	}
}
?>
<?php
$fID="deer";
$fPWD="12345";
if(isset($_POST["uID"])&& isset($_POST["uPWD"])){
	$uID=$_POST["uID"];
	$uPWD=$_POST["uPWD"];
	echo "正在進行驗證：";
	if($fID==$uID && $fPWD==$uPWD){
		echo "成功";
		header("Location:A1133317_孫約平_作業1.php");
	}else{
		echo "失敗";
		header("Refresh:2;url=login.php");
	}
}
?>
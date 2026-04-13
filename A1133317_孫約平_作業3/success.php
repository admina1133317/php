<h4>請確認資料:</h4>
<?php
echo "參加者姓名：".$_POST["nName"]."，";
$nIden=$_POST["nIdentity"];
echo "身分證字號為".$nIden."，";

$nGender=$_POST["mGender"];
$nBirth=$_POST["mBirth"];
$nColor=$_POST["mColor"];
$nTime=$_POST["mTime"];
$nCity=$_POST["nCity"];
$nAct=$_POST["mInterest"];
$nRange=$_POST["mRange"];
$nRoom=$_POST["mRoom"];
$nPhone=$_POST["nPhone"];
$nEmail=$_POST["mEmail"];
echo "性別".$nGender."，".$nBirth." ".$nTime."出生，居住於".$nCity."。";
echo "<br>";
echo "你想參加的活動有：";
for($i=0;$i<count($nAct);$i++){
	echo $nAct[$i];
	if($i==count($nAct)-1){
		echo "。<br>";
		break;
	}
	echo "、";
}
echo "你較偏好";
if($nRange>50){
	echo "住宿，";
}else{
	echo "露營。";
}
switch($nRoom){
	case "2";
		echo "雙人房。";
		break;
	case "4";
		echo "四人房。";
		break;
}
echo "<br>";
echo "你的連絡電話是".$nPhone."，Email信箱是".$nEmail."。<br>";

echo "<p><hr>";
echo "<font color=".$nColor."><center><h1>~已完成報名，記得於行前繳費~</h1></center>
<center><font size=5>\(^_^)/</font></center></font>";
echo "<center><a href='logout.php'>logout</a></center>";
?>
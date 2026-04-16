<?php
session_start(); 
if (isset($_SESSION["ID"])){
	$id = $_SESSION["ID"]; //取得session變數
	$name = $_SESSION["Name"];
	$price = $_SESSION["Price"];
	$quantity = $_SESSION["Quantity"];
	//cookie儲存商品陣列
	setcookie ($id."[ID]", $id, time()+3600);
	setcookie ($id."[Name]", $name, time ()+3600);
	setcookie ($id."[Price]", $price, time()+3600);
	setcookie ($id."[Quantity]", $quantity, time ()+3600);
}
header("Location: shoppingcart.php"); // 轉址
?>
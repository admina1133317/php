<html>
<head>
    <title>商品目錄</title>
</head>
<body>
    <form action="catalog.php" method="post">
    選擇商品：
    <select name="Item">
        <option value="S001">10吋平板電腦-$12000</option>
        <option value="S002">15.6吋筆記型電腦-$27000</option>
        <option value="S003">iPhone智慧型手機-$21000</option>
    </select>
    <input type="text" name="Quantity" value="" size="5">
    <input type="submit" value="訂購">
    <br/>
    </form>
    <hr>
    <a href="catalog.php">|商品目錄|</a>
    <a href="shoppingcart.php">檢視購物車|</a>
</body>
</html>

<?php 
session_start(); //啟用交談期
//檢查是否是表單送回
if (isset($_POST["Item"])){
	//取得購買的數量
	$_SESSION["Quantity"] = $_POST["Quantity"];
	$id = $_POST["Item"]; // 取得選擇商品
	$_SESSION["ID"] = $id; //建立Session變數
	switch (strtoupper($id)){
		case "S001":
			$_SESSION["Name"] = "10吋平板電腦";
			$_SESSION ["Price"] = 12000;
			break;
		case "S002":
			$_SESSION ["Name"] ="15.6吋筆記型電腦";
			$_SESSION["Price"] = 27000;
			break;
		case "S003":
			$_SESSION["Name"] = "iPhone智慧型手機";
			$_SESSION["Price"]= 21000;
			break;
	}
	header ("Location: savecart.php"); // 轉址
}
?>

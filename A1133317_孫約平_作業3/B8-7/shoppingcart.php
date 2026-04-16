<?php

function each(&$array){
	$res=array();
	$key=key($array);
	if($key !== null){
		next ($array) ;
		$res[1] = $res['value'] = $array[$key];
		$res[0] = $res['key'] = $key;
	}else{
		$res = false;
	}
	return $res;
}
?>
<html>
<head>
    <title>購物車</title>
</head>
<body>
<table border="1">
    <tr>
        <th>功能</th>
        <th>編號</th>
        <th>名稱</th>
        <th>價格</th>
        <th>數量</th>
    </tr>
<?php
$flag = true;
$total = 0;

while (list ($arr, $value) = each($_COOKIE)){
	//檢查COOKIB名稱是否存在，且為陣列
	if ( isset($_COOKIE[$arr]) && is_array($_COOKIE[$arr])){
		if ($flag){ // 切換顯示色彩
			$flag = false;
			$color="#FF99CC";
		} else {
			$flag = true;
			$color="#99FFC";
		}
		echo "<tr bgcolor='".$color."'><td>";
		echo "<a href='delete.php?Id=".$arr."'>";
		echo"刪除</a></td>";
		$price =0;
		$quantity = 0; // 顯示運購的商品資料
		while(list($name, $value)= each($_COOKIE[$arr])) {
			// 使用表格顯示
			echo "<td>".$value."</td>";
			if ($name == "Price") $price = $value;
			if ($name == "Quantity") $quantity = $value;
		}
		$total += $price * $quantity; //計算總金額
		echo "</tr>";
	}
}
?>
    <th colspan="5" style="text-align:right">總金額 = NT$<?php echo $total; ?>元</th>
</table>

<hr>
<a href="catalog.php">|商品目錄|</a>
<a href="shoppingcart.php">檢視購物車|</a>
</body>
</html>
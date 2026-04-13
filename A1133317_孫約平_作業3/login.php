<?php
session_start();
?>

<form action="logincheck.php" method="POST">
&nbsp<p>&nbsp<p>&nbsp<p>&nbsp<p>
<center><IMG src="https://intro.nuk.edu.tw/var/file/58/1058/img/753/logo.jpg" width="40%" height="40%"></center>
<center>帳號:<input type ="text" name="uID"></center><br>
<center>密碼:<input type="password" name="uPWD"></center><br>
<center><input type="submit"><?php echo time()?></center>
</form>

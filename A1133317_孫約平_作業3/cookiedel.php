<?php
setcookie("uName",'',time()-3600);
header("Refresh:0;url=login.php");
?>
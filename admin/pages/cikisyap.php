<?php
session_start();
$_SESSION["giriskontrol"]=0;//giriş yapmış,0 ise giriş yapmamış demek
unset($_SESSION["username"]);//değişkenimi kaldırıyorum
header("Location:index.php?i=cikis");
session_destroy();




?>
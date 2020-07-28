<?php
//define=fonksiyonu kesinlikle değişmesini istemediğimiz degerler için kullanılıyord
define("_HOST","localhost");

define("_DBNAME","db_kisiliktest");
define("_DBUSER", "root");
define("_DBPASSWORD", "");

try {
    $db=new PDO("mysql:host="._HOST.";dbname="._DBNAME."",_DBUSER,_DBPASSWORD);    
} catch (PDOException $ex) {
    
    echo $ex->getMessage();
}



?>
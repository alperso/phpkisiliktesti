<?php 
//VT BAGLAN

header("Content-Type: text/html; charset=utf-8");//Türkce karakter sıkıntılarının önüne gecmek için
//error_reporting(0);

setlocale(LC_ALL,'tr_TR.UTF-8','tr_TR','tr','turkish');//Türkçe dil desteği    ğ i gibi dogru gösterilsin diye


$DBhost="sql212.epizy.com";
$DBuser="epiz_25624489";
$DBpass="ALPERALPER123";
$DBname="epiz_25624489_vt";

try {
    $db =new PDO("mysql:host=$DBhost;dbname=$DBname",$DBuser,$DBpass);
} catch (PDOException $e) {
   echo $e->getMessage();
}

$db->exec("SET NAMES 'utf8';SET CHARSET 'utf8'");

define("_URL","http://localhost/proje");//ilerde link kullanmak için




?>
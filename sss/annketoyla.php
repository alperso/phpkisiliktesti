<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
		$baglanti = mysql_connect(“localhost”,”root”,””);
$db=mysql_select_db(“anket”,$baglanti);

	@$oy = $_POST['anket'];
	$ip = $_SERVER['REMOTE_ADDR'];
	$sor=mysql_query("SELECT ip from anket");
	while($cek=mysql_fetch_array($sor)){
		$ipp = $cek['ip'];
		}
		
		if($oy==""){
		echo"Lütfen Şıklardan Birini Seçiniz";
		}
		elseif($ip == @$ipp)
		{
			echo"Zaten Oy Kullanmışsınız.";	
		}else{
		$ekle = mysql_query("INSERT INTO anket(oy,ip) VALUES ('$oy','$ip')") or die("Ekleme Hatası");
		echo"Oy Kullandığınız için Teşekkür ederiz<br>
		<a href='annketsonuclar.php'>Sonucları Görmek İçin Tıklayınız...</a>";
		}
	
	?>
</body>
</html>
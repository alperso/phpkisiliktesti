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


$sor = mysql_query("SELECT * FROM anket");
		while( $cek = mysql_fetch_array($sor)){
		$id = $cek['id'];
		$doy = $cek['oy'];
		}
		$oysayisi = mysql_num_rows($sor);
		
		$sorbes = mysql_query("SELECT * FROM anket where oy=5");{
		$besoy = mysql_affected_rows($baglanti);
		$besoyyuzde =round((  ($besoy/ $oysayisi )*100),2);
		}
		$sordort = mysql_query("SELECT * FROM anket where oy=4");{
		$dortoy = mysql_affected_rows($baglanti);
		$dortoyyuzde = round(( ( $dortoy / $oysayisi )*100),2);
		}
		
		$soruc = mysql_query("SELECT * FROM anket where oy=3");{
		$ucoy = mysql_affected_rows($baglanti);
		$ucoyyuzde = round(( ( $ucoy /$oysayisi )*100),2);
		}
		
		$soriki = mysql_query("SELECT * FROM anket where oy=2");{
		$ikioy = mysql_affected_rows($baglanti);
		$ikioyyuzde =round(( ( $ikioy /$oysayisi )*100),2);
		}
		$sorbes = mysql_query("SELECT * FROM anket where oy=1");{
		$biroy = mysql_affected_rows($baglanti);
		$biroyyuzde =round(( ($biroy  /$oysayisi )*100),2);
		}
		$toplam =$biroyyuzde + $ikioyyuzde  + $ucoyyuzde + $dortoyyuzde + $besoyyuzde;
		$biroyyuzde1=$biroyyuzde;
		$ikioyyuzde1=$ikioyyuzde;
		$ucoyyuzde1=$ucoyyuzde;
		$dortoyyuzde1=$dortoyyuzde;
		$besoyyuzde1=$besoyyuzde;
		echo"
<table width='642' border='0'>
  <tr>
    <td colspan='5' align='center'>Sonuçlar</td>
  </tr>
    <tr>
    <td colspan='3' align='center'>
    <td width='53'>Oy</td>
    <td width='106'> Yüzde</td>
  </tr>
  <tr>
    <td width='187'>Güzel</td>
    <td width='3' align='center'>:</td>
    <td width='259'><img src='images/formbar_kirmizi.jpg' height='17' width='$besoyyuzde1'></td>
    <td width='53'>$besoy</td>
    <td width='106'>%$besoyyuzde </td>
  </tr>
  <tr>
    <td>İyi</td>
    <td align='center'>:</td>
    <td><img src='images/formbar_sari.jpg'  height='17' width='$dortoyyuzde1' ></td>
    <td>$dortoy</td>
    <td>%$dortoyyuzde </td>
  </tr>
  <tr>
    <td>İdare Eder</td>
    <td align='center'>:</td>
    <td><img src='images/formbar_yesil.jpg'  height='17' width='$ucoyyuzde1'></td>
    <td>$ucoy</td>
    <td>%$ucoyyuzde </td>
  </tr>
  <tr>
    <td>Devam Et Daha Güzel Olacak</td>
    <td align='center'>:</td>
    <td><img src='images/formbar_turuncu.jpg'  height='17' width='$ikioyyuzde1' ></td>
    <td>$ikioy</td>
    <td>%$ikioyyuzde </td>
  </tr>
  <tr>
    <td>Kötü</td>
    <td align='center'>:</td>
    <td><img src='images/formbar_mavi.jpg'  height='17' width='$biroyyuzde1' ></td>
    <td>$biroy</td>
    <td>%$biroyyuzde </td>
  </tr>
  <tr>
    <td colspan='3' align='right'>Toplam Kullanılan Oy Sayısı&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
    <td align='left'> $oysayisi</td>
    <td>%$toplam</td>
  </tr>
</table>"; ?>
</body>
</html>
<html lang="tr_TR">
<head>
    <meta charset="utf-8">
    <title>PHP'de Basit Bir Test Hazırlama</title>
</head>
<body>

    <form action="" method=POST >
        <h2>1) Aşağıdakilerden hangisi tümünü seçer?</h2>
        <input type="radio" name="r" value="a"> CTRL+A
        <input type="radio" name="r" value="b"> CTRL+C
        <input type="radio" name="r" value="c"> CTRL+S
        <input type="radio" name="r" value="d"> CTRL+V
        <br>
        <br>
        <h2>2) Aşağıdakilerden hangisi oturumu kapatır?</h2>
        <input type="radio" name="rr" value="a">window+R
        <input type="radio" name="rr" value="b">window+E
        <input type="radio" name="rr" value="c">window+L
        <input type="radio" name="rr" value="d">window+Break
        <br>
        <br>
        <input type="submit" value="HESAPLA" name="btn">
        <br>
        <p style="color:red">This is a paragraph.</p>
        <span><?php echo "'<p>'$passError;'</p>'" ?></span>
    </form>
    <?php
      if (isset($_POST['r']) & isset($_POST['rr'])) {
        $soru1 = $_POST['r'];
        $soru2 = $_POST['rr'];
        $d = 0;
        $y = 0;

        if($soru1=="a" ) {         
          $d = $d+1;
        } else {         
          $y = $y+1;
        }

        if($soru2=="c") {       
          $d = $d+1;
        } else {         
          $y = $y+1;
        }

        if ($d>=1) {          
            echo"
<table width='642' border='1'>
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
   
    
  </tr>
  <tr>
    <td>İyi</td>
    <td align='center'>:</td>
   
  </tr>
  <tr>
    <td>İdare Eder</td>
    <td align='center'>:</td>
    
  </tr>
  <tr>
    <td>Devam Et Daha Güzel Olacak</td>
    <td align='center'>:</td>
    
  </tr>
  <tr>
    <td>Kötü</td>
    <td align='center'>:</td>
    
  </tr>
  <tr>
    <td colspan='3' align='right'>Toplam Kullanılan Oy Sayısı&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
    
  </tr>
</table>";
        } else {
           
            header("Location:sonuc.php");
            die("10 Saniye içerisinde başka sayfaya yönlendirilecektir.");
            
        }
        
      

       
        echo "Doğru sayısı=$d<br>";
        echo "Yanlış sayısı=$y<br>";
      }
      else{

            
    }
    ?>
</body>
</html>
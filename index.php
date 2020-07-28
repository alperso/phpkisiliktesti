<?php require_once 'admin/pages/inc-function.php';?>
<?php 
    ob_start();
    session_start();
    if (isset($_SESSION["giriskontrol"])) {
        if (@$_SESSION["giriskontrol"]==1) {
          
            $a="Admin-Panel";
        }# code...
    }
    else{
      
      $a="Giris Yap";
    }   
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Kişilik Testi - Alperso1</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/venobox/venobox.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">


</head>

<body>

  <!--==========================
    Header
  ============================-->
  <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <!-- Uncomment below if you prefer to use a text logo -->
        <!-- <h1><a href="#main">C<span>o</span>nf</a></h1>-->
        <a href="#intro" class="scrollto"><img src="img/logo1.png" alt="" title=""></a>
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#intro">Ana Sayfa</a></li>
          <li><a href="#about">Kişilik Testi Hakkında</a></li>
          <li><a href="#speakers">Söylenen Sözler</a></li>
          <li><a href="#schedule">Testi Yapanlar</a></li>
 <!--        <li><a href="#venue">Venue</a></li>
          <li><a href="#hotels">Hotels</a></li>-->        
      <!--     <li><a href="#supporters">Sponsors</a></li>-->
          <li><a href="#iletisim">İletişim</a></li>
          <li class="buy-tickets"><a href="sorular.php">Test Başlat</a></li>  
      
          <li class="buy-tickets"><a href="admin/pages/index.php"><?php echo $a;?></a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  <section id="intro">
    <div class="intro-container wow fadeIn">
      <h1 class="mb-4 pb-0">ÖĞRENMEK İSTER MİSİN ?<br> HAYDİ <span>KİŞİLİK TESTİ</span></h1>
      <p class="mb-4 pb-0">2-3 dakikadan daha az bir zaman alır.</p>
      <a href="https://www.youtube.com/watch?v=Wt5EdCW5fCk" class="venobox play-btn mb-4" data-vbtype="video"
        data-autoplay="true"></a>
      <a href="#about" class="about-btn scrollto">KİŞİLİK TESTİ HAKKINDA BİLGİLER</a><a href="sorular.php" class="about-btn scrollto">TEST BAŞLAT</a>
    </div>
  </section>

  <main id="main">

    <!--==========================
      About Section
    ============================-->
    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h2>Kişilik Testi</h2>
            <p>Bu kişilik testi gerçek değildir.Sorular ve sonuçlar aşağıda vermiş olduğum sitelerden kopyalanarak hazırlanmıştır. 
              Bu bir proje ödevidir.Hocamız puan verdikten sonra hemen kaldırılacaktır.Ticari amaçla kullanılmamıştır.
              <a href="http://www.testler.org/test.php?test=16">Site-1</a>ve
                            
                            <a rel="nofollow" href="https://www.kisiligim.com/test.html#question">Site-2</a></p>
          
          </div>
         <!-- <div class="col-lg-3">
            <h3>Where</h3>
            <p>Downtown Conference Center, New York</p>
          </div>
          <div class="col-lg-3">
            <h3>When</h3>
            <p>Monday to Wednesday<br>10-12 December</p>
          </div>-->
        </div>
      </div>
    </section>

    <section id="faq" class="wow fadeInUp">

      <div class="container">

        <div class="section-header">
          <h2>BİLGİLER </h2>
        </div>

        <div class="row justify-content-center">
          <div class="col-lg-9">
              <ul id="faq-list">

                <li>
                  <a data-toggle="collapse" class="collapsed" href="#faq1">Kişilik Testi Nedir? <i class="fa fa-minus-circle"></i></a>
                  <div id="faq1" class="collapse" data-parent="#faq-list">
                    <p>
                    Kişilik, bir bireyin çocukluk çağından itibaren gelişen birçok unsuru içerisinde barındıran karmaşık bir yapıdır. Kişilik gelişiminde genetik, çevresel ve sosyal birçok faktör bir arada etkili olur, yalnızca tek bir etkene bağlı olarak oluşmaz. Bu nedenle kişiliği ölçmek için geliştirilen kişilik testlerinin bu zengin ve karmaşık yapıyı doğru analiz edebilecek yetkinlikte olmaları gerekir.
                    </p>
                  </div>
                </li>
      
                <li>
                  <a data-toggle="collapse" href="#faq2" class="collapsed">Kişilik Testinde Neler Beklenir? <i class="fa fa-minus-circle"></i></a>
                  <div id="faq2" class="collapse" data-parent="#faq-list">
                    <p>
                    Kişilik testindeki soruların türü, iş konumunda yapmanız gereken rollere bağlı olabilir. Testin tasarımı ve yapısı, şirketin çalışma alanına ve potansiyel çalışanlarında takdir ettikleri özelliklere ve becerilere bağlı olabilir.

Testteki her soru için genellikle birden fazla cevap seçeneği verilir ve bunlardan uygun olanı seçmeniz gerekir. Kişilik testindeki soruların genellikle doğru ve yanlış cevapları yoktur. Bazı cevaplar belirli bir durum için daha uygun olabilirken, diğerleri daha az uygun olabilir. Ayrıca, verilen bir ifadeye katılıp katılmadığınız veya katılmamanız ya da verilen cevap seçeneklerini, sorunun niteliğini değerlendirdikten sonra uygun gördüğünüz bir sırayla sıralamanız da istenebilir.

Dahası, kişilik testlerinde sorulara cevap vermeniz gereken belirli bir zaman sınırı olabilir. Bir kişilik testindeki soru sayısı, testin yayıncısına ve test katılımcılarının tercihine bağlı olarak değişebilir.
                    </p>
                  </div>
                </li>
      
                <li>
                  <a data-toggle="collapse" href="#faq3" class="collapsed">Neden Bazı Kuruluşlar Kişilik Testi Kullanıyor? <i class="fa fa-minus-circle"></i></a>
                  <div id="faq3" class="collapse" data-parent="#faq-list">
                    <p>
                    Farklı motive edici faktörler genellikle farklı bireyleri yönlendirir. Bazı özellikler iyi olabilir, bazıları zayıf olabilir. Bazı insanlar doğal olarak dışarı çıkmış olabilir ve tüketici temsiline ya da satış rolüne en uygun olabilir. Benzer şekilde, bazıları rahat bir ortamda iyi performans gösterebilirken bazıları daha iyi baskı yapabilir. Kişilik testleri genellikle bir işletme kuruluşunun her bir adayın güçlü ve zayıf özelliklerini bulmasına ve şirketteki mevcut iş pozisyonunun rolü için en uygun olup olmadığını belirlemesine yardımcı olur. Kişilik testleri adayları gözden geçirmek ve uygun olanları kısa listeye almak için bir ön tarama aracı olarak kullanılabilir.
                  </div>
                </li>
      
                <li>
                  <a data-toggle="collapse" href="#faq4" class="collapsed">Kişilik Analiz Testi Sizin Hakkınızda Ne Söylüyor? <i class="fa fa-minus-circle"></i></a>
                  <div id="faq4" class="collapse" data-parent="#faq-list">
                    <p>
                    Kişilik analiz testi ile kişisel gelişime ne kadar katkı sağlanabilir? Gerçekten kişilik hakkında önemli bilgiler elde etmek mümkün mü? Her şeyde olduğu gibi öncelikle bir şeye inanmak ve güvenmek önemlidir. Dolayısıyla kişilik analiz testi kimler tarafında hazırlanmış, hangi kişisel özelliklerden yola çıkarak oluşturulmuş ve analizi neye göre yapılıyor, sorulması gerekir. Kişilik analiz testi ile bilimsel bir gerçeğe adım atıldığını bilmek gerekir. Dolayısıyla kişilik analiz testi çözerken, bunu koşullarına uygun bir şekilde yapmak gerekir. Soruları cevaplarken dürüst olmak çok önemlidir.

Kişilik analiz testi ile kendinizi daha iyi tanıyabilirsiniz. Aradığınız doğru insan hakkında daha net bir fikir edinebilirsiniz. Kişilik analiz testi ile aradığınız mutluluğu yakalayabilirsiniz.
                    </p>
                  </div>
                </li>
      
                <li>
                  <a data-toggle="collapse" href="#faq5" class="collapsed">Karakter ve Kişilik Arasındaki Fark Nedir? <i class="fa fa-minus-circle"></i></a>
                  <div id="faq5" class="collapse" data-parent="#faq-list">
                    <p>
                    Karakter, insanın kişiliğinin başka insanlar tarafından değerlendirilmesine denir..

Kişilik ise insanları birbirinden farklı kılan özellikleridir.
                    </p>
                  </div>
                </li>      
                
      
              </ul>
          </div>
        </div>

      </div>

    </section>
    <!--==========================
      Speakers Section
    ============================-->
    <section id="speakers" class="wow fadeInUp">
      <div class="container">
        <div class="section-header">
          <h2>KİŞİLİK TESTİ HAKKINDA SÖYLENMİŞ SÖZLER</h2>
          <p>Söylenen kişi tarafından resmedilmiştir.</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="speaker">
              <img src="img/speakers/1.jpg" alt="1" class="img-fluid">
              <div class="details">
                <h3><a>John Wooden</a></h3>
                <p>" Yetenek sizi zirveye taşıyabilir fakat zirvede kalmanızı sağlayacak şey KARAKTERİNİZDİR. "</p> 
                <br>         
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="speaker">
            <img src="img/speakers/2.jpg" alt="2" class="img-fluid">
              <div class="details">
                <h3><a>J.C. Watts</a></h3>
                <p>" Kişilikli olmak,kimse göremediği zaman da doğru olanı yapmaktır. "</p> 
                <br>         
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
          <div class="speaker">
            <img src="img/speakers/3.jpg" alt="3" class="img-fluid">
              <div class="details">
                <h3><a>Özdemir Asaf</a></h3>
                <p>" İnsan olmak,kuruş ile değil duruş ile ölçülür. "</p> 
                <br>         
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            
            <div class="speaker">
            <img src="img/speakers/4.jpg" alt="4" class="img-fluid">
              <div class="details">
                <h3><a>Paulo Coelho</a></h3>
                <p>" Gideceğin yoldan eminsen,engeller dinlenme noktan olmaktan öteye gidemez. "</p> 
                <br>         
              </div>
            </div>
            
          </div>
          <div class="col-lg-4 col-md-6">
          <div class="speaker">
            <img src="img/speakers/5.jpg" alt="5" class="img-fluid">
              <div class="details">
                <h3><a>Ahmet Şerif İzgören</a></h3>
                <p>" Yıldızlara dokunamazsınız ama karanlık gecelerde onlar size yol gösterir. "</p> 
                <br>         
              </div>
            </div>
            
          </div>
          <div class="col-lg-4 col-md-6">
          <div class="speaker">
            <img src="img/speakers/6.jpg" alt="6" class="img-fluid">
              <div class="details">
                <h3><a>Ahmet Hamdi Tanpınar</a></h3>
                <p>" İnsanlık,sorumluluk duygusuyla başlar. "</p> 
                <br>         
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>

    <!--==========================
      Schedule Section
    ============================-->
    <section id="schedule" class="section-with-bg">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h2>Test Yapanlar</h2>
          <p>İsminizin görünmesi için onaylanmasını bekleyiniz.</p>
        </div>
        <h3 class="sub-heading">Kişilik Testimiz Bizim İçin Kıymetli Olmakla Birlikte Test Yapacak Kişilere Öncelik Olacaktır.</h3>

        <div class="tab-content row justify-content-center">

          <!-- Schdule Day 1 -->
          <div role="tabpanel" class="col-lg-9 tab-pane fade show active" id="day-1">
          <?php
          $cek=$db->prepare("SELECT * FROM `tb_kisiler` WHERE `aktif`=1 ");
          $cek->execute();
          while($row=$cek->fetch(PDO::FETCH_ASSOC)){ 
          ?>
            <div class="row schedule-item">
              <div class="col-md-2"><time><?= $row["yapilditarih"]?></time></div>
              <div class="col-md-10">
                <h4><?= $row["nad"]?><span> <?= $row["yas"]?></span></h4>
                <p><?= $row["durumu"]?></p>
                 
              </div>
            </div> 
          <?php } ?>
            



          </div>        

        </div>

      </div>

    </section>
    
<!--==========================
      Subscribe Section
    ============================-->
    <section id="subscribe">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h2>BİR İNSANDA ÜÇ ŞEY ARAYIN. ZEKA , ENERJİ VE DÜRÜSTLÜK. EĞER SONUNCUSU YOKSA,İLK İKİSİYLE DE UĞRAŞMAYIN.</h2>
          <p>
Warren Buffett</p>
        </div>
      </div>
    </section>
    <!--==========================
      Contact Section
    ============================-->
    <section id="iletisim">
    <section id="contact" class="section-bg wow fadeInUp">

      <div class="container">

        <div class="section-header">
          <h2>Benİmle İletİşİme Geçİn</h2>
          <p>Aklınızdaki soruları yazarak iletişim kurun.</p>
        </div>

        <div class="row contact-info">

          <div class="col-md-4">
            <div class="contact-address">
              <i class="ion-ios-location-outline"></i>
              <h3>TWITTER ADRESİM</h3>
              <p><a href="https://twitter.com/alperso1">twitter.com/alperso1</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-phone">
              <i class="ion-ios-telephone-outline"></i>
              <h3>BLOG SİTEM</h3>              
              <p><a href="https://alpersahinoner.blogspot.com">alpersahinoner.blogspot.com</a></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="contact-email">
              <i class="ion-ios-email-outline"></i>
              <h3>Email</h3>
              <p><a href="mailto:alpersahinoner@gmail.com">alpersahinoner@gmail.com</a></p>
            </div>
          </div>

        </div>

      

      </div>
    </section><!-- #contact -->
    </section>

  </main>


  <!--==========================
    Footer
  ============================-->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <img src="img/logo1.png" alt="Kişilik Testi">
            <p>Bu kişilik testi gerçek değildir.Sorular ve sonuçlar aşağıda vermiş olduğum sitelerden kopyalanarak hazırlanmıştır. Bu bir proje ödevidir.Hocamız puan verdikten sonra hemen kaldırılacaktır.Ticari amaçla kullanılmamıştır.</p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Kullanışlı Linkler</h4>
            <ul>
              <li><i class="fa fa-angle-right"></i> <a href="#intro">Ana Sayfa</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#about">Kişilik Testi Hakkında</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#speakers">Söylenen Sözler</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#schedule">Testi Yapanlar</a></li>
              <li><i class="fa fa-angle-right"></i> <a href="#contact">İletişim</a></li>
            </ul>
          </div>

       

          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>İletişim</h4> 
            <div class="social-links">
              <a href="https://twitter.com/alperso1" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="https://facebook.com/alperso1" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="https://instagram.com/alperso1" class="instagram"><i class="fa fa-instagram"></i></a>            
              <a href="https://www.linkedin.com/in/alper-şahin-öner-8b522619a/" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Alper Şahin ÖNER</strong>
      </div>
      <div class="credits">
               Designed by <a href="https://alpersahinoner.blogspot.com/"> - BLOG</a>
      </div>
    </div>
  </footer><!-- #footer -->
  

  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/venobox/venobox.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>
</body>

</html>

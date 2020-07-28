<?php require_once 'admin/pages/inc-function.php';?>
<!DOCTYPE html>
<html lang="tr_TR">

<head>
    <meta charset="utf-8">
    
    <title>Kişilik Testi - Alperso1</title>

    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600">    
    <link rel="stylesheet" href="css/materialize.min.css">   
    <link rel="stylesheet" href="css/bootstrap.min.css">    
    <link rel="stylesheet" href="css/all.min.css">    
    <link rel="stylesheet" href="css/templatemo-style.css">
    
 
</head>

<body>
    <div class="container">
    <?php 
    $durumu="";
    if (@$_POST["submit"]) {
    ob_start(); 
    //eger tanımlı degilse diye kontrool ettiriyorum.
    if (isset($_POST['s1']) & isset($_POST['s2']) & isset($_POST['s3']) & isset($_POST['s4']) & isset($_POST['s5']) & isset($_POST['s6']) & isset($_POST['s7']) & isset($_POST['s8'])) {
        # code...
        //tanımli ise değişkenlere atacagım.
        $birsayısı=0;
        $ikisayısı=0;      
        //soru1 
        if ($_POST['s1']==1) {
            $birsayısı=$birsayısı+1;
        }
        elseif ($_POST['s1']==2) {
            $ikisayısı=$ikisayısı+1;
        }   
             //soru2 
        if ($_POST['s2']==1) {
            $birsayısı=$birsayısı+1;
        }
        elseif ($_POST['s2']==2) {
            $ikisayısı=$ikisayısı+1;
        }  
             //soru3 
        if ($_POST['s3']==1) {
            $birsayısı=$birsayısı+1;
        }
        elseif ($_POST['s3']==2) {
            $ikisayısı=$ikisayısı+1;
        }
             //soru4 
        if ($_POST['s4']==1) {
            $birsayısı=$birsayısı+1;
        }
        elseif ($_POST['s4']==2) {
            $ikisayısı=$ikisayısı+1;
        }
                //soru5 
        if ($_POST['s5']==1) {
                    $birsayısı=$birsayısı+1;
        }
        elseif ($_POST['s5']==2) {
                    $ikisayısı=$ikisayısı+1;
        }
            //soru6 
        if ($_POST['s6']==1) {
            $birsayısı=$birsayısı+1;
        }
        elseif ($_POST['s6']==2) {
            $ikisayısı=$ikisayısı+1;
        }
                //soru7 
                if ($_POST['s7']==1) {
                    $birsayısı=$birsayısı+1;
                }
                elseif ($_POST['s7']==2) {
                    $ikisayısı=$ikisayısı+1;
                }
                        //soru8 
        if ($_POST['s8']==1) {
            $birsayısı=$birsayısı+1;
        }
        elseif ($_POST['s8']==2) {
            $ikisayısı=$ikisayısı+1;
        }

        if ($birsayısı>=3) {
            //echo $birsayısı;
            echo"<section id='sonuc1'>
            <div  style='background-color:#98FB98;text-align:center;border:1px solid red;'class='container wow fadeInUp'>
              <div class='section-header'>
                <h1 style='font-size:50px;color:black' align='center'>ZEKİ VE İYİMSER</h1>
                <img src='img/zifoto2.jpg'>
              </div>
              <h3 class='sub-heading'><p>Siz zeki bir yapıya sahipsiniz.<p>Asil, zeki ve bilge bir karakteriniz var. Her zaman zor tatmin olan, elinden gelenin en iyisine uğraşan birisiniz. Bilgi açlığınızı doyurmak için sürekli kitap okumanız şaşılmayacak bir gerçek. Bir filozof gibi her zaman hayatta büyük resmin peşindesiniz. Kendiniz, arkadaşlarınız ve dünya için her zaman iç huzurun arayışındasınız. İyi bir arkadaşsınız, fedakarlık yapmayı seviyorsunuz.</h3>
              <a href='sorular.php'  style='background-color: #008CBA;'class='btn btn-error'>Tekrar Test</a>
              <br>
                
                <br>               
              
            </div>
            <br>
            
            <br>
          </section>";
          $durumu=htmlspecialchars("Zeki ve İyimser",ENT_QUOTES,'UTF-8');
        } else {            
            echo"<section id='sonuc1'>
            <div  style='background-color:#FF4500;text-align:center;border:1px solid white;'class='container wow fadeInUp'>
              <div class='section-header'>
                <h1 style='font-size:50px;color:white;' align='center'>NEŞELİ VE HAYALPEREST</h1>
                <img src='img/zifoto0.jpg'>
              </div>
              <h3 class='sub-heading'><p style='color:white;'>Siz tam bir neşe kaynağısınız.<p style='color:white;'>Hayalperest, barışçıl ve genç bir ruhunuz var. İyimser, şefkatli biri olarak insanların içinde hep en iyi şeyleri görebiliyorsunuz. Her zaman gülümserken etrafınızdakileri de gülümsetiyorsunuz. Utangaç ve zeki birisiniz. Aynı zamanda çalışkansınız. Komik bir kişiliğiniz var ama çoğu insan sizi anlamakta zorlanıyor. İnce espri anlayışınız arkadaşlarınız tarafından yadırganabilir.</h3>
              <a href='sorular.php'  style='background-color: #008CBA;'class='btn btn-error'>Tekrar Test</a>
              <br>
                
                <br>               
              
            </div>
            <br>
            
            <br>
          </section>";
          $durumu=htmlspecialchars("Neşeli ve Hayalperest",ENT_QUOTES,'UTF-8');
        }
        
     

    } else {
       
      
    }
    ob_end_flush(); 
    



   
        $ad=htmlspecialchars($_POST["nad"],ENT_QUOTES,'UTF-8');
        $email=htmlspecialchars($_POST["mail"],ENT_QUOTES,'UTF-8');
        $cinsiyet=htmlspecialchars($_POST["cinsiyet"],ENT_QUOTES,'UTF-8');
        $yas=htmlspecialchars($_POST["yas"],ENT_QUOTES,'UTF-8');
        
        //$tarih=date('yy-m-d');
        //echo $tarih;
        
        //$sql = "INSERT INTO `tb_kisiler` (`id`, `nad`, `yas`, `cinsiyet`, `yapilditarih`, `mail`, `aktif`, `durumu`) VALUES (NULL, \'Emre Çoban\', \'33\', \'1\', current_timestamp(), \'omer@gmail.com\', \'1\', \'Kurnaz\')";
        $ekle=$db->prepare("INSERT INTO `tb_kisiler`(`id`,`nad`, `yas`, `cinsiyet`, `mail`, `aktif`, `durumu`,`yapilditarih`) VALUES 
        (NULL,'$ad','$yas','$cinsiyet','$email',0,'$durumu', current_timestamp())");
        //echo $ad;
        if ($ekle->execute()) {
            
            echo '<script>alert("Veritabanı kayıt gönderildi.")</script>';            
        } else {
            print_r($ekle->errorInfo());
            echo'<script>alert("Veritabanı kayıt hata.")</script>';
        }
        
    } 
    
    ?>
        <div class="row">
            <div class="col-sm-12 col-md-7">
            
                <i class="far fa-comments fa-5x tm-site-icon"></i>
                <h1 class="tm-site-name">Kişilik Testi</h1>
            </div>
            <div class="col-sm-12 col-md-5 mt-md-0 mt-5">
                
                <div class="tm-site-header-right-col">
                
                    <a href="index.php" class="btn btn-primary">Anasayfa - Bizimle İletişime Geçin</a>
                </div>
            </div>
        </div>     
        <div class="row">
            <div class="tm-intro">
                <div class="col-sm-12 col-md-8 mb-md-0 mb-4 tm-intro-left">
                    <p class="mb-0">Bu kişilik testi gerçek değildir.Sorular ve sonuçlar aşağıda vermiş olduğum sitelerden kopyalanarak hazırlanmıştır.
                        Bu bir proje ödevidir.Hocamız puan verdikten sonra hemen kaldırılacaktır.Ticari amaçla kullanılmamıştır. <a href="http://www.testler.org/test.php?test=16">Site - 1</a> ve
                            
                  			 <a rel="nofollow" href="https://www.kisiligim.com/test.html#question">Site - 2</a></p>
                </div>
                <div class="col-sm-12 col-md-4">
                    <em>
                        <p class="tm-highlight"><font size="3px">“Siz zaten olmak istediğiniz kişisiniz.Buna inanmayı reddetmeniz,onu görmemenizin tek nedenidir.” Neville Goddard</font></p>
                    </em>
                </div>
            </div>
            <div class="col-12">
                <hr>
            </div>
        </div>

        <form action="" method="POST" enctype="multipart/form-data" role="form">
            <div class="row">           
              
                <div class="col-12">
                    <h2 class="tm-question-header tm-question-header-mt">Soru 1</h2>
                    <p class="mb-0">Kendinizi ne zaman en iyi hissedersiniz?</p>
                    <div class="tm-q3-choice-container">
                        <label class="tm-q3-choice tm-q-choice-2-col">
                            <img src="img/sorular/1.jpg" alt="Image" class="img-fluid">
                            <div class="mt-4">
                                <input type="radio" name="s1" class="tm-radio-group-2 with-gap" value="1" />
                                <span>Sabahları</span>
                            </div>
                        </label>
                        <label class="tm-q3-choice tm-q-choice-2-col">
                            <img src="img/sorular/4.jpg" alt="Image" class="img-fluid">
                            <div class="mt-4">
                                <input type="radio" name="s1" class="tm-radio-group-2 with-gap" value="1" />
                                <span>Öğlen Vakti</span>
                            </div>
                        </label>
                        <label class="tm-q3-choice tm-q-choice-2-col">
                            <img src="img/sorular/3.jpg" alt="Image" class="img-fluid">
                            <div class="mt-4">
                                <input type="radio" name="s1" class="tm-radio-group-2 with-gap" value="2" />
                                <span>Akşam</span>
                            </div>
                        </label>
                        <label class="tm-q3-choice tm-q-choice-2-col">
                            <img src="img/sorular/2.jpg" alt="Image" class="img-fluid">
                            <div class="mt-4">
                                <input type="radio" name="s1" class="tm-radio-group-2 with-gap" value="2" />
                                <span>Gece</span>
                            </div>
                        </label>
                        
                    </div> <!-- choices container -->
                </div> <!-- col-12 -->
                <div class="col-12">
                <hr>
            </div>
            <div class="col-12">
                    <h2 class="tm-question-header tm-question-header-mt">Soru 2</h2>
                    <p class="mb-0">En çok hangi rengi seversiniz?</p>
                    <div class="tm-q3-choice-container">
                        <label class="tm-q3-choice tm-q-choice-2-col">
                       
                            <div class="mt-4">
                                <input type="radio" name="s2" class="tm-radio-group-2 with-gap" value="1" />
                                <span>Kırmızı veya portakal rengi</span>
                            </div>
                        </label>
                        <label class="tm-q3-choice tm-q-choice-2-col">
                           
                            <div class="mt-4">
                                <input type="radio" name="s2" class="tm-radio-group-2 with-gap" value="1" />
                                <span>Siyah</span>
                            </div>
                        </label>
                        <label class="tm-q3-choice tm-q-choice-2-col">
                            
                            <div class="mt-4">
                                <input type="radio" name="s2" class="tm-radio-group-2 with-gap" value="2" />
                                <span>Yeşil</span>
                            </div>
                        </label>
                        <label class="tm-q3-choice tm-q-choice-2-col">
                         
                            <div class="mt-4">
                                <input type="radio" name="s2" class="tm-radio-group-2 with-gap" value="2" />
                                <span>Başka bir renk</span>
                            </div>
                        </label>
                        
                    </div> <!-- choices container -->
                </div> <!-- col-12 -->
                <div class="col-12">
                <hr>
            </div>
            <div class="col-12">
                    <h2 class="tm-question-header tm-question-header-mt">Soru 3</h2>
                    <p class="mb-0">Genellikle nasıl yürürsünüz?</p>
                    <div class="tm-q3-choice-container">
                        <label class="tm-q3-choice tm-q-choice-2-col">
                            <img src="img/sorular/h1.jpg" alt="Image" class="img-fluid">
                            <div class="mt-4">
                                <input type="radio" name="s3" class="tm-radio-group-2 with-gap" value="1" />
                                <span>Hızlı ve kısa adımlarla</span>
                            </div>
                        </label>
                        <label class="tm-q3-choice tm-q-choice-2-col">
                            <img src="img/sorular/h2.jpg" alt="Image" class="img-fluid">
                            <div class="mt-4">
                                <input type="radio" name="s3" class="tm-radio-group-2 with-gap" value="1" />
                                <span>Normal tempoda
                                    </span>
                            </div>
                        </label>
                        <label class="tm-q3-choice tm-q-choice-2-col">
                            <img src="img/sorular/h3.jpg" alt="Image" class="img-fluid">
                            <div class="mt-4">
                                <input type="radio" name="s3" class="tm-radio-group-2 with-gap" value="2" />
                                <span>Yavaş ve sakin</span>
                            </div>
                        </label>
                        <label class="tm-q3-choice tm-q-choice-2-col">
                            <img src="img/sorular/h4.jpg" alt="Image" class="img-fluid">
                            <div class="mt-4">
                                <input type="radio" name="s3" class="tm-radio-group-2 with-gap" value="2" />
                                <span>Çok yavaş</span>
                            </div>
                        </label>
                        
                    </div> <!-- choices container -->
                </div> <!-- col-12 -->
                <div class="col-12">
                <hr>
            </div>                
            <div class="col-12">
                    <h2 class="tm-question-header tm-question-header-mt">Soru 4</h2>
                    <p class="mb-0">Çok zor bir işe dikkatinizi vermişken rahatsız ediliyor ve konsantre olamıyorsunuz.Ne yaparsınız?</p>
                    <div class="tm-q3-choice-container">
                        <label class="tm-q3-choice tm-q-choice-2-col">
                            
                            <div class="mt-4">
                                <input type="radio" name="s4" class="tm-radio-group-2 with-gap" value="1" />
                                <span>Aşırı rahatsız olurum.</span>
                            </div>
                        </label>
                        <label class="tm-q3-choice tm-q-choice-2-col">
                            
                            <div class="mt-4">
                                <input type="radio" name="s4" class="tm-radio-group-2 with-gap" value="1" />
                                <span>Belli olmaz.</span>
                            </div>
                        </label>
                        <label class="tm-q3-choice tm-q-choice-2-col">
                           
                            <div class="mt-4">
                                <input type="radio" name="s4" class="tm-radio-group-2 with-gap" value="2" />
                                <span>Sakin kalırım.</span>
                            </div>
                        </label>
                        <label class="tm-q3-choice tm-q-choice-2-col">
                            
                            <div class="mt-4">
                                <input type="radio" name="s4" class="tm-radio-group-2 with-gap" value="2" />
                                <span>Sessizce gülümserim.</span>
                            </div>
                        </label>
                        
                    </div> <!-- choices container -->
                </div> <!-- col-12 -->
                <div class="col-12">
                <hr>
            </div>                
            <div class="col-12">
                    <h2 class="tm-question-header tm-question-header-mt">Soru 5</h2>
                    <p class="mb-0">Bir partiye veya sosyal etkinliğe katıldığınızda ne yaparsınız?</p>
                    <div class="tm-q3-choice-container">
                        <label class="tm-q3-choice tm-q-choice-2-col">                            
                            <div class="mt-4">
                                <input type="radio" name="s5" class="tm-radio-group-2 with-gap" value="1" />
                                <span>Sohbet etmeyi severim.</span>
                            </div>
                        </label>
                        <label class="tm-q3-choice tm-q-choice-2-col">                            
                            <div class="mt-4">
                                <input type="radio" name="s5" class="tm-radio-group-2 with-gap" value="1" />
                                <span>Sağa sola bakarım.</span>
                            </div>
                        </label>
                        <label class="tm-q3-choice tm-q-choice-2-col">                           
                            <div class="mt-4">
                                <input type="radio" name="s5" class="tm-radio-group-2 with-gap" value="2" />
                                <span>Piyasa araştırması yapıp hedef belirlerim.</span>
                            </div>
                        </label>
                        <label class="tm-q3-choice tm-q-choice-2-col">                            
                            <div class="mt-4">
                                <input type="radio" name="s5" class="tm-radio-group-2 with-gap" value="2" />
                                <span>Ortama göre değişir.</span>
                            </div>
                        </label>
                        
                    </div> <!-- choices container -->
                </div> <!-- col-12 -->
                <div class="col-12">
                <hr>
            </div> 
            <div class="col-12">
                    <h2 class="tm-question-header tm-question-header-mt">Soru 6</h2>
                    <p class="mb-0">Karnın çok acıktı.Hangi yemeği tercih edersin?</p>
                    <div class="tm-q3-choice-container">
                        <label class="tm-q3-choice tm-q-choice-2-col">
                            <img src="img/sorular/1.0.jpg" alt="Image" class="img-fluid">
                            <div class="mt-4">
                                <input type="radio" name="s6" class="tm-radio-group-2 with-gap" value="1" />
                                <span>Börek vb.</span>
                            </div>
                        </label>
                        <label class="tm-q3-choice tm-q-choice-2-col">
                            <img src="img/sorular/1.2.jpg" alt="Image" class="img-fluid">
                            <div class="mt-4">
                                <input type="radio" name="s6" class="tm-radio-group-2 with-gap" value="1" />
                                <span>Et,tavuk vb.</span>
                            </div>
                        </label>
                        <label class="tm-q3-choice tm-q-choice-2-col">
                            <img src="img/sorular/1.1.jpg" alt="Image" class="img-fluid">
                            <div class="mt-4">
                                <input type="radio" name="s6" class="tm-radio-group-2 with-gap" value="2" />
                                <span>Çorba vb.</span>
                            </div>
                        </label>
                        <label class="tm-q3-choice tm-q-choice-2-col">
                            <img src="img/sorular/1.3.jpg" alt="Image" class="img-fluid">
                            <div class="mt-4">
                                <input type="radio" name="s6" class="tm-radio-group-2 with-gap" value="2" />
                                <span>Ne bulursam</span>
                            </div>
                        </label>
                        
                    </div> <!-- choices container -->
                </div> <!-- col-12 -->
                <div class="col-12">
                <hr>
            </div>                
            <div class="col-12">
                    <h2 class="tm-question-header tm-question-header-mt">Soru 7</h2>
                    <p class="mb-0">İşime eğlence olarak yaklaşmayı severim, ya da iş ve eğlenceyi karıştırırım.</p>
                    <div class="tm-q3-choice-container">
                        <label class="tm-q3-choice tm-q-choice-2-col">                          
                            <div class="mt-4">
                                <input type="radio" name="s7" class="tm-radio-group-2 with-gap" value="1" />
                                <span>Az</span>
                            </div>
                        </label>
                        <label class="tm-q3-choice tm-q-choice-2-col">                            
                            <div class="mt-4">
                                <input type="radio" name="s7" class="tm-radio-group-2 with-gap" value="1" />
                                <span>Normal</span>
                            </div>
                        </label>
                        <label class="tm-q3-choice tm-q-choice-2-col">                            
                            <div class="mt-4">
                                <input type="radio" name="s7" class="tm-radio-group-2 with-gap" value="2" />
                                <span>İş zamanı iş,eğlence zamanı eğlence</span>
                            </div>
                        </label>
                        <label class="tm-q3-choice tm-q-choice-2-col">                            
                            <div class="mt-4">
                                <input type="radio" name="s7" class="tm-radio-group-2 with-gap" value="2" />
                                <span>Her zaman</span>
                            </div>
                        </label>
                        
                    </div> <!-- choices container -->
                </div> <!-- col-12 -->
                <div class="col-12">
                <hr>
            </div>                
            <div class="col-12">
                    <h2 class="tm-question-header tm-question-header-mt">Soru 8</h2>
                    <p class="mb-0">Acele iş yapmaktan kaçınmak için o işi son bitiş tarihinden önce bitirecek şekilde planlarım.</p>
                    <div class="tm-q3-choice-container">
                        <label class="tm-q3-choice tm-q-choice-2-col">                            
                            <div class="mt-4">
                                <input type="radio" name="s8" class="tm-radio-group-2 with-gap" value="1" />
                                <span>Az</span>
                            </div>
                        </label>
                        <label class="tm-q3-choice tm-q-choice-2-col">                            
                            <div class="mt-4">
                                <input type="radio" name="s8" class="tm-radio-group-2 with-gap" value="2" />
                                <span>Normal</span>
                            </div>
                        </label>
                        <label class="tm-q3-choice tm-q-choice-2-col">
                            
                            <div class="mt-4">
                                <input type="radio" name="s8" class="tm-radio-group-2 with-gap" value="1" />
                                <span>Biraz Fazla</span>
                            </div>
                        </label>
                        <label class="tm-q3-choice tm-q-choice-2-col">
                            
                            <div class="mt-4">
                                <input type="radio" name="s8" class="tm-radio-group-2 with-gap" value="2" />
                                <span>Çok</span>
                            </div>
                        </label>
                        
                    </div> <!-- choices container -->
                </div> <!-- col-12 -->
               
                <div class="col-12 tm-respondent-info">
                	<hr>
                    <h2 class="tm-question-header tm-question-header-mt">Lütfen kendinizi eksiksiz olarak tanıtınız.</h2>
                    <font size="3px"><p>Sonuç sayfasına yönlendirileceksiniz.</p></font>
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <div class="form-group">
                                <label for="inputName">Ad ve Soyadınız </label>
                                <input type="text" class="form-control browser-default" id="inputName" name="nad"
                                    aria-describedby="nameHelp" required>
                            </div>
                            <div class="form-group" >
                                <label for="inputEmail">Mail Adresiniz</label>
                                <input type="email" class="form-control browser-default" id="inputEmail1" name="mail"
                                    aria-describedby="emailHelp" required>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="tm-choice-mt">
                                <label class="tm-q-choice">
                                    <input type="radio" name="cinsiyet" class="with-gap" value="1" checked="true"/>
                                    <span>Erkek</span>
                                </label>
                                <label class="tm-q-choice tm-choice-ml">
                                    <input type="radio" name="cinsiyet" class="with-gap" value="0" />
                                    <span>Kadın</span>
                                </label>
                            </div>
                            <div class="input-field col tm-dropdown-container">
                                <select class="" name="yas" id="occupation" >
                                    <option value="0">Yaşınız...</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                </select>
                            </div>
                        </div>                        
                    </div>
                </div>
                
                
                
                <div class="col-12 text-center tm-submit-container">
                    <input type="submit" href="#sonuc1" value="TEST BİTİR" class="btn btn-primary tm-btn-submit" name="submit">
                </div>
                <div class="col-12">
                    <hr>
                </div>
            </div> <!-- row -->
        </form>     
    
        <div class="row">
          <div class="col-12">
                <footer>
                    <p class="text-center mb-3 tm-footer-text">Copyright &copy; 2020 Alper Şahin ÖNER  - <a rel="nofollow" href="https://alpersahinoner.blogspot.com">Blog</a></p>
                </footer>
            </div>
        </div>
    </div>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script>

        // Parallax function
        // https://codepen.io/roborich/pen/wpAsm
        var background_image_parallax = function ($object, multiplier) {
            multiplier = typeof multiplier !== 'undefined' ? multiplier : 0.5;
            multiplier = 1 - multiplier;
            var $doc = $(document);
            $object.css({ "background-attatchment": "fixed" });
            $(window).scroll(function () {
                var from_top = $doc.scrollTop(),
                    bg_css = 'center ' + (multiplier * from_top - 200) + 'px';
                $object.css({ "background-position": bg_css });
            });
        };

        /**
         * detect IE
         * returns version of IE or false, if browser is not Internet Explorer
         */
        function detectIE() {
            var ua = window.navigator.userAgent;

            var msie = ua.indexOf('MSIE ');
            if (msie > 0) {
                // IE 10 or older => return version number
                return parseInt(ua.substring(msie + 5, ua.indexOf('.', msie)), 10);
            }

            var trident = ua.indexOf('Trident/');
            if (trident > 0) {
                // IE 11 => return version number
                var rv = ua.indexOf('rv:');
                return parseInt(ua.substring(rv + 3, ua.indexOf('.', rv)), 10);
            }

            // var edge = ua.indexOf('Edge/');
            // if (edge > 0) {
            //     // Edge (IE 12+) => return version number
            //     return parseInt(ua.substring(edge + 5, ua.indexOf('.', edge)), 10);
            // }

            // other browser
            return false;
        }

        $(document).ready(function () {

            // Detect IE
            if (detectIE()) {
                alert('Please use the latest version of Chrome, Firefox, or Edge for best browsing experience.');
            }

            $('select').formSelect();
            // Parallax image background
            background_image_parallax($(".tm-parallax"), 0.40);

            // Darken image when its radio button is selected
            $(".tm-radio-group-1").click(function () {
                $('.tm-radio-group-1').parent().siblings("img").removeClass("darken");
                $(this).parent().siblings("img").addClass("darken");
            });

            $(".tm-radio-group-2").click(function () {
                $('.tm-radio-group-2').parent().siblings("img").removeClass("darken");
                $(this).parent().siblings("img").addClass("darken");
            });

            $(".tm-checkbox").click(function () {
                $(this).parent().siblings("img").toggleClass("darken");
            })
        });
    </script>
    <script type="text/javascript">
    //f5 butonunu engelleme
document.onkeydown = function() 
{
    switch (event.keyCode) 
    {
        case 116 : // klavyeden f5 butonunu tamamen iptal ediyoruz.
            event.returnValue = false;
            event.keyCode = 0;
            return false;
    }
}
</script>
<script>
    //sayfa yenileme engelleme
if ( window.history.replaceState ) {
window.history.replaceState( null, null, window.location.href );
}
</script>

    
</body>

</html>
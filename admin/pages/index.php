
<?php
//giriş sayfası
ob_start();
session_start();
if (isset($_SESSION["giriskontrol"])) {
        if (@$_SESSION["giriskontrol"]==1) {
            header("Location: anasayfa.php");
     }# code...
    }


else {
    
}


?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin - Giriş</title>

    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Admin - Giriş Yap</h3>
                       
                    </div>
                    <div class="panel-body">
                        <form role="form" action="" method="POST">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Kullanıcı adınız..." name="username" type="text" autofocus required>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Şifreniz..." name="password" type="password" value="" required>
                                </div>    
                                                   
                                <!-- Change this to a button or input when using this as a form -->
                                <input type="submit" name="submit" value="Giriş Yap" class="btn btn-lg btn-success btn-block">  
                            </fieldset>
                        </form>
                        
                    </div>
                    
                </div>
                <a href="../../index.php"><i class="fa fa-back fa-fw"></i><--Anasayfa geri dön</a>
                <br>
                <h3>Kullanıcı adı = admin  Şifre = 123</h3>
            </div>
        </div>
    </div>


   <!-- <?= md5("123") ?>-->
    <?php
   
if(isset($_POST["submit"]))
{
    $md5sifre=md5($_POST["password"]);
if ($_POST["username"]=="admin" && $md5sifre=="202cb962ac59075b964b07152d234b70") {
    $_SESSION["giriskontrol"]=1;//giriş yapmış,0 ise giriş yapmamış demek
    $_SESSION["username"]=$_POST["username"];//Bütün sayfalarda bu kullanıcı adını kontrol ettirebileceigim

    header("Location:anasayfa.php");//sayfaya yönlendiriyor
    return true;
} else {
    echo "<p style='text-align:center;color:red'>Kullanıcı adı veya şifre yanlış!</p>";
    return false;
}
}
if (@$_GET["i"]=="cikis") {
    echo "<p style='text-align:center;color:green'>Başarıyla çıkış yaptınız!</p>";
}
elseif(@$_GET["i"]=="hack"){
    echo "<p style='text-align:center;color:red'>Girişi yapmalısın!</p>";
}





?>
    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>

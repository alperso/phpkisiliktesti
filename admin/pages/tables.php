<?php require_once 'inc-function.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin - Sonuclar</title>

    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<?php
//Aktiflik değiştirme
$id=intval(@$_GET["id"]);
if(@$_GET["is"]=="aktif"){

    
    
    if ($_GET["drm"]==1) {
        $durum=0;
        //Aktif ise pasif 
        # code...
    }else {
        $durum=1;
        //Pasif ise aktif yapıyorum
    }
    $aktif=$db->prepare("UPDATE `tb_kisiler` SET `aktif`=:a WHERE `id` =:i");
    $aktif->bindValue(":a",$durum,PDO::PARAM_INT);
    $aktif->bindValue(":i",$id,PDO::PARAM_INT);
    if ($aktif->execute()) {
        
        header("Location: tables.php?i=ekle");
    } else {
        
        header("Location: tables.php?i=eklemehata");
    }   

}
if(@$_GET["is"]=="sil"){
  
    $sil=$db->prepare("DELETE FROM `tb_kisiler`WHERE `id` =:i");
    $sil->bindValue(":i",$id,PDO::PARAM_INT);
    if ($sil->execute()) {
     
        header("Location: tables.php?i=ekle");
    } else {
       
        header("Location: tables.php?i=hata");
    }   

}




?>
    <div id="wrapper">
     
        <?php require_once 'inc-menu.php'; ?>

        <div id="page-wrapper">
            <div class="row">
                
                <div class="col-lg-12">
           
                    <h1 class="page-header">SONUCLAR</h1> 
                </div>
              
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
            <?php
                if(@$_GET["i"]=="ekle"){?>
            <div class="alert alert-success alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                İşlem Başarılı...
                            </div> 
                <?php } elseif(@$_GET["i"]=="hata"){?> 
                    <div class="alert alert-danger alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                Hata oluştu...
                            </div>  
                <?php } ?>
            <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tasks fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div>Toplam Test Yapan Sayısı</div>
                                    <?php 
                                        $cek=$db->prepare("SELECT COUNT(*) FROM `tb_kisiler`");
                                        $cek->execute();
                                        $say = $cek->fetchColumn();
                                     ?>
                                        <div class="huge"><?=$say?></div>
                                    
                                    
                                </div>
                            </div>
                        </div>                        
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            SONUCLAR TABLOSU --------------><font color="red">Aktif olanlar anasayfada görüntüleniyor.(Adminin aktif yaptıkları)</font>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>AD</th>
                                            <th>YAS</th>
                                            <th>YAPILDIĞI TARİH</th>
                                            <th>MAİL</th>
                                            <th>DURUMU</th>
                                            <th>AKTİF/PASİF</th>
                                            <th>SİL</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $cek=$db->prepare("SELECT * FROM `tb_kisiler` order by `id` asc");
                                        $cek->execute();
                                        while($row=$cek->fetch(PDO::FETCH_ASSOC)){  
                                        ?>
                                        <tr class="odd gradeX">
                                            <td><?= $row["id"]?></td>
                                            <td><?= $row["nad"]?></td>
                                            <td><?= $row["yas"]?></td>
                                            <td class="center"><?= $row["yapilditarih"]?></td>
                                            <td class="center"><?= $row["mail"]?></td>
                                            <td class="center"><?= $row["durumu"]?></td>
                                            
                                        <?php
                                            if ($row["aktif"]==1) {?>
                                            <td class="center"><a href="tables.php?is=aktif&id=<?=$row["id"]?>&drm=<?=$row["aktif"]?>" onclick="return confirm
                                            ('Değiştirmek istediğinize emin misiniz ?')" class="btn btn-success" style="margin-right:15px">Aktif</a>
                                        <?php } else {?>
                                            <td class="center"><a href="tables.php?is=aktif&id=<?=$row["id"]?>&drm=<?=$row["aktif"]?>" onclick="return confirm
                                            ('Değiştirmek istediğinize emin misiniz ?')" class="btn btn-danger" style="margin-right:15px">Pasif</a>
                                       <?php } ?>                                       
                                        
                                        </a>
                                    </td>
                                            <td class="center"><a href="tables.php?is=sil&id=<?=$row["id"]?>" onclick="return confirm('Silmek istediğinize emin misiniz ?')" class="btn btn-warning" style="margin-right:15px">Sil</a></td>
                                        </tr>
                                        <?php }?>
                                    </tbody>
                                </table>
                            </div>                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>           
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>
    <script src="../bower_components/datatables-responsive/js/dataTables.responsive.js"></script>
    
    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>

</body>

</html>

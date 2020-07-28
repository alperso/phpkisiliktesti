<?php 
ob_start();session_start();
    
    if (@$_SESSION["giriskontrol"]!=1) {
        header("Location: index.php?i=hack");
    }# code...

?>
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        
        <a class="navbar-brand" href="#">Hoşgeldin  <?php echo $_SESSION["username"]?> v1.0 </a>
    </div>
    <!-- /.navbar-header -->

    <ul class="nav navbar-top-links navbar-right">                    
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-user">
                <li><a href="#"><i class="fa fa-user fa-fw"></i><?php echo $_SESSION["username"]?></a>
                </li>                
                <li class="divider"></li>
                <li><a href="cikisyap.php"><i class="fa fa-sign-out fa-fw"></i> Çıkış Yap</a>
                </li>
            </ul>
            <!-- /.dropdown-user -->
        </li>
        <!-- /.dropdown -->
    </ul>
    <!-- /.navbar-top-links -->

    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
                <li class="sidebar-search">
                    <div class="input-group custom-search-form">
                        <input type="text" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                        <button class="btn btn-default" type="button">
                            <i class="fa fa-search"></i>
                        </button>
                    </span>
                    </div>
                    <!-- /input-group -->
                </li>
                <li>
                    <a href="anasayfa.php"><i class="fa fa-dashboard fa-fw"></i> ADMİN-PANEL</a>
                </li>
                <li>
                    <a href="tables.php"><i class="fa fa-bar-chart-o fa-fw"></i> SONUCLAR</a>   
                </li>               
                <li>
                    <a href="../../index.php"><i class="fa fa-edit fa-fw"></i> ----> ANASAYFA</a>
                </li>    
                <li>
                    <a href="../../sorular.php"><i class="fa fa-edit fa-fw"></i> ----> TEST BAŞLA</a>
                </li>                     
            </ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->
</nav>

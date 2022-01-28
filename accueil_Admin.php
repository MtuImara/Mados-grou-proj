<?php
    session_start();
    $login= $_SESSION['login'];
?>
<?php
    require_once 'connection.php';
    require_once 'controller.php';
?>

<!DOCTYPE html>
<html>


    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- Favicon icon -->
        <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
        
        <title>Immobilier!</title>
        
        <!-- page css -->
        <link href="dist/css/pages/login-register-lock.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="dist/css/style.min.css" rel="stylesheet">
        

    </head>
    <body>

      <div class="container-fluid">
        
        <!-- row -->
        <div class="row">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-body">
                        <ul class="nav nav-tabs"  role="tablist">
                            <li class="nav-item"> 
                                <a class="nav-link active" id="home-tab"  href="utilisateurs"><span class="hidden-sm-up"><i class="ti-home"></i></span> <span class="hidden-xs-down">Home</span>
                                </a> 
                            </li>
                            <li class="nav-item"> <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile5" role="tab" aria-controls="profile"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">immobilier</span></a></li>
                            <li class="nav-item"> 
                                <a class="nav-link" id="profile-tab" href="#"><span class="hidden-sm-up"><i class="ti-user"></i></span> <span class="hidden-xs-down">Mon Profil</span>
                                </a>
                            </li>
                            
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="javascript:void(0)" role="button" aria-haspopup="true" aria-expanded="false">
                                    <span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">Update Profil</span>
                                </a>
                                <div class="dropdown-menu"> 
                                    <a class="dropdown-item" id="dropdown1-tab" href="#">Modifier</a> 
                                    <a class="dropdown-item" id="dropdown3-tab" href="# }}">Modifier Pwd</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="javascript:void(0)" role="button" aria-haspopup="true" aria-expanded="false">
                                    <span class="hidden-sm-up"><i class="ti-email"></i></span> <span class="hidden-xs-down">Gestion des Utilisateur</span>
                                </a>
                                <div class="dropdown-menu"> 
                                    <a class="dropdown-item" id="dropdown1-tab" href="#">Modifier un Utilisateur</a> 
                                    <a class="dropdown-item" id="dropdown3-tab" href="# }}">Modifier Pwd</a>
                                    <a class="dropdown-item" id="dropdown2-tab" href="index.php" >Deconnexion</a> 
                                </div>
                            </li>
                        </ul>                                
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <ul class="navbar-nav my-lg-0">                                                
                    <!-- User Profile -->
                    <!-- ============================================================== -->
                    <li class="nav-item dropdown u-pro">
                        <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="../assets/images/users/.jpg" alt="" class=""> <span class="hidden-md-down"><?php echo $login; ?>&nbsp;<i class="fa fa-angle-down"></i></span> 
                        </a>
                        <div class="dropdown-menu dropdown-menu-right animated flipInY">
                            <div class="dropdown-divider"></div>
                            <!-- text-->
                            <a href="index.php" class="dropdown-item"><i class="fa fa-power-off"></i> Logout</a>
                            <!-- text-->
                        </div>
                    </li>
                </ul>
            </div>                    
        </div>
        <!-- row -->

        
        <div class="row">
            <div class="col-12">
                <h4 class="d-inline">Les Achats <a href="#code1" data-toggle="collapse"><i class="fa fa-file-text-o" data-toggle="tooltip" title="Get code"></i></a></h4>
                <p class="text-muted m-t-0">Pour plus de détails veillez cliquer sur Voir Plus</p>
                <div id="code1" class="collapse">
                    <div class="highlight">
                        <pre>
                            Leader au Burundi
                        </pre>
                    </div>
                </div>
                <!-- Row -->
                <div class="row">
                    <!-- column -->
                    <div class="col-lg-3 col-md-6">
                        <!-- Card -->
                        <div class="card">
                            <img class="card-img-top img-responsive" src="assets/images/big/1.jpeg" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Maison A une Chambre</h4>
                                <p class="card-text">Une chambre, douche et toilette.</p>
                                <a href="commander.php" class="btn btn-primary">passer votre commande</a>
                            </div>
                        </div>
                        <!-- Card -->
                    </div>
                    <!-- column -->
                    <!-- column -->
                    <div class="col-lg-3 col-md-6">
                        <!-- Card -->
                        <div class="card">
                            <img class="card-img-top img-responsive" src="assets/images/big/2.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Maison A deux Chambre</h4>
                                <p class="card-text">Deux chambre, douche (interne et externe) et toilette(interne et externe).</p>
                                <a href="commander.php" class="btn btn-primary">passer votre commande</a>
                            </div>
                        </div>
                        <!-- Card -->
                    </div>
                    <!-- column -->
                    <!-- column -->
                    <div class="col-lg-3 col-md-6">
                        <!-- Card -->
                        <div class="card">
                            <img class="card-img-top img-responsive" src="assets/images/big/3.webp" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Maison A trois Chambre</h4>
                                <p class="card-text">Trois chambre, 2 douche (1 interne et 1 externe) et 2 toilette(1 interne et 1 externe).</p>
                                <a href="commander.php" class="btn btn-primary">passer votre commande</a>
                            </div>
                        </div>
                        <!-- Card -->
                    </div>
                    <!-- column -->
                    <!-- column -->
                    <div class="col-lg-3 col-md-6 img-responsive">
                        <!-- Card -->
                        <div class="card">
                            <img class="card-img-top img-responsive" src="assets/images/big/4.webp" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title">Maison A plusieurs Chambre</h4>
                                <p class="card-text">Plusieurs chambres, Plusieurs douche (interne et externe) et Plusieurs toilette(interne et externe).</p>
                                <a href="commander.php" class="btn btn-primary">passer votre commande</a>
                            </div>
                        </div>
                        <!-- Card -->
                    </div>
                    <!-- column -->
                </div>
                <!-- Row -->
            </div>


            <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <h4 class="card-title">Maisons</h4>
                                        <h6 class="card-subtitle">Une seule famille par parcelle.</h6>
                                        <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                                            <ol class="carousel-indicators">
                                                <li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active"></li>
                                                <li data-target="#carouselExampleIndicators2" data-slide-to="1"></li>
                                                <li data-target="#carouselExampleIndicators2" data-slide-to="2"></li>
                                            </ol>
                                            <div class="carousel-inner" role="listbox">
                                                
                                                <div class="carousel-item active">
                                                    <img class="img-responsive" src="assets/images/big/5.webp" alt="First slide">
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="img-responsive" src="assets/images/big/2.jpg" alt="Second slide">
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="img-responsive" src="assets/images/big/1.jpeg" alt="Third slide">
                                                </div>
                                            </div>
                                            <a class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <h4 class="card-title">Maisons A Apartement</h4>
                                        <h6 class="card-subtitle">Plusieurs familles dans une meme parcelle <code>.carousel-caption</code></h6>
                                        <div id="carouselExampleIndicators3" class="carousel slide" data-ride="carousel">
                                            <ol class="carousel-indicators">
                                                <li data-target="#carouselExampleIndicators3" data-slide-to="0" class="active"></li>
                                                <li data-target="#carouselExampleIndicators3" data-slide-to="1"></li>
                                                <li data-target="#carouselExampleIndicators3" data-slide-to="2"></li>
                                            </ol>
                                            <div class="carousel-inner" role="listbox">
                                                <div class="carousel-item active">
                                                    <img class="img-responsive" src="assets/images/big/3.webp" alt="First slide">
                                                    <div class="carousel-caption d-none d-md-block">
                                                        <h3 class="text-white">First title goes here</h3>
                                                        <p>this is the subcontent you can use this</p>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="img-responsive" src="assets/images/big/4.webp" alt="Second slide">
                                                    <div class="carousel-caption d-none d-md-block">
                                                        <h3 class="text-white">Second title goes here</h3>
                                                        <p>this is the subcontent you can use this</p>
                                                    </div>
                                                </div>
                                                <div class="carousel-item">
                                                    <img class="img-responsive" src="assets/images/big/2.jpg" alt="Third slide">
                                                    <div class="carousel-caption d-none d-md-block">
                                                        <h3 class="text-white">Third title goes here</h3>
                                                        <p>this is the subcontent you can use this</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <a class="carousel-control-prev" href="#carouselExampleIndicators3" role="button" data-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                            <a class="carousel-control-next" href="#carouselExampleIndicators3" role="button" data-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End row -->
                <!-- ============================================================== -->


        </div>
        <!-- End Row -->
    </div>


    <footer class="footer">
            © 2022 Imara -- Tout_Autre
    </footer>

</div>

        <script src="assets/node_modules/jquery/jquery-3.2.1.min.js"></script>
        <!-- Bootstrap tether Core JavaScript -->
        <script src="assets/node_modules/popper/popper.min.js"></script>
        <script src="assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- slimscrollbar scrollbar JavaScript -->
        <script src="dist/js/perfect-scrollbar.jquery.min.js"></script>
        <!--Wave Effects -->
        <script src="dist/js/waves.js"></script>
        <!--Menu sidebar -->
        <script src="dist/js/sidebarmenu.js"></script>
        <!--stickey kit -->
        <script src="assets/node_modules/sticky-kit-master/dist/sticky-kit.min.js"></script>
        <script src="assets/node_modules/sparkline/jquery.sparkline.min.js"></script>
        <!--Custom JavaScript -->
        <script src="dist/js/custom.min.js"></script>
    </body>
</html>

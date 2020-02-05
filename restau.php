<?php

require 'script-formation.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bs/css/bootstrap.min.css">
    <script src="bs/js/bootstrap.min.js"></script>
    <script src="bs/js/jquery-3.4.1.js"></script>
    <link rel="stylesheet" href="bs/fonts/glyphicons-halflings-regular.eot">
    <link rel="stylesheet" href="bs/fonts/glyphicons-halflings-regular.svg">
    <link rel="stylesheet" href="bs/fonts/glyphicons-halflings-regular.ttf">
    <link rel="stylesheet" href="bs/fonts/glyphicons-halflings-regular.woff">
    <link rel="stylesheet" href="bs/fonts/glyphicons-halflings-regular.woff2">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="carou.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="animate/animate.min.css">
    <!-- Bootstrap css -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <script src="assets/js/ie-emulation-modes-warning.js"></script>

    <title>YEDIMINH-POOL</title>
</head>
<body>
   <div class="navbar-wrapper">
      <div class="fond">

        <nav class="navbar navbar-inverse navbar-fixed-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">
                <img class="navbar-brand" style="width:200px; height:80px; margin-top:-27px" src="icone/mon-lo.png" alt="">
              </a>
            </div>
            <div id="navbar" style="margin-right:15px" class="navbar-collapse navbar-right collapse text-uppercase">
              <ul class="nav navbar-nav">
                <li class="home"><a href="index.php">Accueil</a></li>
                <li class="dropdown active">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Services <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="formation.php">Natation</a></li>
                    <li><a href="hotel.php">Hotel</a></li>
                    <li class="active"><a href="restau.php">Restaurant</a></li>
                    <li><a href="spa.php">Spa</a></li>
                  </ul>
                </li>
                <!-- <li><a href="#about">Services</a></li> -->
                <li><a href="article.php">Actus-News</a></li>
                
                <li><a href="galerie.php">Galerie</a></li>
                <li><a href="reservation.php" > Reservation</a></li>
              </ul>
            </div>
          </div>
        </nav>

      </div>
    </div>
    <!-- Mon caroussel -->
    <!-- <div class="mon_carousel">
    
        <div class="fond container">

        </div>

    </div> -->

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active animated  wobble">
        <img src="images/dine.JPEG" alt="Los Angeles" style="width:100%; height:500px">
      </div>

      <div class="item animated  zoomIn">
        <img src="images/diner.JPEG" alt="Chicago" style="width:100%;height:500px">
      </div>
    
      
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

    <!-- Fin du caroussel -->

    <!-- menu -->

    <div class="about">
        <div class="container">
            <div class="row">
              <h2 class="text-justify animated  wobble " style="color: orange">Menu du Restau</h2>
              <h4>Découvrez des plats atypiques de la sous-région</h4>
              <hr>
                <div class="col-md-5 col-lg-5 col-sm-12 col-xs-12" style="margin-right: 180px" >
                    
                    <div style="background: rgb(255, 235, 235)" class="row menu">
                      <div class="col-md-4 col-lg-4">
                        <img src="restau/food1.PNG">
                      </div>
                      <div class="col-md-8 col-lg-8">
                        <h4>Salade Dundalk <span style="font-style: italic; color: red; float: right;">2500f</span> <hr></h4>
                        <p>De la laitue au soupé de fleuve</p>
                      </div>
                    </div>

                    <div style="background: rgb(255, 235, 235); margin-top: 20px" class="row menu">
                      <div class="col-md-4 col-lg-4">
                        <img width="100" height="100" src="restau/boisson3.PNG">
                      </div>
                      <div class="col-md-8 col-lg-8">
                        <h4>Vin Dundalk <span style="font-style: italic; color: red; float: right;">2500f</span> <hr></h4>
                        <p>De la laitue au soupé de fleuve</p>
                      </div>
                    </div>

                    <div style="background: rgb(255, 235, 235); margin-top: 20px; margin-bottom: 20px;" class="row menu">
                      <div class="col-md-4 col-lg-4">
                        <img width="100" height="100" src="restau/plat3.PNG">
                      </div>
                      <div class="col-md-8 col-lg-8">
                        <h4>Brioche Dundalk <span style="font-style: italic; color: red; float: right;">5000f</span> <hr></h4>
                        <p>De la laitue au soupé de fleuve</p>
                      </div>
                    </div>

                </div>
                <div class="col-md-5 col-lg-5 col-sm-12 col-xs-12">
                    <div class="row">
                    
                    <div style="background: rgb(255, 235, 235)" class="row menu">
                      <div class="col-md-4 col-lg-4">
                        <img width="100" height="100" src="restau/boissson2.PNG">
                      </div>
                      <div class="col-md-8 col-lg-8">
                        <h4>Boisson Dundalk <span style="font-style: italic; color: red; float: right;">3700f</span> <hr></h4>
                        <p>De la laitue au soupé de fleuve</p>
                      </div>
                    </div>

                    <div style="background: rgb(255, 235, 235); margin-top: 20px" class="row menu">
                      <div class="col-md-4 col-lg-4">
                        <img width="100" height="100" src="restau/plat1.PNG">
                      </div>
                      <div class="col-md-8 col-lg-8">
                        <h4>Tchep Dundalk <span style="font-style: italic; color: red; float: right;">7500f</span> <hr></h4>
                        <p>De la laitue au soupé de fleuve</p>
                      </div>
                    </div>

                    <div style="background: rgb(255, 235, 235); margin-top: 20px;" class="row menu">
                      <div class="col-md-4 col-lg-4">
                        <img width="100" height="100" src="restau/boisson1.PNG">
                      </div>
                      <div class="col-md-8 col-lg-8">
                        <h4>Boisson Dundalk <span style="font-style: italic; color: red; float: right;">5000f</span> <hr></h4>
                        <p>De la laitue au soupé de fleuve</p>
                      </div>
                    </div>
                    
                    </div>
                </div>
                
            </div>
            
        </div>
    </div>

    <!-- Fin menu -->
    <!-- mon effet parallaxe -->
    <div class="about">
        <div class="container">
            <div class="row">
              <h2 class="text-justify animated  wobble " style="color: orange">Nos Chefs</h2>
              <h4>Les meilleurs plats par les meilleurs chefs</h4>
              <hr>
              
              <div class="col-sm-4  col-xs-12">
                <div class="card text-center">
                  <div class="card-header">
                      <img class="animated 5s pulse" src="restau/chef-1.PNG" alt="">
                  </div>
                  
                </div>
              </div>  

              <div class="col-sm-4  col-xs-12">
                <div class="card text-center">
                  <div class="card-header">
                      <img class="animated 5s flash" src="restau/chef-2.PNG" alt="">
                  </div>
                  
                </div>
              </div>  

              <div class="col-sm-4  col-xs-12">
                <div class="card text-center">
                  <div class="card-header">
                      <img class="animated 5s pulse" src="restau/chef-3.PNG" alt="">
                  </div>
                  
                </div>
              </div>  
                
            </div>
            
        </div>
    </div>
    <!-- mon effet parallaxe -->
    
    <!-- Fin Contact & Newsletter -->
    <footer class="footer-section set-bg" data-setbg="">
        <div class="container">
            <div class="footer-text">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="footer-logo">
                            <div class="logo">
                                <a href="#"><img src="icone/mon-lo.png" alt=""></a>
                            </div>
                            <p>Souscrivez à notre newsLetter</p>
                            <form action="#" class="newslatter-form">
                            <div class="form-row">
                              <input style="width:150px" class="form-control col-md-5" type="text" placeholder="Enter your email...">
                                <button class="btn btn-danger " type="submit"><i class="glyphicon glyphicon-send"></i></button>
                            </div>
                                
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-3 offset-lg-1">
                        <div class="footer-widget">
                            <h4>Liens</h4>
                            <ul>
                                <li><i class="fa fa-caret-right"></i> <a href="#">Accueil</a></li>
                                <li><i class="fa fa-caret-right"></i> <a href="#">Natation</a></li>
                                <li><i class="fa fa-caret-right"></i> <a href="#">Spa</a></li>
                                <li><i class="fa fa-caret-right"></i> <a href="#">Hôtel</a></li>
                            </ul>
                            <ul>
                                <li><i class="fa fa-caret-right"></i> <a href="#">competition</a></li>
                                <li><i class="fa fa-caret-right"></i> <a href="#">Enfant</a></li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="footer-widget">
                            <h4>Réseaux sociaux</h4>
                            <ul class="social">
                                <li><i class="ti-facebook"></i> <a href="#">Facebook</a></li>
                                <li><i class="ti-instagram"></i> <a href="#">Instagram</a></li>
                                <li><i class="ti-twitter-alt"></i> <a href="#">Twitter</a></li>
                                <li><i class="ti-google"></i> <a href="#">Google+</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="footer-widget">
                            <h4>Contactez nous</h4>
                            <ul class="contact-option">
                                <li><i class="glyphicon glyphicon-map-marker"></i> Cocody Riviera 2</li>
                                <li><i class="glyphicon glyphicon-phone"></i> (+225) 44554755</li>
                                <li><i class="glyphicon glyphicon-envelope"></i> yediminh@gmail.com</li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </footer>
                      

    <!--  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
<?php

require 'script/membre.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/jquery-3.4.1.js"></script>
    <link rel="stylesheet" href="bootstrap/fonts/glyphicons-halflings-regular.eot">
    <link rel="stylesheet" href="bootstrap/fonts/glyphicons-halflings-regular.svg">
    <link rel="stylesheet" href="bootstrap/fonts/glyphicons-halflings-regular.ttf">
    <link rel="stylesheet" href="bootstrap/fonts/glyphicons-halflings-regular.woff">
    <link rel="stylesheet" href="bootstrap/fonts/glyphicons-halflings-regular.woff2">
    <link rel="stylesheet" href="css/design.css">

    <link rel="stylesheet" href="bootstrap/css/font-awesome.min.css" type="text/css">
    
    <link rel="stylesheet" href="bootstrap/css/themify-icons.css" type="text/css">

    <link rel="stylesheet" href="carou.css">
    <link rel="stylesheet" href="css/mystyle.css">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="animate/animate.min.css">
    <!-- Bootstrap css -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <script src="assets/js/ie-emulation-modes-warning.js"></script>

    <title>YEDIMINH-POOL</title>
</head>
<body>
   <div id="monMenu" class="navbar-wrapper">
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
                <img class="navbar-brand" style="width:200px; height:80px; margin-top:-27px" src="icones/mon-lo.png" alt="">
              </a>
            </div>
            <div id="navbar" style="margin-right:15px" class="navbar-collapse navbar-right collapse text-uppercase">
              <ul class="nav navbar-nav">
                <li><a href="index.php">Accueil</a></li>
                <li class="active active1 dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Services <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li class="active"><a href="natation.php">Natation</a></li>
                    <li><a href="hotel.php">Hotel</a></li>
                    <li><a href="restaurant.php">Restaurant</a></li>
                    <li><a href="spa.php">Spa</a></li>
                  </ul>
                </li>
                <!-- <li><a href="#about">Services</a></li> -->
                <li><a href="news.php">Actus-News</a></li>
                
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
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active animated  wobble">
        <img src="slide/slide3.jpg" alt="Los Angeles" style="width:100%; height:100vh">
        
            <div  class="carousel-caption">

                <div class="content-text text-center">
                
                <h1>Un Esprit Libre d'aventure.</h1>
                <h3>Venez vous évader chez nous.</h3>
                <a class="btn btn-danger btn1" href="reservation.php">Reserver</a>
                <a class="btn btn-primary btn2" href="natation.php">Formation</a>
                
              </div>
              
            </div>
        
      </div>

      <div class="item animated  zoomIn">
        <img src="slide/slide1.JPEG" alt="Chicago" style="width:100%;height:100vh">
            <div  class="carousel-caption">
              <div class="content-text text-center">
                  
                  <h1>Reposez-vous et liberez vous de tout.</h1>
                  <h3>akuna matata.</h3>
                  <a class="btn btn-danger btn1" href="hotel.php">Nos Chambres</a>
                </div>
              
              
            </div>
            
      </div>
    
      <div class="item animated  bounce">
        <img src="slide/slide2.jpg" alt="New york" style="width:100%;height:100vh">

              <div  class="carousel-caption">

                  <div class="content-text text-center">
                    
                    <h1>Sans soucis, ataraxie totale.</h1>
                    <h3>sentez vous bien dans votre peau.</h3>
                    <a class="btn btn-primary btn2" href="spa.php">Visiter le Spa</a>
                  </div>
              
            </div>
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
    
    <!-- natation -->
    <div class="whyus">
        <div class="container text-center">
          <h2>Formation </h2>
          <hr>
          <h3>Passez de zéro à Pro en moins d'un moins!</h3>
          <h3>Inscrivez vous dès maintenant</h3>
          <div class="text-center">
              <img class="animated 5s wobble" src="2020/26.JPG" width="200" height="200" alt="">
          </div>
          <hr>
        </div>
    </div>
    <!-- fin natation -->
    <!-- formation-form -->
    <div class="formation-form">
        <div class="container">
            <form action="" method="post">
                <div class="row">
                    <div class="form-group col-lg-4">
                        <label for="inputEmail4">Nom</label>
                        <input name="nom" type="text" class="form-control" id="inputEmail4" placeholder="" required="">
                    </div>
                    <div class="form-group col-lg-4">
                        <label for="inputEmail4">Prénoms</label>
                        <input name="prenom" type="text" class="form-control" id="inputEmail4" placeholder="" required="">
                    </div>
                    <div class="form-group col-lg-4">
                        <label for="inputEmail4">Adresse</label>
                        <input name="adresse" type="text" class="form-control" id="inputEmail4" placeholder="Votre domicile" required="">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-lg-4">
                        <label for="inputEmail4">Mail</label>
                        <input name="mail" type="text" class="form-control" id="inputEmail4" placeholder="" required="">
                    </div>
                    <div class="form-group col-lg-4">
                        <label for="inputEmail4">Contact</label>
                        <input name="contact" type="number" class="form-control" id="inputEmail4" placeholder="" required="">
                    </div>
                    <div class="form-group col-lg-4">
                        <label for="inputEmail4">Lieu de formation</label>
                        <select name="lieu" class="form-control">
                            <option>Yediminh</option>
                            <option>Domicile</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-lg-6">
                        <label for="inputEmail4">Début Formation</label>
                        <input name="debut" type="date" class="form-control" id="inputEmail4" placeholder="" required="">
                    </div>
                    <div class="form-group col-lg-6">
                        <label for="inputEmail4">Fin Formation</label>
                        <input name="fin" type="date" class="form-control" id="inputEmail4" placeholder="" required="">
                    </div>
                    
                </div>
                <div class="form-group ">
                    <input class="btn btn-primary btn-lg" type="submit" name="ok" id="">
                </div>
            </form>
            <?php
                if (isset($erreur)) 
                {
                    echo $erreur;
                }
            ?>
        </div>
    </div>
    <div class="separateur"></div>
    <!-- Fin form -->
    <!-- autres -->
    <div class="chambre">
    <div class="container">
      <div class="titre">
          <h2 class="">Yediminh - Natation </h2>
          <hr>
          
      </div>
      <div class="row mb_30">
          <div class="col-lg-3 col-sm-6">
              <div class="hotel_item text-center">
                  <div class="hotel_img">
                      <img class="animated infinite pulse" style="width:100%;" src="2020/12.JPG" alt="">
                      
                  </div>
                  
              </div>
          </div>
          <div class="col-lg-3 col-sm-6">
              <div class="hotel_item text-center">
                  <div class="hotel_img">
                      <img class="animated infinite pulse" style="width:100%;" src="2020/5.JPG" alt="">
                      
                  </div>
                  
              </div>
          </div>
          <div class="col-lg-3 col-sm-6">
              <div class="hotel_item text-center">
                  <div class="hotel_img">
                      <img class="animated infinite pulse" style="width:100%;" src="2020/10.JPG" alt="">
                      
                  </div>
                  
              </div>
          </div>
          <div class="col-lg-3 col-sm-6">
              <div class="hotel_item text-center">
                  <div class="hotel_img">
                      <img class="animated infinite pulse" style="width:100%;" src="2020/11.JPG" alt="">
                      
                  </div>
                  
              </div>
          </div>
      </div>
      <div class="row mb_30">
          <div class="col-lg-3 col-sm-6">
              <div class="hotel_item text-center">
                  <div class="hotel_img">
                      <img class="animated infinite pulse" style="width:100%;" src="2020/1/1.JPG" alt="">
                      
                  </div>
                  
              </div>
          </div>
          <div class="col-lg-3 col-sm-6">
              <div class="hotel_item text-center">
                  <div class="hotel_img">
                      <img class="animated infinite pulse" style="width:100%;" src="2020/1/2.JPG" alt="">
                      
                  </div>
                  
              </div>
          </div>
          <div class="col-lg-3 col-sm-6">
              <div class="hotel_item text-center">
                  <div class="hotel_img">
                      <img class="animated infinite pulse" style="width:100%;" src="2020/1/3.JPG" alt="">
                      
                  </div>
                  
              </div>
          </div>
          <div class="col-lg-3 col-sm-6">
              <div class="hotel_item text-center">
                  <div class="hotel_img">
                      <img class="animated infinite pulse" style="width:100%;" src="2020/27.JPG" alt="">
                      
                  </div>
                  
              </div>
          </div>
      </div>
      <div class="separateur"></div>
    </div>
    
  </div>
    <!-- fin autres -->
    <!-- Footer -->

    <footer class="footer footer-inverse">
      <div class="container">
          <div class="row">
              <div class="col-lg-3">
                  <div class="footer-logo">
                      <div class="logo">
                          <a href="#"><img src="icones/mon-lo.png" alt=""></a>
                      </div>
                      <p>Souscrivez à notre newsletter pour avoir des notifications.</p>
                      <form action="#" class="newslatter-form">
                          <input class="form-control" type="text" placeholder="Enter your email...">
                          <button class="btn btn-danger" type="submit"><span style="color:#fff; " class="glyphicon glyphicon-send"></span></button>
                      </form>
                  </div>
              </div>
              <div class="col-lg-3 offset-lg-1">
                  <div class="footer-widget">
                      <h4>Nos Liens</h4>
                      <ul id="lien">
                          <li> <a href="accueil.php">Accueil</a></li>
                          <li> <a href="natation.php">Natation</a></li>
                          <li> <a href="restaurant.php">Restaurant</a></li>
                          <li> <a href="hotel.php">Hôtel</a></li>
                      </ul>
                      <ul id="lien">
                          <li> <a href="spa.php">Spa</a></li>
                          <li> <a href="news.php">Actus-News</a></li>
                          <li> <a href="galerie.php">Galerie</a></li>
                          <li> <a href="reservation.php">Reservation</a></li>
                      </ul>
                  </div>
              </div>
              <div class="col-lg-2">
                  <div class="footer-widget">
                      <h4>Réseaux sociaux</h4>
                      <ul class="social">
                          <li><i class="fa fa-facebook"></i> <a href="#">Facebook</a></li>
                          <li><i class="ti-instagram"></i> <a href="#">Instagram</a></li>
                          <li><i class="fa fa-github"></i> <a href="#">Github</a></li>
                          
                      </ul>
                  </div>
              </div>
              <div class="col-lg-3">
                  <div class="footer-widget">
                      <h4>Contactez Nous</h4>
                      <ul class="contact-option">
                          <li><i class="fa fa-map-marker"></i> Riviera 2 || Cocody - Abijan</li>
                          <li><i class="fa fa-phone"></i> (+225) 78 34 27 09</li>
                          <li><i class="fa fa-envelope"></i> info.yediminh@gmail.com</li>
                          
                      </ul>
                  </div>
              </div>
                
          </div>
      </div>
    </footer>

    <!-- fin Footer -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
<?php
session_start();
require 'includes/database.php';




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
    <!-- <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="animate/animate.min.css"> -->
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
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Services <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="natation.php">Natation</a></li>
                    <li><a href="hotel.php">Hotel</a></li>
                    <li><a href="restau.php">Restaurant</a></li>
                    <li><a href="spa.php">Spa</a></li>
                  </ul>
                </li>
                <!-- <li><a href="#about">Services</a></li> -->
                <li class="active active1"><a href="news.php">Actus-News</a></li>
                
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
    
    <!-- fin natation -->
    <!-- formation-form -->
    <div class="news">
        <div class="container">
            <div class="row mb-30">
              <?php
             require 'includes/database.php';
             $req = $bdd->query("SELECT * FROM articles order by date_time_publication desc limit 0,3");
             while ($l=$req->fetch()) 
                 {
                                                                                

              ?>
                <div class="col-lg-4 col-sm-6">
                    <div class="news_item text-center">
                        <div class="categories_post">
                            <img src="espace_membre/Tableau-Bord/miniatures/<?=$l['id']?>" alt="post">
                            <div class="categories_details">
                                <div class="categories_text">
                                    <a href="article.php?id=<?= $l['id'] ?>"><h5><?=$l['titre']?></h5></a>
                                    <div class="border_line"></div>
                                    <p><?=$l['date_time_publication']?></p>
                                </div>
                            </div>
                        </div>
                        <!-- <a href="#"><h4 class="">Petit Déjeuner 1</h4></a>
                        <h5>Yediminh<small>/Restau</small></h5> -->
                    </div>
                </div>
              <?php } ?>
                
                
            </div>
        </div>
    </div>
    <!-- Fin form -->

    <div class="article-contenu">
        <div class="container">
            <div class="row">
                <div class="row-title">
                    <h2>A la une</h2>
                </div>
                <?php
             require 'includes/database.php';
             $req = $bdd->query("SELECT * FROM articles order by date_time_publication desc limit 0,1");
             while ($l=$req->fetch()) 
                 {
                                                                                

              ?>
                <div class="col-lg-8">
                    <div class="article-contenu-image">
                        <img src="espace_membre/Tableau-Bord/miniatures/<?=$l['id']?>" alt="">
                    </div>
                    <div class="article-contenu-text">
                      <h3><?=$l['titre']?></h3>
                        <p>
                            <?=$l['contenu']?>
                        </p>
                        <p>
                            <?=$l['date_time_publication']?>
                        </p>
                    </div>
                </div>
                <?php } ?>
                <div class="col-lg-4">
                    <aside class="list-group">
                        <a class="list-group-item active" href=""> Mes articles </a>
                        <?php
                         require 'includes/database.php';
                         $req = $bdd->query("SELECT * FROM articles order by date_time_publication desc limit 0,10");
                         while ($l=$req->fetch()) 
                             {
                                                                                            

                        ?>
                        <a class="list-group-item" href="article.php?id=<?= $l['id'] ?>"> <?=$l['titre'] ?> </a>
                      <?php } ?>
                        
                    </aside>
                </div>
            </div>
        </div>
    </div>

    <!-- autres -->
    
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
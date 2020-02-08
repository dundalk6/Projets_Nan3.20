
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
                <li class="active1 active dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Services <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="natation.php">Natation</a></li>
                    <li class="active"><a href="hotel.php">Hotel</a></li>
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
    
    <!-- fin natation -->
    <!-- chambre -->
    <div class="whyus">
        <div class="container">
            <div id="sf" class="row">
              <h2  class="text-right animated  wobble ">Chambre-Suite-Familiale</h2>
              
              <hr>
              
                  
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    
                    
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                       tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                       quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                       consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                       cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                       proident, sunt in culpa qui officia deserunt mollit anim id est laborum. 
                      
                    
                    
                    
                </div>

                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12" >
                    <img style="width:455px; height:300px; border-radius:15px; box-shadow:2px 2px 8px black" src="2020/34.JPEG">
                </div>  
                
            </div>
            
        </div>
    </div>

    <div class="whyus">
        <div class="container">
            <div id="css" class="row">
              <h2 class="text-right  wobble ">Chambre-Suite-Simple</h2>
              
              <hr>
              
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12" >
                    <img style="width:455px; height:300px; border-radius:15px; box-shadow:2px 2px 8px black" src="2020/30.JPG">
                </div> 
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    
                    
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                       tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                       quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                       consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                       cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                       proident, sunt in culpa qui officia deserunt mollit anim id est laborum. 
                      
                    
                    
                    
                </div>

                 
                
            </div>
            
        </div>
    </div>
    <div class="whyus">
        <div class="container">
            <div id="cd" class="row">
              <h2 class="text-right animated  wobble ">Chambre-Double</h2>
              
              <hr>
              
                  
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    
                    
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                       tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                       quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                       consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                       cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                       proident, sunt in culpa qui officia deserunt mollit anim id est laborum. 
                      
                    
                    
                    
                </div>

                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12" >
                    <img style="width:455px; height:300px; border-radius:15px; box-shadow:2px 2px 8px black" src="2020/33.JPG">
                </div>  
                
            </div>
            
        </div>
    </div>

    <div class="whyus" style="margin-bottom:100px">
        <div class="container">
            <div id="cs" class="row">
              <h2 class="text-right  wobble ">Chambre-Simple</h2>
              
              <hr>
              
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12" >
                    <img style="width:455px; height:300px; border-radius:15px; box-shadow:2px 2px 8px black" src="2020/32.JPG">
                </div> 
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    
                    
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                       tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                       quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                       consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                       cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                       proident, sunt in culpa qui officia deserunt mollit anim id est laborum. 
                      
                    
                    
                    
                </div>

                 
                
            </div>
            
        </div>
    </div>
    <!-- Fin chambre -->
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

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
                <li class="active active1"><a href="index.php">Accueil</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Services <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="natation.php">Natation</a></li>
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
                
                <h1 class="">Un Esprit Libre d'aventure.</h1>
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
    
    <!-- Pourquoi nous -->

  <div class="whyus">
        <div class="container text-center">
          <h2>Pourquoi-Nous </h2>
          <hr>
          <h3>Parce que nous vous offrons ce qu'il y a de mieux!</h3>
          <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 text-center content-flip">
              <div class="row">
              
                <section  class="bg ">
                  <ul id="menu">
                    <li class="col-md-3 col-lg-3 " > <a href="#">Confort</a> </li>
                    <li class="col-md-3 col-lg-3 "> <a href="#">Efficacité</a> </li>
                    <li class="col-md-3 col-lg-3 "> <a href="#">Securité</a> </li>
                    <li class="col-md-3 col-lg-3 "> <a href="#">Serviable</a> </li>
                    
                    
                  </ul>
                </section>
              
              </div>
          </div>
        </div>
  </div>
  <!-- Fin pourquoi nous -->
  <!-- service -->
  <div class="service">
        <div class="container">
          <div class="container-text text-center">
            <h2>Services - Activités</h2>
            <h3>Nos services et activités!</h3>
          </div>

          <div class="row mb_30">
                    <div class="col-lg-4 col-md-6">
                        <div class="service_item">
                            <h4 class=""><img class="animated infinite pulse" src="icones/nat.png" alt=""> Natation</h4>
                            <p>Passez pro-Nageur en un rien de temps. Suivez des formations avec nos maîtres.</p>
                            <a class="btn btn-danger" href="natation.php">Voir plus</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service_item">
                            <h4 class=""><img class="animated infinite pulse" src="icones/restau.png" alt="">Restauration</h4>
                            <p>Ici, la cuisine s'orchestre par le souci de YEDIMINH d'offrir à manger, bon et juste.</p>
                            <a class="btn btn-danger" href="natation.php">Voir plus</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service_item">
                            <h4 class=""><img class="animated infinite pulse" src="icones/room.png" alt="">  Hôtel</h4>
                            <p>Offre vous des semaines de bonheur partagé dans nos chambres de qualité.</p>
                            <a class="btn btn-danger" href="natation.php">Voir plus</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service_item">
                            <h4 class=""><img class="animated infinite pulse" src="icones/spa.png" alt="">  Spa-Massage</h4>
                            <p>Laissez evader votre esprit dans notre grand bassin d'ataraxie, Massage à l'appui.</p>
                            <a class="btn btn-danger" href="spa.php">Voir plus</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service_item">
                            <h4 class=""><img class="animated infinite pulse" src="icones/trophy.png" alt="">  Compétitions</h4>
                            <p>Amusez vous à battre d'autres personnes dans des activités extras.</p>
                            <a class="btn btn-danger" href="competiton.php">Voir plus</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="service_item">
                            <h4 class=""><img class="animated infinite pulse" src="icones/kids.png" alt="">  Espace-Enfants</h4>
                            <p>Plus à vous en faire, les enfants notre priorité, crèche-cours-jeux-piscine.</p>
                            <a class="btn btn-danger" href="enfant.php">Voir plus</a>
                        </div>
                    </div>
                </div>
          
          
        </div>
  </div>

    
  <!-- fin service -->

    <!-- Chambre -->

    <div class="chambre">
    <div class="container">
      <div class="titre">
          <h2 class="">Yediminh - Hôtel </h2>
          <hr>
          <h3>Chambres & Suites </h3>
      </div>
      <div class="row mb_30">
          <div class="col-lg-3 col-sm-6">
              <div class="hotel_item text-center">
                  <div class="hotel_img">
                      <img src="2020/33.JPG" alt="">
                      
                  </div>
                  <a href="hotel.php#cd"><h4 class="">Chambre-Doubles</h4></a>
                  <h5>Yediminh<small>/Hôtel</small></h5>
              </div>
          </div>
          <div class="col-lg-3 col-sm-6">
              <div class="hotel_item text-center">
                  <div class="hotel_img">
                      <img src="2020/32.JPG" alt="">
                      
                  </div>
                  <a href="hotel.php#cs"><h4 class="">Chambre-Simple</h4></a>
                  <h5>Yediminh<small>/Hôtel</small></h5>
              </div>
          </div>
          <div class="col-lg-3 col-sm-6">
              <div class="hotel_item text-center">
                  <div class="hotel_img">
                      <img src="img/c1.JPEG" alt="">
                      
                  </div>
                  <a href="hotel.php#css"><h4 class="">Suite-Simple</h4></a>
                  <h5>Yediminh<small>/Hôtel</small></h5>
              </div>
          </div>
          <div class="col-lg-3 col-sm-6">
              <div class="hotel_item text-center">
                  <div class="hotel_img">
                      <img src="2020/34.JPEG" alt="">
                      
                  </div>
                  <a href="hotel.php#sf"><h4 class="">Suite-Familiale</h4></a>
                  <h5>Yediminh<small>/Hôtel</small></h5>
              </div>
          </div>
      </div>
      <div class="separateur"></div>
    </div>
    
  </div>

    <!-- fin chambre -->
    <!-- Restau -->

  <div class="restau">
    <div class="container">
      <div class="titre text-right">
          <h2 class="">Yediminh - Restau</h2>
          <hr>
          <h3>Quelques Plats </h3>
      </div>
      <div class="row mb_30">
          <div class="col-lg-3 col-sm-6">
              <div class="restau_item text-center">
                  <div class="restau_img">
                      <img src="2020/6.jpg" alt="">
                      
                  </div>
                  <a href="restaurant.php#pd"><h4 class="">Petit Déjeuner/</h4></a>
                  <h5>Yediminh<small>/Restau</small></h5>
              </div>
          </div>
          <div class="col-lg-3 col-sm-6">
              <div class="restau_item text-center">
                  <div class="restau_img">
                      <img src="2020/7.jpg" alt="">
                      
                  </div>
                  <a href="restaurant.php#dejeuner"><h4 class="">Déjeuner/</h4></a>
                  <h5>Yediminh<small>/Restau</small></h5>
              </div>
          </div>
          <div class="col-lg-3 col-sm-6">
              <div class="restau_item text-center">
                  <div class="restau_img">
                      <img src="2020/28.png" alt="">
                      
                  </div>
                  <a href="restaurant.php#boisson"><h4 class="">Boisson</h4></a>
                  <h5>Yediminh<small>/Restau</small></h5>
              </div>
          </div>
          <div class="col-lg-3 col-sm-6">
              <div class="restau_item text-center">
                  <div class="restau_img">
                      <img src="2020/16.jpg" alt="">
                      
                  </div>
                  <a href="restaurant.php#diner"><h4 class="">Diner</h4></a>
                  <h5>Yediminh<small>/Restau</small></h5>
              </div>
          </div>
      </div>
      <div class="separateur"></div>
    </div>
    
  </div>

    <!-- Fin restau -->

    <!-- Articles -->

    <div class="article">
      <div class="container">
        <div class="titre text-center">
          <h2 class="">Yediminh - Actus/News</h2>
          <hr>
          <h3>Articles & News Récents </h3>
          
        </div>
        <div class="row mb_30">
          <?php
             require 'includes/database.php';
             $req = $bdd->query("SELECT * FROM articles order by date_time_publication desc limit 0,3");
             while ($l=$req->fetch()) 
             {
                                                                            

          ?>
            <div class="col-lg-4 col-sm-6">
                <div class="article_item text-center">
                    <div class="article_img">
                        <img src="espace_membre/Tableau-Bord/miniatures/<?=$l['id']?>" alt="">
                        
                    </div>
                    <a href="article.php?id=<?= $l['id'] ?>"><h4 class=""><?=$l['titre']?></h4></a>
                    <h5><?=$l['date_time_publication']?></h5>
                </div>
            </div>
            <?php
          }
        ?>
            
        </div>
        
      </div>
    </div> 

    <!-- Fin Articles -->
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
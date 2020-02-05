<?php
require 'script.php';
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
                <li class="active"><a href="index.php">Accueil</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Services <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="formation.php">Natation</a></li>
                    <li><a href="hotel.php">Hotel</a></li>
                    <li><a href="restau.php">Restaurant</a></li>
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
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active animated  wobble">
        <img src="images/monfond.jpg" alt="Los Angeles" style="width:100%; height:100vh">
        
            <div  class="carousel-caption">
              <div class="content-text text-center">
                
                <h1 style="text-shadow:3px 3px black;font-size:45px; text-transform:uppercase">Un Esprit Libre d'aventure</h1>
						
              </div>
                <div class="row">

                    <form  id="reservation-form" action="" method="post">
                      <div class="col-md-3 col-xs-3">
                        <h3>
                          Reserver maintenant
                        </h3>
                      </div>
                      <div class="col-md-9 col-xs-9">
                        
                          <div class="form-row">
                              <div class="form-group col-md-3 col-xs-3">
                                  <label for="inputEmail4">Nom</label>
                                  <input name="nom" type="text" class="form-control" id="inputEmail4" placeholder="" required="">
                              </div>
                              <div class="form-group col-md-3 col-xs-3">
                                  <label for="inputPassword4">Prenom</label>
                                  <input name="prenom" type="text" class="form-control" id="inputPassword4" placeholder="" required="">
                              </div>
                              <div class="form-group col-md-3 col-xs-3">
                                  <label for="inputEmail4">Mail</label>
                                  <input name="mail" type="text" class="form-control" id="inputEmail4" placeholder="" required="">
                              </div>
                              <div class="form-group col-md-3 col-xs-3">
                                  <label for="inputPassword4">Reservation</label>
                                  <select name="fonction" class="form-control">
                                      <option>Complète</option>
                                      <option>Mini</option>
                                  </select>
                              </div>
                              
                          </div>

                          <div class="form-row">
                              <div class="form-group col-md-4 col-xs-3">
                                  <label for="inputEmail4">Début </label>
                                  <input name="debut" type="date" class="form-control" id="inputEmail4" placeholder="" required="">
                              </div>
                              <div class="form-group col-md-4 col-xs-3">
                                  <label for="inputPassword4">Fin </label>
                                  <input name="fin" type="date" class="form-control" id="inputPassword4" placeholder="" required="">
                              </div>
                              <!-- <div class="form-group col-md-3 col-xs-3">
                                  <label for="inputEmail4">Personnes</label>
                                  <select name="fonction" class="form-control">
                                      <option>1</option>
                                      <option>2</option>
                                      <option>3</option>
                                      <option>Famille</option>
                                  </select>
                              </div> -->
                              <div class="form-group col-md-4 col-xs-3">
                                  <label for="inputPassword4">Contact</label>
                                  <input name="contact" type="number" class="form-control" id="inputPassword4" placeholder="" required="">
                              </div>
                              <button class="btn btn-danger monbouton">Reserver</button>
                          </div>
                        
                      </div>
                    </form>
                  
                </div>

            </div>
        
      </div>

      <div class="item animated  zoomIn">
        <img src="images/enf.JPG" alt="Chicago" style="width:100%;height:100vh">
      </div>
    
      <div class="item animated  bounce">
        <img src="images/lux.JPG" alt="New york" style="width:100%;height:100vh">
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

    <!-- Pourquoi-nous -->

    <div class="about">
        <div class="container">
            <div class="row">
              <h2 class="text-left animated  wobble ">Pourquoi-Nous</h2>
              <h5>Parce que nous offrons le meileur!</h5>
              <hr>
                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12" >
                    
                    <div class="img-responsive text-center" >
                        <div class="image">

                        </div>
                        
                    </div>
                </div>
                <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
                    <div class="row">
                    
                    <section  class="bg ">
                        <ul id="menu">
                          <li> <a href="#">Confort</a> </li>
                          <li> <a href="#">Efficacité</a> </li>
                          <li class="highlighted"> <a href="#">Securité</a> </li>
                          <li> <a href="#">Serviable</a> </li>
                          <li> <a href="#">Confiance</a> </li>
                          
                        </ul>
                      </section>
                    
                    </div>
                </div>
                
            </div>
            
        </div>
    </div>

    <!-- Fin Pourquoi-nous -->
    <!-- mon effet parallaxe -->
    <div class="parallax" data-stellar-ratio="0.8" data-stellar-vertical-offset="0" data-background="">
      <div class="container">
        <div sty class="parallax-text text-center">
            <h2 class="title_w">Services</h2>
            <p>Une diversité de services et d'activités.</p>
        </div>
        <div class="row ">
          <div class="col-lg-4 col-md-6">
              <div class="parallax_item">
                  <h4 ><span><img class="animated infinite pulse" src="icone/mini-nat.png" alt=""> </span>Natation</h4>
                  <p>Paasez pro-Nageur en un rien de temps.</p>
                  <a href="formation.php" class="btn btn-danger">Voir plus</a>
              </div>
          </div>
          <div class="col-lg-4 col-md-6">
              <div class="parallax_item">
                  <h4 ><span><img class="animated infinite pulse" src="icone/mini-restau.png" alt=""> </span>Restauration</h4>
                  <p>Découvrez notre gastro, Régalez-vous.</p>
                  <a href="restau.php" class="btn btn-danger">Voir plus</a>
              </div>
          </div>
          <div class="col-lg-4 col-md-6">
              <div class="parallax_item">
                  <h4 ><span><img class="animated infinite pulse" src="icone/mini-spa.png" alt=""> </span></i>Spa</h4>
                  <p>Reposez vous, soyez flex avec notre spa 5*.</p>
                  <a href="spa.php" class="btn btn-danger">Voir plus</a>
              </div>
          </div>

          <div class="col-lg-4 col-md-6">
              <div class="parallax_item">
                  <h4 ><span><img class="animated infinite pulse" src="icone/room.png" alt=""> </span>Hôtel</h4>
                  <p>Un cadre de repos pour vous.</p>
                  <a href="hotel.php" class="btn btn-danger">Voir plus</a>
              </div>
          </div>
          <div class="col-lg-4 col-md-6">
              <div class="parallax_item">
                  <h4 ><span><img class="animated infinite pulse" src="icone/pool.png" alt=""> </span>Compétition de Natation</h4>
                  <p>Soyez dans le bain, soyez the best .</p>
                  <a href="#" class="btn btn-danger">Voir plus</a>
              </div>
          </div>
          <div class="col-lg-4 col-md-6">
              <div class="parallax_item">
                  <h4 ><span><img class="animated infinite pulse" src="icone/kid.png" alt=""> </span>Jeux-Enfants</h4>
                  <p>Un cadre de jeux pour enfants .</p>
                  <a href="#" class="btn btn-danger">Voir plus</a>
              </div>
          </div>
        </div>

      </div>
    </div>
    <!-- Fin effet parallaxe -->
    <!-- Our services -->

    
      

    <!-- Fin services -->
    <!-- Contact & Newsletter -->

    



      <div class="article">
        <div class="container">
          <h2 class="text-center animated 5s bounce">Actus- <span style="color: red">News</span> </h2>
          <div class="row">
            
                <?php
                       require 'espace_membre/script/config.php';
                       $req = $bdd->query("SELECT * FROM articles where confirme=1 order by date_time_publication desc limit 0,4");
                       while ($l=$req->fetch()) 
                       {
                                                                            

                ?>
            
            <div class="card col-md-3 col-lg-3 col-sm-6">
                <div class="card text-center">
                <div class="card-header ">
                    
                </div>
                <div class="card-body">
                  <h4 class="card-header"><?=$l['titre']?></h4>
                  <hr>
                  <p class="card-text text-center">
                    <img src="Dashboard/miniatures/<?=$l['id']?>.jpg" width="250" height="170">
                    
                  </p>
                  <p class="text-italic">
                    <?=$l['contenu']?>
                  </p>
                  <p class="text-center">
                    <?=$l['date_time_publication']?>
                  </p>
                  
                </div>
              </div>
            </div>
            <?php } ?>
            <!-- <div class="card col-md-3 col-xs-12 col-sm-6">
                <div class="card text-center">
                <div class="card-header ">
                    
                </div>
                <div class="card-body">
                  <h2 class="card-header">Article titre</h2>
                  <hr>
                  <p class="card-text text-center">
                    <img style="width:250px; height:170px" src="images/fd3.JPEG" alt="">
                  </p>
                  <p class="text-italic">
                    Chez nous, quoi de mieux que vous faire plaisir!
                  </p>
                  <a href="#" class="btn btn-danger">Plus d'infos</a>
                </div>
              </div>
            </div> -->

            <!-- <div class="card col-md-3 col-xs-12 col-sm-6">
                <div class="card text-center">
                <div class="card-header ">
                    
                </div>
                <div class="card-body">
                  <h2 class="card-header">Article</h2>
                  <hr>
                  <p class="card-text text-center">
                    <img style="width:250px; height:170px" src="images/art1.JPEG" alt="">
                  </p>
                  <p class="text-italic">
                    Chez nous, quoi de mieux que vous faire plaisir!
                  </p>
                  <a href="#" class="btn btn-danger">Plus d'infos</a>
                </div>
              </div>
            </div> -->

            <!-- <div class="card col-md-3 col-xs-12 col-sm-6">
                <div class="card text-center">
                <div class="card-header ">
                    
                </div>
                <div class="card-body">
                  <h2 class="card-header">Article titre</h2>
                  <hr>
                  <p class="card-text text-center">
                    <img style="width:250px; height:170px" src="images/art2.JPG" alt="">
                  </p>
                  <p class="text-italic">
                    Chez nous, quoi de mieux que vous faire plaisir!
                  </p>
                  <a href="#" class="btn btn-danger">Plus d'infos</a>
                </div>
              </div>
            </div> -->

          </div>
        </div>
      </div>
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
    
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-46156385-1', 'cssscript.com');
      ga('send', 'pageview');

    </script>

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
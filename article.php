
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
              <a class="navbar-brand" href="index.php">
                <img class="navbar-brand" style="width:200px; height:80px; margin-top:-27px" src="icone/mon-lo.png" alt="">
              </a>
            </div>
            <div id="navbar" style="margin-right:15px" class="navbar-collapse navbar-right collapse text-uppercase">
              <ul class="nav navbar-nav">
                <li class="home"><a href="index.php">Accueil</a></li>
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
                <li class="active"><a href="article.php">Actus-News</a></li>
                
                <li><a href="galerie.php">Galerie</a></li>
                <li ><a  href="reservation.php" > Reservation</a></li>
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

    <div id="myCarousel" class="mon_carou animated bounce" data-ride="carousel">
    <!-- Indicators -->
    <div style="background:linear-gradient(rgba(0,0,0,0.2),rgba(0,0,0,0.2)), url('images/art.webp') no-repeat center;
    height: 500px;
    background-size: cover;
    width: 100%;
    margin: 0;" class="fond">
    <div class="container">
      <h2 class="text-center" style="padding-top: 200px;margin: 0; font-size: 90px; color: #fff">Yediminh-Article</h2>
    </div>
      
    </div>
    </div>

    <!-- Fin du caroussel -->

    <!-- Pourquoi-nous -->

    <div class="about">
        <div class="container">
            <div class="row">
              <h2 class="text-center animated  wobble ">Actus-News</h2>
              <!-- <form action="" class="form-inline pull-xs-right">
            <input class="form-control" type="text" name="q" placeholder="votre recherche...">
            <button class="btn btn-outline-success" name="submit" type="submit">Rechercher</button>
          </form> -->
          <p class='text-muted m-b-10'>
            <?php

                if (isset($erreur)) 
                {
                    echo $erreur ;
                }

            ?>
          </p>
              <hr>
              <?php
                $bdd = NEW PDO('mysql:host=127.0.0.1;dbname=yedimin','root','');
                $liste = $bdd->query('SELECT * FROM articles ORDER BY date_time_publication desc LIMIT 0,1 ');
                    while ($l=$liste->fetch()) 
                    {

              ?>
                <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12" >
                    
                    <img src="Dashboard/miniatures/<?=$l['id'] ?>.jpg" width="700" height="400">
                    <h3><?=$l['titre'] ?></h3>
                    <p><?=$l['contenu'] ?></p>
                    <p><?=$l['date_time_publication'] ?></p>
                </div>
                <?php } ?>
                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                    <div class="row">
                    
                    <div class="list-group">
                      <a href="#"  class="list-group-item active">Autres-Articles</a>
                      
                        
                      <?php $liste = $bdd->query('SELECT * FROM articles ORDER BY date_time_publication desc LIMIT 0,10 ');
                            while ($l=$liste->fetch()) 
                            {?>
                      <a class="list-group-item" href="article.php?id=<?= $l['id'] ?>"><?= $l['titre'] ?></a>
                      <?php } ?>

            
                      </a>
                      
                    </div>
                    
                    </div>
                </div>
                
            </div>
            
        </div>
    </div>

    
    
    <!-- Fin Pourquoi-nous -->
    <!-- mon effet parallaxe -->
    
    <!-- Fin Contact & Newsletter -->
    <footer>
      <div class="news">
        <div class="container">
          <div style="margin-top:20px" class="row col-xs-12">
            <div class="card col-md-3 col-lg-3 col-xs-12 col-sm-6">
               
              <a style="border:1px solid white; width:250px;height:50px;font-size:22px; padding-top:8px;color:#fff" href="#" class="btn ">Newsletter <span class="glyphicon glyphicon-send animated infinite wobble"></span></a>
              
            </div>
            <div class="card col-md-3 col-lg-3 col-xs-12 col-sm-6">
               
              <a style="border:1px solid orange; width:250px;height:50px;font-size:22px; padding-top:8px;color:orange" href="#" class="btn ">Contact <span class="glyphicon glyphicon-phone animated infinite pulse"></span></a>
              
            </div>
            <div class="card col-md-3 col-lg-3 col-xs-12 col-sm-6">
               
              <a style="border:1px solid skyblue; width:250px;height:50px;font-size:22px; padding-top:8px;skyblue:#fff" href="#" class="btn ">Articles <span class="glyphicon glyphicon-tag animated infinite bounce"></span></a>
              
            </div>
            <div class="card col-md-3 col-xs-12 col-sm-6">
               
              <a style="border:1px solid green; width:250px;height:50px;font-size:22px; padding-top:8px;color:green" href="#" class="btn ">Localisation <span class="glyphicon glyphicon-map-marker animated infinite fadeIn"></span></a>
              
            </div>
          </div>
        </div>
        <div style="border-bottom:1px solid #777; width:100%; margin-top:20px;margin-bottom:20px; " class=" col-xs-12 text-center"></div>
        <div class="container">
          
          
          <div class="row">
            <div style="border-top = 2px solid white; margin-top:10px" class="copyright">
              <h4 >Tous droits reservés à the "Dundalk" || Jamais à Domicile, jamais à l'extérieur </h4>
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
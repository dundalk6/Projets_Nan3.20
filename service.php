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
                <li class="home"><a href="#">Accueil</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Services <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li class="active"><a href="#">Natation</a></li>
                    <li><a href="#">Hotel</a></li>
                    <li><a href="#">Restaurant</a></li>
                    <li><a href="#">Spa</a></li>
                  </ul>
                </li>
                <!-- <li><a href="#about">Services</a></li> -->
                <li><a href="#contact">Articles</a></li>
                
                <li><a href="#contact">Galerie</a></li>
                <li><a href="#" > Reservation</a></li>
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
        <img src="images/monfond.jpg" alt="Los Angeles" style="width:100%; height:500px">
      </div>

      <div class="item animated  zoomIn">
        <img src="images/enf.JPG" alt="Chicago" style="width:100%;height:500px">
      </div>
    
      <div class="item animated  bounce">
        <img src="images/lux.JPG" alt="New york" style="width:100%;height:500px">
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
              <h2 class="text-center animated  wobble ">Natation </h2>
              <hr>
                
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="row">
                    <div class="col-sm-4 col-xs-12">
                      <div class="card text-center">
                        <div class="card-header">
                            
                        </div>
                        <div class="card-body">
                          
                          <h2 class="card-title">CONFORT</h2>
                          <p class="card-text text-justify">Rien de mieux que votre confort</p>
                          
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                      <div class="card text-center">
                        <div class="card-header ">
                            <img class="animated infinite pulse" src="icone/efficace.png" alt="">
                        </div>
                        <div class="card-body">
                          <h2 class="card-title">EFFICACITE</h2>
                          <p class="card-text text-justify">En plus d'un service quasiment parfait, une touche d'efficacité y est déposée </p>
                          
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-4  col-xs-12">
                      <div class="card text-center">
                        <div class="card-header">
                            <img class="animated infinite pulse" src="icone/securite.png" alt="">
                        </div>
                        <div class="card-body">
                          <h2 class="card-title">SECURITE</h2>
                          <p class="card-text text-justify">Votre sécurité est garantie 7J/7J .</p>
                          
                        </div>
                      </div>
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
            <div class="card col-md-3 col-xs-12 col-sm-6">
               
              <a style="border:1px solid white; width:250px;height:50px;font-size:22px; padding-top:8px;color:#fff" href="#" class="btn ">Newsletter <span class="glyphicon glyphicon-send animated infinite wobble"></span></a>
              
            </div>
            <div class="card col-md-3 col-xs-12 col-sm-6">
               
              <a style="border:1px solid orange; width:250px;height:50px;font-size:22px; padding-top:8px;color:orange" href="#" class="btn ">Contact <span class="glyphicon glyphicon-phone animated infinite pulse"></span></a>
              
            </div>
            <div class="card col-md-3 col-xs-12 col-sm-6">
               
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
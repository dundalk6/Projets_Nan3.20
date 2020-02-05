<?php

include 'script-contact.php';

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
                    <li ><a href="hotel.php">Hotel</a></li>
                    <li><a href="restau.php">Restaurant</a></li>
                    <li><a href="spa.php">Spa</a></li>
                  </ul>
                </li>
                <!-- <li><a href="#about">Services</a></li> -->
                <li><a href="article.php">Actus-News</a></li>
                
                <li><a href="galerie.php">Galerie</a></li>
                <li><a  href="reservation.php" > Reservation</a></li>
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
    <div style="background:linear-gradient(rgba(0,0,0,0.2),rgba(0,0,0,0.2)), url('images/c1.JPEG') no-repeat center;
    height: 500px;
    background-size: cover;
    width: 100%;
    margin: 0;" class="fond">
    <div class="container">
      <h2 class="text-center" style="padding-top: 200px;margin: 0; font-size: 90px; color: #fff">Yediminh-Contact</h2>
    </div>
      
    </div>
    </div>

    <!-- Fin du caroussel -->

    <!-- Pourquoi-nous -->

    <div class="about">
        <div class="container">
            <div class="row">
              <h2 class="text-justify animated  wobble ">Formulaire de Contact</h2>
              
              <hr>
              
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12" >
                    <form action="" method="POST">
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label for="inputEmail4">Nom</label>
                                                        <input name="nom" type="text" class="form-control" id="inputEmail4" placeholder="" required="">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="inputPassword4">Mail</label>
                                                        <input name="mail" type="mail" class="form-control" id="inputPassword4" placeholder="" required="">
                                                    </div>
                                                </div>

                                                <div class="form-group col-md-12">
                                                    <label for="inputAddress">Message</label>
                                                    <textarea name="contenu"  class="form-control" id="inputAddress" placeholder="" required="">
                                                      
                                                    </textarea>
                                                    
                                                </div>
                                                
                                                 <div class="form-group col-xs-12 lg text-center">
                                                   <button name="ok" type="submit" class="btn btn-danger">Envoyer</button>
                                                 </div>
                                                

                                                
                                            </form>
                                            <p style="color:blue" class='text-muted m-b-10'>
                                                        <?php

                                                            if (isset($erreur)) 
                                                            {
                                                                echo $erreur ;
                                                            }

                                                        ?>
                                                        </p>
                </div>    
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    
                    
                      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3972.1015109512377!2d-3.964868185705454!3d5.401503536687289!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfc1933e05da1207%3A0xd42c95c590567a9b!2sNaN!5e0!3m2!1sfr!2sci!4v1580720881099!5m2!1sfr!2sci" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe> 
                      
                    
                    
                    
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
               
              <a style="border:1px solid orange; width:250px;height:50px;font-size:22px; padding-top:8px;color:orange" href="contact.php" class="btn ">Contact <span class="glyphicon glyphicon-phone animated infinite pulse"></span></a>
              
            </div>
            <div class="card col-md-3 col-lg-3 col-xs-12 col-sm-6">
               
              <a style="border:1px solid skyblue; width:250px;height:50px;font-size:22px; padding-top:8px;skyblue:#fff" href="article.php" class="btn ">Articles <span class="glyphicon glyphicon-tag animated infinite bounce"></span></a>
              
            </div>
            <div class="card col-md-3 col-lg-3 col-xs-12 col-sm-6">
               
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
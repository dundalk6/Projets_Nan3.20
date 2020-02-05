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
    <link rel="stylesheet" href="animate/animate.min.css">
    <!-- Bootstrap css -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <script src="assets/js/ie-emulation-modes-warning.js"></script>

    <title>YEDIMINH-POOL</title>
</head>

<style type="text/css">
.slideshow{
      margin: 0 auto;
      padding-top: 50px;
      height: 700px;
      
      box-sizing: border-box;
    }
    .content{
      margin: auto;
      width: 270px;
      perspective: 1000px;
      position: relative;
      padding-top: 80px;
    }
    .content-carousel{
      width: 100%;
      position: absolute;
      float: right;
      animation: rotar 15s infinite linear;
      transform-style: preserve-3d;
    }
    .content-carousel:hover{
      animation-play-state: paused;
      cursor: pointer;
    }
    .content-carousel figure{
      width: 100%;
      height: 200px;
      border: 1px solid #4d444d;
      overflow: hidden;
      position: absolute;
    }
    .content-carousel figure:nth-child(1){
      transform: rotateY(0deg) translateZ(300px);
    }
    .content-carousel figure:nth-child(2){
      transform: rotateY(40deg) translateZ(300px);
    }
    .content-carousel figure:nth-child(3){
      transform: rotateY(80deg) translateZ(300px);
    }
    .content-carousel figure:nth-child(4){
      transform: rotateY(120deg) translateZ(300px);
    }
    .content-carousel figure:nth-child(5){
      transform: rotateY(160deg) translateZ(300px);
    }
    .content-carousel figure:nth-child(6){
      transform: rotateY(200deg) translateZ(300px);
    }
    .content-carousel figure:nth-child(7){
      transform: rotateY(240deg) translateZ(300px);
    }
    .content-carousel figure:nth-child(8){
      transform: rotateY(280deg) translateZ(300px);
    }
    .content-carousel figure:nth-child(9){
      transform: rotateY(320deg) translateZ(300px);
    }
    .shadow{
      position: absolute;
      box-shadow: 0px 0px 20px 0px #000;
      border-radius: 2px;
      overflow: hidden;
    }
    .content-carousel img{
      image-rendering: auto;
      transition: all 300ms;
      width: 100%;
      height: 100%;
    }
    .content-carousel img:hover{
      transform: scale(1.2);
      transition: all 300ms;
    }
    @keyframes rotar{
      from{
        transform: rotateY(0deg);
      } to{
        transform: rotateY(360deg); 
      }
    }

    .mask{
        position: absolute;
        left: -15px;
        top:200px;
      /*Pour positionner l'élément ".mask" au dessous de l'article */
        background: rgba(0,0,0,0.3);
        color:white;
        text-align: center;
        width: 300px;
        height: 200px;
        /* transition sur la propriété top qui change de 200px à 0 pendant le hover  */
        transition: top 0.7s linear;
      }
      .mask a{
      text-decoration: none;
      color: white;
        font-size: 1.5em;
        font-family: fantasy,sans-serif;
        background: #000;
        padding: 5px 10px 5px 10px;
        border-radius: 5px; 
        position: absolute;
        top: 30px;
        left: 100px
          
     }
     /* changement de la position du ".mask" pendant le survol sur .view */
     .shadow:hover> .mask{
        top:0;
     }

}
</style>
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
                <li><a href="article.php">Actus-News</a></li>
                
                <li class="active"><a href="galerie.php">Galerie</a></li>
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
    <div style="background:linear-gradient(rgba(0,0,0,0.45),rgba(0,0,0,0.45)), url('images/fd01.jpg') no-repeat center;
    height: 500px;
    background-size: cover;
    width: 100%;
    margin: 0;" class="fond">
    <div class="container">
      <h2 class="text-center" style="padding-top: 200px;margin: 0; font-size: 90px; color: #fff">Yediminh-Galerie</h2>
    </div>
      
    </div>
    </div>

    <!-- Fin du caroussel -->

    <!-- Pourquoi-nous -->
      <div class='about'>
        <div class="container">
          <section class="slideshow">
    <div class="content">
      <div class="content-carousel">
        <figure class="shadow"><img style="width: 300px; height: 200px" src="images/spa.JPG">
          <div class="mask">
            
              <a  href="images/spa.JPG" > Voir plus </a>
          </div>
        </figure>
        <figure class="shadow"><img style="width: 300px; height: 200px" src="images/spa1.webp">
          <div class="mask">
            
              <a style="margin-top: 50px" href="images/spa1.webp" > Voir plus </a>
          </div>
        </figure>
        <figure class="shadow"><img style="width: 300px; height: 200px" src="images/spa2.JPG">
          <div class="mask">
            
              <a style="margin-top: 50px" href="images/spa2.JPG" > Voir plus </a>
          </div>
        </figure>
        <figure class="shadow"><img style="width: 300px; height: 200px" src="images/reserv.JPG">
          <div class="mask">
            
              <a style="margin-top: 50px" href="images/reserv.JPG" > Voir plus </a>
          </div>
        </figure>
        <figure class="shadow"><img style="width: 300px; height: 200px" src="images/room1.webp">
          <div class="mask">
            
              <a style="margin-top: 50px" href="images/room1.webp" > Voir plus </a>
          </div>
        </figure>
        <figure class="shadow"><img style="width: 300px; height: 200px" src="images/room2.webp"><div class="mask">
            
              <a style="margin-top: 50px" href="images/room2.webp" > Voir plus </a>
          </div>
        </figure>
        <figure class="shadow"><img style="width: 300px; height: 200px" src="images/kid3.webp"><div class="mask">
            
              <a style="margin-top: 50px" href="images/kid3.webp" > Voir plus </a>
          </div>
        </figure>
        <figure class="shadow"><img style="width: 300px; height: 200px" src="images/kid2.webp"><div class="mask">
            
              <a style="margin-top: 50px" href="images/kid2.webp" > Voir plus </a>
          </div>
        </figure>
        <figure class="shadow"><img style="width: 300px; height: 200px" src="images/fd01.JPG">
          <div class="mask">
            
              <a style="margin-top: 50px" class="" href="images/fd01.JPG" > Voir plus </a>
          </div>
        </figure>
      </div>
    </div>
  </section>
        </div>
  
  
      </div>
    
    <!-- Fin Pourquoi-nous -->
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
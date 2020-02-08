<?php
session_start();

require '../../includes/database.php';

    if (isset($_GET['id']) AND $_GET['id'] > 0)
 {
    $getid = intval($_GET['id']);
    $requser = $bdd->prepare('SELECT * FROM membres WHERE id = ?');
    $requser->execute(array($getid));
    $userinfo = $requser->fetch();
    if (isset($_SESSION['id']) AND $userinfo['id'] == $_SESSION['id'])
{
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Yediminh Tableau de Bord</title>
    
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="description" content="Gradient Able Bootstrap admin template made using Bootstrap 4. The starter version of Gradient Able is completely free for personal project." />
      <meta name="keywords" content="free dashboard template, free admin, free bootstrap template, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
      <meta name="author" content="codedthemes">
      
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet"> 
      <link rel="stylesheet" type="text/css" href="assets/css/bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="assets/icon/themify-icons/themify-icons.css">
	  <link rel="stylesheet" type="text/css" href="assets/icon/font-awesome/css/font-awesome.min.css">
      <link rel="stylesheet" type="text/css" href="assets/icon/icofont/css/icofont.css">
      <link rel="stylesheet" type="text/css" href="assets/css/style.css">
      <link rel="stylesheet" type="text/css" href="assets/css/jquery.mCustomScrollbar.css">
  </head>

  <body>
  <body>
	  <div class="fixed-button">
		<a href="#" target="_blank" class="btn btn-md btn-primary">
			<i class="fa fa-user" aria-hidden="true"></i> Développé par Dunalk3.20/ Mr.Code />
		</a>
	  </div>
       <!-- Chargement de la page -->
    <div class="theme-loader">
        <div class="loader-track">
            <div class="loader-bar"></div>
        </div>
    </div>
    <!-- Fin Chargement de la page -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <nav class="navbar header-navbar pcoded-header">
               <div class="navbar-wrapper">
                   <div class="navbar-logo">
                       <a class="mobile-menu" id="mobile-collapse" href="#!">
                           <i class="ti-menu"></i>
                       </a>
                       <div class="mobile-search">
                           <div class="header-search">
                               <div class="main-search morphsearch-search">
                                   <div class="input-group">
                                       <span class="input-group-addon search-close"><i class="ti-close"></i></span>
                                       <input type="text" class="form-control" placeholder="Enter Keyword">
                                       <span class="input-group-addon search-btn"><i class="ti-search"></i></span>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <a href="index.php?id=<?php echo $_SESSION['id']?>">
                           <img class="img-fluid" src="../../icones/monlogo.png" alt="Theme-Logo" width="150" />
                       </a>
                       <a class="mobile-options">
                           <i class="ti-more"></i>
                       </a>
                   </div>

                   <div class="navbar-container container-fluid">
                       <ul class="nav-left">
                           <li>
                               <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                           </li>
                           
                           <li>
                               <a href="#!" onclick="javascript:toggleFullScreen()">
                                   <i class="ti-fullscreen"></i>
                               </a>
                           </li>
                       </ul>
                       <!-- Pour mon profil -->
                       <ul class="nav-right">
                           
                           <li class="user-profile header-notification">
                               <a href="#!">
                                   <?php
                                    if (!empty($userinfo['avatar'])) {
                                    ?>
                                   <img src="../membres/avatar/<?php echo $userinfo['avatar']; ?>" class="img-radius" width="40" height="40" alt="User-Profile-Image">

                                    <?php
                                    }
                                    ?>   
                                   <span><?= $userinfo['pseudo'];?></span>
                                   <i class="ti-angle-down"></i>
                               </a>
                               <ul class="show-notification profile-notification">
                                   <?php
                                    if (isset($_SESSION['id']) AND $userinfo['id'] == $_SESSION['id'])
                                    {
                                    ?>
                                   <li>
                                       <a href="../profil?id=<?php echo $_SESSION['id']?>">
                                       
                                           <i class="ti-user"></i> Profil
                                       </a>
                                   </li>
                                   <?php
                                        }
                                        ?>
                                   <li>
                                       <?php
                                        if (isset($_SESSION['id']) AND $userinfo['id'] == $_SESSION['id'])
                                        {
                                        ?>
                                        <a href="../deconnexion.php">
                                        <i class="ti-layout-sidebar-left"></i> Se déconnecter
                                        </a>
                                        <?php
                                        }
                                        ?>  
                                   </li>
                               </ul>
                           </li>
                       </ul>
                       <!-- Fin profil -->
                   </div>
               </div>
           </nav>
           
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                        <div class="pcoded-inner-navbar main-menu">
                                    <!-- Mon Menu -->
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="active">
                                    <a href="index.php">
                                        <span class="pcoded-micon"><i class="ti-home"></i><b>T</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Tableau de Bord</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="fa fa-group"></i></span>
                                        <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Formations</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="membre.php?id=<?php echo $_SESSION['id']?>">
                                       
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Nouveau membre</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="liste-membre.php?id=<?php echo $_SESSION['id']?>">
                                       
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Liste des membres</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        
                                    </ul>
                                </li>
                            </ul>
                            

                            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.forms"></div>
                            <ul class="pcoded-item pcoded-left-item">
                                
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="fa fa-book"></i></span>
                                        <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Reservations</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="reservation.php?id=<?php echo $_SESSION['id']?>">
                                       
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Nouvelle Reservation</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="liste-reservation.php?id=<?php echo $_SESSION['id']?>">
                                       
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Liste des Reservations</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        
                                    </ul>
                                </li>

                            </ul>

                        <div class="pcoded-navigatio-lavel" data-i18n="nav.category.other"></div>
                            <ul class="pcoded-item pcoded-left-item">
                                
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="fa fa-tag"></i></span>
                                        <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Articles</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="article.php?id=<?php echo $_SESSION['id']?>">
                                       
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Nouvel Article</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="liste-article.php?id=<?php echo $_SESSION['id']?>">
                                       
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Liste des Articles</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        
                                    </ul>
                                </li>

                            </ul>

                            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.other"></div>
                            <ul class="pcoded-item pcoded-left-item">
                                
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="fa fa-map-marker"></i></span>
                                        <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Yediminh</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="../../index.php">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Aller sur Yédiminh's Pool</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        
                                    </ul>
                                </li>

                            </ul>

                        </div>

                    </nav>
<?php
 }
}
?>                                
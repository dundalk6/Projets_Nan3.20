<?php

require 'main.php';
if (isset($_SESSION['id']) AND $userinfo['id'] == $_SESSION['id'])
{
    $nbreArticle = $bdd->query("SELECT COUNT(*) as nbre FROM articles ");
    $compt=$nbreArticle->fetch();
    $domicile = $bdd->query("SELECT COUNT(lieu) as domicile FROM formation WHERE lieu='domicile'");
    $comptd = $domicile->fetch();

    $nbreMembre = $bdd->query("SELECT COUNT(*) as membre FROM formation ");
    $compt2=$nbreMembre->fetch();
    $reservMini = $bdd->query("SELECT COUNT(reservation) as mini FROM reservation WHERE reservation='mini'");
    $comptr = $reservMini->fetch();

    $nbreReserv = $bdd->query("SELECT COUNT(*) as reserv FROM reservation ");
    $compt3=$nbreReserv->fetch();
    
?>


                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">

                                    <div class="page-body">
                                      <div class="row">

                                            <!-- bloc -->
                                            <div class="col-md-6 col-lg-6 col-xl-4">
                                                <div class="card bg-c-blue order-card">
                                                    <div class="card-block">
                                                        <h6 class="m-b-20">Total Membres</h6>
                                                        <h2 class="text-right"><i class="fa fa-group f-left"></i><span><?=$compt2['membre']?></span></h2>
                                                        <p class="m-b-0">Formations à Domicile<span class="f-right"><?=$comptd['domicile']?></span></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-6 col-xl-4">
                                                <div class="card bg-c-green order-card">
                                                    <div class="card-block">
                                                        <h6 class="m-b-20">Total Reservation</h6>
                                                        <h2 class="text-right"><i class="fa fa-book f-left"></i><span><?=$compt3['reserv']?></span></h2>
                                                        <p class="m-b-0">Reservations Mini<span class="f-right"><?=$comptr['mini']?></span></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-6 col-xl-4">
                                                <div class="card bg-danger order-card">
                                                    <div class="card-block">
                                                        <h6 class="m-b-20">Total Articles</h6>
                                                        <h2 class="text-right"><i class="fa fa-tag f-left"></i><span><?=$compt['nbre']?></span></h2>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Fin bloc -->


                                            <!-- Ajout (bloc) -->
                                            <div class="col-md-12 col-lg-4">
                                                <div class="card">
                                                    <div class="card-block text-center">
                                                        <i class="fa fa-group text-c-blue d-block f-40"></i>
                                                        <h4 class="m-t-20"><span class="text-c-blue">Ajouter</span> membre</h4>
                                                        <p class="m-b-20">Cliquez pour ajouter un nouveau membre</p>
                                                        
                                                            <button onclick="window.location.href='membre.php?id=<?php echo $_SESSION['id']?>'" name="col" class="btn btn-primary btn-sm btn-round">Ajouter</button>
                                                        
                                                        
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-lg-4">
                                                <div class="card">
                                                    <div class="card-block text-center">
                                                        <i class="fa fa-book text-c-green d-block f-40"></i>
                                                        <h4 class="m-t-20"><span class="text-c-green">Faire</span> une Reservation</h4>
                                                        <p class="m-b-20">Cliquez pour faire une nouvelle Reservation</p>
                                                        <button onclick="window.location.href='reservation.php?id=<?php echo $_SESSION['id']?>'" class="btn btn-success btn-sm btn-round">Ajouter</button>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="col-md-6 col-lg-4">
                                                <div class="card">
                                                    <div class="card-block text-center">
                                                        <i class="fa fa-tag text-c-pink d-block f-40"></i>
                                                        <h4 class="m-t-20"><span class="text-c-pink">Enregistrer</span> un Article</h4>
                                                        <p class="m-b-20">Cliquez pour enregistrer un nouvel Article</p>
                                                        <button onclick="window.location.href='article.php?id=<?php echo $_SESSION['id']?>'" class="btn btn-danger btn-sm btn-round">Ajouter</button>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Fin Ajout (bloc) -->

                                            <!-- Mon profil -->
                                            <div class="col-md-12">
                                                <div class="card user-card">
                                                    <div class="card-header">
                                                        <h5>Mon profil</h5>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="usre-image">
                                                            <?php
                                                                if (!empty($userinfo['avatar'])) {
                                                            ?>
                                                            <img src="../membres/avatar/<?php echo $userinfo['avatar']; ?>" class="img-radius" alt="User-Profile-Image" height="100" width="100" >
                                                            <?php
                                                            }
                                                            ?>
                                                        </div>
                                                        <h6 class="f-w-600 m-t-25 m-b-10"><?= $userinfo['pseudo'];?></h6>
                                                        <p class="text-muted">Admin || <?= $userinfo['mail'];?></p>
                                                        <hr/>
                                                        <p class="text-muted m-t-15">Activity Level: 87%</p>
                                                        <ul class="list-unstyled activity-leval">
                                                            <li class="active"></li>
                                                            <li class="active"></li>
                                                            <li class="active"></li>
                                                            <li></li>
                                                            <li></li>
                                                        </ul>
                                                        <div class="bg-c-blue counter-block m-t-10 p-20">
                                                            <div class="row">
                                                                
                                                            </div>
                                                        </div>
                                                        <p class="m-t-15 text-muted">
                                                            <?php
                                                                if (isset($_SESSION['id']) AND $userinfo['id'] == $_SESSION['id'])
                                                                {
                                                            ?>
                                                                <a class="btn btn-success" href="../editionprofil.php">
                                                                <i class="fa fa-edit"></i> Editer mon profil
                                                                </a> || 
                                                                <a class="btn btn-danger" href="../deconnexion.php">
                                                                <i class="fa fa-close"></i> Se déconnecter
                                                                </a>
                                                            <?php
                                                            }
                                                            ?>  
                                                        </p>
                                                        <hr/>
                                                        <div class="row justify-content-center user-social-link">
                                                            <div class="col-auto"><a href="#!"><i class="fa fa-facebook text-facebook"></i></a></div>
                                                            <div class="col-auto"><a href="#!"><i class="fa fa-youtube text-youtube"></i></a></div>
                                                            <div class="col-auto"><a href="#!"><i class="fa fa-github text-github"></i></a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <!-- Fin mon profil -->

                                        </div>
                                    </div>

                                    <div id="styleSelector">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
<script type="text/javascript" src="assets/js/jquery/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="assets/js/popper.js/popper.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap/js/bootstrap.min.js"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="assets/js/jquery-slimscroll/jquery.slimscroll.js"></script>
<!-- modernizr js -->
<script type="text/javascript" src="assets/js/modernizr/modernizr.js"></script>
<!-- am chart -->
<script src="assets/pages/widget/amchart/amcharts.min.js"></script>
<script src="assets/pages/widget/amchart/serial.min.js"></script>
<!-- Chart js -->
<script type="text/javascript" src="assets/js/chart.js/Chart.js"></script>
<!-- Todo js -->
<script type="text/javascript " src="assets/pages/todo/todo.js "></script>
<!-- Custom js -->
<script type="text/javascript" src="assets/pages/dashboard/custom-dashboard.min.js"></script>
<script type="text/javascript" src="assets/js/script.js"></script>
<script type="text/javascript " src="assets/js/SmoothScroll.js"></script>
<script src="assets/js/pcoded.min.js"></script>
<script src="assets/js/vartical-demo.js"></script>
<script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
</body>

</html>
<?php
}
?>
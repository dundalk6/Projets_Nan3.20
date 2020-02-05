<?php

require 'includes/main.php';

?>
<div class="pcoded-content">
<div class="pcoded-inner-content">
<div class="main-body">
<div class="page-wrapper">
<div class="page-body">
<div class="row">

                <!-- order-card start -->
                <div class="col-md-6 col-lg-6 col-xl-4">
                    <div class="card bg-c-blue order-card">
                        <div class="card-block">
                            <h6 class="m-b-20">Total Articles</h6>
                            <h2 class="text-right"><i class="ti-shopping-cart f-left"></i><span>486</span></h2>
                            <p class="m-b-0">Articles Commentés<span class="f-right">351</span></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4">
                    <div class="card bg-c-green order-card">
                        <div class="card-block">
                            <h6 class="m-b-20">Total Membre Formation</h6>
                            <h2 class="text-right"><i class="ti-tag f-left"></i><span>1641</span></h2>
                            <p class="m-b-0">Les Membres</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4">
                    <div class="card bg-c-yellow order-card">
                        <div class="card-block">
                            <h6 class="m-b-20">Total Reservations</h6>
                            <h2 class="text-right"><i class="ti-reload f-left"></i><span>3000</span></h2>
                            <p class="m-b-0">Les Reservations</p>
                        </div>
                    </div>
                </div>
                
                <!-- order-card end -->

                <!-- statustic and process start -->
                
                <!-- statustic and process end -->
				<!-- tabs card start -->
                
                <!-- tabs card end -->
                <div class="col-md-12 col-lg-4">
                    <div class="card">
                        <div class="card-block text-center">
                            <i class="fa fa-group text-c-blue d-block f-40"></i>
                            <h4 class="m-t-20"><span class="text-c-blue">Ajouter</span> membre</h4>
                            <p class="m-b-20">Cliquez pour ajouter un nouveau membre</p>
                            
                                <button name="col" class="btn btn-primary btn-sm btn-round" onclick="window.location.href='formation.php?id=<?php echo
                                       $_SESSION['id']?>';">Ajouter</button>
                            
                            
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4">
                    <div class="card">
                        <div class="card-block text-center">
                            <i class="fa fa-edit text-c-green d-block f-40"></i>
                            <h4 class="m-t-20"><span class="text-c-green">Faire</span> une Reservation</h4>
                            <p class="m-b-20">Cliquez pour faire une nouvelle Reservation</p>
                            <button onclick="window.location.href='reservation.php?id=<?php echo
                                       $_SESSION['id']?>';" class="btn btn-success btn-sm btn-round">Ajouter</button>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 col-lg-4">
                    <div class="card">
                        <div class="card-block text-center">
                            <i class="fa fa-tag text-c-pink d-block f-40"></i>
                            <h4 class="m-t-20"><span class="text-c-pink">Enregistrer</span> un Article</h4>
                            <p class="m-b-20">Cliquez pour enregistrer un nouvel Article</p>
                            <button onclick="window.location.href='article.php?id=<?php echo
                                       $_SESSION['id']?>';" class="btn btn-danger btn-sm btn-round">Ajouter</button>
                        </div>
                    </div>
                </div>

                <!-- users visite and profile start -->
                <div class="col-md-12 col-lg-12">
                    <div class="card user-card">
                      
                        <div class="card-header">
                            <h5>Mon Profil</h5>
                        </div>
                        <div class="card-block">
                            <div class="usre-image">
                                <?php
                                    if (!empty($userinfo['avatar'])) {
                                ?>
                                <img src="../espace_membre/membres/avatar/<?php echo $userinfo['avatar']; ?>" class="img-radius" alt="User-Profile-Image" height="100" width="100" >
                                <?php
                                }
                                ?>
                                
                                
                            </div>
                            <h6 class="f-w-600 m-t-25 m-b-10"><?= $userinfo['pseudo'];?></h6>
                                    <?php
                                      if (isset($_SESSION['id']) AND $userinfo['id'] == $_SESSION['id'])
                                    {
                                    ?>
                            <p class="text-muted">Actif <?php
                                    }
                                    ?> | <?= $userinfo['mail'];?></p>
                            <hr/>
                            
                            <ul class="list-unstyled activity-leval">
                                <li class="active"></li>
                                <li class="active"></li>
                                <li class="active"></li>
                                <li></li>
                                <li></li>
                            </ul>
                            <div class="bg-c-blue counter-block m-t-10 p-20">
                                <div class="row">
                                    <div class="col-4">
                                        <i class="ti-comments"></i>
                                        <p>1256</p>
                                    </div>
                                    <div class="col-4">
                                        <i class="ti-user"></i>
                                        <p>8562</p>
                                    </div>
                                    <div class="col-4">
                                        <i class="ti-bag"></i>
                                        <p>189</p>
                                    </div>
                                </div>
                            </div>
                            
                            <p class="m-t-15 text-muted">
                                <?php
                                      if (isset($_SESSION['id']) AND $userinfo['id'] == $_SESSION['id'])
                                    {
                                    ?>
                                      <a href="../espace_membre/editionprofil.php">
                                       <i class="fa fa-edit"></i> Editer mon profil
                                      </a> || 
                                      <a href="../espace_membre/deconnexion.php">
                                       <i class="fa fa-close"></i> Se déconnecter
                                      </a>
                                    <?php
                                    }
                                    ?>  
                              
                            
                            <hr/>
                            
                        </div>
                        
                    </div>
                </div>
                
                <!-- users visite and profile end -->    





                
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
<script type="text/javascript" src="assets/js/modernizr/css-scrollbars.js"></script>

<!-- Accordion js -->
<script type="text/javascript" src="assets/pages/accordion/accordion.js"></script>
<!-- Custom js -->
<script type="text/javascript" src="assets/js/script.js"></script>
<script src="assets/js/pcoded.min.js"></script>
<script src="assets/js/vartical-demo.js"></script>
<script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
</body>
</html>


<?php
require 'includes/main.php';
require 'includes/script_compte.php';


?>

<div class="pcoded-content">
        <div class="pcoded-inner-content">
            <div class="main-body">
                <div class="page-wrapper">
                 <!-- Page-header start -->
                    <div class="page-header card">
                        <div class="card-block">
                            <h5 class="m-b-10">Nouvelle Reservation</h5>
                            <p class="text-muted m-b-10">Espace d'enregistrement de Reservation</p>
                            <ul class="breadcrumb-title b-t-default p-t-10">
                                <li class="breadcrumb-item">
                                    <a href="index.php?id=<?php echo
                                       $_SESSION['id']?>"> <i class="fa fa-home"></i> </a>
                                </li>
                                <li class="breadcrumb-item"><a href="#!">Reservations</a>
                                        </li>
                                        <li class="breadcrumb-item"><a href="#!">Nouvelle Reservation</a>
                                        </li>
                                <li class="breadcrumb-item "><button class="btn btn-success" type=" submit" onclick="window.location.href='liste_reservation.php?id=<?php echo
                                                            $_SESSION['id']?>';">Liste des Reservations</button>
                                                        </li>        
                            </ul>
                        </div>
                    </div>
                    <!-- Page-header end -->
                    
                    <!-- Page-body start -->
                    <div class="page-body">
                        <div class="row">
                            <div class="col-sm-12 col-md-12 col-lg-12">
                                <!-- Basic Form Inputs card start -->
                                <div class="card">
                                    <div class="card-header">
                                        
                                        <div class="card-block">
                                            <h4 class="sub-title">Nouvelle Reservation</h4>
                                            <form action="" method="POST">
                                                <div class="form-row">
                                                    <div class="form-group col-lg-6 col-md-6">
                                                        <label for="inputEmail4">Nom</label>
                                                        <input name="nom" type="text" class="form-control" id="inputEmail4" placeholder="" required="">
                                                    </div>
                                                    <div class="form-group col-lg-6 col-md-6">
                                                        <label for="inputPassword4">Prenom</label>
                                                        <input name="prenom" type="text" class="form-control" id="inputPassword4" placeholder="" required="">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="inputAddress">Mail</label>
                                                    <input name="mail" type="mail" class="form-control" id="inputAddress" placeholder="" required="">
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-lg-3 col-md-3">
                                                        <label for="inputAddress2">Reservation</label>
                                                        <select name="fonction" class="form-control">
                                                            <option>Complète</option>
                                                            <option>Mini</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-lg-3 col-md-3">
                                                        <label for="inputCity">Début</label>
                                                        <input name="date" type="date" class="form-control" id="inputCity" required="">
                                                    </div>
                                                    <div class="form-group col-lg-3 col-md-3">
                                                        <label for="inputCity">Fin</label>
                                                        <input name="fin" type="date" class="form-control" id="inputCity" required="">
                                                    </div>
                                                    <div class="form-group col-lg-3 col-md-3">
                                                        <label for="inputZip">Contact</label>
                                                        <input name="contact" type="text" class="form-control" id="inputZip" required="">
                                                    </div>
                                                
                                                 </div>
                                                 
                                                <button name="ok" type="submit" class="btn btn-success">Enregistrer</button>

                                                
                                            </form>
                                                        <p class='text-muted m-b-10'>
                                                        <?php

                                                            if (isset($erreur)) 
                                                            {
                                                                echo $erreur ;
                                                            }

                                                        ?>
                                                        </p>
                    </div>
                  </div>
                </div>
              </div>
</div>
<!-- Page-body end -->
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


<!-- Warning Section Ends -->
<!-- Required Jquery -->
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

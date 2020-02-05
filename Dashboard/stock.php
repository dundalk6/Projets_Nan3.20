<?php
require 'includes/main.php';

?>

<div class="pcoded-content">
        <div class="pcoded-inner-content">
            <div class="main-body">
                <div class="page-wrapper">
                 <!-- Page-header start -->
                    <div class="page-header card">
                        <div class="card-block">
                            <h5 class="m-b-10">Nouveau Stock</h5>
                            <p class="text-muted m-b-10">Espace de Stocks</p>
                            <ul class="breadcrumb-title b-t-default p-t-10">
                                <li class="breadcrumb-item">
                                    <a href="index.php?id=<?php echo
                                       $_SESSION['id']?>"> <i class="fa fa-home"></i> </a>
                                </li>
                                <li class="breadcrumb-item"><a href="#!">Stocks</a>
                                        </li>
                                        <li class="breadcrumb-item"><a href="#!">Nouveau Stock</a>
                                        </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Page-header end -->
                    
                    <!-- Page-body start -->
                    <div class="page-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- Basic Form Inputs card start -->
                                <div class="card">
                                    <div class="card-header">
                                        
                                        <div class="card-block">
                                            <h4 class="sub-title">Nouveau Stock</h4>
                                            <form action="" method="POST">
                                                <div class="form-row">
                                                    <div class="form-group col-md-4">
                                                        <label for="inputEmail4">Référence Stock </label>
                                                        <input name="ref" type="text" class="form-control" id="" placeholder="" required="">
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="inputPassword4">Session</label>
                                                        <input name="nom" type="text" class="form-control" id="inputPassword4" placeholder="" required="">
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                        <label for="inputPassword4">Date de Stockage</label>
                                                        <input name="nom" type="text" class="form-control" id="inputPassword4" placeholder="" >
                                                    </div>
                                                </div>
                                                
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label for="inputAddress2">Identifiant Permanent du Collecteur</label>
                                                        <input name="id_col" type="text" class="form-control" id="inputCity"  >
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="inputAddress2">Nom et Prénoms du Collecteur</label>
                                                        <input name="prenom" type="text" class="form-control" id="inputCity"  >
                                                    </div>
                                                    
                                                
                                                 </div>

                                                 <div class="form-row">
                                                    <div class="form-group col-md-3">
                                                        <label for="inputAddress2">Nombre de Sacs Collectés</label>
                                                        <input name="id_col" type="number" class="form-control" id="inputCity"  >
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label for="inputAddress2">Masse Totale des Sacs (Kg)</label>
                                                        <input name="prenom" type="number" class="form-control" id="inputCity"  >
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label for="inputAddress2">Prix Unitaire par (Kilogramme)</label>
                                                        <input name="prenom" type="text" class="form-control" id="inputCity"  disabled="">
                                                    </div>
                                                    <div class="form-group col-md-3">
                                                        <label for="inputAddress2">Prix Total</label>
                                                        <input name="prenom" type="text" class="form-control" id="inputCity"  disabled="">
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

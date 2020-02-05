<?php

require 'includes/main.php';


?>
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">
								<!-- Page-header start -->
                                    <div class="page-header card">
                                        <div class="card-block">
                                            <h5 class="m-b-10">Bilan</h5>
                                            <p class="text-muted m-b-10">Le bilan des activités</p>
                                            <ul class="breadcrumb-title b-t-default p-t-10">
                                                <li class="breadcrumb-item">
                                                    <a href="index.php?id=<?php echo
                                       $_SESSION['id']?>"> <i class="fa fa-home"></i> </a>
                                                </li>
                                                        <li class="breadcrumb-item"><a href="#!">Bilan</a>
                                                        </li>
                                                        <li class="breadcrumb-item"><a href="#!">Bilan des activités</a>
                                                        </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- Page-header end -->
                                    <!-- Page-body start -->
                                    <div class="page-body breadcrumb-page">
                                        <!-- Simple Breadcrumb card start -->
                                        <div class="card">
                                        <div class="card-header">
                                            <h5>Bilan des activités</h5>
                                            
                                            <div class="card-header-right">
                                                <ul class="list-unstyled card-option">
                                                  <li><i class="fa fa-chevron-left"></i></li>
                                                  <li><i class="fa fa-window-maximize full-card"></i></li>
                                                  <li><i class="fa fa-minus minimize-card"></i></li>
                                                  <li><i class="fa fa-refresh reload-card"></i></li>
                                                  <li><i class="fa fa-times close-card"></i></li>
                                                </ul>
                                            </div>

                                        </div>
                                        <div class="card-block table-border-style">
                                            <div class="table-responsive">
                                                <table class="table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>Identifiant Collecteur</th>
                                                            <th>Nom et Prénoms Collecteur</th>
                                                            <th>Date de Prèt</th>
                                                            <th>Montant Contracté</th>
                                                            <th></th>
                                                            <th>Stock Entré</th>
                                                            <th>Solde</th>
                                                            <th>Etat</th>
                                                            <th>Options</th>
                                                        </tr>
                                                    </thead>
                                                    
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">xx</th>
                                                            <td>xx</td>
                                                            <td>xx</td>
                                                            <td>xx</td>
                                                            <td>xx</td>
                                                            <td>xx</td>
                                                            <td>xx</td>
                                                            <td>xx</td>
                                                            
                                                            <td>
                                                              <button title="Modifier" class="btn btn-out-dotted btn-primary btn-square"><span class="ti-marker-alt"></span></button>
                                                              <button title="Supprimer" class="btn btn-out-dotted btn-danger btn-square"><span class="ti-trash"></span></button>
                                                            </td>

                                                        </tr>
                                                        
                                                    </tbody>
                                                    
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                  </div>
                                  
                                        <!-- Success-color Breadcrumb card end -->
                                    </div>
                                    <!-- Page-body start -->
                                </div>
                            </div>
                            <!-- Main-body start -->

                            <div id="styleSelector">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



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

<!-- Custom js -->
<script type="text/javascript" src="assets/js/script.js"></script>
<script src="assets/js/pcoded.min.js"></script>
<script src="assets/js/vartical-demo.js"></script>
<script src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>

</body>

</html>

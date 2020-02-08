<?php

require 'main.php';

require '../../includes/database.php';
$reservationParPage = 5;
$reqreservationTotal = $bdd->query("SELECT id FROM reservation");
$reservationTotal = $reqreservationTotal->rowCount();
$pageTotale =ceil($reservationTotal/$reservationParPage);
if (isset($_SESSION['id']) AND $userinfo['id'] == $_SESSION['id'])
{
    if (isset($_GET['page']) and !empty($_GET['page']) and $_GET['page']>0) 
    {
        $_GET['page'] = intval($_GET['page']);
        $pageCourante = $_GET['page'];
    }
    else
    {
        $pageCourante = 1;
    }

    $depart = ($pageCourante-1)*$reservationParPage;

?>
<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <!-- Main-body start -->
        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-header start -->
                <div class="page-header card">
                    <div class="card-block">
                        <h5 class="m-b-10">Reservations</h5>
                        <p class="text-muted m-b-10">La liste effective des reservations </p>
                        <ul class="breadcrumb-title b-t-default p-t-10">
                            <li class="breadcrumb-item">
                                <a href="index.php?id=<?php echo $_SESSION['id']?>"> <i class="fa fa-home"></i> </a>
                            </li>
                            <li class="breadcrumb-item"><a href="#!"> Reservations</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#!">Liste des Reservations</a>
                            </li>
                            <li class="breadcrumb-item "><button class="btn btn-primary" onclick="window.location.href='reservation.php?id=<?php echo $_SESSION['id']?>'" type="submit">Voulez-Vous ajouter une reservation?</button>
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
                            <h5>Liste des Reservations</h5>
                            
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
                                            
                                            <th>Nom</th>
                                            <th>Prénoms</th>
                                            <th>Civilité</th>
                                            <th>Mail</th>
                                            <th>Contact</th>
                                            <th>Nbre personne</th>
                                            <th>Type reservation</th>
                                            <th>Debut</th>
                                            <th>Fin</th>
                                            
                                            <!-- <th>Options</th> -->
                                        </tr>
                                    </thead>

                                    <?php
                                    $liste = $bdd->query('SELECT * FROM reservation ORDER BY id DESC LIMIT '.$depart.','.$reservationParPage);
                                        while ($l=$liste->fetch()) 
                                        {

                                    ?>
                                    
                                    <tbody>
                                        <tr>
                                            
                                            <td><?=$l['nom'] ?></td>
                                            <td><?=$l['prenom'] ?></td>
                                            <td><?=$l['civilite'] ?></td>
                                            <td><?=$l['mail'] ?></td>
                                            <td><?=$l['contact'] ?></td>
                                            <td><?=$l['personne'] ?></td>
                                            <td><?=$l['reservation'] ?></td>
                                            <td><?=$l['debut'] ?></td>
                                            <td><?=$l['fin'] ?></td>
                                            
                                            <!-- <td>
                                                <button title="Modifier" class="btn btn-out-dotted btn-primary btn-square"><span class="ti-marker-alt"></span></button>
                                                <button title="Supprimer" class="btn btn-out-dotted btn-danger btn-square"><span class="ti-trash"></span></button>
                                            </td> -->

                                        </tr>
                                        <?php
                                        
                                            }

                                        ?>

                                            <tfoot>

                                                <nav aria-label="...">
                                                    <ul class="pagination pagination-sm">
                                                    <?php
                                            
                                                    for ($i=1; $i<=$pageTotale ; $i++) 
                                                    { 
                                                        if ($i == $pageCourante) 
                                                        {?>

                                                    <li class="page-item active" aria-current="page">
                                                        <span class="page-link">
                                                        <?php
                                                        echo $i;
                                                        ?>
                                                        <span class="sr-only">(current)</span>
                                                        </span>
                                                    </li>
                                                    <?php
                                                    }else
                                                        {?>
                                                    <li class="page-item">
                                                        <span class="page-link">
                                                        <?php
                                                        echo '<a href="liste-reservation.php?id='.$_SESSION['id'].'&page='.$i.'">'.$i.'</a>';
                                                                }
                                                            }

                                                        ?>
                                                    </span></li>
                                                    
                                                    </ul>
                                                </nav>      
                                            </tfoot>
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
<?php
}
?>
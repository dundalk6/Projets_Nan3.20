<?php
require 'main.php';
require 'script/membre.php';

if (isset($_SESSION['id']) AND $userinfo['id'] == $_SESSION['id'])
{
?>

<div class="pcoded-content">
<div class="pcoded-inner-content">
<div class="main-body">
    <div class="page-wrapper">
        <!-- Page-header start -->
        <div class="page-header card">
            <div class="card-block">
                <h5 class="m-b-10">Nouveau membre</h5>
                <p class="text-muted m-b-10">Espace d'enregistrement de membres</p>
                <ul class="breadcrumb-title b-t-default p-t-10">
                    <li class="breadcrumb-item">
                        <a href="index.php?id=<?php echo $_SESSION['id']?>"> <i class="fa fa-home"></i> </a>
                    </li>
                    <li class="breadcrumb-item"><a href="#!">membres</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#!">Nouveau membre</a>
                            </li>
                            <li class="breadcrumb-item "><button class="btn btn-primary" onclick="window.location.href='liste-membre.php?id=<?php echo $_SESSION['id']?>'" type=" submit">Liste des membres</button>
                                            </li>
                </ul>
            </div>
        </div>
        
        <div class="page-body">
            <div class="row">
                <div class="col-sm-12">
                    
                    <div class="card">
                        <div class="card-header">
                            
                            <div class="card-block">
                                <h4 class="sub-title">Nouveau membre</h4>
                                <form action="" method="post">
                                    <div class="row">
                                        <div class="form-group col-lg-4">
                                            <label for="inputEmail4">Nom</label>
                                            <input name="nom" type="text" class="form-control" id="inputEmail4" placeholder="" required="">
                                        </div>
                                        <div class="form-group col-lg-4">
                                            <label for="inputEmail4">Prénoms</label>
                                            <input name="prenom" type="text" class="form-control" id="inputEmail4" placeholder="" required="">
                                        </div>
                                        <div class="form-group col-lg-4">
                                            <label for="inputEmail4">Adresse</label>
                                            <input name="adresse" type="text" class="form-control" id="inputEmail4" placeholder="Votre domicile" required="">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-lg-4">
                                            <label for="inputEmail4">Mail</label>
                                            <input name="mail" type="text" class="form-control" id="inputEmail4" placeholder="" required="">
                                        </div>
                                        <div class="form-group col-lg-4">
                                            <label for="inputEmail4">Contact</label>
                                            <input name="contact" type="number" class="form-control" id="inputEmail4" placeholder="" required="">
                                        </div>
                                        <div class="form-group col-lg-4">
                                            <label for="inputEmail4">Lieu de formation</label>
                                            <select name="lieu" class="form-control">
                                                <option>Yediminh</option>
                                                <option>Domicile</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-lg-6">
                                            <label for="inputEmail4">Début Formation</label>
                                            <input name="debut" type="date" class="form-control" id="inputEmail4" placeholder="" required="">
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="inputEmail4">Fin Formation</label>
                                            <input name="fin" type="date" class="form-control" id="inputEmail4" placeholder="" required="">
                                        </div>
                                        
                                    </div>
                                    <div class="form-group ">
                                        <input class="btn btn-primary" type="submit" name="ok" id="">
                                    </div>
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
        </div>    
        
    </div>

    <div id="styleSelector"></div>


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
<?php
}
?>
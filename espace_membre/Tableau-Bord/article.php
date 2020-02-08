<?php
require 'main.php';
require 'script/article.php';
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
                <h5 class="m-b-10">Nouvel Article</h5>
                <p class="text-muted m-b-10">Espace d'enregistrement d'Articles</p>
                <ul class="breadcrumb-title b-t-default p-t-10">
                    <li class="breadcrumb-item">
                        <a href="index.php?id=<?php echo $_SESSION['id']?>"> <i class="fa fa-home"></i> </a>
                    </li>
                    <li class="breadcrumb-item"><a href="#!">Articles</a>
                    </li>
                    <li class="breadcrumb-item"><a href="#!">Nouvel Article</a>
                    </li>
                    <li class="breadcrumb-item "><button class="btn btn-primary" onclick="window.location.href='liste-article.php?id=<?php echo $_SESSION['id']?>'" type=" submit">Liste des Articles</button>
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
                                <h4 class="sub-title">Nouvel Article</h4>
                                <form action="" method="post" enctype="multipart/form-data">
                                    
                                        <div class="form-group">
                                            <label for="inputEmail4">Titre</label>
                                            <input name="article_titre" <?php if ($mode_edition == 1) {   
                                        ?> value="<?= $edit_article['titre'] ?>" <?php } ?> type="text" class="form-control" id="inputEmail4" placeholder="" required="">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="inputEmail4">Description</label>
                                            <textarea name="article_contenu" type="text" class="form-control" id="inputAddress" required="">
                                                <?php if ($mode_edition == 1) {?>  
                                                <?= $edit_article['contenu']?><?php } ?>
                                            </textarea>
                                    
                                        </div>
                                    
                                        <?php if ($mode_edition == 0) {?>
                                        <div class="form-group">
                                            <label for="inputEmail4">Fichier(image)</label>
                                            <input name="miniature" type="file" class="form-control" id="inputEmail4" placeholder="" required="">
                                    
                                        </div>
                                        <?php } ?>
                                    
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
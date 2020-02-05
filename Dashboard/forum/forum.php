<meta charset="utf-8">
<?php

include 'inc/config.php';
include ('inc/functions.forum.php');

$categories = $bdd->query('SELECT * FROM f_categories ORDER BY nom');
$subcat = $bdd->prepare('SELECT * FROM f_souscategories where id_categorie =? ORDER BY nom');

 require('views/forum.view.php')  
 ?>
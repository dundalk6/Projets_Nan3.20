<!DOCTYPE html>
<html>
<head>
  <title>Forum</title>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>

  <div class="container">
      <table cellpadding="0" cellspacing="0" border="2" class="table table-striped table-bordered" id="example">
        
        <thead>
          <tr class="header">
            <th style="text-align:center;" class="main">Catégories</th>
            <th style="text-align:center;" class="sub-info">Réponses</th>
            <th style="text-align:center;" class="sub-info">Vues</th>
            <th style="text-align:center;" class="sub-info">Derniere réponse</th>
          </tr>
        </thead>
        <tbody>  
         <?php
         while ($c = $categories->fetch()) {
          
          $subcat->execute(array($c['id']));
          $souscategorie = '';
          while($sc = $subcat->fetch()){
            $souscategorie .='<a href="forum_topic.php?categorie='.$c["nom"].'&souscategorie='.$sc["nom"].'">' .$sc['nom'].'</a> | ';
          }
          $souscategorie = substr($souscategorie, 0, -3);
          
         ?>
        <tr>
          <td style="text-align:center;">
            <h4><a href="forum_topic.php?categorie=<?= $c['nom'] ?>"><?= $c['nom'] ?></a></h4>
            <p>
              <?= $souscategorie ?></
            </p>
          </td>
          <td style="text-align:center; "><?= reponse_nbr_categorie($c['id'])  ?></td>
          <td style="text-align:center; ">23.03.2018 à 10h00<br/> de Davy Aymard</td>
          <td style="text-align:center; "><?=derniere_reponse_categorie($c['id'])  ?></td>
        </tr>
        <?php } ?>
      </tbody>

      </table>
</body>
</html>

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

            while ($c = $categories->fetch()) 
            {
              
              $subcat->execute(array($c['id']));
              $souscategories='';
              while ($sc = $subcat->fetch()) 
                  {
                    $souscategories .='<a href="">' .$sc['nom'].'</a> | ';
                  }
                  $souscategories = substr($souscategories, 0,-3);
                  
         ?>
        <tr>
          <td style="text-align:center;">
            <h4><a href="#"><?=$c['nom']?></a></h4>
            <p>
              <?= $souscategories ?>
              
            </p>
          </td>
          <td style="text-align:center; ">54</td>
          <td style="text-align:center; ">12</td>
          <td style="text-align:center; ">htd</td>
        </tr>
        <?php
        }
        ?>
      </tbody>

      </table>
</body>
</html>

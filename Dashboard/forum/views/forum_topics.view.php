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
				<th style="text-align:center;" >Sujet</th>
				<th style="text-align:center;" >Auteur</th>
				<th style="text-align:center;" >Réponses</th>
				<th style="text-align:center;" >Vues</th>
				<th style="text-align:center;" >Dernieres réponses</td>
			</tr>
		</thead>
        <tbody>
		<?php while($t = $topics->fetch()) {?>
		<tr>
			<td class="main">
				<h4><a href="../forum/topic.php?titre=<?= $t['sujet'] ?>&id=<?= $t['topic_base_id'] ?>"><?= $t['sujet'] ?></a></h4>
			</td>
			<td style="text-align:center;"><?= $t['date_heure_creation']?><br/> <?= $t['pseudo']?></td>
			<td style="text-align:center;"><?= reponse_nbr_topic($t['topic_base_id'])?></td>
			<td style="text-align:center;">15/07/2018 à 19h00<br/>de Aymard</td>
			<td style="text-align:center;"><?= derniere_reponse_topic($t['topic_base_id']) ?></td>
		</tr>
		<?php } ?>
		<td style="text-align:center;"><a href="../forum/nouveau_topic.php?categorie=<?= $id_categorie?>">Créer un nouveau topic</a></td>
		</tbody>
	</table>
</div>

</body>
</html>		
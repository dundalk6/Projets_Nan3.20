<!DOCTYPE html>
<html>
<head>
	<title>Forum</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/design.css">
</head>
<body>
	<table class="forum">
		<tr class="header">
			<th class="main">Auteur</th>
			<th class="sub-info">Sujet : <?= $topic['sujet']; ?> </th>
		</tr>
		<?php if ($pageCourante == 1) {?>
		<tr>
			<td class="sub-info"><?= get_pseudo($topic['id_createur']) ?></td>
			<td class="sub-info"><?= $topic['contenu'] ?></td>
		</tr>
		<?php }?>
		<?php while ($r = $reponses->fetch()) {?>
		<tr>
			<td class="sub-info"><?= get_pseudo($r['id_posteur']) ?></td>
			<td class="sub-info"><?= $r['contenu'] ?></td>
		</tr>
		<?php 

		for($i = 1;$i<=$pagesTotales;$i++)
		{
			if ($i == $pageCourante) 
			{
				echo $i;
			}else{
				echo '<a href="topic.php?titre='.$get_titre.'&id='.$get_id.' &page='.$i.'">'.$i.'</a>';
			}
		}

		 ?>
		<?php } ?>
			<td>
				<?php if (isset($_SESSION['id'])) 
				{?>
				<form method="POST">
				<input type="text" placeholder="Votre reponse" name="topic_reponse">
							
				<br>
				<input type="submit" name="topic_reponse_submit" value="Poster ma réponse">
				</form>
				<?php } else { ?> 
				<?php if (isset($reponse_msg)) 
					{
						echo $reponse_msg;
					}
				?>
				<p>Veuillez vous connecter ou créer un compte pour poster une réponse</p>
				<?php }?>
			</td>

		
	</table>
	<br>
	

</body>
</html>		
<meta charset="utf-8">
<?php  

require 'config.php';



if (isset($_POST['article_titre'], $_POST['article_contenu'])) 
{

	$article_titre = htmlspecialchars($_POST['article_titre']);
	$article_contenu = htmlspecialchars($_POST['article_contenu']);

	 
		//var_dump($_FILES);
		//var_dump(exif_imagetype($_FILES['miniature']['tmp_name']));
			echo ini_get('upload_max_filesize');
		$ins =$bdd->prepare('INSERT INTO articles(titre, contenu, date_time_publication) VALUES (?, ?, NOW())');

		$ins->execute(array($article_titre, $article_contenu));
		$lastid = $bdd->lastInsertId();

		if(isset($_FILES['miniature']) AND !empty($_FILES['miniature']['name']))
		{ 
			if (exif_imagetype($_FILES['miniature']['tmp_name']) == 2) 
			{
				$chemin = 'miniatures/'.$lastid.'.jpg';
				move_uploaded_file($_FILES['miniature']['tmp_name'], $chemin);
			}
			else
			{
				$erreur = "Votre image doit être au format jpg";
			}

		}

		$erreur = " <div class ='bonsoir'>Votre article a bien été posté!!</div>";
	

}

?>
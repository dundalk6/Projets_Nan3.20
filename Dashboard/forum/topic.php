<meta charset="utf-8">
<?php
session_start();
include 'inc/config.php';
include 'inc/functions.forum.php';

if(isset($_GET['titre'],$_GET['id']) AND !empty($_GET['titre']) AND !empty($_GET['id']))
{
	$get_titre = htmlspecialchars($_GET['titre']);
	$get_id = htmlspecialchars($_GET['id']);

	$titre_original = $bdd->prepare('SELECT sujet FROM f_topics WHERE id = ?');
	$titre_original->execute(array($get_id));
	$titre_original = $titre_original->fetch()['sujet'];

if($get_titre ==$titre_original)
{
	$topic = $bdd->prepare('SELECT * FROM f_topics WHERE id = ?');
	$topic->execute(array($get_id));
	$topic = $topic->fetch();

		if (isset($_POST['topic_reponse_submit'],$_POST['topic_reponse'])) 
		{
			if (isset($_SESSION['id'])) 
			{
				$reponse = htmlspecialchars($_POST['topic_reponse']);
				
				if (!empty($reponse)) 
				{

					$insert_message = $bdd->prepare('INSERT INTO f_messages(id_topic,id_posteur,contenu,date_heure_post) VALUES(?,?,?,NOW())');
					$insert_message->execute(array($get_id,$_SESSION['id'],$reponse));

					$reponse_msg = "Votre reponse a bien été posté";
					//unset($reponse);
				}
				else
				{
					$reponse_msg = "Votre reponse ne peut pas etre vide!";
				}
			}
			else
			{
				$reponse_msg = "Veuillez vous connecter ou creer un compte pour poster une reponse";
			}	
		}

		if (isset($_GET['page']) AND $_GET['page'] >1) 
		{
			$reponseparpage = 6;
		}
		else
		{
			$reponseparpage = 5;
		}

		
		$reponsestotalesreq = $bdd->prepare('SELECT * FROM f_messages WHERE id_topic = ? ');
		$reponsestotalesreq->execute(array($get_id));
		$reponsestotales = $reponsestotalesreq->rowCount();
		$pagesTotales = ceil($reponsestotales/$reponseparpage);
		if (isset($_GET['page']) AND !empty($_GET['page']) AND $_GET['page'] > 0 AND $_GET['page'] <=$pagesTotales) 
		{
			$_GET['page'] = intval($_GET['page']);
			$pageCourante = $_GET['page'];
		}
		else
		{
			$pageCourante = 1;
		}
		$depart = ($pageCourante-1)*$reponseparpage;

		$reponses = $bdd->prepare('SELECT * FROM f_messages WHERE id_topic = ? LIMIT '.$depart.
			','.$reponseparpage);
		$reponses->execute(array($get_id));
}
else{
	die("Erreur : le titre ne correspond pas a l\'id");
}

	require 'views/topic.view.php';
}
else
{
	die('Erreur...');
}



?>
<?php
session_start();
include 'inc/config.php';

if (isset($_GET['categorie'])) 
{
	$get_categorie = htmlspecialchars($_GET['categorie']);
	$categorie = $bdd->prepare('SELECT * FROM f_categories WHERE id =?');
	$categorie->execute(array($get_categorie));
	$cat_exist = $categorie->rowCount();

	if ($cat_exist == 1) 
	{
		$categorie = $categorie->fetch();
		$categorie = $categorie['nom'];

		$souscategories = $bdd->prepare('SELECT * FROM f_souscategories WHERE id_categorie = ? ORDER BY nom');
		$souscategories->execute(array($get_categorie)); 


		if (isset($_SESSION['id'])) 
		{
			if (isset($_POST['tsubmit'])) 
			{
				$sujet = htmlspecialchars($_POST['tsujet']);
				$contenu = htmlspecialchars($_POST['tcontenu']);
				$souscategorie = htmlspecialchars($_POST['souscategorie']);

				$verif_sc = $bdd->prepare('SELECT id FROM f_souscategories WHERE id = ? AND id_categorie = ? ORDER BY nom');
				$verif_sc->execute(array($souscategorie,$get_categorie));
				$verif_sc = $verif_sc->rowCount();

				if($verif_sc == 1)
				{
					if (!empty($sujet) AND !empty($contenu)) 
					{
						if (strlen($sujet) <= 70) 
						{
							if (isset($_POST['tmail'])) 
							{
								$notif_mail = 1;

							}
							else
							{
								$notif_mail = 0;
							}

							$insert=$bdd->prepare("INSERT INTO f_topics(id_createur,sujet,contenu,notif_createur,date_heure_creation) VALUES(?,?,?,?,NOW())");
							$insert->execute(array($_SESSION['id'],$sujet,$contenu,$notif_mail));
							
							$last_topic = $bdd->query("SELECT id FROM f_topics ORDER BY id DESC LIMIT 0,1");
							$last_topic = $last_topic->fetch();
							$id_topic = $last_topic['id'];

							$insert = $bdd->prepare("INSERT INTO f_topicscategorie(id_topic,id_categorie,id_souscategorie) VALUES(?,?,?)");
							$insert->execute(array($id_topic, $get_categorie, $souscategorie));
							$terror = "Votre topic a bien été crée ! ";
						}
						else
						{
							$terror = "Votre sujet ne doit pas depasser les 70 caracteres!";
						}
					}
					else
					{
						$terror = "Veuillez remplir tous les champs!";
					}
				}
				else
				{
					$terror = "Sous categorie invalide";
				}	
			}
		}
		else
		{
			$terror = "Veuillez vous connecter pour poster un topic!";
		}
	}	
	else
	{
		die("Categorie invalide");
	}	
}
else
{
	die('Aucune categorie definie...');
}		

require 'views/nouveau_topic.view.php';

?>
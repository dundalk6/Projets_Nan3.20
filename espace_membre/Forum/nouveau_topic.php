<meta charset="utf-8">
<?php

include 'inc/config.php';
//include ('inc/functions.forum.php');

if (isset($_SESSION['id'])) 
{
	if (isset($_POST['tsubmit'])) 
	{
		if (isset($_POST['tsujet'], $_POST['tcontenu'])) 
		{

			$sujet = htmlspecialchars($_POST['tsujet']);
			$contenu = htmlspecialchars($_POST['tcontenu']);

			if (!empty($sujet) and !empty($contenu)) 
			{
				
				if (strlen($sujet)<= 70) 
				{
					if (isset($_POST['tmail'])) 
					{
						$notif_mail = 1;
					}
					else
					{
						$notif_mail = 0;
					}

					$ins = $bdd->prepare("INSERT INTO f_topics(sujet, contenu, notif_createur, date_heure_creation) VALUES(?,?,?,NOW())");
					$ins->execute(array($sujet,$contenu,$notif_mail));
				}
				else
				{
					$terror = "Votre sujet ne doit pas dépasser 70 caractères!";
				}

			}
			else
			{
				$terror="Veuillez remplir tous les champs s'il vous plaît!";
			}
				
			
		}
			
	}
}
else
{
	$terror="Veuillez vous connecter pour poster un topic!";
}
	

 require('views/nouveau_topic.view.php')  
 ?>
<?php
require 'config.php';

if (isset($_POST['ok'])) 
{
	$code = htmlspecialchars($_POST['code']);
	$nom = htmlspecialchars($_POST['nom']);
	$prenom = htmlspecialchars($_POST['prenom']);
	$fonction = htmlspecialchars($_POST['fonction']);
	$date = htmlspecialchars($_POST['date']);
	$adresse = htmlspecialchars($_POST['adresse']);
	$contact = htmlspecialchars($_POST['contact']);
	$section = htmlspecialchars($_POST['section']);

			
	 	$tailleref = strlen($ref);
		if ($tailleref<=20) 
		{
			

					$reqref = $bdd->prepare("SELECT * FROM reservation where id=?");
					$reqref->execute(array($code));

					$refExist = $reqref->rowCount();
					if ($refExist==0) 
					{

						

						
								$ins = $bdd->prepare("INSERT INTO reservation(nom,ref_compte,montant,solde,date_pret) VALUES(?,?,?,?,NOW())");
								$ins->execute(array($code,$nom,$prenom,$fonction,$date,$adresse,$contact,$section));
								$erreur = "Enregistrement effectué avec succès!";
						
						
						
						
						
												
					}
					else
					{
						$erreur = "Cette reférence est déjà attribuée à un collecteur !";
					}

			
		}
		else
		{
			$erreur = "Votre reférence ne doit pas dépasser 20 caractères!";
		}
	 

	
}


?>
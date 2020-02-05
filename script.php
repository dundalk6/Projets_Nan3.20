<?php
require 'config.php';

if (isset($_POST['ok'])) 
{
	$code = htmlspecialchars($_POST['nom']);
	$nom = htmlspecialchars($_POST['prenom']);
	$prenom = htmlspecialchars($_POST['mail']);
	$fonction = htmlspecialchars($_POST['fonction']);
	$date = htmlspecialchars($_POST['date']);
	$adresse = htmlspecialchars($_POST['fin']);
	$contact = htmlspecialchars($_POST['contact']);
	

	$taillepseudo = strlen($code);
	if ($taillepseudo<=20) 
	{
		

				$reqCode = $bdd->prepare("SELECT * FROM reservation where id=?");
				$reqCode->execute(array($code));

				$codeExist = $reqCode->rowCount();
				if ($codeExist==0) 
				{
					
						$reqCol = $bdd->prepare("INSERT INTO reservation(nom,prenom,mail,type,debut,fin,contact) VALUES(?,?,?,?,?,?,?)");
						$reqCol->execute(array($code,$nom,$prenom,$fonction,$date,$adresse,$contact));

						$erreur = "Enregistrement effectué avec succès! ";
					
				}
				else
				{
					$erreur = "Ce id est déjà attribué !";
				}

		
	}
	else
	{
		$erreur = "Votre nom ne doit pas dépasser 20 caractères!";
	}
}


?>
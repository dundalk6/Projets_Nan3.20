<?php
require 'config.php';

if (isset($_POST['ok'])) 
{
	
	$nom = htmlspecialchars($_POST['nom']);
	$prenom = htmlspecialchars($_POST['prenom']);
	$fonction = htmlspecialchars($_POST['type']);
	$date = htmlspecialchars($_POST['date']);
	$fin = htmlspecialchars($_POST['fin']);
	$contact = htmlspecialchars($_POST['contact']);
	$mail = htmlspecialchars($_POST['mail']);

	$taillepseudo = strlen($nom);
	if ($taillepseudo<=20) 
	{
		
						$reqCol = $bdd->prepare("INSERT INTO formation(nom,prenom,mail,type,debut,fin,contact) VALUES(?,?,?,?,?,?,?)");
						$reqCol->execute(array($nom,$prenom,$fonction,$mail,$date,$fin,$contact));

						$erreur = "Enregistrement effectué avec succès! ";
					
				

		
	}
	else
	{
		$erreur = "Votre nom ne doit pas dépasser 20 caractères!";
	}
}


?>
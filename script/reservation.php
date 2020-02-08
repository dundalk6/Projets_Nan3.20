<?php
require 'includes/database.php';

if (isset($_POST['ok'])) 
{
	
	$nom = htmlspecialchars($_POST['nom']);
	$prenom = htmlspecialchars($_POST['prenom']);
	$civilite = htmlspecialchars($_POST['civilite']);
	$mail = htmlspecialchars($_POST['mail']);
    $contact = htmlspecialchars($_POST['contact']);
    $personne = htmlspecialchars($_POST['personne']);
    $reservation = htmlspecialchars($_POST['reservation']);
    $debut = htmlspecialchars($_POST['debut']);
    $fin = htmlspecialchars($_POST['fin']);
    
    $insertMembre = $bdd->prepare('INSERT INTO reservation(nom,prenom,civilite,mail,contact,personne,reservation,debut,fin)
    VALUES(?,?,?,?,?,?,?,?,?)');
    $insertMembre->execute(array($nom, $prenom, $civilite, $mail, $contact,$personne,$reservation,$debut,$fin));

    $erreur = "Enregistrement effectué avec succès!";
	
}



?>
<?php
require 'includes/database.php';

if (isset($_POST['ok'])) 
{
	
	$nom = htmlspecialchars($_POST['nom']);
	$prenom = htmlspecialchars($_POST['prenom']);
	$adresse = htmlspecialchars($_POST['adresse']);
	$mail = htmlspecialchars($_POST['mail']);
    $contact = htmlspecialchars($_POST['contact']);
    $lieu = htmlspecialchars($_POST['lieu']);
    $debut = htmlspecialchars($_POST['debut']);
    $fin = htmlspecialchars($_POST['fin']);
    
    $insertMembre = $bdd->prepare('INSERT INTO formation(nom,prenom,adresse,mail,contact,lieu,debut,fin)
    VALUES(?,?,?,?,?,?,?,?)');
    $insertMembre->execute(array($nom, $prenom, $adresse, $mail, $contact,$lieu,$debut,$fin));

    $erreur = "Enregistrement effectué avec succès!";
	
}



?>
<?php
session_start();
require '../includes/database.php';

if (isset($_POST['ok'])) 
{
	
	$mail = htmlspecialchars($_POST['mail']);
	$mdp = sha1($_POST['mdp']);

	if (!empty($mail) and !empty($mdp)) 
	{
		$reqUser = $bdd->prepare("SELECT * FROM membres where mail=? and motdepasse=?");
		$reqUser->execute(array($mail,$mdp));

		$userExist = $reqUser->rowCount();

		if ($userExist==1) 
		{
			$userInfo = $reqUser->fetch();
			$_SESSION['id'] = $userInfo['id'];
			$_SESSION['pseudo'] = $userInfo['pseudo'];
			$_SESSION['mail'] = $userInfo['mail'];

			header("location: Tableau-Bord/index.php?id=".$_SESSION['id']);
		}
		else
		{
			$erreur = "Mauvais mail ou mot de passe!";
		}
	}
	else
	{
		$erreur = "Veuillez remplir tous les champs!";
	}
	
}


?>
<?php

$bdd = new PDO("mysql:host=127.0.0.1;dbname=yedimin;charset=utf8", "root", "");

$articles = $bdd->query('SELECT titre FROM articles ORDER BY id DESC');

if (isset($_GET['q']))
{
	if (!empty($_GET['q'])) 
	{
		$q = htmlspecialchars($_GET['q']);

		$articles = $bdd->query('SELECT titre FROM articles WHERE titre LIKE "%'.$q.'%" ORDER BY id DESC');
		if ($articles->rowCount() ==0) 
		{
			$articles = $bdd->query('SELECT titre FROM articles WHERE CONCAT(titre, contenu)  LIKE "%'.$q.'%" ORDER BY id DESC');
		}
		else
		{
			$erreur = "Cet article n'existe pas!";
		}
	}
	else
	{
		$erreur = "Veuillez remplir ce champ!";
	}
	
}

?>
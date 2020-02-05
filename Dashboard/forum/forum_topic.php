<meta charset="utf-8">
<?php
session_start();
include 'inc/config.php';
include('inc/functions.forum.php');
 
 if (isset($_GET['categorie']) AND !empty($_GET['categorie'])) 
 {
 	$get_categorie = htmlspecialchars($_GET['categorie']);
 	
 	$categories = array();
 	$req_categories = $bdd->query('SELECT * FROM f_categories');
 	while ( $c = $req_categories->fetch()) 
 	{
 		array_push($categories, array($c['id'],$c['nom']));
 	}


 	foreach ($categories as $cat) 
 	{
 		if(in_array($get_categorie, $cat))
	 	{
	 		$id_categorie = intval($cat[0]);
	 	}

 	}

 	

 	if(@$id_categorie)
 	{

	 	if (isset($_GET['souscategorie']) AND!empty($_GET['souscategorie'])) 
	 	{
	 		$get_souscategorie = htmlspecialchars($_GET['souscategorie']);
	 		
	 		$souscategories = array();
		 	$req_souscategories = $bdd->prepare('SELECT * FROM f_souscategories WHERE id_categorie = ?');
	 		$req_souscategories->execute(array($id_categorie));
		 	while ( $c = $req_souscategories->fetch()) 
		 	{
		 		array_push($souscategories, array($c['id'],$c['nom']));
		 	}


		 	foreach ($souscategories as $cat) 
		 	{
		 		if(in_array($get_souscategorie, $cat))
			 	{
			 		$id_souscategorie = intval($cat[0]);
			 	}

		 	}
	 	}

	 	$req = "SELECT *, f_topics.id topic_base_id\n"

    					. "\n"

    					. "	FROM f_topics\n"


					    . "LEFT JOIN f_topicscategorie ON f_topics.id=f_topicscategorie.id_topic\n"

					    . "LEFT JOIN f_categories ON f_topicscategorie.id_categorie=f_categories.id\n"

					    . "LEFT JOIN f_souscategories ON f_topicscategorie.id_souscategorie=f_souscategories.id\n"
					    
					    . "LEFT JOIN membres ON f_topics.id_createur=membres.id\n"

					    . "WHERE f_categories.id = ? ";
		if(@$id_souscategorie)
		{
			$req .= "AND f_souscategories.id = ? ORDER BY f_topics.id DESC";
			$exec_array = array($id_categorie,$id_souscategorie);
		}	
		else
		{
			$exec_array = array($id_categorie);
		}		    

		$topics = $bdd->prepare($req);

		$topics->execute($exec_array);
	}	
	else
	{
		die("Erreur : categorie introuvable");
	}	
 }
 else
 {
 	die("Erreur: Aucune categorie selectionnée...");
 }

 require('views/forum_topics.view.php')  
 ?>
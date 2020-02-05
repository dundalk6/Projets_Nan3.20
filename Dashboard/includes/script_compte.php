<?php
require 'config.php';

if (isset($_POST['ok'])) 
{
	$ref = htmlspecialchars($_POST['ref']);
	$id_col = htmlspecialchars($_POST['col']);
	
	$tailleref = strlen($ref);
	if ($tailleref<=4) 
	{
		

				$reqref = $bdd->prepare("SELECT * FROM compte where ref_compte=?");
				$reqref->execute(array($ref));

				$refExist = $reqref->rowCount();
				if ($refExist==0) 
				{

					$req = $bdd->prepare("SELECT * FROM compte where id_col=?");
					$req->execute(array($id_col));

					$idExist = $req->rowCount();
					if ($idExist ==0) 
					{
						$reqCol = $bdd->prepare("INSERT INTO compte(ref_compte,id_col,date_creation) VALUES(?,?,NOW())");
						$reqCol->execute(array($ref,$id_col));

						$erreur = "Enregistrement effectué avec succès! ";
					}
					else
					{
						$erreur = "Ce collecteur a déjà un compte !";
					}

											
				}
				else
				{
					$erreur = "Cette reférence est déjà attribuée à un collecteur !";
				}

		
	}
	else
	{
		$erreur = "Votre reférence ne doit pas dépasser 4 caractères!";
	}
}


?>
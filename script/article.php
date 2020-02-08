<meta charset="utf-8">
<?php  
require '../../includes/database.php';
if (isset($_SESSION['id']) AND $userinfo['id'] == $_SESSION['id'])
{
    $mode_edition = 0;

    if (isset($_GET['edit']) AND !empty($_GET['edit'])) 
    {
        $mode_edition = 1;
        $edit_id = htmlspecialchars($_GET['edit']);
        $edit_article =$bdd->prepare('SELECT * FROM articles WHERE id = ?');
        $edit_article->execute(array($edit_id));

        if($edit_article->rowCount() == 1)
        {
            $edit_article = $edit_article->fetch();
        }
        else
        {
            $erreur = "Cet article n'existe pas!";
        }
    }
    if (isset($_POST['ok'])) 
    {
        $article_titre = htmlspecialchars($_POST['article_titre']);
        $article_contenu = htmlspecialchars($_POST['article_contenu']);

        if($mode_edition == 0 )
        { 
        
            $ins =$bdd->prepare('INSERT INTO articles(titre, contenu, date_time_publication) VALUES (?, ?, NOW())');

            $ins->execute(array($article_titre, $article_contenu));
            $lastid = $bdd->lastInsertId();

            if(isset($_FILES['miniature']) AND !empty($_FILES['miniature']['name']))
            { 
                if (exif_imagetype($_FILES['miniature']['tmp_name']) == 2) 
                {
                    $chemin = 'miniatures/'.$lastid.'.jpg';
                    move_uploaded_file($_FILES['miniature']['tmp_name'], $chemin);
                }
                else
                {
                    $erreur = "Votre image doit être au format jpg";
                }
            }

                $erreur = "Votre article a bien été posté!!";
        }
        else
        {
            $update = $bdd->prepare('UPDATE articles SET titre = ?, contenu = ?, date_time_edition = NOW() WHERE id = ?');
            $update->execute(array($article_titre, $article_contenu, $edit_id));
            
            $erreur = "Votre article a bien été mis à jour!!";
        }


    }

}
?>
<?php

    if(isset($_SESSION['name']) AND isset($_SESSION['id']))
    {

        $name = $_SESSION['name'];
        $sql = "SELECT accountID, accountName, accountEmail FROM account Where accountName = ?";
        $bdd = Connexion::executerRequete($sql, array($name));
        $accinfo = $bdd->fetch();

    }

?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>RosariaMC | <?php echo $_SESSION['name'] ?></title>
    </head>
    <body>
        <div align='center'>
            <h2>Profil de <?php echo $_SESSION['name']  ?></h2>
            <?php
                if(isset($_SESSION['id']) && $accinfo['accountID'] == $_SESSION['id'])
                {?>

                    <a href="#">Editer mon profil</a><br>
                    <a href="/auth/deconnexion">se déconnecter</a>

                <?php
                }
                elseif(isset($_SESSION['id']) && $accinfo['accountID'] != $_SESSION['id'])
                {

                }
            ?>
        </div>
    </body>
</html>
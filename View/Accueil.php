<?php
session_start();

    if(isset($_SESSION['id']))
    {
        $id = $_SESSION['id'];
        $sql = "SELECT accountID, accountName, accountEmail FROM account WHERE accountID = ?";
        $bdd = Connexion::executerRequete($sql, array($id));
        $accInfo = $bdd->fetch();
    }

?>

<!DOCTYPE html>
<html>
    <head>
        <title>RosariaMC | Accueil</title>
    </head>
    <body>
        <a href="index.php?action=registeration">Enregistrez vous</a><br>
        <a href="index.php?action=connection">Connectez-vous</a>
        <?php 
            if(isset($_SESSION['id']) AND $_SESSION['id'] == $accInfo['accountID'])
            {
            ?>
                <a href="index.php?disconnection">se déconnecter</a>
            <?php
            }
        ?>
    </body>
</html>
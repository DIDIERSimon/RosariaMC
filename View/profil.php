<?php
session_start();
    if(isset($_GET['profile']) AND $_GET['profile'] > 0)
    {
        $getID = intval($_GET['profile']);
        $sql = "SELECT accountID, accountName, accountEmail FROM account WHERE accountID = ?";
        $bdd = Connexion::executerRequete($sql, array($getID));
        $accInfo = $bdd->fetch();
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rosaria |</title>
</head>
<body>
    <div align='center'>
        <h2>Profil de <?php echo $accInfo['accountName'] ?></h2>
        <?php
            if(isset($_SESSION['id']) AND $accInfo['accountID'] == $_SESSION['id'])
            {?>

                <a href="#">Editer mon profil</a><br>
                <a href="index.php?disconnection">se déconnecter</a>

            <?php
             }
        ?>
    </div>
</body>
</html>
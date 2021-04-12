
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>RosariaMC | <?php echo $infoUser['accountName'] ?></title>
    </head>
    <body>
        <div align='center'>
            <h2>Profil de <?php echo $infoUser['accountName']  ?></h2>
            <?php
                if(isset($_SESSION['name']) && $infoUser['accountName'] == $_SESSION['name'])
                {?>

                    <a href="#">Editer mon profil</a><br>
                    <a href="/auth/deconnexion">se déconnecter</a>

                <?php
                }
                elseif(isset($_SESSION['name']) && $infoUser['accountName'] != $_SESSION['name'])
                {

                }
            ?>
        </div>
    </body>
</html>
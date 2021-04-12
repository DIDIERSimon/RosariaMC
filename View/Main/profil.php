
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

                    <ul>
                        <li><h4>Date d'inscription : <?php echo $infoUser['accountCreateAt'] ?></h4></li>
                        <li><h4>Rôle : <?php echo $infoUser['RoleLibelle'] ?></h4></li>
                        <li><h4>Point(s) Boutique : <?php echo $infoUser['accountPB'] ?></h4></li>
                    </ul>
                    <br><br><br><br>
                    <a href="#">Editer mon profil</a><br>
                    <a href="/auth/deconnexion">se déconnecter</a>

                <?php
                }
                elseif(isset($_SESSION['name']) && $infoUser['accountName'] != $_SESSION['name'])
                {?> 

                    <ul>
                        <li><h4>Date d'inscription : <?php echo $infoUser['accountCreateAt'] ?></h4></li>
                        <li><h4>Role : <?php echo $infoUser['accountRole'] ?></h4></li>
                    </ul>

                <?php
                }
            ?>
        </div>
    </body>
</html>
<?php

    if(isset($_POST['connexion']))
    {
        $email = htmlspecialchars(trim($_POST['accEmail']));
        $password = htmlspecialchars(trim($_POST['accPassword']));
        $crypt = sha1($password);
        connRequest($email, $crypt);
    }

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RosariaMC | Connexion</title>
</head>
<body>
    
    <div style="position: absolute;left:45%;top:10%">
        <form method="POST">
            <input type="email" name="accEmail" placeholder="Votre adresse email" required><br>
            <input type="password" name="accPassword" placeholder="Votre mot de passe" required><br>
            <input type="submit" name="connexion">
        </form>
    </div>
    <?php
        if(isset($error)){
            echo $error;
        }
    ?>
</body>
</html>
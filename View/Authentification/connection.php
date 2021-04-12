<?php

    if(isset($_POST['connexion']))
    {
        $email = htmlspecialchars(trim($_POST['accEmail']));
        $password = htmlspecialchars(trim($_POST['accPassword']));

        if(filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            $crypt = sha1($password);
            connRequest($email, $crypt);
        }
        else
            $erreur = 'Veuillez entrer une adresse Email valide';
        
    }

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Resources/css/login.css">
    <title>RosariaMC | Connexion</title>
</head>
<body>
    <div class="login-wrapper">
        <form method="POST" class="form">
            <h2>Connexion</h2>
            <div class="input-group">
                <input type="email" name="accEmail"  >
                <label for="accEmail">Adresse Email</label>
            </div>
            <div class="input-group">
                <input type="password" name="accPassword" >
                <label for="accPassword">Mot de passe</label>
            </div>
            <input type="submit" value="Connexion" name="connexion" class="submit-btn">
            <a href="enregistrement" class="forgot-pw">Pas de compte ?</a>
            <?php
                if(isset($erreur)){
                    echo "<p style='color: red;'>".$erreur."</p>";
                }
            ?>
        </form>
    </div>
</body>
</html>
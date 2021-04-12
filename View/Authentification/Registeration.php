<?php
if(isset($_POST['submit']))
{
    $pseudo = htmlspecialchars(trim($_POST['accName']));
    $email = htmlspecialchars(trim($_POST['accEmail']));
    $password = htmlspecialchars(trim($_POST['accPassword']));
    $c_password = htmlspecialchars(trim($_POST['c_accPassword']));
    if(!empty($pseudo) && !empty($email) && !empty($password) && !empty($c_password))
    {
        if(filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            if(strlen($password) >= 6)
            {
                if($password == $c_password)
                {
                    $password = sha1($password);
                    registeringAccount($pseudo, $email, $password);
                }
                else
                    $erreur = 'Vos deux mots de passe ne sont pas identiques';
            }
            else
            $erreur = 'Votre mot de passe ne comporte pas assez de caractère.';
        }
        else
            $erreur = "Veuillez entrer une adresse mail valide !";
    }
    else
        $erreur = "Veuillez renseigner tout les champs !";
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/Resources/css/login.css">
        <title>RosariaMC | s'enregistrer</title>
    </head>

    <body>
        <div class="login-wrapper">
            <form method="POST" class="form">
                <h2>S'enregistrer</h2>
                <div class="input-group">
                    <input type="text" name="accName" >
                    <label for="accName">Pseudo In-Game</label>
                </div>
                <div class="input-group">
                    <input type="email" name="accEmail" >
                    <label for="accEmail">Adresse Email</label>
                </div>
                <div class="input-group">
                    <input type="password" name="accPassword" >
                    <label for="accPassword">Mot de passe</label>
                </div>
                <div class="input-group">
                    <input type="password" name="c_accPassword" >
                    <label for="c_accPassword">Confirmez mot de passe</label>
                </div>
                <input type="submit" value="Inscription" name="submit" class="submit-btn">
                <a href="/auth/connexion" class="forgot-pw">Déjà un compte ?</a><br><br>
                <?php
                if(isset($erreur)){
                    echo "<p style='color: red;'>".$erreur."</p>";
                }
            ?>
            </form>
        </div>
    </body>
</html>

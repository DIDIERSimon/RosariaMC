<?php
if(isset($_POST['submit']))
{
    $pseudo = htmlspecialchars(trim($_POST['accName']));
    $email = htmlspecialchars(trim($_POST['accEmail']));
    $password = htmlspecialchars(trim($_POST['accPassword']));
    $c_password = htmlspecialchars(trim($_POST['c_accPassword']));
    if(strlen($password) >= 6)
    {
        if($password == $c_password)
        {
            $password = sha1($password);
            registeringAccount($pseudo, $email, $password);
            registerSuccess();
        }
        else
            $erreur = 'Vos deux mots de passe ne sont pas identiques';
    }
    else
       $erreur = 'Votre mot de passe ne comporte pas assez de caractère.';
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>RosariaMC | s'enregistrer</title>
    </head>

    <body>
    <div style="position: absolute;left:45%;top:10%">
            <form method="POST">
                <input type="text" name="accName" placeholder="Votre Pseudo Minecraft" required><br>
                <input type="email" name="accEmail" placeholder="Votre Adresse Email" required><br>
                <input type="password" name="accPassword" placeholder="Votre mot de passe" required><br>
                <input type="password" name="c_accPassword" placeholder="Réécrivez votre mot de passe" required><br>
                <input type="submit" name="submit" value="S'enregistrer"><br>
            </form>
            <?php
            if(isset($erreur)){
                echo $erreur;
            }
            ?>
    </div>
    </body>
</html>


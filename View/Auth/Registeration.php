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
                <p>Vous devez vous être au moins connecté au serveur une  fois pour vous enregistrer</p><br><br>
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
                <a href="/auth/login" class="forgot-pw">Déjà un compte ?</a><br><br>
                <?php
                if(isset($erreur)){
                    echo "<p style='color: red;'>".$erreur."</p>";
                }
            ?>
            </form>
        </div>
    </body>
</html>

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
<!-- Created By CodingNepal -->
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>RosariaMC | Accueil</title>
    <link rel="stylesheet" href="/Resources/css/general.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  </head>
  <body>
    <input type="checkbox" id="check">
    <label for="check">
      <i class="fas fa-bars" id="btn"></i>
      <i class="fas fa-times" id="cancel"></i>
    </label>
    <div class="sidebar">
    <header>RosariaMC</header>
      <ul>
        <li><a href="index.php"><i class="fas fa-home"></i>Accueil</a></li>
        <li><a href="#"><i class="fas fa-newspaper"></i>Actualités</a></li>
        <li><a href="#"><i class="fas fa-comments"></i>Forum</a></li>
        <li><a href="#"><i class="fas fa-calendar-week"></i>Evévements</a></li>
        <li><a href="#"><i class="fas fa-shopping-bag"></i>Boutique</a></li>
        <li><a href="#"><i class="fas fa-users"></i>Equipe</a></li>
        <?php 
          if(isset($_SESSION['id']) AND $_SESSION['id'] == $accInfo['accountID']){
            ?>
            <li><a href="#"><i class="fas fa-user"></i><?php echo $_SESSION['name'] ?></a></li>
            <li><a href="index.php?disconnection"><i class="fas fa-user"></i>Déconnexion</a></li>
            <?php
          }
          else{
            ?>
            <li><a href="index.php?action=connexion"><i class="fas fa-user"></i>Connexion</a></li>
            <?php
          }
        ?>
      </ul>
    </div>
  </body>
</html>


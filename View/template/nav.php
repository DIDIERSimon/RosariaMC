<?php

    if(isset($_SESSION['id']))
    {
        $id = $_SESSION['id'];
        $sql = "SELECT a.accountID, a.accountName, a.accountEmail, a.accountRole, a.accountCreateAt, a.accountPB, r.RoleLibelle
                from account a
                join roles r
                on a.accountRole = r.RoleID
                where accountID = ?";
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
            if($accInfo['accountRole'] < 6){
              ?>
                            
                <li><a href="/profile/<?php echo $accInfo['accountName'] ?>"><i class="fas fa-user"></i><?php echo $_SESSION['name'] ?></a></li>
                <li><a href="/auth/deconnexion"><i class="fas fa-user"></i>Déconnexion</a></li>
              <?php
            }
            else{
              ?>
              <li><a href="#"><i class="fas fa-columns"></i>Panel Admin</a></li>
              <li><a href="/profile/<?php echo $accInfo['accountName'] ?>"><i class="fas fa-user"></i><?php echo $_SESSION['name'] ?></a></li>
              <li><a href="/auth/deconnexion"><i class="fas fa-user"></i>Déconnexion</a></li>
              <?php
            }
        
          }
          else{
            ?>
            <li><a href="/auth/connexion"><i class="fas fa-user"></i>Connexion</a></li>
            <?php
          }
        ?>
      </ul>
    </div>
  </body>
</html>
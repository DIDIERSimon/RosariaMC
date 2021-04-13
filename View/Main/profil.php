<?php
    $sql = 'SELECT playerUUID 
            FROM players
            where PlayerName = ?';
    $bdd = Connexion::executerRequete($sql, array($infoUser['accountName']));
    $uuid = $bdd->fetch();

    require 'View/template/nav.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Resources/css/profile.css">
    <title>RosariaMC | <?php echo $infoUser['accountName'] ?></title>
</head>
<body>
    <div class="card"></div>
    <img class="head" src="https://crafatar.com/renders/body/<?php echo $uuid['playerUUID'] ?>">
    <h1 class="name"><?php echo $infoUser['accountName'] ?></h1>
    <h2 class="inscription">Date d'inscription : <?php echo $infoUser['accountCreateAt'] ?></h2>
    <h2 class="role">Role : <?php echo $infoUser['RoleLibelle'] ?></h2>
</body>
</html>

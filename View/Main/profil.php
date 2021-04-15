<?php
    require_once 'App/Metier/Player.php';
    require_once 'App/Metier/Account.php';
    require 'View/template/nav.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Resources/css/profile.css">
    <title>RosariaMC | <?php echo $leProfil->getPlayerName(); ?></title>
</head>
<body>
    <div class="card"></div>
    <img class="head" src="https://crafatar.com/renders/body/<?php echo $leProfil->getPlayerUUID(); ?>">
    <h1 class="name"><?php echo $leProfil->getPlayerName(); ?></h1>
    <h2 class="role">Role : <?php echo $leProfil->getGrade(); ?></h2>

</body>
</html>

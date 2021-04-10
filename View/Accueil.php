<?php
    require_once 'App/Models/Players.php';
?>

<table>
    <thead>
        <th>PlayerName</th>
        <th>PlayerUUID</th>
        <th>PlayerEmail</th>
        <th>Coins</th>
        <th>Grade</th>
    </thead>
    <?php
        foreach($players as $joueur):
    ?>
    <tr>
        <td><?php echo $joueur->getPlayerName() ?></td>
        <td><?php echo $joueur->getPlayerUUID() ?></td>
        <td><?php echo $joueur->getPlayerEmail() ?></td>
        <td><?php echo $joueur->getCoins() ?></td>
        <td><?php echo $joueur->getGrade() ?></td>
    </tr>
    <?php endforeach ?>

</table>
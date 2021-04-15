<?php
    require_once 'App/Metier/Account.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Resources/css/general.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="/Resources/css/admin.css">
    <title>Admin Panel | RosariaMC</title>
</head>
<body>
    
<div class="sidebar">
    <header>Admin Panel</header>
    <ul>
        <li><a href="/admin/home"><i class="fas fa-home"></i>Dashboard</a></li>
        <li><a href="#"><i class="fas fa-users"></i></i>Utilisateurs</a></li>
        <li><a href="#"><i class="fas fa-shopping-bag"></i>Boutique</a></li>
        <li><a href="#"><i class="fas fa-comments"></i></i>Forum</a></li>
        <li><a href="/"><i class="fas fa-undo"></i>retour au site</a></li>
    </ul>
</div>

<main>
    <div class="cards">
        <div class="card-single">
            <div>
                <h2>
                <?php
                    echo $total_account['accountT']
                ?>
                </h2>
                <small>Comptes enregistrés</small>
            </div>
            <div> 
                <span class="fas fa-user"></span>
            </div>
        </div>
        <div class="card-single">
            <div>
                <h2>
                0<!--PHP a intégré à la creation des DAO-->
                </h2>
                <small>Topics enregistrés</small>
            </div>
            <div> 
                <span class="fas fas fa-comments"></span>
            </div>
        </div>
        <div class="card-single">
            <div>
                <h2>
                <?php
                    echo $total_player['tPlayer'];
                ?>
                </h2>
                <small>Joueurs enregistrés</small>
            </div>
            <div> 
                <span class="fas fa-user"></span>
            </div>
        </div>
        <div class="card-single">
            <div>
                <h2>
                0<!--PHP a intégré à la creation des DAO-->
                </h2>
                <small>commandes enregistrés</small>
            </div>
            <div> 
                <span class="fas fa-shopping-bag"></span>
            </div>
        </div>
    </div>

    <div class="last-topics">
        <table>
            <thead>
                <td>ID</td>
                <td>Catégorie</td>
                <td>Titre</td>
                <td>Auteur</td>
            </thead>
        </table>
    </div>

    <div class="last-register">
    <table>
        <caption>Liste des derniers comptes créer</caption>
        <thead>
            <td><strong>Pseudo</strong></td>
            <td><strong>Rôle</strong></td>
            <td><strong>Date de creation</strong></td>
            <td><strong>interraction</strong></td>
        </thead>
          <?php
                foreach($lesComptes as $account)
                {?>

                    <tr>
                        <td><?php echo $account->getAccountName(); ?></td>
                        <td><?php echo $account->getAccountRole(); ?></td>
                        <td><?php echo $account->getAccountCreatedAt(); ?></td>
                        <td>test</td>
                    </tr>
                
                <?php }
            ?>
        </table>
    </div>
</main>

</body>
</html>
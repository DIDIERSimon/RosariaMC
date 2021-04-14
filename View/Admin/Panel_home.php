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
                    $sql = "SELECT COUNT(accountID) as Taccount from account";
                    $bdd = Connexion::executerRequete($sql);
                    $total = $bdd->fetch();
                    echo $total['Taccount'];
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
                <?php
                    $sql2 = "SELECT COUNT(forumTopicID) as TTopic from forum";
                    $bdd2 = Connexion::executerRequete($sql2);
                    $Topics = $bdd2->fetch();
                    echo $Topics['TTopic'];
                ?>
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
                    $sql1 = "SELECT COUNT(playerUUID) as TPlayer from players";
                    $bdd1 = Connexion::executerRequete($sql1);
                    $total1 = $bdd1->fetch();
                    echo $total1['TPlayer'];
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
                <h2>0</h2>
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
            <thead>
                <td>Pseudo</td>
                <td>Rôle</td>
                <td>Date de creation</td>
                <td>interraction</td>
            </thead>
            <?php
                foreach($infoUser as $Account)
                {?>

                    <tr>
                        <td><?php echo $Account->getAccountName ?></td>
                        <td><?php echo $Account['RoleLibelle'] ?></td>
                        <td><?php echo $Account['accountCreateAt'] ?></td>
                        <td>test</td>
                    </tr>
                
                <?php }
            ?> 
        </table>
    </div>
</main>

</body>
</html>
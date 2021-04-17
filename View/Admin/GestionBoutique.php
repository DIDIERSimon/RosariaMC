<?php
    require_once 'App/Metier/ShopProduct.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Resources/css/admins.css">
    <link rel="stylesheet" href="/Resources/css/general.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <title>ShopManager | RosariaMC</title>
</head>
<body>
    <div class="sidebar">
        <header>Admin Panel</header>
        <ul>
            <li><a href="/admin/home"><i class="fas fa-home"></i>Dashboard</a></li>
            <li><a href="/admin/userManagement"><i class="fas fa-users"></i></i>Utilisateurs</a></li>
            <li><a href="/admin/shopManagement"><i class="fas fa-shopping-bag"></i>Boutique</a></li>
            <li><a href="/admin/forumManagement"><i class="fas fa-comments"></i></i>Forum</a></li>
            <li><a href="/"><i class="fas fa-undo"></i>retour au site</a></li>
        </ul>
    </div>

    <main>
        <div class="grid2">
            <table class="content-table">
                <thead>
                    <tr>
                        <td><strong>ID</strong></td>
                        <td><strong>Type</strong></td>
                        <td><strong>Nom</strong></td>
                        <td><strong>Prix</strong></td>
                    </tr>
                </thead>
                <tbody>
                <?php
                    foreach($lProduit as $produit)
                    {
                    ?>
                        <tr>
                            <td><?php echo $produit->getSPID(); ?></td>
                            <td><?php echo $produit->getSPType(); ?></td>
                            <td><?php echo $produit->getSPName(); ?></td>
                            <td><?php echo $produit->getSPPrice(); ?></td>
                        </tr>
                    <?php
                    }
                ?>
                </tbody>
            </table>
            <div>
                <div class="add">
                    <a href="/admin/shopManagement/add"><button class="btn">Ajouter un article</button></a>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
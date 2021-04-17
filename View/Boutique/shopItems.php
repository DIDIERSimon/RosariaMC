<?php   
    require_once 'App/Metier/ShopProduct.php';
    require 'View/template/nav.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Resources/css/shop.css">
    <title>RosariaMC | Boutique</title>
</head>
<body>
    <div class="main">
        <div class="shop-grid">
            <?php
            foreach($products as $produit)
            {
                ?>
                <div class="card">
                <div class="head">
                    <div class="title"><?php echo $produit->getSPName(); ?></div>
                    <img src="/Resources/img/<?php echo $produit->getSPID(); ?>">
                </div>
                <div class="choise">
                <a href="/shop/item/<?php echo $produit->getSPID(); ?>"><button>Acheter</button></a>
                </div>
            </div>
                <?php
            }
            ?>
        </div>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Resources/css/login.css">
    <title>Ajouter un item au shop</title>
</head>
<body>
    <div class="login-wrapper">
    <form method="post" class="form">
        <h2>Ajouter un produit</h2>
        <div class="input-group">
            <input type="text" name="productName" placeholder="Nom du produit">
        </div>
        <div class="input-group">
            <input type="text" name="productType" placeholder="grade/faction/hub">
        </div>
        <div class="input-group">
            <input type="number" name="productPrice" placeholder="prix"><br>
        </div>
        <input type="submit" name="addProduct" value="Ajouter le produit" class="submit-btn">
        <?php
            if(isset($erreur))
            {
                echo "<p style='color: red;'>".$erreur."</p>";
            }
        ?>
    </form>
    </div>
</body>
</html>
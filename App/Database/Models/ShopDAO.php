<?php
    require_once 'App/Database/Connexion.php';
    require_once 'App/Metier/ShopProduct.php';

class ShopDAO{

    public static function getProducts()
    {
        $sql = "SELECT ProductID, ProductType, ProductName, ProductPrice
                FROM shop_product";
        $result = Connexion::executerRequete($sql);
        $lesProduits = array();
        foreach($result as $produit)
        {
            $numero = $produit['ProductID'];
            $lesProduits[$numero] = self::createProduit($produit);
        }
        if(!empty($lesProduits))
        {
            return $lesProduits;
        }
        //Ajouter une page d'erreur spé avec un msg d'erreur

    }

    public static function getProductByID($id)
    {
        $sql = "SELECT ProductID, ProductType, ProductName, ProductPrice
                FROM shop_product
                WHERE ProductID = ?";
        $result = Connexion::executerRequete($sql, array($id));
        if($result->rowCount() == 1)
        {
            $produit = $result->fetch();
            $leProduit = self::createProduit($produit);
            return $leProduit;
        }
    }

    public static function addProduct($name, $type, $price)
    {
        $sql = "INSERT INTO shop_product (ProductName, ProductType, ProductPrice) VALUES (?, ?, ?)";
        $bdd = Connexion::executerRequete($sql, array($name, $type, $price));
    }

    private static function createProduit($pProduit)
    {
        $produit = new ShopProduct($pProduit['ProductID'], $pProduit['ProductType'], $pProduit['ProductName'], $pProduit['ProductPrice']);
        return $produit;
    }

}
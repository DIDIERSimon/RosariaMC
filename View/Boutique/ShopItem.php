<?php
    //require 'View/template/nav.php';
    require_once 'App/Metier/ShopProduct.php';

    echo $unProduit->getSPID();
    echo "<br/>";
    echo $unProduit->getSPType();
    echo "<br/>";
    echo $unProduit->getSPName();
    echo "<br/>";
    echo $unProduit->getSPPrice();
    echo "<br/>";
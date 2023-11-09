<?php
require_once "Product.php";
$product=new product("products");
$product->update(["title"=>$_POST["title"],
    "price"=>$_POST["price"],
    "inventory"=>$_POST["inventory"],
    "category"=>$_POST["category"],
    "id"=>$_POST["id"]]);
//header("Location: products-panel");
<?php
require_once "Product.php";
$product=new product("products");
$product->delete($_GET["id"]);
header("Location: products-panel");
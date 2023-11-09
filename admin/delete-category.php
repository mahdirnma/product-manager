<?php
require_once "Category.php";
$category=new category("categories");
$category->delete($_GET["id"]);
header("Location: categories-panel");
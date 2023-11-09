<?php
require_once "Category.php";
$category=new category("categories");
$title=$_POST["title"];
$category->insert(["title"=>$title]);
header("Location: categories-panel");
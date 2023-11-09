<?php
require_once "Category.php";
$category=new category("categories");
$category->update(["id"=>$_POST["id"],
    "title"=>$_POST["title"]]);
header("Location: categories-panel");
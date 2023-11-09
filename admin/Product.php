<?php
require_once "Model.php";
class product extends Model{
    public function insert($data = []){
        $this->conn->exec("INSERT INTO `products`(`title`, `price`, `inventory`, `category_id`) VALUES ('{$data["title"]}','{$data["price"]}','{$data["inventory"]}','{$data["category"]}')");
    }
    public function delete($id){
        $this->conn->exec("DELETE FROM `products` WHERE id=$id");
    }
    public function update($data = []){
        $this->conn->query("UPDATE `products` SET `title`='{$data["title"]}',`price`='{$data["price"]}',`inventory`='{$data["inventory"]}',`category_id`='{$data["category"]}' WHERE id={$data["id"]}");
    }
    public function selectSpecial(){
        return $this->conn->query("SELECT products.id,products.title,products.price,products.inventory,categories.title as category 
FROM `categories` INNER JOIN `products` ON categories.id=products.category_id");
    }
}

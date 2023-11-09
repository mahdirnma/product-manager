<?php
require_once "Model.php";
class category extends Model{
    public function insert($data = []){
        $this->conn->exec("INSERT INTO `categories`(`title`) VALUES ('{$data["title"]}')");
    }
    public function delete($id){
        $this->conn->exec("DELETE FROM `categories` WHERE id=$id");
    }
    public function update($data = []){
        $this->conn->query("UPDATE `categories` SET `title`='{$data["title"]}' WHERE id={$data["id"]}");
    }
}

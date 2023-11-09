<?php
require_once "Model.php";
class user extends Model
{
    public function insert($data = []){
        $this->conn->exec("INSERT INTO `users`(`firstName`, `lastName`, `userName`, `password`) VALUES ('{$data["fname"]}','{$data["lname"]}','{$data["username"]}','{$data["password"]}')");
    }
    public function delete($id){}
    public function update($data = []){}
}

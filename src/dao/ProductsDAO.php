<?php

require_once( __DIR__ . '/DAO.php');

class ProductsDAO extends DAO {

  public function selectAllBooks(){
    $sql = "SELECT * FROM `products` WHERE `kind` LIKE 'boek' ";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  public function selectById($id){
    $sql = "SELECT * FROM `products` WHERE `id` = :id";
    $stmt = $this->pdo->prepare($sql);
    $stmt->bindValue(':id', $id);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
  }

}

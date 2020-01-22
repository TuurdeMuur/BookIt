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

  public function insertOrder($data){
    $errors = $this->validate($data);
    if(empty($errors)){
      $sql = "INSERT INTO `orders` (`voornaam`,`naam`,`email`,`gemeente`,`straat`,`postcode`,`gemeente verzend`,`straat verzend`,`postcode verzend`) VALUES(:firstname,:lastname,:email,:gemeente,:straat,:postcode,:gemeentes,:straats,:postcodes)";
      $stmt = $this->pdo->prepare($sql);
      $stmt->bindValue(':firstname',$data['firstname']);
      $stmt->bindValue(':lastname',$data['lastname']);
      $stmt->bindValue(':email',$data['email']);
      $stmt->bindValue(':gemeente',$data['gemeente']);
      $stmt->bindValue(':straat',$data['straat']);
      $stmt->bindValue(':postcode',$data['postcode']);
      $stmt->bindValue(':gemeentes',$data['gemeente(2)']);
      $stmt->bindValue(':straats',$data['straat(2)']);
      $stmt->bindValue(':postcodes',$data['postcode(2)']);
      if($stmt->execute()) {
        $insertedId = $this->pdo->lastInsertId();
        return $this->selectById($insertedId);
      }
    }
  }

  public function validate($data){
    $errors = [];
    if (empty($data['firstname'])) {
      $errors['firstname'] = 'Gelieve een voornaam in te geven';
    }
    if (empty($data['lastname'])) {
      $errors['lastname'] = 'Gelieve een achternaam in te geven';
    }
    if (empty($data['email'])) {
      $errors['email'] = 'Gelieve een geldig e-mailadress op te geven';
    }
    if (empty($data['gemeente'])) {
      $errors['gemeente'] = 'Gelieve een gemeente in te geven';
    }
    if (empty($data['straat'])) {
      $errors['straat'] = 'Gelieve een straat en nummer in te geven';
    }
    if (empty($data['postcode'])) {
      $errors['postcode'] = 'Gelieve een geldige postcode op te geven';
    }
    if (empty($data['wijze'])) {
      $errors['wijze'] = 'Gelieve een betaalmethode te kiezen';
    }
    return $errors;
  }
  public function insertProducts($data){
    $sql = "INSERT INTO `ordered products` (`order_id`,`name`,`quantity`) VALUES(:order_id,:naam,:quantity)";
      $stmt = $this->pdo->prepare($sql);
      $stmt->bindValue(':order_id',$data['order_id']);
      $stmt->bindValue(':naam',$data['product']['name']);
      $stmt->bindValue(':quantity',$data['quantity']);
      $stmt->execute();
  }

}

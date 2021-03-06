<?php

require_once __DIR__ . '/Controller.php';
require_once __DIR__ . '/../dao/ProductsDAO.php';

class ProductsController extends Controller {

  private $productsDAO;

  function __construct() {
    $this->productsDAO = new ProductsDAO();
  }

  public function index() {

  }

  public function book() {
      $books = $this->productsDAO->selectAllBooks();
      $this->set('books', $books);

  }
  public function shop() {

  }
  public function abonnement() {

  }

  public function long() {

  }


  public function product() {
    $product = $this->productsDAO->selectById($_GET['id']);
    $this->set('product', $product);
  }

  public function mandje() {
    if (!empty($_POST['action'])) {
      if ($_POST['action'] == 'add') {
        $this->_handleAdd();
        // TODO !!!
        header('Location:  index.php?page=mandje');
        exit();
      }
      if ($_POST['action'] == 'empty') {
        $_SESSION['cart'] = array();
      }
      if ($_POST['action'] == 'update') {
        $this->_handleUpdate();
      }
      header('Location: index.php?page=mandje');
      exit();
    }
    if (!empty($_POST['remove'])) {
      $this->_handleRemove();
      header('Location: index.php?page=mandje');
      exit();
    }

  }
  public function form() {

    if(!empty($_POST['action'])){
      if($_POST['action'] == 'insertOrder'){
        $insertedOrder = $this->productsDAO->insertOrder($_POST);
        if(empty($insertedOrder)){
          $errors = $this->productsDAO->validate($_POST);
          $this->set('errors',$errors);
        }else{
          foreach ($_SESSION['cart'] as $data){
            $data['order_id'] = $insertedOrder['id'];
            $this->productsDAO->insertProducts($data);
          }
        }
      }
    }
    if(!empty($_POST['action'])) {
      session_unset();
    }
  }

  private function _handleAdd() {
    if (empty($_SESSION['cart'][$_POST['product_id']])) {
      $product = $this->productsDAO->selectById($_POST['product_id']);
      if (empty($product)) {
        return;
      }

      $_SESSION['cart'][$_POST['product_id']] = array(
        'product' => $product,
        'quantity' => 0
      );
    }
    $_SESSION['cart'][$_POST['product_id']]['quantity']++;
  }

  private function _handleRemove() {
    if (isset($_SESSION['cart'][$_POST['remove']])) {
      unset($_SESSION['cart'][$_POST['remove']]);
    }
  }

  private function _handleDelete() {
    session_unset();
  }

  private function _handleUpdate() {
    foreach ($_POST['quantity'] as $productId => $quantity) {
      if (!empty($_SESSION['cart'][$productId])) {
        $_SESSION['cart'][$productId]['quantity'] = $quantity;
      }
    }
    $this->_removeWhereQuantityIsZero();
  }

  private function _removeWhereQuantityIsZero() {
    foreach($_SESSION['cart'] as $productId => $info) {
      if ($info['quantity'] <= 0) {
        unset($_SESSION['cart'][$productId]);
      }
    }
  }
}

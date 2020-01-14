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

  public function product() {
    $product = $this->productsDAO->selectById($_GET['id']);
    $this->set('product', $product);
  }

  public function mandje() {

  }
  public function form() {

  }


}

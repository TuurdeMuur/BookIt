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

  }
  public function shop() {

  }
  public function abonnement() {

  }

  public function product() {

  }
  
  public function mandje() {

  }
  public function form() {

  }


}

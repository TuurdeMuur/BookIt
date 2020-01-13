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



}

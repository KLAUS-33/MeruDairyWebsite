<?php

// Include config file
require_once BASE_PATH . '/config.php';

class ProductsController {
    public function index() {
        $title = 'Meru Dairy Website - Products';
        $view = 'products.php';
        require_once BASE_PATH . '/views/layouts/main.php';
    }
}

?>
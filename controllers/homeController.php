<?php

// Include config file
require_once BASE_PATH . '/config.php';

class HomeController {
    public function index() {
        $data = [
            'title' => 'Meru Dairy Website - Home',
            'view' => 'home.php'
        ];
        // Include main.php with data
        require_once BASE_PATH . '/views/layouts/main.php';
    }
}

?>
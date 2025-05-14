<?php

// Include config file
require_once BASE_PATH . '/config.php';

class AboutController {
    public function index() {
        $data = [
            'title' => 'Meru Dairy Website - About Us',
            'view' => 'about.php'
        ];
        require_once BASE_PATH . '/views/layouts/main.php';
    }
}

?>
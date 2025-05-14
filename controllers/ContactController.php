<?php

// Include config file
require_once BASE_PATH . '/config.php';

class ContactController {
    public function index() {
        $data = [
            'title' => 'Meru Dairy Website - Contact Us',
            'view' => 'contact.php'
        ];
        require_once BASE_PATH . '/views/layouts/main.php';
    }
}

?>
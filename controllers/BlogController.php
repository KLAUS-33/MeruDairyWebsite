<?php
// Include config file
require_once BASE_PATH . '/config.php';

class BlogController {
    public function index() {
        $title = 'Meru Dairy Website - Blog';
        $view = 'blog.php';
        require_once BASE_PATH . '/views/layouts/main.php';
    }
}

?>
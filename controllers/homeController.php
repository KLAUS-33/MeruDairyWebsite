<?php
// controllers/HomeController.php
class HomeController {
    public function index() {
        // Load the homepage view
        require_once dirname(__DIR__) . '/views/layouts/main.php';
    }
}
?>
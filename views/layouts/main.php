<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($data['title'] ?? 'Meru Dairy Website'); ?></title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Fallback inline styles if Tailwind fails -->
    <style>
        .hidden { display: none; }
        .flex { display: flex; }
        @media (min-width: 768px) {
            .md\\:flex { display: flex; }
            .md\\:hidden { display: none; }
        }
    </style>
    <!-- Google Fonts for Roboto -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Roboto', sans-serif; }
    </style>
</head>
<body class="bg-gray-100">
    <!-- Header Section -->
   <!-- Header Section -->
    <header class="bg-white text-indigo-800 p-4 shadow-md">
        <div class="container mx-auto flex items-center justify-between">
            <!-- Logo and Title -->
            <div class="flex items-center">
                <img src="http://localhost/MeruDairyWebsite/public/assets/logo/logo.png" alt="Logo" class="h-12 w-12 mr-2" />
                <h1 class="text-2xl font-bold">MT KENYA MILK</h1>
            </div>

            <!-- Hamburger Menu (Visible on Mobile) -->
            <button id="menu-toggle" class="md:hidden focus:outline-none">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>

            <!-- Navigation Menu -->
            <nav id="nav-menu" class="hidden md:flex md:items-center space-x-4">
                <!-- Menu Items -->
                <a href="/home" class="hover:text-indigo-600">Home</a>
                <a href="/about" class="hover:text-indigo-600">About Us</a>
                <a href="/products" class="hover:text-indigo-600">Products</a>
                <a href="/contact" class="hover:text-indigo-600">Contact Us</a>
                <a href="/jobs" class="hover:text-indigo-600">Job Opportunities</a>
                <a href="/blog" class="hover:text-indigo-600">Blog</a>
                <a href="/csr" class="hover:text-indigo-600">CSR</a>
                <a href="/birthday" class="hover:text-indigo-600">Birthday Nominations</a>
            </nav>
        </div>

        <!-- Contact Info (Visible on Desktop) -->
        <div class="container mx-auto mt-2 text-sm text-indigo-800 hidden md:block">
            <p>P.O. Box 2919 Meru-Kenya | Email: maziwa@merudairy.co.ke | Phone: 0710 901376</p>
        </div>

        <!-- Mobile Menu (Visible when Hamburger is Clicked) -->
        <div id="mobile-menu" class="hidden md:hidden bg-white text-indigo-800">
            <nav class="flex flex-col space-y-2 p-4">
                <a href="/home" class="hover:text-indigo-600">Home</a>
                <a href="/about" class="hover:text-indigo-600">About Us</a>
                <a href="/products" class="hover:text-indigo-600">Products</a>
                <a href="/contact" class="hover:text-indigo-600">Contact Us</a>
                <a href="/jobs" class="hover:text-indigo-600">Job Opportunities</a>
                <a href="/blog" class="hover:text-indigo-600">Blog</a>
                <a href="/csr" class="hover:text-indigo-600">CSR</a>
                <a href="/birthday" class="hover:text-indigo-600">Birthday Nominations</a>
                <div class="text-sm mt-2">
                    <p>P.O. Box 2919 Meru-Kenya</p>
                    <p>Email: maziwa@merudairy.co.ke</p>
                    <p>Phone: 0710 901376</p>
                </div>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <?php
    if (isset($data['view']) && file_exists(BASE_PATH . '/views/' . $data['view'])) {
        error_log("Loading view: " . BASE_PATH . '/views/' . $data['view']);
        require_once BASE_PATH . '/views/' . $data['view'];
    } else {
        $error_message = "View not set or file not found.";
        if (isset($data['view'])) {
            $error_message .= " Attempted view: " . BASE_PATH . '/views/' . $data['view'];
        }
        error_log($error_message);
        echo '<div class="container mx-auto mt-8"><p>' . $error_message . '</p></div>';
    }
    ?>

    <!-- Footer Section -->
    <footer class="bg-indigo-800 text-white py-8 mt-12">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Navigation Links -->
            <div>
                <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
                <ul class="space-y-2">
                    <li><a href="/home" class="hover:underline">Home</a></li>
                    <li><a href="/about" class="hover:underline">About Us</a></li>
                    <li><a href="/products" class="hover:underline">Products</a></li>
                    <li><a href="/contact" class="hover:underline">Contact Us</a></li>
                    <li><a href="/jobs" class="hover:underline">Job Opportunities</a></li>
                    <li><a href="/blog" class="hover:underline">Blog</a></li>
                    <li><a href="/csr" class="hover:underline">CSR</a></li>
                    <li><a href="/birthday" class="hover:underline">Birthday Nominations</a></li>
                </ul>
            </div>
            <!-- Contact Information -->
            <div>
                <h4 class="text-lg font-semibold mb-4">Contact Us</h4>
                <p class="mb-2">P.O. Box 2919 Meru-Kenya</p>
                <p class="mb-2">Email: <a href="mailto:maziwa@merudairy.co.ke" class="hover:underline">maziwa@merudairy.co.ke</a></p>
                <p>Phone: <a href="tel:+254710901376" class="hover:underline">0710 901376</a></p>
            </div>
            <!-- Additional Info (e.g., Logo or Tagline) -->
            <div>
                <h4 class="text-lg font-semibold mb-4">Mount Kenya Milk</h4>
                <p>The Cool Mountain Freshness</p>
            </div>
        </div>
        <!-- Copyright Notice -->
        <div class="mt-8 text-center border-t border-indigo-600 pt-4">
            <p>© <?php echo date('Y'); ?> Meru Dairy Co-operative. All rights reserved.</p>
        </div>
    </footer>

    <!-- JavaScript for Hamburger Menu -->
    <script src="/js/nav.js"></script>
</body>
</html>
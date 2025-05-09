<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meru Dairy Website</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Google Fonts for Roboto -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Roboto', sans-serif; }
    </style>
</head>
<body class="bg-gray-100">

<!-- Header Section -->
  <header class="bg-white text-indigo-800 p-4 shadow-md">
        <div class="container mx-auto flex items-center justify-between">
            <!-- Logo and Title -->
            <div class="flex items-center">
                <!-- <img src="/logo.png" alt="Logo" class="h-12 w-12 mr-2" /> -->
                 <img src="http://localhost/MeruDairyWebsite/public/assets/img/logo.png" alt="Logo" class="h-12 w-12 mr-2" />
                <h1 class="text-2xl font-bold">Mt KENYA MILK</h1>
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

</body>
</html>




<!-- Hero Carousel (Full Width and 70vh Height) -->
<div class="relative w-full h-[70vh] overflow-hidden">
    <!-- Slide 1 -->
    <section class="absolute top-0 left-0 w-full h-full bg-[url('http://localhost/MeruDairyWebsite/public/assets/img/3.jpeg')] bg-cover bg-center text-white text-center flex items-center justify-center opacity-100 transition-opacity duration-1000" data-slide="1">
        <div class="bg-black/50 absolute inset-0 z-0"></div>
        <div class="relative z-10">
            <h1 class="text-4xl md:text-5xl font-bold mb-4 drop-shadow-lg">Welcome to Mount Kenya Milk</h1>
            <p class="text-lg md:text-xl drop-shadow-lg">The Cool Mountain Freshness</p>
        </div>
    </section>

    <!-- Slide 2 -->
    <section class="absolute top-0 left-0 w-full h-full bg-[url('http://localhost/MeruDairyWebsite/public/assets/img/milk.jpg')] bg-cover bg-center text-white text-center flex items-center justify-center opacity-0 transition-opacity duration-1000" data-slide="2">
        <div class="bg-black/50 absolute inset-0 z-0"></div>
        <div class="relative z-10">
            <h1 class="text-4xl md:text-5xl font-bold mb-4 drop-shadow-lg">Discover Our Fresh Milk</h1>
            <p class="text-lg md:text-xl drop-shadow-lg">Pure and Natural</p>
        </div>
    </section>

    <!-- Slide 3 -->
    <section class="absolute top-0 left-0 w-full h-full bg-[url('/assets/img/dairy-products.jpg')] bg-cover bg-center text-white text-center flex items-center justify-center opacity-0 transition-opacity duration-1000" data-slide="3">
        <div class="bg-black/50 absolute inset-0 z-0"></div>
        <div class="relative z-10">
            <h1 class="text-4xl md:text-5xl font-bold mb-4 drop-shadow-lg">Join Our Campaign!</h1>
            <p class="text-lg md:text-xl drop-shadow-lg">Win Exciting Prizes</p>
        </div>
    </section>
</div>

<!-- JavaScript for Carousel -->
<script>
    const slides = document.querySelectorAll('[data-slide]');
    let currentSlide = 0;

    function showSlide(index) {
        slides.forEach((slide, i) => {
            slide.classList.toggle('opacity-100', i === index);
            slide.classList.toggle('opacity-0', i !== index);
        });
    }

    function nextSlide() {
        currentSlide = (currentSlide + 1) % slides.length;
        showSlide(currentSlide);
    }

    // Initial display
    showSlide(currentSlide);

    // Auto transition every 5 seconds
    setInterval(nextSlide, 5000);
</script>
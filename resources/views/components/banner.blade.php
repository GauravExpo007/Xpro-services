<!-- Banner Section -->
<section class="relative items-center lg:flex-row-reverse">
    <!-- Carousel Container -->
    <div id="carousel" class="relative w-full lg:h-[91%] overflow-hidden rounded-2xl">
        <!-- Banner Images -->
        <img class="carousel-image h-full object-cover w-full hidden opacity-0 transition-opacity duration-700" src="assets/banner/Stand-0.jpg" alt="exhibition_stand_1">
        <img class="carousel-image h-full object-cover w-full hidden opacity-0 transition-opacity duration-700" src="assets/banner/Stand-1.jpg" alt="exhibition_stand_2">
        <img class="carousel-image h-full object-cover w-full hidden opacity-0 transition-opacity duration-700" src="assets/banner/Stand-2.jpg" alt="exhibition_stand_3">
        <img class="carousel-image h-full object-cover w-full hidden opacity-0 transition-opacity duration-700" src="assets/banner/Stand-3.jpg" alt="exhibition_stand_4">
        <img class="carousel-image h-full object-cover w-full hidden opacity-0 transition-opacity duration-700" src="assets/banner/Stand-4.jpg" alt="exhibition_stand_5">
        <img class="carousel-image h-full object-cover w-full hidden opacity-0 transition-opacity duration-700" src="assets/banner/Stand-5.jpg" alt="exhibition_stand_6">

        <!-- Heading Overlay -->
        <div class="absolute flex flex-col gap-5 md:gap-10 lg:gap-20 top-32 md:top-96 w-full text-center p-4 bg-opacity-30 bg-black">
            <h2 class="text-3xl md:text-5xl lg:text-7xl text-white font-extrabold uppercase">
                Xpro Services Company In USA
            </h2>

            <!-- Button Container -->
            <div class="flex flex-wrap justify-center text-xl md:text-2xl space-x-4">
                <div class="flex justify-center">
                    <a href="/contact" target="_self" rel="noopener noreferrer" aria-label="Contact Us"
                        class="inline-block px-6 py-3 border-2 border-white text-white font-semibold rounded-lg transition duration-300 ease-in-out hover:bg-white hover:text-black hover:border-transparent">
                        Contact Us
                    </a>
                </div>
                <div class="flex justify-center">
                    <a href="https://iceagency.co.uk/pop-up-retail-solutions/" target="_blank" rel="noopener noreferrer" aria-label="Download Brochure"
                        class="inline-block px-6 py-3 border-2 border-white text-white font-semibold rounded-lg transition duration-300 ease-in-out hover:bg-white hover:text-black hover:border-transparent">
                        Download Brochure
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Carousel JavaScript -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const images = document.querySelectorAll(".carousel-image");
            let currentIndex = 0;
            let interval;

            function showNextImage() {
                images[currentIndex].classList.add("hidden", "opacity-0");
                currentIndex = (currentIndex + 1) % images.length;
                images[currentIndex].classList.remove("hidden", "opacity-0");
            }

            function startCarousel() {
                interval = setInterval(showNextImage, 3000);
            }

            function stopCarousel() {
                clearInterval(interval);
            }

            // Initialize first image and start carousel
            images[currentIndex].classList.remove("hidden", "opacity-0");
            startCarousel();

            // Pause carousel on hover and resume on mouse leave
            const carousel = document.getElementById("carousel");
            carousel.addEventListener("mouseenter", stopCarousel);
            carousel.addEventListener("mouseleave", startCarousel);
        });
    </script>
</section>

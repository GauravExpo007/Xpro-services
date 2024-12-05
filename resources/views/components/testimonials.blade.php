<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<section class="my-10 md:my-14 lg:my-20 flex flex-col gap-5 md:gap-10 justify-center items-center">
    <h2 class="text-3xl md:text-5xl lg:text-7xl text-center">
        What <span class="text-[#ddb60a] font-bold">Our Client Say</span>
    </h2>

    <!-- Testimonial Slider -->
    <div class="swiper-container testimonial-slider w-full pb-16 md:w-4/5 overflow-hidden relative">
        <div class="swiper-wrapper">
            <!-- Testimonial 1 -->
            <div class="swiper-slide flex flex-col justify-center items-center text-center gap-4">
                <img src="assets/sponsors/sponsor-1.webp" alt="Xpro Services Company Logo" class="w-36 mx-auto"
                    loading="lazy" />
                <p class="text-slate-500 text-4xl">
                    Host various events effortlessly with Eventchamp—conferences, workshops, expos, and more. Expand
                    your reach now!
                </p>
            </div>
            <!-- Testimonial 2 -->
            <div class="swiper-slide flex flex-col justify-center items-center text-center gap-4">
                <img src="assets/sponsors/sponsor-2.webp" alt="Ypro Solutions Company Logo" class="w-36 mx-auto"
                    loading="lazy" />
                <p class="text-slate-500 text-4xl">
                    Eventchamp has simplified our event management process immensely. Highly recommended!
                </p>
            </div>
            <!-- Testimonial 3 -->
            <div class="swiper-slide flex flex-col justify-center items-center text-center gap-4">
                <img src="assets/sponsors/sponsor-3.webp" alt="Zpro Corp Company Logo" class="w-36 mx-auto"
                    loading="lazy" />
                <p class="text-slate-500 text-4xl">
                    Seamless experience from start to finish. Eventchamp is the best tool for professionals.
                </p>
            </div>
        </div>
        <div class="swiper-pagination"></div>
        {{-- <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div> --}}
    </div>

    <!-- Video Slider -->
    {{-- <div class="swiper-container video-slider w-full md:w-4/5 overflow-hidden relative mt-10">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <iframe width="360" height="215" src="https://www.youtube.com/embed/pIJ3h2zjjZM"
                    title="YouTube video player" frameborder="0" loading="lazy"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
            <div class="swiper-slide">
                <iframe width="360" height="215"
                    src="https://www.youtube.com/embed/3RtNTFoyQgg?si=C8QjITanC1QQkjmT" title="YouTube video player"
                    frameborder="0" loading="lazy"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
            <div class="swiper-slide">
                <iframe width="360" height="215" src="https://www.youtube.com/embed/pIJ3h2zjjZM"
                    title="YouTube video player" frameborder="0" loading="lazy"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
            <div class="swiper-slide">
                <iframe width="360" height="215" src="https://www.youtube.com/embed/pIJ3h2zjjZM"
                    title="YouTube video player" frameborder="0" loading="lazy"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
        </div>
        <!-- Pagination -->
        <div class="swiper-pagination"></div>
        <!-- Navigation -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div> --}}

</section>

<script>
    // Testimonial Slider
    const testimonialSlider = new Swiper('.testimonial-slider', {
        slidesPerView: 1,
        spaceBetween: 20,
        loop: true,
        autoplay: {
            delay: 3000,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        breakpoints: {
            768: { // Medium screens (tablets)
                slidesPerView: 2, // Show 2 videos
                spaceBetween: 50, // Same gap for medium screens
            },
            1024: { // Large screens (desktops)
                slidesPerView: 2, // Show 3 videos
                spaceBetween: 50, // Same gap for large screens
            },
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });

    // Video Slider
    // Initialize Swiper for the Video Slider
    const videoSlider = new Swiper('.video-slider', {
        slidesPerView: 1, // Default for small screens
        spaceBetween: 50, // Wide gap between videos
        loop: true, // Enable infinite loop
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true, // Allow users to click on pagination dots
        },
        breakpoints: {
            768: { // Medium screens (tablets)
                slidesPerView: 2, // Show 2 videos
                spaceBetween: 50, // Same gap for medium screens
            },
            1024: { // Large screens (desktops)
                slidesPerView: 3, // Show 3 videos
                spaceBetween: 50, // Same gap for large screens
            },
        },
    });
</script>

<style>
    /* Swiper Navigation Buttons */
    .swiper-button-prev,
    .swiper-button-next {
        z-index: 10;
        color: #ddb60a;
        font-size: 16px;
        /* Smaller arrow size */
        transform: scale(0.8);
        /* Shrinks arrows */
    }

    /* Optional Hover Effect for Navigation Arrows */
    .swiper-button-prev:hover,
    .swiper-button-next:hover {
        transform: scale(1);
        /* Restore size on hover */
        transition: transform 0.2s ease;
    }

    /* Swiper Pagination */
    .swiper-pagination {
        position: absolute;
        bottom: 10px;
        /* Position at the bottom of the slider */
        left: 0;
        right: 0;
        text-align: center;
        z-index: 10;
    }

    /* Pagination Bullet Style */
    .swiper-pagination-bullet {
        background-color: #ddb60a;
        opacity: 0.5;
        width: 10px;
        height: 10px;
        margin: 0 5px;
        /* Add spacing between dots */
    }

    /* Active Pagination Bullet Style */
    .swiper-pagination-bullet-active {
        opacity: 1;
        /* Fully opaque for active dot */
        background-color: #ddb60a;

    }

    /* Style Swiper Container */
    .swiper-container {
        background-color: #ffffff;
        /* Ensures white background for the gaps */
        padding: 20px 20px;
        /* Optional: Adds vertical padding around the slider */
    }

    /* Style Individual Swiper Slides */
    .swiper-slide {
        background-color: #f9f9f9;
        /* Light background for videos */
        border-radius: 8px;
        /* Optional: Rounded corners for slides */
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        /* Optional: Subtle shadow for better visuals */
        margin: 0 auto;
        /* Center-align the slides */
        padding: 10px;
        /* Inner padding for the content */
        height: 250px;
    }

    /* Add Space Between Slides */
    .swiper-slide iframe {
        display: block;
        width: 100%;
        height: auto;
        border: none;
        /* Remove iframe border */
    }
</style>

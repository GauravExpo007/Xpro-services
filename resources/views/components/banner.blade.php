<!-- Banner Section -->
<section class="relative items-center lg:flex-row-reverse font-poppins">
    <!-- Carousel Container -->
    <div id="carousel" class="relative w-full lg:h-[91%] overflow-hidden rounded-2xl">
        <!-- Banner Images -->
        <img class="carousel-image h-full object-cover w-full hidden opacity-0 transition-opacity duration-700"
            src="assets/banner/stand-0.webp" alt="exhibition_stand_0" loading="eager" />
        <img class="carousel-image h-full object-cover w-full hidden opacity-0 transition-opacity duration-700"
            src="assets/banner/stand-1.webp" alt="exhibition_stand_1" loading="eager" />
        <img class="carousel-image h-full object-cover w-full hidden opacity-0 transition-opacity duration-700"
            src="assets/banner/stand-2.webp" alt="exhibition_stand_2" loading="eager" />
        <img class="carousel-image h-full object-cover w-full hidden opacity-0 transition-opacity duration-700"
            src="assets/banner/stand-3.webp" alt="exhibition_stand_3" loading="eager" />
        <img class="carousel-image h-full object-cover w-full hidden opacity-0 transition-opacity duration-700"
            src="assets/banner/stand-4.webp" alt="exhibition_stand_4" loading="eager" />
        <img class="carousel-image h-full object-cover w-full hidden opacity-0 transition-opacity duration-700"
            src="assets/banner/stand-5.webp" alt="exhibition_stand_5" loading="eager" />
        <img class="carousel-image h-full object-cover w-full hidden opacity-0 transition-opacity duration-700"
            src="assets/banner/stand-6.webp" alt="exhibition_stand_6" loading="eager" />

        <!-- Heading Overlay -->
        <div
            class="absolute flex flex-col gap-5 md:gap-10 lg:gap-20 top-32 md:top-96 w-full text-center p-4 bg-opacity-30 bg-black">
            <h2 class="text-3xl md:text-5xl lg:text-7xl text-white font-extrabold uppercase">
                Xpro Services Company In USA
            </h2>

            <!-- Existing Button Container -->
            <div class="w-fit mx-auto flex flex-wrap justify-center text-xl md:text-2xl space-x-4 group">
                <div class="flex justify-center">
                    <a href="/contact" target="_self" rel="noopener noreferrer" aria-label="Contact Us"
                        class="contact-btn inline-block px-6 py-3 border-2 group-hover:border-white border-transparent font-semibold rounded-lg transition duration-500 ease-in-out bg-white text-black 
                            group-hover:bg-transparent group-hover:text-white">
                        Contact Us
                    </a>
                </div>
                <div class="hidden justify-center">
                    <a href="#" id="downloadBrochureBtn" target="_blank" rel="noopener noreferrer"
                        aria-label="Download Brochure"
                        class="brochure-btn inline-block px-6 py-3 border-2 border-white font-semibold rounded-lg transition duration-500 ease-in-out bg-transparent text-white 
                            group-hover:bg-white group-hover:text-black">
                        Download Brochure
                    </a>
                </div>
            </div>

            <!-- Popup Form Modal -->
            <div id="popupModal" class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center hidden">
                <div class="bg-white p-6 rounded-lg w-96 md:w-1/2 relative">
                    <h2 class="text-2xl font-bold mb-4 text-center">Download Brochure</h2>
                    <form id="brochureForm" class="w-full">
                        <div class="flex gap-5 md:gap-10 justify-center">
                            <div class="mb-4">
                                <label for="name" class="block text-xl font-medium text-gray-700">Name</label>
                                <input type="text" id="name" name="name"
                                    class="p-2 w-full border-t border-r border-b border-gray-300 rounded-r-md"
                                    required />
                            </div>
                            <div class="mb-4">
                                <label for="phone" class="block text-xl font-medium text-gray-700">Phone</label>
                                <input type="tel" id="phone" name="phone"
                                    class="w-full px-4 py-2 border border-gray-300 rounded" required />
                            </div>
                        </div>
                        <div class="flex gap-5 md:gap-10 justify-center">
                            <div class="mb-4">
                                <label for="email" class="block text-xl font-medium text-gray-700">Email</label>
                                <input type="email" id="email" name="email"
                                    class="w-full px-4 py-2 border border-gray-300 rounded" required />
                            </div>
                            <div class="mb-4">
                                <label for="companyName" class="block text-xl font-medium text-gray-700">Company
                                    Name</label>
                                <input type="text" id="companyName" name="companyName"
                                    class="w-full px-4 py-2 border border-gray-300 rounded" required />
                            </div>
                        </div>

                        <div class="flex justify-center mt-4">
                            <button type="submit" id="downloadBtn"
                                class="px-6 py-3 bg-blue-500 text-white rounded-lg hover:bg-blue-600">
                                Download Brochure
                            </button>
                        </div>
                    </form>
                    <button id="closePopupBtn" class="absolute top-2 right-2 text-xl font-bold text-gray-500">X</button>
                </div>
            </div>

        </div>
    </div>

    @push('scripts')
        <!-- Carousel JavaScript -->
        <script>
            document.addEventListener("DOMContentLoaded", function() {
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

            // Popup Form - JavaScript

            // Get elements
            const downloadBrochureBtn = document.getElementById('downloadBrochureBtn');
            const popupModal = document.getElementById('popupModal');
            const closePopupBtn = document.getElementById('closePopupBtn');
            const brochureForm = document.getElementById('brochureForm');
            const downloadBtn = document.getElementById('downloadBtn');

            // Show the popup modal when the "Download Brochure" button is clicked
            downloadBrochureBtn.addEventListener('click', (e) => {
                e.preventDefault(); // Prevent default link behavior
                popupModal.classList.remove('hidden'); // Show the modal
            });

            // Close the popup modal when the "X" button is clicked
            closePopupBtn.addEventListener('click', () => {
                popupModal.classList.add('hidden'); // Hide the modal
            });

            // Handle the form submission (in this case, just log the data)
            brochureForm.addEventListener('submit', (e) => {
                e.preventDefault(); // Prevent page reload

                // Get the form data
                const formData = new FormData(brochureForm);
                const data = {
                    name: formData.get('name'),
                    phone: formData.get('phone'),
                    email: formData.get('email'),
                    companyName: formData.get('companyName'),
                };

                console.log('Form Data:', data); // For demo purposes, log the data

                // Hide the modal after submission
                popupModal.classList.add('hidden');

                // Trigger the download (in this case, just show an alert)
                alert('Brochure downloaded!'); // Replace this with actual brochure download logic

                // Optionally, you can trigger a download here by creating a link:
                // window.location.href = '/path/to/brochure.pdf';  // Add the actual file path
            });

            // Close the modal when clicking outside the form
            popupModal.addEventListener('click', (e) => {
                // Check if the click was outside the modal content (i.e., not inside the modal form)
                if (e.target === popupModal) {
                    popupModal.classList.add('hidden'); // Hide the modal
                }
            });
        </script>
    @endpush
</section>

<!-- Popup CSS -->
<style>
    /* For the modal to cover the whole screen */
    #popupModal {
        display: none;
        /* Initially hidden */
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 9999;
    }

    /* For modal content */
    #popupModal .bg-white {
        background-color: white;
        padding: 20px;
        border-radius: 8px;
        max-width: 400px;
        width: 90%;
    }

    /* Styling for the close button */
    #closePopupBtn {
        position: absolute;
        top: 10px;
        right: 10px;
        background: transparent;
        border: none;
        font-size: 24px;
        font-weight: bold;
        color: gray;
    }

    /* Modal overlay */
    #popupModal.hidden {
        display: none;
    }
</style>

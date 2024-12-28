<section class=" bg-gradient-to-b from-[#e7e4e4] to-[#f5f5f5] font-poppins">
    {{-- Header Section --}}
    <section
        style="background-image: url('assets/events/event5.webp'); background-attachment: fixed; background-size: cover; background-position: center;">
        <div
            class="text-white bg-black bg-opacity-75 p-5 py-40 md:p-10 md:py-40 lg:p-20 lg:py-60 flex flex-col gap-5 md:gap-10">
            {{-- <h2 class="text-white text-3xl md:text-5xl lg:text-7xl font-semibold">Megeve Winter Party</h2> --}}
            <div class="my-10 md:my-14 flex flex-col gap-5 md:gap-10 justify-center items-center text-center">
                <h2 class="text-3xl md:text-5xl lg:text-7xl">
                    THANK <span class="text-[#ddb60a] font-bold">YOU</span>
                </h2>
                <p class="text-slate-300 font-bold text-2xl md:text-3xl">Our exhibit consultant will get back to you
                    shortly</p>
            </div>
        </div>
    </section>


    <div class="w-full flex flex-col justify-center items-center mx-auto gap-5 md:gap-10 lg:gap-20 pb-10 md:pb-20">

        {{-- Counter-Secion --}}

        <div class="w-full grid grid-cols-2 md:grid-cols-3 gap-4 p-5 md:p-10 bg-[#DDB60A]">
            <a href="/blog_list1">
                <div
                    class="flex flex-col justify-center text-center gap-5 shadow-lg shadow-black hover:scale-95 duration-500 py-8 backdrop-blur-lg rounded-3xl">
                    <span> <i class='fas fa-blog text-white text-4xl'></i></span>
                    <span class="text-xl md:text-2xl lg:text-3xl font-semibold text-white">Visit Blogs</span>
                </div>
            </a>

            <a href="#">
                <div
                    class="flex flex-col justify-center text-center gap-5 shadow-lg shadow-black hover:scale-95 duration-500 py-8 backdrop-blur-lg rounded-3xl">

                    <span><i class="fa fa-suitcase text-4xl text-white" aria-hidden="true"></i></span>
                    <span class="text-xl md:text-2xl lg:text-3xl font-semibold text-white">Our Portfolio</span>
                </div>
            </a>
            <a href="#">
                <div
                    class="flex flex-col justify-center text-center gap-5 shadow-lg shadow-black hover:scale-95 duration-500 py-8 backdrop-blur-lg rounded-3xl">

                    <span>
                        <i class="fa fa-th text-white text-4xl" aria-hidden="true"></i>
                    </span>
                    <span class="text-xl md:text-2xl lg:text-3xl font-semibold text-white">Testimonials</span>
                </div>
            </a>
        </div>

        {{-- Moving-Image section --}}
        <section class="relative overflow-hidden w-full sm:h-[400px]">
            <div id="ticker" class="flex items-center space-x-4 h-full animate-scroll group">
                <!-- Image Container 1 -->
                <div class="relative h-full w-[400.5px] sm:w-[200px] mx-4">
                    <img src="assets/banner/stand-0.webp"
                        class="absolute h-[306px] sm:h-[200px] w-full object-cover top-[10%] rounded-3xl">
                </div>
                <!-- Image Container 2 -->
                <div class="relative h-full w-[279.5px] sm:w-[150px] mx-4">
                    <img src="assets/banner/stand-1.webp"
                        class="absolute h-[288px] sm:h-[180px] w-full object-cover rounded-3xl">
                </div>
                <!-- Image Container 3 -->
                <div class="relative h-full w-[346.5px] sm:w-[250px] mx-4">
                    <img src="assets/banner/stand-2.webp"
                        class="absolute h-[359.5px] sm:h-[240px] w-full object-cover top-[20%] rounded-3xl">
                </div>
                <!-- Image Container 4 -->
                <div class="relative h-full w-[537px] sm:w-[300px] mx-4">
                    <img src="assets/banner/stand-3.webp"
                        class="absolute h-[306px] sm:h-[220px] w-full object-cover top-[10%] rounded-3xl">
                </div>
                <!-- Image Container 5 -->
                <div class="relative h-full w-[615.5px] sm:w-[280px] mx-4">
                    <img src="assets/banner/stand-4.webp"
                        class="absolute h-[287.5px] sm:h-[210px] w-full object-cover rounded-3xl">
                </div>
                <!-- Image Container 6 -->
                <div class="relative h-full w-[300px] sm:w-[270px] mx-4">
                    <img src="assets/banner/stand-5.webp"
                        class="absolute h-[300px] sm:h-[200px] w-full object-cover top-[20%] rounded-3xl">
                </div>
            </div>
        </section>



        {{-- <!-- Filter Section --> --}}
        <section class="w-full"
            style=" background-image: url('assets/events/event2.webp'); background-attachment: fixed; background-size: cover; background-position: center;">
            <div class=" text-white bg-black bg-opacity-75 p-5 py-16 lg:p-40 flex flex-col gap-5 md:gap-10">
                <form id="searchForm" action="/search-results" method="GET"
                    class="w-full flex flex-col xl:flex-row gap-5">

                    <div class=" grid grid-cols-1 md:grid-cols-2 gap-5 lg:gap-10 m-auto items-center justify-center">

                        <!-- Location Dropdown -->
                        <div class="relative">
                            <button type="button" id="locationButton" onclick="toggleDropdown('locationDropdown')"
                                aria-expanded="false"
                                class="w-96 md:w-full inline-block p-3 px-6 border-2 border-white text-white font-semibold rounded-lg transition duration-300 ease-in-out">
                                Select City <i class="fa fa-angle-down pl-5"></i>
                            </button>
                            <ul id="locationDropdown"
                                class="hidden absolute mt-2 bg-white text-black rounded-lg shadow-lg w-full transition-all duration-300">
                                <li onclick="selectOption('locationButton', 'Location')"
                                    class="flex justify-between items-center px-4 py-2 text-[#ddb60a] hover:bg-gray-200 cursor-pointer">
                                    Location <i class="fa fa-anchor" aria-hidden="true"></i></li>
                                <li onclick="selectOption('locationButton', 'England')"
                                    class="px-4 py-2 hover:bg-gray-200 cursor-pointer">England</li>
                                <li onclick="selectOption('locationButton', 'London')"
                                    class="px-4 py-2 hover:bg-gray-200 cursor-pointer">London</li>
                                <li onclick="selectOption('locationButton', 'France')"
                                    class="px-4 py-2 hover:bg-gray-200 cursor-pointer">France</li>
                                <li onclick="selectOption('locationButton', 'Germany')"
                                    class="px-4 py-2 hover:bg-gray-200 cursor-pointer">Germany</li>
                            </ul>
                            <input type="hidden" id="locationInput" name="location">
                        </div>

                        <!-- Booth Size Dropdown -->
                        <div class="relative">
                            <button type="button" id="statusButton" onclick="toggleDropdown('sizeDropdown')"
                                aria-expanded="false"
                                class="w-96 md:w-full inline-block p-3 px-6 border-2 border-white text-white font-semibold rounded-lg transition duration-300 ease-in-out">
                                Booth Size <i class="fa fa-angle-down pl-5 "></i>
                            </button>
                            <ul id="sizeDropdown"
                                class="hidden absolute mt-2 bg-white text-black rounded-lg shadow-lg w-full transition-all duration-300">
                                <li onclick="selectOption('statusButton', 'Booth Size')"
                                    class="flex justify-between items-center px-4 py-2 text-[#ddb60a] hover:bg-gray-200 cursor-pointer">
                                    Booth Size <i class="fa fa-anchor" aria-hidden="true"></i></li>
                                <li onclick="selectOption('statusButton', '10 x 10')"
                                    class="px-4 py-2 hover:bg-gray-200 cursor-pointer">10 x 10</li>
                                <li onclick="selectOption('statusButton', '10 x 20')"
                                    class="px-4 py-2 hover:bg-gray-200 cursor-pointer">10 x 20</li>
                                <li onclick="selectOption('statusButton', '10 x 30')"
                                    class="px-4 py-2 hover:bg-gray-200 cursor-pointer">10 x 30</li>
                                <li onclick="selectOption('statusButton', '10 x 40')"
                                    class="px-4 py-2 hover:bg-gray-200 cursor-pointer">10 x 40</li>
                                <li onclick="selectOption('statusButton', '20 x 20')"
                                    class="px-4 py-2 hover:bg-gray-200 cursor-pointer">20 x 20</li>
                                <li onclick="selectOption('statusButton', '20 x 30')"
                                    class="px-4 py-2 hover:bg-gray-200 cursor-pointer">20 x 30</li>
                                <li onclick="selectOption('statusButton', '20 x 40')"
                                    class="px-4 py-2 hover:bg-gray-200 cursor-pointer">20 x 40</li>
                                <li onclick="selectOption('statusButton', '20 x 50')"
                                    class="px-4 py-2 hover:bg-gray-200 cursor-pointer">20 x 50</li>
                                <li onclick="selectOption('statusButton', '30 x 30')"
                                    class="px-4 py-2 hover:bg-gray-200 cursor-pointer">30 x 30</li>
                                <li onclick="selectOption('statusButton', '30 x 40')"
                                    class="px-4 py-2 hover:bg-gray-200 cursor-pointer">30 x 40</li>
                                <li onclick="selectOption('statusButton', '30 x 50')"
                                    class="px-4 py-2 hover:bg-gray-200 cursor-pointer">30 x 50</li>
                                <li onclick="selectOption('statusButton', '40 x 40')"
                                    class="px-4 py-2 hover:bg-gray-200 cursor-pointer">40 x 40</li>
                                <li onclick="selectOption('statusButton', '40 x 50')"
                                    class="px-4 py-2 hover:bg-gray-200 cursor-pointer">40 x 50</li>
                                <li onclick="selectOption('statusButton', '50 x 50')"
                                    class="px-4 py-2 hover:bg-gray-200 cursor-pointer">50 x 50</li>
                            </ul>
                            <input type="hidden" id="statusInput" name="status">
                        </div>
                    </div>

                    <!-- Apply Filter Button -->
                    <button type="submit"
                        class="w-96 xl:w-80 mx-auto px-10 py-3 rounded-lg duration-500 bg-[#ddb60a] text-white font-semibold rounded-r-md border-2 border-[#ddb60a] hover:text-[#ddb60a] hover:border-[#ddb60a] hover:bg-opacity-0 focus:outline-none focus:ring-2 focus:ring-orange-500">
                        Apply filter
                    </button>
                </form>
            </div>
        </section>


        @include('components.home-contact-form')
    </div>
</section>


@push('scripts')
    <script>
        function closeAllDropdowns() {
            // Close all dropdowns by adding the "hidden" class
            document.getElementById("locationDropdown").classList.add("hidden");
            document.getElementById("sizeDropdown").classList.add("hidden");
        }

        function toggleDropdown(dropdownId) {
            // Close all dropdowns except the current one
            closeAllDropdowns();

            // Toggle visibility of the specified dropdown
            const dropdown = document.getElementById(dropdownId);
            dropdown.classList.toggle("hidden");

            // Update ARIA expanded state
            const button = dropdown.previousElementSibling;
            button.setAttribute('aria-expanded', !dropdown.classList.contains("hidden"));
        }

        function selectOption(buttonId, option) {
            // Update button text with the selected option
            document.getElementById(buttonId).innerHTML = `${option} <i class="fa fa-angle-down pl-5 md:pl-10"></i>`;

            // Close all dropdowns
            closeAllDropdowns();

            // Update the corresponding hidden input with the selected value
            const inputName = buttonId.replace('Button', 'Input');
            document.getElementById(inputName).value = option;
        }

        // Close dropdowns when clicking outside
        document.addEventListener("click", function(event) {
            const dropdownsAndButtons = ["locationButton", "statusButton", "locationDropdown", "sizeDropdown"];
            const isClickInsideDropdownOrButton = dropdownsAndButtons.some(id => {
                const element = document.getElementById(id);
                return element && element.contains(event.target);
            });

            // Close dropdowns if the click is outside
            if (!isClickInsideDropdownOrButton) {
                closeAllDropdowns();
            }
        });
    </script>

    <script>
        // JavaScript for the moving ticker
        document.addEventListener("DOMContentLoaded", () => {
            const ticker = document.getElementById("ticker");

            // Add animation class
            ticker.classList.add("animate-scroll");

            // Stop animation on hover
            ticker.addEventListener("mouseover", () => {
                ticker.classList.remove("animate-scroll");
            });

            // Resume animation when hover ends
            ticker.addEventListener("mouseout", () => {
                ticker.classList.add("animate-scroll");
            });
        });
    </script>
@endpush

<div class="bg-[#F9F9F9] font-poppins">

    {{-- Header Section --}}
    <section
        style="background-image: url('assets/events/event2.webp'); background-attachment: fixed; background-size: cover; background-position: center;">
        <div
            class="text-white bg-black bg-opacity-75 p-5 py-40 md:p-10 md:py-40 lg:p-20 lg:py-60 flex flex-col gap-5 md:gap-10">
            {{-- <h2 class="text-white text-3xl md:text-5xl lg:text-7xl font-semibold">Megeve Winter Party</h2> --}}
            <form id="searchForm" action="/search-results" method="GET" class="flex flex-col xl:flex-row  gap-5 xl:gap-3">

                <div class="grid grid-cols-1 md:grid-cols-3 xl:grid-cols-6 gap-5 xl:gap-3 m-auto items-center">
                    <!-- Text Input -->
                    <input type="text" id="contactName" name="contactName"
                        class="p-2.5 w-96 xl:w-60 border-2 border-white rounded-md bg-black bg-opacity-30 placeholder:text-center placeholder:text-white"
                        placeholder="e.g. events, meetups">

                    <!-- Category Button with Dropdown -->
                    <div class="relative">
                        <button type="button" id="categoryButton" onclick="toggleDropdown('categoryDropdown')"
                            aria-expanded="false"
                            class=" w-96 md:w-full inline-block px-6 py-3 border-2 border-white text-white font-semibold rounded-lg transition duration-300 ease-in-out">
                            Category <i class="fa fa-angle-down pl-5 md:pl-10"></i>
                        </button>
                        <ul id="categoryDropdown"
                            class="hidden absolute mt-2 bg-white text-black rounded-lg shadow-lg w-full transition-all duration-300">
                            <li onclick="selectOption('categoryButton', 'Category')"
                                class="flex justify-between items-center px-4 py-2 text-[#ddb60a] hover:bg-gray-200 cursor-pointer">
                                Category <i class="fa fa-anchor" aria-hidden="true"></i></li>
                            <li onclick="selectOption('categoryButton', 'Art')"
                                class="px-4 py-2 hover:bg-gray-200 cursor-pointer">Art</li>
                            <li onclick="selectOption('categoryButton', 'Business')"
                                class="px-4 py-2 hover:bg-gray-200 cursor-pointer">Business</li>
                            <li onclick="selectOption('categoryButton', 'Education')"
                                class="px-4 py-2 hover:bg-gray-200 cursor-pointer">Education</li>
                            <li onclick="selectOption('categoryButton', 'Festival')"
                                class="px-4 py-2 hover:bg-gray-200 cursor-pointer">Festival</li>
                        </ul>
                        <!-- Hidden Input to Store Selected Category -->
                        <input type="hidden" id="categoryInput" name="category">
                    </div>

                    <!-- Location Button with Dropdown -->
                    <div class="relative">
                        <button type="button" id="locationButton" onclick="toggleDropdown('locationDropdown')"
                            aria-expanded="false"
                            class=" w-96 md:w-full inline-block px-6 py-3 border-2 border-white text-white font-semibold rounded-lg transition duration-300 ease-in-out">
                            Location <i class="fa fa-angle-down pl-5 md:pl-10"></i>
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
                        <!-- Hidden Input to Store Selected Location -->
                        <input type="hidden" id="locationInput" name="location">
                    </div>

                    <!-- Status Button with Dropdown -->
                    <div class="relative">
                        <button type="button" id="statusButton" onclick="toggleDropdown('statusDropdown')"
                            aria-expanded="false"
                            class=" w-96 md:w-full inline-block px-6 py-3 border-2 border-white text-white font-semibold rounded-lg transition duration-300 ease-in-out">
                            Status <i class="fa fa-angle-down pl-5 md:pl-10"></i>
                        </button>
                        <ul id="statusDropdown"
                            class="hidden absolute mt-2 bg-white text-black rounded-lg shadow-lg w-full transition-all duration-300">
                            <li onclick="selectOption('statusButton', 'Status')"
                                class="flex justify-between items-center px-4 py-2 text-[#ddb60a] hover:bg-gray-200 cursor-pointer">
                                Status <i class="fa fa-anchor" aria-hidden="true"></i></li>
                            <li onclick="selectOption('statusButton', 'Upcoming')"
                                class="px-4 py-2 hover:bg-gray-200 cursor-pointer">Upcoming</li>
                            <li onclick="selectOption('statusButton', 'Showing')"
                                class="px-4 py-2 hover:bg-gray-200 cursor-pointer">Showing</li>
                            <li onclick="selectOption('statusButton', 'Expired')"
                                class="px-4 py-2 hover:bg-gray-200 cursor-pointer">Expired</li>
                        </ul>
                        <!-- Hidden Input to Store Selected Status -->
                        <input type="hidden" id="statusInput" name="status">
                    </div>

                    <!-- Date Button -->
                    <input type="date" name="date"
                        class=" w-96 xl:w-fit p-2.5 border-2 border-white rounded-md bg-black bg-opacity-30 placeholder:text-white transition duration-200 ease-in-out"
                        placeholder="Select Date" id="dateInput">

                    <!-- Sort-By Button with Dropdown -->
                    <div class="relative">
                        <button type="button" id="sortByButton" onclick="toggleDropdown('sortByDropdown')"
                            aria-expanded="false"
                            class=" w-96 md:w-fit inline-block px-6 py-3 border-2 border-white text-white font-semibold rounded-lg transition duration-300 ease-in-out">
                            Sort By <i class="fa fa-angle-down pl-5 md:pl-10"></i>
                        </button>
                        <ul id="sortByDropdown"
                            class="hidden absolute mt-2 bg-white text-black rounded-lg z-50 shadow-lg w-full transition-all duration-300">
                            <li onclick="selectOption('sortByButton', 'Sort by')"
                                class="flex justify-between items-center px-4 py-2 text-[#ddb60a] hover:bg-gray-200 cursor-pointer">
                                Sort by <i class="fa fa-anchor" aria-hidden="true"></i></li>
                            <li onclick="selectOption('sortByButton', 'Start date')"
                                class="px-4 py-2 hover:bg-gray-200 cursor-pointer">Start date</li>
                            <li onclick="selectOption('sortByButton', 'End date')"
                                class="px-4 py-2 hover:bg-gray-200 cursor-pointer">End date</li>
                            <li onclick="selectOption('sortByButton', 'Added date')"
                                class="px-4 py-2 hover:bg-gray-200 cursor-pointer">Added date</li>
                            <li onclick="selectOption('sortByButton', 'Name A > Z')"
                                class="px-4 py-2 hover:bg-gray-200 cursor-pointer">Name A > Z</li>
                            <li onclick="selectOption('sortByButton', 'Name Z > A')"
                                class="px-4 py-2 hover:bg-gray-200 cursor-pointer">Name Z > A</li>
                            <li onclick="selectOption('sortByButton', 'Price: Low to High')"
                                class="px-4 py-2 hover:bg-gray-200 cursor-pointer">Price: Low to High</li>
                            <li onclick="selectOption('sortByButton', 'Price: High to Low')"
                                class="px-4 py-2 hover:bg-gray-200 cursor-pointer">Price: High to Low</li>
                        </ul>
                        <!-- Hidden Input to Store Selected Sort By -->
                        <input type="hidden" id="sortByInput" name="sortBy">
                    </div>

                </div>

                <!-- Search Button -->
                <button type="submit"
                    class="w-96 xl:w-80 mx-auto px-10 md:px-20 py-3 rounded-lg duration-500 bg-[#ddb60a] text-white font-semibold rounded-r-md border-2 border-[#ddb60a] hover:text-[#ddb60a] hover:border-[#ddb60a] hover:bg-opacity-0 focus:outline-none focus:ring-2 focus:ring-orange-500">
                    Search
                </button>
            </form>
        </div>
    </section>
    {{-- Header Section-Ended --}}

    {{-- Card section --}}
    <section class="p-10 md:py-20">

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 md:px-10">

            {{-- Card-1 --}}
            <div class="w-full flex flex-col justify-center md:hover:scale-105 duration-500 pb-52">
                <div class="relative">
                    <a href="/event-1" target="_self" rel="noopener noreferrer" aria-label="event-1">
                        <img class="relative" src="assets/events/event1.webp" alt="exhibition_stand_1"
                            loading="lazy" />
                    </a>

                    <div
                        class="absolute flex flex-col -bottom-48 rounded-xl py-5 border border-[#ddb60a] bg-white left-8  w-[90%]">
                        <a href="/event-1" target="_self" rel="noopener noreferrer" aria-label="event-1"
                            class="inline-block px-6 py-3 rounded-xl  text-[#ddb60a] font-semibold p-2 transition duration-300 ease-in-out">
                            <h3 class="text-xl md:text-2xl lg:text-3xl font-bold">
                                Megeve Winter Party
                            </h3>
                        </a>
                        <div class="flex gap-5 md:gap-10 items-center px-5">
                            <a href="#" target="_self" rel="noopener noreferrer" aria-label="event-1"
                                class="inline-block text-lg w-fit my-6 px-10 py-2 border-2 rounded-full border-[#ddb60a] bg-[#ddb60a] text-white font-semibold p-2 transition  duration-300 ease-in-out">
                                Travel
                            </a>
                            <span>
                                <i class="fa fa-calendar text-[#ddb60a]" aria-hidden="true"></i> January 17, 2024
                            </span>

                        </div>
                        <p class="px-5 text-lg text-slate-500">
                            Join us for the ultimate winter party at Megeve. With live music, delicious food, and plenty
                            of
                            drinks, this is the perfect way to kick off the season.
                        </p>

                    </div>
                </div>
            </div>
            {{-- Card-2  --}}
            <div class="w-full flex flex-col justify-center md:hover:scale-105 duration-500 pb-52">
                <div class="relative">
                    <a href="#" target="_self" rel="noopener noreferrer" aria-label="event-2">
                        <img class="relative" src="assets/events/event2.webp" alt="exhibition_stand_2"
                            loading="lazy" />
                    </a>

                    <div
                        class="absolute flex flex-col -bottom-48 rounded-xl py-5 border border-[#ddb60a] bg-white left-8  w-[90%]">
                        <a href="#" target="_self" rel="noopener noreferrer" aria-label="event-2"
                            class="inline-block px-6 py-3 rounded-xl  text-[#ddb60a] font-semibold p-2 transition duration-300 ease-in-out">
                            <h3 class="text-xl md:text-2xl lg:text-3xl font-bold">
                                Eventchamp Conference
                            </h3>
                        </a>
                        <div class="flex gap-5 md:gap-10 items-center px-5">
                            <a href="#" target="_self" rel="noopener noreferrer" aria-label="event-1"
                                class="inline-block text-lg w-fit my-6 px-8 py-2 border-2 rounded-full border-[#ddb60a] bg-[#ddb60a] text-white font-semibold p-2 transition  duration-300 ease-in-out">
                                Business
                            </a>
                            <span>
                                <i class="fa fa-calendar text-[#ddb60a]" aria-hidden="true"></i> January 17, 2024
                            </span>

                        </div>
                        <p class="px-5 text-lg text-slate-500">
                            Join us for the ultimate winter party at Megeve. With live music, delicious food, and plenty
                            of
                            drinks, this is the perfect way to kick off the season.
                        </p>

                    </div>
                </div>
            </div>
            {{-- Card-3  --}}
            <div class="w-full flex flex-col justify-center md:hover:scale-105 duration-500 pb-52">
                <div class="relative">
                    <a href="#" target="_self" rel="noopener noreferrer" aria-label="event-3">
                        <img class="relative" src="assets/events/event3.webp" alt="exhibition_stand_1"
                            loading="lazy" />
                    </a>

                    <div
                        class="absolute flex flex-col -bottom-48 rounded-xl py-5 border border-[#ddb60a] bg-white left-8  w-[90%]">
                        <a href="#" target="_self" rel="noopener noreferrer" aria-label="event-3"
                            class="inline-block px-6 py-3 rounded-xl  text-[#ddb60a] font-semibold p-2 transition duration-300 ease-in-out">
                            <h3 class="text-xl md:text-2xl lg:text-3xl font-bold">
                                Walking on the Village
                            </h3>
                        </a>
                        <div class="flex gap-5 md:gap-10 items-center px-5">
                            <a href="#" target="_self" rel="noopener noreferrer" aria-label="event-1"
                                class="inline-block text-lg w-fit my-6 px-10 py-2 border-2 rounded-full border-[#ddb60a] bg-[#ddb60a] text-white font-semibold p-2 transition  duration-300 ease-in-out">
                                Travel
                            </a>
                            <span>
                                <i class="fa fa-calendar text-[#ddb60a]" aria-hidden="true"></i> January 17, 2024
                            </span>

                        </div>
                        <p class="px-5 text-lg text-slate-500">
                            Join us for the ultimate winter party at Megeve. With live music, delicious food, and plenty
                            of
                            drinks, this is the perfect way to kick off the season.
                        </p>

                    </div>
                </div>
            </div>

            {{-- Card-4 --}}
            <div class="w-full flex flex-col justify-center md:hover:scale-105 duration-500 pb-52">
                <div class="relative">
                    <a href="#" target="_self" rel="noopener noreferrer" aria-label="event-4">
                        <img class="relative" src="assets/events/event4.webp" alt="exhibition_stand_1"
                            loading="lazy" />
                    </a>

                    <div
                        class="absolute flex flex-col -bottom-48 rounded-xl py-5 border border-[#ddb60a] bg-white left-8  w-[90%]">
                        <a href="#" target="_self" rel="noopener noreferrer" aria-label="event-4"
                            class="inline-block px-6 py-3 rounded-xl  text-[#ddb60a] font-semibold p-2 transition duration-300 ease-in-out">
                            <h3 class="text-xl md:text-2xl lg:text-3xl font-bold">
                                Soccer Cup Final
                            </h3>
                        </a>
                        <div class="flex gap-5 md:gap-10 items-center px-5">
                            <a href="#" target="_self" rel="noopener noreferrer" aria-label="event-1"
                                class="inline-block text-lg w-fit my-6 px-8 py-2 border-2 rounded-full border-[#ddb60a] bg-[#ddb60a] text-white font-semibold p-2 transition  duration-300 ease-in-out">
                                Sports
                            </a>
                            <span>
                                <i class="fa fa-calendar text-[#ddb60a]" aria-hidden="true"></i> January 17, 2024
                            </span>

                        </div>
                        <p class="px-5 text-lg text-slate-500">
                            Join us for the ultimate winter party at Megeve. With live music, delicious food, and plenty
                            of
                            drinks, this is the perfect way to kick off the season.
                        </p>

                    </div>
                </div>
            </div>
            {{-- Card-5  --}}
            <div class="w-full flex flex-col justify-center md:hover:scale-105 duration-500 pb-52">
                <div class="relative">
                    <a href="#" target="_self" rel="noopener noreferrer" aria-label="event-5">
                        <img class="relative" src="assets/events/event5.webp" alt="exhibition_stand_1"
                            loading="lazy" />
                    </a>

                    <div
                        class="absolute flex flex-col -bottom-48 rounded-xl py-5 border border-[#ddb60a] bg-white left-8  w-[90%]">
                        <a href="#" target="_self" rel="noopener noreferrer" aria-label="event-1"
                            class="inline-block px-6 py-3 rounded-xl  text-[#ddb60a] font-semibold p-2 transition duration-300 ease-in-out">
                            <h3 class="text-xl md:text-2xl lg:text-3xl font-bold">
                                Xtra Technology Conference
                            </h3>
                        </a>
                        <div class="flex gap-5 md:gap-10 items-center px-5">
                            <a href="#" target="_self" rel="noopener noreferrer" aria-label="event-1"
                                class="inline-block text-lg w-fit my-6 px-3 py-2 border-2 rounded-full border-[#ddb60a] bg-[#ddb60a] text-white font-semibold p-2 transition  duration-300 ease-in-out">
                                Technology
                            </a>
                            <span>
                                <i class="fa fa-calendar text-[#ddb60a]" aria-hidden="true"></i> January 17, 2024
                            </span>

                        </div>
                        <p class="px-5 text-lg text-slate-500">
                            Join us for the ultimate winter party at Megeve. With live music, delicious food, and plenty
                            of
                            drinks, this is the perfect way to kick off the season.
                        </p>

                    </div>
                </div>
            </div>
            {{-- Card-6  --}}
            <div class="w-full flex flex-col justify-center md:hover:scale-105 duration-500 pb-52">
                <div class="relative">
                    <a href="#" target="_self" rel="noopener noreferrer" aria-label="event-6">
                        <img class="relative" src="assets/events/event6.webp" alt="exhibition_stand_1"
                            loading="lazy" />
                    </a>

                    <div
                        class="absolute flex flex-col -bottom-48 rounded-xl py-5 border border-[#ddb60a] bg-white left-8  w-[90%]">
                        <a href="#" target="_self" rel="noopener noreferrer" aria-label="event-6"
                            class="inline-block px-6 py-3 rounded-xl  text-[#ddb60a] font-semibold p-2 transition duration-300 ease-in-out">
                            <h3 class="text-xl md:text-2xl lg:text-3xl font-bold">
                                The Future of Currencies
                            </h3>
                        </a>
                        <div class="flex gap-5 md:gap-10 items-center px-5">
                            <a href="#" target="_self" rel="noopener noreferrer" aria-label="event-1"
                                class="inline-block text-lg w-fit my-6 px-3 py-2 border-2 rounded-full border-[#ddb60a] bg-[#ddb60a] text-white font-semibold p-2 transition  duration-300 ease-in-out">
                                Tech
                            </a>
                            <span>
                                <i class="fa fa-calendar text-[#ddb60a]" aria-hidden="true"></i> January 17, 2024
                            </span>

                        </div>
                        <p class="px-5 text-lg text-slate-500">
                            Join us for the ultimate winter party at Megeve. With live music, delicious food, and plenty
                            of
                            drinks, this is the perfect way to kick off the season.
                        </p>
                        {{-- <div class="flex gap-5 md:gap-10 items-center px-5">

                            <a>
                                <i class="fa fa-calendar text-[#ddb60a]" aria-hidden="true"></i> Showing
                            </a>
                            <a href="#" target="_self" rel="noopener noreferrer" aria-label="event-1">
                                <i class="fa fa-map-marker text-[#ddb60a]" aria-hidden="true"></i> France
                            </a>
                            <div class="flex items-center">
                                <i class="fa fa-tag p-3 text-xl md:text-2xl text-[#ddb60a]" aria-hidden="true"></i>$
                                150
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Card section-Ended --}}
</div>

<script>
    function closeAllDropdowns() {
        document.getElementById("categoryDropdown").classList.add("hidden");
        document.getElementById("locationDropdown").classList.add("hidden");
        document.getElementById("statusDropdown").classList.add("hidden");
        document.getElementById("sortByDropdown").classList.add("hidden");
    }

    function toggleDropdown(dropdownId) {
        closeAllDropdowns();
        const dropdown = document.getElementById(dropdownId);
        dropdown.classList.toggle("hidden");
        const button = dropdown.previousElementSibling;
        button.setAttribute('aria-expanded', dropdown.classList.contains("hidden") ? 'false' : 'true');
    }

    function selectOption(buttonId, option) {
        document.getElementById(buttonId).innerHTML = option + ' <i class="fa fa-angle-down pl-5 md:pl-10"></i>';
        closeAllDropdowns();

        // Set hidden input value dynamically based on the selection
        const inputName = buttonId.replace('Button', 'Input');
        document.getElementById(inputName).value = option;
    }

    // Close dropdowns if clicked outside
    document.addEventListener("click", function(event) {
        const isClickInsideAnyDropdown = ["categoryButton", "locationButton", "statusButton", "sortByButton"]
            .some(id =>
                document.getElementById(id).contains(event.target) ||
                document.getElementById(id.replace("Button", "Dropdown")).contains(event.target)
            );

        if (!isClickInsideAnyDropdown) {
            closeAllDropdowns();
        }
    });
</script>

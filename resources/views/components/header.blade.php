<!-- Header Component -->
<header
    class="bg-black bg-opacity-90 lg:bg-opacity-35 sticky lg:fixed w-full h-[81px] top-0 z-50  duration-300 font-poppins">
    <nav class="container mx-auto flex items-center justify-between p-4">
        <!-- Logo -->
        <a href="/" class="flex items-center">
            <img src="assets/xpro-service-logo.webp" alt="Xpro Services Company Logo" width="150" class="px-2"
                loading="eager" />
        </a>
        <!-- Hamburger Menu for Mobile -->
        <div class="lg:hidden">
            <button id="navbarToggler" class="text-3xl text-[#F7B925] focus:outline-none" aria-label="Toggle menu">
                <i class="fa fa-bars text-4xl"></i>
            </button>
            <button id="navbarClose" class="text-3xl text-[#F7B925] focus:outline-none hidden" aria-label="Close menu">
                <i class="fa fa-times text-4xl"></i>
            </button>
        </div>

        <!-- Navbar Links (hidden in mobile view) -->
        <ul id="navbarMenu"
            class="hidden font-bold lg:flex flex-col lg:flex-row items-center lg:space-x-6 mt-4 lg:mt-0 lg:mr-52">
            <li><a href="/" class="text-white hover:text-gray-300">HOME</a></li>
            <li><a href="/about_us" class="text-white hover:text-gray-300">ABOUT US</a></li>
            {{-- <li><a href="/calendar" class="text-white hover:text-gray-300">CALENDAR</a></li> --}}
            <li><a href="/blog_list1" class="text-white hover:text-gray-300">BLOGS</a></li>
            {{-- <li><a href="https://www.expostandservice.com" class="text-white hover:text-gray-300">RESOURCES</a></li> --}}

            {{-- <li class="relative group">
                <a href="/blog_list1" class="text-white hover:text-gray-300 flex items-center">
                    BLOGS <i class="fa fa-angle-down ml-1"></i>
                </a>
                <!-- Dropdown for Blogs -->
                <ul
                    class="hidden group-hover:flex gap-5 absolute top-full left-0 bg-black bg-opacity-90 flex-col rounded-lg p-2 w-60">
                    <li><a href="/blog_list1" class="text-white hover:text-gray-300">Blog-1</a></li>
                    <li><a href="#" class="text-white hover:text-gray-300">20x20</a></li>
                </ul>
            </li> --}}
            {{-- <li class="relative group">
                <a href="#" class="text-white hover:text-gray-300 flex items-center">
                    RESOURCES <i class="fa fa-angle-down ml-1"></i>
                </a>
                <!-- Dropdown for Resources -->
                <ul
                    class="hidden group-hover:flex gap-5 absolute top-full left-0 bg-black bg-opacity-90 flex-col rounded-lg p-2 w-60">
                    <li><a href="./company_profile.html" class="text-white hover:text-gray-300">Company Profile</a></li>
                    <li><a href="./what_we_do.html" class="text-white hover:text-gray-300">What We Do</a></li>
                    <li><a href="https://www.expostandservice.com/" class="text-white hover:text-gray-300">Global
                            Presence</a></li>
                </ul>
            </li> --}}
            <li><a href="./contact" class="text-white hover:text-gray-300">CONTACT US</a></li>
        </ul>
    </nav>
    <!-- Mobile Navbar Links (appears below header in mobile view) -->
    <ul id="mobileNavbarMenu"
        class="hidden lg:hidden fixed inset-x-0 py-28 px-16 top-[81px] h-full bg-black bg-opacity-90 duration-500 flex-col items-center space-y-10 z-60 text-4xl">
        <li><a href="/" class="text-white hover:text-gray-300">HOME</a></li>
        <li><a href="/about_us" class="text-white hover:text-gray-300">ABOUT US</a></li>
        {{-- <li><a href="/calendar" class="text-white hover:text-gray-300">CALENDAR</a></li> --}}
        <li><a href="/blog_list1" class="text-white hover:text-gray-300">BLOGS</a></li>
        {{-- <li><a href="https://www.expostandservice.com" class="text-white hover:text-gray-300">RESOURCES</a></li> --}}
        <li><a href="./contact" class="text-white hover:text-gray-300">CONTACT US</a></li>
    </ul>
</header>

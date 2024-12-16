<!-- Banner Section -->
<section class="font-poppins">
    <div class="relative w-full bg-cover bg-center h-[400px] lg:min-h-screen"
        style="background-image: url('assets/bg/bg1.webp');">
        <!-- Overlay -->
        <div class="absolute inset-0 bg-black bg-opacity-50"></div>

        <!-- Content Container -->
        <div
            class="relative flex flex-col justify-center items-center text-center text-white h-[400px] lg:min-h-screen p-4">
            <h2 class="text-3xl md:text-5xl lg:text-7xl font-extrabold uppercase">
                Let’s <span class="text-[#DDB60A]">connect</span>
            </h2>
            <span class="py-10 text-xl md:text-2xl lg:text-3xl font-semibold">we would love to create some sensational
                exhibition stand
                designs for
                your brand!</span>
            <!-- Button Container -->
            <div class="flex flex-wrap justify-center mt-6 text-xl md:text-2xl space-x-4">
                <!-- Contact Us Button -->
                {{-- <a href="/contact" target="_self" rel="noopener noreferrer" aria-label="Contact Us"
                    class="inline-block px-6 py-3 border-2 border-white text-white font-semibold rounded-lg transition duration-300 ease-in-out hover:bg-white hover:text-black hover:border-transparent">
                    Contact Us
                </a> --}}

                <!-- Download Brochure Button -->
                <a href="https://iceagency.co.uk/pop-up-retail-solutions/" target="_blank" rel="noopener noreferrer"
                    aria-label="Download Brochure"
                    class="inline-block px-6 py-3 border-2 border-white text-white font-semibold rounded-lg transition duration-300 ease-in-out hover:bg-white hover:text-black hover:border-transparent">
                    Download Brochure
                </a>
            </div>
        </div>
    </div>
</section>

{{-- Body-Section --}}
<section class="flex flex-col md:flex-row justify-center items-center bg-[#E7E4E4] md:p-5 lg:p-10">

    {{-- Address-Section --}}
    <div class="flex flex-col w-full p-5 md:p-10 lg:p-16 gap-5 md:w-1/2 lg:h-2/3 bg-[#F9F9F9]">
        <h2 class="text-3xl md:text-4xl lg:text-5xl xl:text-6xl font-semibold text-center mb-6">Get in touch with us
        </h2>
        <p class="text-slate-500 text-xl md:text-2xl lg:text-3xl text-center">Do you need an enchanting stand for your
            showcase?
            Tell us about
            your stand
            specifications.</p>
        <div class="bg-white p-5 rounded-lg shadow-lg w-full max-w-4xl mx-auto mt-4 md:hover:scale-105 duration-700">
            <h4 class="text-2xl md:text-3xl flex items-center gap-5 font-semibold m-6"><i class="fa-solid fa-house"></i>
                Visit A Office</h4>
            <span class="text-slate-600 text-xl md:text-2xl ml-6">
                71-75 Shelton St, London WC2H 9JQ, United Kingdom
            </span>
        </div>
        <div class="bg-white p-5 rounded-lg shadow-lg w-full max-w-4xl mx-auto mt-4 md:hover:scale-105 duration-700">
            <h4 class="text-2xl md:text-3xl flex items-center gap-5 font-semibold m-6"><i class="fa fa-phone"
                    aria-hidden="true"></i>
                contact-us</h4>
            <span class="text-slate-600 text-xl md:text-2xl ml-6">
                +48 61 625 5501
            </span>
        </div>

        <div class="bg-white p-5 rounded-lg shadow-lg w-full max-w-4xl mx-auto mt-4 md:hover:scale-105 duration-700">
            <h4 class="text-2xl md:text-3xl flex items-center gap-5 font-semibold m-6"><i class="fa fa-envelope"
                    aria-hidden="true"></i>
                Email-us</h4>
            <span class="text-slate-600 text-xl md:text-2xl ml-6">
                enquiry@smart-floorings.com
            </span>
        </div>

    </div>

    <!-- Form Section -->

    <div class="bg-[#F9F9F9] p-5 lg:p-8 rounded-lg shadow-lg w-full md:w-1/2 m-5">
        <h2 class="text-2xl md:text-3xl lg:text-4xl xl:text-5xl font-semibold text-center mb-6">Exhibition
            Registration Form</h2>

        <form id="exhibitionForm" class="px-5 max-w-5xl">
            <!-- First Row (Contact Name & Phone) -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-4">
                <div class="hover:scale-105 duration-700">
                    <label for="contactName" class="block text-xl font-medium text-gray-700">Contact Name</label>
                    <input type="text" id="contactName" name="contactName"
                        class="mt-1 p-2 w-full border border-gray-300 rounded-md" required>
                </div>
                <div class="hover:scale-105 duration-700">
                    <label for="phone" class="block text-xl font-medium text-gray-700">Phone</label>
                    <input type="tel" id="phone" name="phone"
                        class="mt-1 p-2 w-full border border-gray-300 rounded-md" required>
                </div>
            </div>

            <!-- Second Row (Email & City) -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-4">
                <div class="hover:scale-105 duration-700">
                    <label for="email" class="block text-xl font-medium text-gray-700">Email</label>
                    <input type="email" id="email" name="email"
                        class="mt-1 p-2 w-full border border-gray-300 rounded-md" required>
                </div>
                <div class="hover:scale-105 duration-700">
                    <label for="city" class="block text-xl font-medium text-gray-700">City</label>
                    <input type="text" id="city" name="city"
                        class="mt-1 p-2 w-full border border-gray-300 rounded-md" required>
                </div>
            </div>

            <!-- Third Row (Company Name & Exhibition Name) -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-4">
                <div class="hover:scale-105 duration-700">
                    <label for="companyName" class="block text-xl font-medium text-gray-700">Company Name</label>
                    <input type="text" id="companyName" name="companyName"
                        class="mt-1 p-2 w-full border border-gray-300 rounded-md" required>
                </div>
                <div class="hover:scale-105 duration-700">
                    <label for="exhibitionName" class="block text-xl font-medium text-gray-700">Exhibition
                        Name</label>
                    <input type="text" id="exhibitionName" name="exhibitionName"
                        class="mt-1 p-2 w-full border border-gray-300 rounded-md" required>
                </div>
            </div>

            <!-- Fourth Row (Stand Size & Budget) -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-4">
                <div class="hover:scale-105 duration-700">
                    <label for="standSize" class="block text-xl font-medium text-gray-700">Stand Size</label>
                    <input type="text" id="standSize" name="standSize"
                        class="mt-1 p-2 w-full border border-gray-300 rounded-md" required>
                </div>
                <div class="hover:scale-105 duration-700">
                    <label for="budget" class="block text-xl font-medium text-gray-700">Budget</label>
                    <input type="text" id="budget" name="budget"
                        class="mt-1 p-2 w-full border border-gray-300 rounded-md" required>
                </div>
            </div>

            <!-- File Input -->
            <div class="mb-4">
                <label for="file" class="block text-xl font-medium text-gray-700">Choose File</label>
                <input type="file" id="file" name="file"
                    class="mt-1 p-2 w-full border border-gray-300 rounded-md">
            </div>

            <!-- Message Section -->
            <div class="mb-4 hover:scale-105 duration-700">
                <label for="message" class="block text-xl font-medium text-gray-700">Message</label>
                <textarea id="message" name="message" class="mt-1 p-2 w-full border border-gray-300 rounded-md h-32"
                    placeholder="Enter your message here..."></textarea>
            </div>

            <!-- Submit Button -->
            <div class="flex justify-center">
                <button type="submit"
                    class="bg-[#DDB60A] hover:bg-white duration-700 text-white hover:border-2 hover:border-[#DDB60A] hover:text-[#DDB60A] px-6 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-orange-300">Submit</button>
            </div>
        </form>
    </div>
</section>

{{-- Location-Section --}}
<section
    class="grid grid-cols-1 md:grid-cols-2 gap-10 md:gap-14 m-5 justify-around items-center md:p-5 lg:p-10 md:mx-10 lg:mx-28">

    <div
        class="bg-white p-5 md:p-10 rounded-lg shadow-lg shadow-black w-full max-w-4xl mx-auto mt-4 md:hover:scale-105 duration-700">
        <h4 class="text-2xl md:text-3xl flex items-center gap-5 font-semibold m-6"><i class="fa-solid fa-house"></i>
            UK Office</h4>
        <span class="text-slate-600 text-xl md:text-2xl ml-6">
            71-75 Shelton St, London WC2H 9JQ, United Kingdom
        </span>
    </div>

    <div
        class="bg-white p-5 md:p-10 rounded-lg shadow-lg shadow-black w-full max-w-4xl mx-auto mt-4 md:hover:scale-105 duration-700">
        <h4 class="text-2xl md:text-3xl flex items-center gap-5 font-semibold m-6"><i class="fa-solid fa-house"></i>
            Poland Office</h4>
        <span class="text-slate-600 text-xl md:text-2xl ml-6">
            Poreba 13b poreba 63-233, Poland
        </span>
    </div>

    <div
        class="bg-white p-5 md:p-10 rounded-lg shadow-lg shadow-black w-full max-w-4xl mx-auto mt-4 md:hover:scale-105 duration-700">
        <h4 class="text-2xl md:text-3xl flex items-center gap-5 font-semibold m-6"><i class="fa-solid fa-house"></i>
            USA Office</h4>
        <span class="text-slate-600 text-xl md:text-2xl ml-6">
            401, Ryland St. Ste 200-A Reno NV 89502 Nevada, USA
        </span>
    </div>

    <div
        class="bg-white p-5 md:p-10 rounded-lg shadow-lg shadow-black w-full max-w-4xl mx-auto mt-4 md:hover:scale-105 duration-700">
        <h4 class="text-2xl md:text-3xl flex items-center gap-5 font-semibold m-6"><i class="fa-solid fa-house"></i>
            UAE Office</h4>
        <span class="text-slate-600 text-xl md:text-2xl ml-6">
            IFZA Business Park, DDP, Dubai Silicon Oasis, Dubai, UAE
        </span>
    </div>
</section>


<div>
    <img class="object-cover object-center mx-auto" src="assets/bg/map.webp" alt="exhibition_stand_1"
        loading="lazy" />
</div>

@push('scripts')
    <script>
        // JavaScript to handle form submission
        document.getElementById('exhibitionForm').addEventListener('submit', function(event) {
            event.preventDefault();
            alert('Form Submitted Successfully!');
            // Additional functionality for form submission can go here
        });
    </script>
@endpush

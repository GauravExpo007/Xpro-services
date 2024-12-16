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

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
        <h2 class="text-2xl md:text-3xl lg:text-4xl xl:text-5xl font-semibold text-center mb-6">Contact Us</h2>

        <form id="exhibitionForm" class="px-5 max-w-5xl">
            <!-- First Row (Contact Name & Phone) -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-4">
                <div class="hover:scale-105 duration-700">
                    <label for="contactName" class="block text-xl font-medium text-gray-700">Contact Name</label>
                    <input type="text" id="contactName" name="contactName"
                        class="mt-1 p-2 w-full border border-gray-300 rounded-md" required>
                </div>
                <div class="hover:scale-105 duration-700">
                    <label for="companyName" class="block text-xl font-medium text-gray-700">Company Name</label>
                    <input type="text" id="companyName" name="companyName"
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
                    <label for="phone" class="block text-xl font-medium text-gray-700"
                        onchange="updateCountryCode(this)">Phone</label>
                    <div class="flex mt-1">
                        <!-- Country Code Dropdown -->
                        <select id="country-code" name="country-code"
                            class="w-[67px] p-2 border border-gray-300 rounded-l-md bg-white text-gray-700">
                            <option value="+1" data-country="United States">+1 (United States)</option>
                            <option value="+44" data-country="United Kingdom">+44 (United Kingdom)</option>
                            <option value="+91" data-country="India">+91 (India)</option>
                            <option value="+61" data-country="Australia">+61 (Australia)</option>
                            <option value="+81" data-country="Japan">+81 (Japan)</option>
                            <option value="+49" data-country="Germany">+49 (Germany)</option>
                            <option value="+33" data-country="France">+33 (France)</option>
                            <option value="+39" data-country="Italy">+39 (Italy)</option>
                            <option value="+86" data-country="China">+86 (China)</option>
                            <option value="+7" data-country="Russia">+7 (Russia)</option>
                            <option value="+55" data-country="Brazil">+55 (Brazil)</option>
                            <option value="+27" data-country="South Africa">+27 (South Africa)</option>
                            <option value="+34" data-country="Spain">+34 (Spain)</option>
                            <option value="+62" data-country="Indonesia">+62 (Indonesia)</option>
                            <option value="+234" data-country="Nigeria">+234 (Nigeria)</option>
                            <option value="+52" data-country="Mexico">+52 (Mexico)</option>
                            <option value="+63" data-country="Philippines">+63 (Philippines)</option>
                            <option value="+64" data-country="New Zealand">+64 (New Zealand)</option>
                            <option value="+82" data-country="South Korea">+82 (South Korea)</option>
                            <option value="+60" data-country="Malaysia">+60 (Malaysia)</option>
                            <option value="+65" data-country="Singapore">+65 (Singapore)</option>
                            <option value="+93" data-country="Afghanistan">+93 (Afghanistan)</option>
                            <option value="+355" data-country="Albania">+355 (Albania)</option>
                            <option value="+213" data-country="Algeria">+213 (Algeria)</option>
                            <option value="+376" data-country="Andorra">+376 (Andorra)</option>
                            <option value="+244" data-country="Angola">+244 (Angola)</option>
                            <option value="+54" data-country="Argentina">+54 (Argentina)</option>
                            <option value="+43" data-country="Austria">+43 (Austria)</option>
                            <option value="+973" data-country="Bahrain">+973 (Bahrain)</option>
                            <option value="+880" data-country="Bangladesh">+880 (Bangladesh)</option>
                            <option value="+32" data-country="Belgium">+32 (Belgium)</option>
                            <option value="+359" data-country="Bulgaria">+359 (Bulgaria)</option>
                            <option value="+1-246" data-country="Barbados">+1-246 (Barbados)</option>
                            <option value="+95" data-country="Myanmar">+95 (Myanmar)</option>
                            <option value="+964" data-country="Iraq">+964 (Iraq)</option>
                            <option value="+98" data-country="Iran">+98 (Iran)</option>
                            <option value="+353" data-country="Ireland">+353 (Ireland)</option>
                            <option value="+972" data-country="Israel">+972 (Israel)</option>
                            <option value="+962" data-country="Jordan">+962 (Jordan)</option>
                            <option value="+254" data-country="Kenya">+254 (Kenya)</option>
                            <option value="+965" data-country="Kuwait">+965 (Kuwait)</option>
                            <option value="+961" data-country="Lebanon">+961 (Lebanon)</option>
                            <option value="+352" data-country="Luxembourg">+352 (Luxembourg)</option>
                            <option value="+960" data-country="Maldives">+960 (Maldives)</option>
                            <option value="+230" data-country="Mauritius">+230 (Mauritius)</option>
                            <option value="+92" data-country="Pakistan">+92 (Pakistan)</option>
                            <option value="+507" data-country="Panama">+507 (Panama)</option>
                            <option value="+351" data-country="Portugal">+351 (Portugal)</option>
                            <option value="+974" data-country="Qatar">+974 (Qatar)</option>
                            <option value="+966" data-country="Saudi Arabia">+966 (Saudi Arabia)</option>
                            <option value="+94" data-country="Sri Lanka">+94 (Sri Lanka)</option>
                            <option value="+46" data-country="Sweden">+46 (Sweden)</option>
                            <option value="+41" data-country="Switzerland">+41 (Switzerland)</option>
                            <option value="+255" data-country="Tanzania">+255 (Tanzania)</option>
                            <option value="+66" data-country="Thailand">+66 (Thailand)</option>
                            <option value="+971" data-country="United Arab Emirates">+971 (United Arab Emirates)
                            </option>
                            <option value="+58" data-country="Venezuela">+58 (Venezuela)</option>
                            <option value="+263" data-country="Zimbabwe">+263 (Zimbabwe)</option>

                        </select>
                        <!-- Phone Number Input -->
                        <input type="tel" id="phone" name="phone"
                            class="p-2 w-full border-t border-r border-b border-gray-300 rounded-r-md" required
                            placeholder="Enter your phone number">
                    </div>
                </div>


            </div>

            <!-- Third Row (Company Name & Exhibition Name) -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-4">

                <div class="hover:scale-105 duration-700">
                    <label for="exhibitionName" class="block text-xl font-medium text-gray-700">Exhibition
                        Name</label>
                    <input type="text" id="exhibitionName" name="exhibitionName"
                        class="mt-1 p-2 w-full border border-gray-300 rounded-md" required>
                </div>
                <div class="hover:scale-105 duration-700">
                    <label for="city" class="block text-xl font-medium text-gray-700">City</label>
                    <input type="text" id="city" name="city"
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

@push('scripts')
<script>
    function updateCountryCode() {
        var select = document.getElementById('country-code');
        var selectedValue = select.options[select.selectedIndex].value;
        document.getElementById('phone').value = selectedValue; // Set country code as phone number input value
    }
</script>
@endpush
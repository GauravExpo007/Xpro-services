
<div class="bg-slate-500 pt-36 md:py-36 flex items-center justify-center min-h-screen">

    <div class="bg-orange-200 p-8 rounded-lg shadow-lg w-full max-w-3xl">
        <h1 class="text-3xl font-semibold text-center mb-6">Exhibition Registration Form</h1>

        <form id="exhibitionForm">
            <!-- First Row (Contact Name & Phone) -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-4">

                <div class=" hover:scale-105 duration-500">
                    <label for="contactName" class="block text-xl font-medium text-gray-700">Contact Name</label>
                    <input type="text" id="contactName" name="contactName" class="mt-1 p-2 w-full border border-gray-300 rounded-md" required>
                </div>

              <div class=" hover:scale-105 duration-500">
                    <label for="phone" class="block text-xl  font-medium text-gray-700">Phone</label>
                    <input type="tel" id="phone" name="phone" class="mt-1 p-2 w-full border border-gray-300 rounded-md" required>
                </div>
            </div>

            <!-- Second Row (Email & City) -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-4">
                <div class=" hover:scale-105 duration-500">
                    <label for="email" class="block text-xl  font-medium text-gray-700">Email</label>
                    <input type="email" id="email" name="email" class="mt-1 p-2 w-full border border-gray-300 rounded-md" required>
                </div>

                <div class=" hover:scale-105 duration-500">
                    <label for="city" class="block text-xl  font-medium text-gray-700">City</label>
                    <input type="text" id="city" name="city" class="mt-1 p-2 w-full border border-gray-300 rounded-md" required>
                </div>
            </div>

            <!-- Third Row (Company Name & Exhibition Name) -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-4">
                <div class=" hover:scale-105 duration-500">
                    <label for="companyName" class="block text-xl  font-medium text-gray-700">Company Name</label>
                    <input type="text" id="companyName" name="companyName" class="mt-1 p-2 w-full border border-gray-300 rounded-md" required>
                </div>

                <div class=" hover:scale-105 duration-500">
                    <label for="exhibitionName" class="block text-xl  font-medium text-gray-700">Exhibition Name</label>
                    <input type="text" id="exhibitionName" name="exhibitionName" class="mt-1 p-2 w-full border border-gray-300 rounded-md" required>
                </div>
            </div>

            <!-- Fourth Row (Stand Size & Budget) -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 mb-4">
                <div class=" hover:scale-105 duration-500">
                    <label for="standSize" class="block text-xl  font-medium text-gray-700">Stand Size</label>
                    <input type="text" id="standSize" name="standSize" class="mt-1 p-2 w-full border border-gray-300 rounded-md" required>
                </div>

                <div class=" hover:scale-105 duration-500">
                    <label for="budget" class="block text-xl  font-medium text-gray-700">Budget</label>
                    <input type="text" id="budget" name="budget" class="mt-1 p-2 w-full border border-gray-300 rounded-md" required>
                </div>
            </div>

            <!-- File Input -->
            <div class="mb-4">
                <label for="file" class="block text-xl  font-medium text-gray-700">Choose File</label>
                <input type="file" id="file" name="file" class="mt-1 p-2 w-full border border-gray-300 rounded-md">
            </div>

            <!-- Message Section -->
            <div class="mb-4 hover:scale-105 duration-500">
                <label for="message" class="block text-xl  font-medium text-gray-700">Message</label>
                <textarea id="message" name="message" class="mt-1 p-2 w-full border border-gray-300 rounded-md h-32" placeholder="Enter your message here..."></textarea>
            </div>

            <!-- Submit Button -->
            <div class="flex justify-center">
                <button type="submit" class="bg-orange-500 hover:bg-white duration-500 text-white hover:text-orange-400 px-6 py-2 rounded-md focus:outline-none focus:ring-2 focus:ring-orange-300">Submit</button>
            </div>
        </form>
    </div>

    <script>
        // JavaScript to handle form submission
        document.getElementById('exhibitionForm').addEventListener('submit', function(event) {
            event.preventDefault();
            alert('Form Submitted Successfully!');
            // You can add more functionality here to handle the form submission, such as sending the data to a server.
        });
    </script>

</div>


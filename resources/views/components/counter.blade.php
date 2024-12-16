<section>
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 p-5 md:p-10 bg-[#DDB60A]">
        <div
            class="flex flex-col justify-center text-center shadow-lg shadow-black hover:scale-95 duration-500 py-8 backdrop-blur-lg rounded-3xl">
            <div class="flex justify-center items-center py-6">
                <div class="counter text-white md:text-6xl text-4xl" data-target="546"></div>
                <span class="md:text-5xl text-3xl text-white">+</span>
            </div>
            <span class="text-xl md:text-2xl lg:text-3xl font-semibold text-white">Exhibitions</span>
        </div>
        <div
            class="flex flex-col justify-center text-center shadow-lg shadow-black hover:scale-95 duration-500 py-8 backdrop-blur-lg rounded-3xl">

            <div class="flex justify-center items-center py-6">
                <div class="counter text-white md:text-5xl text-3xl" data-target="46"></div>
                <span class="md:text-6xl text-white text-4xl">+</span>
            </div>
            <span class="text-xl md:text-2xl lg:text-3xl font-semibold text-white">Cities</span>
        </div>
        <div
            class="flex flex-col justify-center text-center shadow-lg shadow-black hover:scale-95 duration-500 py-8 backdrop-blur-lg rounded-3xl">

            <div class="flex justify-center items-center py-6">
                <div class="counter text-white md:text-5xl text-3xl" data-target="452"></div>
                <span class="md:text-6xl text-4xl text-white">+</span>
            </div>
            <span class="text-xl md:text-2xl lg:text-3xl font-semibold text-white">Projects</span>
        </div>

        <div
            class="flex flex-col justify-center text-center shadow-lg shadow-black hover:scale-95 duration-500 py-8 backdrop-blur-lg rounded-3xl">

            <div class="flex justify-center items-center py-6">
                <div class="counter text-white md:text-5xl text-3xl" data-target="2556"></div>
                <span class="md:text-6xl text-4xl text-white">+</span>
            </div>
            <span class="text-xl md:text-2xl lg:text-3xl font-semibold text-white">No. Of Designs</span>
        </div>
    </div>

</section>

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const counters = document.querySelectorAll('.counter');

            counters.forEach(counter => {
                // Set initial counter value to 0
                counter.innerText = '0';

                const updateCounter = () => {
                    // Retrieve the target value from data-target attribute
                    const target = +counter.getAttribute('data-target');
                    const current = +counter.innerText;

                    // Calculate increment
                    const increment = target / 100;

                    // If the current count is below target, increment and update text
                    if (current < target) {
                        counter.innerText = `${Math.ceil(current + increment)}`;
                        setTimeout(updateCounter, 20);
                    } else {
                        counter.innerText = target; // Ensure it ends exactly at target
                    }
                };

                // Start counting animation
                updateCounter();
            });
        });
    </script>
@endpush

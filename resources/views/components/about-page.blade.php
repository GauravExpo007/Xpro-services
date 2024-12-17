<section class=" bg-gradient-to-b from-[#e7e4e4] to-[#f5f5f5] font-poppins">
    {{-- Header Section --}}
    <section
        style="background-image: url('assets/events/event5.webp'); background-attachment: fixed; background-size: cover; background-position: center;">
        <div
            class="text-white bg-black bg-opacity-75 p-5 py-40 md:p-10 md:py-40 lg:p-20 lg:py-60 flex flex-col gap-5 md:gap-10">
            {{-- <h2 class="text-white text-3xl md:text-5xl lg:text-7xl font-semibold">Megeve Winter Party</h2> --}}
            <div class="my-10 md:my-14 flex flex-col gap-5 md:gap-10 justify-center items-center text-center">
                <h2 class="text-3xl md:text-5xl lg:text-7xl">
                    About <span class="text-[#ddb60a] font-bold">Us</span>
                </h2>
                <p class="text-slate-300 font-bold text-2xl md:text-3xl">Exhibition Stand Design & Manufacturing Company
                    in
                    Europe</p>
            </div>
        </div>
    </section>


    <div
        class="w-full md:w-[90%] flex flex-col justify-center items-center mx-auto gap-5 md:gap-10 lg:gap-20 py-10 md:py-20">
        <!-- About Company Overview -->
        <div class="flex flex-col md:flex-row items-center gap-6">
            <img src="/assets/about/grow-better.webp" alt="Company Overview"
                class="w-full md:w-1/2 rounded-lg shadow-md p-5 m-5 hover:scale-105 duration-500" />
            <div class="flex flex-col gap-5 md:gap-10">
                <h3 class="w-2/3 text-3xl md:text-4xl font-semibold text-center md:text-left">
                    Our Mission: Helping Millions of Organizations Grow Better
                </h3>
                <p class="text-justify leading-8 text-slate-700">
                    We believe not just in growing bigger, but in growing better. And growing better means aligning the
                    success of your own business with the success of your customers. Win-win!

                </p>
            </div>

        </div>

        <!-- Achievements and Experience -->
        <div class="flex flex-col md:flex-row-reverse items-center gap-6 mt-10">
            <img src="/assets/about/Rangan-Halligan.webp" alt="Achievements"
                class="w-full md:w-1/2 rounded-lg shadow-md p-5 m-5 hover:scale-105 duration-500" />
            <div class="flex flex-col gap-5 md:gap-10">
                <h3 class="w-2/3 text-3xl md:text-4xl font-semibold text-center md:text-left">
                    Our Story
                </h3>
                <p class="text-justify leading-8 text-slate-700">
                    In 2004, fellow MIT graduate students Brian Halligan and Dharmesh Shah noticed a major shift in the
                    way people shop and purchase products. Buyers didn’t want to be interrupted by ads, they wanted
                    helpful information. In 2006, they founded HubSpot to help companies use that shift to grow better
                    with inbound marketing.
                    <br /><br />
                    Along the way, HubSpot expanded beyond marketing into a crafted, not cobbled suite of products that
                    create the frictionless customer experience that buyers expect today. Expertly led by CEO Yamini
                    Rangan, HubSpot uses its customer platform built on an AI-powered Smart CRM to help millions of
                    scaling organizations grow better.
                </p>
            </div>
        </div>

        {{-- Counter-Secion --}}
        <div class="w-full">
            @include('components.counter')
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




        <!-- Why Choose Us Section -->
        <div class="w-full mt-10">
            <h3 class="text-2xl md:text-4xl font-bold text-center mb-6">Why Choose Us?</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-10">
                <div
                    class="bg-white p-5 md:p-10 rounded-lg shadow-lg shadow-black w-full max-w-4xl mx-auto mt-4 md:hover:scale-105 duration-700">
                    <h4 class="font-bold text-xl md:text-2xl mb-4">Comprehensive Solutions</h4>
                    <p>From concept development to final installation, we manage every aspect of your exhibition stand
                        project.</p>
                </div>
                <div
                    class="bg-white p-5 md:p-10 rounded-lg shadow-lg shadow-black w-full max-w-4xl mx-auto mt-4 md:hover:scale-105 duration-700">
                    <h4 class="font-bold text-xl md:text-2xl mb-4">Global Presence</h4>
                    <p>With offices and facilities in multiple countries, we offer local expertise with a global
                        perspective.</p>
                </div>
                <div
                    class="bg-white p-5 md:p-10 rounded-lg shadow-lg shadow-black w-full max-w-4xl mx-auto mt-4 md:hover:scale-105 duration-700">
                    <h4 class="font-bold text-xl md:text-2xl mb-4">Innovative Designs</h4>
                    <p>Our creative team ensures your booth stands out with captivating designs tailored to your brand’s
                        needs.</p>
                </div>
                <div
                    class="bg-white p-5 md:p-10 rounded-lg shadow-lg shadow-black w-full max-w-4xl mx-auto mt-4 md:hover:scale-105 duration-700">
                    <h4 class="font-bold text-xl md:text-2xl mb-4">Unmatched Quality</h4>
                    <p>Using state-of-the-art technology and premium materials, we guarantee exceptional results that
                        meet the highest standards.</p>
                </div>
                <div
                    class="bg-white p-5 md:p-10 rounded-lg shadow-lg shadow-black w-full max-w-4xl mx-auto mt-4 md:hover:scale-105 duration-700">
                    <h4 class="font-bold text-xl md:text-2xl mb-4">Customer-Centric Approach</h4>
                    <p>Your satisfaction is our priority, and we work tirelessly to exceed your expectations at every
                        step.</p>
                </div>
            </div>
        </div>

        <!-- Vision and Mission -->
        <div class="w-full mt-10 text-slate-700">
            <h3 class="text-2xl md:text-4xl font-bold text-center mb-6">Our Vision & Mission</h3>
            <div class="flex flex-col md:flex-row items-center gap-6">
                <img src="/assets/ex2.webp" alt="Vision and Mission" class="w-full md:w-1/2 rounded-lg shadow-md" />
                <p class="text-justify md:text-left leading-8">
                    At Sensations Worldwide, our vision is to redefine the standards of exhibition stand design and
                    construction by blending innovation, artistry, and technology. We aim to empower brands with
                    engaging exhibition experiences that leave lasting impressions.
                    <br /><br />
                    Our mission is to be a trusted partner for businesses, delivering customized solutions that reflect
                    their identity and values while achieving measurable success at every event.
                    <br /><br />
                    At Sensations Worldwide, our vision is to redefine the standards of exhibition stand design and
                    construction by blending innovation, artistry, and technology.
                </p>
            </div>
        </div>

        <!-- Testimonials Section -->
        <div class="w-full mt-10 text-slate-700">
            <h3 class="text-2xl md:text-4xl font-bold text-center mb-6">What Our Clients Say</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div class="bg-white p-6 rounded-xl shadow-md">
                    <p class="italic">"Sensations Worldwide transformed our vision into reality. Their team was
                        professional, and the final exhibition stand was beyond our expectations!"</p>
                    <span class="block text-right font-bold mt-4">- John D., Marketing Head</span>
                </div>
                <div class="bg-white p-6 rounded-xl shadow-md">
                    <p class="italic">"Their innovative designs and attention to detail set them apart. The entire
                        process was seamless, and the outcome was impressive."</p>
                    <span class="block text-right font-bold mt-4">- Sarah L., Event Manager</span>
                </div>
            </div>
        </div>

        <!-- Call to Action -->
        <a href="#" target="_self" rel="noopener noreferrer" aria-label="Learn More About Us"
            class="inline-block my-10 px-6 py-3 border-2 rounded-xl border-[#ddb60a] bg-[#ddb60a] text-white font-semibold uppercase shadow-md transition duration-300 ease-in-out hover:bg-[#c9a008]">
            Learn More
        </a>

    </div>

</section>

@push('scripts')
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

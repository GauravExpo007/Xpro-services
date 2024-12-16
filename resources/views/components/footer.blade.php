<div class="pt-20 bg-black text-white flex flex-col gap-10 md:gap-20">
    <!-- Main Grid Section -->
    <div class="p-5 md:px-20 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-20 md:gap-10">
        <!-- Contact Section -->
        <section class="flex flex-col gap-6 items-center text-center md:items-start md:text-left">
            <h2 class="uppercase font-bold text-4xl">Contact</h2>
            <ul class="flex flex-col gap-4 text-slate-200">
                <li>
                    <i class="fa fa-map-marker text-orange-400 pr-3"></i>
                    Walking Street, Los Angeles, California, USA
                </li>
                <li>
                    <i class="fa fa-envelope text-orange-400 pr-3"></i>
                    <a href="mailto:enquiry@messemasters.com" target="_blank" class="hover:text-[#DDB60A]">
                        enquiry@messemasters.com
                    </a>
                </li>
                <li>
                    <i class="fa fa-phone text-orange-400 pr-3"></i>
                    <a href="tel:+41520663854" class="hover:text-[#DDB60A]">+41520 663854</a>
                </li>
                {{-- <li class="flex gap-5 pt-10 mx-auto lg:mx-0">
                    <a href="#" target="_blank" rel="noopener noreferrer">
                        <i
                            class="fa-brands fa-facebook rounded-full border-2 border-orange-400 p-4 bg-[#ddb60a] hover:bg-white hover:text-orange-400 duration-300"></i>
                    </a>
                    <a href="#" target="_blank" rel="noopener noreferrer">
                        <i
                            class="fa-brands fa-twitter rounded-full border-2 border-orange-400 p-4 bg-[#ddb60a] hover:bg-white hover:text-orange-400 duration-300"></i>
                    </a>
                    <a href="#" target="_blank" rel="noopener noreferrer">
                        <i
                            class="fa-brands fa-instagram rounded-full border-2 border-orange-400 p-4 bg-[#ddb60a] hover:bg-white hover:text-orange-400 duration-300"></i>
                    </a>
                    <a href="#" target="_blank" rel="noopener noreferrer">
                        <i
                            class="fa-brands fa-youtube rounded-full border-2 border-orange-400 p-4 bg-[#ddb60a] hover:bg-white hover:text-orange-400 duration-300"></i>
                    </a>
                    <a href="#" target="_blank" rel="noopener noreferrer">
                        <i
                            class="fa-brands fa-linkedin rounded-full border-2 border-orange-400 p-4 bg-[#ddb60a] hover:bg-white hover:text-orange-400 duration-300"></i>
                    </a>
                </li> --}}

            </ul>
        </section>

        <!-- Company Section -->
        <section class="flex flex-col gap-6 items-center md:items-start">
            <h2 class="uppercase font-bold text-4xl text-center md:text-left">Company</h2>
            <ul class="flex flex-col items-center md:items-start gap-4 text-slate-200">
                <li><a href="#" class="hover:text-[#DDB60A]">Home</a></li>
                <li><a href="#" class="hover:text-[#DDB60A]">About Us</a></li>
                <li><a href="#" class="hover:text-[#DDB60A]">What We Offer</a></li>
                <li><a href="#" class="hover:text-[#DDB60A]">Upcoming Events</a></li>
                <li><a href="#" class="hover:text-[#DDB60A]">Blogs</a></li>
                <li><a href="#" class="hover:text-[#DDB60A]">Contact Us</a></li>
            </ul>
        </section>

        <!-- Services Section -->
        <section class="flex flex-col gap-6 items-center md:items-start">
            <h2 class="uppercase font-bold text-4xl text-center md:text-left">Services</h2>
            <ul class="flex flex-col items-center md:items-start gap-4 text-slate-200">
                <li><a href="#" class="hover:text-[#DDB60A]">Consultation</a></li>
                <li><a href="#" class="hover:text-[#DDB60A]">Custom Exhibition Stand</a></li>
                <li><a href="#" class="hover:text-[#DDB60A]">Modular Exhibition Stand</a></li>
                <li><a href="#" class="hover:text-[#DDB60A]">3D Booth Design</a></li>
                <li><a href="#" class="hover:text-[#DDB60A]">Country Pavillion</a></li>
            </ul>
        </section>

        <!-- Our Apps Section -->
        <section class="flex flex-col gap-6 items-center text-center md:items-start md:text-left">
            <h2 class="uppercase font-bold text-4xl">Our Apps</h2>
            <p class="text-slate-200">Discover Eventchamp's innovative apps! Enhance attendee experience, manage events
                on-the-go, and stay
                connected through our suite of mobile solutions.</p>
            {{-- <div class="w-full max-w-sm">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d578046.3500709039!2d-119.9657230926732!3d38.964723083181546!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80980f5b92f334d5%3A0x95e47f2afb9d1329!2sWalker%20River%20Reservation%2C%20Schurz%2C%20NV!5e1!3m2!1sen!2sus!4v1733229734549!5m2!1sen!2sus"
                    width="100%" height="150" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div> --}}
        </section>
    </div>

    <!-- Bottom Section -->
    <div class="border-t border-zinc-500 pt-6 pb-4">
        <div class="px-5 md:px-20 text-center">
            <span>
                Copyright © <span id="year"></span> Expo Exhibit by
                <a href="https://digitalfyx.com/" target="_blank" rel="noopener noreferrer"
                    class="hover:text-[#DDB60A]">Digitalfyx</a>. All Rights Reserved.
            </span>
        </div>
    </div>
</div>

<script>
    // Dynamically set the current year
    document.getElementById('year').textContent = new Date().getFullYear();
</script>

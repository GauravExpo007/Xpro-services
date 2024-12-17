<div class="bg-[#E7E4E4]"
    style="background-image: url('assets/bg/bg.webp'); background-attachment: fixed; background-position: center;">
    <div class=" bg-black bg-opacity-10">
        {{-- Header Section --}}
        <section
            style="background-image: url('assets/events/event2.webp'); background-attachment: fixed; background-size: cover; background-position: center;">

            <div
                class="text-white bg-black bg-opacity-75 p-5 py-40 md:p-10 md:py-40 lg:p-20 lg:py-60 flex flex-col gap-5 md:gap-10">
                {{-- <h2 class="text-white text-3xl md:text-5xl lg:text-7xl font-semibold">Megeve Winter Party</h2> --}}

                <div class="pt-10 md:pt-20 flex flex-col gap-5 md:gap-10 lg:gap-20 justify-center items-center">
                    <h2 class="text-5xl text-white lg:text-7xl text-center pt-10 lg:pt-20">Events <span
                            class="text-[#ddb60a] font-bold">Calendar</span>
                    </h2>
                </div>
                <form id="searchForm" action="/search-results" method="GET"
                    class="flex flex-col xl:flex-row  gap-5 xl:gap-3 mx-auto">

                    <div class=" items-center">
                        <!-- Text Input -->
                        <input type="text" id="contactName" name="contactName"
                            class="p-3 w-96 border-2 border-white rounded-full bg-black bg-opacity-30 placeholder:text-center placeholder:text-white"
                            placeholder="e.g. events, meetups">
                    </div>

                    <!-- Search Button -->
                    <button type="submit"
                        class="px-10  py-2 rounded-lg duration-500 bg-[#ddb60a] text-white font-semibold rounded-r-md border-2 border-[#ddb60a] hover:text-[#ddb60a] hover:border-[#ddb60a] hover:bg-opacity-0 focus:outline-none focus:ring-2 focus:ring-orange-500">
                        Search
                    </button>
                </form>
            </div>
        </section>
        {{-- Header Section-Ended --}}



        {{-- Card-Section --}}
        <section class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-32 p-10 md:p-20 mt-20 lg:mt-40">
            <div
                class="relative flex flex-col justify-center text-center shadow-lg bg-white shadow-slate-400 backdrop-blur-lg h-96 rounded-3xl hover:scale-95 duration-500">
                <img src="./assets/sponsors/sponsor-1.webp" alt="Clients Icon"
                    class="bg-white md:absolute absolute left-[35%] top-[-25%] shadow-md shadow-[#EF5B2B] rounded-full w-[100px] h-[100px] p-[10px]">
                <div class="flex  flex-col justify-center items-center pt-6 md:pt-16 gap-10">
                    <h2 class=" text-3xl md:text-4xl">PSI 2025 Dusseldorf</h2>
                    <div class="py-2">
                        <p class="text-xl md:text-2xl"><i class="fa fa-map-marker text-[#EF5B2B] pr-2"
                                aria-hidden="true"></i>
                            Dusseldorf |
                            Germany</p>
                        <p class="text-xl md:text-2xl"><i class="fa fa-calendar text-[#EF5B2B] pr-2"
                                aria-hidden="true"></i>
                            12-Dec-2024 - 14-Dec-2024</p>
                    </div>
                    <div class="flex gap-10">
                        <button
                            class="bg-white text-[#EF5B2B] border-2 border-[#EF5B2B] hover:bg-[#F0632B] hover:text-white  duration-500 p-2 px-3 rounded-full "><i
                                class="fa-solid fa-comments"></i>
                            Get
                            A Quote</button>

                        <button
                            class="bg-white text-[#EF5B2B] border-2 border-[#EF5B2B] hover:bg-[#F0632B] hover:text-white  duration-500 p-2 px-3 rounded-full "><i
                                class="fa fa-eye" aria-hidden="true"></i> View Fair Details</button>
                    </div>

                </div>

            </div>

            <div
                class="relative flex flex-col justify-center text-center shadow-lg  bg-white shadow-slate-400 backdrop-blur-lg h-96 rounded-3xl hover:scale-95 duration-500">
                <img src="./assets/sponsors/sponsor-2.webp" alt="Clients Icon"
                    class="bg-white md:absolute absolute left-[35%] top-[-25%] shadow-md shadow-[#EF5B2B] rounded-full w-[100px] h-[100px] p-[10px]">
                <div class="flex  flex-col justify-center items-center pt-6 md:pt-16 gap-10">
                    <h2 class=" text-3xl md:text-4xl">DOMOTEX Hannover 2025</h2>
                    <div class="py-2">
                        <p class="text-xl md:text-2xl"><i class="fa fa-map-marker text-[#EF5B2B] pr-2"
                                aria-hidden="true"></i>
                            Dusseldorf |
                            Germany</p>
                        <p class="text-xl md:text-2xl"><i class="fa fa-calendar text-[#EF5B2B] pr-2"
                                aria-hidden="true"></i>
                            12-Dec-2024 - 14-Dec-2024</p>
                    </div>
                    <div class="flex gap-10">
                        <button
                            class="bg-white text-[#EF5B2B] border-2 border-[#EF5B2B] hover:bg-[#F0632B] hover:text-white  duration-500 p-2 px-3 rounded-full "><i
                                class="fa-solid fa-comments"></i>
                            Get
                            A Quote</button>

                        <button
                            class="bg-white text-[#EF5B2B] border-2 border-[#EF5B2B] hover:bg-[#F0632B] hover:text-white  duration-500 p-2 px-3 rounded-full "><i
                                class="fa fa-eye" aria-hidden="true"></i> View Fair Details</button>
                    </div>

                </div>

            </div>

            <div
                class="relative flex flex-col justify-center text-center shadow-lg bg-white shadow-slate-400 backdrop-blur-lg h-96 rounded-3xl hover:scale-95 duration-500">
                <img src="./assets/sponsors/sponsor-3.webp" alt="Clients Icon"
                    class="bg-white md:absolute absolute left-[35%] top-[-25%] shadow-md shadow-[#EF5B2B] rounded-full w-[100px] h-[100px] p-[10px]">
                <div class="flex  flex-col justify-center items-center pt-6 md:pt-16 gap-10">
                    <h2 class=" text-3xl md:text-4xl">Boot Dusseldorf 2025</h2>
                    <div class="py-2">
                        <p class="text-xl md:text-2xl"><i class="fa fa-map-marker text-[#EF5B2B] pr-2"
                                aria-hidden="true"></i>
                            Dusseldorf |
                            Germany</p>
                        <p class="text-xl md:text-2xl"><i class="fa fa-calendar text-[#EF5B2B] pr-2"
                                aria-hidden="true"></i>
                            12-Dec-2024 - 14-Dec-2024</p>
                    </div>
                    <div class="flex gap-10">
                        <button
                            class="bg-white text-[#EF5B2B] border-2 border-[#EF5B2B] hover:bg-[#F0632B] hover:text-white  duration-500 p-2 px-3 rounded-full "><i
                                class="fa-solid fa-comments"></i>
                            Get
                            A Quote</button>

                        <button
                            class="bg-white text-[#EF5B2B] border-2 border-[#EF5B2B] hover:bg-[#F0632B] hover:text-white  duration-500 p-2 px-3 rounded-full "><i
                                class="fa fa-eye" aria-hidden="true"></i> View Fair Details</button>
                    </div>

                </div>

            </div>

            <div
                class="relative flex flex-col justify-center text-center shadow-lg bg-white shadow-slate-400 backdrop-blur-lg h-96 rounded-3xl hover:scale-95 duration-500">
                <img src="./assets/sponsors/sponsor-4.webp" alt="Clients Icon"
                    class="bg-white md:absolute absolute left-[35%] top-[-25%] shadow-md shadow-[#EF5B2B] rounded-full w-[100px] h-[100px] p-[10px]">
                <div class="flex  flex-col justify-center items-center pt-6 md:pt-16 gap-10">
                    <h2 class=" text-3xl md:text-4xl">ISM Cologne 2025</h2>
                    <div class="py-2">
                        <p class="text-xl md:text-2xl"><i class="fa fa-map-marker text-[#EF5B2B] pr-2"
                                aria-hidden="true"></i>
                            Dusseldorf |
                            Germany</p>
                        <p class="text-xl md:text-2xl"><i class="fa fa-calendar text-[#EF5B2B] pr-2"
                                aria-hidden="true"></i>
                            12-Dec-2024 - 14-Dec-2024</p>
                    </div>
                    <div class="flex gap-10">
                        <button
                            class="bg-white text-[#EF5B2B] border-2 border-[#EF5B2B] hover:bg-[#F0632B] hover:text-white  duration-500 p-2 px-3 rounded-full "><i
                                class="fa-solid fa-comments"></i>
                            Get
                            A Quote</button>

                        <button
                            class="bg-white text-[#EF5B2B] border-2 border-[#EF5B2B] hover:bg-[#F0632B] hover:text-white  duration-500 p-2 px-3 rounded-full "><i
                                class="fa fa-eye" aria-hidden="true"></i> View Fair Details</button>
                    </div>

                </div>

            </div>

        </section>
    </div>


</div>

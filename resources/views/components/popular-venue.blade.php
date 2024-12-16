<div class="w-full"
    style="background-image: url('assets/events/event2.webp'); background-attachment: fixed; background-size: cover; background-position: center;">
    <div class="p-10 bg-black bg-opacity-50 font-poppins">
        <section class="my-10 md:my-14 flex flex-col gap-5 md:gap-10 lg:gap-20 justify-center items-center">
            <h2 class="text-3xl md:text-5xl lg:text-7xl text-center text-white">Popular <span
                    class="text-[#ddb60a] font-bold"> Venues</span></h2>
            <p class="text-white text-center">Find the ideal space to host your remarkable event and make lasting
                impressions.</p>
        </section>

        <!-- Grid Section -->
        <section class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-5 py-10 mx-auto">
            <!-- Dynamically Generated Cards -->
            <script>
                const eventDetails = [{
                        img: "https://res.cloudinary.com/dmm16x5vb/image/upload/v1729762212/flags/zkegv20hivxspuwdhi1o.webp",
                        country: "France"
                    },
                    {
                        img: "https://res.cloudinary.com/dmm16x5vb/image/upload/v1729762212/flags/hyecw1s1o5gub6ptgnfb.webp",
                        country: "Italy"
                    },
                    {
                        img: "https://res.cloudinary.com/dmm16x5vb/image/upload/v1729762212/flags/q11bcuguj29trgcae7ib.webp",
                        country: "Germany"
                    },
                    {
                        img: "https://res.cloudinary.com/dmm16x5vb/image/upload/v1729762212/flags/kf3fpb4fcnokgmfyvht2.webp",
                        country: "Spain"
                    },
                    {
                        img: "https://res.cloudinary.com/dmm16x5vb/image/upload/v1729762212/flags/zdeeyzfcwjsmitqmk5ix.webp",
                        country: "UK"
                    },
                    {
                        img: "https://res.cloudinary.com/dmm16x5vb/image/upload/v1729762212/flags/iwrjjae8qwx4tuq0unve.webp",
                        country: "USA"
                    },
                    {
                        img: "https://res.cloudinary.com/dmm16x5vb/image/upload/v1729762213/flags/lhpjawolltoylgkkcwri.webp",
                        country: "Canada"
                    },
                    {
                        img: "https://res.cloudinary.com/dmm16x5vb/image/upload/v1729762212/flags/vkygru2iqvedjejpchem.webp",
                        country: "UAE"
                    },
                    {
                        img: "https://res.cloudinary.com/dmm16x5vb/image/upload/v1729762211/flags/w49gpwya0vxuurdrb46q.webp",
                        country: "China"
                    },
                    {
                        img: "https://res.cloudinary.com/dmm16x5vb/image/upload/v1729762212/flags/escqn7xrhfitfvhozcuz.webp",
                        country: "India"
                    },
                    {
                        img: "https://res.cloudinary.com/dmm16x5vb/image/upload/v1729766851/flags/u5wvngxmwehgxowkm034.jpg",
                        country: "Spain"
                    },
                    {
                        img: "https://res.cloudinary.com/dmm16x5vb/image/upload/v1729762212/flags/vk9aca8sy7v0zto8frdq.webp",
                        country: "Thailand"
                    }
                ];

                document.write(
                    eventDetails.map((event, index) => `
                        <div class="flex flex-col justify-center items-center">
                            <a href="#" target="_self" rel="noopener noreferrer" aria-label="event-${index + 1}">
                                <img src="${event.img}" alt="exhibition_stand_${index + 1}" class="w-[150px] h-[150px] rounded-[50%] hover:scale-105 duration-500" loading="lazy" />
                            </a>
                            <p class="text-center text-white mt-3">${event.country}</p>
                        </div>`).join('')
                );
            </script>
        </section>
    </div>
</div>

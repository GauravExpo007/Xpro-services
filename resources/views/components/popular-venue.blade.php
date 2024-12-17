<div class="w-full"
    style="background-image: url('assets/events/event2.webp'); background-attachment: fixed; background-size: cover; background-position: center;">
    <div class="p-10 bg-gradient-to-b from-black via-transparent to-black bg-opacity-20 font-poppins">
        <!-- Header Section -->
        <section
            class="my-10 md:my-14 flex flex-col gap-5 md:gap-10 lg:gap-20 justify-center items-center animate-fade-in-down">
            <h2 class="text-3xl md:text-5xl lg:text-7xl text-center text-white drop-shadow-lg">
                Popular <span class="text-[#ddb60a] font-bold">Venues</span>
            </h2>
            <p class="text-white text-center text-lg md:text-xl">
                Find the ideal space to host your remarkable event and make lasting impressions.
            </p>
        </section>

        <!-- Grid Section -->
        <section class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-8 py-10 mx-auto">
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
                        <div class="flex flex-col justify-center items-center transform transition-transform duration-700 hover:scale-110 hover:-translate-y-2 animate-fade-in-up delay-${index * 150}">
                            <a href="#" target="_self" rel="noopener noreferrer" aria-label="event-${index + 1}">
                                <img src="${event.img}" alt="exhibition_stand_${index + 1}" class="w-[150px] h-[150px] rounded-full border-4 border-[#ddb60a] hover:shadow-[0px_0px_20px_5px_#ddb60a] duration-500" loading="lazy" />
                            </a>
                            <p class="text-center text-white mt-3 text-lg font-semibold hover:underline md:text-2xl lg:text-3xl">${event.country}</p>
                        </div>`).join('')
                );
            </script>
        </section>
    </div>
</div>

<style>
    /* Smooth fade-in animation */
    @keyframes fadeInDown {
        0% {
            opacity: 0;
            transform: translateY(-30px);
        }

        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes fadeInUp {
        0% {
            opacity: 0;
            transform: translateY(30px);
        }

        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Utility classes for animations */
    .animate-fade-in-down {
        animation: fadeInDown 1.5s ease-in-out;
    }

    .animate-fade-in-up {
        animation: fadeInUp 1.5s ease-in-out;
    }

    /* Delay utility for grid items */
    [class*="delay-"] {
        animation-delay: var(--delay, 0ms);
    }

    .delay-0 {
        --delay: 0ms;
    }

    .delay-150 {
        --delay: 150ms;
    }

    .delay-300 {
        --delay: 300ms;
    }

    .delay-450 {
        --delay: 450ms;
    }

    .delay-600 {
        --delay: 600ms;
    }

    .delay-750 {
        --delay: 750ms;
    }
</style>

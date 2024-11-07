@extends('template.layout')

@section('content')
  
    @include('components.banner')
    @include('components.event-section')
    @include('components.featured-event')
    @include('components.why-choose-us')
    @include('components.popular-venue')

@endsection  

    @push('scripts')
               <!-- JavaScript for Navbar Toggle -->
       <script>
        function toggleNavbar() {
            const navbarMenu = document.getElementById("navbarMenu");
            navbarMenu.classList.toggle("active");
        }
    </script>

    <script>
        // JavaScript to handle scroll effect on header
        window.addEventListener("scroll", function () {
            const header = document.querySelector("header");
            const scrollPosition = window.scrollY;

            if (scrollPosition > 100) { // Change 100 to the point you want the effect to trigger
                header.classList.add("scrolled");
            } else {
                header.classList.remove("scrolled");
            }
        });
    </script>

{{-- Event carousel JavaScript --}}
<script>
const container = document.getElementById('carousel-container');
const cardWidth = container.firstElementChild.offsetWidth + 20; // card width + gap

document.getElementById('nextButton').onclick = () => {
    container.scrollBy({ left: cardWidth, behavior: 'smooth' });
};

document.getElementById('prevButton').onclick = () => {
    container.scrollBy({ left: -cardWidth, behavior: 'smooth' });
};

</script>
    @endpush


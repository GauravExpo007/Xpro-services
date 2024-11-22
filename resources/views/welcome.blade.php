@extends('template.layout')

@section('content')
    <x-banner />
    <x-event-section />
    <x-featured-event />
    <x-why-choose-us />
    <x-popular-venue />
@endsection  

@push('scripts')
   <!-- JavaScript for Navbar Toggle and Scroll Effect -->
    <script>
    document.addEventListener('DOMContentLoaded', function () {
        const navbarToggler = document.getElementById("navbarToggler");
        const navbarClose = document.getElementById("navbarClose");
        const mobileNavbarMenu = document.getElementById("mobileNavbarMenu");

        // Toggle menu visibility on clicking the hamburger button
        navbarToggler.addEventListener('click', function () {
            mobileNavbarMenu.classList.remove("hidden");
            navbarToggler.classList.add("hidden");
            navbarClose.classList.remove("hidden");
        });

        // Hide the menu on clicking the close button
        navbarClose.addEventListener('click', function () {
            mobileNavbarMenu.classList.add("hidden");
            navbarToggler.classList.remove("hidden");
            navbarClose.classList.add("hidden");
        });

        // Scroll effect on header
        window.addEventListener("scroll", function () {
            const header = document.querySelector("header");
            if (window.scrollY > 100) {
                header.classList.add("bg-black", "bg-opacity-90");
            } else {
                header.classList.remove("bg-black", "bg-opacity-90");
            }
        });
    });
    </script>
@endpush


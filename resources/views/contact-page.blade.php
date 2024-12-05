@extends('template.layout')

@section('content')
    @include('components.contact-form')
@endsection

@push('scripts')
    <!-- JavaScript for Navbar Toggle and Scroll Effect -->

    <script src="/path/to/script.js" defer></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            console.log("Navbar script loaded");

            const navbarToggler = document.getElementById("navbarToggler");
            const navbarClose = document.getElementById("navbarClose");
            const mobileNavbarMenu = document.getElementById("mobileNavbarMenu");
            const header = document.querySelector("header");

            console.log({
                navbarToggler,
                navbarClose,
                mobileNavbarMenu
            });

            if (navbarToggler && navbarClose && mobileNavbarMenu) {
                navbarToggler.addEventListener('click', function() {
                    console.log("Hamburger menu clicked");
                    mobileNavbarMenu.classList.remove("hidden");
                    navbarToggler.classList.add("hidden");
                    navbarClose.classList.remove("hidden");
                });

                navbarClose.addEventListener('click', function() {
                    console.log("Close button clicked");
                    mobileNavbarMenu.classList.add("hidden");
                    navbarToggler.classList.remove("hidden");
                    navbarClose.classList.add("hidden");
                });
            } else {
                console.error("Navbar elements are missing on this page");
            }

            if (header) {
                window.addEventListener("scroll", function() {
                    if (window.scrollY > 100) {
                        header.classList.add("bg-black", "bg-opacity-90");
                    } else {
                        header.classList.remove("bg-black", "bg-opacity-90");
                    }
                });
            }
        });
    </script>
@endpush
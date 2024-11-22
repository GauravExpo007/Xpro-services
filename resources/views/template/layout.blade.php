<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!--========================== Start SEO tags ==========================-->

    <title>@yield('title', @env('APP_NAME'))</title>
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta name='robots' content='index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1' />
    <link rel="canonical" href="{{ url()->current() }}" />

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://yourwebsite.com/page-url">
    <meta property="og:title" content="Your Page Title">
    <meta property="og:description" content="A short description of your page for social media.">
    <meta property="og:image" content="https://yourwebsite.com/image.jpg">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:site_name" content="Your Website Name">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="https://yourwebsite.com/page-url">
    <meta name="twitter:title" content="Your Page Title">
    <meta name="twitter:description" content="A short description of your page for Twitter.">
    <meta name="twitter:image" content="https://yourwebsite.com/image.jpg">
    <meta name="twitter:site" content="@YourTwitterHandle">
    <meta name="twitter:creator" content="@YourTwitterHandle">

    <!-- Additional SEO Tags for Enhanced Search Visibility -->
    <meta name="author" content="Your Name or Company Name">
    <meta name="distribution" content="global">
    <meta name="rating" content="general">

    <!--=========================== End SEO tags ==========================-->
    <!--=========================== Start Styles ==========================-->
    <link rel="stylesheet" href="style/header.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    {{-- <link rel="stylesheet" href="style/banner.css"> --}}
    @vite('resources/css/app.css')
    {{-- custom css --}}
    @stack('styles')
    <!--=========================== End Styles ==========================-->
</head>
<body class="bg-[#F9F9F9]">
    {{-- Start Header --}}
    @include('components.header')
    {{-- End Header --}}

    {{-- Start Content --}}
        @yield('content')
    {{-- End Content --}}
    
    {{-- Start Footer --}}
    @include('components.footer')
    {{-- End Footer --}}
    <script src="js/lazysizes.min.js" async=""></script>
    <!-- custome scripts -->
    @stack('scripts')
</body>
</html>
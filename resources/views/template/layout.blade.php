<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/header.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    {{-- <link rel="stylesheet" href="style/banner.css"> --}}
    @vite('resources/css/app.css')
    
    {{-- custom css --}}
    @stack('styles')
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

    {{-- Custom JavaScript --}}
    @stack('scripts')
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/header.css">
    {{-- Link for animated icons of fafa --}}

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
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

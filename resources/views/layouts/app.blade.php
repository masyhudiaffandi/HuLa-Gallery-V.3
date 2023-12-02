<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- ... -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased">
    <header class="min-h-screen bg-gray-100 ">
        <!-- Navbar -->
        <nav class="bg-[#ffffff] p-[1.3vw] hidden md:flex justify-between items-center fixed top-0 right-0 left-0">
            <div class="logo">
                <img src="{{ asset('assets/img/logo.png') }}" class="w-[12vw]" alt="">
            </div>
            <div class="navigation flex gap-[2vw]">
                <a href="{{ route('photos.index') }}" class="text-[#1e1e1e]">Gallery</a>
                <a href="{{ route('photos.create') }}" class="text-[#1e1e1e]">Upload</a>
            </div>
        </nav>
        {{-- mobile navbar --}}
        <nav class="bg-[#ffffff] py-[3vw] md:hidden flex justify-between items-center fixed bottom-0 right-0 left-0 px-[14vw]">
            <div class="home">
                <a href="{{ route('photos.index') }}" class="text-[#1e1e1e]">
                    <i class="fa-solid fa-house" style="color: #1e1e1e;"></i>
                </a>
            </div>

            <div class="upload">
                <a href="{{ route('photos.create') }}" class="text-[#1e1e1e]">
                    <i class="fa-regular fa-square-plus fa-xl" style="color: #1e1e1e;"></i>
                </a>
            </div>

            <div class="username">
                <p class="text-[#1e1e1e]">
                    {{ Auth::user()->name }}
                </p>
            </div>
        </nav>

        <!-- Content -->
        @yield('content')
    </header>
</body>
</html>

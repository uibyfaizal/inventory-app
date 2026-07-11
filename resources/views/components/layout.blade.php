<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Font --}}
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    @vite('resources/css/app.css')

    <title>Stora Inventory</title>
</head>

<body class="bg-[#f5f7fb] font-[Poppins]">

    <!-- Mobile Header -->
    <header
        class="lg:hidden fixed top-0 left-0 right-0 h-16 bg-white border-b border-gray-200 shadow-sm flex items-center justify-between px-4 z-40">

        <!-- Hamburger -->
        <button
            onclick="toggleSidebar()"
            class="w-10 h-10 rounded-lg hover:bg-gray-100 transition">

            ☰

        </button>

        <!-- Logo -->
        <img
            src="/image/stora_logo.png"
            class="h-8"
            alt="Stora">

        <div class="w-10"></div>

    </header>

    <!-- Content -->
    <div class="pt-16 lg:pt-0">

        {{ $slot }}

    </div>

</body>
</html>
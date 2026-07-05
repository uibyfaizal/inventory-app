<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Stora - Inventory Management</title>

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600;700&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-slate-100">

<div class="min-h-screen flex">

    <!-- LEFT SIDE -->
    <div class="hidden lg:flex lg:w-1/2 bg-gradient-to-br from-emerald-600 to-green-500 text-white items-center justify-center p-14">

        <div class="max-w-md">

            <h1 class="text-5xl font-bold mb-5">
                📦 STORA
            </h1>

            <p class="text-2xl font-semibold mb-4">
                Inventory Management System
            </p>

            <p class="text-green-100 leading-8">
                Kelola stok barang, transaksi, dan inventaris toko dengan
                lebih cepat, mudah, dan modern.
            </p>

            <div class="mt-12">
                <img
                    src="../image/dashboard.png"
                    class="rounded-2xl shadow-2xl"
                >
            </div>

        </div>

    </div>

    <!-- RIGHT SIDE -->
    <div class="w-full lg:w-1/2 flex items-center justify-center p-6">

        <div class="w-full max-w-md">

            {{ $slot }}

        </div>

    </div>

</div>

</body>
</html>
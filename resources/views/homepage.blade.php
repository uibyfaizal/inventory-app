<x-layout>
    <x-navbar></x-navbar>

    {{-- Hero Section --}}
    <section class="max-w-7xl mx-auto px-6 py-20">

        <div class="grid lg:grid-cols-2 gap-16 items-center">

            <!-- LEFT -->
            <div class="text-center lg:text-left">

                <!-- Badge -->
                <span
                    class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-green-100 text-green-700 text-sm font-medium">
                    🚀 Modern Inventory System
                </span>

                <!-- Heading -->
                <h1 class="mt-6 text-4xl md:text-5xl lg:text-6xl font-bold leading-tight text-gray-900">

                    Kelola Inventory
                    <br>

                    <span class="text-green-600">
                        Lebih Cepat & Efisien
                    </span>

                </h1>

                <!-- Description -->
                <p class="mt-6 text-lg text-gray-500 max-w-xl mx-auto lg:mx-0 leading-relaxed">

                    Aplikasi inventory modern untuk membantu kamu mengelola
                    stok, produk, dan transaksi dengan lebih mudah,
                    cepat, dan terstruktur.

                </p>

                <!-- Button -->
                <div class="mt-8 flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">

                    <a href="/store-settings">

                        <button
                            class="px-7 py-3 rounded-xl bg-green-600 hover:bg-green-700 text-white font-semibold transition duration-300 shadow-md hover:shadow-lg">

                            Mulai Sekarang

                        </button>

                    </a>

                </div>

            </div>

            <!-- RIGHT -->
            <div class="flex justify-center">

                <div
                    class="w-full max-w-md rounded-3xl bg-white border border-gray-200 shadow-xl overflow-hidden">

                    <!-- Header -->
                    <div
                        class="bg-gradient-to-r from-green-600 to-green-500 text-white px-6 py-5">

                        <p class="text-sm opacity-80">
                            Dashboard
                        </p>

                        <h2 class="text-3xl font-bold mt-1">
                            1,248
                        </h2>

                        <p class="text-sm opacity-90">
                            Total Produk
                        </p>

                    </div>

                    <!-- Content -->
                    <div class="p-6 space-y-5">

                        <div class="flex justify-between items-center">

                            <span class="text-gray-500">
                                Stock Rendah
                            </span>

                            <span
                                class="bg-red-100 text-red-600 px-3 py-1 rounded-full text-sm font-semibold">

                                23

                            </span>

                        </div>

                        <div class="flex justify-between items-center">

                            <span class="text-gray-500">
                                Total Nilai
                            </span>

                            <span class="font-semibold text-gray-800">

                                Rp 24.500.000

                            </span>

                        </div>

                        <div class="border-t pt-5">

                            <div class="flex justify-between text-sm">

                                <span class="text-gray-500">
                                    Status
                                </span>

                                <span class="text-green-600 font-semibold">

                                    ● Sistem Aktif

                                </span>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>
    {{-- End of Hero Section --}}

    {{-- Features Section --}}
    <section class="py-24 bg-white">

        <div class="max-w-7xl mx-auto px-6">

            {{-- Heading --}}
            <div class="max-w-2xl mx-auto text-center">

                <span
                    class="inline-flex items-center px-4 py-2 rounded-full bg-green-100 text-green-700 text-sm font-medium">

                    ✨ Fitur Utama

                </span>

                <h2
                    class="mt-5 text-3xl md:text-4xl font-bold text-gray-900">

                    Semua yang Kamu Butuhkan
                    <br>
                    untuk Mengelola Inventory

                </h2>

                <p
                    class="mt-4 text-gray-500 text-lg">

                    Kelola stok barang, pantau transaksi,
                    dan tingkatkan produktivitas bisnismu
                    dengan antarmuka yang sederhana.

                </p>

            </div>

            {{-- Cards --}}
            <div
                class="mt-16 grid gap-8 md:grid-cols-2 lg:grid-cols-3">

                {{-- Card --}}
                <div
                    class="group rounded-3xl border border-gray-200 bg-white p-8 transition duration-300 hover:-translate-y-2 hover:border-green-200 hover:shadow-xl">

                    <div
                        class="flex h-14 w-14 items-center justify-center rounded-2xl bg-green-100 text-3xl">

                        ⚡

                    </div>

                    <h3
                        class="mt-6 text-xl font-semibold text-gray-900">

                        Cepat & Mudah

                    </h3>

                    <p
                        class="mt-3 leading-relaxed text-gray-500">

                        Tambah dan kelola barang hanya
                        dalam beberapa klik tanpa proses
                        yang rumit.

                    </p>

                </div>

                {{-- Card --}}
                <div
                    class="group rounded-3xl border border-gray-200 bg-white p-8 transition duration-300 hover:-translate-y-2 hover:border-green-200 hover:shadow-xl">

                    <div
                        class="flex h-14 w-14 items-center justify-center rounded-2xl bg-green-100 text-3xl">

                        🔒

                    </div>

                    <h3
                        class="mt-6 text-xl font-semibold text-gray-900">

                        Data Aman

                    </h3>

                    <p
                        class="mt-3 leading-relaxed text-gray-500">

                        Semua data inventory tersimpan
                        dengan aman dan dapat diakses
                        kapan saja.

                    </p>

                </div>

                {{-- Card --}}
                <div
                    class="group rounded-3xl border border-gray-200 bg-white p-8 transition duration-300 hover:-translate-y-2 hover:border-green-200 hover:shadow-xl">

                    <div
                        class="flex h-14 w-14 items-center justify-center rounded-2xl bg-green-100 text-3xl">

                        📊

                    </div>

                    <h3
                        class="mt-6 text-xl font-semibold text-gray-900">

                        Real-time Tracking

                    </h3>

                    <p
                        class="mt-3 leading-relaxed text-gray-500">

                        Pantau perubahan stok dan aktivitas
                        inventory secara real-time tanpa delay.

                    </p>

                </div>

            </div>

        </div>

    </section>
    {{-- End Features Section --}}

    {{-- Statistics Section --}}
    {{-- <section class="max-w-6xl mx-auto px-4 mb-24">

        <div class="bg-gradient-to-r from-blue-500 to-blue-600 rounded-3xl p-8 md:p-12 shadow-xl">

            <!-- Title -->
            <div class="text-center text-white mb-10">
                <h2 class="text-3xl md:text-4xl font-bold">
                    Dipercaya untuk mengelola ribuan inventory
                </h2>

                <p class="mt-3 text-blue-100 max-w-2xl mx-auto text-sm md:text-base">
                    Membantu bisnis dan toko mengelola stock barang dengan lebih cepat,
                    efisien, dan terorganisir.
                </p>
            </div>

            <!-- Stats Grid -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center">

                <!-- Item 1 -->
                <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-5">
                    <h3 class="text-3xl md:text-4xl font-bold text-white">
                        1K+
                    </h3>

                    <p class="text-blue-100 mt-2 text-sm">
                        Produk Dikelola
                    </p>
                </div>

                <!-- Item 2 -->
                <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-5">
                    <h3 class="text-3xl md:text-4xl font-bold text-white">
                        500+
                    </h3>

                    <p class="text-blue-100 mt-2 text-sm">
                        Transaksi Harian
                    </p>
                </div>

                <!-- Item 3 -->
                <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-5">
                    <h3 class="text-3xl md:text-4xl font-bold text-white">
                        99%
                    </h3>

                    <p class="text-blue-100 mt-2 text-sm">
                        Data Akurat
                    </p>
                </div>

                <!-- Item 4 -->
                <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-5">
                    <h3 class="text-3xl md:text-4xl font-bold text-white">
                        24/7
                    </h3>

                    <p class="text-blue-100 mt-2 text-sm">
                        Monitoring Stock
                    </p>
                </div>

            </div>

        </div>

    </section> --}}
    {{-- End Statistics Section --}}

    {{-- Dashboard Preview Section --}}
    <section class="py-24 bg-gray-50">

        <div class="max-w-7xl mx-auto px-6">

            <div class="grid lg:grid-cols-2 gap-16 items-center">

                <!-- LEFT -->
                <div>

                    <span
                        class="inline-flex items-center bg-green-100 text-green-700 px-4 py-2 rounded-full text-sm font-medium">

                        📦 Smart Dashboard

                    </span>

                    <h2 class="mt-5 text-4xl font-bold text-gray-900 leading-tight">

                        Semua Inventory
                        <br>

                        <span class="text-green-600">
                            Dalam Satu Dashboard
                        </span>

                    </h2>

                    <p class="mt-6 text-gray-500 leading-8">

                        Kelola stok barang, transaksi masuk dan keluar,
                        serta monitoring inventory secara realtime
                        dengan dashboard yang sederhana dan modern.

                    </p>

                    <div class="mt-10 space-y-6">

                        <div class="flex gap-4">

                            <div
                                class="w-12 h-12 rounded-xl bg-green-100 flex justify-center items-center">

                                ✅

                            </div>

                            <div>

                                <h4 class="font-semibold">

                                    Monitoring Stock

                                </h4>

                                <p class="text-gray-500 text-sm">

                                    Pantau stok barang kapan saja.

                                </p>

                            </div>

                        </div>

                        <div class="flex gap-4">

                            <div
                                class="w-12 h-12 rounded-xl bg-green-100 flex justify-center items-center">

                                📊

                            </div>

                            <div>

                                <h4 class="font-semibold">

                                    Analisa Transaksi

                                </h4>

                                <p class="text-gray-500 text-sm">

                                    Riwayat transaksi selalu tersimpan.

                                </p>

                            </div>

                        </div>

                        <div class="flex gap-4">

                            <div
                                class="w-12 h-12 rounded-xl bg-green-100 flex justify-center items-center">

                                ⚡

                            </div>

                            <div>

                                <h4 class="font-semibold">

                                    Cepat Digunakan

                                </h4>

                                <p class="text-gray-500 text-sm">

                                    Interface sederhana dan mudah dipahami.

                                </p>

                            </div>

                        </div>

                    </div>

                </div>

                <!-- RIGHT -->

                <div>

                    <div
                        class="bg-white rounded-3xl border border-gray-200 shadow-xl overflow-hidden">

                        <!-- Browser Header -->

                        <div
                            class="flex items-center gap-2 px-5 py-4 bg-gray-100 border-b">

                            <div class="w-3 h-3 bg-red-400 rounded-full"></div>
                            <div class="w-3 h-3 bg-yellow-400 rounded-full"></div>
                            <div class="w-3 h-3 bg-green-500 rounded-full"></div>

                        </div>

                        <!-- Dashboard -->

                        <div class="p-6">

                            <div class="grid grid-cols-2 gap-4 mb-6">

                                <div
                                    class="bg-green-50 rounded-2xl p-5">

                                    <p class="text-sm text-gray-500">

                                        Total Barang

                                    </p>

                                    <h3 class="text-3xl font-bold mt-2">

                                        1,248

                                    </h3>

                                </div>

                                <div
                                    class="bg-green-100 rounded-2xl p-5">

                                    <p class="text-sm text-gray-500">

                                        Stock Aman

                                    </p>

                                    <h3 class="text-3xl font-bold mt-2">

                                        1,102

                                    </h3>

                                </div>

                            </div>

                            <div
                                class="bg-gray-100 rounded-2xl h-44 flex items-center justify-center">

                                <span class="text-gray-400">

                                    Dashboard Preview

                                </span>

                            </div>

                            <div class="mt-5 space-y-3">

                                <div
                                    class="h-4 bg-gray-200 rounded-full w-full"></div>

                                <div
                                    class="h-4 bg-gray-200 rounded-full w-5/6"></div>

                                <div
                                    class="h-4 bg-gray-200 rounded-full w-3/4"></div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>
    {{-- End Dashboard Preview Section --}}

    {{-- Testimonial Section --}}
    {{-- <section class="max-w-6xl mx-auto px-4 mb-24">

        <!-- Title -->
        <div class="text-center mb-12">

            <span class="text-sm bg-blue-100 text-blue-600 px-3 py-1 rounded-full">
                ⭐ Testimonial
            </span>

            <h2 class="text-3xl md:text-4xl font-bold mt-4">
                Apa kata pengguna kami?
            </h2>

            <p class="text-gray-500 mt-3 max-w-2xl mx-auto">
                Banyak bisnis dan toko sudah mulai mengelola inventory
                dengan lebih cepat dan terorganisir menggunakan aplikasi ini.
            </p>

        </div>

        <!-- Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

            <!-- Card 1 -->
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 hover:shadow-lg transition">

                <div class="flex items-center gap-1 text-yellow-400 mb-4">
                    ⭐ ⭐ ⭐ ⭐ ⭐
                </div>

                <p class="text-gray-500 text-sm leading-relaxed">
                    “Aplikasi ini sangat membantu untuk memantau stock barang toko saya.
                    Sekarang semua data jadi lebih rapi dan mudah dicek.”
                </p>

                <div class="mt-6 flex items-center gap-3">

                    <div class="w-12 h-12 rounded-full bg-blue-100 flex items-center justify-center font-bold text-blue-600">
                        A
                    </div>

                    <div>
                        <h4 class="font-semibold">Andi Saputra</h4>
                        <p class="text-sm text-gray-400">
                            Owner Toko Elektronik
                        </p>
                    </div>

                </div>

            </div>

            <!-- Card 2 -->
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 hover:shadow-lg transition">

                <div class="flex items-center gap-1 text-yellow-400 mb-4">
                    ⭐ ⭐ ⭐ ⭐ ⭐
                </div>

                <p class="text-gray-500 text-sm leading-relaxed">
                    “Dashboard nya clean dan mudah dipahami.
                    Sangat membantu untuk tracking barang masuk dan keluar.”
                </p>

                <div class="mt-6 flex items-center gap-3">

                    <div class="w-12 h-12 rounded-full bg-green-100 flex items-center justify-center font-bold text-green-600">
                        R
                    </div>

                    <div>
                        <h4 class="font-semibold">Rina Amelia</h4>
                        <p class="text-sm text-gray-400">
                            Admin Gudang
                        </p>
                    </div>

                </div>

            </div>

            <!-- Card 3 -->
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 hover:shadow-lg transition">

                <div class="flex items-center gap-1 text-yellow-400 mb-4">
                    ⭐ ⭐ ⭐ ⭐ ⭐
                </div>

                <p class="text-gray-500 text-sm leading-relaxed">
                    “Fitur inventory dan transaksi real-time nya sangat membantu
                    untuk bisnis yang punya banyak stock barang.”
                </p>

                <div class="mt-6 flex items-center gap-3">

                    <div class="w-12 h-12 rounded-full bg-purple-100 flex items-center justify-center font-bold text-purple-600">
                        D
                    </div>

                    <div>
                        <h4 class="font-semibold">Dewi Kartika</h4>
                        <p class="text-sm text-gray-400">
                            Store Manager
                        </p>
                    </div>

                </div>

            </div>

        </div>

    </section> --}}
    {{-- End Testimonial Section --}}

    {{-- CTA Section --}}
    <section class="py-24">

        <div class="max-w-7xl mx-auto px-6">

            <div
                class="relative overflow-hidden rounded-[32px] border border-green-200 bg-gradient-to-br from-green-600 via-green-500 to-emerald-500 px-8 py-16 md:px-16 md:py-20 shadow-2xl">

                {{-- Background Blur --}}
                <div
                    class="absolute -top-20 -left-20 h-72 w-72 rounded-full bg-white/10 blur-3xl">
                </div>

                <div
                    class="absolute -bottom-20 -right-20 h-72 w-72 rounded-full bg-white/10 blur-3xl">
                </div>

                {{-- Content --}}
                <div class="relative z-10 text-center">

                    <span
                        class="inline-flex items-center rounded-full bg-white/20 px-4 py-2 text-sm font-medium text-white backdrop-blur">

                        🚀 Mulai Sekarang

                    </span>

                    <h2
                        class="mt-6 text-4xl md:text-5xl font-bold text-white leading-tight">

                        Kelola Inventory
                        <br>

                        Lebih Modern & Efisien

                    </h2>

                    <p
                        class="mx-auto mt-6 max-w-2xl text-lg leading-relaxed text-green-50">

                        Pantau stok barang, transaksi, dan aktivitas inventory
                        melalui satu dashboard yang cepat, sederhana,
                        dan mudah digunakan.

                    </p>

                    {{-- Button --}}
                    <div
                        class="mt-10 flex flex-col sm:flex-row justify-center gap-4">

                        <a href="/items">

                            <button
                                class="w-full sm:w-auto rounded-xl bg-white px-7 py-3 font-semibold text-green-700 transition hover:scale-105 hover:bg-green-50">

                                Mulai Kelola Inventory

                            </button>

                        </a>

                        <a href="#features">

                            <button
                                class="w-full sm:w-auto rounded-xl border border-white/30 bg-white/10 px-7 py-3 font-semibold text-white backdrop-blur transition hover:bg-white/20">

                                Pelajari Lebih Lanjut

                            </button>

                        </a>

                    </div>

                </div>

            </div>

        </div>

    </section>
    {{-- End CTA Section --}}

    {{-- Footer --}}
    <footer class="border-t border-gray-200 bg-white">

        <div class="max-w-7xl mx-auto px-6 py-16">

            <div class="grid gap-12 lg:grid-cols-4">

                {{-- Brand --}}
                <div class="lg:col-span-2">

                    <div class="flex lg:flex-1">
                        <a href="#" class="-m-1.5 p-1.5 text-lg font-semibold text-gray-900">
                            <div class="flex justify-center">
                                <img src="/image/stora_logo.png" class="w-20" alt="logo">
                                
                            </div>
                        </a>
                    </div>

                    <p
                        class="mt-5 max-w-md leading-7 text-gray-500">

                        Modern Inventory Management System yang membantu
                        bisnis mengelola stok, transaksi, dan aktivitas
                        inventory dengan lebih cepat, mudah, dan efisien.

                    </p>

                    <p
                        class="mt-5 text-sm text-gray-400">

                        Product by

                        <span class="font-semibold text-green-700">

                            Tekora

                        </span>

                    </p>

                </div>

                {{-- Navigation --}}
                <div>

                    <h3
                        class="font-semibold text-gray-900">

                        Navigation

                    </h3>

                    <ul class="mt-5 space-y-4 text-gray-500">

                        <li>

                            <a
                                href="/"
                                class="transition hover:text-green-600">

                                Beranda

                            </a>

                        </li>

                        <li>

                            <a
                                href="/items"
                                class="transition hover:text-green-600">

                                Gudang

                            </a>

                        </li>

                        <li>

                            <a
                                href="/transactions"
                                class="transition hover:text-green-600">

                                Transaksi

                            </a>

                        </li>

                        <li>

                            <a
                                href="/dashboard"
                                class="transition hover:text-green-600">

                                Dashboard

                            </a>

                        </li>

                    </ul>

                </div>

                {{-- Contact --}}
                <div>

                    <h3
                        class="font-semibold text-gray-900">

                        Contact

                    </h3>

                    <ul class="mt-5 space-y-4 text-gray-500">

                        <li>

                            📧
                            <br>

                            <span class="text-sm">

                                muh.rahmat.faisal.047@gmail.com

                            </span>

                        </li>

                        <li>

                            📍 Makassar, Indonesia

                        </li>

                        <li>

                            📞 +62 895-4146-79762

                        </li>

                    </ul>

                </div>

            </div>

            {{-- Bottom --}}
            <div
                class="mt-14 flex flex-col items-center justify-between gap-6 border-t border-gray-200 pt-8 md:flex-row">

                <p
                    class="text-center text-sm text-gray-400 md:text-left">

                    © {{ date('Y') }} Stora. All rights reserved.

                </p>

                {{-- Social --}}
                <div class="flex items-center gap-5">

                    <a
                        href="#"
                        class="text-gray-400 transition hover:text-green-600">

                        🌐

                    </a>

                    <a
                        href="#"
                        class="text-gray-400 transition hover:text-green-600">

                        💼

                    </a>

                    <a
                        href="#"
                        class="text-gray-400 transition hover:text-green-600">

                        📸

                    </a>

                    <a
                        href="#"
                        class="text-gray-400 transition hover:text-green-600">

                        📧

                    </a>

                </div>

            </div>

        </div>

    </footer>
    {{-- End Footer --}}
</x-layout>
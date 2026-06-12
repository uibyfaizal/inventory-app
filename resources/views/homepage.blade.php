<x-layout>

    <x-navbar></x-navbar>

    {{-- Hero Section --}}
    <section class="hero max-w-6xl mx-auto px-4 mt-20">

            <div class="flex flex-col-reverse md:flex-row items-center gap-10">

                <!-- LEFT TEXT -->
                <div class="flex-1 text-center md:text-left">

                    <span class="text-sm bg-blue-100 text-blue-600 px-3 py-1 rounded-full">
                        🚀 Modern Inventory System
                    </span>

                    <h1 class="text-3xl md:text-5xl font-bold mt-4 leading-tight">
                        Kelola inventory dengan mudah, <br>
                        <span class="text-blue-600">lebih cepat & efisien</span>
                    </h1>

                    <p class="text-gray-500 mt-4">
                        Aplikasi inventory sederhana untuk membantu kamu
                        mengelola stok, produk, dan bisnis dengan lebih terstruktur.
                    </p>

                    <!-- BUTTON -->
                    <div class="mt-6 flex flex-col sm:flex-row gap-3 justify-center md:justify-start mb-5">

                        <a href="/items">
                            <x-button>Mulai Sekarang</x-button>
                        </a>

                    </div>

                </div>

                <!-- RIGHT IMAGE / CARD -->
                <div class="flex-1 flex justify-center">

                    <div class="bg-white p-5 rounded-xl shadow-lg w-full max-w-sm">

                        <h2 class="font-semibold mb-3">📊 Dashboard</h2>

                        <div class="bg-blue-500 text-white p-4 rounded-lg">
                            <p>Total Produk</p>
                            <h1 class="text-2xl font-bold">1,248</h1>
                        </div>

                        <div class="mt-4 space-y-2 text-sm">
                            <div class="flex justify-between">
                                <span>Stock Rendah</span>
                                <span class="text-red-500">23</span>
                            </div>

                            <div class="flex justify-between">
                                <span>Total Nilai</span>
                                <span>Rp 24.500.000</span>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

    </section>
    {{-- End of Hero Section --}}

    {{-- Features Section --}}
    <section class="max-w-6xl mx-auto px-4 mt-50 mb-20">

            <!-- Title -->
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold">Fitur Unggulan</h2>
                <p class="text-gray-500 mt-2">
                    Semua yang kamu butuhkan untuk mengelola inventory dengan mudah
                </p>
            </div>

            <!-- Cards -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                <!-- Card 1 -->
                <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
                    <div class="text-blue-500 text-3xl mb-4">⚡</div>
                    <h3 class="font-semibold text-lg">Cepat & Mudah</h3>
                    <p class="text-gray-500 mt-2 text-sm">
                        Tambah dan kelola barang hanya dalam beberapa klik tanpa ribet.
                    </p>
                </div>

                <!-- Card 2 -->
                <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
                    <div class="text-green-500 text-3xl mb-4">🔒</div>
                    <h3 class="font-semibold text-lg">Data Aman</h3>
                    <p class="text-gray-500 mt-2 text-sm">
                        Data inventory kamu tersimpan dengan aman dan terstruktur.
                    </p>
                </div>

                <!-- Card 3 -->
                <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
                    <div class="text-purple-500 text-3xl mb-4">📊</div>
                    <h3 class="font-semibold text-lg">Real-time Tracking</h3>
                    <p class="text-gray-500 mt-2 text-sm">
                        Pantau stok dan perubahan data secara langsung tanpa delay.
                    </p>
                </div>

            </div>

    </section>
    {{-- End Features Section --}}

    {{-- Statistics Section --}}
<section class="max-w-6xl mx-auto px-4 mb-24">

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

</section>
{{-- End Statistics Section --}}

{{-- Dashboard Preview Section --}}
<section class="max-w-6xl mx-auto px-4 mb-24">

    <div class="grid grid-cols-1 md:grid-cols-2 gap-10 items-center">

        <!-- LEFT CONTENT -->
        <div>

            <span class="text-sm bg-blue-100 text-blue-600 px-3 py-1 rounded-full">
                📦 Smart Dashboard
            </span>

            <h2 class="text-3xl md:text-4xl font-bold mt-4 leading-tight">
                Pantau semua inventory <br>
                dalam satu dashboard
            </h2>

            <p class="text-gray-500 mt-4 leading-relaxed">
                Kelola stock barang, transaksi masuk & keluar,
                serta monitoring inventory secara real-time
                dengan tampilan dashboard yang sederhana dan mudah digunakan.
            </p>

            <!-- Features List -->
            <div class="mt-6 space-y-4">

                <div class="flex items-start gap-3">
                    <div class="bg-green-100 text-green-600 p-2 rounded-lg">
                        ✅
                    </div>

                    <div>
                        <h4 class="font-semibold">Monitoring Stock</h4>
                        <p class="text-gray-500 text-sm">
                            Pantau stock tersedia dan barang hampir habis.
                        </p>
                    </div>
                </div>

                <div class="flex items-start gap-3">
                    <div class="bg-blue-100 text-blue-600 p-2 rounded-lg">
                        📊
                    </div>

                    <div>
                        <h4 class="font-semibold">Analisa Transaksi</h4>
                        <p class="text-gray-500 text-sm">
                            Lihat riwayat transaksi dan aktivitas inventory.
                        </p>
                    </div>
                </div>

                <div class="flex items-start gap-3">
                    <div class="bg-purple-100 text-purple-600 p-2 rounded-lg">
                        ⚡
                    </div>

                    <div>
                        <h4 class="font-semibold">Akses Cepat</h4>
                        <p class="text-gray-500 text-sm">
                            Semua fitur penting dapat diakses hanya dalam beberapa klik.
                        </p>
                    </div>
                </div>

            </div>

        </div>

        <!-- RIGHT MOCKUP -->
        <div class="bg-white rounded-3xl shadow-xl border border-gray-100 p-6">

            <!-- Top -->
            <div class="flex justify-between items-center mb-6">

                <div>
                    <h3 class="font-bold text-lg">Inventory Dashboard</h3>
                    <p class="text-sm text-gray-400">
                        Monitoring Overview
                    </p>
                </div>

                <div class="bg-blue-500 text-white px-4 py-2 rounded-xl text-sm">
                    Live Data
                </div>

            </div>

            <!-- Stats -->
            <div class="grid grid-cols-2 gap-4 mb-6">

                <div class="bg-blue-50 p-4 rounded-2xl">
                    <p class="text-gray-500 text-sm">Total Barang</p>
                    <h2 class="text-2xl font-bold mt-1">1,248</h2>
                </div>

                <div class="bg-green-50 p-4 rounded-2xl">
                    <p class="text-gray-500 text-sm">Barang Aman</p>
                    <h2 class="text-2xl font-bold mt-1">1,102</h2>
                </div>

            </div>

            <!-- Activity -->
            <div class="space-y-3">

                <div class="flex justify-between items-center bg-gray-50 rounded-xl p-3">
                    <div>
                        <p class="font-medium text-sm">Laptop Asus</p>
                        <p class="text-xs text-gray-400">Stock Update</p>
                    </div>

                    <span class="text-green-500 text-sm font-semibold">
                        +10
                    </span>
                </div>

                <div class="flex justify-between items-center bg-gray-50 rounded-xl p-3">
                    <div>
                        <p class="font-medium text-sm">Mouse Logitech</p>
                        <p class="text-xs text-gray-400">Barang Keluar</p>
                    </div>

                    <span class="text-red-500 text-sm font-semibold">
                        -4
                    </span>
                </div>

                <div class="flex justify-between items-center bg-gray-50 rounded-xl p-3">
                    <div>
                        <p class="font-medium text-sm">Keyboard RGB</p>
                        <p class="text-xs text-gray-400">Barang Masuk</p>
                    </div>

                    <span class="text-green-500 text-sm font-semibold">
                        +8
                    </span>
                </div>

            </div>

        </div>

    </div>

</section>
{{-- End Dashboard Preview Section --}}

{{-- Testimonial Section --}}
<section class="max-w-6xl mx-auto px-4 mb-24">

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

</section>
{{-- End Testimonial Section --}}

{{-- CTA Section --}}
<section class="max-w-6xl mx-auto px-4 mb-24">

    <div class="bg-gradient-to-r from-blue-500 to-indigo-600 rounded-3xl p-8 md:p-14 text-center shadow-xl overflow-hidden relative">

        <!-- Decorative Blur -->
        <div class="absolute top-0 left-0 w-40 h-40 bg-white/10 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 right-0 w-52 h-52 bg-white/10 rounded-full blur-3xl"></div>

        <!-- Content -->
        <div class="relative z-10">

            <span class="bg-white/20 text-white px-4 py-1 rounded-full text-sm">
                🚀 Mulai Sekarang
            </span>

            <h2 class="text-3xl md:text-5xl font-bold text-white mt-5 leading-tight">
                Kelola inventory bisnis <br>
                lebih modern & efisien
            </h2>

            <p class="text-blue-100 mt-5 max-w-2xl mx-auto text-sm md:text-base leading-relaxed">
                Pantau stock barang, transaksi, dan aktivitas inventory
                dalam satu dashboard sederhana yang mudah digunakan.
            </p>

            <!-- Buttons -->
            <div class="mt-8 flex flex-col sm:flex-row justify-center gap-4">

                <a href="/items">
                    <button class="bg-white text-blue-600 px-6 py-3 rounded-xl font-semibold hover:bg-gray-100 transition w-full sm:w-auto">
                        Mulai Kelola Inventory
                    </button>
                </a>

                <a href="#">
                    <button class="border border-white/30 text-white px-6 py-3 rounded-xl font-semibold hover:bg-white/10 transition w-full sm:w-auto">
                        Pelajari Lebih Lanjut
                    </button>
                </a>

            </div>

        </div>

    </div>

</section>
{{-- End CTA Section --}}

{{-- Footer Section --}}
<footer class="bg-white border-t border-gray-100">

    <div class="max-w-6xl mx-auto px-4 py-12">

        <div class="grid grid-cols-1 md:grid-cols-4 gap-10">

            <!-- Brand -->
            <div class="md:col-span-2">

                <div class="flex items-center gap-2">

                    <div class="w-10 h-10 bg-blue-500 rounded-xl flex items-center justify-center text-white font-bold">
                        📦
                    </div>

                    <h2 class="text-xl font-bold">
                        Inventory App
                    </h2>

                </div>

                <p class="text-gray-500 mt-4 max-w-md leading-relaxed text-sm">
                    Aplikasi inventory modern untuk membantu bisnis
                    mengelola stock barang, transaksi, dan monitoring
                    inventory dengan lebih mudah dan efisien.
                </p>

            </div>

            <!-- Navigation -->
            <div>

                <h3 class="font-semibold mb-4">
                    Navigation
                </h3>

                <ul class="space-y-3 text-sm text-gray-500">

                    <li>
                        <a href="#" class="hover:text-blue-500 transition">
                            Home
                        </a>
                    </li>

                    <li>
                        <a href="/items" class="hover:text-blue-500 transition">
                            Inventory
                        </a>
                    </li>

                    <li>
                        <a href="#" class="hover:text-blue-500 transition">
                            Features
                        </a>
                    </li>

                    <li>
                        <a href="#" class="hover:text-blue-500 transition">
                            Dashboard
                        </a>
                    </li>

                </ul>

            </div>

            <!-- Contact -->
            <div>

                <h3 class="font-semibold mb-4">
                    Contact
                </h3>

                <ul class="space-y-3 text-sm text-gray-500">

                    <li class="font-size-2">
                        📧 muh.rahmat.faisal.047@gmail.com
                    </li>

                    <li>
                        📍 Indonesia | Makassar
                    </li>

                    <li>
                        📞 +62 895414679762
                    </li>

                </ul>

            </div>

        </div>

        <!-- Bottom -->
        <div class="border-t border-gray-100 mt-10 pt-6 flex flex-col md:flex-row justify-between items-center gap-4">

            <p class="text-sm text-gray-400 text-center md:text-left">
                © 2026 Inventory App. All rights reserved.
            </p>

            <!-- Social -->
            <div class="flex items-center gap-4 text-gray-400 text-lg">

                <a href="#" class="hover:text-blue-500 transition">
                    🌐
                </a>

                <a href="#" class="hover:text-blue-500 transition">
                    📘
                </a>

                <a href="#" class="hover:text-blue-500 transition">
                    📸
                </a>

                <a href="#" class="hover:text-blue-500 transition">
                    💼
                </a>

            </div>

        </div>

    </div>

</footer>
{{-- End Footer Section --}}

</x-layout>
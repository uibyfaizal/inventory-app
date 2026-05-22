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

</x-layout>
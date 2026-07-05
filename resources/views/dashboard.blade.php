<x-layout>

    <x-sidebar />

    <main class="ml-64 min-h-screen bg-[#f5f7fb]">

        <div class="max-w-7xl mx-auto py-8 px-8">

            {{-- Hero --}}
            <div class="bg-gradient-to-r from-green-600 to-emerald-500 rounded-3xl p-8 text-white shadow-lg mb-8">

                <p class="text-green-100 text-sm">
                    Inventory Management System
                </p>

                <h1 class="text-4xl font-bold mt-2">
                    Dashboard Stora 👋
                </h1>

                <p class="mt-3 text-green-100 max-w-2xl">
                    Pantau seluruh aktivitas gudang, stok barang, kategori, dan transaksi secara real-time dalam satu dashboard.
                </p>

            </div>


            {{-- Statistik --}}
            <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6">

                {{-- Barang --}}
                <div class="bg-white rounded-2xl shadow-sm hover:shadow-lg transition p-6">

                    <div class="flex justify-between">

                        <div>

                            <p class="text-gray-500">
                                Total Barang
                            </p>

                            <h2 class="text-4xl font-bold mt-3 text-gray-800">
                                {{ $totalItems }}
                            </h2>

                        </div>

                        <div class="w-14 h-14 rounded-2xl bg-green-100 flex items-center justify-center text-2xl">
                            📦
                        </div>

                    </div>

                </div>

                {{-- Kategori --}}
                <div class="bg-white rounded-2xl shadow-sm hover:shadow-lg transition p-6">

                    <div class="flex justify-between">

                        <div>

                            <p class="text-gray-500">
                                Total Kategori
                            </p>

                            <h2 class="text-4xl font-bold mt-3 text-gray-800">
                                {{ $totalCategories }}
                            </h2>

                        </div>

                        <div class="w-14 h-14 rounded-2xl bg-green-100 flex items-center justify-center text-2xl">
                            🗂️
                        </div>

                    </div>

                </div>

                {{-- Transaksi --}}
                <div class="bg-white rounded-2xl shadow-sm hover:shadow-lg transition p-6">

                    <div class="flex justify-between">

                        <div>

                            <p class="text-gray-500">
                                Total Transaksi
                            </p>

                            <h2 class="text-4xl font-bold mt-3 text-gray-800">
                                {{ $totalTransactions }}
                            </h2>

                        </div>

                        <div class="w-14 h-14 rounded-2xl bg-green-100 flex items-center justify-center text-2xl">
                            🔄
                        </div>

                    </div>

                </div>

                {{-- Low Stock --}}
                <div class="bg-white rounded-2xl shadow-sm hover:shadow-lg transition p-6">

                    <div class="flex justify-between">

                        <div>

                            <p class="text-gray-500">
                                Stock Menipis
                            </p>

                            <h2 class="text-4xl font-bold mt-3 text-red-500">
                                {{ $lowStockItems }}
                            </h2>

                        </div>

                        <div class="w-14 h-14 rounded-2xl bg-red-100 flex items-center justify-center text-2xl">
                            ⚠️
                        </div>

                    </div>

                </div>

            </div>


            {{-- Quick Action --}}
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">

                <a href="/items/create"
                    class="bg-white rounded-2xl shadow-sm hover:shadow-lg transition p-6">

                    <div class="text-4xl">
                        ➕
                    </div>

                    <h3 class="font-bold text-lg mt-4">
                        Tambah Barang
                    </h3>

                    <p class="text-gray-500 mt-2 text-sm">
                        Tambahkan stok atau produk baru ke gudang.
                    </p>

                </a>

                <a href="/items"
                    class="bg-white rounded-2xl shadow-sm hover:shadow-lg transition p-6">

                    <div class="text-4xl">
                        📦
                    </div>

                    <h3 class="font-bold text-lg mt-4">
                        Kelola Gudang
                    </h3>

                    <p class="text-gray-500 mt-2 text-sm">
                        Lihat seluruh data inventori.
                    </p>

                </a>

                <a href="/transactions"
                    class="bg-white rounded-2xl shadow-sm hover:shadow-lg transition p-6">

                    <div class="text-4xl">
                        📈
                    </div>

                    <h3 class="font-bold text-lg mt-4">
                        Riwayat Transaksi
                    </h3>

                    <p class="text-gray-500 mt-2 text-sm">
                        Pantau barang masuk dan keluar.
                    </p>

                </a>

            </div>


            {{-- Chart --}}
            <div class="bg-white rounded-3xl shadow-sm mt-8 p-8">

                <div class="mb-6">

                    <h2 class="text-2xl font-bold text-gray-800">
                        Statistik Inventory
                    </h2>

                    <p class="text-gray-500 mt-1">
                        Distribusi data inventori saat ini.
                    </p>

                </div>

                <div class="max-w-xl mx-auto">

                    <canvas id="inventoryChart"></canvas>

                </div>

            </div>


            {{-- Status --}}
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">

                <div class="bg-white rounded-2xl p-6 shadow-sm">

                    <p class="text-gray-500">
                        Status Gudang
                    </p>

                    <h2 class="text-2xl font-bold text-green-600 mt-3">
                        Normal
                    </h2>

                    <p class="text-sm text-gray-500 mt-2">
                        Semua sistem berjalan baik.
                    </p>

                </div>

                <div class="bg-white rounded-2xl p-6 shadow-sm">

                    <p class="text-gray-500">
                        Monitoring
                    </p>

                    <h2 class="text-2xl font-bold text-blue-600 mt-3">
                        Real-time
                    </h2>

                    <p class="text-sm text-gray-500 mt-2">
                        Data selalu diperbarui.
                    </p>

                </div>

                <div class="bg-white rounded-2xl p-6 shadow-sm">

                    <p class="text-gray-500">
                        Total Data Aktif
                    </p>

                    <h2 class="text-2xl font-bold text-emerald-600 mt-3">
                        {{ $totalItems + $totalCategories }}
                    </h2>

                    <p class="text-sm text-gray-500 mt-2">
                        Barang dan kategori tersimpan.
                    </p>

                </div>

            </div>

        </div>

    </main>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>

        const ctx = document.getElementById('inventoryChart');

        new Chart(ctx, {

            type: 'doughnut',

            data: {

                labels: [
                    'Barang',
                    'Kategori',
                    'Transaksi',
                    'Stock Rendah'
                ],

                datasets: [{

                    data: [
                        {{ $totalItems }},
                        {{ $totalCategories }},
                        {{ $totalTransactions }},
                        {{ $lowStockItems }}
                    ],

                    backgroundColor: [
                        '#22C55E',
                        '#16A34A',
                        '#0F766E',
                        '#DC2626'
                    ],

                    borderWidth: 0

                }]

            },

            options: {

                responsive: true,

                plugins: {

                    legend: {

                        position: 'bottom'

                    }

                },

                cutout: '70%'

            }

        });

    </script>

</x-layout>
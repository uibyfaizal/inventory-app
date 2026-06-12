<x-layout>
    <x-navbar></x-navbar>

    <div class="max-w-7xl mx-auto py-8 md:py-10 px-4">

        <!-- Header -->
        <div class="mb-8">

            <h1 class="text-3xl md:text-4xl font-bold text-gray-800">
                📊 Dashboard Inventory
            </h1>

            <p class="text-gray-500 mt-2">
                Ringkasan data inventory gudang secara real-time
            </p>

        </div>

        <!-- Statistik Card -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

            <!-- Total Barang -->
            <div class="bg-gradient-to-r from-blue-500 to-blue-600 text-white rounded-2xl p-6 shadow-lg">

                <div class="flex justify-between items-center">

                    <div>
                        <p class="text-blue-100 text-sm">
                            Total Barang
                        </p>

                        <h2 class="text-4xl font-bold mt-2">
                            {{ $totalItems }}
                        </h2>
                    </div>

                    <div class="text-5xl opacity-30">
                        📦
                    </div>

                </div>

            </div>

            <!-- Total Kategori -->
            <div class="bg-gradient-to-r from-green-500 to-green-600 text-white rounded-2xl p-6 shadow-lg">

                <div class="flex justify-between items-center">

                    <div>
                        <p class="text-green-100 text-sm">
                            Total Kategori
                        </p>

                        <h2 class="text-4xl font-bold mt-2">
                            {{ $totalCategories }}
                        </h2>
                    </div>

                    <div class="text-5xl opacity-30">
                        🗂️
                    </div>

                </div>

            </div>

            <!-- Total Transaksi -->
            <div class="bg-gradient-to-r from-purple-500 to-purple-600 text-white rounded-2xl p-6 shadow-lg">

                <div class="flex justify-between items-center">

                    <div>
                        <p class="text-purple-100 text-sm">
                            Total Transaksi
                        </p>

                        <h2 class="text-4xl font-bold mt-2">
                            {{ $totalTransactions }}
                        </h2>
                    </div>

                    <div class="text-5xl opacity-30">
                        📈
                    </div>

                </div>

            </div>

            <!-- Low Stock -->
            <div class="bg-gradient-to-r from-red-500 to-red-600 text-white rounded-2xl p-6 shadow-lg">

                <div class="flex justify-between items-center">

                    <div>
                        <p class="text-red-100 text-sm">
                            Stock Hampir Habis
                        </p>

                        <h2 class="text-4xl font-bold mt-2">
                            {{ $lowStockItems }}
                        </h2>
                    </div>

                    <div class="text-5xl opacity-30">
                        ⚠️
                    </div>

                </div>

            </div>

        </div>

        <!-- Quick Summary -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-8">

            <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100">

                <p class="text-sm text-gray-400">
                    Status Gudang
                </p>

                <h3 class="text-xl font-bold text-green-500 mt-2">
                    Normal
                </h3>

                <p class="text-gray-500 text-sm mt-2">
                    Inventory berjalan dengan baik.
                </p>

            </div>

            <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100">

                <p class="text-sm text-gray-400">
                    Total Data Aktif
                </p>

                <h3 class="text-xl font-bold text-blue-500 mt-2">
                    {{ $totalItems + $totalCategories }}
                </h3>

                <p class="text-gray-500 text-sm mt-2">
                    Barang & kategori yang tersimpan.
                </p>

            </div>

            <div class="bg-white rounded-2xl p-6 shadow-sm border border-gray-100">

                <p class="text-sm text-gray-400">
                    Monitoring
                </p>

                <h3 class="text-xl font-bold text-purple-500 mt-2">
                    Real-time
                </h3>

                <p class="text-gray-500 text-sm mt-2">
                    Data diperbarui langsung dari sistem.
                </p>

            </div>

        </div>

        <!-- Grafik -->
<div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 mt-8">

    <div class="mb-6">

        <h2 class="text-2xl font-bold text-gray-700">
            📈 Statistik Transaksi
        </h2>

        <p class="text-gray-500 text-sm mt-1">
            Distribusi data inventory saat ini
        </p>

    </div>

    <div class="flex justify-center">

        <div class="w-full max-w-md">
            <canvas id="inventoryChart"></canvas>
        </div>

    </div>

</div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
                '#3B82F6',
                '#10B981',
                '#8B5CF6',
                '#EF4444'
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

        cutout: '65%'
    }

});

</script>
</x-layout>
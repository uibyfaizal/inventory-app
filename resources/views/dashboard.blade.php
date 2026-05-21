<x-layout>
    <x-navbar></x-navbar>

    <div class="max-w-6xl mx-auto py-10 px-4">

        <!-- Header -->
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-gray-700">
                📊 Dashboard Inventory
            </h1>

            <p class="text-gray-400 mt-1">
                Ringkasan data inventory gudang
            </p>
        </div>

        <!-- Statistik Card -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5">

            <!-- Total Barang -->
            <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-5">

                <p class="text-sm text-gray-400">
                    Total Barang
                </p>

                <h2 class="text-3xl font-bold text-gray-700 mt-2">
                    {{ $totalItems }}
                </h2>

            </div>

            <!-- Total Kategori -->
            <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-5">

                <p class="text-sm text-gray-400">
                    Total Kategori
                </p>

                <h2 class="text-3xl font-bold text-gray-700 mt-2">
                    {{ $totalCategories }}
                </h2>

            </div>

            <!-- Total Transaksi -->
            <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-5">

                <p class="text-sm text-gray-400">
                    Total Transaksi
                </p>

                <h2 class="text-3xl font-bold text-gray-700 mt-2">
                    {{ $totalTransactions }}
                </h2>

            </div>

            <!-- Stock Hampir Habis -->
            <div class="bg-white rounded-xl shadow-sm border border-red-100 p-5">

                <p class="text-sm text-red-400">
                    ⚠ Stock Hampir Habis
                </p>

                <h2 class="text-3xl font-bold text-red-500 mt-2">
                    {{ $lowStockItems }}
                </h2>

            </div>

        </div>

        {{-- Chart Transaksi --}}
        <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 mt-8">
            <h2 class="text-xl font-semibold text-grey-700 mb-2">📈 Grafik Transaksi</h2>
            <p class="text-grey-400 text-sm mb-5">Jumlah transaksi berdasarkan tanggal</p>

            <div class="space-y-3">

                @foreach ($transactionsChart as $chart)
                    <div class="flex justify-between text-sm mb-1">
                        <span class="text-gray-600">
                            {{ $chart->date }}  
                        </span>

                        <span class="font-medium text-gray-700">
                            {{ $chart->total }} transaksi
                        </span>
                    </div>

                    {{-- Bar --}}
                    <div class="w-full bg-gray-100 rounded-full h-3 overflow-hidden">
                        <div class="bg-blue-500 h-3 rounded-full" style="width: {{ $chart->total * 10 }} %">

                        </div>
                    </div>

                @endforeach


            </div>
        </div>



    </div>
</x-layout>
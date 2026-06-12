<x-layout>

    <x-navbar></x-navbar>

    <div class="max-w-7xl mx-auto py-8 md:py-10 px-4">

        <!-- Header -->
        <div class="mb-8">

            <h1 class="text-3xl md:text-4xl font-bold text-gray-800">
                📋 Riwayat Transaksi Barang
            </h1>

            <p class="text-gray-500 mt-2">
                Pilih barang untuk melihat seluruh riwayat transaksi yang pernah dilakukan.
            </p>

        </div>

        <!-- Summary Card -->
        <div class="bg-gradient-to-r from-blue-500 to-indigo-600 rounded-2xl p-6 text-white mb-8 shadow-lg">

            <div class="flex flex-col md:flex-row md:justify-between md:items-center gap-4">

                <div>

                    <p class="text-blue-100 text-sm">
                        Total Barang Terdaftar
                    </p>

                    <h2 class="text-4xl font-bold mt-2">
                        {{ $items->count() }}
                    </h2>

                </div>

                <div class="text-6xl opacity-20">
                    📦
                </div>

            </div>

        </div>

        <!-- List Barang -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

            @foreach ($items as $item)

                <a href="{{ route('transactions.show', $item->id) }}">

                    <div class="bg-white rounded-2xl border border-gray-100 shadow-sm hover:shadow-xl hover:-translate-y-1 transition-all duration-300 p-6 h-full">

                        <!-- Icon -->
                        <div class="flex justify-between items-start mb-4">

                            <div class="w-14 h-14 rounded-xl bg-blue-100 flex items-center justify-center text-2xl">
                                📦
                            </div>

                            @if ($item->stock == 0)

                                <span class="bg-gray-200 text-gray-700 px-3 py-1 rounded-full text-xs font-medium">
                                    Kosong
                                </span>

                            @elseif ($item->stock <= 5)

                                <span class="bg-red-100 text-red-600 px-3 py-1 rounded-full text-xs font-medium">
                                    Hampir Habis
                                </span>

                            @else

                                <span class="bg-green-100 text-green-600 px-3 py-1 rounded-full text-xs font-medium">
                                    Aman
                                </span>

                            @endif

                        </div>

                        <!-- Nama Barang -->
                        <h2 class="text-xl font-bold text-gray-800 mb-2">
                            {{ $item->name }}
                        </h2>

                        <!-- Kategori -->
                        <p class="text-gray-500 text-sm mb-4">
                            {{ $item->category->name ?? 'Tanpa Kategori' }}
                        </p>

                        <!-- Stock -->
                        <div class="bg-gray-50 rounded-xl p-3">

                            <p class="text-sm text-gray-500">
                                Stock Saat Ini
                            </p>

                            <h3 class="text-2xl font-bold text-blue-600">
                                {{ $item->stock }}
                            </h3>

                        </div>

                        <!-- Footer -->
                        <div class="mt-5 flex items-center justify-between">

                            <span class="text-sm text-gray-400">
                                Klik untuk melihat
                            </span>

                            <span class="text-blue-500 font-semibold">
                                Detail →
                            </span>

                        </div>

                    </div>

                </a>

            @endforeach

        </div>

    </div>

</x-layout>
<x-layout>

    <x-sidebar />

    <main class="ml-64 min-h-screen bg-[#f5f7fb]">

        <!-- Header -->
        <div class="bg-gradient-to-r from-emerald-500 to-green-600 px-10 py-8 shadow">

            <h1 class="text-3xl font-bold text-white">
                Riwayat Transaksi
            </h1>

            <p class="text-green-100 mt-1">
                Pilih barang untuk melihat seluruh riwayat transaksi yang pernah dilakukan.
            </p>

        </div>

        <div class="p-8">

            <!-- Summary -->
            <div class="bg-white rounded-2xl shadow-md p-6 mb-8">

                <div class="flex justify-between items-center">

                    <div>

                        <p class="text-gray-500 text-sm">
                            Total Barang
                        </p>

                        <h2 class="text-4xl font-bold text-green-600 mt-2">
                            {{ $items->count() }}
                        </h2>

                    </div>

                    <div class="text-6xl">
                        📦
                    </div>

                </div>

            </div>


            <!-- List Barang -->
            <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">

                @foreach($items as $item)

                    <a href="{{ route('transactions.show',$item->id) }}">

                        <div class="bg-white rounded-2xl shadow-md hover:shadow-xl transition duration-300 p-6 border border-gray-100 hover:-translate-y-1">

                            <div class="flex justify-between items-start mb-5">

                                <div class="w-14 h-14 rounded-xl bg-green-100 flex items-center justify-center text-2xl">

                                    📦

                                </div>

                                @if($item->stock==0)

                                    <span class="bg-gray-200 text-gray-700 text-xs px-3 py-1 rounded-full">

                                        Kosong

                                    </span>

                                @elseif($item->stock<=5)

                                    <span class="bg-red-100 text-red-600 text-xs px-3 py-1 rounded-full">

                                        Hampir Habis

                                    </span>

                                @else

                                    <span class="bg-green-100 text-green-600 text-xs px-3 py-1 rounded-full">

                                        Aman

                                    </span>

                                @endif

                            </div>

                            <h2 class="text-xl font-bold text-gray-800">

                                {{ $item->name }}

                            </h2>

                            <p class="text-gray-400 mt-1">

                                {{ $item->category->name ?? 'Tanpa Kategori' }}

                            </p>

                            <div class="mt-6 rounded-xl bg-gray-50 p-4">

                                <p class="text-gray-500 text-sm">

                                    Stock Saat Ini

                                </p>

                                <h3 class="text-3xl font-bold text-green-600 mt-1">

                                    {{ $item->stock }}

                                </h3>

                            </div>

                            <div class="flex justify-between items-center mt-6">

                                <span class="text-sm text-gray-400">

                                    Klik untuk melihat transaksi

                                </span>

                                <span class="text-green-600 font-semibold">

                                    Detail →

                                </span>

                            </div>

                        </div>

                    </a>

                @endforeach

            </div>

        </div>

    </main>

</x-layout>
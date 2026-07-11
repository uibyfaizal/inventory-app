<x-layout>
    <x-sidebar />

    <main class="ml-64 min-h-screen bg-[#f5f7fb] lg:ml-56">

        <!-- Header -->
        <div class="bg-gradient-to-r from-emerald-500 to-green-600 px-10 py-8 shadow">

            <div class="flex justify-between items-center">

                <div>

                    <h1 class="text-3xl font-bold text-white">
                        Detail Barang
                    </h1>

                    <p class="text-green-100 mt-1">
                        Informasi lengkap barang dan riwayat transaksi.
                    </p>

                </div>

                <a href="{{ route('transactions.create',$item->id) }}"
                    class="bg-white text-green-600 px-6 py-3 rounded-xl font-semibold shadow hover:bg-green-50 transition">

                    + Transaksi

                </a>

            </div>

        </div>


        <div class="p-8">

            {{-- Alert --}}
            @if(session('success'))

                <div class="bg-green-100 border border-green-200 text-green-700 rounded-xl px-5 py-4 mb-6">

                    {{ session('success') }}

                </div>

            @endif

            @if(session('error'))

                <div class="bg-red-100 border border-red-200 text-red-700 rounded-xl px-5 py-4 mb-6">

                    {{ session('error') }}

                </div>

            @endif


            <!-- Informasi Barang -->
            <div class="grid grid-cols-3 gap-6 mb-8">

                <!-- Nama -->
                <div class="bg-white rounded-2xl shadow p-6">

                    <p class="text-gray-400 text-sm">
                        Nama Barang
                    </p>

                    <h2 class="text-2xl font-bold mt-2">
                        {{ $item->name }}
                    </h2>

                </div>

                <!-- Stock -->
                <div class="bg-white rounded-2xl shadow p-6">

                    <p class="text-gray-400 text-sm">
                        Stock Saat Ini
                    </p>

                    <h2 class="text-3xl font-bold mt-2">

                        @if($item->stock==0)

                            <span class="text-gray-500">
                                0
                            </span>

                        @elseif($item->stock<=5)

                            <span class="text-red-500">
                                {{ $item->stock }}
                            </span>

                        @else

                            <span class="text-green-600">
                                {{ $item->stock }}
                            </span>

                        @endif

                    </h2>

                </div>

                <!-- Status -->
                <div class="bg-white rounded-2xl shadow p-6">

                    <p class="text-gray-400 text-sm">
                        Status
                    </p>

                    @if($item->stock==0)

                        <span class="inline-block mt-3 bg-gray-200 text-gray-700 px-4 py-2 rounded-full">

                            Barang Habis

                        </span>

                    @elseif($item->stock<=5)

                        <span class="inline-block mt-3 bg-red-100 text-red-600 px-4 py-2 rounded-full">

                            Hampir Habis

                        </span>

                    @else

                        <span class="inline-block mt-3 bg-green-100 text-green-600 px-4 py-2 rounded-full">

                            Stock Aman

                        </span>

                    @endif

                </div>

            </div>


            <!-- Riwayat -->
            <div class="bg-white rounded-2xl shadow overflow-hidden">

                <div class="flex justify-between items-center px-6 py-5 border-b">

                    <h2 class="text-xl font-bold">

                        Riwayat Transaksi

                    </h2>

                    <a href="/items"
                        class="text-green-600 hover:underline">

                        ← Kembali

                    </a>

                </div>


                @if($transactions->isEmpty())

                    <div class="py-16 text-center">

                        <p class="text-gray-400">

                            Belum ada transaksi.

                        </p>

                    </div>

                @else

                    <table class="w-full">

                        <thead class="bg-gray-50">

                            <tr>

                                <th class="px-6 py-4 text-left">Tanggal</th>
                                <th class="px-6 py-4 text-left">Tipe</th>
                                <th class="px-6 py-4 text-left">Jumlah</th>
                                <th class="px-6 py-4 text-left">Diambil Oleh</th>
                                <th class="px-6 py-4 text-left">Catatan</th>

                            </tr>

                        </thead>

                        <tbody>

                            @foreach($transactions as $trx)

                                <tr class="border-t hover:bg-gray-50">

                                    <td class="px-6 py-4">

                                        {{ $trx->created_at->format('d M Y H:i') }}

                                    </td>

                                    <td class="px-6 py-4">

                                        @if($trx->type=="IN")

                                            <span class="bg-green-100 text-green-600 px-3 py-1 rounded-full text-sm">

                                                Masuk

                                            </span>

                                        @else

                                            <span class="bg-red-100 text-red-600 px-3 py-1 rounded-full text-sm">

                                                Keluar

                                            </span>

                                        @endif

                                    </td>

                                    <td class="px-6 py-4">

                                        {{ $trx->quantity }}

                                    </td>

                                    <td class="px-6 py-4">

                                        {{ $trx->taken_by }}

                                    </td>

                                    <td class="px-6 py-4">

                                        {{ $trx->note ?: '-' }}

                                    </td>

                                </tr>

                            @endforeach

                        </tbody>

                    </table>

                @endif

            </div>

        </div>

    </main>

</x-layout>
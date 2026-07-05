<x-layout>
    <x-sidebar />

    <main class="ml-64 min-h-screen bg-[#f5f7fb]">

        <div class="max-w-6xl mx-auto py-10 px-8">

            {{-- Header --}}
            <div class="flex justify-between items-center mb-8">

                <div>
                    <h1 class="text-3xl font-bold text-gray-800">
                        📦 {{ $item->name }}
                    </h1>

                    <p class="text-gray-500 mt-2">
                        Seluruh riwayat transaksi barang ini.
                    </p>
                </div>

                <a href="{{ route('transactions.index') }}"
                    class="px-5 py-2 rounded-xl bg-white border hover:bg-gray-50 shadow-sm">
                    ← Kembali
                </a>

            </div>


            {{-- Ringkasan --}}
            <div class="grid grid-cols-3 gap-5 mb-8">

                <div class="bg-white rounded-2xl shadow-sm p-6 border">

                    <p class="text-gray-500 text-sm">
                        Nama Barang
                    </p>

                    <h2 class="text-xl font-bold mt-2">
                        {{ $item->name }}
                    </h2>

                </div>

                <div class="bg-white rounded-2xl shadow-sm p-6 border">

                    <p class="text-gray-500 text-sm">
                        Kategori
                    </p>

                    <h2 class="text-xl font-bold mt-2">
                        {{ $item->category->name }}
                    </h2>

                </div>

                <div class="bg-gradient-to-r from-green-500 to-emerald-600 rounded-2xl shadow-sm p-6 text-white">

                    <p class="text-green-100 text-sm">
                        Stock Saat Ini
                    </p>

                    <h2 class="text-4xl font-bold mt-2">
                        {{ $item->stock }}
                    </h2>

                </div>

            </div>


            {{-- Tabel --}}
            <div class="bg-white rounded-2xl shadow-sm overflow-hidden">

                <div class="px-6 py-5 border-b">

                    <h2 class="font-semibold text-lg">
                        Riwayat Transaksi
                    </h2>

                </div>

                <div class="overflow-x-auto">

                    <table class="w-full">

                        <thead class="bg-gray-100">

                            <tr class="text-gray-600">

                                <th class="p-4 text-left">Tanggal</th>
                                <th class="p-4 text-left">Jenis</th>
                                <th class="p-4 text-left">Jumlah</th>
                                <th class="p-4 text-left">Diambil Oleh</th>
                                <th class="p-4 text-left">Catatan</th>

                            </tr>

                        </thead>

                        <tbody>

                            @forelse($transactions as $transaction)

                                <tr class="border-t hover:bg-gray-50">

                                    <td class="p-4">
                                        {{ $transaction->created_at->format('d M Y H:i') }}
                                    </td>

                                    <td class="p-4">

                                        @if($transaction->type == 'IN')

                                            <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm">
                                                📥 Barang Masuk
                                            </span>

                                        @else

                                            <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full text-sm">
                                                📤 Barang Keluar
                                            </span>

                                        @endif

                                    </td>

                                    <td class="p-4 font-semibold">
                                        {{ $transaction->quantity }}
                                    </td>

                                    <td class="p-4">
                                        {{ $transaction->taken_by }}
                                    </td>

                                    <td class="p-4">
                                        {{ $transaction->note ?: '-' }}
                                    </td>

                                </tr>

                            @empty

                                <tr>

                                    <td colspan="5" class="text-center py-10 text-gray-400">

                                        Belum ada transaksi.

                                    </td>

                                </tr>

                            @endforelse

                        </tbody>

                    </table>

                </div>

            </div>

        </div>

    </main>

</x-layout>
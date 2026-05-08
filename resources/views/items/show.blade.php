<x-layout>
    <x-navbar></x-navbar>

    <div class="max-w-5xl mx-auto py-6 md:py-10 px-3 md:px-4">

        {{-- Alert --}}
        @if (session('success'))
            <div id="alertBox" class="flex justify-between items-center bg-green-100 text-green-700 p-3 rounded mb-4 text-sm md:text-base">
                <span>{{ session('success') }}</span>
                <button 
                    onclick="document.getElementById('alertBox').style.display='none'"
                    class="text-green-700 hover:text-green-900 font-bold">
                    ✖
                </button>
            </div>
        @endif

        {{-- Error Alert --}}
        @if(session('error'))
            <div id="alertError" class="flex justify-between items-center bg-red-100 text-red-700 p-3 rounded mb-4 text-sm md:text-base">
                <span>{{ session('error') }}</span>
                <button 
                    onclick="document.getElementById('alertError').style.display='none'"
                    class="text-red-700 hover:text-red-900 font-bold">
                    ✖
                </button>
            </div>
        @endif

        <!-- Header -->
        <div class="flex flex-col md:flex-row md:justify-between md:items-center gap-4 mb-4">
            
            <div>
                <h1 class="text-xl md:text-2xl font-bold pb-2 md:pb-4">📦 Detail Barang</h1>
                <a href="/items">
                    <x-button>Back to Items</x-button>
                </a>
            </div>

            <div class="flex flex-col sm:flex-row gap-2 w-full md:w-auto">
                <a href="{{ route('transactions.create', $item->id) }}" class="w-full">
                    <x-button class="w-full">Ambil / Masukkan Barang</x-button>
                </a>
            </div>

        </div>

        <!-- Card Info -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden p-4 md:p-6">

            <div class="space-y-2 text-gray-700 text-sm md:text-base">
                <p><span class="font-medium">Nama Barang:</span> {{ $item->name }}</p>
                <p><span class="font-medium">Stock:</span> {{ $item->stock }}</p>
                <p><span class="font-medium">Harga:</span> Rp {{ number_format($item->price, 0, ',', '.') }}</p>
            </div>
            
            {{-- Riwayat Transaksi --}}
            <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden mt-5">

                <h2 class="text-base md:text-lg font-semibold p-4 md:p-6">📊 Riwayat Transaksi</h2>

                @if($transactions->isEmpty())
                    <p class="text-gray-400 px-4 md:px-6 pb-4 md:pb-6 text-sm md:text-base">Belum ada transaksi</p>
                @else

                    <div class="overflow-x-auto">
                        <x-table class="min-w-[600px]">

                            <!-- Head -->
                            <thead class="bg-gray-50 text-gray-600 text-sm md:text-base">
                                <tr>
                                    <th class="px-3 md:px-6 py-3 font-medium">Tanggal</th>
                                    <th class="px-3 md:px-6 py-3 font-medium">Tipe</th>
                                    <th class="px-3 md:px-6 py-3 font-medium">Jumlah</th>
                                    <th class="px-3 md:px-6 py-3 font-medium">Diambil Oleh</th>
                                    <th class="px-3 md:px-6 py-3 font-medium">Catatan</th>
                                </tr>
                            </thead>

                            <!-- Body -->
                            <tbody class="text-gray-700 divide-y text-sm md:text-base">

                                @foreach ($transactions as $trx)
                                    <tr class="hover:bg-gray-50 transition">

                                        <td class="px-3 md:px-6 py-3 md:py-4">
                                            {{ $trx->created_at->format('d M Y, H:i') }}
                                        </td>

                                        <td class="px-3 md:px-6 py-3 md:py-4">
                                            <span class="{{ $trx->type === 'OUT' ? 'text-red-500' : 'text-green-500' }} font-medium">
                                                {{ $trx->type }}
                                            </span>
                                        </td>

                                        <td class="px-3 md:px-6 py-3 md:py-4">
                                            {{ $trx->quantity }}
                                        </td>

                                        <td class="px-3 md:px-6 py-3 md:py-4">
                                            {{ $trx->taken_by ?? '-' }}
                                        </td>

                                        <td class="px-3 md:px-6 py-3 md:py-4">
                                            {{ $trx->note ?? '-' }}
                                        </td>

                                    </tr>
                                @endforeach

                            </tbody>

                        </x-table>
                    </div>

                @endif

            </div>
            
        </div>

    </div>
</x-layout>
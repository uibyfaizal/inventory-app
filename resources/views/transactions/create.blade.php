<x-layout>
    <x-navbar></x-navbar>

    {{-- Alert --}}
    @if(session('error'))
        <div id="alertError" class="flex justify-between items-center bg-red-100 text-red-700 p-3 rounded mb-4">

            <span>{{ session('error') }}</span>

            <button 
                onclick="document.getElementById('alertError').style.display='none'"
                class="text-red-700 hover:text-red-900 font-bold">
                ✖
            </button>

        </div>
    @endif

    <!-- 🟢 SUCCESS MESSAGE -->
    @if(session('success'))
        <div class="bg-green-100 text-green-600 p-3 mb-3 rounded">
            {{ session('success') }}
        </div>
    @endif

    

    <div class="max-w-2xl mx-auto py-10 px-4">

        <!-- Header -->
        <div class="mb-6">
            <h1 class="text-2xl font-semibold text-gray-700">Transaksi Barang</h1>
            <p class="text-sm text-gray-400">Isi data transaksi barang dengan lengkap</p>
        </div>

        <!-- Card Form -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">

            <form action="{{ route('transactions.store', $item->id) }}" method="POST" class="space-y-5">
                @csrf

                <!-- Nama Barang -->
                <div>
                    <label class="block text-sm font-medium text-gray-600 mb-1">
                        Nama Barang
                    </label>
                    <input type="text" value="{{ $item->name }}"
                        class="w-full px-4 py-2 rounded-lg border border-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-300 focus:border-transparent" disabled>
                </div>

                <!-- Stok Saat Ini -->
                <div>
                    <label class="block text-sm font-medium text-gray-600 mb-1">
                        Stock Saat Ini
                    </label>
                    <input type="text" value="{{ $item->stock }}"
                        class="w-full px-4 py-2 rounded-lg border border-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-300 focus:border-transparent" disabled>
                </div>

                <!-- TYPE -->
                <div>
                    <label class="block text-sm font-medium text-gray-600 mb-1">
                        Tipe
                    </label>
                    <select type="number" name="type"
                        class="w-full px-4 py-2 rounded-lg border border-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-300 focus:border-transparent">
                        <option value="IN">IN (Tambah Stok)</option>
                        <option value="OUT">OUT (Ambil Barang)</option>
                    </select>
                </div>

                <!-- Quantity -->
                <div>
                    <label class="block text-sm font-medium text-gray-600 mb-1">
                        Jumlah
                    </label>
                    <input type="number" name="quantity"
                        class="w-full px-4 py-2 rounded-lg border border-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-300 focus:border-transparent">
                </div>

                <!-- TAKEN BY -->
                <div>
                    <label class="block text-sm font-medium text-gray-600 mb-1">
                        Diambil oleh
                    </label>
                    <input type="text" name="taken_by"
                        class="w-full px-4 py-2 rounded-lg border border-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-300 focus:border-transparent" autocomplete="off">
                </div>

                <!-- NOTE -->
                <div>
                    <label class="block text-sm font-medium text-gray-600 mb-1">
                        Catatan (Opsional)
                    </label>
                    <textarea name="note"
                        class="w-full px-4 py-2 rounded-lg border border-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-300 focus:border-transparent"> </textarea>
                </div>

                <!-- Button -->
                <div class="pt-4 flex justify-end gap-2">

                    <!-- Back -->
                    <a href="/items"
                        class="px-4 py-2 rounded-lg text-sm text-gray-500 hover:text-gray-700 transition">
                        Batal
                    </a>

                    <!-- Submit -->
                    <x-button type="submit">Simpan data transaksi</x-button>

                </div>

            </form>
        </div>

    </div>
</x-layout>
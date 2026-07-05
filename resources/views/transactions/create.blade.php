<x-layout>
    <x-sidebar />

    <main class="ml-64 min-h-screen bg-[#f5f7fb]">

        <!-- Header -->
        <div class="bg-gradient-to-r from-emerald-500 to-green-600 px-10 py-8 shadow">

            <h1 class="text-3xl font-bold text-white">
                Transaksi Barang
            </h1>

            <p class="text-green-100 mt-1">
                Tambah atau keluarkan stok barang dari gudang.
            </p>

        </div>

        <div class="p-8">

            {{-- Error --}}
            @if(session('error'))
                <div class="mb-6 rounded-xl bg-red-100 border border-red-200 text-red-700 px-5 py-4">
                    {{ session('error') }}
                </div>
            @endif

            {{-- Success --}}
            @if(session('success'))
                <div class="mb-6 rounded-xl bg-green-100 border border-green-200 text-green-700 px-5 py-4">
                    {{ session('success') }}
                </div>
            @endif


            <div class="max-w-4xl mx-auto">

                <div class="bg-white rounded-2xl shadow-md p-8">

                    <form action="{{ route('transactions.store',$item->id) }}"
                        method="POST"
                        class="space-y-6">

                        @csrf

                        <!-- Nama Barang -->
                        <div>

                            <label class="block mb-2 text-sm font-semibold text-gray-700">

                                Nama Barang

                            </label>

                            <input
                                type="text"
                                value="{{ $item->name }}"
                                disabled

                                class="w-full rounded-xl border-gray-200 bg-gray-100">

                        </div>


                        <!-- Stock -->
                        <div>

                            <label class="block mb-2 text-sm font-semibold text-gray-700">

                                Stock Saat Ini

                            </label>

                            <input
                                type="text"
                                value="{{ $item->stock }}"
                                disabled

                                class="w-full rounded-xl border-gray-200 bg-gray-100">

                        </div>


                        <!-- Tipe -->
                        <div>

                            <label class="block mb-2 text-sm font-semibold text-gray-700">

                                Jenis Transaksi

                            </label>

                            <select
                                name="type"

                                class="w-full rounded-xl border-gray-200 focus:ring-green-500 focus:border-green-500">

                                <option value="IN">

                                    📥 Barang Masuk

                                </option>

                                <option value="OUT">

                                    📤 Barang Keluar

                                </option>

                            </select>

                        </div>


                        <!-- Jumlah -->
                        <div>

                            <label class="block mb-2 text-sm font-semibold text-gray-700">

                                Jumlah Barang

                            </label>

                            <input
                                type="number"
                                name="quantity"

                                placeholder="Masukkan jumlah"

                                class="w-full rounded-xl border-gray-200 focus:ring-green-500 focus:border-green-500">

                        </div>


                        <!-- Diambil Oleh -->
                        <div>

                            <label class="block mb-2 text-sm font-semibold text-gray-700">

                                Diambil / Ditambahkan Oleh

                            </label>

                            <input
                                type="text"
                                name="taken_by"

                                placeholder="Masukkan nama"

                                class="w-full rounded-xl border-gray-200 focus:ring-green-500 focus:border-green-500">

                        </div>


                        <!-- Catatan -->
                        <div>

                            <label class="block mb-2 text-sm font-semibold text-gray-700">

                                Catatan (Opsional)

                            </label>

                            <textarea
                                rows="4"
                                name="note"

                                placeholder="Tambahkan catatan..."

                                class="w-full rounded-xl border-gray-200 focus:ring-green-500 focus:border-green-500"></textarea>

                        </div>


                        <!-- Button -->
                        <div class="flex justify-end gap-3 pt-4">

                            <a href="/items/{{ $item->id }}"
                                class="px-6 py-3 rounded-xl bg-gray-100 hover:bg-gray-200 transition">

                                Batal

                            </a>

                            <button
                                type="submit"

                                class="px-7 py-3 rounded-xl bg-green-600 hover:bg-green-700 text-white shadow">

                                Simpan Transaksi

                            </button>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </main>

</x-layout>
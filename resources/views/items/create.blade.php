<x-layout>
    <x-navbar></x-navbar>

    <div class="max-w-2xl mx-auto py-10 px-4">

        <!-- Header -->
        <div class="mb-6">
            <h1 class="text-2xl font-semibold text-gray-700">Tambah Data Barang</h1>
            <p class="text-sm text-gray-400">Isi data barang dengan lengkap</p>
        </div>

        <!-- Card Form -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">

            <form action="/items" method="POST" class="space-y-5">
                @csrf

                <!-- Nama -->
                <div>
                    <label class="block text-sm font-medium text-gray-600 mb-1">
                        Nama Barang
                    </label>
                    <input type="text" name="name"
                        class="w-full px-4 py-2 rounded-lg border border-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-300 focus:border-transparent"
                        placeholder="Masukkan nama barang" autocomplete="off">
                </div>

                {{-- Category --}}
                <div>
                    <label class="block text-sm font-medium text-grey-600 mb-1">Kategory</label>

                    <select id="categorySelect" name="category_id" class="w-full px-4 py-2 rounded-lg border border-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-300">
                        <option value="" disabled selected>-- Pilih Kategori</option>

                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">
                                {{ $category->name }}
                            </option>
                        @endforeach

                        <option value="other">Lainnya</option>
                    </select>

                    <div id="newCategoryBox" class="hidden mt-3">
                        <label class="block text-sm font-medium text-gray-600 mb-1">
                            Kategori Baru
                        </label>    

                        <input type="text" name="new_category"
                        class="w-full px-4 py-2 rounded-lg border border-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-300 focus:border-transparent"
                        placeholder="Contoh: Alat Tulis" autocomplete="off">
                    </div>
                    
                </div>

                <!-- Stock -->
                <div>
                    <label class="block text-sm font-medium text-gray-600 mb-1">
                        Stock
                    </label>
                    <input type="number" name="stock"
                        class="w-full px-4 py-2 rounded-lg border border-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-300 focus:border-transparent"
                        placeholder="Masukkan jumlah stock" autocomplete="off">
                </div>

                <!-- Harga -->
                {{-- <div>
                    <label class="block text-sm font-medium text-gray-600 mb-1">
                        Harga
                    </label>
                    <input type="number" name="price"
                        class="w-full px-4 py-2 rounded-lg border border-gray-200 focus:outline-none focus:ring-2 focus:ring-blue-300 focus:border-transparent"
                        placeholder="Masukkan harga" autocomplete="off">
                </div> --}}

                <!-- Button -->
                <div class="pt-4 flex justify-end gap-2">

                    <!-- Back -->
                    <a href="/items"
                        class="px-4 py-2 rounded-lg text-sm text-gray-500 hover:text-gray-700 transition">
                        Batal
                    </a>

                    <!-- Submit -->
                    <button type="submit"
                        class="bg-blue-400 hover:bg-blue-500 text-white px-5 py-2 rounded-lg text-sm shadow-sm transition">
                        Simpan Data
                    </button>

                </div>

            </form>

            <script>

                    const categorySelect =
                    document.getElementById('categorySelect');

                    const newCategoryBox =
                    document.getElementById('newCategoryBox');

                    categorySelect.addEventListener('change', function() {

                        const selectedText =
                        this.options[this.selectedIndex].text;

                        if(selectedText === 'Lainnya') {

                            newCategoryBox.classList.remove('hidden');

                        } else {

                            newCategoryBox.classList.add('hidden');

                        }

                    });

            </script>
        </div>

    </div>
</x-layout>
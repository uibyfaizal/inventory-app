<x-layout>
    <x-sidebar />

    <main class="ml-64 min-h-screen bg-[#f5f7fb]">

        <!-- Header -->
        <div class="bg-gradient-to-r from-emerald-500 to-green-600 px-10 py-8 shadow">

            <h1 class="text-3xl font-bold text-white">
                Tambah Barang
            </h1>

            <p class="text-green-100 mt-1">
                Tambahkan produk baru ke gudang Stora
            </p>

        </div>


        <div class="p-8">

            <div class="max-w-4xl mx-auto">

                <div class="bg-white rounded-2xl shadow-md p-8">

                    <form action="/items" method="POST" class="space-y-6">
                        @csrf

                        <!-- Nama Barang -->
                        <div>

                            <label class="block mb-2 text-sm font-semibold text-gray-700">
                                Nama Barang
                            </label>

                            <input
                                type="text"
                                name="name"
                                placeholder="Contoh : Indomie Goreng"

                                class="w-full rounded-xl border-gray-200 focus:ring-green-500 focus:border-green-500">

                        </div>


                        <!-- Kategori -->
                        <div>

                            <label class="block mb-2 text-sm font-semibold text-gray-700">
                                Kategori
                            </label>

                            <select
                                id="categorySelect"
                                name="category_id"

                                class="w-full rounded-xl border-gray-200 focus:ring-green-500 focus:border-green-500">

                                <option value="" disabled selected>
                                    Pilih kategori
                                </option>

                                @foreach($categories as $category)

                                    <option value="{{ $category->id }}">
                                        {{ $category->name }}
                                    </option>

                                @endforeach

                                <option value="other">
                                    + Tambah Kategori Baru
                                </option>

                            </select>

                        </div>


                        <!-- Input kategori baru -->
                        <div id="newCategoryBox" class="hidden">

                            <label class="block mb-2 text-sm font-semibold text-gray-700">
                                Nama Kategori Baru
                            </label>

                            <input
                                type="text"
                                name="new_category"
                                placeholder="Contoh : Alat Tulis"

                                class="w-full rounded-xl border-gray-200 focus:ring-green-500 focus:border-green-500">

                        </div>


                        <!-- Stock -->
                        <div>

                            <label class="block mb-2 text-sm font-semibold text-gray-700">
                                Jumlah Stock
                            </label>

                            <input
                                type="number"
                                name="stock"
                                placeholder="Masukkan jumlah stock"

                                class="w-full rounded-xl border-gray-200 focus:ring-green-500 focus:border-green-500">

                        </div>


                        <!-- Button -->
                        <div class="flex justify-end gap-3 pt-4">

                            <a href="/items"
                                class="px-6 py-3 rounded-xl bg-gray-100 hover:bg-gray-200 transition">

                                Batal

                            </a>

                            <button
                                type="submit"

                                class="px-7 py-3 rounded-xl bg-green-600 hover:bg-green-700 text-white shadow">

                                Simpan Barang

                            </button>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </main>


<script>

const categorySelect = document.getElementById('categorySelect');
const newCategoryBox = document.getElementById('newCategoryBox');

categorySelect.addEventListener('change',function(){

    if(this.value === 'other'){

        newCategoryBox.classList.remove('hidden');

    }else{

        newCategoryBox.classList.add('hidden');

    }

});

</script>

</x-layout>
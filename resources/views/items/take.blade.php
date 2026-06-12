<x-layout>

    <x-navbar></x-navbar>

    <div class="max-w-xl mx-auto py-10 px-4">

        <div class="bg-white p-6 rounded-xl shadow">

            <h1 class="text-2xl font-bold mb-2">
                📦 Ambil Barang
            </h1>

            <p class="text-gray-500 mb-6">
                {{ $item->name }}
            </p>

            <div class="mb-5">
                <span class="bg-blue-100 text-blue-600 px-3 py-1 rounded-full">
                    Stock Saat Ini : {{ $item->stock }}
                </span>
            </div>

            <form action="/items/{{ $item->id }}/take" method="POST">

                @csrf

                <div class="mb-4">

                    <label class="block mb-2">
                        Jumlah Diambil
                    </label>

                    <input
                        type="number"
                        name="quantity"
                        min="1"
                        required
                        class="w-full border rounded-lg px-4 py-2"
                    >

                </div>

                <div class="mb-4">

                    <label class="block mb-2">
                        Diambil Oleh
                    </label>

                    <input
                        type="text"
                        name="taken_by"
                        required
                        class="w-full border rounded-lg px-4 py-2"
                    >

                </div>

                <div class="mb-4">

                    <label class="block mb-2">
                        Catatan
                    </label>

                    <textarea
                        name="note"
                        rows="3"
                        class="w-full border rounded-lg px-4 py-2"
                    ></textarea>

                </div>

                <x-button>
                    Simpan Transaksi
                </x-button>

            </form>

        </div>

    </div>

</x-layout>
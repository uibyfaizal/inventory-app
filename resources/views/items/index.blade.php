<x-layout>
    <x-sidebar />

    <main class="min-h-screen bg-gray-100 lg:ml-60 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6 lg:py-8">

            @if (session('success'))
                <div id="alertBox" class="flex justify-between items-center bg-green-100 text-green-700 p-3 rounded mb-4 text-sm md:text-base">
                    <span>{{ session('success') }}</span>

                    <a href="#" onclick="document.getElementById('alertBox').style.display='none'">
                        ✖
                    </a>
                </div>
            @endif

            {{-- Menampilkan nama  toko --}}
            @if (($store))
                <div class="bg-gradient-to-r from-emerald-500 to-green-600 text-white p-5 rounded-2xl mb-5 shadow">
                    <p class="text-bluee-600 text-sm">Inventory Management System</p>
                    <h2 class="text-2xl font-bold mt-1">🏪 {{ $store->store_name }}</h2>
                </div>
            @endif
        
            <!-- Header -->
            <div class="flex flex-col md:flex-row md:justify-between md:items-center gap-4">
                <div>
                    <p class="text-sm text-gray-500">
                        Inventory Management
                    </p>

                    <h1 class="text-3xl font-bold text-gray-800">
                        Gudang Barang
                    </h1>
                </div>

                <a href="/items/create" class="w-full lg-w-auto">
                    <x-button class="bg-emerald-500 hover:bg-emerald-600 w-full md:w-auto">+ Tambah Barang Masuk</x-button>
                </a>
            </div>

            {{-- Search  --}}
            <div class="mb-4">

                <form action="/items" method="GET" class="flex flex-col md:flex-row gap-2 w-full">

                    <input type="hidden" name="category" value="{{ request('category') }}">
                    <input type="hidden" name="sort" value="{{ request('sort') }}">

                    <!-- Input Search -->
                    <input
                        type="text"
                        name="search"
                        value="{{ request('search') }}"
                        placeholder="Cari Barang..."
                        class="w-full px-4 py-2 rounded-lg border border-gray-200 focus:outline-none focus:ring-2 focus:ring-emerald-300"
                        autocomplete="off"
                    >

                    <!-- Button -->
                    <button
                        type="submit"
                        class="w-full md:w-auto bg-emerald-500 hover:bg-emerald-600 text-white px-5 py-2 rounded-lg transition"
                    >
                        Cari
                    </button>

                </form>

            </div>

            <div>
                {{-- Filter Category --}}
                <div class="flex flex-wrap gap-2 mb-5">
                    {{-- Semua --}}
                    <a href="/items" class="px-4 py-2 rounded-full text-sm transition {{ request('category') == null ? 'bg-emerald-500 text-white' : 'bg-gray-100 text-gray-600 hover:bg-gray-200 text-center' }}">
                        Semua
                    </a>

                    @foreach ($categories as $category)
                        <a href="/items?category={{ $category->id }}" class="px-4 py-2 rounded-full text-sm transition {{ request('category') == $category->id ? 'bg-blue-500 text-white' : 'bg-gray-100 text-gray-600 hover:bg-gray-200' }}">
                            {{ $category->name }}
                        </a>
                    @endforeach
                </div>

                <div class="filter-data flex flex-col sm:flex-row gap-3 mb-5">
                    <form action="/items" method="GET" class="w-full sm-w-auto">
                        <select name="sort" onchange="this.form.submit()" class="w-full sm:w-56 rounded-lg border-gray-200 text-sm focus:ring-2 focus:ring-emerald-300" placeholder="Urut Berdasarkan">
                            <option value="" disabled>Urut Berdasarkan</option>
                            <option value="latest" {{ request('sort') == 'latest' ? 'selected' : '' }}>
                                Tanggal Terbaru
                            </option>
                            <option value="oldest" {{ request('sort') == 'oldest' ? 'selected' : '' }}>
                                Tanggal Terlama
                            </option>
                        </select>
                    </form>

                    <a href="/items/export/pdf" class="w-full sm-w-auto">
                    <x-button class="w-full sm:w-auto bg-slate-700 hover:bg-slate-800">
                        Export PDF
                    </x-button>
                </a>
                </div>
            </div>

            <!-- Table Card -->
            <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">

                <div class="overflow-x-auto">
                    <x-table class="min-w-[900px]">
                        
                        <!-- Head -->
                        <thead class="bg-emerald-50 text-gray-600 text-sm md:text-base">
                            <tr>
                                <th class="px-3 md:px-6 py-3 font-medium">Nama</th>
                                <th class="px-6 py-3 font-medium">Kategori</th>
                                <th class="px-5 md:px-6 py-3 font-medium">Stock</th>
                                {{-- <th class="px-3 md:px-6 py-3 font-medium">Harga</th> --}}
                                <th class="px-3 md:px-6 py-3 font-medium">Aksi</th>
                            </tr>
                        </thead>

                        <!-- Body -->
                        <tbody class="text-gray-700 divide-y text-sm md:text-base">
                            @foreach ($items as $item)
                                <tr class="hover:bg-gray-50 transition">
                                    <td class="px-3 md:px-6 py-3 md:py-4">
                                        <span class="text-[11px] text-red-500 block">
                                            {{ $item->created_at->format('d M Y') }}
                                        </span>

                                        <span class="text-[11px] text-gray-400 block">
                                            {{ $item->created_at->format('H:i') }}
                                        </span>
                                        {{ $item->name }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $item->category->name ?? '-' }}
                                    </td>
                                    <td class="px-3 md:px-6 py-3 md:py-4">
                                        {{-- Stock Barang Kosong --}}
                                        @if ($item->stock == 0)
                                            <span class="bg-gray-200 text-gray-700 px-3 py-1 rounded-full text-sm font-medium whitespace-nowrap inline-block">
                                            ❌ Barang Kosong
                                            </span>

                                        {{-- Hampir Habis --}}
                                        @elseif($item->stock <= 5)
                                            <span class="bg-red-100 text-red-600 px-3 py-1 rounded-full text-sm font-medium whitespace-nowrap inline-block">
                                                ⚠ {{ $item->stock }} Hampir Habis
                                            </span>

                                        {{-- Aman --}}
                                        @else
                                            <span class="bg-green-100 text-green-600 px-3 py-1 rounded-full text-sm font-medium whitespace-nowrap inline-block">
                                                ✅ {{ $item->stock }} Stock Aman
                                            </span>

                                        @endif
                                    </td>
                                    {{-- <td class="px-3 md:px-6 py-3 md:py-4 whitespace-nowrap inline-block">Rp {{ number_format($item->price, 0, ',', '.') }}</td> --}}
                                    <td class="px-3 md:px-6 py-3 md:py-4">
                                        
                                        <div class="flex flex-wrap gap-2">
                                            
                                            <!-- Edit -->
                                            <a href="/items/{{ $item->id }}/update"
                                            class="text-sm bg-yellow-500 px-3 py-2 rounded text-white hover:bg-yellow-600 text-center">
                                                Edit
                                            </a>

                                            <!-- Delete -->
                                            <form action="/items/{{ $item->id }}" method="POST" class="w-full sm:w-auto">
                                                @csrf
                                                @method('DELETE')
                                                <x-button class="bg-red-500 hover:bg-red-600 w-full sm:w-auto">Hapus</x-button>
                                            </form>

                                            <!-- Detail -->
                                            <a href="{{ route('items.show', $item->id) }}" class="w-full sm:w-auto">
                                                <x-button class="w-full sm:w-auto">Detail</x-button>
                                            </a>

                                        </div>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>

                    </x-table>
                </div>

                <!-- Pagination -->
                    <div class="mt-6 mb-4 flex justify-center">

                        <div class="bg-white border border-gray-100 shadow-sm rounded-2xl px-4 py-3 overflow-x-auto">
                            {{ $items->links() }}
                        </div>

                    </div>

            </div>

        </div>
    </main>
</x-layout>
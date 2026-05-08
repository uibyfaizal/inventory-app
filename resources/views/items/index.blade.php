<x-layout>
    <x-navbar></x-navbar>

    <div class="max-w-5xl mx-auto py-6 md:py-10 px-3 md:px-4">

        @if (session('success'))
            <div id="alertBox" class="flex justify-between items-center bg-green-100 text-green-700 p-3 rounded mb-4 text-sm md:text-base">
                <span>{{ session('success') }}</span>

                <a href="#" onclick="document.getElementById('alertBox').style.display='none'">
                    ✖
                </a>
            </div>
        @endif
        
        <!-- Header -->
        <div class="flex flex-col md:flex-row md:justify-between md:items-center gap-4 mb-4">
            <div>
                <h1 class="text-xl md:text-2xl font-bold pb-2 md:pb-4">📦 Gudang Keseluruhan Barang</h1>
                <a href="/">
                    <x-button>Back to Landing Page</x-button>
                </a>
            </div>

            <a href="/items/create" class="w-full md:w-auto">
                <x-button class="w-full md:w-auto">+ Tambah Barang Masuk</x-button>
            </a>
        </div>

        {{-- Filter Category --}}
        <div class="flex flex-wrap gap-2 mb-5">
            {{-- Semua --}}
            <a href="/items" class="px-4 py-2 rounded-full text-sm transition {{ request('category') == null ? 'bg-blue-500 text-white' : 'bg-gray-100 text-gray-600 hover:bg-gray-200 text-center' }}">
                Semua
            </a>

            @foreach ($categories as $category)
                <a href="/items?category={{ $category->id }}" class="px-4 py-2 rounded-full text-sm transition {{ request('category') == $category->id ? 'bg-blue-500 text-white' : 'bg-gray-100 text-gray-600 hover:bg-gray-200' }}">
                    {{ $category->name }}
                </a>
            @endforeach
        </div>

        <!-- Table Card -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">

            <div class="overflow-x-auto">
                <x-table class="min-w-[600px]">
                    
                    <!-- Head -->
                    <thead class="bg-gray-50 text-gray-600 text-sm md:text-base">
                        <tr>
                            <th class="px-3 md:px-6 py-3 font-medium">Nama</th>
                            <th class="px-6 py-3 font-medium">Kategori</th>
                            <th class="px-3 md:px-6 py-3 font-medium">Stock</th>
                            <th class="px-3 md:px-6 py-3 font-medium">Harga</th>
                            <th class="px-3 md:px-6 py-3 font-medium">Aksi</th>
                        </tr>
                    </thead>

                    <!-- Body -->
                    <tbody class="text-gray-700 divide-y text-sm md:text-base">
                        @foreach ($items as $item)
                            <tr class="hover:bg-gray-50 transition">
                                <td class="px-3 md:px-6 py-3 md:py-4">{{ $item->name }}</td>
                                <td class="px-6 py-4">
                                    {{ $item->category->name ?? '-' }}
                                </td>
                                <td class="px-3 md:px-6 py-3 md:py-4">{{ $item->stock }}</td>
                                <td class="px-3 md:px-6 py-3 md:py-4">Rp {{ number_format($item->price, 0, ',', '.') }}</td>
                                <td class="px-3 md:px-6 py-3 md:py-4">
                                    
                                    <div class="flex flex-col sm:flex-row gap-2">
                                        
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

        </div>

    </div>
</x-layout>